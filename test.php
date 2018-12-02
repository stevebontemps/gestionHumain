<?php

require 'models/Db.php';
require 'models/Humain.php';
require 'models/HumainsManager.php';

// On enregistre notre autoload.
// function chargerClasse($classname)
// {
//   require_once 'models/'.$classname.'.php';
// }
// spl_autoload_register('chargerClasse');
// // On appelle session_start() APRÈS avoir enregistré l'autoload.
// session_start();

$db = Db::getInstance();
$conn = $db->getConnection();

// $conn = Db::getInstance();
// $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

$rh = new HumainsManager($conn);

//echo $rh->getDb();

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
$codepostal = $_POST['codepostal'];

$monhumain = new Humain(['nom' => $nom, 'prenom' => $prenom, 'adresse' => $adresse, 'ville' => $ville, 'codepostal' => $codepostal]);

$rh->add($monhumain);

echo $monhumain->getNom();


// version 2

// $servername = "localhost";
// $dbname = "gestionhumain";
// $username = "root";
// $password = "root";
//
// try {
//
//     $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//
//     $nom = $_POST["nom"];
//     $prenom = $_POST["prenom"];
//     $adresse = $_POST["adresse"];
//     $ville = $_POST["ville"];
//     $codepostal = $_POST["codepostal"];
//
//
//     $data = [
//     'nom' => $nom,
//     'prenom' => $prenom,
//     'adresse' => $adresse,
//     'ville' => $ville,
//     'codepostal' => $codepostal
//     ];
//
//     $sql = "INSERT INTO humain(nom,prenom,adresse,ville,codepostal) VALUES(:nom,:prenom,:adresse,:ville,:codepostal)";
//
//
//     $stmt= $pdo->prepare($sql);
//     $stmt->execute($data);
//
//     }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
//     }



 ?>
