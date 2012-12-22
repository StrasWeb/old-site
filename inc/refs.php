<?php
/**
 * References (previous works) page
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
    $wrapper->addElement("h2", "Nos références", array("class"=>"hidden"));
    $ul=$wrapper->addElement(
        "ul", null, array(
            "id"=>"circles", "class"=>"circles nineteen", "data-role"=>"listview"
        )
    );
    $refs=array("Franck Blanes"=>"http://franckblanes.com/",
    "Alice Pizza"=>"http://alicepizza.fr/",
    "Vignoble Klur"=>"http://www.klur.net/");
    $i=1;
    foreach ($refs as $name=>$url) {
        $li=$ul->addElement(
            "li", null, array("id"=>"ref".$i, "class"=>"ref".$i." reference",
            "itemscope"=>null, "itemtype"=>"http://schema.org/WebPage")
        );
        $a=$li->addElement(
            "a", null, array("href"=>$url, "rel"=>"external", "itemprop"=>"url")
        );
        $a->addElement(
            "img", null, array("src"=>"img/".$name.".png",
            "class"=>"ref_img ref_img_".$i,"id"=>"ref_img_".$i, "alt"=>"",
            "width"=>"75", "height"=>"75", "itemprop"=>"image")
        );
        $a->addElement(
            "div", null, array("class"=>"ref_overlay", "id"=>"ref_overlay_".$i)
        );
        $a->addElement(
            "div", null, array("class"=>"ref_overlay2", "id"=>"ref_overlay2_".$i)
        );
        $a->addElement(
            "span", $name, array("class"=>"name name_".$i, "id"=>"name_".$i,
            "itemprop"=>"name")
        );
        $li->addElement(
            "meta", null, array("itemprop"=>"author", "itemref"=>"strasweb",
            "content"=>"StrasWeb", "itemscope"=>null, 
            "itemtype"=>"http://schema.org/Organization")
        );
        $i++;
    }
    $wrapper->addElement(
        "br", null, array("class"=>"hidden")
    );
    $ul=$wrapper->addElement(
        "ul", null, array(
            "id"=>"others", "class"=>"others sixteen", "data-role"=>"listview"
        )
    );
    $refs=array("Le Streusel"=>"http://le-streusel.com/",
    "Les Bougies du soleil"=>"http://www.lesbougiesdusoleil.fr/",
    "Francis Siegel"=>"http://siegelfrancis.com/",
    "Amicale LEA Strasbourg"=>"http://lea-strasbourg.com/blog/");
    foreach ($refs as $name=>$url) {
        $li=$ul->addElement(
            "li", null, array("itemscope"=>"",
            "itemtype"=>"http://schema.org/WebPage")
        )->addElement(
            "a", null, array("href"=>$url, "rel"=>"external", "itemprop"=>"url")
        )->addElement("span", $name, array("itemprop"=>"name"));
        $li->addElement(
            "meta", null, array("itemprop"=>"author", "content"=>"StrasWeb")
        );
    }
        
        

}

    ?>
