<?php

use Nigatedev\FrameworkBundle\Config\ORMConfig;
use Nigatedev\Framework\Parser\JSONParser;
use Nigatedev\Framework\Parser\Exception\ParseException;

require_once "./config/env.loader.php";

try {
    $getOrmConfig = JSONParser::parseJFile(__DIR__, "/config/dependencies/doctrine.json");
} catch (ParseException $e) {
    die($e->getMessage() . " In file " . $e->getFile() . " On line " . $e->getLine());
}

$entityManager = (new ORMConfig(__DIR__))->getEntityManagerConfig(
    $getOrmConfig["connection"],
    $getOrmConfig["annotation"]
);
