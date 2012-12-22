<?php
/**
 * Sitemap for search engines
 *
 * PHP Version 5.3.6
 * 
 * @category PHP
 * @package  StrasWeb
 * @author   Pierre Rudloff <rudloff@strasweb.fr>
 * @license  https://creativecommons.org/licenses/by/2.0/fr/ CC BY 2.0
 * @link     http://strasweb.fr
 */
require_once "classes/DOMElement.php";
require_once "inc/vars.php";
header("Content-type: application/xml;charset=utf-8");
$dom=new DOMDocument();
$dom->registerNodeClass("DOMElement", "NewDOMElement");
$urlset=$dom->createElementNS(
    "http://www.sitemaps.org/schemas/sitemap/0.9", "urlset"
);
$dom->appendChild($urlset);
foreach ($menu as $url=>$item) {
    $node=$urlset->addElement("url");
    $node->addElement("loc", "http://strasweb.fr/index.php?page=".strval($url));
    $node->addElement("changefreq", "yearly");
}

print($dom->saveXML());


?>
