<?php
class Tipoevento_model extends CI_model {

	function lista_tipoeventos(){
		 $tipoevento= $this->db->get('tipoevento');
		 return $tipoevento;
	}

	function lista_tipoevento(){
		$tipoevento= $this->db->get('tipoevento');
		return $tipoevento;
   }


 	function tipoevento( $id){
 		$tipoevento = $this->db->query('select * from tipoevento where idtipoevento="'. $id.'"');
 		return $tipoevento;
 	}

 	function save($array)
 	{
		$condition = "idtipoevento =" . "'" . $array['idtipoevento'] . "'";
		$this->db->select('*');
		$this->db->from('tipoevento');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 0) {
		   $this->db->insert("sexo", $array);
		   if( $this->db->affected_rows()>0){
			    return true;
		   }else{
			    return false;
		   }
	   }else{
		    return false;
		   }




 	}

 	function update($id,$array_item)
 	{
 		$this->db->where('idtipoevento',$id);
 		$this->db->update('tipoevento',$array_item);
	}
 


 	public function delete($id)
	{
 		$this->db->where('idtipoevento',$id);
		$this->db->delete('tipoevento');
    		if($this->db->affected_rows()==1){
			$result=true;
	} else {
			$result=false;
	}
		return $result;
 	}

	 function quitar($id)
	 {
 
		 $this->db->select('*');
		 $this->db->from('tipoevento0');
		  $this->db->where('idtipoevento',$id);
		 $this->db->limit(1);
		 $query = $this->db->get();
		 if ($query->num_rows() != 0) {
				$this->db->where('idtipoevento',$id);
			 $this->db->update('tipoevento', array('eliminado'=>1));
			 $result=true;
		 }else{
			 $result=false;
		 }
		 return $result;
	  }
 


	function elprimero()
	{
		$query=$this->db->order_by("idtipoevento")->get('tipoevento');
		if($query->num_rows()>0)
		{
			return $query->first_row('array');
		}	
			return array();

	}


// Para ir al último registro
	function elultimo()
	{
		$query=$this->db->order_by("idtipoevento")->get('tipoevento');
		if($query->num_rows()>0)
		{
			return $query->last_row('array');
		}	
			return array();

	}


	// Para moverse al siguiente registro
 	function siguiente($id){
 		$tipoevento = $this->db->select("idtipoevento")->order_by("idtipoevento")->get('tipoevento')->result_array();
		$arr=array("idtipoevento"=>$id);
		$clave=array_search($arr,$tipoevento);
	   if(array_key_exists($clave+1,$tipoevento))
		 {

 		$tipoevento = $this->db->query('select * from tipoevento where idtipoevento="'. $tipoevento[$clave+1]["idtipoevento"].'"');
		 }else{

 		$tipoevento = $this->db->query('select * from tipoevento where idtipoevento="'. $id.'"');
		 }
		 	
 		return $tipoevento;
 	}


// Para moverse al anterior registro
 	function anterior($id){
 		$tipoevento = $this->db->select("idtipoevento")->order_by("idtipoevento")->get('tipoevento')->result_array();
		$arr=array("idtipoevento"=>$id);
		$clave=array_search($arr,$tipoevento);
	   if(array_key_exists($clave-1,$tipoevento))
		 {

 		$tipoevento = $this->db->query('select * from tipoevento where idtipoevento="'. $tipoevento[$clave-1]["idtipoevento"].'"');
		 }else{

 		$tipoevento = $this->db->query('select * from tipoevento where idtipoevento="'. $id.'"');
		 }
		 	
 		return $tipoevento;
 	}






}
