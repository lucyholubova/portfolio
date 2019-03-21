<?php
//get the login info from the form
//get info from POST
$username = $_POST['username'];
$password = $_POST['password'];

//need to get the user name and password hashed from the data
$db = new PDO('mysql:host=192.168.20.20;dbname=Project_2', 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$sql = 'SELECT `id`, `user_name`, `password` FROM `users` WHERE `user_name` = :username;';
$query = $db->prepare($sql);
$query->execute([":username"=>$username]);
$user = $query->fetch();
//if the user doesnt exist we should error
if ($user){
    //if it exist then we need to compare password from the form and the password from the data
    $passwordMatches = password_verify($password, $user['password']);
    if ($passwordMatches){
        //if correct we are logged in to admin page

        // Lucia V. did this hack but I want to submit it so...
        session_start();
        $_SESSION['loggedIn'] = true;
        // End of Lucia's hacks

        header('Location: panel.php');
    } else{
    //if not correct throw the error
        echo 'incorrect username or password';
    }

}else{
    echo 'incorrect username or password';
}
