<link rel="stylesheet" type="text/css" href="../../bootstrap-3.1.1-dist/css/bootstrap.css">
<script src="../../bootstrap-3.1.1-dist/js/bootstrap.js"></script>
<script src="../../bootstrap-3.1.1-dist/js/jquery-2.1.0.js"></script>
<script src="../../bootstrap-3.1.1-dist/js/all.js"></script>
 <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="main">Bookshop</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="register">User</a></li>
        <li><a href="member_register">Member</a></li>
		<li><a href="product_register">Product</a></li>
		<li><a href="Cashout">Review</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
 </nav>

<h3><span class="label label-default">Edit Product</span></h3>
<div class="form-group">
   <input class="form-control" id="main_product_id" name="product_id" placeholder="Enter Product ID">
   <button type="submit" class="btn btn-default" onclick="to_edit_product()">Edit Product</button>
</div>

<h3><span class="label label-default">Create New Product</span></h3>
<form role="form" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Product Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input class="form-control" id="exampleInputEmail1" name="price" placeholder="Enter Price">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input class="form-control" id="exampleInputEmail1" name="description" placeholder="Enter Description">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Author</label>
    <input class="form-control" id="exampleInputEmail1" name="author" placeholder="Enter Author">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php if($this->input->get('register') == 'success'){
			echo 'Product register success';
		}else if($this->input->get('register') == 'fail'){
			echo 'Please enter correct information.';
		}
?>

<h3><span class="label label-default">Reserve Product Quantity</span></h3>
<form role="form" action="reserve_product" method="post">
	<div class="form-group">
    <label for="exampleInputEmail1">Product ID</label>
    <input class="form-control" id="exampleInputEmail1" name="reserve_product_id" placeholder="Enter Product ID">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Quantity</label>
    <input class="form-control" id="exampleInputEmail1" name="quantity" placeholder="Enter Quantity">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php if($this->input->get('reserve') == 'success'){
			echo 'Product reserve success';
		}else if($this->input->get('reserve') == 'fail'){
			echo 'Product reserve fail';
		}
?>



