<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="UTF-8">
<title>Mobly shop</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>

<body>
<h1>Shop Mobly !!</h1>

<div class="cart">
	<?
	$cart = \Mobly\Cart::getInstance();
	?>

	You have <?= count($cart->getProducts()) ?> product(s) in <a href="<?= url('product/show')?>">your cart.</a>
</div>

<div class="categories">
	<h2>Categories</h2>
	<ul>
	<?  foreach ($categories as $cat): ?>
		<li>
			<a href="<?= url('home/categories') ?>"><?= $cat->name ?></a>
		</li>
	<? endforeach ?>
	</ul>
</div>


<div class="products">
	<h2>Products</h2>
	<ul>
	<?  foreach ($articles as $article): ?>
		<li>
			<form action="<?= url('product/add') ?>" method="POST" enctype="application/x-www-form-urlencoded">
				<?= $article->name ?>
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<input type="hidden" name="product_id" value="<?= $article->id?>">
				<input type="submit" value="add to cart"></input>
			</form>
		</li>
	<? endforeach ?>
	</ul>
</div>



</body>

</html>