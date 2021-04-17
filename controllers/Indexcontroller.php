<?php 
require 'fpdf.php';
require 'convertnumber.php';
// include 'vendor/include/convertnumber.php';

	class Indexcontroller extends CI_Controller 
	{
	function __construct(){
		parent::__construct();
		$this->load->model('Indexmodel');
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->library('session');

	}

		public function index() {
			$this->load->view('home');
		}

		public function studentl() {
			$this->load->view('student/login');
		}


		public function login_doctor() {
			 if(isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])) {
                $username = $this->input->post("username");
                $password  = $this->input->post("password");
               
                 //$this->session->id = $info['id'];
                $success = $this->Indexmodel->login_doctor($username, $password);
                
                if ($success['nbre']==0) {
                    
                    $data['message']='Login error..!!';
                    $this->load->view('home', $data);

                }
                elseif($success['nbre']==1)
                {
                   $_SESSION['id'] = $success['id'];
                    
		           $data['id']=$this->session->id;
                    $data['info']=  $this->Indexmodel->login_doctor($username, $password);
                    $data['students'] = $this->Indexmodel->selectstudent();

                    $this->load->view('doctor/doctor_index', $data);
                }
                 
                  
            }
		}

		public function login_labtech() {
			 if(isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])) {
                $username = $this->input->post("username");
                $password  = $this->input->post("password");
               
                 //$this->session->id = $info['id'];
                $success = $this->Indexmodel->login_labtech($username, $password);
                
                if ($success['nbre']==0) {
                    
                    $data['message']='Login error..!!';
                    $this->load->view('home', $data);

                }
                elseif($success['nbre']==1)
                {
                   $_SESSION['id'] = $success['id'];
                    
		           $data['id']=$this->session->id;
                    $data['info']=  $this->Indexmodel->login_labtech($username, $password);
                    $data['students'] = $this->Indexmodel->selectstudent();

                    $this->load->view('labtech/labtech_index', $data);
                }
                 
                  
            }
		}

		public function login_nurse() {
			 if(isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])) {
                $username = $this->input->post("username");
                $password  = $this->input->post("password");
               
                 //$this->session->id = $info['id'];
                $success = $this->Indexmodel->login_nurse($username, $password);
                
                if ($success['nbre']==0) {
                    
                    $data['message']='Login error..!!';
                    $this->load->view('home', $data);

                }
                elseif($success['nbre']==1)
                {
                   $_SESSION['id'] = $success['id'];
                    
		           $data['id']=$this->session->id;
                    $data['info']=  $this->Indexmodel->login_nurse($username, $password);
                    $data['students'] = $this->Indexmodel->selectstudent();
                    $this->load->view('nurse/nurse_index', $data);
                }
                 
                  
            }
		}

		public function login_student() {
			 if(isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])) {
                $username = $this->input->post("username");
                $password  = $this->input->post("password");
               
                 //$this->session->id = $info['id'];
                $success = $this->Indexmodel->login_nurse($username, $password);
                
                if ($success['nbre']==0) {
                    
                    $data['message']='Login error..!!';
                    $this->load->view('student/student_dashboard', $data);

                }
                elseif($success['nbre']==1)
                {
                   $_SESSION['id'] = $success['id'];
                    
		           $data['id']=$this->session->id;
                    $data['info']=  $this->Indexmodel->login_student($username, $password);
                    $data['students'] = $this->Indexmodel->selectstudent();
                    $this->load->view('student/student_dashboard', $data);
                }
                 
                  
            }
		}


		 public function new_reg_student() {
      if (isset($_POST['submit'])){
      	$con_password = $_POST['password2'];
 		if($password == $con_password){
				$data = array(
					'username' => $this->input->post("username"), 
					'password' => $this->input->post("password"));
    				$this->Indexmodel->new_reg_student($data);
					//$data['students'] = $this->Indexmodel->selectstudent();
					$this->load->view('student/login', $data);


    echo "
				<div class='shadow rounded alert alert-dismissible card  left shadow text-center pt-1 pb-2 bg-success text-white' id='div1'  role='alert' style='transition-duration: 400ms; font-size: 0.8rem; z-index: 87; position: fixed;top:12%; left: 77%; width:20%'>
				<br>
				<h6 class='offset-md-2 serif mt-3' style='font-family: serif;'>student succesfully registered!!</h6>
				<center>
				<a href='#' class='close btn btn-link text-white serif seize-2 times' data-dismiss='alert'>&times</a></center>
				<br>
				<br>
				</div>
				
			";
			}
		}
			else {
				echo "fail!!!";
		}
    }
