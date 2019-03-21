<?php
include './pullPortfolio.php';
// Lucia V wrote this, ignore me
session_start();
if(!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn']) {
//    var_dump($_SESSION);
    header('Location: login-form.html');
}
// End of Lucia's shit

$projects = pullPortfolio();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="panel.css">
</head>
<body>
<h1> Admin page </h1>
<div class="addNewProject"> <a href="logout.php"> Logout</a></div>
<div class="addNewProject"> <a href="add-project.php"> add new project</a></div>
<table>
    <thead>
        <tr>
            <th> Projects </th>
            <th> URL </th>
            <th> Edit </th>
            <th> Delete </th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($projects as $project){
        echo '<tr><td>' . $project['name'] . '</td>';
        echo '<td>' . $project['url'] . '</td>';
        echo '<td> <a class="edit" href="edit-project.php?id=' . $project['id'] . '">edit</a></td>';
        echo '<td> <input class="delete" type="submit" value="delete"</td>';
    }
    ?>
    </tbody>
</table>
</body>
