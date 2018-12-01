<?php

class HumainsManager{
    
    // attribut
    private $db;

    //setter
    public function setDb(PDO $db){
        $this->db = $db;
    }

    //construct 
    public function __contruct($db){
        $this->setDb($db);

    }
    
    public function save(Humain $humain){

        $request = $this->db->prepare("INSERT INTO humain(nom,prenom,adresse,ville,codepostal) VALUES(:nom,:prenom,:adresse,:ville,:codepostal)");
                                       


        $request->bindValue(':nom',$humain->getNom());
        $request->bindValue(':prenom',$humain->getPrenom());
        $request->bindValue(':adresse',$humain->getAdresse());
        $request->bindValue(':ville',$humain->getVille());
        $request->bindValue(':codepostal',$humain->getCodepostal());

        $reponse = $request->execute();

        return $reponse;

    }



    // Préparation de la requete d'insertion.
    //Asssignation des valeurs pour le plat.
    //Execution de la requete.
    //INSERT INTO humain(nom,prenom,adresse,ville,codepostal) 
    //VALUES("Menard","Robert","place de la mairie","Beziers",34500); 
    


}