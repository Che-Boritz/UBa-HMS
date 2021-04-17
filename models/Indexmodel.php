<?php
class Indexmodel extends CI_Model {

    public function __construct() {
     parent::__construct();
	}

	// public function matricule_commende(){
	// 	$query = $this->db->query("SELECT *,COUNT(matricule) as nombres FROM commende where matricule='".$matricule."'  GROUP BY matricule");
	// 	return $query->result_array();
	// }

	public function login_doctor($username, $password) {
	    $this->db->select('count(id) as nbre, authentication_doctor.*')
				->from('authentication_doctor')
				->where('username', $username)
				->where('password', $password);	
	    $query = $this->db->get();
	    return $query->row_array();
    }

    public function login_labtech($username, $password) {
	    $this->db->select('count(id) as nbre, authentication_labtechnician.*')
				->from('authentication_labtechnician')
				->where('username', $username)
				->where('password', $password);	
	    $query = $this->db->get();
	    return $query->row_array();
    }

    public function login_nurse($username, $password) {
	    $this->db->select('count(id) as nbre, authentication_nurse.*')
				->from('authentication_nurse')
				->where('username', $username)
				->where('password', $password);	
	    $query = $this->db->get();
	    return $query->row_array();
    }

    public function login_student($username, $password) {
	    $this->db->select('count(id) as nbre, authentication_student.*')
				->from('authentication_student')
				->where('username', $username)
				->where('password', $password);	
	    $query = $this->db->get();
	    return $query->row_array();
    }

    public function new_reg_student($data){
			$this->db->insert('authentication_student', $data);
		}
	
// Elements concernants le client
	public function insert_student($data){
		$this->db->insert('student_registration', $data);
	}

	public function selectstudent(){
		$query = $this->db->select('*')
						  ->from('student_registration')
						  //->where('etat','1')
						  ->get();
		return  $query->result_array();
	}

	public function updatestudent($id){
		$query = $this->db->select('*')
						  ->from('student_registration')
						  ->where("id_student='".$id."'")
						  ->get();
		return  $query->row_array();
	}

	public	function updating_student($data, $id){
		$this->db->where('id_student', $id);
		$this->db->update('student_registration', $data);
		//echo $this->db->last_query();
	}

	public function deleteclient($id){
		$this->db->query("update client  set etat = 0 where id='".$id."'");
	}


// Elements concernants la commende
	
	public function count_commende(){
		$query = $this->db->query("SELECT *,COUNT(matricule) as nombres, sum(montant) as montantcommende FROM commende where etat = '1'  GROUP BY matricule");
		return $query->result_array();
	}

	
	public function count_commende_1($matricule){
		$query = $this->db->query("SELECT *,COUNT(matricule) as nombres, sum(montant) as montantcommende FROM commende where etat = '1' and matricule='".$matricule."'  GROUP BY matricule limit 1");
		return $query->result_array();
	}

	public function insertcommende($data){
		$this->db->insert('commende', $data);
	}

	public function deletecommende($matricule){
		$this->db->query("update commende  set  etat = 0 where matricule='".$matricule."'");
	}


	public function selectcommendeclient($matricule){
		$query = $this->db->select('*')
						  ->from('commende')
						  ->where("matricule='".$matricule."'")
						  ->limit('1')
						  ->get();
		return  $query->row_array();
	}

	public function selectclientforcommende($client){
		$query = $this->db->query("SELECT * from client where nom='".$client."'");
		return $query->result_array();
	}

	public function selectproduitforcommende($matricule){
		$query = $this->db->query("SELECT * from commende where matricule='".$matricule."'");
		return $query->result_array();
	}

	public function selectcountmontantcommende($matricule){
		$query = $this->db->query("SELECT *, sum(montant) as montantcommende from commende where matricule='".$matricule."'");
		return $query->result_array();
	}

	public function updatematriculecommende($matricule, $mat){
		$this->db->query("update commende  set  matricule='".$matricule.$mat."' where matricule='".$matricule."'");
	}



	public function selectdonneeserviceforcommende($services){
		$query = $this->db->query("SELECT *,unite from service where nom='".$services."'");
		return $query->result_array();
	}

	public function selectinformationclientforcommende($client){
		$query = $this->db->select('*')
						  ->from('client')
						  ->where("nom='".$nomclient."'")
						  ->limit('1')
						  ->get();
		return  $query->row_array();
	}


	public function updatecommende($matricule){
		$query = $this->db->query("SELECT * from commende where matricule='".$matricule."'");
		return $query->result_array();
	}

	public function updatinfoecommende($matricule){
		$query = $this->db->select('*')
						  ->from('commende')
						  ->where("matricule='".$matricule."'")
						  ->limit('1')
						  ->get();
		return  $query->row_array();
	}

	public	function updatecommendes($data, $id){
		$this->db->where('id', $id);
		$this->db->update('commende', $data);
	}



// Elements concernant le service
	
	public function insertservice($data){
		$this->db->insert('service', $data);
	}

	public function selectservice(){
		$query = $this->db->select('*')
						  ->from('service') 
						  ->where('etat','1')
						  ->get();
		return  $query->result_array();
	}

	public function updateservice($id){
		$query = $this->db->select('*')
						  ->from('service')
						  ->where("id='".$id."'")
						  ->get();
		return  $query->row_array();
	}
	public	function updateservices($data, $id){
		$this->db->where('id', $id);
		$this->db->update('service', $data);
	}

	public function deleteservice($id){
		$this->db->query("update service  set etat = 0 where id='".$id."'");
	}


	public	function updateentrepriseinformation($data, $id){
		$this->db->where('id', $id);
		$this->db->update('entreprise', $data);
		// $this->db->where('id', '1');
	}

	public function selectentrepriseinformation(){
		$query = $this->db->select('*')
						  ->from('entreprise') 
						  ->where('etat','1')
						  ->get();
		return  $query->result_array();
	}
}