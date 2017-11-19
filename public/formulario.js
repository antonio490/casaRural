
function validateForm(){

  name = document.getElementById("name").value;
  email = document.getElementById("email").value;
  num = document.getElementById("personas").value;
  dateIn = document.getElementById("date_in").value;
  dateOut = document.getElementById("date_out").value;
  comment = document.getElementById("comment").value;


  document.getElementById("name").style.border="2px solid #586d8d";
  document.getElementById("name-val").innerHTML="";
  document.getElementById("email").style.border="2px solid #586d8d";
  document.getElementById("email-val").innerHTML="";
  document.getElementById("personas").style.border="2px solid #586d8d";
  document.getElementById("num-val").innerHTML="";
  document.getElementById("date_in").style.border="2px solid #586d8d";
  document.getElementById("dateIn-val").innerHTML="";
  document.getElementById("date_out").style.border="2px solid #586d8d";
  document.getElementById("dateOut-val").innerHTML="";

  name = name.trim();
  today = new Date().toLocaleDateString();


    if (name.length <= 2) {
      document.getElementById("name").style.border="2px solid #d8372e";
      document.getElementById("name-val").innerHTML="* Nombre incorrecto";
      return false;
    }


    if (email.trim() == "") {
      document.getElementById("email").style.border="2px solid #d8372e";
      document.getElementById("email-val").innerHTML="* Email incorrecto";
      return false;
    }

    if(validateEmail(email)==false){
      document.getElementById("email-val").innerHTML="* Formato email incorrecto";
      return false;
    }

    if(isNaN(num) || num < 1 || num > 5){
      document.getElementById("personas").style.border="2px solid #d8372e";
      document.getElementById("num-val").innerHTML="* Max 5 personas";
      return false;
    }

    if(dateIn == ""){
      document.getElementById("date_in").style.border="2px solid #d8372e";
      document.getElementById("dateIn-val").innerHTML="* fecha incorrecta";
      return false;
    }

    if(today > dateIn){
      document.getElementById("date_in").style.border="2px solid #d8372e";
      document.getElementById("dateIn-val").innerHTML="* fecha incorrecta";
      return false;
    }

    if(dateOut == ""){
      document.getElementById("date_out").style.border="2px solid #d8372e";
      document.getElementById("dateOut-val").innerHTML="* fecha incorrecta";
      return false;
    }

    if(dateIn > dateOut){
      document.getElementById("date_out").style.border="2px solid #d8372e";
      document.getElementById("dateOut-val").innerHTML="* fecha incorrecta";
      return false;
    }

  var unavailableDates = [
    {start: '2017-11-11', end: '2017-11-14'},
    {start: '2017-11-20', end: '2017-11-23'},
  ];

$('#calendar').availabilityCalendar(unavailableDates);



    function validateEmail(mail)   
    {  
      if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))  
      {  
        return true;
      }  
        return false;
    }  


    return true;
}

