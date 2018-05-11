  <?php
  include_once 'style/head.php';
  include_once 'style/left.html';
  ?>
 
 <div style="padding-bottom : 30px;">
        <div style="" class="col-lg-offset-3 formstyle" >
          
          <h1 align="center" style="padding-bottom: 20px;">Login</h1>

          <form action="backend/login.php" method="POST">
   
            <div >

              <label for="uname">Username <span></span></label>
              <input class="my_input" type="text" name="uname" id="name" value="" size="15" required>
            </div>
            <br>
            <div>
              <label >Password </label>
              <input class="my_input" type="password" name="upass" id="pass" value="" size="15" required>
            </div>
            <p style="color:red"><?php
            if (isset($_GET['msg'])&&($_GET['msg']!=null))
            {
              echo $_GET['msg'];
            }
            ?></p>
            <div align="center">
              <input class="btn btn-primary  btn-lg" type="reset" name="reset" value="Reset" >
              <input type="submit" name="login" class="btn btn-success btn-lg" value="Login">
            </div>
          </form>
          
        </div>
      </div>
      </div>
    <?php include_once 'style/footer.html';?>
