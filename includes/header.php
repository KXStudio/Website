<?php
$SHOW_NOTE = TRUE;

/*if (file_exists("/var/www/kxstudio/paste/"))
{
    $ROOT = "/kxstudio";
    $SHOW_NOTE = FALSE;
}
else*/
{
    $ROOT = "";
    $SHOW_NOTE = FALSE;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!--[if lt IE 7]>
    <meta http-equiv="imagetoolbar" content="no" />
    <![endif]-->

    <title><?php echo $PAGE_TITLE; ?></title>

    <link rel="copyright" href="http://creativecommons.org/licenses/publicdomain/" />
    <link rel="stylesheet" href="<?php echo $ROOT; ?>/css/style.fluid.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $ROOT; ?>/css/style.css" type="text/css" media="screen" />
    <link rel="icon" type="image/png" href="<?php echo $ROOT; ?>/images/ico_kxstudio.png" />
    <link rel="shortcut icon" href="<?php echo $ROOT; ?>/favicon.ico" />
<?php if ($PAGE_TYPE == "HOME") { ?>
    <script type="text/javascript" src="includes/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="includes/responsiveslides.min.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $(".rslides").responsiveSlides({
                auto:  true,
                nav:   true,
                pager: false,
                speed: 1000,
                timeout: 7500,
                namespace: "large-btns"
            });
        });
    </script>
<?php } else if ($PAGE_TYPE == "PASTE") { ?>
    <link rel="stylesheet" href="<?php echo $ROOT; ?>/paste/kxstudio.css" type="text/css" media="screen" />
    <!-- Special Paste CSS -->
    <style type="text/css">
        html, body {
            color: white;
        }
        .paste_textarea_border {
            /*width: 100% - 1px;*/
            height: 300px;
            border: 1px solid gray;
        }
<?php if ($show_paste) { ?>
        div .paste_canvas_area {
            font-family: monospace;
        }
<?php } ?>
<?php if ($show_numbers) { ?>
        div .paste_canvas_area {
            padding-left: 10px;
        }
<?php } ?>
        textarea {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            border-width: 0;
            resize: none;
        }
    </style>
<?php } else if ($PAGE_TYPE == "DONATIONS") { ?>
    <script type="text/javascript">
        /* <![CDATA[ */
        (function() {
            var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
            s.type = 'text/javascript';
            s.async = true;
            s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
            t.parentNode.insertBefore(s, t);
        })();
        /* ]]> */
    </script>
<?php } ?>
</head>

<?php if ($PAGE_TYPE == "HOME") { ?>
<body class="mediawiki ltr ns-0 ns-subject skin-bentofluid" style="min-width:1076px">
<?php } else { ?>
<body class="mediawiki ltr ns-0 ns-subject skin-bentofluid">
<?php } ?>
    <a name="Top" id="Top"></a>

    <!-- Start: Header -->
    <div id="header">
        <div id="header-content" class="container_12">
            <a id="header-logo" href="<?php echo $ROOT; ?>/">
                <img src="<?php echo $ROOT; ?>/images/header-logo_mod.png" width="46" height="26" alt="Header Logo"/>
            </a>
            <a id="header-home" href="<?php echo $ROOT; ?>/" style="font-size:1.2em">Home</a>
            <ul id="global-navigation">
                <li id="item-apps"><a href="<?php echo $ROOT; ?>/Applications">Applications</a></li>
                <li id="item-plugins"><a href="<?php echo $ROOT; ?>/Plugins">Plugins</a></li>
                <li id="item-repos"><a href="<?php echo $ROOT; ?>/Repositories">Repositories</a></li>
                <li id="item-documentation"><a href="<?php echo $ROOT; ?>/Documentation">Documentation</a></li>
                <li id="item-donate"><a href="<?php echo $ROOT; ?>/Donations">Donations</a></li>
                <li id="item-downloads"><a href="<?php echo $ROOT; ?>/Downloads">Downloads</a></li>
                <li id="item-paste"><a href="<?php echo $ROOT; ?>/Paste">Paste</a></li>
            </ul>
        </div>
    </div>
    <!-- End: Header -->

