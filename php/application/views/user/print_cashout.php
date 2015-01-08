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

 
 <ul class="list-group">
	<?php 
	$total_cost = 0;
	foreach($data as $d){
		if($d->status == 'success'){
			echo '<li class="list-group-item list-group-item-success">Product Name: '.$d->name.', Price: '.$d->price.', Status: '.$d->status.'</li>';
			$total_cost = $d->price;
		}else{
			echo '<li class="list-group-item list-group-item-danger">Product Name: '.$d->name.', Price: '.$d->price.', Status: '.$d->status.'</li>';
		}
	}
	?>
	<br/>
	<h3>Total Cost: <span class="label label-default">$<?php echo $total_cost;?></span></h3>
</ul>
