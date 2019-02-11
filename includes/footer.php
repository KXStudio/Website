<!-- - - - - - - - End Content Area - - - - - - - -->
            </div>
            <br/>
            <div class="box-footer header-tabs">
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
                    <li><a href="<?php echo $ROOT; ?>/Paste" title="Create new paste">New Paste</a></li>
    <?php if ($show_paste && ! $is_error) { ?>
                    <li><a href="<?php echo $ROOT; ?>/Paste/raw/<?php echo $paste_id; ?>" target="blank" title="View RAW">View RAW</a></li>
                    <li><a href="<?php echo $ROOT; ?>/Paste/download.php?id=<?php echo $paste_id; ?>" title="Download">Download</a></li>
    <?php } ?>
<?php } ?>
                </ul>
            </div>
        </div>
<?php if ($PAGE_TYPE == "HOME") { ?>
        <div class="column grid_3 alpha">
            <div class="box box-shadow alpha clear-both navigation">
                <h2 class="box-header"> <a href="<?php echo $ROOT; ?>/News" style="color: #aaf;">News</a> </h2>

                <a href="<?php echo $ROOT; ?>/News/?action=view&url=cadence-090-release-and-kxstudio-1804-preparations">
                    <b>Carla 2.0 RC1 is here!</b><br/>
                </a>
                <p>
                    The stable 2.0 version of Carla is coming!
                </p>
                <hr/>

                <a href="<?php echo $ROOT; ?>/News/?action=view&url=cadence-090-release-and-kxstudio-1804-preparations">
                    <b>Cadence 0.9.0 and KXStudio 18.04 preparations</b><br/>
                </a>
                <p>
                    Cadence 0.9.0 has just been tagged in git, and preparations for KXStudio 18.04 ISO release have started.
                </p>
                <hr/>

                <a href="<?php echo $ROOT; ?>/News/?action=view&url=carla-20-beta6-is-here">
                    <b>Carla 2.0 beta6</b><br/>
                    <img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta6_jack-apps.png" alt="" width="150px"/>
                </a>
                <p>
                    The last beta for the 2.0 series is here!<br/>
                </p>
                <hr/>

                <a href="<?php echo $ROOT; ?>/News/?action=view&url=jack2-1912-release-and-future-plans">
                    <b>JACK2 1.9.12 release and future plans</b><br/>
                </a>
                <p>
                    A new version of JACK2 is out, and plans for 2018 defined.
                </p>
            </div>
        </div>
<?php } ?>
    </div>
    <!-- End: Main Content Area -->

    <!-- Note: this clears floating, set in previous elements -->
    <div class="clear"></div>
    <div id="footer"></div>
</body>
</html>
