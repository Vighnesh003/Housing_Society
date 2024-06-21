<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yashogad</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://kit.fontawesome.com/2edfbc5391.js"crossorigin="anonymous"></script>
    
</head>
<body>
   <div class="page">
       <div class="navbar">
           <img src="Images/shlogo.jpg" class="logo">
           <h1>Yashogad<span style="font-family: 'Merienda', cursive;
            color:rgb(20, 76, 80);">&nbsp;Society</span></h1>
           <nav>
               <ul>
                   <li><a href=""class="active">Home</a></li>
                   <li><a href="#rules">Rules & Regulations</a></li>
                </ul>
            </nav>
            <a href="Adminlogin.php" class="btn">User Login</a>
            <a href="login.html" style="margin-left: 1250px;" class="btn">Admin Login</a>
       </div>
       <div class="row">
        <div class="col-1">
             <img src="Images/building1.jpg" >
        </div>
        <div class="col-2">
           <div class="form-container">
           <!--   <div class="form-btn">
                   <span onclick="login()">Login</span>
                   <span onclick="register()">Register</span>

                   <hr id="indicator">
                </div>
                <form action="login.php" method="POST" id="Loginform">
                    <input type="text" placeholder="Username" name="username" required>
                    <input type="email" placeholder="E-mail" name="email" required>
                    <input type="number" placeholder="Flat-No." name="flatno" min="1" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <button type="submit" class="btn-losi">Login</button><br>
                    <a href="">Forget Password...???</a>
-->
                </form>
                <form action="" method="POST" id="Regform">
                    <h2>Recover Password</h2>
                    <input type="num" placeholder="Enter OTP" name="otp" required>
                    <input type="password" placeholder="Enter New Password" name="pass" required>
                    <button type="submit" class="btn-losi" name="submit" >Log In</button>
                    
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    $db=mysqli_connect("localhost","root","","userimage","3308");
                    if(!$db)
                   {
                     die ( "Connection failed: " . mysqli_connect_error() ) ;
                   }else if (strlen($_POST["pass"]) < '8' ||strlen($_POST["pass"]) >'15' ) {
                            echo '<script>alert("Your Password Must Contain At Least 8 Characters or atmost 15 Character!")</script>';
                         }
                         elseif(!preg_match("#[0-9]+#",$_POST['pass'])) {
                             echo '<script>alert("Your Password Must Contain At Least 1 Number!")</script>';
                         }
                         elseif(!preg_match('@[^\w]@',$_POST['pass'])) {
                             echo '<script>alert("Your Password Must Contain At Least 1 Special Character!")</script>';
                         }
                         elseif(!preg_match("#[A-Z]+#",$_POST['pass'])) {
                             echo '<script>alert("Your Password Must Contain At Least 1 Capital Letter!")</script>';
                         }
                         elseif(!preg_match("#[a-z]+#",$_POST['pass'])) {
                             echo '<script>alert("Your Password Must Contain At Least 1 Lowercase Letter!")</script>';
                         } else if ($_POST['otp']==$_SESSION['otp']) {
                             mysqli_query($db,"UPDATE `registration` SET  Password='$_POST[pass]' WHERE Email='$_SESSION[email]';");
                             $res=mysqli_query($db,"SELECT * FROM `registration` WHERE  Email='$_SESSION[email]';");
                             $row= mysqli_fetch_assoc($res);
                             $count=mysqli_num_rows($res);
                             if($count==1){
                                $_SESSION['loggedin']= true;
                                $_SESSION['username']= $row['Username'];
                                $_SESSION['flatno']=$row['Flatno'];
                             }
                             
                             echo '<script>window.location="Welcome.php"</script>'; 
                         }else{
                             echo '<script>alert("OTP is Incorrect Plaese enter Correct OTP")</script>'; 
                         }
        }
                ?>

           </div>
             
        </div>
    </div>
   </div>
   <hr>
   <div id="rules">
       <h1>Rules and Regulations</h1>
       <hr>
       
        <li>Members and residents are required to keep their flats/homes and nearby premises clean and habitable.</li>  
        <li>The residents should also maintain proper cleanliness etiquette while using common areas, parking lot, etc. and not throw litter from their balconies and windows.</li>
        <li>Members must regularly pay the maintenance charges and all other dues necessitated by the society.</li>
        <li>Keeping pets is allowed after submitting the required NOC to the society. But if pets like dogs are creating any kind of disturbance to other society members then the pets won’t be allowed.</li>
        <li>Every member of the society should park their vehicles in their respective allotted parking spaces only.</li> 
        <li> After using the community hall for any event or function it should be cleaned and no damages should be caused.</li> 
        <li>No member can occupy the area near their front doors, corridors, passage for their personal usage.</li> 
        <li>Salesmen, vendors or any other sellers are not allowed to enter the premises.</li>
        <li>Wastage and over usage of water is not allowed.</li>
        <li>Smoking in lobbies, passage is not allowed. If any irresponsible person is found smoking in the no smoking zone, he/she shall be charged with penalty.</li>   
    </div>
    <!-- footer code -->
    <hr>
    <footer>
        <div class="main-content">
            <div class="left box">
                <h2>About Us</h2>
                <div class="content">
                    <p>
                        Yashogad society is website  where society members can get all the updates related to their society. The members also get notified with notices and events held in society and can see information about members in society. Members can also post complaints regarding any issue in society. 
                    </p>
                </div>
            </div>
            <div class="center box adjust">
                <div class="cen">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="login.html">Home</a></li>
                        <li><a href="#Loginform">Login</a></li>
                        <li><a href="#rules">Rules and Regulations</a></li>
                    </ul>
                </div>
                
            </div>
            <div class="right box">
                <h2>Address</h2>
                <div class="content">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text">Yashogad society,pandurangwadi,near sai baba mandir ,Dombivli(E)</span>
                    </div>
                    <div class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">+91 9866554725</span>
                    </div>
                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">Yashogadsocity@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <h3>Copyright @2023|Designed with HTML,CSS,PHP.</h3>
        </div>
    </footer>
   <script>
       var Loginform=document.getElementById("Loginform")
       var Regform=document.getElementById("Regform")
       var indicator=document.getElementById("indicator")

         function register(){
            Regform.style.transform= "translateX(0px)";
            Loginform.style.transform= "translateX(0px)";
            indicator.style.transform= "translateX(80px)";

         }
         function login(){
            Regform.style.transform= "translateX(300px)";
            Loginform.style.transform= "translateX(300px)";
            indicator.style.transform= "translateX(0px)";

         }
         
   </script>
</body>
</html>