<?php
header("Content-Type: text/plain");
echo shell_exec('touch /tmp/nice.txt');
?>
hello
