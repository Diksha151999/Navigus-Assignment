<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

         <link href="style.css" rel="stylesheet" type="text/css"/>
       
        <title></title>
        
    </head>
    
    <body>
       
<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Slot Booking</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
 <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#" class="trigger-btn"  data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <div class="container-fluid">
            
            <center>
                <h1> It helps you schedule meetings without the back-and-forth emails</h1>
                <img src="img/k.PNG">
            </center>
            
        </div>
        <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h1 class="modal-title">Login</h1>
            </div>
            <div class="modal-body">
                <form role="form"  action="login.php" method="POST">
                    <input type="hidden" name="_token" value="">
                    <p>Don't have account?<a href="signup.php"> Register</a> </p>
                    <div class="form-group">
                        
                        <div>
                            <input type="email" class="form-control input-lg" name="email" placeholder="Email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                  
                        </div>
                        <div><?php echo filter_input(INPUT_GET, 'error') ?></div>
                    </div>
                    <div class="form-group">
                        
                        <div>
                            <input type="password" class="form-control input-lg" name="password" placeholder="Password">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            <br>
                            <br>
                            <a href="#">Forgot Your Password?</a>
                        </div>
                    </div>
                </form>
            </div> 
        </div>
        </div>
        </div>
    </body>
</html>
