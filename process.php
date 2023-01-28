 <?php
 session_start(); 
 echo "welcome"; 
 if (!isset($_SESSION["welcome"])) {
   header("Location: login.php");
}

 require_once("config_db.php");

 if (isset($_POST["edit"])){
   $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
   $message = mysqli_real_escape_string($conn, $_POST["message"]);
   $id = mysqli_real_escape_string($conn, $_POST["id"]);
 

   $sqlUpdate = "UPDATE email_sys SET subject = '$subject', message = '$message' WHERE id='$id'";
   if(mysqli_query($conn,$sqlUpdate)){
     
        $_SESSION["update"] = "Record Updated Successfully!";
        header("Location: inbox.php");
    }else{
        die("Something went wrong");
    }
 }
  

 ?>