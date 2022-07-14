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
	'LBL_BASIC_SEARCH'					=> '기본검색',
	'LBL_ADVANCED_SEARCH'				=> '고급검색',
	'LBL_BASIC_TYPE'					=> '기본 형식',
	'LBL_ADVANCED_TYPE'					=> '고급 형식',
	'LBL_SYSOPTS_1'						=> '다음 시스템 구성의 아래 선택사항중 선택하십시요.',
    'LBL_SYSOPTS_2'                     => '설치하고자 하는 Sugar 예로 어떠한 형식의 데이타베이스를 사용하시겠습니까?',
	'LBL_SYSOPTS_CONFIG'				=> '시스템 구성',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> '데이터베이스 유형 지정',
    'LBL_SYSOPTS_DB_TITLE'              => '데이타베이스 형식',
	'LBL_SYSOPTS_ERRS_TITLE'			=> '진행전 다음의 오류를 수정하십시요.',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => '다음의 쓰기가능한 디렉토리를 만들어야합니다.',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> '제공된 데이타베스 주최자, 사용자명 그리고/또는 비밀번호는 사용 불가하며 데이타베이스와의 연결할수 없습니다. 유효한 주최자, 사용자명, 비밀번호를 입력하십시요.',
    'ERR_DB_IBM_DB2_CONNECT'			=> '제공된 데이타베스 주최자, 사용자명 그리고/또는 비밀번호는 사용 불가하며 데이타베이스와의 연결할수 없습니다. 유효한 주최자, 사용자명, 비밀번호를 입력하십시요.',
    'ERR_DB_IBM_DB2_VERSION'			=> '귀하의 DB2 버전은 Sugar에 의해 지원되지 않습니다. Sugar어플리케이션에 적합한 버전을 설치해야 합니다. 지원되는 DB2버전 발표노트의 Compatibility Matrix과 문의하시기 바랍니다.',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Oracle을 선택하시려면 Oracle 고객을 설치한후 수정되어야합니다.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> '제공된 데이타베스 주최자, 사용자명 그리고/또는 비밀번호는 사용 불가하며 데이타베이스와의 연결할수 없습니다. 유효한 주최자, 사용자명, 비밀번호를 입력하십시요.',
	'ERR_DB_OCI8_CONNECT'				=> '제공된 데이타베스 주최자, 사용자명 그리고/또는 비밀번호는 사용 불가하며 데이타베이스와의 연결할수 없습니다. 유효한 주최자, 사용자명, 비밀번호를 입력하십시요.',
	'ERR_DB_OCI8_VERSION'				=> '귀하의 Oracle버전은 Sugar에 의해 지원되지 않습니다. Sugar어플리케이션에 적합한 버전을 설치해야 합니다. 지원되는 DB2버전 발표노트의 Compatibility Matrix과 문의하시기 바랍니다.',
    'LBL_DBCONFIG_ORACLE'               => '귀하의 데이타베이스명을 입력하십시요. 이는 배정된 사용자의 기본 테이블 공간이 됩니다.',
	// seed Ent Reports
	'LBL_Q'								=> '예비고객 문의',
	'LBL_Q1_DESC'						=> '형식에 따른 예비고객',
	'LBL_Q2_DESC'						=> '고객에 따른 예비고객 목록',
	'LBL_R1'							=> '6개월 영업 목표 보고서',
	'LBL_R1_DESC'						=> '형식별 달별로 하위분류된 다음 6개월동안의  예비고객 목록',
	'LBL_OPP'							=> '예비고객 데이타 설정',
	'LBL_OPP1_DESC'						=> '이곳은 고객 문의사항창을 변경할 수 있는 곳입니다.',
	'LBL_OPP2_DESC'						=> '이 문의 사항은 보고서의 첫 문의사항 밑으로 저장됩니다.',
    'ERR_DB_VERSION_FAILURE'			=> '데이타베이스 버전을 확인할수 없습니다.',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Sugar 관리자 사용자를 위한 사용자명을 입력해 주십시요.',
	'ERR_ADMIN_PASS_BLANK'				=> 'Sugar 관리자 사용자를 위한 비밀번호을 입력해 주십시요',

    'ERR_CHECKSYS'                      => '적합성 확인중 오류가 발견되었습니다. SugarCRM설치가 올바른 작동을 위해서는 아래 목록의 문제들을 알맞은 단계에 걸쳐 확인하거나 재확인 버튼을 누르고 아니면 다시 설치하시기 바랍니다.',
    'ERR_CHECKSYS_CALL_TIME'            => 'Call Time Pass Reference 를 작동하십시요.(이는 php.ini에서는 작동하실수 없습니다.)',

	'ERR_CHECKSYS_CURL'					=> '찾을 수 없음: Sugar 일정 관리가 제한된 기능으로 작동합니다. 이메일 보관 서비스가 실행되지 않습니다.',
    'ERR_CHECKSYS_IMAP'					=> '발견되지 않았습니다 : 수신 이메일과 캠페인(이메일)은 IMAP libraries를 요합니다. 모두  작동할수 없습니다.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'MS SQL서버 사용시 Magic Quotes GPC 를 작동할수 없습니다.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> '경고',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> '설정',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'php.ini 파일에서 M 이상 크기)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> '최소 버전 4.1.2-발견',
	'ERR_CHECKSYS_NO_SESSIONS'			=> '쓰고 읽기의 변이성이 실패하였습니다. 설치를 계속할수 없습니다.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> '유효한 디렉토리가 아닙니다.',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> '경고: 쓸수 없음',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> '귀하의 PHP버전은 Sugar에 의해 지원되지 않습니다. Sugar어플리케이션에 적합한 버전을 설치해야 합니다. 지원되는 PHP버전 발표노트의 Compatibility Matrix과 문의하시기 바랍니다. 귀하의 버전은',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => '귀하의 IIS버전은 Sugar에 의해 지원되지 않습니다. Sugar어플리케이션에 적합한 버전을 설치해야 합니다. 지원되는 IIS버전 발표노트의 Compatibility Matrix과 문의하시기 바랍니다. 귀하의 버전은',
    'ERR_CHECKSYS_FASTCGI'              => 'PHP 매핑을 위한 FastCGI 처리기를 사용하지 않았습니다. Sugar 어플리케이션에 적합한 버전을 설치해야 합니다. 지원되는 버전 릴리스 노트의 Compatibility Matrix를 참조하시기 바랍니다. 보다 자세한 내용은 <a href="http://www.iis.net/php/" target="_blank" rel="nofollow noopener noreferrer">http://www.iis.net/php/</a>를 참조하십시오.',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'IIS/FastCGI sapi의 최고의 사용경험을 위해 php.ini파일의 fastcgi.logging 을 0으로 설정하십시요.',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> '지원되지 않는 PHP버전이 설치되었습니다.',
    'LBL_DB_UNAVAILABLE'                => '데이타베이스가 이용불가합니다.',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => '데이터베이스 지원을 찾을 수 없습니다. 지원되는 데이터베이스 유형인 MySQL, MS SQLServer, Oracle, 또는 DB2 중 하나에 필요한 드라이버가 있는지 확인하십시오. PHP 버전에 따라서, php.ini 파일 내의 extension에서 주석 처리를 제거하거나, 올바른 이진 파일로 다시 컴파일해야 할 수도 있습니다. 데이터베이스 지원을 활성화하는 방법에 대한 자세한 정보는 PHP 매뉴얼을 참조하십시오.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Sugar 어플리케이션에 필요한 XML Parser Libraries 연결 기능이 발견되지 않았습니다. PHP버전에 따라 php.ini 파일 확장을 uncomment 하거나 이진 파일을 재편집해야 합니다. 더 자세한 정보를 위해PHP 안내서를 참조하십시요.',
    'LBL_CHECKSYS_CSPRNG' => '난수 생성기',
    'ERR_CHECKSYS_MBSTRING'             => 'Sugar 어플리케이션에 필요한 Multibyte Strings PHP (mbstring)확장에 연결 기능이 발견되지 않았습니다. 일반적으로 mbstring 모듈은 PHP초기설정에 의해 작동이 불가하며 반드시 이원체 설치가 완료된후 사용가능한 mbstring과 같이 작동되어야 합니다. mbstring 작동가능 지원에 관한 더 자세한 정보를 위해서 PHP 안내서를 참조하십시오.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'php (php.ini)구성 파일의 세션 저장경로 설정이 이뤄지지 않았거나 존재하지 않는 폴더에 설정되었습니다. php.ini 의 저장경로 설정을 하거나 저장경로 파일이 존재하는지 확인하시기 바랍니다.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'php (php.ini)구성 파일의 세션 저장경로 설정이 이뤄지지 않았거나 쓰여질수 없는 폴더에 설정되었습니다. 알맞은 단계를 통해 쓰기가능한 폴더로 변경하십시오. 작동 시스템에 따라 이는 chmod 766허가를 변경할수 있으며 또는 파일명의 오른쪽 클릭으로 소유권에 접속하거나 읽기가능 선택사항 확인을 취소할수 있습니다.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'config 파일이 존재지만 쓰여질수 없습니다. 알맞은 단계를 통해 쓰기가능한 폴더로 변경하십시오. 작동 시스템에 따라 이는 chmod 766허가를 변경할수 있으며 또는 파일명의 오른쪽 클릭으로 소유권에 접속하거나 읽기가능 선택사항 확인을 취소할수 있습니다.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'Config 덮어쓴 파일이 존재하지만 쓰여질수 없습니다. 알맞은 단계를 통해 쓰기가능한 폴더로 변경하십시오. 작동 시스템에 따라 이는 chmod 766허가를 변경할수 있으며 또는 파일명의 오른쪽 클릭으로 소유권에 접속하거나 읽기가능 선택사항 확인을 취소할수 있습니다.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => '고객 디렉토리가 존재하지만 쓰여질수 없습니다. 작동 시스템에 따라 이는 chmod 766허가를 변경할수 있으며 또는 파일명의 오른쪽 클릭으로 소유권에 접속하거나 읽기가능 선택사항 확인을 취소할수 있습니다. 필요한 단계를 통해 쓰기가능한 파일로 변경하십시오.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "아래  목록의 파일이나 디렉토리는 쓰기가 불가능하거나 찾을 수 없고 새로 만들어 질수 없습니다. 작동 시스템에 따라 수정을 위해서는 이는 chmod 766허가를 변경할수 있으며 또는 파일명의 오른쪽 클릭으로 소유권에 접속하거나 읽기가능 선택사항 확인을 취소할수 있습니다.",
	'ERR_CHECKSYS_SAFE_MODE'			=> '안전모드 실행중입니다.',
    'ERR_CHECKSYS_ZLIB'					=> 'ZLib 지원이 발견되지 않았습니다 : SugarCRM는 zlib압축으로 커다란 성능 혜택을 거둘수있습니다.',
    'ERR_CHECKSYS_ZIP'					=> 'ZIP 지원이 발견되지 않았습니다 : SugarCRM가 압축됩 파일을 진행하기위해서는 ZIP지원이 필요합니다.',
    'ERR_CHECKSYS_BCMATH'				=> 'BCMATH 지원을 찾지 못했습니다 : SugarCRM은 임의의 정밀 수학을 위해 BCMATH 지원이 필요합니다.',
    'ERR_CHECKSYS_HTACCESS'             => '. htaccess 재작성에 대한 테스트에 실패하였습니다. 이것은 일반적으로 여러분이 재정의 슈거(Sugar) 디렉토리에 대한 설정을 허용하지 않는 것을 의미합니다.',
    'ERR_CHECKSYS_CSPRNG' => 'CSPRNG Exception',
	'ERR_DB_ADMIN'						=> '입력된 데이타베이스 관리자명과 비밀번호가 사용불가하며 데이타베이스 연결이 되지 않았습니다. 유효한 사용자명과 비밀번호를 입력하십시오.',
    'ERR_DB_ADMIN_MSSQL'                => '입력된 데이타베이스 관리자명과 비밀번호가 사용불가하며 데이타베이스 연결이 되지 않았습니다. 유효한 사용자명과 비밀번호를 입력하십시오.',
	'ERR_DB_EXISTS_NOT'					=> '명시된 데이타베이스가 존재하지 않습니다.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> '데이타베이스가 config데이타와 이미 존재합니다. 선택한 데이타베이스 설치하려면 다시 시도후 &#39;내리고 기존 SugarCRM 테이블 다시 만들기&#39; 를 선택하십시오. 업그레이드하려면 관리자 테이블의 업그레이드 마법사를 사용하십시오.',
	'ERR_DB_EXISTS'						=> '입력된 데이타베이스명은 이미 존재합니다. - 같은 이름을 사용할수 없습니다.',
    'ERR_DB_EXISTS_PROCEED'             => '입력된 데이타베이스명은 이미 존재합니다. 1.뒤로 버튼을 누르고 새 데이타베이스명을 선택하거나 2. 다음 버튼을 클릭후 계속 진행하지만 이 데이타베이스에 모든 존재하는 테이블이 없어집니다. 이것은 귀하의 테이블과 데이타는 사라집니다.',
	'ERR_DB_HOSTNAME'					=> '주최자명은 필수 입력항목입니다.',
	'ERR_DB_INVALID'					=> '유효하지 않은 데이타베이스 형식이 선택되었습니다.',
	'ERR_DB_LOGIN_FAILURE'				=> '제공된 데이타베스 주최자, 사용자명 그리고/또는 비밀번호는 사용 불가하며 데이타베이스와의 연결할수 없습니다. 유효한 주최자, 사용자명, 비밀번호를 입력하십시요.',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> '제공된 데이타베스 주최자, 사용자명 그리고/또는 비밀번호는 사용 불가하며 데이타베이스와의 연결할수 없습니다. 유효한 주최자, 사용자명, 비밀번호를 입력하십시요.',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> '제공된 데이타베스 주최자, 사용자명 그리고/또는 비밀번호는 사용 불가하며 데이타베이스와의 연결할수 없습니다. 유효한 주최자, 사용자명, 비밀번호를 입력하십시요.',
	'ERR_DB_MYSQL_VERSION'				=> '귀하의 MySQL버전은 Sugar이 지원할수 없습니다. Sugar어플리케이션에 적합한 버전을 설치해야 합니다. MySQL가 지원하는 Release Notes의 Compatibility Matrix에 문의하십시오.',
	'ERR_DB_NAME'						=> '데이타베이스명은 필수 입력항목입니다.',
	'ERR_DB_NAME2'						=> "데이타베이스명은 &#39;\\&#39;, &#39;/&#39;, 또는 &#39;.&#39; 를 포함할수 없습니다.",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "데이타베이스명은 &#39;\\&#39;, &#39;/&#39;, 또는 &#39;.&#39; 를 포함할수 없습니다.",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "데이타베이스명은 숫자, #&#39;, &#39;@&#39; , &#39;\"&#39;, \"&#39;\", &#39;*&#39;, &#39;/&#39;, &#39;\\&#39;, &#39;?&#39;, &#39;:&#39;, &#39;<&#39;, &#39;>&#39;, &#39;&&#39;, &#39;!&#39;, &#39;-&#39; 과 빈칸을 포함할수 없습니다.",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "데이터베이스 이름은 영숫자 문자와 기호 '#', '_', '-', ':', '.', '/' 또는 '$'만을 포함할 수 있습니다.",
	'ERR_DB_PASSWORD'					=> 'Sugar 데이타베이스 관리자에 입력된 비밀번호가 일치하지 않습니다. 입력란에 같은 비밀번호를 재 입력해 주십시오.',
	'ERR_DB_PRIV_USER'					=> '데이타베이스관리자명을 입력하십시오. 사용자는 데이타베이스에  초기연결해야 합니다.',
	'ERR_DB_USER_EXISTS'				=> 'Sugar 데이타베이스의 사용자명이 이미 존재합니다.- 같은 이름으로 다른 사용자명을 만들수 없습니다. 새로운 사용자명을 입력해주십시오.',
	'ERR_DB_USER'						=> 'Sugar데이타베이스 관리자명에 사용자명을 입력하십시오.',
	'ERR_DBCONF_VALIDATION'				=> '진행전 다음의 오류를 수정하십시요.',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'Sugar 데이타베이스에 입력된 비밀번호가 일치하지 않습니다. 입력칸에 같은 비밀번호를 재입력하십시오.',
	'ERR_ERROR_GENERAL'					=> '다음 오류가 발생했습니다.',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> '파일을 삭제할수 없습니다.',
	'ERR_LANG_MISSING_FILE'				=> '파일을 발견할 수 없습니다: ',
	'ERR_LANG_NO_LANG_FILE'			 	=> '언어상자 파일을 발견할수 없습니다.',
	'ERR_LANG_UPLOAD_1'					=> '전송중 문제가 발생했습니다. 다시 시도해 주십시오.',
	'ERR_LANG_UPLOAD_2'					=> '언어상자는 반드시 ZIP보관해야 합니다.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP가 임시파일을 업그레이드 디렉토리로 옮기지 못했습니다.',
	'ERR_LICENSE_MISSING'				=> '필수 항목이 빠져있습니다.',
	'ERR_LICENSE_NOT_FOUND'				=> '라이센스 파일이 발견되지 않았습니다.',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> '입력된 디렉토리 일지가 유효하지 않습니다.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> '입력된 디렉토리 일지는 쓰기가 가능하지 않습니다.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> '직접 본인지정하시려면 디렉토리 일지가 필요합니다.',
	'ERR_NO_DIRECT_SCRIPT'				=> '직업순서의 직접 진행이 불가합니다.',
	'ERR_NO_SINGLE_QUOTE'				=> '다음 항목은 따옴표를 입력할 수 없습니다:',
	'ERR_PASSWORD_MISMATCH'				=> 'Sugar 관리자에 입력된 비밀번호가 일치하지 앖습니다. 입력칸에 같은 비밀번호를 다시 입력해 주십시오.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'config.php 파일에 쓰기가 불가합니다.',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'config.php파일 제작을 수동으로 계속 진행할수 있으며 정보 구성을 아래  config.php파일에 접합할수 있습니다. 그러나 반드시 다음단계 시작전 config.php 파일을 새로 만들어야 합니다.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'config.php 파일을 새로 만들었습니까?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> '경고 : config.php 파일을 쓸수 없습니다.  존재하는지 다시 확인해 주십시오.',
	'ERR_PERFORM_HTACCESS_1'			=> '쓸수 없습니다',
	'ERR_PERFORM_HTACCESS_2'			=> '파일',
	'ERR_PERFORM_HTACCESS_3'			=> '브라우저를 통한 파일 일지를 보호하려면 귀하의 디렉토리 일지안에 htaccess파일을 새로 만들어야 합니다.',
	'ERR_PERFORM_NO_TCPIP'				=> '인터넷을 연결할수 없습니다. 연결 가능할때 http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register를 방문하여 SugarCRM에 등록해 주십시오. 귀사의 SugarCRM 사용계획에 대해 알려주시면 귀사에 필요한 알맞은 어플리케이션을 전달해드립니다.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> '입력된 세션 디렉토리가 유효하지 않습니다.',
	'ERR_SESSION_DIRECTORY'				=> '입력된 세션 디렉토리가 쓰기가 가능하지 않습니다.',
	'ERR_SESSION_PATH'					=> '본인 지정하려면 세션 통로가 필요합니다.',
	'ERR_SI_NO_CONFIG'					=> '문서 저장에 config_si.php를 포합시키지 않았거나  $sugar_config_si in config.php가 정의되지 않았습니다.',
	'ERR_SITE_GUID'						=> '본인 지정하려면 어플리케이션ID가 필요합니다.',
    'ERROR_SPRITE_SUPPORT'              => "현재 GD library의 위치가 파악되지 않았습니다. 결과적으로 CSS Sprite 기능의 사용이 불가능 합니다.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> '경고 : 귀하의 PHP 구성이 전송을 위해 최소 6MB이상의 파일을 허용하도록 변경되어야 합니다.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => '파일크기 전송',
	'ERR_URL_BLANK'						=> 'Sugar예를 위한 기본 URL을 입력하십시오.',
	'ERR_UW_NO_UPDATE_RECORD'			=> '다음 설치된 기록을 찾을 수 없습니다:',
    'ERROR_FLAVOR_INCOMPATIBLE'         => '전송된 파일은 Sugar의 프로페셔널, 엔터프라이즈, 얼티메이트 에디션에 적용할 수 없습니다.',
	'ERROR_LICENSE_EXPIRED'				=> "오류: 라이센스가",
	'ERROR_LICENSE_EXPIRED2'			=> "~일 전. &#39;\"라이센스 관리\"에 접속하여 관리자 창에 새로운 라이센스 키를 입력하십시오. 라이센스 만료 30일 전에 새 키를 입력하지 않으면 이 어플리케이션의 접속이 제한됩니다.",
	'ERROR_MANIFEST_TYPE'				=> '현재 파일이 반드시 패키지형식을 지정해야합니다.',
	'ERROR_PACKAGE_TYPE'				=> '현재 파일이 확인되지 않은 패키지형식을 포함하고 있습니다.',
	'ERROR_VALIDATION_EXPIRED'			=> "오류: 라이센스가",
	'ERROR_VALIDATION_EXPIRED2'			=> "~일 전. \"라이센스 관리\"에 접속하여 관리자 창에 새로운 라이센스 키를 입력하십시오. 라이센스 만료 30일 전에 새 키를 입력하지 않으면 이 어플리케이션의 접속이 제한됩니다.",
	'ERROR_VERSION_INCOMPATIBLE'		=> '전송된 파일이 현재 버전과 호환되지 않습니다.',

	'LBL_BACK'							=> '뒤로',
    'LBL_CANCEL'                        => '취소',
    'LBL_ACCEPT'                        => '수락합니다.',
	'LBL_CHECKSYS_1'					=> 'SugarCRM 설치를 위해서는 모든 시스템이 아래 초록색 아이템을 확인했는지 재확인하십시오. 빨간색 아이템은 알맞은 단계를 거쳐 수정하십시오.',
	'LBL_CHECKSYS_CACHE'				=> '하위디렉토리의 쓰기가능한 캐시',
    'LBL_DROP_DB_CONFIRM'               => '입력된 데이타베이스명은 이미 존재합니다. 1. 취소버튼 클릭후 데이타베이스명을 선택하거나 2. 허락버튼을 클릭한후 계속 진행합니다. 데이타베이스안의 존재하는 모든 테이블이 없어집니다. 이는 모든 테이블과 모든 기존 존재 데이타가 사라집니다.',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP가 전화시간 초과 관련기능을 정지를 허용합니다.',
    'LBL_CHECKSYS_COMPONENT'			=> '구성 내용',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> '선택사항 내용',
	'LBL_CHECKSYS_CONFIG'				=> '쓰기 가능한 SugarCRM 구성파일 (config.php)',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> '쓰기 가능한 SugarCRM 구성파일 (config_override.php)',
	'LBL_CHECKSYS_CURL'					=> 'cURL 모듈',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => '세션 저장경로 설정',
	'LBL_CHECKSYS_CUSTOM'				=> '쓰기가능한 고객 디렉토리',
	'LBL_CHECKSYS_DATA'					=> '쓰기 가능한 데이타 하위 디렉토리',
	'LBL_CHECKSYS_IMAP'					=> 'IMAP 모듈',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Quotes GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'MB Strings 모듈',
	'LBL_CHECKSYS_MEM_OK'				=> '네(제한 없음)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> '네(무제한)',
	'LBL_CHECKSYS_MEM'					=> 'PHP 메모리 제한',
	'LBL_CHECKSYS_MODULE'				=> '쓰기 가능한 모듈 하위 디렉토리와 파일',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'MySQL 버전',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> '사용 불가',
	'LBL_CHECKSYS_OK'					=> '예',
	'LBL_CHECKSYS_PHP_INI'				=> 'PHP 구성파일 (php.ini)의 위치:',
	'LBL_CHECKSYS_PHP_OK'				=> '확인',
	'LBL_CHECKSYS_PHPVER'				=> 'PHP 버전',
    'LBL_CHECKSYS_IISVER'               => 'IIS 버전',
    'LBL_CHECKSYS_FASTCGI'              => '빠른CGI',
	'LBL_CHECKSYS_RECHECK'				=> '재확인',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'PHP 안전모드 꺼짐',
	'LBL_CHECKSYS_SESSION'				=> '쓰기가능한 세션 저장 경로',
	'LBL_CHECKSYS_STATUS'				=> '상태',
	'LBL_CHECKSYS_TITLE'				=> '시스템 확인 수락',
	'LBL_CHECKSYS_VER'					=> '발견',
	'LBL_CHECKSYS_XML'					=> 'XML 분석',
	'LBL_CHECKSYS_ZLIB'					=> 'ZLIB 압축 모듈',
	'LBL_CHECKSYS_ZIP'					=> 'ZIP 처리 모듈',
    'LBL_CHECKSYS_BCMATH'				=> '임의 정말 수학 모듈',
    'LBL_CHECKSYS_HTACCESS'				=> '.htaccess에 대한 재정의 설정을 허용합니다.',
    'LBL_CHECKSYS_FIX_FILES'            => '진행하기전 다음 파일이나 디렉토리를 수정하십시오,',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => '진행하기전 다음 모듈 디렉토리와  그 아래 파일을 수정하십시오',
    'LBL_CHECKSYS_UPLOAD'               => '쓰기 가능한 디렉토리 전송',
    'LBL_CLOSE'							=> '닫기',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> '생성 완료',
	'LBL_CONFIRM_DB_TYPE'				=> '데이타베이스 형식',
	'LBL_CONFIRM_DIRECTIONS'			=> '아래 설정을 확인해주십시오. 변경하려면 &#39;뒤로&#39;를 클릭해 편집하고 아니면 설치 시작을 위한 &#39;다음&#39;을 클릭하십시오.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> '라이센스 정보',
	'LBL_CONFIRM_NOT'					=> '안하기',
	'LBL_CONFIRM_TITLE'					=> '설정 확인',
	'LBL_CONFIRM_WILL'					=> '하기',
	'LBL_DBCONF_CREATE_DB'				=> '데이타 새로 만들기',
	'LBL_DBCONF_CREATE_USER'			=> '사용자 새로 만들기',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> '주의 : 이 상자 선택시 모든 Sugar 데이타가 삭제됩니다.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> '기존 Sugar 테이블을 내리고 다시 만들기를 하시겠습니까?',
    'LBL_DBCONF_DB_DROP'                => '테이블 내리기',
    'LBL_DBCONF_DB_NAME'				=> '데이타베이스명',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Sugar 데이타베이스 사용자 비밀번호',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Sugar 데이타베이스 사용자 비밀번호 재입력',
	'LBL_DBCONF_DB_USER'				=> 'Sugar데이타베이스 사용자명',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Sugar데이타베이스 사용자명',
    'LBL_DBCONF_DB_ADMIN_USER'          => '데이타베이스 관리자명',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => '데이타베이스 관리자 비밀번호',
	'LBL_DBCONF_DEMO_DATA'				=> '시험데이타로 데이타베이스 채우기',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => '시험데이타 선택',
	'LBL_DBCONF_HOST_NAME'				=> '주최자명',
	'LBL_DBCONF_HOST_INSTANCE'			=> '주최자 예',
	'LBL_DBCONF_HOST_PORT'				=> '포트',
    'LBL_DBCONF_SSL_ENABLED'            => 'SSL 연결 사용',
	'LBL_DBCONF_INSTRUCTIONS'			=> '아래 데이타베이스 구성 정보를 입력하십시오. 입력 내용이 명확하지 않다면 초기설정 가치를 사용하십시오.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> '시험 데이타에 멀티 바이트 원문을 사용하시겠습니까?',
    'LBL_DBCONFIG_MSG2'                 => '웹서버나 기기(주최)명이 localhost 또는 www.mydomain.com에 위치하고 있습니다.',
    'LBL_DBCONFIG_MSG3'                 => '설치하려는 데이타베이스명은 Sugar예시 데이타를 포함합니다.',
    'LBL_DBCONFIG_B_MSG1'               => '데이타베이스 테이블, 사용자 그리고 누가 데이타베이스를 쓸수있는지의 데이타베이스 관리자의 사용자명과 비밀번호는 Sugar데이타베이스 설정을 위해 필요합니다.',
    'LBL_DBCONFIG_SECURITY'             => '보안목적을 위해 Sugar데이타베이스에 연결할 유일한 데이타베이스 사용자를 명시할수 있습니다. 이 사용자는 쓰기와 이 예시를 위해 만들어질 Sugar 데이타베이스에 데이타를 복구가 가능합니다.',
    'LBL_DBCONFIG_AUTO_DD'              => '해주십시오.',
    'LBL_DBCONFIG_PROVIDE_DD'           => '기존 사용자 입력',
    'LBL_DBCONFIG_CREATE_DD'            => '새로 만들기 사용자 정의',
    'LBL_DBCONFIG_SAME_DD'              => '관리자와 동일',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => '전체 문장 검색',
    'LBL_FTS_INSTALLED'                 => '설치 완료',
    'LBL_FTS_INSTALLED_ERR1'            => '전체 문장검색 적용이 설치되지 않았습니다.',
    'LBL_FTS_INSTALLED_ERR2'            => '설치를 계속할수 있지만 전체 문장검색 기능의 사용은 불가합니다. 사용법은 데이타베이스 서버 설치 가이드를 참조하거나 관리자에 문의하십시오.',
	'LBL_DBCONF_PRIV_PASS'				=> '특전 데이타베이스 사용자 비밀번호',
	'LBL_DBCONF_PRIV_USER_2'			=> '위 데이타베이스 계정은 특전 사용자입니까?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> '특전 데이타베이스 사용자는 새로운 데이타베이스를 만들기나 테이블 내리기/만들기 그리고 사용자 새로 만들기를 위해 반드시 적절한 허가가 필요합니다.  이 특전 데이타베이스 사용자는 설치가 진행되는 동안 필요로하는 과제 수행을 위해 사용됩니다.',
	'LBL_DBCONF_PRIV_USER'				=> '특전 데이타베이스 사용자명',
	'LBL_DBCONF_TITLE'					=> '데이타 베이스 구성',
    'LBL_DBCONF_TITLE_NAME'             => '데이타베이스명 입력',
    'LBL_DBCONF_TITLE_USER_INFO'        => '데이타베이스 사용자정보 입력',
	'LBL_DISABLED_DESCRIPTION_2'		=> '변경완료후 설치를 시작하려면 아래 시작버튼을 클릭하십시오. 설치 완료후 &#39;installer_locked&#39; 를 &#39;true&#39;.로 변경하십시오.',
	'LBL_DISABLED_DESCRIPTION'			=> '이 설치는 이미 진행이 되었습니다. 안전을 위해 이번 진행은 중지되었습니다. 다시 진행을 원하시면config.php 로 가서  변동가능한 &#39;installer_locked&#39; 를 추가후 &#39;false&#39;로 설정하십시오. 설정은 다음과 같아야 합니다.',
	'LBL_DISABLED_HELP_1'				=> '설치도움을 위해서는 SugarCRM를 방문하십시오.',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> '지원 포럼',
	'LBL_DISABLED_TITLE_2'				=> 'SugarCRM 설치가 중지되었습니다.',
	'LBL_DISABLED_TITLE'				=> 'SugarCRM 설치가 중지되었습니다.',
	'LBL_EMAIL_CHARSET_DESC'			=> '가장 기본 문자가 설정되었습니다.',
	'LBL_EMAIL_CHARSET_TITLE'			=> '발신 이메일 설정',
    'LBL_EMAIL_CHARSET_CONF'            => '발신이메일 문자 설정',
	'LBL_HELP'							=> '도움말',
    'LBL_INSTALL'                       => '설치',
    'LBL_INSTALL_TYPE_TITLE'            => '선택사항 설치',
    'LBL_INSTALL_TYPE_SUBTITLE'         => '설치 형식 선택',
    'LBL_INSTALL_TYPE_TYPICAL'          => '기본 설치',
    'LBL_INSTALL_TYPE_CUSTOM'           => '주문 설치',
    'LBL_INSTALL_TYPE_MSG1'             => '키는 일반 어플리케이션 기능을 위해 필요합니다만 설치가 필요하지는 않습니다. 이번에는 키를 입력할 필요가 없지만 어플리케이션을 설치한 후에는 키를 입력해야 합니다.',
    'LBL_INSTALL_TYPE_MSG2'             => '설치를 위한 최소의 정보가 필요합니다. 신규사용자에게 권장합니다.',
    'LBL_INSTALL_TYPE_MSG3'             => '설치하는동안 설정할 추가항목을 입력하십시오. 이러한 항목의 대부분이 관리자화면의 설치후에 사용가능합니다. 고급사용자에 권장됩니다.',
	'LBL_LANG_1'						=> '초기설정 언어(미국-영어)외에 Sugar의 언어를 사용하려면 지금 언어상자를 전송해 설치할수 있습니다.<br />Sugar어플리케이션에서 언어 전송및 설치도 가능합니다. 이 단계를 생략하려면 다음버튼을 클릭하십시오.',
	'LBL_LANG_BUTTON_COMMIT'			=> '설치',
	'LBL_LANG_BUTTON_REMOVE'			=> '제거하기',
	'LBL_LANG_BUTTON_UNINSTALL'			=> '설치해제',
	'LBL_LANG_BUTTON_UPLOAD'			=> '전송',
	'LBL_LANG_NO_PACKS'					=> '없음',
	'LBL_LANG_PACK_INSTALLED'			=> '다음 언어상자가 설치되었습니다.',
	'LBL_LANG_PACK_READY'				=> '다음 언어상자의 설치가 준비되었습니다.',
	'LBL_LANG_SUCCESS'					=> '언어상자가 성공적으로 전송되었습니다.',
	'LBL_LANG_TITLE'			   		=> '언어상자',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'Sugar를 지금 설치합니다. 이는 수 분이 소요됩니다.',
	'LBL_LANG_UPLOAD'					=> '언어상자 전송',
	'LBL_LICENSE_ACCEPTANCE'			=> '라이센스 수락',
    'LBL_LICENSE_CHECKING'              => '시스템 적용 확인중',
    'LBL_LICENSE_CHKENV_HEADER'         => '환경 확인중',
    'LBL_LICENSE_CHKDB_HEADER'          => 'DB 검증, FTS 자격.',
    'LBL_LICENSE_CHECK_PASSED'          => '시스템 적용 확인이 통과했습니다.',
    'LBL_LICENSE_REDIRECT'              => '새로 전송중',
	'LBL_LICENSE_DIRECTIONS'			=> '라이센스 정보를 가지고 있다면 아래 필드에 입력하십시오.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> '다운로드 키 입력',
	'LBL_LICENSE_EXPIRY'				=> '만료일',
	'LBL_LICENSE_I_ACCEPT'				=> '수락합니다.',
	'LBL_LICENSE_NUM_USERS'				=> '사용자 수',
	'LBL_LICENSE_PRINTABLE'				=> '출력 화면',
    'LBL_PRINT_SUMM'                    => '출력 요약',
	'LBL_LICENSE_TITLE_2'				=> 'SugarCRM 라이센스',
	'LBL_LICENSE_TITLE'					=> '라이센스 정보',
	'LBL_LICENSE_USERS'					=> '라이센스 사용자',

	'LBL_LOCALE_CURRENCY'				=> '화폐 설정',
	'LBL_LOCALE_CURR_DEFAULT'			=> '화폐 초기설정',
	'LBL_LOCALE_CURR_SYMBOL'			=> '통화 기호',
	'LBL_LOCALE_CURR_ISO'				=> '화폐 코드',
	'LBL_LOCALE_CURR_1000S'				=> '천단위 분리기',
	'LBL_LOCALE_CURR_DECIMAL'			=> '소수점 분리기',
	'LBL_LOCALE_CURR_EXAMPLE'			=> '예시',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> '유효 숫자',
	'LBL_LOCALE_DATEF'					=> '날짜형식 초기설정',
	'LBL_LOCALE_DESC'					=> '명시된 현지 설정은 전세계 Sugar 예시에 반영됩니다.',
	'LBL_LOCALE_EXPORT'					=> '가져오기/보내기 문자 설정',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> '경계기호 보내기',
	'LBL_LOCALE_EXPORT_TITLE'			=> '가져오기/보내기 설정',
	'LBL_LOCALE_LANG'					=> '언어 초기설정',
	'LBL_LOCALE_NAMEF'					=> '이름 형식 초기설정',
	'LBL_LOCALE_NAMEF_DESC'				=> 's-경칭 f-이름 l-성',
	'LBL_LOCALE_NAME_FIRST'				=> '길동',
	'LBL_LOCALE_NAME_LAST'				=> '홍',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Dr.',
	'LBL_LOCALE_TIMEF'					=> '시간 형식 초기설정',
	'LBL_LOCALE_TITLE'					=> '현지 설정',
    'LBL_CUSTOMIZE_LOCALE'              => '주문형 현지 설정',
	'LBL_LOCALE_UI'						=> '사용자 인터페이스',

	'LBL_ML_ACTION'						=> '액션',
	'LBL_ML_DESCRIPTION'				=> '설명:',
	'LBL_ML_INSTALLED'					=> '설치된 날짜',
	'LBL_ML_NAME'						=> '이름',
	'LBL_ML_PUBLISHED'					=> '발표 날짜',
	'LBL_ML_TYPE'						=> '종류',
	'LBL_ML_UNINSTALLABLE'				=> '설치 불가능',
	'LBL_ML_VERSION'					=> '버전',
	'LBL_MSSQL'							=> 'SQL 서버',
	'LBL_MSSQL_SQLSRV'				    => 'SQL 서버 (PHP를 위한 Microsoft SQL 서버 드라이버)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (mysqli extension)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> '다음',
	'LBL_NO'							=> '아니요',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> '관리자 비밀번호 설정 사이트',
	'LBL_PERFORM_AUDIT_TABLE'			=> '청강 가능',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Sugar 구성 파일 새로 만들기',
	'LBL_PERFORM_CREATE_DB_1'			=> '데이타베이스 새로 만들기',
	'LBL_PERFORM_CREATE_DB_2'			=> '<b>on</b>',
	'LBL_PERFORM_CREATE_DB_USER'		=> '데이타베이스 사묭자명과 비밀번호 새로 만들기',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Sugar데이타 초기설정 새로 만들기',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> '현지 주최자의 데이타베이스 사묭자명과 비밀번호 새로 만들기',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Sugar 관계테이블 새로 만들기',
	'LBL_PERFORM_CREATING'				=> '새로 만들기',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> '초기 보고서 새로 만들기',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> '초기 예정 작업 새로 만들기',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> '초기설정 삽입하기',
	'LBL_PERFORM_DEFAULT_USERS'			=> '초기 사용자 새로 만들기',
	'LBL_PERFORM_DEMO_DATA'				=> '시범 데이타로 데이타베이스 테이블 채우기',
	'LBL_PERFORM_DONE'					=> '완료',
	'LBL_PERFORM_DROPPING'				=> '내리기',
	'LBL_PERFORM_FINISH'				=> '완료',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> '라이센스 정보 업데이트',
	'LBL_PERFORM_OUTRO_1'				=> 'Sugar 설정',
	'LBL_PERFORM_OUTRO_2'				=> '지금 완료했습니다.',
	'LBL_PERFORM_OUTRO_3'				=> '최종 시간',
	'LBL_PERFORM_OUTRO_4'				=> '초',
	'LBL_PERFORM_OUTRO_5'				=> '사용된 대략의 메모리',
	'LBL_PERFORM_OUTRO_6'				=> 'bytes.',
	'LBL_PERFORM_OUTRO_7'				=> '현재 귀하의 시스템은 설치완료 되었으며 사용을 위해 구성되었습니다',
	'LBL_PERFORM_REL_META'				=> '관계 변화',
	'LBL_PERFORM_SUCCESS'				=> '성공',
	'LBL_PERFORM_TABLES'				=> 'Sugar 어플리케이션 테이블, 청강 테이블과 관계 변화 데이타 새로 만들기',
	'LBL_PERFORM_TITLE'					=> '수행 설정',
	'LBL_PRINT'							=> '출력하기',
	'LBL_REG_CONF_1'					=> 'SugarCRM의 상품 발표, 훈련뉴스, 특별 제안과 특별 행사 초대를 받기 위해서는 아래 간단 목록을 작성하십시오. 저희는 외부인의 정보수집을 위한 판매,공유 또는 위탁을 하지않습니다.',
	'LBL_REG_CONF_2'					=> '귀하의 이름과 이메일 주소는 등록을 위한 필드에만 필요합니다. 모든 다른 필드는 선택사항이나 작성하면 매우 유용합니다. 저희는 외부인의 정보수집을 위한 판매,공유 또는 위탁을 하지않습니다.',
	'LBL_REG_CONF_3'					=> '등록해주셔서 감사합니다. SugarCRM에 로그인하려면 완료버튼을 클릭하십시오. 처음 접속시에는  2번째 단계에서 입력한 관리자 사용자명과 비밀번호를 이용해야 합니다.',
	'LBL_REG_TITLE'						=> '등록',
    'LBL_REG_NO_THANKS'                 => '아니오. 괜찮습니다.',
    'LBL_REG_SKIP_THIS_STEP'            => '이 단계 생략',
	'LBL_REQUIRED'						=> '필수항목 필드',

    'LBL_SITECFG_ADMIN_Name'            => 'Sugar 어플리케이션 관리자명',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Sugar 관리자 비밀번호 재 입력',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> '주의 : 이것은 이전 설치된 관리자 비밀번호를 무효화합니다.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Sugar 관리자 비밀번호',
	'LBL_SITECFG_APP_ID'				=> '어플리케이션 ID',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> '선택했다면 반드시 자동 생성된 ID 무효화하기위한 어플리케이션 ID를 입력해야 합니다. ID는 하나의 Sugar 예시 세션이 다른 예시에 사용되지 않게 확인해야 합니다. 만약 Sugar설치 집단이 있다면 반드시 같은 어플리케이션 ID를 공유해야 합니다.',
	'LBL_SITECFG_CUSTOM_ID'				=> '본인 어플리케이션 ID를 입력하십시오.',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> '선택했다면 반드시 Sugar 일지의 초기 디렉토리를 덮어쓸 특정 디렉토리 일지를 명시해야 합니다.  일지파일이 어디에 위치해있든 웹 브라우저를 통한 접속은 an .htaccess redirect에 의해 제한됩니다.',
	'LBL_SITECFG_CUSTOM_LOG'			=> '고객 일지 디렉토리 사용',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> '선택시 반드시 Sugar세션 정보 저장을 위한 안전한 폴더를 입력해야 합니다. 이는 세션 데이타가 외부 공유 서버에 노출되는것을 방지합니다.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Sugar의 고객 세션 디렉토리 사용',
	'LBL_SITECFG_DIRECTIONS'			=> '아래 사이트 구성정보를 입력하십시오. 필드에 확신이 없다면 초기설정 가치 사용을 권장합니다.',
	'LBL_SITECFG_FIX_ERRORS'			=> '진행전 다음 오류를 수정하십시오.',
	'LBL_SITECFG_LOG_DIR'				=> '일지 디렉토리',
	'LBL_SITECFG_SESSION_PATH'			=> '세션 디렉토리 경로',
	'LBL_SITECFG_SITE_SECURITY'			=> '보안 사항 선택',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> '선택했다면 시스템이 어플리케이션의 업데이트 버전을 주기적으로 확인합니다.',
	'LBL_SITECFG_SUGAR_UP'				=> '자동으로 업데이트를 확인하시겠습니까?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Sugar 업데이트 구성',
	'LBL_SITECFG_TITLE'					=> '사이트 구성',
    'LBL_SITECFG_TITLE2'                => '관리자 신원',
    'LBL_SITECFG_SECURITY_TITLE'        => '사이트 보안',
	'LBL_SITECFG_URL'					=> 'Sugar 예시 URL',
	'LBL_SITECFG_USE_DEFAULTS'			=> '초기설정을 사용하시겠습니까?',
	'LBL_SITECFG_ANONSTATS'             => '익명 사용 통계를 보내시겠습니까?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => '선택했다면 Sugar에서는 귀하의 시스템이 새 버전을 확인할때마다 SugarCRM Inc로의 익명의 통계를 전송합니다. 이 정보는 저희의 품질향상을 위한 지도와 어플리케이션의 이용사례의 이해를 돕습니다.',
    'LBL_SITECFG_URL_MSG'               => '설치후 Sugar 예시에 접속하기위한 URL을 입력하십시오. 이 URL은 또한 Sugar어플리케이션 페이지의 URL 기반으로서 사용됩니다. URL은 반드시 웹서버나 기기명 또는 IP주소를 포함해야 합니다.',
    'LBL_SITECFG_SYS_NAME_MSG'          => '시스템명을 입력하십시오. 이 이름은 사용자가 Sugar 어플리케이션 방문시 브라우져 제목창에 진열됩니다.',
    'LBL_SITECFG_PASSWORD_MSG'          => '설치후 Sugar예시창에 접속하려면 SUgar 관리자 사용자를 이용해야 합니다. 관리자 사용자 비밀번호를 입력하십시오. 비밀번호는 첫 로그인후 변경할수 있습니다.',
    'LBL_SITECFG_COLLATION_MSG'         => '귀하의 시스템을 위한 대조(분류) 설정을 선택하십시오. 이 설정은 사용 언어를 위한 테이블을 생성합니다. 언어가 특수 설정을 필요로 하지않다면 초기 설정을 이용하십시오.',
    'LBL_SPRITE_SUPPORT'                => 'Sprite 지원',
	'LBL_SYSTEM_CREDS'                  => '시스템 자격',
    'LBL_SYSTEM_ENV'                    => '시스템 환경',
	'LBL_START'							=> '시작',
    'LBL_SHOW_PASS'                     => '비밀번호 보여주기',
    'LBL_HIDE_PASS'                     => '비밀번호 숨기기',
    'LBL_HIDDEN'                        => '숨김',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> '언어를 선택하십시오',
	'LBL_STEP'							=> '단계',
	'LBL_TITLE_WELCOME'					=> 'SugarCRM 에 오신것을 환영합니다.',
	'LBL_WELCOME_1'						=> '이 설치장치는 SugarCRM데이타베이스 테이블을 새로 만들며 시작하기 위해 필요한 변동 가능한 구성요소를 설정합니다. 전체 과정은 약 10분이 소요됩니다.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => '설치하시겠습니까?',
    'REQUIRED_SYS_COMP' => '필요한 시스템 구성내용',
    'REQUIRED_SYS_COMP_MSG' =>
                    '시작하기전 다음 시스템 구성물이 지원되는 버전인지 확인하십시오.<br />-데이타베이스/데이타베이스 관리 시스템(예: MySQL, SQL Server, Oracle, DB2) <br />-웹서버(Apache, IIS) <br />설치주인 Sugar버전의 적합한 시스템 구성물을 위한 발매 노트적합성Matrix 협의하십시오.',
    'REQUIRED_SYS_CHK' => '첫 시스템 확인',
    'REQUIRED_SYS_CHK_MSG' =>
                    '설치진행을 시작할때 시스템확인은 시스템이 올바르게 형성되고 필요한 모든 구성물이 성공적으로 설치되었는지의 확인을 위한 Sugar파일이 배치된 웹서버에 실행됩니다.  <br />시스템은 다음의 내용을 확인합니다.<br />PHP버전-어플리케이션에 적합해야합니다.<br />변이성 세션-올바르게 작동해야합니다.<br />MB Strings-반드시 php.ini에 설치되고 작동해야합니다.<br />데이타베이스 지원- SQL 서버, Oracle, 또는 DB2를 위해 존재해야합니다.<br />Config.php -반드시 존재하고 쓰기가능을 위한 올바를 허가를 지녀야합니다.<br />다음 Sugar파일은 반드시 쓰기가 가능해야합니다.<br />고객/캐시/모듈/전송',
    'REQUIRED_INSTALLTYPE' => '전형적 또는 고객 주문형 설치',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "시스템확인 실행후 일반 또는 주문형설치를 선택할수 있습니다.<br />일반 또는 주문형설치를 위해서는 다음사항을 인지해야합니다.<br /><br />데이타베이스 유형은 Sugar데이타에 장소를 제공합니다.<br />적합한 데이타베이스 유형:MySQL, MS SQL Server, Oracle, DB2.<br /><br />데이타베이스가 위치할 웹서버명 또는 (주최)기기<br />데이타베이스가 Sugar파일로서 귀하의 현지컴퓨터나 같은 웹서버에 있으면 이것이 현지주최가 될수있습니다.<br /><br />Sugar데이타의 장소로 사용하고자하는 테이타베이스의 이름<br />사용하고자 하는 데이타베이스가 이미 존재할수 있습니다. 기존 데이타베이스의 이름을 입력학면 Sugar데이타베이스 개요가 정의 설치시 데이타베이스의 테이블이 내려집니다.<br />만약 기존 데이타베이스가 없다면 입력한 이름은 설치중 예시를 위해 만들어진 신규 데이타베이스를 위해 사용됩니다.<br /><br />데이타베이스 관리자명과 비밀번호<br />데이타베이스 관리자는 테이블과 사용자를 만들고 데이타베이스에 쓰기가 가능해야합니다. <br />이 목적을 위한 새로운 데이타베이스 사용자를 만들면 설치가 진행되는동안 신규사용자명과 비밀번호를 입력할수 있게되며 사용자가 새로 만들어집니다.<br /><br />주문형설정을 위해서는 다음의 정보를 인지해야합니다.<br />설치후 SUgar예시에 접속을 위해 사용될 URL은 웹서버나 기기명 또는 IP주소를 포함해야합니다.<br />(선택사항) 세션 데이타가 공유 서버에 노출되는것을 예방하기 위한 Sugar정보 고객세션디렉토리를 사용하려면, 세션 디렉토리 경로 <br />(선택사항)Sugar 일지의 초기설정 디렉토리를 덮어쓰려면, 고객일지 디렉토리 경로 <br />(선택사항)Sugar 예시 세션에 다른 예시에 의해 사용되지 않음을 확인하는 자동생성 ID를 덮어쓰려면, 어플리케이션 ID<br />문자 설정, 현장에서 가장 일반적으로 사용됨",
    'LBL_WELCOME_PLEASE_READ_BELOW' => '설치를 진행하기전 반드시 다음의 중요정보를 참조하십시오. 이 정보는  이 어플리케이션의 설치준비가 되었는지 결정하는데 도움을 줍니다.',


	'LBL_WELCOME_2'						=> '설치 관련 자료는 <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>를 방문하시기 바랍니다.<BR><BR> 설치와 관련하여 SugarCRM 지원 기술자에게 문의하시려면, <a target="_blank" href="http://support.sugarcrm.com">SugarCRM 지원 포탈</a> 에 로그인하셔서 지원요청서를 제출하십시오.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '언어를 선택하십시오',
	'LBL_WELCOME_SETUP_WIZARD'			=> '설정 마법사',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'SugarCRM 에 오신것을 환영합니다.',
	'LBL_WELCOME_TITLE'					=> 'SugarCRM 설정 마법사',
	'LBL_WIZARD_TITLE'					=> 'Sugar 설정 마법사',
	'LBL_YES'							=> '예',
    'LBL_YES_MULTI'                     => '예',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> '작업흐름 과제 진행',
	'LBL_OOTB_REPORTS'		=> '과제일정 보고서 만들기 실행',
	'LBL_OOTB_IE'			=> '수신 편지함 확인',
	'LBL_OOTB_BOUNCE'		=> '매일 저녁 반송 캠페인 이메일 처리 실행',
    'LBL_OOTB_CAMPAIGN'		=> '매일 저녁 대용량 이메일 캠페인 실행',
	'LBL_OOTB_PRUNE'		=> '매달 1일 Prune 데이타베이스',
    'LBL_OOTB_TRACKER'		=> 'Prune 추적 테이블',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => '이메일 공지 알림 실행',
    'LBL_UPDATE_TRACKER_SESSIONS' => '추적장치 업데이트-세션 테이블',
    'LBL_OOTB_CLEANUP_QUEUE' => '대기중 작업 비우기',


    'LBL_FTS_TABLE_TITLE'     => '전체문장 검색 설정 공급',
    'LBL_FTS_HOST'     => '주최자',
    'LBL_FTS_PORT'     => '포트',
    'LBL_FTS_TYPE'     => '검색엔진 형식',
    'LBL_FTS_HELP'      => '전체 문장검색 장치 작동을 위해서는 검색엔진 형식을 선택한후 검색엔진주최자와 포트를 입력하십시오. Sugar는 확장검색 엔진을 내장 지원을 포함하고 있습니다.',
    'LBL_FTS_REQUIRED'    => '융통성 있는 검색을 요구합니다.',
    'LBL_FTS_CONN_ERROR'    => '전문 검색 서버에 연결할 수 없습니다. 설정 내용을 확인하십시오.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => '사용 가능한 전문 검색 서버 버전이 없습니다. 설정 내용을 확인하십시오.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => '지원하지 않는 버전의 엘라스틱 서치입니다. %s 버전을 이용하십시오.',

    'LBL_PATCHES_TITLE'     => '최신 패치 설치',
    'LBL_MODULE_TITLE'      => '언어 상자 설치',
    'LBL_PATCH_1'           => '이 단계를 생략하려면 다음을 클릭하십시오.',
    'LBL_PATCH_TITLE'       => '시스템 패치',
    'LBL_PATCH_READY'       => '다음 패치는 설치준비가 완료되었습니다.',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "SugarCRM은 이 웹서버에 연결동안 중요정보 저장을 위한 PHP세션에 의존합니다. 귀하의 PHP설치가 정확한 구성 세션정보를 포함하지 않습니다. 흔한 구성오류는 유효한 디렉토리를 가리키지 않는 지시어 &#39;session.save_path&#39; 입니다.",
	'LBL_SESSION_ERR_TITLE'				=> 'PHP세션 구성 오류',
	'LBL_SYSTEM_NAME'=>'시스템명',
    'LBL_COLLATION' => '대조 설정',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Sugar 예를 위한 시스템명을 입력하십시오',
	'LBL_PATCH_UPLOAD' => '현 컴퓨터에서 패치 파일을 선택하십시오',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'PHP 역방향 적합성 모드가 작동중입니다. 계속 진행하려면 zend.ze1_compatibility_mode 를 작동을 중지하십시오.',

    'meeting_notification_email' => array(
        'name' => '회의 알림 이메일',
        'subject' => 'SugarCRM 회의-$event_name',
        'description' => '이 템플릿은 시스템이 회의 알림을 사용자에게 전송시 사용됩니다.',
        'body' => '<div>
	<p>받는 사람: $assigned_user</p>

	<p>$assigned_by_user 님이 회의에 초대하셨습니다</p>

	<p>제목: $event_name<br/>
	시작일: $start_date<br/>
	종료일: $end_date</p>

	<p>설명: $description</p>

	<p>회의 수락:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>회의 잠정 수락:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>회의 거부:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            '받는 사람: $assigned_user

$assigned_by_user 님이 회의에 초대하셨습니다

제목: $event_name
시작일: $start_date
종료일: $end_date

설명: $description

회의 수락:
<$accept_link>

회의 잠정 수락
<$tentative_link>

회의 거부
<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => '전화 알림 이메일',
        'subject' => 'SugarCRM 전화 - $event_name',
        'description' => '이 템플릿은 시스템이 전화 알림을 사용자에게 전송시 사용됩니다.',
        'body' => '<div>
	<p>받는 사람: $assigned_user</p>

	<p>$assigned_by_user 님이 전화에 초대하셨습니다</p>

	<p>제목: $event_name<br/>
	시작일: $start_date<br/>
	기간: $hoursh, $minutesm</p>

	<p>설명: $description</p>

	<p>전화 수락:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>전화 잠정 수락:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>전화 거부:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            '받는 사람: $assigned_user

$assigned_by_user 님이 전화에 초대하셨습니다

제목: $event_name
시작일: $start_date
기간: $hoursh, $minutesm

설명: $description

전화 수락:
<$accept_link>

전화 잠정 수락
<$tentative_link>

전화 거부
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => '할당 알림 이메일',
        'subject' => 'SugarCRM - 할당된 $module_name ',
        'description' => '이 템플릿은 시스템이 할당된 작업을 사용자에게 전송시 사용됩니다.',
        'body' => '<div>
<p>$assigned_by_user 님이 $module_name을(를) $assigned_user 님에게 할당했습니다.</p>

<p>이 $module_name을(를) 확인할 수 있는 곳:<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user 님이 $module_name을(를) $assigned_user 님에게 할당했습니다.

이 $module_name을(를) 확인할 수 있는 곳:
<$module_link>',
    ),

    'scheduled_report_email' => array(
        'name' => '보고서 일정 이메일',
        'subject' => '보고서 일정: $report_time의 report_name',
        'description' => '이 템플릿은 시스템이 보고서 일정을 사용자에게 전송시 사용됩니다.',
        'body' => '<div>
<p>$assigned_user 님, 안녕하세요.</p>
<p>첨부파일은 자동으로 생성된 보고서입니다.</p>
<p>보고서 이름: $report_name</p>
<p>보고서 실행 날짜 및 시간: $report_time</p>
</div>',
        'txt_body' =>
            '$assigned_user 님, 안녕하세요.

첨부파일은 자동으로 생성된 보고서입니다.

보고서 이름: $report_name

보고서 실행 날짜 및 시간: $report_time',
    ),

    'comment_log_mention_email' => [
        'name' => '시스템 코멘트 로그 이메일 알림',
        'subject' => 'SugarCRM - $initiator_full_name 님이 $singular_module_name에서 나를 언급했습니다',
        'description' => '이 템플릿은 코멘트 로그 섹션에서 태그된 사용자에게 이메일 알림을 보내는 데 사용됩니다.',
        'body' =>
            '<div>
                <p>다음 레코드의 코멘트 로그에 언급됨:  <a href="$record_url">$record_name</a></p>
                <p>Sugar에 로그인하여 코멘트를 확인하십시오.</p>
            </div>',
        'txt_body' =>
'다음 레코드의 코멘트 로그에 언급됨: $record_name
                Sugar에 로그인하여 코멘트를 확인하십시오.',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => '새 계정 정보',
        'description' => '이 템플릿은 시스템 관리자가 사용자에 새 비밀번호 전송시 사용됩니다.',
        'body' => '귀하의 계정 사용자명과 임시 비밀번호입니다 : 사용자명 : $contact_user_user_name 비밀번호 : $contact_user_user_hash $config_site_url. 위 비밀번호로 로그인 후에 본인만의 비밀번호로 재설정하십시오.',
        'txt_body' =>
'귀하의 계정 사용자명과 임시 비밀번호입니다 : 사용자명 : $contact_user_user_name 비밀번호 : $contact_user_user_hash $config_site_url. 위 비밀번호로 로그인 후에 본인만의 비밀번호로 재설정하십시오.',
        'name' => '자동 생성된 이메일 비밀번호',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => '귀하의 계정 비밀번호를 재설정하십시오.',
        'description' => "이 템플릿은 계정 비밀번호 재설정시 클릭할 링크를 사용자에게 전송할때 사용됩니다.",
        'body' => '최근 귀하의 계정 비밀번호 재설정을 위한 contact_user_pwd_last_changed을 요청하였습니다. 아래 링크를 클릭하여 비밀번호를 재설정하십시요. :$contact_user_link_guid',
        'txt_body' =>
'최근 귀하의 계정 비밀번호 재설정을 위한 contact_user_pwd_last_changed을 요청하였습니다. 아래 링크를 클릭하여 비밀번호를 재설정하십시요. :$contact_user_link_guid',
        'name' => '이메일 비밀번호 분실',
        ),

