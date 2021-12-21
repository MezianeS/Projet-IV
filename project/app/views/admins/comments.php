<?php require APPROOT . '/views/inc/header.php'; ?>
<?php flash('post_message'); ?>
<div class="container glblposts">


<?php foreach($data['comments'] as $deletecomments) : ?>

		<div class="card card-body mt-5 mb-5 m-4 adminposts">
			<p class="card-text p-2 adminposts--text"><?php echo $deletecomments->commentbody; ?> <p>
			<p class="bg-danger postsshow--comments--id"> <?php echo $deletecomments->postesId; ?>   </p>
			<div class="bg-light p-2 mb-3 adminposts--infos">  Écrit par: <?php echo $deletecomments->name; ?> le <?php echo $deletecomments->commentsCreated; ?> 
			</div>

			<form class="deleteaction text-center adminbuttonposts" action=" <?php echo URLROOT; ?>/admins/deletecommentaire/<?php echo $deletecomments->commId; ?>" method="post">
		<input type="submit" value="Supprimer" class="btn btn-danger postsshow--delete m-2">
		</form>

		</div>
		<?php endforeach; ?>

		
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>