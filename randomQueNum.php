<?php
	

    $questionNumbers=array(5,2,4,9,1);
    
    
  /*  
    while(sizeof($questionNumbers)<6){

    	srand(microtime()*1000000);
    	$random_Number = rand(1,11);



		for($j=0; $j<5; $j++){

    		if(random_Number==$questionNumbers[$j]){
    		}else{
        		$questionNumbers[$j] = $random_Number;
    		}
    	}
    }
*/
 
    
    #Creating a database connection
    $con = mysqli_connect("localhost","root","root","mcq_quiz");
    if(!$con){
        echo "Database connection failed :" . mysqli_connect_error();
    }
    
    #Selecting the database to use
    mysqli_select_db($con , "questions_answers");



    
    $array_Que_Ans = array();
    /*
    echo $questionNumbers[0]. "<br>";
    echo $questionNumbers[1]. "<br>";
    echo $questionNumbers[2]. "<br>";
    echo $questionNumbers[3]. "<br>";
    */
    for($i=0; $i<5; $i++){
            global $questionNumbers;
            #echo $questionNumbers[$i];
            dbQuery($questionNumbers[$i],$i);   
        
    }
    

    #Performing Database Querry
    function dbQuery($questionNumber,$arr_index){
       
        $query_statement = "SELECT question, ans_1, ans_2, ans_3, ans_4,correct_ans
                        FROM questions_answers
                        WHERE que_no=". $questionNumber ." ";
        #echo $questionNumber;              
        global $con;
        $result = mysqli_query($con, $query_statement);
    
        if(!$result){
            die("Databse querry failed : " . mysqli_error());
        }
        
        
        
        #Showing result in html
        while ($row = mysqli_fetch_array($result)){
            #echo $questionNumber;
            global $array_Que_Ans;
            $array_Que_Ans[$arr_index][0] = $row[0];
            $array_Que_Ans[$arr_index][1] = $row[1];
            $array_Que_Ans[$arr_index][2] = $row[2];
            $array_Que_Ans[$arr_index][3] = $row[3];
            $array_Que_Ans[$arr_index][4] = $row[4];
            $array_Que_Ans[$arr_index][5] = $row[5];
            
        }    
    }
    

?>
