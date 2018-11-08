<?php
class Model_devoir extends CI_Controller
{
    public function region_admin()
    {
        $sql = $this->db->query("select idRegion, nomRegion, scoreRegion from region");
        return $sql->result();
    }

    public function region_simple()
    {
        $sql = $this->db->query("select idRegion, nomRegion, scoreRegion from region where idRegion = 1");
        return $sql->result();
    }

    public function affiche_ville($id)
    {
        $sql = $this->db->query("select nomVille, scoreVille from ville where numRegion =".$id);
        return $sql->result();
    }

    public function ajouterScore($idRegion, $nbVille)
    {
        $sql = $this->db->query("update region set scoreRegion = scoreRegion + 5*".$nbVille." where idRegion = ".$idRegion);
        $sql = $this->db->query("update ville set scoreVille = scoreVille + 5 where numRegion = ".$idRegion);
        
    }
}
?>