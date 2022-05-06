<?php

include('db.php');


    $user_message= $_POST['usuario_message'];
    $email_message = $_POST['email_message'];
    $cont_message = $_POST['cont_message'];

    $query = "INSERT INTO mensaje(user_message, email_message, cont_message) VALUES ('$user_message', '$email_message', '$cont_message')";
    $result = mysqli_query($conn, $query);

    header("Location: index.html");

?>