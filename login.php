<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">




<html>
<head>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    
    
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"><!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"><!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title></title>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
    
    <div style="background: #000;">
    <div id="navbar" class="navbar-collapse collapes container" style="background-color: rgba(0,0,0,0.95); height: 75px">
        <div class="row">
            <div class="col-md-3 col-xs-3" style="text-align: center; padding: 5px">
                <h3 style="color: #eaeaea; margin-left: -10px">Quiz +</h3>
            </div>
            <div class="col-md-6 col-xs-6"></div>
            <div class="col-md-3 col-xs-3"></div>
        </div>
    </div>
    </div>
    <div style="background-image: url('images/background.jpg'); width: 100%; height: 600px; background-repeat: no-repeat; padding-top: 100px; padding-bottom: 100px">

    <div style="width:450px; height:400px; background-color: transparent ; margin: auto; vertical-align: middle;">
        <div style="width: 100%; height: 27%; background-color: #3c9cc6;"></div>

        <div style="width: 100%; height: 73%; background-color: rgba(255,255,255,0.9); padding-top: 15px;">
            <div class="container">
                <div class="row">
                    
                    <form class="col s12" action="userLoginLogic.php" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="icon_prefix" type="text" name="username" class="validate">
                                <label for="icon_prefix">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input id="icon_lock_outline" type="password" name="password" class="validate">
                                <label for="icon_lock_outline">Password</label>
                            </div>
                        </div>
                        <div style="margin-bottom: 15px">
                            <p>
                                <input type="checkbox" class="filled-in" id="filled-in-box" />
                                 <label for="filled-in-box"  style="color: #ababab; font-size: small; ">Remember Me</label>
                            </p>
                        </div>
                        <div style="text-align: center; margin-bottom: 20px">
                            <button class="btn waves-effect waves-light" type="submit" name="submit" >Login
                                <i class="material-icons right">perm_identity</i>
                            </button>
                        </div>
                        <div style="text-align: center">
                            <p style="text-align: center; color: #51a9d0; font-size: small">Fogot your password ?</p>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    </div>
</body>
</html>
