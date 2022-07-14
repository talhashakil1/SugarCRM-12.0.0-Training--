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
    'LBL_LOADING' => '読み込み中' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'オプション非表示' /*for 508 compliance fix*/,
    'LBL_DELETE' => '削除' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'SugarCRM 搭載' /*for 508 compliance fix*/,
    'LBL_ROLE' => '役割',
    'LBL_BASE_LAYOUT' => '基本レイアウト',
    'LBL_FIELD_NAME' => 'フィールド名',
    'LBL_FIELD_VALUE' => '値',
    'LBL_LAYOUT_DETERMINED_BY' => 'レイアウト決定者：',
    'layoutDeterminedBy' => [
        'std' => '標準レイアウト',
        'role' => '役割',
        'dropdown' => 'ドロップダウンフィールド',
    ],
    'LBL_DELETE_CUSTOM_LAYOUTS' => 'すべてのカスタムレイアウトが削除されます。現在のレイアウト定義を変更してもよろしいですか？',
'help'=>array(
    'package'=>array(
            'create'=>'パッケージの<b>名称</b>を入力してください。パッケージ名では空白を含まないアルファベットと英数字のみが利用可能です（例: HR_Management）。<br/><br/>パッケージの情報として<b>作成者</b>と<b>詳細</b>を設定することができます。<br/><br/>パッケージを作成するには<b>保存</b>をクリックします。',
            'modify'=>'<b>パッケージ</b>のプロパティと可能なアクションはここに表示されています。<br><br>パッケージの<b>名称</b>、<b>作成者</b>、<b>詳細</b>の編集、パッケージに含まれるモジュールのカスタマイズと閲覧が可能です。<br><br>パッケージを作成するには<b>新規モジュール</b>をクリックしてください。<br><br>パッケージにモジュールが含まれている場合、パッケージの<b>公開</b>、<b>非公開</b>、<b>エクスポート</b>を実施することができます。',
            'name'=>'パッケージの<b>名称</b>です。<br/><br/>パッケージ名に指定できる文字列は空白を含まないアルファベットと英数字のみとなります（例: HR_Management）。',
            'author'=>'<b>作成者</b>はパッケージ作成者としてインストール時に表示されます。作成者は個人名、企業名のどちらでもかまいません。',
            'description'=>'インストール時に表示される<b>詳細</b>です。',
            'publishbtn'=>'入力したデータを保存してインストール可能な.zipファイルを作成するには<b>公開</b>をクリックしてください。<br/><br/><b>モジュールローダー</b>から.zipファイルのアップロードとインストールを行うことができます。',
            'deploybtn'=>'入力したデータを保存してパッケージに含まれるモジュールをこのインスタンスにインストールするには<b>配置</b>をクリックしてください。',
            'duplicatebtn'=>'現在のパッケージの内容を複製して新しいパッケージを作成するには<b>複製</b>をクリックしてください。<br/><br/>新しいパッケージの名前は、システムによって複製元パッケージの名前の末尾に数値が追加された名称が与えられます。この名前は<b>パッケージ名</b>を変更して<b>保存</b>をクリックすることで変更することができます。',
            'exportbtn'=>'パッケージを構成するZIPファイルを作成するには<b>エクスポート</b>をクリックしてください。<br><br>作成されたZIPファイルはパッケージに対するカスタマイズを含みますが、インストール可能なファイルではありません。<br><br>ZIPファイルをインポートし、カスタマイズ可能にするには<b>モジュールローダー</b>を使用してください。',
            'deletebtn'=>'このパッケージ（生成されたファイルすべて）を削除するには<b>削除</b>をクリックしてください。',
            'savebtn'=>'パッケージに関連付けられたデータを保存するには<b>保存</b>をクリックしてください。',
            'existing_module'=>'モジュールのプロパティの変更やフィールドのカスタマイズ、関連やレイアウトの編集を行うには、<b>モジュール名</b>をクリックしてください。',
            'new_module'=>'新しいモジュールを作成するには<b>新規モジュール</b>をクリックしてください。',
            'key'=>'5文字までの英数字で構成される<b>キー</b>は現在のパッケージのすべてのディレクトリ名/クラス名/テーブル名の接頭辞として利用されます。<br><br>このキーはテーブル名をユニークにする目的にも利用されます。',
            'readme'=>'パッケージに<b>Readme</b>を加えることができます。<br/><br/>Readmeはインストール時に利用することができます。',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'モジュールの<b>名前</b>を入力してください。<b>ラベル</b>として入力した値はナビゲーションタブに表示されます。<br/><br/><b>ナビゲーションタブ</b>チェックボックスをチェックすることで当該モジュールをナビゲーションタブに表示できます。<br/><br/>そして、作成したいモジュールのタイプを選択してください。<br/><br/>テンプレートタイプを選択してください。各テンプレートはあらかじめ用意されたフィールドの組とレイアウトを持ちます。<br/><br/><b>保存</b>するとモジュールが作成されます。',
        'modify'=>'モジュールのプロパティや<b>フィールド</b>、<b>関連</b>、<b>レイアウト</b>をカスタマイズすることができます。',
        'importable'=>'<b>インポート可能</b>チェックボックスにチェックを入れると、このモジュールのインポートが有効になります。<br><br>インポートウィザードへのリンクがこのモジュールのショートカットパネルに表示されます。インポートウィザード機能により外部ソースのデータをカスタムモジュールへインポートできます。',
        'team_security'=>'<b>チームセキュリティ</b>をチェックすることでチームセキュリティ機能を有効にします。<br/><br/>チームセキュリティを有効にするとレコードを作成する際にチームを選択することができます。',
        'reportable'=>'このチェックボックスをチェックすることでレポートの対象となります。',
        'assignable'=>'このチェックボックスをチェックすることで選択されたユーザにアサインすることができます。',
        'has_tab'=>'<b>ナビゲーションタブ</b>を選択することでモジュールをナビゲーションタブに表示させます。',
        'acl'=>'このチェックボックスをチェックすることでモジュールのアクセス権ならびにフィールドレベルのアクセス権を設定できます。',
        'studio'=>'このチェックボックスをチェックすることで管理者がスタジオでこのモジュールをカスタマイズすることができます。',
        'audit'=>'このチェックボックスをチェックすることで監査の対象になります。特定のフィールドの変更履歴を保管し、管理者が閲覧できるようになります。',
        'viewfieldsbtn'=>'<b>フィールドの表示</b>をクリックすると、このモジュールのフィールドを表示または編集したり、新たなフィールドを作成することができます。',
        'viewrelsbtn'=>'<b>関連の表示</b>をクリックすると、このモジュールの関連を表示したり、新たな関連を作成することができます。',
        'viewlayoutsbtn'=>'<b>レイアウトの表示</b>をクリックすると、このモジュールのレイアウトを表示したり、新たに作成することができます。',
        'viewmobilelayoutsbtn' => 'Viewモバイルレイアウトをクリックして、モジュールのモバイルレイアウトを表示したり、レイアウト内のフィールドの配置をカスタマイズします。',
        'duplicatebtn'=>'<b>複製</b>は現在のパッケージの内容をコピーして新たなパッケージを表示します。<br/><br/>新たなパッケージでは元のパッケージ名の最後に番号を付けることで名前を自動的に生成します。<br/><br/>新たな<b>モジュール名</b>を入力し、<b>保存</b>することで名前を変更することができます。',
        'deletebtn'=>'<b>削除</b>をクリックするとモジュールを削除します。',
        'name'=>'これは現在のモジュールの<b>名前</b>です。<br/><br/>入力する名前はアルファベットのみで構成されていて、空白を含むことはできません。（例: HR_Management）',
        'label'=>'これはナビゲーションタブに表示されるモジュールの<b>ラベル</b>です。',
        'savebtn'=>'<b>保存</b>をクリックすることで当モジュールに関連するすべてのデータを保存します。',
        'type_basic'=>'<b>ベーシック（Basic）</b>テンプレートタイプでは、名前、アサイン先、チーム、作成日付、詳細などの基本的なフィールドが用意されています。',
        'type_company'=>'<b>会社（Company）</b>テンプレートタイプでは、会社名、業種、請求先など会社に関連したフィールドが用意されています。<br/><br/>標準の取引先モジュールに似たモジュールを作成する場合は当テンプレートを利用してください。',
        'type_issue'=>'<b>課題（Issue）</b>テンプレートタイプでは、番号、ステータス、優先度、詳細など、ケース管理やバグトラッカー管理に必要なフィールドが用意されています。<br/><br/>標準のケースやバグトラッカーに似たモジュールを作成する場合に利用してください。',
        'type_person'=>'<b>担当者（Person）</b>テンプレートタイプでは、名前、職位、敬称、住所、電話番号など、担当者の情報に必要なフィールドが用意されています。<br/><br/>標準の取引先担当者やリードに似たモジュールを作成する場合に利用してください。',
        'type_sale'=>'<b>セールス（Sale）</b>テンプレートタイプでは、リードソース、ステージ、合計、確度など、商談に必要なフィールドが用意されています。<br/><br/>標準の商談モジュールに似たモジュールを作成する場合に利用してください。',
        'type_file'=>'<b>ファイル（File）</b>テンプレートタイプでは、ファイル名、文書タイプ、公開日など、 文書に必要なフィールドが用意されています。<br><br>標準の文書モジュールに似たモジュールを作成する場合に利用してください。',

    ),
    'dropdowns'=>array(
        'default' => 'アプリケーションのすべての<b>ドロップダウン</b>はここに一覧されます。<br><br>ドロップダウンは、どのモジュールのドロップダウンフィールドにも利用可能です。<br><br>既存のドロップダウンを変更するには、ドロップダウン名をクリックしてください。<br><br><b>ドロップダウンの追加</b>をクリックして、新しいドロップダウンを作成してください。',
        'editdropdown'=>'ドロップダウンリストはどのモジュールの標準もしくはカスタマイズされたドロップダウンフィールドにも利用可能です。<br><br>ドロップダウンリストの<b>名前</b>をご指定ください。<br><br>アプリケーションに言語パックがインストールされている場合は、項目から<b>言語</b>を選択してください。<br><br><b>項目名</b>フィールドで、ドロップダウンリスト内のオプションの名前を指定してください。この名前はユーザに見えるドロップダウンリストには現れません。<br><br><b>表示ラベル</b>フィールドで、ラベルを指定してください。このラベルはユーザから見えます。<br><br>項目名と表示ラベルを指定後、<b>追加</b>をクリックしてドロップダウンに項目を追加してください。<br><br>リスト中の項目の順番を変えるには、持っていきたい位置に項目をドラッグ＆ドロップしてください。<br><br>項目のラベルを編集するには、<b>編集アイコン</b>をクリックし、新しいラベルを入力してください。ドロップダウンから項目を削除するには、<b>削除アイコン</b>をクリックしてください。<br><br>表示ラベルへの変更を元に戻すには、<b>元に戻す</b>をクリックしてください。元に戻した変更を再実行するには、<b>再実行する</b>をクリックしてください。<br><br><b>保存</b>をクリックし、ドロップダウンを保存してください。',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> '<b>保存して配置</b>をクリックし、変更を保存しそれらをモジュール内で有効化します。',
        'historyBtn'=> '<b>履歴</b>をクリックし、以前に保存された履歴を閲覧およびリストアします。',
        'historyRestoreDefaultLayout'=> '<b>デフォルト レイアウトに戻す</b>をクリックして表示を元のレイアウトに戻します。',
        'Hidden' 	=> '<b>非表示</b>カラムはサブパネルに表示されません。',
        'Default'	=> '<b>デフォルト</b>カラムはサブパネルに表示されます。',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> '<b>保存して配置</b>をクリックし、変更を保存しそれらをモジュール内で有効化します。',
        'historyBtn'=> '<b>履歴</b>をクリックし、 以前に保存された履歴を閲覧およびリストアします。',
        'historyRestoreDefaultLayout'=> '<b>デフォルト レイアウトに戻す</b>をクリックして表示を元のレイアウトに戻します。<br><br><b>デフォルト レイアウトに戻す</b>は元のレイアウトのフィールドの配置だけを戻します。フィールドのラベルを変更するには、各フィールドの横の編集アイコンをクリックしてください。',
        'Hidden' 	=> '非公開フィールドは一覧画面ではユーザに表示されません。',
        'Available' => '利用可能フィールドはデフォルトでは画面上に表示されませんが、ユーザによって追加可能なフィールドとなります。',
        'Default'	=> 'デフォルトフィールドは一覧画面上でユーザに表示されるフィールドとなります。（ただし一覧画面がカスタマイズされていない場合に限ります。）'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> '<b>保存して配置</b>をクリックし、変更を保存しそれらをモジュール内で有効化します。',
        'historyBtn'=> '<b>履歴</b>をクリックし、 以前に保存された履歴を閲覧およびリストアします。',
        'historyRestoreDefaultLayout'=> '<b>デフォルト レイアウトに戻す</b>をクリックして表示を元のレイアウトに戻します。<br><br><b>デフォルト レイアウトに戻す</b>は元のレイアウトのフィールドの配置だけを戻します。フィールドのラベルを変更するには、各フィールドの横の編集アイコンをクリックしてください。',
        'Hidden' 	=> '非公開フィールドは一覧画面ではユーザに表示されません。',
        'Default'	=> 'デフォルトフィールドは一覧画面上でユーザに表示されるフィールドとなります。（ただし一覧画面がカスタマイズされていない場合に限ります。）'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> '<b>保存して配置</b>ボタンをクリックすると、すべての変更を保存し有効にします。',
        'Hidden' 	=> '非表示フィールドは検索ビューに表示されないフィールドです。',
        'historyBtn'=> '<b>履歴</b>をクリックし、 以前に保存された履歴を閲覧およびリストアします。',
        'historyRestoreDefaultLayout'=> '<b>デフォルト レイアウトに戻す</b>をクリックして表示を元のレイアウトに戻します。<br><br><b>デフォルト レイアウトに戻す</b>は元のレイアウトのフィールドの配置だけを戻します。フィールドのラベルを変更するには、各フィールドの横の編集アイコンをクリックしてください。',
        'Default'	=> 'デフォルトフィールドは検索画面に表示されます。'
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
        'saveBtn'	=> '<b>保存</b>をクリックするとレイアウトに施した変更をすべて保存することができます。変更内容は、保存した内容を配置するまで表示されません。',
        'historyBtn'=> '<b>履歴</b>をクリックし、 以前に保存された履歴を閲覧およびリストアします。',
        'historyRestoreDefaultLayout'=> '<b>デフォルト レイアウトに戻す</b>をクリックして表示を元のレイアウトに戻します。<br><br><b>デフォルト レイアウトに戻す</b>は元のレイアウトのフィールドの配置だけを戻します。フィールドのラベルを変更するには、各フィールドの横の編集アイコンをクリックしてください。',
        'publishBtn'=> '<b>保存して配置</b>をクリックするとレイアウトを配置できます。<br><br>配置後は当該レイアウトがただちに表示されます。',
        'toolbox'	=> '<b>ツールボックス</b>にはゴミ箱、レイアウト要素、利用可能フィールドなど、レイアウトの編集に必要な一連のツールが含まれています。<br/><br/>いずれの要素もレイアウト上でドラッグ＆ドロップすることができ、また、ゴミ箱にドラッグ＆ドロップすることもできます。<br/><br/>新たな行やパネル要素をドラッグしてレイアウトにドロップすると、当該要素がレイアウトのドロップ位置に追加されます。<br/><br/>(filler)エリアは空白スペースを意味します。<br/><br/>利用可能なフィールドをパネルにドラッグ＆ドロップしたり、入れ替えたりできます。',
        'panels'	=> 'このエリアは、このレイアウトを公開した場合に他のユーザにどのように見えるかを表示しています。<br/><br/>ここでは、フィールド、行、パネルなどの要素をドラッグ＆ドロップすることで再配置できます。<br/><br/>要素をゴミ箱にドラッグ＆ドロップすることではずすことができます。また、新たな要素をドラッグ＆ドロップして追加することもできます。',
        'delete'	=> 'レイアウトから要素をはずすには、ここにその要素をドラッグ＆ドロップしてください。',
        'property'	=> 'このフィールドに表示されるラベルを編集してください。<br/><b>タブの順序</b>はフィールド間をタブキーで移動する順番を制御します。',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'このモジュールで利用可能な<b>フィールド</b> がリストされています。<br><br>デフォルトでは、モジュールで作成されたカスタムフィールドはモジュールで利用可能なフィールドの上に表示されています。 <br><br>フィールドを編集するには <b>フィールド名</b>をクリックしてください。<br/><br/>新しいフィールドを作成するには<b>フィールドの追加</b>をクリックしてください。',
        'mbDefault'=>'このモジュールで利用可能な<b>フィールド</b> がリストされています<br><br>フィールドのプロパティを設定するにはフィールド名をクリックしてください。<br><br>新しいフィールドを作成するには<b>フィールドの追加</b>をクリックしてください。新しく作成したフィールドのラベルなどプロパティは作成後にフィールド名をクリックすると編集できます。<br><br>モジュールビルダーで作成したカスタムフィールドは、モジュールを配置後に基本フィールドとしてスタジオで配置されます。',
        'addField'	=> '新しいフィールドの<b>データタイプ</b>を選択してください。選択したタイプにより、どのような文字列がフィールドに入力できるかが決まります。たとえば、整数データタイプのフィールドには整数値のみが入力できま<br><br>フィールドの<b>名前</b>を指定してください。 名前は英数字のみで空白を含んではいけませんが、アンダースコアは利用可能です。<br><br><b>表示ラベル</b>はモジュールのレイアウトにこのフィールドのラベルとして表示されます。<b>システムラベル</b>はコードの中からこのフィールドを参照する際に利用します。<br><br>選択されたデータタイプによっては、以下のプロパティがすべてまたはいくつかがこのフィールドにセットされます:<br><br><b>ヘルプテキスト</b>はフィールド上にユーザがマウスをのせると一時的に表示され、どのような入力値が必要かをユーザに示します。<br><br><b>コメントテキスト</b>はスタジオやモジュールビルダーで管理者にフィールドを説明する際に用いられます。<br><br><b>デフォルト値</b>はフィールドで表示されます。ユーザは新しい値を入力するかデフォルト値を利用することができます。<br><br><b>一括更新</b>チェックボックスにチェックを入れると、そのフィールドに対して一括更新の機能を適用できます。<br><br><b>最大長</b>はそのフィールドへ入力できる最大文字数を指定します。<br><br><b>必須フィールド</b>のチェックボックスにチェックを入れると、そのフィールドを必須にすることができます。このフィールドを含むレコードの保存時にこのフィールドに値が入力されていなければいけません。<br><br><b>レポート可能</b>を有効にすると、レポートのデータを絞り込んだり表示したりする際にこのフィールドを利用できます。<br><br><b>監査</b>を有効にすると、変更履歴にこのフィールドへの変更が表示されるようになります。<br><br><b>インポート可能</b>を有効にするとインポートウィザードでインポートを可能にします。<br><br><b>重複のマージ</b>を有効にすると重複の検出とマージが実行できるようになります。<br><br>その他のプロパティは特定のデータタイプで設定することができます。',
        'editField' => 'このフィールドのプロパティはカスタマイズできます。<br><br>同じプロパティを持つフィールドを作成するには<b>複製</b>をクリックしてください。',
        'mbeditField' => 'テンプレートフィールドの<b>表示ラベル</b>はカスタマイズできます。フィールドのその他のプロパティはカスタマイズできません。<br><br>同じプロパティを持つフィールドを作成するには<b>複製</b>をクリックしてください。<br><br>モジュールで表示されないようにテンプレートをはずすには適切な<b>レイアウト</b>からフィールドをはずしてください。'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'スタジオで施されたカスタマイズをパッケージとして梱包し、他のSugarCRMインスタンスに<b>モジュールローダー</b>経由でインストールすることができます。<br><br>まず、<b>パッケージ名</b>を入力してください。また、<b>作成者</b>や<b>詳細</b>情報を入力することも可能です。<br><br>エクスポートしたいモジュールを選択してください。カスタマイズを含むモジュールだけが選択対象として表示されます。<br><br>そして、<b>エクスポート</b>をクリックしてカスタマイズを含む.zipファイルを生成します。',
        'exportCustomBtn'=>'<b>エクスポート</b>をクリックしてカスタマイズを含む圧縮zipファイルを作成してください。',
        'name'=>'これはパッケージの<b>名前</b>です。この名前はインストール中に表示されます。',
        'author'=>'これは現在のパッケージの<b>作成者</b>で、パッケージをインストールする際に表示されます。作成者は個人でも法人でも構いません。',
        'description'=>'インストール時に表示される<b>詳細</b>です。',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> '<b>開発者ツール</b>エリアへようこそ<br/><br/>このエリアのツールを使って標準モジュールを管理したり、カスタムモジュールもしくはカスタムフィールドを作成してください。',
        'studioBtn'	=> '<b>スタジオ</b>を使ってインストール済みモジュールをカスタマイズします。',
        'mbBtn'		=> '<b>モジュールビルダー</b>を使って新たなモジュールを作成してください。',
        'sugarPortalBtn' => '<b>Sugarポータルエディタ</b>を利用してSugarポータルの管理とカスタマイズを行います。',
        'dropDownEditorBtn' => '<b>ドロップダウンエディタ</b>を使ってアプリケーション内でグローバルに使えるドロップダウンを追加したり編集したりします。',
        'appBtn' 	=> 'アプリケーションモードでは、ホームページにいくつのTPSレポートを表示するか、などのさざまざなプロパティをカスタマイズできます。',
        'backBtn'	=> '前のステップに戻る',
        'studioHelp'=> '<b>スタジオ</b>では、情報が表示されるレイアウトを変更したり、表示する情報を決定したり、<i>インストール済み</i>モジュール用にカスタムフィールドを作成したりします。',
        'studioBCHelp' => 'モジュールが下位互換のモジュールであることを示しています',
        'moduleBtn'	=> 'クリックしてこのモジュールを編集してください。',
        'moduleHelp'=> '編集したいモジュールコンポーネントを選択してください。',
        'fieldsBtn'	=> 'モジュールの<b>フィールド</b>を管理することで、当該モジュールで保存するデータを決定します。<br/><br/>情報を増やすために新たにフィールドを作成することができます。',
        'labelsBtn' => 'モジュール内でフィールドを表す<b>ラベル</b>を編集'	,
        'relationshipsBtn' => 'このモジュールへの<b>関連</b>の新規追加もしくは既存の<b>関連</b>の表示' ,
        'layoutsBtn'=> '次のモジュール<b>レイアウト</b>を編集: 編集ビュー、詳細ビュー、一覧画面、検索ビュー',
        'subpanelBtn'=> 'このモジュールの<b>サブパネル</b>に表示する情報を決定',
        'portalBtn' =>'<b>Sugarポータル</b>に表示されるモジュールの<b>レイアウト</b>を編集',
        'layoutsHelp'=> '編集する<b>レイアウト</b>を選択',
        'subpanelHelp'=> '編集する<b>サブパネル</b>を編集',
        'newPackage'=>'<b>新規パッケージ</b>をクリックしてパッケージを作成してください。',
        'exportBtn' => '<b>カスタマイズのエクスポート</b>をクリックするとスタジオで実施されたカスタマイズを含むパッケージを作成します。',
        'mbHelp'    => '<b>モジュールビルダーへようこそ</b><br/><br/><b>モジュールビルダー</b>を使うと、標準オブジェクトやカスタムオブジェクトをベースとしたカスタムモジュールを開発するプロジェクトが作成できます。<br/><br/>開始するには<b>新規パッケージ</b>をクリックして新たなパッケージを作成するか、編集するパッケージを選択してください。',
        'viewBtnEditView' => 'モジュールの<b>編集ビュー</b>レイアウトを編集',
        'viewBtnDetailView' => 'モジュールの<b>詳細ビュー</b>レイアウトを編集',
        'viewBtnDashlet' => 'ダッシュレットの一覧画面と検索を含むこのモジュールの<b>ダッシュレット</b>のカスタマイズ<br><br>このダッシュレットはホームでページに追加できるようになります。',
        'viewBtnListView' => 'モジュールの<b>一覧画面</b>レイアウトを編集',
        'searchBtn' => 'モジュールの<b>検索</b>レイアウトを編集',
        'viewBtnQuickCreate' =>  'モジュールの<b>クイック作成</b>レイアウトを編集',

        'searchHelp'=> '編集する<b>検索レイアウト</b>を選択',
        'dashletHelp' =>'カスタマイズできる<b>ダッシュレット</b>のレイアウトはここに表示されます。<br><br>このダッシュレットはホームでページに追加できるようになります。',
        'DashletListViewBtn' =>'<b>ダッシュレット一覧画面</b>はダッシュレット検索フィルタに基づいてレコードを表示します。',
        'DashletSearchViewBtn' =>'<b>ダッシュレット検索</b>はダッシュレット一覧画面で表示するレコードを絞り込みます。',
        'popupHelp' =>'カスタマイズ可能な<b>ポップアップ</b>はここに表示されます。',
        'PopupListViewBtn' => '<b>ポップアップ一覧画面</b>はポップアップ検索画面に準拠して表示されます。',
        'PopupSearchViewBtn' => '<b>ポップアップ検索画面</b>はポップアップ一覧画面用にレコードを表示します。',
        'BasicSearchBtn' => '検索エリアの基本検索タブに表示される<b>基本検索</b>フォームを編集',
        'AdvancedSearchBtn' => '検索エリアの詳細検索タブに表示される<b>詳細検索</b>フォームを編集',
        'portalHelp' => '<b>Sugarポータル</b>の管理とカスタマイズ',
        'SPUploadCSS' => 'Sugarポータルの<b>スタイルシート</b>のアップロード',
        'SPSync' => 'カスタマイズ内容をSugarポータルと<b>同期</b>',
        'Layouts' => 'Sugarポータルのモジュールの<b>レイアウト</b>を編集',
        'portalLayoutHelp' => 'Sugarポータルのモジュールはこのエリアに表示されます。<br><br><b>レイアウト</b>を編集するモジュールを選択してください。',
        'relationshipsHelp' => 'このモジュールと既存モジュール、または、同じパッケージの他のモジュールとの間で関連を持たせることができます。<br/><br/>関連を新たに作成するためには<b>関連の追加</b>をクリックしてください。当該関連のプロパティが右側パネルに表示されます。<b>関連先</b>のドロップダウンから対象のモジュールを選択してください。<b>ラベル</b>は関連先のモジュールのサブパネルに表示される名前になります。<br/><br/>モジュール間の関連はサブパネルによって管理されますが、サブパネルはそれぞれのモジュールの詳細ビューの下に表示されます。<br/><br/>関連先のモジュールによってサブパネルの設定を変えることもできます。<br/><br/><b>保存</b>をクリックすると関連が作成されます。<b>削除</b>をクリックすると選択された関連が削除されます。<br/><br/>既存の関連を編集するためには、関連名をクリックし、右側パネルに表示されるプロパティを編集してください。',
        'relationshipHelp'=>'<b>関連</b>はこのモジュールと他の配置されたモジュールとの間に作成されます。<br><br> 関連はサブパネルとモジュールのレコードの関連フィールドとして表示されます。<br><br>関連が二つのモジュールの間ですでに存在する場合は、それらの間で作成された新しい関連は表示されません。<br><br> 以下の<b>タイプ</b>からモジュールの関連を選んでください:<br><br> <b>1対1</b> - 両方のモジュールのレコードに関連フィールドを含む。<br><br> <b>1対多</b> - 主モジュールのレコードはサブパネルを表示し、関連するモジュールのレコードは関連フィールドを持つ。<br><br> <b>多対多</b> - 両方のモジュールのレコードはサブパネルを表示する。<br><br>関連の<b>関連モジュール</b>を選んでください。<br><br>関連タイプがサブパネルを伴う場合、対応するモジュールのサブパネルビューを選択してください。<br><br><b>保存</b>をクリックして関連を作成します。関連が作成されると、編集および削除できません。',
        'convertLeadHelp' => "コンバート用スクリーンにモジュールを追加し、既存のレイアウトを更新することができます。<br/><br />		モジュールをドラッグすることで並びを変更することができます。<br/><br/><br />		<br />		<b>モジュール:</b>モジュール名<br/><br/><br />		<b>必須:</b>リードがコンバート可能になる前に、必要なモジュールが作成されている必要があります。<br/><br/><br />		<b>データをコピー:</b>チェックされた場合、リードのフィールドの値は同じフィールド名を持つフィールドにコピーされます。<br/><br/><br />		<b>選択を許可:</b>取引先担当者に関連フィールドとして存在するモジュールはコンバート処理中に選択可能になります。<br/><br/><br />		<b>編集:</b>このモジュールのコンバート画面のレイアウトを変更<br/><br/><br />		<b>削除:</b>コンバートレイアウトからこのモジュールをはずす<br/><br/>",
        'editDropDownBtn' => 'グローバルドロップダウンを編集',
        'addDropDownBtn' => 'グローバルドロップダウンを追加',
    ),
    'fieldsHelp'=>array(
        'default'=>'モジュールの<b>フィールド</b>はフィールド名で一覧されています。<br><br>モジュールのテンプレートには定義済みのフィールドのセットが含まれます。<br><br>新規フィールドを作成するには、<b>フィールドの追加</b>をクリックしてください。<br><br>フィールドを編集するには、<b>フィールド名</b>をクリックしてください。<br/><br/>モジュールが配置された後、テンプレートのフィールドを含むモジュールビルダーで作成された新しいフィールドはスタジオに標準フィールドとして表示されます。',
    ),
    'relationshipsHelp'=>array(
        'default'=>'このモジュールと他のモジュールの間で作られた<b>関連</b>はここに表示されます。<br><br>関連<b>名</b>はシステムによって生成された名前です。<br><br><b>主モジュール</b>は関連を所有するモジュールです。関連プロパティは主モジュールが所有するデータベーステーブルに格納されます。<br><br>関連テーブルの行をクリックし、関連にひも付けられたプロパティを表示、編集します。<br><br><b>関連の追加</b>をクリックし、新しい関連を作成します。',
        'addrelbtn'=>'関連の追加のマウスオーバーヘルプ..',
        'addRelationship'=>'<b>関連</b>はモジュールとその他のカスタムモジュールもしくは配置されているモジュールの間に作成することができます。<br><br> 関連はサブパネルとモジュールのレコードの関連フィールドとして表示されます。<br><br>以下のモジュールの関連の<b>タイプ</b>から１つ選択してください:<br><br> <b>1対1</b> - 両方のモジュールのレコードは関連フィールドとなります。<br><br> <b>1対多</b> - 主モジュールのレコードはサブパネルとなり、関連モジュールのレコードは関連フィールドとなります。<br><br> <b>多対多</b> - 両方のレコードのモジュールはサブパネルに表示されます。<br><br>関連の<b>関連モジュール</b>を選択してください。<br><br>関連タイプがサブパネルを含む場合、対象のモジュールのサブパネルビューを選択してください。<br><br><b>保存</b>をクリックして、関連を作成してください。',
    ),
    'labelsHelp'=>array(
        'default'=> 'このフィールドの<b>ラベル</b>とモジュールのその他のタイトルは変更できます。<br><br>フィールドをクリックしてラベルを編集し、新しいラベルを入力して<b>保存</b>をクリックしてください。<br><br>アプリケーションに言語パックがインストールされている場合、そのラベルで利用する<b>言語</b>を選択できます。',
        'saveBtn'=>'<b>保存</b>をクリックしてすべての変更を保存する。',
        'publishBtn'=>'<b>保存して配置</b>をクリックしてすべての変更を保存しそれらをアクティブにする。',
    ),
    'portalSync'=>array(
        'default' => '更新する<b>SugarポータルのURL</b>を入力し、<b>Go</b>をクリックしてください。<br><br>適切なSugarユーザ名とパスワードを入力し、<b>同期の開始</b>をクリックしてください。<br><br>カスタマイズされたSugarポータルの<b>レイアウト</b>と<b>スタイルシート</b>（アップロードされている場合）が指定されたポータルインスタンスに送信されます。',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'これ以降、Sugarポータルの外観を変更することができます。',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'プロジェクトを開始するには、<b>新規パッケージ</b>をクリックして、モジュールを格納するパッケージを作成します。<br/><br/>１つのパッケージは１つ以上のモジュールを格納できます。<br/><br/>例えば、新たにパッケージを作成し、標準の取引先モジュールと関連を持つカスタムモジュールを１つ作成できます。また、新たなパッケージ内に複数のカスタムモジュールを作成し、互いに関連を持たせたり、標準モジュールに関連を持たせたりすることができます。',
            'somepackages'=>'<b>パッケージ</b>は複数のカスタムモジュールのコンテナとして振舞います。それらはすべて同じプロジェクトに属します。パッケージは１つまたは複数の<b>モジュール</b>を同梱できます。それらは互いに関連を持つ場合もありますし、標準モジュールと関連を持つ場合もあります。<br/><br/>プロジェクトでパッケージを作成した後、そのパッケージに梱包されるモジュールをただちに作成することもできますし、後でモジュールビルダーを起動して作成することもできます。',
            'afterSave'=>'パッケージには少なくとも１つのモジュールを梱包する必要があります。１つのパッケージに対して複数のモジュールを作成できます。<br/><br/><b>新規モジュール</b>をクリックしてカスタムモジュールを作成してください。<br/><br/>モジュールを作成したら、パッケージを配置または公開して、このインスタンスもしくは他のインスタンスで利用可能な状態にできます。<b>公開</b>をクリックするとパッケージをzipファイルに圧縮して保存します。zipファイルとして保存されると、<b>モジュールローダ</b>を使って当該ファイルをアップロードすることでパッケージをインストールできます。<br/><br/>このファイルを他のSugarCRMインスタンスに配布してインストールすることも可能です。<br/><br/>パッケージをこのインスタンスにただちにインストールするためには<b>配置</b>をクリックします。',
            'create'=>'<b>パッケージ</b>は複数のカスタムモジュールのコンテナとして振舞います。それらはすべて同じプロジェクトに属します。パッケージは１つまたは複数の<b>モジュール</b>を同梱できます。それらは互いに関連を持つ場合もありますし、標準モジュールと関連を持つ場合もあります。<br/><br/>プロジェクトでパッケージを作成した後、そのパッケージに梱包されるモジュールをただちに作成することもできますし、後でモジュールビルダーを起動して作成することもできます。',
            ),
    'main'=>array(
        'welcome'=>'<b>デベロッパーツール</b>では、<br/><br/>インストール済みモジュールの管理を行うには<b>スタジオ</b>をクリックしてください。<br/><br/>新しくモジュールを作成するには<b>モジュールビルダー</b>をクリックしてください。',
        'studioWelcome'=>'スタジオではシステムで利用可能なモジュールすべてがカスタマイズできます。'
    ),
    'module'=>array(
        'somemodules'=>"このパッケージにはすでに１つ以上のモジュールがあるので<b>公開</b>または<b>配置</b>することができます。<br/><br/>このSugarCRMインスタンスまたは別のインスタンスにインストール可能なパッケージをzipファイルに圧縮する場合は<b>公開</b>をクリックしてください。<br/><br/>zipファイルを作成せずに、パッケージをただちにインストールする場合は<b>配置</b>をクリックしてください。<br/><br/>モジュールを少しずつ作り、準備ができた段階で公開または配置することもできます。<br/><br/>パッケージを公開または配置した後であっても、パッケージのプロパティを変更したり、モジュールをさらにカスタマイズすることが可能です。その場合は変更点を反映するために再公開または再配置してください。" ,
        'editView'=> 'ここでは既存フィールドの編集が行えます。既存のフィールドをはずしたり、左側パネルのフィールドを追加できます。',
        'create'=>'作成するモジュールの<b>タイプ</b>の値を選択する場合、そのモジュールに必要なフィールドを想定してください。<br/><br/>それぞれのモジュールテンプレートは、タイトルで表されるようなタイプのモジュールに必要なフィールドをあらかじめ用意しています。<br/><br/><b>基本（Basic）</b> - 標準モジュールで使われている名前、アサイン先、チーム、作成日、詳細などのフィールドを用意しています。<br/><br/> <b>会社（Company）</b> - 標準の取引先モジュールのように、組織、会社で使われる会社名、産業、請求先住所などのフィールドを用意しています。<br/><br/> <b>個人（Person）</b> - 標準の取引先担当者やリードモジュールのように、敬称、職位、名前、住所、電話番号など、個人に必要なフィールドを用意しています。<br/><br/><b>課題（Issue）</b> - ケース管理やバグ管理に必要な番号、ステータス、優先度、詳細といったフィールドを用意しています。<br/><br/>注意: モジュールの作成後、テンプレートが提供するフィールドをカスタマイズしたり、必要なフィールドをさらに追加することができます。',
        'afterSave'=>'モジュールをカスタマイズして、フィールドの編集や追加をしたり、他のモジュールと関連を持たせたり、モジュールのレイアウトを変更することができます。<br/><br/>テンプレートのフィールドを表示したり、カスタムフィールドを管理するには<b>フィールドの表示</b>をクリックしてください。<br/><br/>既存モジュールやカスタムモジュール間の関連を作成したり管理するには<b>関連の表示</b>をクリックしてください。モジュールのレイアウトを編集するには<b>レイアウトの表示</b>をクリックしてください。スタジオでの操作と同じように、詳細ビュー、編集ビュー、一覧画面のレイアウトを変更することができます。<br/><br/>現在のモジュールと同じプロパティを持つモジュールを作成するには<b>複製</b>をクリックしてください。複製後の新たなモジュールをカスタマイズすることができます。',
        'viewfields'=>'モジュール内のフィールドを必要に応じてカスタマイズすることができます。<br/><br/><b>複製</b>をクリックすると、同じプロパティを持つフィールドをすばやく作成することができます。新たなプロパティ値を入力して<b>保存</b>をクリックしてください。<br/><br/>フィールドをはずすにはレイアウトのページから当該フィールドをはずしてください。<br/><br/>注意: モジュールがいったんインストールされると、一部のフィールドが編集できなくなります。パッケージを公開したり配置する前にテンプレートフィールドやカスタムフィールドのプロパティをすべて入力してください。',
        'viewrelationships'=>'このパッケージ内の現在のモジュールと他のモジュールの間で多対多の関連を持たせることができます。また、現在のモジュールとインストール済みのモジュールの間で多対多の関連を持たせることもできます。',
        'viewlayouts'=>'編集ビューでデータを取得するために必要なフィールドを管理することができます。詳細ビューに表示されるフィールドの管理も行えます。両社のフィールドは一致する必要はありません。<br/><br/>クイック作成フォームは、サブパネルで<b>作成</b>ボタンがクリックされた時に表示されます。デフォルトでは、<b>クイック作成</b>フォームのレイアウトはデフォルトの<b>編集ビュー</b>と同じになります。編集ビューより少ない、あるいは、異なるフィールドを表示するようにレイアウトを変更することができます。<br/><br/>レイアウトのカスタマイズと同時に役割の編集を行うことでセキュリティの設定も行えます。',
        'existingModule' =>'このモジュールのカスタマイズを終えた後、さらに新たなモジュールを作成することもできますし、パッケージに戻って<b>公開</b>または<b>配置</b>を実行することができます。<br><br>新たなモジュールを作成する場合は、<b>複製</b>をクリックし、現在のモジュールと同じプロパティをもつモジュールを作成できます。または、パッケージに戻って、<b>新規モジュール</b>をクリックします。<br><br>このモジュールを梱包するパッケージを<b>公開</b>または<b>配置</b>する準備ができている場合、パッケージに戻ってそれぞれのアクションを実行してください。ただし、パッケージを公開もしくは配置するためには少なくとも１つのモジュールを含んでいる必要があります。',
        'labels'=> '標準フィールドとカスタムフィールドのラベルを変更できます。ラベルを変更しても格納されているデータには影響しません。',
    ),
    'listViewEditor'=>array(
        'modify'	=> '左のパネルには３つのカラムが表示されています。デフォルトカラムは一覧画面にデフォルトで表示されるフィールドを示しています。利用可能なフィールドはカスタムの一覧画面を作成する際に選択できるフィールドを示しています。非表示カラムは管理者のみがデフォルトカラムまたは利用可能カラムに移動できるフィールドです。',
        'savebtn'	=> '<b>保存して配置</b>をクリックするとすべての変更を保存し有効にします。',
        'Hidden' 	=> '非表示フィールドは、ユーザが一覧画面で使用できないフィールドを指します。',
        'Available' => '利用可能フィールドは、デフォルトでは表示されていないが、ユーザが個別に表示させることができるフィールドです。',
        'Default'	=> 'デフォルトフィールドはカスタムな一覧画面を作っていないユーザでも表示されます。'
    ),

    'searchViewEditor'=>array(
        'modify'	=> '<b>デフォルト</b>は検索画面で表示されるフィールドとなります。<br/><br/><b>非公開</b>は管理者が検索画面に追加可能なフィールドとなります。',
        'savebtn'	=> 'すべての変更を保存し公開するには<b>保存して配置</b>をクリックしてください。',
        'Hidden' 	=> '非公開フィールドは検索画面で表示されないフィールドとなります。',
        'Default'	=> 'デフォルトフィールドは検索画面で表示されるフィールドとなります。'
    ),
    'layoutEditor'=>array(
        'default'	=> '左には２つのカラムが表示されています。右側のカラムは現在のレイアウト、またはレイアウトのプレビューと表示されていますが、ここではレイアウトを変更することができます。左側のカラムにはツールボックスと表示されていますが、ここにはレイアウトの変更を行う場合に利用する要素やツールが用意されています。<br/><br/>レイアウトエリアに現在のレイアウトと表示されている場合、作業中のレイアウトが表示されていることを示しています。<br/><br/>レイアウトエリアにレイアウトのプレビューと表示されている場合、以前に保存ボタンをクリックして作成されたレイアウトを表示していることを示します。このレイアウトは現在閲覧しているレイアウトから変更されている可能性があります。',
        'saveBtn'	=> 'このボタンをクリックするとすべての変更を反映してレイアウトを保存します。もう一度このエリアに戻ってきた場合、この時点から作業を再開することができます。この変更は、保存と公開のボタンをクリックするまで、他のユーザは参照できません。',
        'publishBtn'=> 'このボタンをクリックするとレイアウトを配置することができます。レイアウトはただちにユーザに見えるようになります。',
        'toolbox'	=> '<b>ツールボックス</b>にはゴミ箱、レイアウト要素、利用可能フィールドなど、レイアウトの編集に必要な一連のツールが含まれています。<br/><br/>いずれの要素もレイアウト上でドラッグ＆ドロップすることができ、また、ゴミ箱にドラッグ＆ドロップすることもできます。<br/><br/>新たな行やパネル要素をドラッグしてレイアウトにドロップすると、当該要素がレイアウトのドロップ位置に追加されます。<br/><br/>(filler)エリアは空白スペースを意味します。<br/><br/>利用可能なフィールドをパネルにドラッグ＆ドロップしたり、入れ替えたりできます。',
        'panels'	=> 'このエリアはレイアウトが配置された場合にユーザにどう見えるかを表示しています。<br/><br/>フィールド、行、またはパネルといった要素をドラッグ＆ドロップして再配置することができます。また、要素をツールボックスのゴミ箱にドラッグ＆ドロップして削除することができます。または、ツールボックスの要素をレイアウトの必要な場所にドラッグ＆ドロップして新たに追加することもできます。'
    ),
    'dropdownEditor'=>array(
        'default'	=> '左には２つのカラムが表示されています。右側のカラムは現在のレイアウト、またはレイアウトのプレビューと表示されていますが、ここではレイアウトを変更することができます。左側のカラムにはツールボックスと表示されていますが、ここにはレイアウトの変更を行う場合に利用する要素やツールが用意されています。<br/><br/>レイアウトエリアに現在のレイアウトと表示されている場合、作業中のレイアウトが表示されていることを示しています。<br/><br/>レイアウトエリアにレイアウトのプレビューと表示されている場合、以前に保存ボタンをクリックして作成されたレイアウトを表示していることを示します。このレイアウトは現在閲覧しているレイアウトから変更されている可能性があります。',
        'dropdownaddbtn'=> 'ドロップダウンに新しい項目を追加します.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'スタジオで施されたカスタマイズをパッケージとして梱包し、他のSugarCRMインスタンスに<b>モジュールローダー</b>経由でインストールすることができます。<br><br>まず、<b>パッケージ名</b>を入力してください。また、<b>作成者</b>や<b>詳細</b>情報を入力することも可能です。<br><br>エクスポートしたいモジュールを選択してください。カスタマイズを含むモジュールだけが選択対象として表示されます。<br><br>そして、<b>エクスポート</b>をクリックしてカスタマイズを含む.zipファイルを生成します。',
        'exportCustomBtn'=>'カスタマイズしたパッケージの.zipファイルを作成するには<b>エクスポート</b>をクリックしてください。',
        'name'=>'パッケージの<b>名称</b>は、スタジオにパッケージをインストール後にモジュールローダーで表示されます。',
        'author'=>'<b>作成者</b>はパッケージ提供者としてインストール時に表示される情報となります。作成者は個人名、企業名のどちらでもかまいません。<br><br>作成者は、スタジオにパッケージをインストール後にモジュールローダーで表示されます。',
        'description'=>'パッケージの<b>詳細</b>は、スタジオにパッケージをインストール後にモジュールローダーで表示されます。',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> '<b>開発者ツール</b>エリアへようこそ<br/><br/>このエリアのツールを使って標準モジュールを管理したり、カスタムモジュールもしくはカスタムフィールドを作成してください。',
        'studioBtn'	=> '<b>スタジオ</b>を用いてインストールされているモジュールのフィールドの配置を変えたり、利用可能なフィールドあるいは新たなカスタムフィールドを追加することができます。',
        'mbBtn'		=> '<b>モジュールビルダー</b>を使って新たなモジュールを作成してください。',
        'appBtn' 	=> 'プログラムの様々なプロパティをカスタマイズするために、アプリケーションモードを用いなさい。いくつのTPSリポートがホームページに表示されるか',
        'backBtn'	=> '前のステップに戻る',
        'studioHelp'=> '<b>スタジオ</b>を使ってインストール済みモジュールをカスタマイズします。',
        'moduleBtn'	=> 'クリックしてこのモジュールを編集してください。',
        'moduleHelp'=> '編集したいモジュールコンポーネントを選択してください。',
        'fieldsBtn'	=> '<b>フィールド</b>を管理することで、モジュールが格納する情報を編集することができます。<br/><br/>ここではカスタムフィールドを編集したり作成したりできます。',
        'layoutsBtn'=> '編集ビュー、詳細ビュー、一覧ビュー、そして検索ビューの<b>レイアウト</b>を編集',
        'subpanelBtn'=> 'サブパネルに表示される情報を編集',
        'layoutsHelp'=> '<b>編集するレイアウト</b>を選択してください。<br/<br/>データを入力する画面を変更する場合は<b>編集ビュー</b>をクリックしてください。<br/><br/>入力されたデータを表示する画面を変更する場合は<b>詳細ビュー</b>をクリックしてください。<br/><br/>デフォルトの一覧画面を変更する場合は<b>一覧画面</b>をクリックしてください。<br/><br/>基本検索や詳細検索のレイアウトを変更する場合は<b>検索</b>をクリックしてください。',
        'subpanelHelp'=> '編集する<b>サブパネル</b>を編集',
        'searchHelp' => '編集する検索レイアウトを選択してください。',
        'labelsBtn'	=> '<b>ラベル</b>を編集してこのモジュールの値を表示します。',
        'newPackage'=>'<b>新規パッケージ</b>をクリックしてパッケージを作成してください。',
        'mbHelp'    => '<b>モジュールビルダーへようこそ</b><br/><br/><b>モジュールビルダー</b>を使って標準モジュールやカスタムオブジェクトをベースとしたカスタムモジュールのプロジェクトを作成することができます。<br/><br/>開始するには<b>新規パッケージ</b>をクリックして新しいパッケージを作成してください。もしくは、編集したいパッケージを選択してください。<br/><br/><b>パッケージ</b>はカスタムモジュールのコンテナとして振る舞います。それらのカスタムモジュールはすべて１つのプロジェクトに属します。１つのパッケージには１つ以上のカスタムモジュールを含み、相互に関連付けを行い、既存のモジュールと関連を持つこともできます。<br/><br/>例: １つのカスタムモジュールを含むパッケージを作成し、標準の取引先モジュールと関連を持たせることができます。また、複数のカスタムモジュールを含むパッケージを作成し、それらを相互に関連させたり、既存のモジュールと関連させたりすることができます。',
        'exportBtn' => '<b>カスタマイズのエクスポート</b>をクリックするとスタジオで実施されたカスタマイズを含むパッケージを作成します。',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'ドロップダウンの編集',

//ASSISTANT
'LBL_AS_SHOW' => '次からもアシスタントを表示',
'LBL_AS_IGNORE' => '次からはアシスタントを無視',
'LBL_AS_SAYS' => 'アシスタントは言う：',

//STUDIO2
'LBL_MODULEBUILDER'=>'モジュールビルダー',
'LBL_STUDIO' => 'スタジオ',
'LBL_DROPDOWNEDITOR' => 'ドロップダウンの編集',
'LBL_EDIT_DROPDOWN'=>'ドロップダウンの編集',
'LBL_DEVELOPER_TOOLS' => '開発者向けツール',
'LBL_SUGARPORTAL' => 'Sugarポータルエディタ',
'LBL_SYNCPORTAL' => 'ポータル同期',
'LBL_PACKAGE_LIST' => 'パッケージ一覧',
'LBL_HOME' => 'ホーム',
'LBL_NONE'=>'-なし-',
'LBL_DEPLOYE_COMPLETE'=>'展開が完了',
'LBL_DEPLOY_FAILED'   =>'展開中にエラーが発生しました。パッケージは正しくインストールされなかった可能性があります。',
'LBL_ADD_FIELDS'=>'カスタムフィールド追加',
'LBL_AVAILABLE_SUBPANELS'=>'利用可能なサブパネル',
'LBL_ADVANCED'=>'高度な設定',
'LBL_ADVANCED_SEARCH'=>'詳細検索',
'LBL_BASIC'=>'基本',
'LBL_BASIC_SEARCH'=>'基本検索',
'LBL_CURRENT_LAYOUT'=>'現在のレイアウト',
'LBL_CURRENCY' => '通貨',
'LBL_CUSTOM' => 'カスタム',
'LBL_DASHLET'=>'ダッシュレット',
'LBL_DASHLETLISTVIEW'=>'ダッシュレット一覧ビュー',
'LBL_DASHLETSEARCH'=>'ダッシュレット検索',
'LBL_POPUP'=>'ポップアップビュー',
'LBL_POPUPLIST'=>'ポップアップ一覧ビュー',
'LBL_POPUPLISTVIEW'=>'ポップアップ一覧ビュー',
'LBL_POPUPSEARCH'=>'ポップアップ検索',
'LBL_DASHLETSEARCHVIEW'=>'ダッシュレット検索',
'LBL_DISPLAY_HTML'=>'HTMLコード表示',
'LBL_DETAILVIEW'=>'詳細ビュー',
'LBL_DROP_HERE' => '[ここにドロップ]',
'LBL_EDIT'=>'編集',
'LBL_EDIT_LAYOUT'=>'レイアウト編集',
'LBL_EDIT_ROWS'=>'行の編集',
'LBL_EDIT_COLUMNS'=>'カラムの編集',
'LBL_EDIT_LABELS'=>'ラベルの編集',
'LBL_EDIT_PORTAL'=>'次のポータルを編集:',
'LBL_EDIT_FIELDS'=>'フィールドの編集',
'LBL_EDITVIEW'=>'編集ビュー',
'LBL_FILTER_SEARCH' => "検索",
'LBL_FILLER'=>'(filler)',
'LBL_FIELDS'=>'フィールド',
'LBL_FAILED_TO_SAVE' => '保存に失敗しました',
'LBL_FAILED_PUBLISHED' => '公開に失敗しました',
'LBL_HOMEPAGE_PREFIX' => '私の',
'LBL_LAYOUT_PREVIEW'=>'レイアウトのプレビュー',
'LBL_LAYOUTS'=>'レイアウト',
'LBL_LISTVIEW'=>'一覧ビュー',
'LBL_RECORDVIEW'=>'レコードビュー',
'LBL_RECORDDASHLETVIEW'=>'レコードビューのダッシュレット',
'LBL_PREVIEWVIEW'=>'Preview View',
'LBL_MODULE_TITLE' => 'スタジオ',
'LBL_NEW_PACKAGE' => '新規パッケージ',
'LBL_NEW_PANEL'=>'新規パネル',
'LBL_NEW_ROW'=>'新規の行',
'LBL_PACKAGE_DELETED'=>'パッケージ削除済み',
'LBL_PUBLISHING' => '公開中...',
'LBL_PUBLISHED' => '公開済み',
'LBL_SELECT_FILE'=> 'ファイル選択',
'LBL_SAVE_LAYOUT'=> 'レイアウト保存',
'LBL_SELECT_A_SUBPANEL' => 'サブパネル選択',
'LBL_SELECT_SUBPANEL' => 'サブパネル選択',
'LBL_SUBPANELS' => 'サブパネル',
'LBL_SUBPANEL' => 'サブパネル',
'LBL_SUBPANEL_TITLE' => 'タイトル:',
'LBL_SEARCH_FORMS' => '検索',
'LBL_STAGING_AREA' => 'ステージエリア（ここにアイテムをドラッグ＆ドロップ）',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugarフィールド（ステージエリアに追加したいアイテムをクリック）',
'LBL_SUGAR_BIN_STAGE' => 'Sugarゴミ箱（ステージエリアに追加したいアイテムをクリック）',
'LBL_TOOLBOX' => 'ツールボックス',
'LBL_VIEW_SUGAR_FIELDS' => 'Sugarフィールドを見る',
'LBL_VIEW_SUGAR_BIN' => 'Sugarゴミ箱を見る',
'LBL_QUICKCREATE' => 'クイック作成',
'LBL_EDIT_DROPDOWNS' => 'グローバルドロップダウンの編集',
'LBL_ADD_DROPDOWN' => 'グローバルドロップダウンの追加',
'LBL_BLANK' => '-なし-',
'LBL_TAB_ORDER' => 'タブの順序',
'LBL_TAB_PANELS' => 'パネルをタブで表示',
'LBL_TAB_PANELS_HELP' => '各パネルをスクリーン上にすべて表示するのでなくタブとして表示します',
'LBL_TABDEF_TYPE' => '表示タイプ',
'LBL_TABDEF_TYPE_HELP' => 'このセクションの表示方法を選択します。このオプションはこのビューでタブを有効にした場合に反映されます。',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'タブ',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'パネル',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'レイアウトにパネルを表示する場合は「パネル」を選択してください。レイアウトにタブを個別に表示する場合は「タブ」を選択してください。パネルにタブが指定されている場合は、パネルとして表示されたサブパネルがタブ内に表示されます。<br/>選択されたタブの次のタブが新しいタブとして表示されます。最初のパネルの下のパネルのタブが選択された場合、最初のタブはタブである必要があります。',
'LBL_TABDEF_COLLAPSE' => '隠す',
'LBL_TABDEF_COLLAPSE_HELP' => 'パネルで指定した場合はセクションをデフォルトで隠してください。',
'LBL_DROPDOWN_TITLE_NAME' => '名称',
'LBL_DROPDOWN_LANGUAGE' => '言語',
'LBL_DROPDOWN_ITEMS' => 'ドロップダウン項目',
'LBL_DROPDOWN_ITEM_NAME' => '項目名',
'LBL_DROPDOWN_ITEM_LABEL' => '表示ラベル',
'LBL_SYNC_TO_DETAILVIEW' => '詳細ビューと同期',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'このオプションを選択すると、保存、または保存して展開をクリックした際に、編集ビューと詳細ビューを同期し、編集ビューのフィールドとその位置は詳細ビューに自動的に反映されます。詳細ビューでの変更はできなくなります。',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'この詳細ビューは編集ビューと同期されています。この詳細ビューのフィールドとその位置は当該編集ビューのものを反映しています。詳細ビューでの編集は保存されず、展開もされません。詳細ビューを編集する場合は、編集ビューで同期をはずしてください。',
'LBL_COPY_FROM' => '以下からのコピー',
'LBL_COPY_FROM_EDITVIEW' => '編集ビューからコピー',
'LBL_DROPDOWN_BLANK_WARNING' => '項目名と表示ラベルの両方に値が必要です。空白の項目を追加するには、両方に何も入力せずに追加をクリックしてください。',
'LBL_DROPDOWN_KEY_EXISTS' => 'キーは既にリスト内にあります',
'LBL_DROPDOWN_LIST_EMPTY' => 'リストは少なくともひとつの有効なアイテムを含む必要があります',
'LBL_NO_SAVE_ACTION' => 'このビューには保存アクションを見つけることはできませんでした。',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: 不正な形式のドキュメント',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** は組み合わせフィールドを示しています。組み合わせフィールドは個々のフィールドの集まりです。例えば「住所」は組み合わせフィールドで、「番地」、「市区町村」、「郵便番号」、「県」、「国」を含みます。<br />組み合わせフィールドをダブルクリックして、どのフィールドを含むのかを見る事ができます。',
'LBL_COMBO_FIELD_CONTAINS' => '以下を含む:',

'LBL_WIRELESSLAYOUTS'=>'モバイルレイアウト',
'LBL_WIRELESSEDITVIEW'=>'モバイル編集ビュー',
'LBL_WIRELESSDETAILVIEW'=>'モバイル詳細ビュー',
'LBL_WIRELESSLISTVIEW'=>'モバイル一覧ビュー',
'LBL_WIRELESSSEARCH'=>'モバイル検索',

'LBL_BTN_ADD_DEPENDENCY'=>'依存関係の追加',
'LBL_BTN_EDIT_FORMULA'=>'計算式の追加',
'LBL_DEPENDENCY' => '依存関係',
'LBL_DEPENDANT' => '依存',
'LBL_CALCULATED' => '計算値',
'LBL_READ_ONLY' => '読み込みのみ',
'LBL_FORMULA_BUILDER' => '計算式ビルダー',
'LBL_FORMULA_INVALID' => '不正な計算式です',
'LBL_FORMULA_TYPE' => '計算式タイプは',
'LBL_NO_FIELDS' => 'フィールドが見つかりません',
'LBL_NO_FUNCS' => '関数が見つかりません',
'LBL_SEARCH_FUNCS' => '関数の検索中...',
'LBL_SEARCH_FIELDS' => 'フィールドの検索中...',
'LBL_FORMULA' => '計算式',
'LBL_DYNAMIC_VALUES_CHECKBOX' => '依存関係',
'LBL_DEPENDENT_DROPDOWN_HELP' => '親オプションを選択した際に依存ドロップダウンのオプションを利用可能にするために、利用可能なオプションの左側のリストから右側のリストへオプションをドラッグしてください。項目が親オプションに１つもない場合、親オプションを選択すると依存ドロップダウンは表示されません。',
'LBL_AVAILABLE_OPTIONS' => '可能なオプション',
'LBL_PARENT_DROPDOWN' => '親ドロップダウン',
'LBL_VISIBILITY_EDITOR' => '表示エディタ',
'LBL_ROLLUP' => 'ロールアップ',
'LBL_RELATED_FIELD' => '関連フィールド',
'LBL_PORTAL_ROLE_DESC' => 'この役割を削除しないでください。カスタマーセルフサービスポータル役割は、Sugarポータルのアクティベーション中にシステムによって自動生成された役割です。Sugarポータルで不具合、ケース、ナレッジベースを有効/無効にするには、この役割の中でアクセス権限を設定してください。システムが正しく動作しなくなる場合があるため、他のモジュールについてのアクセス権をここでは設定しないでください。誤ってこの役割を削除してしまった場合は、Sugarポータルを無効にした後で有効にすることで再度作成されます。',

//RELATIONSHIPS
'LBL_MODULE' => 'モジュール',
'LBL_LHS_MODULE'=>'主モジュール',
'LBL_CUSTOM_RELATIONSHIPS' => '* スタジオもしくはモジュールビルダーで作成された関連',
'LBL_RELATIONSHIPS'=>'関連',
'LBL_RELATIONSHIP_EDIT' => '関連の編集',
'LBL_REL_NAME' => '名前',
'LBL_REL_LABEL' => 'ラベル',
'LBL_REL_TYPE' => 'タイプ',
'LBL_RHS_MODULE'=>'関連するモジュール',
'LBL_NO_RELS' => '関連がありません',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'追加の条件' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'カラム',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'値',
'LBL_SUBPANEL_FROM'=>'次のサブパネル',
'LBL_RELATIONSHIP_ONLY'=>'これらの二つのモジュール間にすでに表示される関連が存在するため、この関連は表示されない要素として作成されます。',
'LBL_ONETOONE' => '1対1',
'LBL_ONETOMANY' => '1対多',
'LBL_MANYTOONE' => '多対1',
'LBL_MANYTOMANY' => '多対多',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => '機能かコンポーネントを選択',
'LBL_QUESTION_MODULE1' => 'モジュールを選択',
'LBL_QUESTION_EDIT' => '編集するモジュールを選択',
'LBL_QUESTION_LAYOUT' => '編集するレイアウトを選択してください。',
'LBL_QUESTION_SUBPANEL' => '編集するサブパネルを選択してください。',
'LBL_QUESTION_SEARCH' => '編集する検索レイアウトを選択してください。',
'LBL_QUESTION_MODULE' => '編集するモジュールを選択してください。',
'LBL_QUESTION_PACKAGE' => '編集するパッケージを選択するか新たに作成してください。',
'LBL_QUESTION_EDITOR' => 'ツールを選択してください。',
'LBL_QUESTION_DROPDOWN' => '編集するドロップダウンを選択するか新たに作成してください。',
'LBL_QUESTION_DASHLET' => 'レイアウト編集を行うダッシュレットを選択してください。',
'LBL_QUESTION_POPUP' => '編集するポップアップレイアウトを選択してください。',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'関連先',
'LBL_NAME'=>'名前',
'LBL_LABELS'=>'ラベル',
'LBL_MASS_UPDATE'=>'一括更新',
'LBL_AUDITED'=>'監査',
'LBL_CUSTOM_MODULE'=>'モジュール',
'LBL_DEFAULT_VALUE'=>'デフォルト値',
'LBL_REQUIRED'=>'必須',
'LBL_DATA_TYPE'=>'タイプ',
'LBL_HCUSTOM'=>'カスタム',
'LBL_HDEFAULT'=>'デフォルト',
'LBL_LANGUAGE'=>'言語:',
'LBL_CUSTOM_FIELDS' => '* スタジオで作成されたフィールド',

//SECTION
'LBL_SECTION_EDLABELS' => 'ラベルの編集',
'LBL_SECTION_PACKAGES' => 'パッケージ',
'LBL_SECTION_PACKAGE' => 'パッケージ',
'LBL_SECTION_MODULES' => 'モジュール',
'LBL_SECTION_PORTAL' => 'ポータル',
'LBL_SECTION_DROPDOWNS' => 'ドロップダウン',
'LBL_SECTION_PROPERTIES' => 'プロパティ',
'LBL_SECTION_DROPDOWNED' => 'ドロップダウンの編集',
'LBL_SECTION_HELP' => 'ヘルプ',
'LBL_SECTION_ACTION' => 'アクション',
'LBL_SECTION_MAIN' => 'メイン',
'LBL_SECTION_EDPANELLABEL' => 'パネルラベルの編集',
'LBL_SECTION_FIELDEDITOR' => 'フィールドの編集',
'LBL_SECTION_DEPLOY' => '配置',
'LBL_SECTION_MODULE' => 'モジュール',
'LBL_SECTION_VISIBILITY_EDITOR'=>'表示可否の編集',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'デフォルト',
'LBL_HIDDEN'=>'非表示',
'LBL_AVAILABLE'=>'利用可能',
'LBL_LISTVIEW_DESCRIPTION'=>'以下に３つのカラムが表示されています。<b>デフォルト</b>カラムには一覧画面にデフォルトで表示されるカラムが含まれています。<b>追加</b>カラムにはカスタムビューを作成する際に選択できるカラムを含んでいます。<b>利用可能</b>カラムには管理者がデフォルトもしくは追加カラムに移動できるカラムが表示されています。',
'LBL_LISTVIEW_EDIT'=>'リストビューエディタ',

//Manager Backups History
'LBL_MB_PREVIEW'=>'プレビュー',
'LBL_MB_RESTORE'=>'リストア',
'LBL_MB_DELETE'=>'削除',
'LBL_MB_COMPARE'=>'比較',
'LBL_MB_DEFAULT_LAYOUT'=>'デフォルトのレイアウト',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'追加',
'LBL_BTN_SAVE'=>'保存',
'LBL_BTN_SAVE_CHANGES'=>'変更を保存',
'LBL_BTN_DONT_SAVE'=>'変更を破棄',
'LBL_BTN_CANCEL'=>'キャンセル',
'LBL_BTN_CLOSE'=>'閉じる',
'LBL_BTN_SAVEPUBLISH'=>'保存して配置',
'LBL_BTN_NEXT'=>'次へ',
'LBL_BTN_BACK'=>'戻る',
'LBL_BTN_CLONE'=>'複製',
'LBL_BTN_COPY' => 'コピー',
'LBL_BTN_COPY_FROM' => '以下からのコピー',
'LBL_BTN_ADDCOLS'=>'カラムの追加',
'LBL_BTN_ADDROWS'=>'行の追加',
'LBL_BTN_ADDFIELD'=>'フィールドの追加',
'LBL_BTN_ADDDROPDOWN'=>'ドロップダウンの追加',
'LBL_BTN_SORT_ASCENDING'=>'昇順',
'LBL_BTN_SORT_DESCENDING'=>'降順',
'LBL_BTN_EDLABELS'=>'ラベルの編集',
'LBL_BTN_UNDO'=>'元に戻す',
'LBL_BTN_REDO'=>'再実行する',
'LBL_BTN_ADDCUSTOMFIELD'=>'カスタムフィールド追加',
'LBL_BTN_EXPORT'=>'カスタマイズのエクスポート',
'LBL_BTN_DUPLICATE'=>'複製',
'LBL_BTN_PUBLISH'=>'公開',
'LBL_BTN_DEPLOY'=>'配置',
'LBL_BTN_EXP'=>'エクスポート',
'LBL_BTN_DELETE'=>'削除',
'LBL_BTN_VIEW_LAYOUTS'=>'レイアウトの表示',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'モジュールレイアウトを見る',
'LBL_BTN_VIEW_FIELDS'=>'フィールドの表示',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'関連の表示',
'LBL_BTN_ADD_RELATIONSHIP'=>'関連の追加',
'LBL_BTN_RENAME_MODULE' => 'モジュール名の変更',
'LBL_BTN_INSERT'=>'挿入',
'LBL_BTN_RESTORE_BASE_LAYOUT' => '基本レイアウトを元に戻す',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'エラー: フィールドが既に存在します',
'ERROR_INVALID_KEY_VALUE'=> "エラー: キーの値が無効です: [&amp;amp;#39;]",
'ERROR_NO_HISTORY' => '履歴ファイルが見つかりません',
'ERROR_MINIMUM_FIELDS' => 'このレイアウトは少なくとも１つのフィールドを含む必要があります。',
'ERROR_GENERIC_TITLE' => 'エラーが発生しました',
'ERROR_REQUIRED_FIELDS' => '継続しますか？ 以下の必須フィールドがレイアウトに不足しています:',
'ERROR_ARE_YOU_SURE' => '本当に継続してよいですか？',
'ERROR_DATABASE_ROW_SIZE_LIMIT' => 'フィールドを作成できません。データベース内のこのテーブルの行サイズ制限に達しました。<a href="https://support.sugarcrm.com/SmartLinks/Custom/MySQL_Row_Size_Limit/" target="_blank">詳細はこちらです</a>。',

'ERROR_CALCULATED_MOBILE_FIELDS' => '以下のフィールドは計算結果を保持していますが、モバイル編集画面ではリアルタイムに再計算されません:',
'ERROR_CALCULATED_PORTAL_FIELDS' => '以下のフィールドは計算結果を保持していますが、Sugarポータル編集画面ではリアルタイムに再計算されません:',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => '以下のモジュールが無効:',
    'LBL_PORTAL_ENABLE_MODULES' => 'ポータルで有効にしたい場合は<a id="configure_tabs" target="_blank" href="./index.php?module=Administration&amp;action=ConfigureTabs">こちら</a>にて設定してください。',
    'LBL_PORTAL_CONFIGURE' => 'ポータルを設定',
    'LBL_PORTAL_ENABLE_PORTAL' => 'ポータルを有効化',
    'LBL_PORTAL_SHOW_KB_NOTES' => 'ナレッジベース モジュールのメモを有効にする',
    'LBL_PORTAL_ALLOW_CLOSE_CASE' => 'ポータルユーザーによるケースのクローズを許可する',
    'LBL_PORTAL_ENABLE_SELF_SIGN_UP' => '新規ユーザーによる登録を許可する',
    'LBL_PORTAL_USER_PERMISSIONS' => 'ユーザー権限',
    'LBL_PORTAL_THEME' => 'テーマポータル',
    'LBL_PORTAL_ENABLE' => '有効にする',
    'LBL_PORTAL_SITE_URL' => 'ポータルのURLは:',
    'LBL_PORTAL_APP_NAME' => 'アプリケーション名',
    'LBL_PORTAL_CONTACT_PHONE' => '電話',
    'LBL_PORTAL_CONTACT_EMAIL' => 'Eメール',
    'LBL_PORTAL_CONTACT_EMAIL_INVALID' => '有効なEメールアドレスを入力する必要があります',
    'LBL_PORTAL_CONTACT_URL' => 'URL',
    'LBL_PORTAL_CONTACT_INFO_ERROR' => '少なくとも1つの連絡方法を指定する必要があります',
    'LBL_PORTAL_LIST_NUMBER' => 'リストに表示するレコード数',
    'LBL_PORTAL_DETAIL_NUMBER' => '詳細画面に表示するフィールド数',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'グローバルサーチの結果件数',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'ポータル登録時のデフォルトユーザ',
    'LBL_PORTAL_MODULES' => 'ポータルモジュール',
    'LBL_CONFIG_PORTAL_CONTACT_INFO' => 'ポータルの担当者情報',
    'LBL_CONFIG_PORTAL_CONTACT_INFO_HELP' => 'アカウントで追加のサポートを要するポータルに表示される担当者情報を設定します。少なくとも1つのオプションを設定する必要があります。',
    'LBL_CONFIG_PORTAL_MODULES_HELP' => 'ポータルモジュールの名前をドラッグ＆ドロップして、ポータルのトップナビゲーションバーで表示または非表示に設定してください。モジュールへのポータルユーザのアクセスを制御するには、<a href="?module=ACLRoles&action=index">役割管理</a>を使用します。',
    'LBL_CONFIG_PORTAL_MODULES_DISPLAYED' => '表示されるタブ',
    'LBL_CONFIG_PORTAL_MODULES_HIDDEN' => '非表示のタブ',
    'LBL_CONFIG_VISIBILITY' => '可視性',
    'LBL_CASE_VISIBILITY_HELP' => 'どのポータルユーザーが案件を閲覧できるかを定義します。',
    'LBL_EMAIL_VISIBILITY_HELP' => '案件に関連するメールを表示できるポータルユーザーを定義します。 参加している連絡先は、To、From、CC、および BCC フィールドの連絡先です。',
    'LBL_MESSAGE_VISIBILITY_HELP' => '案件に関連するメッセージを表示できるポータルユーザーを定義します。 参加している連絡先は、[ゲスト] フィールドの連絡先です。',
    'CASE_VISIBILITY_OPTIONS' => [
        'all' => 'アカウントに関連するすべての連絡先',
        'related_contacts' => '第一連絡先と案件に関連する連絡先のみ',
    ],
    'EMAIL_VISIBILITY_OPTIONS' => [
        'related_contacts' => '参加する連絡先のみ',
        'all' => '案件を閲覧可能なすべての連絡先',
    ],
    'MESSAGE_VISIBILITY_OPTIONS' => [
        'related_contacts' => '参加する連絡先のみ',
        'all' => '案件を閲覧可能なすべての連絡先',
    ],


'LBL_PORTAL'=>'ポータル',
'LBL_PORTAL_LAYOUTS'=>'ポータルレイアウト',
'LBL_SYNCP_WELCOME'=>'更新したいポータルのURLを入力してください。',
'LBL_SP_UPLOADSTYLE'=>'アップロードするスタイルシートを選択してください。<br> 次にポータルを同期するとスタイルシートが適用されます。',
'LBL_SP_UPLOADED'=> 'アップロード済み',
'ERROR_SP_UPLOADED'=>'CSSスタイルシートをアップロードしようとしています。',
'LBL_SP_PREVIEW'=>'スタイルシートを適用した場合のSugarポータルのプレビューです。',
'LBL_PORTALSITE'=>'SugarポータルのURL:',
'LBL_PORTAL_GO'=>'実行',
'LBL_UP_STYLE_SHEET'=>'スタイルシートのアップロード',
'LBL_QUESTION_SUGAR_PORTAL' => '編集するSugarポータルのレイアウトを選択します。',
'LBL_QUESTION_PORTAL' => '編集するポータルレイアウトを選択します。',
'LBL_SUGAR_PORTAL'=>'Sugarポータルエディタ',
'LBL_USER_SELECT' => 'ユーザ選択',

//PORTAL PREVIEW
'LBL_CASES'=>'ケース',
'LBL_NEWSLETTERS'=>'ニュースレター',
'LBL_BUG_TRACKER'=>'バグトラッカー',
'LBL_MY_ACCOUNT'=>'ユーザ設定',
'LBL_LOGOUT'=>'ログアウト',
'LBL_CREATE_NEW'=>'作成',
'LBL_LOW'=>'低',
'LBL_MEDIUM'=>'中',
'LBL_HIGH'=>'高',
'LBL_NUMBER'=>'番号:',
'LBL_PRIORITY'=>'優先度:',
'LBL_SUBJECT'=>'件名',

//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'パッケージ名:',
'LBL_MODULE_NAME'=>'モジュール名:',
'LBL_MODULE_NAME_SINGULAR' => '単独のモジュール名:',
'LBL_AUTHOR'=>'作成者:',
'LBL_DESCRIPTION'=>'詳細:',
'LBL_KEY'=>'キー:',
'LBL_ADD_README'=>'お読みください',
'LBL_MODULES'=>'モジュール:',
'LBL_LAST_MODIFIED'=>'最終更新日:',
'LBL_NEW_MODULE'=>'新規モジュール',
'LBL_LABEL'=>'ラベル:',
'LBL_LABEL_TITLE'=>'ラベル',
'LBL_SINGULAR_LABEL' => '単数形ラベル',
'LBL_WIDTH'=>'幅',
'LBL_PACKAGE'=>'パッケージ:',
'LBL_TYPE'=>'タイプ:',
'LBL_TEAM_SECURITY'=>'チームセキュリティ',
'LBL_ASSIGNABLE'=>'アサイン可能',
'LBL_PERSON'=>'担当者',
'LBL_COMPANY'=>'会社',
'LBL_ISSUE'=>'ケース',
'LBL_SALE'=>'商談',
'LBL_FILE'=>'ファイル',
'LBL_NAV_TAB'=>'ナビゲーションタブ',
'LBL_CREATE'=>'作成',
'LBL_LIST'=>'一覧',
'LBL_VIEW'=>'画面',
'LBL_LIST_VIEW'=>'一覧ビュー',
'LBL_HISTORY'=>'履歴',
'LBL_RESTORE_DEFAULT_LAYOUT'=>'デフォルト レイアウトに戻す',
'LBL_ACTIVITIES'=>'アクティビティストリーム',
'LBL_SEARCH'=>'検索',
'LBL_NEW'=>'新規',
'LBL_TYPE_BASIC'=>'ベーシック',
'LBL_TYPE_COMPANY'=>'会社情報',
'LBL_TYPE_PERSON'=>'担当者',
'LBL_TYPE_ISSUE'=>'ケース',
'LBL_TYPE_SALE'=>'セールス',
'LBL_TYPE_FILE'=>'ファイル',
'LBL_RSUB'=>'モジュールに表示されるサブパネルとなります',
'LBL_MSUB'=>'関連モジュールで表示するためのサブパネルです。',
'LBL_MB_IMPORTABLE'=>'インポートの許可',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'表示',
'LBL_VE_HIDDEN'=>'非表示',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]]は削除されました',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'カスタマイズのエクスポート',
'LBL_EC_NAME'=>'パッケージ名:',
'LBL_EC_AUTHOR'=>'作成者:',
'LBL_EC_DESCRIPTION'=>'詳細:',
'LBL_EC_KEY'=>'キー:',
'LBL_EC_CHECKERROR'=>'モジュールを選択してください。',
'LBL_EC_CUSTOMFIELD'=>'カスタマイズされたフィールド',
'LBL_EC_CUSTOMLAYOUT'=>'カスタマイズされたレイアウト',
'LBL_EC_CUSTOMDROPDOWN' => 'カスタムドロップダウン',
'LBL_EC_NOCUSTOM'=>'カスタマイズされたモジュールはありません。',
'LBL_EC_EXPORTBTN'=>'エクスポート',
'LBL_MODULE_DEPLOYED' => 'モジュールは配置されました。',
'LBL_UNDEFINED' => '未定義',
'LBL_EC_CUSTOMLABEL'=>'カスタマイズラベル',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'データの検索に失敗しました',
'LBL_AJAX_TIME_DEPENDENT' => '時間に依存するアクションが実行中です。数秒後に再度実行してください。',
'LBL_AJAX_LOADING' => '読み込み中...',
'LBL_AJAX_DELETING' => '削除中...',
'LBL_AJAX_BUILDPROGRESS' => 'ビルド中...',
'LBL_AJAX_DEPLOYPROGRESS' => '配置中...',
'LBL_AJAX_FIELD_EXISTS' =>'入力したフィールド名は既に存在しています。新しいフィールド名を入力してください。',
//JS
'LBL_JS_REMOVE_PACKAGE' => '本当にこのパッケージをはずしてよいですか？ このパッケージに関連するファイルはすべて削除されます。',
'LBL_JS_REMOVE_MODULE' => '本当にこのモジュールをはずしてよいですか？ このパッケージに関連するファイルはすべて削除されます。',
'LBL_JS_DEPLOY_PACKAGE' => 'このモジュールを再度展開すると、スタジオで施したカスタマイズは失われます。本当に実行してよいですか？',

