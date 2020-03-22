<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "rcis");  
// $connect = mysqli_connect("localhost", "innovk35_rcis", "royalschool", "innovk35_rcis"); 
 if(isset($_POST["footer_name"]))  
 {  
      $footer_name = mysqli_real_escape_string($connect, $_POST["footer_name"]);  
      $footer_email = mysqli_real_escape_string($connect, $_POST["footer_email"]); 
      $footer_mobile = mysqli_real_escape_string($connect, $_POST["footer_mobile"]); 
      $footer_message = mysqli_real_escape_string($connect, $_POST["footer_message"]);

      $sql = "INSERT INTO footer_form(footer_name, footer_email,footer_mobile,footer_message) VALUES ('".$footer_name."', '".$footer_email."', '".$footer_mobile."', '".$footer_message."')";  
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