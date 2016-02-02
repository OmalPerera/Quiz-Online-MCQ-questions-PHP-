<?php
    define('HOST_NAME', 'localhost');
    define('DB_USER','root');
    define('DB_PASSWORD','root');
    define('DB_NAME', 'mcq_quiz');
    
    global $con;
    $con=mysqli_connect(HOST_NAME,DB_USER,DB_PASSWORD,DB_NAME)
        or die("Failed to connect to Database: " . mysql_error());
        
    mysqli_select_db($con , "user");
    
    /*
     $ID = $_POST['username'];
     $Password = $_POST['password'];
     
     echo $ID . " " . $Password; 
    */
    
    if(isset($_POST['submit'])) {
        SignIn();
        }
    
    
    function SignIn() {
        session_start(); //starting the session for user profile page
        
        if(!empty($_POST['username'])){
            
            $query_statement = "SELECT name, password
                                FROM user
                                where name = '$_POST[username]' AND password = '$_POST[password]'";
            
            $query = mysqli_query($con, $query_statement);
                
            $row = mysqli_fetch_array($query)
                or die(mysql_error());
                
            if(!empty($row['username']) AND !empty($row['password'])) {
                $_SESSION['username'] = $row['password'];
                echo "success";
                header("Location :/page_mcq.php");
                exit;
            } else {
                echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
                }
        }
        }
        
        
            
            
?>
