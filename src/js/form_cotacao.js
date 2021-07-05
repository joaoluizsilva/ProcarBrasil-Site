// ele já inicia desabilitado
console.log('Entrou no Fomulario Cotação Mobile');

// Formulario Mobile


function validar2(){
    const nome = document.getElementById('f2_nome').value;
    const email = document.getElementById('f2_email').value;
    const telefone = document.getElementById('f2_telefone').value;
    const estado = document.getElementById('f2_estado').value;
    const veiuculo = document.getElementById('f2_veiculo').value;
    const ano = document.getElementById('f2_ano').value;
    const placa = document.getElementById('f2_placa').value;
    const motoristaapp = document.getElementById('f2_motorista-de-app').checked; 
    const habilitacao = document.getElementById('f2_habilitacao').checked;
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
    if (nome ==""){
        return;
    }
    if (email == " "){
        return;
    }
    if (telefone == " "){
        return;
    }
    if (estado == " "){
        return;
    }if (veiuculo == " "){
        return;
    }
    if (placa == " "){
        return;
    }
    if (ano == " "){
        return;
    }else{
        window.open(
                "https://wa.me/5582996271108?text="+"*SOLICITAÇÃO DE ORÇAMENTO*"+ '%0D'+'%0A'+'%0A'+
                "Nome: "+nome+ '%0D'+ '%0A'+'%0A'+
                "Email: "+email+ '%0D'+'%0A'+'%0A'+
                "Telefone: "+telefone+ '%0D'+ '%0A'+'%0A'+
                "Estado: "+estado+ '%0D'+ '%0A'+'%0A'+
                "Veículo: "+veiuculo+ '%0D'+ '%0A'+'%0A'+
                "Ano: "+ano+'%0D'+ '%0A'+'%0A'+
                "Placa: "+placa+'%0D'+ '%0A'+'%0A'+
                "Possui habilitação? *->* "+'_'+possuiHabilitacao+'_'+'%0D'+ '%0A'+'%0A'+
                "Motorista de App ou taxi? *->* "+motoristaApp+'%0D'
                )
    }

    
}
