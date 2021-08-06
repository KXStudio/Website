<?php
$PAGE_TITLE    = "KXStudio : Board";
$PAGE_TYPE     = "BOARD";
$PAGE_SOURCE_1 = ARRAY("/Board");
$PAGE_SOURCE_2 = ARRAY("Board");
include_once("includes/header.php");
?>

<div id="board-colors">
    <p>
        <b>Color mapping:</b>
    </p>
    <ul>
        <li class="board-color">
            <div style="background-color:rgba(255, 187, 187, 0.9);border:1px solid rgba(255, 151, 151, 0.2);">
            </div>
            <span>Bug fixing</span>
        </li>
        <li class="board-color">
            <div style="background-color:rgb(255,172,98);border:1px solid rgb(255,172,98);">
            </div>
            <span>Write up / Releases</span>
        </li>
        <li class="board-color">
            <div style="background-color:rgba(245, 247, 196, 0.9);border:1px solid rgba(223, 227, 45, 0.2);">
            </div>
            <span>Packaging</span>
        </li>
        <li class="board-color">
            <div style="background-color:rgba(189, 244, 203, 0.9);border:1px solid rgba(74, 227, 113, 0.2);">
            </div>
            <span>Easy or quick tasks</span>
        </li>
        <li class="board-color">
            <div style="background-color:rgba(219, 235, 255, 0.9);border:1px solid rgba(168, 207, 255, 0.2);">
            </div>
            <span>Regular tasks</span>
        </li>
        <li class="board-color">
            <div style="background-color:rgba(223, 176, 255, 0.9);border:1px solid rgba(205, 133, 254, 0.2);">
            </div>
            <span>New projects / long tasks</span>
        </li>
    </ul>
</div>

<script type="text/javascript">
function resizeIframe() {
    var board = document.getElementById("iframe-board");

    window.addEventListener("message", function(event) {
        if (event.origin !== "https://board.kx.studio")
            return;
        var height = parseInt(event.data);
        board.style.height = height + "px";
    }, false);

    board.contentWindow.postMessage("hi", "https://board.kx.studio/");
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
    style="display:block;width:100%;min-height:300px;height:100%;border:none;padding:0;margin:0;"
    onload="resizeIframe()"
/>

<?php
include_once("includes/footer.php");
?>