<?php if ($PAGE_TYPE == "HOME") { ?>
    <div id="rslides_container">
        <ul class="rslides" id="slider1">
            <li><!--<a href="">--><img src="<?php echo $ROOT; ?>/images/slider-applications.jpg" alt=""/><!--</a>--></li>
            <li><!--<a href="">--><img src="<?php echo $ROOT; ?>/images/slider-distribution.jpg" alt=""/><!--</a>--></li>
            <li><!--<a href="">--><img src="<?php echo $ROOT; ?>/images/slider-plugins.jpg" alt=""/><!--</a>--></li>
        </ul>
    </div>
<?php } else { ?>
    <?php if ($PAGE_TYPE == "PASTE") { ?>
    <a href="http://qbnz.com/highlighter" class="external text" rel="nofollow" target="_blank" style="position:absolute; top:37px; right:5%;"><img src="<?php echo $ROOT; ?>/images/powered-by-geshi.png" alt="Powered by GeSHi"/></a>
    <?php } ?>

    <div id="subheader" class="container_16">
        <div id="breadcrump" class="grid_12 alpha">
            <a href="<?php echo $ROOT; ?>/" title="Home"><img src="<?php echo $ROOT; ?>/images/home_grey.png" width="16" height="16" alt="Home" /> KXStudio </a>
<?php       for ($i = 0; $i < count($PAGE_SOURCE_1); $i++) { ?>
                &gt; <a href="<?php echo $ROOT . $PAGE_SOURCE_1[$i]; ?>"><?php echo $PAGE_SOURCE_2[$i]; ?></a>
<?php       } ?>
        </div>
    </div>
<?php } ?>

    <!-- Start: Main Content Area -->
    <div id="content" class="container_16 content-wrapper">
<?php if ($PAGE_TYPE == "HOME") { ?>
        <div id="some-content" class="box box-shadow grid_13 clearfix">
<?php } else { ?>
        <div id="some-content" class="box box-shadow grid_77 clearfix">
<?php } ?>
            <!-- Start: Box header -->
            <div class="box-header header-tabs">
                <ul>
                    <li><a href="#Top">Top</a></li>
<?php if ($PAGE_TYPE == "APPLICATION") { ?>
                    <li><a href="#Interface">Interface</a></li>
                    <li><a href="#Usage">Usage</a></li>
                    <li><a href="#Download">Download</a></li>
<?php } else if ($PAGE_TYPE == "APPLICATION_NU") { ?>
                    <li><a href="#Interface">Interface</a></li>
                    <li><a href="#Download">Download</a></li>
<?php } else if ($PAGE_TYPE == "DOWNLOADS") { ?>
                    <li><a href="#Artwork">Artwork</a></li>
                    <li><a href="#Binaries">Binaries</a></li>
                    <li><a href="#SourceCode">Source Code</a></li>
                    <li><a href="#LiveDVD">Live-DVD</a></li>
                    <li><a href="#AllDownloads">All Downloads</a></li>
<?php } else if ($PAGE_TYPE == "PASTE") { ?>
                    <li><a href="<?php echo $ROOT; ?>/Paste" title="Create new paste">New Paste</a></li>
    <?php if ($show_paste && ! $is_error) { ?>
                    <li><a href="<?php echo $ROOT; ?>/Paste/repo/<?php echo $paste_id; ?>" target="blank" title="View RAW">View RAW</a></li>
                    <li><a href="<?php echo $ROOT; ?>/Paste/download.php?id=<?php echo $paste_id; ?>" title="Download">Download</a></li>
    <?php } ?>
<?php } ?>
                </ul>
            </div>
            <div id="contentSub"></div>
            <!-- End: Box header -->
            <div class="alpha omega paste_canvas_area">
<?php if ($PAGE_TYPE == "HOME") { ?>
                <h1><span class="mw-headline"> About KXStudio </span></h1>
<?php } else if ($PAGE_TYPE != "PASTE") { ?>
                <h1><span class="mw-headline"> <?php
                        for ($i = 0; $i < count($PAGE_SOURCE_2); $i++)
                        {
                            if ($i == 0)
                            {
                                if ($PAGE_TYPE == "NONKXSTUDIO")
                                {
                                    echo $PAGE_SOURCE_2[$i];
                                    continue;
                                }
                                echo "KXStudio";
                            }

                            echo "&nbsp;: " . $PAGE_SOURCE_2[$i];
                        }
                    ?> </span></h1>
<?php } ?>
<?php if ($PAGE_TYPE != "PASTE" && $SHOW_NOTE) { ?>
<p style="color:#fa3a3a;">
    NOTE: Parts of this website are currently being rewritten, some links might not work at the moment.
</p>
<?php } ?>
<!-- - - - - - - - Begin Content Area - - - - - - - -->
