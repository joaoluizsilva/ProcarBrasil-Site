<?php

header('Content-Type: text/html; charset=utf-8');

//ini_set('display_errors', 1);

function fEncode($senha){
	$token	=	NULL;
    $chave 	=	md5('73e1041a316167a');
    $senha 	= 	base64_encode($senha);
    $chave 	= 	base64_encode($chave);
    $tam 	= 	strlen($senha);
    $dtam 	= 	50 - $tam;
    
    for ( $i = 0; $i < $dtam; $i++) {$senha .= $i == 0 ? " " : rand(0, 9);}
    
    $tam = strlen($chave);
    $dtam = 50 - $tam;
    
    for ( $i = 0; $i < $dtam; $i++) {$chave .= $i == 0 ? " " : rand(0, 9);}
    for ( $i = 0; $i < 50; $i++) {$token .= substr($senha,$i, 1) . substr($chave,$i, 1);}
    
    return base64_encode($token);
}

function fSolicitarBoleto($array){

	$curl 	= 	curl_init();
	$url 	=	'https://api.hinova.com.br/api/sga/api/v1/ws_SGA.php';

	$fields = 	http_build_query($array);
	
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $fields);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$retorno 	=	curl_exec($curl);
	return $retorno;
}

function fConverteData($key){
	if(strstr($key,'/')){
		return substr($key,6,4).'-'.substr($key,3,2).'-'.substr($key,0,2);
	}else if(strstr($key,'-')){
		return substr($key,8,2).'/'.substr($key,5,2).'/'.substr($key,0,4);
	}else{
		return false;
	}
}

$array 	=	array(
				"cod"	=>	"01001",
				"emp"	=>	"2439",
				"cpf"	=>	fEncode($_POST['dfnCpf']),
				"tipo"	=> 	"2",
				"total"	=> 	"100"
			);

$retorno 	=	fSolicitarBoleto($array);
$retorno 	=	json_decode($retorno);

$html 	=	'<div class="row">
				<div class="col-md-12">
                    <table id="tblBoleto" class="table table-striped table-responsive display" cellspacing="0" width="100%">
	                    <thead>
	                        <tr class="alert-success">
	                            <th>Nosso Número</th>
	                            <th>Data Emissão</th>
	                            <th>Data Vencimento</th>
	                            <th>Valor</th>
	                            <th>Linha Digitável</th>
	                            <th>Imprimir</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	        ';
//echo $retorno->success;exit;
if($retorno->success == 'true'){
	foreach ($retorno->msg as $key => $value) {
		
		if(strstr($value->url, 'https')){
			$url 	=	'<a href="'.$value->url.'" target="_blank"> 
			                <button type="button" class="btn btn-success btn-sm"><i class="fa fa-print" aria-hidden="true"></i> </button>
			                </a>';
		}else{
			$url 	=	NULL;
		}

		$html 	.=	'<tr>
						<td>
	                    	'.$value->nosso_numero.'
	                    </td>

	                    <td>
	                    	'.fConverteData($value->data_emissao).'
	                    </td>

	                    <td>
	                    	'.fConverteData($value->data_vencimento).'
	                    </td>

	                    <td>
	                    	R$ '.number_format($value->valor,2,',','.').'
	                    </td>

	                    <td>
	                    	'.$value->linha_digitavel.'
	                    </td>
	                    	
	                    <td>
						   <a class="">'.$url.'</a>
	                    </td>';
	}
	$html 	.=      	'</tbody>
						</table>
					</div>
				</div>';
}else{
	$html 	=	'<div class="alert alert-danger" role="alert">'.$retorno->msg.'</div>';
}
echo $html;
?>