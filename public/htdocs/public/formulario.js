
function validateForm() {

  num = document.getElementById("personas").value;
  name = document.getElementById("name").value;
  email = document.getElementById("email").value;
  comment = document.getElementById("comment").value;

  document.getElementById("name").style.border="2px solid #586d8d";
  document.getElementById("name-val").innerHTML="";
  document.getElementById("email").style.border="2px solid #586d8d";
  document.getElementById("email-val").innerHTML="";
  document.getElementById("comment").style.border="2px solid #586d8d";
  document.getElementById("com-val").innerHTML="";

  dateFrom = document.getElementById("date_in").value;
  dateTo = document.getElementById("date_out").value;


  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth()+1; 
  var yyyy = today.getFullYear();



    if (name.trim() == "") {
      document.getElementById("name").style.border="2px solid #d8372e";
      document.getElementById("name-val").innerHTML="*Nombre incorrecto";
      return false;
    }


    if (email.trim() == "") {
      document.getElementById("email").style.border="2px solid #d8372e";
      document.getElementById("email-val").innerHTML="*Email incorrecto";
      return false;
    }

    if(isNaN(num) || num < 1 || num > 5){
      document.getElementById("num-val").innerHTML="Lo siento. El máximo admitido de personas es 5";
      return false;
    }

    if(dd <= dateTo.getDate){
      document.getElementById("dateFrom").innerHTML="La fecha de entrada no es válida";
      return false;
    }

 
   /* if(comment.trim() == "") {
      document.getElementById("comment").style.border="2px solid #d8372e";
      document.getElementById("com-val").innerHTML="Comentario";
      return false;
    }*/

    return false;
}

