<?php

include './pullPortfolio.php';
if (empty($_GET['id'])) {
    echo 'unexpected error no id set';
} else {
    $id = $_GET['id'];


    $db = new PDO('mysql:host=192.168.20.20;dbname=Project_2', 'root', '');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $sql = 'SELECT `id`, `name`, `url`, `comment` FROM `portfolio`WHERE `id` = :projectId;';
    $query = $db->prepare($sql);
    $query->execute([
            ":projectId"=>$id
    ]);
    $currentProject = $query->fetch();

    ?>
    <!DOCTYPE html>

    <form method="POST" action="edit-existing-project.php">

        <label for="pname">Project Name</label>
        <input value="<?= $currentProject['name'] ?>" type="text" name="pname" id="pname">

        <label for="url">Project Url</label>
        <input value="<?= $currentProject['url'] ?>" type="text" name="url" id="url">

        <label for="comment">Project comment</label>
        <input value="<?= $currentProject['comment'] ?>" type="text" name="comment" id="comment">

        <input type="hidden" id="pid" name="pid" value="<?= $currentProject['id'] ?>">

        <input type="submit">


    </form>
    <?php
}
?>

