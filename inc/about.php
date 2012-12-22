<?php
/**
 * About page
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
    $wrapper->addElement(
        "p", "StrasWeb est une agence Web associative gérée par des étudiants".
        " proposant un ensemble de services autour du Web".
        " à destination des entreprises et des associations.",
        array("id"=>"presentation", "class"=>"presentation fifteen", "itemprop"=>"description")
    );
    $wrapper->addElement(
        "a", "contact@strasweb.fr", array("id"=>"contact",
        "href"=>"mailto:contact@strasweb.fr", "title"=>"Nous écrire",
        "class"=>"contact fourteen", "itemprop"=>"email")
    );
    $p=$wrapper->addElement("p", null, array("id"=>"lasso", "class"=>"lasso"));
    $imgAnimafac=isset($_SERVER["HTTP_ACCEPT"]) &&
    stristr($_SERVER["HTTP_ACCEPT"], "application/xhtml+xml")
    ?"LogoAnimafac.svg":"100px-LogoAnimafac.svg.png";
    $p->addElement("span", "Partenaires : ", array("class"=>"hidden"));
    $p->addElement(
        "a", null, array("href"=>"http://animafac.net/la-vie-du-reseau/#")
    )->addElement(
        "img", null, array("src"=>"img/".$imgAnimafac, "width"=>"100",
        "alt"=>"Animafac")
    );
    $p->addElement("span", " ", array("class"=>"hidden"));
    $p->addElement(
        "a", null, array("href"=>"http://www.expertmarket.fr/")
    )->addElement(
        "img", null, array("src"=>"http://www.expertmarket.fr/".
        "sites/default/files/filemanager/expertmarket.gif",
        "height"=>"22", "alt"=>"Expertmarket")
    );
    $p->addElement(
        "a", null, array("href"=>"http://www.europtimist.eu/")
    )->addElement(
        "img", null, array(
            "src"=>"img/europtimist.png",
            "alt"=>"Strasbourg, the europtimist", "height"=>"32"
        )
    );
    $p->addElement(
        "a", null, array("href"=>"http://www.marque-alsace.fr/")
    )->addElement(
        "img", null, array(
            "src"=>"img/Alsace.png",
            "alt"=>"Alsace", "height"=>"25"
        )
    );
    $p->addElement(
        "a", null, array("href"=>"http://internetdefenseleague.org")
    )->addElement(
        "img", null, array(
            "src"=>"http://internetdefenseleague.org/images/badges/final/footer_badge.png",
            "alt"=>"Membre de l'Internet Defense League", "height"=>"70"
        )
    );
}
?>
