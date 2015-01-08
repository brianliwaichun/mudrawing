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
        <li><a href="register">Staff</a></li>
        <li><a href="member_register">Member</a></li>
		<li><a href="product_register">Product</a></li>
		<li><a href="Cashout">Cashout</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
 </nav>


<form role="form" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Product ID</label>
    <input class="form-control" id="exampleInputEmail1" name="product_id" placeholder="Enter Product ID" value="<?php if($product){echo $product[0]['id'];}?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Product Name" value="<?php if($product){echo $product[0]['name'];}?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input class="form-control" id="exampleInputEmail1" name="price" placeholder="Enter Price" value="<?php if($product){echo $product[0]['price'];}?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input class="form-control" id="exampleInputEmail1" name="description" placeholder="Enter Description" value="<?php if($product){echo $product[0]['description'];}?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Author</label>
    <input class="form-control" id="exampleInputEmail1" name="address" placeholder="Enter Author" value="<?php if($product){echo $product[0]['author'];}?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Quantity</label>
    <input class="form-control" id="exampleInputEmail1" name="quantity" placeholder="Enter Author" value="<?php if($product){echo $product[0]['quantity'];}?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Discount</label>
    <input class="form-control" id="exampleInputEmail1" name="discount" placeholder="Enter percentage of discount" value="<?php if($product){echo $product[0]['discount'];}?>">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php if($this->input->get('register') == 'success'){
			echo 'Product edit success';
		}else if($this->input->get('register') == 'fail'){
			echo 'Please enter correct information.';
		}
?>



