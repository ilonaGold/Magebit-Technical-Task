<?php


if ( isset( $_POST['submit'] ) ) {

    $email = $_POST['email'];
    $today = date("Y-m-d H:i:s");

    require_once "./conn.php";
    // echo $today;

    echo $email;
    echo $today;


    // $requete = "INSERT INTO subscribers (email, subscription_date) VALUES ("'.$email.'", "'.$today.'");";
    $requete="INSERT INTO subscribers SET email='".mysqli_real_escape_string($conn, $_POST['email'])."', subscription_date='".$today."'";
    if(mysqli_query($conn,$requete)){
        header("location: index.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    
    mysqli_close($conn);
} else {
    header("location: action_page.php?message=wrong!t");
    exit();
}


?>