<?php

  include 'init/db.php';

  if(CONNECTED){
    //echo "CONNECTED";
    include 'init/user.php';
    //include 'controllers/to_register.php';

    $page="";

    if($USER!=null){

      $page = "profile";

      if(isset($_GET['page'])){
        if($_GET['page']== "profile"){
          $page = "profile";

        }else if($_GET['page']=='profile'){

          $page = "profile";

        }else if($_GET['page']=='comments'){

          $page = "comments";

        }
        else if($_GET['page']=='my_favorite'){

          $page = "my_favorite";

        }else if($_GET['page']=='post'){

          $page = "post";

        }else if($_GET['page']=='my_friends'){

          $page = "my_friends";

        }else if($_GET['page']=='options'){

          $page = "options";

        }else if($_GET['page']=='search_friends'){

          $page = "search_friends";

        }else if($_GET['page']=='tocomment_favorite'){

          $page = "tocomment_favorite";

        }
        else if($_GET['page']=='logout'){

          $page = "logout";

        }else if($_GET['page']=='news'){

          $page = "news";

        }else if($_GET['page']=='change_avatar'){

          $page = "change_avatar";

        }
        else if($_GET['page']=='home'){

          $page = "home";

        }else if($_GET['page']=='myposts'){

          $page = "myposts";

        }else if($_GET['page']=='reply'){

          $page = "reply";

        }else if($_GET['page']=='show_my_friends'){

          $page = "show_my_friends";

        }else{
          $page = "404";
        }
      }

    }else{

      $page = "home";
      if(isset($_GET['page'])){
        if($_GET['page']=='home'){

          $page = "home";

        }else if($_GET['page']=='registration'){

          $page = "registration";

        }else if($_GET['page']=='login'){

          $page = "login";

        }else if($_GET['page']=='news'){

          $page = "news";

        }else if($_GET['page']=='about_us'){

          $page = "about_us";

        }
        else{

          $page = "404";

        }

      }
    }
    ?>

    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      </head>
      <body>
        <?php
          if($USER==null){ ?>


          <nav class="navbar navbar-default" class="nav nav-pills">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="?page=home"><span class="glyphicons-ball"></span>JoinTraining</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">

                      <li class="dropdown">
                        <a href="?page=home">Home</a>
                      </li>
                      <li><a href="?page=news">News</a></li>
                      <li><a href="?page=about_us">Contacts</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="?page=registration"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                      <li><a href="?page=login"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
                    </ul>
                  </div>
                </div>
              </nav>

          <?php }else{ ?>

            <nav class="navbar navbar-default" class="nav nav-pills">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="?page=home">JoinTraining</a>
                      </div>
                      <div class="collapse navbar-collapse" id="myNavbar">
                      <ul class="nav navbar-nav">

                          <li><a href="?page=profile">Profile </a></li>
                          <li><a href="?page=news">Posts</a></li>
                          <li><a href="?page=my_favorite">My Favorite Posts</a></li>
                          <li><a href="?page=options">Options</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="?page=logout"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
                      </ul>
                    </div>
                  </div>
                </nav>

          <?php }

          $o = 'views/'.($USER!=null?'logged':'notlogged').'/'.$page.'.php';

          include $o;
        ?>
      </body>
    </html>

<?php



  }

  else{

    //echo "NOT CONNECTED";

  }

 ?>
