<?php
    header('Access-Control-Allow-Origin: *');

    $host = "localhost";
    $db_user = "root";
    $db_pass = null;
    $db_name = "news_db";
    $mysqli = new mysqli($host, $db_user, $db_pass, $db_name);

    $query = $mysqli->prepare('select * from news order by datetime desc');
    $query->execute();

    $array = $query->get_result();
    $response = [];
    while ($a = $array->fetch_assoc()) {
        $response[] = $a;
    }
    echo json_encode($response);

?>