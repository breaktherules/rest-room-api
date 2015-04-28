<?php
/**
 * Created by PhpStorm.
 * User: Naj Haq
 * Date: 4/25/2015
 * Time: 11:20 AM
 */

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

// bootstrap.php
require_once "vendor/autoload.php";

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'reservation_test',
    'password' => 'reservation_test',
    'dbname'   => 'reservation',
);

$paths = array("library/Reservation/Entity");
$isDevMode = false;

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
$entityManager = EntityManager::create($dbParams, $config);
