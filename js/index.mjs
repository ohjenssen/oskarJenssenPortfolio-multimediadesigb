import { header } from "./functions/header.mjs";
import { seeMore } from "./functions/seeMore.mjs";
const path = location.pathname;

switch(path){
    case '/':
    case '/index.html':
        document.querySelector('#seeMore').addEventListener('click', seeMore);
        break;
    
}


window.onload = header();