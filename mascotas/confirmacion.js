function confirmacion(e){
    if(confirm("¿Esta seguro que desea eliminar este registro ?")){
        return true;
    }else{
        e.preventDefault();
    }
}
let linkDelete = document.querySelectorAll(".elimina");

for(var i = 0; i < linkDelete.length; i++){
    linkDelete[i].addEventListener('click',confirmacion);
}

function modificar(e){
    if(confirm("¿Esta seguro de modificar este registro?")){
        return true;
    }else{
        e.preventDefault();
    }
}
let linkDelete1 = document.querySelectorAll(".editar");

for(var i = 0; i < linkDelete1.length; i++){
    linkDelete1[i].addEventListener('click',modificar);
}
function guardar(e){
    if(confirm("Se guardara  esta  modificación. ¿Desea continuar?")){
        return true;
    }else{
        e.preventDefault();
    }
}
let linkDelete2 = document.querySelectorAll(".guardar");

for(var i = 0; i < linkDelete2.length; i++){
    linkDelete2[i].addEventListener('click',guardar);
}