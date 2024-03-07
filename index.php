<!DOCTYPE html>
<html lang="en">
<head>
      <title>Document</title>
</head>
<body>
<!-- <form action="#" method="post">
        Name : <input type="text" name="name"><br><br>
        Email : <input type="email" name="mail"><br><br>
        Phone No. : <input type="number" name="mobile"><br><br>
        Location : <input type="text" name="location"><br><br>
        <input type="Submit" name="submit">        
    </form> -->
  
  <h1>CRUD TABLE</h1>
  <hr>
  <table border="2px" width='95%'>
 <tr>
      <th>Name</th>
      <th>City</th>
      <th>Class</th>
 </tr>
  </table>
  <?php
//   while($data = mysqli_fetch_array($csa)){
//       echo '<tr>';
//       echo '<td>'.$data['name'].'</td>';
//       echo '<td>'.$data['city'].'</td>';
//       echo '<td>'.$data['subject'].'</td>';
//       echo '</tr>';
//    }
  ?>
  <h1>op form</h1>
  <form method="post">
      Name : <input type="text" name="name"> <br><br>
      Enter your City : <input type="text" name="city"><br><br>
      Class : <input type="text" name="subject"> <br><br>
         <input type="submit" name="submit"><br>
  </form>
  </body>
</html>
   <?php
if(isset($_POST['submit']))
{$a = $_POST['name'];
 $b = $_POST['city'];
 $c = $_POST['subject'];
 
 $connect = mysqli_connect('localhost', 'root', '', 'csa');
 $e = "insert into csa(name, city, subject) values('$a', '$b', '$c')";
 mysqli_query($connect,$e);
 echo 'User addes successfully';
}

?>

   
