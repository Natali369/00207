// ==UserScript==
// @name         YandexBot
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  try to take over the world!
// @author       Natalia Grigorieva
// @match        https://yandex.ru/*
// @icon         data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
// @grant        none
// ==/UserScript==

let keywords=["купля-продажа авто","каталог автомобилей","автомобили купить","б\у авто"];
let num=keywords.length;
let randind=getRandom(0,num);
let keyword=keywords[randind];
let mbutton=document.getElementsByClassName("button mini-suggest__button")[0];
let links=document.links;

if(mbutton!==undefined) {
console.log(mbutton);
document.getElementsByName("text")[0].value = keyword;
setTimeout(clickBtn,2000);
//document.getElementsByClassName("mini-suggest__button")[0].click();
}else{
for (let i=0; i<links.length; i++) {
    if (links[i].href.indexOf("auto.ru")!==-1) {
    let link=links[i]
    console.log("Нашел строку" +links[i]);
     window.location.replace(link);
    //link.click();
   // link.setAttribute('target', '_self');
//link.click();
break;
    }
    }
    }

    function getRandom(min,max) {
    return Math.floor(Math.random()*(max-min)+min);
    }
    function clickBtn() {
    document.getElementsByClassName("button mini-suggest__button")[0].click();
    }
