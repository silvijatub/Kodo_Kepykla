<?php
    include 'config.php';

    if (!isset($connection)) {
        $connection = new mysqli(config::DB_SERVER, config::DB_USERNAME, config::DB_PASSWORD, config::DB_NAME);
        if ($connection !== false) {
            if($connection->connect_error) {
                die($connection->connect_error);
            }

            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        } else {
            die("Nepvyko prisijungti prie duomenų bazės.");
        }
    }

?>