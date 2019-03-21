<?php
include './pullPortfolio.php';

$projects = pullPortfolios();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="panel.css">
</head>

<body>
<h1> Admin page </h1>
<div class="addNewProject"> <a href="panel.html"> add new project</a></div>

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