//}
// fonction pour afficher la page de d'acceuil
		// public function home() {
		// 	$this->load->view('home');
		// }



// elements concernant les clients...

// fonction pour enregistrées un client dans la base de donnée 
		public function newstudent() {
			$this->load->view('student/student_dashboard');
		}
		public function student_profile() {
			$this->load->view('student_dashboard/profile');
		}
		public function student_inbox() {
			$this->load->view('student_dashboard/inbox');
		}
		public function student_login() {
			$this->load->view('student_dashboard/login');
		}
		public function student_reg() {
			$this->load->view('student/register');
		}
		public function test_sample() {
			$this->load->view('labtech/test-sample');
		}
		
		public function insert_student() {
			if (isset($_POST['submit'])){
				$data = array(
					'name' => $this->input->post("name"), 
					'surname' => $this->input->post("surname"), 
					'matricule' => $this->input->post("matricule"), 
					'date_birth' => $this->input->post("date_birth"),
					'place_birth' => $this->input->post("place_birth"), 
					'sex' => $this->input->post("sex"), 
					'region_origin' => $this->input->post("region_origin"), 
					'nationality' => $this->input->post("nationality"), 
					'year_ofstudy' => $this->input->post("year_ofstudy"), 
					'faculty' => $this->input->post("faculty"), 
					'department' => $this->input->post("department"), 
					'residence' => $this->input->post("residence"), 
					'address' => $this->input->post("address"), 
					'contact' => $this->input->post("contact"), 
					'guardian_contact' => $this->input->post("guardian_contact"), 
					'marital_status' => $this->input->post("marital_status"), 
					'number_ofchildren' => $this->input->post("number_ofchildren"), 
					'recurrent_illness' => $this->input->post("recurrent_illness"), 
					'pp_sports' => $this->input->post("pp_sports"), 
					'family_illness' => $this->input->post("family_illness")); 
					//'etat' => $this->input->post("etat"));

					$this->Indexmodel->insert_student($data);
					$data['students'] = $this->Indexmodel->selectstudent();
					$this->load->view('student/student_dashboard', $data);

			echo "
				<div class='shadow rounded alert alert-dismissible card  left shadow text-center pt-1 pb-2 bg-success text-white' id='div1'  role='alert' style='transition-duration: 400ms; font-size: 0.8rem; z-index: 87; position: fixed;top:12%; left: 77%; width:20%'>
				<br>
				<h6 class='offset-md-2 serif mt-3' style='font-family: serif;'>succesfully registered</h6>
				<center>
				<a href='#' class='close btn btn-link text-white serif seize-2 times' data-dismiss='alert'>&times</a></center>
				<br>
				<br>
				</div>
				
			";
			}
			else {
				$this->newstudent();

			echo "
				<div class='shadow rounded alert alert-dismissible card  left shadow text-center pt-1 pb-2 bg-danger text-white' id='div1'  role='alert' style='transition-duration: 400ms; font-size: 0.8rem; z-index: 87; position: fixed;top:12%; left: 77%; width:20%'>
				<br>
				<h6 class='offset-md-2 serif mt-3' style='font-family: serif;'>Erreur Enregistrement</h6>
				<center>
				<a href='#' class='close btn btn-link text-white serif seize-2 times' data-dismiss='alert'>&times</a></center>
				<br>
				<br>
				</div>
				
			";
			}
		}


		public function updating_student() {
			if(isset($_POST['submit']) && isset($_POST['id']))
        	echo "bonjour";
				{
					$id = $this->input->post("id");
					$data = array(
					'reason' => $this->input->post("reason"),
					'pulse' => $this->input->post("pulse"), 
					'respiration' => $this->input->post("respiration"), 
					'temperature_c' => $this->input->post("temperature_c"), 
					'temperature_k' => $this->input->post("temperature_k"), 
					'temperature_f' => $this->input->post("temperature_f"), 
					'weight' => $this->input->post("weight"), 
					'height' => $this->input->post("height"), 
					'bmi' => $this->input->post("bmi"),
					'systolic' => $this->input->post("systolic"),
					'diastolic' => $this->input->post("diastolic"), 
					'blood_pressure' => $this->input->post("blood_pressure"), 
					'last_menstral_period' => $this->input->post("last_menstral_period"), 
					'avg_length_cycle' => $this->input->post("avg_length_cycle"), 
					'avg_lp_length' => $this->input->post("avg_lp_length"), 
					'e_conception' => $this->input->post("e_conception"), 
					'e_duedate' => $this->input->post("e_duedate"), 
					'e_fetalage' => $this->input->post("e_fetalage"),
					//'gestational_age' => $this->input->post("gestational_age"),
					'head' => $this->input->post("head"), 
					'neck' => $this->input->post("neck"), 
					'chest' => $this->input->post("chest"), 
					//'upper_limbs' => $this->input->post("upper_limbs"), 
					'thorax' => $this->input->post("thorax"),
					'abdomen' => $this->input->post("abdomen"), 
					'pelvic_exam' => $this->input->post("pelvic_exam"), 
					'lower_limbs' => $this->input->post("lower_limbs"),
					 'lymph' => $this->input->post("lymph"), 
					 'skin' => $this->input->post("skin"));

					$this->Indexmodel->updating_student($data, $id);
					// echo $this->db->last_query();
					// $this->load->view('client/client_liste');
				//$data['students'] = $this->Indexmodel->updatestudent();
					$data['students'] = $this->Indexmodel->selectstudent();
				$this->load->view('nurse/nurse_index', $data);


			echo "
						<div class='shadow rounded alert alert-dismissible card  left shadow text-center pt-1 pb-2 bg-primary text-white' id='div1'  role='alert' style='transition-duration: 400ms; font-size: 0.8rem; z-index: 87; position: fixed;top:12%; left: 77%; width:20%'>
						<br>
						<h6 class='offset-md-2 serif mt-3' style='font-family: serif;'>successfull modification</h6>
						<center>
						<a href='#' class='close btn btn-link text-white serif seize-2 times' data-dismiss='alert'>&times</a></center>
						<br>
						<br>
						</div>
						
					";
				}
			}


			public function doc_updating_student() {
			if(isset($_POST['submit']) && isset($_POST['id']))
        	echo "bonjour";
				{
					$id = $this->input->post("id");
					$data = array(
					'diagnosis' => $this->input->post("diagnosis"),
					'observation' => $this->input->post("observation"), 
					 'prescription' => $this->input->post("prescription"));

					$this->Indexmodel->updating_student($data, $id);
					$data['students'] = $this->Indexmodel->selectstudent();
				// $this->load->view('doctor/doctor_index', $data);
					$tab['student'] = $this->Indexmodel->updatestudent($id);
					$this->load->view('student/downloadmed', $tab);

			echo "
						<div class='shadow rounded alert alert-dismissible card  left shadow text-center pt-1 pb-2 bg-primary text-white' id='div1'  role='alert' style='transition-duration: 400ms; font-size: 0.8rem; z-index: 87; position: fixed;top:12%; left: 77%; width:20%'>
						<br>
						<h6 class='offset-md-2 serif mt-3' style='font-family: serif;'>successfull modification</h6>
						<center>
						<a href='#' class='close btn btn-link text-white serif seize-2 times' data-dismiss='alert'>&times</a></center>
						<br>
						<br>
						</div>
						
					";
				}
			}



			public function labtech_update() {
			if(isset($_POST['submit']) && isset($_POST['id']))
        	echo "bonjour";
				{
					$id = $this->input->post("id");
					//var_dump($id);
					$test = $this->input->post("test[]");

					$data = array( 
					 'test' => implode("|", (array)$test));
					//$test=implode('|', $_POST['test']);
					$this->Indexmodel->updating_student($data, $id);
					$data['students'] = $this->Indexmodel->selectstudent();
					 //$tab['student'] = $this->Indexmodel->updatestudent($id);
				// $this->load->view('doctor/doctor_index', $data);
					//$tab['student'] = $this->Indexmodel->updatestudent($id);
					$this->load->view('labtech/labtech_index', $data);

			echo "
						<div class='shadow rounded alert alert-dismissible card  left shadow text-center pt-1 pb-2 bg-primary text-white' id='div1'  role='alert' style='transition-duration: 400ms; font-size: 0.8rem; z-index: 87; position: fixed;top:12%; left: 77%; width:20%'>
						<br>
						<h6 class='offset-md-2 serif mt-3' style='font-family: serif;'>successfull modification</h6>
						<center>
						<a href='#' class='close btn btn-link text-white serif seize-2 times' data-dismiss='alert'>&times</a></center>
						<br>
						<br>
						</div>
						
					";
				}
			}

