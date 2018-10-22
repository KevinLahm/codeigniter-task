<?php
class Product extends CI_Controller {
	public function __construct() {
		parent::__construct();
		  $this->load->helper('url');
                $this->load->model('Product_model');
                $this->load->library('session');
                $this->load->helper('form');
		}

	// Show form in view page i.e view_page.php
	public function product_addition() {
		$this->load->view("product_view");
	}

		// When user submit data on view page, Then this function store data in array.
	public function add_product() {

		$data = array(
		'name' => $this->input->post('name'),
		'description' => $this->input->post('description'),
		'price' => $this->input->post('price'),
		'quantity' => $this->input->post('quantity')
	);
	 $name_check=$this->Product_model->name_check($data['name']);
	  if($name_check){
                 $this->Product_model->insert_product($data);
                 $this->session->set_flashdata('success_msg', 'Success you have added a product.');
                 redirect('shopping/index', 'refresh');


             }
             else{

                 $this->session->set_flashdata('error_msg', 'Error occured,Try again and check if the name of product used already exist.');
                $this->load->view("product_view");


             }

	}
}
?>
