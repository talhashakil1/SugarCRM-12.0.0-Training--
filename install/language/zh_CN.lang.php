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
	'LBL_BASIC_SEARCH'					=> '基本查找',
	'LBL_ADVANCED_SEARCH'				=> '高级查找',
	'LBL_BASIC_TYPE'					=> '初级类型',
	'LBL_ADVANCED_TYPE'					=> '高级类型',
	'LBL_SYSOPTS_1'						=> '请从下列系统配置选项中选择。',
    'LBL_SYSOPTS_2'                     => '您将要安装的这个 Sugar 实例将采用哪种类型的数据库？',
	'LBL_SYSOPTS_CONFIG'				=> '系统配置',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> '指定数据库类型',
    'LBL_SYSOPTS_DB_TITLE'              => '数据库类型',
	'LBL_SYSOPTS_ERRS_TITLE'			=> '请在继续前修复下列错误：',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => '请将下列文件夹状态更改为可写入：',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> '所提供的数据库主机名、用户名和/或密码无效，无法连接数据库。请输入有效的主机名、用户名和密码',
    'ERR_DB_IBM_DB2_CONNECT'			=> '所提供的数据库主机名、用户名和/或密码无效，无法连接数据库。请输入有效的主机名、用户名和密码',
    'ERR_DB_IBM_DB2_VERSION'			=> 'Sugar不支持您的DB2版本（%s）。您需要安装与Sugar程序兼容的版本。 请参阅可支持DB2版本中发行说明的兼容性矩阵表。',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> '如果你选择Oracle，您必须安装并配置妥当的Oracle客户端。',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> '所提供的数据库主机名、用户名和/或密码无效，无法连接数据库。请输入有效的主机名、用户名和密码',
	'ERR_DB_OCI8_CONNECT'				=> '所提供的数据库主机名、用户名和/或密码无效，无法连接数据库。请输入有效的主机名、用户名和密码',
	'ERR_DB_OCI8_VERSION'				=> 'Sugar 不支持您的 Oracle 版本 (%s)。您需要安装一个与 Sugar 兼容的版本。请参阅可支持 Oracle 版本中发行说明的兼容性矩阵表。',
    'LBL_DBCONFIG_ORACLE'               => '请提供您的数据库名称。这会成为您所分配的用户的默认表空间（（SID from tnsnames.ora）。',
	// seed Ent Reports
	'LBL_Q'								=> '商业机会查询',
	'LBL_Q1_DESC'						=> '按类型分类的商业机会',
	'LBL_Q2_DESC'						=> '根据帐户列表查询商业机会',
	'LBL_R1'							=> '6 个月的销售管道报表',
	'LBL_R1_DESC'						=> '按月份与类型列表查询未来 6 个月的商业机会',
	'LBL_OPP'							=> '商业机会数据集',
	'LBL_OPP1_DESC'						=> '在此您可以修改自定义查询的界面与外观',
	'LBL_OPP2_DESC'						=> '此查询将会排列在报表的第一个查询之下',
    'ERR_DB_VERSION_FAILURE'			=> '无法检查数据库版本。',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => '请提供 Sugar 管理员用户的用户名。',
	'ERR_ADMIN_PASS_BLANK'				=> '请提供Sugar管理员用户的密码。',

    'ERR_CHECKSYS'                      => '在兼容性检查过程中发现错误。为了确保您的SugarCRM可以正常工作，请采取正确步骤解决下列问题或者单击再次检查按钮或再次执行安装。',
    'ERR_CHECKSYS_CALL_TIME'            => 'Allow Call Time Pass Reference是开启的(php.ini中的这个选项应设置为关闭的)',

	'ERR_CHECKSYS_CURL'					=> '未找到：Sugar Scheduler 将运行，但功能受限。“电子邮件归档”服务将不会运行。',
    'ERR_CHECKSYS_IMAP'					=> '未找到：接收邮件以及市场活动（邮件）需要IMAP库。否则不能正常工作。',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> '若使用MS SQL服务器，Magic Quotes GPC不可设置为"On"。',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> '警告：',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> ' （您的php. ini文件中应设置此项为 ',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M或更大）',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> '最小版本 4.1.2 - 找到： ',
	'ERR_CHECKSYS_NO_SESSIONS'			=> '读取或写入会话变量失败。不能继续此次安装。',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> '目录无效',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> '警告：不可写入',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'Sugar 不支持您的 PHP 版本。您需要安装一个与 Sugar 应用程序兼容的版本。请参阅支持的 PHP 版本发布说明中的兼容性矩阵。您的版本是',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'Sugar不支持您当前的IIS版本。您需要安装一个和Sugar应用兼容的版本，请参考发布说明的兼容性矩阵表。您的版本是 ',
    'ERR_CHECKSYS_FASTCGI'              => '我们检测到您目前没有使用 FastCGI 处理器来映射 PHP。您需要安装/配置一个和Sugar应用程序兼容的版本。请查阅发布说明中的兼容矩阵表来了解受支持的版本。请参阅 <a href="http://www.iis.net/php/" target="_blank" rel="nofollow noopener noreferrer">http://www.iis.net/php/</a> 以获取详细信息',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => '为了获得IIS/FastCGI sapi的最佳效果，请在您的php.ini文件中设置fastcgi.logging为0。',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> '不支持当前PHP版本：（版本',
    'LBL_DB_UNAVAILABLE'                => '数据库不可用',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => '找不到数据库支持。请确保您具有以下受支持的数据库类型之一所需的驱动程序：MySQL、MS SQLServer、Oracle 或 DB2。您可能需要在 php.ini 文件中取消对扩展的注释，或使用正确的二进制文件重新编译，具体取决于您的 PHP 版本。有关如何启用数据库支持的更多信息，请参考您的 PHP 手册。',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => '找不到Sugar应用程序需要的XML解析库功能。您可能要移除php.ini文件中有关扩展的注释，或重新编译正确的二进制文件，具体视您的PHP版本而定。欲知详情，请参考您的PHP手册。',
    'LBL_CHECKSYS_CSPRNG' => '随机数字生成器',
    'ERR_CHECKSYS_MBSTRING'             => '找不到Sugar应用程序需要的多字节字符串扩展(mbstring)功能。<br/><br/>一般来说，PHP默认不启用mbstring模块并且必须使用PHP自建的库--enable-mbstring来启动。欲知详情，请参考您的PHP手册。',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => '您的PHP配置文件（php.ini）中的session.save_path未设置或设置到不存在的文件夹中。您需要在php.inin中设置save_path或确定php.ini中所设置的save_path文件夹存在。',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => '您的PHP配置文件（php.ini）中的session.save_path文件夹不可写入。请采取必需步骤将文件夹设置为可写入。<br>这可能需要您运行chmod 766来变更权限或按右键单击文件名查看属性并取消只读选项，具体视您所用操作系统而定。',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => '配置文件存在但不可写入，请采取必要步骤以确保这个文件可写入。这可能需要您运行chmod 766来变更权限或按右键单击文件名查看属性并取消只读选项，具体视您所用操作系统而定。',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => '设置重载文件存在但不可写入。请采取必要步骤使文件可写入。这可能需要您运行 chmod 766 来变更权限或按右键单击文件名查看属性并取消只读选项，具体视您所用操作系统而定。',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => '自定义文件存在，但不可写入。请采取必要步骤使文件可写入。这可能需要您运行chmod 766来变更权限或按右键单击取消只读选项，视您所用操作系统而定。',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "下列文件或目录不可写入或找不到并无法创建。这可能需要您运行chmod 755来变更权限或按右键单击父目录取消包含子目录在内的目录树的只读选项，具体视您所用操作系统而定。",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Safe Mode已打开（您可能要在php.ini中改为禁用）',
    'ERR_CHECKSYS_ZLIB'					=> '未找到ZLib支持：SugarCRM可以通过使用zlib压缩大幅度提高其性能。',
    'ERR_CHECKSYS_ZIP'					=> '未找到ZIP支持：SugarCRM需要ZIP支持来处理压缩文件。',
    'ERR_CHECKSYS_BCMATH'				=> '未找到BCMATH支持：SugarCRM的任意精度的数学需要BCMATH支持。',
    'ERR_CHECKSYS_HTACCESS'             => 'Htaccess重写测试失败。一般表示您没有在sugar目录建立AllowOverride。',
    'ERR_CHECKSYS_CSPRNG' => 'CSPRNG 异常',
	'ERR_DB_ADMIN'						=> '您提供的数据库管理员用户名和/或密码无效，数据库连接无法建立。请输入有效的用户名密码。（错误： ',
    'ERR_DB_ADMIN_MSSQL'                => '提供的数据库管理员用户或密码无效，数据库连接无法建立。请输入有效的用户名密码。',
	'ERR_DB_EXISTS_NOT'					=> '指定的数据库不存在。',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> '数据库配置数据已存在。使用所选数据库进行安装，请重新运行安装并且选择：“放弃并重建已存在的SugarCRM表？”  如需升级，请使用管理员控制面板中的升级向导。请点击<a href="http://www.sugarforge.org/content/downloads/" target="_new">这里</a>阅读升级文档。',
	'ERR_DB_EXISTS'						=> '提供的数据库名已存在 -- 不能建立相同名称的数据库。',
    'ERR_DB_EXISTS_PROCEED'             => '提供的数据库名已存在。您可以<br>1. 点击返回按钮并选择一个新的数据库名 <br>2. 或者点击下一步并且继续，但是所有已存在该数据库内的表将被删除。<strong>这意味着您的表和数据将被删除。</strong>',
	'ERR_DB_HOSTNAME'					=> '主机名不能为空。',
	'ERR_DB_INVALID'					=> '选择的数据库类型无效。',
	'ERR_DB_LOGIN_FAILURE'				=> '所提供的数据库主机名、用户名和/或密码无效，无法连接数据库。请输入有效的主机名、用户名和密码',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> '所提供的数据库主机名、用户名和/或密码无效，无法连接数据库。请输入有效的主机名、用户名和密码',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> '所提供的数据库主机名、用户名和/或密码无效，无法连接数据库。请输入有效的主机名、用户名和密码',
	'ERR_DB_MYSQL_VERSION'				=> 'Sugar不支持您的MySQL版本（%s） 。您将需要安装一个与Sugar程序兼容的版本。请参阅支持MySQL版本的发行说明上的兼容性矩阵。',
	'ERR_DB_NAME'						=> '数据库名不能为空。',
	'ERR_DB_NAME2'						=> "数据库名称不能包含 ' \\'，'/'，或 '.'",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "数据库名称不能包含 ' \\'，'/'，或 '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "数据库名称不能以数字，'#' 开头或 ' @' 并且不能包含空格，'\"，\"'\"，' *'，'/'，' \\'，'? '，':'，' <',' >'，'与 '，'!'，或 '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "数据库名称只能包含字母数字字符和符号“#”、“_”、“-”、“:”、“.”、“/” 或 “$”",
	'ERR_DB_PASSWORD'					=> '所提供的Sugar数据库管理员密码不匹配。请输入一致的密码。',
	'ERR_DB_PRIV_USER'					=> '请提供一个数据库管理员用户名。初次与数据库连接需要这个用户名。',
	'ERR_DB_USER_EXISTS'				=> '数据库用户名已存在 — 不能创建同名数据库用户。请输入一个新用户名。',
	'ERR_DB_USER'						=> '输入 Sugar 数据库管理员的用户名。',
	'ERR_DBCONF_VALIDATION'				=> '请在继续前修复下列错误：',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => '所提供的Sugar数据库用户密码不匹配。请重新输入一致的密码。',
	'ERR_ERROR_GENERAL'					=> '遇到以下错误：',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> '无法删除文件：',
	'ERR_LANG_MISSING_FILE'				=> '找不到文件：',
	'ERR_LANG_NO_LANG_FILE'			 	=> '在include/language内未找到语言包文件：',
	'ERR_LANG_UPLOAD_1'					=> '您的上传有错误。请重试。',
	'ERR_LANG_UPLOAD_2'					=> '语言包必须是ZIP压缩文件。',
	'ERR_LANG_UPLOAD_3'					=> 'PHP不能将临时文件移到升级目录。',
	'ERR_LICENSE_MISSING'				=> '缺少必填字段',
	'ERR_LICENSE_NOT_FOUND'				=> '未找到许可证文件！',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> '提供的日志目录不是有效目录。',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> '提供的日志目录不可写。',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> '如果您要指定您自己的日志目录，日志目录不能为空。',
	'ERR_NO_DIRECT_SCRIPT'				=> '无法直接处理脚本。',
	'ERR_NO_SINGLE_QUOTE'				=> '不可以使用单引号于',
	'ERR_PASSWORD_MISMATCH'				=> '所提供的Sugar管理员用户密码不匹配。请重新输入正确的密码。',
	'ERR_PERFORM_CONFIG_PHP_1'			=> '不能写入<span class=stop>config.php</span>文件。',
	'ERR_PERFORM_CONFIG_PHP_2'			=> '您可以继续此次安装，手动创建config.php文件，并且复制下面的配置信息至config.php文件。然而，在进行下一步之前，您<strong>必须</strong>创建config.php文件。',
	'ERR_PERFORM_CONFIG_PHP_3'			=> '您是否记得创建config.php文件？',
	'ERR_PERFORM_CONFIG_PHP_4'			=> '警告：不能写入config.php文件。请确保它存在。',
	'ERR_PERFORM_HTACCESS_1'			=> '不能写入',
	'ERR_PERFORM_HTACCESS_2'			=> '文件。',
	'ERR_PERFORM_HTACCESS_3'			=> '如果您希望安全存放您的日志文件，防止通过浏览器的访问，在您的日志文件目录建立一个.htaccess文件并包含这行:',
	'ERR_PERFORM_NO_TCPIP'				=> '<b>我们无法检测到有效的网络连接。</b> 当您可以有效连接时，请访问<a href="http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register">http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a> 注册您的SugarCRM。并且让我们了解您的企业怎样使用SugarCRM。我们能够保证一直为您的业务需求提供适用的应用程序。',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> '会话目录不是有效目录。',
	'ERR_SESSION_DIRECTORY'				=> '会话目录不可写。',
	'ERR_SESSION_PATH'					=> '如果您要指定您自己的会话路径，会话路径不可留空。',
	'ERR_SI_NO_CONFIG'					=> '您未在文档根目录中包含config_si.php或您没有在config.php中定义$sugar_config_si',
	'ERR_SITE_GUID'						=> '如果您要定义您自己的应用ID，应用ID不可留空。',
    'ERROR_SPRITE_SUPPORT'              => "目前找不到图形处理函数（GD）库，这导致了您无法使用层叠样式的图像功能。",
	'ERR_UPLOAD_MAX_FILESIZE'			=> '警告：您的PHP的配置应改为允许至少6MB的文件上传。',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => '上传文件大小',
	'ERR_URL_BLANK'						=> '提供Sugar实例的基准网址链接。',
	'ERR_UW_NO_UPDATE_RECORD'			=> '不能定位安装记录',
    'ERROR_FLAVOR_INCOMPATIBLE'         => '所上传的文件不兼容此 Sugar 版本（专业版、企业版或旗舰版）：',
	'ERROR_LICENSE_EXPIRED'				=> "错误：您的许可已过期",
	'ERROR_LICENSE_EXPIRED2'			=> " 一（几）天前。请前往位于系统管理界面的<a href='index.php?action=LicenseSettings&module=Administration'>'\"许可证管理\"</a> 来输入您的新许可证。如果您在许可证过期 30 天内不输入新的许可证密匙，您将无法登录您的系统。",
	'ERROR_MANIFEST_TYPE'				=> '清单文件必须指定程序包类型。',
	'ERROR_PACKAGE_TYPE'				=> '名单文件指定了一个不能识别的程序包类型',
	'ERROR_VALIDATION_EXPIRED'			=> "错误：您的验证码已过期",
	'ERROR_VALIDATION_EXPIRED2'			=> " 一（几）天前。请前往位于系统管理界面的<a href='index.php?action=LicenseSettings&module=Administration'>'\"许可证管理\"</a> 来输入您的新验证密匙。如果您在验证密匙过期 30 天内不输入新的验证密匙，您将无法登录您的系统。",
	'ERROR_VERSION_INCOMPATIBLE'		=> '上传的文件和当前版本的Sugar不兼容：',

	'LBL_BACK'							=> '返回',
    'LBL_CANCEL'                        => '取消',
    'LBL_ACCEPT'                        => '我接受',
	'LBL_CHECKSYS_1'					=> '为了让您的SugarCRM正常运行，请确保以下所有的系统检查项目是绿色的。如果出现任何红色。请采取适当的手段来修复他们。<BR><BR> 如需要在系统检查方面的帮助，请访问<a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar百科</a>.',
	'LBL_CHECKSYS_CACHE'				=> '可写的缓存子目录',
    'LBL_DROP_DB_CONFIRM'               => '提供的数据库名已存在。<br>您可以选择：<br>1. 点击取消按钮并且选择一个新的数据库名称， 或 <br>2.  点击接受并继续。所有的已存在数据库中的表和数据将被删除。 <strong>这意味着所有的表和已有数据都将被删除。</strong>',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP Allow Call Time Pass Reference已关闭',
    'LBL_CHECKSYS_COMPONENT'			=> '组件',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> '可选组件',
	'LBL_CHECKSYS_CONFIG'				=> '可写入的SugarCRM配置文件（config.php）',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> '可写入的 SugarCRM 配置文件（config_override.php）',
	'LBL_CHECKSYS_CURL'					=> 'cURL 模块',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => '会话保存路径设置',
	'LBL_CHECKSYS_CUSTOM'				=> '可写的自定义目录',
	'LBL_CHECKSYS_DATA'					=> '可写的数据子目录',
	'LBL_CHECKSYS_IMAP'					=> 'IMAP 模块',
	'LBL_CHECKSYS_MQGPC'				=> '神奇的的报价 GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'MB Strings 模块',
	'LBL_CHECKSYS_MEM_OK'				=> 'OK(无限制)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'OK（无限制）',
	'LBL_CHECKSYS_MEM'					=> 'PHP 内存限额',
	'LBL_CHECKSYS_MODULE'				=> '可写模块子目录以及文件',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'MySQL版本',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> '不可用',
	'LBL_CHECKSYS_OK'					=> '确定',
	'LBL_CHECKSYS_PHP_INI'				=> '您的PHP配置文件位置为（php.ini）：',
	'LBL_CHECKSYS_PHP_OK'				=> 'OK （版本',
	'LBL_CHECKSYS_PHPVER'				=> 'PHP版本',
    'LBL_CHECKSYS_IISVER'               => 'IIS 版本',
    'LBL_CHECKSYS_FASTCGI'              => '快速 CGI',
	'LBL_CHECKSYS_RECHECK'				=> '重新检查',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'PHP Safe Mode已关闭',
	'LBL_CHECKSYS_SESSION'				=> '会话保存路径可写入（',
	'LBL_CHECKSYS_STATUS'				=> '状态',
	'LBL_CHECKSYS_TITLE'				=> '系统检查接受',
	'LBL_CHECKSYS_VER'					=> '会话保存路径可写入（',
	'LBL_CHECKSYS_XML'					=> 'XML 解析',
	'LBL_CHECKSYS_ZLIB'					=> 'ZLIB压缩模块',
	'LBL_CHECKSYS_ZIP'					=> 'ZIP处理模块',
    'LBL_CHECKSYS_BCMATH'				=> '任意精度数学模块',
    'LBL_CHECKSYS_HTACCESS'				=> 'htaccess的AllowOverride设置',
    'LBL_CHECKSYS_FIX_FILES'            => '请在进行前修复下列文件或目录：',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => '请在进行前修复下面模块目录以及文件：',
    'LBL_CHECKSYS_UPLOAD'               => '可编写的上传目录',
    'LBL_CLOSE'							=> '关闭',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> '被生成',
	'LBL_CONFIRM_DB_TYPE'				=> '数据库类型',
	'LBL_CONFIRM_DIRECTIONS'			=> '请确认下列设置。如果您需要更改任何设置，请点击"返回"并编辑或点击"下一步"继续安装。',
	'LBL_CONFIRM_LICENSE_TITLE'			=> '许可证信息',
	'LBL_CONFIRM_NOT'					=> '不',
	'LBL_CONFIRM_TITLE'					=> '确认设置',
	'LBL_CONFIRM_WILL'					=> '将',
	'LBL_DBCONF_CREATE_DB'				=> '创建数据库',
	'LBL_DBCONF_CREATE_USER'			=> '创建用户',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> '注意：如果这里被选择<br>所有数据将被清除。',
	'LBL_DBCONF_DB_DROP_CREATE'			=> '放弃以及重建已有Sugar表？',
    'LBL_DBCONF_DB_DROP'                => '放弃表',
    'LBL_DBCONF_DB_NAME'				=> '数据库名',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Sugar数据库用户密码',
	'LBL_DBCONF_DB_PASSWORD2'			=> '重新输入Sugar数据库用户名密码',
	'LBL_DBCONF_DB_USER'				=> 'Sugar 数据库用户名',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Sugar 数据库用户名',
    'LBL_DBCONF_DB_ADMIN_USER'          => '数据库管理员用户名',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => '数据库管理员密码',
	'LBL_DBCONF_DEMO_DATA'				=> '填充演示数据？',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => '选择演示数据',
	'LBL_DBCONF_HOST_NAME'				=> '主机名',
	'LBL_DBCONF_HOST_INSTANCE'			=> '主机实例',
	'LBL_DBCONF_HOST_PORT'				=> '端口',
    'LBL_DBCONF_SSL_ENABLED'            => '启用 SSL 连接',
	'LBL_DBCONF_INSTRUCTIONS'			=> '请输入您的数据库配置信息如下。如果您不确定如何填写，我们建议您使用默认值。',
	'LBL_DBCONF_MB_DEMO_DATA'			=> '使用多字节的示例数据',
    'LBL_DBCONFIG_MSG2'                 => '数据库所处的网络服务器或设备（主机）的名称（例如本地主机或 www.mydomain.com）：',
    'LBL_DBCONFIG_MSG3'                 => '数据库的名称将包含您即将安装的Sugar实例数据：',
    'LBL_DBCONFIG_B_MSG1'               => '数据库管理员可以创建数据库表而用户可以写入数据库。为了建立 Sugar 数据库，需要他们的用户名及密码。',
    'LBL_DBCONFIG_SECURITY'             => '为了安全起见，您可以指定一个独家数据库用户连接到Sugar数据库。此用户必须能够编写、更新和检索Sugar数据库中将用于该实例创建的数据。该用户可以是以上指定的数据库管理员，您也可以提供新的或现有的数据库用户的信息。',
    'LBL_DBCONFIG_AUTO_DD'              => '请帮我执行',
    'LBL_DBCONFIG_PROVIDE_DD'           => '提供已存在用户',
    'LBL_DBCONFIG_CREATE_DD'            => '定义要创建的用户',
    'LBL_DBCONFIG_SAME_DD'              => '与管理员用户相同',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => '全文本搜索',
    'LBL_FTS_INSTALLED'                 => '已安装',
    'LBL_FTS_INSTALLED_ERR1'            => '全文本搜索功能未被安装。',
    'LBL_FTS_INSTALLED_ERR2'            => '您依然可以安装，但不是能够使用全文检索功能。关于如何操作，请参阅数据库服务器安装指南或联系您的管理。',
	'LBL_DBCONF_PRIV_PASS'				=> '特权数据库用户密码',
	'LBL_DBCONF_PRIV_USER_2'			=> '以上的的数据库账户是否为特权用户？',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> '这个特权用户必须有权限来创建数据库，创建/删除表，以及创建用户。这个特权数据库用户将会并只会被用于安装过程中执行这些任务。如果该用户拥有足够权限，您也可以使用和以上一样的数据库用户。',
	'LBL_DBCONF_PRIV_USER'				=> '特权数据库用户名',
	'LBL_DBCONF_TITLE'					=> '数据库配置',
    'LBL_DBCONF_TITLE_NAME'             => '提供数据库名',
    'LBL_DBCONF_TITLE_USER_INFO'        => '提供数据库用户信息',
	'LBL_DISABLED_DESCRIPTION_2'		=> '这项修改生效之后，您可以点击下面的“开始”按钮来开始安装。<i>当安装完成后，您或许想将$#39; installer_locked$#39; 的值改为$#39; true$#39;。</i>',
	'LBL_DISABLED_DESCRIPTION'			=> '安装任务已经进行过一次。为了安全考虑，它被禁止运行第二次。如果您很确定您需要再次运行，请打开您的config.php并找到（或增加）一个变量叫做$#39;installer_locked$#39;并设置为$#39;false$#39;.这一行应该看起来这样：',
	'LBL_DISABLED_HELP_1'				=> '如需安装帮助，请访问SugarCRM中文论坛',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> '支持论坛',
	'LBL_DISABLED_TITLE_2'				=> 'SugarCRM安装已经被禁止',
	'LBL_DISABLED_TITLE'				=> 'SugarCRM安装被禁止',
	'LBL_EMAIL_CHARSET_DESC'			=> '您语言环境最常用的字符集',
	'LBL_EMAIL_CHARSET_TITLE'			=> '发件箱设置',
    'LBL_EMAIL_CHARSET_CONF'            => '发件箱字符集 ',
	'LBL_HELP'							=> '帮助',
    'LBL_INSTALL'                       => '安装',
    'LBL_INSTALL_TYPE_TITLE'            => '安装选项',
    'LBL_INSTALL_TYPE_SUBTITLE'         => '选择安装类型',
    'LBL_INSTALL_TYPE_TYPICAL'          => '<b>典型安装</b>',
    'LBL_INSTALL_TYPE_CUSTOM'           => '<b>自定义安装</b>',
    'LBL_INSTALL_TYPE_MSG1'             => '系统的正常功能运作需要密匙，但是在安装过程中不需要。您现在不需要输入密匙，但是您将需要在完成安装后提供密匙。',
    'LBL_INSTALL_TYPE_MSG2'             => '安装过程需要的信息最少，建议新用户使用。',
    'LBL_INSTALL_TYPE_MSG3'             => '安装过程中提供额外选项，这些选项大多数在安装之后也可以从管理员页面设置。建议高级用户使用。',
	'LBL_LANG_1'						=> '如需使用默认语言（US-英文）以外的语言，您可以现在上传并安装语言包。您也可以稍后从Sugar应用程序上传并安装语言包。如果您想跳过此过程，请点击下一步。',
	'LBL_LANG_BUTTON_COMMIT'			=> '安装',
	'LBL_LANG_BUTTON_REMOVE'			=> '移除',
	'LBL_LANG_BUTTON_UNINSTALL'			=> '卸载',
	'LBL_LANG_BUTTON_UPLOAD'			=> '上传',
	'LBL_LANG_NO_PACKS'					=> '无',
	'LBL_LANG_PACK_INSTALLED'			=> '下列语言包已经被安装：',
	'LBL_LANG_PACK_READY'				=> '下列语言包做好安装准备：',
	'LBL_LANG_SUCCESS'					=> '语言包已经成功上传。',
	'LBL_LANG_TITLE'			   		=> '语言包',
    'LBL_LAUNCHING_SILENT_INSTALL'     => '正在安装Sugar，也许会需要几分钟来完成。',
	'LBL_LANG_UPLOAD'					=> '上传一个语言包',
	'LBL_LICENSE_ACCEPTANCE'			=> '授权接受',
    'LBL_LICENSE_CHECKING'              => '正在检查系统兼容性。',
    'LBL_LICENSE_CHKENV_HEADER'         => '检查环境',
    'LBL_LICENSE_CHKDB_HEADER'          => '验证 DB、FTS 证书。',
    'LBL_LICENSE_CHECK_PASSED'          => '系统通过兼容性测试。',
    'LBL_LICENSE_REDIRECT'              => '页面即将跳转',
	'LBL_LICENSE_DIRECTIONS'			=> '如果您有授权信息，请在下面输入。',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> '输入下载密匙',
	'LBL_LICENSE_EXPIRY'				=> '失效日期',
	'LBL_LICENSE_I_ACCEPT'				=> '我接受',
	'LBL_LICENSE_NUM_USERS'				=> '用户数目',
	'LBL_LICENSE_PRINTABLE'				=> '可打印视图',
    'LBL_PRINT_SUMM'                    => '打印摘要',
	'LBL_LICENSE_TITLE_2'				=> 'SugarCRM授权',
	'LBL_LICENSE_TITLE'					=> '许可证信息',
	'LBL_LICENSE_USERS'					=> '授权用户',

	'LBL_LOCALE_CURRENCY'				=> '货币设置',
	'LBL_LOCALE_CURR_DEFAULT'			=> '默认货币',
	'LBL_LOCALE_CURR_SYMBOL'			=> '货币符号',
	'LBL_LOCALE_CURR_ISO'				=> '货币代码(ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> '千位分隔符',
	'LBL_LOCALE_CURR_DECIMAL'			=> '小数分隔符',
	'LBL_LOCALE_CURR_EXAMPLE'			=> '实例',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> '有效数字',
	'LBL_LOCALE_DATEF'					=> '默认日期格式',
	'LBL_LOCALE_DESC'					=> '这里设置的Sugar本地化设置将对整个应用生效。',
	'LBL_LOCALE_EXPORT'					=> '导入导出的字符集<br> <i>(邮件, .csv, vCard, PDF, 数据导入)</i>',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> '导出（.csv）分隔符',
	'LBL_LOCALE_EXPORT_TITLE'			=> '导入/导出设置',
	'LBL_LOCALE_LANG'					=> '默认语言',
	'LBL_LOCALE_NAMEF'					=> '默认姓名格式',
	'LBL_LOCALE_NAMEF_DESC'				=> 's = 称谓<br />f = 名<br />l = 姓',
	'LBL_LOCALE_NAME_FIRST'				=> '大卫',
	'LBL_LOCALE_NAME_LAST'				=> '利文斯通',
	'LBL_LOCALE_NAME_SALUTATION'		=> '博士',
	'LBL_LOCALE_TIMEF'					=> '默认时间格式',
	'LBL_LOCALE_TITLE'					=> '区域设置',
    'LBL_CUSTOMIZE_LOCALE'              => '定制本地化设置',
	'LBL_LOCALE_UI'						=> '用户界面',

	'LBL_ML_ACTION'						=> '动作',
	'LBL_ML_DESCRIPTION'				=> '说明',
	'LBL_ML_INSTALLED'					=> '安装的日期',
	'LBL_ML_NAME'						=> '名称',
	'LBL_ML_PUBLISHED'					=> '发布的日期',
	'LBL_ML_TYPE'						=> '类型',
	'LBL_ML_UNINSTALLABLE'				=> '可卸载',
	'LBL_ML_VERSION'					=> '版本',
	'LBL_MSSQL'							=> 'SQL服务器',
	'LBL_MSSQL_SQLSRV'				    => 'SQL 服务器 （针对PHP的Microsoft SQL服务器驱动器）',
	'LBL_MYSQL'							=> '我的 SQL',
    'LBL_MYSQLI'						=> '我的SQL（mysqli 扩展）',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> '下一步',
	'LBL_NO'							=> '否',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> '正在设置站点管理员密码',
	'LBL_PERFORM_AUDIT_TABLE'			=> '审计表 /',
	'LBL_PERFORM_CONFIG_PHP'			=> '正创建Sugar配置文件',
	'LBL_PERFORM_CREATE_DB_1'			=> '<b>正生成数据库</b>',
	'LBL_PERFORM_CREATE_DB_2'			=> '<b>开启</b>',
	'LBL_PERFORM_CREATE_DB_USER'		=> '正生成数据库用户名和密码...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> '正生成默认 Sugar 数据',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> '正为本地主机创建数据库用户名和密码...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> '正创建 Sugar 关系表',
	'LBL_PERFORM_CREATING'				=> '正创建 /',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> '正生成默认报表',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> '正创建默认定时计划任务',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> '正插入默认设置',
	'LBL_PERFORM_DEFAULT_USERS'			=> '正生成默认用户',
	'LBL_PERFORM_DEMO_DATA'				=> '正在填充演示数据（这可能会花一些时间）',
	'LBL_PERFORM_DONE'					=> '完成<br>',
	'LBL_PERFORM_DROPPING'				=> '正放弃 /',
	'LBL_PERFORM_FINISH'				=> '完成',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> '更新授权信息',
	'LBL_PERFORM_OUTRO_1'				=> 'Sugar安装',
	'LBL_PERFORM_OUTRO_2'				=> '已完成！',
	'LBL_PERFORM_OUTRO_3'				=> '总时间:',
	'LBL_PERFORM_OUTRO_4'				=> '秒。',
	'LBL_PERFORM_OUTRO_5'				=> '大约内存使用：',
	'LBL_PERFORM_OUTRO_6'				=> '字节。',
	'LBL_PERFORM_OUTRO_7'				=> '您的系统已经完成安装和配置，可以使用了。',
	'LBL_PERFORM_REL_META'				=> '关系元 ...',
	'LBL_PERFORM_SUCCESS'				=> '成功！',
	'LBL_PERFORM_TABLES'				=> '正创建Sugar数据表以及数据表关系元数据',
	'LBL_PERFORM_TITLE'					=> '执行安装',
	'LBL_PRINT'							=> '打印',
	'LBL_REG_CONF_1'					=> '请完成下面的表单来获得来自SugarCRM的定期产品更新、培训新闻、优惠以及特殊活动邀请。我们绝对不会将此处收集的信息租、借或卖给第三方。',
	'LBL_REG_CONF_2'					=> '只有您的名字和邮件地址是必填项，其他所有字段都是选填项，但是对我们很有帮助。我们绝对不会将在此采集来的信息租、借或卖给第三方。',
	'LBL_REG_CONF_3'					=> '感谢您的注册。点击完成按钮来登录到您的 SugarCRM。首次登陆，您需要使用用户名“admin”以及在第二步所指定的密码来登录。',
	'LBL_REG_TITLE'						=> '注册',
    'LBL_REG_NO_THANKS'                 => '不，谢谢',
    'LBL_REG_SKIP_THIS_STEP'            => '跳过这一步',
	'LBL_REQUIRED'						=> '* 必填项',

    'LBL_SITECFG_ADMIN_Name'            => 'Sugar应用程序管理员名字',
	'LBL_SITECFG_ADMIN_PASS_2'			=> '重新输入Sugar管理员用户密码',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> '注意：这将覆盖之前任何安装过程中的管理员密码。',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Sugar管理员用户密码',
	'LBL_SITECFG_APP_ID'				=> '应用 ID',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> '如选，您必须提供一个应用ID来覆盖默认的自动生成 ID。这个ID 保证某个 SugarCRM 实例的会话不被其它实例程序所占用。如果您是 Sugar 集群安装，他们必须共享相同的应用 ID。',
	'LBL_SITECFG_CUSTOM_ID'				=> '请提供您自己的应用 ID',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> '如选，您必须指定一个日志文件目录来覆盖默认目录以存储Sugar日志。不管日志文件在哪里保存，通过浏览器的访问都应该通过.htaccess转向来限制。',
	'LBL_SITECFG_CUSTOM_LOG'			=> '使用自定义日志目录',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> '如选，您必须提供一个安全的目录来存放Sugar 会话信息。这可以保证您的会话数据在共享服务器上的安全。',
	'LBL_SITECFG_CUSTOM_SESSION'		=> '在Sugar中试用自定义会话目录',
	'LBL_SITECFG_DIRECTIONS'			=> '请在下面输入您的站点配置信息。如果您不确定字段，建议保留默认设置。',
	'LBL_SITECFG_FIX_ERRORS'			=> '<b>请在继续进行前修复下面这些错误：</b>',
	'LBL_SITECFG_LOG_DIR'				=> '日志目录',
	'LBL_SITECFG_SESSION_PATH'			=> '会话目录路径<br>(必须可写)',
	'LBL_SITECFG_SITE_SECURITY'			=> '选择安全选项',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> '如选，系统将自动定期检查应用程序的更新。',
	'LBL_SITECFG_SUGAR_UP'				=> '是否自动检查更新？',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Sugar升级配置',
	'LBL_SITECFG_TITLE'					=> '站点配置',
    'LBL_SITECFG_TITLE2'                => '识别管理员用户',
    'LBL_SITECFG_SECURITY_TITLE'        => '站点安全',
	'LBL_SITECFG_URL'					=> 'Sugar实例网址',
	'LBL_SITECFG_USE_DEFAULTS'			=> '使用默认？',
	'LBL_SITECFG_ANONSTATS'             => '发送匿名使用统计数据？',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => '如选，每次Sugar检查更新时将您程序安装相关的的<b>匿名</b>统计数据发回SugarCRM公司。这些数据将会帮助我们更好的理解您对软件的使用并且帮助我们改善产品。',
    'LBL_SITECFG_URL_MSG'               => '请输入安装完成后将用来访问 Sugar 的网址。 这个网址将被用于 Sugar 的基准网址。这个 URL 应该包含网页服务器、主机名或 IP 地址。',
    'LBL_SITECFG_SYS_NAME_MSG'          => '输入您的系统名称。这个名称将在用户访问 Sugar 应用程序时显示在您系统的标题栏。',
    'LBL_SITECFG_PASSWORD_MSG'          => '安装完成后，您将需要使用 Sugar 管理员用户（默认用户名=admin）来登录到您的 Sugar 系统。请为这个管理员有那个设置一个密码。这个密码可以在第一次登陆后更改。您也可以输入另外一个除了默认用户之外的用户。',
    'LBL_SITECFG_COLLATION_MSG'         => '选择排序规则（筛选）设置您的系统。 该设置会以您所使用的语言创建表格。因此为避免您所使用的语言不符合特殊的设置要求，请使用默认值。',
    'LBL_SPRITE_SUPPORT'                => '图像支持',
	'LBL_SYSTEM_CREDS'                  => '系统证书',
    'LBL_SYSTEM_ENV'                    => '系统环境',
	'LBL_START'							=> '开始',
    'LBL_SHOW_PASS'                     => '显示密码',
    'LBL_HIDE_PASS'                     => '隐藏密码',
    'LBL_HIDDEN'                        => '<i>（隐藏）</i>',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> '<b>选择您的语言</b>',
	'LBL_STEP'							=> '步骤',
	'LBL_TITLE_WELCOME'					=> '欢迎来到SugarCRM',
	'LBL_WELCOME_1'						=> '这个安装可以帮您创建启动程序所需要的SugarCRM表以及设置配置变量。整个过程应该需要10分钟。',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => '您是否准备安装？',
    'REQUIRED_SYS_COMP' => '要求的系统组件',
    'REQUIRED_SYS_COMP_MSG' =>
                    '在您开始之前，请确保您拥有以下系统组件的					
