<?php
class HomeModel extends Query{
 
    public function __construct()
    {
        parent::__construct();
    }
    public function getCategorias()
    {
        $sql="select * from categorias";
        return $this->selectAll($sql);
    }
    public function getNuevosProductos()
    {
        $sql="select * from productos order by id desc limit 12";
        return $this->selectAll($sql);
    }

}
 
?>