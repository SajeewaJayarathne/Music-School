<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Music Academy</title>
    <link rel="ICON" href="MainLayout/icons/favicon.ico" type="image/ico" />
    <!-- Bootstrap -->
  <link href="{{URL::asset('MainLayout/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::asset('MainLayout/css/default.css')}}" rel="stylesheet" type = "text/css">
    

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{URL::asset('MainLayout/js/jquery-1.11.2.min.js')}}"></script>
    
  </head>
  <body style="padding-top: 28px; padding-bottom: 40px;">
  <nav class="navbar navbar-default navbar-fixed-top" id="navbar-top">
    <div class="container-fluid">
      <div class = "row">
      <div id="settings-button" data-target = "#popup-window-settings" data-toggle="modal" >
      <a href="#">
        <img src = "MainLayout/icons/settings-icon.png" width="16" onMouseOver="this.src='MainLayout/icons/settings-icon-hover.png'" onMouseOut="this.src='MainLayout/icons/settings-icon.png'" />
        </a>
      </div> 
      
      <div class="right-side-of-row">
        <ul>
          <li><a href="#" class="username"></a></li>
            <li><a href="#" class="logout-link" style="font-size: large" onclick="window.location ='{{route("logout")}}'" >[logout]</a></li>
        </ul>
      </div>         
      </div>
    </div>
    
  </nav>
<div class = "container-fluid display-table">
<div class="modal fade" id="popup-window-settings" data-backdrop="static" tabindex="-1">
  <div class = "modal-dialog" >
      <div class = "modal-content" id = "popup-window-settings-modal-dialog">
          <div class = "modal-header" id = "popup-window-settings-modal-header" >
              <button class = "close" data-dismiss = "modal">
                  <img src = "icons/close-icon.png" onMouseOver="this.src='icons/close-icon-hover.png'" onMouseOut="this.src='icons/close-icon.png'" />
                </button>
              <h4 class = "modal-title" id = "popup-window-settings-modal-title">Settings</h4>
            </div>
            <div class = "modal-body" id = "popup-window-settings-modal-body">

                <form >
                    <h4 class = "modal-title">Change My Password</h4>
                    <div class="col-md-12" id = "login-form-text">

                        <ul>
                            <li>
                                <input class="form-control" placeholder="Old Password" type = "password" id="popup-window-old-password">
                            </li>
                            <li>
                                <input class="form-control" placeholder="New Password" type = "password" id="popup-window-new-password">
                            </li>
                            <li>
                                <input class="form-control" placeholder="Confirm New Password" type = "password" id="popup-window-confirm-new-password">
                            </li>
                            <li>
                                <button class = "btn btn-success" type="button" id="popup-window-login-btn">Enter</button>
                            </li>
                        </ul>

                    </div>
                </form>

            </div>
            <div class = "modal-footer">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="popup-window-login" data-backdrop="static" tabindex="-1">
  <div class = "modal-dialog" >
      <div class = "modal-content" id = "popup-window-login-modal-dialog">
          <div class = "modal-header" id = "popup-window-login-modal-header" >
              <button class = "close" data-dismiss = "modal">
                  <img src = "icons/close-icon.png" onMouseOver="this.src='icons/close-icon-hover.png'" onMouseOut="this.src='icons/close-icon.png'" />
                </button>
              <h4 class = "modal-title" id = "popup-window-login-modal-title">Options Menu</h4>
            </div>            
            <div class = "modal-footer">
              <form  >
                      <div class="col-md-12" id = "login-form-text">
                                   
                        <ul>
                          <li>
                              <input class="form-control" placeholder="Enter Passphrase..." type = "password" id="popup-window-login-text">
                            </li>
                            <li>
                              <button class = "btn btn-primary" id="popup-window-login-btn">Submit</button>
                            </li>
                        </ul>
                       
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>

  <div class = "row display-table-row"> 
    
      <div id="left-panel"> 
        <div class="col-md-10 display-table-cell v-align box" id="side-menu">
          <div class="row" id="search-item">
                
                <div class = "col-md-1">
                <span class="glyphicon glyphicon-search" id="search-icon"></span>              
                </div>
                <div class = "col-md-9">
                <input type="text" placeholder="Search..." id="search-text">
                </div>                
                </div>
                <div class="row">
                
                <div id ="main-menu-items">
                      <ul id="drop-nav">
                        @yield('main_menu')
                      </ul>
                </div>

                <div id="logo-image-div" >
                  <img src="MainLayout/icons/logo.png" id="logo-image" alt="logo" width="142" height="212"/>
                </div>
                </div>

            </div>
          </div>
            
          <div id="right-panel">
            <div id="content-area"> 
              @yield('content_area')                
            </div>
          </div>
      </div>
    </div>

  
  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 


    <div>
    
  <nav class="navbar-custom navbar-fixed-bottom-custom">
    <div>
      
      </div>
    </nav>
    
    <nav class="navbar-custom navbar-fixed-bottom-custom-left">
    <div>
        
      </div>
    </nav>
    
    <nav class="navbar-custom navbar-fixed-bottom-custom-right">
    <div id="status-icons-bottom-right">
      <ul>
        <li><img src = "MainLayout/icons/not-live-icon.png" /></li>
            <li data-target = "#popup-window-login" data-toggle="modal"><img src = "MainLayout/icons/lock-icon.png" onMouseOver="this.src='MainLayout/icons/lock-icon-hover.png'" onMouseOut="this.src='MainLayout/icons/lock-icon.png'" /></li>
            <li><img src = "MainLayout/icons/network-icon.png" onMouseOver="this.src='MainLayout/icons/network-icon-hover.png'" onMouseOut="this.src='MainLayout/icons/network-icon.png'" /></li>
       </ul>
      </div>
    </nav>
    </div>

  <script>
      $(document).ready(function() {

          $('#popup-window-login-btn').click(function(){

              if($('#popup-window-old-password').val() == "" || $('#popup-window-old-password').val() == "" ||
                  $('#popup-window-confirm-new-password').val() == ""
              )
              {
                  alert("Error: Required fields are empty!");
              }
              else
              {
                  $.ajax({
                      url : 'http://localhost:8000/change_password',
                      data : {

                          password : $('#popup-window-confirm-new-password').val()

                      },

                      type : 'post',
                      success : function(){
                          alert("Success: Successfully Changed Password");
                      },
                      error : function(error){
                          alert(error.statusText);
                      }
                  })
              }
          });
      });

  </script>


  <!-- Include all compiled plugins (below), or include individual files as needed --> 
  <script src="{{URL::asset('MainLayout/js/bootstrap.js')}}"></script>
  </body>
</html>