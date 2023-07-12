<?php



class ProprioPDO
{
    public static function verifOne(Proprio $proprio)
    {
        try {
            $query = BDD->prepare("SELECT * FROM proprietaires WHERE id_pers = :id AND nom = :nom");
            $query->execute(array(':id' => $proprio->getId(), ':nom' => $proprio->getNom()));

            $proprio = $query->fetch();

            if ($query->rowCount() > 0) {
                $user = new Proprio($proprio['id_pers'], $proprio['nom'], $proprio['prenom'], $proprio['adresse'], $proprio['ville'], $proprio['codepostal']);
            } else {
                $user = 0;
            }
        } catch (Exception $e) {
            return  'Erreur : ' . $e->getMessage();
        }

        return $user;
    }

    public static function updateOne(Proprio $proprio)
    {

        try {
            $query = BDD->prepare("UPDATE proprietaires SET `nom` = :newNom, `prenom` = :newPrenom, `adresse` = :newAdresse, `ville` = :newVille, `codepostal` = :newCp WHERE `id_pers` = :id");

            $query->execute(array('newNom' => $proprio->getNom(), 'newPrenom' => $proprio->getPrenom(), 'newAdresse' => $proprio->getAdresse(), 'newVille' => $proprio->getVille(), 'newCp' => $proprio->getCp(), 'id' => $proprio->getId()));
        } catch (Exception $e) {
            return  'Erreur : ' . $e->getMessage();
        }
    }
}
