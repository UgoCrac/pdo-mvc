<?php



class ModelePDO
{

    public static function getAll()
    {
        $query = BDD->prepare("SELECT * FROM modeles ORDER BY marque");
        $query->execute();
        $modeles = array();
        while ($data = $query->fetch()) {
            $modeles[] = new Modele($data['id_modele'], $data['marque'], $data['modele'], $data['carburant']);
        }
        return $modeles;
    }

    public static function insertOne(Modele $modele)
    {
        $query = BDD->prepare("INSERT INTO modeles (id_modele, marque, modele, carburant) VALUES (:id_modele, :marque, :modele, :carburant)");
        try {
            $result = $query->execute(array("modele" => $modele->getModele(), 'id_modele' => $modele->getId(), "marque" => $modele->getMarque(),  "carburant" => $modele->getCarburant()));
        } catch (Exception $e) {
            $result = 0;
        }
        return $result;
    }
}
