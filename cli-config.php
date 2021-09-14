<?php

require_once "./bootstrap.php";

// See %app_root%/bootstrap.php for more information
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
