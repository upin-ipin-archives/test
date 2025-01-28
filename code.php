<?php
    if (function_exists('shell_exec')) {
        echo "shell_exec() is available";
    } else {
        echo "shell_exec() is disabled";
    }
?>
