<?php 
// +----------------------------------------------------------------------+
// | BoletoPhp - Vers�o Beta                                              |
// +----------------------------------------------------------------------+
// | Este arquivo est� dispon�vel sob a Licen�a GPL dispon�vel pela Web   |
// | em http://pt.wikipedia.org/wiki/GNU_General_Public_License           |
// | Voc� deve ter recebido uma c�pia da GNU Public License junto com     |
// | esse pacote; se n�o, escreva para:                                   |
// |                                                                      |
// | Free Software Foundation, Inc.                                       |
// | 59 Temple Place - Suite 330                                          |
// | Boston, MA 02111-1307, USA.                                          |
// +----------------------------------------------------------------------+

// +----------------------------------------------------------------------+
// | Originado do Projeto BBBoletoFree que tiveram colabora��es de Daniel |
// | William Schultz e Leandro Maniezo que por sua vez foi derivado do	  |
// | PHPBoleto de Jo�o Prado Maia e Pablo Martins F. Costa			       	  |
// | 																	                                    |
// | Se vc quer colaborar, nos ajude a desenvolver p/ os demais bancos :-)|
// | Acesse o site do Projeto BoletoPhp: www.boletophp.com.br             |
// +----------------------------------------------------------------------+

// +----------------------------------------------------------------------+
// | Equipe Coordena��o Projeto BoletoPhp: <boletophp@boletophp.com.br>   |
// | Desenvolvimento Boleto Bradesco: Ramon Soares						            |
// +----------------------------------------------------------------------+


// ------------------------- DADOS DIN�MICOS DO SEU CLIENTE PARA A GERA��O DO BOLETO (FIXO OU VIA GET) -------------------- //
// Os valores abaixo podem ser colocados manualmente ou ajustados p/ formul�rio c/ POST, GET ou de BD (MySql,Postgre,etc)	//

// DADOS DO BOLETO PARA O SEU CLIENTE
$dias_de_prazo_para_pagamento = $prazo;
$taxa_boleto = $taxa;
$data_venc = date("d/m/Y", time() + ($dias_de_prazo_para_pagamento * 86400));  // Prazo de X dias OU informe data: "13/04/2006";
$valor_cobrado = $valor; // Valor - REGRA: Sem pontos na milhar e tanto faz com "." ou "," ou com 1 ou 2 ou sem casa decimal
$valor_cobrado = str_replace(",", ".",$valor_cobrado);
$valor_boleto=number_format($valor_cobrado+$taxa_boleto, 2, ',', '');

$dadosboleto["nosso_numero"] = $nosso_numero;  // Nosso numero sem o DV - REGRA: M�ximo de 11 caracteres!
$dadosboleto["numero_documento"] = $numero_doc;	// Num do pedido ou do documento = Nosso numero
$dadosboleto["data_vencimento"] = $data_venc; // Data de Vencimento do Boleto - REGRA: Formato DD/MM/AAAA
$dadosboleto["data_documento"] = date("d/m/Y"); // Data de emiss�o do Boleto
$dadosboleto["data_processamento"] = date("d/m/Y"); // Data de processamento do boleto (opcional)
$dadosboleto["valor_boleto"] = $valor_boleto; 	// Valor do Boleto - REGRA: Com v�rgula e sempre com duas casas depois da virgula

// DADOS DO SEU CLIENTE
$dadosboleto["sacado"] = $sacado;
$dadosboleto["endereco1"] = $endereco1;
$dadosboleto["endereco2"] = $endereco2;

// INFORMACOES PARA O CLIENTE
$dadosboleto["demonstrativo1"] = $demonstrativo1;
$dadosboleto["demonstrativo2"] = $demonstrativo2;
$dadosboleto["demonstrativo3"] = $demonstrativo3;
$dadosboleto["instrucoes1"] = $instrucoes1;
$dadosboleto["instrucoes2"] = $instrucoes1;
$dadosboleto["instrucoes3"] = $instrucoes1;
$dadosboleto["instrucoes4"] = $instrucoes1;

// DADOS OPCIONAIS DE ACORDO COM O BANCO OU CLIENTE
$dadosboleto["quantidade"] = "001";
$dadosboleto["valor_unitario"] = $valor_boleto;
$dadosboleto["aceite"] = "";
$dadosboleto["especie"] = "R$";
$dadosboleto["especie_doc"] = "DS";


// ---------------------- DADOS FIXOS DE CONFIGURA��O DO SEU BOLETO --------------- //


// DADOS DA SUA CONTA - Bradesco
$dadosboleto["agencia"] = $agencia; // Num da agencia, sem digito
$dadosboleto["agencia_dv"] = $dvag; // Digito do Num da agencia
$dadosboleto["conta"] = $conta; 	// Num da conta, sem digito
$dadosboleto["conta_dv"] = $dvconta; 	// Digito do Num da conta

// DADOS PERSONALIZADOS - Bradesco
$dadosboleto["conta_cedente"] = $conta; // ContaCedente do Cliente, sem digito (Somente N�meros)
$dadosboleto["conta_cedente_dv"] = $dvconta; // Digito da ContaCedente do Cliente
$dadosboleto["carteira"] = "06";  // C�digo da Carteira: pode ser 06 ou 03

// SEUS DADOS
$dadosboleto["identificacao"] = $nomeusuario;
$dadosboleto["cpf_cnpj"] = $cpf_cnpj_usuario;
$dadosboleto["endereco"] = $endereco;
$dadosboleto["cidade_uf"] = $cidade .' '.$estado;
$dadosboleto["cedente"] = $nomeusuario;

// N�O ALTERAR!
include("include/funcoes_bradesco.php");
include("include/layout_bradesco.php");
?>
