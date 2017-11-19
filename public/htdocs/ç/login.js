

function showLoginWindow(){

  if(document.getElementById('form-login').style.display === 'none'){
    document.getElementById('form-login').style.display = 'block';
    document.getElementById('header').style.display = 'none';
    document.getElementById('middle').style.display = 'none';
    document.getElementById('btnAdmin').innerHTML = 'CERRAR';
    document.getElementById('hr').style.display = 'none';
    document.getElementById('slider').style.display = 'none';




  }else{
    document.getElementById('form-login').style.display = 'none';
    document.getElementById('header').style.display = 'block';
    document.getElementById('btnAdmin').innerHTML = 'ADMINISTRADOR';
    document.getElementById('hr').style.display = 'block';
    document.getElementById('middle').style.display = 'block';
    document.getElementById('slider').style.display = 'block';

  }
}

function next(){

  document.getElementById('part1').style.display = 'none';
  document.getElementById('part2').style.display = 'block';
  document.getElementById('count').innerHTML = '2/2';


}

function previous(){

  document.getElementById('part1').style.display = 'block';
  document.getElementById('part2').style.display = 'none';
  document.getElementById('count').innerHTML = '1/2';

}


function validateLogin() {
  
  var email = document.forms["login_form"]["email"].value;
  var password = document.forms["login_form"]["pass"].value;

  if(email.trim() == "" | pass.trim()){
    alert("Introduzca un email")
    return false;

  }
}
