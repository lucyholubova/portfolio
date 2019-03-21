<?php

include './pullPortfolio.php';
$id = $_GET['id'];
$projects = pullPortfolio();
$currentProject;
foreach($projects as $project){
    if ($project['id'] === $id) {
        $currentProject = $project;
    }
}
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