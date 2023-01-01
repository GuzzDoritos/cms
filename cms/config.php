<?php

ini_set("display_errors", true);
date_default_timezone_set("America/Sao_Paulo");
define("DB_DSN", "mysql:host=localhost;dbname=cms");
define("DB_USERNAME", "guzzy");
define("DB_PASSWORD", "suika");
define("CLASS_PATH", "classes");
define("TEMPLATE_PATH", "templates");
define("HOMEPAGE_NUM_ARTICLES", 5);
define("ADMIN_USERNAME", "guzz");
define("ADMIN_PASSWORD", "reimu");
require(CLASS_PATH . "/Article.php");

function handleException($exception) {
    echo "Sorry, a problem ocurred. Contact the silly developer";
    error_log($exception->getMessage());
}

set_exception_handler('handleException');
?>