<?php

    ob_start();

    $firstname = "";
    $lastname = "";
    $city = "";
    $street = "";
    $dateofbirth = "";
    $startofworking = "";
    $email1 = "";
    $email2 = "";
    $password1 = "";
    $password2 = "";
    $question = "";
    $answer = "";

    $errors = array();

    $email_login = "";
    $password_login = "";
    $nextpage ="";





    $db = mysqli_connect('localhost', 'root', '','test_project');

    if(isset($_POST['create'])) {

        $firstname = mysqli_real_escape_string($db,$_POST['firstname']);
        $lastname = mysqli_real_escape_string($db,$_POST['lastname']);
        $city = mysqli_real_escape_string($db,$_POST['city']);
        $street = mysqli_real_escape_string($db,$_POST['street']);
        $dateofbirth = mysqli_real_escape_string($db,$_POST['dateofbirth']);
        $startofworking = mysqli_real_escape_string($db,$_POST['startofworking']);
        $email1 = mysqli_real_escape_string($db,$_POST['email1']);
        $email2 = mysqli_real_escape_string($db,$_POST['email2']);
        $password1 = mysqli_real_escape_string($db,$_POST['password1']);
        $password2 = mysqli_real_escape_string($db,$_POST['password2']);
        $question = mysqli_real_escape_string($db,$_POST['question']);
        $answer = mysqli_real_escape_string($db,$_POST['answer']);

        if (empty($firstname)) {
            array_push($errors,"first name is required");
            $message = "first name is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($lastname)) {
            array_push($errors,"last name is required");
            $message = "last name is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($city)) {
            array_push($errors,"city is required");
            $message = "city is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($street)) {
            array_push($errors,"street is required");
            $message = "street is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($dateofbirth)) {
            array_push($errors,"date of birth is required");
            $message = "date of birth is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($startofworking)) {
             array_push($errors,"start of working is required");
            $message = "start of working is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($email1)) {
            array_push($errors,"email is required");
            $message = "email is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($email2)) {
             array_push($errors,"email confirm is required");
            $message = "email confirm is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($password1)) {
            array_push($errors,"password  is required");
            $message = "password  is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($password1)) {
            array_push($errors,"password  is required");
            $message = "password  is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($password2)) {
            array_push($errors,"password confirm is required");
            $message = "password confirm is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($answer)) {
            array_push($errors,"answer is required");
            $message = "answer is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if($password1 != $password2) {

           array_push($errors, "The two passwords do not match");
            $message = "The two passwords do not match";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if(count($errors) == 0) {

            //insert date to users table.

            $sql = "INSERT INTO users(Email, FirstName, LastName, City, DateOfBirth, StartOfWorkingDate, Street, VerificationQuestion, AnswerToVerification, Password) 
            VALUES('$email1', '$firstname', '$lastname', '$city', '$dateofbirth', '$startofworking', '$street', '$question', '$answer', '$password1')";
            mysqli_query($db,$sql);
            $_SESSION['Email'] = $email1;
            $_SESSION['success'] ="You are now registered to the system."; //messege for new user.
            $message = "You are now registered to the system.";
            echo "<script type='text/javascript'>alert('$message');</script>";
         
         
            header('location: LoginMD.php'); //move to home page.
        }
    }

        //*************************************************************************************************************************************************************** */

        //LOG USER IN FROM LOGIN PAGE

  

        if(isset($_POST['login_LoginMD'])) {


            $email_login = mysqli_real_escape_string($db,$_POST['email_LoginMD']);
            $password_login = mysqli_real_escape_string($db,$_POST['password_LoginMD']);


            //if felid input in login page.
            

            if (empty($email_login)) {
                array_push($errors,"email is required");
               
                $message = "email is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            if (empty($password_login)) {
                array_push($errors,"password  is required");
                
                $message = "password  is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
                
            }

            if(count($errors) == 0) {

                $query = "SELECT * FROM users WHERE Email='$email_login' AND Password='$password_login'";
                $result = mysqli_query($db,$query);

                if (mysqli_num_rows($result) > 0){

                    $message = "welcom! You are now login to the system.";
                    echo "<script type='text/javascript'>alert('$message');</script>";

                    ob_start();

                    $_SESSION['Email'] = $email_login;  
                    $_SESSION['success'] ="You are now login to the system.";

                    header('Location: mapOfBilding.php');
                    exit();

                }

                else {

                    $message = "worng password / email";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    
                }
               
            }
           

        }

      

    


?>

