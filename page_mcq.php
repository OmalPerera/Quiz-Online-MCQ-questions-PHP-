<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<?php   
    include_once('randomQueNum.php');
?>



<html>
<head>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    
    <script type="text/javascript">
        
          function get_radio_btn_value($qNum) {
            var Que_1_ans = document.getElementsByName($qNum);
            
            for (var i = 0; i < Que_1_ans.length; i++) {
              if (Que_1_ans[i].checked) {
                return Que_1_ans[i].value;
              }
            }
          }
          
          
          
        function submit_answers() {
            var Que_1_ans = get_radio_btn_value("que_1ans");
            var Que_2_ans = get_radio_btn_value("que_2ans");
            var Que_3_ans = get_radio_btn_value("que_3ans");
            var Que_4_ans = get_radio_btn_value("que_4ans");
            var Que_5_ans = get_radio_btn_value("que_5ans");
            alert("selected input is: " + Que_1_ans + Que_2_ans + Que_3_ans + Que_4_ans + Que_5_ans);
        }
          

        </script>

    <title></title>
</head>

<body>
    <div id="navbar" class="navbar-collapse collapes" style="background-color: #000; height: 75px">
        hello
    </div>

    <div class="container">
        <div class="jumbotron jumbo-rounded top-space">
            <h2>Question 1</h2>

            <p style="font-size:17px ">
                <?php
                    echo $array_Que_Ans[0][0];
                ?>
            </p>
        </div>
    </div>
    <div class="container">
        <div class="jumbotron jumbo-rounded">
            <h2>Answers</h2>
            
            <div class="radio top-space">
                <label>
                    <input type="radio" name="que_1ans" id="optionsRadios1" value="ans_1">
                        <?php echo $array_Que_Ans[0][1]; ?>
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="que_1ans" id="optionsRadios2" value="ans_2">
                        <?php echo $array_Que_Ans[0][2]; ?>
                </label>
            </div>
            <div class="radio">
                <label>   
                    <input type="radio" name="que_1ans" id="optionsRadios3" value="ans_3">
                        <?php echo $array_Que_Ans[0][3]; ?>
                </label>
            </div>
            <div class="radio">
                <label>   
                    <input type="radio" name="que_1ans" id="optionsRadios4" value="ans_4">
                        <?php echo $array_Que_Ans[0][4]; ?>
                </label>
            </div>

        </div>
    </div>
        
    
    
    
    <div class="container">
        <div class="jumbotron jumbo-rounded top-space">
            <h2>Question 2</h2>

            <p style="font-size:17px ">
                <?php
                    echo $array_Que_Ans[1][0];;
                ?>
            </p>
        </div>
    </div>
    <div class="container">
        <div class="jumbotron jumbo-rounded">
            <h2>Answers</h2>
            
            <div class="radio top-space">
                <label>
                    <input type="radio" name="que_2ans" id="optionsRadios1" value="ans_1">
                        <?php echo $array_Que_Ans[1][1]; ?>
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="que_2ans" id="optionsRadios2" value="ans_2">
                        <?php echo $array_Que_Ans[1][2]; ?>
                </label>
            </div>
            <div class="radio">
                <label>   
                    <input type="radio" name="que_2ans" id="optionsRadios3" value="ans_3">
                        <?php echo $array_Que_Ans[1][3]; ?>
                </label>
            </div>
            <div class="radio">
                <label>   
                    <input type="radio" name="que_2ans" id="optionsRadios4" value="ans_4">
                        <?php echo $array_Que_Ans[1][4]; ?>
                </label>
            </div>

        </div>
    </div>
        
    
    
    
    
    
    
    
    
    
    
    <div class="container">
        <div class="jumbotron jumbo-rounded top-space">
            <h2>Question 3</h2>

            <p style="font-size:17px ">
                <?php
                    echo $array_Que_Ans[2][0];
                ?>
            </p>
        </div>
    </div>
    <div class="container">
        <div class="jumbotron jumbo-rounded">
            <h2>Answers</h2>
            
            <div class="radio top-space">
                <label>
                    <input type="radio" name="que_3ans" id="optionsRadios1" value="ans_1">
                        <?php echo $array_Que_Ans[2][1]; ?>
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="que_3ans" id="optionsRadios2" value="ans_2">
                        <?php echo $array_Que_Ans[2][2]; ?>
                </label>
            </div>
            <div class="radio">
                <label>   
                    <input type="radio" name="que_3ans" id="optionsRadios3" value="ans_3">
                        <?php echo $array_Que_Ans[2][3]; ?>
                </label>
            </div>
            <div class="radio">
                <label>   
                    <input type="radio" name="que_3ans" id="optionsRadios4" value="ans_4">
                        <?php echo $array_Que_Ans[2][4]; ?>
                </label>
            </div>

        </div>
    </div>
        






    <div class="container">
        <div class="jumbotron jumbo-rounded top-space">
            <h2>Question 4</h2>

            <p style="font-size:17px ">
                <?php
                    echo $array_Que_Ans[3][0];
                ?>
            </p>
        </div>
    </div>
    <div class="container">
        <div class="jumbotron jumbo-rounded">
            <h2>Answers</h2>
            
            <div class="radio top-space">
                <label>
                    <input type="radio" name="que_4ans" id="optionsRadios1" value="ans_1">
                        <?php echo $array_Que_Ans[3][1]; ?>
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="que_4ans" id="optionsRadios2" value="ans_2">
                        <?php echo $array_Que_Ans[3][2]; ?>
                </label>
            </div>
            <div class="radio">
                <label>   
                    <input type="radio" name="que_4ans" id="optionsRadios3" value="ans_3">
                        <?php echo $array_Que_Ans[3][3]; ?>
                </label>
            </div>
            <div class="radio">
                <label>   
                    <input type="radio" name="que_4ans" id="optionsRadios4" value="ans_4">
                        <?php echo $array_Que_Ans[3][4]; ?>
                </label>
            </div>

        </div>
    </div>
        






    <div class="container">
        <div class="jumbotron jumbo-rounded top-space">
            <h2>Question 5</h2>

            <p style="font-size:17px ">
                <?php
                    echo $array_Que_Ans[4][0];
                ?>
            </p>
        </div>
    </div>
    <div class="container">
        <div class="jumbotron jumbo-rounded">
            <h2>Answers</h2>
            
            <div class="radio top-space">
                <label>
                    <input type="radio" name="que_5ans" id="optionsRadios1" value="ans_1">
                        <?php echo $array_Que_Ans[4][1]; ?>
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="que_5ans" id="optionsRadios2" value="ans_2">
                        <?php echo $array_Que_Ans[4][2]; ?>
                </label>
            </div>
            <div class="radio">
                <label>   
                    <input type="radio" name="que_5ans" id="optionsRadios3" value="ans_3">
                        <?php echo $array_Que_Ans[4][3]; ?>
                </label>
            </div>
            <div class="radio">
                <label>   
                    <input type="radio" name="que_5ans" id="optionsRadios4" value="ans_4">
                        <?php echo $array_Que_Ans[4][4]; ?>
                </label>
            </div>

        </div>
    </div>
        
    
    
    
    <div class="row navbar-fixed-bottom" style="background-color: rgba(0,0,0,0.8)">
            <div class="col-sm-3 pagination col-xs-3" style="text-align: center" >
                <button type="button" class="btn btn-danger">Exit</button>
            </div>
            <div style="text-align: center" class="col-sm-6  col-xs-6">
                <ul class="pagination">
                    
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="page_mcq.php?runFunction=randomMcq_1">1<span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="page_mcq.php?runFunction=randomMcq_2">2<span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="page_mcq.php?runFunction=randomMcq_3">3<span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="page_mcq.php?runFunction=randomMcq_4">4<span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="page_mcq.php?runFunction=randomMcq_5">5<span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                    
                </ul>
                
            </div>
            <div class="col-sm-3 col-xs-3 pagination" style="text-align: center">
                <a href="score.php">
                <button type="button" class="btn btn-success" onclick='submit_answers()'>Submit</button>
                </a>
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
