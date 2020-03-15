<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Welcome extends CI_Controller {

        public function index(){
            $this->load->view('main/Login_view');
        }
        
        public function LoginTrue() {
            //Test Session is overt
            
            if(!isset($_SESSION['Username'])){
                redirect();
            }else{
                $this->load->view('welcome_message');
            } 
        }
        
        public function LoginCI() {
            $username = $this->input->post('username');
            $passeword = $this->input->post('passeword');
            $this->load->model('Users_model');
            $retVal = $this->Users_model->LoginUser($username,$passeword);
            echo $retVal;

        }
        public function loguot() {
            session_destroy();
            redirect();
        }
        
        public function getAllUsersDATA() {
            if(!isset($_SESSION['Username'])){
                redirect();
            }else{
                $this->load->model('Users_model');
                $data = $this->Users_model->getAllUsers();
                echo json_encode($data);
            }
        }
        
        public function getAllUsers() {
            if(!isset($_SESSION['Username'])){
                redirect();
            }else{
                return $this->load->view('main/users_view');//origine
                //return $this->load->view('main/Testregetryform_view');
            }
        }
        
        public function AddUser() {
            if(!isset($_SESSION['Username'])){
                redirect();
            }else{
                $username = $this->input->post('username');
                $passeword = $this->input->post('passeword');
                $this->load->model('Users_model');
                $retVal = $this->Users_model->AddUserModel($username,$passeword);
                echo json_encode($retVal);
            }
        }
        
        public function DeleteUser() {
            if(!isset($_SESSION['Username'])){
                redirect();
            }else{
                $id = $this->input->post('user_code');
                $this->load->model('Users_model');
                $retVal = $this->Users_model->DeleteUserModel($id);
                echo json_encode($retVal);
            }
        }
        
        public function Update() {
            if(!isset($_SESSION['Username'])){
                redirect();
            }else{
                $id = $this->input->post('user_code');
                $username = $this->input->post('user_name');
                $passeword = $this->input->post('passeword');
                $activer = $this->input->post('activer');
                $this->load->model('Users_model');
                $retval = $this->Users_model->UpdateUserModel($id,$username,$passeword,$activer);
                echo $retval;
            }
        }
        
        public function import_users_list() {
            if(!isset($_SESSION['Username'])){
                redirect();
            }else{
                $this->load->model('Users_model');
                if(isset($_FILES["file"]["name"]))
                {
                    $path = $_FILES["file"]["tmp_name"];
                    $object = PHPExcel_IOFactory::load($path);
                    foreach($object->getWorksheetIterator() as $worksheet)
                    {
                        $highestRow = $worksheet->getHighestRow();
                        for($row=2; $row<=$highestRow; $row++)
                        {
                            $Username = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                            $passeword = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                            $Activer = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                            $data[] = array('Username'  => $Username, 'passeword' => $passeword, 'Activer'   => $Activer);
                        }
                    }
                    $this->Users_model->AddUsersList($data);
                    echo 'Data Imported successfully';
                }
            }
        }
        public function export_users_list() {
            if(!isset($_SESSION['Username'])){
                redirect();
            }else{
                
                $this->load->model("Users_model");
                $object = new PHPExcel();

                $object->setActiveSheetIndex(0);

                $table_columns = array("id", "Username", "passeword", "Activer");

                $column = 0;

                foreach($table_columns as $field)
                {
                    $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
                    $column++;
                }

                $users = $this->Users_model->getAllUsers();

                $excel_row = 2;

                foreach($users as $row)
                {
                    $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->id);
                    $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->Username);
                    $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->passeword);
                    $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->Activer);
                    $excel_row++;
                }

                $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
                header('Content-Type: application/vnd.ms-excel');
                header('Content-Disposition: attachment;filename="Users.xlsx"');
                return $object_writer->save('php://output');
            }
        }
    }
