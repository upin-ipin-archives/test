<?php
    $output = shell_exec('ls');
    echo htmlspecialchars($output);
?>
