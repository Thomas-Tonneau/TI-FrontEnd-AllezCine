<?php
sleep(3);
$notification = "";
if (!empty($_POST['id']) && !empty($_POST['pwd'])) {
	if($_POST['id'] == 'user' && $_POST['pwd'] == 'user'){
		$notification = "Vous vous êtes connecté avec succès !";
		$_SESSION['connecte'] = true;
	} else {
		$notification = "Votre pseudo ou mot de passe est incorrect.";
	}
} else {
	$notification = "Votre pseudo ou mot de passe n'a pas été rempli.";
}

?>

<p><?= $notification ?></p>