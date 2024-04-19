<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LayoutClass
{
    // Instanciamos CodeIgniter
    private $CI = null;

    function __construct()
    {
        $this->CI = &get_instance();
    }

    // Función que aplicará los layouts a las vistas
    public function view($data = array())
    {
        if (!empty($data)) {
            // Almacenamos en view_content el nombre de la vista y los parámetros
            $view_content = $this->CI->load->view($data['vista'], $data['params'], TRUE);

            // Cargamos el layout y le pasamos el contenido
            $this->CI->load->view('layouts/' . $data['layout'], array(
                'content_for_layout' => $view_content,
                'title_for_layout' => $data['titulo']
            ));
        }
    }
}
