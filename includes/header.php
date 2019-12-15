<?php
$SHOW_NOTE = FALSE;
$ROOT = "";

if (file_exists("/home/falktx/.jackdrc") || file_exists("/home/daeavelwyn/public_html/kxstudio/"))
{
    $ROOT = "/kxstudio";
    $SHOW_NOTE = FALSE;
}

if (false && $PAGE_TYPE != "PASTE" && $PAGE_TYPE != "DONATIONS" && $PAGE_TYPE != "NAMESPACE") {
    require "donate/config.php";
    require "donate/connect.php";

    $cur_amount  = 0.0;
    $cur_percent = 0.0;

    if ($db_link) {
        $sql_donations = mysqli_query($db_link, "SELECT * FROM donations WHERE MONTH(dt) = MONTH(NOW()) AND YEAR(dt) = YEAR(NOW())");

        if (mysqli_num_rows($sql_donations)) {
            while ($sql_row = mysqli_fetch_assoc($sql_donations)) {
                $cur_amount += $sql_row["amount"];
            }
        }

        $cur_percent = $cur_amount / 500.0 * 100.0;
        $cur_amount  = intval($cur_amount);

        if ($cur_percent > 100.0) {
            $cur_percent = 100.0;
        }
    }
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

    <link rel="copyright" href="https://creativecommons.org/publicdomain/zero/1.0/" />
    <link rel="stylesheet" href="/css/style.fluid.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />
    <link rel="icon" type="image/png" href="/images/ico_kxstudio.png" />
    <link rel="shortcut icon" href="/favicon.ico" />
<?php if ($PAGE_TYPE == "DONATIONS") { ?>
    <style type="text/css">
        html > body .liberapay-btn {
            background-color: #f6c915;
            border-radius: 4px;
            color: #1a171b;
            display: inline-block;
            font-family: Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
            font-weight: 700;
            line-height: 22px;
            padding: 5px 7px 3px;
            position: relative;
            text-decoration: none;
        }
        html > body .liberapay-btn:hover {
            background-color: #fbce1a;
            color: #444;
        }
        .liberapay-btn > svg {
            position: absolute;
            left: 7px;
            top: 7px;
        }
        .liberapay-btn > span {
            margin-left: 19px;
        }
    </style>
<?php } else if ($PAGE_TYPE == "PASTE") { ?>
    <link rel="stylesheet" href="/paste/kxstudio.css" type="text/css" media="screen" />
    <!-- Special Paste CSS -->
    <style type="text/css">
        html, body {
            color: white;
        }
        .paste_textarea_border {
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
<?php } else if ($PAGE_TYPE == "REPOSITORY_PACKAGES") { ?>
    <!-- Special Repository Packages CSS -->
    <style type="text/css">
        .repository-package-list {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
        .repository-package {
            display: flex;
            flex-direction: row;
            margin: 15px;
            width: 485px;
            line-height: 1.25em;
            /* max-width: calc(92% / 3 - 32px); */
        }
        .repository-package > div:first-child {
            padding-top: calc(0.5em + 0.5px);
        }
        tr {
            vertical-align: top;
        }
        tr > td:first-child {
            font-weight: lighter;
            white-space: nowrap;
        }
        tbody > tr:first-child > td:last-child {
            font-weight: bold;
        }
        .img_clickable:hover {
            cursor: pointer;
        }
        .img_clickable:active > .img_clickable_overlay {
            display: block;
        }
        .img_clickable_overlay {
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            min-height: 100%;
            background-color: black;
            background-color: rgba(11, 11, 11, 0.75);
            z-index: 1;
            display: none;
        }
        .img_clickable_overlay:active {
            display: none !important;
        }
        .img_clickable_overlay:hover {
            cursor: initial;
            display: block;
        }
        .img_clickable_overlay > img {
            /*
            display: block;
            margin: 0 auto;
            */
            margin: auto;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            max-width: 100%;
            max-height: 100%;
        }
    </style>
<?php } ?>
</head>

<body class="mediawiki ltr ns-0 ns-subject skin-bentofluid">
    <!-- Top link -->
    <a name="Top" id="Top"></a>

    <!-- Start: Header -->
    <div id="header">
        <div id="header-content" class="container_12">
            <a id="header-logo" href="/">
                <img src="/images/header-logo_mod.png" width="46" height="26" alt="Header Logo"/>
            </a>
            <a id="header-home" href="/">Home</a>
            <ul id="global-navigation">
                <li id="item-news"><a href="/News">News</a></li>
                <li id="item-soft" class="item-menu">
                    <a href="/Applications">Software &#9660;</a>
                    <div class="item-menu-children">
                        <p><a href="/Applications"><img src="/images/ico_cadence.png" alt=""/> &nbsp; Applications</a></p>
                        <p><a href="/Plugins"><img src="/images/ico_distrho.png" alt=""/> &nbsp; Plugins</a></p>
                    </div>
                </li>
                <li id="item-repos" class="item-menu">
                    <a href="/Repositories">Repositories &#9660;</a>
                    <div class="item-menu-children">
                        <p><a href="/Repositories">About / How-to</a></p>
                        <p><a href="/Repositories:Applications">Applications (in Repo)</a></p>
                        <p><a href="/Repositories:Plugins">Plugins (in Repo)</a></p>
                        <p><a href="/Repositories:FAQ">FAQ</a></p>
                    </div>
                </li>
                <li id="item-community" class="item-menu">
                    <a href="/Documentation">Community &#9660;</a>
                    <div class="item-menu-children">
                        <p>
                            <a href="https://webchat.freenode.net/?channels=#kxstudio,#opensourcemusicians" class="external" rel="nofollow" target="_blank">
                                <img src="/images/ico_chat.png" width="16px" height="16px" alt=""/> &nbsp; IRC Channel
                            </a>
                        </p>
                        <p>
                            <a href="https://chat.kx.studio/" class="external" rel="nofollow" target="_blank">
                                <img src="/images/ico_rocketchat.png" width="16px" height="16px" alt=""/> &nbsp; Rocket Chat
                            </a>
                        </p>
                        <p>
                            <a href="https://soundcloud.com/search/sounds?q=kxstudio" class="external" rel="nofollow" target="_blank">
                                <img src="/images/ico_soundcloud.png" width="16px" height="16px" alt=""/> &nbsp; Songs
                            </a>
                        </p>
                    </div>
                </li>
                <li id="item-documentation"><a href="/Documentation">Documentation</a></li>
                <li id="item-donate"><a href="/Donations">Donations</a></li>
                <li id="item-downloads"><a href="/Downloads">Downloads</a></li>
                <li id="item-paste"><a href="/Paste">Paste</a></li>
            </ul>
        </div>
    </div>
    <!-- End: Header -->

<?php if (false && $PAGE_TYPE != "DONATIONS" && $db_link) { ?>
    <div id="donations_container" style="position:absolute; top:40px; right:5%; width: 250px; height: 10px; font-size: 0.8em;">
        <div id="donations_bar"><div style="width:<?php print_r($cur_percent); ?>%"></div></div>
    </div>
    <div style="position:absolute; top:44px; right:5%; width: 270px; height: 10px; font-size: 0.8em; text-align: center;">
        This month donations: <?php print_r($cur_amount); ?> / 500 &euro;
    </div>
<?php } ?>

    <div id="subheader" class="container_16">
        <div id="breadcrump" class="grid_12 alpha">
            <a href="/" title="Home"><img src="/images/home_grey.png" width="16" height="16" alt="Home" /> KXStudio </a>
<?php       for ($i = 0; $i < count($PAGE_SOURCE_1); $i++) { ?>
                &gt; <a href="<?php echo $ROOT . $PAGE_SOURCE_1[$i]; ?>"><?php echo $PAGE_SOURCE_2[$i]; ?></a>
<?php       } ?>
        </div>
    </div>

    <!-- Start: Main Content Area -->
    <div id="content" class="container_16 content-wrapper">
        <div id="some-content" class="box box-shadow grid_77 clearfix">
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
                    <li><a href="#Binaries">Binaries</a></li>
                    <li><a href="#SourceCode">Source Code</a></li>
                    <li><a href="#Artwork">Artwork</a></li>
<?php } else if ($PAGE_TYPE == "PASTE") { ?>
                    <li><a href="/Paste" title="Create new paste">New Paste</a></li>
    <?php if ($show_paste && ! $is_error) { ?>
                    <li><a href="/Paste/raw/<?php echo $paste_id; ?>" target="blank" title="View RAW">View RAW</a></li>
                    <li><a href="/Paste/download.php?id=<?php echo $paste_id; ?>" title="Download">Download</a></li>
    <?php } ?>
<?php } ?>
                </ul>
            </div>
            <div id="contentSub"></div>
            <!-- End: Box header -->
            <div class="alpha omega paste_canvas_area">
<?php if ($PAGE_TYPE == "HOME") { ?>
                <h1><span class="mw-headline"> About KXStudio </span></h1>
<?php } else if ($PAGE_TYPE == "NEWS") { ?>
                <div style="float: right; padding-right: 16px;">
                    <a href="/News/?action=feed"><img src="images/rss.png" alt="RSS"/></a>
                </div>
                <h1 style="margin-top: 0px"><span class="mw-headline"> KXStudio&nbsp;: News </span></h1>
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
    NOTE: The KXStudio project is currently on a break, regular development is expected to return later in 2019.
    Thanks for understanding.
</p>
<?php } ?>
<!-- - - - - - - - Begin Content Area - - - - - - - -->
