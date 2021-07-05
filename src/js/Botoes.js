function botao_ios(){
    window.open("https://apps.apple.com/br/app/procar-brasil/id1449854728");
}

function botao_android(){
    window.open("https://play.google.com/store/apps/details?id=br.com.hinovamobile.procarbrasil&hl=pt_BR");
}

// Botão script Back-to-top
window.onscroll = function() {
    scrollbackToTop();
}
window.onscroll = function(){
    scrollWhats();
}


function scrollbackToTop(){
    let btn1 = document.getElementById('back-to-top');
    if (document.documentElement.scrollTop > 350){
        btn1.style.display = 'block';
    }else {
        btn1.style.display = 'none';
    }
}

function backToTop(){
    document.documentElement.scrollTop = 0;
}

// Botão script WhatsApp
function scrollWhats(){
    let btn2 = document.getElementsByClassName('botao-whats');
    if (document.documentElement.scrollTop > 300){
        console.log('btn whats if')
        btn2.style.display = 'block';
    }else {
        btn2.style.display = 'none';
        console.log('btn whats else')
    }
}
function scrollWhats() {
    document.getElementById.scrollTop = 0;    
}

function whats(){
    window.open('https://wa.me/5582996271108')
}
