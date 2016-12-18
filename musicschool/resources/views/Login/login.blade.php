<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Music Academy</title>
    <link rel="ICON" href="icons/favicon.ico" type="image/ico" />
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
  
  </div>
    
    <div class = "row" style="padding-top: 28px; padding-bottom: 40px;">
    <div class = "col-md-3" style = "margin-left:46%; margin-top: 1%; margin-right:35%;">
    <img src="login/icons/logo.png">
    </div>

      <div class = "col-md-3" style = "margin-left:40%; margin-right:35% background:white;">
       @if(count($errors)>0)
          <div class = "row" style="padding-top: 10px; align-content: center;">
            <div class="col-md-12">

              <ul style="color: orange;">
                @foreach($errors->all() as $error)
                  <div>
                   <span style="background-color: white"> <li class="list-group-item">{{$error}}</li></span>
                   </div>
                @endforeach
              </ul>
          </div>
          @endif
        <h2 style="color: white ">Login</h2>

        <form action="{{route('loginUser')}}" method="post">
          <div class="form-group {{$errors->has('id') ? 'has-error':''}}">
              <label for="user_idL" style="color:white"> Your User ID</label>
              <input class="form-control" type = "text" name="id" id="id" value="{{Request::old('id')}}">
          </div>
          <div class="form-group">
              <label for="password_hashL" style="color:white; text-shadow:white"> Your Password</label>
              <input class="form-control" type = "password" name="password" id="password">
          </div>
          
          <div class="form-group" style="float: right;">
            <button type="Login" class="btn btn-primary1">Login</button>
          </div>
           
          
          <input type="hidden" name="_token" value="{{ Session::token() }}" />
        </form>

        <form action="{{route('logout')}}" method="post">
          <div class="form-group" style="float: right; margin-right: 5px">
            <button type="logout" class="btn btn-primary1">Log Out</button>
          </div>
          <input type="hidden" name="_token" value="{{ Session::token() }}" />
        </form>
      </div>
    </div>
 
	
    
  </body>
</html>