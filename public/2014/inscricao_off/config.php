<?php
    // CONFIGS

    // The directory of the domain where app is running;
    // If it is running on root domain, leave it blank.
    define('APP_DIR', '/inscricao');
    // The app URL
    define('APP_URL', 'http://rmisto.com.br/inscricao');
    // The app title used on header and <title>
    define('APP_TITLE', 'R Misto');

    // The first user to register using the this email address will be setted
    // as system's root user
    define('ADMIN_EMAIL', 'eduardo@quagliato.me');

    // FILES
    // All paths in file config should have a slash at the end

    // The root URL for uploaded files
    define('FILES_URL', APP_URL.'/uploads/');
    // The root URL for uploaded files with problems
    define('FILES_URL_FAILSAFE', APP_URL.'/uploads/failsafe/');
    // The full path to the directory where files will be uploaded
    define('FILES_DIR', '/public_html/inscricao/uploads/');
    // The same, but for failsafe
    define('FILES_DIR_FAILSAFE', '/public_html/inscricao/uploads/failsafe/');

    // Maximun filesize for uploaded files
    define('MAX_FILESIZE', '50MB');

    // DB Settings
    define('DB_HOST', 'localhost');
    define('DB_USER', 'interdes');
    define('DB_PASS', '1nt3rd3s1gn3rs');
    define('DB_NAME', 'interdes_2014inscricao');

    // Default SQL log filename (with path, if you want).
    // ALL SQL activity is logged.
    define('SQL_LOG_FILENAME', 'sql.log');

    // Sets default timezone.
    date_default_timezone_set("America/Sao_Paulo");

    // COLORS
    /*
    $bgcolor = '#EEEDED';
    $bgcolor_old = '#FFFFFF';
    
    $color1 = '#003E50';
    $color1_old = '#D6233B';
    
    $color2 = '#007987'
    $color2_old = '#312D44';  
    */

    // EMAILS
    // Default e-mail address to a real person
    define('DEFAULT_HUMAN_EMAIL', 'contato@rmisto.com.br');
    
    // Default no-reply e-mail
    define('DEFAULT_EMAIL_FROM', 'noreply@rmisto.com.br');
    // Default signature for all e-mails
    define('DEFAULT_EMAIL_SIGN', "<p>Com amor,<br />CORDe Misto.</p>");
    // Default greeting for all e-mails
    define('DEFAULT_EMAIL_GREETING', "<p>Olá!</p>");

    // Default e-mail subject
    define('DEFAULT_EMAIL_SUBJECT', APP_TITLE." - Inscrições");


    // Include custom configs
    include_once("custom/custom_config.php");
?>
