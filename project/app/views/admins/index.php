<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container p-0 pt-5 adminbg">
	<div class="container bg-white pt-4 adminprincipal">
		<h3 class="pt-5 text-center">Bienvenue dans l'espace modération. </h3>
		<p class="m-0 p-3 pb-5 text-center admintxt"> Vous avez la possibilité de modérer les articles et les commentaires:</p>
		<div class="container">
			<div class="row row-cols-1">
 					<div class="col mb-5 adminbuttonposts">
 						<a href="<?php echo URLROOT; ?>/admins/posts" class="login--back bg-danger text-white btn btn-block">Postes</a>
 					</div>
 					<div class=" col mb-5 adminbutton">
 						<a href="<?php echo URLROOT; ?>/admins/comments" class="login--back bg-danger text-white  btn btn-block">Commentaires</a>
 					</div>
 				</div>
		</div>
	</div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>