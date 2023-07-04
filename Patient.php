<?php

class Patient {
    private $db;
     function __construct()
     {   $user = "root";
         $pwd = "";
         $this->db = new PDO('mysql:host=localhost;dbname=finddoctor', $user, $pwd);
     }


     //Register a Patient
    function addPatient($data){//$_POST, $_GET
        $nom = $data['nom'];
        $pr = $data['pr'];
        $mail = $data['mail'];
        $pwd1 = $data['pwd1'];
        $pwd2 = $data['pwd2'];
        if($pwd1!=$pwd2){
            echo "password does not match";
        }
        else {
            $verif = $this->db->query("select * from Patient where nomP='$nom' and prP='$pr'");
            if ($verif->fetch() ) {
                echo "Patient already exists";
            }else {
                $query = "insert into Patient values ('','$nom','$pr','$mail','$pwd1')";
                $r = $this->db->exec($query);
                if($r){
                    echo "user added succ";
                }
                else
                {
                    echo "pbe d'ajout";
                }
            }
        }

    }

}