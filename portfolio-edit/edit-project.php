<?php

include './pullPortfolio.php';

$id = $_GET['id'];

$projects = pullPortfolio();
$currentProject;
?>

<!DOCTYPE html>
<?php

foreach($projects as $project){
    if ($project['id'] === $id) {
        $currentProject = $project;
    }
}
?>
<form method="POST" action="add-new-project.php">
    <label for="pname">Project Name</label>
    <input value="<?= $project['name'] ?>" type="text" name="pname" id="pname">

    <label for="url">Project Url</label>
    <input value="<?= $project['url'] ?>" type="text" name="url" id="url">

    <label for="comment">Project comment</label>
    <input value="<?= $project['comment'] ?>" type="text" name="comment" id="comment">

    <input type="submit">

</form>
