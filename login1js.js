  alert('IM IN');
function validateLecturer()
{
  alert('IM IN');
  // var dom=document.getElementById('check1');
  // var eId=dom.uId_signup;/*need to find validation parameters*/
  // var email=dom.email_signup;
  // var password=dom.psw_signup;
  // var repassword=dom.psw_repeat_sig;
  // if(ValidateEmail(email))
  // {
  //   if(passid_validation(password))
  //   {
  //     if(recheckPassword(password,repassword))
  //     {
  //
  //     }
  //   }
  // }
  // return false;
}

function validateStudent()
{
  var dom=document.getElementById("check2");
  var usn=dom.usn;
  var email=dom.email;
  var password=dom.psw;
  var repassword=dom.psw_repeat;
  if(validateUSN(usn))
  {
    if(ValidateEmail(email))
    {
      if(passid_validation(password))
      {
        if(recheckPassword(password,repassword))
        {

        }
      }
    }
  }

}

function passid_validation(passid,mx,my)
{
var passid_len = passid.value.length;
if (passid_len == 0 ||passid_len >= my || passid_len < mx)
{
alert("Password should not be empty / length be between "+mx+" to "+my);
passid.focus();
return false;
}
return true;
}

function ValidateEmail(uemail)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(uemail.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
uemail.focus();
return false;
}
}

function recheckPassword(pass1, pass2)
{
  if(pass1.value===pass2.value)
  {
    return true;
  }
  else
  {
    alert("The passwords you have entered do not match");
    pass1.focus();
    return false;
  }
}

function validateUSN(usn)
{
  var usnFormat=/[1][BMbm][0-9]{2}[A-Za-z][A-Za-z][0-9]{3}/;
  if(usn.value.match(usnFormat))
  {
    return true;
  }
  else
  {
    alert("Re-enter USN");
    usn.focus();
    return false;
  }
}
