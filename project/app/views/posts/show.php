<?php require APPROOT . '/views/inc/header.php'; ?>
<style> .navbar--custom{display: none;}</style>

<div class="container postsshow--fond">

	<div class="ctr--arrow container pt-4 pb-4 mb-5">
		<a href="<?php echo URLROOT; ?>/posts" class="postsshow--arrow p-2"><i class="fas fa-arrow-left"></i></a>
	</div>

	<div class="container postsshow--fondposts p-4">
		<h1><?php echo $data['post']->title; ?></h1>
		<div class="bg-light p-2 mb-3">
 	 	<i class="fa fa-pencil"></i> Écrit par <?php echo $data['user']->name; ?> à <?php echo date_format(new DateTime($data['post']->created_at), 'H:i:s \l\e d-m-Y'); ?>
		</div>
		<div><?php echo $data['post']->body; ?></div>

		<?php if($data['post']->user_id == $_SESSION['user_id']) : ?>

		<hr>
		<div class="container text-center pb-4 responsive-button">
		<a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="postsshow--button btn btn-success btn-block m-2"> Modifier</a>

		<form class="deleteaction" action=" <?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
		<input type="submit" value="Supprimer" class="postsshow--delete m-2">
		</form>
		</div>
		<?php endif; ?>

		<hr>
		<!--COMMENTAIRES.-->


		<a href=" <?php echo URLROOT; ?>/posts/comment/<?php echo $data['post']->id; ?>" class="btn text-white postsshow--comments--button mb-3" >Commenter</a>
		<h2 class="postsshow--commentsh2">Commentaires: </h2>

		<!-- Bouger depuis comment.php -->

		<?php foreach($data['comments'] as $commentview) : ?>

		<div class="card card-body mb-3">
			<p class="postsshow--comments--body p-1"><?php echo $commentview->commentbody; ?><p>
			<p class="bg-danger postsshow--comments--id"> <?php echo $commentview->postesId; ?> </p>
			<div class="bg-light p-2 postsshow--comments--infos">  Écrit par: <?php echo $commentview->name; ?> à <?php echo date_format(new DateTime($commentview->commentsCreated), 'H:i:s \l\e d-m-Y'); ?>
			</div>
			<!-- modal -->
				<!-- Button trigger modal -->
				
				<button type="button" class="btnsignal" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $commentview->idcomm; ?>">
				Signaler le commentaire: (<?php echo $commentview->report;  ?>)
				</button> 
				<!-- Modal -->
				
				<div class="modal fade" id="exampleModal<?php echo $commentview->idcomm; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-body">
						Êtes-vous sûr de vouloir signaler le commentaire ?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
						<form class="show--report" action="<?php echo URLROOT; ?>/posts/reporttest/<?php echo $commentview->idcomm; ?>" method="POST">
						<input type="submit" name="report" value="Signaler" class="">
						</form>
					</div>
					</div>
				</div>
				</div>
				


			<!-- modal -->
		</div>
		<?php endforeach; ?>


		<!-- Bouger depuis comment.php  FIN-->
	</div>

</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>