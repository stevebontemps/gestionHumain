<?php

require_once 'models/Db.php';

require_once 'models/Humain.php';
require_once 'models/HumainsManager.php';


$conn = Db::getInstance();
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

//var_dump($conn);

$humainsManager = new HumainsManager($conn);


$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];
$ville = $_POST["ville"];
$codepostal = $_POST["codepostal"];

// var_dump($nom);
// var_dump($prenom);
// var_dump($adresse);
// var_dump($ville);
// var_dump($codepostal);

$mon_humain = new Humain($nom,$prenom,$adresse,$ville,$codepostal);

$humainsManager->add($mon_humain);

// $req = $humainsManager->getDb();

echo $mon_humain->getNom();


?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

</body>
</html>
