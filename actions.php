<?php
// Define the directory of your Git repository
$repo_dir = '/gittest/gittest';

// Define the command you want to execute
$command = 'git pull origin master';

// Change to the repository directory
chdir($repo_dir);

// Execute the command
$output = shell_exec($command);

// Output the result
echo "<pre>$output</pre>";
?>
