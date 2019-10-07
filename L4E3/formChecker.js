function reset(){
  document.getElementById('form').reset();
}

function validate(){

  var message = "";
  var choice = document.getElementById('choice').value;
  if (choice == "----" || choice == '') {
    message = message + "shipping method not selected";
  }
  var email = document.getElementById('user').value;
  var pass = document.getElementById('pw').value;
  var item1 = document.getElementById('item1').value;
  var item2 = document.getElementById('item2').value;
  var item3 = document.getElementById('item3').value;
  if (!validEmail(email)) {
    message = message + "email does not fit constraints";
  }
  if (item1 <=0 || item1 == "" || item2 <=0 || item2 == ""|| item3 <=0 || item3 == "") {
    message = message + "quantity can't be 0 or empty";
  }
  if (pass == '') {
    message = message + "password can't be empty";
  }

  if (message != '') {
    alert(message);
    return false;
  }
  return true;

}




function validEmail(email){
  return /\S+@\S+\.\S+/.test(mail);
}
