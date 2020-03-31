<?php

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
        }

        if (empty($lastname)) {
            array_push($errors,"last name is required");
        }

        if (empty($city)) {
            array_push($errors,"city is required");
        }

        if (empty($street)) {
            array_push($errors,"street is required");
        }

        if (empty($dateofbirth)) {
            array_push($errors,"date of birth is required");
        }

        if (empty($startofworking)) {
            array_push($errors,"start of working is required");
        }

        if (empty($email1)) {
            array_push($errors,"email is required");
        }

        if (empty($email2)) {
            array_push($errors,"email confirm is required");
        }

        if (empty($password1)) {
            array_push($errors,"password  is required");
        }

        if (empty($password1)) {
            array_push($errors,"password  is required");
        }

        if (empty($password2)) {
            array_push($errors,"password confirm is required");
        }

        if (empty($answer)) {
            array_push($errors,"answer is required");
        }

        if($password1 != $password2) {

            array_push($errors, "The two passwords do not match");
        }

        if(count($errors) == 0) {

            $sql = "INSERT INTO users(Email, FirstName, LastName, City, DateOfBirth, StartOfWorkingDate, Street, VerificationQuestion, AnswerToVerification, Password) 
            VALUES('$email1', '$firstname', '$lastname', '$city', '$dateofbirth', '$startofworking', '$street', '$question', '$answer', '$password1')";
            mysqli_query($db,$sql);
        }

        

    }


?>