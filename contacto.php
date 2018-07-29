<?php
if($_POST){include_once("submit.php");}
include_once("functions.php");
$titulo = "Diego Berges | Contacto";
$curriculum = "passive";
$proyectos = "passive";
$contacto = "active";
include("header.php");
?>
<div class="container">
	<?php
		require_once "recaptchalib.php";
		$secret = "6Lcxzw4TAAAAAO9XW60w-w0REtv90RXzWFM9Ng4P";
		$response = null;
		$reCaptcha = new ReCaptcha($secret);
		// si se detecta la respuesta como enviada
		if ($_POST["g-recaptcha-response"]) {
			$response = $reCaptcha->verifyResponse(
			        $_SERVER["REMOTE_ADDR"],
			        $_POST["g-recaptcha-response"]
			    );
		}
		if($response != null && $response->success){
			if (mail($email_destiny,$subject,$mensaje,"De: Contacto<".$_POST['mail'].">")) {
					echo "<div class='alert alert-success'>";
						echo "<strong>&iexcl;GRACIAS!</strong> Mensaje enviado correctamente.";
					echo "</div>";
			}
		}
	?>
	<p class="lead contact-p">Utiliza este formulario para contactar conmigo de manera rápida. Recuerda que también puedes contactar conmigo por Linkedin.</p>
</div>
<div class="container contact-f">
	<form role="form" style="max-width: 768px;" method="post" action="contacto.php">
		<div class="input-group margin-bottom-sm">
			<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
			<input type="text" class="form-control" id="name" name="name" placeholder="Nombre y Apellidos" required="">
		</div>
		<br />
		<div class="input-group margin-bottom-sm">
			<span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
			<input type="email" class="form-control" id="email" placeholder="Correo de contacto" name="email" required="">
		</div>
		<br />
		<div class="input-group margin-bottom-sm">
			<span class="input-group-addon"><i class="fa fa-pencil-square fa-fw"></i></span>
			<textarea class="form-control" id="text" placeholder="Escriba su mensaje" name="text" required="" rows="5"></textarea>
		</div>
		<br />
		<div class="g-recaptcha" data-sitekey="6Lcxzw4TAAAAADo1NM5-RZLtns7E6OH3an_tWKQt"></div>
		<br />
		<button type="submit" class="btn btn-custom">Enviar</button>
	</form>
</div><!-- /.container -->
<?php include("footer.php") ?>