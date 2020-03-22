<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "rcis");
// $connect = mysqli_connect("localhost", "innovk35_rcis", "royalschool", "innovk35_rcis");   
 if(isset($_POST["parent_name"]))  
 {  
      $select_branch = mysqli_real_escape_string($connect, $_POST["select_branch"]);  
      $select_grade = mysqli_real_escape_string($connect, $_POST["select_grade"]); 
      $parent_name = mysqli_real_escape_string($connect, $_POST["parent_name"]); 
      $parent_email = mysqli_real_escape_string($connect, $_POST["parent_email"]);
      $parent_phone = mysqli_real_escape_string($connect, $_POST["parent_phone"]);
      $parent_remarks = mysqli_real_escape_string($connect, $_POST['parent_remarks']);

      $sql = "INSERT INTO enquiry_form(select_branch, select_grade,parent_name,parent_email,parent_phone,parent_remarks) VALUES ('".$select_branch."', '".$select_grade."', '".$parent_name."', '".$parent_email."', '".$parent_phone."', '".$parent_remarks."')";  
      if(mysqli_query($connect, $sql))  
      {  
           echo "Message Saved";  
      }  
 }  
 ?>  