<?php
	/*
	 * Arquivo para emissão de boletos.
	 * Os dados poderão ser carregados de um script externo
	 * ou configurados manualmente aqui para testes
	 *
	 */
	
	//Variáveis para emissão do boleto
	//DADOS DO BOLETO
	$prazo = 5; //dias para pagamento do boleto
	$taxa = "3.00"; //taxa de emissão a ser cobrada do pagador
	$valor = "1000,00"; //valor sem separador de milhares
	$nosso_numero = "123456"; //número único para identificação do boleto
	$numero_doc = "7890"; //documento que deu origem ao boleto 
	//DADOS DO CLIENTE
	$sacado = "Sacado do boleto"; //pagador
	$endereco1 = "Rua dos bobos, 0"; //logradouro e número do pagador
	$endereco2 = "Cidade - UF CEP 00000000"; //cidade, estado e cep do pagador
	//INFORMAÇÕES PARA O CLIENTE
	$demonstrativo1 = "Demonstrativo 1"; // Essas linhas são orientações ao pagador
	$demonstrativo2 = "Demonstrativo 2";
	$demonstrativo3 = "Demonstrativo 3";
	//INFORMAÇÕES PARA O CAIXA
	$instrucoes1 = "Instruções 1"; // Essas linhas são orientações para o caixa
	$instrucoes2 = "Instruções 2";
	$instrucoes3 = "Instruções 3";
	$instrucoes4 = "Instruções 4";
	//DADOS DO EMISSOR DO BOLETO
	$convenio = "123456"; //número do convênio - não é usado por todos os bancos
	$contrato = "123456"; //número do contrato - não é usado por todos os bancos
	$conta = "111111"; //conta sem o dígito
	$dvconta = "1"; //dígito verificador da conta (se houver)
	$agencia = "2222"; //agência
	$dvag = "2"; //dígito verificador da conta (se houver)
	$cpf_cnpj_usuario = "000000000000"; //cpf ou cnpj do recebedor
	$endereco = "meu endereço"; //logradouro e número do recebedor
	$cidade = "minha cidade"; //cidade do recebedor
	$estado = "meu estado"; //estado do recebedor
	$nomeusuario = "Emissor do boleto"; //nome do recebedor
	/*
	 * Banco emissor do boleto:
	 * banestes
	 * bancoob
	 * bb
	 * bradesco	
	 * cef
	 * hsbc
	 * itau
	 * santander_banespa
	 * sicredi
	 * sofisa
 	 */
	$banco = "banestes";
require "./include/boleto_$banco.php";