'LBL_DEPLOY_IN_PROGRESS' => 'パッケージの配置',
'LBL_JS_VALIDATE_NAME'=>'パッケージ名 - 空白を含まず英字から始まる英数字である必要があります。',
'LBL_JS_VALIDATE_PACKAGE_KEY'=>'パッケージキーは既に存在します',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'パッケージ名は既に存在します。',
'LBL_JS_PACKAGE_NAME'=>'パッケージ名 - 文字、数字、アンダースコアしか利用できません。文字で開始する必要があります。また、スペースや特殊文字は使用できません。',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'キー-英数字で、文字から始まる必要があります',
'LBL_JS_VALIDATE_KEY'=>'キー - 空白を含まず英字から始まる英数字である必要があります',
'LBL_JS_VALIDATE_LABEL'=>'モジュールの表示名に利用するラベルを入力してください',
'LBL_JS_VALIDATE_TYPE'=>'作成したいモジュールのタイプをリストから選択してください',
'LBL_JS_VALIDATE_REL_NAME'=>'パッケージ名 - 空白を含まない英数字である必要があります',
'LBL_JS_VALIDATE_REL_LABEL'=>'ラベル - サブパネル上に表示されるラベルを追加してください',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'この必要なドロップダウンリストアイテムを本当に削除しますか？これはアプリケーションの機能に影響する可能性があります。',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'このドロップダウンリストアイテムを本当に削除しますか？受注済もしくは失注ステージを削除すると、売上予測モジュールが正しく機能しなくなります。',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_NEW' => '新しいセールスステータスを本当に削除しますか？このステータスを削除すると商談モジュールの商談品目ワークフローが正しく動かなくなる可能性があります。',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_IN_PROGRESS' => '進行中セールスステータスを本当に削除しますか？このステータスを削除すると商談モジュールの商談品目ワークフローが正しく動かなくなる可能性があります。',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'この受注済セールスステージを本当に削除しますか？このステージを削除すると、売上予測モジュールが正しく機能しなくなります。',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'この失注セールスステージを本当に削除しますか？このステージを削除すると売上予測モジュールが正しく機能しなくなります。',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts.'
        . ' If the field is involved in a formula to calculate values for any fields, the formula will no longer work.'
        . '\n\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run.'
        . '\n\nDo you wish to continue?',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'本当にこの関連を削除してよいですか？',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'この関連付けを永続化します。本当にこの関連付けを配置してよいですか？',
