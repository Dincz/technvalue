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

    // Fetch category by c_id
    public function get_category_by_id($c_id)
    {
        // Query to fetch category details by c_id
        // echo($c_id);
        // exit;
        $this->db->where('seo_url', $c_id);
        $query = $this->db->get('category');  // Assuming the category table is named 'category'

        // Check if the category exists and return the result
        if ($query->num_rows() > 0) {
            return $query->row_array();  // Return the category as an associative array
        }

        return false;  // Return false if no category is found
    }

    // Fetch subcategories by category ID (c_id)
    // public function get_subcategories_by_category($c_id)
    // {
    //     // Query to fetch subcategories where the category ID matches the given c_id
    //     $this->db->where('seo_url', $c_id);  // Assuming 'c_id' in the subcategory table refers to the category ID
    //     $query = $this->db->get('subcategory');  // Assuming the subcategory table is named 'subcategory'

    //     // Check if subcategories exist and return the result
    //     if ($query->num_rows() > 0) {
    //         return $query->result_array();  // Return the subcategories as an array of associative arrays
    //     }

    //     return false;  // Return false if no subcategories are found
    // }


    public function get_subcategories_by_category($seo_url)
{
    // First, get the category ID based on the category's seo_url
    $this->db->select('c_id');  // Select the category ID
    $this->db->from('category');  // Assuming the category table is named 'category'
    $this->db->where('seo_url', $seo_url);  // Match by seo_url
    $category_query = $this->db->get();

    if ($category_query->num_rows() > 0) {
        // Get the category ID
        $category = $category_query->row_array();
        $c_id = $category['c_id'];

        // Now fetch the subcategories for this category ID
        $this->db->where('c_id', $c_id);  // Match subcategories by category ID
        $query = $this->db->get('subcategory');  // Assuming the subcategory table is named 'subcategory'

        // Check if subcategories exist and return the result
        if ($query->num_rows() > 0) {
            return $query->result_array();  // Return the subcategories as an array of associative arrays
        }
    }

    return false;  // Return false if no subcategories are found
}


    // Fetch products by subcategory ID (s_id)
    public function get_products_by_subcategory($s_id)
    {
        // Query to fetch products where the subcategory ID matches the given s_id
        $this->db->where('seo_url', $s_id);  // Assuming 's_id' in the products table refers to the subcategory ID
        $query = $this->db->get('products');  // Assuming the products table is named 'products'

        // Check if products exist and return the result
        if ($query->num_rows() > 0) {
            return $query->result_array();  // Return the products as an array of associative arrays
        }

        return false;  // Return false if no products are found
    }


    // Fetch products by category ID (c_id)
    public function get_products_by_category($c_id)
    {
        // echo ($c_id);
        // exit;
        $this->db->where('c_id', $c_id);  // Assuming 'c_id' in the products table refers to the category ID
        $query = $this->db->get('products');  

    
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return false;
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
        $this->db->select('
            products.*, 
            subcategory.seo_url AS subcategory_seo_url, 
            category.seo_url AS category_seo_url
        ');
        $this->db->from('products');
        $this->db->join('subcategory', 'subcategory.sc_id = products.sc_id', 'left');
        $this->db->join('category', 'category.c_id = subcategory.c_id', 'left');
        $this->db->where('products.seo_url', $id);
        $query = $this->db->get();
    
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
