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
                    <li><a href="#LiveDVD">Live-DVD</a></li>
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
                <a href="<?php echo $ROOT; ?>/News/?action=view&url=changes-in-kxstudio-repositories">
                    <b>Changes in KXStudio repositories</b><br/>
                </a>
                <p>
                    SHA1 keys issue fix coming soon.<br/>
                    Qt5 audio packages coming afterwards.
                </p>
                <hr/>

                <a href="<?php echo $ROOT; ?>/News/?action=view&url=kxstudio-website-has-moved">
                    <b>KXStudio Website has moved</b><br/>
                </a>
                <p>
                    You can now find the KXStudio website at <a href="http://kxstudio.linuxaudio.org/">
                        kxstudio.linuxaudio.org.</a><br/>
                    Also the KXStudio repositories have do not use sourceforge anymore.
                </p>
                <hr/>

                <a href="<?php echo $ROOT; ?>/News/?action=view&url=carla-20-beta4-is-here">
                    <b>Carla 2.0-beta4 is finally out!</b><br/>
                    <img src="<?php echo $ROOT; ?>/screenshots/carla.png" alt="" width="150px"/>
                </a>
                <p>
                     The 4th beta of the upcoming Carla 2.0 release.
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
