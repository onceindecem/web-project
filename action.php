<?php 
    $servername = "localhost";  
    $username = "u140266677_rubikwijaieiei";  
    $password = "]cki+BH0sJ";
    $dbname = "u140266677_tm84737769";  
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);}

        echo "Connected successfully. <br>";

        $Q1 = $_POST['q1'];
        $Q2 = $_POST['q2'];
        $Q3 = $_POST['q3'];
        $Q4 = $_POST['q4'];
        $Q5 = $_POST['q5'];
        $Q6 = $_POST['q6'];
        $Q7 = $_POST['q7'];
        $Q8 = $_POST['q8'];
        $Q9 = $_POST['q9'];
        $Q10 = $_POST['q10'];
        $Q11 = $_POST['q11'];
        $Q12 = $_POST['q12'];
        $Q13 = $_POST['q13'];
        $Q14 = $_POST['q14'];
        $Q15 = $_POST['q15'];
        $Q16 = $_POST['q16'];
        $Q17 = $_POST['q17'];
        $Q18 = $_POST['q18'];
        $Q19 = $_POST['q19'];
        $Q20 = $_POST['q20'];
        $Q21 = $_POST['q21'];
        $Q22 = $_POST['q22'];
        $Q23 = $_POST['q23'];
        $Q24 = $_POST['q24'];
        $Q25 = $_POST['q25'];

        $sql = "INSERT INTO tmqna(q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,q18,q19,q20,q21,q22,q23,q24,q25) 
        VALUES" . "('$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q10','$Q11','$Q12','$Q13','$Q14','$Q15','$Q16','$Q17','$Q18','$Q19','$Q20','$Q21','$Q22','$Q23','$Q24','$Q25')";
        echo "Running SQL statement - <br>" . $sql . "<br>";
        
    
        if($conn->query($sql) == TRUE)
        {
            echo "Request Sent <br>";
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
