<?php include ROOT . '/views/layouts/header.php'; ?>

<main>
	<div class="mainWrap mainWrapAkcii container row toSpaceBetween">
	<?php include ROOT . '/views/layouts/sidebar.php'; ?>
		<div class="content thematicContent">
			<h1 class="headerContent">Тематические наборы</h1>
			<div class="akciiContent">
				<div class="akciiRow">
				<?php 
				$counter = 1;
				foreach ($thematicCategories as $thematicItem): 
				?>
					<a class="akciiBlock" href="/thematicItem/<?php echo $thematicItem['id']?>">
						<div class="akciiBlockRound"><?php echo $thematicItem['name']?></div>
						<img class="thematicIndexImage" src="<?php echo Product::getThematicImage($thematicItem['id']); ?>" alt="<?php echo $thematicItem['name']?>">
					</a>
				<?php 
				$counter ++;
				endforeach;
				if ($counter > 2 ) {
					echo "</div>";
				}
				?>
			</div>
		</div>
	</div>
</main>
<div class="thematicMobile">
			<div class="content">
				<div class="akciiContent">
				<?php foreach ($thematicCategories as $thematicItem):?>
				 	<div class="akciiRow thematicRowMobile">
						<a class="akciiBlock" href="/thematicItem/<?php echo $thematicItem['id']?>">
							<div class="akciiBlockRound"><?php echo $thematicItem['name']?></div>
							<img class="thematicIndexImage" src="<?php echo Product::getThematicImage($thematicItem['id']); ?>" alt="<?php echo $thematicItem['name']?>">
						</a>
					</div>
				<?php endforeach; ?>
				</div>
			</div>
	</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>	