<?php
$PAGE_TITLE    = "KXStudio : Board";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Board");
$PAGE_SOURCE_2 = ARRAY("Board");
include_once("includes/header.php");
?>

<script type="text/javascript">
function resizeIframe()
{
    document.domain = board.kx.studio;
    var board = document.getElementById("iframe-board");
    var height = board.contentWindow.document.body.scrollHeight;
    board.style.height = height;
}
</script>
<noscript>
    <p>
        NOTE: Automatic height only available with JavaScript enabled.
        Visit <a href="https://board.kx.studio/">https://board.kx.studio/</a> for the full page.
    </p>
</noscript>

<iframe
    id="iframe-board"
    src="https://board.kx.studio/public/board/f062a2b1cf34806109a3936a9373b8f044f0e0ab4ede4f1e2bf76195af27"
    style="display:block;width:100%;min-height:300px;height:calc(100% - 30px);border:none;padding:0;margin:0;"
    onload="resizeIframe()"
/>

<?php
include_once("includes/footer.php");
?>
