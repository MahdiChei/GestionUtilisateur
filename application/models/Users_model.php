<?php
class Users_model extends CI_Model{
    public function getAllUsers(){
        $data = $this->db->query('select * from login');
        return $data->result();
    }
    public function AddUserModel($user,$pass) {
        
        
        $data = $this->db->query('SELECT * FROM login WHERE Username = '.$this->db->escape($user).'');
        $retVal = true;
        
        if ($data->num_rows()>=1) {
            $retVal = false;
        } else {
            $this->db->query('insert into login(Username,passeword,Activer) values('.$this->db->escape($user).','.$this->db->escape($pass).',"true")');
        }
        return $retVal;
    }
    public function LoginUser($user,$pass) {
        $exist=false;
        $data = $this->db->query('select * from login where Username = '.$this->db->escape($user).' and passeword = '.$this->db->escape($pass).' and Activer="true"');
        if ($data->num_rows()>=1) {
            $exist = true;
            $_SESSION["Username"] = $data->result()[0] -> Username;
        }
        return $exist;
    }
    public function DeleteUserModel($id) {
        
        $data = $this->db->query('SELECT * FROM login WHERE id = '.$this->db->escape($id).'');
        $retVal = true;
        
        if ($data->num_rows()>=1) {
            $this->db->query('delete from login where id = '.$this->db->escape($id).'');
        } else {
            $retVal = false;
        }
        return $retVal;
    }
    public function UpdateUserModel($id,$user,$pass,$activer) {
        $data = $this->db->query('select Username from login where id in(select id from login where id = '.$this->db->escape($id).')');
        $retVal = true;
        $daaa=$data->result();
        if ($daaa[0]->Username==$user || $data->num_rows()>=1) {
            $this->db->query('UPDATE login SET Username='.$this->db->escape($user).', passeword='.$this->db->escape($pass).', Activer='.$this->db->escape($activer).' where id='.$this->db->escape($id));
        } else {
            $retVal=false;
        }
        return $retVal;
    }
    public function AddUsersList($data) {
        $this->db->insert_batch('login', $data);
    }
}
