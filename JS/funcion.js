$(document).ready(function(){
    $("#reg_form").validate({
        rules:{
            usuario2:{
                required:true,
                minlenght:4},
            pass2:{
                required:true,
                minlenght:4,
                maxlenght:10}
        },
        messages:{
            usuario2:{
                required:"Se requiere un nombre de usuario",
                minlenght:"Es necesario minimo 4 caracteres",
                maxlenght:"Maximo 10 caracteres"
            },
            pass2:{
                required:"Ingrese una contraseña",
                minlenght:"Minimo 4 caracteres"
            }
        }
    })
    $("#acc_form").validate({
        rules:{
            usuario1:{
                required:true},
            pass1:{
                required:true,
                maxlenght:10}
        },
        messages:{
            usuario1:{
                required:"Se requiere un nombre de usuario",
            },
            pass1:{
                required:"Ingrese una contraseña validad",
                maxlenght:"Maximo 10 caracteres"
            }
        }
    })
})