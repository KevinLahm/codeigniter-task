<?php
class Product_model extends CI_model{

	// Insert product into product table
	public function insert_product($data)
	{
		$this->db->insert('products', $data);

	}

  public function name_check($name){

        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('name',$name);
        $query=$this->db->get();

        if($query->num_rows()>0){
            return false;
        }else{
            return true;
        }

    }












}
?>
