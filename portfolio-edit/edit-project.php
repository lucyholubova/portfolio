<?php
$id = $_GET['id'];
?>

<!DOCTYPE html>

<form method="POST" action="add-new-project.php">
    <label for="pname">Project Name</label>
    <input type="text" name="pname" id="pname">

    <label for="url">Project Url</label>
    <input type="text" name="url" id="url">

    <label for="comment">Project comment</label>
    <input type="text" name="comment" id="comment">

    <input type="submit">

</form>
