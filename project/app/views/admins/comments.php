<?php require APPROOT . '/views/inc/header.php'; ?>
<?php flash('post_message'); ?>

<div class="container glblposts">




<?php foreach($data['comments'] as $deletecomments) : ?>
	<div class="card card-body mt-5 mb-5 m-4 adminposts p-0">
			<div class="card-header p-3 ps-4 fw-bold">Titre du poste: <?php echo $deletecomments->postesTitle; ?> 
			</div>
			<p class="card-text p-2 adminposts--text ps-5"><?php echo $deletecomments->commentbody; ?> </p>
			<p class="bg-danger postsshow--comments--id"> <?php echo $deletecomments->postesId; ?>   </p>
			<div class="bg-light p-2 mb-2 adminposts--infos">  Écrit par: <?php echo $deletecomments->name; ?> à <?php echo date_format(new DateTime($deletecomments->commentsCreated), 'H:i:s \l\e d-m-Y'); ?> 
			</div>
			
			 <!-- Modification -->
			 <p class="reportmsg p-2">Le commentaire suivant a été signalé: <strong><?php echo $deletecomments->report; ?></strong></p>  
            <!-- Modification -->

			<form class="deleteaction text-center adminbuttonposts" action=" <?php echo URLROOT; ?>/admins/deletecommentaire/<?php echo $deletecomments->commId; ?>" method="post">
				<input type="submit" value="Supprimer" class="btn btn-danger postsshow--delete m-2">
			</form>

	</div>
<?php endforeach; ?>

</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>