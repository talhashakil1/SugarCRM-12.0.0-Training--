<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 * *******************************************************************************/

$mod_strings = array(
	'LBL_BASIC_SEARCH'					=> 'Pesquisa básica',
	'LBL_ADVANCED_SEARCH'				=> 'Pesquisa avançada',
	'LBL_BASIC_TYPE'					=> 'Tipo básico',
	'LBL_ADVANCED_TYPE'					=> 'Tipo avançado',
	'LBL_SYSOPTS_1'						=> 'Selecione a partir das seguintes opções de configuração do sistema.',
    'LBL_SYSOPTS_2'                     => 'Que tipo de banco de dados será utilizado para a instância do Sugar que você está prestes a instalar?',
	'LBL_SYSOPTS_CONFIG'				=> 'Configuração de Sistema',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Especificar Tipo de Banco de Dados',
    'LBL_SYSOPTS_DB_TITLE'              => 'Tipo de Banco de Dados',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Corrija os seguintes erros antes de prosseguir:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'Atribua direitos de escrita a este diretório:',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> 'O nome de usuário e/ou senha da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Insira um nome de usuário e senha válidos',
    'ERR_DB_IBM_DB2_CONNECT'			=> 'O nome de usuário e/ou senha da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Insira um nome de usuário e senha válidos',
    'ERR_DB_IBM_DB2_VERSION'			=> 'Sua Versão do DB2 (%s) não é suportada pelo Sugar. Você deve instalar uma versão compatível. Consulte as versões compatíveis na Matriz de Compatibilidade nas Notas de Lançamento para verificar quais versões de DB2 são suportadas.',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Você precisa ter um cliente Oracle instalado e configurado se selecionar Oracle.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'O nome de usuário e/ou senha da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Insira um nome de usuário e senha válidos',
	'ERR_DB_OCI8_CONNECT'				=> 'O nome de usuário e/ou senha da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Insira um nome de usuário e senha válidos',
	'ERR_DB_OCI8_VERSION'				=> 'A sua versão de Oracle (%s) não é suportada pelo Sugar. É necessário instalar uma versão compatível com o aplicativo Sugar. Consulte a Matriz de Compatibilidade nas Notas sobre a Liberação para ver quais versões do Oracle são suportadas.',
    'LBL_DBCONFIG_ORACLE'               => 'Informe o nome de seu banco de dados. Esse será o espaço de tabela padrão designado para seu usuário ((SID from tnsnames.ora).',
	// seed Ent Reports
	'LBL_Q'								=> 'Consulta de Oportunidades',
	'LBL_Q1_DESC'						=> 'Oportunidades por Tipo',
	'LBL_Q2_DESC'						=> 'Oportunidades por Conta',
	'LBL_R1'							=> 'Relatório de Pipeline de 6 meses de vendas',
	'LBL_R1_DESC'						=> 'Oportunidades para os próximos seis meses, discriminadas por mês e tipo',
	'LBL_OPP'							=> 'Conjunto de dados de Oportunidades',
	'LBL_OPP1_DESC'						=> 'Aqui é onde você pode alterar o aspecto da consulta padrão',
	'LBL_OPP2_DESC'						=> 'Esta consulta será posicionada abaixo da primeira consulta do relatório',
    'ERR_DB_VERSION_FAILURE'			=> 'Não foi possível verificar a versão do banco de dados.',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Forneça o nome de usuário para o usuário administrador do Sugar.',
	'ERR_ADMIN_PASS_BLANK'				=> 'Forneça a senha para o usuário administrador do Sugar.',

    'ERR_CHECKSYS'                      => 'Foram detectados erros durante a verificação de compatibilidade. Para que a sua instalação do SugarCRM funcione corretamente, tome as medidas adequadas para resolver os problemas listados abaixo e pressione o botão para verificar novamente ou tente instalar de novo.',
    'ERR_CHECKSYS_CALL_TIME'            => 'Permissão de Passagem por Referência do Tempo de Chamada está Ligada (deverá ser definida para Desligada em php.ini)',

	'ERR_CHECKSYS_CURL'					=> 'Não encontrado: o Agendador Sugar será executado com funcionalidades limitadas. O serviço de Arquivo de E-mail não será executado.',
    'ERR_CHECKSYS_IMAP'					=> 'Não encontrado: InboundEmail e Campanhas (E-mail) requerem as bibliotecas IMAP. Nenhum deles será funcional.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'O Magic Quotes GPC não pode ser ligado durante a utilização do MS SQL Server.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Aviso:',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> '(Defina como',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M ou maior no seu arquivo php.ini)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Versão Mínima 4.1.2 — Encontrada:',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Falha ao ler e escrever variáveis da sessão. Não é possível prosseguir com a instalação.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'Não é um diretório válido',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Aviso: não editável',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'A sua versão de PHP não é suportada pelo Sugar. É necessário instalar uma versão que seja compatível com a aplicação Sugar. Consulte a Matriz de Compatibilidade nas Notas de Lançamento para Versões de PHP suportadas. A sua versão é ',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'A sua versão de IIS não é suportada pelo Sugar. É necessário instalar uma versão que seja compatível com a aplicação Sugar. Consulte a Matriz de Compatibilidade nas Notas sobre a Liberação para verificar as versões IIS suportadas. A sua versão é ',
    'ERR_CHECKSYS_FASTCGI'              => 'Detectamos que você não está utilizando um mapeamento de handler FastCGI para o PHP. É necessário instalar/configurar uma versão que seja compatível com o aplicativo Sugar. Consulte a Matriz de Compatibilidade nas Notas sobre a Liberação para verificar as versões suportadas. Consulte <a href="http://www.iis.net/php/" target="_blank" rel="nofollow noopener noreferrer">http://www.iis.net/php/</a>; para obter detalhes ',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'Para uma utilização otimizada do sapi IIS/FastCGI, defina fastcgi.logging para 0 no seu arquivo php.ini.',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Versão de PHP instalada não suportada: ( ver',
    'LBL_DB_UNAVAILABLE'                => 'Banco de dados indisponível',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Não foi encontrado suporte para o banco de dados. Certifique-se de que você possui os drivers necessários para um dos seguintes tipos de banco de dados: MySQL, MS SQLServer, Oracle ou DB2. Talvez seja necessário remover o comentário da extensão no arquivo php.ini, ou recompilar com o arquivo binário correto, dependendo da sua versão do PHP. Consulte o seu manual do PHP para mais informações sobre como habilitar o suporte para o banco de dados.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Funções associadas às XML Parser Libraries que são necessárias para executar o aplicativo Sugar não foram encontradas. Talvez seja necessário remover comentário da extensão no arquivo php.ini ou recompilar com arquivo binário correto, dependendo da sua versão de PHP. Consulte o Manual do PHP para obter mais informações sobre como ativar o Suporte do Banco de Dados.',
    'LBL_CHECKSYS_CSPRNG' => 'Gerador de números aleatórios',
    'ERR_CHECKSYS_MBSTRING'             => 'Funções associadas com a extensão Multibyte Strings PHP (mbstring) que são necessárias para executar o aplicativo Sugar não foram encontradas. <br/><br/>Geralmente, o módulo mbstring não está ativado por defeito no PHP e deve ser ativado com --enable-mbstring quando o binário PHP é construído. Consulte o Manual do PHP para obter mais informações sobre como ativar o suporte mbstring.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'A definição session.save_path no seu arquivo de configuração php (php.ini) não está configurada ou está definida em uma pasta inexistente. Talvez seja necessário definir o save_path em php.ini ou verificar se a pasta definida em save_path existe.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'A definição session.save_path no seu arquivo de configuração php (php.ini) está configurada em uma pasta não editável. Tome as medidas necessárias para tornar a pasta editável. <br>Dependendo do seu sistema operacional, pode ser necessário alterar as permissões executando o chmod 766, ou clicar com o botão direito no nome do arquivo para acessar as propriedades e desmarcar a opção somente leitura.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'O arquivo de configuração existe mas não é editável. Tome as medidas necessárias para tornar o arquivo editável. Dependendo do seu sistema operacional, pode ser necessário alterar as permissões executando o chmod 766 ou clicando com o botão direito no nome do arquivo para acessar as propriedades e desmarcar a opção somente leitura.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'O arquivo de substituição de configuração existe mas não é gravável. Tome as medidas necessárias para tornar o arquivo gravável. Dependendo do seu sistema operacional, isso pode exigir que você altere as permissões executando chmod 766 ou clicando com o botão direito sobre o nome do arquivo para acessar as propriedades e desmarcar a opção somente leitura.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'O Diretório Personalizado existe mas não é editável. Poderá ser necessário alterar as suas permissões (chmod 766) ou clicar nele com o botão direito e desmarcar a opção somente leitura, dependendo do seu sistema operacional. Tome as medidas necessárias para tornar o arquivo editável.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "Os arquivos ou diretórios abaixo listados não são editáveis ou não existem e não podem ser criados. Dependendo do seu sistema operacional, a correção pode exigir que você altere as permissões nos arquivos ou no diretório de origem (chmod 755) ou que clique com o botão direito no diretório de origem e desmarque a opção \"somente leitura\", aplicando-a a todas as subpastas.",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Modo de segurança ativo (você pode desativá-lo em php.ini)',
    'ERR_CHECKSYS_ZLIB'					=> 'Suporte ZLib não encontrado: o SugarCRM aproveita grandes benefícios de desempenho com a compressão zlib.',
    'ERR_CHECKSYS_ZIP'					=> 'Suporte ZIP não encontrado: SugarCRM precisa de suporte ZIP para processar arquivo comprimidos.',
    'ERR_CHECKSYS_BCMATH'				=> 'BCMATH suporte não encontrado: SugarCRM precisa de suporte a BCMATH para precisão arbitrária de matemática.',
    'ERR_CHECKSYS_HTACCESS'             => 'Teste para regravações .htaccess falhou. Isso normalmente significa que você não tem AllowOverride configurado para o diretório do Sugar.',
    'ERR_CHECKSYS_CSPRNG' => 'Exceção de CSPRNG',
	'ERR_DB_ADMIN'						=> 'O nome de usuário e/ou senha do administrador do banco de dados é inválido(a), e a conexão com o banco de dados não pôde ser estabelecida. Insira um nome de usuário e senha válidos. (Erro:',
    'ERR_DB_ADMIN_MSSQL'                => 'O nome de usuário e/ou senha do administrador do banco de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Insira um nome de usuário e senha válidos.',
	'ERR_DB_EXISTS_NOT'					=> 'O banco de dados especificado não existe.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'O banco de dados já existe com os dados de configuração. Para executar uma instalação com o banco de dados selecionado, execute novamente a instalação e escolha: "Remover e recriar as tabelas SugarCRM existentes?". Para fazer a atualização, utilize o Assistente de atualização na Console de Administração. Leia a documentação de atualização localizada <a href="http://www.sugarforge.org/content/downloads/" target="_new">aqui</a>.',
	'ERR_DB_EXISTS'						=> 'O nome de usuário do banco de dados fornecido já existe — não é possível criar outro com o mesmo nome.',
    'ERR_DB_EXISTS_PROCEED'             => 'O nome de usuário do banco de dados fornecido já existe. Você pode<br>1. pressionar o botão para voltar e escolher um novo nome, <br>2. clicar em "avançar" e continuar, mas todas as tabelas existentes neste banco de dados serão descartadas.<strong>Isso significa que as suas tabelas e dados serão destruídos.</strong>',
	'ERR_DB_HOSTNAME'					=> 'Nome do servidor não pode estar em branco.',
	'ERR_DB_INVALID'					=> 'Tipo de banco de dados selecionado inválido.',
	'ERR_DB_LOGIN_FAILURE'				=> 'O nome de usuário e/ou senha da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Insira um nome de usuário e senha válidos',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'O nome de usuário e/ou senha da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Insira um nome de usuário e senha válidos',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'O nome de usuário e/ou senha da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Insira um nome de usuário e senha válidos',
	'ERR_DB_MYSQL_VERSION'				=> 'Sua versão do MySQL (%s) não é compatível com o SugarCRM. Você deve instalar uma versão compatível. Consulte as versões compatíveis na Matriz de compatibilidade nas Notas sobre a versão para verificar quais versões do MySQL são compatíveis.',
	'ERR_DB_NAME'						=> 'Nome do banco de dados não pode estar em branco.',
	'ERR_DB_NAME2'						=> "Nome do banco de dados não pode conter '\\', '/', ou '.'",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "Nome do banco de dados não pode conter '\\', '/', ou '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "Nome do banco de dados não pode conter um número, '#', ou '@' e não pode conter um espaço, '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', ou '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "O nome do banco de dados pode apenas conter caracteres alfanuméricos e os símbolos '#', '_', '-', ':', '.', '/' ou '$'",
	'ERR_DB_PASSWORD'					=> 'As senhas fornecidas para o administrador do banco de dados do Sugar não coincidem. Reinsira as mesmas senhas nos respectivos campos.',
	'ERR_DB_PRIV_USER'					=> 'Forneça um nome de usuário do administrador do banco de dados. É necessário o usuário para a conexão inicial ao banco de dados.',
	'ERR_DB_USER_EXISTS'				=> 'O nome de usuário do banco de dados Sugar já existe — não é possível criar outro com o mesmo nome. Insira um novo nome de usuário.',
	'ERR_DB_USER'						=> 'Insira um nome de usuário para o administrador do banco de dados do Sugar.',
	'ERR_DBCONF_VALIDATION'				=> 'Corrija os seguintes erros antes de prosseguir:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'As senhas fornecidas para o usuário do banco de dados do Sugar não coincidem. Reinsira as mesmas senhas nos respectivos campos.',
	'ERR_ERROR_GENERAL'					=> 'Foram encontrados os seguintes erros:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Não é possível excluir o arquivo:',
	'ERR_LANG_MISSING_FILE'				=> 'Não é possível encontrar o arquivo:',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'Não foi encontrado o arquivo de pacote de idioma em incluir/idioma no interior:',
	'ERR_LANG_UPLOAD_1'					=> 'Ocorreu um problema com o seu carregamento. Tente novamente.',
	'ERR_LANG_UPLOAD_2'					=> 'Pacotes de idiomas devem ser arquivos ZIP.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP não pôde mover o arquivo temporário para o diretório de atualização.',
	'ERR_LICENSE_MISSING'				=> 'Arquivos obrigatórios não encontrados',
	'ERR_LICENSE_NOT_FOUND'				=> 'Arquivo de licença não encontrado!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'Diretório log fornecido não é válido.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'Diretório de log fornecido não é editável.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Diretório de log é obrigatório se pretende especificar o seu próprio.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'Incapaz de processar diretamente o script.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Não é possível usar as aspas simples para',
	'ERR_PASSWORD_MISMATCH'				=> 'As senhas fornecidas para o administrador do Sugar não coincidem. Reinsira as mesmas senhas nos respectivos campos.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'Não é possível editar o arquivo <span class=stop>config.php</span>.',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Você pode continuar esta instalação criando manualmente o arquivo config.php e colando a informação de configuração abaixo no arquivo config.php. No entanto, você <strong>deve</strong> criar o arquivo config.php antes de prosseguir para a próxima etapa.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'Você se lembrou de criar o arquivo config.php?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Aviso: não foi possível editar o arquivo config.php. Verifique se ele existe.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Não é possível editar',
	'ERR_PERFORM_HTACCESS_2'			=> 'o arquivo.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Se você pretende impedir que o seu arquivo de log seja acessível pelo navegador, crie um arquivo .htaccess no seu diretório de log com a linha:',
	'ERR_PERFORM_NO_TCPIP'				=> '<b>Não foi detectada conexão à Internet.</b>Quando houver uma conexão, acesse <a href="http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register">http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a> para registar com o SugarCRM. Informe-nos um pouco sobre como a sua empresa pretende utilizar o SugarCRM, poderemos assegurar um fornecimento contínuo do aplicativo certo para as suas necessidades de negócio.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'O diretório de sessão fornecido não é um diretório válido.',
	'ERR_SESSION_DIRECTORY'				=> 'O diretório de sessão fornecido não é um diretório editável.',
	'ERR_SESSION_PATH'					=> 'O caminho da sessão é obrigatório se você pretende especificar o seu próprio.',
	'ERR_SI_NO_CONFIG'					=> 'Você não incluiu o config_si.php na raiz do documento ou não definiu $sugar_config_si em config.php',
	'ERR_SITE_GUID'						=> 'ID da aplicação é obrigatório se pretende especificar a sua própria.',
    'ERROR_SPRITE_SUPPORT'              => "Não foi possível localizar a biblioteca GD, por isso, não será possível usar a funcionalidade CCS Sprite.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Aviso: a sua configuração PHP deve ser alterada para permitir o carregamento de arquivos com pelo menos 6 MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Tamanho do arquivo de carregamento',
	'ERR_URL_BLANK'						=> 'Informe a URL base para a instância do Sugar.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'Não foi possível localizar registro de instalação de',
    'ERROR_FLAVOR_INCOMPATIBLE'         => 'O arquivo carregado não é compatível com esta versão (edição Professional, Enterprise ou Ultimate) do Sugar: ',
	'ERROR_LICENSE_EXPIRED'				=> "Erro: a sua licença expirou",
	'ERROR_LICENSE_EXPIRED2'			=> " dia(s) atrás. Acesse <a href='index.php?action=LicenseSettings&module=Administration'>'\"Administração de licença\"</a> na tela de Administração para inserir a sua nova chave de licença. Se você não inserir uma nova chave de licença nos 30 dias seguintes ao vencimento da chave, não poderá mais acessar este aplicativo.",
	'ERROR_MANIFEST_TYPE'				=> 'Arquivo manifesto deve especificar o tipo de pacote.',
	'ERROR_PACKAGE_TYPE'				=> 'O arquivo de manifesto especifica um tipo de pacote não reconhecido',
	'ERROR_VALIDATION_EXPIRED'			=> "Erro: a sua chave de validação expirou",
	'ERROR_VALIDATION_EXPIRED2'			=> " dia(s) atrás. Acesse <a href='index.php?action=LicenseSettings&module=Administration'>'\"Administração de licença\"</a> na tela de Administração para inserir a sua nova chave de licença. Se você não inserir uma nova chave de validação nos 30 dias seguintes ao vencimento da chave, não poderá mais acessar este aplicativo.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'O arquivo carregado não é compatível com esta versão do Sugar:',

	'LBL_BACK'							=> 'Voltar',
    'LBL_CANCEL'                        => 'Cancelar',
    'LBL_ACCEPT'                        => 'Eu aceito',
	'LBL_CHECKSYS_1'					=> 'Para que a instalação do SugarCRM funcione corretamente, verifique se todos os itens de verificação do sistema abaixo listados estão em verde. Se algum deles estiver vermelho, tome as medidas necessárias para corrigir.<BR><BR> Para obter mais ajuda sobre essas verificações de sistema, acesse a <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.',
	'LBL_CHECKSYS_CACHE'				=> 'Subdiretórios cache editáveis',
    'LBL_DROP_DB_CONFIRM'               => 'O nome de usuário do banco de dados fornecido já existe. <br>Você pode<br>1. Clicar no botão Cancelar e escolher um novo nome ou <br>2. Clicar no botão Aceitar e continuar. Todas as tabelas existentes no banco de dados serão descartadas.<strong>Isso significa que as suas tabelas e dados serão destruídos.</strong>',
	'LBL_CHECKSYS_CALL_TIME'			=> 'Permissão de passagem por referência do tempo de chamada PHP desligada',
    'LBL_CHECKSYS_COMPONENT'			=> 'Componente',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Componentes opcionais',
	'LBL_CHECKSYS_CONFIG'				=> 'Arquivo de configuração gravável do SugarCRM (config.php)',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'Arquivo de configuração gravável do SugarCRM (config_override.php)',
	'LBL_CHECKSYS_CURL'					=> 'Módulo de cURL',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Definição do caminho de gravação da sessão',
	'LBL_CHECKSYS_CUSTOM'				=> 'Diretório personalizado gravável',
	'LBL_CHECKSYS_DATA'					=> 'Subdiretórios de dados graváveis',
	'LBL_CHECKSYS_IMAP'					=> 'Módulo IMAP',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Quotes GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'Módulo MB Strings',
	'LBL_CHECKSYS_MEM_OK'				=> 'OK (sem limite)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'OK (ilimitado)',
	'LBL_CHECKSYS_MEM'					=> 'Limite de memória PHP',
	'LBL_CHECKSYS_MODULE'				=> 'Arquivos e subdiretórios de módulos graváveis',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'Versão MySQL',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'Não Disponível',
	'LBL_CHECKSYS_OK'					=> 'OK',
	'LBL_CHECKSYS_PHP_INI'				=> 'O seu arquivo de configuração php (php.ini) encontra-se em:',
	'LBL_CHECKSYS_PHP_OK'				=> 'OK (ver',
	'LBL_CHECKSYS_PHPVER'				=> 'Versão PHP',
    'LBL_CHECKSYS_IISVER'               => 'Versão IIS',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'Nova verificação',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'Modo de segurança PHP desligado',
	'LBL_CHECKSYS_SESSION'				=> 'Caminho de gravação da sessão editável (',
	'LBL_CHECKSYS_STATUS'				=> 'Status',
	'LBL_CHECKSYS_TITLE'				=> 'Aceitação da verificação do sistema',
	'LBL_CHECKSYS_VER'					=> 'Encontrado: (ver',
	'LBL_CHECKSYS_XML'					=> 'Análise sintática XML',
	'LBL_CHECKSYS_ZLIB'					=> 'Módulo de compressão ZLIB',
	'LBL_CHECKSYS_ZIP'					=> 'Módulo de manipulação ZIP',
    'LBL_CHECKSYS_BCMATH'				=> 'Módulo de precisão matemática arbitrária matemática',
    'LBL_CHECKSYS_HTACCESS'				=> 'Configuração de AllowOverride para .htaccess',
    'LBL_CHECKSYS_FIX_FILES'            => 'Corrija os seguintes arquivos ou diretórios antes de prosseguir:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Corrija os seguintes diretórios de módulo e os arquivos neles contidos antes de prosseguir:',
    'LBL_CHECKSYS_UPLOAD'               => 'Diretório gravável de carregamento',
    'LBL_CLOSE'							=> 'Fechar',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'ser criado',
	'LBL_CONFIRM_DB_TYPE'				=> 'Tipo de Banco de Dados',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Confirme as configurações abaixo. Se deseja alterar qualquer valor, clique em "Voltar" para editar. Caso contrário, clique em "Avançar" para iniciar a instalação.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Informação de licença',
	'LBL_CONFIRM_NOT'					=> 'não',
	'LBL_CONFIRM_TITLE'					=> 'Confirmar definições',
	'LBL_CONFIRM_WILL'					=> 'irá',
	'LBL_DBCONF_CREATE_DB'				=> 'Criar banco de dados',
	'LBL_DBCONF_CREATE_USER'			=> 'Criar usuário',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Atenção: todos os dados do Sugar serão apagados<br>se esta caixa estiver marcada.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Remover e recriar as tabelas Sugar existentes?',
    'LBL_DBCONF_DB_DROP'                => 'Remover tabelas',
    'LBL_DBCONF_DB_NAME'				=> 'Nome do banco de dados',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Senha do usuário do banco de dados Sugar',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Reinserir senha do usuário do banco de dados Sugar',
	'LBL_DBCONF_DB_USER'				=> 'Nome de usuário do banco de dados Sugar',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Nome de usuário do banco de dados Sugar',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Nome de usuário do administrador do banco de dados',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Senha do administrador do banco de dados',
	'LBL_DBCONF_DEMO_DATA'				=> 'Preencher o banco de dados com dados de demonstração?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Escolher dados de demonstração',
	'LBL_DBCONF_HOST_NAME'				=> 'Nome do host',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'Instância do host',
	'LBL_DBCONF_HOST_PORT'				=> 'Porta',
    'LBL_DBCONF_SSL_ENABLED'            => 'Permitir conexão SSL',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Insira as suas informações de configuração do banco de dados abaixo. Se não tiver certeza de como preencher, sugerimos que utilize os valores padrão.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Utilizar texto multibyte nos dados de demonstração?',
    'LBL_DBCONFIG_MSG2'                 => 'Nome do servidor web ou máquina (host) no qual se encontra o banco de dados (por exemplo, www.mydomain.com):',
    'LBL_DBCONFIG_MSG3'                 => 'Nome do banco de dados que conterá os dados para a instância do Sugar que você está prestes a instalar:',
    'LBL_DBCONFIG_B_MSG1'               => 'É necessário o nome de usuário e a senha de um administrador de banco de dados que possa criar usuários e tabelas de banco de dados e editar o banco de dados para configurar o banco de dados Sugar.',
    'LBL_DBCONFIG_SECURITY'             => 'Por razões de segurança, você pode especificar um usuário exclusivo do banco de dados para se conectar ao banco de dados Sugar. Esse usuário deve ser capaz de editar, atualizar e recuperar dados no banco de dados Sugar que será criado para esta instância. Este usuário pode ser o administrador do banco de dados acima especificado, ou você pode fornecer informação nova ou existente sobre o usuário do banco de dados.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Faça por mim',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Fornecer usuário existente',
    'LBL_DBCONFIG_CREATE_DD'            => 'Definir usuário para criar',
    'LBL_DBCONFIG_SAME_DD'              => 'Igual ao usuário Administrador',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'Pesquisa de texto completo',
    'LBL_FTS_INSTALLED'                 => 'Instalado',
    'LBL_FTS_INSTALLED_ERR1'            => 'Recurso de pesquisa de texto completo não instalado.',
    'LBL_FTS_INSTALLED_ERR2'            => 'Você ainda pode instalar, mas não poderá usar o recurso de pesquisa de texto completo. Consulte o guia de instalação do banco de dados sobre como fazer isso ou entre em contato com seu administrador.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Senha de usuário privilegiado do banco de dados',
	'LBL_DBCONF_PRIV_USER_2'			=> 'A conta de banco de dados acima é de um usuário privilegiado?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Esse usuário privilegiado do banco de dados deve ter as permissões adequadas para criar um banco de dados, remover/criar tabelas e criar um usuário. Esse usuário privilegiado só será utilizado para executar essas tarefas conforme necessário durante o processo de instalação. Você também poderá usar esse mesmo usuário se ele tiver privilégios suficientes.',
	'LBL_DBCONF_PRIV_USER'				=> 'Nome de usuário privilegiado do banco de dados',
	'LBL_DBCONF_TITLE'					=> 'Configuração do banco de dados',
    'LBL_DBCONF_TITLE_NAME'             => 'Fornecer nome de usuário do banco de dados',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Fornecer Informação de usuário do banco de dados',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'Após esta alteração ter sido feita, você pode clicar no botão abaixo "Iniciar" para começar a sua instalação.<i>Depois que a instalação estiver concluída, você deve alterar o valor de "installer_locked" para "verdadeiro".</i>',
	'LBL_DISABLED_DESCRIPTION'			=> 'O instalador já foi executado uma vez. Como medida de segurança, foi desativada uma segunda execução. Se tem a certeza absoluta de que deseja executá-lo novamente, vá até seu arquivo config.php e localize (ou adicione) uma variável chamada "installer_locked" e defina-a como "falso". A linha deve ficar assim:',
	'LBL_DISABLED_HELP_1'				=> 'Para ajuda na instalação, acesse SugarCRM',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'fóruns de suporte',
	'LBL_DISABLED_TITLE_2'				=> 'A instalação do SugarCRM foi desativada',
	'LBL_DISABLED_TITLE'				=> 'Instalação do SugarCRM desativada',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Conjunto de caracteres mais utilizado no seu local',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Definições de E-mail de Saída',
    'LBL_EMAIL_CHARSET_CONF'            => 'Conjunto de caracteres para e-mail de saída',
	'LBL_HELP'							=> 'Ajuda',
    'LBL_INSTALL'                       => 'Instalar',
    'LBL_INSTALL_TYPE_TITLE'            => 'Opções de instalação',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Escolher tipo de instalação',
    'LBL_INSTALL_TYPE_TYPICAL'          => '<b>Instalação típica</b>',
    'LBL_INSTALL_TYPE_CUSTOM'           => ' <b>Instalação personalizada</b>',
    'LBL_INSTALL_TYPE_MSG1'             => 'A chave é necessária para a funcionalidade geral do aplicativo, mas não é necessária para a instalação. Não é necessário inserir a chave neste momento, mas você terá de fornecer a chave depois de ter instalado o aplicativo.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Requer o mínimo de informação para a instalação. Recomendado para novos usuários.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Fornece opções adicionais para definir durante a instalação. A maioria dessas opções também está disponível após a instalação nas telas de administração. Recomendado para usuários avançados.',
	'LBL_LANG_1'						=> 'Para utilizar um idioma no Sugar diferente do idioma padrão (Inglês-EUA), carregue e instale o pacote de idioma agora. Será também possível carregar e instalar pacotes de idiomas dentro do aplicativo Sugar. Se quiser ignorar este passo, clique em Avançar.',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Instalar',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Remover',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Desinstalar',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Carregar',
	'LBL_LANG_NO_PACKS'					=> 'nenhum',
	'LBL_LANG_PACK_INSTALLED'			=> 'Foram instalados os seguintes pacotes de idioma:',
	'LBL_LANG_PACK_READY'				=> 'Estão prontos para instalação os seguintes pacotes de idioma:',
	'LBL_LANG_SUCCESS'					=> 'O pacote de idioma foi carregado com sucesso.',
	'LBL_LANG_TITLE'			   		=> 'Pacote de Idioma',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'Instalando o Sugar agora. Isso poderá demorar alguns minutos.',
	'LBL_LANG_UPLOAD'					=> 'Carregar um pacote de idioma',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Aceitação da licença',
    'LBL_LICENSE_CHECKING'              => 'Verificando a compatibilidade do sistema.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Verificando o ambiente',
    'LBL_LICENSE_CHKDB_HEADER'          => 'Verificando as credenciais DB e FTS.',
    'LBL_LICENSE_CHECK_PASSED'          => 'O sistema passou na verificação de compatibilidade.',
    'LBL_LICENSE_REDIRECT'              => 'Você será redirecionado em',
	'LBL_LICENSE_DIRECTIONS'			=> 'Se você possui a informação de licença, insira-a nos campos abaixo.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Inserir chave de download',
	'LBL_LICENSE_EXPIRY'				=> 'Data de vencimento',
	'LBL_LICENSE_I_ACCEPT'				=> 'Eu aceito',
	'LBL_LICENSE_NUM_USERS'				=> 'Número de usuários',
	'LBL_LICENSE_PRINTABLE'				=> 'Versão para impressão',
    'LBL_PRINT_SUMM'                    => 'Imprimir resumo',
	'LBL_LICENSE_TITLE_2'				=> 'Licença SugarCRM',
	'LBL_LICENSE_TITLE'					=> 'Informação de licença',
	'LBL_LICENSE_USERS'					=> 'Usuários licenciados',

	'LBL_LOCALE_CURRENCY'				=> 'Definições de moeda',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Moeda padrão',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Símbolo da moeda',
	'LBL_LOCALE_CURR_ISO'				=> 'Código de moeda (ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> 'Separador 1000s',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Separador decimal',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Exemplo',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Dígitos importantes',
	'LBL_LOCALE_DATEF'					=> 'Formato de data padrão',
	'LBL_LOCALE_DESC'					=> 'As definições locais especificadas serão refletidas globalmente dentro da instância do Sugar.',
	'LBL_LOCALE_EXPORT'					=> 'Conjunto de caracteres para Importar/exportar<br> <i>(Email, .csv, vCard, PDF, importação de dados)</i>',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Delimitador de exportação (.csv)',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Definições de importação/exportação',
	'LBL_LOCALE_LANG'					=> 'Idioma padrão',
	'LBL_LOCALE_NAMEF'					=> 'Formato de nome padrão',
	'LBL_LOCALE_NAMEF_DESC'				=> 's = saudação<br />f = nome<br />l = sobrenome',
	'LBL_LOCALE_NAME_FIRST'				=> 'David',
	'LBL_LOCALE_NAME_LAST'				=> 'Livingstone',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Dr.',
	'LBL_LOCALE_TIMEF'					=> 'Formato de horário padrão',
	'LBL_LOCALE_TITLE'					=> 'Definições Locais',
    'LBL_CUSTOMIZE_LOCALE'              => 'Personalizar definições locais',
	'LBL_LOCALE_UI'						=> 'Interface do usuário',

	'LBL_ML_ACTION'						=> 'Ação',
	'LBL_ML_DESCRIPTION'				=> 'Descrição',
	'LBL_ML_INSTALLED'					=> 'Data de Instalação',
	'LBL_ML_NAME'						=> 'Nome',
	'LBL_ML_PUBLISHED'					=> 'Data de Publicação',
	'LBL_ML_TYPE'						=> 'Tipo',
	'LBL_ML_UNINSTALLABLE'				=> 'Não-instalável',
	'LBL_ML_VERSION'					=> 'Versão',
	'LBL_MSSQL'							=> 'SQL Server',
	'LBL_MSSQL_SQLSRV'				    => 'SQL Server (Driver do Microsoft SQL Server para PHP)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (extensão mysqli)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'Próximo',
	'LBL_NO'							=> 'Não',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Definir senha do administrador do site',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'tabela de auditoria /',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Criando arquivo de configuração do Sugar',
	'LBL_PERFORM_CREATE_DB_1'			=> '<b>Criando o banco de dados</b>',
	'LBL_PERFORM_CREATE_DB_2'			=> '<b>em</b>',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Criando o nome de usuário e a senha do banco de dados...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Criando dados padrão do Sugar',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Criando o nome de usuário e a senha do banco de dados para o servidor local...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Criando tabelas de relacionamento do Sugar',
	'LBL_PERFORM_CREATING'				=> 'criando /',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Criando relatórios padrão',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Criando tarefas do agendador padrão',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Inserindo definições padrão',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Criando usuários padrão',
	'LBL_PERFORM_DEMO_DATA'				=> 'Preenchendo as tabelas do banco de dados com dados de demonstração (isso pode demorar um pouco)',
	'LBL_PERFORM_DONE'					=> 'concluído<br>',
	'LBL_PERFORM_DROPPING'				=> 'removendo /',
	'LBL_PERFORM_FINISH'				=> 'Concluir',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Atualizando informação de licença',
	'LBL_PERFORM_OUTRO_1'				=> 'A configuração do Sugar',
	'LBL_PERFORM_OUTRO_2'				=> 'está agora completa!',
	'LBL_PERFORM_OUTRO_3'				=> 'Tempo total:',
	'LBL_PERFORM_OUTRO_4'				=> 'segundos.',
	'LBL_PERFORM_OUTRO_5'				=> 'Memória utilizada aproximada:',
	'LBL_PERFORM_OUTRO_6'				=> 'bytes.',
	'LBL_PERFORM_OUTRO_7'				=> 'O seu sistema está instalado e configurado para uso.',
	'LBL_PERFORM_REL_META'				=> 'meta de relacionamento ...',
	'LBL_PERFORM_SUCCESS'				=> 'Sucesso!',
	'LBL_PERFORM_TABLES'				=> 'Criando tabelas do aplicativo, tabelas de auditoria e metadata de relacionamento Sugar',
	'LBL_PERFORM_TITLE'					=> 'Executar configuração',
	'LBL_PRINT'							=> 'Imprimir',
	'LBL_REG_CONF_1'					=> 'Preencha o formulário abaixo para receber lançamentos de produtos, novidades de treinamento, ofertas especiais e convites para eventos especiais da SugarCRM. Nós não vendemos, alugamos, partilhamos ou distribuímos as informações aqui recolhidas a terceiros.',
	'LBL_REG_CONF_2'					=> 'O seu nome e endereço de e-mail são os únicos campos exigidos para o registro. Todos os outros campos são opcionais, mas muito úteis. Nós não vendemos, alugamos, partilhamos ou distribuímos as informações aqui recolhidas a terceiros.',
	'LBL_REG_CONF_3'					=> 'Obrigado por se registrar. Clique no botão Concluir para acessar o SugarCRM. É necessário fazer o logon pela primeira vez utilizando o nome "admin" e a senha que inseriu no passo 2.',
	'LBL_REG_TITLE'						=> 'Registro',
    'LBL_REG_NO_THANKS'                 => 'Não, obrigado',
    'LBL_REG_SKIP_THIS_STEP'            => 'Ignorar este passo',
	'LBL_REQUIRED'						=> '* Campo obrigatório',

    'LBL_SITECFG_ADMIN_Name'            => 'Nome do administrador do aplicativo Sugar',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Reinserir senha do administrador do Sugar',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Atenção: isso substituirá a senha do administrador de qualquer instalação anterior.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Senha de administrador do Sugar',
	'LBL_SITECFG_APP_ID'				=> 'ID do aplicativo',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Se selecionado, você deve fornecer um ID de aplicativo para substituir o ID gerado automaticamente. O ID garante que as sessões de uma instância do Sugar não serão utilizadas por outras instâncias. Se você tem um cluster de instalações do Sugar, todas elas devem partilhar o mesmo ID de aplicativo.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Forneça seu próprio ID de aplicativo',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Se selecionado, você deve especificar uma diretório de log para substituir o diretório padrão de log do Sugar. Independentemente do local do arquivo, o seu acesso por navegador web será restrito por um redirecionamento .htaccess.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Utilizar um diretório de log personalizado',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Se selecionado, você deve fornecer uma pasta segura para armazenar informação de sessão do Sugar. Isso pode ser feito para evitar a vulnerabilidade dos dados da sessão do Sugar em servidores partilhados.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Utilizar um diretório de sessão personalizado para o Sugar',
	'LBL_SITECFG_DIRECTIONS'			=> 'Insira a sua informação de configuração local abaixo. Se não tem certeza dos campos, sugerimos que você use os valores padrão.',
	'LBL_SITECFG_FIX_ERRORS'			=> '<b>Corrija os seguintes erros antes de continuar:</b>',
	'LBL_SITECFG_LOG_DIR'				=> 'Diretório de log',
	'LBL_SITECFG_SESSION_PATH'			=> 'Caminho para o diretório de sessão<br>(deve ser editável)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Selecionar opções de segurança',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Se selecionado, o sistema verificará periodicamente versões atualizadas do aplicativo.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Verificar atualizações automaticamente?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Configuração de atualizações do Sugar',
	'LBL_SITECFG_TITLE'					=> 'Configuração do site',
    'LBL_SITECFG_TITLE2'                => 'Identificar usuário administrador',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Segurança do site',
	'LBL_SITECFG_URL'					=> 'URL da instância do Sugar',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Utilizar padrões?',
	'LBL_SITECFG_ANONSTATS'             => 'Enviar estatísticas de utilização anônimas?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'Se selecionado, o Sugar enviará estatísticas <b>anônimas</b> sobre a sua instalação para a SugarCRM Inc. cada vez que o seu sistema procurar novas versões. Essa informação nos ajudará a entender melhor como o aplicativo é utilizado e guiará melhorias do produto.',
    'LBL_SITECFG_URL_MSG'               => 'Insira a URL que será usada para acessar a instância do Sugar após a instalação. A URL também será utilizada como base para as URLs nas páginas do aplicativo Sugar. A URL deve incluir o servidor web, o nome da máquina ou o endereço IP.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Insira um nome para o seu sistema. Esse nome será exibido na barra de título do browser quando os usuários visitarem o aplicativo Sugar.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'Após a instalação, você precisará utilizar o administrador Sugar (nome do usuário = admin) para acessar a instância do Sugar. Insira uma senha para esse usuário administrador. Essa senha pode ser alterada após o logon inicial.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Selecionar configurações de ordenação. Estas configurações criarão as versões com seu idioma. No caso de seu idioma não precisar de configurações especiais use o padrão.',
    'LBL_SPRITE_SUPPORT'                => 'Suporte a Sprite',
	'LBL_SYSTEM_CREDS'                  => 'Credenciais do Sistema',
    'LBL_SYSTEM_ENV'                    => 'Ambiente do Sistema',
	'LBL_START'							=> 'Iniciar',
    'LBL_SHOW_PASS'                     => 'Mostrar senhas',
    'LBL_HIDE_PASS'                     => 'Ocultar senhas',
    'LBL_HIDDEN'                        => '<i>(ocultas)</i>',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> '<b>Escolha o seu idioma</b>',
	'LBL_STEP'							=> 'Passo',
	'LBL_TITLE_WELCOME'					=> 'Bem-vindo ao SugarCRM',
	'LBL_WELCOME_1'						=> 'Este instalador cria as tabelas da base de dados do SugarCRM e define as variáveis de configuração que necessita para iniciar. O processo completo deve levar cerca de dez minutos.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'Está pronto a instalar?',
    'REQUIRED_SYS_COMP' => 'Componentes de Sistema Necessários',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Antes de começar, certifique-se que possui as versões compatíveis dos seguintes componentes do sistema: <br> <ul> <li> Base de Dados/Sistema de Gestão de Base de Dados (Exemplos: MySQL, SQL Server, Oracle, DB2)</li> <li> Web Server (Apache, IIS)</li> <li>Elasticsearch</li> </ul>Consulte a Matriz de Compatibilidade nas Notas de Lançamento para componentes do sistema compatíveis com a versão do Sugar que está a instalar.<br>',
    'REQUIRED_SYS_CHK' => 'Verificação Inicial do Sistema',
    'REQUIRED_SYS_CHK_MSG' =>
                    'Quando iniciar o processo de instalação, uma verificação do sistema será executada no servidor web no qual os arquivos Sugar estão localizados, a fim de garantir que o sistema está configurado corretamente e tem todos os componentes necessários para concluir com êxito a instalação. <br><br> O sistema verifica todas as seguintes características: <br> <ul> <li><b>versão do PHP</b> &#8211; – deve ser compatível com a aplicação</li> <li><b> Variáveis da Sessão</b> &#8211; – deve estar a funcionar corretamente</li> <li> <b>MB Strings</b> &#8211; – deve ser instalado e ativado no php.ini</li> <li><b>Suporte à Base de Dados</b> &#8211; – deve existir para MySQL, SQL Server ou Oracle</li> <li><b>Config.php</b> &#8211; – deve existir e ter as permissões adequadas para ser editável</li> <li>Os seguintes arquivos Sugar devem ser editáveis: <ul><li><b>/custom</li> <li>/cache</li> <li>/modules</li><li>/upload</b></li></ul></li></ul> Se a verificação falhar, não poderá prosseguir com a instalação. Uma mensagem de erro será exibida, explicando porque o sistema não passou a verificação. Após fazer as alterações necessárias, pode executar novamente a verificação do sistema para continuar a instalação.<br>',
    'REQUIRED_INSTALLTYPE' => 'Instalação Típica ou Personalizada',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "Após a execução da verificação do sistema,pode escolher entre a instalação Típica ou Personalizada.<br><br> Para ambas as instalações <b>Típica</b> e <b>Personalizada</b>, necessitará de saber o seguinte:<br> <ul> <li> <b>Tipo de base de dados</b> que irá alojar os dados do Sugar <ul><li>Tipos de base de dados compatíveis: MySQL, MS SQL Server, Oracle.<br><br></li></ul></li> <li> <b>Nome do servidor web</b> ou máquina na qual se encontra a base de dados <ul><li>Pode ser <i>servidor</i> se a base de dados está no seu computador local ou está no mesmo servidor web ou máquina que os seus arquivos Sugar.<br><br></li></ul></li> <li><b>Nome da base de dados</b>onde pretende alojar os dados do Sugar</li> <ul> <li> Talvez já tenha uma base de dados existente que pretenda usar. Se fornecer o nome de uma base de dados existente, as tabelas na base de dados serão descartadas durante a instalação quando o esquema para a base de dados do Sugar for definido.</li> <li> Se ainda não tiver uma base de dados, o nome que fornecer será usado para a nova base de dados que é criada para a instância durante a instalação.<br><br></li> </ul><li><b>Nome do usuário e senha do administrador da base de dados</b> <ul><li>O administrador da base de dados deverá ser capaz de criar tabelas e usuários e editar a base de dados.</li><li>Talvez seja necessário entrar em contacto com o administrador da base de dados se esta não estiver localizada no seu computador local e/ou se você não for o administrador da base de dados.<br><br></ul></li></li><li> <b>Nome e senha do usuário da base de dados Sugar</b> </li> <ul> <li> O usuário pode ser o administrador da base de dados, ou pode fornecer o nome de outro usuário da base de dados. </li> <li> Se pretender criar um novo usuário da base de dados para este fim, será capaz de fornecer um novo nome do usuário e senha durante o processo de instalação, e o usuário será criado durante a instalação. </li> </ul></ul><p> Para a configuração <b>Personalizada</b>, também precisa de saber o seguinte: <br> <ul> <li> <b>URL que será utilizado para acessar à instância Sugar</b> depois de instalado. Esse URL deve incluir o servidor web ou o nome da máquina ou o endereço IP.<br><br></li> <li> [Opcional] <b> Path para a Diretório de sessão</b> se deseja usar uma Diretório de sessão personalizada para informação Sugar de modo a prevenir a vulnerabilidade dos dados de sessão em servidores partilhados.<br><br></li> <li> [Opcional] <b>Path para uma Diretório log personalizada</b> se pretende substituir a Diretório log padrão do Sugar.<br><br></li> <li> [Opcional] <b>ID da Aplicação</b> se pretende substituir o ID auto-gerado que garante que a sessões de uma instância Sugar não são usadas por outras instâncias.<br><br></li> <li><b>Definição de Caracteres</b> mais utilizados na sua zona.<br><br></li></ul> Para informações mais detalhadas, por favor consulte o Manual de Instalação.",
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Leia as seguintes informações importantes antes de prosseguir com a instalação. As informações ajudarão a determinar se está ou não pronto para instalar a aplicação neste momento.',


	'LBL_WELCOME_2'						=> 'Para ver a documentação de instalação, visite a <a href="http://www.sugarcrm.com/crm/installation" target="_blank"> Wiki do Sugar</a>.  <BR><BR>Para entrar em contato com um engenheiro de suporte do SugarCRM para obter ajuda na instalação, faça login no <a target="_blank" href="http://support.sugarcrm.com"> Portal de suporte do SugarCRM</a> e abra uma ocorrência de suporte.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '<b>Escolha o seu idioma</b>',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Assistente de Configuração',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Bem-vindo ao SugarCRM',
	'LBL_WELCOME_TITLE'					=> 'Assistente de Configuração do SugarCRM',
	'LBL_WIZARD_TITLE'					=> 'Assistente de Configuração do Sugar:',
	'LBL_YES'							=> 'Sim',
    'LBL_YES_MULTI'                     => 'Sim - Multibyte',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Processar Tarefas de fluxo de trabalho',
	'LBL_OOTB_REPORTS'		=> 'Executar tarefas criadas de execução de relatórios',
	'LBL_OOTB_IE'			=> 'Verificar Caixa de entrada de e-mails',
	'LBL_OOTB_BOUNCE'		=> 'Executar e-mails de retorno de campanha de processo noturno',
    'LBL_OOTB_CAMPAIGN'		=> 'Executar envio noturno de campanhas de massa por e-mail',
	'LBL_OOTB_PRUNE'		=> 'Remover Apagados da Base de Dados no primeiro dia do Mês',
    'LBL_OOTB_TRACKER'		=> 'Remover tabelas rastreadas',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Executar as notificações de lembrete por e-mail',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Atualizar tabela tracker_sessions',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Limpar trabalhos na fila',


    'LBL_FTS_TABLE_TITLE'     => 'Fornecer Configurações de pesquisa de texto completo',
    'LBL_FTS_HOST'     => 'Host',
    'LBL_FTS_PORT'     => 'Porta',
    'LBL_FTS_TYPE'     => 'Tipo de Sistema de busca',
    'LBL_FTS_HELP'      => 'Para habilitar busca de texto completo, selecione o tipo de mecanismo de busca e entre Host e Porta onde o mecanismo está hospedado. Sugar inclui suporte embutido para o motor elasticsearch.',
    'LBL_FTS_REQUIRED'    => 'Elastic Search é requerido..',
    'LBL_FTS_CONN_ERROR'    => 'Não é possível se conectar com o servidor de pesquisa de texto completo, verifique as configurações.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => 'Não há nenhuma versão de servidor de pesquisa de texto completo disponível, verifique as configurações.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => 'Foi detectada uma versão não suportada da busca elástica. Use as versões: %s',

    'LBL_PATCHES_TITLE'     => 'Instalar Últimos Patches',
    'LBL_MODULE_TITLE'      => 'Instalar Pacotes de Idiomas',
    'LBL_PATCH_1'           => 'Se pretende ignorar este passo, clique em Próximo.',
    'LBL_PATCH_TITLE'       => 'Patch do Sistema',
    'LBL_PATCH_READY'       => 'Os patches seguintes estão prontos a ser instalados:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "O SugarCRM baseia-se em sessões PHP para armazenar informações importantes enquanto estiver conectado a este servidor web. A sua instalação PHP não tem as informações de sessão corretamente configuradas. <br><br>Um erro de configuração comum é o de que a diretiva <b>'session.save_path'</b> não está a apontar para um Diretório válido. <br> <br> Por favor corrija a sua <a target=_new href=\"http://us2.php.net/manual/en/ref.session.php\">configuração PHP</a> no arquivo php.ini localizado aqui em baixo.",
	'LBL_SESSION_ERR_TITLE'				=> 'Erro de Configuração das Sessões PHP',
	'LBL_SYSTEM_NAME'=>'Nome de Sistema',
    'LBL_COLLATION' => 'Configurações de agrupamento',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Forneça um Nome do Sistema para a instância Sugar.',
	'LBL_PATCH_UPLOAD' => 'Selecione um arquivo patch do seu computador local',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'Modo de Compatibilidade Retroativa do PHP está ligado. Defina zend.ze1_compatibility_mode como Desligado para prosseguir',

    'meeting_notification_email' => array(
        'name' => 'E-mails de notificações de reunião',
        'subject' => 'Reunião do SugarCRM - $event_name ',
        'description' => 'Este modelo é usado quando o sistema envia notificações de reunião a um usuário.',
        'body' => '<div>
	<p>Para: $assigned_user</p>

	<p>$assigned_by_user convidou você para uma reunião</p>

	<p>Assunto: $event_name<br/>
	Data de início: $start_date<br/>
	Data de término: $end_date</p>

	<p>Descrição: $description</p>

	<p>Aceitar esta reunião:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Aceitar provisoriamente esta reunião:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Rejeitar a reunião:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Para: $assigned_user

$assigned_by_user convidou você para uma reunião

Assunto: $event_name
Data de início: $start_date
Data de término: $end_date

Descrição: $description

Aceitar esta reunião:
<$accept_link>

Aceitar provisoriamente esta reunião
<$tentative_link>

Rejeitar esta reunião
<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => 'E-mails de notificações de chamada',
        'subject' => 'Chamada do SugarCRM - $event_name ',
        'description' => 'Este modelo é usado quando o sistema envia notificações de chamada a um usuário.',
        'body' => '<div>
	<p>Para: $assigned_user</p>

	<p>$assigned_by_user convidou você para uma chamada</p>

	<p>Assunto: $event_name<br/>
	Data de início: $start_date<br/>
	Duração: $hoursh, $minutesm</p>

	<p>Descrição: $description</p>

	<p>Aceitar esta chamada:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Aceitar provisoriamente esta chamada:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Rejeitar a chamada:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Para: $assigned_user

$assigned_by_user convidou você para uma chamada

Assunto: $event_name
Data de início: $start_date
Duração: $hoursh, $minutesm

Descrição: $description

Aceitar esta chamada:
<$accept_link>

Aceitar provisoriamente esta chamada
<$tentative_link>

Rejeitar esta chamada
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => 'E-mails de notificação de atribuição',
        'subject' => 'SugarCRM - $module_name atribuído ',
        'description' => 'Este modelo é usado quando o sistema envia uma atribuição de tarefa a um usuário.',
        'body' => '<div>
<p>$assigned_by_user atribuiu um&nbsp;$module_name a&nbsp;$assigned_user.</p>

<p>Revise este&nbsp;$module_name em:<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user atribuiu um $module_name a $assigned_user.

Revise este $module_name em:
<$module_link>',
    ),

    'scheduled_report_email' => array(
        'name' => 'E-mails de relatórios agendados',
        'subject' => 'Relatório agendado: $report_name de $report_time',
        'description' => 'Este modelo é usado quando o sistema envia um relatório agendado para um usuário.',
        'body' => '<div>
<p>Olá, $assigned_user</p>
<p>O arquivo anexo é um relatório gerado automaticamente agendado para você.</p>
<p>Nome do relatório: $report_name</p>
<p>Data e hora de geração do relatório: $report_time</p>
</div>',
        'txt_body' =>
            'Olá, $assigned_user

O arquivo anexo é um relatório gerado automaticamente agendado para você.

Nome do relatório: $report_name

Data e hora de geração do relatório: $report_time',
    ),

    'comment_log_mention_email' => [
        'name' => 'Notificação por email do registro de comentários do sistema',
        'subject' => 'SugarCRM - $initiator_full_name mencionou você em um $singular_module_name',
        'description' => 'Este modelo é usado para enviar uma notificação por e-mail a usuários que foram marcados na seção de registro de comentários.',
        'body' =>
            '<div>
                <p>Você foi mencionado no registro de comentários do registro a seguir:  <a href="$record_url">$record_name</a></p>
                <p>Faça login no Sugar para ver o comentário.</p>
            </div>',
        'txt_body' =>
'Você foi mencionado no registro de comentários do seguinte registro: $record_name
            Faça login no Sugar para ver o comentário.',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => 'Informação de Nova Conta',
        'description' => 'Este template é usado quando o Administrador de Sistema envia a nova senha para um usuário.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Aqui está o nome de usuário e senha temporária da sua conta:</p><p>Nome de usuário : $contact_user_user_name </p><p>senha: $contact_user_user_hash </p><br><p><a href="$config_site_url">$config_site_url</a></p><br><p>Depois de efectuar a autenticação com a senha indicada acima, poderá ser pedido para alterar a senha por uma à sua escolha.</p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
'Aqui está o nome de usuário senha da sua conta: Nome de usuário: $contact_user_user_name senha: $contact_user_user_hash $config_site_url. Depois de se autenticar com a senha indicada, poderá ser necessário indicar uma nova senha.',
        'name' => 'Email de senha gerada pelo sistema',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Indicar uma nova senha',
        'description' => "Este template é usado para enviar para o usuário um link para clicar e indicar uma nova senha da conta do usuário.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Recentemente pediu em $contact_user_pwd_last_changed a possibilidade de alterar a senha da sua conta. </p><p>Clicar no link abaixo para alterar a sua senha:</p><p> <a href="$contact_user_link_guid">$contact_user_link_guid </a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
'Recentemente pediu em $contact_user_pwd_last_changed que tenha a possibilidade de indicar uma nova senha da sua conta. Clicar no link abaixo para indicar uma nova senha: $contact_user_link_guid',
        'name' => 'E-mail de esquecimento da senha',
        ),

'portal_forgot_password_email_link' => [
    'name' => 'E-mail de esquecimento de senha do portal',
    'subject' => 'Redefinir a senha da sua conta',
    'description' => 'Este modelo é usado para enviar ao usuário um link para redefinir a senha da conta do usuário do portal.',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Você solicitou recentemente a redefinição da senha da sua conta. </p><p>Clique no link abaixo para redefinir sua senha:</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'
Você solicitou recentemente a redefinição da senha da sua conta.

   Clique no link abaixo para redefinir sua senha:

    $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => 'E-mail de confirmação de redefinição da senha do portal',
        'subject' => 'A senha da sua conta foi redefinida',
        'description' => 'Este modelo é utilizado para enviar a confirmação de redefinição de senha da conta a um usuário do portal.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Este e-mail confirma a redefinição da senha da sua conta do portal. </p><p>Use o link abaixo para fazer login no portal:</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
    Este e-mail confirma a redefinição da senha da sua conta do portal.

    Use o link abaixo para fazer login no portal:

    $portal_login_url',
    ],
);
