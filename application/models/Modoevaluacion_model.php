<?php
class Modoevaluacion_model extends CI_model {

	function lista_modoevaluacions(){
		return $this->db->get('modoevaluacion');
	}

 	function modoevaluacion( $id){
 		$modoevaluacion = $this->db->query('select * from modoevaluacion where idmodoevaluacion="'. $id.'"');
 		return $modoevaluacion;
 	}

 	function save($array)
 	{
		$this->db->insert("modoevaluacion", $array);
 	}

 	function update($id,$array_item)
 	{
 		$this->db->where('idmodoevaluacion',$id);
 		$this->db->update('modoevaluacion',$array_item);
	}
 

 	public function delete($id)
	{
 		$this->db->where('idmodoevaluacion',$id);
		$this->db->delete('modoevaluacion');
    		if($this->db->affected_rows()==1)
			$result=true;
		else
			$result=false;
		return $result;
 	}


	function elprimero()
	{
		$query=$this->db->order_by("idmodoevaluacion")->get('modoevaluacion');
		if($query->num_rows()>0)
		{
			return $query->first_row('array');
		}	
			return array();

	}


// Para ir al último registro
	function elultimo()
	{
		$query=$this->db->order_by("idmodoevaluacion")->get('modoevaluacion');
		if($query->num_rows()>0)
		{
			return $query->last_row('array');
		}	
			return array();

	}


	// Para moverse al siguiente registro
 	function siguiente($id){
 		$modoevaluacion = $this->db->select("idmodoevaluacion")->order_by("idmodoevaluacion")->get('modoevaluacion')->result_array();
		$arr=array("idmodoevaluacion"=>$id);
		$clave=array_search($arr,$modoevaluacion);
	   if(array_key_exists($clave+1,$modoevaluacion))
		 {

 		$modoevaluacion = $this->db->query('select * from modoevaluacion where idmodoevaluacion="'. $modoevaluacion[$clave+1]["idmodoevaluacion"].'"');
		 }else{

 		$modoevaluacion = $this->db->query('select * from modoevaluacion where idmodoevaluacion="'. $id.'"');
		 }
		 	
 		return $modoevaluacion;
 	}


// Para moverse al anterior registro
 	function anterior($id){
 		$modoevaluacion = $this->db->select("idmodoevaluacion")->order_by("idmodoevaluacion")->get('modoevaluacion')->result_array();
		$arr=array("idmodoevaluacion"=>$id);
		$clave=array_search($arr,$modoevaluacion);
	   if(array_key_exists($clave-1,$modoevaluacion))
		 {

 		$modoevaluacion = $this->db->query('select * from modoevaluacion where idmodoevaluacion="'. $modoevaluacion[$clave-1]["idmodoevaluacion"].'"');
		 }else{

 		$modoevaluacion = $this->db->query('select * from modoevaluacion where idmodoevaluacion="'. $id.'"');
		 }
		 	
 		return $modoevaluacion;
 	}


	 function inhabilitar($id) {
        // Actualiza el registro con el ID dado para inhabilitarlo
        // Por ejemplo, puedes establecer el campo activo en 0 para inhabilitarlo

        // Ejemplo de consulta SQL utilizando Active Record de CodeIgniter
        $this->db->set('activo', 0);
        $this->db->where('id', $id);
        $this->db->update('modoevaluacion');

        // Verifica si la actualización fue exitosa
        if ($this->db->affected_rows() > 0) {
            return true; // Retorna verdadero si la actualización fue exitosa
        } else {
            return false; // Retorna falso si la actualización falló
        }
    }
}

