<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="container fondcolorabout">
	<!--Image entete-->
	<?php echo $data['img_entete']; ?>
	<div class="container entetestyleabout p-5">

		<div class="container bg-white p-3 entetestyle__article" >
		<h1 class="entetetitre text-center p-2"><?php echo $data['title_one']; ?></h1>
		<p class="p-2"> <?php echo $data['description']; ?> </p>
		<p> Version: <strong><?php echo APPVERSION; ?></strong> </p>
		</div>

		<div class="container bg-white p-3 entetestyle__article text-center">
			<h2 class="entetetitre p-2"> <?php echo $data['title_two']; ?> </h2>
			<a href="<?php echo URLROOT; ?>/users/register" class="btn btn-danger m-2">
			Inscription</a>
			<a href=" <?php echo URLROOT; ?>/users/login" class="btn btn-danger m-2">
			Connexion</a>
		</div>

	</div>

</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>


