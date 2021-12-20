<?php require APPROOT . '/views/inc/header.php'; ?>
<!--Afin de rendre la page de connexion plus joli, la navbar disparait.-->
<style> .navbar--custom{display: none;}</style>
<!--Afin de rendre la page de connexion plus joli, la navbar disparait. FIN-->


 <div class="container  entetecolor">

 	<div class="return--button container">
 		<a href="<?php echo URLROOT; ?>/" class="return--button--b btn btn-block">Retour</a>
 	</div>

 	<h1 class="logintitle animtitle display-3 text-white text-center">Billet simple pour l'Alaska</h1>

 	<div class="container pt-4 pb-3">
 		<div class="card card-body bg-white mt-5 p-4 entetestyle__article animtitle sizeslct">

 			<?php flash('register_success') ?>


 			<form action=" <?php echo URLROOT; ?>/users/login" method="post">

 					<div class="form-group">
 					<label for="email"></label>
 					<input placeholder="e-mail"type="email" name="email" class="loginmail form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
 					<span class="invalid-feedback"> <?php echo $data['email_err']; ?></span>
 				</div>

 				<div class="form-group">
 					<label for="password"></label>
 					<input placeholder="mot de passe" type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
 					<span class="invalid-feedback"> <?php echo $data['password_err']; ?></span>
 				</div>

 				<div class="row row-cols-1">
 					<div class="login--login col">
 						<input type="submit" value="Connexion" class="login--button btn btn-success btn-block">
 					</div>
 					<div class="login--register col">
 						<a href="<?php echo URLROOT; ?>/users/register" class="login--back btn btn-block">Pas de compte? Enregistrez-vous</a>
 					</div>
 				</div>

 			</form>
 		</div>	
 	</div>
 </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>