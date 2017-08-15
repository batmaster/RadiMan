<?php
class User_model extends CI_Model {

        public $username;

        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        public function get_users()
        {
                $query = $this->db->get('radcheck', 10);
                return $query->result();
        }

}
?>
