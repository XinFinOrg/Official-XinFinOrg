<?php
//make sure to make the shell file executeable first before running the shell_exec function
$output = shell_exec('git pull origin master');
echo $output;
?>
