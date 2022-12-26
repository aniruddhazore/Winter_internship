<?php
$conn = mysqli_connect('localhost', 'root', '', 'users_inf', '3308');
if(!$conn){
    echo ("Cant connect to database").mysqli_connect_error($conn);
    exit;
}
$username = $_POST['uname'];
$password = $_POST['password'];
$existSql = "Select * from user where username = $password;";
$existresult = mysqli_query($conn, $existSql);
if(mysqli_num_rows($existresult)>0){
    echo "<script>alert('Username Already Exists');window.location.replace('signup.html')</script>";
} else {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $querry = "Insert into user(username,password,Timestamp) values('$username','$hash',current_timestamp());";
    $result = mysqli_query($conn, $querry);
    if (!$result) {
        echo ("Query issue") . mysqli_error($conn);
    } else {
        echo "<script>alert('Successfully inserted')
    window.location.replace('login.html');
    </script>";
    }
}

?>