<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Data_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Data_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

  public function getUserDataByEmail(){
    $email = $this->session->userdata('email');
    $this->db->select('karyawan.*, kantor.nama_kantor');
        $this->db->from('karyawan');
        
        $this->db->join('kantor', 'karyawan.id_kantor = kantor.id_kantor');
        $this->db->where('karyawan.karyawan_email',$email);
        
        $query = $this->db->get();
        return $query->result();
    
  }

  // ------------------------------------------------------------------------

}

/* End of file Data_model.php */
/* Location: ./application/models/Data_model.php */