'LBL_CONFIRM_DONT_SAVE' => '最後に保存された状態から変更が加えられています。保存しますか？',
'LBL_CONFIRM_DONT_SAVE_TITLE' => '変更を保存しますか？',
'LBL_CONFIRM_LOWER_LENGTH' => '日付は短く切り取られる場合があります。この作業は元に戻りません。本当に継続してよいですか？',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'フィールドに入力されるデータのタイプに基づいて適切なデータタイプを選択してください。',
'LBL_POPHELP_FTS_FIELD_CONFIG' => 'フィールドを全文検索可能に設定します。',
'LBL_POPHELP_FTS_FIELD_BOOST' => 'ブースティングとは、レコード\\のフィールドの関連性を強化するプロセスです。 <br /> 高いブーストレベルのフィールドは検索が実行される際に、より重きを置かれます。検索が実行される際、より重きを置かれたフィールドを含む一致レコードは検索結果での表示順が上になります。<br /> デフォルト値は 1.0 で、これは中間のブーストを示します。プラスのブーストを適用するには、1 より大きい浮動小数点値が許容されます。マイナスのブーストを適用するには、1 より小さい値を使用します。例として、1.35 の値はフィールドに 135% プラスのブーストを与えます。0.60 の値を使用すると、マイナスのブーストが適用されます。 <br /> これまでのバージョンでは全文検索のインデックス再生成が必要だったことに注意してください。これはもう必要ありません。',
'LBL_POPHELP_IMPORTABLE'=>'<b>はい</b>: インポート時にこのフィールドを含めます。<br><b>いいえ</b>: インポート時にこのフィールドを含めません。<br><b>必須</b>: フィールドの値はどのようなインポートでも入力しなければいけません。',
'LBL_POPHELP_PII'=>'このフィールドは自動的に監査用にマークされ、個人情報ビューで利用できます。<br>個人情報フィールドは、レコードがデータプライバシー消去要求に関連付けられているときにも永続的に消去される可能性があります。<br>消去はデータプライバシーモジュールを介して実行され、データプライバシーマネージャー役割の管理者またはユーザが実行できます。',
'LBL_POPHELP_IMAGE_WIDTH'=>'幅をピクセルで入力してください。<br>アップロードした画像はこの数値で伸縮されます。',
'LBL_POPHELP_IMAGE_HEIGHT'=>'高さをピクセルで入力してください。<br>アップロードした画像はこの数値で伸縮されます。',
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
'LBL_POPHELP_REQUIRED'=>"このフィールドがレイアウトで必須かどうかを決定する数式を作成します。<br/>"
    . "必須フィールドは、ブラウザベースのモバイルビューの数式に従いますが、<br/>"
    . "sugar Mobile for iPhoneなどのネイティブアプリケーション内の数式に従いません。<br/>"
    . "これはSugarセルフサービスポータル内の数式を継承しません。",
