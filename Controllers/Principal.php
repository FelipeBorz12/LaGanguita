<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        
    }
    //vista about
    public function about()
    {
        $data['title'] = 'Nuestro Equipo';
        $this->views->getView('principal', "about", $data);
    }
    //tienda
    public function shop($page)
    {
        $pagina = (empty($page)) ? 1 : $page ;
        $porPagina=21;
        $desde=($pagina-1)*$porPagina;
        $data['title'] = 'Nuestros Productos';
        $data['productos']=$this->model->getProductos($desde,$porPagina);
        $data['pagina']=$pagina;
        $total=$this->model->getTotalProductos();
        $data['total']=ceil($total['total']/$porPagina);
        $this->views->getView('principal', "shop", $data);
    }
    //detalles
    public function detail($id_producto)
    {
        $data['producto']=$this->model->getProducto($id_producto);
        $id_categoria=$data['producto']['id_categoria'];
        $data['relacionados']=$this->model->getAleatorios($id_categoria);
        $data['title'] = $data['producto']['nombre'];
        $this->views->getView('principal', "detail", $data);
    }
    //vista categorias
    public function categorias($datos)
    {
        $id_categoria=1;
        $page=1;
        $array=explode(',',$datos);
        if(isset($array[0]) ){
            if (!empty($array[0])) {
                $id_categoria=$array[0];
            }
        }
        if(isset($array[1]) ){
            if (!empty($array[0])) {
                $page=$array[1];
            }
        }
        $pagina = (empty($page)) ? 1 : $page ;
        $porPagina=9;
        $desde=($pagina-1)*$porPagina;
        $data['pagina']=$pagina;
        $total=$this->model->getTotalProductosCat($id_categoria);
        $data['total']=ceil($total['total']/$porPagina);
        
        $data['productos']=$this->model->getProductosCat($id_categoria,$desde,$porPagina);
        $data['title'] = 'categorias';
        $data['id_categoria'] = $id_categoria;
        $this->views->getView('principal', "categorias", $data);
    }
    //contacto
    public function contact()
    {
        $data['title'] = 'Contactanos';
        $this->views->getView('principal', "contact", $data);
    }
}