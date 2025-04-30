<?php
// Script to fix the Xdebug loading issue by commenting out the problematic line in php.ini

// Define file paths
$phpIniPath = '/home/iccserver/.config/herd-lite/bin/php.ini';
$backupPath = '/home/iccserver/.config/herd-lite/bin/php.ini.bak';

// Check if php.ini exists
if (!file_exists($phpIniPath)) {
    die("Error: PHP configuration file not found at $phpIniPath\n");
}

// Create a backup
if (!copy($phpIniPath, $backupPath)) {
    die("Error: Failed to create backup of php.ini at $backupPath\n");
}
echo "Backup created at $backupPath\n";

// Read the file
$content = file_get_contents($phpIniPath);
if ($content === false) {
    die("Error: Failed to read php.ini file\n");
}

// Replace the xdebug line with a commented version
$modified = preg_replace(
    '/^zend_extension=\/lib\/php\/extensions\/no-debug-non-zts-20240924\/xdebug\.so/m', 
    ';zend_extension=/lib/php/extensions/no-debug-non-zts-20240924/xdebug.so ; Commented out to fix loading issue', 
    $content
);

// Check if modification was successful
if ($modified === $content && strpos($content, 'zend_extension=/lib/php/extensions/no-debug-non-zts-20240924/xdebug.so') !== false) {
    die("Error: Failed to modify the xdebug line in the configuration file\n");
}

// Write the modified content to a new file for safety
$newConfigPath = '/home/iccserver/.config/herd-lite/bin/php.ini.new';
if (file_put_contents($newConfigPath, $modified) === false) {
    die("Error: Failed to write the modified configuration to $newConfigPath\n");
}
echo "Modified configuration created at $newConfigPath\n";
echo "To apply the changes, please review the file and then run:\n";
echo "mv $newConfigPath $phpIniPath\n";
echo "This will replace your current php.ini with the modified version.\n";
?>