'LBL_POPHELP_READONLY'=>"このフィールドがレイアウトで読み取り専用かどうかを決定する数式を作成します。<br/>"
        . "読み取り専用フィールドは、ブラウザベースのモバイルビューの数式に従いますが、<br/>"
        . "Sugar Mobile for iPhoneなどのネイティブアプリケーション内の数式に従いません。<br/>"
        . "これはSugarセルフサービスポータル内の数式を継承しません。",
'LBL_POPHELP_GLOBAL_SEARCH'=>'このモジュールのグローバル検索を使用してレコードを検索するときに、このフィールドを使用するように選択します。',
//Revert Module labels
'LBL_RESET' => 'リセット',
'LBL_RESET_MODULE' => 'モジュールをリセット',
'LBL_REMOVE_CUSTOM' => 'カスタマイズを削除',
'LBL_CLEAR_RELATIONSHIPS' => '関連をクリア',
'LBL_RESET_LABELS' => 'ラベルをリセット',
'LBL_RESET_LAYOUTS' => 'レイアウトをリセット',
'LBL_REMOVE_FIELDS' => 'カスタムフィールドをはずす',
'LBL_CLEAR_EXTENSIONS' => 'エクステンションをクリア',

'LBL_HISTORY_TIMESTAMP' => 'タイムスタンプ',
'LBL_HISTORY_TITLE' => '履歴',

