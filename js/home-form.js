window.onload = function(){

  let user = document.getElementById('sign-firstname');
  let userlname = document.getElementById('sign-lastname');
  let pass = document.getElementById('sign-password');
  let pass_rep = document.getElementById('sign-password-repeat');
  let submit = document.getElementById('sign-submit');


//firstname validation check
  user.addEventListener("keydown", function() {
    let uvalue_re = /^[a-zA-Z]+$/;
    let uvalue = user.value;

    if (uvalue === '') {
        user.style.border = "2px solid red";
    }else {
      if (!uvalue_re.test(uvalue)) {
        user.style.border = "2px solid red";
      }else {
        user.style.border = "2px solid blue";
      }
    }
  });

  //lastname validation check
  userlname.addEventListener("keydown", function() {
    let ulvalue_re = /^[a-zA-Z]+$/;
    let ulvalue = userlname.value;

    if (ulvalue === '') {
        userlname.style.border = "2px solid red";
    }else {
      if (!ulvalue_re.test(ulvalue)) {
        userlname.style.border = "2px solid red";
      }else {
        userlname.style.border = "2px solid blue";
      }
    }
  });

  //password Check
  pass.addEventListener("keydown", function() {
    let pvalue_re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
    let pvalue = pass.value;

    if (pvalue === '') {
        pass.style.border = "2px solid red";
    }else {
      if (!pvalue_re.test(pvalue)) {
        pass.style.border = "2px solid red";
      }else {
        pass.style.border = "2px solid blue";
      }
    }
  });

  pass_rep.addEventListener("keydown", function() {
    let pvalue = pass.value;
    let prvalue = pass_rep.value;

    if (prvalue === '') {
        pass_rep.style.border = "2px solid red";
    }else {
      if (!pvalue.test(prvalue)) {
        pass_rep.style.border = "2px solid red";
        submit.disabled = true;
      }else {
        pass_rep.style.border = "2px solid blue";
        submit.enabled = true;
      }
    }
  });

};//end window.onload
