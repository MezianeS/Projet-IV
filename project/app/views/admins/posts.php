<?php require APPROOT . '/views/inc/header.php'; ?>
<?php flash('post_message'); ?>
<div class="container glblposts">

<?php foreach($data['posts'] as $deletepost) : ?>
			<div class="card card-body mt-5 mb-5 m-4 adminposts">
				<h4 class="card-title p-3"><?php echo $deletepost->title; ?></h4>
				<div class="bg-light p-2 mb-3 adminposts--infos">
					<i class="fa fa-pencil"></i>  Écrit par <?php echo $deletepost->name; ?> le <?php echo $deletepost->postCreated; ?>
				</div>
				<p class="card-text p-2 adminposts--text"> <?php echo $deletepost->body; ?></p>


		<form class="deleteaction text-center adminbuttonposts" action=" <?php echo URLROOT; ?>/admins/deletearticle/<?php echo $deletepost->postId; ?>" method="post">
		<input type="submit" value="Supprimer" class="btn btn-danger postsshow--delete m-2">
		</form>
			</div>
		<?php endforeach; ?>

</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>