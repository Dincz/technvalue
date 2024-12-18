    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Banner_model extends CI_Model {

        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        public function get_banners() {
            $query = $this->db->get('all_banners');
            return $query->result_array();
        }

        public function insert_banner($data) {
            return $this->db->insert('all_banners', $data);
        }

        public function get_banner($id) {
            $query = $this->db->get_where('all_banners', array('id' => $id));
            return $query->row_array();
        }
        public function get_banner_by_page_name($page_name)
        {
            $this->db->where('page_name', $page_name);
            $query = $this->db->get('all_banners'); // Replace with your actual table name
            return $query->row_array(); // Return a single banner
        }
        

        public function update_banner($id, $data) {
            return $this->db->update('all_banners', $data, array('id' => $id));
        }

        public function delete_banner($id) {
            return $this->db->delete('all_banners', array('id' => $id));
        }
    }
    ?>
