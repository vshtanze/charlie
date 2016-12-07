<?
	include("/php/DB.php");
	$db = new DB();
	$car = $db->getCar($_GET['id']);
?>
	<div class="row">
		<div class="description-div">
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<div class="description-item-img">
							<img class="img-responsive" id="zoom-img-target-1" src="<? echo $car[0]['image1']; ?>"></img>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="description-item-img">
							<img class="img-responsive" id="zoom-img-target-2" src="<? echo $car[0]['image2']; ?>"></img>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="description-item-img">
							<img class="img-responsive" id="zoom-img-target-3" src="<? echo $car[0]['image3']; ?>"></img>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="description-text-div">
					<h3><? echo $car[0]['title']; ?></h3>
					<p>
					$ <? echo $car[0]['price']; ?>
					<p>
						<? echo $car[0]['description']; ?>
					<p>
						<a href="#" class="add-to-cart-a">add to cart</a>
						
				</div>
			</div>
		</div>
	</div>
	<div class="description-item-img-zoom" id="zoom-div">
		<img id="zoom-img" alt="" src=""></img>
	</div>
	