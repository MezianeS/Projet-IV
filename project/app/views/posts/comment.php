<?php require APPROOT . '/views/inc/header.php'; ?>
<style> .navbar--custom{display: none;}</style>

<div class="container postsshow--fond">

	<div class="container pt-4 pb-4 mb-5 ctr--arrow">
		<a href="<?php echo URLROOT; ?>/posts" class="postsshow--arrow p-2"><i class="fas fa-arrow-left"></i></a>
	</div>
		
<div class="container postsshow--fondposts p-4">
 	<div class="card card-body mt-5 mb-5 edite-posts">
 		<h3>Ajouter un commentaire:</h3>
 			<form action=" <?php echo URLROOT; ?>/posts/comment/<?php echo $data['id']; ?> " method="post">
 				<div class="form-group">
 					<label for="commentbody"></label>
 					<textarea placeholder="Donnez votre avis!" name="commentbody" class="posts--comments--text form-control form-control-lg<?php echo (!empty($data['commentbody_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['commentbody']; ?></textarea>
 					<span class="invalid-feedback"> <?php echo $data['commentbody_err']; ?></span>
 				</div>
 				<input type="submit" class="edite-posts-button btn btn-success mt-3 mb-3" value="Envoyer">
 			</form>

 	</div>
 </div>

</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>