<?php session_start();
include 'db.php';

$name=$_POST['name'];
$passwor=$_POST['pass'];
// echo $email;
    if(!empty($name) && !empty($passwor))
    {
        // if(mysqli_num_rows($salt_extract_run)>0)
        // {
        //     $salt = $row['salt'];
        

        $password=md5($passwor);

        $query1 ="SELECT * FROM users WHERE username='$name' AND password='$password'";
        $query1_run=mysqli_query($conn,$query1);
        $query_row=mysqli_fetch_array($query1_run);

        if(mysqli_num_rows($query1_run)>0)
        {  
                $_SESSION['user'] = $query_row['username'];
                $_SESSION['login']=1;
                $_SESSION['email']=$query_row['email'];
                session_regenerate_id(true);
                echo 'success';
            
        }
        else
        {
            echo "check password";
        }
        // }
        /*else if(mysqli_num_rows($query11_run)>0)
        {
            header("Location:hack.php");
        }*/
        
    }
    else
    {
        echo 'empty';
    }

    mysqli_close($conn);
?>