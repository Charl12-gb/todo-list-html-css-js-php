<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo_club";

try {
    // Création de la connexion
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (\Throwable $th) {
    die("La connexion a échoué");
    exit;
}

function save_tache(array $data){
    global $connexion;
    $sql = "INSERT INTO todos (title, description, date) VALUES (:title, :description, :date)";
    $save = $connexion->prepare($sql);
    return $save->execute($data);
}

function taches(){
    global $connexion;
    $requete = $connexion->prepare("SELECT * FROM todos");
    $requete->execute();
    return $requete->fetchAll();
}

function delete_tache($id){
    global $connexion;
    $requete = $connexion->prepare("DELETE FROM todos WHERE id = :id");
    return $requete->execute(['id' => $id]);
}

function terminer_tache($id){
    global $connexion;
    $requete = $connexion->prepare("UPDATE todos SET status = :status, date_fin = :date_fin WHERE id = ". $id);
    return $requete->execute(['status' => true, 'date_fin' => date('Y-m-d')]);
}

function get_tache($id){
    global $connexion;
    $requete = $connexion->prepare("SELECT * FROM todos WHERE id = :id");
    $requete->execute(['id' => $id]);
    return $requete->fetch();
}

function update_tache($data, $id) {
    global $connexion;
    $requete = $connexion->prepare("UPDATE todos SET title = :title, description = :description, date = :date WHERE id = ". $id);
    return $requete->execute($data);
}