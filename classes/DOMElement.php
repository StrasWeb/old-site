<?php 
/**
 * NewDOMElement class
 *
 * PHP Version 5.3.6
 * 
 * @category PHP
 * @package  StrasWeb
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @license  https://creativecommons.org/licenses/by/2.0/fr/ CC BY 2.0
 * @link     http://strasweb.fr
 */
 /**
 * NewDOMElement class
 *
 * PHP Version 5.3.6
 * 
 * @category Class
 * @package  StrasWeb
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @license  https://creativecommons.org/licenses/by/2.0/fr/ CC BY 2.0
 * @link     http://strasweb.fr
 */
class NewDOMElement extends DOMElement
{
    /**
     * Add an element into another element
     * 
     * @param string $tag        The type of element you want to add
     * @param string $value      The text value of the element
     * @param array  $attributes Array with the attributes of the element
     * @param bool   $first      Add element at the beginning ?
     * 
     * @return DOMElement
     */
    function addElement($tag, $value=null, $attributes=array(), $first=false)
    {
        global $dom;
        $this->$tag=$dom->createElement($tag);
        if (isset($value)) {    
            $this->$tag->nodeValue=$value;
        }
        foreach ($attributes as $attr => $value) {
            $this->$tag->setAttribute($attr, $value);
            if ($attr=="id") {
                $this->$tag->setIdAttribute("id", true);
            }
        }
        if ($first) {
            $this->insertBefore($this->$tag, $this->firstChild);
        } else {
            $this->appendChild($this->$tag);
        }
        return($this->$tag);
    }
}


?>
