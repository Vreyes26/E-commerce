<?php

/**
 * Description of Productos
 *
 * @author vreye
 */
class Productos extends Connection{
    function __construct() {
        parent::__contruct();
    }
    
    public function insertar($producto)
    {
        $smt = $this->con->prepare("INSERT INTO Producto(nombre,precio,cantidad) VALUES(?,?,?)");
        //ASIGNAMOS VARIABLES A SUS METODOS
        $nombre = $producto->getNombre();
        $precio = $producto->getPrecio();
        $cantidad = $producto->getCantidad();
        
        //INSERTAR VARIABLES A SMT
        $smt->bind_param("sdi",$nombre,$precio,$cantidad);
        $smt->execute();
        $smt->close();
        
    }
}
