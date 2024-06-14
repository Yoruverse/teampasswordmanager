<?php

// Set these database parameters before installing Team Password Manager

// MySQL Database server
define('CONFIG_HOSTNAME', 'db');	

// User that accesses the database server, that should have all privileges on the database CONFIG_DATABASE
define('CONFIG_USERNAME', 'tpmuser');
define('CONFIG_PASSWORD', 'tpmpassword');
define('CONFIG_DATABASE', 'teampasswordmanager');

// Default language of the installation.
// The user can change this language.
// Defaults to "en" if not used.
//define('TPM_DEFAULT_LANG', 'en');

// Uploads folder. You can set it in two ways:
// 1. With an absolute path. Example: /var/www/domain/uploads/
// 2. With a relative path (relative to index.php). Example: ./uploads/
// Must be accessible and writable by the web server
// Define with or without trailing slash
// Defaults to ./uploads/, uncomment the following line to change this default value:
//define('UPLOADS_FOLDER' , './uploads/');

// Maintenance Mode: when enabled, users can't sign. If they're already signed in they can't work with the software.
// It must be enabled to upgrade the software.
// Set to TRUE to enable, FALSE to disable.
// It's disabled by default.
// More information: https://teampasswordmanager.com/docs/maintenance-mode/
//define('MAINTENANCE_MODE', FALSE);

// Message shown on the screen if Maintenance Mode is enabled and the software is accessed.
// Defaults to 'This installation is in Maintenance Mode. Please contact your administrator.'
// More information: https://teampasswordmanager.com/docs/maintenance-mode/
//define('MAINTENANCE_MESSAGE', 'This installation is in Maintenance Mode. Please contact your administrator.');

// For other parameters read: https://teampasswordmanager.com/docs/all-parameters-config-php/