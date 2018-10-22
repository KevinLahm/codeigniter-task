<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration-CI Login Registration</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
</head>
<body style="background-color:#3a2fe2;">

<span style="background-color:red;">
  <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Add Product</h3>
                  </div>
                  <div class="panel-body">
                  		<?php
							$error_msg=$this->session->flashdata('error_msg');
							if($error_msg){
						?>
								<div class="alert alert-danger">

									<strong>Error!</strong> <?=$error_msg; ?>
								</div>
						<?php }
							$success_msg=$this->session->flashdata('success_msg');
							if($success_msg){
						?>
								<div class="alert alert-success">
									<button class="close" data-dismiss="alert">&times;</button>
									<strong>Success!</strong> <?=$success_msg; ?>
								</div>
						<?php } ?>
                      <form role="form" method="post" action="<?=base_url('product/add_product')?>" ); ?>
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder=" Product Name" name="name" type="text" autofocus>
                              </div>
                              <div class="form-group">
									<input class="form-control" placeholder="Price in Ksh" name="price" type="number" value="">
								</div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Quantity Available" name="quantity" type="number" value="">
                              </div>
                              <div class="form-group">
                                  <textarea class="form-control" placeholder="Description" name="description" type="text" value=""></textarea>
								</div>
                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Add" name="register" >

                          </fieldset>
                      </form>
                      <center><br></b><a href="<?php echo base_url('user/user_logout');?>"> Login Out</a></center><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>
</span>

</body>
</html>
