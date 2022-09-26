<?php


include_once 'conexiones/conexion.php'  ;

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
  <title>Document</title>

<script>
      function blockSpecialChar(e){
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
        }
</script>
</head>
<style>
    .input {
      transition: border 0.2s ease-in-out;
      min-width: 280px
    }

    .input:focus+.label,
    .input:active+.label,
    .input.filled+.label {
      font-size: .75rem;
      transition: all 0.2s ease-out;
      top: -0.1rem;
      color: #667eea;
    }

    .label {
      transition: all 0.2s ease-out;
      top: 0.4rem;
      left: 0;
    }
    button{
        margin-left:60px;
    }
  </style>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
<div class="shadow-xl p-10 bg-white max-w-xl rounded">
    <h1 class="text-4xl font-black mb-4">Iniciar Sesion</h1>
<form action="inicio.php" method="get">

<div class="mb-4 relative">
                    <input type="text" name="username" id="username" class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-indigo-600 focus:outline-none active:outline-none active:border-indigo-600" autocomplete="off"   onkeypress="return blockSpecialChar(event)"   name="user">
                    <label class="label absolute mb-0 -mt-2 pt-4 pl-3 leading-tighter text-gray-400 text-base mt-2 cursor-text" for="user">Usuario</label>
</div>
<div class="mb-4 relative">
               
                    <input type="password" name="clave" id="clave" class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-indigo-600 focus:outline-none active:outline-none active:border-indigo-600" onclick="goto()"  onkeypress="return blockSpecialChar(event)"   name="pass"  id="clave" class="label" >
                    <label class="label absolute mb-0 -mt-2 pt-4 pl-3 leading-tighter text-gray-400 text-base mt-2 cursor-text" for="clave">Contraseña</label>
              
</div>

<button class="bg-indigo-600 hover:bg-blue text-white font-bold py-3 px-6 rounded" name="envia" id="ingresar">Iniciar sesion</button>

                   
              

</form>
</div>


    <script>
      var btn = document.getElementById('ingresar');
var clave = document.getElementById('clave');
var usuario = document.getElementById('usuario');




btn.addEventListener('click', function(evt){

      if(clave.value === ''){

          alert('el campo contraseña es obligatorio')
          evt.preventDefault();
          return false;

      }else if(usuario.value === ''){

      alert('el campo de usuario es obligatorio')
          evt.preventDefault();
          return false;

      }else if(usuario.value.length > 15){

        alert('El nombre del usuario es demasiado largo')
          evt.preventDefault();
          return false;

      }


});


    </script>

<a href="<script>"></a>

</body>
</html>