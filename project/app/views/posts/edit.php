<?php require APPROOT . '/views/inc/header.php'; ?>
<style> .navbar--custom{display: none;}</style>

<div class="container postsshow--fond">

	<div class="container pt-4 pb-4 mb-5">
		<a href="<?php echo URLROOT; ?>/posts" class="postsshow--arrow p-2"><i class="fas fa-arrow-left"></i></a>
	</div>

	<div class="container postsshow--fondposts p-4">
 		<div class="card card-body mt-5 mb-5 edite-posts">
 	  		<h2>Modifier:</h2>
 			<form action=" <?php echo URLROOT; ?>/posts/edit/<?php echo $data['id']; ?> " method="post">

 				<div class="form-group">
 					<label for="title"></label>
 					<input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
 					<span class="invalid-feedback"> <?php echo $data['title_err']; ?></span>
 				</div>

 				<div class="form-group">
 					<label for="body"></label>
 					<textarea name="body" class="mytextarea edite-posts-text form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"> <?php echo $data['body']; ?></textarea>
 					<span class="invalid-feedback"> <?php echo $data['body_err']; ?></span>
 				</div>

 				<input type="submit" class="edite-posts-button btn btn-success mt-3 mb-3" value="Envoyer">
 			</form>

 		</div>
 	</div>
 </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>


