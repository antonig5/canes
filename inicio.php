
<?php
    session_start();
    require("conexiones/conexion.php");

    if (!isset($_GET['username']) || !isset($_GET['envia'])) {
        header("Location: iniciar.php");
    }
    elseif (isset($_GET['envia'])) {
        try {

            $inicio= htmlentities(addslashes($_GET['username']));
            $clave= htmlentities(addslashes($_GET['clave']));
            $conta=0;

            $sentencia="SELECT * FROM usuario,tipo_usu WHERE usuario=:usu and usuario.id_tipo=tipo_usu.id_tipo";
            $select=$base_de_datos->prepare($sentencia);
            $select->execute(array(":usu"=>$inicio));
            
            if ($les=$select->fetch(PDO::FETCH_ASSOC)) {
                if (password_verify($clave, $les['clave'])) {
                    
                    $id=      $les['id_usu'];
                    $usu=     $les['usuario'];
                    $con=     $les['clave'];
                    $nombre=  $les['nombre_usu'];
                    $apellido= $les['apellido_usu'];
                    $add=  $les['id_tipo'];
                    $tip=      $les['tipo'];
                    //variables Globales
                    $_SESSION['cedu']=$id;
                    $_SESSION['usuario']=$usu;
                    $_SESSION['clave']=$con;
                    $_SESSION['nomb']=$nombre;
                    $_SESSION['apel']=$apellido;
                    $_SESSION['tipo']=$add;
                    $_SESSION['tip']=$tip;
                        $conta++;
                }
            }
            if ($conta>0) {
                if ($_SESSION['tipo'] == 1) {
                    header("Location: admin/index.php");
                }
                else if ($_SESSION['tipo'] == 2) {
                    header("Location: auxiliar/index.php");
                }
                else if ($_SESSION['tipo'] == 3) {
                    header("Location: client/index.php");
                }
                else if ($_SESSION['tipo'] == 4) {
                    header("Location: recepcionista/index.php");
                }
            }
            else {
                require("iniciar.php");
            }
            $select->closecursor();
            $base_de_datos->exec("set character set utf8");
            
        } catch (Exception $th) {
            die("Error".$th->getMessage());
        }
    }
?>
    



