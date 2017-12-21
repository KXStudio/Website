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

                <a href="<?php echo $ROOT; ?>/News/?action=view&url=jack2-1912-release-and-future-plans">
                    <b>JACK2 1.9.12 release and future plans</b><br/>
                </a>
                <p>
                    A new version of JACK2 was released, and plans for 2018 defined.
                </p>
                <hr/>

                <a href="<?php echo $ROOT; ?>/News/?action=view&url=breaking-changes-in-carla-plugin-host">
                    <b>Breaking changes in Carla Plugin Host</b><br/>
                </a>
                <p>
                    There were some major changes done to Carla's code base in the past few days...
                </p>
                <hr/>

                <a href="<?php echo $ROOT; ?>/News/?action=view&url=dpf-plugins-v11-released">
                    <b>DPF-Plugins v1.1</b><br/>
                    <img src="<?php echo $ROOT; ?>/screenshots/news/dpf-plugins-1.1.png" alt="" width="150px"/>
                </a>
                <p>
                    With all reported bugs squashed, it's time to tag a new release of DPF-Plugins.<br/>
                </p>
                <hr/>

                <a href="<?php echo $ROOT; ?>/News/?action=view&url=kxstudio-14045-release-and-future-plans">
                    <b>KXStudio 14.04.5 release and future plans</b><br/>
                </a>
                <p>
                    It's time for another KXStudio ISO release!<br/>
                    KXStudio 14.04.5 is here!
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
