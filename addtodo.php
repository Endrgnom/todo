<?php
    $data = $_GET['list'];
    if ($data == '' or empty($data)) {
        header('Location: ./index.php');
    }
    require 'dbconf.php';
    $sql = "INSERT INTO `tasks` (`task`) VALUES (:task)";
    $query = $pdo->prepare($sql);
    print_r ($data);
    $query->execute([':task'=>$data]);
   // header('Location: ./index.php');
    