<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "rcis");  
// $connect = mysqli_connect("localhost", "innovk35_rcis", "royalschool", "innovk35_rcis"); 
 if(isset($_POST["side_name"]))  
 {  
      $side_name = mysqli_real_escape_string($connect, $_POST["side_name"]);  
      $side_email = mysqli_real_escape_string($connect, $_POST["side_email"]); 
      $side_phone = mysqli_real_escape_string($connect, $_POST["side_phone"]); 
      $side_branches = mysqli_real_escape_string($connect, $_POST["side_branches"]);
      $side_grade = mysqli_real_escape_string($connect, $_POST["side_grade"]);
    //   $side_address = mysqli_real_escape_string($connect,$_POST['side_address']);
      $side_message = mysqli_real_escape_string($connect, $_POST['side_message']);

      $sql = "INSERT INTO side_enquiry_form(side_name, side_email,side_phone,side_branches,side_grade,side_message) VALUES ('".$side_name."', '".$side_email."', '".$side_phone."', '".$side_branches."', '".$side_grade."','".$side_message."')";  
      if(mysqli_query($connect, $sql))  
      {  
          echo "Message Saved";  
      }  
 }
//  $sql = "INSERT INTO side_enquiry_form(side_name, side_email,side_phone,side_branches,side_grade,side_address,side_message) VALUES ('".$side_name."', '".$side_email."', '".$side_phone."', '".$side_branches."', '".$side_grade."', '".$side_address."','".$side_message."')";  
//       if(mysqli_query($connect, $sql))  
//       {  
//           echo "Message Saved";  
//       }
 ?>  