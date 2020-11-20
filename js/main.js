// Voidaan testata hakeeko tiedoston --> alert("hi from main.js");
//  Etusivun lainalaskurin koodi
var s = document.getElementById('count');
var r = 0;
var e = document.getElementById('month');
var tulos = document.getElementById('result');
var ve = 0;

var rl = document.getElementById('resloan');
var rm = document.getElementById('resmonth');

var sign = document.getElementById('monthssign');

function calc(lainaera) {

    s = parseInt(lainaera.count.value);
    e = parseInt(lainaera.month.value);
    rl = parseInt(lainaera.resloan.value);
    rm = parseInt(lainaera.resmonth.value);

     //Tilinhoitokulu per kuukausi ja avausmaksu
    const tilinhoito = 9;
    const avausmaksu = 350;

    //Korkolaskuja
    const todellinenkorko = 1.89;       //korko        -->1,89%
    
    const kauppasumma = s-r+avausmaksu;
 
            v  = 100*12;

            a = todellinenkorko/v;
            aa = a+1;
            kaava = Math.pow(aa,e);

            ylarivi = kaava*a;
            alarivi = kaava-1;
            count = ylarivi/alarivi;
            kuukausiera = (tilinhoito+(count*kauppasumma)).toFixed(2);

                tulos = Math.round(kuukausiera);
                lainaera.result.value = tulos;
                lainaera.resloan.value = s + '€';
                lainaera.resmonth.value = e + ' ' + sign.textContent;
};



// Tekee href viittauksen kahdelle eri sisällölle luottohakemuksia käsiteltäessä 
                                
$(document).on('click', '#application-list a', function(e) {
    otherTabs = $(this).attr('data-secondary').split(',');
    for(i= 0; i<otherTabs.length;i++) {
        nav = $('<ul class="nav d-none" id="tmpNav"></ul>');
        nav.append('<li class="nav-item"><a href="#" data-toggle="tab" data-target="' + otherTabs[i] + '">nav</a></li>"');
        nav.find('a').tab('show');
    }
})




