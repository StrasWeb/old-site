if (window.addEventListener) {
    var cssTransitionsSupported = false;
    var div = document.createElement("div");
    div.innerHTML = "<div style='-webkit-transition:color 1s linear;-moz-transition:color 1s linear;'></div>";
    cssTransitionsSupported = (div.firstChild.style.webkitTransition !== undefined) || (div.firstChild.style.MozTransition !== undefined);
    delete div.innerHTML;

    if (cssTransitionsSupported) {
        var animCSS = document.createElement("link");
        animCSS.setAttribute("rel", "stylesheet");
        animCSS.setAttribute("href", "anim.css");
        document.getElementsByTagName("head")[0].appendChild(animCSS);
    }
    var getUrlVars = function () {
        "use strict";
        var vars, hashes, i, hash;
        vars = [];
        hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (i = 0; i < hashes.length; i += 1) {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    };
    if (getUrlVars().trans === "initial") {
        var initCSS = document.createElement("link");
        initCSS.setAttribute("rel", "stylesheet");
        initCSS.setAttribute("href", "init.css");
        document.getElementsByTagName("head")[0].appendChild(initCSS);
    }
    var init = function () {
        'use strict';
        var pageOut, homelink, i, menuLeft, menuItems, blueRect, moveCursor, resetCursor, animateIn, loadURL, scrollUp, goHome, preload;
        preload = document.createElement("div");
        preload.style.background = "url(img/spheres_out.svg)";
        document.body.appendChild(preload);
        animateIn = function () {
            document.body.className += " anim";
        };
        loadURL = function (url) {
            /*var client = new XMLHttpRequest();
            client.open("GET", url, true);
            client.send(null);
            client.onreadystatechange = function () {
                if (this.readyState === 4) {
                    window.location = url;
                }
            };*/
            window.location = url;
        };
        blueRect = document.createElement("div");
        blueRect.id = blueRect.className = "blueRect";
        moveCursor = function () {
            blueRect.style.top = (this.offsetTop + 8).toString() + "px";
        };
        resetCursor = function () {
            var current = document.getElementsByClassName("current")[0];
            if (current) {
                blueRect.style.top = (current.offsetTop + 8).toString() + "px";
            } else {
                blueRect.style.top = "0";
            }
        };
        menuLeft = document.getElementById("menu_left");
        homelink = document.getElementById("homelink");
        if (menuLeft) {
            menuLeft.appendChild(blueRect);
        }
        scrollUp = function () {
            window.scrollBy(0, -10);
        };
        pageOut = function (e) {
            var url, current;
            if (!!document.createElementNS && !!document.createElementNS('http://www.w3.org/2000/svg', "svg").createSVGRect) {
                e.preventDefault();
                document.body.className += " out";
                window.setInterval(scrollUp, 0);
                for (i = 0; i < menuItems.length; i += 1) {
                    menuItems[i].removeEventListener("click", pageOut, false);
                }
                document.getElementById("background2").style.backgroundImage = "url('img/spheres_out.svg')";
                if (getUrlVars().page === "services") {
                    document.getElementById("background").style.backgroundImage = "url('img/spheres_out.svg')";
                }
                current = document.getElementsByClassName("current")[0];
                if (current) {
                    current.className = "menuItem";
                }
                this.className = "menuItem current";
                for (i = 0; i < menuItems.length; i += 1) {
                    menuItems[i].removeEventListener("mouseover", moveCursor, false);
                }
                url = this;
                if (current) {
                    window.setTimeout(function () {
                        loadURL(url);
                    }, 1500);
                } else {
                    loadURL(url);
                }
            }
        };
        goHome = function (e) {
            e.preventDefault();
            var link, evt;
            link = document.getElementById("menuItem_about");
            blueRect.style.top = (link.offsetTop + 8).toString() + "px";
            evt = document.createEvent("MouseEvents");
            evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
            link.dispatchEvent(evt);
        };
        menuItems = document.getElementsByClassName("menuItem");
        for (i = 0; i < menuItems.length; i += 1) {
            menuItems[i].parentNode.className = "disabled";
            menuItems[i].addEventListener("mouseover", moveCursor, false);
            menuItems[i].addEventListener("mouseout", resetCursor, false);
            if (menuItems[i].className !== "menuItem current") {
                menuItems[i].addEventListener("click", pageOut, false);
            }
        }
        window.setTimeout(animateIn, 100);
        resetCursor();
        if (homelink) {
            homelink.addEventListener("click", goHome, false);
        }
    };
    var revert = function () {
        'use strict';
        //Fonction vide qui oblige le navigateur à recharger la page avec son CSS de base (pour éviter d'afficher une page blanche si l'utilisateur clique sur le bouton retour)
    };
    window.addEventListener("load", init, false);
    window.addEventListener("unload", revert, false);
}
