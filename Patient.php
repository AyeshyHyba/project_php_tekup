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
            echo `<script>
            window.location.href= "Register.php";
            alert("password does not match");
            </script>`;
        }
        else {
            $verif = $this->db->query("select * from Patient where nomP='$nom' and prP='$pr'");
            if ($verif->fetch() ) {
                echo `<script>
            window.location.href= "Register.php";
            alert("Patient already exist");
            </script>`;
            }else {
                $query = "insert into Patient values ('','$nom','$pr','$mail','$pwd1')";
                $r = $this->db->exec($query);
                if($r){
                    header("location:login.html");
                }
                else{
                    echo "pbe d'ajout";
                }
            }
        }

    }

}

