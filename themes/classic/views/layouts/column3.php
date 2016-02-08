<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="row">
				<div class="col-sm-12">
					<center>
					<a href="gotoshop">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/teocredit/logo2.png" class="logo">
					</a>

						

					</center>
				</div>
			</div>
			<div class="row">
				<div class="categories">
					<nav>
						<ul>		
						<?php $categorias = $this->getCategories(); ?>	

						<?php foreach ($categorias as $categoria): ?>
							<a href="<?php echo Yii::app()->request->baseUrl ?>/shop/categoria?name=<?php echo $categoria->id_cat; ?>" class="no-decoration">
								<div class="line-category">
								<div class="img-category">
									<img src="<?php echo Yii::app()->request->baseUrl ?>/images/categorias/<?php echo $categoria->perfil; ?>" class="img-circle">		
								</div>
								<div class="name-category">
									<li><?php echo $categoria->nombre; ?></li>
								</div>
							</div>
						</a>
						<?php endforeach; ?>							
							
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<?php echo $content; ?>
		</div>
	</div>
</div><!-- content -->
<?php $this->endContent(); ?>
