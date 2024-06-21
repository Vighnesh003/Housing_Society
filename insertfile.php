<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Username = $_POST['username'];
    $email = $_POST['email'];
    $flatno = $_POST['flatno'];
    $mobileno = $_POST['mobno'];
    $familymem = $_POST['fammem'];
    $Password = $_POST['password'];
}

// connecting to database

$servername = "localhost";
$username = "root";
$password = "";
$database = "userimage";

// creating connection

$conn = mysqli_connect($servername, $username, $password, $database,"3308");
// die if connection was not successfull

if (!$conn){
    die("Sorry we failed to connect:". mysqli_connect_error());
}
elseif (strlen($_POST["password"]) < '8' ||strlen($_POST["password"]) >'15' ) {
    echo '<script>alert("Your Password Must Contain At Least 8 Characters or atmost 15 Character!")</script>';
 }
 elseif(!preg_match("#[0-9]+#",$_POST['password'])) {
     echo '<script>alert("Your Password Must Contain At Least 1 Number!")</script>';
 }
 elseif(!preg_match('@[^\w]@',$_POST['password'])) {
     echo '<script>alert("Your Password Must Contain At Least 1 Special Character!")</script>';
 }
 elseif(!preg_match("#[A-Z]+#",$_POST['password'])) {
     echo '<script>alert("Your Password Must Contain At Least 1 Capital Letter!")</script>';
 }
 elseif(!preg_match("#[a-z]+#",$_POST['password'])) {
     echo '<script>alert("Your Password Must Contain At Least 1 Lowercase Letter!")</script>';
 } elseif(strlen($mobileno) < '9'  || strlen($mobileno) > '11' ){
    echo '<script>alert("Your Mobile Number Must be in 10 Digit")</script>';
 } else

{
    // submitting to database
    
    $sql = "INSERT INTO `registration` ( `Username`, `Email`, `Flatno`, `MobileNo`, `nno of family members`, `Password`) VALUES ( '$Username', '$email', '$flatno', '$mobileno', '$familymem', '$Password')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>alert('Member added Successfully..!!');
        window.location.href = 'managemem.php';
        </script>";
    }
    else{
        echo "<script>alert('Not Saved...Please try again.!!');
        window.location.href = 'insertuser.php';
        </script>";
        
    }
}
?>