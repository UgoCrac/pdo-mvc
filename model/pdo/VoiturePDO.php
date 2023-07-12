<?php



class VoiturePDO
{
    public static function getAll()
    {
        $query = BDD->prepare("SELECT * FROM voitures");
        $query->execute();
        $voitures = array();
        while ($data = $query->fetch()) {
            $voitures[] = new Voiture($data['immat'], $data['id_modele'], $data['couleur'], $data['datevoiture']);
        }
        return $voitures;
    }

    public static function updateOne(Voiture $voiture)
    {

        try {
            $query = BDD->prepare("UPDATE voitures SET `immat` = :immat, `id_modele` = :modele, `couleur` = :couleur, `datevoiture` = :dateV WHERE `immat` = :immat");

            $query->execute(array('immat' => $voiture->getImmat(), 'modele' => $voiture->getIdModele(), 'couleur' => $voiture->getCouleur(), 'dateV' => $voiture->getDateVoiture()));
        } catch (Exception $e) {
            return  'Erreur : ' . $e->getMessage();
        }
    }
}
