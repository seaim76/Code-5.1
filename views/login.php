<html>

<head>
  <title>Login Form</title>
  <style>
      body {
        display: flex;
        justify-content: center;
        align-content: center:
      }
      table {
        width: 400px;
      }
      fieldset {
        margin-top: 200px;
        width: 400px;
      }
    </style>
</head>

<body>
  <form method="post" action="../controllers/loginCheck.php">

    <fieldset>
      <legend>LOGIN</legend>
      <table>
        <tr>
          <td>User ID </td>
          <td><input type="text" name="userid" value="" ></td>
        </tr>
        <tr>
          <td>Password </td>
          <td><input type="password" name="password" value="" ></td>
      </table>
      <hr>
      <table>
        <tr><input type="checkbox">Remember Me</tr>
        <tr>
          <td>
          <td><input type="submit" name="btn" value="Submit"></td>
          </td>
          <td><a href="changePass.php">changePass</a></td>
   
        </tr>

      </table>
    </fieldset>
    
  </form>

</body>

</html>
