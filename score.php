
<?php
    session_start();
    $custom_Que_Ans = $_SESSION['custom_Que_Ans'];
    print_r($custom_Que_Ans);
    
    $userAnswers = $_GET['ans'];
    //echo $aaaa;
    
    $myArray = explode(',', $userAnswers);
    print_r($myArray);
    
    
?>



<html>
<head>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <title></title>
</head>

<body>
    <div id="navbar" class="navbar-collapse collapes" style="background-color: #000; height: 75px">
        hello
    </div>

    <div class="container">
        <div class="jumbotron jumbo-rounded top-space text-center">
            <h1 style="color: #444444">Your Score : 85%</h1>
            
            <div class="progress" style="margin-top: 15px">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    60%
                </div>
            </div>
            <h3 style="color: #777777">4 of 5</h3>
        </div>
    </div>
    <div class="container">
        <div class="jumbotron jumbo-rounded" style="background-color: #f5f5f5">
            <h2 style="color: #666666">Review</h2>
            <div class="alert alert-success" role="alert"><?php echo $custom_Que_Ans[0][0]; echo "\t"; echo "Answer";?></div>
            <div class="alert alert-success" role="alert"><?php echo $custom_Que_Ans[1][0]; ?></div>
            <div class="alert alert-success" role="alert"><?php echo $custom_Que_Ans[2][0]; ?></div>
            <div class="alert alert-danger" role="alert"><?php echo $custom_Que_Ans[3][0]; ?></div>
            <div class="alert alert-success" role="alert"><?php echo $custom_Que_Ans[4][0]; ?></div>
            
        </div>
    </div>
        
    
    

       
    
    
    
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