'fieldTypes' => array(
                'varchar'=>'テキストフィールド',
                'int'=>'整数',
                'float'=>'浮動小数点',
                'bool'=>'チェックボックス',
                'enum'=>'ドロップダウン',
                'multienum' => 'マルチセレクト',
                'date'=>'日付',
                'phone' => '電話',
                'currency' => '通貨',
                'html' => 'HTML',
                'radioenum' => 'ラジオ',
                'relate' => '関連',
                'address' => '住所',
                'text' => 'テキストエリア',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'image' => '画像',
                'encrypt'=>'暗号化',
                'datetimecombo' =>'日時',
                'decimal'=>'小数点',
                'autoincrement' => '自動インクレメント',
                'actionbutton' => 'ActionButton',
),
'labelTypes' => array(
    "" => "よく利用されるラベル",
    "all" => "すべてのラベル",
),

'parent' => '動的関連',

'LBL_ILLEGAL_FIELD_VALUE' =>"ドロップダウンのキーにクオーテーションを含むことはできません。",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"この項目をドロップダウンリストからはずします。このドロップダウンを利用するすべてのフィールドでこの値が使えなくなり、表示もされなくなります。本当に継続してよいですか？",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'すべてのモジュール',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} ({1}に関連するID)',
'LBL_HEADER_COPY_FROM_LAYOUT' => 'レイアウトからのコピー',
'LBL_RELATIONSHIP_TYPE' => '関連',

// Edit Labels
'LBL_COMPARISON_LANGUAGE' => '比較言語',
'LBL_LABEL_NOT_TRANSLATED' => 'このラベルは翻訳されない場合があります',
);
