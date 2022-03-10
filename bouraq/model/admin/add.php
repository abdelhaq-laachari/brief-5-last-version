<?php

require_once "../4test/model/Connection.php";




class AddTrip extends Connection
{
    public function insert()
    {
            $query = "INSERT INTO trip (ville_de_depart, ville_darrivée, date_de_depart, date_darrivée, prix) VALUES (?,?,?)";
            $log = $this->conn()->prepare($query);
            $log->execute();
            $res = $log->fetch(PDO::FETCH_ASSOC);
            return $res;
    }
}




?>


$sql = "INSERT INTO users (name, surname, sex) VALUES (?,?,?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$name, $surname, $sex]);