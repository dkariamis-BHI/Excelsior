<?php 

//--------------- Login Screen Wallpaper ---------------//      
  function login_enqueue_scripts(){
    echo '
      <div class="background-cover"></div>
      <style type="text/css" media="screen">

        .background-cover {background:url(http://bhi-foundation.local/wp-content/uploads/2021/10/High_resolution_wallpaper_background_ID_77701608208.jpg) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; position:fixed; top:0; left:0; z-index:10; overflow: hidden; width: 100%; height:100%; } 

        .login-action-register .background-cover {background:url('.get_bloginfo('template_directory').'/img/register-bkg.jpg) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; position:fixed; top:0; left:0; z-index:10; overflow: hidden; width: 100%; height:100%; } 

        #login { z-index:9999;  position:relative; width: 30% !important; }

        .login form { -moz-box-shadow: 0px 0px 0px 0px !important; -webkit-box-shadow: 0px 0px 0px 0px !important; box-shadow: 0px 0px 0px 0px !important; }

        .login h1 a { background:url(http://bhi-foundation.local/wp-content/uploads/2021/10/logo.png) no-repeat center top !important; background-size: 98px !important;  width:300px !important; height:86px; margin:20px auto; } 

        input.button-primary, button.button-primary, a.button-primary { -moz-border-radius: 3px !important; -webkit-border-radius: 3px !important; border-radius: 3px !important;  -khtml-border-radius: 3px !important; background:url('.get_bloginfo('template_directory').'/images/button.jpg);  border:none !important; font-weight:normal !important; text-shadow:none !important; }

        .button:active, .submit input:active, .button-secondary:active { background:#96C800 !important;  text-shadow: none !important; }

        .login #nav a, .login #backtoblog a { color:#fff !important; text-shadow: none !important; }

        .login #nav a:hover, .login #backtoblog a:hover { color:#96C800 !important; text-shadow: none !important; }

        .login #nav, .login #backtoblog { text-shadow: none !important; background: rgba(0,0,0,.5); }

        label {width: 100%;}

        </style>
    ';
  }
  add_action( 'login_enqueue_scripts', 'login_enqueue_scripts' );