'portal_forgot_password_email_link' => [
    'name' => '포탈 비밀번호 분실 이메일',
    'subject' => '귀하의 계정 비밀번호를 재설정하십시오.',
    'description' => '이 템플릿은 포탈 계정 비밀번호 재설정시 클릭할 링크를 사용자에게 전송할때 사용됩니다.',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>귀하는 최근 귀하의 계정 비밀번호 재설정을 요청하셨습니다. </p><p>아래 링크를 클릭하여 비밀번호를 재설정 하십시오.</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'
    귀하는 최근 귀하의 계정 비밀번호 재설정을 요청하셨습니다.

    아래 링크를 클릭하여 비밀번호를 재설정 하십시오.

    $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => '포탈 비밀번호 재설정 확인 이메일',
        'subject' => '귀하의 계정 비밀번호가 재설정되었습니다',
        'description' => '이 템플릿은 포탈 사용자에게 사용자의 계정 비밀번호가 재설정되었다는 확인을 보내는 데에 사용됩니다.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>이 이메일은 포탈 계정 비밀번호가 재설정되었음을 확인하기 위한 것입니다. </p><p>포탈에 로그인하기 위해 아래 링크를 사용하십시오.</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
    이 이메일은 귀하의 포탈 계정 비밀번호가 재설정 되었음을 확인하기 위함입니다.

    포탈에 로그인할 수 있도록 아래 링크를 사용하십시오.

    $portal_login_url',
    ],
);
