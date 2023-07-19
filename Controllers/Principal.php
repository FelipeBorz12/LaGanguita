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
    public function shop()
    {
        $data['title'] = 'Nuestros Productos';
        $this->views->getView('principal', "shop", $data);
    }
    //detalles
    public function detail($id_producto)
    {
        $data['title'] = '------------';
        $this->views->getView('principal', "detail", $data);
    }
    //contacto
    public function contact()
    {
        $data['title'] = 'Contactanos';
        $this->views->getView('principal', "contact", $data);
    }
}