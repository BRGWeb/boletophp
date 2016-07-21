boletophp
=========

Projeto Código-Aberto de Sistema de Boletos bancários em PHP

## Como utilizar
Para emitir um boleto você deve alterar o arquivo gera_boleto.php com os dados do boleto que deseja emitir e abri-lo no navegador.

## Porque esse fork foi criado?
Após anos usando o boletophp para diversos trabalhos percebemos que as modificações realizadas para cada novo projeto terminavam se perdendo com o tempo. Enfrentamos alguns problemas com projetos que precisavam de emissão de boletos de diversos bancos. Com este repositório pretendemos manter essas alterações, simplificar o processo de emissão para bancos diferentes no mesmo projeto e desenvolver a emissão de boletos com registro para todos os bancos. 

## Sobre o boletophp
Com a necessidade de criar uma forma de emissão de boletos com registro,Este projeto foi criado por Elizeu Alcantara desde Maio/2006 e teve origem do Projeto BBBoletoFree que tiveram colaborações de Daniel William Schultz e Leandro Maniezo que por sua vez foi derivado do PHPBoleto de João Prado Maia e Pablo Martins F. Costa.

Criar um sistema de geração de Boletos que seja mais simples do que o PhpBoleto e que se estenda ao desenvolvimento de boletos dos bancos mais usados no mercado, além do Banco do Brasil do projeto BBBoletoFree. Este sistema é de Código Aberto e de Livre Distribuição conforme Licença GPL.

Este projeto visa atender exclusivamente aos profissionais e desenvolvedores na área técnica de programação PHP dos boletos, portanto se faz necessário conhecimento desejado e estudo do mesmo para a perfeita configuração do boleto a ser usado, sendo de inteira responsabilidade do profissional a instalação, funcionamento, testes e compensação do mesmo em conta bancária, pois não damos suporte técnico, portanto mensagens enviadas a nós com dúvidas gerais, técnicas ou solicitações de Suporte não serão respondidas.

O projeto BoletoPhp não tem foco na questão administrativa, comercial ou jurídica, pois isto compete exclusivamente aos bancos devido as suas particularidades existentes de cada carteira de cada boleto. Maiores informações sobre o conceito de Boleto de Cobrança, você pode acessar aqui o site da Wikipédia

## Boletos/Bancos Desenvolvidos

Para este repositório retiramos os bancos que não estão mais em operação.

| Banco / Entidade                            | Carteira                                                           |
| ------------------------------------------- | ------------------------------------------------------------------ |
| Banco do Brasil	                          | 18 - Convênio de 6 , 7 ou 8 Dígitos                                |
| Caixa Econômica	                          | SR [SICOB, SINCO e SIGCB]                                          |
| Itaú	                                      | 175 / 174 / 178 / 104 / 109 - Sem Registro                         |
| Hsbc	                                      | CNR - Sem Registro                                                 |
| Bradesco	                                  | 06 / 03 - Sem Registro                                             |
| Banestes	                                  | 00 - Sem Registro                                                  |
| Santander-Banespa (Banco 033)	              | COB - Sem registro                                                 |
| Bancoob	                                  | 01 [SICOOB] - Sem registro                                         |
| Sicredi	                                  | A - Simples                                                        |
