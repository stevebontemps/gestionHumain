<?php

include('models/Db.php');
include('models/Humain.php');
include('models/HumainsManager.php');


$conn = Db::getInstance();

var_dump($conn);

$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

$humainsManager = new HumainsManager($conn);





$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];
$ville = $_POST["ville"];
$codepostal = (int)$_POST["codepostal"];

$mon_humain = new Humain($nom,$prenom,$adresse,$ville,$codepostal); 


$humainsManager->save($mon_humain);


// include('models/Humain.php');

// $moi = new Humain('bontemps','steve','dragonniere','vias',34400);

// echo $moi->getNom();















































?> 