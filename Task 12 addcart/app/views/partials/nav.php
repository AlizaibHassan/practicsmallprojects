<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<ul class="navbar-nav">
		<li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
		<li class="nav-item active"><a class="nav-link" href="/about">About</a></li>
		<li class="nav-item active"><a class="nav-link" href="/contact">Contact</a></li>
		<li class="nav-item active"><a class="nav-link" href="/users">Users</a></li>
		<li class="nav-item active"><a class="nav-link" href="/addproduct">Add Product</a></li>
		<li class="nav-item active"><a class="nav-link" href="/showproduct">Show Product</a></li>
	</ul>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-3 offset-md-10">

			<button class="btn btn-primary" onclick="changeDisplay()" >
				<span id="addToCart">Cart Items<?php echo " ".$_SESSION['count'][0]; ?> 
			</span></button>

			<button class="btn btn-primary" name="reset" >Reset</button>

		</div>
	</div>
</div>

