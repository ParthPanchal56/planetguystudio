<?php

// --------------------
// Environment Settings
// --------------------
define('IS_DEVELOPMENT', true); // Set to false in production

// --------------------
// Error Reporting
// --------------------
if (IS_DEVELOPMENT) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    error_reporting(0);
    ini_set('display_errors', '0');
}

// --------------------
// Timezone
// --------------------
date_default_timezone_set('America/New_York'); // Adjust as needed

// --------------------
// Database Configuration
// --------------------
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'your_password');
define('DB_NAME', 'your_database_name');

// --------------------
// Database Connection
// --------------------
function connectToDatabase() {
    static $connection = null;
    if ($connection === null) {
        $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($connection->connect_error) {
            die('Database connection failed: ' . $connection->connect_error);
        }
    }
    return $connection;
}

// --------------------
// Session Management
// --------------------
session_start();

// --------------------
// Asset Management
// --------------------
function getAssetPath($type, $isAdmin = true, $isAppAsset = false) {
    $subdirectory = '/planetguystudio/app/assets/';  // Adjust this as needed for your directory structure
    $assetDirectory = $isAdmin ? 'admin/' : 'client/';
    $assetSubDirectory = $isAppAsset ? 'app-assets/' : 'assets/';

    return ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https://" : "http://") 
           . $_SERVER['HTTP_HOST'] 
           . $subdirectory 
           . $assetDirectory
           . $assetSubDirectory
           . $type . '/';
}



// --------------------
// CSRF Protection (Optional)
// --------------------
function generateCsrfToken() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

// Include this in forms as a hidden field and verify when receiving form submissions
function verifyCsrfToken($token) {
    return isset($_SESSION['csrf_token']) && $_SESSION['csrf_token'] === $token;
}

// --------------------
// Other Custom Functions or Settings
// --------------------
// Add other necessary configurations or utility functions.

?>