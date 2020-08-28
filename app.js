function funcion() {
    var email=document.getElementById("email")
    var encrptedText = CryptoJS.SHA1(email.value)
    var contra=document.getElementById("pass")
    var encrptedText2 = CryptoJS.SHA1(contra.value)
    alert("email : "+ encrptedText.toString()+ "\nclave : "+ encrptedText2.toString());
  }