<?php require APPROOT . '/views/inc/header.php'; ?>

<?php flash('post_message'); ?>
<div class="container p-0 posts--fond">
<div class="row m-2 mt-0 mb-5 posts--cntr">
	<div class="col">
		<h1 class="posts--titre">Postes</h1>
	</div>
	
		<div class="col text-end">
		<?php if(isLoggedInAdmin()) : ?>
			<a href=" <?php echo URLROOT; ?>/posts/add" class="posts--button btn"> Nouveau Poste</a>
		<?php endif; ?>
		</div>		
</div>


	<div class="container d-flex p-3 posts--content">
		<?php foreach($data['posts'] as $post) : ?>
			<div class="posts--articles card card-body mt-5 mb-5 m-4 p-0 pb-3">
				<h4 class="card-title p-3 posts--articles--title text-white">  <?php echo $post->title; ?> </h4>
				<div class="bg-light ps-3 p-2 mb-3 posts--articles--author">
					<i class="fa fa-pencil"></i>  Écrit par <?php echo $post->name; ?> à <?php echo date_format(new DateTime($post->postCreated), 'H:i:s \l\e d-m-Y'); ?>
					<!-- test -->
				
					<!--  -->
				</div>
				<div class="blcktext p-3"><p class="card-text p-2 posts--articles--content"> <?php echo $post->body; ?></p></div>
				<a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>" class="btn btn-dark posts--plus-button"><i class="fas fa-plus text-center"></i></a>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>