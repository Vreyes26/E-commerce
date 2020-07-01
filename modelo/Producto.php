<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Producto
 *
 * @author vreye
 */
class Producto {
    private $nombre;
    private $precio;
    private $cantidad;
    
    function __construct() {
        $this->setNombre("");
        $this->setPrecio(-1);
        $this->setCantidad(-1);
    }
    
    function getNombre()
    {
        return $this->nombre;
    }
    
    function getPrecio()
    {
        return $this->precio;
    }
    
    function getCantidad()
    {
        return $this->cantidad;
    }
    
    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    
    function setPrecio($precio)
    {
        $this->precio = $precio;
    }
    
    function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }
}
