<?php
$url = 'https://google.com';
$url = str_replace(array("[", "]", "{", "}"), "", $url);
$content = shell_exec("curl " . escapeshellcmd($url));
if ($content !== false) {
    echo '<iframe srcdoc="' . htmlspecialchars($content) . '" class="white-box fixed-size-iframe" frameborder="0"></iframe>';
} else {
    echo '<img src="https://media.tenor.com/brIDwsDiqtQAAAAi/hololive.gif" alt="Hololive Agent" class="holo-gif">';
}
?>
