
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>List Of All the Orders</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
    		body{
    			margin-top: 100px;
    		}
    	</style>
</head>
<body style="background-color:#3a2fe2;">

<div class="container">

    <div class="row">
        <div class="col-md-6">

            <table class="table table-bordered table-striped">
                <tr>
                    <th colspan="12"><h4 class="text-center">List Of All Pending Orders</h4></th>
                </tr>
                <tr>
					<td colspan="4">Id</td>
					<td colspan="4">Date</td>
					<td colspan="4">Customer</td>
				</tr>
                 <?php
                 foreach( $orders as $order){
                 ?>
                <tr>
					<td colspan="4"><?php echo $order->serial ?></td>
					<td colspan="4"><?php echo $order->date ?></td>
					<td colspan="4"><?php echo $order->email.' - '.$order->phone?></td>

				 </tr>
                <?php
                 }
				?>
            </table>
        </div>
    </div>
     <a href="<?php echo base_url('product/product_addition');?>" >  <button type="button" class="btn-primary">Add Product</button></a>
     <a href="<?php echo base_url('shopping/index');?>" >  <button type="button" class="btn-primary">shop</button></a>
    <a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>
</body>
</html>
