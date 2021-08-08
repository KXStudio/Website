<?php
$PAGE_TITLE    = "KXStudio : Development Timeline";
$PAGE_TYPE     = "DEVELOPMENT";
$PAGE_SOURCE_1 = ARRAY("/Development");
$PAGE_SOURCE_2 = ARRAY("Development Timeline");
include_once("includes/header.php");
require_once("/home/falktx/bin/simplepie/SimplePie.compiled.php");
?>

<?php
function print_sha8($id) {
    $id = strstr($id, '/');
    echo substr($id, 1, 9);
}
function print_feed_title($title) {
    $title = strstr($title, ':', true);
    echo strrchr($title, ' ');
}

$feed = new SimplePie();
$feed->set_cache_location("/home/falktx/bin/simplepie/cache");
$feed->set_feed_url(ARRAY(
    'https://github.com/DISTRHO/DISTRHO-Ports/PawPaw/commits/master.atom',
    'https://github.com/DISTRHO/DISTRHO-Ports-Extra/PawPaw/commits/master.atom',
    'https://github.com/DISTRHO/DPF/commits/develop.atom',
    'https://github.com/DISTRHO/DPF-Max-Gen/PawPaw/commits/master.atom',
    'https://github.com/DISTRHO/DPF-Plugins/commits/master.atom',
    'https://github.com/DISTRHO/DPF-Widgets/commits/main.atom',
    'https://github.com/DISTRHO/glBars/PawPaw/commits/master.atom',
    'https://github.com/DISTRHO/JuicePlugins/PawPaw/commits/master.atom',
    'https://github.com/DISTRHO/Kars/PawPaw/commits/master.atom',
    'https://github.com/DISTRHO/Mini-Series/PawPaw/commits/master.atom',
    'https://github.com/DISTRHO/MVerb/PawPaw/commits/master.atom',
    'https://github.com/DISTRHO/ndc-Plugs/PawPaw/commits/master.atom',
    'https://github.com/DISTRHO/OneKnob-Series/commits/main.atom',
    'https://github.com/DISTRHO/ProM/PawPaw/commits/master.atom',
    'https://github.com/DISTRHO/STK-Plugins/PawPaw/commits/master.atom',
    'https://github.com/DISTRHO/Website/PawPaw/commits/master.atom',
    'https://github.com/DISTRHO/PawPaw/commits/master.atom',
    'https://github.com/falkTX/Cadence/commits/master.atom',
    'https://github.com/falkTX/Cadence-Tools/commits/master.atom',
    'https://github.com/falkTX/Carla/commits/main.atom',
    'https://github.com/falkTX/Carla-Manual/commits/master.atom',
    'https://github.com/falkTX/Carla-Plugins/commits/master.atom',
    'https://github.com/falkTX/Carla-Releases/commits/main.atom',
    'https://github.com/falkTX/Catia/commits/master.atom',
    'https://github.com/falkTX/Chibi/commits/master.atom',
    'https://github.com/falkTX/drmr/commits/lv2unstable.atom',
    'https://github.com/falkTX/FluidPlug/commits/master.atom',
    'https://github.com/falkTX/Hylia/commits/master.atom',
    'https://github.com/falkTX/JackAss/commits/master.atom',
    'https://github.com/falkTX/jack_interposer/commits/master.atom',
    'https://github.com/falkTX/kuriborosu/commits/main.atom',
    'https://github.com/falkTX/lv2vst/commits/master.atom',
    'https://github.com/falkTX/protrekkr/commits/master.atom',
    'https://github.com/jackaudio/jack2/commits/master.atom',
    'https://github.com/jackaudio/jack2-releases/commits/master.atom',
));
$feed->init(); // or die($feed->error());
$feed->handle_content_type();

$lastdate = null;

foreach ($feed->get_items() as $item):
    $date = $item->get_gmdate('Y-m-d');
    if ($lastdate != $date)
    {
        if ($lastdate != null) { ?>  <hr/> <?php }
        $lastdate = $date;
?>
<h3 id="<?php echo $date ?>"># <a href="#<?php echo $date ?>"><?php echo $item->get_gmdate('F j, Y') ?></a></h3>
<?php
    }
?>

<div class="changeset">
    <p>
        At
        <i><?php echo $item->get_gmdate('g:i a'); ?></i>
        by
        <b><a href="<?php echo $item->get_author()->get_link(); ?>" target="_blank">
            <?php echo $item->get_author()->get_name(); ?></a></b>
        <a href="<?php echo $item->get_permalink(); ?>">
            [<?php print_sha8($item->get_id()); ?>]</a>
        <!-- <?php echo $item->get_title(); ?></a> -->
        in
        <b><?php print_feed_title($item->get_feed()->get_title()); ?></b>
<?php
        $content = $item->get_content(true);
        if ($content) { ?>
        <br/>
        <?php echo $content; 
        } ?>
    </p>
</div>

<?php
endforeach;
include_once("includes/footer.php");
?>
