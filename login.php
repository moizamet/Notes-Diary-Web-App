  <?php
  include_once 'style/head.php';
  include_once 'style/left.html';
  ?>
 <style type="text/css">
   .yo
   {
    color: red;
   }
 </style>
 <div style="padding-bottom : 30px;background-color: #eaeff3;">
        <div style="" class="col-lg-offset-3 formstyle" >
          
          <h1 align="center" style="padding-bottom: 20px;">Login</h1>

          <form action="backend/login.php" name ="f2" method="POST" onsubmit="return validate_login()">
   
            <div >

              <label for="uname">Username <span></span></label>
              <input class="my_input" type="text" name="uname" id="name" value="" size="15"><p class="yo"><span id="s7"></span></p>
            </div>
            <br>
            <div>
              <label >Password </label>
              <input class="my_input" type="password" name="upass" id="pass" value="" size="15"><p class="yo"><span id="s8"></span></p>
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
