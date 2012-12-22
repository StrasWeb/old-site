<?php
/**
 * Contact page
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
    $address=$wrapper->addElement(
        "address", null, array("id"=>"contact_text", "class"=>"contact_text sixteen",
        "itemprop"=>"address", "itemscope"=>null,
        "itemtype"=>"http://schema.org/PostalAddress")
    );
    $p=$address->addElement("p");
    $p->addElement("span", "3, rue Mariano", array("itemprop"=>"streetAddress"));
    $p->addElement("br");
    $p->addElement("span", "67100", array("itemprop"=>"postalCode"));
    $p->addElement("span", " ");
    $p->addElement("span", "Strasbourg", array("itemprop"=>"addressLocality"));
    $p=$address->addElement("p");
    $p->addElement(
        "a", "contact@strasweb.fr", array("href"=>"mailto:contact@strasweb.fr",
        "id"=>"email", "title"=>"Nous écrire", "rel"=>"author", "itemprop"=>"email")
    );
    $p=$address->addElement("p", null, array("id"=>"siret", "class"=>"siret"));
    $p->addElement(
        "abbr", "SIRET ",
        array(
            "title"=>"Système d’Identification du Répertoire des ETablissements"
        )
    );
    $p->addElement("span", "524");
    $p->addElement("span", "469");
    $p->addElement("span", "699");
    $p->addElement("span", "00010");
    
    $address->addElement(
        "ul", null, array(
            "data-role"=>"listview", "data-inset"=>"true"
        )
    )->addElement("li")->addElement(
        "a", "Mentions légales", array("href"=>"page.php?page=mentions&mobile=".MOBILE)
    );
    $address->ul->addElement("li")
        ->addElement(
            "a", "Candidature spontanée",
            array("href"=>"recrutement.html", "rel"=>"external")
        );

}
    ?>