SugarCRM兼容版本：<br> 
<ul> 
<li> 数据库/数据库管理系统(例如：MySQL, SQL Server, Oracle，DB2)</li>
 <li> Web服务器(Apache, IIS)</li>
<li> Elasticsearch</li>
 </ul>     如需查询正在安装的Sugar版本兼容的系统组件，请参考发布说明中的兼容性矩阵表。<br>',
    'REQUIRED_SYS_CHK' => '起始系统检查',
    'REQUIRED_SYS_CHK_MSG' =>
                    '当您开始安装进程后，程序将对在Sugar文件位置的网页服务器进行系统检查来确保系统配置正确并且包含所有需要的组件从而成功完成此次安装。<br><br>         系统将检查下面全部内容：<br>  <ul> <li><b>PHP版本</b> &#8211; 必须与应用兼容</li>                                        <li><b>会话变量</b> &#8211; 必须正常工作</li>                                            <li> <b>MB Strings</b> &#8211; 必须安装并且在php.ini中启用</li>                      <li> <b>数据库支持</b> &#8211; 必须有MySQL, SQL<br />                      服务器或 Oracle，DB2</li>                      <li> <b>Config.php</b> &#8211; 必须存在并且必须为<br />                                  可写状态</li><br />					  <li>下面这些Sugar文件必须是可写状态：<ul><li><b>/custom</li><br /><li>/cache</li><br /><li>/modules</li><br /><li>/upload</b></li></ul></li></ul><br />                                  如果这项检查失败，您将无法继续进行安装。一条解释错误的警告将显示<br />                                  并告知为什么您的系统没有通过检查。<br />                                  当所需的更改已经完成时，您可以在此运行<br />                                  系统检查并继续安装。<br>',
    'REQUIRED_INSTALLTYPE' => '典型或自定义安装',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "当系统检查完成后，您可以选择典型或自定义安装。<br><br>                      不管是<b>典型</b>或<b>自定义</b>安装，您都需要知道下面的信息：<br>                      <ul>            <li><b>承载Sugar数据库的</b>数据库类型<ul><li>兼容数据库类型<br />                      ：MySQL，MS SQL服务器，Oracle，DB2。<br><br></li></ul></li><li><b>                      承载数据库的<b>网页服务器名称</b>或电脑(主机)<br />                      <ul><li>如果数据库在您本地电脑上或和Sugar文件在在同一网页服务器或同一台机器上，这也许会是<i>本地主机</i>。<br><br></li></ul></li><br />                      <li>您希望承载Sugar数据的<b>数据库名</b></li><br />                        <ul><br />                          <li>您也许已经有一个已存在的数据库想使用。如果您提供<br />                          已存在数据库的数据库名，这个数据库里的表将<br />                          在安装过程中定义数据库时被清除。</li><br />                          <li>如果您未曾已经拥有一个数据库，您所提供的数据库名将在安装过程中被用于<br />                          新建的数据库。<br><br></li><br />                        </ul><br />                      <li><b>数据库管理员用户名和密码</b> <ul><li>数据库管理员应该有权限去建立表、用户以及写入数据库。</li><li>如果数据库不再您的本地电脑上<br />					  或您不是数据库管理员。您也许需要联系您的数据库管理员来获取这些信息<br><br></ul></li></li><br />                      <li> <b>Sugar数据库用户名和密码</b><br />                      </li><br />                        <ul><br />                          <li>这个用户可以是数据库管理员，或者您可以提供另外一个<br />                          已经存在的数据库用户的用户名。 </li><br />                          <li>如果您希望建立一个新的数据库，您需要<br />                          能够在安装过程中提供一个新的用户名和密码，<br />                          并且建立一个用户。</li>
