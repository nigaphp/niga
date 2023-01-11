<?php

use Niga\Framework\Config\ORMConfig;
use Niga\Framework\Database\DatabaseConfiguration;

require_once "./config/env.loader.php";

$dbConfig = new DatabaseConfiguration();

$entityManager = (new ORMConfig(__DIR__))->getEntityManagerConfig(
    [
        "driver" => "pdo_" . $dbConfig->getDriver(),
        "dbname" => $dbConfig->getDbName(),
        "user"   => $dbConfig->getUser(),
        "password" => $dbConfig->getPassword(),
        "host" => $dbConfig->getHost(),
        "path" => str_replace("../", "./", $dbConfig->getPath())
    ],
    [
        "dir" => ["src/Entity"],
        "mode" => true,
        "cache" => null,
        "proxyDir" => null,
        "reader" => false
    ]
);
