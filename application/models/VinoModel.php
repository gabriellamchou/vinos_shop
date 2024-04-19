<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class VinoModel extends CI_Model
{
    # Variable donde se guarda la conexión a la base de datos
    private $db = null;

    function __construct()
    {

        parent::__construct();

        # Cargamos la conexión a la base de datos
        $this->db = $this->load->database('default', true);
    }

    # Ejecuta consultas y devuelte los resultados en un array
    public function ExecuteArrayResults($sql)
    {
        // almacenamos en $query la query a la bd
        $query = $this->db->query($sql);
        // result_array() es un método de CodeIgniter para devolver el resultado de una query como array. muy similar a result()
        // almacenamos en $rows el resultado de la query
        $rows = $query->result_array();
        // free_result() libera la memoria de los resultados almacenados del gestor de sentencia dado
        $query->free_result();

        return ($rows);
    }

    # Como el anterior pero es más seguro cuando se envían parámetros en la query
    public function ExecuteResultsParamsArray($sql, $params)
    {

        $query = $this->db->query($sql, $params);
        $rows['data'] = $query->result_array();
        $query->free_result();

        return ($rows);
    }

    # Ejecuta querys sin devolver resultados deletes, inserts o updates
    public function Execute($sql)
    {
        $this->db->query($sql);
    }

    # Inserta filas en la tabla especificada
    public function insert($tabla, $datos)
    {
        $this->db->insert($tabla, $datos);
    }

    # Actualiza filas en la tabla especificada
    public function update($tabla, $datos, $where)
    {
        $this->db->update($tabla, $datos, $where);
    }

    # Elimina filas en la tabla especificada
    public function delete($tabla, $where)
    {
        $this->db->delete($tabla, $where);
    }

    public function obtener_vinos()
    {
        $sql = "SELECT * FROM vino";
        $rows = $this->ExecuteArrayResults($sql);
        return ($rows);
    }

    public function obtener_vinos_list()
    {
        $sql = "SELECT v.Id, v.Nombre, v.Precio, t.Nombre AS Tipo 
                FROM vino AS v
                INNER JOIN tipo AS t ON v.Id = t.Id";
        $rows = $this->ExecuteArrayResults($sql);
        return ($rows);
    }

    public function obtener_regiones()
    {
        $sql = "SELECT * FROM region";
        $rows = $this->ExecuteArrayResults($sql);
        return ($rows);
    }

    public function obtener_tipos()
    {
        $sql = "SELECT * FROM tipo";
        $rows = $this->ExecuteArrayResults($sql);
        return ($rows);
    }

    public function obtener_bodegas()
    {
        $sql = "SELECT * FROM bodega";
        $rows = $this->ExecuteArrayResults($sql);
        return ($rows);
    }

}
