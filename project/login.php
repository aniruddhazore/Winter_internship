<?php
session_start();
?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'users_inf', '3308');
if(!$conn){
    echo ("Cant connect to database").mysqli_connect_error($conn);
    exit;
}
$username = $_POST['uname'];
$password = $_POST['password'];
$querry1 = "Select * from user where username = '$username';";
$result1 = mysqli_query($conn, $querry1);
if($result1->num_rows>0){
    while($row = $result1->fetch_assoc()) {
        if(password_verify($password,$row["password"])){
            $_SESSION['user'] = $username;
            echo"<script>alert('Login succesfull')
            window.location.replace('mainpage.php');
            </script>" ;
        }
        else{
            echo ("Incorrect Password");
        }
      }
}
else{
    echo ("No username matched");
}
?>