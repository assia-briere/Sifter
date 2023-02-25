<?php 
class Formation {
    private $id;
    private $dateDebut;
    private $dateFin;
    private $idc ; 
    private $conn ; 
    public function __construct($db) {
        $this->conn = $db;
    }
    public function getId() {
        return $this->id;
    }

    public function getDateDebut() {
        return $this->dateDebut;
    }

    public function setDateDebut($dateDebut) {
        $this->dateDebut = $dateDebut;
    }

    public function getDateFin() {
        return $this->dateFin;
    }

    public function setDateFin($dateFin) {
        $this->dateFin = $dateFin;
    }
}
?>