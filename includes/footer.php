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
        </div>
<?php if ($PAGE_TYPE == "HOME") { ?>
        <div class="column grid_3 alpha">
            <div class="box box-shadow alpha clear-both navigation">
                <h2 class="box-header"> <a href="<?php echo $ROOT; ?>/News" style="color: #aaf;">News</a> </h2>
                <a href="<?php echo $ROOT; ?>/News/?action=view&url=new-releases-and-future-plans">
                    <b>New releases and future plans</b><br/>
                </a>
                <p>
                    New KXStudio DVD and Carla releases.<br/>
                    KXStudio repositories moving to Debian.
                </p>
                <hr/>

                <a href="<?php echo $ROOT; ?>/News/?action=view&url=carla-plugin-host-100-released">
                    <b>Carla 1.0.0 released!</b><br/>
                    <img src="<?php echo $ROOT; ?>/screenshots/carla.png" alt="" width="150px"/>
                </a>
                <p>After more than 2 years in development, the first stable release of Carla is now available!</p>
                <hr/>

                <a href="<?php echo $ROOT; ?>/News/?action=view&url=kxstudio-mini-manual">
                    <b>KXStudio Mini-Manual</b>
                </a>
                <p>Thanks for the hard work of danboid and wolftune, the KXStudio "Mini" Manual is now online.</p>
                <hr/>

                <a href="<?php echo $ROOT; ?>/News/?action=view&url=kxstudio-now-on-facebook-and-soundcloud">
                    <b>Facebook and SoundCloud</b>
                </a>
                <p>There's now a Facebook and SoundCloud page for KXStudio.</p>
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
