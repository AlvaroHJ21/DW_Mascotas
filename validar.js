function validar(){
    let usser, email, password, password2;
    usser = document.getElementById("usser").value;
    email = document.getElementById("email").value;
    password = document.getElementById("password").value;
    password2 = document.getElementById("password2").value;

    expresion = /\w+@\w+\.+[a-z]/;
    let mayus = /^(?=.*[A-Z])/;
    //let special = /^(?=.*[#$%&/?*].*[#$%&/?*])/;
    let special = /^(?=(.*[#$%&/?*]){2,})/;
    //let numbers = /^(?=.*[0-9].*[0-9])/;
    let numbers = /^(?=(.*[0-9]){2,})/;
    //let lower = /^(?=.*[a-z])/;
    let lower = /^(?=(.*[a-z]){0,})/;
    let len = /^(?=.{8,})/; //Al menos 8 caracteres
    let regExp = [mayus, special, numbers, lower, len];

    /*
    La contraseña debe contener
    Al menos 8 caracteres
    Al menos 2 numero
    Al menos 1 mayúscula
    Al menos 2 caracteres entre #$%&/? */


    if(usser === ""||password === ""||email === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }else if(password !== password2){
        alert("Las contraseñas no coinciden");
        return false;
    }else if(!expresion.test(email)){
        alert("El correo no es valido");
        return false;
    }

    for(let i = 0; i<5; i++){
        if(!regExp[i].test(password)){
            alert(regExp[i]+" error!");
            alert("El password no es valido");
            return false;
        }else{
            //alert(regExp[i]+" validado!");
        }
    }
}