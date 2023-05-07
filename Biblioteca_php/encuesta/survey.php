<?php

class Survey
{
    private  $totalVotes;
    private  $optionSelected;
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=encuesta', "root", "");
    }

    public function setOpcionseled($option)
    {
        $this->optionSelected = $option;
    }

    public function getOptionSelecionada()
    {
        return $this->optionSelected;
    }
    public function vote()
    {
        $query = $this->db->prepare("UPDATE leguaje SET votos= votos + 1 WHERE opcion = :option");
        $query->execute(["option" => $this->optionSelected]);
    }

    public function showResults()
    {
        return $this->db->query('SELECT * FROM leguaje');
    }

    //selecionamos los votos y los sumamos
    public function getTotalVotes()
    {
        $query = $this->db->query('SELECT SUM(votos) AS votos_totales FROM leguaje');
        $this->totalVotes = $query->fetch(PDO::FETCH_OBJ)->votos_totales;
        return $this->totalVotes;
    }

    public function getPercentageVotes($votes)
    {
        return round(($votes / $this->totalVotes) * 100, 0);
    }
}
