<?php

  session_start();

  /* if(!isset($_SESSION['status'])){
      header('location: login.php?err=invalid_request');
  } */

?>

<html>
<head>
  <title>User Home</title>
</head>
<body>
  <!-- <h1><center>Welcome Bob!</center></h1> -->
  <!-- <h1><center>Welcome <?php echo "$_SESSION[$user][$name])"; ?></center></h1> -->

  <center><a href="../views/profile.php">Profile</a></center>
  <center><a href="../views/changePass.php">Change Password</a></center>
  <center><a href="../views/logout.php">Logout</a></center>
  <center><a href="../views/register.php">Regestration</a></center>
  <center><a href="../views/login.php">login</a></center>



  <table>
  <thead>
    <tr>
      <th colspan="2">October</th>
      <th colspan="2">November</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td><p>Sales</p> </td>
      
    </tr>
    <tr>
      <td>$200,00</td>
      <td>$50,00</td>
      <td>$300,000</td>
      <td>$70,000</td>
    </tr>
  </tbody>
    
  <tfoot>
    <tr>
      <th colspan= "4">November was more produstive</th>
    </tr>
  </tfoot>
</table>









</body>
</html>