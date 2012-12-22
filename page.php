<?php
/**
 * Index file
 *
 * PHP Version 5.3.6
 * 
 * @category PHP
 * @package  StrasWeb
 * @author   Pierre Rudloff <rudloff@strasweb.fr>
 * @license  https://creativecommons.org/licenses/by/2.0/fr/ CC BY 2.0
 * @link     http://strasweb.fr
 */
require_once "classes/XMLDocument.php";

header("Content-type: text/html;charset=utf-8");
$dom=XMLDocument::Create();
$dom->html->setAttribute("itemscope", null);
$dom->html->setAttribute("itemtype", "http://schema.org/Organization");
$dom->html->setAttribute("id", "strasweb");
$dom->html->setAttribute("itemid", "strasweb");
$dom->html->setAttribute("lang", "fr");

require_once "inc/vars.php";    
if (isset($_GET["page"])) {
    $page=$_GET["page"];
} else {
    $page="about";    
}


require_once "inc/head.php";
if (isset($menu[strval($page)])) {
    $dom->head->addElement("title", "StrasWeb - ".$menu[strval($page)]);
} else {
    $dom->head->addElement("title", "StrasWeb");
}

$dom->body->setAttribute("id", "page");
$dom->body->setAttribute("lang", "fr");
$dom->body->setAttribute("class", "page ".strval($page));

$div=$dom->body->addElement(
    "div", null, array("id"=>"bg_wrapper",
    "class"=>"bg_wrapper ".strval($page))
)->addElement(
    "div", null, array("id"=>"mainwrapper",
    "class"=>"mainwrapper ".strval($page), "data-role"=>"page", "data-theme"=>"d")
);
$header=$div->addElement(
    "header", null, array("data-role"=>"header", "data-theme"=>"c")
);
$h1=$header->addElement("h1");
$homelink=$h1->addElement(
    "a", null, array("href"=>"page.php?page=about&mobile=".MOBILE,
    "title"=>"$menu[about]", "id"=>"homelink", "class"=>"homelink")
);
$logo=isset($_SERVER["HTTP_ACCEPT"]) && stristr(
    $_SERVER["HTTP_ACCEPT"],
    "application/xhtml+xml"
)!=strval(false)?"logo.svg":"logo.png";
$homelink->addElement(
    "img", null, array(
        "src"=>"img/".$logo, "alt"=>"StrasWeb",
        "style"=>"width:286px; max-width:100%;",
        "itemprop"=>"image"
    )
);
$homelink->addElement("br", null, array("class"=>"hidden"));
$homelink->addElement(
    "span", "Agence Web associative", array("id"=>"agence_web",
    "class"=>"agence_web nineteen", "itemprop"=>"description")
);
$nav=$header->addElement(
    "nav", null, array(
        "id"=>"menu_left", "class"=>"menu_left fifteen", "data-role"=>"navbar"
    )
);
$ul=$nav->addElement("ul", null, array("class"=>"ul_menu"));
foreach ($menu as $url=>$item) {
    if ($url!="mentions") {
        $dom->head->addElement(
            "link", null, array("rel"=>"prefetch", "href"=>"page.php?page=".$url)
        );
        $li=$ul->addElement("li");
        $a=$li->addElement(
            "a", $item, array(
                "href"=>"page.php?page=".$url."&mobile=".MOBILE,
                "class"=>"menuItem", "id"=>"menuItem_".$url
            )
        );
        if (strval($page)===$url) {
            $a->setAttribute("class", "menuItem current");
            $a->removeAttribute("href");
            if ($url==="about") {
                $homelink->removeAttribute("href");
                $homelink->removeAttribute("id");
                $homelink->removeAttribute("title");
            }
        } else if ($url==="contact") {
            $a->setAttribute("rel", "author");
        }
    }
}
$ul->addElement("li")->addElement("a", "Blog", array("href"=>"http://blog.strasweb.fr/", "class"=>"menuItem", "id"=>"menuItem_blog"));
$nav->addElement("div", null, array("id"=>"menu_cursor", "class"=>"menu_cursor"));
$wrapper=$div->addElement(
    "div", null, array(
        "id"=>"page_wrapper" , "class"=>"page_wrapper ".strval($page),
        "data-role"=>"content"
    )
);
$validPages  =  array("about",  "refs", "services", "asso", "contact", "mentions");
if (in_array($page,  $validPages)) {
    include_once "inc/".$page.".php";
} else {
    header("HTTP/1.0 404 Not Found");
    $wrapper->addElement("p", "Page introuvable");
}
$wrapper->addElement(
    "div", null, array("class"=>"background ".strval($page), "id"=>"background")
);
$wrapper->addElement(
    "div", null, array("class"=>"background2 ".strval($page), "id"=>"background2")
);





print($dom->saveHTML());    

?>
