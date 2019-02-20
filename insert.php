<?php 
        session_start();
        
        $con = mysql_connect("localhost","root","");
        if (!$con)
          {
          die('Could not connect: ' . mysql_error());
          }
          mysql_select_db("my_db", $con);
              //patient
          if ($_POST['type']=="Patient") {
            
            # code...
            
            $name=$_POST['Name'];
            $gender=$_POST['gender'];
            $birth=$_POST['Birth'];
            $email=$_POST['email'];
            $username=$_POST['username'];
            $pass=$_POST['pass'];

            if($birth<=2018-06-25){
              echo "Enter Valid Date";
  echo "<a href='home.php'>Try again</a>";
}

else{
        $sql="INSERT INTO patient(Name,gender,Birth,email,username,pass)
        VALUES
        ('$name','$gender','$birth', '$email', '$username','$pass')";

        if (!mysql_query($sql,$con))
          {
          die('Error: ' . mysql_error());
          }
          $result=mysql_query("select * from patient where username = '$username' and pass= '$pass' ") or die();
        if(mysql_num_rows($result)==1){
            $row=mysql_fetch_array($result);
            $_SESSION['username']= $db_username= $row['username'];
            $_SESSION['pass']= $db_pass=$row['pass'];
            $_SESSION['name']= $db_name=$row['Name'];
            $_SESSION['gender']= $db_gender=$row['gender'];
            $_SESSION['birth']= $db_Birth=$row['Birth'];
            $_SESSION['email']= $db_email=$row['email'];
            $_SESSION['mobile']=$db_mobile=$row['mobile'];
            $_SESSION['bill']=$db_bill= $row['bill'];
            $_SESSION['login']="login_pat";
            }
          header("location: Patient_profile.php");
 
}
          } 



          //DOCTORs
          else if ($_POST['type']=="Doctor") {
            # code...
            
            $name=$_POST['Name'];
            $gender=$_POST['gender'];
            $birth=$_POST['Birth'];
            $mobile=$_POST['mobile'];
            $speciality=$_POST['speciality'];
            $email=$_POST['email'];
            $username=$_POST['username'];
            $pass=$_POST['pass'];
            $salary=$_POST['salary'];
            $sql="INSERT INTO doctors(Name,gender,Birth,mobile,specialiti,email,username,pass,salary)
        VALUES
        ('$name','$gender','$birth','$mobile','$speciality', '$email', '$username','$pass', '$salary')";

        if (!mysql_query($sql,$con))
          {
          die('Error: ' . mysql_error());
          }
        //   $result=mysql_query("select * from doctors where username = '$username' and pass= '$pass' ") or die();
        // if(mysql_num_rows($result)==1){
        //   $row=mysql_fetch_array($result);
        //   $_SESSION['username']= $db_username= $row['username'];
        //   $_SESSION['pass']= $db_pass=$row['pass'];
        //   $_SESSION['name']= $db_name=$row['Name'];
        //   $_SESSION['gender']= $db_gender=$row['gender'];
        //   $_SESSION['birth']= $db_Birth=$row['Birth'];
        //   $_SESSION['speciality']= $db_speciality=$row['specialiti'];
        //   $_SESSION['email']= $db_email=$row['email'];
        //   $_SESSION['mobile']=$db_mobile=$row['mobile'];
        //   $_SESSION['salary']=$db_salary=$row['salary'];
        //   $_SESSION['write']= $db_write=$row['write_something'];
          
        // }
        $_SESSION['type']="Doctor";
          header("location: view_list.php");


          }

          //ADMIN
          else if ($_POST['type']=="Admin") {
            
            $name=$_POST['Name'];
            $gender=$_POST['gender'];
            $birth=$_POST['Birth'];
            $email=$_POST['email'];
            $username=$_POST['username'];
            $pass=$_POST['pass'];
            
            $sql="INSERT INTO admin(Name,gender,Birth,email,username,pass)
        VALUES
        ('$name','$gender','$birth', '$email', '$username','$pass')";

        if (!mysql_query($sql,$con))
          {
          die('Error: ' . mysql_error());
          }
          $result=mysql_query("select * from admin where username = '$username' and pass= '$pass' ") or die();
            if(mysql_num_rows($result)==1){
            $row=mysql_fetch_array($result);
            $_SESSION['username']= $db_username= $row['username'];
            $_SESSION['pass']= $db_pass=$row['pass'];
            $_SESSION['name']= $db_name=$row['Name'];
            $_SESSION['gender']= $db_gender=$row['gender'];
            $_SESSION['birth']= $db_Birth=$row['Birth'];
            $_SESSION['email']= $db_email=$row['email'];
            $_SESSION['mobile']=$db_mobile=$row['mobile'];
          $_SESSION['login']="login_ad";
          }
          header("location: Admin_profile.php");

          }

      
        ?>
<!DOCTYPE html>
<html>
<head>
  
</head>
<body>

</body>
</html>