</ul>
<li> <b>弹性搜索主机和端口</b>
</li>
<ul>
<li>弹性搜索主机指的是搜索引擎在运行的主机。这默认本地主机与Sugar使用同一搜索引擎。</li>
<li> 弹性搜索端口指的是连接到搜索引擎的端口数。其默认值为9200。</li>
</ul>
</ul><p>
    对于<b>自定义</b>安装，您也许需要知道下面的信息：<br><br />                      <ul><br />                      <li> <b>用来访问Sugar系统的URL</b>在安装完成后。<br />                      这个URL应该包含Web服务器，主机名称或IP地址。<br><br></li><br />                                  <li> [可选项] <b>Session路径目录</b>如果您希望使用一个<br />                                  自定义Session目录来保存 Sugar 信息，从而防止Session数据存在<br />                                  共享环境中的安全隐患。<br><br></li><br />                                  <li> [可选项] <b>自定义日志文件夹</b>如果您希望覆盖默认系统日志存放目录。<br><br></li><br />                                  <li> [可选项] <b>应用ID</b>如果您希望覆盖系统自动生成的<br />                                  ID来确保一个Sugar的Session不会被另外一个Sugar系统所占用。<br><br></li><br />                                  <li><b>字符集</b> 您本地化设置中最常用的字符集。<br><br></li></ul><br />                                  如需更多具体的信息，请参考安装手册。                                ",
    'LBL_WELCOME_PLEASE_READ_BELOW' => '请在继续安装之前阅读下面的信息。下面的信息将帮助您决定您是否准备好了此次安装。',


	'LBL_WELCOME_2'						=> '如需关于安装文档的信息，请访问 <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>。<BR><BR>，如需联系一名 SugarCRM 支持工程师帮忙安装，请登录 <a target="_blank" href="http://support.sugarcrm.com">SugarCRM Support Portal</a>，并提交一份支持客户反馈。',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '<b>选择您的语言</b>',
	'LBL_WELCOME_SETUP_WIZARD'			=> '安装向导',
	'LBL_WELCOME_TITLE_WELCOME'			=> '欢迎来到SugarCRM',
	'LBL_WELCOME_TITLE'					=> 'SugarCRM安装向导',
	'LBL_WIZARD_TITLE'					=> 'Sugar安装向导：',
	'LBL_YES'							=> '是',
    'LBL_YES_MULTI'                     => '是 - 多字节',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> '处理工作流任务',
	'LBL_OOTB_REPORTS'		=> '运行报表生成计划任务',
	'LBL_OOTB_IE'			=> '检查收件箱',
	'LBL_OOTB_BOUNCE'		=> '运行每晚处理退回的市场活动邮件',
    'LBL_OOTB_CAMPAIGN'		=> '运行每晚批量运行邮件市场活动',
	'LBL_OOTB_PRUNE'		=> '每月 1 号精简数据库',
    'LBL_OOTB_TRACKER'		=> '清理跟踪器表',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => '运行电子邮件提醒通知',
    'LBL_UPDATE_TRACKER_SESSIONS' => '更新 tracker_sessions 表',
    'LBL_OOTB_CLEANUP_QUEUE' => '清理任务队列',


    'LBL_FTS_TABLE_TITLE'     => '提供全文搜索设置',
    'LBL_FTS_HOST'     => '主机',
    'LBL_FTS_PORT'     => '端口',
    'LBL_FTS_TYPE'     => '搜索引擎类型',
    'LBL_FTS_HELP'      => '为启用全文搜索, 请选择搜索引擎类型并输入安置搜索引擎的主机和接口。 Sugar包含了对弹性搜索引擎的内置支持。',
    'LBL_FTS_REQUIRED'    => '弹性搜索是必要的。',
    'LBL_FTS_CONN_ERROR'    => '无法连接全文搜索服务器， 请检查您的设置。',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => '全文本搜索服务器版本不可用，请确认您的设置。',
    'LBL_FTS_UNSUPPORTED_VERSION'    => '不支持检测到的弹性搜索版本，请使用版本 %s',

    'LBL_PATCHES_TITLE'     => '安装最新补丁',
    'LBL_MODULE_TITLE'      => '安装语言包',
    'LBL_PATCH_1'           => '如果您希望跳过此步，点击下一步。',
    'LBL_PATCH_TITLE'       => '系统补丁',
    'LBL_PATCH_READY'       => '下面这些补丁已经准备好安装：',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "Sugar依靠PHP会话来在链接这台Web服务器时保存重要信息。您的PHP会话信息配置不正确。											<br><br>一个常见的错误配置是 <b>'session.save_path'</b>目录没有指向一个有效目录。 <br><br> 请修正您位于下面的php.ini中的<a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP配置</a> 。",
	'LBL_SESSION_ERR_TITLE'				=> 'PHP会话配置错误',
	'LBL_SYSTEM_NAME'=>'系统名称',
    'LBL_COLLATION' => '排序设置',
	'LBL_REQUIRED_SYSTEM_NAME'=>'请提供一个 Sugar 实例的系统名称。',
	'LBL_PATCH_UPLOAD' => '从本地计算机上选择一个补丁文件',
	'LBL_BACKWARD_COMPATIBILITY_ON' => '已打开 PHP 向下兼容模式。设置 zend.ze1_compatibility_mode 至 OFF 来继续',

    'meeting_notification_email' => array(
        'name' => '会议通知电子邮件',
        'subject' => 'SugarCRM 会议 - $event_name ',
        'description' => '系统向用户发送会议通知时使用此模板。',
        'body' => '<div>
	<p>收件人：$assigned_user</p>

	<p>$assigned_by_user 邀请您参加会议</p>

	<p>主题：$event_name<br/>
	开始日期： $start_date<br/>
	结束日期：$end_date</p>

	<p>说明：$description</p>

	<p>接受此会议：<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>暂时接受此会议：<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>拒绝此会议：<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            '收件人：$assigned_user

$assigned_by_user 邀请您参加会议

主题：$event_name
开始日期：$start_date
结束日期：$end_date

说明：$description

接受此会议：
<$accept_link>

暂时接受此会议
<$tentative_link>

拒绝此会议
<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => '电话通知电子邮件',
        'subject' => 'SugarCRM 电话 - $event_name ',
        'description' => '当系统向用户发送呼叫通知时使用此模板。',
        'body' => '<div>
	<p>收件人：$assigned_user</p>

	<p>$assigned_by_user 邀请您参加通话</p>

	<p>主题：$event_name<br/>
	开始日期： $start_date<br/>
	结束日期：$hoursh, $minutesm</p>

	<p>说明：$description</p>

	<p>接受此通话：<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>暂时接受此通话：<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>拒绝此通话：<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            '收件人：$assigned_user

$assigned_by_user 邀请您参加通话

主题：$event_name
开始日期：$start_date
结束日期：$hoursh, $minutesm

说明：$description

接受此通话：
<$accept_link>

暂时接受此通话
<$tentative_link>

拒绝此通话
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => '指派通知电子邮件',
        'subject' => 'SugarCRM - 分配的 $module_name ',
        'description' => '当系统向用户发送任务分配时使用此模板。',
        'body' => '<div>
<p>$assigned_by_user 已分配 &nbsp;$module_name 给 &nbsp;$assigned_user.</p>

<p>您可查看此&nbsp;$module_name 查看位置：<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user 已分配 $module_name 给 $assigned_user.

您可以查看此 $module_name 查看位置：
<$module_link>',
    ),

    'scheduled_report_email' => array(
        'name' => '计划报表电子邮件',
        'subject' => '截至 $report_time 的计划报表 $report_name',
        'description' => '当系统向用户发送计划报表时使用此模板。',
        'body' => '<div>
<p>尊敬的 $assigned_user,</p>
<p>附件是按计划自动生成的报表。</p>
<p>报表名称：$report_name</p>
<p>报表运行日期和时间：$report_time</p>
</div>',
        'txt_body' =>
            '尊敬的 $assigned_user,

附件是按计划自动生成的报表。

报表名称：$report_name

报表运行报告和时间：$report_time',
    ),

    'comment_log_mention_email' => [
        'name' => '系统评论日志电子邮件通知',
        'subject' => 'SugarCRM - $initiator_full_name 在 $singular_module_name 中提到了您',
        'description' => '此模板用于向已在“注释日志”部分中标记的用户发送电子邮件通知。',
        'body' =>
            '<div>
                <p>您已在以下记录的评论日志中被提及： <a href="$record_url">$record_name</a></p>
                <p>请登录 Sugar 查看评论。</p>
            </div>',
        'txt_body' =>
'您已在以下记录的评论日志中被提及：$record_name
          请登录 Sugar 查看评论。',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => '新帐户信息',
        'description' => '这个模板是管理员用来发送新密码给用户的。',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>这里是您的用户名和临时密码：</p><p>用户名 : $contact_user_user_name </p><p>密码 : $contact_user_user_hash </p><br><p><a href="$config_site_url">$config_site_url</a></p><br><p>当您使用上述密码登录后。您也许将被要求重新设置您的密码。</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
'下面是您的帐户用户名和帐户临时密码：
用户名 : $contact_user_user_name
密码 : $contact_user_user_hash
$config_site_url

使用上述密码登录后，您将被要求重置您的密码。',
        'name' => '系统生成的密码邮件',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => '重置您的帐户密码',
        'description' => "这个模板是用来提供给用户一个可以点击并重置他们密码的链接。",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>您最近请求了 $contact_user_pwd_last_changed 能够重置您的帐户密码。 </p><p>点击下列链接来重置您的密码：</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
'
您最近在 $contact_user_pwd_last_changed上要求重置您帐户的密码。点击下面的链接来重置您的密码：$contact_user_link_guid',
        'name' => '忘记密码邮件',
        ),

'portal_forgot_password_email_link' => [
    'name' => '门户忘记密码电子邮件',
    'subject' => '重设您的账户密码',
    'description' => '这个模板用于给用户提供一个链接，点击即可重设门户用户的账户密码。',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>您已请求重设账户密码。</p><p>点击以下链接以重设您的密码：</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'
    您已请求重设账户密码。

    点击以下链接以重设密码：

    $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => '门户密码重设确认电子邮件',
        'subject' => '您的账户密码已重设',
        'description' => '此模板用于向门户用户发送确认，告知其账户密码已重设。',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>此电子邮件用于确认您的门户账户密码已重设</p><p>使用以下链接登录门户：</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
    此电子邮件用于确认您的门户账户密码已重设。

    使用以下链接登录门户：

    $portal_login_url',
    ],
);
