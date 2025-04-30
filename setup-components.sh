#!/bin/bash

# Create directory structure if it doesn't exist
mkdir -p app/View/Components
mkdir -p resources/views/components

# Move the existing layout file to the proper location
if [ -f "resources/views/Components/layout.blade.php" ]; then
    # The file already exists at the source, now we move it
    mv resources/views/Components/layout.blade.php resources/views/components/layout.blade.php 2>/dev/null
fi

# Check if the Components directory is empty and remove it if so
if [ -d "resources/views/Components" ] && [ -z "$(ls -A resources/views/Components)" ]; then
    rmdir resources/views/Components
fi

echo "Component directory structure has been fixed."
echo "Layout component class created at app/View/Components/Layout.php"
echo "Blade component view placed at resources/views/components/layout.blade.php"
echo ""
echo "Run 'php artisan optimize:clear' to clear cached views and routes"

