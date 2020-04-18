<?php

    ob_start();

    //variables for regiater page

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

    //variables for login page

    $email_login = "";
    $password_login = "";
    $nextpage ="";

    //variables for forgot-password page

    $email_forgot = "";
    $Verification_question_forgot = "";
    $answer_forgot = "";

    //variables for reset password page

    $reset_Password = "";
    $reset_Confirm_Password = "";
    $Email_reset_Password = "";


    //variables for insert component page

    $support = "";
    $manual = "";
    $serial_num = "";
    $brand_name = "";
    $main = "";
    $Component_Type = "";
    $Department = "";
    $upalte_image = "";
    $model = "";
    $type = "";
    $place = "";
    $s_n = "";

    //variables for update status machine


    $update_status_machine = "";




    $db = mysqli_connect('localhost', 'root', '','test_project');

 //*************************************************************************************************************************************************************** */

    //register page create NEW users 


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
        
         //*************************************************************************************************************************************************************** */

      
        //forgot passowrd page one sec!!

        if(isset($_POST['submit_Forgot'])) { 

            $email_forgot = mysqli_real_escape_string($db,$_POST['email_forgot']);
            $Verification_question_forgot = mysqli_real_escape_string($db,$_POST['Verification_question_forgot']);
            $answer_forgot = mysqli_real_escape_string($db,$_POST['answer_forgot']);

            if (empty($email_forgot)) {
                array_push($errors,"email is required");
               
                $message = "email is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            if (empty($Verification_question_forgot)) {
                array_push($errors,"Verification question is required");
                
                $message = "Verification question is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
                
            }

            if (empty($answer_forgot)) {
                array_push($errors,"answer for Verification question is required");
                
                $message = "answer for Verification question is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
                
            }

            if(count($errors) == 0) {

                $sqli = "SELECT * FROM users WHERE Email='$email_forgot' AND VerificationQuestion='$Verification_question_forgot' AND AnswerToVerification='$answer_forgot'";
                $result_forgot = mysqli_query($db,$sqli);

                if (mysqli_num_rows($result_forgot) > 0){

                    $message = "Excellent! You are switched to password reset!";
                    echo "<script type='text/javascript'>alert('$message');</script>";

                    header('Location: resetPassword.php');
                    exit();

                }

                else {

                    $message = "Worng email / Verification Question / Answer To Verification";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    
                }



            }

            

        }

            //forgot passowrd page TWO sec resetPassword!!


          if(isset($_POST['update'])) {

            $reset_Password = mysqli_real_escape_string($db,$_POST['reset_Password']);
            $reset_Confirm_Password = mysqli_real_escape_string($db,$_POST['reset_Confirm_Password']);
            $Email_reset_Password = mysqli_real_escape_string($db,$_POST['Email_reset_Password']);

            if (empty($reset_Password)) {
                array_push($errors,"Password is required");
               
                $message = "Password is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            if (empty($reset_Confirm_Password)) {
                array_push($errors,"Password confirm is required");
                
                $message = "Password confirm is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
                
            }

            if (empty($Email_reset_Password)) {
                array_push($errors,"Email is required");
                
                $message = "Email is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
                
            }

            if(count($errors) == 0) {

                $q = "UPDATE users SET Password = '$reset_Password' WHERE Email = '$Email_reset_Password'";

                 $query2 = mysqli_query($db,$q);

                if($query2) {

                     echo "<script type='text/javascript'>alert('Password is Update!');</script>";
                    header('Location: LoginMD.php');

                } else {

                     echo "<script type='text/javascript'>alert('Wornge Email / password');</script>"; 
                    //header('Location: LoginMD.php');
                }
            
            
            }
          }

   //*************************************************************************************************************************************************************** */

          

          //insert NEW component to component table

            $query_list="SELECT DISTINCT Component_type FROM components";
            $result_list = mysqli_query($db , $query_list);

            $query_list2="SELECT DISTINCT support FROM machines ORDER BY cast(support as unsigned)"; // need cast because doing order by on String column
            $result_list2 = mysqli_query($db , $query_list2);

          if(isset($_POST['insertComponentBtn'])) {

            $support = mysqli_real_escape_string($db,$_POST['support']);
            $manual = mysqli_real_escape_string($db,$_POST['manual']);
            $serial_num = mysqli_real_escape_string($db,$_POST['serial_num']);
            $brand_name = mysqli_real_escape_string($db,$_POST['brand_name']);
            $main = mysqli_real_escape_string($db,$_POST['main']);
            $Component_Type = mysqli_real_escape_string($db,$_POST['Component_Type']);
            $Department = mysqli_real_escape_string($db,$_POST['Department']);
            $upalte_image = mysqli_real_escape_string($db,$_POST['upalte_image']);
            $model = mysqli_real_escape_string($db,$_POST['model']);
            $type = mysqli_real_escape_string($db,$_POST['type']);
            $place = mysqli_real_escape_string($db,$_POST['place']);
            
            
    
            if (empty($support)) {
                array_push($errors,"support is required");
                $message = "support is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
    
            if (empty($manual)) {
                array_push($errors,"manual is required");
                $message = "manual is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            //serial num = s/n in data base
    
            if (empty($serial_num)) {
                array_push($errors,"serial number is required");
                $message = "serial number is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
    
            if (empty($brand_name)) {
                array_push($errors,"brand name is required");
                $message = "brand name is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
    
            if (empty($main)) {
                array_push($errors,"main is required");
                $message = "main is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
    
            if (empty($Component_Type)) {
                 array_push($errors,"Choose Component Type is required");
                $message = "Choose Component Type is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
    
            if (empty($Department)) {
                array_push($errors,"Department is required");
                $message = "Department is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
    
            if (empty($upalte_image)) {
                 array_push($errors,"image of component is required");
                $message = "Image of component is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
    
            if (empty($model)) {
                array_push($errors,"model  is required");
                $message = "model  is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            if (empty($type)) {
                array_push($errors,"type is required");
                $message = "type is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            if (empty($place)) {
                array_push($errors,"place is required");
                $message = "place is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

           

    
            
    
            if(count($errors) == 0) {
    
                //insert date to component table.
    
                $sql_component = "INSERT INTO components(Component_type, department, main, support, brandname, type, place, model, s_n, image) 
                VALUES('$Component_Type', '$Department', '$main', '$support', '$brand_name', '$type', '$place', '$model', '$serial_num', '$upalte_image')";
                mysqli_query($db,$sql_component);
                $_SESSION['support'] = $support;
                $_SESSION['success'] ="You are now add new component to the system."; //messege for new user.
                $message = "You are now add new component to the system.";
                echo "<script type='text/javascript'>alert('$message');</script>";
             
             
                header('location: insertComponent.php'); //move to insert Component page.
            }
        }


        //***************************************************************************************************************************************************************

        //display data in machine 

        //sql for display data per Machine

                $support_input = $_COOKIE["myJavascriptVar"];

                $sqli_acDrives = "SELECT s_n FROM components WHERE support LIKE '$support_input' and component_type LIKE 'ac drives'";
                $sqli_PLC = "SELECT s_n FROM components WHERE support LIKE '$support_input' and component_type LIKE 'PLC'";
                $sqli_powerSupply = "SELECT s_n FROM components WHERE support LIKE '$support_input' and component_type LIKE 'Power Supply 24V'";
                $sqli_hourmeter = "SELECT s_n FROM components WHERE support LIKE '$support_input' and component_type LIKE 'hourmeter'";
                $sqli_timer = "SELECT s_n FROM components WHERE support LIKE '$support_input' and component_type LIKE 'Timer'";
                $sqli_speedControl = "SELECT s_n FROM components WHERE support LIKE '$support_input' and component_type LIKE 'speed control'";
                $sqli_support = "SELECT distinct support FROM components WHERE support LIKE '$support_input'";
                $sqli_image = "SELECT * FROM machines WHERE support LIKE '$support_input'";





                $result_acDrives = mysqli_query($db,$sqli_acDrives);
                $result_PLC = mysqli_query($db,$sqli_PLC);
                $result_powerSupply = mysqli_query($db,$sqli_powerSupply);
                $result_hourmeter = mysqli_query($db,$sqli_hourmeter);
                $result_timer = mysqli_query($db,$sqli_timer);
                $result_speedControl = mysqli_query($db,$sqli_speedControl);
                $result_support = mysqli_query($db,$sqli_support);
                $result_image = mysqli_query($db,$sqli_image);

                //**********************************************************


                //sql for update status machine

                

                $query_machineStatus="SELECT DISTINCT machineStatus FROM machines ORDER BY cast(machineStatus as unsigned)"; // need cast because doing order by on String column
                $result_machineStatus = mysqli_query($db , $query_machineStatus);


                if(isset($_POST['save_status'])) {

                $update_status_machine = mysqli_real_escape_string($db,$_POST['update_status_machine']);

                if (empty($update_status_machine)) {
                    array_push($errors,"Password is required");
                   
                    $message = "no choose status";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }

                if(count($errors) == 0) {

                    $sql_update_status = "UPDATE machines SET machineStatus = '$update_status_machine' WHERE support LIKE '$support_input'";
    
                    $query_update_status = mysqli_query($db,$sql_update_status);

                    if($query_update_status) {
    
                         echo "<script type='text/javascript'>alert('Password is Update!');</script>";
                        header('Location: Buliding-six.php');
    
                    } else {
    
                         echo "<script type='text/javascript'>alert('Wornge Email / password');</script>"; 
                        //header('Location: LoginMD.php');
                    }
                
                
                }

            }

               

                

                

?>

