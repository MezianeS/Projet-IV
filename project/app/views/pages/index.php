<?php require APPROOT . '/views/inc/header.php'; ?>
	
	<div class="container fondcolor">
	<!--Partie coloré du site;-->
	<div class="p-4 mb-4 text-center entetecolor">
		<div class="container animtitle">
			<h1 class="display-3 text-white pt-5 bsttitle "><?php echo $data['title']; ?></h1>
			<p class="lead text-white"><?php echo $data['description']; ?></p>
		</div>

	</div>

	<div class="container p-5 entetestyle">
		<!--Ajoutez les articles ici pour les non inscrits ! -->
		<div class="container bg-white p-3 entetestyle__article">
			<h2 class="entetetitre text-center p-2"><?php echo $data['title_one']; ?></h2>
			<p class="p-2"><?php echo $data['desc_one']; ?>
			</p>
		</div>

		<div class="container bg-white p-3 entetestyle__article">
			<h2 class="entetetitre text-center p-2"><?php echo $data['title_two']; ?></h2>
			<p class="p-2"> <?php echo $data['desc_two']; ?> <br>
			</p>
		</div>

		<div class="container bg-white p-3 entetestyle__article text-center">
			<h2 class="entetetitre p-2"> <?php echo $data['title_three']; ?> </h2>
			<a href="<?php echo URLROOT; ?>/users/register" class="btn btn-danger m-2">
			Inscription</a>
			<a href=" <?php echo URLROOT; ?>/users/login" class="btn btn-danger m-2">
			Connexion</a>
		</div>


		<!--Fin des articles non inscrits.-->
	</div>
	<!--fin du fond clairs du site.-->
</div>




<?php require APPROOT . '/views/inc/footer.php'; ?>