// fonction pour selectionner les informations du client enregistrées dans la base de donnée 
		public function liste_student() {
				$data['students'] = $this->Indexmodel->selectstudent();
				//var_dump($data);
				$this->load->view('nurse/nurse_index', $data);
			}
			public function consultstudent($id) {
				$data['students'] = $this->Indexmodel->updatestudent($id);
				//var_dump($data);
				$this->load->view('Nurse/form-layout', $data);
			}

			public function doc_consultstudent($id) {
				$data['students'] = $this->Indexmodel->updatestudent($id);
				//var_dump($data);
				$this->load->view('doctor/doctorMedicalsVsConsultation', $data);
			}

			public function labtech_consultstudent($id) {
				$data['students'] = $this->Indexmodel->updatestudent($id);
				//var_dump($data);
				$this->load->view('labtech/test-sample', $data);
			}
// 		public function client() {
// 				$this->load->view('client/liste_client');
// 			}

// 		public function selectclient(){
// 				$data['clients'] = $this->Indexmodel->selectclient();
// 				$this->load->view('client/liste_client', $data);
// 			}

// // fonction pour modifier les informations du client enregistrées dans la base de donnée 
// 		public function alter_client() {
// 				$this->load->view('client/alter_client');
// 			}
		// public function updatestudent($id){
		// 		$data['students'] = $this->Indexmodel->updatestudent($id);
		// 		$this->load->view('nurse/form_layout', $data);
			//}
		

		public function deleteclient($id) {
			$this->Indexmodel->deleteclient($id);
			$data['clients'] = $this->Indexmodel->selectclient();
			$this->load->view('client/liste_client', $data);
			echo "
				<div class='shadow rounded alert alert-dismissible card col-md-2 left shadow text-center pt-1 pb-2 bg-danger text-white' id='div1'  role='alert' style='transition-duration: 400ms; font-size: 0.8rem; z-index: 87; position: fixed;top:12%; left: 80%'>
				<br>
				<h6 class='offset-md-2 serif mt-3' style='font-family: serif;'>Client Supprimer!</h6>
				<center>
				<a href='#' class='close btn btn-link text-white serif seize-2 times' data-dismiss='alert'>&times</a></center>
				<br>
				<br>
				</div>
				
			";
		}



		public function medical() {
			
			$id = $_GET['id'];
			$student = $this->Indexmodel->updatestudent($id);
			//$data['students'] = $this->Indexmodel->updatestudent($id);
   			//$etudiant = $this->Indexmodel->updatestudent($id);				
   			// var_dump($produits);
   			//foreach ($student as $student_registration){

				$devis = new FPDF('p', 'mm', 'A4');
				$devis->AddPage();
				$devis->SetAutoPageBreak(1, 1);
				$devis->SetFont('Arial', '','14');
				//$devis->Image('vendor/about.png', 15,15,45);
				$devis->SetFont('Arial', '','6');
				$devis->SetFont('Arial', 'B','9');
				$devis->SetXY(10,7);
				$devis->Cell(10,20,utf8_decode('THE UNIVERSITY OF BAMENDA'),0,0,'L');
				$devis->SetXY(10,12);
				$devis->Cell(10,20,utf8_decode('Universite de Bamenda '),0,0,'L');
				$devis->SetXY(10,17);
				$devis->Cell(10,20,utf8_decode('STUDENTS AFFAIRS OFFICE'),0,0,'L');
				$devis->SetXY(10,22);
				$devis->Cell(10,20,utf8_decode('Centres d Ouvres universitaires'),0,0,'L');
				$devis->SetXY(10,27);
				$devis->Cell(10,20,utf8_decode('HEALTH DIVISION'),0,0,'L');
				$devis->SetXY(10,32);
				$devis->Cell(10,20,utf8_decode('Division de la Sante'),0,0,'L');
				$devis->SetXY(153,7);
				$devis->Cell(10,20,utf8_decode('REPUBLIC OF CAMEROON'),0,0,'L');
				$devis->SetXY(153,12);
				$devis->Cell(10,20,utf8_decode('Republique du Cameroun'),0,0,'L');
				$devis->SetXY(153,17);
				$devis->Cell(10,20,utf8_decode('PEACE-WORK-FATHERLAND'),0,0,'L');
				$devis->SetXY(153,22);
				$devis->Cell(10,20,utf8_decode('Paix-Travail-Patrie'),0,0,'L');
				$devis->SetXY(50,48);
				$devis->Cell(10,0,utf8_decode(''),1,0,'L');

				$devis->SetFont('times', 'B','14');
				$devis->SetXY(100,55);
				$devis->Cell(10,20,utf8_decode('CERTIFICATE OF PARTICIPATION IN THE SYSTEMATICAL VISIT (SMV)'),0,0,'C');
				$devis->SetFont('times', 'I','14');
				$devis->SetXY(100,61);
				$devis->Cell(10,20,utf8_decode('CERTIFICAT DE PARTICIPATION AUX VISITES MEDICALES SYSTEMATIQUES'),0,0,'C');

				$devis->SetFont('times', 'B','14');
				$devis->SetXY(100,73);
				$devis->Cell(10,20,utf8_decode('BY APPLICATION OF THE LAW AND REGULATION IN FORCE'),0,0,'C');
				$devis->SetFont('times', 'I','14');
				$devis->SetXY(100,79);
				$devis->Cell(10,20,utf8_decode('EN APPLICATION DES LOIS ET REGLEMENTS EN VIGUEUR'),0,0,'C');

				$devis->SetFont('times', '','15');
				$devis->SetXY(100,75);
				//$devis->Cell(10,20,utf8_decode('Devis/Estimation de projet : '.$matricule),0,0,'C');
				$devis->SetXY(150,92);
				$devis->Cell(10,20,utf8_decode("N:..........................................."),0,0,'C');
				$devis->SetXY(100,89);
				//$devis->Cell(10,20,utf8_decode("(Notre Contructeur et Paysagiste Inc.)"),0,0,'C');
				$devis->SetXY(100,96);
				//$devis->Cell(10,20,utf8_decode("Téléphone : (514) 913-5664"),0,0,'C');
				$devis->SetFont('times', 'B','15');
				$devis->SetXY(100,103);
				$devis->Cell(10,20,utf8_decode("I the undersigned ..............................................................................................................."),0,0,'C');

				$devis->SetFont('times', '','14');
				$devis->SetXY(10,108);
				$devis->Cell(10,20,utf8_decode('Je soussigne'),0,0,'L');

				$devis->SetFont('times', 'B','15');
				$devis->SetXY(90,125);
				$devis->Cell(15,20,utf8_decode("Head of Health Division Uba ..................................................................................."),0,0,'C');

				$devis->SetXY(92,142);
				$devis->Cell(15,20,utf8_decode("Certify having examined this student .........................................................................."),0,0,'C');
				$devis->SetXY(140,149);
				$devis->cell(20,2,utf8_decode($student['surname']),0,1,'C');
				$devis->SetXY(120,149);
				$devis->cell(20,2,utf8_decode($student['name']),0,1,'C');
				$devis->SetFont('times', '','14');
				$devis->SetXY(8,148);
				$devis->Cell(10,20,utf8_decode('Certifie avoir examine cet etudiant'),0,0,'L');

				$devis->SetFont('times', 'B','14');
				$devis->SetXY(80,162);
				$devis->Cell(15,20,utf8_decode("Born on........................................................... at ................................................"),0,0,'C');
				$devis->SetXY(40,169);
				$devis->cell(20,2,utf8_decode($student['date_birth']),0,1,'C');
				$devis->SetXY(110,169);
				$devis->cell(20,2,utf8_decode($student['place_birth']),0,1,'C');
				$devis->SetFont('times', '','14');
				$devis->SetXY(8,167);
				$devis->Cell(10,20,utf8_decode('Ne le'),0,0,'L');

				$devis->SetFont('times', 'B','14');
				$devis->SetXY(70,180);
				$devis->Cell(15,20,utf8_decode("Registration number .........................................................................."),0,0,'C');
				$devis->SetXY(70,187);
				$devis->cell(20,2,utf8_decode($student['matricule']),0,1,'C');
				$devis->SetFont('times', '','14');
				$devis->SetXY(8,185);
				$devis->Cell(10,20,utf8_decode('Matricule'),0,0,'L');

				$devis->SetFont('times', 'B','14');
				$devis->SetXY(8,195);
				$devis->Cell(10,20,utf8_decode('Declare that the above student has undergone the systematic medical visit for academic year. '),0,0,'L');

				$devis->SetFont('times', '','13');
				$devis->SetXY(8,200);
				$devis->Cell(10,20,utf8_decode('Declare que l etudiant ci-dessus a passe la visite medicale systematique pour cette annee academique. '),0,0,'L');

				$devis->SetFont('times', 'B','14');
				$devis->SetXY(8,210);
				$devis->Cell(10,20,utf8_decode('Particular observations. '),0,0,'L');

				$devis->SetFont('times', '','14');
				$devis->SetXY(8,215);
				$devis->Cell(10,20,utf8_decode('Observations particulieres . '),0,0,'L');

				$devis->SetFont('times', '','14');
				$devis->SetXY(10,230);
				$devis->Multicell(0,13,utf8_decode($student['observation']),'','L',0);
				//$devis->cell(0,2,utf8_decode($student['observation']),0,1,'C');
				$devis->SetFont('times', 'B','14');
				$devis->SetXY(8,230);
				$devis->Cell(10,20,utf8_decode('...................................................................................................................................................... '),0,0,'L');
				$devis->SetXY(8,242);
				$devis->Cell(10,20,utf8_decode('....................................................................................................................................................... '),0,0,'L');
				$devis->SetXY(8,255);
				$devis->Cell(10,20,utf8_decode('....................................................................................................................................................... '),0,0,'L');
				$devis->SetFont('times', '','15');
				$devis->SetXY(100,122);
				//$devis->Cell(10,20,utf8_decode("Maitre d'ouvrage : ".$commendes['client']),0,0,'C');
				$devis->SetXY(100,140);

				
			// pieds de page
				$devis->SetFont('Arial', '','9');
				$devis->SetXY(53,285);
				//$devis->Cell(105,0,utf8_decode(''),1,0,'L');
				$devis->SetXY(53,288);
				//$devis->Cell(105,0,utf8_decode("Savourons les délices d'un paysage passionnant"),0,0,'C');



				$devis->Output('F','medical/medical'.$id.'.pdf');
				//$devis->Output('F','medical/medical.pdf');
				//$data['students'] = $this->Indexmodel->updatestudent($id);
				//$this->load->view('student/downloadmed', $data);
				//$lien = 'medical/medical'.$id.'.pdf';      
    			// $data['lien'] = $lien;
    			// $data['msg'] = 'Génération du fichier avec success';
				//$this->load->view('student/student_dashboard');
				// $filename = 'medical/medical'.$id.'.pdf';
				//  echo '<a href="javascript:void(0);" onclick="javascipt:window.open(\''.$filename.'\');" class="popup">Clic to open.</a>';

			// 	echo "
			// 	<div class='shadow rounded alert alert-dismissible card left shadow text-center pt-1 pb-2 bg-primary text-white' id='div1'  role='alert' style='width:20%; transition-duration: 400ms; font-size: 0.8rem; z-index: 87; position: fixed;top:12%; left: 77%'>
			// 	<br>
			// 	<h6 class='offset-md-2 serif mt-3' style='font-family: serif;'>Soumission Modifier!</h6>
			// 	<center>
			// 	<a href='#' class='close btn btn-link text-white serif seize-2 times' data-dismiss='alert'>&times</a></center>
			// 	<br>
			// 	<br>
			// 	</div>
				
			// ";
			//}
		}

	}


?>