<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model User_model
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

class User_model extends CI_Model {

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



  // ------------------------------------------------------------------------

  public function getStatus($id,$tanggal){
    $this->db->select('keterangan');
    $this->db->from('absensi');
    $this->db->where('id_karyawan', $id);
    $this->db->where('tanggal_absensi', $tanggal);
    $query = $this->db->get();
    return $query->row();
    
  }

  public function getAbsen($id,$tanggal){
    $this->db->select('waktu_masuk,waktu_pulang');
    $this->db->from('absensi');
    $this->db->where('id_karyawan', $id);
    $this->db->where('tanggal_absensi', $tanggal);
    $query = $this->db->get();
    return $query->row_array();
  }

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */