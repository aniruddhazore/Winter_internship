<?php
$conn = mysqli_connect('localhost', 'root', '', 'users_inf', '3308');
if(!$conn){
    echo ("Cant connect to database").mysqli_connect_error($conn);
    exit;
}
$username = $_POST['uname'];
$password = $_POST['password'];
$querry = "Insert into user(username,password) values('$username','$password');";
$result = mysqli_query($conn, $querry);
if(!$result){
    echo ("Query issue") . mysqli_error($conn);
}
else{
    echo "<script>alert('Successfully inserted')
    window.location.replace('login.html');
    </script>";
}

?>