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

$mod_strings = array(
    'LBL_LOADING' => 'Yükleniyor' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Seçenekleri Gizle' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Sil' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'SugarCRM Tarafından Geliştirildi' /*for 508 compliance fix*/,
    'LBL_ROLE' => 'Rol',
    'LBL_BASE_LAYOUT' => 'Temel Düzen',
    'LBL_FIELD_NAME' => 'Alan İsmi',
    'LBL_FIELD_VALUE' => 'Değer',
    'LBL_LAYOUT_DETERMINED_BY' => 'Yerleşimi belirleyen:',
    'layoutDeterminedBy' => [
        'std' => 'Standart Düzen',
        'role' => 'Görev',
        'dropdown' => 'Açılır Alan',
    ],
    'LBL_DELETE_CUSTOM_LAYOUTS' => 'Tüm özel düzenler kaldırılacak. Mevcut düzen tanımlarınızı değiştirmek istediğinizden emin misiniz?',
'help'=>array(
    'package'=>array(
            'create'=>'Paket için <b>İsim</b> belirtin. Girdiğiniz isim  alfa numerik olmalıdır ve boşluk içermemelidir. (Örnek: HR_Management)<br/><br/>Paket için <b>Yazar</b> ve <b>Açıklama</b> bilgilerini kullanabilirsiniz.<br/><br/>Paketi oluşturmak için  <b>Kaydet</b> butonuna tıklayın.',
            'modify'=>'<b>Paket</b> için özellikler ve olası aksiyonlar burada görünür. <br><br>Paketin <b>İsmini,</b> <b>Yazarını</b> ve <b>Açıklamasını</b> değiştirebilirsiniz, bunun yanında paket içinde yer alan tüm modüllerin görüntüleyebilir ve özelleştirebilirsiniz.<br><br>Pakete bir modül oluşturmak için <b>Yeni Modül</b>&#39;e tıklayın.<br><br>Eğer paket en az bir modül içeriyorsa, paketi <b>Yayınlanabilir</b> ve <b>Uygula</b>&#39;nabilir bunun yanında paket içindeki yapılan özelleştirmeleri <b>Dışarı Aktar</b>&#39;abilirsiniz.',
            'name'=>'Bu geçerli paketin <b>İsmi</b> olarak belirlenmiş bilgisidir.<br/><br/>Girilen isim alfa numerik olmalı, bir harf ile başlamalı ve herhangi bir boşluk içermemelidir. (Örnek: HR_Management)',
            'author'=>'Bu alan kurulum sırasında, paketi oluşturan birim olarak gösterilecek <b>Yazar</ b> bilgisini içerir. <br><br>Yazar, ya bir birey ya da bir şirket olabilir.',
            'description'=>'Bu alan kurulum sırasında gösterilen, pakete ait <b>Açıklama</ b> bilgilerini içerir.',
            'publishbtn'=>'Girilen verileri kaydetmek ve paketin yüklenebilir bir sürümünün zip dosyasını oluşturmak için. <b>Yayınla</ b>butonuna tıklayın.<br><br> .zip dosyası ve paketi yüklemek için <b>Modül Yükleyici</ b> kullanılır.',
            'deploybtn'=>'Girilen tüm verileri kaydetmek, paketin bütün modüllerini uygulamaya yüklemek için <b>Uygula</b>&#39;ya tıklayın.',
            'duplicatebtn'=>'Paketin içeriğini yeni bir pakete kopyalamak ve yeni paketi göstermek için <b>Aynı Kayıttan Oluştur</b> butonuna basın.<br/><br/> Yeni bir paketin isminin sonuna sayı ekleyerek otomatik olarak yeni bir paket ismi oluşturulacak. Yeni bir <b>İsim</b> girerek ve <b>Kaydet</b> butonuna tıklayarak yeni paketin ismini değiştirebilirsiniz.',
            'exportbtn'=>'Paketin içindeki yapılan özelleştirmeleri içeren bir zip dosyası oluşturmak için <b>Dışarı Aktar</b> butonuna tıklayın.<br><br> Oluşturulan dosya paketin, paketin yüklenebilir bir versiyonu değildir. <br><br><b>Modül Yükleyici</b>&#39;yi kullanarak .zip dosyasını yüklediğinizde, paket ve özelleştirmeleri Modül Oluşturucuda görebilirsiniz.',
            'deletebtn'=>'Bu paketi ve bu paket ile ilgili tüm dosyaları silmek için  <b>Sil</b> butonuna tıklayın.',
            'savebtn'=>'Paketi ile ilgili tüm girilen verileri kaydetmek için  <b>Kaydet</ b> butonuna tıklayın.',
            'existing_module'=>'Özellikleri değiştirmek ve modül ile ilgili alanları, ilişkileri ve yerleşimi özelleştirmek için  <b>Modül</b> simgesine tıklayın.',
            'new_module'=>'Bu paket için yeni bir modül oluşturmak için <b>Yeni Modül</b> butonuna tıklayın.',
            'key'=>'5 harfli, alfa numerik <b>Anahtar</b>,  mevcut paketteki tüm modüllere ait tüm dizinlerin, sınıf isimlerinin ve veritabanı tablolarının önüne eklenir. <br><br> Anahtar, tablo ismini tekil yapmak için kullanılır.',
            'readme'=>'Bu paket için <b>Beni oku</b> metni eklemek için tıklayın. <br><br> Beni oku kurulum sırasında mevcut olacak.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'Modül için bir <b>İsim</b> belirtin. Belirttiğin <b>Etiket</b> navigasyon sekmesinde belirecek. <br/><br/> Navigasyon sekmesinin modül için gözükmesini sağlamak için <b>Navigasyon Sekme</b> checkbox&#39;unu işaretleyin. <br/><br/> Modül kayıtları içindeki Takım seçimi alanına sahip olmak için <b>Takım Güvenliğini</b> işaretleyin. <br/><br/> Daha sonra oluşturmak istediğiniz modül tipini seçin. <br/><br/> Şablon tipi seçin. Her şablon, modülün temelini oluşturmak için alanlara ve önceden belirlenmiş yerleşimlere sahiptir.<br/><br/> Modülü oluşturmak için <b>Kaydet</b>&#39;e basın.',
        'modify'=>'Modül özelliklerini değiştirebilir ya da bu modül ile ilgili <b>Alanları</b>, <b>İlişkileri</b> ve <b>Yerleşimleri</b> özelleştirebilirsiniz.',
        'importable'=>'Bu modül için <b>Veri Yüklenebilir</b> kutucuğunun işaretlenmesi, veri yüklemeyi aktif hale getirecek.<br><br> Modülde yer alan kısa yolları panelinde Veri Yükleme Sihirbazı linki görüntülenecek. Veri Yükleme Sihirbazı harici kaynaklardan özelleştirilmiş modüle veriyi aktarmayı kolaylaştırır.',
        'team_security'=>'Bu modül için <b>Takım Güvenliği</b> kutucuğunu işaretleme takım güvenliğini aktif hale getirir.<br/><br/> Eğer takım güvenliği aktif edilmişse, modül içindeki kayıtlar içinde Takım seçim alanı görünür hale gelecektir',
        'reportable'=>'Bu kutunun işaretlenmesi ile bu modül üzerinde raporların çalışmasına izin verecektir.',
        'assignable'=>'Bu kutunun işaretlenmesi, seçilen kullanıcıya modülün kaydının atanmasını izin verecektir.',
        'has_tab'=>'<b>Navigasyon Bar Sekmesi</b> işaretlenmesi, modül için bir navigasyon sekmesi sağlayacaktır.',
        'acl'=>'Bu modül için bu kutucuğun işaretlemesi, Alan Seviyesinde Güvenlik dahil olmak üzere Erişim Kontrollerini aktif hale getirir.',
        'studio'=>'Bu kutucuğu işaretleme, yöneticilerin bu modülü Stüdyo içinde özelleştirmesine izni verecektir.',
        'audit'=>'Bu kutucuğun işaretlenmesi, modül için Değişiklik Tarihçesini aktif hale getirecek. Belirli alanlarda değişiklikler kayıt edilecek ve yöneticiler tarafından değişiklik tarihçesi incelenebilir.',
        'viewfieldsbtn'=>'Modülle ilişkili alanları görüntülemek, özel alanlar oluşturmak ve değiştirmek için <b>Alanları Görüntüle</b> butonuna tıklayın.',
        'viewrelsbtn'=>'Modülle ilgili ilişkileri görüntülemek ve yeni ilişkiler oluşturmak için <b>İlişkileri Görüntüle</b> linkine tıklayın.',
        'viewlayoutsbtn'=>'Modüldeki yerleşimleri görüntülemek ve alanların ekrandaki yerini  özelleştirmek için <b>Yerleşimleri Görüntüle</b> butonuna tıklayınız.',
        'viewmobilelayoutsbtn' => '<b>Mobil Yerleşimleri Gör</b> tuşuna basarak, modül için mobil yerleşimleri görün ve bu yerleşim içinde alan düzenlemelerini değiştirin.',
        'duplicatebtn'=>'Modülün özelliklerini yeni bir modüle kopyalamak ve yeni bir modülü göstermek için <b>Aynı Kayıttan Oluştur</b> butonuna tıklayın.<br/><br/> Yeni modül için, kullanılan modülün isminin sonuna otomatik olarak sayı eklenerek yeni bir ismi oluşturulacak.',
        'deletebtn'=>'Bu modülü silmek için <b>Sil</b> butonuna tıklayın.',
        'name'=>'Şimdiki modülün <b>İsmidir</b>. <br/><br/>İsim alfa numerik olmalı, harfle başlamalı ve boşluk içermemelidir. (Örnek: HR_Management)',
        'label'=>'Bu <b>Etiket</b> modül için navigasyon sekmesinde görünecektir.',
        'savebtn'=>'Modül ile ilgili tüm girilen verileri kaydetmek için <b>Kaydet</ b> butonuna tıklayın.',
        'type_basic'=>'<b>Temel</b> şablon türü ad, atanan, takım, oluşturulma tarihi ve açıklama alanları gibi temel alanları sağlar.',
        'type_company'=>'<b>Firma</b> şablon türü Firma İsmi, Endüstri, Fatura Adresi gibi organizasyona özgü alanları sunar.<br/><br/> Standart Müşteriler modülüne benzer modülleri oluşturmak için bu şablonu kullanın.',
        'type_issue'=>'<b>Problem</b> şablon türü Numara, Durum, Öncelik ve Açıklama gibi probleme ve hataya özgü alanları içerir.<br/><br/> Standart Talep ve Hata Takibi modülüne benzer modülleri oluşturmak için bu şablonu kullanın.',
        'type_person'=>'<b>Kişi</b> şablon türü Hitap, Unvan, İsim, Adres ve Telefon Numarası gibi kişiye özgü alanları sunar.<br/><br/> Standart Kontak ve Potansiyel modülüne benzer modülleri oluşturmak için bu şablonu kullanın.',
        'type_sale'=>'<b>Satış</b> şablon türü Potansiyel Kaynağı, Aşama, Miktar ve Olasılık gibi fırsata özgü alanları sunar.<br/><br/> Standart Fırsat modülüne benzer modülleri oluşturmak için bu şablonu kullanın.',
        'type_file'=>'<b>Dosya</b> şablon türü Dosya İsmi, Doküman Türü ve Yayınlanma Tarihi gibi dokümana özgü alanları sunar.<br><br> Standart Dokümanlar modülüne benzer modülleri oluşturmak için bu şablonu kullanın.',

    ),
    'dropdowns'=>array(
        'default' => 'Uygulama için tüm <b>Açılır-Listeler</b> burada listelenmektedir.<br><br> açılır-listeler, herhangi bir modülde açılır-liste alanlarında kullanılabilir.<br><br>Mevcut bir açılır-listede değişiklik yapmak için açılır-liste ismini tıklayın.<br><br>Yeni açılır-liste eklemek için <b>Açılır-Liste Ekle</b> ismine tıklayın.',
        'editdropdown'=>'Açılır-Listeleri herhangi bir modülde standart veya gelişmiş açılır-liste alanlarında kullanılabilir. <br><br>Açılır-listesi için bir <b>İsim</b> girin.<br><br>Herhangi bir dil paketi yüklü ise liste elemanlarını kullanmak için <b>Dil</b> sekmesini seçebilirsiniz.<br><br><b>Öğe İsmi</b> alanında, açılır-listesindeki opsiyon için isim girin. Bu alan kullanıcıların görüntüleyebildiği açılır-listesinde gözükmeyecektir.<br><br><b>Etiket Görüntüle</b> alanında, bir etiket ismi girin, ki bu alan kullanıcılar tarafından görülebilir.<br><br>Eleman ve Etiket ismi girdikten sonra <b>Ekle</b>&#39;yi tıklayın ve Açılır-liste elemanları eklenmiş olacaktır.<br><br>Liste elemanlarını tekrar sıralamak için, elemanları ilgili pozisyonlara sürükle bırak şeklinde yerleştirebilirsiniz.<br><br>Liste elemanının etiketini düzenlemek için, Etiket <b>Değiştir ikon</b>&#39;una tıklayın, ve yeni etiket ekleyin. Açılır-listesinden eleman silmek için, <b>Sil ikon</b>&#39;una tıklayın.<br><br>Etiketteki değişiklikleri geri almak için,<b>Geri Al</b>&#39;ı tıklayın. Geri alınan değişiklikleri tekrar yapmak için,<b> İleri Al</b>&#39;ı tıklayın.<br><br><b>Kaydet</b> butonunu tıklayarak Açılır-listesini kaydedin.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Yaptığınız değişiklikleri kaydetmek ve modül içinde etkin hale getirmek için <b>Kaydet & Uygula</b> butonuna tıklayın.',
        'historyBtn'=> 'Daha önce kaydedilmiş yerleşimleri listelemek ve geri getirmek için <b>Geçmişi Görüntüle</b> butonuna basınız.',
        'historyRestoreDefaultLayout'=> 'Bir görüntüyü orijinal düzenine geri yüklemek için <b>Varsayılan Düzeni Geri Yükle</b> düğmesine tıklayın.',
        'Hidden' 	=> '<b>Gizli</b> alanlar alt panelde görünmez.',
        'Default'	=> '<b>Varsayılan</b> alanlar alt panelde görünür.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Yaptığınız değişiklikleri kaydetmek ve modül içinde etkin hale getirmek için <b>Kaydet & Uygula</b> butonuna tıklayın.',
        'historyBtn'=> 'Daha önce kaydedilmiş yerleşimleri listelemek ve geri getirmek için <b>Geçmişi Görüntüle</b> butonuna basınız.<br><br> <b>Tarihçe</b> içindeki <b>Geri Yükle</b> önceden kaydedilmiş yerleşimleri geri yükler. Alan etiketlerini değiştirmek için, her alanın yanındaki Değiştir simgesini tıklatın.',
        'historyRestoreDefaultLayout'=> 'Bir görüntüyü orijinal düzenine geri yüklemek için <b>Varsayılan Düzeni Geri Yükle</b> düğmesine tıklayın.<br><br><b>Varsayılan Düzeni Geri Yükle</b> sadece orijinal düzen içindeki alan yerleştirmesini geri yükler. Alan etiketlerini değiştirmek için her alanın yanında bulunan Düzenle simgesine tıklayın.',
        'Hidden' 	=> 'Kullanıcıların ListeGörünümü için <b>Gizli</b> alanlar bulunmamakta.',
        'Available' => '<b>Mevcut</b> alanlar başlangıçta gösterilmemesine rağmen; kullanıcılar tarafından ListeGörünümü&#39;ne eklenebilir.',
        'Default'	=> '<b>Varsayılan</b> alanlar kullanıcılar tarafından özelleştirilmemiş olan ListeGörünüm&#39;lerinde görünür.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Yaptığınız değişiklikleri kaydetmek ve modül içinde etkin hale getirmek için <b>Kaydet & Uygula</b> butonuna tıklayın.',
        'historyBtn'=> 'Daha önce kaydedilmiş yerleşimleri listelemek ve geri getirmek için <b>Geçmişi Görüntüle</b> butonuna basınız.<br><br> <b>Tarihçe</b> içindeki <b>Geri Yükle</b> önceden kaydedilmiş yerleşimleri geri yükler. Alan etiketlerini değiştirmek için, her alanın yanındaki Değiştir simgesini tıklatın.',
        'historyRestoreDefaultLayout'=> 'Bir görüntüyü orijinal düzenine geri yüklemek için <b>Varsayılan Düzeni Geri Yükle</b> düğmesine tıklayın.<br><br><b>Varsayılan Düzeni Geri Yükle</b> sadece orijinal düzen içindeki alan yerleştirmesini geri yükler. Alan etiketlerini değiştirmek için her alanın yanında bulunan Düzenle simgesine tıklayın.',
        'Hidden' 	=> 'Kullanıcıların ListeGörünümü için <b>Gizli</b> alanlar bulunmamakta.',
        'Default'	=> '<b>Varsayılan</b> alanlar kullanıcılar tarafından özelleştirilmemiş olan ListeGörünüm&#39;lerinde görünür.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> '<b>Kaydet & Uygula</b> butonuna tıklamak tüm değişiklikleri kaydedecek ve hepsini aktif hale getirecektir',
        'Hidden' 	=> 'Arama içinde <b>Gizli</b> alanlar görünmez.',
        'historyBtn'=> 'Daha önce kaydedilmiş yerleşimleri listelemek ve geri getirmek için <b>Geçmişi Görüntüle</b> butonuna basınız.<br><br> <b>Tarihçe</b> içindeki <b>Geri Yükle</b> önceden kaydedilmiş yerleşimleri geri yükler. Alan etiketlerini değiştirmek için, her alanın yanındaki Değiştir simgesini tıklatın.',
        'historyRestoreDefaultLayout'=> 'Bir görüntüyü orijinal düzenine geri yüklemek için <b>Varsayılan Düzeni Geri Yükle</b> düğmesine tıklayın.<br><br><b>Varsayılan Düzeni Geri Yükle</b> sadece orijinal düzen içindeki alan yerleştirmesini geri yükler. Alan etiketlerini değiştirmek için her alanın yanında bulunan Düzenle simgesine tıklayın.',
        'Default'	=> 'Arama ekranında görünecek <b>Varsayılan</b> alanlar.'
    ),
    'layoutEditor'=>array(
        'defaultdetailview'=>'The <b>Layout</b> area contains the fields that are currently displayed within the <b>DetailView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'defaultquickcreate'=>'The <b>Layout</b> area contains the fields that are currently displayed within the <b>QuickCreate</b> form.<br><br>The QuickCreate form appears in the subpanels for the module when the Create button is clicked.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        //this defualt will be used for edit view
        'default'	=> 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>EditView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        //this defualt will be used for edit view
        'defaultrecordview'   => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>Record View</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'saveBtn'	=> 'Yerleşim üzerinde, son kayıttan sonra yapılan değişiklikleri saklamak için <b>Kaydet</b> butonuna basınız.<br><br> Kaydedilen değişiklikler Uygulanana kadar modülde gösterilmeyecektir.',
        'historyBtn'=> 'Daha önce kaydedilmiş yerleşimleri listelemek ve geri getirmek için <b>Geçmişi Görüntüle</b> butonuna basınız.<br><br> <b>Tarihçe</b> içindeki <b>Geri Yükle</b> önceden kaydedilmiş yerleşimleri geri yükler. Alan etiketlerini değiştirmek için, her alanın yanındaki Değiştir simgesini tıklatın.',
        'historyRestoreDefaultLayout'=> 'Bir görüntüyü orijinal düzenine geri yüklemek için <b>Varsayılan Düzeni Geri Yükle</b> düğmesine tıklayın.<br><br><b>Varsayılan Düzeni Geri Yükle</b> sadece orijinal düzen içindeki alan yerleştirmesini geri yükler. Alan etiketlerini değiştirmek için her alanın yanında bulunan Düzenle simgesine tıklayın.',
        'publishBtn'=> 'En son kayıt işleminizden bu yana yerleşim için yapılan tüm değişiklikleri kaydetmek ve modüldeki değişiklikleri etkin hale getirmek için <b>Kaydet & Uygula</ b> butonuna tıklayın.<br><br>Yerleşim hemen modülde görüntülenir.',
        'toolbox'	=> '<b>AraçKutusu</b> <b>Geri Dönüşüm Kutusunu</b> yerleşime eklenebilecek elemanları ve mevcut alanları içerir.<br/><br/>AraçKutusu içerisindeki yerleşim eleman ve alanları, yerleşim içerisine sürükle bırak şeklinde yerleştirilebilir, ve yerleşim eleman ve alanları AraçKutusu&#39;ndan yerleşime sürükle bırak şeklinde aktarılabilir.<br><br> Yerleşim elemanları <b>Paneller</b> ve <b>Satırlar</b>&#39;dır. Yeni satır veya panel ekleme, yerleşime daha fazla alan ekleme olanağı sağlar.<br/><br/>.Bir alanı başka bir alanla değişmek veya eklemek istediğiniz alanı değiştirmek istediğiniz alanın üzerine sürükleyip bırakın.<br/><br/> <b>Doldurucu</b> alanı bırakıldığı yerleşimde boş bir alan oluşturur.',
        'panels'	=> '<b>Yerleşim</b> alanı, düzende yapılan değişikliklerin uygulanması sonrası, modülde nasıl görüneceğini izleme imkanını sağlar.<br/><br/>Alanları, satırları ve panelleri istediğiniz pozisyona sürükle bırak yöntemiyle taşıyabilirsiniz.<br/><br/>AraçKutusu&#39;ndan <b>Geri Dönüşüm Kutusuna</b> sürükleyip bırakarak elamanları silebilir, veya aynı şekilde <b>AraçKutusu</b>&#39;ndan istediğiniz pozisyona sürükleyip bırakarak yeni eleman ekleyebilirsiniz.',
        'delete'	=> 'Herhangi bir unsuru yerleşimden çıkarmak için buraya sürükleyip bırakın',
        'property'	=> 'Bu alan için görünen etiketi değiştirin.<br/><b>Sekme Emri</b> sekme anahtarının alanlar arasındaki geçiş sırasını kontrol eder.',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'Modül için mevcut <b>Alanlar</b>, isimlerine göre sıralanmıştır.<br><br> Daha sonra oluşturulan alanlar, modül için varsayılan alanların üstünde listelenir.<br><br> Bir alanı değiştirmek için, ilgili <b>Alan İsmini</b> tıklayın.<br/><br/> Yeni alan eklemek için <b>Alan Ekle</b>&#39;yi tıklayın.',
        'mbDefault'=>'Modül için mevcut <b>Alanlar</b>, isimlerine göre burada sıralanmıştır. <br><br> Bir alanın özelliklerini konfigüre etmek için, Alan İsmine tıklayın.<br><br> Yeni bir alan oluşturmak için,<b>Alan Ekle</b>&#39;yi tıklayın. Oluşturulan yeni alanın etiketi ile birlikte diğer özellikleri Alan İsmi tıklanarak düzenlenebilir.<br><br> Modül uygulandıktan sonra Modül Oluşturucu ile oluşturulmuş alanlar, Stüdyoda bulunan modülde varsayılan alanlar olarak değerlendirilir.',
        'addField'	=> 'Yeni alan için <b>Data Tipi</b> seçin. Seçtiğiniz data tipi ilgili alana girilecek karakter tiplerini belirler. Örneğin, Integer data tipindeki alanlara sadece integer sayı değerleri girilebilir.<br><br>Alan için <b>İsim</b> girin. İsim, alfa numerik olmalıdır ve boşluk içermemelidir. Yalnız alt çizgi kullanılabilir.<br><br><b>Görüntü etiketi</b>, alanın modül yerleşiminde görünen etiketidir.<b>Sistem Etiketi</b> kodda alana ulaşmak için kullanılır.<br><br>Seçtiğiniz data tipine bağlı olarak, aşağıdaki bazı veya tüm özellikler ilgili alana eklenebilir:<br><br><b>Yardım Metni</b>, kullanıcı fare ile alanın üzerine geldiğinde geçici olarak görünür ve ilgili alana nasıl bir değer gireceği konusunda kullanıcıyı bilgilendirir.<br><br><b>Yorum Metni</b> sadece Stüdyo ve/veya Modül Oluşturucu&#39;da görünür ve sistem yöneticisi için alan hakkında bilgi verir.<br><br><b>Varsayılan Değer</b>, alanda görünür. Kullanıcılar, varsayılan değeri kullanabildikleri gibi yeni değer de girebilirler.<br><br><b>Toplu güncelleştirme</b> seçeneği alan için Toplu Güncelleştirme imkanı sağlar.<br><br><b>Maksimum Boyut</b>, o alan için girilebilecek maksimum karakter sayısını gösterir.<br><br><b>Gerekli Alan</b> seçimi alan için zorunlu bir değer gerektirir. Alanı içeren bir kaydı kaydetmek için gerekli alanların doldurulması zorunludur.<br><br><b>Raporlanabilir</b> seçeneği ilgili alanın filtrelenmesini ve bu alanın Raporlar&#39;da görüntülenebilmesini sağlar.<br><br><b>Değişiklik Tarihçesi</b>, Değişiklik Tarihçesinde takip etme seçeneğidir.<br><br><b>Eklenebilir</b> seçimi ile alana Veri Yükleme Sihirbazı ile data eklemeye izin verme, zorunlu hale getirme veya engelleme özelliği eklenmiş olur.<br><br><b>Aynı Kayıtları Birleştir</b> seçeneği ilgili alan için aynı kayıttan oluşturma ve aynı kayıtları bul özelliklerini aktif veya pasif hale getirir.<br><br>Ek özellikler belirli veri tipleri için eklenebilir.',
        'editField' => 'Bu alanın özellikleri, özelleştirilebilir.<br><br>Aynı özelliklere sahip yeni bir alan oluşturmak için <b>Aynı Kayıttan Oluştur</b> butonuna Tıklayın.',
        'mbeditField' => 'Bir şablon alanının <b>Görüntü Etiketi</b> özelleştirilebilir. Fakat diğer özellikleri üzerinde herhangi bir özelleştirme yapılamaz.<br><br>.<b>Aynı Kayıttan Oluştur</b> butonu ile aynı özellikte yeni bir alan  oluşturulabilir.<br><br>Bir alanın modülde görünmesini istemiyorsanız ilgili <b>Yerleşim</b>&#39;den o alanı kaldırınız.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Stüdyo üzerinde yapılan özelleştirmelerin, başka bir sistemde <b>Modül Yükleyici</b> ile yüklenmesine izin veren dosya formatına aktarılması.<br><br>İlk olarak, <b>Paket İsmi</b> girin. Aynı zamanda paket için <b>Yazar</b> ve <b>Açıklama</b> bilgisini de girebilirsiniz.<br><br>Dışarı aktarmak istediğiniz, özelleştirilmiş modülleri seçin. Seçeneklerde sadece özelleştirilen modüller gösterilecektir.<br><br> Daha sonra <b>Dışa Aktar</b> diyerek .zip dosyası oluşturun.',
        'exportCustomBtn'=>'Üretmek istediğiniz özelleştirmeleri içeren paketin .zip dosyasını oluşturmak için <b>Dışarı Aktar</b> butonuna tıklayın.',
        'name'=>'Bu paketin <b>İsim</b> bilgisidir. Yükleme sırasında görünecektir.',
        'author'=>'Bu <b>Yazar</b> paketi oluşturanın ismi olarak kurulum sırasında görüntülenir. Yazar bir şahıs yada bir şirket olabilir.',
        'description'=>'Bu alan kurulum sırasında gösterilen, pakete ait <b>Açıklama</ b> bilgilerini içerir.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> '<b>Geliştirici Araçları</b> bölümüne hoş geldiniz.<br/><br/>Bu bölümdeki araçları kullanarak, standart ve özelleştirilmiş modüller, bunların içinde alanlar oluşturmak ve yönetmek mümkün olmaktadır.',
        'studioBtn'	=> 'Uygulanmış modülleri özelleştirmek için <b>Stüdyo</b> kullanın.',
        'mbBtn'		=> 'Yeni modüller oluşturmak için <b>Modül Oluşturucu</b> kullanın.',
        'sugarPortalBtn' => 'Sugar Portal&#39;ını yönetmek ve özelleştirmek için <b>Sugar Portal Editör</b> kullanın.',
        'dropDownEditorBtn' => 'Açılır-liste alanları için global değerler eklemek ve değiştirmek için <b>Açılır-Liste Editör</b> ekranlarını kullanın.',
        'appBtn' 	=> 'Uygulama modu, ana sayfada kaç tane TPS raporu gösterileceği gibi program özelliklerinin özelleştirildiği yerdir',
        'backBtn'	=> 'Önceki adıma dön.',
        'studioHelp'=> 'Hangi bilgilerin görüneceğine karar vermek için <b>Stüdyo</b> kullanılabilir.',
        'studioBCHelp' => 'modülün geriye dönük uyumluluk modülü olduğunu gösterir',
        'moduleBtn'	=> 'Modülü değiştirmek için tıklayın.',
        'moduleHelp'=> 'Modül için özelleştirilebilir bileşenler burada görünür.<br> <br> Değiştirilecek bileşeni seçmek için bir simgeye tıklayın.',
        'fieldsBtn'	=> 'Modül içinde bilgileri kaydetmek için <b>Alanlar</b> oluştur ve özelleştir.',
        'labelsBtn' => 'Modüldeki alanlarda ve diğer başlıklarda görüntülenen <b>Etiketleri</b> değiştirin.'	,
        'relationshipsBtn' => 'Modül için yeni <b>İlişki</b> ekle veya görüntüle.' ,
        'layoutsBtn'=> 'Modül <b>Yerleşimlerini</b> özelleştir. Yerleşim, modül alanlarının farklı görünümleridir.<br><br>Hangi alanların görüneceğini ve nasıl organize olduklarını belirleyebilirsiniz.',
        'subpanelBtn'=> 'Modülde <b>Alt paneller</b> içinde hangi alanların görüneceğini belirleyin.',
        'portalBtn' =>'<b>Sugar Portal</b> içinde kullanılan modül <b>Yerleşimlerini</b> özelleştir.',
        'layoutsHelp'=> 'Özelleştirilebilir modül <b>Yerleşimi</b> burada görünür.<br><br> Yerleşim alanları ve alan verilerini görüntüler.<br><br> Değiştirilecek yerleşimi seçmek için bir simgeye tıklayın.',
        'subpanelHelp'=> 'Özelleştirilebilir modül <b>Altpaneller</b>&#39;i burada görünür.<br><br>Değiştirilecek modülü seçmek için simgeye tıklayın.',
        'newPackage'=>'Yeni bir paket oluşturmak için <b>Yeni Paket</b> butonuna tıklayın.',
        'exportBtn' => 'Stüdyo içinde belirli modüller için yapılan özelleştirmeleri içeren paket oluşturmak ve indirmek için <b>Özelleştirmeleri Dışarı Aktar</b> butonuna tıklayınız.',
        'mbHelp'    => 'Standart ya da özel nesnelere dayalı özel modülleri içeren paketleri oluşturmak için <b>Modül Oluşturucu</ b> ekranını kullanın.',
        'viewBtnEditView' => 'Modülün <b>DeğişiklikGörünümü</b> yerleşimini özelleştirin.<br><br>DeğişiklikGörünümü formu, kullanıcı tarafından girilebilen verileri tutmak için alanları içerir.',
        'viewBtnDetailView' => 'Modülün <b>DetaylıGörünüm</b> yerleşimini özelleştir.<br><br> DetaylıGörünüm kullanıcı tarafından girilen verileri görüntüler.',
        'viewBtnDashlet' => 'Modülün <b>Sugar Dashlet</b> yeteneğini, ListeGörünümü ve Arama  dahil olmak üzere özelleştir.<br><br>Sugar Dashlet, Ana Sayfa modülde sayfalara eklenmek için uygun hale gelecektir.',
        'viewBtnListView' => 'Modülün <b>ListeGörünümü</b>yerleşimini özelleştir.<br><br> Arama sonuçları listegörünümü&#39;nde görüntülenir.',
        'searchBtn' => 'Modülün <b>Arama</b> yerleşimini özelleştir.<br><br>ListeGörünümünde filtre olarak kullanılacak alanları belirle.',
        'viewBtnQuickCreate' =>  'Modüllerin <b>HızlıOluştur</b> yerleşimini özelleştirin.<br><br> HızlıOluştur formu E-Posta modülünde ve alt panellerde görünür.',

        'searchHelp'=> 'Özelleştirilebilir <b>Arama</b> formları burada görünür.<br><br /><br>Arama formları, filtreleme için kullanılan alanları içerir.<br><br><br />Değiştirilecek düzeni için bir simgeye tıklayın.',
        'dashletHelp' =>'Özelleştirilebilir <b>Sugar Dashlet</b> yerleşimleri burada görünür.<br><br> Sugar Dashlet, Ana Sayfa modülünde kullanıma hazır olacaktır.',
        'DashletListViewBtn' =>'<b>Sugar Dashlet ListeGörünümü</b>, Sugar Dashlet arama filtrelerine dayalı kayıtları görüntüler.',
        'DashletSearchViewBtn' =>'<b>Sugar Dashlet Arama</b> Sugar Dashlet listegörünümü için kayıtları filtreler.',
        'popupHelp' =>'Özelleştirilebilen <b>Açılır</b> yerleşimleri burada görünür.<br>',
        'PopupListViewBtn' => '<b>Açılır ListeGörünümü</b> Açılır arama görünüm kriterlerine göre kayıtların görünmesini sağlar.',
        'PopupSearchViewBtn' => 'Açılır listegörünümü için <b>Açılır Arama</b> kayıtları.',
        'BasicSearchBtn' => 'Modülün Arama bölümünde, <b>Temel Arama</b> sekmesindeki gözüken Temel Arama formunu özelleştir.',
        'AdvancedSearchBtn' => 'Modülün Arama bölümünde, <b>Gelişmiş Arama</b> sekmesinde görünen Gelişmiş Arama formunu özelleştir.',
        'portalHelp' => '<b>Sugar Portal&#39;ı</b> yönet ve özelleştir.',
        'SPUploadCSS' => '<b>Sugar Portal</b> için Style Sheet Yükle.',
        'SPSync' => 'Sugar Portal kurulumuna özelleştirmeleri <b>Senkronize</b> edin.',
        'Layouts' => 'Sugar Portal modüllerinin <b>Yerleşimlerini</b> özelleştir.',
        'portalLayoutHelp' => 'Modüller Sugar Portal içinde bu alanda görünür. <br><br>   <b>Yerleşim</b>&#39;leri değiştirmek için bir modül seçin.',
        'relationshipsHelp' => 'Modül ve diğer modüller arasında uygulanmış <b>İlişkiler</b> burada görünür.<br><br> İlişkinin <b>İsmi</b> sistem tarafından otomatik olarak oluşturulmuştur.<br><br>Diğer modüllerle ilişkili olan ilgili modül <b>Asıl Modül</b> olarak adlandırılır. İlişki ile ilgili tüm özellikler asıl modüle ait veritabanı tablolarında tutulur.<br><br><b>Tip</b>, Asıl modül ile <b>İlişkili Modül</b> arasında oluşturulan ilişkinin tipidir.<br><br>Sütuna göre sıralama yapmak için sütun başlığına tıklayınız.<br><br>Herhangi bir satırı tıklayarak o satırdaki ilişkinin özelliklerini görebilir ve değiştirebilirsiniz.<br><br><b>İlişki Ekle</b> butonuna tıklayarak yeni bir ilişki ekleyebilirsiniz.<br><br>Uygulanmış herhangi iki modül arasında ilişki uygulanabilir.',
        'relationshipHelp'=>'<b>İlişkiler</b> bir modül ile diğer özel modül arasında veya uygulanmış modül arasında tanımlanabilir.<br><br> İlişkiler Alt Paneller aracılığıyla görsel hale gelir ve modül kayıtları arasında alanları ilişkilendirir.<br><br>Modül için aşağıdaki ilişki <b>Tiplerinden</b> birini seçiniz:<br><br><b>Birden-Bire</b> - Her iki modülün kayıtları İlişki tipinde alan içerir.<br><br><b>Birden-Çoğa</b> - Asıl modülün kaydı bir alt panel, ilişkili modülün kaydı ise bir İlişkili alanı içerir.<br><br><b>Çoktan-Çoğa</b> - Her iki modülün de kayıtları alt panel içerir.<br><br>İlişkili modülü seçmek için <b>İlişkili Modül</b> butonuna tıklayın.<br><br>İlişki tipi alt panel içeriyorsa, uygun modüller için alt panel görünümü seçin.<br><br><b>Kaydet</b> butonuna basarak ilişkiyi kaydedin.',
        'convertLeadHelp' => "Burada dönüştürme ekranına yeni modüller ekleyebilir veya var olanların yerleşimini değiştirebilirsiniz.<br/><br />		Sürükleyip bırakarak tablodaki modüllerin sıralarını değiştirebilirsiniz.<br/><br/><br /><br />		<b>Modül:</b> Modül ismi.<br/><br/><br />		<b>Gerekli:</b> Potansiyel dönüştürülmeden önce oluşturulması veya seçilmesi gereken modüller.<br/><br/><br />		<b>Veri Kopyala:</b> Seçildiğinde, potansiyeldeki alanlar, oluşturulan yeni kayıtlardaki aynı isimdeki alanlara kopyalanır.<br/><br/><br />		<b>Seçime İzin Ver:</b>Kontaklar için ilişkili alanı olan modüller, yeniden oluşturmak yerine potansiyel dönüştürme işlemi sırasında seçilebilir.<br/><br/><br />		<b>Değiştir:</b> Bu modüldeki dönüştürme yerleşimini düzenle.<br/><br/><br />		<b>Sil:</b> Dönüştürme yerleşiminden bu modülü kaldır.<br/><br/>",
        'editDropDownBtn' => 'Genel Açılır-Liste değiştir',
        'addDropDownBtn' => 'Yeni bir genel Açılır-Liste ekle',
    ),
    'fieldsHelp'=>array(
        'default'=>'Modülde yer alan <b>Alanlar</b>, Alan İsimlerine göre listelenmiştir.<br><br>Modül şablonu önceden belirlenmiş alanları içerir.<br><br>Yeni alan eklemek için <b>Alan Ekle</b> butonuna tıklayın.<br><br> Mevcut alanlardan birini düzenlemek için o alanın <b>Alan İsmine</b> tıklayın.<br/><br/>Modül uygulandıktan sonra, Modül Oluşturucu ile yeni oluşturulan alanlarla birlikte varsayılan modül alanları, standart alan olarak Stüdyoda görünürler.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'Modül ile diğer modüller arasında oluşturulmuş <b>İlişkiler</b> burada görünür.<br><br> İlişkinin <b>İsmi</b> sistem tarafından otomatik olarak oluşturulmuştur.<br><br>Diğer modüllerle ilişkili olan ilgili modül <b>Asıl Modül</b>&#39;dür.  İlişki ile ilgili tüm özellikler asıl modüle ait veritabanı tablolarında tutulur.<br><br><b>Tip</b>, Asıl modül ile <b>İlişkili Modül</b> arasında oluşturulan ilişki tipidir.<br><br>Sütuna göre sıralama yapmak için sütun başlığına tıklayın.<br><br>Herhangi bir satırı tıklayarak o satırdaki ilişkinin özelliklerini görebilir ve değiştirebilirsiniz.<br><br><b>İlişki Ekle</b>&#39;yi tıklayarak yeni bir ilişki ekleyebilirsiniz.',
        'addrelbtn'=>'İlişki ekleme işleminde yardım için fareyi üzerine getirin..',
        'addRelationship'=>'<b>İlişkiler</b> bir modül ile diğer özel modül arasında veya uygulanmış modül arasında tanımlanabilir.<br><br> İlişkiler Alt Paneller aracılığıyla görsel hale gelir ve modül kayıtları arasında alanları ilişkilendirir.<br><br>Modül için aşağıdaki ilişki <b>Tiplerinden</b> birini seçiniz:<br><br><b>Birden-Bire</b> - Her iki modülün kayıtları İlişki tipinde alan içerir.<br><br><b>Birden-Çoğa</b> - Asıl modülün kaydı bir alt panel, ilişkili modülün kaydı ise bir İlişkili alanı içerir.<br><br><b>Çoktan-Çoğa</b> - Her iki modülün de kayıtları alt panel içerir.<br><br>İlişkili modülü seçmek <b>İlişkili Modülü</b> tıklayın.<br><br>İlişki tipi alt panel içeriyorsa, uygun modüller için alt panel görünümü seçin.<br><br><b>Kaydet</b> butonuna basarak ilişkiyi kaydedin.',
    ),
    'labelsHelp'=>array(
        'default'=> 'Modüldeki alan ve başlık <b>Etiket</b>&#39;lerini değiştirebilirsiniz. <br><br>Mevcut etiketin adına tıklayıp etiketi değiştirebilir ve <b>Kaydet</b>&#39;i tıklayıp değişikleri kaydedebilirsiniz.<br><br>Eğer herhangi bir dil paketi yüklüyse, etiketler için <b>Dil</b> seçimi de yapabilirsiniz.',
        'saveBtn'=>'Tüm değişiklikleri kaydetmek için <b>Kaydet</b> butonuna tıklayın.',
        'publishBtn'=>'Tüm değişiklikleri kaydetmek ve etkin hale getirmek için <b>Kaydet & Uygula</b>&#39;ya tıklayın.',
    ),
    'portalSync'=>array(
        'default' => 'Güncelleştirme için <b>Sugar Portal URL</b> adresini girin ve <b>Devam</b> butonuna tıklayın.<br><br>Ardından geçerli bir Sugar kullanıcı ismi ve şifresi girip <b>Senkronizasyonu Başlat</b> butonuna basın.<br><br>Sugar Portal <b>Düzenindeki</b> değişiklikler ve eğer yüklendi ise, <b>Stil Dosyası</b> belirtilen portal üzerine kopyalanacak.',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'Stil sayfaları (style sheet) kullanarak Sugar Portal görünümünü değiştirebilirsiniz.<br><br>Yüklemek için <b>Stil Dosyası</b> seçin.<br><br>Yüklenen stil dosyası daha sonra senkronizasyon sırasında uygulanacak.',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'Yeni bir projeye başlamak için, kendi modülerinizi içerecek paketi <b>Yeni Paket</b> seçeneğine tıklayarak oluşturunuz.<br/><br/> Bir paket bir veya daha fazla modülden oluşabilir.<br/><br/>Örneğin, standart Müşteriler modülü ile ilişkili yeni bir modül paketi oluşturmak isteyebilirsiniz. Veya, birbirleriyle veya uygulamadaki diğer modüllerle ilişkili birden fazla modülü barındıran bir paket de oluşturabilirsiniz.',
            'somepackages'=>'Bir <b>paket</b>, bir projenin parçası olan özel modüllerin gruplayıcısı olarak davranır. Bir paket, bir veya daha fazla, birbiriyle veya uygulamada yer alan diğer modüller ile ilişkili <b>modülleri</b> barındırır.<br/><br/>Projeniz için bir paket oluşturduktan sonra, paket için hemen modül oluşturabilirsiniz veya daha sonra tamamlamak üzere Modül Oluşturucu&#39;ya dönebilirsiniz.<br><br>Proje tamamlandığında, özel modülleri uygulamada görünür hale getirmek için, paketi <b>Uygula</b>&#39;yabilirsiniz.',
            'afterSave'=>'Oluşturacağınız paket en az bir modül içermelidir. Bir paket için bir veya birden fazla özel modül oluşturabilirsiniz.<br/><br/>Yeni modül eklemek için <b>Yeni Modül</b> seçeneğini tıklayın.<br/><br/> En az bir modül oluşturduktan sonra bu modülü herhangi bir sugar kurulumuna uygulayabilir ve/veya yayınlayabilirsiniz.<br/><br/>Modülü tek bir adımda hemen uygulamak için <b>Uygula</b> butonuna tıklayın.<br><br>Oluşturduğunuz paketi .zip olarak kaydetmek için <b>Yayınla</b> butonuna basın. Bu .zip dosyası, sisteminizde kaydedildikten sonra, <b>Modül Yükleyici</b>&#39;yi kullanarak paketi kendi Sugar kurulumunuza yükleyebilirsiniz.<br/><br/>Hazırladığınız paketi başka Sugar kullanıcıları ile de paylaşıp onların da kendi Sugar kurulumlarına yüklemelerini sağlayabilirsiniz.',
            'create'=>'Bir <b>paket</b>, bir projenin parçası olan özel modüllerin gruplayıcısı olarak davranır. Bir paket, bir veya daha fazla, birbiriyle veya uygulamada yer alan diğer modüller ile ilişkili <b>modülleri</b> barındırır.<br/><br/>Projeniz için bir paket oluşturduktan sonra, paket için hemen modül oluşturabilirsiniz veya daha sonra tamamlamak üzere Modül Oluşturucu&#39;ya dönebilirsiniz.',
            ),
    'main'=>array(
        'welcome'=>'Standart, özel modüller ve alanlar oluşturmak, yönetmek için <b>Geliştirici Araçları</b> kullanın.<br/><br/> Uygulamadaki modülleri yönetmek için <b>Stüdyo</b> aracına tıklayın.<br/><br/> Özel modül oluşturmak için <b>Modül Oluşturucu</b>&#39;ya tıkla.',
        'studioWelcome'=>'Şu anda yüklenmiş modüllerinin tümü, standart ve modül-ile-yüklenmiş nesneler dahil olmak üzere, Stüdyo içinde özelleştirilebilir.'
    ),
    'module'=>array(
        'somemodules'=>"Şu anki paket en azından bir modül içerdiğinden, paketi kendi sugar kurulumunuza <b>Uygulayabilir</b> veya <b>Yayımlayarak</b> <b>Modül Yükleyici</b> ile farklı bir sugar sürümünde yüklenebilir hale getirebilirsiniz.<br/><br/>Paketi Sugar kurulumunuzda hemen aktive etmek için <b>Uygula</b>&#39;yı tıklayın.<br><br>Paketi <b>Yayımlayarak</b> .zip dosyası olarak kaydedip <b>Modül Yükleyici</b> tarafından yüklenebilecek hale getirebilirsiniz.<br/><br/>Modülleri aşamalı oluşturabilir, uygulayabilir veya yayınlayabilirsiniz.<br/><br/> Yayınladığınız veya uyguladığınız paket üzerinde daha sonra da değişiklik yapabilirsiniz. Ardından değişiklikleri aktarmak için tekrar uygulayabilir veya tekrar yayınlayabilirsiniz." ,
        'editView'=> 'Burada mevcut alanları değiştirebilirsiniz. Herhangi mevcut alanı kaldırabilir veya sol paneldeki mevcut alanlardan ekleme yapabilirsiniz.',
        'create'=>'Modülün <b>Tipini</b> seçerken, modülde yer almasını istediğiniz alanların tiplerini dikkate alın.<br/><br/>Her bir modül şablonu, başlığında tanımlanan data tip grubunu içerir.<br/><br/><b>Temel</b> - Standart modüllerde olan alan tiplerini içerir.  İsim, atanan kişi, takım, tarih, oluşturan, açıklama gibi.<br/><br/><b>Şirket</b> - Şirket bazlı alanları içerir. Şirket Adı, İş ve Fatura Adresi barındırır. Bu şablonu standart Müşteriler modülü ile benzer modül oluşturmak için kullanın.<br/><br/><b>Kişi</b> - Bireysel alanları içerir, örneğin Selam, Başlık, İsim, Adres, ve Telefon Numarası gibi. Bu şablonu standart Kontaklar ve Potansiyeller modülleri ile benzer modül oluşturmak için kullanın.<br/><br/><b>Problem</b> - Hata veya taleplere özgü alanları içerir, örneğin Numara, Durum, Öncelik, Açıklama gibi. Bu şablonu standart Talepler ve Hata Takip Edici modülleri ile benzer modül oluşturmak için kullanın.<br/><br/>Not: Modül oluşturduktan sonra şablon tarafından sağlanan alanların etiketlerini düzenleyebilirsiniz, veya modül yerleşimine özel alanlar ekleyebilirsiniz.',
        'afterSave'=>'Yeni alan ekleyerek, mevcut yerleşim alanlarını düzenleyerek veya modüller arasında ilişki kurarak bir modülü özelleştirebilirsiniz.<br/><br/> Şablon alanlarını görüntülemek ve modül içindeki özel alanları yönetmek için, <b>Alanları Görüntüle</b>&#39;yi tıklayın.<br/><br/>Modül ve diğer modüller arasında ilişki oluşturmak veya değiştirmek için, <b>İlişkileri Görüntüle</b> butonuna tıklayın.<br/><br/>Modül yerleşimini düzenlemek için <b>Yerleşimleri Görüntüle</b> butonuna tıklayın. Uygulamada yer alan modüllerdeki Değiştirme Görünümü, Detaylı Görünüm,  Liste Görünümü gibi yerleşimleri Stüdyo ile düzenleyebilirsiniz.<br/><br/>Mevcut modüller ile aynı özelliklerde yeni bir modül oluşturmak için <b>Aynı Kayıttan Oluştur</b> butonuna tıklayın. Yeni modülü daha da özelleştirebilirsiniz.',
        'viewfields'=>'Modüldeki alanlar istediğiniz şekilde özelleştirilebilir.<br/><br/> Standart alanları silemezsiniz, fakat Yerleşim sayfasında ilgili yerleşimden kaldırabilirsiniz.<br/><br/><b>Özellikler</b> formunda <b>Aynı Kayıttan Oluştur</b> butonunu tıklayarak aynı özelliklerde yeni bir alan oluşturabilirsiniz. Herhangi bir özellik ekleyin ve <b>Kaydet</b> butonuna tıklayın.<br/><br/>Özel paketi yüklemeden veya yayımlamadan önce tüm standart ve özel alanların özelliklerini ayarlamanız önerilir.',
        'viewrelationships'=>'Mevcut modül ile paketteki diğer modüller ve/veya uygulamada kurulu modüller arasında çoktan-çoğa (many-to-many) ilişki kurabilirsiniz.<br><br>Birden-Çoğa (one-to-many) ve birden-bire (one-to-one) ilişki kurmak için <b>İlişki</b> ve <b>Esnek İlişki</b> alanları oluşturun.',
        'viewlayouts'=>'<b>Değişiklik Görünümü</b>&#39;nde  veri girişi için kullanılacak mevcut alanları kontrol edebilirsiniz. Aynı zamanda <b>Detaylı Görünüm</b> içinde,  hangi bilginin görüntüleneceğini kontrol edebilirsiniz. Bu iki düzenin aynı olması gerekmez.<br/><br/>Hızlı Oluştur formu, modül  altpanelinde <b>Oluştur</b> butonuna basıldığında görüntülenir. Başlangıçta, <b>Hızlı Oluştur</b> form yerleşimi ile <b>Değişiklik Görünümü</b> yerleşimi aynıdır. Hızlı Oluştur formunu Değişiklik Görünümünden farklı ve/veya daha az alanlara sahip olacak şekilde özelleştirebilirsiniz.<br><br>Modül güvenliğini ve görüntü yerleştirmesini <b>Rol Yönetimini</b> kullanarak ayarlayabilirsiniz.<br><br>',
        'existingModule' =>'Bu modülü oluşturduktan ve özelleştirdikten sonra, ek modüller oluşturabilir veya pakete dönerek paketi <b>Yayınlayabilir</b> ya da <b>Uygulayabilirsiniz</b>.<br><br><b>Aynı Kayıttan Oluştur</b> butonuna tıkladığınızda, mevcut modül ile aynı özelliklerde yeni bir modül oluşturabilirsiniz, veya <b>Yeni Modül</b> butonuna tıklayarak yeni bir modül oluşturabilirsiniz.<br><br>Paketi <b>Yayınlamak</b> veya <b>Uygulamak</b> için pakete dönerek bu fonksiyonları uygulayabilirsiniz. En az bir modül içeren paketleri yayınlanabilir veya uygulayabilirsiniz.',
        'labels'=> 'Standart alanların etiketlerinin yanı sıra özel alanların etiketleri değiştirilebilir. Alan etiketlerini değiştirme, alanlarda saklanan veriyi etkilemez.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'Sol tarafta gösterilen üç kolon bulunmaktadır. "Varsayılan" kolonu listegörünümü&#39;nde varsayılan olarak gösterilen alanları içerir, "Mevcut" kolonu, özel listegörünümü oluşturmak için kullanıcının seçebildiği alanları içerir, ve "Gizli" sütunu ise kullanıcılar için pasif olup, Mevcut veya Varsayılan kolonlarına yönetici olarak sizin tarafınızdan eklenebilecek alanları içerir.',
        'savebtn'	=> 'Tüm değişiklikleri kaydetmek ve aktif hale getirmek için <b>Kaydet</b> butonuna tıklayın.',
        'Hidden' 	=> 'Kullanıcıların liste görünümlerinde kullandığı gizli alanlar şu anda mevcut değildir.',
        'Available' => 'Mevcut alanlar ilk yapılanmada gösterilmez, ama kullanıcılar tarafından aktive edilebilir.',
        'Default'	=> 'Varsayılan alanlar özel liste görünüm ayarlarını oluşturmadıysanız kullanıcılara görüntülenir.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'Sol tarafta gösterilecek iki sütün bulunmaktadır. "Varsayılan" sütun arama görünümünde gösterilen alanları içerir, "Gizli" sütunu ise kullanıcılar için pasif olan ve Sistem Yöneticisi tarafından eklenebilecek alanları içerir.',
        'savebtn'	=> 'Tüm değişiklikleri kaydetmek ve aktif hale getirmek için <b>Kaydet & Uygula</b> butonuna tıklayın.',
        'Hidden' 	=> 'Arama görünümünde gizli alanlar gösterilmez.',
        'Default'	=> 'Arama görünümünde gösterilecek alanlar.'
    ),
    'layoutEditor'=>array(
        'default'	=> 'Solda görüntülenen iki sütun bulunmaktadır. Mevcut Yerleşim veya Yerleşim Ön görüntüsü olarak isimlendirilen sağdaki sütun, modül yerleşimini değiştirdiğiniz bölgedir. Sol sütunda yer alan AraçKutusu, yerleşimi değiştirmek için kullanılacak araçları içerir.<br/><br/>Eğer yerleştirme bölgesi, Mevcut Yerleştirme olarak isimlendirildi ise şu anda modül tarafından kullanılan yerleşimin kopyası üzerinde çalışıyorsunuz.<br/><br/> Eğer Yerleşim Ön görüntüsü ismindeyse, daha önce oluşturulan ve Kaydet butonu ile saklanmış versiyon üzerinde çalışıyorsunuz ve bu versiyon hali hazırda kullanıcıların gördüğü modül ekranından farklı olabilir.',
        'saveBtn'	=> 'Bu butona basmanız, yerleşimi kaydeder ve değişiklikleriniz saklanmış olur. Bu modüle döndüğünüzde, kaldığınız yerleşimden devam edersiniz. Bununla birlikte yerleşim, kullanıcılara Kaydet ve Yayınla butonuna basılana kadar görünmeyecektir.',
        'publishBtn'=> 'Yerleşimi uygulamak için bu butona tıklayın. Bu sayede, bu yerleşim, modülü kullananlara anında görünür hale gelecektir.',
        'toolbox'	=> 'AraçKutusu, çöp alanı, bir dizi ek öğeler ve mevcut alanlar dahil olmak üzere, yerleşimi değiştirmek için faydalı yetenekler içerir. Bunlardan herhangi biri plan üzerine sürüklenebilir ve bırakılabilir.',
        'panels'	=> 'Bu modül uygulandığında, yerleşimin kullanıcılara nasıl görüneceği bu alanda gösterilmektedir.<br/><br/> Alanların, satırların ve panellerin yerlerini, sürükle bırak yöntemiyle değiştirebilir;  AraçKutusu&#39;ndaki çöp alanı üzerine sürükleyip bırakarak silebilir ya da AraçKutusu&#39;ndan seçip istenen pozisyona sürükleyip bırakabilirsiniz.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'Solda görüntülenen iki sütun bulunmaktadır. Mevcut Yerleşim veya Yerleşim Ön görüntüsü olarak isimlendirilen sağdaki sütun, modül yerleşimini değiştirdiğiniz bölgedir. Sol sütunda yer alan AraçKutusu, yerleşimi değiştirmek için kullanılacak araçları içerir.<br/><br/>Eğer yerleştirme bölgesi, Mevcut Yerleştirme olarak isimlendirildi ise şu anda modül tarafından kullanılan yerleşimin kopyası üzerinde çalışıyorsunuz.<br/><br/> Eğer Yerleşim Ön görüntüsü ismindeyse, daha önce oluşturulan ve Kaydet butonu ile saklanmış versiyon üzerinde çalışıyorsunuz ve bu versiyon hali hazırda kullanıcıların gördüğü modül ekranından farklı olabilir.',
        'dropdownaddbtn'=> 'Bu butona basılırsa, açılır-listeye yeni öğe eklenir.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Bu sugar uygulamasında Stüdyoda yapılan özelleştirmeler paketlenebilir ve farklı bir sugar kurulumuna uygulanabilir.<br><br><b>Paket İsmi</b> girin. Her paket için <b>Yazar</b> ve <b>Açıklama</b> bilgisi girebilirsiniz.<br><br> Dışarı aktarmak için özelleştirilen modülleri seçin. (Sadece özelleştirilmiş modüller görünür.)<br><br>Bu modülleri içeren paketi zip formatında oluşturmak için <b>Dışa Aktar</b> sekmesini tıklayın. Oluşturulan .zip dosyası başka bir Sugar kurulumunda <b>Modül Yükleyici</b>&#39;si ile yüklenebilir.',
        'exportCustomBtn'=>'Üretmek istediğiniz özelleştirmeleri içeren paketin .zip dosyasını oluşturmak için <b>Dışarı Aktar</b> butonuna tıklayın.',
        'name'=>'Paketin <b>İsim</b> bilgisi, Stüdyo içinde kurulum için yüklendiğinde Modül Yükleyici tarafından gösterilecektir.',
        'author'=>'Bu <b>Yazar</b> paketi oluşturanın ismi olarak kurulum sırasında görüntülenir. Yazar bir şahıs yada bir şirket olabilir.<br><br>Paket Stüdyoya kurulum için yüklendikten sonra Yazar bilgisi Modül Yükleyici tarafından görüntülenir.',
        'description'=>'Paketin <b>Açıklama</b> bilgisi, Stüdyo içinde kurulum için yüklendiğinde Modül Yükleyicisi tarafından gösterilecektir.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> '<b>Geliştirici Araçları</b1> bölümüne hoş geldiniz.<br/><br/>Bu bölümdeki araçları kullanarak, standart ve özelleştirilmiş modüller, bunların içinde alanlar oluşturmak ve yönetmek mümkün olmaktadır.',
        'studioBtn'	=> 'Yüklenen modülleri özelleştirmek amacıyla, alan yerleşimini değiştirmek, kullanılan alanları seçmek ve özel veri alanları oluşturmak için <b>Stüdyo</b> kullanın.',
        'mbBtn'		=> 'Yeni modüller oluşturmak için <b>Modül Oluşturucu</b> kullanın.',
        'appBtn' 	=> 'Ana sayfada kaç tane TPS raporu gösterileceği gibi program özelliklerinin özelleştirilmesi için Uygulama mod&#39;unu kullanın',
        'backBtn'	=> 'Önceki adıma dön.',
        'studioHelp'=> 'Yüklü modülleri özelleştirmek için <b>Stüdyo</b> kullanın.',
        'moduleBtn'	=> 'Modülü değiştirmek için tıklayın.',
        'moduleHelp'=> 'Değiştirmek istediğiniz modül bileşenini seçin',
        'fieldsBtn'	=> 'Modüldeki <b>Alanları</b> kontrol ederek, modülde depolanmış bilgiyi değiştirin.<br/><br/>Burada özel alanları düzenleyebilir ve oluşturabilirsiniz.',
        'layoutsBtn'=> 'Değiştir, Detay, Liste ve arama görünümlerinin <b>Yerleşimini</b> özelleştirin.',
        'subpanelBtn'=> 'Bu modüldeki alt panellerde hangi bilgilerin gösterileceğini değiştir.',
        'layoutsHelp'=> '<b>Değiştirmek için bir Yerleşim</b> seçin.<br/><br/> Data girilen alanları içeren yerleşimi değiştirmek için <b>DeğişiklikGörünümü</b>&#39;nü tıklayın.<br/><br/>DeğişiklikGörünümü&#39;nde girilen dataları gösteren yerleşimi düzenlemek için <b>DetaylıGörünüm</b>&#39;ü tıklayın.<br/><br/>Varsayılan listede deki sütunları değiştirmek için, <b>ListeGörünümü</b>&#39;i tıklayın.<br/><br/>Temel ve Gelişmiş arama form seçeneklerini değiştirmek içinse, <b>Arama</b>&#39;yı tıklayın.',
        'subpanelHelp'=> 'Değiştirmek için bir <b>Alt panel</b> seçin.',
        'searchHelp' => 'Değiştirmek için <b>Arama</b> yerleşimini seçin.',
        'labelsBtn'	=> 'Bu modülde değerler için görüntülemek üzere <b>Labels</b> etiketini düzenleyin.',
        'newPackage'=>'Yeni bir paket oluşturmak için <b>Yeni Paket</b> butonuna tıklayın.',
        'mbHelp'    => '<b>Modül Oluşturucuya Hoş geldiniz.</b><br/><br/> Standart ve özelleştirilmiş nesnelere dayalı modüller içeren paketler oluşturmak için <b>Modül Oluşturucu</b>&#39;yu kullanın.<br/><br/><br />Başlamak ve yeni bir paket oluşturmak için <b>Yeni Paket</b> tıklayın, veya düzenlemek için bir paket seçin.<br/><br/>Bir <b>paket</b>, bir projenin parçası olan özel modüllerin gruplayıcısı olarak davranır. Bir paket bir veya daha fazla modülden oluşabilir.<br/><br/>Örneğin: standart Müşteriler modülü ile ilişkili yeni bir modül paketi oluşturmak isteyebilirsiniz. Veya, birbirleriyle veya uygulamadaki diğer modüllerle ilişkili birden fazla modülü barındıran bir paket de oluşturabilirsiniz.',
        'exportBtn' => 'Stüdyo aracında, belirli modüller için yapılan özelleştirmeleri içeren paket oluşturmak için <b>Özelleştirmeleri Dışarı Aktar</b> butonuna tıklayın.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Açılır-Liste Düzenleyici',

//ASSISTANT
'LBL_AS_SHOW' => 'Yardımcıyı gelecekte göster.',
'LBL_AS_IGNORE' => 'Yardımcıyı gelecekte yok say.',
'LBL_AS_SAYS' => 'Yardımcı diyor ki:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Modül Oluşturucu',
'LBL_STUDIO' => 'Stüdyo',
'LBL_DROPDOWNEDITOR' => 'Açılır-Liste Düzenleyici',
'LBL_EDIT_DROPDOWN'=>'Açılır-Liste Değiştir',
'LBL_DEVELOPER_TOOLS' => 'Geliştirici Araçlar',
'LBL_SUGARPORTAL' => 'Sugar Portal Düzenleyici',
'LBL_SYNCPORTAL' => 'Senkronize Portal',
'LBL_PACKAGE_LIST' => 'Paket Listesi',
'LBL_HOME' => 'Ana Sayfa',
'LBL_NONE'=>'boş',
'LBL_DEPLOYE_COMPLETE'=>'Uygulama Tamamlandı',
'LBL_DEPLOY_FAILED'   =>'Uygulama sürecinde bir hata oluştu, paketiniz doğru şekilde indirilememiş olabilir',
'LBL_ADD_FIELDS'=>'Özel Alan Ekle',
'LBL_AVAILABLE_SUBPANELS'=>'Mevcut Alt paneller',
'LBL_ADVANCED'=>'Gelişmiş',
'LBL_ADVANCED_SEARCH'=>'Gelişmiş Arama',
'LBL_BASIC'=>'Temel',
'LBL_BASIC_SEARCH'=>'Temel Arama',
'LBL_CURRENT_LAYOUT'=>'Yerleşim',
'LBL_CURRENCY' => 'Para Birimi',
'LBL_CUSTOM' => 'Özel',
'LBL_DASHLET'=>'Sugar Dashlet',
'LBL_DASHLETLISTVIEW'=>'Sugar Dashlet ListeGörünümü',
'LBL_DASHLETSEARCH'=>'Sugar Dashlet Ara',
'LBL_POPUP'=>'Açılır Görünümü',
'LBL_POPUPLIST'=>'Açılır ListeGörünümü',
'LBL_POPUPLISTVIEW'=>'Açılır ListeGörünümü',
'LBL_POPUPSEARCH'=>'Açılır Araması',
'LBL_DASHLETSEARCHVIEW'=>'Sugar Dashlet Ara',
'LBL_DISPLAY_HTML'=>'HTML Kodunu Görüntüle',
'LBL_DETAILVIEW'=>'DetaylıGörünüm',
'LBL_DROP_HERE' => 'Buraya bırak',
'LBL_EDIT'=>'Değiştir',
'LBL_EDIT_LAYOUT'=>'Yerleşimi Değiştir',
'LBL_EDIT_ROWS'=>'Satırları Değiştir',
'LBL_EDIT_COLUMNS'=>'Kolonları Değiştir',
'LBL_EDIT_LABELS'=>'Etiketleri Değiştir',
'LBL_EDIT_PORTAL'=>'Portal&#39;ı Değiştir',
'LBL_EDIT_FIELDS'=>'Alanları Değiştir',
'LBL_EDITVIEW'=>'DeğişiklikGörünümü',
'LBL_FILTER_SEARCH' => "Ara",
'LBL_FILLER'=>'(doldurucu)',
'LBL_FIELDS'=>'Alanlar',
'LBL_FAILED_TO_SAVE' => 'Kaydetme işlemi başarısız oldu',
'LBL_FAILED_PUBLISHED' => 'Yayınlama işlemi başarısız oldu',
'LBL_HOMEPAGE_PREFIX' => 'Benim',
'LBL_LAYOUT_PREVIEW'=>'Yerleşim Ön izleme',
'LBL_LAYOUTS'=>'Yerleşimler',
'LBL_LISTVIEW'=>'ListeGörünümü',
'LBL_RECORDVIEW'=>'Kayıt Görüntüle',
'LBL_RECORDDASHLETVIEW'=>'Kayıt Görünüm Panosu',
'LBL_PREVIEWVIEW'=>'Preview View',
'LBL_MODULE_TITLE' => 'Stüdyo',
'LBL_NEW_PACKAGE' => 'Yeni Paket',
'LBL_NEW_PANEL'=>'Yeni Panel',
'LBL_NEW_ROW'=>'Yeni Satır',
'LBL_PACKAGE_DELETED'=>'Paket silindi',
'LBL_PUBLISHING' => 'Yayınlanıyor...',
'LBL_PUBLISHED' => 'Yayınlandı',
'LBL_SELECT_FILE'=> 'Dosya Seçin',
'LBL_SAVE_LAYOUT'=> 'Yerleşimi kaydet',
'LBL_SELECT_A_SUBPANEL' => 'Bir alt panel seç',
'LBL_SELECT_SUBPANEL' => 'Alt panel seç',
'LBL_SUBPANELS' => 'Alt paneller',
'LBL_SUBPANEL' => 'Alt panel',
'LBL_SUBPANEL_TITLE' => 'Unvan:',
'LBL_SEARCH_FORMS' => 'Ara',
'LBL_STAGING_AREA' => 'Hazırlanma Alanı (öğeleri buraya sürükle bırak)',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugar Alanları (hazırlanma alanına eklemek için öğelere tıkla)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar Deposu (hazırlanma alanına eklemek için öğelere tıklayın)',
'LBL_TOOLBOX' => 'Araçkutusu',
'LBL_VIEW_SUGAR_FIELDS' => 'Sugar Alanlarını Görüntüle',
'LBL_VIEW_SUGAR_BIN' => 'Sugar Deposunu Görüntüle',
'LBL_QUICKCREATE' => 'HızlıOluştur',
'LBL_EDIT_DROPDOWNS' => 'Genel Açılır-Liste Değiştir',
'LBL_ADD_DROPDOWN' => 'Yeni Bir Genel Açılır-Liste Ekle',
'LBL_BLANK' => 'Boşluk',
'LBL_TAB_ORDER' => 'Sekme Emri',
'LBL_TAB_PANELS' => 'Panelleri sekme gibi görüntüle',
'LBL_TAB_PANELS_HELP' => 'Her bir paneli tek bir ekranda göstermektense her paneli kendi sekmesi gibi görüntüle',
'LBL_TABDEF_TYPE' => 'Ekran Tipi',
'LBL_TABDEF_TYPE_HELP' => 'Bu bölümün nasıl görüneceğini seçin. Bu seçenek yalnızca sekmeleri aktif ettiyseniz çalışacaktır.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Sekme',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Bu panelin, görünüm içinde ayrı bir panel olarak gösterilmesi için, "Panel" tipini seçin. Görünüm içinde ayrı bir sekme altında görünmesi için "Sekme" seçeneğini işaretleyin. Bir panel için "Sekme" tipi seçili ise, "Panel" olarak işaretlenmiş sonraki paneller, sekmenin içinde görünecektir.<br> "Sekme" olarak işaretlenmiş bir sonraki panel için, yeni bir Sekme açılacaktır. Eğer ilk panelin altındaki panel için "Sekme" tanımlandı ise, ilk panel zorunlu olarak "Sekme" olacaktır.',
'LBL_TABDEF_COLLAPSE' => 'Daralt',
'LBL_TABDEF_COLLAPSE_HELP' => 'Bu panelin varsayılan durumunun daraltılmış olması için işaretleyiniz.',
'LBL_DROPDOWN_TITLE_NAME' => 'İsim',
'LBL_DROPDOWN_LANGUAGE' => 'Dil',
'LBL_DROPDOWN_ITEMS' => 'Liste Öğeleri',
'LBL_DROPDOWN_ITEM_NAME' => 'Öğe İsmi',
'LBL_DROPDOWN_ITEM_LABEL' => 'Etiketi Görüntüle',
'LBL_SYNC_TO_DETAILVIEW' => 'DetaylıGörünüm Senkronizasyonu',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'DetaylıGörünüm ilgili plan DeğişiklikGörünümü ile senkronize hale getirmek için bu seçeneği seçin.<br> DeğişiklikGörünümü alanları ve yerleştirmeleri, Kaydet ya da Kaydet & Uygula butonlarına tıklandığında otomatik olarak DetaylıGörünüm <br> üzerinde yerleştirilecek. DetaylıGörünüm üzerinde alan yerleştirmeleri yapılamayacak.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'DetaylıGörünüm ilgili DeğişiklikGörünümü ile senkronize hale getirilmiştir.<br> DetaylıGörünüm içindeki alanlar ve alan yerleştirmeleri, DeğişiklikGörünümü alanlarını ve alan pozisyonlarını yansıtır.<br> Bu DetaylıGörünüm sayfasında yapılan değişiklikler kayıt edilemez ve uygulanamaz. DeğişiklikGörünümü içinde değişiklikleri yapın ya da düzenler arasındaki senkronizasyonu kaldırın.',
'LBL_COPY_FROM' => 'Kopyala:',
'LBL_COPY_FROM_EDITVIEW' => 'DeğişiklikGörünümü Kopyasını Al',
'LBL_DROPDOWN_BLANK_WARNING' => 'Öğe İsmi ve Ekran Etiketi değerlerinin ikisi de gereklidir. Boş öğe eklemek için, öğe adı ve ekran etiketine herhangi bir değer girmeden Ekle butonuna tıklayınız.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Anahtar listede zaten mevcut',
'LBL_DROPDOWN_LIST_EMPTY' => 'Liste en az bir tane aktif kalem içermelidir',
'LBL_NO_SAVE_ACTION' => 'Bu görünüm için kaydetme aksiyonu bulunamadı.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: hatalı oluşturulmuş doküman',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Kombinasyon alanı olduğunu gösterir. Kombinasyon alanı, tekil alanların topluluğudur. Örneğin, "Adres" alanı "Sokak", "Şehir", "Posta Kodu", "Eyalet" ve "Ülke" içeren bir kombinasyon alandır.<br><br>Hangi alanları içerdiğini görmek için kombinasyon alanına çift tıklayın.',
'LBL_COMBO_FIELD_CONTAINS' => 'içerir:',

'LBL_WIRELESSLAYOUTS'=>'Mobil Yerleşimleri',
'LBL_WIRELESSEDITVIEW'=>'Mobil DeğişiklikGörünümü',
'LBL_WIRELESSDETAILVIEW'=>'Mobil DetaylıGörünüm',
'LBL_WIRELESSLISTVIEW'=>'Mobil ListeGörünümü',
'LBL_WIRELESSSEARCH'=>'Mobil Araştırma',

'LBL_BTN_ADD_DEPENDENCY'=>'Bağımlılık Ekle',
'LBL_BTN_EDIT_FORMULA'=>'Formülü Değiştir',
'LBL_DEPENDENCY' => 'Bağımlılık',
'LBL_DEPENDANT' => 'Bağımlı',
'LBL_CALCULATED' => 'Hesaplanan Değer',
'LBL_READ_ONLY' => 'Salt Okunur',
'LBL_FORMULA_BUILDER' => 'Formül Yapılandırıcı',
'LBL_FORMULA_INVALID' => 'Geçersiz Formül',
'LBL_FORMULA_TYPE' => 'Formül türü olmalıdır',
'LBL_NO_FIELDS' => 'Alan bulunamadı',
'LBL_NO_FUNCS' => 'Fonksiyon bulunamadı',
'LBL_SEARCH_FUNCS' => 'Fonksiyonları araştır…',
'LBL_SEARCH_FIELDS' => 'Alanları araştır…',
'LBL_FORMULA' => 'Formül',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Bağımlı',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Üst değer seçildiğinde gösterilmesi için, soldaki mevcut opsiyonları sağdaki listeye sürükleyerek bırakınız. Eğer üst değer altında bir değer yok ise, bu değer seçildiğinde bağımlı açılır-liste gösterilmeyecek.',
'LBL_AVAILABLE_OPTIONS' => 'Mevcut Seçenekler',
'LBL_PARENT_DROPDOWN' => 'Üst Açılır-Liste',
'LBL_VISIBILITY_EDITOR' => 'Görünebilirlik Düzenleyicisi',
'LBL_ROLLUP' => 'Arttırmak',
'LBL_RELATED_FIELD' => 'İlişkili Alan',
'LBL_PORTAL_ROLE_DESC' => 'Bu rolü silmeyiniz. Müşteri Self-Servis Portal Rolü (Customer Self-Service Portal Role), Sugar Portal aktivasyonu sırasında sistem tarafından oluşturulmuş roldür. Rol içindeki Erişim Kontrolleri ile Hatalar, Talepler veya Bilgi Bankası modüllerine Portal üzerinden erişimi kontrol edin. Beklenmeyen veya bilinmeyen sistem davranışına izin vermemesi için, bu rol için diğer erişim kontrollerini değiştirmeyin. Bu rolün yanlışlıkla silinmesi durumunda, Sugar Portali deaktif ve tekrar aktif hale getirerek tekrar oluşturun.',

//RELATIONSHIPS
'LBL_MODULE' => 'Modül',
'LBL_LHS_MODULE'=>'Birincil Modül',
'LBL_CUSTOM_RELATIONSHIPS' => 'İlişki Stüdyoda oluşturuldu',
'LBL_RELATIONSHIPS'=>'İlişkiler',
'LBL_RELATIONSHIP_EDIT' => 'İlişkileri Değiştir',
'LBL_REL_NAME' => 'İsim',
'LBL_REL_LABEL' => 'Etiket',
'LBL_REL_TYPE' => 'Tipi',
'LBL_RHS_MODULE'=>'İlişkili Modül',
'LBL_NO_RELS' => 'İlişki yok',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Opsiyonlu Şart' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Kolon',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Değer',
'LBL_SUBPANEL_FROM'=>'Alt panel',
'LBL_RELATIONSHIP_ONLY'=>'Bu iki modül arasında önceden var olan bir ilişki olduğu için, bu ilişki için görünür bölüm oluşturulmayacak.',
'LBL_ONETOONE' => 'Birebir',
'LBL_ONETOMANY' => 'Tekten Çoğa',
'LBL_MANYTOONE' => 'Çoktan Teke',
'LBL_MANYTOMANY' => 'Çoktan Çoğa',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Bir fonksiyon veya bileşen seç.',
'LBL_QUESTION_MODULE1' => 'Bir modül seç.',
'LBL_QUESTION_EDIT' => 'Değiştirmek için bir modül seçin.',
'LBL_QUESTION_LAYOUT' => 'Değiştirmek için bir yerleşim seç.',
'LBL_QUESTION_SUBPANEL' => 'Değiştirmek için bir alt panel seç.',
'LBL_QUESTION_SEARCH' => 'Değiştirmek için bir yerleşim araması seç.',
'LBL_QUESTION_MODULE' => 'Değiştirmek için bir modül bileşeni seç.',
'LBL_QUESTION_PACKAGE' => 'Değiştirmek için bir paket seç veya yeni bir paket oluştur.',
'LBL_QUESTION_EDITOR' => 'Bir araç seç.',
'LBL_QUESTION_DROPDOWN' => 'Değiştirmek için bir açılır-liste seç veya yeni bir açılan liste oluştur.',
'LBL_QUESTION_DASHLET' => 'Değiştirmek için bir dashlet yerleşimi seç.',
'LBL_QUESTION_POPUP' => 'Değiştirmek için bir açılır pencere yerleşimi seç.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'İlişkili',
'LBL_NAME'=>'İsim',
'LBL_LABELS'=>'Etiketler',
'LBL_MASS_UPDATE'=>'Toplu Güncelleme',
'LBL_AUDITED'=>'Değişiklik Tarihçesi',
'LBL_CUSTOM_MODULE'=>'Modül',
'LBL_DEFAULT_VALUE'=>'Varsayılan Değer',
'LBL_REQUIRED'=>'Gerekli',
'LBL_DATA_TYPE'=>'Tipi',
'LBL_HCUSTOM'=>'Özel',
'LBL_HDEFAULT'=>'Varsayılan',
'LBL_LANGUAGE'=>'Dil:',
'LBL_CUSTOM_FIELDS' => '* Stüdyo ile oluşturmuş olan alanlar',

//SECTION
'LBL_SECTION_EDLABELS' => 'Etiketleri Değiştir',
'LBL_SECTION_PACKAGES' => 'Paketler',
'LBL_SECTION_PACKAGE' => 'Paket',
'LBL_SECTION_MODULES' => 'Modüller',
'LBL_SECTION_PORTAL' => 'Portal',
'LBL_SECTION_DROPDOWNS' => 'Açılır-Listeler',
'LBL_SECTION_PROPERTIES' => 'Özellikler',
'LBL_SECTION_DROPDOWNED' => 'Açılır-Liste Değiştir',
'LBL_SECTION_HELP' => 'Yardım',
'LBL_SECTION_ACTION' => 'Aksiyon',
'LBL_SECTION_MAIN' => 'Temel',
'LBL_SECTION_EDPANELLABEL' => 'Panel Etiketini Değiştir',
'LBL_SECTION_FIELDEDITOR' => 'Alanı Değiştir',
'LBL_SECTION_DEPLOY' => 'Uygula',
'LBL_SECTION_MODULE' => 'Modül',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Görünürlüğü Değiştir',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Varsayılan',
'LBL_HIDDEN'=>'Gizli',
'LBL_AVAILABLE'=>'Mevcut',
'LBL_LISTVIEW_DESCRIPTION'=>'Aşağıda 3 kolon görünmektedir. <b>Varsayılan</b> kolon bir liste görünümünde belirtilen alanlar içermektedir. <b>İlave Edilen</b> kolon bir kullanıcının özel bir görünüm oluşturmak için seçebileceği alanları içermektedir. <b>Mevcut</b> olan kolon kullanıcılara bir admin gibi varsayılan veya ilave edilen kolonlara ekleyebileceğiniz alanları gösterir.',
'LBL_LISTVIEW_EDIT'=>'Liste Görünümü Düzenleyici',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Ön izleme',
'LBL_MB_RESTORE'=>'Geri Yükle',
'LBL_MB_DELETE'=>'Sil',
'LBL_MB_COMPARE'=>'Karşılaştır',
'LBL_MB_DEFAULT_LAYOUT'=>'Varsayılan Yerleşim',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Ekle',
'LBL_BTN_SAVE'=>'Kaydet',
'LBL_BTN_SAVE_CHANGES'=>'Değişiklikleri kaydet',
'LBL_BTN_DONT_SAVE'=>'Değişiklikleri iptal et',
'LBL_BTN_CANCEL'=>'İptal',
'LBL_BTN_CLOSE'=>'Kapat',
'LBL_BTN_SAVEPUBLISH'=>'Kaydet & Uygula',
'LBL_BTN_NEXT'=>'Sonraki',
'LBL_BTN_BACK'=>'Geri',
'LBL_BTN_CLONE'=>'Aynı Kayıttan Oluştur',
'LBL_BTN_COPY' => 'Kopyala',
'LBL_BTN_COPY_FROM' => 'Kopyala...',
'LBL_BTN_ADDCOLS'=>'Kolonlar Ekle',
'LBL_BTN_ADDROWS'=>'Satırlar Ekle',
'LBL_BTN_ADDFIELD'=>'Alan Ekle',
'LBL_BTN_ADDDROPDOWN'=>'Açılır-Liste Ekle',
'LBL_BTN_SORT_ASCENDING'=>'Küçükten Büyüğe Sırala',
'LBL_BTN_SORT_DESCENDING'=>'Büyükten Küçüğe Sırala',
'LBL_BTN_EDLABELS'=>'Etiketleri Değiştir',
'LBL_BTN_UNDO'=>'Geri Al',
'LBL_BTN_REDO'=>'İleri Al',
'LBL_BTN_ADDCUSTOMFIELD'=>'Özel Alan Ekle',
'LBL_BTN_EXPORT'=>'Özelleştirmeleri Dışarı Aktar',
'LBL_BTN_DUPLICATE'=>'Aynı Kayıttan Oluştur',
'LBL_BTN_PUBLISH'=>'Yayınla',
'LBL_BTN_DEPLOY'=>'Uygula',
'LBL_BTN_EXP'=>'Dışarı Aktar',
'LBL_BTN_DELETE'=>'Sil',
'LBL_BTN_VIEW_LAYOUTS'=>'Yerleşimleri Görüntüle',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'Mobil Görünümleri Göster',
'LBL_BTN_VIEW_FIELDS'=>'Alanları Görüntüle',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'İlişkileri Görüntüle',
'LBL_BTN_ADD_RELATIONSHIP'=>'İlişki ekle',
'LBL_BTN_RENAME_MODULE' => 'Modül İsmini Değiştirin',
'LBL_BTN_INSERT'=>'Gir',
'LBL_BTN_RESTORE_BASE_LAYOUT' => 'Temel Düzeni Geri Yükle',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Hata: Alan zaten mevcut',
'ERROR_INVALID_KEY_VALUE'=> "Hata: Geçersiz değer : [&#39;]",
'ERROR_NO_HISTORY' => 'Tarih bilgisi bulunamadı',
'ERROR_MINIMUM_FIELDS' => 'Yerleşim en az bir alanı içermelidir',
'ERROR_GENERIC_TITLE' => 'Bir hata oluştu',
'ERROR_REQUIRED_FIELDS' => 'Devam etmek istediğinizden emin misiniz? Aşağıdaki zorunlu alanlar yerleşimde yer almamaktadır:',
'ERROR_ARE_YOU_SURE' => 'Devam etmek istediğinizden emin misiniz?',
'ERROR_DATABASE_ROW_SIZE_LIMIT' => 'Alan oluşturulamıyor. Veri tabanınızdaki bu tablonun sütun büyüklüğü sınırına ulaştınız. <a href="https://support.sugarcrm.com/SmartLinks/Custom/MySQL_Row_Size_Limit/" target="_blank">Daha fazla bilgi edinin</a>.',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'Bu alanlar, hesaplanmış değerler olup, SugarCRM Mobile Değişiklik Görünümünde otomatik hesaplanmayacaktır:',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'Bu alanlar, hesaplanmış değerler olup, SugarCRM Portal Değişiklik Görünümünde otomatik hesaplanmayacaktır:',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'Aşağıdaki modül(ler) devre dışı bırakılmıştır:',
    'LBL_PORTAL_ENABLE_MODULES' => '"Eğer portalde aktive etmek istiyorsanız, lütfen <br /><a id=""configure_tabs"" href=""./index.php?module=Administration&action=ConfigureTabs"" target=""_blank"">bu linki</a>  kullanınız.<br />."',
    'LBL_PORTAL_CONFIGURE' => 'Portal&#39;ı yapılandırın',
    'LBL_PORTAL_ENABLE_PORTAL' => 'Enable portal',
    'LBL_PORTAL_SHOW_KB_NOTES' => 'Bilgi Bankası modülündeki notları etkinleştirin',
    'LBL_PORTAL_ALLOW_CLOSE_CASE' => 'Portal kullanıcılarının talep kapatmasına izin ver',
    'LBL_PORTAL_ENABLE_SELF_SIGN_UP' => 'Yeni kullanıcıların kaydolmasına izin verin',
    'LBL_PORTAL_USER_PERMISSIONS' => 'Kullanıcı İzinleri',
    'LBL_PORTAL_THEME' => 'Portal Teması',
    'LBL_PORTAL_ENABLE' => 'Etkinleştir',
    'LBL_PORTAL_SITE_URL' => 'Portal sitenizin adresi:',
    'LBL_PORTAL_APP_NAME' => 'Uygulama Adı',
    'LBL_PORTAL_CONTACT_PHONE' => 'Phone',
    'LBL_PORTAL_CONTACT_EMAIL' => 'Email',
    'LBL_PORTAL_CONTACT_EMAIL_INVALID' => 'Must enter a valid email address',
    'LBL_PORTAL_CONTACT_URL' => 'URL',
    'LBL_PORTAL_CONTACT_INFO_ERROR' => 'At least one method of contact must be specified',
    'LBL_PORTAL_LIST_NUMBER' => 'Listede görünecek kayıt sayısı',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Detay Görünümünde görüntülenecek alan sayısı',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'Global Aramada görüntülenecek sonuç sayısı',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Yeni portal kayıtları için varsayılan olarak atanmış',
    'LBL_PORTAL_MODULES' => 'Portal modules',
    'LBL_CONFIG_PORTAL_CONTACT_INFO' => 'Portal Contact Information',
    'LBL_CONFIG_PORTAL_CONTACT_INFO_HELP' => 'Configure the contact information that is presented to Portal users who require additional assistance with their account. At least one option must be configured.',
    'LBL_CONFIG_PORTAL_MODULES_HELP' => 'Drag and drop the names of the Portal modules to set them to be displayed or hidden in the Portal&#39;s top navigation bar. To control Portal user access to modules, use <a href="?module=ACLRoles&action=index">Role Management.</a>',
    'LBL_CONFIG_PORTAL_MODULES_DISPLAYED' => 'Displayed Modules',
    'LBL_CONFIG_PORTAL_MODULES_HIDDEN' => 'Hidden Modules',
    'LBL_CONFIG_VISIBILITY' => 'Görünürlük',
    'LBL_CASE_VISIBILITY_HELP' => 'Hangi portal kullanıcılarının bir talebi görebileceğini belirleyin.',
    'LBL_EMAIL_VISIBILITY_HELP' => 'Hangi portal kullanıcılarının bir taleple ilgili e-postaları görebileceğini belirleyin. Katılımcı kontaklar Kime, Kimden, Bilgi ve Gizli alanlarında bulunanlardır.',
    'LBL_MESSAGE_VISIBILITY_HELP' => 'Hangi portal kullanıcılarının bir taleple ilgili mesajları görebileceğini belirleyin. Katılımcı kontaklar, Davetliler alanında bulunanlardır.',
    'CASE_VISIBILITY_OPTIONS' => [
        'all' => 'Hesapla bağlantılı tüm kontaklar',
        'related_contacts' => 'Sadece birincil kontak ve taleple bağlantılı kontaklar',
    ],
    'EMAIL_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Sadece katılımcı kontaklar',
        'all' => 'Talebi görebilen tüm kontaklar',
    ],
    'MESSAGE_VISIBILITY_OPTIONS' => [
        'related_contacts' => 'Sadece katılımcı kontaklar',
        'all' => 'Talebi görebilen tüm kontaklar',
    ],


'LBL_PORTAL'=>'Portal',
'LBL_PORTAL_LAYOUTS'=>'Portal Yerleşimleri',
'LBL_SYNCP_WELCOME'=>'Lütfen güncellemek istediğiniz portal örneğinin URL sini giriniz.',
'LBL_SP_UPLOADSTYLE'=>'Bilgisayarınızdan yüklenecek bir style sheet seçiniz.<br>Style sheet bir dahaki senkronizasyon gerçekleştirme işleminde Sugar Portal&#39;da uygulanacaktır.',
'LBL_SP_UPLOADED'=> 'Yüklendi',
'ERROR_SP_UPLOADED'=>'Lütfen bir css style sheet yüklediğinizden emin olunuz.',
'LBL_SP_PREVIEW'=>'Sugar Portal&#39;ın style sheet kullanılarak nasıl görüneceğinin bir örneği buradadır.',
'LBL_PORTALSITE'=>'Sugar Portal URL:',
'LBL_PORTAL_GO'=>'Devam',
'LBL_UP_STYLE_SHEET'=>'Style Sheet&#39;i yükle',
'LBL_QUESTION_SUGAR_PORTAL' => 'Değiştirmek için bir Sugar Portal yerleşimi seçiniz.',
'LBL_QUESTION_PORTAL' => 'Değiştirmek için bir portal yerleşimi seçiniz.',
'LBL_SUGAR_PORTAL'=>'Sugar Portal Düzenleyici',
'LBL_USER_SELECT' => '--Seç--',

//PORTAL PREVIEW
'LBL_CASES'=>'Talepler',
'LBL_NEWSLETTERS'=>'Bültenler',
'LBL_BUG_TRACKER'=>'Hata İzleme',
'LBL_MY_ACCOUNT'=>'Hesabım',
'LBL_LOGOUT'=>'Çıkış',
'LBL_CREATE_NEW'=>'Yeni Oluştur',
'LBL_LOW'=>'Düşük',
'LBL_MEDIUM'=>'Orta',
'LBL_HIGH'=>'Yüksek',
'LBL_NUMBER'=>'Numara:',
'LBL_PRIORITY'=>'Öncelik:',
'LBL_SUBJECT'=>'Konu',

//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Paket İsmi:',
'LBL_MODULE_NAME'=>'Modül İsmi:',
'LBL_MODULE_NAME_SINGULAR' => 'Tekil Modülü Adı:',
'LBL_AUTHOR'=>'Yazar:',
'LBL_DESCRIPTION'=>'Tanım:',
'LBL_KEY'=>'Anahtar:',
'LBL_ADD_README'=>'Beni oku',
'LBL_MODULES'=>'Modüller:',
'LBL_LAST_MODIFIED'=>'En son değiştirilen:',
'LBL_NEW_MODULE'=>'Yeni Modül',
'LBL_LABEL'=>'Etiket:',
'LBL_LABEL_TITLE'=>'Etiket',
'LBL_SINGULAR_LABEL' => 'Tekil Etiket',
'LBL_WIDTH'=>'Genişlik',
'LBL_PACKAGE'=>'Paket:',
'LBL_TYPE'=>'Tipi:',
'LBL_TEAM_SECURITY'=>'Takım Güvenliği',
'LBL_ASSIGNABLE'=>'Atanabilir',
'LBL_PERSON'=>'Kişi',
'LBL_COMPANY'=>'Şirket',
'LBL_ISSUE'=>'sonuç',
'LBL_SALE'=>'Satış',
'LBL_FILE'=>'Dosya adı',
'LBL_NAV_TAB'=>'Navigasyon Sekmesi',
'LBL_CREATE'=>'Oluştur',
'LBL_LIST'=>'Liste',
'LBL_VIEW'=>'Göster',
'LBL_LIST_VIEW'=>'Liste Görüntüsü',
'LBL_HISTORY'=>'Tarihçeyi Gör',
'LBL_RESTORE_DEFAULT_LAYOUT'=>'Varsayılan Düzeni Geri Yükle',
'LBL_ACTIVITIES'=>'Aktiviteler',
'LBL_SEARCH'=>'Ara',
'LBL_NEW'=>'Yeni',
'LBL_TYPE_BASIC'=>'Temel',
'LBL_TYPE_COMPANY'=>'Şirket',
'LBL_TYPE_PERSON'=>'Kişi',
'LBL_TYPE_ISSUE'=>'Problem',
'LBL_TYPE_SALE'=>'Satış',
'LBL_TYPE_FILE'=>'Dosya',
'LBL_RSUB'=>'Bu modülünüzde gösterilecek olan alt paneldir',
'LBL_MSUB'=>'Bu modülünüzün ilişkili modülün görünmesi için temin ettiği alt paneldir',
'LBL_MB_IMPORTABLE'=>'Veri Yüklemelerine İzin Ver',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'Görünür',
'LBL_VE_HIDDEN'=>'gizli',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] silindi',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Özelleştirmeleri Dışarı Aktar',
'LBL_EC_NAME'=>'Paket İsmi:',
'LBL_EC_AUTHOR'=>'Yazar:',
'LBL_EC_DESCRIPTION'=>'Tanım:',
'LBL_EC_KEY'=>'Anahtar:',
'LBL_EC_CHECKERROR'=>'Lütfen bir modül seçiniz.',
'LBL_EC_CUSTOMFIELD'=>'Özelleştirilmiş Alanlar',
'LBL_EC_CUSTOMLAYOUT'=>'Özelleştirilmiş yerleşimler',
'LBL_EC_CUSTOMDROPDOWN' => 'özelleştirilmiş açılır liste(ler)',
'LBL_EC_NOCUSTOM'=>'Özelleştirilmiş modül yer almamaktadır.',
'LBL_EC_EXPORTBTN'=>'Dışarı Aktar',
'LBL_MODULE_DEPLOYED' => 'Modül uygulandı.',
'LBL_UNDEFINED' => 'Tanımlanmamış',
'LBL_EC_CUSTOMLABEL'=>'özelleştirilmiş etiket(ler)',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Veriye erişim başarısız oldu',
'LBL_AJAX_TIME_DEPENDENT' => 'Zamana bağlı bir faaliyet devam etmekte. Lütfen bekleyin ve kısa bir süre sonra tekrar deneyiniz.',
'LBL_AJAX_LOADING' => 'Yüklüyor...',
'LBL_AJAX_DELETING' => 'Siliyor...',
'LBL_AJAX_BUILDPROGRESS' => 'İlerleme kaydedildi....',
'LBL_AJAX_DEPLOYPROGRESS' => 'Uygulama devam etmekte...',
'LBL_AJAX_FIELD_EXISTS' =>'Girmiş olduğunuz alan ismi mevcut. Lütfen yeni bir alan ismi giriniz.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Bu paketi silmek istediğinizden emin misiniz? Bu paket ile ilişkili tüm dosyalar tümüyle silinecek.',
'LBL_JS_REMOVE_MODULE' => 'Bu modülü silmek istediğinizden emin misiniz? Bu modül ile ilişkili tüm dosyalar tümüyle silinecek.',
'LBL_JS_DEPLOY_PACKAGE' => 'Bu modül tekrar uygulandığında Stüdyo içinde gerçekleştirdiğiniz tüm özelleştirmeler üzerine yazılıyor olacaktır. İlerlemek istediğinizden emin misiniz?',

'LBL_DEPLOY_IN_PROGRESS' => 'Paketi uyguluyor',
'LBL_JS_VALIDATE_NAME'=>'İsim - Harf ve rakamlardan oluşmalı, boşluk olmamalı ve bir harf ile başlamalıdır.',
'LBL_JS_VALIDATE_PACKAGE_KEY'=>'Paket Anahtarı zaten var',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Paket İsmi zaten var',
'LBL_JS_PACKAGE_NAME'=>'Paket İsmi - Harf ve rakamlardan oluşmalı, boşluk olmamalı ve bir harf ile başlamalıdır.',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Anahtar - Alfanumerik olmalı ve bir harf ile başlamalıdır.',
'LBL_JS_VALIDATE_KEY'=>'Anahtar - Alfa numerik olmalı, bir harfle başlamalı ve boşluk içermemelidir.',
'LBL_JS_VALIDATE_LABEL'=>'Bu modül için isim olarak kullanılabilecek bir etiket girin',
'LBL_JS_VALIDATE_TYPE'=>'Yapılandıracağınız bir modül tipini yukarıdaki listeden seçiniz',
'LBL_JS_VALIDATE_REL_NAME'=>'İsim - Hem rakam hem harf içermeli ve boşluk olmamalı',
'LBL_JS_VALIDATE_REL_LABEL'=>'Etiket - altpanelin üzerinde görüntülenecek bir etiket ekleyiniz',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Açılır listesinden bu zorunlu öğeyi silmek istediğinizden emin misiniz? Bu uygulamanızın işlevselliğini etkileyebilir.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Açılır listeden bu öğeleri silmek istediğinizden emin misiniz? Kazanılarak Kapandı veya Kaybedilerek Kapandı aşamalarının silinmesi, Satış Tahmini modülünün düzgün çalışmamasına neden olacaktır',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_NEW' => '"Yeni" satış durumunu silmek istediğinize emin misiniz? Bu değerin silinmesi, Fırsatlar modülü Gelir Kalemleri iş akışının düzgün çalışmasını engelleyecektir.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_IN_PROGRESS' => '"Devam Ediyor" durumunu silmek istediğinize emin misiniz? Bu değerin silinmesi, Fırsatlar modülü Gelir Kalemleri iş akışının düzgün çalışmasını engelleyecektir.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Kazanılarak Kapanmış satış aşamasını silmek istediğinizden emin misiniz? Bu aşamada silinmesi Satış Tahmini modülünün düzgün çalışmamasına neden olacaktır',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Kaybederek Kapanmış satış aşamasını silmek istediğinizden emin misiniz? Bu aşamada silinmesi Tahmin modülünün düzgün çalışmamasına neden olacaktır',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts.'
        . ' If the field is involved in a formula to calculate values for any fields, the formula will no longer work.'
        . '\n\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run.'
        . '\n\nDo you wish to continue?',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'İlişkiyi silmek istediğinizden emin misiniz?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Bu işlem ilişkiyi sürekli kılacaktır. İlgili ilişkiyi uygulamak istediğinizden emin misiniz?',
'LBL_CONFIRM_DONT_SAVE' => 'En son kayıt işleminizden sonraki değişiklikler yapıldı, ilgili değişiklikleri kaydetmek ister misiniz?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Değişiklikleri kaydetmek ister misiniz?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Veri kesik olabilir ve ilgili işlem gerçekleştirilemiyor, devam etmek istediğinizden emin misiniz?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Alanın içine girilecek olan veri cinsine bağlı uygun veri cinsini seçiniz.',
'LBL_POPHELP_FTS_FIELD_CONFIG' => 'Tam metinle aranacak alanı yapılandırın.',
'LBL_POPHELP_FTS_FIELD_BOOST' => 'Hızlandırma, bir kayda ait alanların uygunluğunu artırma işlemidir.<br />Yüksek hızlandırma değerine sahip alanlara, arama işlemi gerçekleştirildiğinde daha fazla ağırlık verilecektir. Bir arama işlemi gerçekleştirildiğinde daha büyük bir ağırlığa sahip alanları içeren eşleşen kayıtlar arama sonuçları içinde üstte görünecektir.<br />varsayılan değer, nötr bir hızlanmayı ifade eden 1.0&#39;dır. 1&#39;den yüksek bir reel değere pozitif bir hız uygulamak kabul edilir. Negatif bir hızlanma için 1&#39;den küçük bir değer kullanın. Örneğin 1,35&#39;lik bir değer bir alanı pozitif şekilde %135 hızlandırır. 0,60 değerini kullanmak negatif bir hızlanma uygular.<br />Önceki sürümlerde bir tam metin arama yeniden endekslemesinin gerekliydi. Artık gerekli değildir.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Evet</b>: İlgili alan bir veri yükleme işlemine dahil olacaktır.<br><b>Hayır</b>: İlgili alan bir veri yükleme işlemine dahil olmayacaktır.<br><b>Gereken</b>: Her veri yükleme, ilgili alan için bir değer barındırmalıdır.',
'LBL_POPHELP_PII'=>'Bu alan, değişiklik tarihçesi için otomatik olarak işaretlenecek ve Kişisel Bilgiler görünümünde kullanılabilecektir.<br>Kişisel Bilgiler alanları, kayıt Veri Gizliliği silme isteği ile bağlantılı olduğunda kalıcı olarak da silinebilir.<br>Silme işlemi, Veri Gizliliği modülü vasıtasıyla yapılır ve yöneticiler ya da Veri Gizliliği Yöneticisi rolündeki kullanıcılar tarafından yürütülebilir.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Genişlik için bir rakam girişi yapınız; piksel bazında ölçülmelidir.<br>Yüklenen imaj bu genişlik ile hesaplanacaktır.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Yükseklik için bir rakam girişi yapınız; piksel bazında ölçülmelidir.<br>Yüklenen imaj bu yükseklik ile hesaplanacaktır.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.'
. '<br><b>In Filter</b>: The field will appear in the Merge Duplicates feature, and will also be available in the Find Duplicates feature.<br><b>Filter Only</b>: The field will not appear in the Merge Duplicates feature, but will be available in the Find Duplicates feature.<br><b>Default Selected Filter</b>: The field will be used for a filter condition by default in the Find Duplicates page, and will also appear in the Merge Duplicates feature.'
,
'LBL_POPHELP_CALCULATED'=>"Create a formula to determine the value in this field.<br>"
   . "Workflow definitions containing an action that are set to update this field will no longer execute the action.<br>"
   . "Fields using formulas will not be calculated in real-time in "
   . "the Sugar Self-Service Portal or "
   . "Mobile EditView layouts.",

'LBL_POPHELP_DEPENDENT'=>"Create a formula to determine whether this field is visible in layouts.<br/>"
        . "Dependent fields will follow the dependency formula in the browser-based mobile view, <br/>"
        . "but will not follow the formula in the native applications, such as Sugar Mobile for iPhone. <br/>"
        . "They will not follow the formula in the Sugar Self-Service Portal.",
'LBL_POPHELP_REQUIRED'=>"Bu alanın yerleşim planlarında gerekli olup olmadığını belirlemek için bir formül oluşturun.<br/>"
    . "Gerekli alanlar, tarayıcı tabanlı mobil görünümde formüle uyacak, <br/>"
    . "ancak iPhone için Sugar Mobile gibi bağımsız uygulamalardaki formüle uymayacaktır. <br/>"
    . "Sugar Self-Service Portalındaki formüle uymayacaklar.",
'LBL_POPHELP_READONLY'=>"Bu alanın yerleşim planlarında salt okunur olup olmadığını belirlemek için bir formül oluşturun.<br/>"
        . "Salt okunur alanlar, tarayıcı tabanlı mobil görünümde formüle uyacak, <br/>"
        . "ancak iPhone için Sugar Mobile gibi bağımsız uygulamalardaki formüle uymayacaktır. <br/>"
        . "They will not follow the formula in the Sugar Self-Service Portal.",
'LBL_POPHELP_GLOBAL_SEARCH'=>'Bu modülde Global Aramayı kullanarak kayıtları ararken bu alanı kullanmak için seçin.',
//Revert Module labels
'LBL_RESET' => 'Sıfırla',
'LBL_RESET_MODULE' => 'Modülü Sıfırla',
'LBL_REMOVE_CUSTOM' => 'Özelleştirmeleri Ortadan Kaldır',
'LBL_CLEAR_RELATIONSHIPS' => 'İlişkileri Netleştir',
'LBL_RESET_LABELS' => 'Etiketleri Sıfırla',
'LBL_RESET_LAYOUTS' => 'Düzenleri Sıfırla',
'LBL_REMOVE_FIELDS' => 'Özel Alanları Ortadan Kaldır',
'LBL_CLEAR_EXTENSIONS' => 'Uzantıları Netleştir',

'LBL_HISTORY_TIMESTAMP' => 'Zaman Damgası',
'LBL_HISTORY_TITLE' => 'tarihçe',

'fieldTypes' => array(
                'varchar'=>'Metin Alanı',
                'int'=>'Tamsayı',
                'float'=>'Sürükle',
                'bool'=>'Kontrol Kutusu',
                'enum'=>'Açılır-Liste',
                'multienum' => 'Çoklu Seçim',
                'date'=>'Tarih',
                'phone' => 'Telefon',
                'currency' => 'Para Birimi',
                'html' => 'HTML',
                'radioenum' => 'Radyo',
                'relate' => 'İlişki kur',
                'address' => 'Adres',
                'text' => 'Metin Alanı',
                'url' => 'URL',
                'iframe' => 'İlerle',
                'image' => 'Resim',
                'encrypt'=>'Şifrele',
                'datetimecombo' =>'Tarih Saat',
                'decimal'=>'Ondalık',
                'autoincrement' => 'Oto Arttırma',
                'actionbutton' => 'Aksiyon Düğmesi',
),
'labelTypes' => array(
    "" => "Sık kullanılan etiketler",
    "all" => "Tüm Etiketler",
),

'parent' => 'Esnek İlişki',

'LBL_ILLEGAL_FIELD_VALUE' =>"Açılan anahtar kota içeremez.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Bu öğeyi açılır-listeden kaldırılması için seçiyorsunuz. Bu değeri kullanan tüm açılır-liste alanları, bu değeri bir daha göstermeyecek ve değer açılır-listeden seçilemeyecek. Devam etmek istediğinizden emin misiniz?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'Tüm Modüller',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} ({1} ID ilişkili)',
'LBL_HEADER_COPY_FROM_LAYOUT' => 'Yerleşim planından kopyala',
'LBL_RELATIONSHIP_TYPE' => 'İlişki',

// Edit Labels
'LBL_COMPARISON_LANGUAGE' => 'Karşılaştırma Dili',
'LBL_LABEL_NOT_TRANSLATED' => 'Bu etiket çevrilmeyebilir',
);
