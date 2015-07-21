<?php
include_once("geshi.php");

if (file_exists("/home/sites/kxstudio.linuxaudio.org/docroot/paste/")) {
    $server_dir   = "/paste/";
    $base_dir     = "/home/sites/kxstudio.linuxaudio.org/docroot/paste/";
} else if (file_exists("/var/www/kxstudio/paste/")) {
    $server_dir   = "/paste/";
    $base_dir     = "/var/www/kxstudio/paste/";
} else {
    $server_dir   = "/paste/";
    $base_dir     = "/home/groups/k/kx/kxstudio/htdocs/paste/";
}

$show_paste   = FALSE;
$show_numbers = FALSE;
$is_error     = FALSE;

if (! empty($_GET["id"]))
{
    $paste_id   = htmlspecialchars($_GET["id"]);
    $show_paste = TRUE;

    $paste_file = $base_dir . "raw/" . $paste_id;

    if (! file_exists($paste_file)) {
        $is_error = TRUE;
    }

    $paste_info = $base_dir . "raw/" . $paste_id . ".inc";

    // default values
    $paste_name    = "";
    $paste_format  = "";
    $paste_numbers = "";

    if (file_exists($paste_info)) {
        include_once($paste_info);
    }

    $show_numbers = ($paste_numbers == "Yes");
}
else if (! empty($_POST["paste_text"]))
{
    if ($_POST["paste_misc"]) {
        die("Spam bot detected, get out of here!");
    }

    $paste_code   = $_POST["paste_text"];
    $paste_format = $_POST["paste_format"];
    $paste_name   = htmlspecialchars($_POST["paste_title"]);

    if (array_key_exists("paste_numbers", $_POST)) {
        $paste_numbers = $_POST["paste_numbers"];
    } else {
        $paste_numbers = "No";
    }

    $paste_id   = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',5)),0,5);
    $paste_file = $base_dir . "raw/" . $paste_id;

    while (file_exists($paste_file)) {
        $paste_id   = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',5)),0,5);
        $paste_file = $base_dir . "raw/" . $paste_id;
    }

    $fp = fopen($paste_file, 'w');

    if ($fp) {
        fwrite($fp, $paste_code);
        fclose($fp);
    } else {
        $paste_file = "_error";
        $is_error   = TRUE;
    }

    $paste_info = $base_dir . "raw/" . $paste_id . ".inc";

    $paste_info_content  = "<?php\n";
    $paste_info_content .= "\$paste_name    = \"$paste_name\";\n";
    $paste_info_content .= "\$paste_format  = \"$paste_format\";\n";
    $paste_info_content .= "\$paste_numbers = \"$paste_numbers\";\n";
    $paste_info_content .= "?>\n";

    $fp = fopen($paste_info, 'w');

    if ($fp) {
        fwrite($fp, $paste_info_content);
        fclose($fp);
    }

    $show_paste   = TRUE;
    $show_numbers = ($paste_numbers == "Yes");

    header("Location: " . $server_dir . $paste_id);
}

$PAGE_TITLE = "KXStudio Paste";
$PAGE_TYPE  = "PASTE";

if (! empty($paste_name))
    $PAGE_TITLE = "KXStudio Paste - " . $paste_name;

$PAGE_SOURCE_1 = ARRAY("/paste");
$PAGE_SOURCE_2 = ARRAY("Paste");
include_once("../includes/header.php");
?>

