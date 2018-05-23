<<<<<<< HEAD
<?php
 class conexion{
    private $oConexion=null;
    
      function conectar(){
        $bRet = false;
        try{
          //$this->oConexion = new PDO("pgsql:dbname=ejhospdb; host=localhost; user=hospital; password=hospital1");
          $this->oConexion = new PDO("mysql:host=localhost;dbname=beza","root","",  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
          $bRet = true;
        }catch(Exception $e){
          throw $e;
        }
      return $bRet;
    }


    function desconectar(){
    $bRet = true;
    if ($this->oConexion != null){
      $this->oConexion=null;
    }
    return $bRet;
    }


      function ejecutarComando($psComando){
        $nAfectados = -1;
        if ($psComando == ""){
          throw new Exception("AccesoDatos->ejecutarComando: falta indicar el comando");
        }
        if ($this->oConexion == null){
          throw new Exception("AccesoDatos->ejecutarComando: falta conectar la base");
        }
        try{
          $nAfectados =$this->oConexion->exec($psComando);
        }catch(Exception $e){
          throw $e;
        }
        return $nAfectados;
      }
}
 ?>
=======
<?php
$mysqli=new mysqli('localhost','root','','beza');
if ($mysqli->connect_errno) {
  echo "Error al conectarse con My SQL debido al error".$mysqli->connect_error;
}
 ?>
>>>>>>> 5a280bef883bc3167b33a629a9c3131417ada277
