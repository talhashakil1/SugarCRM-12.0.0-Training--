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
	'LBL_BASIC_SEARCH'					=> 'Temel Arama',
	'LBL_ADVANCED_SEARCH'				=> 'Gelişmiş Arama',
	'LBL_BASIC_TYPE'					=> 'Temel Tür',
	'LBL_ADVANCED_TYPE'					=> 'Gelişmiş Tür',
	'LBL_SYSOPTS_1'						=> 'Lütfen aşağıdaki sistem yapılandırma seçeneklerinden seçiniz.',
    'LBL_SYSOPTS_2'                     => 'Sugar kurulumu için hangi tür veritabanı kullanılacak?',
	'LBL_SYSOPTS_CONFIG'				=> 'Sistem Yapılandırması',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Veritabanı Türünü belirtiniz',
    'LBL_SYSOPTS_DB_TITLE'              => 'Veritabanı Türü',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Devam etmeden önce aşağıdaki hataları düzeltin:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'Lütfen aşağıdaki dizinleri yazılabilir yapın:',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> 'Sağlanan veritabanı sunucusu, kullanıcı ismi ve/veya şifre geçersiz. Veritabanına bağlantı kurulamadı. Geçerli bir sunucu, kullanıcı adı ve şifre giriniz',
    'ERR_DB_IBM_DB2_CONNECT'			=> 'Sağlanan veritabanı sunucusu, kullanıcı ismi ve/veya şifre geçersiz. Veritabanına bağlantı kurulamadı. Geçerli bir sunucu, kullanıcı adı ve şifre giriniz',
    'ERR_DB_IBM_DB2_VERSION'			=> 'DB2 (%s) sürümünüz Sugar tarafından desteklenmiyor. Sugar uygulaması ile uyumlu bir sürümünü yüklemeniz gerekir. Desteklenen DB2 sürümleri için Sürüm Notları Uyumluluk Matrisine başvurunuz.',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Oracle seçerseniz bir Oracle istemcisi (client) yüklü ve yapılandırılmış olması gerekiyor.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'Sağlanan veritabanı sunucusu, kullanıcı ismi ve/veya şifre geçersiz. Veritabanına bağlantı kurulamadı. Geçerli bir sunucu, kullanıcı adı ve şifre giriniz',
	'ERR_DB_OCI8_CONNECT'				=> 'Sağlanan veritabanı sunucusu, kullanıcı ismi ve/veya şifre geçersiz. Veritabanına bağlantı kurulamadı. Geçerli bir sunucu, kullanıcı adı ve şifre giriniz',
	'ERR_DB_OCI8_VERSION'				=> 'Oracle (%s) sürümünüz Sugar tarafından desteklenmiyor. Sugar uygulaması ile uyumlu bir sürümünü yüklemeniz gerekir. Desteklenen Oracle sürümleri için Sürüm Notları Uyumluluk Matrisine başvurunuz.',
    'LBL_DBCONFIG_ORACLE'               => 'Veritabanınızın adını belirtin. Bu kullanıcınıza ((tnsnames.ora içindeki SID) atanmış varsayılan tablespace olacaktır.',
	// seed Ent Reports
	'LBL_Q'								=> 'Fırsat Sorgusu',
	'LBL_Q1_DESC'						=> 'Türüne göre Fırsatlar',
	'LBL_Q2_DESC'						=> 'Müşteriye göre Fırsatlar',
	'LBL_R1'							=> '6 aylık Satış Olasılıkları Raporu',
	'LBL_R1_DESC'						=> 'Ay ve türüne göre ayrılmış gelecek 6 ay için Fırsatlar',
	'LBL_OPP'							=> 'Fırsat Veri Kümesi',
	'LBL_OPP1_DESC'						=> 'Kişiselleştirilmiş sorgunun nasıl görüneceğini değiştirdiğiniz yer',
	'LBL_OPP2_DESC'						=> 'Bu sorgu, rapordaki ilk sorgunun altında sıralanacak',
    'ERR_DB_VERSION_FAILURE'			=> 'Veritabanı versiyonunu kontrol edilemiyor.',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Sugar yönetici kullanıcısı için kullanıcı ismi belirtin.',
	'ERR_ADMIN_PASS_BLANK'				=> 'Sugar yönetici kullanıcısı için parola verin.',

    'ERR_CHECKSYS'                      => 'Uyumluluk denetimi sırasında hatalar tespit edildi. SugarCRM Kurulum işleminin düzgün çalışması için, lütfen aşağıda sıralanan problemleri gidermek için gerekli adımları atıp, yeniden kontrol butonuna basın ya da yeniden yüklemeyi deneyin.',
    'ERR_CHECKSYS_CALL_TIME'            => 'Allow Call Time Pass Reference değeri On (php.ini içinde Off yapılmalıdır)',

	'ERR_CHECKSYS_CURL'					=> 'Bulunamadı: Sugar Planlayıcı, sınırlı fonksiyonlarla çalışacak. E-posta Arşivleme hizmeti çalışmaz.',
    'ERR_CHECKSYS_IMAP'					=> 'Bulunamadı : Gelen E-Posta ve Kampanyalar (E-Posta) için  IMAP kütüphaneleri gerekiyor. İkisi de çalışmayacak.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'MS SQL Server kullanırken, Magic Quotes GPC "On" olarak değiştirilemez.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Uyarı:',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> '(Bunu ayarla',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M veya daha büyük değeri php.ini dosyanızda tanımlayın)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Minimum Sürüm Versiyonu 4.1.2 - Bulunan:',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Oturum değişkenlerin yazma ve okuma işlemi başarısız oldu. Kuruluma devam edilemiyor.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'Geçerli bir Dizin değil',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Uyarı: Yazılabilir değil',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'PHP versiyonunuz Sugar tarafından desteklenmemekte. Sugar uygulaması ile uyumlu bir versiyon indirmeniz gerekiyor. Desteklenen PHP sürümleri için Sürüm Notlarındaki Uyumluluk Matrisini inceleyin',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'IIS sürümünüz Sugar tarafından desteklenmiyor.  Sugar uygulaması ile uyumlu bir sürümü yüklemeniz gerekmektedir. Lütfen desteklenen ISS sürümleri için Uyumluluk Matrisine bakınız. Sürümünüz',
    'ERR_CHECKSYS_FASTCGI'              => 'PHP için bir FastCGI işleyici eşlemesi kullanılmadığını algıladık. Sugar uygulaması ile uyumlu bir sürümü yüklemeniz/yapılandırmanız gerekmektedir. Lütfen desteklenen sürümler için Uyumluluk Matrisine bakın.  Lütfen detaylar için <a href="http://www.iis.net/php/" target="_blank" rel="nofollow noopener noreferrer">http://www.iis.net/php/</a> adresini inceleyin',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'IIS/FastCGI sapi kullanımının optimal performansı için, php.ini dosyasında fastcgi.logging değerini 0 olarak belirtin.',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Desteklenmeyen PHP Versiyonu Yüklendi: ( ver',
    'LBL_DB_UNAVAILABLE'                => 'Veritabanı kullanılamaz',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Veri Tabanı Desteği bulunamadı.  Lütfen aşağıdaki desteklenen Veri Tabanı Türlerinden biri için gerekli sürücülere sahip olduğunuzdan emin olun: MySQL, MS SQLServer, Oracle, or DB2.  PHP sürümünüze bağlı olarak, php.ini dosyasındaki uzantının yorumunu kaldırmanız veya doğru ikili dosyayla yeniden derlemeniz gerekebilir.  Veri Tabanı Desteğinin nasıl etkinleştirileceği hakkında daha fazla bilgi için lütfen PHP Kılavuzunuza bakın.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Sugar uygulaması tarafından ihtiyaç duyulan XML Ayrıştırıcı Kütüphaneleri fonksiyonları bulunamadı. PHP versiyonun bağlı olarak, php.ini dosyasında eklentileri aktive etmeniz veya doğru seçenekler ile tekrar derlemeniz gerekebilir. Daha fazla bilgi için PHP Kılavuzuna bakınız.',
    'LBL_CHECKSYS_CSPRNG' => 'Rasgele sayı üretici',
    'ERR_CHECKSYS_MBSTRING'             => 'Sugar uygulaması tarafından ihtiyaç duyulan Multibyte Strings PHP eki (mbstring) ile ilişkili fonksiyonlar bulunamadı.<br/><br/><br />Genellikle mbstring modülü varsayılan olarak PHP içinde etkin olmayıp, PHP programı oluşturulurken --enable-mbstring seçeneği ile etkinleştirilmelidir. <br /> Mbstring desteğini etkinleştirmek ile ilgili daha fazla bilgi için PHP Kılavuzuna bakınız.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'Php yapılandırma dosyasında (php.ini) session.save_path ayarları yapılmadı ya da olmayan bir klasörü işaret ediyor. Php.ini dosyasında save_path değerini ayarlayın ya da işaret edilen klasörün var olduğuna emin olun.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'Php yapılandırma dosyanızdaki (php.ini) belirtilen session.save_path ayarı, yazılabilir olmayan bir klasöre işaret etmektedir. Lütfen dosyanızı yazılabilir hale getirmek için gerekli adımları adın.<br /><br> İşletim Sistemine bağlı olarak dosyanın izinlerini değiştirmek (chmod 766 komutunu çalıştırarak)<br />, ya da dosyanın üzerine sağ tıklayıp özelliklerinde sadece okunur seçeneğini kaldırmak zorunda olabilirsiniz.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'Config dosyası var ama yazılabilir değil. Lütfen dosyanızın yazılabilir hale getirmek için gerekli adımları atın.<br /> İşletim Sistemine bağlı olarak dosyanın izinlerini değiştirmek (chmod 766 komutunu çalıştırarak)<br /> ya da dosyanın üzerine sağ tıklayıp özelliklerine eriştikten sonra, sadece okunur seçeneğini kaldırmak zorunda olabilirsiniz.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'Config dosyası var ama yazılabilir değil. Lütfen dosyanızın yazılabilir hale getirmek için gerekli adımları atın. İşletim Sistemine bağlı olarak dosyanın izinlerini değiştirmek (chmod 766 komutunu çalıştırarak) ya da dosyanın üzerine sağ tıklayıp özelliklerine eriştikten sonra, sadece okunur seçeneğini kaldırmak zorunda olabilirsiniz.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'Özel Dizin var ama yazılabilir değil. <br />İşletim Sistemine bağlı olarak dizinin izinlerini değiştirmek (chmod 766)<br /> ya da üzerine sağ tıklayıp sadece okunur seçeneğini kaldırmak zorunda olabilirsiniz. <br /> Lütfen dosyanızın yazılabilir hale getirmek için gerekli adımları atınız.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "Aşağıda listelenen dosya veya dizinler yazılabilir değil ya da eksik olup, oluşturulamamaktadır. İşletim sistemine bağlı olarak, dosyaların veya üst dizinin izinleri değiştirmeniz (chmod 766), veya üst dizinin özelliklerine tıklayıp &#39;salt okunur&#39; seçeneğini kaldırmanız gerekmektedir.",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Güvenli Mod Açık (php.ini içinde devre dışı bırakmak isteyebilirsiniz)',
    'ERR_CHECKSYS_ZLIB'					=> 'ZLib desteği bulunamadı: SugarCRM zlib sıkıştırma ile önemli performans avantajı sağlar.',
    'ERR_CHECKSYS_ZIP'					=> 'ZIP desteği bulunamadı: SugarCRM sıkıştırılmış dosyaları işlemek için ZIP desteğine ihtiyaç duyar.',
    'ERR_CHECKSYS_BCMATH'				=> 'BCMATH desteği bulunamadı: SugarCRM isteğe bağlı hassaslıktaki matematiksel işlemler için BCMATCH desteğine gerek duyar.',
    'ERR_CHECKSYS_HTACCESS'             => '.Htaccess üzeine yeniden yazma başarısız oldu. Bu genelikle Sugar dizini için AllowOverride kurmanız gerektiği anlamına gelir.',
    'ERR_CHECKSYS_CSPRNG' => 'CSPRNG Özel Durumu',
	'ERR_DB_ADMIN'						=> 'Temin edilen veritabanı yöneticisi kullanıcı ismi ve / veya şifre geçersizdir ve veritabanına bir bağlantı kurulamadı. Geçerli bir kullanıcı ismi ve şifrenizi giriniz. (Hata:',
    'ERR_DB_ADMIN_MSSQL'                => 'Verilen veritabanı yöneticisi kullanıcı ismi ve/veya şifresi geçersiz, veritabanına bir bağlantı kurulamadı. Lütfen geçerli bir kullanıcı adı ve şifre giriniz.',
	'ERR_DB_EXISTS_NOT'					=> 'Belirtilen veritabanı mevcut değil.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'Veritabanı konfigürasyon verisiyle birlikte zaten var.<br /> Seçilen veritabanıyla birlikte kurulumu çalıştırmak için, lütfen kurulumu tekrar çalıştırın: "Var olan SugarCRM tablolarını kaldırın ve tekrar oluşturun? " seçeneğini kabul edin. Versiyon yükseltme için Yönetici Konsolundaki Versiyon Yükseltme Sihirbazını kullanın. Lütfen <a href="http://www.sugarforge.org/content/downloads/" target="_new">burada</a> adresinde bulunan versiyon yükseltme dokümanını okuyun.',
	'ERR_DB_EXISTS'						=> 'Verilen Veritabanı ismi zaten var -- aynı isme sahip başka bir Veritabanı oluşturamazsınız.',
    'ERR_DB_EXISTS_PROCEED'             => 'Veritabanı ismi zaten var. <br />Aşağıdaki seçenekleriniz bulunmaktadır.<br>1. Geri butonuna basın ve yeni bir veritabanı ismi seçin<br /><br>2. Sonra butonuna tıklayarak devam edin. Ancak veritabanı üzerindeki var olan tüm tablolar silinecektir. <strong>Bu tablolarınızın ve verilerinizin anlamına yok olacağı anlamına gelir.</ strong>',
	'ERR_DB_HOSTNAME'					=> 'Sunucu ismi boş olamaz.',
	'ERR_DB_INVALID'					=> 'Geçersiz veritabanı türü seçildi.',
	'ERR_DB_LOGIN_FAILURE'				=> 'Sağlanan veritabanı sunucusu, kullanıcı ismi ve/veya şifre geçersiz. Veritabanına bağlantı kurulamadı. Geçerli bir sunucu, kullanıcı adı ve şifre giriniz',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'Sağlanan veritabanı sunucusu, kullanıcı ismi ve/veya şifre geçersiz. Veritabanına bağlantı kurulamadı. Geçerli bir sunucu, kullanıcı adı ve şifre giriniz',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'Sağlanan veritabanı sunucusu, kullanıcı ismi ve/veya şifre geçersiz. Veritabanına bağlantı kurulamadı. Geçerli bir sunucu, kullanıcı adı ve şifre giriniz',
	'ERR_DB_MYSQL_VERSION'				=> 'MySQL versiyonunuz (%s) Sugar tarafından desteklenmemektedir. Sugar uygulamasıyla uyumlu bir versiyon yüklemeniz gerekmektedir. Desteklenen MySQL sürümleri için Uyumluluk Matrisini inceleyiniz.',
	'ERR_DB_NAME'						=> 'Veritabanı ismi boş olamaz.',
	'ERR_DB_NAME2'						=> "Veritabanı ismi &#39;&#92;&#39;, &#39;/&#39;, ya da &#39;.&#39; içeremez",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "Veritabanı ismi &#39;&#92;&#39;, &#39;/&#39;, ya da &#39;.&#39; içeremez",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "Veritabanı ismi rakamlarla ve #, ya da @ simgeleriyle başlayamaz. Boşluk , &#39; \" &#39; , \" &#39; \" , &#39; * &#39; , &#39; &#92; &#39; , &#39; / &#39; ,  &#39; ? &#39; , &#39; : &#39; , &#39; < &#39; , &#39; > &#39; , &#39; & &#39; , &#39; ! &#39;  ya da - karakterleri içeremez",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "Veritabanı ismi sadece alfa numerik karakterlerinden ve '#', '_', '-', ':', '.', '/' veya '$' sembollerinden oluşur",
	'ERR_DB_PASSWORD'					=> 'Sugar veritabanı yöneticisi için verilen şifreler eşleşmiyor. Lütfen şifre alanlarına aynı şifreleri girin.',
	'ERR_DB_PRIV_USER'					=> 'Bir veritabanı yöneticisi kullanıcı ismi sağlayın. Kullanıcı veritabanına ilk bağlantı için gereklidir.',
	'ERR_DB_USER_EXISTS'				=> 'Sugar veritabanı kullanıcısı zaten var -- aynı ismi taşıyan başka bir veritabanı kullanıcısı oluşturamazsınız. Lütfen yeni bir kullanıcı ismi girin.',
	'ERR_DB_USER'						=> 'Sugar veritabanı yöneticisi için bir kullanıcı ismi girin.',
	'ERR_DBCONF_VALIDATION'				=> 'Devam etmeden önce aşağıdaki hataları düzeltin:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'Sugar veritabanı kullanıcısı için verilen şifreler eşleşmiyor. Lütfen şifre alanlarına aynı şifreleri girin.',
	'ERR_ERROR_GENERAL'					=> 'Aşağıdaki hatalarla karşılaşıldı:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Dosya silinemiyor:',
	'ERR_LANG_MISSING_FILE'				=> 'Dosya bulunamıyor:',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'include/language içinde dil paketi dosyası bulunamıyor:',
	'ERR_LANG_UPLOAD_1'					=> 'Upload ile ilgili bir problem var. Lütfen yeniden deneyin.',
	'ERR_LANG_UPLOAD_2'					=> 'Dil Paketleri ZIP arşivleri olmalıdır.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP versiyon yükseltme dizinine temp dosyasını taşıyamıyor.',
	'ERR_LICENSE_MISSING'				=> 'Eksik Gerekli Alanlar',
	'ERR_LICENSE_NOT_FOUND'				=> 'Lisans dosyası bulunmadı!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'Sağlanan Log dizini geçerli bir dizin değildir.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'Sağlanan Log dizini yazılabilir bir dizin değil.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Kendiniz belirtmek istediğinizde, Log dizini gereklidir.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'Script direkt olarak işlenemedi.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Tek tırnak işareti bu amaçla kullanılamaz:',
	'ERR_PASSWORD_MISMATCH'				=> 'Sugar yönetici kullanıcısı için sağlanan şifreler eşleşmiyor. Lütfen şifre alanlarına aynı şifreleri girin.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> '<span class=stop>config.php</span> dosyasına yazılamıyor.',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Config.php dosyasını elle oluşturarak ve config.php dosyasının içerisine aşağıdaki yapılandırma bilgilerini yapıştırarak bu yüklemeye devam edebilirsiniz. Ancak bir sonraki adıma geçmeden önce config.php dosyasını oluşturmak <strong>zorundasınız</ strong>.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'Config.php dosyası oluşturmayı hatırladınız mı?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Uyarı: config.php dosyasına yazılamadı. Var olduğundan emin olun.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Yazamıyor',
	'ERR_PERFORM_HTACCESS_2'			=> 'dosya.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Log dosyasını herhangi bir  tarayıcı tarafından erişilemeyecek şekilde güvenli hale getirmek için, log dosyasının bulunduğu dizinde bir tane .htaccess dosyası oluşturun:',
	'ERR_PERFORM_NO_TCPIP'				=> '<b>İnternet bağlantısı belirlenemedi.</b>Bağlantı kurulduğunda, lütfen SugarCRM sistemlerine kayıt için <a href="http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register">http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a> adresini ziyaret edin. Firmanızın SugarCRM ürününü nasıl kullanacağı hakkında bilgi sahibi olursak, firmanızın ihtiyaçları doğrultusunda  en uygun yeteneklerin sürekli sunulmasını sağlayabiliriz.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'Sağlanan Oturum dizini geçerli bir dizin değil.',
	'ERR_SESSION_DIRECTORY'				=> 'Sağlanan oturum dizini yazılabilir bir dizin değil.',
	'ERR_SESSION_PATH'					=> 'Kendiniz belirtmek istediğinizde, Oturum dizini gereklidir.',
	'ERR_SI_NO_CONFIG'					=> 'Kök dizinde yer alan config_si.php dosyasını dahil etmemişsiniz ya da config.php dosyasında $sugar_config_si  tanımlamamışsınız',
	'ERR_SITE_GUID'						=> 'Kendiniz belirtmek istediğinizde, Uygulama ID gereklidir.',
    'ERROR_SPRITE_SUPPORT'              => "Şu anda GD kütüphanesinin yerini saptayamıyoruz. Sonuç olarak CSS Sprite fonksiyonunu işlevsel olarak kullanamayacaksınız.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Uyarı: PHP ayarlarının en az 6MB olan dosyaların yüklenmesine izin verecek şekilde değiştirilmelidir.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Yükleme Dosya Boyutu',
	'ERR_URL_BLANK'						=> 'Sugar kurulumu için temel URL adresini girin.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'Kurma kaydı bulunamıyor:',
    'ERROR_FLAVOR_INCOMPATIBLE'         => 'Yüklenen dosya, Sugar\'ın bu sürümüyle (Professional, Enterprise or Ultimate edition) uyumlu değil: ',
	'ERROR_LICENSE_EXPIRED'				=> "Hata: Lisansınızın zamanı geçmiş",
	'ERROR_LICENSE_EXPIRED2'			=> "gün önce (s). Gidiniz <a href=\"index.php?action=LicenseSettings&module=Administration\"Lisans Yönetimi\"</ a> Yönetici ekranından yeni lisans anahtarını girin. Eğer lisans anahtarını son 30 gün içinde yeni bir lisans anahtarı ile değiştirmezseniz, bu uygulamaya girişiniz mümkün olmayacaktır.",
	'ERROR_MANIFEST_TYPE'				=> 'Bildirim dosyası paket türü belirtmelisiniz.',
	'ERROR_PACKAGE_TYPE'				=> 'Bildirim dosyası, tanınmayan bir paket türünü belirtiyor',
	'ERROR_VALIDATION_EXPIRED'			=> "Hata: Doğrulama anahtarınızın zamanı geçti",
	'ERROR_VALIDATION_EXPIRED2'			=> "gün(ler) önce. Gidiniz <a href=\"index.php?action=LicenseSettings&module=Administration\">\"Lisans Yönetimi\"</ a> Yönetici ekranından yeni doğrulama anahtarını girin. Eğer doğrulama anahtarını son 30 gün içinde yeni bir doğrulama anahtarı ile değiştirmezseniz, bu uygulamaya girişiniz mümkün olmayacaktır.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'Yüklenen dosya Sugar&#39;ın bu sürümü ile uyumlu değildir:',

	'LBL_BACK'							=> 'Geri',
    'LBL_CANCEL'                        => 'İptal',
    'LBL_ACCEPT'                        => 'Kabul Ediyorum',
	'LBL_CHECKSYS_1'					=> 'SugarCRM kurulum işleminin doğru olarak tamamlanabilmesi için, aşağıda listelenen tüm kontrol öğelerinin yeşil olduğundan emin olun. Eğer herhangi bir yerde kırmızı varsa,<br /> bunları düzeltmek için gerekli adımları atın.<BR><BR><br /> Kontroller hakkında yardım için almak için, lütfen <br /><a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a> sayfasını ziyaret edin.',
	'LBL_CHECKSYS_CACHE'				=> 'Yazılabilir Cache Alt-Dizinleri',
    'LBL_DROP_DB_CONFIRM'               => 'Sağlanan Veritabanı İsmi zaten mevcut.<br> Aşağıdaki seçenekleriniz bulunmaktadır:<br><br />1. İptal butonuna tıklayın ve yeni bir veritabanı ismi seçin ya da<br><br />2 Kabul butonuna tıklayın ve devam edin. Mevcut veritabanındaki tüm tablolar silinir. <strong> Bu tüm tabloların ve önceden var olan verilerin yok olacağı anlamına gelmektedir.</ strong>',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP Allow Call Time Pass Reference kapalı',
    'LBL_CHECKSYS_COMPONENT'			=> 'Bileşen',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'İsteğe Bağlı Bileşenler',
	'LBL_CHECKSYS_CONFIG'				=> 'Yazılabilir SugarCRM Konfigürasyon dosyası (config.php)',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'Yazılabilir SugarCRM Konfigürasyon Dosyası (config_override.php)',
	'LBL_CHECKSYS_CURL'					=> 'cURL Modülü',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Oturum Kaydedici Yol Ayarı',
	'LBL_CHECKSYS_CUSTOM'				=> 'Yazılabilir Özel Dizin',
	'LBL_CHECKSYS_DATA'					=> 'Yazılabilir Veri Alt-Dizinleri',
	'LBL_CHECKSYS_IMAP'					=> 'IMAP Modülü',
	'LBL_CHECKSYS_MQGPC'				=> 'Fiyat Sihirbazı GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'MB Strings Modülü',
	'LBL_CHECKSYS_MEM_OK'				=> 'OK (Limitsiz)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'OK (Sınırsız)',
	'LBL_CHECKSYS_MEM'					=> 'PHP Bellek Limiti',
	'LBL_CHECKSYS_MODULE'				=> 'Yazılabilir Modül Alt Dizinleri ve Dosyaları',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'MySQL Versiyonu',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'Mevcut değil',
	'LBL_CHECKSYS_OK'					=> 'Tamam',
	'LBL_CHECKSYS_PHP_INI'				=> 'PHP yapılandırma dosyasının lokasyonu (php.ini):',
	'LBL_CHECKSYS_PHP_OK'				=> 'OK (ver',
	'LBL_CHECKSYS_PHPVER'				=> 'PHP Versiyon',
    'LBL_CHECKSYS_IISVER'               => 'IIS Versiyon',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'Tekrar Kontrol et',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'PHP Güvenli Mod Kapalı',
	'LBL_CHECKSYS_SESSION'				=> 'Yazılabilir Oturum Kaydetme Yol (',
	'LBL_CHECKSYS_STATUS'				=> 'Durum',
	'LBL_CHECKSYS_TITLE'				=> 'Sistem Kontrol Kabulü',
	'LBL_CHECKSYS_VER'					=> 'Bulunan: (ver',
	'LBL_CHECKSYS_XML'					=> 'XML Çözümleme',
	'LBL_CHECKSYS_ZLIB'					=> 'ZLIB sıkıştırma Modülü',
	'LBL_CHECKSYS_ZIP'					=> 'Zip İşleme Modülü',
    'LBL_CHECKSYS_BCMATH'				=> 'Rasgele Hassaslıktaki Matematik Modülü',
    'LBL_CHECKSYS_HTACCESS'				=> '.htaccess için AllowOverride ayarı',
    'LBL_CHECKSYS_FIX_FILES'            => 'Devam etmeden önce aşağıdaki dosyaları veya dizinleri düzeltiniz:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Devam etmeden önce aşağıdaki modül dizinleri ve bunların altındaki dosyaları düzeltiniz:',
    'LBL_CHECKSYS_UPLOAD'               => 'Yazılabilir Yükleme Dizini',
    'LBL_CLOSE'							=> 'Kapat',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'oluşturulacak',
	'LBL_CONFIRM_DB_TYPE'				=> 'Veritabanı Türü',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Lütfen aşağıdaki ayarları onaylayın. Değerlerden herhangi birini değiştirmek istiyorsanız, değiştirmek için "Geri" butonuna tıklayın. Aksi takdirde, yükleme işlemine başlamak için "İleri" butonuna tıklayınız.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Lisans Bilgileri',
	'LBL_CONFIRM_NOT'					=> 'değil',
	'LBL_CONFIRM_TITLE'					=> 'Ayarları Onayla',
	'LBL_CONFIRM_WILL'					=> 'olacak',
	'LBL_DBCONF_CREATE_DB'				=> 'Veritabanı Oluştur',
	'LBL_DBCONF_CREATE_USER'			=> 'Kullanıcı Oluştur',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Dikkat: Bu kutu işaretliyse<br>tüm Sugar verisi silinecektir.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Mevcut Sugar tablolarını kaldırın ve yeniden oluştur?',
    'LBL_DBCONF_DB_DROP'                => 'Tabloları Kaldır',
    'LBL_DBCONF_DB_NAME'				=> 'Veritabanı İsmi',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Sugar Veritabanı Kullanıcı Şifresi',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Sugar Veritabanı Kullanıcı Şifresi Tekrar Girin',
	'LBL_DBCONF_DB_USER'				=> 'Sugar Veritabanı Kullanıcı İsmi',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Sugar Veritabanı Kullanıcı İsmi',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Veritabanı Yöneticisinin Kullanıcı İsmi',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Veritabanı Yönetici Şifresi',
	'LBL_DBCONF_DEMO_DATA'				=> 'Veritabanına Demo Verilerini Yüklemek İster misiniz?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Demo Verisini Seçin',
	'LBL_DBCONF_HOST_NAME'				=> 'Sunucu İsmi',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'Sunucu Kurulumu',
	'LBL_DBCONF_HOST_PORT'				=> 'Bağlantı noktası',
    'LBL_DBCONF_SSL_ENABLED'            => 'SSL bağlantısını etkinleştir',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Lütfen aşağıya veritabanı yapılandırma bilgilerinizi giriniz. Ne doldurmanız gerektiğinden emin değilseniz, size varsayılan değerleri kullanmanızı öneririz.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Demo veride Multi-byte metin kullan?',
    'LBL_DBCONFIG_MSG2'                 => 'Veritabanının bulunduğu web sunucusu veya makine (sunucu) İsmi (Örneğin, localhost veya www.mydomain.com gibi):',
    'LBL_DBCONFIG_MSG3'                 => 'Yüklemek üzere olduğunuz Sugar kurulumunun verilerini içerecek veritabanının ismi:',
    'LBL_DBCONFIG_B_MSG1'               => 'Sugar veritabanı kurulumu yapabilmek için, veritabanında tablo ve kullanıcı oluşturabilen, veritabanına yazabilen kullanıcı ismi ve şifresi gereklidir.',
    'LBL_DBCONFIG_SECURITY'             => 'Güvenlik amacıyla, Sugar veritabanına bağlanmak için yetkili bir veritabanı kullanıcısı belirtebilirsiniz. Bu kullanıcı, bu kurulum için belirlenen Sugar veritabanı üzerinde yazma, güncelleme ve geri alma işlemlerini yapabilmelidir. Bu kullanıcı yukarıda belirtilen veritabanı yöneticisi olabilir ya da yeni veya mevcut bir veritabanı kullanıcısı olabilir.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Benim için yap',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Mevcut kullanıcı belirt',
    'LBL_DBCONFIG_CREATE_DD'            => 'Oluşturmak için kullanıcı tanımla',
    'LBL_DBCONFIG_SAME_DD'              => 'Yönetici kullanıcısı ile aynı',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'Tüm Metni Ara',
    'LBL_FTS_INSTALLED'                 => 'Kurulmuş',
    'LBL_FTS_INSTALLED_ERR1'            => 'Tam-Metin arama özelliği kurulu değil.',
    'LBL_FTS_INSTALLED_ERR2'            => 'Yine de kuruluma devam edebilirsiniz, ancak Tam Metin Taramasını kullanılamayacak. Lütfen veritabanı kurulum dokümanına bakınız veya Sistem Yöneticinize başvurun.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Yetkili Veritabanı Kullanıcı Şifresi',
	'LBL_DBCONF_PRIV_USER_2'			=> 'Yukarıdaki Veritabanı Hesabı, Yetkili Kullanıcı mı?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Yetkili veritabanı kullanıcısının veritabanı oluşturma, tablo oluşturma / kaldırma ve kullanıcı oluşturma için uygun haklara sahip olmalıdır. Yetkili kullanıcı, yalnızca yükleme işlemi sırasında kullanılacaktır. Eğer yukarıdaki kullanıcı yeterli ayrıcalıklara sahipse, bu kullanıcıyı kullanabilirsiniz.',
	'LBL_DBCONF_PRIV_USER'				=> 'Yetkili Veritabanı Kullanıcı İsmi',
	'LBL_DBCONF_TITLE'					=> 'Veritabanı Konfigürasyonu',
    'LBL_DBCONF_TITLE_NAME'             => 'Veritabanı İsmini Girin',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Veritabanı Kullanıcı Bilgilerini Sağlayın',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'Bu değişiklik yapıldıktan sonra, yükleme işlemini başlatmak için aşağıdaki "Başlat" butonuna tıklayabilirsiniz. <i>Yükleme tamamlandıktan sonra &#39;installer_locked&#39; değerini &#39;true&#39; olarak değiştirmeniz istenecek.</i>',
	'LBL_DISABLED_DESCRIPTION'			=> 'Yükleyici şu anda bir kez çalıştırıldı. Bir güvenlik önlemi olarak, ikinci bir kez çalıştırılması devre dışı bırakıldı. Eğer yeniden çalıştırmak istediğinizden kesinlikle eminseniz, config.php dosyasına gidin  &#39;installer_locked&#39; adında bir değişken bulun ve &#39;false&#39; olarak ayarlayın (veya ekleyiniz):',
	'LBL_DISABLED_HELP_1'				=> 'Kurulum yardımı için lütfen SugarCRM sayfasını ziyaret edin',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'destek forumları',
	'LBL_DISABLED_TITLE_2'				=> 'SugarCRM Kurulumu pasif hale getirilmiş',
	'LBL_DISABLED_TITLE'				=> 'SugarCRM Kurulumu Pasif',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Bulunduğunuz yerde en yaygın olarak kullanılan Karakter Seti',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Gönderilen E-Posta Ayarları',
    'LBL_EMAIL_CHARSET_CONF'            => 'Giden E-Posta Karakter Seti',
	'LBL_HELP'							=> 'Yardım',
    'LBL_INSTALL'                       => 'Kur',
    'LBL_INSTALL_TYPE_TITLE'            => 'Yükleme Seçenekleri',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Yükleme Tipini seçin',
    'LBL_INSTALL_TYPE_TYPICAL'          => '<b>Tipik Kurulum</b>',
    'LBL_INSTALL_TYPE_CUSTOM'           => '<b>Özelleştirilmiş Yükleme</b>',
    'LBL_INSTALL_TYPE_MSG1'             => 'Anahtar genel uygulama işlevselliği için gerekli olup, kurulum için gerekli değildir. Şu anda anahtarı girmeniz gerekmez, ancak uygulamayı kurduktan sonra anahtar gerekecektir.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Kurulum için minimum bilgi gerektirir. Yeni kullanıcılar için tavsiye edilir.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Kurulum sırasında ayarlamak için ek seçenekler sağlar. Bu seçeneklerin çoğu yönetici ekranları kurulumdan sonra da mevcuttur. İleri düzey kullanıcılar için önerilir.',
	'LBL_LANG_1'						=> 'Sugar içinde, varsayılan dil (ABD-İngilizce) dışında bir dil kullanmak için, şu anda bir dil paketini yükleyip kurabilirsiniz. Sugar uygulamasının içinden de dil paketlerini yükleyip kurabilirsiniz. Bu adımı atlamak istiyorsanız, İleri butonuna tıklayınız.',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Kur',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Sil',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Kaldır',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Yükleyin',
	'LBL_LANG_NO_PACKS'					=> 'boş',
	'LBL_LANG_PACK_INSTALLED'			=> 'Aşağıdaki dil paketleri yüklenmiş:',
	'LBL_LANG_PACK_READY'				=> 'Aşağıdaki dil paketleri yüklenmeye hazır:',
	'LBL_LANG_SUCCESS'					=> 'Dil paketi başarıyla yüklendi.',
	'LBL_LANG_TITLE'			   		=> 'Dil Paketi',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'Şu an Sugar yükleniyor. Bu işlem birkaç dakika sürebilir.',
	'LBL_LANG_UPLOAD'					=> 'Dil Paketi Yükle',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Lisans Kabulü',
    'LBL_LICENSE_CHECKING'              => 'Uyumluluk için sistem denetleniyor.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Ortamı Denetliyor',
    'LBL_LICENSE_CHKDB_HEADER'          => 'DB doğrulama, FTS Kimlik Bilgileri.',
    'LBL_LICENSE_CHECK_PASSED'          => 'Sistem uyumluluk kontrolünü geçti.',
    'LBL_LICENSE_REDIRECT'              => 'Yönlendirme Süresi:',
	'LBL_LICENSE_DIRECTIONS'			=> 'Lisans bilgileriniz varsa, lütfen aşağıdaki alanlara girin.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'İndirme Anahtarını Girin',
	'LBL_LICENSE_EXPIRY'				=> 'Son Geçerlilik Tarihi',
	'LBL_LICENSE_I_ACCEPT'				=> 'Kabul Ediyorum',
	'LBL_LICENSE_NUM_USERS'				=> 'Kullanıcı Sayısı',
	'LBL_LICENSE_PRINTABLE'				=> 'Yazdırılabilir Görünüm',
    'LBL_PRINT_SUMM'                    => 'Özeti Yazdır',
	'LBL_LICENSE_TITLE_2'				=> 'SugarCRM Lisansı',
	'LBL_LICENSE_TITLE'					=> 'Lisans Bilgileri',
	'LBL_LICENSE_USERS'					=> 'Lisanslı Kullanıcılar',

	'LBL_LOCALE_CURRENCY'				=> 'Para Birimi Ayarları',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Varsayılan Para Birimi',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Para Birimi Sembolü',
	'LBL_LOCALE_CURR_ISO'				=> 'Para Birimi Kodu (ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> '1000 ler Ayracı',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Ondalık Ayırıcı',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Örnek',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Anlamlı Basamak',
	'LBL_LOCALE_DATEF'					=> 'Varsayılan Tarih Formatı',
	'LBL_LOCALE_DESC'					=> 'Belirtilen yerel ayarlar global olarak Sugar kurulumuna yansıyacaktır.',
	'LBL_LOCALE_EXPORT'					=> 'Veri Yükle/Dışarı Aktar için Karakter Set <br> <i> (E-Posta, .csv, vCard, PDF, veri yükle) </i>',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'CSV Dışarı Aktarım Ayracı',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Veri Yükle/Dışarı Aktar Ayarları',
	'LBL_LOCALE_LANG'					=> 'Varsayılan Dil',
	'LBL_LOCALE_NAMEF'					=> 'Varsayılan İsim Formatı',
	'LBL_LOCALE_NAMEF_DESC'				=> 's = Bay/Bayan <br /> f = ismi <br /> l = soyismi',
	'LBL_LOCALE_NAME_FIRST'				=> 'David',
	'LBL_LOCALE_NAME_LAST'				=> 'Livingstone',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Dr.',
	'LBL_LOCALE_TIMEF'					=> 'Varsayılan Saat Formatı',
	'LBL_LOCALE_TITLE'					=> 'Yerel Ayarlar',
    'LBL_CUSTOMIZE_LOCALE'              => 'Yerel Ayarları Özelleştir',
	'LBL_LOCALE_UI'						=> 'Kullanıcı Ara yüzü',

	'LBL_ML_ACTION'						=> 'Aksiyon',
	'LBL_ML_DESCRIPTION'				=> 'Tanım',
	'LBL_ML_INSTALLED'					=> 'Yükleme Tarih',
	'LBL_ML_NAME'						=> 'İsim',
	'LBL_ML_PUBLISHED'					=> 'Yayınlanma Tarihi',
	'LBL_ML_TYPE'						=> 'Tipi',
	'LBL_ML_UNINSTALLABLE'				=> 'Kaldırılabilir',
	'LBL_ML_VERSION'					=> 'Versiyon',
	'LBL_MSSQL'							=> 'SQL Server',
	'LBL_MSSQL_SQLSRV'				    => 'SQL Server (PHP için Microsoft SQL Server sürücüsü)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (mysqli uzantısı)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'Sonraki',
	'LBL_NO'							=> 'Hayır',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Site admin şifresi ayarı',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'tablo değişiklik tarihçesi /',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Sugar yapılandırma dosyası oluşturuluyor',
	'LBL_PERFORM_CREATE_DB_1'			=> '<b>Veritabanını oluşturuyor</b>',
	'LBL_PERFORM_CREATE_DB_2'			=> '<b>üzerinde</b>',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Veritabanı kullanıcı ismi ve parola oluşturuyor...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Varsayılan Sugar verisi oluşturuluyor',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'localhost için veritabanı kullanıcı ismi ve şifre oluşturuyor...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Sugar ilişki tablolarını oluşturuyor',
	'LBL_PERFORM_CREATING'				=> 'oluşturuyor /',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Varsayılan raporları oluşturuyor',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Varsayılan planlayıcı işleri oluşturuluyor',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Varsayılan ayarları ekliyor',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Varsayılan kullanıcı oluşturuyor',
	'LBL_PERFORM_DEMO_DATA'				=> 'Veritabanı tabloları demo verileriyle dolduruluyor (bu biraz zaman alabilir)',
	'LBL_PERFORM_DONE'					=> 'tamamlandı<br>',
	'LBL_PERFORM_DROPPING'				=> 'kaldırılıyor /',
	'LBL_PERFORM_FINISH'				=> 'Bitir',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Lisans bilgileri güncelleniyor',
	'LBL_PERFORM_OUTRO_1'				=> 'Sugar Kurulumu',
	'LBL_PERFORM_OUTRO_2'				=> 'şimdi tamamlandı!',
	'LBL_PERFORM_OUTRO_3'				=> 'Toplam süre:',
	'LBL_PERFORM_OUTRO_4'				=> 'saniye.',
	'LBL_PERFORM_OUTRO_5'				=> 'Yaklaşık olarak kullanılan bellek:',
	'LBL_PERFORM_OUTRO_6'				=> 'bytes.',
	'LBL_PERFORM_OUTRO_7'				=> 'Sisteminiz yüklendi ve kullanım ayarları yapıldı.',
	'LBL_PERFORM_REL_META'				=> 'ilişki metası ...',
	'LBL_PERFORM_SUCCESS'				=> 'Başarı!',
	'LBL_PERFORM_TABLES'				=> 'Sugar uygulama tablolarını, değişiklik tarihçesi tablolarını ve ilişkili metadata kayıtlarını oluşturuyor',
	'LBL_PERFORM_TITLE'					=> 'Kurulumu gerçekleştir',
	'LBL_PRINT'							=> 'Yazdır',
	'LBL_REG_CONF_1'					=> 'SugarCRM ürün duyuruları, eğitim haberleri, özel teklifler ve özel etkinlik davetiyeleri almak için lütfen aşağıdaki kısa formu doldurunuz.<br />Toplanılan bilgileri satma, kiralama ya da üçüncü şahıslarla paylaşma gibi amacımız yoktur.',
	'LBL_REG_CONF_2'					=> 'Sadece isminiz ve e-posta adresiniz, kayıt için gerekli alanlardır.  Diğer tüm alanlar isteğe bağlıdır, ama önerilir. Burada girilen bilgilerinizi satmak, kiralamak ya da üçüncü şahıslarla paylaşmak için kullanmamaktayız.',
	'LBL_REG_CONF_3'					=> 'Kayıt olduğunuz için teşekkür ederiz. SugarCRM&#39;e giriş için Son butonuna tıklayın. İlk seferinde, kullanıcı ismini " admin " kullanıcısını ve <br />2. adımda girdiğiniz şifreyi kullanarak oturum açmanız gerekir.',
	'LBL_REG_TITLE'						=> 'Kayıt',
    'LBL_REG_NO_THANKS'                 => 'Hayır, teşekkürler',
    'LBL_REG_SKIP_THIS_STEP'            => 'Bu Adımı atlayın',
	'LBL_REQUIRED'						=> '* Gerekli alan',

    'LBL_SITECFG_ADMIN_Name'            => 'Sugar Uygulaması Yönetici İsmi',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Sugar Yönetici Şifresini Tekrar Girin',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Dikkat: Bu bir önceki kurulumun admin şifrelerini geçersiz kılar.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Sugar Yönetici Kullanıcı Şifresi',
	'LBL_SITECFG_APP_ID'				=> 'Uygulama ID',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Seçtiyseniz, otomatik olarak oluşturulan ID değerinin yerine bir uygulama kimliğini sağlamanız gerekir. ID, diğer Sugar sunucularında kullanılmayan oturum oluşturmanızı garantiler. Eğer Sugar yüklemeleri bir kümesi içindeyse, hepsinin aynı uygulama ID&#39;si paylaşması gerekir.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Kendi Uygulama ID&#39;nizi sağlayın',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Seçildiyse, Sugar Log için bir Log dizini belirtmeniz gerekir. Log dosyası nerede olursa olsun, bir web tarayıcısı üzerinden .htaccess yönlendirme yöntemiyle erişimi sınırlandırılacaktır.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Özelleştirilmiş Log Dizinini Kullanın',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Seçildiyse, Sugar oturum bilgilerini saklamak için güvenli bir klasör sağlamak gerekir. Bu paylaşılan ve saldırıya uğrayabilecek sunucularda oturum bilgilerini tutmanızı engeller.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Sugar için Özelleştirilmiş Oturum Dizinini kullanın',
	'LBL_SITECFG_DIRECTIONS'			=> 'Lütfen site yapılandırma bilgilerini aşağıya giriniz. Alanlardan emin değilseniz, size varsayılan değerleri kullanmanızı öneririz.',
	'LBL_SITECFG_FIX_ERRORS'			=> '<b>Lütfen devam etmeden önce aşağıdaki hataları düzeltin:</b>',
	'LBL_SITECFG_LOG_DIR'				=> 'Log Dizini',
	'LBL_SITECFG_SESSION_PATH'			=> 'Oturum Dizini Yol<br>(yazılabilir olmalı)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Güvenlik Seçeneklerini seçin',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Seçtiyseniz, sistem uygulamanın güncellenmiş sürümleri için periyodik olarak kontrol eder.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Güncellemeleri Otomatik olarak kontrol et?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Sugar güncelleştirmeleri ayarı',
	'LBL_SITECFG_TITLE'					=> 'Site Konfigürasyonu',
    'LBL_SITECFG_TITLE2'                => 'Yönetim Kullanıcısını Belirleme',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Site Güvenliği',
	'LBL_SITECFG_URL'					=> 'Sugar Kurulumunun URL Adresi',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Varsayılanlar Değerleri kullan?',
	'LBL_SITECFG_ANONSTATS'             => 'İsimsiz Kullanım İstatistiklerini Gönder?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'Seçildiyse, Sugar uygulaması kullanım ile ilgili istatistik bilgileri <b>isimsiz</b> olarak SugarCRM firmasına gönderecek.<br />Bu bilgiler, uygulamanın nasıl kullanıldığının daha iyi anlaşılmasına ve ürün geliştirme modelinde iyileştirmeler yapılmasına olanak sağlayacak.',
    'LBL_SITECFG_URL_MSG'               => 'Sugar Kurulumuna erişmek için kullanılacak URL adresini girin. URL adresi, Sugar uygulama sayfalarının URL adresi için temel olarak kullanılacaktır. URL, web sunucusu veya makine ismi veya IP adresi içermelidir.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Sisteminiz için bir isim girin. Bu isim kullanıcılar Sugar uygulamasını ziyaret ettiğinizde tarayıcının başlık çubuğunda görüntülenir.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'Kurulumdan sonra, Sugar uygulamasında oturumu açmak için yönetici düzeyinde kullanıcı (varsayılan kullanıcı ismi = admin) kullanmanız gerekecek. Bu yönetici kullanıcısı için bir parola girin. İlk giriş yaptıktan sonra şifre değiştirilebilir. Farklı bir yönetici kullanıcısı ismi de tanımlayabilirsiniz.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Sisteminiz için karşılaştırma (sıralama) değerini seçin. Bu seçenek kullandığınız dile uygun tablolar oluşturacak. Dilinizin özel ayarlar gerektirmediği durumda lütfen varsayılan değeri kullanın.',
    'LBL_SPRITE_SUPPORT'                => 'Sprite Desteği',
	'LBL_SYSTEM_CREDS'                  => 'Sistem Kimlik Bilgileri',
    'LBL_SYSTEM_ENV'                    => 'Sistem Ortamı',
	'LBL_START'							=> 'İlk',
    'LBL_SHOW_PASS'                     => 'Şifreleri Göster',
    'LBL_HIDE_PASS'                     => 'Şifreleri gizle',
    'LBL_HIDDEN'                        => '<i>(gizli)</i>',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> '<b>Dilinizi seçin</b>',
	'LBL_STEP'							=> 'Adım',
	'LBL_TITLE_WELCOME'					=> 'SugarCRM Sistemine Hoş geldiniz',
	'LBL_WELCOME_1'						=> 'Bu yükleyici SugarCRM veritabanı tabloları oluşturur ve başlatmak için gereken yapılandırma değişkenlerini ayarlar. Tüm süreç yaklaşık on dakika sürer.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'Yüklemek için hazır mısınız?',
    'REQUIRED_SYS_COMP' => 'Gerekli Sistem Bileşenleri',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Başlamadan önce lütfen aşağıdaki sistem bileşenlerinin desteklenen sürümlerinin kurulu olduğundan emin olun:<br><br />            <ul><br />                      <li> Veritabanı/Veritabanı Yönetim Sistemi (Örnekler: MySQL, SQL Server, Oracle, DB2)</li><br />                      <li> Web Sunucusu (Apache, IIS)</li><br />                      </ul><br />                       Kurulumunu gerçekleştirdiğiniz Sugar versiyonu ve bileşenleri arasındaki uyumluluğu, Uyumluluk Matrisi Dokümanında bulabilirsiniz.<br>',
    'REQUIRED_SYS_CHK' => 'İlk Sistem Kontrolü',
    'REQUIRED_SYS_CHK_MSG' =>
                    'Yükleme işlemine başladığınızda, Sugar dosyalarının bulunduğu web sunucusu üzerinde, sistem düzgün yapılandırıldığından ve yüklemeyi başarıyla tamamlamak için gereken tüm bileşenleri barındırdığından emin olmak için sistem kontrolü yapacaktır.<br><br>Sistem aşağıdakilerin tümünü kontrol eder:<br> <ul>                       <li><b>PHP versiyonu</b> &#8211; uygulama ile uyumlu olmalıdır</li>                                         <li><b>Oturum değişkenleri </b> &#8211; düzgün çalışmalı</li>                                             <li> <b>MB Dizileri </b> &#8211; yüklenmeli ve php.ini de etkinleştirilmeli</li>                        <li> <b>Veritabanı desteği </b> &#8211; MySQL, SQL Server, Oracle, veya DB2 için olmalı</li>                        <li> <b>Config.php</b> &#8211; bulunmalı ve yazılabilir yapmak için uygun izinlere sahip olmanız gerekir</li>        <li>Aşağıdaki Sugar dosyaları yazılabilir olmalıdır:<ul><li><b>/custom</li> <li>/cache</li> <li>/modules</li> <li>/upload</b></li></ul></li></ul> Eğer kontrol işlemi başarısız olursa yüklemeye devam edemeyeceksiniz ve hatayı açıklayan bir mesajı belirecektir. Gerekli değişiklikleri yaptıktan sonra yeniden kontrol edip yüklemeye devam edebilirsiniz.<br /><br>',
    'REQUIRED_INSTALLTYPE' => 'Tipik veya Özel kurulum',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "Sistem kontrolü tamamlandığında normal veya özel yükleme seçeneklerinden birini seçebilirsiniz.<br><br><b>Normal</b> ve <b>Özel</b> İki yükleme tipi için de şunları bilmeniz gerekir:<br><ul><li>Sugar verisini tutacak <b>Veritabanı Tipi</b> <ul><li>Uyumlu veri tabanları: MySQL, MS SQL Server, Oracle, DB2.<br><br></li></ul></li>                       <li> Veritabanının bulunduğu <b>Web Sunucusunun</b> veya makine (sunucu) ismi<ul><li>Eğer Sugar dosyalarının bulunduğu web sunucusu ile aynı sunucu üzerinde ise <i>localhost</i> olabilir.<br><br></li></ul></li><li>Sugar verilerini tutacak <b>Veritabanı ismi</b></li><ul><li> Hali hazırda kullanmak istediğiniz bir veritabanı olabilir. Eğer mevcut veritabanı ismi belirtirseniz veritabanındaki tablolar şema yüklemesi sırasında silinecektir.</li><li> Eğer belirttiğiniz veritabanı yoksa verdiğiniz isim yükleme sırasında oluşturulan veritabanında kullanılacaktır.<br><br></li></ul><li><b>Veritabanı yönetici kullanıcı adı ve şifresi</b> <ul><li>Yönetici tablo ve kullanıcı oluşturabilmeli, veritabanına kayıt oluşturabilmelidir.</li><li>Veritabanının lokal bilgisayarda olup olmadığını öğrenmek için veritabanı yöneticisi ile irtibata geçiniz.<br><br></ul></li></li><li> <b>Sugar veritabanı kullanıcı adı ve şifresi</b></li><ul><li> Kullanıcı veritabanı yöneticisi olabilir veya var olan başka bir veritabanı kullanıcısını belirtebilirsiniz.</li><li> Bu amaçla yeni bir veritabanı kullanıcısı oluşturmak isterseniz, yükleme sırasında yeni kullanıcı adı ve şifre belirtebilirsiniz. Yükleme sırasında bu kullanıcı oluşturulur.</li></ul></ul><p><b>Özel</b> Yükleme için şu bilgilerin de bilinmesi gerekir:<br><ul><li> Kurulum sonrasında <b>Sugar uygulamasına erişmek için kullanılacak URL adresi</b>.Bu URL adresi, web sunucusu veya makine ismi  veya IP adresini içermelidir.<br><br></li><li> [Opsiyonel] <b>oturum dizininin lokasyonu</b> Eğer oturum bilgisinin paylaşılan sunucularda güvenlik nedeniyle özel oturum dizini oluşturmak istiyorsanız, .<br><br></li><li> [Opsiyonel] <b>log dizininin lokasyonu</b>Eğer Sugar log dizininin lokasyonunu değiştirmek istiyorsanız .<br><br></li><li> [Opsiyonel] Sugar kurulumlarının aynı oturum ID&#39;sini kullanmasını engelleyen ve otomatik olarak üretilen <b>Uygulama ID</b>&#39;si.<br><br></li><li>Yerel olarak en çok kullanılan <b>Karakter Seti</b>.<br><br></li></ul>Daha ayrıntılı bilgi için lütfen Yükleme Kılavuzuna bakınız",
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Lütfen kuruluma devam etmeden önce aşağıdaki önemli bilgileri okuyunuz. Bu bilgiler şu anda uygulamayı yüklemek için hazır olup olmadığını belirlemenize yardımcı olur.',


	'LBL_WELCOME_2'						=> 'Yükleme belgeleri için lütfen <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a> adresini ziyaret edin.  <BR><BR> Yükleme yardımına yönelik olarak bir SugarCRM destek mühendisiyle iletişim kurmak için lütfen <a target="_blank" href="http://support.sugarcrm.com">SugarCRM Support Portal</a> adresinde oturum açarak bir destek durumu gönderin.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '<b>Dilinizi seçin</b>',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Kurulum Sihirbazı',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'SugarCRM Sistemine Hoş geldiniz',
	'LBL_WELCOME_TITLE'					=> 'SugarCRM Kurulum Sihirbazı',
	'LBL_WIZARD_TITLE'					=> 'Sugar Kurulum Sihirbazı:',
	'LBL_YES'							=> 'Evet',
    'LBL_YES_MULTI'                     => 'Evet - Multibyte',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Süreç İş Akışı Görevleri',
	'LBL_OOTB_REPORTS'		=> 'Rapor Üretimi Planlanmış Görevleri Çalıştırın',
	'LBL_OOTB_IE'			=> 'Gelen Posta kutularını Kontrol et',
	'LBL_OOTB_BOUNCE'		=> 'Gecelik Çalışan Geri Dönen Kampanya E-Postaları',
    'LBL_OOTB_CAMPAIGN'		=> 'Gecelik Çalışan Kitlesel E-Posta Kampanyaları',
	'LBL_OOTB_PRUNE'		=> 'Ayın 1 inde Veritabanında temizlik yap',
    'LBL_OOTB_TRACKER'		=> 'Takipçi Tabloları Temizle',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'E-posta Hatırlatma Bildirimlerini çalıştır',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'tracker_sessions tablosunu güncelleştir',
    'LBL_OOTB_CLEANUP_QUEUE' => 'İş Kuyruğunu Temizle',


    'LBL_FTS_TABLE_TITLE'     => 'Tam-Metin Arama Ayarları Belirtin',
    'LBL_FTS_HOST'     => 'Sunucu',
    'LBL_FTS_PORT'     => 'Bağlantı noktası',
    'LBL_FTS_TYPE'     => 'Arama Motoru Tipi',
    'LBL_FTS_HELP'      => 'Tam metin aramayı etkinleştirmek için, arama motoru türünü seçin ve arama motorunu barındıran Sunucu ve Port bilgilerini girin. Sugar halihazırda elasticsearch arama motorunu desteklemektedir.',
    'LBL_FTS_REQUIRED'    => 'Elastic Search gerekmektedir.',
    'LBL_FTS_CONN_ERROR'    => 'Tam-Metin Arama sunucusuna bağlanılamıyor, ayarlarınızı kontrol edin.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => 'Tam metin arama sunucusu sürümü kullanılamıyor lütfen ayarlarınızı onaylayın.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => 'Desteklenmeyen Esnek arama sürümü tespit edildi. Lütfen şu sürümü kullanın: %s',

    'LBL_PATCHES_TITLE'     => 'Son Yamaları Yükle',
    'LBL_MODULE_TITLE'      => 'Dil Paketlerini Yükle',
    'LBL_PATCH_1'           => 'Bu adımı atlamak istiyorsanız, İleri butonuna tıklayın.',
    'LBL_PATCH_TITLE'       => 'Sistem Yaması',
    'LBL_PATCH_READY'       => 'Aşağıdaki yama(lar) yüklenmeye hazır:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "SugarCRM, web sunucusuna bağlıyken önemli bilgileri depolamak için PHP oturum mekanizmasını kullanmaktadır. Şu anda, PHP kurulumu doğru şekilde yapılandırılmış oturum konfigürasyonuna sahip değil.<br><br>Sık karşılaşılan yanlış yapılandırma, <b>&#39;session.save_path&#39;</b> değerinin geçersiz bir dizine işaret etmesidir.<br><br>Lütfen <a target=_new href=\"http://us2.php.net/manual/en/ref.session.php\">PHP konfigürasyonunu</a> aşağıdaki php.ini dosyasında düzeltin.",
	'LBL_SESSION_ERR_TITLE'				=> 'PHP Oturumu Yapılandırma Hatası',
	'LBL_SYSTEM_NAME'=>'Sistem İsmi',
    'LBL_COLLATION' => 'Karşılaştırma Ayarları',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Sugar kurulumu için Sistem İsmini girin.',
	'LBL_PATCH_UPLOAD' => 'Yerel bilgisayarınızdan bir yama dosyası seçin',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Geri Uyumluluk modu açık. Devam etmek için zend.ze1_compatibility_mod u kapalı duruma getirin',

    'meeting_notification_email' => array(
        'name' => 'Toplantı Bildirimleri E-postaları',
        'subject' => 'SugarCRM Toplantı - $event_name ',
        'description' => 'Bu şablon, Sistem bir kullanıcıya toplantı bildirimleri gönderdiğinde kullanılır.',
        'body' => '<div>
	<p>Alıcı: $assigned_user</p>

	<p>$assigned_by_user sizi bir Toplantıya davet etti</p>

	<p>Konu: $event_name<br/>
	Başlangıç Tarihi: $start_date<br/>
	Bitiş Tarihi: $end_date</p>

	<p>Açıklama: $description</p>

	<p>Bu toplantıyı kabul edin:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Bu toplantıyı geçici olarak kabul edin:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Bu toplantıyı reddedin:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Alıcı: $assigned_user

$assigned_by_user sizi bir toplantıya davet etti

Konu: $event_name
Başlangıç Tarihi: $start_date
Bitiş Tarihi: $end_date

Açıklama: $description

Bu toplantıyı kabul edin:
<$accept_link>

Bu toplantıyı geçici olarak kabul edin
<$tentative_link>

Bu toplantıyı reddedin
<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => 'Arama Bildirimleri E-postaları',
        'subject' => 'SugarCRM Arama - $event_name ',
        'description' => 'Bu şablon, Sistem bir kullanıcıya arama bildirimleri gönderdiğinde kullanılır.',
        'body' => '<div>
	<p>Alıcı: $assigned_user</p>

	<p>$assigned_by_user sizi bir Aramaya davet etti</p>

	<p>Konu: $event_name<br/>
	Başlangıç Tarihi: $start_date<br/>
	Süre: $hoursh, $minutesm</p>

	<p>Açıklama: $description</p>

	<p>Bu aramayı kabul edin:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Bu aramayı geçici olarak kabul edin:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Bu aramayı reddedin:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Alıcı: $assigned_user

$assigned_by_user sizi bir Aramaya davet etti

Konu: $event_name
Başlangıç Tarihi: $start_date
Süre: $hoursh, $minutesm

Açıklama: $description

Bu aramayı kabul edin:
<$accept_link>

Bu aramayı geçici olarak kabul edin
<$tentative_link>

Bu aramayı reddedin
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => 'Atama Bildirimi E-postaları',
        'subject' => 'SugarCRM - Atanan $module_name ',
        'description' => 'Bu şablon, Sistem bir kullanıcıya görev ataması gönderdiğinde kullanılır.',
        'body' => '<div>
<p>$assigned_by_user, &nbsp;$assigned_user kullanıcısına bir&nbsp;$module_name atadı.</p>

<p>Bu&nbsp;$module_name modülünü inceleyebileceğiniz yer:<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user, $assigned_user kullanıcısına bir $module_name atadı.

Bu $module_name modülünü inceleyebileceğiniz yer:
<$module_link>',
    ),

    'scheduled_report_email' => array(
        'name' => 'Planlanmış Rapor E-postaları',
        'subject' => 'Planlanan Rapor: $report_time itibarı ile $report_name',
        'description' => 'Bu şablon, Sistem bir kullanıcıya planlanmış rapor gönderdiğinde kullanılır.',
        'body' => '<div>
<p>Merhaba $assigned_user,</p>
<p>Ekte, sizin için planlanmış otomatik olarak oluşturulan bir raporu bulabilirsiniz.</p>
<p>Rapor Adı: $report_name</p>
<p>Rapor İşleme Tarihi ve Saati: $report_time</p>
</div>',
        'txt_body' =>
            'Merhaba $assigned_user,

Ekte sizin için planlanmış otomatik olarak oluşturulan bir raporu bulabilirsiniz.

Rapor Adı: $report_name

Rapor İşleme Tarihi ve Saati: $report_time',
    ),

    'comment_log_mention_email' => [
        'name' => 'Sistem Yorum Günlüğü E-posta Bildirimi',
        'subject' => 'SugarCRM - $initiator_full_name,bir(n) $singular_module_name üzerinde sizden bahsetti',
        'description' => 'Bu şablon, yorum günlüğü bölümünde etiketlenmiş kullanıcılara e-posta bildirimi göndermek için kullanılır.',
        'body' =>
            '<div>
                <p>Aşağıdaki kaydın yorum günlüğünde sizden bahsedildi:  <a href="$record_url">$record_name</a></p>
                <p>Yorumu görmek için lütfen Sugar\'a giriş yapın.</p>
            </div>',
        'txt_body' =>
'Aşağıdaki kaydın yorum günlüğünde sizden bahsedildi: $record_name
            Yorumu görmek için lütfen Sugar\'a giriş yapın.',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => 'Yeni hesap bilgileri',
        'description' => 'Bu şablon, Sistem Yöneticisi bir kullanıcıya yeni bir şifre gönderirken kullanılır.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Kullanıcı İsminiz ve Geçici Şifreniz aşağıda paylaşılmaktadır: </p><p>Kullanıcı İsmi : $contact_user_user_name </p><p>Şifre : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Yukarıdaki şifreyi kullanarak uygulamaya bağlandıktan sonra, şifreyi değiştirmeniz gerekebilir.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
'Aşağıda kullanıcı ismi ve geçici şifre bulunmaktadır:<br />Kullanıcı İsmi :  $contact_user_user_name<br />Şifre: $contact_user_user_hash<br /><br />$config_site_url<br /><br />Üstteki şifreyi kullanıp sisteme girdikten sonra, kendi seçtiğiniz bir parola ile sıfırlama gerekli olabilir.',
        'name' => 'Sistem tarafından oluşturulan E-Posta şifresi',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Hesabınızın şifresini sıfırlayınız',
        'description' => "Bu şablon, kullanıcı hesabının şifresini sıfırlama linkini kullanıcıya göndermek için kullanılır.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Kısa süre önce ($contact_user_pwd_last_changed) hesabınızın şifresinin sıfırlanması için talepte bulunmuşsunuz. </p><p>Şifrenizi sıfırlamak için aşağıdaki linke tıklayın:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
'Kısa süre önce, $contact_user_pwd_last_changed üzerinde hesap şifrenizi sıfırlama isteğinde bulundunuz.<br /><br />Aşağıdaki adrese tıklayarak, şifrenizi sıfırlayabilirsiniz:<br /><br />$contact_user_link_guid',
        'name' => 'Unutulan Şifre e-postası',
        ),

'portal_forgot_password_email_link' => [
    'name' => 'Portal Forgot Password Email',
    'subject' => 'Reset your account password',
    'description' => 'This template is used to send a user a link to click to reset the Portal user\'s account password.',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>You recently requested to reset your account password. </p><p>Click on the link below to reset your password:</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'
    You recently requested to reset your account password.

    Click on the link below to reset your password:

    $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => 'Portal Password Reset Confirmation Email',
        'subject' => 'Your account password has been reset',
        'description' => 'This template is used to send a confirmation to a Portal user that their accout password has been reset.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>This email is to confirm that your Portal account password has been reset. </p><p>Use the link below to log in to the Portal:</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
    This email is to confirm that your Portal account password has been reset.

    Use the link below to log in to the Portal:

    $portal_login_url',
    ],
);
