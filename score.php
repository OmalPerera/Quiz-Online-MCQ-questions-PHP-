<?php
    session_start();
?>
<?php
    
    $custom_Que_Ans = $_SESSION['custom_Que_Ans'];
    //print_r($custom_Que_Ans);
    
    $userAnswers = $_GET['ans'];
    //echo $aaaa;
    
    $user_ans = explode(',', $userAnswers);
    //print_r($user_ans[1]);
    //print_r($user_ans);
    //echo "<br><br>";
    
    $number_of_correct_ans = 0;
    $percentage_marks = 0;
    $tab_space = "&emsp;&emsp;&emsp;&emsp;&emsp;";
    
    
    
    function calculate_Score(){
        global $custom_Que_Ans;
        global $user_ans;
        global $number_of_correct_ans;
        
        for($i=0; $i<5; $i++){
            if($custom_Que_Ans[$i][5] == $user_ans[$i]){
                $number_of_correct_ans++;
            }else{
                
            }
        }
        
        //echo $number_of_correct_ans;
        global $percentage_marks;
        $percentage_marks = ($number_of_correct_ans * 20);
    }
    
    
    
    
    $array_Correct_Ans = array();
    
    function list_correct_ans(){
        global $array_Correct_Ans;
        global $custom_Que_Ans;
        
        for($i=0; $i<5; $i++){
            
            if($custom_Que_Ans[$i][5] == 'ans_1'){
                $array_Correct_Ans[$i] = $custom_Que_Ans[$i][1];

            }elseif($custom_Que_Ans[$i][5] == 'ans_2'){
                $array_Correct_Ans[$i] =  $custom_Que_Ans[$i][2];
                
            }elseif($custom_Que_Ans[$i][5] == 'ans_3'){
                $array_Correct_Ans[$i] = $custom_Que_Ans[$i][3];
                
            }elseif($custom_Que_Ans[$i][5] == 'ans_4'){
                $array_Correct_Ans[$i] = $custom_Que_Ans[$i][4];
                
            }else{
            }
            
        }
    }
    
    
    
    $stripColor = array();
    
    function reviewStripColor(){
        global $custom_Que_Ans;
        global $user_ans;
        global $stripColor;
        
        for($i=0; $i<5; $i++){
            if($custom_Que_Ans[$i][5] == $user_ans[$i]){
                $stripColor[$i] = 'alert-success';
            }else{
                $stripColor[$i] = 'alert-danger';
            }
        }
    }
    
    
    
    
    calculate_Score();
    list_correct_ans();
    reviewStripColor();
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
            <h1 style="color: #444444">Your Score : <?php echo $percentage_marks;?>%</h1>
            
            <div class="progress" style="margin-top: 15px">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percentage_marks;?>%;">
                    <?php echo $percentage_marks;?>%
                </div>
            </div>
            <h3 style="color: #777777"><?php echo $number_of_correct_ans;?> of 5</h3>
        </div>
    </div>
    <div class="container">
        <div class="jumbotron jumbo-rounded" style="background-color: #f5f5f5">
            <h2 style="color: #666666">Review</h2>
            <div class="alert <?php echo $stripColor[0]; ?>" role="alert"><?php echo $custom_Que_Ans[0][0]; echo $tab_space; echo "Answer : ".$array_Correct_Ans[0];?></div>
            <div class="alert <?php echo $stripColor[1]; ?>" role="alert"><?php echo $custom_Que_Ans[1][0]; echo $tab_space; echo "Answer : ".$array_Correct_Ans[1];?></div>
            <div class="alert <?php echo $stripColor[2]; ?>" role="alert"><?php echo $custom_Que_Ans[2][0]; echo $tab_space; echo "Answer : ".$array_Correct_Ans[2];?></div>
            <div class="alert <?php echo $stripColor[3]; ?>" role="alert"><?php echo $custom_Que_Ans[3][0]; echo $tab_space; echo "Answer : ".$array_Correct_Ans[3];?></div>
            <div class="alert <?php echo $stripColor[4]; ?>" role="alert"><?php echo $custom_Que_Ans[4][0]; echo $tab_space; echo "Answer : ".$array_Correct_Ans[4];?></div>
            
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
