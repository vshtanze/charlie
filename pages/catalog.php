<!-- catalog -->
<div class="row">
	<div class="col-md-12">
		<div class="catalog-div">
			<div class="row">
			<?
				include("/php/DB.php");
				$db = new DB();
				$cars = $db->getCars();
				foreach($cars as $item):
			?>
				<div class="col-md-4">
					<div class="catalog-item" onclick="document.location='index.php?view=description&id=<? echo $item['id']; ?>'">
						<img style="height: 200px; width: auto;" src="<? echo $item['image1']; ?>"></img>
						<p><h3><? echo $item['title']; ?></h3></p>	
						<p>$ <? echo $item['price']; ?></p>
					</div>
				</div>
				
			<?
				endforeach;
			?>
			</div>
		</div>
	</div>
</div>
