
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Profile Dashboard-CodeIgniter Login Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background-color:#3a2fe2;">

<div class="container">

    <div class="row">
        <div class="col-md-4">
            <table class="table table-bordered table-striped">
                <tr>
                    <th colspan="2"><h4 class="text-center">User Info</h4></th>
                </tr>
                <tr>
                    <td>User Name</td>
                    <td><?php echo $this->session->userdata('user_name'); ?></td>
                </tr>
                <tr>
                    <td>User Email</td>
                    <td><?php echo $this->session->userdata('user_email');  ?></td>
                </tr>
            </table>
        </div>
    </div>
     <a href="<?php echo base_url('product/product_addition');?>" >  <button type="button" class="btn-primary">Add Product</button></a>
     <a href="<?php echo base_url('shopping/index');?>" >  <button type="button" class="btn-primary">shop</button></a>
     <a href="<?php echo base_url('shopping/viewOrder');?>" >  <button type="button" class="btn-primary">View Orders</button></a>
      <a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>
</body>
</html>
