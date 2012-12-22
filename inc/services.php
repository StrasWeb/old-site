<?php
/**
 * Services page
 *
 * PHP Version 5.3.6
 * 
 * @category PHP
 * @package  StrasWeb
 * @author   Pierre Rudloff <rudloff@strasweb.fr>
 * @license  https://creativecommons.org/licenses/by/2.0/fr/ CC BY 2.0
 * @link     http://strasweb.fr
 */
if (isset($wrapper) ) {
    $div=$wrapper->addElement(
        "div", null, array("class"=>"contenu_services sixteen")
    );
    $div->addElement(
        "p", "StrasWeb met des étudiants à disposition".
        " de votre entreprise ou association".
        " pour tous vos projets de création Web, graphisme et communication :"
    );
    $ul=$div->addElement(
        "ul", null, array("id"=>"liste_services", "class"=>"liste_services")
    );
    $services=array(
        "Création de sites Web", "Refonte graphique",
        "Affiches et flyers", "Traduction"
    );
    foreach ($services as $service) {
        $ul->addElement("li",  $service);
    }
    $div->addElement("p", "N'hésitez pas à nous contacter pour un devis.");
}
    
    ?>
