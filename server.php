<?php error_reporting(E_ALL ^ E_NOTICE); ?>
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
            array_push($errors,"First name is required");
            $message = "First name is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($lastname)) {
            array_push($errors,"Last name is required");
            $message = "Last name is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($city)) {
            array_push($errors,"City is required");
            $message = "City is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($street)) {
            array_push($errors,"Street is required");
            $message = "Street is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($dateofbirth)) {
            array_push($errors,"Date of birth is required");
            $message = "Date of birth is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($startofworking)) {
             array_push($errors,"Start of working is required");
            $message = "Start of working is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($email1)) {
            array_push($errors,"Email is required");
            $message = "Email is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($email2)) {
             array_push($errors,"Email confirm is required");
            $message = "Email confirm is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($password1)) {
            array_push($errors,"Password  is required");
            $message = "Password is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($password1)) {
            array_push($errors,"Password  is required");
            $message = "Password is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($password2)) {
            array_push($errors,"Password confirm is required");
            $message = "Password confirm is required";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (empty($answer)) {
            array_push($errors,"Answer is required");
            $message = "Answer is required";
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
                array_push($errors,"Email is required");
               
                $message = "Email is Required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            if (empty($password_login)) {
                array_push($errors,"Password  is Required");
                
                $message = "Password  is Required";
                echo "<script type='text/javascript'>alert('$message');</script>";
                
            }

            if(count($errors) == 0) {

                $query = "SELECT * FROM users WHERE Email='$email_login' AND Password='$password_login'";
                $result = mysqli_query($db,$query);

                if (mysqli_num_rows($result) > 0){

                    $message = "Welcom! You are now login to the system.";
                    echo "<script type='text/javascript'>alert('$message');</script>";

                    ob_start();

                    $_SESSION['Email'] = $email_login;  
                    $_SESSION['success'] ="You are now login to the system.";

                    header('Location: mapOfBilding.php');
                    exit();

                }

                else {

                    $message = "Wrong Password / Email";
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
                array_push($errors,"Email is Required");
               
                $message = "Email is Required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            if (empty($Verification_question_forgot)) {
                array_push($errors,"Verification question is required");
                
                $message = "Verification Question is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
                
            }

            if (empty($answer_forgot)) {
                array_push($errors,"Answer for Verification Question is required");
                
                $message = "Answer for Verification Question is required";
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

                    $message = "Wrong Email / Verification Question / Answer To Verification";
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
                array_push($errors,"Email is Required");
                
                $message = "Email is Required";
                echo "<script type='text/javascript'>alert('$message');</script>";
                
            }

            if(count($errors) == 0) {

                $q = "UPDATE users SET Password = '$reset_Password' WHERE Email = '$Email_reset_Password'";

                 $query2 = mysqli_query($db,$q);

                if($query2) {

                     echo "<script type='text/javascript'>alert('Password is Update!');</script>";
                    header('Location: LoginMD.php');

                } else {

                     echo "<script type='text/javascript'>alert('Wrong Email / password');</script>"; 
                    //header('Location: LoginMD.php');
                }
            
            
            }
          }

   //*************************************************************************************************************************************************************** */

          

          //insert NEW component to component table

            $query_list="SELECT DISTINCT Component_type FROM components";
            $result_list = mysqli_query($db , $query_list);


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
                array_push($errors,"Support is required");
                $message = "Support is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
    
            if (empty($manual)) {
                array_push($errors,"Manual is required");
                $message = "Manual is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            //serial num = s/n in data base
    
            if (empty($serial_num)) {
                array_push($errors,"Serial number is required");
                $message = "Serial number is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
    
            if (empty($brand_name)) {
                array_push($errors,"Brand name is required");
                $message = "Brand name is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
    
            if (empty($main)) {
                array_push($errors,"Main is required");
                $message = "Main is required";
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
                 array_push($errors,"Image of component is required");
                $message = "Image of component is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
    
            if (empty($model)) {
                array_push($errors,"Model  is required");
                $message = "Model  is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            if (empty($type)) {
                array_push($errors,"Type is required");
                $message = "Type is required";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            if (empty($place)) {
                array_push($errors,"Place is required");
                $message = "Place is required";
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

        //display data in machine ----------->> vibraion <<---------------------

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

                $sqli_defult_statusMachine = "SELECT machineStatus FROM machines WHERE support LIKE '$support_input'";

                $result_acDrives = mysqli_query($db,$sqli_acDrives);
                $result_PLC = mysqli_query($db,$sqli_PLC);
                $result_powerSupply = mysqli_query($db,$sqli_powerSupply);
                $result_hourmeter = mysqli_query($db,$sqli_hourmeter);
                $result_timer = mysqli_query($db,$sqli_timer);
                $result_speedControl = mysqli_query($db,$sqli_speedControl);
                $result_support = mysqli_query($db,$sqli_support);
                $result_image = mysqli_query($db,$sqli_image);
                $result_statusMachine = mysqli_query($db,$sqli_defult_statusMachine);



                $support_input2 = $_COOKIE["myJavascriptVar"];

                $sqli_support2 = "SELECT distinct support FROM components WHERE support LIKE '$support_input2'";
                $sqli_sourch = "SELECT s_n FROM components WHERE support LIKE '$support_input2' and component_type LIKE 'sourch'";
                $sqli_Universal_Digital = "SELECT s_n FROM components WHERE support LIKE '$support_input2' and component_type like 'Universal Digital'";
                $sqli_PLC2 = "SELECT s_n FROM components WHERE support LIKE '$support_input2' and component_type LIKE 'PLC'";
                $sqli_Graphic_Recorder = "SELECT s_n FROM components WHERE support LIKE '$support_input2' and component_type LIKE 'Graphic Recorder'";
                $sqli_Main = "SELECT main FROM components WHERE support LIKE '$support_input2' limit 1";
                $sqli_PVAK = "SELECT s_n FROM components WHERE support LIKE '$support_input2' and component_type LIKE 'PVAK'";
                $sqli_SCR = "SELECT s_n FROM components WHERE support LIKE '$support_input2' and component_type LIKE 'SCR Power'";
                $sqli_PEX = "SELECT s_n FROM components WHERE support LIKE '$support_input2' and component_type LIKE 'PEX'";
                $sqli_PWT = "SELECT s_n FROM components WHERE support LIKE '$support_input2' and component_type LIKE 'PWT'";
                $sqli_Pol_Pot = "SELECT s_n FROM components WHERE support LIKE '$support_input2' and component_type LIKE 'Pol_Pot'";
                $sqli_Volt_Ampermeter = "SELECT s_n FROM components WHERE support LIKE '$support_input2' and component_type LIKE 'Volt_Ampermeter'";
                $sqli_powerSupply2 = "SELECT s_n FROM components WHERE support LIKE '$support_input2' and component_type LIKE 'Power Supply 24V'";
                $sqli_DH1 = "SELECT s_n FROM components WHERE support LIKE '$support_input2' and component_type like 'DH1_SSR & DH2_SSR'";
                $sqli_DH2 = "SELECT s_n FROM components WHERE support LIKE '$support_input2' and component_type like 'DH1_SSR & DH2_SSR'";
                $sqli_PHT = "SELECT s_n FROM components WHERE support LIKE '$support_input2' and component_type LIKE 'PHT'";

                $sqli_defult_statusMachine2 = "SELECT machineStatus FROM machines WHERE support LIKE '$support_input'";



                $result_support2 = mysqli_query($db,$sqli_support2);
                $result_sourch = mysqli_query($db,$sqli_sourch);
                $result_Universal_Digital = mysqli_query($db,$sqli_Universal_Digital);
                $result_PLC2 = mysqli_query($db,$sqli_PLC2);
                $result_Graphic_Recorder = mysqli_query($db,$sqli_Graphic_Recorder);
                $result_Main = mysqli_query($db,$sqli_Main);
                $result_PVAK = mysqli_query($db,$sqli_PVAK);
                $result_SCR = mysqli_query($db,$sqli_SCR);
                $result_PEX = mysqli_query($db,$sqli_PEX);
                $result_PWT = mysqli_query($db,$sqli_PWT);
                $result_Pol_Pot = mysqli_query($db,$sqli_Pol_Pot);
                $result_Volt_Ampermeter = mysqli_query($db,$sqli_Volt_Ampermeter);
                $result_powerSupply2 = mysqli_query($db,$sqli_powerSupply2);
                $result_DH1 = mysqli_query($db,$sqli_DH1);
                $result_DH2 = mysqli_query($db,$sqli_DH2);
                $result_PHT = mysqli_query($db,$sqli_PHT);

                $result_statusMachine2 = mysqli_query($db,$sqli_defult_statusMachine2);



                //**********************************************************

                //sql for defult status machine in drop list (option 1)

                


                //sql for update status machine

                

                $query_list2="SELECT DISTINCT machineStatus FROM machines ORDER BY cast(machineStatus as unsigned)"; // need cast because doing order by on String column
                $result_list2 = mysqli_query($db , $query_list2);

                $query_allsupport="SELECT DISTINCT support FROM machines ORDER BY cast(support as unsigned)"; // need cast because doing order by on String column
                $result_allsupport = mysqli_query($db , $query_allsupport);


                if(isset($_POST['save_status'])) {

                $update_status_machine = mysqli_real_escape_string($db,$_POST['update_status_machine']);

                if (empty($update_status_machine)) {
                    array_push($errors,"Password is required");
                   
                    $message = "No choose status";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }

                if(count($errors) == 0) {

                    $sql_update_status = "UPDATE machines SET machineStatus = '$update_status_machine' WHERE support LIKE '$support_input'";
    
                    $query_update_status = mysqli_query($db,$sql_update_status);

                    if($query_update_status) {
    
                         echo "<script type='text/javascript'>alert('Password is Update!');</script>";
                        header('Location: Buliding-six.php');
    
                    } else {
    
                         echo "<script type='text/javascript'>alert('Wrong Email / password');</script>"; 
                        //header('Location: LoginMD.php');
                    }
                
                
                }

            }
            


         //***************************************************************************************************************************************************************


              //display data in machine ----------->> Electrotherm box Machine <<---------------------

            //sql for display data per Machine

                $query_list3="SELECT DISTINCT machineStatus FROM machines ORDER BY cast(machineStatus as unsigned)"; // need cast because doing order by on String column
                $result_list3 = mysqli_query($db , $query_list3);


                if(isset($_POST['save_status_2'])) {

                $update_status_machine2 = mysqli_real_escape_string($db,$_POST['update_status_machine2']);

                if (empty($update_status_machine2)) {
                    array_push($errors,"Password is required");
                   
                    $message = "No choose status";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }

                if(count($errors) == 0) {

                    $sql_update_status2 = "UPDATE machines SET machineStatus = '$update_status_machine2' WHERE support LIKE '$support_input2'";
    
                    $query_update_status2 = mysqli_query($db,$sql_update_status2);

                    if($query_update_status2) {
    
                         echo "<script type='text/javascript'>alert('Password is Update!');</script>";
                        header('Location: Buliding-six.php');
    
                    } else {
    
                         echo "<script type='text/javascript'>alert('Wrong Email / password');</script>"; 
                        //header('Location: LoginMD.php');
                    }
                
                
                }

            }



         //***************************************************************************************************************************************************************

            //php side of BUILDING SIX

            
            // conncection to DB and store query of building 6 into php array
            $machine_support_query= "SELECT * FROM machines WHERE Machine_type LIKE 'VIBRATION MACHINES' OR Machine_type LIKE 'ELECTROTHERM BO FURNACE'";
            $machine_support_result = mysqli_query($db , $machine_support_query);
            $phpArray_support = array(); // create new PHP array

            while($row = mysqli_fetch_assoc($machine_support_result)){
                $phpArray_support[] = $row['support']; // insert support query into php array
            }  

            $machine_machineType_query= "SELECT Machine_type FROM machines WHERE Machine_type LIKE 'VIBRATION MACHINES' OR Machine_type LIKE 'ELECTROTHERM BO FURNACE'";
            $machine_machineType_result = mysqli_query($db , $machine_machineType_query);
            $phpArray_machineType = array(); // create new PHP array

            while($row = mysqli_fetch_assoc($machine_machineType_result)){
                $phpArray_machineType[] = $row['Machine_type']; // insert machine type query into php array
            }  
            // conncection to DB and store query of building 6 into php array

            $machine_status_query= "SELECT machineStatus FROM machines WHERE Machine_type LIKE 'VIBRATION MACHINES' OR Machine_type LIKE 'ELECTROTHERM BO FURNACE'";
            $machine_status_result = mysqli_query($db , $machine_status_query);
            $phpArray_status = array(); // create new PHP array


            while($row = mysqli_fetch_assoc($machine_status_result)){
                $phpArray_status[] = $row['machineStatus']; // insert status query into php array
            } 


         //***************************************************************************************************************************************************************


            //php of History Machine Page

            $query_history_table="SELECT * from history ORDER BY UpdateDate DESC";
            $result_history_table = mysqli_query($db , $query_history_table);


         //***************************************************************************************************************************************************************


            //php of Incorrect Table Page

            $query_incorrect_table="SELECT * FROM faulty ORDER BY FaultNumber DESC";
            $result_incorrect_table = mysqli_query($db , $query_incorrect_table);
            


            
        //***************************************************************************************************************************************************************
            
            //php of page stock component enter 

            $query_to_dropList_enter_stock="SELECT DISTINCT Component_type FROM components";
            $result_to_dropList_enter_stock = mysqli_query($db , $query_to_dropList_enter_stock);

         //***************************************************************************************************************************************************************

            //php result search 

            $myPhpVar_component= $_COOKIE['myJavascriptVar'];
            $query_display_components="SELECT * FROM components WHERE Component_type LIKE '".$myPhpVar_component."'";
            $result_display_components = mysqli_query($db , $query_display_components);

            //***************************************************************************************************************************************************************
                
            //php form change components


            //drop list one
            $headvalue = $_COOKIE["headvalue"]; //cookie of drop list one (selected component type of drop list one)

            //drop list two
            $query_two = "SELECT concat(s_n, ' - From Machine: ',support) as s_nAndSupport FROM components WHERE support NOT LIKE '".$support_input."' AND Component_type LIKE '".$headvalue."' ";
            $result_query_two = mysqli_query($db , $query_two);

            //drop list three
            $query_three = "SELECT s_n FROM components WHERE support LIKE '".$support_input."' AND Component_type LIKE '".$headvalue."' ";
            $result_query_three = mysqli_query($db , $query_three);


            //Replacement operation

            

            if(isset($_POST['submit_Components2'])) {

                $add_new_component_to_machine = mysqli_real_escape_string($db,$_POST['DropListType_two']);

                $remove_prev_component_to_machine = mysqli_real_escape_string($db,$_POST['DropListType_three']);



                
                $sql_update_component =  "UPDATE components SET support = '".$support_input."' WHERE s_n LIKE '$add_new_component_to_machine' AND Component_type LIKE '".$headvalue."'";
                $query_update_component = mysqli_query($db,$sql_update_component);

                $sql_prev_component = "UPDATE components SET support = 'Storage' WHERE s_n LIKE '$remove_prev_component_to_machine' AND Component_type LIKE '".$headvalue."' ";
                $query_remove_component = mysqli_query($db,$sql_prev_component);
                

                if($query_update_component && $query_remove_component) {
    
                     echo "<script type='text/javascript'>alert('Password is Update!');</script>";
                    header('Location: Buliding-six.php');
    
                 } else {
    
                     echo "<script type='text/javascript'>alert('Wrong Email / password');</script>"; 
                    //header('Location: LoginMD.php');
                }
                
                
                }

          





?>