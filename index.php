<?php
	 /* API React  - 05/03/22 */
	/* Para nao haver bloqueio para uma requisição  trabalhando com dois servidores locais na mesma maquina criaremos um header onde permitira de tudo */

    header('Access-Control-Allow-Origin: *'); 
   /* echo ' Programa funcionando';  */
	
	/* Array de imagem do site G1 Bahia */
    /* https://www.bbc.com/portuguese/topics/cwr9jrn91g3t */	

    $data = [
    	
    	[ 
    		'imagem'=>'https://ichef.bbci.co.uk/live-experience/cps/800/cpsprodpb/DF35/production/_122514175_foto_01.jpg',
    		'conteudo'=>' Angkor Wat atrai milhões de visitantes todos os anos, mas a maioria sabe pouco sobre o vasto e complexo sistema hídrico que fomentou a ascensão e o fim do império.'
    	],
    	[ 
    		'imagem'=>'https://ichef.bbci.co.uk/live-experience/cps/800/cpsprodpb/11513/production/_123013907_16d81c6c-9d08-423b-9b61-52844e47655b.jpg',
    		'conteudo'=>' O recrudescimento dos combates no país  entre militares e grupos civis armados  indica uma mudança no conflito: de uma revolta para uma guerra civil.'
    	],

    ];

    die(json_encode($data));

?>





