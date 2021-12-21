<?php require APPROOT . '/views/inc/header.php'; ?>
<style> .navbar--custom{display: none;}</style>

<div class="container postsnew--color">
	<div class="container pt-4 pb-4 mb-5">
 		<a href="<?php echo URLROOT; ?>/posts" class="postsnew--arrow text-light p-2"><i class="fas fa-arrow-left"></i></a>
 	</div>

 	   		<h2 class="text-light text-center postsnew--title animtitle">Nouveau poste</h2>
 	   		<p class="text-center text-light pt-2 pb-5 animtitle">Laissez libre cours à votre imagination...</p>


 	<div class="container p-4">
 		<div class="card card-body bg-white p-4 postsnew--formulaire animtitle">
 	 
 			<form action=" <?php echo URLROOT; ?>/posts/add" method="post">

 				<div class="form-group"> 
 					<label for="title"></label>
 					<input placeholder="titre" type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
 					<span class="invalid-feedback"> <?php echo $data['title_err']; ?></span>
 				</div>

 				<div class="form-group">
 					<label for="body"></label>
 					<textarea placeholder="Faites vous plaisir et écrivez ce qui vous passe par la tête." name="body" class="mytextarea postsnew--text form-control form-control-lg<?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body'];?></textarea>
 					<span class="invalid-feedback"> <?php echo $data['body_err']; ?></span>
 				</div>
 				<div class="mt-4 col">
 						<input type="submit" value="Envoyer" class="login--button btn btn-success btn-block">
 				</div>
 			</form>

 		</div>
	 </div>
 </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>


