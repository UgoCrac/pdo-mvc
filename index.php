<?php
require 'utilitaires/config.php';
require_once 'model/bo/Modele.php';
require_once 'model/bo/Proprio.php';
require_once 'model/bo/Voiture.php';
require_once 'model/pdo/connexion.php';
require_once 'model/pdo/ModelePDO.php';
require_once 'model/pdo/ProprioPDO.php';
require_once 'model/pdo/VoiturePDO.php';



require 'controller/header.php';

require 'controller/modele.php';

require 'controller/proprio.php';

require 'controller/voiture.php';

require 'controller/footer.php';
