<?php
/**
 * Database Configuration
 * TravelEase Platform
 */

define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') ?: '');
define('DB_NAME', getenv('DB_NAME') ?: 'travelease');

// API Keys
define('GOOGLE_API_KEY', getenv('GOOGLE_API_KEY') ?: '');
define('OPENWEATHER_API_KEY', getenv('OPENWEATHER_API_KEY') ?: '');
define('STRIPE_PUBLIC_KEY', getenv('STRIPE_PUBLIC_KEY') ?: '');
define('STRIPE_SECRET_KEY', getenv('STRIPE_SECRET_KEY') ?: '');
define('PAYPAL_CLIENT_ID', getenv('PAYPAL_CLIENT_ID') ?: '');

// App Configuration
define('APP_NAME', 'TravelEase');
define('APP_URL', getenv('APP_URL') ?: 'http://localhost:8000');
define('APP_ENV', getenv('APP_ENV') ?: 'development');
define('APP_DEBUG', getenv('APP_DEBUG') ?: true);

// Session Configuration
define('SESSION_TIMEOUT', 3600);
define('REMEMBER_ME_TIMEOUT', 2592000); // 30 days

// Pagination
define('ITEMS_PER_PAGE', 20);

// Features Configuration
define('ENABLE_SOCIAL_LOGIN', true);
define('ENABLE_EMAIL_VERIFICATION', true);
define('ENABLE_TWO_FACTOR_AUTH', true);

return [
    'database' => [
        'host' => DB_HOST,
        'user' => DB_USER,
        'pass' => DB_PASS,
        'name' => DB_NAME,
    ],
    'api' => [
        'google' => GOOGLE_API_KEY,
        'weather' => OPENWEATHER_API_KEY,
        'stripe' => STRIPE_PUBLIC_KEY,
        'paypal' => PAYPAL_CLIENT_ID,
    ],
    'app' => [
        'name' => APP_NAME,
        'url' => APP_URL,
        'env' => APP_ENV,
        'debug' => APP_DEBUG,
    ]
];
