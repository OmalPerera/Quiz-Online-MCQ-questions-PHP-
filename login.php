<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">




<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"><!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"><!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title></title>
</head>

<body style=" font-family: 'Lucida Grande',Helvetica,Arial,Verdana,sans-serif; margin: 0; padding: 0; width: 100%; height: 100%">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
    
    <div style="background: #000; height: 100px "></div>
    <div style="background-image: url('images/background.jpg'); width: 100%; height: 85%; background-position: center; background-repeat: no-repeat; padding-top: 100px; padding-bottom: 100px">

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
