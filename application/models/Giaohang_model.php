<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Giaohang_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get giaohang by MAGIAOHANG
     */
    function get_giaohang($MAGIAOHANG)
    {
        return $this->db->get_where('giaohang',array('MAGIAOHANG'=>$MAGIAOHANG))->row_array();
    }
        
    /*
     * Get all giaohang
     */
    function get_all_giaohang()
    {
        $this->db->order_by('MAGIAOHANG', 'desc');
        return $this->db->get('giaohang')->result_array();
    }
        
    /*
     * function to add new giaohang
     */
    function add_giaohang($params)
    {
        $this->db->insert('giaohang',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update giaohang
     */
    function update_giaohang($MAGIAOHANG,$params)
    {
        $this->db->where('MAGIAOHANG',$MAGIAOHANG);
        return $this->db->update('giaohang',$params);
    }
    
    /*
     * function to delete giaohang
     */
    function delete_giaohang($MAGIAOHANG)
    {
        return $this->db->delete('giaohang',array('MAGIAOHANG'=>$MAGIAOHANG));
    }
}
