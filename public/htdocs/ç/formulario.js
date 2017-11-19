
function validateForm() {

	var check_name = true;
	var check_email = true;
	var check_phone = true;


    var name = document.forms["formulario"]["name"].value;
    var email = document.forms["formulario"]["email"].value;
	 var phone = document.forms["formulario"]["telefono"].value;



    if (name.trim() == "") {
      document.getElementById("name").style.border="2px solid #d8372e";
      check_name = false;
      return true;
    }

    if (email.trim() == "") {
      document.getElementById("email").style.border="2px solid #d8372e";
      check_email = false;
    }

    if (phone.trim() == "" | phone < 9) {
      document.getElementById("telefono").style.border="2px solid #d8372e";
      check_phone = false;
    }

   

    return false;

}

