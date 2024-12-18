<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service_feature_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Get all active features
    public function get_features()
    {
        // $this->db->where('status', 1);
        $query = $this->db->get('service_features');
        return $query->result_array();
    }

    // Create a new feature
    public function create_feature($data)
    {
        return $this->db->insert('service_features', $data);
    }

    // Update a feature
    public function update_feature($id, $data)
    {
        $this->db->where('service_feature_id', $id);
        return $this->db->update('service_features', $data);
    }

    // Delete a feature (soft delete)
    public function delete_feature($service_feature_id)
    {
        // $this->db->where('service_feature_id', $id);
        return $this->db->delete('service_features', ['service_feature_id' => $service_feature_id]);
    }
}
