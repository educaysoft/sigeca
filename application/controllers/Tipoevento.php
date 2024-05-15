<?php

class Tipoevento extends CI_Controller{

  public function __construct(){
      parent::__construct();
      $this->load->model('tipoevento_model');
}

public function index() {
	//if (isset($this->session->userdata['logged_in'])) {
		$data['tipoevento']=$this->tipoevento_model->elprimero();
		$data['title']="Lista de Eventos";
		$this->load->view('template/page_header');
		$this->load->view('tipoevento_record',$data);
		$this->load->view('template/page_footer');
	/*} else {
            $this->load->view('template/page_header.php');
            $this->load->view('login_form');
            $this->load->view('template/page_footer.php');
        }*/
}


public function add()
{
		$data['title']="Nuevo Evento";
	 	//$this->load->view('template/page_header');		
	 	$this->load->view('tipoevento_form',$data);
	 	//$this->load->view('template/page_footer');
}


public function  save() {
	 	$array_item=array(
	 	'idtipoevento' => $this->input->post('idtipoevento'),
	 	'nombre' => $this->input->post('nombre'),
	 	);
	 	$this->tipoevento_model->save($array_item);
	 	
		if($result == FALSE)
		{
			echo "<script language='JavaScript'> alert('Este Evento ya Existe'); </script>";
			echo "<script language='JavaScript'> window.history.go(-2);</script>";
		}else{
			echo "<script language='JavaScript'> window.history.go(-2);</script>";
		}
 	}



public function edit()
{
	 	$data['tipoevento'] = $this->tipoevento_model->tipoevento($this->uri->segment(3))->row_array();
 	 	$data['title'] = "Actualizar Evento";
 	 	$this->load->view('template/page_header');		
 	 	$this->load->view('tipoevento_edit',$data);
	 	$this->load->view('template/page_footer');
 
}


	public function  save_edit() {
		$id=$this->input->post('idtipoevento');
	 	$array_item=array( 'idtipoevento' => $this->input->post('idtipoevento'),
		'nombre' => $this->input->post('nombre'),);
	 	$this->tipoevento_model->update($id,$array_item);
	 	redirect('tipoevento');
 	}


 	public function delete()
 	{
 		$data=$this->tipoevento_model->delete($this->uri->segment(3));
 		echo json_encode($data);
	 	redirect('tipoevento/elprimero');
	//	$db['default']['db_debug']=FALSE
 	}

	//public function quitar()
 	/*{
 		$result=$this->tipoevento_model->quitar($this->uri->segment(3));
	 	if(!$result)
		{
			echo "<script language='JavaScript'> alert('El Evento no pudo eliminarse revise permisos'); </script>";
			echo "<script language='JavaScript'> window.history.go(-2);</script>";
		}else{
			echo "<script language='JavaScript'> window.history.go(-2);</script>";
		}
 	}*/

	// Método para listar todos los tipos de eventos
    public function listar() {
        $data['tipoevento_list'] = $this->tipoevento_model->lista_tipoevento()->result();
        $data['title'] = "Tipo documento";
        $this->load->view('template/page_header');
        $this->load->view('tipoevento_list', $data);
        $this->load->view('template/page_footer');
    }


function tipoevento_data() {
		$draw= intval($this->input->get("draw"));
		$draw= intval($this->input->get("start"));
		$draw= intval($this->input->get("length"));

	 	$data0 = $this->tipoevento_model->lista_tipoevento();
		$data=array();
		foreach($data0->result() as $r){
			$data[]=array($r->idtipoevento,$r->nombre,
				$r->href='<a href="javascript:void(0);" class="btn btn-info btn-sm item_ver" data-idtpievento="'.$r->idtipoevento.'">Ver</a>');
		}	
		$output=array( "draw"=>$draw,
			"recordsTotal"=> $data0->num_rows(),
			"recordsFiltered"=> $data0->num_rows(),
			"data"=>$data
		);
		echo json_encode($output);
		exit();
	
			

	}




	/*public function actual() {
	$data['tipoevento'] = $this->tipoevento_model->tipoevento($this->uri->segment(3))->row_array();
  	if(!empty($data))
  	{
    		$data['title']="Tipoevento";
    		$this->load->view('template/page_header');		
    		$this->load->view('tipoevento_record',$data);
    		$this->load->view('template/page_footer');
  	}else{
    		$this->load->view('template/page_header');		
    		$this->load->view('registro_vacio');
    		$this->load->view('template/page_footer');
  	}
}*/

 public function elprimero() {
        //if (isset($this->session->userdata['logged_in'])) {
            $data['tipoevento'] = $this->tipoevento_model->elprimero();
            if (!empty($data)) {
                $data['title'] = "Tipo documento";
                $this->load->view('template/page_header');
                $this->load->view('tipoevento_record', $data);
                $this->load->view('template/page_footer');
            } else {
                $this->load->view('template/page_header');
                $this->load->view('registro_vacio');
                $this->load->view('template/page_footer');
            }
        /*} else {
            $this->load->view('template/page_header.php');
            $this->load->view('login_form');
            $this->load->view('template/page_footer.php');
        }*/
    }

	// Método para mostrar el último registro de tipo de evento
    public function elultimo() {
        //if (isset($this->session->userdata['logged_in'])) {
            $data['tipoevento'] = $this->tipoevento_model->elultimo();
            if (!empty($data)) {
                $data['title'] = "Tipo documento";
                $this->load->view('template/page_header');
                $this->load->view('tipoevento_record', $data);
                $this->load->view('template/page_footer');
            } else {
                $this->load->view('template/page_header');
                $this->load->view('registro_vacio');
                $this->load->view('template/page_footer');
            }
        /*} else {
            $this->load->view('template/page_header.php');
            $this->load->view('login_form');
            $this->load->view('template/page_footer.php');
        }*/
    }

// Método para mostrar el siguiente registro de tipo evento
    public function siguiente() {
        //if (isset($this->session->userdata['logged_in'])) {
            $data['tipoevento'] = $this->tipoevento_model->siguiente($this->uri->segment(3))->row_array();
            $data['title'] = "Tipo documento";
            $this->load->view('template/page_header');
            $this->load->view('tipoevento_record', $data);
            $this->load->view('template/page_footer');
        /*} else {
            $this->load->view('template/page_header.php');
            $this->load->view('login_form');
            $this->load->view('template/page_footer.php');
        }*/
    }

	// Método para mostrar el  registro previo del actual en evento
    public function anterior(){
  	    //if(isset($this->session->userdata['logged_in'])){
            $data['tipoevento'] = $this->tipoevento_model->anterior($this->uri->segment(3))->row_array();
            $data['title']="tipoevento";
            $this->load->view('template/page_header');		
            $this->load->view('tipoevento_record',$data);
            $this->load->view('template/page_footer');
        /*} else{
	 	    $this->load->view('template/page_header.php');
		    $this->load->view('login_form');
	 	    $this->load->view('template/page_footer.php');
        }*/
    }



public function get_tipoevento() {
    $this->load->database();
    $this->load->helper('form');
    if($this->input->post('idtipoevento')) {
        $this->db->select('*');
        $this->db->where(array('idtipoevento' => $this->input->post('idtipoevento')));
        $query = $this->db->get('documento');
	$data=$query->result();
	echo json_encode($data);
	}

}



}
