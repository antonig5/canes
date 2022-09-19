<?php

    $user= $_GET['username'];
    $clave= $_GET['clave'];
    
?>

<script>
    var user;
    var clave;

    fetch('json/users.php?id_usu=123')
    .then(res=>res.json())
    .then(data=>{
        console.log(data)
    });

</script>
