<?php $con = mysql_connect("localhost","root","");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
      mysql_select_db("my_db", $con);
      if (isset($_POST['delete'])) {
      	$type=$_POST['a_type'];
      	if ($type=="Employee") {
          $box=$_POST['num'];
          while (list($key,$val)=@each($box)) {
      		 $e_type=$_POST['type'];
      		 $id=$_POST['id'];
      		if(!mysql_query("delete from employee where id= '$val' ")){

      			echo mysql_error();

      		}
      		else{
            header("location: view_list.php");
      		}
      	}	
      	}

      	elseif($type=="Patient"){
          $box=$_POST['num'];
           while (list($key,$val)=@each($box)) {
      		$username=$_POST['username'];
      		if (!mysql_query("delete from patient where username= '$val'")) {
      			echo mysql_error();
      			# code...
      		}
      		else{
			header("location: view_list.php");
      		}

      	}
      }
      	elseif($type=="Doctor"){
      		$box=$_POST['num'];
           while (list($key,$val)=@each($box)) {
          $username=$_POST['username'];
          if (!mysql_query("delete from doctors where username= '$val'")) {
            echo mysql_error();
            # code...
          }
          else{
      header("location: view_list.php");
          }

        }
      }
      	
      }
      elseif(isset($_POST['edit'])){
            $type=$_POST['a_type'];
            if ($type=="Employee") {
                   $e_type=$_POST['type'];
                   $id=$_POST['id'];
                  
                  
            }
            elseif($type=="Patient"){
                  echo $username=$_POST['username'];
                  $res= mysql_query("select  * from patient where username= '$username'");
                  if($row=mysql_fetch_assoc($res)){
                    $name=$row['Name'];
                       $gender=$row['gender'];
                       $birth=$row['Birth'];
                       $mobile=$row['mobile'];
                       $pass=$row['pass'];
                       echo "<form action='edit_user.php' method='POST'>";
                       echo " <table>";
                             echo "<input type='text' name='username'  value='$username' style='display:none'>
                               <th></th><th>New Value</th><th>Old Value</th>
                              <tr><th>NAME</th><td><input type='text'  value='$name' readonly></td>
                                          <td><input type='text' name='new_name' value='$name' ></td></tr>
                              <tr><th>Gender:</th><td><input type='text'  value='$gender' readonly></td>";
                              
                              if ($gender==Male) {
                             echo " <td>
                              <input id='gender' type='radio' name='new_gender' value='Male' checked='checked' >Male
                              <input id='gender' type='radio' name='new_gender' value='Female' >Female 
                              <input id='gender' type='radio' name='new_gender' value='Other' >Other 
                              </td></tr>";
                              }
                              elseif ($gender==Female) {
                              echo "<td>
                              <input id='gender' type='radio' name='new_gender' value='Male' >Male
                              <input id='gender' type='radio' name='new_gender' value='Female' checked='checked' >Female 
                              <input id='gender' type='radio' name='new_gender' value='Other' >Other 
                              </td></tr>";
                              }
                              else{
                              echo "<td>
                              <input id='gender' type='radio' name='new_gender' value='Male' >Male
                              <input id='gender' type='radio' name='new_gender' value='Female' >Female 
                              <input id='gender' type='radio' name='new_gender' value='Other' checked='checked' >Other 
                              </td></tr>";
                              }
                             echo  "<tr><th>Birthdate:</th><td><input type='date' value='$birth' readonly></td>
                              <td><input type='date' name='new_birth' value='$birth'></td></tr>
                        <tr><th>Password:</th><td><input type='text' name='old_pass' value='$pass' readonly></td>
                              <td><input type='text' name='new_pass' value='$pass' ></td></tr>
                        <tr><th>Mobile no:</th><td><input type='number' name='old_mobile' value='$mobile' readonly></td>
                              <td><input type='number' name='new_mobile' value='$mobile' ></td></tr>
                        "; 

                        echo "</table>
                        </form>";
                         
                  }


            }
            elseif($type=="Doctor"){
                  echo $username=$_POST['username'];
                  $res= mysql_query("select  * from doctors where username= '$username'");
                  if($row=mysql_fetch_assoc($res)){
                       $name=$row['Name'];
                       $gender=$row['gender'];
                       $birth=$row['Birth'];
                       $pass=$row['pass'];
                       $salary=$row['salary'];
                       $write=$row['write_something'];
                      
                       echo "<form action='edit_user.php' method='POST'>";
                       echo " <table>";
                             echo "<input type='text' name='username'  value='$username' style='display:none'>
                               <th></th><th>New Value</th><th>Old Value</th>
                              <tr><th>NAME</th><td><input type='text'  value='$name' readonly></td>
                                          <td><input type='text' name='new_name' value='$name' ></td></tr>
                              <tr><th>Gender:</th><td><input type='text'  value='$gender' readonly></td>";
                              
                              if ($gender==Male) {
                             echo " <td>
                              <input id='gender' type='radio' name='new_gender' value='Male' checked='checked' >Male
                              <input id='gender' type='radio' name='new_gender' value='Female' >Female 
                              <input id='gender' type='radio' name='new_gender' value='Other' >Other 
                              </td></tr>";
                              }
                              elseif ($gender==Female) {
                              echo "<td>
                              <input id='gender' type='radio' name='new_gender' value='Male' >Male
                              <input id='gender' type='radio' name='new_gender' value='Female' checked='checked' >Female 
                              <input id='gender' type='radio' name='new_gender' value='Other' >Other 
                              </td></tr>";
                              }
                              else{
                              echo "<td>
                              <input id='gender' type='radio' name='new_gender' value='Male' >Male
                              <input id='gender' type='radio' name='new_gender' value='Female' >Female 
                              <input id='gender' type='radio' name='new_gender' value='Other' checked='checked' >Other 
                              </td></tr>";
                              }
                             echo  "<tr><th>Birthdate:</th><td><input type='date' value='$birth' readonly></td>
                              <td><input type='date' name='new_birth' value='$birth'></td></tr>
                        <tr><th>Password:</th><td><input type='text' name='old_pass' value='$pass' readonly></td>
                              <td><input type='text' name='new_pass' value='$pass' ></td></tr>
                        <tr><th>Salary:</th><td><input type='text' name='old_mobile' value='$salary' readonly></td>
                              <td><input type='number' name='new_mobile' value='$salary' ></td></tr>
                         <tr><th>Comment:</th><td><input type='text'  value='$write' readonly></td>
                                          <td><input type='text' name='new_write' value='$write' ></td></tr>
                        <tr><td><input type='submit' name='edit_value1'  value='EDIT' ></td> "; 

                        echo "</table>
                        </form>";
                         
                 

                  }
                  
            }
      }
?>