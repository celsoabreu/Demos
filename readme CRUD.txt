
CRUD Desenvolvido em PHP com Bootstrap.

Objetivo: Criar uma extrutura de cadastro para demmonstrar conhecimentos e habilidades na liguagem PHP e mbiente de desenvolvimento Web.

Documentação da estrutura de pastas e arquivos do projeto CRUD.

Pasta Raiz: PHP

App - Pasta onde ficaram todas as classes 
includes - Pasta onde ficaram os arquivos padroes, conexao, cabeçalho, rodape, formularios, entre outros
view - Pastara onde ficaram as visões, telas de cadastro, listas e movimntações.

Estrutura da tabela:

Tabela: usuario

Estrutura da tabela Estrutura da tabela
Visão de relação(ões) Visão de relação(ões)
#	Nome	Tipo	Agrupamento (Collation)	Atributos	Nulo	Predefinido	Comentários	Extra	Acções
	1	id Índice	int(11)			Não	Nenhum		AUTO_INCREMENT	Muda Muda	Elimina Elimina	
Mais Mais
	2	nome	varchar(50)	utf8mb4_unicode_ci		Sim	NULL			Muda Muda	Elimina Elimina	
Mais Mais
	3	celular	varchar(13)	utf8mb4_unicode_ci		Não	Nenhum			Muda Muda	Elimina Elimina	
Mais Mais
	4	email	varchar(50)	utf8mb4_unicode_ci		Não	Nenhum			Muda Muda	Elimina Elimina	
Mais Mais
	5	senha	varchar(20)	utf8mb4_unicode_ci		Não	Nenhum			Muda Muda	Elimina Elimina	
Mais Mais


OBS: NAO INSTALEI O COMMOPOSER
Composer
Será criado um arquivo no diretorio PHP (Raiz) chamado composer.json, este arquivo sera responsavel por configurar o 
auto-load das classes do nosso projeto.
 
Neste projeto apenas criaremos uma visao em forma de lista com opçoes de inclusao, alteração e eliminação de usuarios mesclando php e bootstrap.


Criado por:
Celso Abreu - CA Tecnology - 03-2022
