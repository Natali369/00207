// ==UserScript==
// @name         YandexBot
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  try to take over the world!
// @author       Natalia Grigorieva
// @match        https://www.yandex.ru/*
// @icon         data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
// @grant        none
// ==/UserScript==

let keywords=["купля-продажа авто","каталог автомобилей","автомобили купить","б\у авто"];
let keyword=keywords[getRandom(0,keywords.length)];
let minisuggest__button=document.getElementsByClassName("mini-suggest__button")[0];
let links=document.links;

if(minisuggest__button!==undefined) {
document.getElementById("a").removeAttribute("_blank");
document.getElementsByName("text")[0].value = keyword;
document.getElementsByClassName("mini-suggest__button")[0].click();
}else{
for (let i=0; i<links.length; i++) {
    if (links[i].href.indexOf("auto.ru")!==-1) {
    let link=links[i]
    console.log("Нашел строку" +links[i]);
    link.click();
break;
    }
    }
    }

    function getRandom(min,max) {
    return Math.floor(Math.random()*(max-min)+min);
    }
