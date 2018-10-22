<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Online Shopping sytstem</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">

	<style>
		.panel-success{
			margin-top: 100px;
		}
	</style>
</head>
<body style="background-color:#3a2fe2;">

<span style="background-color:red;">
  <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Welcome To Online Shopping</h3>
                  </div>
                  <div class="panel-body">

                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                      echo $error_msg;
                  }
                  ?>

                      <form role="form" method="post" action="<?=base_url('user/register_user')?>">
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Name" name="user_name" type="text" autofocus required>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus required>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Password" name="user_password" type="password" value="" required>
                              </div>
                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" >

                          </fieldset>
                      </form>

                      <center><b>Already registered ?</b> <br></b><a href="<?php echo base_url('user/login_view'); ?>">Login here</a></center><!--for centered text-->
                      <center><b>Would you like to do some shopping?</b> <br></b> <a href="<?php echo base_url('shopping/index');?>" ><button type="button" class="btn-primary">shop</button></a></center><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>





</span>




</body>
</html>