<?php
if ($show_paste)
{
    $file_path = $base_dir . "raw/" . $paste_id;

    if (file_exists($file_path))
    {
        if ($is_error) {
            $paste_data = file_get_contents($file_path);
        } else {
            $geshi = new GeSHi(file_get_contents($file_path), $paste_format);
            $geshi->enable_classes();
            $geshi->set_header_type(GESHI_HEADER_NONE);
            if ($show_numbers)
                $geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);
            $paste_data = $geshi->parse_code();
        }
?>
                        <p><?php echo $paste_data; ?></p>
<?php
    }
    else
    {
?>
        <p style="color: #CF2525; font-size: 20px;">Invalid Paste ID</p><br/>
<?php
    }
}
else // $show_paste
{
?>
        <form enctype="multipart/form-data" method="post" action="" onsubmit="document.getElementById('paste_submit').disabled=true;document.getElementById('paste_submit').value='Please wait...';">
            <div class="paste_textarea_border">
                <textarea name="paste_text" id="paste_text" rows="1" cols="1"></textarea>
            </div>
            <br/>

            <table>
                <tr><td align="right">Syntax Highlighting:</td><td>
                    <select name="paste_format" id="paste_format">
                        <option value="none" selected="selected">None</option>
                        <option value="6502acme">6502 ACME Cross Assembler</option>
                        <option value="6502kickass">6502 Kick Assembler</option>
                        <option value="6502tasm">6502 TASM/64TASS</option>
                        <option value="abap">ABAP</option>
                        <option value="actionscript">ActionScript</option>
                        <option value="ada">Ada</option>
                        <option value="apache">Apache Log</option>
                        <option value="asm">ASM (NASM)</option>
                        <option value="asp">ASP</option>
                        <option value="bash">Bash</option>
                        <option value="bf">BrainFuck</option>
                        <option value="c">C</option>
                        <option value="c_mac">C for Macs</option>
                        <option value="csharp">C#</option>
                        <option value="cpp">C++</option>
                        <option value="caddcl">CAD DCL</option>
                        <option value="cadlisp">CAD Lisp</option>
                        <option value="cfdg">CFDG</option>
                        <option value="klonec">Clone C</option>
                        <option value="klonecpp">Clone C++</option>
                        <option value="css">CSS</option>
                        <option value="d">D</option>
                        <option value="delphi">Delphi</option>
                        <option value="diff">Diff</option>
                        <option value="gdb">GDB</option>
                        <option value="genero">Genero</option>
                        <option value="gettext">GetText</option>
                        <option value="groovy">Groovy</option>
                        <option value="haskell">Haskell</option>
                        <option value="html4strict">HTML</option>
                        <option value="java">Java</option>
                        <option value="javascript">JavaScript</option>
                        <option value="jquery">jQuery</option>
                        <option value="latex">Latex</option>
                        <option value="lisp">Lisp</option>
                        <option value="lua">Lua</option>
                        <option value="matlab">MatLab</option>
                        <option value="mpasm">MPASM</option>
                        <option value="mysql">MySQL</option>
                        <option value="nsis">NullSoft Installer</option>
                        <option value="objc">Objective C</option>
                        <option value="oobas">Openoffice BASIC</option>
                        <option value="oracle8">Oracle 8</option>
                        <option value="oracle10">Oracle 10</option>
                        <option value="pascal">Pascal</option>
                        <option value="perl">Perl</option>
                        <option value="php">PHP</option>
                        <option value="povray">POV-Ray</option>
                        <option value="prolog">Prolog</option>
                        <option value="providex">ProvideX</option>
                        <option value="python">Python</option>
                        <option value="qbasic">QBasic</option>
                        <option value="reg">REG</option>
                        <option value="ruby">Ruby</option>
                        <option value="sas">SAS</option>
                        <option value="scala">Scala</option>
                        <option value="scheme">Scheme</option>
                        <option value="scilab">Scilab</option>
                        <option value="sdlbasic">SdlBasic</option>
                        <option value="smalltalk">Smalltalk</option>
                        <option value="smarty">Smarty</option>
                        <option value="tcl">TCL</option>
                        <option value="vbnet">VB.NET</option>
                        <option value="vb">VisualBasic</option>
                        <option value="whitespace">WhiteSpace</option>
                        <option value="xml">XML</option>
                        <option value="z80">Z80 Assembler</option>
                    </select>
                </td></tr>

                <tr><td align="right">Paste Name / Title:</td><td>
                    <input type="text" name="paste_title" id="paste_title" />
                    <input type="text" name="paste_misc" id="paste_misc" style="visibility: hidden;" />
                </td></tr>

                <tr><td align="right">
                    <input type="checkbox" name="paste_numbers" id="paste_numbers" value="Yes"/>
                </td><td>
                    Show line numbers
                </td></tr>

                <tr><td></td><td>
                    <input type="submit" name="paste_submit" id="paste_submit" value="Submit" />
                </td></tr>

            </table>
        </form>
        <br/>
<?php
} // $show_paste
?>

<?php
include_once("../includes/footer.php");
?>
