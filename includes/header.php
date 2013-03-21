<body>
  <div id="fb-root"></div>
  <div class="container">
    <div class="container fixed-header">
      <div class="masthead">
        <a class="pull-left" href="index.php"> 
          <img src="images/header-logo.png" width="200px">  
        </a>
      
        <div id="fb-root"></div>
		<script>
		(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=446971292049644";
  		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>
      
        <div class="fb-login-button" data-show-faces="false" data-width="200" data-max-rows="2" class="pull-right"></div>
      
          <button onClick="login()" class="pull-right">Login with Facebook</button>
      
          <a class="pull-right" href="https://www.facebook.com/login.php?api_key=446971292049644&skip_api_login=1&display=page&cancel_url=http%3A%2F%2Fhcs.harvard.edu/awk%2Fcourses%2Fclasses%2FfbLogin%3Ferror_reason%3Duser_denied%26error%3Daccess_denied%26error_description%3DThe%2Buser%2Bdenied%2Byour%2Brequest.%26state%3Dceec8f8077e314c8f28b58e8febe30c9&fbconnect=1&social_plugin=login_button&next=http%3A%2F%2Fwww.facebook.com%2Fdialog%2Fplugin.perms%3F_path%3Dplugin.perms%26app_id%3D446971292049644%26client_id%3D446971292049644%26display%3Dpopup%26perms%26secure%3Dfalse%26social_plugin%3Dlogin_button%26return_params%3D%257B%2522show_faces%2522%253A%2522false%2522%252C%2522max_rows%2522%253A%25222%2522%252C%2522width%2522%253A%2522200%2522%252C%2522app_id%2522%253A%2522446971292049644%2522%252C%2522locale%2522%253A%2522en_US%2522%252C%2522sdk%2522%253A%2522joey%2522%252C%2522channel%2522%253A%2522http%253A%252F%252Fstatic.ak.facebook.com%252Fconnect%252Fxd_arbiter.php%253Fversion%253D19%2523cb%253Df29a9a2334%2526origin%253Dhttp%25253A%25252F%25252Fwww.hcs.harvard.edu%25252Ffdf1bb144%2526domain%253Dwww.hcs.harvard.edu%2526relation%253Dparent.parent%2522%252C%2522ret%2522%253A%2522perms%2522%257D%26login_params%3D%257B%257D%26from_login%3D1&rcount=1">Login</a>
    
      </div>
      <div class="navbar">
        <div class="navbar-inner">
          <div class="container">      
            <a class="btn btn-navbar" data-toggle="collapse" data-target="#nav-top">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <!--<a class="brand" href="home.php">Join Harvard</a> -->
            <div id="nav-top" class="nav-collapse">
              <ul class="nav pull-right">
                <!-- add addtional navigation tabs here -->
                <li><a href="index.php">Home</a></li>
                <li class="divider-vertical"></li>
                <li><a href="about.php">About</a></li>
                <li class="divider-vertical"></li>
                <li><a href="clubs.php">Clubs</a></li>
                <li class="divider-vertical"></li>
                <li><a href="blog/index.php">Blog</a></li>
                <li class="divider-vertical"></li>
                <li><a href="help.php">Help</a></li>
                <li class="divider-vertical"></li>
                <form class="navbar-search">
                  <input type="text" class="search-query" placeholder="Search">
                </form>
              </ul>
            </div> <!--/.nav-collapse -->
          </div>
        </div>
      </div>
    </div> <!-- Fixed Header -->
    <div class="container" id="dummydiv" style="height:180px"></div>
