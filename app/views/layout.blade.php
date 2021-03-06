 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    @yield('stylesheets')
    <script src="//cdn.ckeditor.com/4.4.5/basic/ckeditor.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div id="wrapper">
  <div class="container">
  <div class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ URL::to('/') }}"><img src="../images/logo.png" class="logo"></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('/clubs') }}">Clubs</a></li>
                <li><a href="{{ URL::to('/tips') }}">Coach's Tips</a></li>
                <li><a href="{{ URL::to('/tournaments') }}">Tournaments</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="http://stoausa.org">Stoa USA</a></li>
                  <li class="divider"></li>
                  <li><a href="https://drive.google.com/viewerng/viewer?a=v&pid=sites&srcid=c3RvYXVzYS5vcmd8c3RvYXVzYXxneDozOTQzOTY4ZTQ0NDZhN2Yx">LD Rules</a></li>
                  <li><a href="https://drive.google.com/viewerng/viewer?a=v&pid=sites&srcid=c3RvYXVzYS5vcmd8c3RvYXVzYXxneDo0NjdlNDk1OWEyYjk1ZTM">TP Rules</a></li>
                  <li><a href="https://drive.google.com/viewerng/viewer?a=v&pid=sites&srcid=c3RvYXVzYS5vcmd8c3RvYXVzYXxneDozMDlhZmZhM2EwOTI0Yzlh">Parli Rules</a></li>
                </ul>
              </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                <li><p class='navbar-text'>Hi, {{ Auth::user()->first_name }}</p></li>
                @else
                <li><a href="{{ URL::to('register') }}">Register</a></li>
                <li><a href="{{ URL::to('login') }}">Login</a></li>
                @endif
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </div>
    </div>
    @yield('content')
    <div class="container-fluid space"></div>
    <div class="col-md-12 footer"><p class="montserrat">&copy 2014 Stoa Speech & Debate | Made by Gabe Roeloffs</p></div>
     </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    @yield('scripts')

  </body>
</html>