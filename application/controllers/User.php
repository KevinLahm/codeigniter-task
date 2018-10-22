<?php

class User extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $this->load->helper('url');
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->helper('form');

    }

    public function index()
    {
        $this->load->view("register.php");
    }

    public function register_user(){

        $user=array(
            'user_name'=>$this->input->post('user_name'),
            'user_email'=>$this->input->post('user_email'),
            'user_password'=>md5($this->input->post('user_password'))
        );
        print_r($user);

        $email_check=$this->User_model->email_check($user['user_email']);

        if($email_check){
            $this->User_model->register_user($user);
            $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
            redirect('user/login_view');

        }
        else{

            $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
            redirect('user');


        }

    }

    public function login_view(){

        $this->load->view("login.php");

    }

    function login_user(){
        $user_login=array(

            'user_email'=>$this->input->post('user_email'),
            'user_password'=>md5($this->input->post('user_password'))

        );


        $data=$this->User_model->login_user($user_login['user_email'],$user_login['user_password']);
        //var_dump($data); exit;
        if($data != false)
        {
            $this->session->set_userdata('user_id',$data['user_id']);
            $this->session->set_userdata('user_email',$data['user_email']);
            $this->session->set_userdata('user_name',$data['user_name']);
             redirect('user/profile');

        }
        else{
            $this->session->set_flashdata('error_msg', 'opps! something went wrong,Check whether you put in the corrrect login credentials.');
            $this->load->view("login.php");

        }
    }
    public function profile(){
     $this->load->view("user_profile.php");
    }

    public function user_logout(){

        $this->session->sess_destroy();
        redirect('user/login_view', 'refresh');
    }

}

?>
