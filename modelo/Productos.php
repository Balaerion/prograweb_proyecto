<?php
  include_once("conexion.php");
  /**
   *
   */
  class Producto
  {
    protected idproducto = "";
    protected nombre = "";
    protected precio = "";
    protected tipo = "";
    protected cantidad = "";


    function insertar(){
  	$oConexion = new conexion();
  	$sQuery="";
  	$nAfectados=-1;
  		if ($this->idproducto == "" OR $this->nombre == "" OR $this->precio == "" OR $this->tipo == "" OR $this->cantidad <= -1)
  			throw new Exception("Productos->insertar(): faltan datos");
  		else{
  			if ($oAccesoDatos->conectar()){
  		 		$sQuery = "INSERT INTO `producto`(`idproducto`, `nombre`, `precio`, `tipo`, `cantidad`) VALUES (DEFAULT,$this->nombre,$this->precio,$this->tipo,$this->cantidad)";
  				$nAfectados = $oConexion->ejecutarComando($sQuery);
  				$oAccesoDatos->desconectar();
  			}
  		}
  		return $nAfectados;
  	}

    function modificar(){
  	$oConexion = new conexion();
  	$sQuery="";
  	$nAfectados=-1;
  		if ($this->idproducto == "" OR $this->nombre == "" OR $this->precio == "" OR $this->tipo == "" OR $this->cantidad <= -1)
  			throw new Exception("PersonalHospitalario->modificar(): faltan datos");
  		else{
  			if ($oAccesoDatos->conectar()){
  		 		$sQuery = "UPDATE `producto` SET `nombre`=$this->nombre,`precio`=$this->precio,`tipo`=$this->tipo,`cantidad`= $this->cantidad WHERE `idproducto`=$this->idproducto";
  				$nAfectados = $oConexion->ejecutarComando($sQuery);
  				$oConexion->desconectar();
  			}
  		}
  		return $nAfectados;
  	}

    function borrar(){
  	$oConexion = new conexion();
  	$sQuery="";
  	$nAfectados=-1;
  		if ($this->idproducto==0)
  			throw new Exception("Producto->borrar(): faltan datos");
  		else{
  			if ($oAccesoDatos->conectar()){
  		 		$sQuery = "DELETE FROM `producto`
  							WHERE idproducto = ".$this->$this->idproducto;
  				$nAfectados = $oConexion->ejecutarComando($sQuery);
  				$oConexion->desconectar();
  			}
  		}
  		return $nAfectados;
  	}


  }

?>
