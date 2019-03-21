<?php

$db = new PDO('mysql:host=192.168.20.20;dbname=Project_2', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO `portfolio` (`name`, `url`, `comment`) VALUES (:projectName, :projectUrl, :projectComment);";

if (!empty($_POST['pname']) && !empty($_POST['url']) && !empty($_POST['comment'])) {
    $query = $db->prepare($sql);
    $result = $query->execute([
        ':projectName' => $_POST['pname'],
        ':projectUrl' => $_POST['url'],
        ':projectComment' => $_POST['comment']
    ]);
    if ($result) {
        header('Location: panel.php');
    } else {
        echo 'unexpected error';
    }
} else {
    echo 'error wrong data';
}
