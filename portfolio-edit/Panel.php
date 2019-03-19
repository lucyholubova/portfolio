<?php
$db = new PDO('mysql:host=192.168.20.20;dbname=Project_2', 'root', '');
$db-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$sql = ' SELECT `name`, `url` FROM `portfolio`;';
$query = $db->query($sql);
$projects = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<body>

<h1> Admin page </h1>
<table>
    <thead>
        <tr>
            <th> Projects </th>
            <th> URL </th>
            <th> Edit </th>
            <th> Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach($projects as $project){
        echo '<tr><td>' . $project['name'] . '</td>';
        echo '<td>' . $project['url'] . '</td>';
        echo '<td> <input class="edit" type="submit" value="edit"</td>';
        echo '<td> <input class="deletet" type="submit" value="delete"</td>';

    }
    ?>
    </tbody>

</table>
</head>
</body>
