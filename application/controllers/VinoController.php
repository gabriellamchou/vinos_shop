<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VinoController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('VinoModel');
    }

    public function show_vinos()
    {
        $lista_vinos = $this->VinoModel->obtener_vinos_list();

        $datos = array(
            'lista_vinos' => $lista_vinos
        );

        $vista = array(
            'vista' => 'admin/vinosListView.php',
            'params' => $datos,
            'layout' => 'ly_general.php',
            'titulo' => 'Vinos'
        );

        // este helper nos permite usar "base_url()" en el head para localizar el css
        // No es necesario usarlo porque ya lo incluí en autoload
        // $this->load->helper('url');

        $this->layoutclass->view($vista);
    }

    public function new_vino()
    {
        # Almacenamos las listas de regiones, tipos, bodegas, imágenes y uvas
        $regiones = $this->VinoModel->obtener_regiones();
        $tipos = $this->VinoModel->obtener_tipos();
        $bodegas = $this->VinoModel->obtener_bodegas();
        // $images = $this->VinoModel->obtener_images();
        // $uvas = $this->VinoModel->obtener_uvas();

        # Incorporamos dichas listas al array de datos
        # A la izquierda entre comillas están las variables que usaremos en la vista para acceder a los valores de las variables que aparecen a la derecha
        $datos = array(
            'lista_regiones' => $regiones,
            'lista_tipos' => $tipos,
            'lista_bodegas' => $bodegas,
            // 'lista_images' => $images,
            // 'lista_uvas' => $uvas
        );

        $vista = array(
            'vista' => 'admin/newVinoView.php',
            'params' => $datos,
            'layout' => 'ly_general.php',
            'titulo' => 'Nuevo vino'
        );

        $this->layoutclass->view($vista);
    }
}
