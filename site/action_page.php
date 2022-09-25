<?php

$email = "";
$reg_password = "";


if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['reg_password'])) {
    $reg_password = ($_POST['reg_password']);
}
if ($email && $reg_password) {
    $connect = mysqli_connect("127.0.0.1", "root", "", "site") or die (mysqli_error($connect));
    $query = "SELECT * FROM users WHERE login = '$email' ";
    //echo $query;
    $query = mysqli_query($connect, $query);
        if (mysqli_num_rows($query) > 0) {
            echo "Такой пользователь уже есть";
        } else {
        $query = "INSERT INTO users (`login`, `password`) VALUES ('$email','$reg_password') ";
        //echo $query;
        $query = mysqli_query($connect, $query);
        if ($query) {
            echo "Пользователь $email успешно зарегестрирован";
        } else {
            die (mysqli_error($connect));
        }
    }
}

?>