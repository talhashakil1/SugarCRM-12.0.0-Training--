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
	'LBL_BASIC_SEARCH'					=> 'Pesquisa Básica',
	'LBL_ADVANCED_SEARCH'				=> 'Pesquisa Avançada',
	'LBL_BASIC_TYPE'					=> 'Tipo Básico',
	'LBL_ADVANCED_TYPE'					=> 'Tipo Avançado',
	'LBL_SYSOPTS_1'						=> 'Selecione a partir das seguintes opções de configuração do sistema.',
    'LBL_SYSOPTS_2'                     => 'Que tipo de base de dados será utilizado para a instância Sugar que está prestes a instalar?',
	'LBL_SYSOPTS_CONFIG'				=> 'Configuração de Sistema',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Especificar Tipo de Base de Dados',
    'LBL_SYSOPTS_DB_TITLE'              => 'Tipo de Base de Dados',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Por favor corrija os seguintes erros antes de prosseguir:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'Por favor, atribua direitos de escrita a este diretório:',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> 'O host, nome do utilizador e/ou palavra-passe da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Por favor insira um host, nome do utilizador e palavra-passe válidos',
    'ERR_DB_IBM_DB2_CONNECT'			=> 'O host, nome do utilizador e/ou palavra-passe da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Por favor insira um host, nome do utilizador e palavra-passe válidos',
    'ERR_DB_IBM_DB2_VERSION'			=> 'A sua versão do DB2 (%s) não é suportada pelo Sugar. Precisa de instalar uma versão que seja compatível com a aplicação Sugar. Por favor consulte a Matriz de Compatibilidade nas Notas de Lançamento para ver as versões DB2 suportadas.',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Deverá ter um cliente Oracle instalado e configurado, se selecionar Oracle.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'O host, nome do utilizador e/ou palavra-passe da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Por favor insira um host, nome do utilizador e palavra-passe válidos',
	'ERR_DB_OCI8_CONNECT'				=> 'O host, nome do utilizador e/ou palavra-passe da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Por favor insira um host, nome do utilizador e palavra-passe válidos',
	'ERR_DB_OCI8_VERSION'				=> 'A sua versão de Oracle (%s) não é suportada pelo Sugar. Precisa de instalar uma versão que seja compatível com a aplicação Sugar. Por favor consulte a Matriz de Compatibilidade nas Notas de Lançamento para ver que versões de Oracle são suportadas.',
    'LBL_DBCONFIG_ORACLE'               => 'Por favor forneça o nome da sua base de dados. Este será o espaço de tabela por defeito que será atribuído ao seu utilizador ((SID from tnsnames.ora).',
	// seed Ent Reports
	'LBL_Q'								=> 'Query relativa a Oportunidades',
	'LBL_Q1_DESC'						=> 'Oportunidades por Tipo',
	'LBL_Q2_DESC'						=> 'Oportunidades por Conta',
	'LBL_R1'							=> 'Relatório de Pipeline de 6 meses de vendas',
	'LBL_R1_DESC'						=> 'Oportunidades para os próximos 6 meses, discriminado por mês e tipo',
	'LBL_OPP'							=> 'Conjunto de dados de Oportunidades',
	'LBL_OPP1_DESC'						=> 'Isto é onde poderá alterar o aspecto da query personalizada',
	'LBL_OPP2_DESC'						=> 'Esta query vai ser acumulada abaixo da primeira do relatório',
    'ERR_DB_VERSION_FAILURE'			=> 'Impossível de verificar a versão da base de dados.',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Forneça o nome do utilizador para o utilizador administrador do Sugar.',
	'ERR_ADMIN_PASS_BLANK'				=> 'Forneça a palavra-passe para o utilizador administrador do Sugar. ',

    'ERR_CHECKSYS'                      => 'Foram detectados erros durante a verificação de compatibilidade. Para que a sua instalação SugarCRM funcione corretamente, por favor tome as medidas adequadas para resolver os problemas listados abaixo e prima o botão para verificar novamente ou tente instalar de novo.',
    'ERR_CHECKSYS_CALL_TIME'            => 'Permissão de Passagem por Referência do Tempo de Chamada está Ligada (deverá ser definida para Desligada em php.ini)',

	'ERR_CHECKSYS_CURL'					=> 'Não encontrado: o Calendarizador Sugar será executado com funcionalidades limitadas. O serviço de Arquivo de E-mail não será executado.',
    'ERR_CHECKSYS_IMAP'					=> 'Não encontrado: InboundEmail e Campanhas (E-mail) requerem as bibliotecas IMAP. Nenhum deles será funcional.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'Magic Quotes GPC não pode ser ligado quando está a utilizar o MS SQL Server.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Aviso:',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> '(Defina como',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M ou maior no seu ficheiro php.ini)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Versão Mínima 4.1.2 - Encontrada:',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Falha ao ler e escrever variáveis da sessão. Não é possível prosseguir com a instalação.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'Não É Um Diretório Válido',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Aviso: Não Editável',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'A sua versão de PHP não é suportada pelo Sugar. Necessita de instalar uma versão que seja compatível com a aplicação Sugar. Por favor consulte a Matriz de Compatibilidade nas Notas de Lançamento para Versões de PHP suportadas. A sua versão é',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'A sua versão de IIS não é suportada pelo Sugar. É necessário instalar uma versão que seja compatível com a aplicação Sugar. Por favor consulte a Matriz de Compatibilidade nas Notas de Lançamento para obter as Versões IIS suportadas. A sua versão é ',
    'ERR_CHECKSYS_FASTCGI'              => 'Detectámos que não está a utilizar um mapeamento do processador FastCGI para o PHP. É necessário instalar/configurar uma versão que seja compatível com a aplicação Sugar. Por favor consulte a Matriz de Compatibilidade nas Notas de Lançamento para versões suportadas. Consulte<a href="http://www.iis.net/php/" target="_blank" rel="nofollow noopener noreferrer">http://www.iis.net/php/</a> para obter mais detalhes ',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'Para uma utilização optimizada do sapi IIS/FastCGI, defina fastcgi.logging como 0 no seu ficheiro php.ini.',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Versão de PHP Instalada Não Suportada: ( ver',
    'LBL_DB_UNAVAILABLE'                => 'Base de dados indisponível',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Não foi encontrado Suporte da Base de Dados. Certifique-se de que possui os controladores necessários para um dos seguintes Tipos de Base de Dados suportados: MySQL, MS SQLServer, Oracle ou DB2. Talvez seja necessário anular o comentário da extensão no ficheiro php.ini ou recompilar com o ficheiro binário correcto, dependendo da sua versão de PHP. Consulte o seu Manual do PHP para obter mais informações sobre como activar o Suporte da Base de Dados.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Funções associadas às XML Parser Libraries que são necessárias à aplicação Sugar não foram encontradas. Talvez seja necessário anular o comentário da extensão no ficheiro php.ini ou recompilar com ficheiro binário correto, dependendo da sua versão de PHP. Por favor consulte o Manual do PHP para mais informações.',
    'LBL_CHECKSYS_CSPRNG' => 'Gerador de números aleatórios',
    'ERR_CHECKSYS_MBSTRING'             => 'Funções associadas com a extensão Multibyte Strings PHP (mbstring) que são necessárias à aplicação Sugar não foram encontradas. <br/><br/>Geralmente, o módulo mbstring não está ativado por defeito no PHP e deve ser ativado com --enable-mbstring quando o binário PHP é construído. Por favor consulte o Manual do PHP para mais informações sobre como ativar o suporte mbstring.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'A definição session.save_path no seu ficheiro de configuração php (php.ini) não está definida ou está definida para uma pasta inexistente. Talvez seja necessário definir o save_path em php.ini ou verificar se a existe a definição save_path numa pasta.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'A definição session.save_path no seu ficheiro de configuração php (php.ini) está definida para uma pasta que não é editável. Por favor tome as medidas necessárias para tornar a pasta editável. <br>Dependendo do seu sistema operativo, pode ser necessário alterar as permissões executando o chmod 766 ou clicando com o botão direito no nome do ficheiro para aceder às propriedades e desmarcar a opção só de leitura.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'O ficheiro de configuração existe mas não é editável. Por favor tome as medidas necessárias para tornar o ficheiro editável. Dependendo do seu sistema operativo, pode ser necessário alterar as permissões executando o chmod 766 ou clicando com o botão direito no nome do ficheiro para aceder às propriedades e desmarcar a opção só de leitura.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'O ficheiro de sobreposição de configuração existe mas não é editável. Por favor tome os passos necessários para permitir que este ficheiro seja editável. Dependendo do seu Sistema Operativo, isto poderá requerer que mude as permissões executando o chmod 766 ou clicando com o botão direito do rato no nome do ficheiro para aceder às propriedades do mesmo e desmarcar a opção só de leitura.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'O Diretório Personalizado existe mas não é editável. Poderá ser necessário alterar as suas permissões (chmod 766) ou clicar no diretório com o botão direito do rato e desmarcar a opção só de leitura, dependendo do seu Sistema Operativo. Tome as medidas necessárias para tornar o ficheiro editável.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "Os ficheiros ou diretórios abaixo listados não são editáveis ou estão em falta e não podem ser criados. Dependendo do seu Sistema Operativo, a correção pode exigir que altere as permissões nos ficheiros ou no diretório principal (chmod 755), ou que clique com o botão direito do rato no diretório principal e desmarque a opção  'só de leitura' e aplique a todas as subpastas.",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Modo de Segurança Ativo (pode desativá-lo em php.ini)',
    'ERR_CHECKSYS_ZLIB'					=> 'Suporte ZLib não Encontrado: o SugarCRM colhe enormes benefícios no seu desempenho com a compressão zlib.',
    'ERR_CHECKSYS_ZIP'					=> 'Suporte ZIP não encontrado: o SugarCRM precisa de suporte ZIP para processar ficheiros comprimidos.',
    'ERR_CHECKSYS_BCMATH'				=> 'Suporte BCMATH não encontrado: o SugarCRM necessita de suporte BCMATH para precisão matemática arbitrária.',
    'ERR_CHECKSYS_HTACCESS'             => 'O teste para reedições de .htaccess falhou. Significa normalmente que não tem AllowOverride configurado para o diretório do Sugar.',
    'ERR_CHECKSYS_CSPRNG' => 'Exceção de CSPRNG',
	'ERR_DB_ADMIN'						=> 'O nome do utilizador e/ou palavra-passe do administrador da base de dados é inválido(a) e a conexão com a base de dados não pôde ser estabelecida. Por favor insira um nome do utilizador e palavra-passe válidos. (Erro: ',
    'ERR_DB_ADMIN_MSSQL'                => 'O nome do utilizador e/ou palavra-passe do administrador da base de dados é inválido(a) e a conexão com a base de dados não pôde ser estabelecida. Por favor insira um nome do utilizador e palavra-passe válidos.',
	'ERR_DB_EXISTS_NOT'					=> 'A base de dados especificada não existe.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'A base de dados já existe com os dados de configuração. Para executar uma instalação com a base de dados selecionada, por favor execute novamente a instalação e escolha: "Remover e recriar as tabelas SugarCRM existentes?" Para fazer a atualização, utilize o Assistente de Atualização na Consola de Administração. Por favor leia a documentação de atualização localizada <a href="http://www.sugarforge.org/content/downloads/" target="_new">aqui</a>.',
	'ERR_DB_EXISTS'						=> 'O Nome da Base de Dados fornecido já existe -- não é possível criar outro com o mesmo nome.',
    'ERR_DB_EXISTS_PROCEED'             => 'O Nome da Base de Dados fornecido já existe. Pode<br>1. carregar no botão para voltar atrás e escolher um novo nome <br>2. clique em seguinte e continue mas todas as tabelas existentes nesta base de dados serão removidas.<strong>Isto significa que as suas tabelas e dados serão destruídos.</strong>',
	'ERR_DB_HOSTNAME'					=> 'O nome do anfitrião não pode estar em branco.',
	'ERR_DB_INVALID'					=> 'Tipo de base de dados selecionado inválido.',
	'ERR_DB_LOGIN_FAILURE'				=> 'O host, nome do utilizador e/ou palavra-passe da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Por favor insira um host, nome do utilizador e palavra-passe válidos',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'O host, nome do utilizador e/ou palavra-passe da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Por favor insira um host, nome do utilizador e palavra-passe válidos',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'O host, nome do utilizador e/ou palavra-passe da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Por favor insira um host, nome do utilizador e palavra-passe válidos',
	'ERR_DB_MYSQL_VERSION'				=> 'A sua versão do MySQL (%s) não é suportada pelo Sugar. Precisa de instalar uma versão que seja compatível com a aplicação Sugar. Por favor consulte a Matriz de Compatibilidade nas Notas de Lançamento para ver as versões MySQL suportadas.',
	'ERR_DB_NAME'						=> 'O nome da base de dados não pode estar em branco.',
	'ERR_DB_NAME2'						=> "O nome da base de dados não pode conter '\\', '/' ou '.'",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "O nome da base de dados não pode conter '\\', '/' ou '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "O nome da base de dados não pode iniciar com um número r, '#' ou '@' e não pode conter um espaço, '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!' ou '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "O nome da base de dados apenas pode ter caracteres alfanuméricos e os símbolos '#', '_', '-', ':', '.', '/' or '$'",
	'ERR_DB_PASSWORD'					=> 'As palavras-passe fornecidas para o administrador da base de dados do Sugar não coincidem. Por favor reinsira as mesmas palavras-passe nos campos respetivos.',
	'ERR_DB_PRIV_USER'					=> 'Forneça um nome do utilizador do administrador da base de dados. O utilizador é necessário para a conexão inicial à base de dados.',
	'ERR_DB_USER_EXISTS'				=> 'O nome do utilizador da base de dados do Sugar já existe -- não é possível criar outro com o mesmo nome. Por favor insira um novo nome do utilizador.',
	'ERR_DB_USER'						=> 'Insira um nome do utilizador para o administrador da base de dados do Sugar.',
	'ERR_DBCONF_VALIDATION'				=> 'Por favor corrija os seguintes erros antes de prosseguir:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'As palavras-passe fornecidas para o utilizador da base de dados do Sugar não coincidem. Por favor reinsira as mesmas palavras-passe nos campos respetivos.',
	'ERR_ERROR_GENERAL'					=> 'Foram encontrados os seguintes erros:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Não é possível eliminar o ficheiro:',
	'ERR_LANG_MISSING_FILE'				=> 'Não é possível encontrar o ficheiro:',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'Não foi encontrado o ficheiro de pacote de idioma em incluir/idioma no interior: ',
	'ERR_LANG_UPLOAD_1'					=> 'Ocorreu um problema com o seu carregamento. Por favor tente de novo.',
	'ERR_LANG_UPLOAD_2'					=> 'Os Pacotes de Idiomas devem ser arquivos ZIP.',
	'ERR_LANG_UPLOAD_3'					=> 'O PHP não pôde mover o ficheiro temporário para o diretório de atualização.',
	'ERR_LICENSE_MISSING'				=> 'Campos Obrigatórios em Falta',
	'ERR_LICENSE_NOT_FOUND'				=> 'Ficheiro de Licença não encontrado!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'O diretório de registo fornecido não é válido.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'O diretório de registo fornecido não é editável.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'O diretório de registo é obrigatório se pretende especificar o seu próprio diretório.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'Incapaz de processar diretamente o script.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Não é possível utilizar as plicas para ',
	'ERR_PASSWORD_MISMATCH'				=> 'As palavras-passe fornecidas para o utilizador administrador do Sugar não coincidem. Por favor reinsira as mesmas palavras-passe nos campos respetivos.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'Não é possível editar o ficheiro <span class=stop>config.php</span>.',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Pode continuar esta instalação criando manualmente o ficheiro config.php e colando a informação de configuração abaixo no ficheiro config.php. No entanto, <strong>deve</strong> criar o ficheiro config.php antes de prosseguir para a próxima etapa.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'Lembrou-se de criar o ficheiro config.php?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Aviso: Não foi possível editar o ficheiro config.php. Por favor assegure-se que ele existe.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Não é possível editar',
	'ERR_PERFORM_HTACCESS_2'			=> 'o ficheiro.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Se pretende impedir que o seu ficheiro de registo esteja acessível via browser, crie um ficheiro .htaccess no seu diretório de registo com a linha:',
	'ERR_PERFORM_NO_TCPIP'				=> '<b>Não foi detectada qualquer ligação à Internet.</b>Quando tiver uma ligação, por favor visite <a href="http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register">http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a> para registar com o SugarCRM. Ao desvendar-nos um pouco sobre como a sua empresa pretende utilizar o SugarCRM, poderemos assegurar um fornecimento contínuo da aplicação certa para as suas necessidades de negócio.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'O diretório de sessão fornecido não é um diretório válido.',
	'ERR_SESSION_DIRECTORY'				=> 'O diretório de sessão fornecido não é um diretório editável.',
	'ERR_SESSION_PATH'					=> 'O caminho da sessão é obrigatório se pretende especificar o seu próprio caminho.',
	'ERR_SI_NO_CONFIG'					=> 'Não incluiu o config_si.php na raiz do documento ou não definiu $sugar_config_si em config.php',
	'ERR_SITE_GUID'						=> 'O ID da aplicação é obrigatório se pretende especificar o seu próprio ID.',
    'ERROR_SPRITE_SUPPORT'              => "Atualmente não é possível localizar a biblioteca GD. Como tal não é possível usar a funcionalidade de Sprites CSS.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Aviso: A sua configuração PHP deve ser alterada para permitir o carregamento de ficheiros com pelo menos 6MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Tamanho do Ficheiro de Carregamento',
	'ERR_URL_BLANK'						=> 'Forneça o URL base para a instância Sugar.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'Não foi possível localizar registo de instalação de',
    'ERROR_FLAVOR_INCOMPATIBLE'         => 'O ficheiro carregado não é compatível com esta versão (edição Professional, Enterprise ou Ultimate) do Sugar: ',
	'ERROR_LICENSE_EXPIRED'				=> "Erro: A sua licença expirou",
	'ERROR_LICENSE_EXPIRED2'			=> " dia(s) atrás. Por favor vá até <a href='index.php?action=LicenseSettings&module=Administration'>\"Gestão de Licenças\"</a> no ecrã Administração para inserir a sua nova chave de licença. Se não inserir uma nova chave de licença nos 30 dias seguintes à expiração da chave anterior, já não poderá aceder a esta aplicação.",
	'ERROR_MANIFEST_TYPE'				=> 'Ficheiro manifesto deve especificar o tipo de pacote.',
	'ERROR_PACKAGE_TYPE'				=> 'Ficheiro manifesto especifica um tipo de pacote não reconhecido',
	'ERROR_VALIDATION_EXPIRED'			=> "Erro: A sua chave de validação expirou",
	'ERROR_VALIDATION_EXPIRED2'			=> " dia(s) atrás. Por favor vá até <a href='index.php?action=LicenseSettings&module=Administration'>'\"Gestão de Licenças\"</a> no ecrã Administração para inserir a sua nova chave de validação. Se não inserir uma nova chave de validação nos 30 dias seguintes à expiração da chave anterior, já não poderá aceder a esta aplicação.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'O ficheiro carregado não é compatível com esta versão do Sugar:',

	'LBL_BACK'							=> 'Voltar',
    'LBL_CANCEL'                        => 'Cancelar',
    'LBL_ACCEPT'                        => 'Eu Aceito',
	'LBL_CHECKSYS_1'					=> 'Para que a sua instalação SugarCRM funcione corretamente, por favor assegure-se que todos os itens de verificação do sistema abaixo listados estão a verde. Se algum deles estiver a vermelho, por favor tome as medidas necessárias para o corrigir.<BR><BR> Para mais ajuda sobre estas verificações de sistema, por favor visite a <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.',
	'LBL_CHECKSYS_CACHE'				=> 'Subdiretórios Cache Editáveis',
    'LBL_DROP_DB_CONFIRM'               => 'O Nome da Base de Dados fornecido já existe. <br>Pode:<br>1. Clicar no botão Cancelar e escolher um novo nome ou <br>2. Clicar no botão Aceitar e continuar. Todas as tabelas existentes na base de dados serão removidas.<strong>Isto significa que as suas tabelas e dados serão destruídos.</strong>',
	'LBL_CHECKSYS_CALL_TIME'			=> 'Permissão de Passagem por Referência do Tempo de Chamada PHP Desligada',
    'LBL_CHECKSYS_COMPONENT'			=> 'Componente',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Componentes Opcionais',
	'LBL_CHECKSYS_CONFIG'				=> 'Ficheiro de Configuração do SugarCRM (config.php) Editável',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'Ficheiro de Configuração do SugarCRM Editável (config_override.php)',
	'LBL_CHECKSYS_CURL'					=> 'Módulo de cURL',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Definição do Caminho de Gravação da Sessão',
	'LBL_CHECKSYS_CUSTOM'				=> 'Diretório Personalizado Editável',
	'LBL_CHECKSYS_DATA'					=> 'Subdiretórios de Dados Editáveis',
	'LBL_CHECKSYS_IMAP'					=> 'Módulo IMAP',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Quotes GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'Módulo MB Strings',
	'LBL_CHECKSYS_MEM_OK'				=> 'OK (Sem Limite)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'OK (Ilimitado)',
	'LBL_CHECKSYS_MEM'					=> 'Limite de Memória PHP',
	'LBL_CHECKSYS_MODULE'				=> 'Ficheiros e Subdiretórios de Módulos Editáveis',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'Versão MySQL',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'Não Disponível',
	'LBL_CHECKSYS_OK'					=> 'OK',
	'LBL_CHECKSYS_PHP_INI'				=> 'O seu ficheiro de configuração PHP (php.ini) encontra-se em:',
	'LBL_CHECKSYS_PHP_OK'				=> 'OK (ver',
	'LBL_CHECKSYS_PHPVER'				=> 'Versão PHP',
    'LBL_CHECKSYS_IISVER'               => 'Versão IIS',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'Reverificação',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'Modo de Segurança PHP Desligado',
	'LBL_CHECKSYS_SESSION'				=> 'Path de Gravação da Sessão Editável (',
	'LBL_CHECKSYS_STATUS'				=> 'Estado',
	'LBL_CHECKSYS_TITLE'				=> 'Aceitação da Verificação do Sistema',
	'LBL_CHECKSYS_VER'					=> 'Encontrado: ( ver',
	'LBL_CHECKSYS_XML'					=> 'Análise XML',
	'LBL_CHECKSYS_ZLIB'					=> 'Módulo de Compressão ZLIB',
	'LBL_CHECKSYS_ZIP'					=> 'Módulo de Manipulação ZIP',
    'LBL_CHECKSYS_BCMATH'				=> 'Módulo de Precisão Matemática Arbitrária',
    'LBL_CHECKSYS_HTACCESS'				=> 'Configuração de AllowOverride para .htaccess',
    'LBL_CHECKSYS_FIX_FILES'            => 'Por favor corrija os seguintes ficheiros ou diretórios antes de prosseguir:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Por favor corrija os seguintes diretórios de módulos e os ficheiros contidos nos mesmos antes de prosseguir:',
    'LBL_CHECKSYS_UPLOAD'               => 'Diretório de Carregamento Editável',
    'LBL_CLOSE'							=> 'Fechar',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'ser criado',
	'LBL_CONFIRM_DB_TYPE'				=> 'Tipo de Base de Dados',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Por favor confirme as definições abaixo. Se pretender alterar qualquer valor, clique em "Voltar" para editar. Caso contrário, clique em "Próximo" para iniciar a instalação.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Informação de Licença',
	'LBL_CONFIRM_NOT'					=> 'não',
	'LBL_CONFIRM_TITLE'					=> 'Confirmar Definições',
	'LBL_CONFIRM_WILL'					=> 'irá',
	'LBL_DBCONF_CREATE_DB'				=> 'Criar Base de Dados',
	'LBL_DBCONF_CREATE_USER'			=> 'Criar Utilizador [Alt+N]',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Atenção: Todos os dados do Sugar serão apagados<br>se esta caixa estiver selecionada.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Remover e Recriar as tabelas Sugar Existentes?',
    'LBL_DBCONF_DB_DROP'                => 'Remover Tabelas',
    'LBL_DBCONF_DB_NAME'				=> 'Nome da Base de Dados',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Palavra-passe do Utilizador da Base de Dados Sugar',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Reinserir Palavra-passe do Utilizador da Base de Dados Sugar',
	'LBL_DBCONF_DB_USER'				=> 'Nome do Utilizador da Base de Dados Sugar',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Nome do Utilizador da Base de Dados Sugar',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Nome de Utilizador do Administrador da Base de Dados',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Palavra-passe do Administrador da Base de Dados',
	'LBL_DBCONF_DEMO_DATA'				=> 'Preencher a Base de Dados com Dados de Demonstração?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Escolher Dados de Demonstração',
	'LBL_DBCONF_HOST_NAME'				=> 'Nome do Servidor',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'Instância do Anfitrião',
	'LBL_DBCONF_HOST_PORT'				=> 'Porta',
    'LBL_DBCONF_SSL_ENABLED'            => 'Ativar a ligação SSL',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Por favor insira as suas informações de configuração da base de dados abaixo. Se não tiver a certeza de como preencher, sugerimos que utilize os valores padrão.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Utilizar texto de bytes múltiplos nos dados de demonstração?',
    'LBL_DBCONFIG_MSG2'                 => 'Nome do servidor web ou máquina (anfitrião) na qual se encontra a base de dados (tal como localhost ou www.mydomain.com):',
    'LBL_DBCONFIG_MSG3'                 => 'Nome da base de dados que irá conter os dados para a instância Sugar que está prestes a instalar:',
    'LBL_DBCONFIG_B_MSG1'               => 'O nome do utilizador e a palavra-passe de um administrador da base de dados que possa criar utilizadores e tabelas de base de dados e que possa editar na base de dados o que for necessário para configurar a base de dados do Sugar.',
    'LBL_DBCONFIG_SECURITY'             => 'Por razões de segurança, pode especificar um utilizador exclusivo da base de dados para se conectar à base de dados do Sugar. Este utilizador deve ser capaz de editar, atualizar e recuperar dados na base de dados do Sugar que será criada para essa instância. Este utilizador pode ser o administrador da base de dados acima especificado, ou você pode fornecer informação nova ou existente do utilizador da base de dados.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Fazê-lo por mim',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Fornecer utilizador existente',
    'LBL_DBCONFIG_CREATE_DD'            => 'Definir utilizador para criar',
    'LBL_DBCONFIG_SAME_DD'              => 'Igual ao Utilizador Administrador',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'Pesquisa de Texto Completo',
    'LBL_FTS_INSTALLED'                 => 'Instalado',
    'LBL_FTS_INSTALLED_ERR1'            => 'A funcionalidade de Pesquisa de Texto Completo não está instalada.',
    'LBL_FTS_INSTALLED_ERR2'            => 'Ainda poderá instalar mas não será possível utilizar a funcionalidade Pesquisa de Texto Completo. Por favor consulte o guia de instalação do seu servidor de base de dados sobre como instalar esta funcionalidade, ou contacte o seu Administrador.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Palavra-passe de Utilizador Privilegiado da Base de Dados',
	'LBL_DBCONF_PRIV_USER_2'			=> 'Conta da Base de Dados Acima é um Utilizador Privilegiado?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Este utilizador privilegiado da base de dados deve ter as permissões adequadas para criar uma base de dados, remover/criar tabelas e criar um utilizador. Este utilizador privilegiado da base de dados só será utilizado para executar essas tarefas conforme necessário durante o processo de instalação. Também pode utilizar este mesmo utilizador da base de dados se este possuir privilégios suficientes.',
	'LBL_DBCONF_PRIV_USER'				=> 'Nome do Utilizador Privilegiado da Base de Dados',
	'LBL_DBCONF_TITLE'					=> 'Configuração da Base de Dados',
    'LBL_DBCONF_TITLE_NAME'             => 'Fornecer Nome do Utilizador da Base de Dados',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Fornecer Informação de Utilizador da Base de Dados',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'Após esta alteração ter sido feita, pode clicar no botão "Iniciar" abaixo para começar a sua instalação.<i>Após a instalação estar concluída, vai querer alterar o valor de \'installer_locked\' para \'true\'.</i>',
	'LBL_DISABLED_DESCRIPTION'			=> 'O instalador já foi executado uma vez. Como medida de segurança, foi desativada uma segunda execução. Se tem a certeza absoluta que deseja executá-lo novamente, por favor vá para o seu ficheiro config.php e localize (ou adicione) uma variável chamada \'installer_locked\' e defina-a como \'false\'. A linha deve ficar assim:',
	'LBL_DISABLED_HELP_1'				=> 'Para ajuda na instalação, por favor visite o SugarCRM',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'fóruns de suporte',
	'LBL_DISABLED_TITLE_2'				=> 'A Instalação SugarCRM foi Desativada',
	'LBL_DISABLED_TITLE'				=> 'Instalação SugarCRM Desativada',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Definição de Caracteres mais utilizada na sua zona',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Definições de E-mail Enviado',
    'LBL_EMAIL_CHARSET_CONF'            => 'Definição de Caracteres para E-mail de Saída',
	'LBL_HELP'							=> 'Ajuda',
    'LBL_INSTALL'                       => 'Instalar',
    'LBL_INSTALL_TYPE_TITLE'            => 'Opções de Instalação',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Escolher Tipo de Instalação',
    'LBL_INSTALL_TYPE_TYPICAL'          => '<b>Instalação Típica</b>',
    'LBL_INSTALL_TYPE_CUSTOM'           => '<b>Instalação Personalizada</b>',
    'LBL_INSTALL_TYPE_MSG1'             => 'A chave é necessária para a funcionalidade geral da aplicação, mas não é necessária para a instalação. Não precisa inserir a chave neste momento, mas terá de fornecer a chave depois de ter instalado a aplicação.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Requer o mínimo de informação para a instalação. Recomendado para novos utilizadores.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Fornece opções adicionais para definir durante a instalação. A maioria destas opções também está disponível após a instalação nos ecrãs de administração. Recomendado para utilizadores avançados.',
	'LBL_LANG_1'						=> 'Para utilizar um idioma no Sugar diferente do idioma padrão (US-English), pode carregar e instalar o pacote de idioma neste momento. Será também possível carregar e instalar pacotes de idiomas dentro da aplicação Sugar. Se quiser ignorar este passo, clique em Próximo.',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Instalar',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Remover',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Desinstalar',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Carregar',
	'LBL_LANG_NO_PACKS'					=> 'nenhum',
	'LBL_LANG_PACK_INSTALLED'			=> 'Foram instalados os seguintes pacotes de idiomas: ',
	'LBL_LANG_PACK_READY'				=> 'Estão prontos a ser instalados os seguintes pacotes de idiomas: ',
	'LBL_LANG_SUCCESS'					=> 'O pacote de idioma foi carregado com sucesso.',
	'LBL_LANG_TITLE'			   		=> 'Pacote de Idioma',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'A instalar o Sugar agora. Isto poderá demorar alguns minutos.',
	'LBL_LANG_UPLOAD'					=> 'Carregar um Pacote de Idioma',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Aceitação da Licença',
    'LBL_LICENSE_CHECKING'              => 'A verificar compatibilidade do sistema.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'A Verificar o Ambiente',
    'LBL_LICENSE_CHKDB_HEADER'          => 'A verificar as Credenciais DB e FTS.',
    'LBL_LICENSE_CHECK_PASSED'          => 'O sistema passou a verificação de compatibilidade.',
    'LBL_LICENSE_REDIRECT'              => 'Será redirecionado dentro de ',
	'LBL_LICENSE_DIRECTIONS'			=> 'Se possui a sua informação de licença, por favor insira-a nos campos abaixo.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Inserir Chave de Transferência',
	'LBL_LICENSE_EXPIRY'				=> 'Data de Expiração',
	'LBL_LICENSE_I_ACCEPT'				=> 'Eu Aceito',
	'LBL_LICENSE_NUM_USERS'				=> 'Número de Utilizadores',
	'LBL_LICENSE_PRINTABLE'				=> 'Versão para Impressão',
    'LBL_PRINT_SUMM'                    => 'Imprimir Resumo',
	'LBL_LICENSE_TITLE_2'				=> 'Licença SugarCRM',
	'LBL_LICENSE_TITLE'					=> 'Informação de Licença',
	'LBL_LICENSE_USERS'					=> 'Utilizadores Licenciados',

	'LBL_LOCALE_CURRENCY'				=> 'Definições de Moeda',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Moeda Padrão',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Símbolo de Moeda',
	'LBL_LOCALE_CURR_ISO'				=> 'Código de Moeda (ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> 'Separador de Milhares (1000)',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Separador Decimal',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Exemplo',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Dígitos Importantes',
	'LBL_LOCALE_DATEF'					=> 'Formato de Data Padrão',
	'LBL_LOCALE_DESC'					=> 'As definições locais especificadas serão refletidas globalmente dentro da instância Sugar.',
	'LBL_LOCALE_EXPORT'					=> 'Definição de Caracteres para Importar/Exportar<br> <i>(E-mail, .csv, vCard, PDF, importação de dados)</i>',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Delimitador de Exportação (.csv)',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Definições de Importação/Exportação',
	'LBL_LOCALE_LANG'					=> 'Idioma Padrão',
	'LBL_LOCALE_NAMEF'					=> 'Formato de Nome Padrão',
	'LBL_LOCALE_NAMEF_DESC'				=> 's = saudação<br />f = nome próprio<br />l = apelido',
	'LBL_LOCALE_NAME_FIRST'				=> 'David',
	'LBL_LOCALE_NAME_LAST'				=> 'Livingstone',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Dr.',
	'LBL_LOCALE_TIMEF'					=> 'Formato de Hora Padrão',
	'LBL_LOCALE_TITLE'					=> 'Definições Locais',
    'LBL_CUSTOMIZE_LOCALE'              => 'Personalizar Definições Locais',
	'LBL_LOCALE_UI'						=> 'Interface do Utilizador',

	'LBL_ML_ACTION'						=> 'Ação',
	'LBL_ML_DESCRIPTION'				=> 'Descrição',
	'LBL_ML_INSTALLED'					=> 'Data de Instalação',
	'LBL_ML_NAME'						=> 'Nome',
	'LBL_ML_PUBLISHED'					=> 'Data de Publicação',
	'LBL_ML_TYPE'						=> 'Tipo',
	'LBL_ML_UNINSTALLABLE'				=> 'Não-instalável',
	'LBL_ML_VERSION'					=> 'Versão',
	'LBL_MSSQL'							=> 'SQL Server',
	'LBL_MSSQL_SQLSRV'				    => 'SQL Server (Controlador do Microsoft SQL Server para PHP)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (extensão mysql)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'Próximo',
	'LBL_NO'							=> 'Não',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'A definir palavra-passe do administrador do site',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'tabela de auditoria /',
	'LBL_PERFORM_CONFIG_PHP'			=> 'A criar ficheiro de configuração do Sugar',
	'LBL_PERFORM_CREATE_DB_1'			=> '<b>A criar a base de dados</b>',
	'LBL_PERFORM_CREATE_DB_2'			=> '<b>em</b>',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'A criar o nome do utilizador e palavra-passe da Base de Dados...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'A criar dados padrão do Sugar',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'A criar o nome do utilizador e palavra-passe da Base de Dados para localhost...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'A criar tabelas de relacionamento do Sugar',
	'LBL_PERFORM_CREATING'				=> 'a criar /',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'A criar relatórios padrão',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'A criar tarefas calendarizadas padrão',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'A inserir definições padrão',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'A criar utilizadores padrão',
	'LBL_PERFORM_DEMO_DATA'				=> 'A preencher as tabelas da base de dados com dados de demonstração (isto pode demorar um pouco)',
	'LBL_PERFORM_DONE'					=> 'concluído<br>',
	'LBL_PERFORM_DROPPING'				=> 'a remover / ',
	'LBL_PERFORM_FINISH'				=> 'Concluir',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'A atualizar informação de licença',
	'LBL_PERFORM_OUTRO_1'				=> 'A configuração do Sugar',
	'LBL_PERFORM_OUTRO_2'				=> 'está agora completa!',
	'LBL_PERFORM_OUTRO_3'				=> 'Tempo total:',
	'LBL_PERFORM_OUTRO_4'				=> 'segundos.',
	'LBL_PERFORM_OUTRO_5'				=> 'Memória utilizada aproximada:',
	'LBL_PERFORM_OUTRO_6'				=> 'bytes.',
	'LBL_PERFORM_OUTRO_7'				=> 'O seu sistema está agora instalado e configurado para utilização.',
	'LBL_PERFORM_REL_META'				=> 'meta de relacionamento... ',
	'LBL_PERFORM_SUCCESS'				=> 'Sucesso!',
	'LBL_PERFORM_TABLES'				=> 'A criar tabelas de aplicação, tabelas de auditoria e metadados de relacionamento Sugar',
	'LBL_PERFORM_TITLE'					=> 'Executar Configuração',
	'LBL_PRINT'							=> 'Imprimir',
	'LBL_REG_CONF_1'					=> 'Por favor preencha o pequeno formulário abaixo para receber anúncios de produtos, novidades de formação, ofertas especiais e convites para eventos especiais da SugarCRM. Nós não vendemos, alugamos, partilhamos ou distribuímos as informações aqui recolhidas a terceiros.',
	'LBL_REG_CONF_2'					=> 'O seu nome e endereço de e-mail são os únicos campos exigidos para o registo. Todos os outros campos são opcionais, mas muito úteis. Nós não vendemos, alugamos, partilhamos ou distribuímos as informações aqui recolhidas a terceiros.',
	'LBL_REG_CONF_3'					=> 'Obrigado por se registar. Clique no botão Concluir para aceder ao SugarCRM. É necessário iniciar sessão pela primeira vez utilizando o nome de utilizador "admin" e a palavra-passe que inseriu no passo 2.',
	'LBL_REG_TITLE'						=> 'Registo',
    'LBL_REG_NO_THANKS'                 => 'Não, Obrigado',
    'LBL_REG_SKIP_THIS_STEP'            => 'Ignorar este Passo',
	'LBL_REQUIRED'						=> '* Campo Obrigatório',

    'LBL_SITECFG_ADMIN_Name'            => 'Nome do Administrador da Aplicação Sugar',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Reinserir Palavra-passe do Utilizador Administrador do Sugar',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Atenção: Isto irá substituir a palavra-passe do administrador de qualquer instalação anterior.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Palavra-passe do Utilizador Administrador do Sugar',
	'LBL_SITECFG_APP_ID'				=> 'ID da Aplicação',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Se estiver selecionado, deve fornecer um ID de aplicação para substituir o ID gerado automaticamente. O ID garante que as sessões de uma instância Sugar não são utilizadas por outras instâncias. Se tem um cluster de instalações Sugar, todas elas devem partilhar o mesmo ID de aplicação.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Forneça o Seu Próprio ID de Aplicação',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Se estiver selecionado, deve especificar um diretório de registo para substituir o diretório padrão de registo Sugar. Independentemente do local do ficheiro de registo, o seu acesso por web browser estará restrito através de um redirecionamento .htaccess.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Utilizar um Diretório de Registo Personalizado',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Se estiver selecionado, deve fornecer uma pasta segura para armazenar informação de sessão do Sugar. Isto pode ser feito para evitar a vulnerabilidade dos dados da sessão Sugar em servidores partilhados.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Utilize um Diretório de Sessão Personalizado para o Sugar',
	'LBL_SITECFG_DIRECTIONS'			=> 'Por favor insira a sua informação de configuração do site abaixo. Se não está seguro dos campos, sugerimos-lhe que use os valores padrão.',
	'LBL_SITECFG_FIX_ERRORS'			=> '<b>Por favor corrija os seguintes erros antes de continuar:</b>',
	'LBL_SITECFG_LOG_DIR'				=> 'Diretório de Registo',
	'LBL_SITECFG_SESSION_PATH'			=> 'Caminho para o Diretório de Sessão<br>(deve ser editável)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Selecionar Opções de Segurança',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Se estiver selecionado, o sistema irá verificar periodicamente versões atualizadas da aplicação.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Verificar Atualizações Automaticamente?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Configuração de Atualizações Sugar',
	'LBL_SITECFG_TITLE'					=> 'Configuração do Site',
    'LBL_SITECFG_TITLE2'                => 'Identificar Utilizador Administrador',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Segurança do Site',
	'LBL_SITECFG_URL'					=> 'URL da Instância Sugar',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Utilizar Padrões?',
	'LBL_SITECFG_ANONSTATS'             => 'Enviar Estatísticas de Utilização Anónimas?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'Se estiver selecionado, o Sugar enviará estatísticas <b>anónimas</b> sobre a sua instalação para a SugarCRM Inc. cada vez que o seu sistema procurar por novas versões. Esta informação irá ajudar-nos a entender melhor como a aplicação é utilizada e trará melhorias ao produto.',
    'LBL_SITECFG_URL_MSG'               => 'Insira o URL que será usado para aceder à instância Sugar após a instalação. O URL também será utilizado como base para os URLs nas páginas da aplicação Sugar. O URL deve incluir o servidor web ou o nome da máquina ou o endereço IP.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Insira um nome para o seu sistema. Este nome será exibido na barra do título do browser quando os utilizadores visitarem a aplicação Sugar.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'Após a instalação, necessitará de utilizar o administrador Sugar (nome do utilizador padrão = admin) para aceder à instância Sugar. Insira uma palavra-passe para este utilizador administrador. Esta palavra-passe pode ser alterada após o início de sessão inicial. Também pode introduzir outro nome de utilizador do administrador a utilizar para além do valor padrão fornecido.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Selecione as definições de agrupamento (ordenação) do seu sistema. Estas definições irão criar as tabelas com o idioma especifico que utiliza. Se o seu idioma não necessita de definições especiais, por favor utilize o valor padrão.',
    'LBL_SPRITE_SUPPORT'                => 'Suporte de Sprites',
	'LBL_SYSTEM_CREDS'                  => 'Credenciais do Sistema',
    'LBL_SYSTEM_ENV'                    => 'Ambiente do Sistema',
	'LBL_START'							=> 'Iniciar',
    'LBL_SHOW_PASS'                     => 'Mostrar palavras-passe',
    'LBL_HIDE_PASS'                     => 'Ocultar palavras-passe',
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
                    'Antes de começar, certifique-se de que possui as versões suportadas dos seguintes componentes do sistema: <br> <ul> <li> Base de Dados/Sistema de Gestão de Base de Dados (Exemplos: MySQL, SQL Server, Oracle, DB2)</li> <li> Web Server (Apache, IIS)</li> <li> Elasticsearch</li> </ul>Consulte a Matriz de Compatibilidade nas Notas de Lançamento para componentes do sistema compatíveis com a versão do Sugar que está a instalar.<br>',
    'REQUIRED_SYS_CHK' => 'Verificação Inicial do Sistema',
    'REQUIRED_SYS_CHK_MSG' =>
                    'Quando iniciar o processo de instalação, uma verificação do sistema será executada no servidor web no qual os ficheiros Sugar estão localizados, a fim de garantir que o sistema está configurado corretamente e tem todos os componentes necessários para concluir com êxito a instalação. <br><br> O sistema verifica todas as seguintes características: <br> <ul> <li><b>versão do PHP</b> &#8211; deve ser compatível com a aplicação</li> <li><b> Variáveis da Sessão</b> &#8211; deve estar a funcionar corretamente</li> <li> <b>MB Strings</b> &#8211; deve ser instalado e ativado no php.ini</li> <li><b>Suporte à Base de Dados</b> &#8211; deve existir para MySQL, SQL Server, Oracle ou DB2</li> <li><b>Config.php</b>  &#8211; deve existir e ter as permissões adequadas para ser editável</li> <li>Os seguintes ficheiros Sugar devem ser editáveis: <ul><li><b>/custom</li> <li>/cache</li> <li>/modules</li> <li>/upload</b></li></ul></li></ul>Se a verificação falhar, não poderá prosseguir com a instalação. Uma mensagem de erro será exibida, explicando porque o sistema não passou a verificação. Após fazer as alterações necessárias, pode executar novamente a verificação do sistema para continuar a instalação.<br>',
    'REQUIRED_INSTALLTYPE' => 'Instalação Típica ou Personalizada',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "Após a execução da verificação do sistema, pode escolher entre a instalação Típica ou Personalizada.<br><br> Para ambas as instalações <b>Típica</b> e <b>Personalizada</b>, necessitará de saber o seguinte:<br> <ul> <li> <b>Tipo de base de dados</b> que irá alojar os dados do Sugar <ul><li>Tipos de base de dados compatíveis: MySQL, MS SQL Server, Oracle, DB2.<br><br></li></ul></li> <li> <b>Nome do servidor web</b> ou máquina (anfitrião) na qual se encontra a base de dados <ul><li>Pode ser <i>localhost</i> se a base de dados está no seu computador local ou está no mesmo servidor web ou máquina que os seus ficheiros Sugar.<br><br></li></ul></li> <li><b>Nome da base de dados</b> onde pretende alojar os dados do Sugar</li> <ul> <li> Talvez já tenha uma base de dados existente que pretenda usar. Se fornecer o nome de uma base de dados existente, as tabelas na base de dados serão descartadas durante a instalação quando o esquema para a base de dados do Sugar for definido.</li> <li> Se ainda não tiver uma base de dados, o nome que fornecer será usado para a nova base de dados que é criada para a instância durante a instalação.<br><br></li> </ul><li><b>Nome do utilizador e palavra-passe do administrador da base de dados</b> <ul><li>O administrador da base de dados deverá ser capaz de criar tabelas e utilizadores e editar a base de dados.</li><li>Talvez seja necessário entrar em contacto com o administrador da base de dados se esta não estiver localizada no seu computador local e/ou se você não for o administrador da base de dados.<br><br></ul></li></li><li> <b>Nome e palavra-passe do utilizador da base de dados Sugar</b> </li> <ul> <li> O utilizador pode ser o administrador da base de dados ou pode fornecer o nome de outro utilizador da base de dados. </li> <li> Se pretender criar um novo utilizador da base de dados para este fim, será capaz de fornecer um novo nome do utilizador e palavra-passe durante o processo de instalação, e o utilizador será criado durante a instalação. </li> </ul> <li> <b>Porta e anfitrião Elasticsearch</b>
</li>
<ul>
<li> O anfitrião Elasticsearch é o anfitrião onde estar a ser executado o motor de busca. O valor padrão é o localhost assumindo que está a executar o motor de buscar no mesmo servidor do Sugar.</li>
<li> A porta de Elasticsearch é o número da porta da ligação do Sugar ao motor de busca. O valor padrão é 9200, que é o valor padrão do elasticsearch. </li>
</ul>
</ul><p> Para a configuração <b>Personalizada</b>, também precisa de saber o seguinte: <br> <ul> <li> <b>URL que será utilizado para aceder à instância Sugar</b> depois de instalado. Esse URL deve incluir o servidor web ou o nome da máquina ou o endereço IP.<br><br></li> <li> [Optional] <b> Caminho para o diretório de sessão</b> se deseja usar um diretório de sessão personalizado para informação Sugar de modo a prevenir a vulnerabilidade dos dados de sessão em servidores partilhados.<br><br></li> <li> [Optional] <b>Caminho para um diretório de registo personalizado</b> se pretende substituir o diretório padrão de registo do Sugar.<br><br></li> <li> [Optional] <b>ID da Aplicação</b> se pretende substituir o ID gerado automaticamente que garante que a sessões de uma instância Sugar não são usadas por outras instâncias.<br><br></li> <li><b>Conjunto de Caracteres</b> mais utilizados na sua região.<br><br></li></ul> Para informações mais detalhadas, por favor consulte o Manual de Instalação.                                ",
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Por favor leia as seguintes informações importantes antes de prosseguir com a instalação. As informações ajudarão a determinar se está ou não pronto para instalar a aplicação neste momento.',


	'LBL_WELCOME_2'						=> 'Para consultar a documentação de instalação, visite a <a href="http://www.sugarcrm.com/crm/installation" target="_blank"> Wiki do Sugar</a>.  <BR><BR>Para contactar com um engenheiro de suporte do SugarCRM para obter ajuda na instalação, inicie sessão no <a target="_blank" href="http://support.sugarcrm.com"> Portal de suporte do SugarCRM</a> e abra uma ocorrência de suporte.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '<b>Escolha o seu idioma</b>',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Assistente de Configuração',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Bem-vindo ao SugarCRM',
	'LBL_WELCOME_TITLE'					=> 'Assistente de Configuração do SugarCRM',
	'LBL_WIZARD_TITLE'					=> 'Assistente de Configuração do Sugar:',
	'LBL_YES'							=> 'Sim',
    'LBL_YES_MULTI'                     => 'Sim - Multibyte',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Processar Tarefas de Workflow',
	'LBL_OOTB_REPORTS'		=> 'Executar tarefas criadas de execução de relatórios',
	'LBL_OOTB_IE'			=> 'Verificar Caixa de Entrada de E-mails',
	'LBL_OOTB_BOUNCE'		=> 'Executar toda a noite o Processamento de E-mails Retornados de Campanhas',
    'LBL_OOTB_CAMPAIGN'		=> 'Executar toda a noite o Envio Massivo de E-mail de Campanha',
	'LBL_OOTB_PRUNE'		=> 'Remover Base de Dados no Primeiro Dia do Mês',
    'LBL_OOTB_TRACKER'		=> 'Remover tabelas tracker',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Executar as notificações do lembrete por E-mail',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Actualizar tabela tracker_sessions',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Limpar a Fila de Trabalhos',


    'LBL_FTS_TABLE_TITLE'     => 'Fornecer definições para Pesquisa de Texto Completo',
    'LBL_FTS_HOST'     => 'Anfitrião',
    'LBL_FTS_PORT'     => 'Porta',
    'LBL_FTS_TYPE'     => 'Tipo de Motor de Busca',
    'LBL_FTS_HELP'      => 'Para permitir uma pesquisa de texto completo, introduza o Anfitrião e a Porta onde o motor de busca está alojado. O Sugar inclui suporte incorporado para o motor elasticsearch.',
    'LBL_FTS_REQUIRED'    => 'É necessário o Elastic Search.',
    'LBL_FTS_CONN_ERROR'    => 'Não é possível ligar ao servidor de Pesquisa de Texto Completo. Verifique as suas definições.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => 'Não há nenhuma versão de servidor de Pesquisa de Texto Completo disponível. Verifique as suas definições.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => 'Foi detetada uma versão não suportada da pesquisa Elastic. Use as versões: %s',

    'LBL_PATCHES_TITLE'     => 'Instalar Últimos Patches',
    'LBL_MODULE_TITLE'      => 'Instalar Pacotes de Idiomas',
    'LBL_PATCH_1'           => 'Se pretende ignorar este passo, clique em Próximo.',
    'LBL_PATCH_TITLE'       => 'Patch do Sistema',
    'LBL_PATCH_READY'       => 'Os patches seguintes estão prontos a ser instalados:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "O SugarCRM baseia-se em sessões PHP para armazenar informações importantes enquanto estiver ligado a este servidor web. A sua instalação PHP não tem as informações de sessão corretamente configuradas. <br><br>Um erro de configuração comum é o de que a diretiva <b>'session.save_path</b> não está a apontar para um diretório válido. <br> <br> Por favor corrija a sua <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>configuração PHP</a> no ficheiro php.ini localizado aqui em baixo.",
	'LBL_SESSION_ERR_TITLE'				=> 'Erro de Configuração das Sessões PHP',
	'LBL_SYSTEM_NAME'=>'Nome de Sistema',
    'LBL_COLLATION' => 'Definições de Agrupamento',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Forneça um Nome do Sistema para a instância Sugar.',
	'LBL_PATCH_UPLOAD' => 'Selecione um ficheiro patch do seu computador local',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'O modo de Compatibilidade Retroativa do PHP está ligado. Defina zend.ze1_compatibility_mode como Desligado para prosseguir',

    'meeting_notification_email' => array(
        'name' => 'E-mails de notificações de reunião',
        'subject' => 'Reunião do SugarCRM - $event_name ',
        'description' => 'Este modelo é usado quando o Sistema envia notificações de reunião a um utilizador.',
        'body' => '<div>
	<p>Para: $assigned_user</p>

	<p>$assigned_by_user convidou-o para uma Reunião</p>

	<p>Assunto: $event_name<br/>
	Data de Início: $start_date<br/>
	Data de Fim: $end_date</p>

	<p>Descrição: $description</p>

	<p>Aceitar esta reunião:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Aceitar provisoriamente esta reunião:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Recusar esta reunião:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Para: $assigned_user

$assigned_by_user convidou-o para uma Reunião

Assunto: $event_name
Data de Início: $start_date
Data de Fim: $end_date

Descrição: $description

Aceitar esta reunião:
<$accept_link>

Aceitar provisoriamente esta reunião:
<$tentative_link>

Recusar esta reunião:
<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => 'E-mails de notificações de chamada',
        'subject' => 'Chamada do SugarCRM - $event_name ',
        'description' => 'Este modelo é usado quando o Sistema envia notificações de chamada a um utilizador.',
        'body' => '<div>
	<p>Para: $assigned_user</p>

	<p>$assigned_by_user convidou-o para uma Chamada</p>

	<p>Assunto: $event_name<br/>
	Data de Início: $start_date<br/>
	Duração: $hoursh, $minutesm</p>

	<p>Descrição: $description</p>

	<p>Aceitar esta chamada:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Aceitar provisoriamente esta chamada:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Recusar esta chamada:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Para: $assigned_user

$assigned_by_user convidou-o para uma Chamada

Assunto: $event_name
Data de Início: $start_date
Duração: $hoursh, $minutesm

Descrição: $description

Aceitar esta chamada:
<$accept_link>

Aceitar provisoriamente esta chamada
<$tentative_link>

Recusar esta chamada
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => 'E-mails de notificação de atribuição',
        'subject' => 'SugarCRM - $module_name atribuído ',
        'description' => 'Este modelo é usado quando o Sistema envia uma atribuição de tarefa a um utilizador.',
        'body' => '<div>
<p>$assigned_by_user atribuiu um&nbsp;$module_name a&nbsp;$assigned_user.</p>

<p>Pode rever este&nbsp;$module_name em:<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user atribuiu um $module_name a $assigned_user.

Pode rever este $module_name em:
<$module_link>',
    ),

    'scheduled_report_email' => array(
        'name' => 'E-mails de relatórios agendados',
        'subject' => 'Relatório agendado: $report_name de $report_time',
        'description' => 'Este modelo é usado quando o Sistema envia um relatório agendado a um utilizador.',
        'body' => '<div>
<p>Olá $assigned_user,</p>
<p>Em anexo, encontra-se um relatório gerado automaticamente agendado para si.</p>
<p>Nome do relatório: $report_name</p>
<p>Data e hora de criação do relatório: $report_time</p>
</div>',
        'txt_body' =>
            'Olá $assigned_user,

Em anexo, encontra-se um relatório gerado automaticamente agendado para si.

Nome do relatório: $report_name

Data e hora de criação do relatório: $report_time',
    ),

    'comment_log_mention_email' => [
        'name' => 'Notificação por e-mail do registo de comentários do sistema',
        'subject' => 'SugarCRM - $initiator_full_name mencionou-o num $singular_module_name',
        'description' => 'Este modelo é usado para enviar uma notificação por e-mail para utilizadores que foram marcados na secção de registo de comentários.',
        'body' =>
            '<div>
                <p>Foi mencionado no registo de comentários do seguinte registo:  <a href="$record_url">$record_name</a></p>
                <p>Inicie sessão no Sugar para ver o comentário.</p>
            </div>',
        'txt_body' =>
'Foi mencionado no registo de comentários do seguinte registo: $record_name
            Inicie sessão no Sugar para ver o comentário.',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => 'Informação da nova conta',
        'description' => 'Este modelo é utilizado quando o Administrador de Sistema envia a nova palavra-passe para um utilizador.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Aqui está o nome de utilizador e a palavra-passe temporária da sua conta:</p><p>Nome de Utilizador : $contact_user_user_name </p><p>Palavra-passe: $contact_user_user_hash </p><br><p><a href="$config_site_url">$config_site_url</a></p><br><p>Depois de iniciar sessão com a palavra-passe indicada acima, poderá ser pedido para alterar a palavra-passe por uma à sua escolha.</p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
'
Aqui está o nome de utilizador e a palavra-passe temporária da sua conta:
Nome de Utilizador: $contact_user_user_name
Palavra-passe: $contact_user_user_hash

$config_site_url

Depois de iniciar sessão com a palavra-passe indicada acima, poderá ser necessário indicar uma nova palavra-passe à sua escolha.',
        'name' => 'E-mail de palavra-passe gerada pelo sistema',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Redefinir a palavra-passe da conta',
        'description' => "Este modelo é utilizado para enviar para o utilizador um link para clicar e indicar uma nova palavra-passe da conta do utilizador.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Recentemente pediu em $contact_user_pwd_last_changed a possibilidade de redefinir a palavra-passe da sua conta. </p><p>Clique no link abaixo para redefinir a sua palavra-passe:</p><p> <a href="$contact_user_link_guid">$contact_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
'
Recentemente pediu em $contact_user_pwd_last_changed a possibilidade de redefinir a palavra-passe da sua conta.

Clique no link abaixo para redefinir a sua palavra-passe:

$contact_user_link_guid',
        'name' => 'E-mail de Esqueci-me da Palavra-passe',
        ),

'portal_forgot_password_email_link' => [
    'name' => 'E-mail de recuperação de Palavra-passe do Portal',
    'subject' => 'Repor a palavra-passe da sua conta',
    'description' => 'Este modelo é utilizado para enviar para o utilizador um link para repor a nova palavra-passe da conta do utilizador.',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Solicitou recentemente a reposição da palavra-passe da sua conta. </p><p>Clique no link abaixo para repor a sua palavra-passe:</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'
    Solicitou recentemente a reposição da palavra-passe da sua conta.

   Clique no link abaixo para repor a sua palavra-passe:

    $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => 'E-mail de confirmação da reposição da Palavra-passe do Portal',
        'subject' => 'A palavra-passe da sua conta foi reposta',
        'description' => 'Este modelo é utilizado para enviar a confirmação para um utilizador do Portal de que foi reposta a palavra-passe da respectiva conta.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Este e-mail destina-se a confirmar que a palavra-passe da sua conta do Portal foi reposta. </p><p>Use o link abaixo para iniciar sessão no Portal:</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
    Este e-mail destina-se a confirmar que a palavra-passe da sua conta do Portal foi reposta.

    Use o link abaixo para iniciar sessão no Portal:

    $portal_login_url',
    ],
);
