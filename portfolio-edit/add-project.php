<?php
// Lucia V wrote this, ignore me
session_start();
if(!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn']) {
    header('Location: login-form.html');
}
// End of Lucia's shit
?>

<!DOCTYPE html>
<body>

<form method="POST" action="add-new-project.php">
    <label for="pname">Project Name</label>
    <input type="text" name="pname" id="pname">

    <label for="url">Project Url</label>
    <input type="text" name="url" id="url">

    <label for="comment">Project comment</label>
    <input type="text" name="comment" id="comment">

    <input type="submit">
</form>
</body>
