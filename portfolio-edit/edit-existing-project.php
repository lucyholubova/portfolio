<?php

$db = new PDO('mysql:host=192.168.20.20;dbname=Project_2', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "UPDATE `portfolio` SET `name` = :projectName, `url` = :projectUrl, `comment`= :projectComment WHERE `id`= :projectId;";

if (!empty($_POST['pname']) && !empty($_POST['url']) && !empty($_POST['comment']) && !empty($_POST['pid'])) {
    $query = $db->prepare($sql);
    $query->execute([
        ':projectName' => $_POST['pname'],
        ':projectUrl' => $_POST['url'],
        ':projectComment' => $_POST['comment'],
        ':projectId' => $_POST['pid']
    ]);
    echo "Success!";
} else {
    echo 'error';

}
