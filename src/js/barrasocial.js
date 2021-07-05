console.log('Scrip Barra Social');
window.onscroll = function(){
    barrascroll();
}

function barrascroll() {
var social = document.getElementById('barra-social');
    if (document.documentElement.scrollTop > 690 && document.documentElement.scrollTop < 4200 ){
        social.style.display = 'block';
    }else {
        social.style.display = 'none';
    }


}