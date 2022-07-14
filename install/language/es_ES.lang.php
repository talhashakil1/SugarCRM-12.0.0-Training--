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
	'LBL_BASIC_SEARCH'					=> 'Búsqueda Básica',
	'LBL_ADVANCED_SEARCH'				=> 'Búsqueda Avanzada',
	'LBL_BASIC_TYPE'					=> 'Tipo básico',
	'LBL_ADVANCED_TYPE'					=> 'Tipo avanzado',
	'LBL_SYSOPTS_1'						=> 'Seleccione las siguientes opciones de configuración del sistema.',
    'LBL_SYSOPTS_2'                     => '¿Qué tipo de base de datos se utilizará para la instancia de Sugar que va a instalar?',
	'LBL_SYSOPTS_CONFIG'				=> 'Configuración del Sistema',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Especificar tipo de base de datos',
    'LBL_SYSOPTS_DB_TITLE'              => 'Tipo de Base de datos',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Corrija los siguientes errores antes de proceder:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'Otorgue permisos de escritura para el siguiente directorio:',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> 'Los datos de la base de datos proporcionados, nombre de usuario y / o contraseña no son válidos, y la conexión a la base de datos no se ha podido establecer. Introduzca un servidor válido con nombre de usuario y contraseña',
    'ERR_DB_IBM_DB2_CONNECT'			=> 'Los datos de la base de datos proporcionados, nombre de usuario y / o contraseña no son válidos, y la conexión a la base de datos no se ha podido establecer. Introduzca un servidor válido con nombre de usuario y contraseña',
    'ERR_DB_IBM_DB2_VERSION'			=> 'La versión de DB2 (%s) no es compatible con Sugar. Tendrá que instalar una versión que sea compatible con la aplicación de Sugar. Consulte la tabla de compatibilidad en las notas de lanzamiento de las versiones de DB2 compatibles.',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Debe tener un cliente de Oracle instalado y configurado si selecciona Oracle.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'Los datos de la base de datos proporcionados, nombre de usuario y / o contraseña no son válidos, y la conexión a la base de datos no se ha podido establecer. Introduzca un servidor válido con nombre de usuario y contraseña',
	'ERR_DB_OCI8_CONNECT'				=> 'Los datos de la base de datos proporcionados, nombre de usuario y / o contraseña no son válidos, y la conexión a la base de datos no se ha podido establecer. Introduzca un servidor válido con nombre de usuario y contraseña',
	'ERR_DB_OCI8_VERSION'				=> 'Su versión de Oracle (%s) no es compatible con Sugar. Debe instalar una versión que sea compatible con la aplicación Sugar. Consulte la Matriz de Compatibilidad en las Notas de Lanzamiento para obtener más información sobre las versiones de Oracle compatibles.',
    'LBL_DBCONFIG_ORACLE'               => 'Indique el nombre de su base de datos. Este será el espacio de tabla por defecto asignado a su usuario ((SID de tnsnames.ora).',
	// seed Ent Reports
	'LBL_Q'								=> 'Consulta de Oportunidad',
	'LBL_Q1_DESC'						=> 'Oportunidades por Tipo',
	'LBL_Q2_DESC'						=> 'Oportunidades por Cuenta',
	'LBL_R1'							=> 'Informe de Pipeline de ventas a 6 meses',
	'LBL_R1_DESC'						=> 'Oportunidades para los próximos 6 meses catalogadas por mes y tipo',
	'LBL_OPP'							=> 'Conjunto de Datos de Oportunidades',
	'LBL_OPP1_DESC'						=> 'Aquí puede cambiar la apariencia de su consulta personalizada',
	'LBL_OPP2_DESC'						=> 'Esta consulta se posicionará, dentro del informe, a continuación de la primera consulta',
    'ERR_DB_VERSION_FAILURE'			=> 'No se puede verificar la versión de base de datos.',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Proporcione el nombre de usuario para el usuario admin de Sugar.',
	'ERR_ADMIN_PASS_BLANK'				=> 'Proporcione la contraseña para el usuario admin de Sugar.',

    'ERR_CHECKSYS'                      => 'Se han detectado errores durante las comprobaciones de compatibilidad.  Para que su Instalación de SugarCRM funcione correctamente, siga los pasos adecuados para corregir los problemas enumerados a continuación y haga clic en el botón comprobar de nuevo, o inicie de nuevo la instalación.',
    'ERR_CHECKSYS_CALL_TIME'            => '"Allow Call Time Pass Reference" está Habilitado (establézcalo a Off en php.ini)',

	'ERR_CHECKSYS_CURL'					=> 'No se ha encontrado: el planificador de Sugar se ejecutará con funcionalidad limitada. El servicio de archivado de correo electrónico no funcionará.',
    'ERR_CHECKSYS_IMAP'					=> 'No encontrado: Email Entrante y Campañas (Email) requieren las bibliotecas de IMAP. Ninguno funcionará.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'Magic Quotes GPC no se puede activar cuando se usa MS SQL Server.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Aviso:',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> ' (Establézcalo en ',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M o más en su archivo your php.ini)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Versión Mínima 4.1.2 - Encontrada:',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Ha ocurrido un error al escribir y leer las variables de sesión.  No se ha podido proceder con la instalación.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'No es un Directorio Válido',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Aviso: No Escribible',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'Su versión de PHP no es compatible con Sugar.  Necesitará instalar una versión que sea compatible con la aplicación Sugar.  Consulte la Matriz de Compatibilidad en las Notas de Lanzamiento para información sobre las Versiones de PHP compatibles. Su versión es la ',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'Su versión de IIS no es compatible con Sugar.  Debe instalar una versión que sea compatible con la aplicación Sugar.  Consulte la Matriz de Compatibilidad en las Notas de Lanzamiento para más información sobre las versiones de IIS soportadas. Su versión es ',
    'ERR_CHECKSYS_FASTCGI'              => 'Hemos detectado que no está usando una asociación de manejador de FastCGI para PHP. Debe instalar/configurar una versión que sea compatible con la aplicación Sugar.  Consulte la Matriz de Compatibilidad en las Notas de Lanzamiento para más información sobre las versiones compatibles. Visite <a href="http://www.iis.net/php/" target="_blank" rel="nofollow noopener noreferrer">http://www.iis.net/php/</a> para obtener más detalles ',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'Para unos resultados óptimos al utilizar el sapi IIS/FastCGI, ajuste fastcgi.logging en 0 en su archivo php.ini.',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Versión de PHP Instalada No Compatible: ( ver',
    'LBL_DB_UNAVAILABLE'                => 'Base de datos no disponible',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'No se ha encontrado la Asistencia de la base de datos. Asegúrese de tener los controladores necesarios para uno de los siguientes tipos de Bases de datos compatibles: MySQL, MS SQLServer, Oracle o DB2. Tal vez necesite eliminar los comentarios de la extensión del archivo php.ini, o volverlo a compilar con el archivo binario correcto, según su versión de PHP. Consulte su Manual de PHP para obtener más información sobre cómo habilitar la Asistencia de la base de datos.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'No se han encontrado las funciones asociadas con las Bibliotecas de Análisis de XML requeridas por la aplicación Sugar.  Es posible que tenga que quitar la marca del comentario de la extensión en el archivo php.ini, o recompilarlo con el archivo binario apropiado, dependiendo de la versión de PHP.  Consulte el manual de PHP para más información.',
    'LBL_CHECKSYS_CSPRNG' => 'Generador de números aleatorios',
    'ERR_CHECKSYS_MBSTRING'             => 'No se han encontrado las funciones asociadas con la extensión de PHP para Cadenas Multibyte (mbstring) requeridas por la aplicación Sugar. <br/><br/>Normalmente, el módulo mbstring no está habilitado por defecto en PHP y debe ser activado con --enable-mbstring en la compilación de PHP. Consulte el manual de PHP para más información sobre cómo habilitar la compatibilidad de mbstring.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'La opción session.save_path de su archivo de configuración php (php.ini) no se ha ajustado o se ha ajustado una carpeta que no existe. Tal vez tenga que establecer la opción save_path setting en php.ini o verificar que existe la carpeta establecida en save_path.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'La opción session.save_path de su archivo de configuración php (php.ini) seha establecido en una carpeta que no es escribible.  Siga los pasos necesarios para hacer la carpeta escribible.  <br>Dependiendo de su Sistema Operativo, es posible que tenga que cambiar los permisos usando chmod 766, o hacer clic con el botón derecho del ratón sobre el archivo para acceder a las propiedades y desmarcar la opción de sólo lectura.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'El archivo de configuración existe pero no es escribible.  Siga los pasos necesarios para hacerlo escribible.  Dependiendo de su Sistema Operativo, tal vez tenga que cambiar los permisos usando chmod 766, o hacer clic con el botón derecho del ratón sobre el archivo para acceder a las propiedades y desmarcar la opción de sólo lectura.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'El fichero config override existe pero no editable. Siga los pasos necesarios para hacer el fichero editable. Dependiendo de su Sistema Operativo, puede ser necesario cambiar los permisos ejecutando chmod 766 o editar las propiedades del fichero haciendo clic con el botón derecho sobre él y desmarcando la casilla de sólo lectura.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'El Directorio Custom existe pero no es escribible.  Tal vez tenga que cambiar sus permisos (chmod 766) o hacer clic con el botón derecho del ratón sobre él y desmarcar la opción de sólo lectura, dependiendo de su Sistema Operativo.  Siga los pasos necesarios para que el archivo sea escribible.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "Los siguientes archivos o directorios no son escribibles o no existen y no se pueden crears.  Dependiendo de su Sistema Operativo, corregir esto requerirá cambiar los permisos en los archivos o en su directorio principal (chmod 766), o hacer clic con el botón derecho en el directorio principal y desmarcar la opción \"sólo lectura\" y aplicarla en todas las subcarpetas.",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'El Modo Seguro está activado (es posible que desee deshabilitarlo en php.ini)',
    'ERR_CHECKSYS_ZLIB'					=> 'No encontrado: SugarCRM obtiene grandes beneficios de rendimiento con compresión zlib.',
    'ERR_CHECKSYS_ZIP'					=> 'Compatibilidad para ZIP no encontrado: SugarCRM necesita la compatibilidad de ZIP para procesar archivos comprimidos.',
    'ERR_CHECKSYS_BCMATH'				=> 'Compatibilidad BCMATH no encontrada: SugarCRM necesita la compatibilidad de BCMATH para matemáticas de precisión arbitraria.',
    'ERR_CHECKSYS_HTACCESS'             => 'No se ha superado la prueba de reescritura .htaccess. Esto por lo general significa que usted no tiene configurado AllowOverride para el directorio de Sugar.',
    'ERR_CHECKSYS_CSPRNG' => 'Excepción CSPRNG',
	'ERR_DB_ADMIN'						=> 'El nombre de usuario o contraseña del administrador de base de datos no son válidos y la conexión a base de datos no se ha podido establecer. Introduzca un nombre de usuario y contraseña válidos. (Error: ',
    'ERR_DB_ADMIN_MSSQL'                => 'El nombre de usuario o contraseña del administrador de base de datos no son válidos y la conexión a base de datos no se ha podido establecer. Introduzca un nombre de usuario y contraseña válidos.',
	'ERR_DB_EXISTS_NOT'					=> 'La base de datos especificada no existe.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'La base de datos ya existe y contiene datos de configuración.  Para ejecutar una instalación con la base de datos elegida, ejecute de nuevo la instalación y seleccione: "¿Eliminar y crear de nuevo las tablas de SugarCRM?"  Para actualizar, utilice el Asistente de Actualizaciones en la Consola de Administración.  Lea la documentación referente a actualizaciones <a href="http://www.sugarforge.org/content/downloads/" target="_new">aquí</a>.',
	'ERR_DB_EXISTS'						=> 'El nombre de base de datos suministrado ya existe -- no puede crearse otra con el mismo nombre.',
    'ERR_DB_EXISTS_PROCEED'             => 'El nombre de base de datos suministrado ya existe.  Puede<br>1.  pulsar el botón Atrás y elegir un nuevo nombre <br>2.  hacer clic en Siguiente y continuar, pero todas las tablas existentes en esta base de datos serán eliminadas.  <strong>Esto implica que sus tablas y datos serán eliminados permanentemente.</strong>',
	'ERR_DB_HOSTNAME'					=> 'El nombre de host no puede estar vacío.',
	'ERR_DB_INVALID'					=> 'El tipo de base de datos seleccionado no es válido.',
	'ERR_DB_LOGIN_FAILURE'				=> 'Los datos de la base de datos proporcionados, nombre de usuario y / o contraseña no son válidos, y la conexión a la base de datos no se ha podido establecer. Introduzca un servidor válido con nombre de usuario y contraseña',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'Los datos de la base de datos proporcionados, nombre de usuario y / o contraseña no son válidos, y la conexión a la base de datos no se ha podido establecer. Introduzca un servidor válido con nombre de usuario y contraseña',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'Los datos de la base de datos proporcionados, nombre de usuario y / o contraseña no son válidos, y la conexión a la base de datos no se ha podido establecer. Introduzca un servidor válido con nombre de usuario y contraseña',
	'ERR_DB_MYSQL_VERSION'				=> 'Su versión de MySQL (%s) no es compatible con Sugar. Tendrá que instalar una versión que sea compatible con la aplicación de Sugar. Consulte la matriz de compatibilidad en las notas de lanzamiento de las versiones de MySQL.',
	'ERR_DB_NAME'						=> 'El nombre de base de datos no puede estar vacío.',
	'ERR_DB_NAME2'						=> "El nombre de base de datos no puede contener los caracteres \"\\\", \"/\", o \".\"",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "El nombre de base de datos no puede contener los caracteres \"\\\", \"/\", o \".\"",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "El nombre de base de datos no puede comenzar por un número, \"#\" ni \"@\" y no puede contener espacio, \"\", \"'\", \"*\", \"/\", \"\\\", \"?\", \":\", \"<\", \"\", \"&\", \"!\" ni \"-\"",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "El nombre de la base de datos solo puede contener caracteres alfanuméricos y los símbolos \"#\", \"_\", \"-\", \":\", \".\", \"/\" o \"$\"",
	'ERR_DB_PASSWORD'					=> 'Las contraseñas introducidas porel administrador de base de datos de Sugar no coinciden.  Introduzca de nuevo la misma contraseña en los campos de contraseña.',
	'ERR_DB_PRIV_USER'					=> 'Introduzca un nombre de usuario administrador de base de datos.  El usuario es necesario para la conexión inicial a la base de datos.',
	'ERR_DB_USER_EXISTS'				=> 'El nombre de usuario para la base de datos de Sugar ya existe -- no es posible crear otro con el mismo nombre. Introduzca un nuevo nombre de usuario.',
	'ERR_DB_USER'						=> 'Introduzca un nombre de usuario para el administrador de la base de datos de Sugar.',
	'ERR_DBCONF_VALIDATION'				=> 'Corrija los siguientes errores antes de proceder:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'Las contraseñas introducidas para el usuario de base de datos de Sugar no coinciden. Introduzca de nuevo la misma contraseña en los campos de contraseña.',
	'ERR_ERROR_GENERAL'					=> 'Se han encontrado los siguientes errores:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'El archivo no se puede eliminar: ',
	'ERR_LANG_MISSING_FILE'				=> 'El archivo no se ha encontrado: ',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'No se ha encontrado un paquete de idioma en include/language dentro de:',
	'ERR_LANG_UPLOAD_1'					=> 'Ha ocurrido un problema con la carga de archivo.  Inténtelo de nuevo.',
	'ERR_LANG_UPLOAD_2'					=> 'Los paquetes de idioma deben ser archivos ZIP.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP no ha podido mover el archivo temporal al directorio de actualizaciones.',
	'ERR_LICENSE_MISSING'				=> 'Faltan Campos Requeridos',
	'ERR_LICENSE_NOT_FOUND'				=> 'No se ha encontrado el archivo de licencia.',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'El directorio de trazas indicado no es un directorio válido.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'El directorio de trazas indicado no es un directorio escribible.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Se requiere un directorio de trazas si desea indicar uno propio.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'No se ha podido procesar el script directamente.',
	'ERR_NO_SINGLE_QUOTE'				=> 'No puede utilizarse las comillas simples para',
	'ERR_PASSWORD_MISMATCH'				=> 'Las contraseñas introducidas para el usuario administrador de Sugar no coinciden.  Introduzca de nuevo la misma contraseña en los campos de contraseña.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'No ha podido escribirse en el archivo <span class=stop>config.php</span>.',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Puede continuar esta instalación creando manualmente el archivo config.php y pegando la información de configuración indicada a continuación en el archivo config.php.  Sin embargo, <strong>debe </strong>crear el archivo config.php antes de avanzar al siguiente paso.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> '¿Recordó crear el archivo config.php?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Aviso: No ha podido escribirse en el archivo config.php.  Asegúrese de que existe.',
	'ERR_PERFORM_HTACCESS_1'			=> 'No ha podido escribirse en ',
	'ERR_PERFORM_HTACCESS_2'			=> ' el archivo.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Si quiere asegurar su archivo de trazas para evitar que sea accesible a través del navegador web, cree un archivo .htaccess en su directorio de trazas con la línea:',
	'ERR_PERFORM_NO_TCPIP'				=> '<b>No se ha podido detectar una conexión a Internet.</b>Cuando disponga de una, visite <a href="http://www.sugarcrm.com/crm/products/offline-product-registration.html">http://www.sugarcrm.com/crm/products/offline-product-registration.html</a> para registrarse en SugarCRM. Permitiéndonos saber un poco sobre los planes de su empresa para utilizar SugarCRM, podemos asegurarnos de que siempre estamos suministrando el producto adecuado para las necesidades de su negocio.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'El directorio de sesión indicado no es un directorio válido.',
	'ERR_SESSION_DIRECTORY'				=> 'El directorio de sesión indicado no es un directorio escribible.',
	'ERR_SESSION_PATH'					=> 'Se requiere una ruta de sesión si desea indicar uno propio.',
	'ERR_SI_NO_CONFIG'					=> 'No ha incluido config_si.php en la carpeta raíz de documentos, o no ha definido $sugar_config_si en config.php',
	'ERR_SITE_GUID'						=> 'Se requiere un ID de Aplicación si desea indicar uno propio.',
    'ERROR_SPRITE_SUPPORT'              => "Actualmente no podemos encontrar la biblioteca GD, por tanto no podrá utilizar la funcionalidad de Sprite CSS.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Aviso: Su configuración de PHP se debería cambiar para permitir cargar archivos de al menos 6 MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Tamaño para Cargar Archivos',
	'ERR_URL_BLANK'						=> 'Introduzca la URL base para la instancia de Sugar.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'No se ha podido encontrar el registro de instalación de',
    'ERROR_FLAVOR_INCOMPATIBLE'         => 'El archivo subido no es compatible con esta edición (Professional, Enterprise o Ultimate edition) de Sugar: ',
	'ERROR_LICENSE_EXPIRED'				=> "Error: Su licencia ha caducado hace ",
	'ERROR_LICENSE_EXPIRED2'			=> " día(s). Vaya a la <a href=\"index.php?action=LicenseSettings&module=Administration\">\"Administración de Licencias\"</a>, en la pantalla de Administración, para introducir su nueva clave de licencia.  Si no introduce una nueva clave de licencia en 30 días a partir de la caducidad de su clave de licencia, no podrá iniciar la sesión en esta aplicación.",
	'ERROR_MANIFEST_TYPE'				=> 'El archivo de Manifiesto debe especificar el tipo de paquete.',
	'ERROR_PACKAGE_TYPE'				=> 'El archivo de Manifiesto especifica un tipo de paquete no reconocido',
	'ERROR_VALIDATION_EXPIRED'			=> "Error: Su clave de validación caducó hace",
	'ERROR_VALIDATION_EXPIRED2'			=> " día(s). Vaya a la <a href=\"index.php?action=LicenseSettings&module=Administration\">\"Administración de Licencias\"</a>, en la pantalla de Administración, para introducir su nueva clave de validación.  Si no introduce una nueva clave de validación en 30 días a partir de la caducidad de su clave de validación, no podrá iniciar la sesión en esta aplicación.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'El archivo subido no es compatible con esta versión de Sugar: ',

	'LBL_BACK'							=> 'Atrás',
    'LBL_CANCEL'                        => 'Cancelar',
    'LBL_ACCEPT'                        => 'Acepto',
	'LBL_CHECKSYS_1'					=> 'Para que su instalación de SugarCRM funcione correctamenteto, asegúrese de que todos los elementos de comprobación enumerados a continuación están en verde. Si alguno está en rojo, realice los pasos necesarios para corregirlos. <BR><BR> Para encontrar ayuda sobre estas comprobaciones del sistema, visite <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.',
	'LBL_CHECKSYS_CACHE'				=> 'Subdirectorios de Caché Escribibles',
    'LBL_DROP_DB_CONFIRM'               => 'El Nombre de Base de datos suministrado ya existe.<br>Tiene las siguientes opciones:<br>1.  Hacer clic en el botón Cancelar y seleccionar un nuevo nombre de base de datos, o <br>2.  Hacer clic en el botón Aceptar y continuar.  Todas las tablas existentes en la base de datos serán eliminadas. <strong>Esto implica que todas sus tablas y datos actuales desaparecerán.</strong>',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP "Allow Call Time Pass Reference" Deshabilitado',
    'LBL_CHECKSYS_COMPONENT'			=> 'Componente',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Componentes Opcionales',
	'LBL_CHECKSYS_CONFIG'				=> 'Fichero de Configuración de SugarCRM (config.php) Escribible',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'Fichero de configuración de SugarCRM (config_override.php) editable',
	'LBL_CHECKSYS_CURL'					=> 'Módulo cURL',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Configuración de la Ruta de Almacenamiento de Sesiones',
	'LBL_CHECKSYS_CUSTOM'				=> 'Directorio Personalizado Escribible',
	'LBL_CHECKSYS_DATA'					=> 'Subdirectorios de Datos Escribibles',
	'LBL_CHECKSYS_IMAP'					=> 'Módulo IMAP',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Quotes GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'Módulo de Cadenas MB',
	'LBL_CHECKSYS_MEM_OK'				=> 'Correcto (Sin Límite)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'Correcto (Ilimitado)',
	'LBL_CHECKSYS_MEM'					=> 'Límite de Memoria PHP',
	'LBL_CHECKSYS_MODULE'				=> 'Subdirectorios y Archivos de Módulos Escribibles',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'Versión de MySQL',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'No Disponible',
	'LBL_CHECKSYS_OK'					=> 'Aceptar',
	'LBL_CHECKSYS_PHP_INI'				=> 'Ubicación de su archivo de configuración de PHP (php.ini):',
	'LBL_CHECKSYS_PHP_OK'				=> 'Correcto (ver',
	'LBL_CHECKSYS_PHPVER'				=> 'Versión de PHP',
    'LBL_CHECKSYS_IISVER'               => 'Versión de IIS',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'Comprobar de nuevo',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'Modo Seguro de PHP Deshabilitado',
	'LBL_CHECKSYS_SESSION'				=> 'Ruta de Almacenamiento de Sesión Escribible (',
	'LBL_CHECKSYS_STATUS'				=> 'Estado',
	'LBL_CHECKSYS_TITLE'				=> 'Aceptación de Comprobaciones del Sistema',
	'LBL_CHECKSYS_VER'					=> 'Encontrado: ( ver',
	'LBL_CHECKSYS_XML'					=> 'Análisis XML',
	'LBL_CHECKSYS_ZLIB'					=> 'Módulo de Compresión ZLIB',
	'LBL_CHECKSYS_ZIP'					=> 'Módulo de gestión de ZIP',
    'LBL_CHECKSYS_BCMATH'				=> 'Módulo matemático de precisión artitraria',
    'LBL_CHECKSYS_HTACCESS'				=> 'Configuración AllowOverride para .htaccess',
    'LBL_CHECKSYS_FIX_FILES'            => 'Corrija los siguientes archivos o directorios antes de continuar:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Corrija los siguientes directorios de módulos y los archivos contenidos en ellos antes de continuar:',
    'LBL_CHECKSYS_UPLOAD'               => 'Directorio de Carga Editable',
    'LBL_CLOSE'							=> 'Cerrar',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'será creado',
	'LBL_CONFIRM_DB_TYPE'				=> 'Tipo de Base de datos',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Confirme la siguiente configuración.  Si desea cambiar cualquiera de los valores, haga clic en "Atrás" para editarlos.  En otro caso, haga clic en "Siguiente" para iniciar la instalación.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Información de Licencia',
	'LBL_CONFIRM_NOT'					=> 'no',
	'LBL_CONFIRM_TITLE'					=> 'Confirmación de configuración',
	'LBL_CONFIRM_WILL'					=> 'voluntad',
	'LBL_DBCONF_CREATE_DB'				=> 'Crear Base de datos',
	'LBL_DBCONF_CREATE_USER'			=> 'Crear Usuario',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Advertencia: Todos los datos de Sugar serán eliminados<br>si se marca esta opción.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> '¿Eliminar las tablas de Sugar actuales y crearlas de nuevo?',
    'LBL_DBCONF_DB_DROP'                => 'Eliminar Tablas',
    'LBL_DBCONF_DB_NAME'				=> 'Nombre de Base de Datos',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Contraseña del Usuario de Base de Datos de Sugar',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Introduzca de nuevo la Contraseña del Usuario de Base de Datos de Sugar',
	'LBL_DBCONF_DB_USER'				=> 'Nombre de Usuario de Base de Datos de Sugar',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Nombre de Usuario de Base de Datos de Sugar',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Nombre de usuario del Administrador de Base de Datos',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Contraseña del Administrador de Base de Datos',
	'LBL_DBCONF_DEMO_DATA'				=> '¿Introducir Datos de Demostración en la Base de Datos?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Seleccione los Datos de Demo',
	'LBL_DBCONF_HOST_NAME'				=> 'Nombre de Host',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'Instancia de Host',
	'LBL_DBCONF_HOST_PORT'				=> 'Puerto',
    'LBL_DBCONF_SSL_ENABLED'            => 'Habilitar la conexión SSL',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Introduzca la información de configuración de su base de datos a continuación. Si no está seguro de qué datos utilizar, le sugerimos que utilice los valores por defecto.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> '¿Utilizar texto multi-byte en datos de demostración?',
    'LBL_DBCONFIG_MSG2'                 => 'Nombre del servidor web o máquina (equipo) en el que la base de datos está ubicada ( por ejemplo, localhost o www.midominio.com ):',
    'LBL_DBCONFIG_MSG3'                 => 'Nombre de la base de datos que albergará los datos de la instancia de Sugar que va a instalar:',
    'LBL_DBCONFIG_B_MSG1'               => 'Para configurar la base de datos de Sugar, es necesario el nombre de usuario y contraseña del administrador de base de datos que puede crear tablas de base de datos y usuarios y que puede escribir en la base de datos.',
    'LBL_DBCONFIG_SECURITY'             => 'Por motivos de seguridad, puede especificar un usuario de base de datos exclusivo para conectarse a la base de datos de Sugar.  Este usuario debe ser capaz de escribir, actualizar y recuperar datos en la base de datos de Sugar que será creada para esta instancia.  Este usuario puede ser el administrador de base de datos anteriormente especificado, o puede introducir la información de un usuario de base de datos nuevo o existente.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Hágalo por mi',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Introduzca un usuario existente',
    'LBL_DBCONFIG_CREATE_DD'            => 'Defina el usuario a crear',
    'LBL_DBCONFIG_SAME_DD'              => 'El mismo que el usuario Administrador',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'Búsqueda de Texto Completo',
    'LBL_FTS_INSTALLED'                 => 'Instalado',
    'LBL_FTS_INSTALLED_ERR1'            => 'La capacidad de búsqueda de texto completo no está instalado.',
    'LBL_FTS_INSTALLED_ERR2'            => 'Aún puede instalar, pero no será capaz de utilizar la funcionalidad de búsqueda de texto completo. Consulte a su servidor de base de datos de la guía de instalación sobre la manera de hacer esto, o póngase en contacto con el administrador.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Contraseña del Usuario Privilegiado de Base de datos',
	'LBL_DBCONF_PRIV_USER_2'			=> '¿Corresponde la Cuenta de Base de Datos Anterior a un Usuario Privilegiado?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Este usuario privilegiado de base de datos debe tener los permisos adecuados para crear una base de datos, eliminar/crear tablas y crear un usuario.  Este usuario privilegiado de base de datos sólo se utilizará para realizar estas tareas según sean necesarias durante el proceso de instalación.  También puede utilizar el mismo usuario de base de datos anterior si tiene los privilegios suficientes.',
	'LBL_DBCONF_PRIV_USER'				=> 'Nombre del Usuario Privilegiado de Base de Datos',
	'LBL_DBCONF_TITLE'					=> 'Configuración de Base de Datos',
    'LBL_DBCONF_TITLE_NAME'             => 'Introduzca el Nombre de Base de Datos',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Introduzca la Información de Usuario de Base de Datos',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'Después de que se haya realizado este cambio, puede hacer clic en el botón "Iniciar" situado abajo, para iniciar su instalación.  <i>Una vez se haya completado la instalación, es probable que desee cambiar el valor para la variable "installer_locked" a "true".</i>',
	'LBL_DISABLED_DESCRIPTION'			=> 'El instalador ya ha sido ejecutado una vez. Como medida de seguridad, se ha deshabilitado para que no se ejecute por segunda vez.  Si está totalmente seguro de que desea ejecutarlo de nuevo, vaya a su archivo config.php y encuentre (o añada) una variable llamada  "installer_locked" y establézcala en "false".  La línea debería quedar como sigue:',
	'LBL_DISABLED_HELP_1'				=> 'Para ayuda sobre la instalación, visite SugarCRM',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'foros de asistencia',
	'LBL_DISABLED_TITLE_2'				=> 'La Instalación de SugarCRM ha sido Deshabilitada',
	'LBL_DISABLED_TITLE'				=> 'Instalación de SugarCRM Deshabilitada',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Juego de caracteres más utilizado en su configuración regional',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Opciones del Correo Saliente',
    'LBL_EMAIL_CHARSET_CONF'            => 'Juego de Caracteres para Email Saliente ',
	'LBL_HELP'							=> 'Ayuda',
    'LBL_INSTALL'                       => 'Instalar',
    'LBL_INSTALL_TYPE_TITLE'            => 'Opciones de Instalación',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Seleccione un Tipo de Instalación',
    'LBL_INSTALL_TYPE_TYPICAL'          => '<b>Instalación Típica</b>',
    'LBL_INSTALL_TYPE_CUSTOM'           => '<b>Instalación Personalizada</b>',
    'LBL_INSTALL_TYPE_MSG1'             => 'La clave se requiere para la funcionalidad general de la aplicación, pero no es necesaria para la instalación. No necesita introducir una clave válida en estos momentos, pero deberá introducirla tras la instalación de la aplicación.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Requiere la mínima información posible para la instalación. Recomendada para usuarios nóveles.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Provee opciones adicionales a establecer durante la instalación. La mayoría de éstas están también disponibles tras la instalación en las pantallas de adminitración. Recomendado para usuarios avanzados.',
	'LBL_LANG_1'						=> 'Para utilizar un idioma en Sugar distinto al del idioma por defecto (Inglés de EE. UU.), puede cargar e instalar ahora el paquete de idioma. También podrá cargar e instalar paquetes de idioma desde la aplicación Sugar.  Si quiere saltarse este paso, haga clic en Siguiente.',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Instalar',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Quitar',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Desinstalar',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Subir',
	'LBL_LANG_NO_PACKS'					=> 'ninguno',
	'LBL_LANG_PACK_INSTALLED'			=> 'Los siguientes paquetes de idioma han sido instalados:',
	'LBL_LANG_PACK_READY'				=> 'Los siguientes paquetes de idioma están listos para ser instalados:',
	'LBL_LANG_SUCCESS'					=> 'El paquete de idioma ha sido subido correctamente.',
	'LBL_LANG_TITLE'			   		=> 'Paquete de Idioma',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'Instalando Sugar en estos momentos.  La instalación puede tardar unos minutos.',
	'LBL_LANG_UPLOAD'					=> 'Cargar un Paquete de Idioma',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Aceptación de Licencia',
    'LBL_LICENSE_CHECKING'              => 'Haciendo comprobaciones de compatibilidad del sistema.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Comprobando Entorno',
    'LBL_LICENSE_CHKDB_HEADER'          => 'Validando base de datos, credenciales FTS.',
    'LBL_LICENSE_CHECK_PASSED'          => 'El sistema ha pasado las pruebas de compatibilidad.',
    'LBL_LICENSE_REDIRECT'              => 'Redirigiendo a',
	'LBL_LICENSE_DIRECTIONS'			=> 'Si tiene información acerca de su licencia, introdúzcala en los siguientes campos.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Introduzca Clave de Descarga',
	'LBL_LICENSE_EXPIRY'				=> 'Fecha de Caducidad',
	'LBL_LICENSE_I_ACCEPT'				=> 'Acepto',
	'LBL_LICENSE_NUM_USERS'				=> 'Número de Usuarios',
	'LBL_LICENSE_PRINTABLE'				=> 'Vista Imprimible',
    'LBL_PRINT_SUMM'                    => 'Imprimir Resumen',
	'LBL_LICENSE_TITLE_2'				=> 'Licencia de SugarCRM',
	'LBL_LICENSE_TITLE'					=> 'Información de Licencia',
	'LBL_LICENSE_USERS'					=> 'Usuarios con Licencia',

	'LBL_LOCALE_CURRENCY'				=> 'Configuración de Moneda',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Moneda por defecto',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Símbolo de Moneda',
	'LBL_LOCALE_CURR_ISO'				=> 'Código de Moneda (ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> 'Separador de miles',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Separador Decimal',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Ejemplo',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Dígitos Significavos',
	'LBL_LOCALE_DATEF'					=> 'Formato de Fecha por Defecto',
	'LBL_LOCALE_DESC'					=> 'Las opciones de configuración regional especificadas se reflejarán a nivel global en la instancia de Sugar.',
	'LBL_LOCALE_EXPORT'					=> 'Juego de caracteres de Importación/Exportación<br> <i>(Email, .csv, vCard, PDF, importación de datos)</i>',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Delimitador para Exportación (.csv)',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Configuración de Importación/Exportación',
	'LBL_LOCALE_LANG'					=> 'Idioma por Defecto',
	'LBL_LOCALE_NAMEF'					=> 'Formato de Nombre por Defecto',
	'LBL_LOCALE_NAMEF_DESC'				=> 's = Título<br />f = Nombre<br />l = Apellido',
	'LBL_LOCALE_NAME_FIRST'				=> 'David',
	'LBL_LOCALE_NAME_LAST'				=> 'Livingstone',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Dr.',
	'LBL_LOCALE_TIMEF'					=> 'Formato de Hora por Defecto',
	'LBL_LOCALE_TITLE'					=> 'Configuración Regional',
    'LBL_CUSTOMIZE_LOCALE'              => 'Personalizar Configuración Regional',
	'LBL_LOCALE_UI'						=> 'Interfaz de Usuario',

	'LBL_ML_ACTION'						=> 'Acción',
	'LBL_ML_DESCRIPTION'				=> 'Descripción',
	'LBL_ML_INSTALLED'					=> 'Fecha de Instalación',
	'LBL_ML_NAME'						=> 'Nombre',
	'LBL_ML_PUBLISHED'					=> 'Fecha de Publicación',
	'LBL_ML_TYPE'						=> 'Tipo',
	'LBL_ML_UNINSTALLABLE'				=> 'Desinstalable',
	'LBL_ML_VERSION'					=> 'Versión',
	'LBL_MSSQL'							=> 'SQL Server',
	'LBL_MSSQL_SQLSRV'				    => 'SQL Server (Microsoft SQL Server Driver para PHP)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (extensión mysqli)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'Siguiente',
	'LBL_NO'							=> 'No',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Estableciendo la contraseña del admin del sitio',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'tabla de auditoría /',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Creando el archivo de configuración de Sugar',
	'LBL_PERFORM_CREATE_DB_1'			=> '<b>Creando la base de datos</b>',
	'LBL_PERFORM_CREATE_DB_2'			=> '<b>en</b>',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Creando el usuario y la contraseña de Base de datos...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Creando datos por defecto de Sugar',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Creando el usuario y la contraseña de Base de datos para localhost...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Creando tablas de relaciones de Sugar',
	'LBL_PERFORM_CREATING'				=> 'creando /',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Creando informes predefinidos',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Creando trabajos del planificador por defecto',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Insertando configuración por defecto',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Creando usuarios por defecto',
	'LBL_PERFORM_DEMO_DATA'				=> 'Rellenando las tablas de base de datos con datos de demostración (esto puede tardar un rato)',
	'LBL_PERFORM_DONE'					=> 'hecho<br>',
	'LBL_PERFORM_DROPPING'				=> 'eliminando /',
	'LBL_PERFORM_FINISH'				=> 'Finalizar',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Actualizando información de licencia',
	'LBL_PERFORM_OUTRO_1'				=> 'La instalación de Sugar',
	'LBL_PERFORM_OUTRO_2'				=> 'ha sido completada.',
	'LBL_PERFORM_OUTRO_3'				=> 'Tiempo total:',
	'LBL_PERFORM_OUTRO_4'				=> 'segundos.',
	'LBL_PERFORM_OUTRO_5'				=> 'Memoria utiliza aproximadamente:',
	'LBL_PERFORM_OUTRO_6'				=> 'bytes.',
	'LBL_PERFORM_OUTRO_7'				=> 'Su sistema ha sido instalado y configurado para el uso.',
	'LBL_PERFORM_REL_META'				=> 'metadatos de relaciones ...',
	'LBL_PERFORM_SUCCESS'				=> '¡Éxito!',
	'LBL_PERFORM_TABLES'				=> 'Creando las tablas de aplicación de Sugar, tablas de auditoría y metadatos de relaciones',
	'LBL_PERFORM_TITLE'					=> 'Realizar Instalación',
	'LBL_PRINT'							=> 'Imprimir',
	'LBL_REG_CONF_1'					=> 'Complete el breve formulario a continuación para recibir anuncios sobre el producto, noticias sobre formación, ofertas especiales e invitaciones especiales a eventos de SugarCRM. No vendemos, alquilamos, compartimos ni distribuimos de ningún otro modo a terceras partes la información aquí recogida.',
	'LBL_REG_CONF_2'					=> 'Su nombre y dirección de correo electrónico son los únicos campos requeridos para el registro. El resto de campos son opcionales, pero de mucho valor. No vendemos, alquilamos, compartimos, o distribuimos en modo alguno la información aquí recogida a terceros.',
	'LBL_REG_CONF_3'					=> 'Gracias por registrarse. Haga clic en el botón Finalizar para iniciar una sesión en SugarCRM. Necesitará iniciar la sesión por primera vez utilizando el nombre de usuario "admin" y la contraseña que introdujo en el paso 2.',
	'LBL_REG_TITLE'						=> 'Registro',
    'LBL_REG_NO_THANKS'                 => 'No Gracias',
    'LBL_REG_SKIP_THIS_STEP'            => 'Saltar este Paso',
	'LBL_REQUIRED'						=> '* Campo requerido',

    'LBL_SITECFG_ADMIN_Name'            => 'Nombre del Administrador de la Aplicación Sugar',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Introduzca de nuevo la Contraseña del Usuario Admin de Sugar',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Precaución: Esto substituirá la contraseña de admin de cualquier instalación previa.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Contraseña del Usuario Admin de Sugar',
	'LBL_SITECFG_APP_ID'				=> 'ID de Aplicación',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Si está seleccionado, debe introducir un ID de aplicación para sustituir al ID autogenerado. El ID asegura que las sesiones de una instancia de Sugar no son utilizadas por otras instancias.  Si tiene un clúster de instalaciones Sugar, todas deben compartir el mismo ID de aplicación.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Proveer Su Propio ID de Aplicación',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Si está seleccionado, debe especificar un directorio de trazas para sustituir al directorio por defecto de trazas de Sugar. Independientemente de donde resida el archivo de trazas, el acceso al mismo a través del navegador web será restringido mediante una redirección definida en un archivo .htaccess.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Usar un Directorio Personalizado de Trazas',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Si está seleccionado, debe especificar una carpeta segura para almacenar la información de las sesiones de Sugar. Esto se hace para evitar que los datos de la sesión sean vulnerables en servidores compartidos.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Utilizar un Directorio Personalizado de Sesiones para Sugar',
	'LBL_SITECFG_DIRECTIONS'			=> 'Introduzca la información de configuración de su sitio a continuación. Si no está seguro del significado de los campos, le sugerimos que utilice los valores por defecto.',
	'LBL_SITECFG_FIX_ERRORS'			=> '<b>Corrija los siguientes errores antes de continuar:</b>',
	'LBL_SITECFG_LOG_DIR'				=> 'Directorio de Trazas',
	'LBL_SITECFG_SESSION_PATH'			=> 'Ruta al Directorio de Sesiones<br>(debe ser escribible)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Seleccione Opciones de Seguridad',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Si está seleccionado, el sistema comprobará periódicamente si hay disponibles versiones actualizadas de la aplicación.',
	'LBL_SITECFG_SUGAR_UP'				=> '¿Comprobar Automáticamente Actualizaciones?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Configuración de Actualizaciones de Sugar',
	'LBL_SITECFG_TITLE'					=> 'Configuración del Sitio',
    'LBL_SITECFG_TITLE2'                => 'Identifique al Usuario Administrador',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Seguridad del Sitio',
	'LBL_SITECFG_URL'					=> 'URL de la Instancia de Sugar',
	'LBL_SITECFG_USE_DEFAULTS'			=> '¿Usar valores por defecto?',
	'LBL_SITECFG_ANONSTATS'             => 'Enviar Estadísticas de Uso Anónimas?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'Si está seleccionado, Sugar enviará estadísticas <b>anónimas</b> sobre su instalación a SugarCRM Inc. cada vez que su sistema compruebe la existencia de nuevas versiones. Esta información nos ayudará a entender mejor cómo se usa la aplicación y así generar mejoras del producto.',
    'LBL_SITECFG_URL_MSG'               => 'Introduzca la URL que se utilizará para acceder a la instancia de Sugar tras la instalación. Esta URL también se usará como base para las URL de las páginas de la aplicación Sugar. La URL debe incluir el nombre de servidor web o máquina, o su dirección IP.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Introduzca un nombre para su sistema.  Este nombre se mostrará en la barra de título del navegador cuando los usuarios visiten la aplicación Sugar.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'Tras la instalación, necesitará usar el usuario administrador de Sugar (nombre de usuario por defecto = admin) para iniciar la sesión en la instancia de Sugar.  Introduzca una contraseña para este usuario administrador. Esta contraseña se puede cambiar tras el primer inicio de sesión.  También puede introducir otro nombre de usuario admin que se puede utilizar de manera adicional al provisto por defecto.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Seleccione clasificación para su sistema. Esta configuración crea las tablas con el lenguaje específico que utilice. En caso de que su lenguaje no requiera configuración especial, use el valor por defecto.',
    'LBL_SPRITE_SUPPORT'                => 'Compatibilidad Sprite',
	'LBL_SYSTEM_CREDS'                  => 'Credenciales del Sistema',
    'LBL_SYSTEM_ENV'                    => 'Entorno del Sistema',
	'LBL_START'							=> 'Inicio',
    'LBL_SHOW_PASS'                     => 'Mostrar Contraseñas',
    'LBL_HIDE_PASS'                     => 'Ocultar Contraseñas',
    'LBL_HIDDEN'                        => '<i>(oculto)</i>',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> '<b>Elija su idioma</b>',
	'LBL_STEP'							=> 'Paso',
	'LBL_TITLE_WELCOME'					=> 'Bienvenido a SugarCRM',
	'LBL_WELCOME_1'						=> 'Este instalador crea las tablas de base de datos de SugarCRM y establece las variables de configuración necesarias para comenzar. El proceso completo debería tardar unos diez minutos.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => '¿Está listo para proceder con la instalación?',
    'REQUIRED_SYS_COMP' => 'Componentes del Sistema Requeridos',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Antes de empezar, por favor asegúrese de que tiene las versiones compatibles de los siguientes componentes del sistema:<br>
<ul>
<li> Base de Datos/Sistema de Gestión de Base de Datos (Ejemplos: MySQL, SQL Server, Oracle)</li>
<li> Servidor Web (Apache, IIS)</li>
<li> Elasticsearch</li>
</ul>
Consulte la Matriz de Compatibilidad en las Notas de Lanzamiento para 
los componentes del sistema compatibles para la versión de Sugar que está instalando.<br>',
    'REQUIRED_SYS_CHK' => 'Comprobación Inicial del Sistema',
    'REQUIRED_SYS_CHK_MSG' =>
                    'Cuando inicie el proceso de instalación, se realizará una comprobación del sistema en el servidor web en el que los archivos de Sugar están localizados para
asegurar que el sistema está debidamente configurado y tiene todos los componentes necesarios
para completar la instalación correctamente. <br><br>
El sistema comprueba lo siguiente:<br>                      <ul>
<li>Que la <b>versión de PHP</b> &#8211; sea compatible 
con la aplicación</li>
<li><b>Las Variables de Sesión</b> &#8211; deben funcionar adecuadamente</li>
<li> <b>Las Cadenas MB</b> &#8211; deben estar instaladas y habilitadas en php.ini</li>

<li> <b>La compatibilidad de Base de Datos</b> &#8211; debe existir para MySQL, SQL
Server u Oracle o DB2</li>
<li> <b>Config.php</b> &#8211; debe existir y tiene que tener los permisos adecuados para que sea escribible</li>
<li>Los siguientes archivos de Sugar deben ser escribibles:<ul><li><b>/custom</li>
<li>/cache</li>
<li>/modules</li>
<li>/upload</b></li></ul></li></ul>                                  Si la comprobación falla, no podrá continuar con la instalación. Aparecerá un mensaje de error, explicándole por qué su sistema
no ha pasado las comprobaciones.
Tras realizar los cambios necesarios, puede realizar las comprobaciones 
del sistema de nuevo para continuar con la instalación.<br>',
    'REQUIRED_INSTALLTYPE' => 'Instalación Típica o Personalizada',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "Tras la comprobación del sistema, puede elegir entre
la instalación Típica o la Personalizada.<br>
<br>
Tanto para la instalación <b>Típica</b> como para la <b>Personalizada</b>, necesitará saber lo siguiente:<br>
<ul>
<li> <b>Tipo de base de datos</b> que almacenará los datos de Sugar <ul><li>Tipos de base de datos compatibles: 
MySQL, MS SQL Server, Oracle, DB2.<br><br></li></ul></li>
<li> <b>Nombre del servidor web</b> o máquina (host) donde se ubicará la base de datos                   <ul><li>Esto puede ser <i>localhost</i> si la base de datos está en su equipo local o en en el mismo servidor web o máquina que sus archivos Sugar.<br><br></li></ul></li>
<li><b>Nombre de la base de datos</b> que desea utilizar para almacenar los datos de Sugar</li>
<ul>
<li>Puede que ya disponga de una base de datos que quiera utilizar. Si proporciona el nombre de una base de datos existente, las tablas de la base de datos serán eliminadas durante la instalación, cuando se defina el esquema para la base de datos de Sugar.</li>
<li> Si no tiene una base de datos, el nombre que proporcione se utilizará para la nueva base de datos que será creada para la instancia durante la instalación.<br><br></li>
</ul>
<li><b>Nombre y contraseña del usuario administrador de Base de datos</b> <ul><li>El administrador de base de datos debería ser capaz de crear tablas y usuarios y de escribir en base de datos.</li><li>Puede que necesite contactar a su administrador de base de datos para que le proporcione esta información si la base de datos no está ubicada en su equipo local y/o si usted no es el administrador de base de datos.<br><br></ul></li></li>
<li> <b>Nombre y contraseña del usuario de base de datos de Sugar</b>
</li>
<ul>
<li> El usuario puede ser el administrador de base de datos, o puede proporcionar el nombre de otro usuario de base de datos existente. </li>
 <li> Si quiere crear un nuevo usuario de base de datos para este propósito, podrá proporcionar un nuevo nombre de usuario y contraseña durante el proceso de instalación y el usuario será creado durante la instalación. </li>
</ul>
<li> <b>Puerto y host de Elasticsearch</b>
</li>
<ul>
<li> El host de Elasticsearch es en el que se ejecuta la máquina de búsqueda. Esto utiliza por defecto el localhost, suponiendo que el motor de búsqueda funciona en el mismo servidor que Sugar.</li>
<li> El puerto de Elasticsearch es el número de puerto a través del cual Sugar se conecta a la máquina de búsqueda. El valor por defecto es 9200, que es el número por defecto de elasticsearch. </li>
</ul>
</ul><p>

Para la instalación <b>Personalizada</b>, también necesitará conocer lo siguiente:<br>
<ul>
<li> <b>La URL que se utilizará para acceder a la instancia de Sugar</b> tras su instalación.
Esta URL debería incluir el nombre del servidor web o de máquina, o su dirección IP.<br><br></li>
<li> [Optional] <b>Ruta al directorio de sesiones</b> si desea utilizar un directorio de sesiones personalizado para la información de Sugar con el objeto de evitar que los datos de las sesiones sean vulnerables en servidores compartidos.<br><br></li>
<li> [Optional] <b>Ruta a un directorio personalizado de trazas</b> si desea sustituir el directorio por defecto para las trazas de Sugar.<br><br></li>
<li> [Optional] <b>ID de Aplicación</b> si desea sustituir el ID autogenerado que asegura que las sesiones de una instancia de Sugar no sean utilizadas por otras instancias.<br><br></li>
<li><b>Juego de Caracteres</b> más comúnmente usado en su configuración regional.<br><br></li></ul>
Para información más detallada, consulte la Guía de Instalación.                                ",
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Lea la siguiente información importante antes de proceder con la instalación.  La información le ayudará a determinar si está o no preparado en estos momentos para instalar la aplicación.',


	'LBL_WELCOME_2'						=> 'Para la documentación de instalación, visite el <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Wiki de Sugar</a>.  <BR><BR> Para contactar con un ingeniero de asistencia de SugarCRM y obtener ayuda con la instalación, inicie sesión en el <a target="_blank" href="http://support.sugarcrm.com">Portal de Soporte de SugarCRM</a> y solicite un caso de asistencia.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '<b>Elija su idioma</b>',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Asistente de Instalación',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Bienvenido a SugarCRM',
	'LBL_WELCOME_TITLE'					=> 'Asistente de Instalación de SugarCRM',
	'LBL_WIZARD_TITLE'					=> 'Asistente de Instalación de Sugar:',
	'LBL_YES'							=> 'Sí',
    'LBL_YES_MULTI'                     => 'Sí - Multibyte',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Procesar Tareas de Workflow',
	'LBL_OOTB_REPORTS'		=> 'Ejecutar Tareas Programadas de Generación de Informes',
	'LBL_OOTB_IE'			=> 'Comprobar Bandejas de Entrada',
	'LBL_OOTB_BOUNCE'		=> 'Ejecutar Proceso Nocturno de Emails de Campaña Rebotados',
    'LBL_OOTB_CAMPAIGN'		=> 'Ejecutar Proceso Nocturno de Campañas de Email Masivo',
	'LBL_OOTB_PRUNE'		=> 'Truncar Base de datos al Inicio del Mes',
    'LBL_OOTB_TRACKER'		=> 'Limpiar Tablas de Monitorización',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Ejecutar las notificaciones de aviso por correo electrónico',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Actualizar tabla tracker_sessions',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Limpiar Cola de Trabajos',


    'LBL_FTS_TABLE_TITLE'     => 'Proporcionar configuración de búsqueda de texto completo',
    'LBL_FTS_HOST'     => 'Host',
    'LBL_FTS_PORT'     => 'Puerto',
    'LBL_FTS_TYPE'     => 'Tipo de máquina de búsqueda',
    'LBL_FTS_HELP'      => 'Para habilitar la búsqueda de texto completo, indique el Host y el Puerto donde se encuentra el motor de búsqueda. Sugar incluye ayuda incorporada para el motor Elasticsearch.',
    'LBL_FTS_REQUIRED'    => 'Se requiere Elastic Search.',
    'LBL_FTS_CONN_ERROR'    => 'No se puede conectar al servidor de búsqueda de texto completo, compruebe la configuración.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => 'No hay una versión del servidor de búsqueda de texto completo disponible. Verifique su configuración.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => 'Se ha detectado una versión no compatible de Elastic search. Utilice las versiones: %s',

    'LBL_PATCHES_TITLE'     => 'Instalar Últimos Parches',
    'LBL_MODULE_TITLE'      => 'Descargar e Instalar Paquetes de Idioma',
    'LBL_PATCH_1'           => 'Si desea saltar este paso, haga clic en Siguiente.',
    'LBL_PATCH_TITLE'       => 'Parche del Sistema',
    'LBL_PATCH_READY'       => 'Los siguientes parches están listos para ser instalados:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "SugarCRM depende de las sesiones de PHP para almacenar información importante mientras que está conectado a su servidor web.  Su instalación de PHP no tiene la información de Sesión correctamente configurada. 
<br><br>Un error de configuración bastante común es que la directiva <b>\"session.save_path\"</b> no apunte a un directorio válido.  <br>
<br> Corrija su <a target=_new href=\"http://us2.php.net/manual/en/ref.session.php\">configuración PHP</a> en el archivo php.ini ubicado a continuación.",
	'LBL_SESSION_ERR_TITLE'				=> 'Error de Configuración de Sesiones PHP',
	'LBL_SYSTEM_NAME'=>'Nombre del Sistema',
    'LBL_COLLATION' => 'Configuración de intercalación',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Introduzca un Nombre de Sistema para la instancia de Sugar.',
	'LBL_PATCH_UPLOAD' => 'Seleccione un archivo con un parche de su equipo local',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'El modo de compatibilidad inversa de PHP está habilitado. Establezca zend.ze1_compatibility_mode en Off antes de continuar',

    'meeting_notification_email' => array(
        'name' => 'Correos electrónicos de notificación de reuniones',
        'subject' => 'Reunión de SugarCRM - $event_name ',
        'description' => 'Esta plantilla se utiliza cuando el sistema envía una notificación de reunión a un usuario.',
        'body' => '<div>
	<p>A: $assigned_user</p>

	<p>$assigned_by_user le ha invitado a una reunión</p>

	<p>Asunto: $event_name<br/>
	Fecha de inicio: $start_date<br/>
	Fecha de fin: $end_date</p>

	<p>Descripción: $description</p>

	<p>Aceptar esta reunión:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Aceptar provisionalmente esta reunión:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Rechazar esta reunión:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'A: $assigned_user

$assigned_by_user le ha invitado a una reunión

Asunto: $event_name
Fecha de inicio: $start_date
Fecha de fin: $end_date

Descripción: $description

Aceptar esta reunión:
<$accept_link>

Aceptar provisionalmente esta reunión:
<$tentative_link>


Rechazar esta reunión:
<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => 'Correos electrónicos de notificación de llamadas',
        'subject' => 'Llamada de SugarCRM - $event_name ',
        'description' => 'Esta plantilla se utiliza cuando el sistema envía una notificación de llamada a un usuario.',
        'body' => '<div>
	<p>A: $assigned_user</p>

	<p>$assigned_by_user le ha invitado a una llamada</p>

	<p>Asunto: $event_name<br/>
	Fecha de inicio: $start_date<br/>
	Duración: $hoursh,$minutesm</p>

	<p>Descripción: $description</p>

	<p>Aceptar esta llamada:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Aceptar provisionalmente esta llamada:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Rechazar esta llamada:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'A: $assigned_user

$assigned_by_user le ha invitado a una llamada

Asunto: $event_name
Fecha de inicio: $start_date
Duración: $hoursh,$minutesm

Descripción: $description

Aceptar esta llamada:
<$accept_link>

Aceptar provisionalmente esta llamada:
<$tentative_link>


Rechazar esta llamada:
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => 'Correos electrónicos de notificación de asignación',
        'subject' => 'SugarCRM - $module_name asignado ',
        'description' => 'Esta plantilla se utiliza cuando el sistema envía una asignación de una tarea a un usuario.',
        'body' => '<div>
<p>$assigned_by_user ha asignado un&nbsp;$module_name a&nbsp;$assigned_user.</p>

<p>Puede revisar este&nbsp;$module_name en:<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user ha asignado un $module_name a $assigned_user.

Puede revisar este $module_name en:
<$module_link>',
    ),

    'scheduled_report_email' => array(
        'name' => 'Correos electrónicos de informes programados',
        'subject' => 'Informe programado: $report_name a fecha de $report_time',
        'description' => 'Esta plantilla se utiliza cuando el sistema envía un informe programado a un usuario.',
        'body' => '<div>
<p>Hola $assigned_user:</p>
<p>Se adjunta un informe generado automáticamente que se ha programado para usted.</p>
<p>Nombre del informe: $report_name</p>
<p>Fecha y hora de ejecución del informe: $report_time</p>
</div>',
        'txt_body' =>
            'Hola $assigned_user:

Se adjunta un informe generado automáticamente que se ha programado para usted.

Nombre del informe: $report_name

Fecha y hora de ejecución del informe: $report_time',
    ),

    'comment_log_mention_email' => [
        'name' => 'Correo electrónico de notificación del registro de comentarios del sistema',
        'subject' => 'SugarCRM - $initiator_full_name le ha mencionado en un $singular_module_name',
        'description' => 'Esta plantilla se utiliza para enviar notificaciones por correo electrónico a usuarios a quién se ha etiquetado en la sección del registro de comentarios.',
        'body' =>
            '<div>
                <p>Le han mencionado en el registro de comentarios del siguiente registro:  <a href="$record_url">$record_name</a></p>
                <p>Inicie sesión en Sugar para ver el comentario.</p>
            </div>',
        'txt_body' =>
'Le han mencionado en el registro de comentarios del siguiente registro: $record_name
            Inicie sesión en Sugar para ver el comentario.',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => 'Información de la nueva cuenta',
        'description' => 'Esta plantilla se utiliza cuando el Administrador de Sistemas envía una nueva contraseña al usuario.',
        'body' => '<<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Aquí dispone de su nombre de usuario y una contraseña temporal:</p><p>Nombre de usuario : $contact_user_user_name </p><p>Contraseña : $contact_user_user_hash </p><br><p><a href="$config_site_url">$config_site_url</a></p><br><p>Después de iniciar sesión en el sistema con esta contraseña, tal vez deba restablecerla por una propia.</p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
'
Aquí tiene su nombre de usuario y una contraseña temporal:
Nombre de usuario : $contact_user_user_name
Contraseña : $contact_user_user_hash

$config_site_url

Después de iniciar sesión en el sistema con esta contraseña, tal vez deba restablecerla por una propia.',
        'name' => 'Email con la contraseña generada por el sistema',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Restablecer la contraseña de cuenta',
        'description' => "Esta plantilla se utiliza para enviar al usuario un enlace para restablecer la contraseña de su cuenta.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Recientemente ha solicitado en $contact_user_pwd_last_changed poder restablecer la contraseña de la cuenta. </p><p>Haga clic en el siguiente enlace para restablecer la contraseña:</p><p> <a href="$contact_user_link_guid">$contact_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
'
Recientemente a solicitado en $contact_user_pwd_last_changed poder restablecer la contraseña de la cuenta.

Haga clic en el siguiente enlace para restablecer la contraseña:

$contact_user_link_guid',
        'name' => 'Email de recuperación de contraseña',
        ),

'portal_forgot_password_email_link' => [
    'name' => 'Correo electrónico de recuperación de contraseña del Portal',
    'subject' => 'Restablezca la contraseña de su cuenta',
    'description' => 'Esta plantilla se utiliza para enviar al usuario un enlace para restablecer la contraseña del Portal.',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Recientemente ha solicitado restablecer la contraseña de su cuenta. </p><p>Haga clic en el siguiente enlace para restablecer la contraseña:</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'
    Recientemente ha solicitado restablecer la contraseña de su cuenta.

    Haga clic en el siguiente enlace para restablecer la contraseña:

    $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => 'Correo electrónico de confirmación de restablecimiento de la contraseña del Portal',
        'subject' => 'Se ha restablecido la contraseña de su cuenta',
        'description' => 'Esta plantilla se utiliza para enviar la confirmación a un usuario del Portal de que se ha restablecido la contraseña de su cuenta.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Este correo electrónico es para confirmar que se ha restablecido la contraseña de su cuenta del Portal. </p><p>Utilice el siguiente enlace para iniciar sesión en el Portal:</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
    Este correo electrónico es para confirmar que se ha restablecido la contraseña de su cuenta del Portal.

    Utilice el siguiente enlace para iniciar sesión en el Portal:

    $portal_login_url',
    ],
);
