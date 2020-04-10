<?php
var_dump($_POST);



class Users {
    public $pseudo;
    public $pass;

    public function __construct(string $pseudo, $pass){
        $this->setPseudo($pseudo);
        $this->setPass($pass);
    }
    
    function setPass($pass){
        $this->pass = $pass;
    }
    function getPass(){
        return $this->pass;
    }
    function setPseudo(string $pseudo){
        $this->pseudo = $pseudo;
    }
    function getPseudo(){
        return $this->pseudo;
    }
}
$utilisateur = new Users("","");

function insert_user() {
    $this->name = $_POST("pseudo");
    $this->pass = $_POST("pass");
}
var_dump($utilisateur);


$tp = fopen("tp.json","a+");
$username = $_POST ["pseudo"];
$userpass = $_POST ["pass"];

fwrite($tp, json_encode($utilisateur));

fclose($tp);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Les entrées</title>
    <link rel="stylesheet" type="text/css" href="cv.css">
</head>
<body>
    <header id="entete">
    </header>
    <div id="encadre">
        <article id="cadre">
            <div id="form">
            <form method="post">
                
                 <fieldset>
                  <legend>information principale</legend>
                    <label for="pseudo"> pseudo</label>
                    <input type="text" name="pseudo" id="pseudo"placeholder="campeurman" required="required"/><br>
                  
                    <label for="pass">mot de passe</label>
                    <input type="password"name="pass" id="pass"/>
                 </fieldset>
                 <input type="submit" value="envoyer"/>
                </div>
        </article>
    </div>
</body>
</html>