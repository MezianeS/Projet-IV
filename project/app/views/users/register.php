<?php require APPROOT . '/views/inc/header.php'; ?>
<!--Afin de rendre la page de connexion plus joli, la navbar disparait.-->
<style> .navbar--custom{display: none;}</style>
<!--Afin de rendre la page de connexion plus joli, la navbar disparait. FIN-->


 <div class="container  entetecolor">

 	<div class="return--button container">
 		<a href="<?php echo URLROOT; ?>/" class="return--button--b btn btn-block">Retour</a>
 	</div>

 	<h1 class="logintitle animtitle display-3 text-white text-center">Billet simple pour l'Alaska</h1>
 	<div class="container pt-4">
 		<div class="card card-body mt-5 p-4 register-dgn animtitle sizeslct">
 			<form action=" <?php echo URLROOT; ?>/users/register" method="post">
 				<div class="form-group">
 					<label for="name"></label>
 					<input placeholder="nom" type="text" name="name" class="form-control form-control-lg  <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
 					<span class="invalid-feedback"> <?php echo $data['name_err']; ?></span>
 				</div>

 				<div class="form-group">
 					<label for="email"></label>
 					<input placeholder="e-mail" type="email" name="email" class="form-control form-control-lg  <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
 					<span class="invalid-feedback"> <?php echo $data['email_err']; ?></span>
 				</div>

 				<div class="form-group">
 					<label for="password"></label>
 					<input placeholder="mot de passe" type="password" name="password" class="form-control form-control-lg  <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
 					<span class="invalid-feedback"> <?php echo $data['password_err']; ?></span>
 				</div>

 				<div class="form-group">
 					<label for="confirm_password"></label>
 					<input placeholder="confirmer le mot de passe" type="password" name="confirm_password" class="form-control form-control-lg  <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
 					<span class="invalid-feedback"> <?php echo $data['confirm_password_err']; ?></span>
 				</div>

  				<div class="row row-cols-1">
 					<div class="login--login col">
 						<input type="submit" value="S'inscrire" class="login--button btn btn-success btn-block">
 					</div>
 					<div class="login--register col">
 						<a href="<?php echo URLROOT; ?>/users/login" class="login--back btn btn-block">Déjà inscrit? Connectez-vous</a>
 					</div>
 				</div>

 			</form>
 		</div>	
 	</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>