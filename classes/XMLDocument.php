<?php
/**
 * XMLDocument class
 *
 * PHP Version 5.3.6
 * 
 * @category PHP
 * @package  StrasWeb
 * @author   Pierre Rudloff <rudloff@strasweb.fr>
 * @license  https://creativecommons.org/licenses/by/2.0/fr/ CC BY 2.0
 * @link     http://strasweb.fr
 */
 /**
 * XMLDocument class
 *
 * PHP Version 5.3.6
 * 
 * @category Class
 * @package  StrasWeb
 * @author   Pierre Rudloff <rudloff@strasweb.fr>
 * @license  https://creativecommons.org/licenses/by/2.0/fr/ CC BY 2.0
 * @link     http://strasweb.fr
 */
class XMLDocument
{
    /**
     * Create a new HTML/XML document
     * 
     * @return DOMDocument
     * */
    static function create()
    {
        include_once "classes/DOMElement.php";
        header("Content-type: text/html;charset=utf-8");
        $domimpl=new DOMImplementation();
        $doctype=$domimpl->createDocumentType("html");
        $dom=$domimpl->createDocument(
            "http://www.w3.org/1999/xhtml", "html", $doctype
        );
        $dom->registerNodeClass("DOMElement", "NewDOMElement");
        $dom->html=$dom->documentElement;
        $dom->head=$dom->createElement("head");
        $dom->body=$dom->createElement("body");
        $dom->html->appendChild($dom->head);
        $dom->html->appendChild($dom->body);
        return $dom;
    }
}
