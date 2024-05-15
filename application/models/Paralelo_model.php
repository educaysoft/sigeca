<?php
class Paralelo_model extends CI_model
{

	// Obtener todos los registros de la tabla "paralelo"
	function lista_paralelos()
	{
		return $this->db->get('paralelo');
	}

	// Obtener un registro específico de la tabla "paralelo" por su ID
	function paralelo($id)
	{
		return $this->db->get_where('paralelo', array('idparalelo' => $id));
	}

	// Guardar un nuevo registro en la tabla "paralelo"
	function save($array)
	{
		$this->db->insert("paralelo", $array);
	}

	// Actualizar un registro en la tabla "paralelo" por su ID
	function update($id, $array_item)
	{
		$this->db->where('idparalelo', $id);
		$this->db->update('paralelo', $array_item);
	}

	// Eliminar un registro de la tabla "paralelo" por su ID
	public function delete($id)
	{
		$this->db->where('idparalelo', $id);
		$this->db->delete('paralelo');
		// Verificar si se afectó una fila (se eliminó el registro)
		return $this->db->affected_rows() == 1;
	}

	// Obtener el primer registro de la tabla "paralelo"
	function elprimero()
	{
		return $this->db->order_by("idparalelo")->get('paralelo')->first_row('array') ?? array();
	}

	// Obtener el último registro de la tabla "paralelo"
	function elultimo()
	{
		return $this->db->order_by("idparalelo", "desc")->get('paralelo')->first_row('array') ?? array();
	}

	// Obtener el registro siguiente al proporcionado por su ID
	function siguiente($id)
	{
		$paralelo = $this->db->select("idparalelo")->order_by("idparalelo")->get('paralelo')->result_array();
		$clave = array_search(array("idparalelo" => $id), $paralelo);
		$id_siguiente = isset($paralelo[$clave + 1]) ? $paralelo[$clave + 1]["idparalelo"] : $id;
		return $this->db->get_where('paralelo', array('idparalelo' => $id_siguiente));
	}

	// Obtener el registro anterior al proporcionado por su ID
	function anterior($id)
	{
		$paralelo = $this->db->select("idparalelo")->order_by("idparalelo")->get('paralelo')->result_array();
		$clave = array_search(array("idparalelo" => $id), $paralelo);
		$id_anterior = isset($paralelo[$clave - 1]) ? $paralelo[$clave - 1]["idparalelo"] : $id;
		return $this->db->get_where('paralelo', array('idparalelo' => $id_anterior));
	}
}
