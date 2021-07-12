console.log("Index")
function enviar(){
    const nome = document.getElementById('nome').value
    const email = document.getElementById('email').value
    const telefone = document.getElementById('telefone').value
    const estado = document.getElementById('estado').value
    const veiuculo = document.getElementById('veiculo').value
    const placa = document.getElementById('placa') .value
    const ano = document.getElementById('ano').value 
    const motoristaapp = document.getElementById('motorista-de-app').checked 
    const habilitacao = document.getElementById('habilitacao').checked
    var possuiHabilitacao 
    var motoristaApp
    if (habilitacao === true) {
        possuiHabilitacao = 'Possui'
    }else{
        possuiHabilitacao= 'Não'
    }
    if (motoristaapp === true) {
        motoristaApp = 'sim'
    }else{
        motoristaApp= 'Não'
    }
    console.log('ola');

    //%0A -> quebra de linha e %20 -> espaço
    
    // window.open(
    //     "https://wa.me/5582991929154?text="+"SOLICITAÇÃO DE ORÇAMENTO "+'%0D'
    //     +"Nome: "+nome+'%20'+"Email: "+email+
    //     '%0D'+"Telefone: "+telefone+'%20'+"Estado:"+estado+
    //     '%0D'+'%20'+"Veículo: "+veiuculo+'%20'+"/Placa: "+placa+'%20'+"/Ano"+ano+
    //     '%0D'+"Possui habilitação? "+possuiHabilitacao+'%20'+
    //     "Motorista de App ou taxi? "+motoristaApp
    //     )
}
function validar(){
    const nome = document.getElementById('nome').value
    const email = document.getElementById('email').value
    const telefone = document.getElementById('telefone').value
    const estado = document.getElementById('estado').value
    const veiuculo = document.getElementById('veiculo').value
    const placa = document.getElementById('placa') .value
    const ano = document.getElementById('ano').value 
    const motoristaapp = document.getElementById('motorista-de-app').checked 
    const habilitacao = document.getElementById('habilitacao').checked
    var possuiHabilitacao 
    var motoristaApp
    if (habilitacao === true) {
        possuiHabilitacao = 'Possui'
    }else{
        possuiHabilitacao= 'Não'
    }
    if (motoristaapp === true) {
        motoristaApp = 'sim'
    }else{
        motoristaApp= 'Não'
    }
    
    // Validação dos Campos 
    if (this.nome.value == ""){
        window.alert('Falta Nome');
        return;
    }
    if (this.email.value == ""){
        window.alert('Falta o Email');
        return;
    }
    if (this.telefone.value == ""){
        alert('Falta o Telefone');
        return;
    }
    if (this.estado.value == ""){
        alert('Falta o Estato');
        return;
    }if (this.estado.veiuculo == ""){
        alert('Falta o Estato');
        return;
    }
    if (this.placa.value == ""){
        alert('Falta o Placa');
        return;
    }
    if (this.ano.value == ""){
        alert('Falta o Ano')
        return;
    }
        else{
        console.log('entrou no else')
        window.open(
            "https://wa.me/5582996271108?text="+"SOLICITAÇÃO DE ORÇAMENTO "+'%0A'
            +"Nome: "+nome+'%20'+"Email: "+email+
            '%0A'+"Telefone: "+'%20'+ telefone+'%20'+"Estado:"+estado+
            '%0A'+'%20'+"Veículo: "+'%20'+veiuculo+'%20'+"/Placa: "+placa+'%20'+"/Ano"+ano+
            '%0A'+"Possui habilitação? "+possuiHabilitacao+'%20'+
            "Motorista de App ou taxi? "+motoristaApp
            ) 
    }
}
//%0A -> quebra de linha e %20 -> espaço

// Script para Carregaro o Modal assim que carregar
$(document).ready(function() {
    $('#modal_popup').modal('show');
})