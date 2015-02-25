<html>
	<head>
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
       <link href='/css/bootstrap.css' rel='stylesheet' type='text/css'>
        <link href='/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="layout/js/bootstrap.js" type="text/javascript"  ></script>
        
	</head>
	<body>
		<div class="container">
			<div class="content">
                <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                 
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">My blog</a>
                    </div>
                
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                       <li class="active"><a href="/signup">Sign up</a></li>
                       <li class="active"><a href="/login">Login</a></li>
                       <!-- <li><a href="#">Link</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                          </ul>
                        </li>-->
                      </ul>
                      <!--<form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                      </form>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </li>
                      </ul>-->
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>	
			</div>
          <?php //session_start();  ?>  
          @if(isset($_SESSION['success_message']))
           <div class="alert-success alert">{{$_SESSION['success_message']}}</div>
          @endif
           @if(isset($_SESSION['error_message']))
           <div class="alert-danger alert">{{$_SESSION['error_message']}}</div>
          @endif
          <?php if(isset($_SESSION['success_message'])) unset($_SESSION['error_message']);if(isset($_SESSION['error_message'])) unset($_SESSION['error_message']);?>
           @yield('content')
            
		</div>
	</body>
</html>
