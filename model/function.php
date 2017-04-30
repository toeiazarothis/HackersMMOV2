<?php
include('db.php');

function listeJoueurs(){
  $connexion = connectionDB();
  $texte = '';
  $listeNew = $connexion->query('SELECT * FROM `HackMMO-Joueur` ORDER BY `HackMMO-Joueur`.`Pseudo`ASC');
  while ($result = $listeNew->fetch()) {
    $texte .=
    '<tr>
      <td>'.$result['Pseudo'].'</td>
      <td>'.$result['IP'].'</td>
      <td>'.$result['Reputation'].'</td>
      <td>'.$result['Rang_Special'].'</td>
      <td>'.$result['Informations_Sup'].'</td>
      <td>'.$result['Nom_De_Guilde'].'</td>
      <td>'.$result['Blason_Guilde'].'</td>
    </tr>';}
  return $texte;
}

// fonction pour afficher la liste des classes
function listeDeToutLesJoueurs () {
	$connexion = connectionDB();
	$reponse = $connexion->query("SELECT `Pseudo` FROM `HackMMO-Joueur` ORDER BY `HackMMO-Joueur`.`Pseudo`ASC");
	$texte = '<option value="" selected>Selectionner un joueur</option>';
	while ($donnees = $reponse->fetch())
	{
		$texte .= '<option value="'.$donnees['Pseudo'].'">'.$donnees['Pseudo'].'</option>';
	}
	return $texte;
}

//Retourne les info d'un joueur au format Json
function jsonJoueur($pseudo){
	$bdd = connectionDB();
	$reponse = $bdd->prepare("SELECT * FROM `HackMMO-Joueur` WHERE `Pseudo` = ?");
	$reponse->execute(array(htmlspecialchars($pseudo)));

	$data = $reponse->fetch();

	return json_encode(array(
		'Pseudo' => $data['Pseudo'],
		'IP' => $data['IP'],
		'Reputation' => $data['Reputation'],
		'Rang_Special' => $data['Rang_Special'],
		'Informations_Sup' => $data['Informations_Sup'],
    'Nom_De_Guilde' => $data['Nom_De_Guilde'],
		'Blason_Guilde' => $data['Blason_Guilde'],
	));
}

// condition permettant de lancer la fonction showFormulaireForMajEleveForAdmin
if (isset ($_POST['formulaire_joueur_for_maj'])) {
	echo showFormulaireForMajJoueurForAdmin ($_POST['formulaire_joueur_for_maj']);
}
// fonction permettant d'afficher le formulaire pour la MAJ élève
function showFormulaireForMajJoueurForAdmin ($Player) {
	$bdd = connectionDB ();
	$reponse = $bdd->prepare("SELECT `Pseudo`, `IP`, `Reputation`, `Rang_Special`, `Informations_Sup`, `Blason_Guilde` FROM `HackMMO-Joueur` WHERE `Pseudo`=?");
	$reponse->execute(array(htmlspecialchars($Player)));
	$donnees = $reponse->fetch();
	$texte =
  '<form action="admin" method="post">
		<div class="form-group">
		<fieldset disabled>
		<label class="sr-only" for="exampleInputAmount">Pseudo du joueur</label>
		<div class="input-group">
			<div class="input-group-addon">Pseudo</div>
			<input type="text" name="Pseudo" class="form-control"  value="'.$donnees['Pseudo'].'">
		</div>
		</fieldset>
			<label class="sr-only" for="exampleInputAmount">IP</label>
			<div class="input-group">
				<div class="input-group-addon">IP du joueur</div>
				<input type="text" name="IP" class="form-control"  value="'.$donnees['IP'].'">
			</div>
			<label class="sr-only" for="exampleInputAmount">Reputation</label>
			<div class="input-group">
				<div class="input-group-addon">Reputation du joueur</div>
				<input type="text" name="Reputation" class="form-control"  value="'.$donnees['Reputation'].'">
			</div>
			<label class="sr-only" for="exampleInputAmount">Rang special</label>
			<div class="input-group">
				<div class="input-group-addon">Rang Special du joueur</div>
        <select class="form-control" id="Rang_Special" name="Rang_Special" required="">
          <option value="Joueur Lambda">Joueur Lambda</option>
          <option value="Membre de la FHC">Membre de la FHC</option>
          <option value="Top 100">Top 100</option>
          <option value="Moderateur">Moderateur</option>
          <option value="Developpeur">Developpeur</option>
        </select>
			</div>
			<label class="sr-only" for="exampleInputAmount">Informations Sup</label>
			<div class="input-group">
				<div class="input-group-addon">Informations Sup</div>
				<input type="text" name="Informations_Sup" class="form-control"  value="'.$donnees['Informations_Sup'].'">
			</div>
			<label class="sr-only" for="exampleInputAmount">Blason_Guilde</label>
			<div class="input-group">
				<div class="input-group-addon">Blason_Guilde du joueur</div>
				<input type="email" name="Blason_Guilde" class="form-control"  value="'.$donnees['Blason_Guilde'].'">
			</div>
			<br>
			<div class="row">
				<div class="col-xs-6 col-xs-offset-3">
					<button class="btn btn-success">Modifier le joeur</button>
				</div>
			</div>
		</div>
	</form>';
	return $texte;
}


function ajoutJoueurs (){
  $connexion = connectionDB();

		$ajout = $connexion->prepare('INSERT INTO `HackMMO-Joueur`
		   (`Pseudo`, `IP`, `Reputation`, `Rang_Special`, `Informations_Sup`, `Nom_De_Guilde`, `Blason_Guilde`)
		   VALUES (?, ?, ?, ?, ?, ?, ?)');

		$ajout->execute(array(
			htmlspecialchars($_POST["Pseudo"]),
			htmlspecialchars($_POST["IP"]),
			htmlspecialchars($_POST["Reputation"]),
			htmlspecialchars($_POST["Rang_Special"]),
			htmlspecialchars($_POST["Informations_Sup"]),
			htmlspecialchars($_POST["Nom_De_Guilde"]),
			htmlspecialchars($_POST["Blason_Guilde"])
		));

  if ($ajout == FALSE){
        exit('erreur');//echec envoie
	}

    return
    '<header class="bg bg-darkest-gray">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading">Le joueur a bien été enregistré</div>
          <a href="index.php" class="page-scroll btn btn-xl">Accueil</a>
        </div>
      </div>
    </header>';
}
function listeDatacenter(){
  $connexion = connectionDB();
  $texte = '';
  $listeNew = $connexion->query('SELECT * FROM `HackMMO-Datacenter`');
  while ($result = $listeNew->fetch()) {
    $texte .=
    '<tr>
      <td>'.$result['IP'].'</td>
      <td>'.$result['Nom_De_Guilde'].'</td>
      <td>'.$result['Blason_Guilde'].'</td>
      <td>'.$result['Leader'].'</td>
      <td>'.$result['Co-Leader'].'</td>
      <td>'.$result['Information'].'</td>
    </tr>';}
  return $texte;
}

function ajoutDatacenter (){
  $connexion = connectionDB();

	$ajout = $connexion->prepare('INSERT INTO `HackMMO-Datacenter`
	    (`IP`, `Nom_De_Guilde`, `Blason_Guilde`, `Leader`, `Co-Leader`, `Information`)
	    VALUES (?, ?, ?, ?, ?, ?)');

	$ajout->execute(array(
		htmlspecialchars($_POST['IP']),
		htmlspecialchars($_POST['Nom_De_Guilde']),
		htmlspecialchars($_POST['Blason_Guilde']),
		htmlspecialchars($_POST['Leader']),
		htmlspecialchars($_POST['Co-Leader']),
		htmlspecialchars($_POST['Information'])
	));

  if ($ajout == FALSE){
        exit('erreur');//echec envoie
	}

    return
    '<header class="bg bg-darkest-gray">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading">Le Datacenter à bien été enregistré</div>
          <a href="index.php" class="page-scroll btn btn-xl">Accueil</a>
        </div>
      </div>
    </header>';
}

function miseajourJoueur(){
  $connexion = connectionDB();

	$majJoueur = $connexion->prepare('UPDATE `HackMMO-Joueur` SET (Pseudo`, `IP`, `Reputation`, `Rang_Special`, `Informations_Sup`, `Nom_De_Guilde`, `Blason_Guilde`)
	VALUES (?, ?, ?, ?, ?, ?, ?)');

	$majJoueur->execute(array(
		htmlspecialchars($_POST["Pseudo"]),
		htmlspecialchars($_POST["IP"]),
		htmlspecialchars($_POST["Reputation"]),
		htmlspecialchars($_POST["Rang_Special"]),
		htmlspecialchars($_POST["Informations_Sup"]),
		htmlspecialchars($_POST["Nom_De_Guilde"]),
		htmlspecialchars($_POST["Blason_Guilde"])
	));

if ($ajout == FALSE){
      exit('erreur');//echec envoie
}

  return
  '<header class="bg bg-darkest-gray">
    <div class="container">
      <div class="intro-text">
        <div class="intro-heading">Le joueur a bien été enregistré</div>
        <a href="index.php" class="page-scroll btn btn-xl">Accueil</a>
      </div>
    </div>
  </header>';
}


function supprimerJoueur(){
  $connexion = connectionDB();

  //$supprimer =$connexion->query('DELETE FROM `HackMMO-Joueur` WHERE `Pseudo` = '.$_POST["delJoueur"].'');
	$supprimer =$connexion->prepare('DELETE FROM `HackMMO-Joueur` WHERE `Pseudo` = ?');
	$supprimer->execute(array(htmlspecialchars($_POST["delJoueur"])));

  return
  '<header class="bg bg-darkest-gray">
    <div class="container">
      <div class="intro-text">
        <div class="intro-heading">Le joueur est bien supprimer du systeme</div>
        <a href="index.php" class="page-scroll btn btn-xl">Accueil</a>
      </div>
    </div>
  </header>';
}
?>
