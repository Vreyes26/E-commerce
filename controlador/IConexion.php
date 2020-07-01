<?php

interface InterfazConexion
{
    function insertar($id);
    function actualizar($id);
    function eliminar($id);
    function consultar($id);
    function consultarTodo($id);
    
    
}
