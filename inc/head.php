<?php
/**
 * <head> of HTML pages
 *
 * PHP Version 5.3.6
 * 
 * @category PHP
 * @package  StrasWeb
 * @author   Pierre Rudloff <rudloff@strasweb.fr>
 * @license  https://creativecommons.org/licenses/by/2.0/fr/ CC BY 2.0
 * @link     http://strasweb.fr
 */
if (isset($dom)) {
    $dom->head->addElement("meta", null, array("charset"=>"UTF-8"));
    $dom->head->addElement(
        "link", null, array("rel"=>"alternate", "href"=>"sitemap.php",
        "type"=>"application/xml")
    );
    if (isset($_GET["mobile"]) && $_GET["mobile"]) {
        define("MOBILE", true);
        $dom->head->addElement(
            "meta", null, array(
                "name"=>"viewport", "content"=>"width=device-width, initial-scale=1"
            )
        );
        $dom->head->addElement(
            "link", null, array(
                "rel"=>"stylesheet",
                "href"=>"jquery.mobile-1.1.0/jquery.mobile-1.1.0.min.css",
                "type"=>"text/css")
        );
        $dom->head->addElement("script", null, array("src"=>"jquery-1.7.2.min.js"));
        $dom->head->addElement(
            "script", null, array(
                "src"=>"jquery.mobile-1.1.0/jquery.mobile-1.1.0.min.js"
            )
        );
    } else {
        define("MOBILE", false);
        $dom->head->addElement(
            "link", null, array("rel"=>"stylesheet", "href"=>"style.css",
            "type"=>"text/css")
        );
        $dom->head->addElement("script", null, array("src"=>"script.js"));
    }
    /*Je voulais pas en arriver là,
    mais il y a vraiment trop de bugs dans Internet Explorer*/
    $commentIE=new DOMComment(
        "[if lt IE 9]><link rel='stylesheet' href='IE.css' type='text/css'/>".
        "<script src='http://html5shiv.googlecode.com/svn/trunk/html5.js'>".
        "</script><![endif]"
    );
    $dom->head->appendChild($commentIE);
    $dom->head->addElement(
        "link", null, array("rel"=>"shortcut icon", "href"=>"favicon.ico",
        "type"=>"image/vnd.microsoft.icon",
        "sizes"=>"256x256 128x128 64x64 48x48 32x32 24x24 16x16")
    );
    $dom->head->addElement(
        "link", null, array("rel"=>"icon", "href"=>"img/favicon.svg",
        "type"=>"image/svg+xml", "sizes"=>"any")
    );
    $dom->head->addElement(
        "link", null, array("rel"=>"author", "href"=>"page.php?page=contact")
    );
    $dom->head->addElement(
        "meta", null, array("name"=>"author", "content"=>"Pierre Rudloff")
    );
    $dom->head->addElement(
        "meta", null, array("name"=>"author", "content"=>"Mylène Debord")
    );
    switch(strval($page)){
    case "about"    :
        $desc="StrasWeb est une agence Web associative".
        " spécialisée dans la création et l'hébergement de sites Web.";
        break;
    case "refs"    :
        $desc="Nos références";
        break;
    case "contact"    :
        $desc="3, rue Mariano ; 67000 Strasbourg ;".
        " contact@strasweb.fr ; 06.85.30.44.28";
        break;
    case "services"    :
        $desc="Nos services";
        break;
    case "index"    :
        $desc="StrasWeb, agence Web associative, Strasbourg";    
        break;
    case "mentions" :
        $desc="Mentions légales de strasweb.fr";    
        break;
    case "asso"    :
        $desc="Présentation de l'association StrasWeb";    
        break;
    }
    if (isset($desc)) {
        $dom->head->addElement(
            "meta", null, array("name"=>"description", "content"=>$desc)
        );
    }
    $dom->head->addElement(
        "meta", null, array("name"=>"keywords",
        "content"=>"création Web, sites Web, Strasbourg, association, Alsace")
    );
    $dom->head->addElement(
        "meta", null, array("content"=>"StrasWeb", "itemprop"=>"name")
    );
    $dom->head->addElement(
        "link", null, array("href"=>"https://plus.google.com/110403274854419000481?
        rel=author", "rel"=>"author")
    );
    $dom->head->addElement("script", null, array("src"=>"internet_defense.js"));
}
    ?>
