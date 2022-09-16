var formulario=document.getElementById('formulario');//captura el formulario
var respuesta=document.getElementById('respuesta');
formulario.addEventListener('submit',function(e){//detecta el submit
e.preventDefault();//evita la recarga
	//console.log("CLICK");
	var datos=new FormData(formulario);//guarda información del formulairio en datos
	console.log(datos.get('codigo'));
	fetch('servidor.php',{//envia los datos del formulario
		method:'POST',
		body: datos
	})
		.then(res=>res.json())//recibe respuesta en formato json
		.then(data=>{
			
			
			if(data=='Error'){

				alert("Error")
			}else{
				console.log(data);
				document.getElementById("respuesta").innerHTML = data
				
			}
		})
	})




	