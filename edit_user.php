 <?php  

 $con = mysql_connect("localhost","root","");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
      mysql_select_db("my_db", $con);
      if( isset($_POST['edit_value1']) ){
                             
                  $username= $_POST['username'];
                  $new_name= $_POST['new_name'];
                  $new_birth= $_POST['new_birth'];
                  $new_gender= $_POST['new_gender'];
                  $new_pass= $_POST['new_pass'];
                  $new_mobile= $_POST['new_mobile'];
                  $new_write= $_POST['new_write'];
                  $res1=mysql_query("update doctors set Name = '$new_name' where username='$username'");
                  $res2=mysql_query("update doctors set gender = '$new_gender' where username='$username'");
                  $res3=mysql_query("update doctors set Birth = '$new_birth' where username='$username'"); 
                  $res4=mysql_query("update doctors set pass = '$new_pass' where username='$username'");
                  $res5=mysql_query("update doctors set salary = '$new_mobile' where username='$username'");  
                  $res6=mysql_query("update doctors set write_something = '$new_write' where username='$username'");
                  
                  
                  }      
                    


 ?>