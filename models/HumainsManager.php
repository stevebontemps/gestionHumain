<?php

class HumainsManager{

    private $_db;

    public function setDb(PDO $db)
    {
       $this->_db = $db;
    }

    public function __construct($db)
    {
      $this->setDb($db);
    }

    public function add(Humain $h)
    {
      // Préparation de la requête d'insertion.
      // Assignation des valeurs pour le Menu.
      // Exécution de la requête.
      $q = $this->_db->prepare('INSERT INTO humain(nom,prenom,adresse,ville,codepostal) VALUES(:nom,:prenom,:adresse,:ville,:codepostal)');

     $q->bindValue(':nom',$h->getNom());
     $q->bindValue(':prenom',$h->getPrenom());
     $q->bindValue(':adresse',$h->getAdresse());
     $q->bindValue(':ville',$h->getVille());
     $q->bindValue(':codepostal',$h->getCodepostal());

     $reponse = $q->execute();

      // Hydratation du Menu passé en paramètre avec assignation de son identifiant et du prix initial.
      $h->hydrate(
        ['id'     => $this->_db->lastInsertId(),
        'nom'     => $h->getNom(),
        'prenom'  => $h->getPrenom(),
        'adresse' => $h->getAdresse(),
        'ville'   => $h->getVille(),
        'codepostal' => $h->getCodepostal()
      ]);

      return $reponse;

    }





}
