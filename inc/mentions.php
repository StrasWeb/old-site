<?php
/**
 * Disclaimer page
 *
 * PHP Version 5.3.6
 * 
 * @category PHP
 * @package  StrasWeb
 * @author   Pierre Rudloff <rudloff@strasweb.fr>
 * @license  https://creativecommons.org/licenses/by/2.0/fr/ CC BY 2.0
 * @link     http://strasweb.fr
 */
if (isset($wrapper)) {
    $div=$wrapper->addElement(
        "div", null, array("id"=>"mentions", "class"=>"divmentions")
    );
    $div->addElement("h2", "Mentions légales");
    $div->addElement("span", "Le site ");
    $div->addElement("strong")->addElement(
        "em", "strasweb.fr"
    );
    $div->addElement(
        "span", " et tout ses sous-domaines sont édités par l'association "
    );
    $div->addElement("strong", "StrasWeb", array("itemprop"=>"name"));
    $div->addElement("span", " :");
    $ul=$div->addElement(
        "ul", null, array("data-role"=>"listview", "data-inset"=>"true")
    );
    $address=$ul->addElement(
        "li", "Siège : ", array("itemprop"=>"address", "itemscope"=>null,
        "itemtype"=>"http://schema.org/PostalAddress")
    )->addElement("address");
    $address->addElement(
        "span", "3, rue Mariano", array("itemprop"=>"streetAddress")
    );
    $address->addElement("span", " ");
    $address->addElement("span", "67100", array("itemprop"=>"postalCode"));
    $address->addElement("span", " ");
    $address->addElement("span", "Strasbourg", array("itemprop"=>"addressLocality"));
    $ul->addElement("li", "Numéro SIRET : 52446969900010");
    $ul->addElement("li", "Directeur de la publication : Pierre Rudloff");
    $ul->addElement("li")->addElement(
        "a", "Numéro de téléphone : ***REMOVED***", array(
            "href"=>"tel:***REMOVED***", "itemprop"=>"telephone"
        )
    );
    $ul->addElement("li")->addElement(
        "a", "Adresse e-mail : contact@strasweb.fr", array(
            "href"=>"mailto:contact@strasweb.fr",
            "rel"=>"author", "itemprop"=>"email"
        )
    );
    

    
    $div->addElement("p")->addElement(
        "span", "L'hébergement est assuré par OVH :"
    );
    $div->addElement(
        "ul", null, array("data-role"=>"listview", "data-inset"=>"true")
    )->addElement(
        "li", "Siège : 2 rue Kellermann 59100 Roubaix"
    );
    $div->ul->addElement("li")->addElement(
        "a", "Numéro de téléphone : 0820320363", array("href"=>"tel:0820320363")
    );
}
?>
