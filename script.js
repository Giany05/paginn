function login(){
  var user
  var password
  
  user= document.getElementById("usuario").value;
  password= document.getElementById("contraseña").value;
  
  if(user == "prueba" && password == "1234"){
    window.location = "index.html"
    alert("Iniciaste Sesión")
  }else{
    alert("datos incorrectos")
  }
}