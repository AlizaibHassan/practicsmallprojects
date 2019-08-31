<?php require_once('partials/head.php'); ?>


<h1> Users Page </h1>

<div class="container"><ul>
<?php foreach($users as $user):?>

	<li><?= $user->name;?></li>


<?php endforeach; ?>
</ul></div>

<div class="container"><h1> Submit Your Name </h1>

<form method="POST" action="/users">
	<input type="text" name="name">
	<button type="submit">Submit</button>
</form></div>

<?php require_once('partials/footer.php'); ?>