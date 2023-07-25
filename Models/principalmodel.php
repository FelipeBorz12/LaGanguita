<?php
class principalmodel extends Query{
 
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getProducto($id_producto)
    {
        $sql="select p.*, c.categoria from productos p inner join categorias c on p.id_categoria= c.id where p.id=$id_producto";
        return $this->select($sql);
    }
    //paginacion
    public function getProductos($desde,$porPagina){
        $sql="select * from productos limit $desde,$porPagina";
        return $this->selectAll($sql);
    }
    //obtener total productos
    public function getTotalProductos(){
        $sql="select count(*) as total from productos";
        return $this->select($sql);
    }
    //productos relacionados con la categoria
    public function getProductosCat($id_categoria,$desde,$porPagina){

        $sql="select * from productos where id_categoria=$id_categoria limit $desde,$porPagina";
        return $this->selectAll($sql);
    }
    //obtener total productos relacionados con la categoria
    public function getTotalProductosCat($id_categoria){
        $sql="select count(*) as total from productos where id_categoria=$id_categoria";
        return $this->select($sql);
    }
    //obtener productos relacionados
    public function getAleatorios($id_categoria){
        $sql="select * from productos where id_categoria=$id_categoria order by rand() limit 20";
        return $this->selectAll($sql);
    }
    
}
 
?>