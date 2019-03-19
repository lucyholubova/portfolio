<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-03-19
 * Time: 11:26
 */



//var_dump($_POST);

$db = new PDO('mysql:host=192.168.20.20;dbname=Project_2', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO `portfolio` (`name`, `url`, `comment`) VALUES (:projectName, :projectUrl, :projectComment);";

$query = $db->prepare($sql);
$query->execute([
    ':projectName' => $_POST['pname'],
    ':projectUrl' => $_POST['url'],
    ':projectComment' => $_POST['comment']
]);
