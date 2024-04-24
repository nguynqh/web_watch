<?php
    require_once("connect.php");
    
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        echo $username;
        $password = $_POST['password'];
        echo $password;
        $sQuery = sprintf("select * from manager where Manager_Phone = '%s'", $conn->real_escape_string($username));
	    $result  = $conn->query($sQuery);
        if($result->num_rows == 1)
        {
            $row = $result->fetch_array();

            if ($row['password'] == $password)
            {
                // login đúng
                $_SESSION['username'] = $username;
                //echo('Logined');
                $conn->close();
                
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['login_admin'] = true;

                header('Location: ../admin_index.php');
            }
            else
            {
                $conn->close();
                header('Location: ../login1.php?error=1');
            }
        }
    }
?>