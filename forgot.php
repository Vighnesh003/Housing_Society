<?php
$db=mysqli_connect("localhost","root","","userimage","3308");
if(!$db)
{
 die ( "Connection failed: " . mysqli_connect_error() ) ;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Forgot Password</title>
        <link rel="stylesheet" href="forgot.css">

    </head>
    <body>
        <div class="full-page">
            <div class="navbar">
                <nav>
                    <ul id="MenuItems">
                        
                    </ul>
                </nav>
            </div>
            <div id="login-form" class="login-page">
                <div class="form-box">
                    <h1 class="head">Forgot Password</h1>
                 <label>Email :</label>
                 <input type="email" name="foremail" class="foremail" placeholder="Email-Address" required><br><br><br>
                 <div class="submit-btn"><button type="submit">Submit</button></div>

                </div>
            </div>
        </div>
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
                    <h2>Quick Links</h2><br>
                    <ul>
                        <li><a href="login.html">Home</a></li>
                        
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
        
</body>
</html>