<?php

function pullPortfolio() {
    $db = new PDO('mysql:host=192.168.20.20;dbname=Project_2', 'root', '');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $sql = 'SELECT `id`, `name`, `url`, `comment` FROM `portfolio`;';
    $query = $db->query($sql);
    return $query->fetchAll();
}
?>