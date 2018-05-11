 var cname_exp = /^[a-zA-Z ]*$/;
 var desc_exp = /^[a-zA-Z0-9 ]*$/;
 function validate_reg()
    {

        document.getElementById("s9").innerHTML = "";
        document.getElementById("s10").innerHTML = "";
        document.getElementById("s11").innerHTML = "";
        document.getElementById("s12").innerHTML = "";
        document.getElementById("s13").innerHTML = "";
        document.getElementById("s14").innerHTML = "";
        document.getElementById("s15").innerHTML = "";



  
      var name = document.f3.name.value;
      var email = document.f3.uemail.value;
      var uname = document.f3.uname.value;
      var pw = document.f3.upass.value;
      var rpw = document.f3.rpass.value;
      var cat = document.f3.ucat.value;
      var uorg = document.f3.uorg.value;
      var name_regxp = /^[a-zA-Z ]*$/;
      var email_regxp = /^[a-zA-Z0-9]+[@][a-z]+[.][a-z]+$/;
     
      if(name == "")
      {
        document.getElementById("s9").innerHTML = "Please enter your name";
        return false;
      }
      if(!name.match(name_regxp))
      {
        document.getElementById("s9").innerHTML = "Name should contain only alphabets";
        return false;
      }
      if (email == "") 
      {
        document.getElementById("s10").innerHTML = "Please enter email";
        return false;
      }
      if (!email.match(email_regxp)) 
      {
        document.getElementById("s10").innerHTML = "Please enter a valid email address";
        return false;
      }
      if(uname == "")
      {
        document.getElementById("s11").innerHTML = "Please enter username";
        return false;
      }
      if (pw == "")
      {
        document.getElementById("s12").innerHTML = "Please enter password";
        return false;
      }
      if (rpw == "") 
      {
        document.getElementById("s13").innerHTML = "Please re-enter your password";
        return false;
      }
      if(rpw != pw)
      {
        document.getElementById("s13").innerHTML = "Passwords do not match";
        return false;
      }
      if (cat == "Select") 
      {
        document.getElementById("s14").innerHTML = "Please select a Category";
        return false;
      }
      if (uorg == "") 
      {
        document.getElementById("s15").innerHTML = "Please enter Name of Organization / School / University / Company";
        return false;
      }
     
      return true;
    }
    function validate_login()
    {
        document.getElementById("s7").innerHTML = "";
        document.getElementById("s8").innerHTML = "";

      var uname = document.f2.uname.value;
      var pw = document.f2.upass.value;
      if (uname == "")
       {
        document.getElementById("s7").innerHTML = "Please enter Username";
        return false;
       }
       if(pw == "")
       {
        document.getElementById("s8").innerHTML = "Please enter password";
        return false;
       }

       
      return true;
    }
    function validate_content()
        {
              document.getElementById("s1").innerHTML = "";
              document.getElementById("s2").innerHTML = "";
              document.getElementById("s3").innerHTML = "";
              document.getElementById("s4").innerHTML = "";




          var cname = document.f1.cname.value;
          var desc = document.f1.cdesc.value;
          var ctype = document.f1.ctype.value;
          var type = document.f1.ccat.value;
          var cthumb = document.f1.cthumb.value;
          var file = document.f1.cfile.value;
          //alert(type);
          if (cname == "") 
          {
            document.getElementById("s1").innerHTML = "Please fill content name";
            return false;
          }
           if(!cname.match(cname_exp))
            {
            document.getElementById("s1").innerHTML = "Content name should only contain letters";
             return false;
            }
            if (desc.length>50) 
            {
              document.getElementById("s2").innerHTML = "Description can contain maximum 50 characters only";
              return false;
            }
            if (!desc.match(desc_exp))
            {
              document.getElementById("s2").innerHTML = "Description cannot contain alphanumeric characters";
              return false;
            }
            if (ctype == "") 
            {
              document.getElementById("s3").innerHTML = "Please select content type";
              return false;
            }
            if (type == "Select") 
            {
              document.getElementById("s4").innerHTML = "Please select a category";
              return false;
            }
            

         
            return true;
        }

function validate_profile()
{
  document.getElementById("ep1").innerHTML = "";
  document.getElementById("ep2").innerHTML = "";
  document.getElementById("ep3").innerHTML = "";
  document.getElementById("ep4").innerHTML = "";
  document.getElementById("ep5").innerHTML = "";
  document.getElementById("ep6").innerHTML = "";

  var name = document.ep.name.value;
  var email = document.ep.uemail.value;
  var pw = document.ep.upass.value;
  var rpw = document.ep.rpass.value;
  var cat = document.ep.ucat.value;
  var org = document.ep.uorg.value;
  var name_regxp = /^[a-zA-Z ]*$/;
  var email_regxp = /^[a-zA-Z0-9]+[@][a-z]+[.][a-z]+$/;

  if(name == "")
  {
    document.getElementById("ep1").innerHTML = "Please enter your name";
    return false;
  }
  if(!name.match(name_regxp))
  {
    document.getElementById("ep1").innerHTML = "Name should contain only letters";
    return false;
  }
  if(email == "")
  {
    document.getElementById("ep2").innerHTML = "Please enter your email";
    return false;
  }
  if(!email.match(email_regxp))
  {
    document.getElementById("ep2").innerHTML = "Please enter a valid email";
    return false;
  }
  if(pw == "")
  {
    document.getElementById("ep3").innerHTML = "Please enter your password";
    return false;
  }
   if(rpw == "")
  {
    document.getElementById("ep4").innerHTML = "Please re-enter your password";
    return false;
  }
   if(rpw != pw)
  {
    document.getElementById("ep4").innerHTML = "Passwords do not match";
    return false;
  }
   if(cat == "")
  {
    document.getElementById("ep5").innerHTML = "Please select category";
    return false;
  }
   if(org == "")
  {
    document.getElementById("ep6").innerHTML = "Please enter Organization name";
    return false;
  }
  return true;
}
