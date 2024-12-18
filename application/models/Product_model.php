    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Product_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        // Fetch all products from the database
        public function get_products()
        {
            $query = $this->db->get('products');
            return $query->result_array();
        }

        // Fetch all categories from the database
        public function get_categories()
        {
            $query = $this->db->get('category');
            return $query->result_array();
        }

        public function get_sub_category()
        {
            $query = $this->db->get('subcategory');
            return $query->result_array();
        }

        // Fetch product by ID
        public function get_product_by_id($id)
        {
            $this->db->where('p_id', $id);
            $query = $this->db->get('products');

            if ($query->num_rows() > 0) {
                return $query->row_array();
            }
            return false;
        }

        // Update product details
        public function update_product($id, $data)
        {
            $this->db->where('p_id', $id);
            return $this->db->update('products', $data);
        }

        // Add new product to the database
        public function add_product($data)
        {
            return $this->db->insert('products', $data);
        }

        // Delete product by ID
        public function delete_product($id)
        {
            $this->db->where('p_id', $id);
            return $this->db->delete('products');
        }
    }
