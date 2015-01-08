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

<h3><span class="label label-default">Edit Member</span></h3>
<div class="form-group">
   <input class="form-control" id="main_member_id" name="member_id" placeholder="Enter Member ID">
   <button type="submit" class="btn btn-default" onclick="to_edit_member()">Edit Member</button>
</div>

<h3><span class="label label-default">Create New Member</span></h3>
<form role="form" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input class="form-control" id="exampleInputEmail1" name="username" placeholder="Enter User Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Contact Number</label>
    <input class="form-control" id="exampleInputEmail1" name="phone" placeholder="Enter Contact Number">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input class="form-control" id="exampleInputEmail1" name="address" placeholder="Enter Address">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php if($this->input->get('register') == 'success'){
			echo 'Member register success';
		}else if($this->input->get('register') == 'fail'){
			echo 'Member name has been used.';
		}
?>



