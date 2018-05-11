   <?php
require_once 'backend/database_connect.php';
   if (!(isset($_SESSION['uid']) && ($_SESSION['uid']!=null)))
   {
                header('Location:login.php?msg="Please Login to upload"');
    }
include_once 'style/head.php';
include_once 'style/left.html';
              
              
            
    ?>
    <style type="text/css">
      td{
        margin: 20px;
      }
    </style>
   
      <div style="padding-bottom : 30px;">
        <div class="col-lg-offset-3 formstyle" style="font-size: 16px;width: 600px;" >
          <h1 align="center" style="padding-bottom: 20px;">Content Upload</h1>
          <form action="backend/file_upload.php" method="POST" enctype="multipart/form-data">
            <table cellpadding="10px" cellspacing="10px" style="height: 400px; width: 100%">
              <tr>
                <td>
                  <label for="name">Content Name : 
                    
                   
                  </label>
                </td>
                <td>
                  <input type="text" name="cname" id="cname" value="" size="15" required>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="name">Discription : 
                      
                      <span></span>
                    </label>
                  </td>
                  <td>
                    <textarea name="cdesc" id="cdescription" ></textarea>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="name">Content Type
                      
                      <span></span>
                    </label>
                  </td>
                  <td>
                    Pdf <input type="radio" name="ctype" value="pdf" >&nbsp;
                    Image <input type="radio" name="ctype" value="image">&nbsp;
                    Ebook <input type="radio" name="ctype" value="ebook">&nbsp;
                  </td>
                      </tr>
                      <tr>
                        <td>
                          <label for="name">Type
                            
                            <span></span>
                          </label>
                        </td>
                        <td>
                          <select name="ccat" id="ccat">
                            <option value="Select"> Select</option>
                            <option value="Cloud Computing"> Cloud Computing </option>
                            <option value="Web Development"> Web Development </option>
                            <option value="Data Mining"> Data Mining </option>
                            <option value="Programming"> Programming </option>
                            <option value="Database"> Database </option>
                          </select>
                        </td>
                        <tr>
                          <td>
                            <label for="email">Thumbnail :  
                              
                              <span></span>
                            </label>
                          </td>
                          <td>
                            <input type="file" name="cthumb" id="cfile" required>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <label for="email">file :  
                                
                                <span></span>
                              </label>
                            </td>
                            <td>
                              <input type="file" name="cfile" id="cfile"  required>
                              </td>
                            </tr>
                          </table>
                          <div align="center">
                          <input class="btn btn-primary btn-lg" type="reset" name="reset" value="Reset">
                            <input class="btn btn-success btn-lg" type="submit" name="files" value="Upload">
                             
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </body>
                  </html>

        <?php
         include_once 'style/footer.html';
        ?>