<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Music Academy</title>
    <!-- Bootstrap -->
	<link href="{{URL::asset('login/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::asset('login/css/default.css')}}" rel="stylesheet" type = "text/css">
    <nav class="navbar navbar-default navbar-fixed-top" id="navbar-top">
    <div class="container-fluid">
      <div class = "row">
      <div id="settings-button" data-target = "#popup-window-settings" data-toggle="modal" >
      
      </div> 
      
      <div class="right-side-of-row">
        <ul>
          <li><a href="#" class="username">Guest</a></li>
            <li><a href="#" class="logout-link">[Login]</a></li>
        </ul>
      </div>         
      </div>
    </div>   
  </nav>
  </head>


  <body background="login/icons/main_background.jpg">
  
    
    <div class = "row" style="padding-top: 28px; padding-bottom: 40px;">
    <div class = "col-md-3" style = "margin-left:46%; margin-top: 1%; margin-right:35%;">
    <img src="login/icons/logo.png">
    </div>
      <div class = "col-md-3" style = "margin-left:40%; margin-right:35% background:white;">
        <h2 style="color: white ">Login</h2>
        <form action="#" method="post">
          <div class="form-group">
              <label for="indexNo" style="color:white"> Your Index Number</label>
              <input class="form-control" type = "text" name="indexNo" id="indexNo">
          </div>
          <div class="form-group">
              <label for="password" style="color:white; text-shadow:white"> Your Password</label>
              <input class="form-control" type = "password" name="password" id="password">
          </div>
          <div class="form-group" style="float: right;">
            <button type="Login" class="btn btn-primary1">Login</button>
          </div>
          
        </form>
      </div>
    </div>
 
	
    
  </body>
</html>