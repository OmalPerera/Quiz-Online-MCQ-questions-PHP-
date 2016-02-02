<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<?php

    #Creating a database connection
    $con = mysqli_connect("localhost","root","root","mcq_quiz");
    if(!$con){
        echo "Database connection failed :" . mysqli_connect_error();
    }
    
    #Selecting the database to use
    mysqli_select_db($con , "questions_answers");

    
    #Performing Database Querry
    $query_statement = "SELECT question, ans_1, ans_2, ans_3, ans_4
                        FROM questions_answers
                        WHERE que_no=1";
    $result = mysqli_query($con, $query_statement);
    if(!$result){
        die("Databse querry failed : " . mysqli_error());
    }
    
    global $question;
    global $option_1;
    global $option_2;
    global $option_3;
    global $option_4;
    
    #Showing result in html
    while ($row = mysqli_fetch_array($result)){
         $question = $row[0];
         $option_1 = $row[1];
         $option_2 = $row[2];
         $option_3 = $row[3];
         $option_4 = $row[4];
    }





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
        <div class="jumbotron jumbo-rounded top-space">
            <h2>Question</h2>

            <p style="font-size:17px ">
                <?php
                    echo $question;
                ?>
            </p>
        </div>
    </div>
    <div class="container">
        <div class="jumbotron jumbo-rounded">
            <h2>Answers</h2>
            
            <div class="radio top-space">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        <?php echo $option_1; ?>
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        <?php echo $option_2; ?>
                </label>
            </div>
            <div class="radio">
                <label>   
                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                        <?php echo $option_3; ?>
                </label>
            </div>
            <div class="radio">
                <label>   
                    <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
                        <?php echo $option_4; ?>
                </label>
            </div>

        </div>
    </div>
        
        <div class="row" style="position: absolute; bottom: 0px; width: 100% ">
            <div class="col-sm-3 pagination col-xm-3" style="text-align: center" >
                <button type="button" class="btn btn-danger">Exit</button>
            </div>
            <div style="text-align: center" class="col-sm-6  col-xm-6">
                <ul class="pagination">
                    
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">1<span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="#">2<span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="#">3<span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="#">4<span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="#">5<span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                    
                </ul>
                
            </div>
            <div class="col-sm-3 col-xm-3 pagination" style="text-align: center">
                <button type="button" class="btn btn-success">Success</button>
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