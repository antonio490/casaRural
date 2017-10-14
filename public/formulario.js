function validateForm() {


    var x = document.forms["formulario"]["name"].value;
    var y = document.forms["formulario"]["email"].value;


    if (x == "") {
      document.getElementById("name").style.border="2px solid #d8372e";
    }

    if (y == "") {
      document.getElementById("email").style.border="2px solid #d8372e";
    }

    return false;

}
