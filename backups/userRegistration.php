 <?php
  include_once 'style/head.php';
  include_once 'style/left.html';
  ?>
  <style type="text/css">
    td{
      margin: 20px;
    }
  </style>
 
 <div style="padding-bottom : 30px;">
        <div class="col-lg-offset-3 formstyle" style="font-size: 16px;width: 550px;" >
          
          <h1 align="center" style="padding-bottom: 20px;">User Registration</h1>
        <form action="backend/userReg.php" name="f3" method="POST" onsubmit="return validate_reg()">
        <table cellpadding="10px" cellspacing="10px" style="height: 400px;">
          <tr>
          <td>
            <label for="name">Name <span></span></label></td>
            <td><input type="text" name="name" id="name" value="" size="15" required></td>
          </tr>
          <tr>
          <td>
            <label for="name">Email<span></span></label></td>
            <td><input type="email"   name="uemail" id="uemail" size="15" required></td>
          </tr>
          <tr>
          <td>
            <label for="name">User name <span></span></label></td>
            <td><input type="text" name="uname" id="uname" size="15"  required></td>
          </tr>
          
          
         <tr>
         <td>
            <label for="email">Password <span></span></label></td>
            <td><input type="password" name="upass" id="upass" value="" size="15" required></td>
          <tr>
          <tr>
          <td>
            <label for="name">Re Password <span></span></label></td>
            <td><input type="password" name="rpass" id="rpass" size="15" required></td>
          </tr>
          <tr>
          <td>
            <label for="name">Category<span></span></label></td>
            <td><select name="ucat" id="ucat">
              <option value="Select"> Select </option>
              <option value="Employee"> Employee </option>
              <option value="Teacher"> Teacher </option>
              <option value="Student"> Student </option>

            </select>
            </td>
          </div>
          <tr>
          <td>
            <label for="name">Name of Organization / School / University / Company<span></span</span>></label>
            <td><input type="text" name="uorg" id="uorg" size="15"  required></td>
          </tr>
          </table>
          <p style="color:red;"><?php
          if (isset($_GET['msg'])&&($_GET['msg']!=null))
          {
            echo $_GET['msg'];
          }
          ?></p>
          <div align="center">
            <input class="btn btn-primary btn-lg" type="reset" name="reset" value="Reset">
            <input class="btn btn-success btn-lg" type="submit" name="reg" value="Sign Up">
          </div>
        </form>
      </div>
    </div>
  </div>
   <?php include_once 'style/footer.html';?>
