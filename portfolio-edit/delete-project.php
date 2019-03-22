<?php
if (empty($_GET['id'])) {
    echo 'unexpected error no id set';
} else {
    $id = $_GET['id'];

    $db = new PDO('mysql:host=192.168.20.20;dbname=Project_2', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM `portfolio` WHERE `id`= :projectId;";
    $query = $db->prepare($sql);
    $result = $query->execute([
        ":projectId" => $id
    ]);
    if ($result) {
        header('Location: panel.php');
    } else {
        echo 'unexpected error';
    }
}


