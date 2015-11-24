<?php
/**
 * Association page
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
        "div", null, array("class"=>"divAsso")
    );
    $p=$div->addElement(
        "p", "StrasWeb est une association à but non-lucratif".
        " gérée par des bénévoles."
    );
    $p->addElement("br");
    $p->addElement(
        "span", "Notre but est de permettre à des étudiants en informatique".
        " et en graphisme d'acquérir une expérience professionnelle".
        " en participant à des projets de création Web ou multimédia."
    );
    $div->addElement("h2", "Membres");
    $ul=$div->addElement(
        "ul", null, array("class"=>"members", "data-role"=>"listview")
    );
    $members=array(array("name"=>"Pierre Rudloff", "role"=>"Président",
    "email"=>"rudloff@strasweb.fr", "website"=>"http://rudloff.strasweb.fr/",
    "tel"=>"0606060606"), array("name"=>"Kevin Benoit", "role"=>"Vice-président",
    "email"=>"kevin.benoit@strasweb.fr"), array("name"=>"Guillaume Glad",
    "role"=>"Trésorier", "email"=>"glad@strasweb.fr"),
    array("name"=>"Anne-Catherine Distelzwey", "role"=>"Secrétaire",
    "email"=>"distelzwey@strasweb.fr",
    "website"=>"http://acdistelzwey.strasweb.fr/"), array("name"=>"Vincent Saling",
    "role"=>"Responsable ressources humaines", "email"=>"vincent.saling@strasweb.fr"),
    array("name"=>"Melissandre Collet",
    "role"=>"Responsable graphisme", "email"=>"m.collet@strasweb.fr",
    "website"=>"http://bemioux.tumblr.com/"));
    foreach ($members as $member) {
        $li=$ul->addElement(
            "li", null, array("itemscope"=>"",
            "itemtype"=>"http://schema.org/Person",
            "itemprop"=>"member")
        );
        $li->addElement(
            "meta", null, array("content"=>"StrasWeb", "itemprop"=>"memberOf")
        );
        $li->addElement("h3",     $member["name"], array("itemprop"=>"name"));
        $li->addElement("strong", $member["role"], array("itemprop"=>"jobTitle"));
        if (isset($member["email"])) {
            $div=$li->addElement("div", "E-mail : ");
            $div->addElement(
                "a", $member["email"], array("href"=>"mailto:".$member["email"],
                "title"=>"Ecrire à ".$member["name"], "itemprop"=>"email")
            );
        }
        if (isset($member["website"])) {
            $div=$li->addElement("div", "Site Web : ");
            $div->addElement(
                "a", $member["website"], array("href"=>$member["website"],
                "title"=>"Site Web de ".$member["name"], "itemprop"=>"url")
            );
        }
        if (isset($member["tel"])) {
            $div=$li->addElement("div", "Téléphone : ");
            $div->addElement(
                "a", $member["tel"], array("href"=>"tel:".$member["tel"],
                "title"=>"Appeler ".$member["name"], "itemprop"=>"telephone")
            );
        }
    }
    $wrapper->div->addElement("h2", "Partenaires");
    $wrapper->div->addElement(
        "p", "Afin d'assurer une réalisation exemplaire,".
        " StrasWeb fait également appel à des professionnels en freelance."
    );
    $ul=$wrapper->div->addElement(
        "ul", null, array(
            "class"=>"freelance", "data-role"=>"listview",
            "data-inset"=>"true"
        )
    );
    $ul->addElement("li")->addElement(
        "a", "Olivier Haquette", array("href"=>"http://olivierhaquette.fr/",
        "rel"=>"external")
    );
    $ul->addElement("li")->addElement("a", "Mylène Debord");
    $ul->addElement("li")->addElement(
        "a", "Alexis Gavoty",
        array("href"=>"http://www.viadeo.com/profile/0021l9qukvapcmhx",
        "rel"=>"external")
    );
    $ul->addElement("li")->addElement("a", "Thibaut Lily");
}
?>
