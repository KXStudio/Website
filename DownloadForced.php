<?php

die('Not allowed');

function downloadFile($dlFile, $dlSize) {
    // Must be fresh start
    if (headers_sent())
        die('Headers Sent');

    // Required for some browsers
    if (ini_get('zlib.output_compression'))
        ini_set('zlib.output_compression', 'Off');

    header("Pragma: public"); // required
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private", false); // required for certain browsers
    header("Content-Type: application/force-download");
    header("Content-Disposition: attachment; filename=\"" . basename($dlFile) . "\";" );
    header("Content-Transfer-Encoding: binary");
    header("Content-Length: " . $dlSize);
    ob_clean();
    flush();
    readfile($dlFile);
}

if (! (empty($_GET["file"]) || empty($_GET["size"]))) {
    $dlFile = htmlspecialchars($_GET["file"]);
    $dlSize = htmlspecialchars($_GET["size"]);

    downloadFile($dlFile, $dlSize);
}

?>
