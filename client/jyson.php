<?PHP
    include_once("./client.php");


class Apicliente{
    function getAll(){
        $cliente=new cliente();
        $clientes=array();
        $clientes['cliente']=array();

        $pes=$cliente->Getcliente();
        if ($pes->rowCount()){
            while ($ca=$pes->fetch(PDO::FETCH_ASSOC)){
                $item2=array(
                    "id_cliente"=>$ca['id_cliente'],
                    "nombre_cliente"=>$ca['nombre_cliente'],
                    "apellido_cliente"=>$ca['apellido_cliente'],
                    "direccion"=>$ca['direccion'],
                    "celular"=>$ca['celular'],
                );
                array_push($clientes["cliente"],$item2);
            }
            echo json_encode($clientes);
        }
        else{
            echo json_encode(array("mensaje"=>'no hay elementos'));
        }
    }
}
?>