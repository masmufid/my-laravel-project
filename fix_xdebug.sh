#!/bin/bash
# Script to fix the Xdebug loading issue by commenting out the problematic line in php.ini

# Define file paths
PHP_INI_PATH="/home/iccserver/.config/herd-lite/bin/php.ini"
BACKUP_PATH="/home/iccserver/.config/herd-lite/bin/php.ini.bak"
NEW_CONFIG_PATH="/home/iccserver/.config/herd-lite/bin/php.ini.new"

# Check if php.ini exists
if [ ! -f "$PHP_INI_PATH" ]; then
    echo "Error: PHP configuration file not found at $PHP_INI_PATH"
    exit 1
fi

# Create a backup
if ! cp "$PHP_INI_PATH" "$BACKUP_PATH"; then
    echo "Error: Failed to create backup of php.ini at $BACKUP_PATH"
    exit 1
fi
echo "Backup created at $BACKUP_PATH"

# Replace the xdebug line with a commented version
sed 's/^zend_extension=\/lib\/php\/extensions\/no-debug-non-zts-20240924\/xdebug\.so/;zend_extension=\/lib\/php\/extensions\/no-debug-non-zts-20240924\/xdebug.so ; Commented out to fix loading issue/' "$PHP_INI_PATH" > "$NEW_CONFIG_PATH"

# Check if the modification was successful
if grep -q "^zend_extension=/lib/php/extensions/no-debug-non-zts-20240924/xdebug.so" "$NEW_CONFIG_PATH"; then
    echo "Error: Failed to modify the xdebug line in the configuration file"
    exit 1
fi

echo "Modified configuration created at $NEW_CONFIG_PATH"
echo "To apply the changes, please review the file and then run:"
echo "mv $NEW_CONFIG_PATH $PHP_INI_PATH"
echo "This will replace your current php.ini with the modified version."

