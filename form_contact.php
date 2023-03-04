<!DOCTYPE html>
<html>
	<?php include('_head.php'); ?>
	<body>
		<div id="bloc_page">
			<?php include('_header.php'); ?>
			<?php include('_banniere.php'); ?>
			<section>
				<article>
					<h1><img src="images/ico_epingle.png" alt="Catégorie voyage" class="ico_categorie" />Formulaire de contact</h1>
					<form methode="post" action="###">
						<p>
							<label for="Nom_contact">Votre nom : </label>
							<input type="texte" name="Nom_contact" id="Nom_contact" placeholder="ex:James T. Ufgood"required autofocus >
						</p>
						<p>
							<label for="scty_contact">Votre société : </label>
							<input type="texte" name="scty_contact" id="scty_contact" placeholder="ex:COGIP"required >
						</p>
						<p>
							<label for="mail_contact">Votre e-mail : </label>
							<input type="email" name="mail_contact" id="mail_contact" placeholder="ex:JT.Ufgood@Cogip.com"required >
						</p>
						<p>
							<textarea rows="10" cols="30" required >Votre message</textarea>
						</p>
						<input id="submit_contact" type="submit" value="Envoyer" />
					</form>
				</article>
				<?php include('_apropos.php'); ?>
			</section>
			<?php include('_footer.php'); ?>
		</div>
	</body>
</html>