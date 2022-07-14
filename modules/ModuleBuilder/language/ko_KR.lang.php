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
    'LBL_LOADING' => '로딩중입니다.' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => '선택사항 숨기기' /*for 508 compliance fix*/,
    'LBL_DELETE' => '삭제하기' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'SugarCRM 제공' /*for 508 compliance fix*/,
    'LBL_ROLE' => '역할',
    'LBL_BASE_LAYOUT' => '기본 레이아웃',
    'LBL_FIELD_NAME' => '필드명',
    'LBL_FIELD_VALUE' => '값',
    'LBL_LAYOUT_DETERMINED_BY' => '레이아웃 결정:',
    'layoutDeterminedBy' => [
        'std' => '표준 레이아웃',
        'role' => '역할',
        'dropdown' => '드롭다운 필드',
    ],
    'LBL_DELETE_CUSTOM_LAYOUTS' => '사용자 지정 레이아웃은 모두 삭제됩니다. 현재 레이아웃 정의를 변경하시겠습니까?',
'help'=>array(
    'package'=>array(
            'create'=>'패키지에 대한 </ b>이름<b>을 제공합니다. 이름을 입력하면 입력한 이름은 문자와 숫자 구분없이 사용하고 공백이 없어야 합니다. (예 : HR_Management)<br/><br/> 패키지에 대한 정보<b>작성자</b> 및 <b>설명</b>를 제공할 수 있습니다. 패키지를 만드는데 <br/><br/><b>저장</b>클릭합니다.',
            'modify'=>'<b>패키지</b>에 대한 속성과 가능한 동작이 여기에 나타납니다. <br><br> 여러분은 패키지에 포함된 모든 모듈을 보기 및 사용자 정의할 수 있을 뿐 아니라 패키지의 <b>이름</b>, <b>작성자</b> 및 <b>설명</b>을 수정할 수 있습니다. 패키지의 모듈을 만들려면 <br><br><b>새 모듈</b> 클릭합니다.<br><br>패키지가 적어도 하나의 모듈이 포함되어 있는 경우, 패키지에서 만든 사용자 지정 <b>내보내기</b>뿐만 아니라<b>게시</b> 및 <b>배포</b> 패키지를 합니다.',
            'name'=>'현재 패키지의 <b>이름</b>입니다. <br/><br/>입력한 이름은 문자와 숫자 구분없이 사용하고 공백이 없어야 합니다. (예 : HR_Management),',
            'author'=>'<b>작성자</b>가 패키지를 만든 기업의 이름으로 설치하는 동안 표시됩니다.<br><br>저자는 개인이나 기업이 될 수 있습니다.',
            'description'=>'이는 설치중 진열된 패키지의 설명입니다.',
            'publishbtn'=>'모든 입력 데이터를 저장 및 패키지의 설치 가능한 버전 zip 파일을 만들려면 <b>게시</b>를 클릭합니다.<br><br>zip 파일을 업로드하고 패키지를 설치하기 위해 <b>모듈 로더</b>를 사용합니다.',
            'deploybtn'=>'모든 입력 데이터를 저장 및 현재 인스턴스의 모든 모듈을 포함하는 패키지를 설치하기 위해 <b>배포</b>를 클릭합니다.',
            'duplicatebtn'=>'새 패키지에 페키지의 내용을 복사하고 새 패키지를 표시하기 위해 <b>중복</b>클릭합니다. <br/><br/>새로운 패키지의 새 이름은 새로운 하나를 만드는데 사용되는 패키지의 이름 끝에 숫자를 추가하여 자동으로 생성됩니다. 새 <b>이름</b> 입력하고 <b>저장</b> 클릭하여 새 패키지의 이름을 바꿀 수 있습니다.',
            'exportbtn'=>'패키지에서 만든 사용자 지정 내용이 포함된 zip 파일을 생성하기 위해 <b>내보내기</b> 클릭합니다.<br><br> 생성된 파일은 패키지의 설치 가능한 버전이 아닙니다.zip 파일 가져오기 및 모듈 빌더에서 나타나는 사용자 지정을 포함하는 패키지를 가지려면 <br><br><b>모듈 로더</b>를 사용합니다.',
            'deletebtn'=>'패키지 및 패키지에 관련된 모든 파일을 삭제하려면 <b>삭제</b>를 클릭합니다.',
            'savebtn'=>'패키지에 관련된 모든 입력 데이터를 저장하는 저장하려면 <b>모듈</b>을 클릭합니다.',
            'existing_module'=>'속성 및 필드 관계의 사용자 정의 및 모듈과 관련된 레이아웃을 편집하려면 <b>모듈</b> 아이콘을 클릭합니다.',
            'new_module'=>'이 패키지에 대한 새 모듈을 만들려면 <b>새 모듈</b>을 클릭합니다.',
            'key'=>'<b>키</b>의 문자와 숫자 구별없이 5 개의 글자는 현재 패키지에 있는 모든 모듈에 대한 모든 디렉토리의 클래스 이름 및 데이터베이스 테이블 앞에 덧붙이는데 사용됩니다.<br><br> 키는 테이블 이름의 고유성을 얻는 데 사용됩니다.',
            'readme'=>'이 패키지에 대한 <b>추가 정보</b> 텍스트를 추가하려면 클릭합니다.<br><br> 추가정보는 설치시에 사용할 수 있습니다.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'모듈에 대한 <b>이름</b>을 제공합니다. 제공되는 <b>레이블</b>은 탐색 탭에 표시됩니다. <b>탐색 탭</b>확인란을 선택하여 모듈에 대한 탐색 탭을 표시하려면 <br/><br/>를 선택합니다.<br/><br/>모듈 레코드내에 팀 선택 필드를 얻으려면 <b>팀 보안</b> 확인란을 선택합니다.<br/><br/>그런 다음 생성하고자 하는 모듈의 종류를 선택합니다. <br/><br/>템플릿 유형을 선택합니다. 각 템플릿은 모듈에 대한 기초로 사용할 수 있는 미리 정의된 레이아웃뿐만 아니라 필드의 특정 집합을 포함합니다. 모듈을 만들려면 <br/><br/><b>저장</b>을 클릭합니다.',
        'modify'=>'모듈 특성을 변경하거나  모듈 관련된 <b>필드</b> <b>관계</b> 및 <b>레이아웃</b>을 사용자 정의할 수 있습니다.',
        'importable'=>'<b>가져오기</b> 확인란의 선택은 이 모듈에 대한 가져오기가 가능하게 됩니다.<br><br>가져 오기 마법사에 링크는 모듈의 바로 가기 패널에 나타납니다. 가져 오기 마법사는 외부소스에서 사용자 모률에 데이터를 가져 오기를 용이하게 합니다.',
        'team_security'=>'<b>팀 보안</b> 확인란 선택은 이 모듈에 대한 팀의 보안을 가능합니다.<br/><br/>팀 보안을 사용할 수 있는 경우, 팀 선택 필드는 모듈의 레코드 내에서 나타납니다.',
        'reportable'=>'이 상자를 선택하면 이 모듈이 보고서에 대한 실행을 할 수 있게 합니다.',
        'assignable'=>'이 상자를 선택하면 이 모듈의 레코드가 선택한 사용자에게 할당할 수 있습니다.',
        'has_tab'=>'<b>탐색 탭</b> 선택하면 모듈에 대한 탐색 탭이 제공됩니다.',
        'acl'=>'이 상자를 선택하면 필드 레벨 보안을 포함하여 이 모듈에 대한 액세스 제어가 가능하게 됩니다.',
        'studio'=>'이 상자를 선택하면 관리자가 스튜디오 내에서 이 모듈을 사용자 정의할 수 있습니다.',
        'audit'=>'이 상자를 선택하면 이 모듈에 대한 감사를 가능하게 합니다. 특정 필드에 대한 변경 사항은 기록되며 관리자가 변경 내용을 검토할 수 있습니다.',
        'viewfieldsbtn'=>'모듈과 관련된 필드 보기와 작성 및 사용자 정의 필드를 편집하려면 <b>필드 보기</b>를 클릭합니다.',
        'viewrelsbtn'=>'이 모듈과 관련된 관계의 보기 및 새로운 관계을 만들려면 <b>관계 보기</b>를 클릭합니다.',
        'viewlayoutsbtn'=>'모듈의 레이아웃 보기 및 레이아웃에서 필드 구성을 사용자 정의하려면 <b>레이아웃 보기</b>를 클릭합니다.',
        'viewmobilelayoutsbtn' => '모듈에 대한 모바일 레이아웃을보고, 레이아웃 내의 필드의 배열을 사용자 정의보기 모바일 레이아웃을 클릭합니다.',
        'duplicatebtn'=>'새 모듈에 모듈의 속성을 복사하고 새 모듈을 표시하려면 <b>중복</b>을 클릭합니다. <br/><br/>새 모듈에 대한 새 이름은 새로 만드는데 사용되는 모듈의 이름 끝에 번호를 추가하여 자동으로 생성됩니다.',
        'deletebtn'=>'이 모듈을 삭제하려면 <b>삭제</b>를 클릭합니다.',
        'name'=>'현재 모듈의 <b>이름</b>입니다.<br/><br/>이름은 문자와 숫자 구별이 없으며 문자로 시작하고 공백이 없어야 합니다. (예: HR_Management)',
        'label'=>'이 모듈에 대한 탐색 탭에 표시되는 <b>레이블</b>입니다.',
        'savebtn'=>'모듈에 관련된 모든 입력 데이터를 저장하려면 <b>저장</b>을 클릭합니다.',
        'type_basic'=>'<b>기본</b> 템플릿 유형은 팀 작성일 및 설명 필드를 팀에 할당된 이름과 같은 기본 필드를 제공합니다.',
        'type_company'=>'<b>회사</b 템플릿 유형은 회사 이름 산업 및 결제 주소와 같은 조직의 특정 필드를 제공합니다.<br/><br/> 표준 계정 모듈과 유사한 모듈을 작성하려면 이 템플릿을 사용합니다.',
        'type_issue'=>'<b>문제</b> 템플릿 유형은 번호 상태 우선 순위 및 설명 등의 사례 및 버그 특정 필드를 제공합니다.<br/><br/> 표준 사례 및 버그 트래커 모듈과 비슷한 모듈을 작성하려면 이 템플릿을 사용합니다.',
        'type_person'=>'<b>개인</b> 템플릿 유형은 인사말 제목 이름 주소 및 전화 번호 등의 개인 특정 필드를 제공합니다.<br/><br/> 표준 연락처와 리드와 비슷한 모듈을 작성하려면 이 템플릿을 사용합니다.',
        'type_sale'=>'<b>판매</b> 템플릿 유형은 리드 소스 단계의 수량 및 확률과 같은 기회 특정 필드를 제공합니다.  <br/><br/>표준 기회 모듈과 유사한 모듈을 작성하려면 이 템플릿을 사용합니다.',
        'type_file'=>'<b>파일</b> 템플릿은 파일 이름의 문서 형식 및 게시 날짜와 같은 문서의 특정 필드를 제공합니다.<br><br>표준 문서 모듈과 유사한 모듈을 작성하려면이 템플릿을 사용합니다.',

    ),
    'dropdowns'=>array(
        'default' => '응용 프로그램의 모든 <b>드롭다운</b>은 다음과 같습니다.<br><br> 드롭 다운은 모듈의 드롭 다운 필드를 사용할 수 있습니다.<br><br> 기존의 드롭 다운을 변경하려면 드롭 다운 이름을 클릭합니다.<br><br> 새 드롭 다운을 만들려면 <b>드롭다운 추가</b>를 클릭합니다.',
        'editdropdown'=>'드롭 다운 목록은 모듈의 표준 또는 사용자 지정 드롭 다운 필드를 사용할 수 있습니다.<br><br> 드롭 다운 목록의 <b>이름</b>을 제공합니다.<br><br> 응용 프로그램에서 언어 팩이 설치된 경우 목록 항목에 사용하려면 <b>언어</b>를 선택할 수 있습니다.<br><br><b>항목 이름</b>은 드롭 다운 목록에서 옵션의 이름을 제공합니다. 이 이름은 사용자에게 표시하는 드롭 다운 목록에 표시되지 않습니다.<br><br><b>표시 레이블</b> 필드는 사용자에게 표시되는 레이블을 제공합니다.<br><br> 품목 이름 및 표시 레이블을 제공한 후, 드롭 다운 목록에 항목을 추가하려면 <b>추가</b>를 클릭합니다.<br><br> 목록 드래그 항목의 순서를 변경하고 원하는 위치로 항목을 삭제하려면.<br><br> 항목의 표시 라벨을 편집하려면<b>항목 편집</b>을 클릭하고 새 레이블을 입력합니다. 드롭 다운 목록에서 항목을 삭제하려면 <b>아이콘 삭제</b>를 클릭합니다.<br><br>표시 페이블에 적용한 변경 내용을 취소하려면  <b>실행 취소</b>를 클릭합니니다. 취소 변경 내용을 취소하려면 <b>다시 실행</b>을 클릭합니다.<br><br>드롭 다운 목록을 저장하려면 <b>저장</b>을 클릭합니다.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> '저장후 배치를 클릭하면 모든 변경사항을 저장하며 실행시킵니다.',
        'historyBtn'=> '검색 기록에서 이전에 저장 한 레이아웃을 확인하고 복원하려면 <b>기록 보기</b>를 클릭합니다.',
        'historyRestoreDefaultLayout'=> '<b>기본 레이아웃 회복</b>을 클릭하여 원래의 레이아웃 보기를 복구하십시오.',
        'Hidden' 	=> '숨겨짐',
        'Default'	=> '초기설정 필드가 하위패널에 나타납니다.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> '저장후 배치를 클릭하면 모든 변경사항을 저장하며 실행시킵니다.',
        'historyBtn'=> '검색 기록에서 이전에 저장한 레이아웃을 확인하고 복원하려면 <b>기록 보기</b>를 클릭합니다.<br><br> <b>기록 보기</b>내에서 <b>복원</b>은 이전에 저장한 레이아웃에서 필드 위치를 복원합니다. 필드 레이블을 변경하려면 다음 각 필드에 있는 편집 아이콘을 클릭합니다.',
        'historyRestoreDefaultLayout'=> '<b>기본 레이아웃 복구</b>를 클릭하여 원래의 레이아웃 보기를 복구하십시오.<br><br><b>기본 레이아웃 복구</b>는 원래의 레이아웃 내 필드 배치를 복구합니다. 필드 라벨을 변경하려면, 각 필드 옆에 있는 편집 아이콘을 클릭하십시오.',
        'Hidden' 	=> '숨겨짐',
        'Available' => '사용가능',
        'Default'	=> '초기설정'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> '저장후 배치를 클릭하면 모든 변경사항을 저장하며 실행시킵니다.',
        'historyBtn'=> '검색 기록에서 이전에 저장한 레이아웃을 확인하고 복원하려면 <b>기록 보기</b>를 클릭합니다.<br><br> <b>기록 보기</b>내에서 <b>복원</b>은 이전에 저장한 레이아웃에서 필드 위치를 복원합니다. 필드 레이블을 변경하려면 다음 각 필드에 있는 편집 아이콘을 클릭합니다.',
        'historyRestoreDefaultLayout'=> '<b>기본 레이아웃 복구</b>를 클릭하여 원래의 레이아웃 보기를 복구하십시오.<br><br><b>기본 레이아웃 복구</b>는 원래의 레이아웃 내 필드 배치를 복구합니다. 필드 라벨을 변경하려면, 각 필드 옆에 있는 편집 아이콘을 클릭하십시오.',
        'Hidden' 	=> '숨겨짐',
        'Default'	=> '초기설정'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> '저장후 배치를 클릭하면 모든 변경사항을 저장하며 실행시킵니다.',
        'Hidden' 	=> '숨겨짐',
        'historyBtn'=> '검색 기록에서 이전에 저장한 레이아웃을 확인하고 복원하려면 <b>기록 보기</b>를 클릭합니다.<br><br> <b>기록 보기</b>내에서 <b>복원</b>은 이전에 저장한 레이아웃에서 필드 위치를 복원합니다. 필드 레이블을 변경하려면 다음 각 필드에 있는 편집 아이콘을 클릭합니다.',
        'historyRestoreDefaultLayout'=> '<b>기본 레이아웃 복구</b>를 클릭하여 원래의 레이아웃 보기를 복구하십시오.<br><br><b>기본 레이아웃 복구</b>는 원래의 레이아웃 내 필드 배치를 복구합니다. 필드 라벨을 변경하려면, 각 필드 옆에 있는 편집 아이콘을 클릭하십시오.',
        'Default'	=> '초기설정'
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
        'saveBtn'	=> '여러분이 마지막으로 저장한 후에 레이아웃의 변경 사항을 유지하려면 <b>저장</b>을 클릭합니다.<br><br> 변경 사항은 저장된 변경 내용을 배포할 때까지 모듈에 표시되지 않습니다.',
        'historyBtn'=> '검색 기록에서 이전에 저장한 레이아웃을 확인하고 복원하려면 <b>기록 보기</b>를 클릭합니다.<br><br> <b>기록 보기</b>내에서 <b>복원</b>은 이전에 저장한 레이아웃에서 필드 위치를 복원합니다. 필드 레이블을 변경하려면 다음 각 필드에 있는 편집 아이콘을 클릭합니다.',
        'historyRestoreDefaultLayout'=> '<b>기본 레이아웃 복구</b>를 클릭하여 원래의 레이아웃 보기를 복구하십시오.<br><br><b>기본 레이아웃 복구</b>는 원래의 레이아웃 내 필드 배치를 복구합니다. 필드 라벨을 변경하려면, 각 필드 옆에 있는 편집 아이콘을 클릭하십시오.',
        'publishBtn'=> '여러분이 마지막으로 저장한 이후의 레이아웃에 대한 모든 변경 사항을 저장 및 모듈의 변경 사항을 활성화하려면 <b>저장 및 배포</b>를 클릭합니다.<br><br> 레이아웃이 모듈에서 바로 표시됩니다.',
        'toolbox'	=> '<b>도구상자</b>는 추가 레이아웃 요소 the <b>휴지통</b>과 레이아웃에 추가할 수 필드의 세트를 포함합니다.<br/><br/>레이아웃 요소와 도구 상자의 필드는 레이아웃 및 레이아웃 요소를 끌어서 놓기 사용하고 필드는 도구 상자에 레이아웃에서 끌어서 놓기 사용을 할 수 있습니다. <br><br> 레이아웃 요소는 <b>패널</b> 및 <b>행</b<b>입니다. 레이아웃에 새로운 행 또는 새 패널을 추가하면 필드에 대한 레이아웃의 위치를 ​​추가로 제공합니다.<br/><br/> 도구 상자에서 필드의 일부 또는 레이아웃을 끌어 놓기 사용을 하거나 두 필드의 위치를 ​​바꿀 수 있는 위치에 레이아웃을 사용합니다.<br/><br/> <b>충전</b> 필드는 배치되어 있는 레이아웃에 빈 공간을 만듭니다.',
        'panels'	=> '<b>레이아웃</b> 영역은 레이아웃의 변경 사항을 배포할 때 레이아웃이 모듈 내에서 표시되는 방식의 보기를 제공합니다.<br/><br/> 원하는 위치에 드래그하여 필드 행과 패널 위치를 변경할 수 있습니다. <br/><br/> 도구 상자에서 <b>휴지통</b>에 끌어서 놓기 사용하여 요소를 제거하거나 레이아웃의 원하는 위치에서 <b>도구상자</b>와 드롭하는데서 드래그하여 새로운 요소와 필드를 추가합니다.',
        'delete'	=> '레이아웃에서 제거하려면 여기에 요소를 끌어 놓기 사용합니다.',
        'property'	=> '이 필드에 표시되는 라벨을 편집합니다. <br/><b>탭 순서</b>는 필드 사이의 탭 키 스위치를 어떤 순서로 제어합니다.',
    ),
    'fieldsEditor'=>array(
        'default'	=> '모듈에 사용할 수 있는 <b>필드</b>는 필드 이름에 따라 여기에 나열됩니다.<br><br>모듈에생성된 사용자 정의 필드는 기본적으로 모듈에 사용 가능한 필드 위에 나타납니다.<br><br>필드를 편집하려면 <b>필드 이름</b>을 클릭합니다.<br/><br/>새 필드를 만들려면 <b>추가 필드</b>를 클릭합니다.',
        'mbDefault'=>'모듈에 사용할 수 있는 <b>필드</b>는 필드 이름에 따라 다음에 나열되어 있습니다.<br><br>필드의 속성을 구성하려면 필드 이름을 클릭합니다.<br><br> 새 필드를 만들려면 <b>필드 추가</b>클릭합니다. 새 필드의 다른 속성과 함께 레이블은 필드 이름을 클릭하여 작성 후 편집할 수 있습니다. <br><br>모듈이 배포된 후에 모듈 작성기에서 만들어진 새 필드는 스튜디오에서 배포된 모듈의 표준 필드로 간주됩니다.',
        'addField'	=> '새로운 필드의 <b>데이터 유형</b>을 선택합니다. 선택하는 유형은 필드에 입력할 수 있는 문자의 종류를 결정합니다. 예를 들어 정수가 된 숫자는 정수 데이터 유형 필드에 입력할 수 있습니다.<br><br> 필드의 <b>이름</b>을 제공합니다. 이름은 문자와 숫자의 구분이 없고 공백이 없어야 합니다. 밑줄 표시는 유효합니다.<br><br> <b>표시 레이블</b>은 모듈 레이아웃의 필드에 나타나는 레이블입니다. 해당 <b>시스템 레이벨<b>은 코드에서 필드를 참조하는 데 사용됩니다.<br><br> 필드에 대한 선택한 데이터 유형에 따라 다음과 같은 속성의 일부 또는 모든 필드에 대해 설정할 수 있습니다: <br><br> <b>도움말 텍스트</b>는 사용자가 필드를 가리키는 동안 일시적으로 표시하고 원하는 입력 유형에 대한 사용자를 프롬프트하는 데 사용할 수 있습니다.<br><br> <b>주석 텍스트</b>는 스튜디오 및/또는 모듈 작성기 내에서 볼 수 있고 관리자에 대한 필드를 설명하는 데 사용할 수 있습니다.<br><br> <b>기본값</b>은 필드에 나타납니다. 사용자가 필드에 새 값을 입력하거나 기본 값을 사용할 수 있습니다. <br><br> 필드에 대한 대량 업데이트 기능을 사용하기 위해  <b>대량 업데이트</b> 확인란을 선택합니다.<br><br> <b>최대 크기</b> 값은 필드에 입력할 수 있는 문자의 최대 개수를 결정합니다.<br><br> 필수 필드를 만들기 위해 <b>필수 필드</b> 확인란을 선택합니다. 값은 필드를 포함하는 레코드를 저장할 수 있도록 하기 위해 필드에 제공합니다.<br><br> 필드가 필터에 사용할 수 있도록 하기 위해 또한 보고서에서 데이터를 표시하기 위해 <b>보고가능</b> 확인란을 선택합니다. <br><br> 변경 로그의 필드에 변경 내용을 추적할 수 있도록 하기 위해 <b>감사</b> 확인란을 선택합니다. <br><br> 허용되지 않음을 허용 또는 가져 오기 마법사로 가져올 수 있는 필드를 요구하는 <b>가져오기</b>필드의 옵션을 선택합니다.<br><br> 사용하거나 사용하지 않도록 병합 중복 및 중복 기능을 찾기 위해  <b>중복 병합</b>필드에서 옵션을 선택합니다.<br><br> 추가 속성은 특정 데이터 유형을 설정할 수 있습니다.',
        'editField' => '이 필드의 속성을 사용자 정의할 수 있습니다.<br><br> 동일한 속성을 가진 새로운 필드를 만들려면 <b>클론</b>을 클릭합니다.',
        'mbeditField' => '템플릿 필드의 <b>표시 레이블</b>을 사용자 정의할 수 있습니다. 필드의 다른 속성은 사용자 정의할 수 없습니다.<br><br>동일한 특성을 가진 새 필드를 만들려면 <b>클론</b>을 클릭합니다.<br><br>모듈에 표시되지 않도록 템플릿 필드를 제거하려면 적절한 <b>레이아웃</b>에서 필드를 제거합니다.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'<b>모듈 로더</b>을 통하여 다른 Sugar 인스턴스에 업로드할 수 있는 패키지를 만들어 스튜디오에서 만든 사용자 정의를 내보내기합니다.<br><br> 먼저 <b>패키지 이름</b>을 제공합니다. 패키지 뿐만 아니라 <b>작성자</b> 및 <b>설명</b>을 제공합니다.<br><br> 내보내기 원하는 사용자 정의를 포함하는 모듈을 선택합니다. 사용자 지정 내용이 포함된 모듈만을 선택할 수 있도록 나타납니다.<br><br> 그런 다음 사용자 지정 내용을 포함한 패키지에 대한 zip 파일을 생성하려면 <b>내보내기</b>를 클릭합니다.',
        'exportCustomBtn'=>'내보내기 원하는 사용자 지정을 포함하는 패키지에 대한 zip 파일을 만들려면 <b>내보내기</b>을 클릭합니다.',
        'name'=>'패키지의 <b>이름</b>입니다. 이 이름은 설치 중에 표시됩니다.',
        'author'=>'패키지를 만든 엔터티의 이름으로 설치되는 동안에 표시되는 <b>작성자</b>입니다. 작성자는 개인이나 기업이 될 수 있습니다.',
        'description'=>'이는 설치중 진열된 패키지의 설명입니다.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> '개발자 도구지역에 오신것을 환영합니다.<br />기본 또는 고객 모듈과 필드를 새로 만들거나 관리하려면 이 지역내의 도구를 사용하십시오.',
        'studioBtn'	=> '배치된 모듈을 주문제작하려면 작업실을 사용하십시오.',
        'mbBtn'		=> '신규 모듈을 만들려면 모듈 제조기를 사용하십시오.',
        'sugarPortalBtn' => 'Sugar 포털을 관리하고 사용자 지정하려면 <b>Sugar 포털 편집기</b>를 사용합니다.',
        'dropDownEditorBtn' => '드롭다운 필드에 대한 글로벌 드롭다운을 추가하고 편집하려면 <b>드롭다운 편집기</b>를 사용합니다.',
        'appBtn' 	=> '홈페이지에 몇개의 TPS보고서를 전시할지 등의 프로그램의 다양한 소유권을 변경하려면 어플리케이션 모드를 사용하십시오.',
        'backBtn'	=> '이전 단계로 돌아갑니다.',
        'studioHelp'=> '설치된 모듈을 변경하려면 작업실을 사용하십시오.',
        'studioBCHelp' => '모듈이 이전 버전과 호환되는 모듈을 나타냅니다',
        'moduleBtn'	=> '이 모듈을 편집하려면 클릭하십시오.',
        'moduleHelp'=> '편집하고자 하는 모듈의 구성요소를 선택하십시오.',
        'fieldsBtn'	=> '모듈에서 필드 조종으로 저장되는 정보를 편집합니다.',
        'labelsBtn' => '이 모듈안 가치를 나타낼 라벨을 편집합니다.'	,
        'relationshipsBtn' => '새로 추가 또는 모듈에 대한 기존의 <b>관계</b> 보기를 합니다.' ,
        'layoutsBtn'=> '모듈 <b>레이아웃</b>을 사용자 지정합니다. 레이아웃은 필드를 포함한 모듈의 다른 보기입니다.<br><br>어떤 필드가 표시되는지 또한 각각의 레이아웃으로 구성되는 방법을 확인합니다.',
        'subpanelBtn'=> '모듈의 <b>서프패널</b>에 표시되는 필드를 확인합니다.',
        'portalBtn' =>'<b>Sugar 포털</b>에 나타나는 모듈 <b>레이아웃</b>을 사용자 지정합니다.',
        'layoutsHelp'=> '사용자 지정된 모듈 <b>레이아웃</b>이 여기에 나타납니다.<br><br>레이아웃은 필드와 필드 데이터를 표시합니다.<br><br>편집할 레이아웃을 선택하려면 아이콘을 클릭합니다.',
        'subpanelHelp'=> '사용자 지정할 수 있는 모듈의 <b>서브패널</b>은 여기에 나타납니다.<br><br>편집할 모듈을 선택하려면 아이콘을 클릭합니다.',
        'newPackage'=>'신규 패키지를 만들려면 신규 패키지 버튼을 클릭하십시오.',
        'exportBtn' => '특정 모듈을 위한 작업실 주문제작을 포함하는 패키지를 만들기 위해서는 주문제작 보내기를 클릭하십시오.',
        'mbHelp'    => '표준 또는 사용자 지정 개체를 기반으로 둔 사용자 지정 모듈을 포함하여 패키지를 생성하려면 <b>모듈 작성기</b>를 사용합니다.',
        'viewBtnEditView' => '모듈 <b>편집보기</b> 레이아웃을 사용자 지정합니다.<br><br>편집 보기는 사용자가 입력한 데이터를 캡처하는 입력 필드를 포함하는 형태입니다.',
        'viewBtnDetailView' => '모듈 <b>상세 보기</b> 레이아웃을 사용자 지정합니다.<br><br>사용자가 입력하는 필드 데이터에 자세히 보기가 나타납니다.',
        'viewBtnDashlet' => 'Sugar Dashlet\s 목록보기와 검색을 포함하여 모듈 <b>Sugar 데시렛창</b>을 사용자 지정합니다.<br><br>Sugar 대시렛창은 홈 모듈의 페이지에서 추가할 수 있습니다.',
        'viewBtnListView' => '모듈 <b>목록보기</b> 레이아웃을 사용자 지정합니다.<br><br>검색 결과는 목록보기에 나타납니다.',
        'searchBtn' => '모듈 <b>검색</b> 레이아웃을 사용자 지정을 합니다.<br><br>리스트 보기에 표시되는 레코드를 필터링하는데 사용할 수 있는 필드를 확인합니다.',
        'viewBtnQuickCreate' =>  '모듈 <b>빠른생성</b> 레이아웃을 사용자 지정합니다.<br><br>빠른 생성 폼이 서브패널과 이메일 모듈에서 나타납니다.',

        'searchHelp'=> '주문변경가능한 검색 형식이 이곳에 나타납니다. <br />검색형식은 기록 필터링을 위한 필드를 포함합니다. <br />편집할 검색 지면배치를 선택할 아이콘을 클릭하십시오.',
        'dashletHelp' =>'Sugar Dashlet는 홈모듈에서 페이지 추가가 가능합니다.',
        'DashletListViewBtn' =>'Sugar Dashlet 목록보기는 Sugar Dashlet 검색필터에 근거한 기록을 전시합니다.',
        'DashletSearchViewBtn' =>'Sugar Dashlet 검색은 Sugar Dashlet 목록보기의 기록을 필터합니다.',
        'popupHelp' =>'주문변경되는 팝업 지면배치는 이곳에 나타납니다.',
        'PopupListViewBtn' => '팝업목록보기는 팝업검색보기에 근거한 기록을 전시합니다.',
        'PopupSearchViewBtn' => '팝업 검색은 팝업목록보기의 기록을 봅니다',
        'BasicSearchBtn' => '모듈의 검색지역의 기본검색 탭에 나타나는 기본검색 형식을 주문변경합니다',
        'AdvancedSearchBtn' => '모듈의 검색지역의 고급검색 탭에 나타나는 고급검색 형식을 주문변경합니다.',
        'portalHelp' => 'Sugar Portal를 관리하고 주문변경합니다.',
        'SPUploadCSS' => 'Style Sheet 를 Sugar Portal 로 전송합니다.',
        'SPSync' => 'Sugar Portal 예의 주문변경을 일치화합니다.',
        'Layouts' => 'Sugar Portal 모듈의 지면배치를 주문변경 합니다.',
        'portalLayoutHelp' => 'Sugar Portal 내 모듈이 이곳에 나타납니다. <br />지면배치를 편집할 모듈을 선택하십시오.',
        'relationshipsHelp' => '모듈과 다른 배포된 모듈 사이에 존재하는 <b>관계</b></ B> 모두는 여기에 나타납니다. <br><br> 해당 관계 <b>이름</b>은 관계에 대한 생성된 시스템 이름입니다.<br><br>해당 <b>주 모듈</b>은 관계를 소유한 모듈입니다. 예를 들어 계정 모듈이 기본 모듈인  관계의 모든 속성을 계정 데이터베이스 테이블에 저장합니다.<br><br> <b>유형</b>은 주 모듈 및 <b>관련 모듈</b> 사이에 존재하는 관계 유형입니다.<br><br>열을 기준으로 정렬하는 열 제목을 클릭합니다. <br><br>관계와 관련된 속성을 보려면 관계 테이블에서 행을 클릭합니다.<br><br>새로운 관계를 생성하려면 <b>관계 추가</b>를 클릭합니다.<br><br>관계는 두 개의 배포된 모듈 사이에서 생성됩니다.',
        'relationshipHelp'=>'<b>관계</b>는 모듈과 다른 배포된 모듈 사이에서 생성됩니다.<br><br> 관계는 시각적으로 서브패널을 통해 표현되고 모듈 레코드의 필드가 관련됩니다.<br><br>모듈을 대한 다음 관계 <b>유형</b> 중에 하나를 선택합니다:<br><br> <b>일-대-일</b> - 모듈 레코드 모두 관련있는 필드를 포함합니다.<br><br> <b>일-대-일</b> - 주 모듈 과 레코드는 서브패널을 포함하며 관련된 모듈 레코드는 관련있는 필드를 포함합니다. <br><br> <b>다수-대-다수</b> - 모듈과 레코드 모두 서브패널에 표시합니다. <br><br> 관계에 대해 <b>관련 모듈</b>을 클릭합니다.<br><br>관계 유형이 서브패널을 포함하려면 해당 모듈을 위해 서브패널 보기를 선택합니다.<br><br> 관계를 생성하려면 <b>저장</b>을 클릭합니다.',
        'convertLeadHelp' => "\"레이아웃 스크린을 전환하기 위해 모듈을 추가하고 기존의 설정을 여기에서 추가할 수 있습니다.<br/><br/><b>순서:</b><br/>연락처과 계정 및 영업 기회는 순서를 유지합니다. 테이블에서 해당하는 행을 드래그하여 다른 모듈 순서를 변경할 수 있습니다.<br/><br/><b>종속성:</b><br/>기회가 포함되어 있는 경우 계정이 필요하거나 전환 레이아웃에서 제거합니다.<br/><br/><b>모듈:</b> 모듈의 이름입니다.<br/><br/><b>필수:</b> 필요한 모듈을 만들거나 리드를 변환하기 전에 선택합니다.<br/><br/><b>데이터 복사:</b> 선택한 경우 리드의 필드는 새로 만든 기록에 같은 이름을 가진 필드에 복사합니다.<br/><br/><b>삭제:</b> 변환 레이아웃에서 이 모듈을 제거합니다.<br/><br/>\",",
        'editDropDownBtn' => '글로벌 내려보기 편집하기',
        'addDropDownBtn' => '신규 글로벌 내려보기 추가하기',
    ),
    'fieldsHelp'=>array(
        'default'=>'모듈에서 <b>필드</b>는 필드 이름에 따라 여기에 나열됩니다.<br><br> 모듈 서식 파일(템플릿)은 필드에 미리 정해진 세트를 포함합니다.<br><br>새로운 필드를 만들려면 <b>필드 추가</b>를 클릭합니다.<br><br>필드를 편집하려면 <b>필드 이름</b>을 클릭합니다.<br/><br/>모듈이 배포된 후에 템플릿 필드와 함께 모듈 작성기에서 만들어진 새로운 필드는 스튜디오의 표준 필드로 간주합니다.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'모듈과 다른 모듈 사이에서 만들어진 <b>관계</b>는 여기에 나타납니다. <br><br>관계형 <b>이름</b>은 관계를 위한 시스템 생성 이름입니다.<br><br> <b>주 모듈</b>은 관계를 가지고 있는 모듈입니다. 관계의 속성은 기본 모듈에 속하는 데이터베이스 테이블에 저장됩니다.<br><br><b>유형</b>은 주 모듈과 <b>관련 모듈</b> 사이에 존재하는 관계 유형입니다.<br><br>열에 의해 정열된 열(세로 막대형) 제목을 클릭합니다.<br><br>관계와 관련된 속성을 보고 편집할 관계 테이블(표)의 행을 클릭합니다.<br><br>새로운 관계를 만들려면 <b>추가 관계</b>를 클릭합니다.',
        'addrelbtn'=>'관계를 추가하려면 마우스를 도움말에 가져가십시오.',
        'addRelationship'=>'<b>관계</b>는 모듈과 다른 사용자 지정 모듈 또는 배포된 모듈 사이에서 만듭니다.<br><br> 관계는 시각적으로 서브패널을 통해 표현하며 모듈 레코드에서 필드와 관련이 있습니다.<br><br> 모듈을 위한 다음 관계<b>유형</b> 중 하나를 선택합니다:<br><br> <b>일-대-일</b> - 모듈과 레코드 모두 관련있는 필드를 포함합니다.<br><br> <b>일-대-다수</b> - 주 모듈 레코드는 서브패널을 포함하고 관련된 모듈 레코드는 관련있는 필드를 포함합니다.<br><br> <b>다수-대-다수</b> - 모듈과 레코드 모두 서브패널을 표시합니다.<br><br> 관계를 위한 <b>관련 모듈</b>을 선택합니다. <br><br>관계 유형이 서브패널을 포함한다면 해당 모듈을 위한 서브패널 보기를 선택합니다.<br><br> 관계를 생성하려면<b>저장</b>을 클릭합니다.',
    ),
    'labelsHelp'=>array(
        'default'=> '필드를 위한 <b>레이블</b>과 모듈에 있는 다른 제목들은 변경됩니다.<br><br>새로운 레이블을 입력하여 필드 내에서 클릭하고 <b>저장</b>을 클릭하여 레이블을 편집합니다. <br><br>언어 팩이 응용프로그램에 설치되어 있는 경우 레이블을 사용하려면 <b>언어</b>를 선택합니다.',
        'saveBtn'=>'모든 변경사항을 저정하려면 저장 버튼을 클릭하십시오.',
        'publishBtn'=>'모든 변경사항을 저장하고 작동하려면 저장후 배치 버튼을 클릭하십시오.',
    ),
    'portalSync'=>array(
        'default' => '업데이트를 하려면 포털 인스턴스의 <b>Sugar 포털 URL</b>를 입력하고 <b>이동</b>을 클릭합니다.<br><br>그런 다음 유용한 Sugar 사용자 이름과 패스워드를 입력한 다음 <b>동기화 시작</b>을 클릭하십시오.<br><br> Sugar 포털 <b>레이아웃</b>에 <b>스타일 시트</b>와 함께 만들어진 사용자 정의는 하나가 업데이트되었을 경우 지정된 포탈 인스턴스로 전송됩니다.',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => '스타일 시트를 사용하여 Sugar 포털  모양를 사용자 지정합니다.<br><br>업로드하기 위해 <b>스타일 시트</b>를 선택합니다.<br><br>스타일 시트는 다음번 동기화가 실행되는 Sugar 포털에서 구현됩니다.',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'프로젝트를 시작하려면 <b>새 패키지</b>를 여러분의 사용자 지정 모듈(들)을 수용하는 새로운 패키지를 만들기 위해 클릭합니다. 각각의 패키지는 하나 이상의 모듈을 포함할 수 있습니다.<br/><br/>예를 들어 표준 계정 모듈과 관련이 있는 사용자 지정 모듈을 포함하는 패키지를 생성합니다. 또한 프로젝트로 함께 작업하고 있고 서로 그리고 이미 응용 프로그램에 있는 다른 모듈과 관련된 몇 가지 새로운 모듈을 포함하는 패키지를 만들 수 있습니다.',
            'somepackages'=>'<b>패키지</b>는 하나의 프로젝트의 일부가 모두 있는 사용자 지정 모듈을 위한 컨테이너 역할을 합니다. 패키지는 서로에게 또는 애플리케이션의 다른 모듈과 관련될 ​​수 있는 하나 이상의 사용자 지정의 <b>모듈</ B>을 포함합니다.<br/><br/>프로젝트를 위한 패키지를 생성한 후에 패키지를 위한 모듈을 바로 만들거나 프로젝트를 완료하기 위해 나중에 모듈 작성자로 돌아갑니다.<br><br>프로젝트가 완료되면 응용 프로그램 내에서 사용자 지정 모듈을 설치하기 위해 패키지를 <b>배포</b>합니다.',
            'afterSave'=>'새 패키지는 적어도 하나의 모듈을 포함합니다. 패키지에 하나 이상의 사용자 지정 모듈을 만듭니다.<br/><br/>이 패키지를 위한 사용자 지정 모듈을 생성하려면 <b>새 모듈</b>을 클릭합니다. <br/><br/> 적어도 하나의 모듈을 만든 후에 여러분 또는 다른 사용자가 인스턴스에서 사용할 수 있도록 패키지를 게시하거나 배포할 수 있습니다.<br/><br/> Sugar 인스턴스 내에서 한번에 패키지를 배포하려면 <b>배포</b>를 클릭합니다.<br><br>패키지를 zip 파일로 저장하려면 <b>게시</b>를 클릭합니다. zip 파일을 시스템에 저장한 후에 업로드를 하려면 <b>모듈 로더</b>를 사용하고 Sugar 인스턴스 내에 패키지를 설치합니다. <br/><br/> 자체의 Sugar 인스턴스 내에 업로드하고 설치하는 다른 사용자에게 파일을 배부합니다.',
            'create'=>'<b>패키지</b>는 하나의 프로젝트의 일부가 모두 있는 사용자 정의 모듈을 위한 컨테이너 역할을 합니다. 패키지는 응용 프로그램에서 서로 또는 다른 모듈과 관련될 ​​수 있는 하나 이상의 사용자 지정 <b>모듈</b>이 포함됩니다.<br/><br/>프로젝트를 위한 패키지를 생성한 후에 패키지를 위한 모듈을 바로 만들 수 있으며 또는 프로젝트 완료를 위해 나중에 모듈 작성기로 돌아갈 수 있습니다.',
            ),
    'main'=>array(
        'welcome'=>'표준 및 사용자 정의 모듈과 필드를 생성하고 관리하려면 <b>개발자 도구</b>를 클릭합니다. <br/><br/>응용 프로그램에서 모듈을 관리하려면 <b>스튜디오</b>을 클릭합니다. <br/><br/> 사용자 지정 모듈을 생성하려면 <b>모듈 작성기</b>를 클릭합니다.',
        'studioWelcome'=>'표준 및 모듈이 장착된 개체를 포함하여 현재 설치된 모든 모듈은 스튜디오 내에서 사용자 지정합니다.'
    ),
    'module'=>array(
        'somemodules'=>"현재 패키지는 적어도 하나의 모듈을 포함하고 있으므로 여러분의 Sugar 인스턴스 내에 패키지의 모듈을 <b>배포</b>하거나 현재 여러분의 Sugar 인스턴스에 설치된 패키지나 <b>모듈 로드에 사용된 인스턴스에 <b>게시</b>할 수 있습니다." ,
        'editView'=> '여기에 기존 필드를 편집합니다.',
        'create'=>'생성하기 원하는 모듈의 <b>유형</b>의 유형을 선택할 때  모듈 내에서 갖기를 원하는 필드의 유형에 유의합니다.<br/><br/>각 모듈 템플릿은 제목에 의한 설명 모듈의 종류에 관한 필드의 세트가 포함되어 있습니다.<br/><br/><b>기본</b> - 팀에 할당된 이름 그리고 작성일과 설명 필드와 같은 표준 모듈에 나타난 기본 필드를 제공합니다.<br/><br/> <b>회사</b> - 회사 이름 산업 및 청구 주소와 같은 조직 특성 필드를 제공합니다. 표준 계정 모듈과 유사한 모듈을 작성하려면 이 템플릿을 사용합니다. <br/><br/> <b>개인</b> - 인사말이나 제목 그리고 이름과 주소 및 전화 번호와 같은 개인의 특정 필드를 제공합니다. 표준 계정 모듈과 유사한 모듈을 작성하려면 이 템플릿을 사용합니다.<br/><br/><b>문제</b> - 이름과 상태와 우선 순위 및 설명과 같은 케이스와 버그-특정 필드를 제공합니다. 표준 사례 및 버그 트래커 모듈과 유사한 모듈을 작성하려면 이 템플릿을 사용합니다.<br/><br/>주의: 모듈을 작성한 후 템플릿에서 제공하는 필드의 레이블을 편집할 수 있을 뿐만 아니라 모듈 레이아웃에 추가할 사용자 정의 필드를 만들 수 있습니다.',
        'afterSave'=>'편집 및 다른 모듈과의 관계를 설정하는 필드를 생성하고 레이아웃 내의 필드를 배치하여 사용자의 요구에 맞게 모듈을 사용자 지정합니다.<br/><br/>템플릿 필드를 보거나 모듈 내에 사용자 지정 필드를 관리하려면 <b>보기 필드</b>을 클릭합니다.<br/><br/>모듈이 응용 프로그램에 이미 있는 모듈이든 같은 패키지 내에 다른 사용자 지정 모듈이든 모듈과 다른 모듈 사이에 관계를 생성하거나 관리하려면 <b>관계 보기</b>를 클릭합니다.<br/><br/>모듈 레이아웃을 편집하려면 <b>레이아웃 보기</b>을 클릭합니다. 이미 스튜디오 내에 응용 프로그램에 이미 있는 모듈과 같이 모듈에 대한 상세보기와 편집보기 및 목록보기 레이아웃을 변경할 수 있습니다. <br/><br/> 현재 모듈처럼 같은 속성으로 모듈을 만들려면 <b>중복</b>을 클릭합니다. 또한 새로운 모듈을 사용자 지정할 수 있습니다.',
        'viewfields'=>'모듈에서 필드는 사용자의 필요에 맞게 사용자 정의할 수 있습니다.<br/><br/>여러분은 표준 필드는 삭제할 수 없지만 레이아웃 페이지 내에서 해당하는 레이아웃을 제거합니다.<br/><br/> <b>속성</b> 폼에서 <b>복제</b>를 클릭함으로써 기존 필드와 유사한 속성의 새로운 필드를 만들 수 있습니다. 새로운 속성을 입력한 다음 <b>저장</b>을 클릭합니다.<br/><br/>그것은 사용자 지정 모듈을 포함하는 패키지를 게시하고 설치하기 전에 표준 필드 및 사용자 정의 필드에 대한 모든 속성을 설정하는 것이 좋습니다.',
        'viewrelationships'=>'패키지에서 현재 모듈과 다른 모듈 사이에서 그리고/또는 현재 모듈과 응용 프로그램에서 이미 설치된 모듈 사이에서 다수 대 다수 관계를 만들수 있습니다.<br><br> 일대 또는 일대일 관계를 만들려면 모듈을 위한 <b>관계 설정</b> 와 <b>자유선택 관계 설정</b> 필드를 만듭니다.',
        'viewlayouts'=>'<b>보기 편집</b> 내에서 데이터 캡쳐에 사용할 수 있는 필드를 제어합니다. 또한 <b>상세 보기</b>내에서 데이터가 표시되는 것을 제어합니다. 보기가 일치하지 않습니다. 모듈 서브패널에서 <b>생성</b>을 클릭하면 <br/><br/> 빠른 생성 폼이 나타납니다. 기본값으로 <b>빠른 생성</b> 폼 레이아웃은 기본값 <b>보기 편집</b> 레이아웃과 동일합니다. 여러분은 보기 편집 레이아웃보다 더 적거나 다른 필드를 포함하기 위해 빠른 생성 폼을 사용자 지정할 수 있습니다. <br><br><b>역할 관리</b>와 함께 레이아웃 사용자 정의를 사용하여 모듈 보안을 확인합니다.<br><br>',
        'existingModule' =>'이 모듈의 제작과 변경후 추가 모듈 또는 게제 또는 전개를 위한 패키지로 돌아갈수 있습니다. <br />추가 모듈생성을 하려면 현 모듈의 동일 특성의 모듈생성을 위한 복제버튼을 클릭하거나 패키지로 돌아간후 새 모듈 버튼을 클릭하십시오.',
        'labels'=> '기본 필드의 라벨과 맞춤형 필드는 변경이 가능합니다. 필드 라벨 변경은 필드안 저장된 데이타에 영향을 주지 않습니다.',
    ),
    'listViewEditor'=>array(
        'modify'	=> '왼쪽에 3개의 열이 있습니다. 초기설정 열은 초기설정으로 목록보기에 나타나는 필드를 포함하여 사용가능 열은 고객 목록보기를 위해 사용자가 선택할수 있는 필드를 포함하며 그리고  숨겨진 열은 관리자로서 초기설정을 추가하거나 현재 중지되었지만 사용자가 사용할수 있는 열을 포함합니다.',
        'savebtn'	=> '저장을 클릭하면 모든 변경내용을 저장하고 작동하게 합니다.',
        'Hidden' 	=> '숨겨진 필드는 현재 사용자가 목록보기를 위해 사용할수 없는 필드입니다.',
        'Available' => '사용가능한 필드는 초기설정으로 나타나지는 않지만 사용자에 의해 작동할수 있습니다.',
        'Default'	=> '초기설정 필드는 고객목록보기 설정을 만들지 않은 사용자에 나타납니다.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> '왼쪽에 2개의 열이 나타납니다. 초기설정 열은 검색창에 나타날 필드를 포함하며 숨김 열은 관리자로서 보기를 추가할때 사용가능한 필드를 포함합니다.',
        'savebtn'	=> '저장후 배치를 클릭하면 모든 변경사항을 저장하며 실행시킵니다.',
        'Hidden' 	=> '숨겨짐',
        'Default'	=> '초기설정 필드가 검색창에 나타납니다.'
    ),
    'layoutEditor'=>array(
        'default'	=> '왼쪽에 2개의 열이 있습니다. 현 지면배치 또는 지면배치 미리보기 라벨의 오른쪽 열은 모듈의 지면배치를 변경할수 있는곳이며 도구상자 제목의 왼쪽 열은 지면배치 편집시 사용할수 있는 유용한 요소와 도구들을 포함하고 있습니다.',
        'saveBtn'	=> '이 버튼의 클릭은 지면배치를 저장해 변경사항을 유지할수 있습니다. 이 모듈에 다시 돌아왔을때 변경된 지면배치에서 시작합니다. 그러나 저장후 발표버튼을 누르기까지 모듈 사용자에게 보여질수 없습니다.',
        'publishBtn'=> '지면배치 작동 버튼을 클릭하십시오. 이는 이 지면배치가 이 모듈을 사용하는 사용자에게 바로 보여집니다.',
        'toolbox'	=> '도구상자는 휴지통과 추가 요소 그리고 사용가능한 필드를 포함한 지면배치 편집을 위한 유용한 다양한 기능을 포함하고 있습니다.  이는 지면배치에 끌어와 내릴수 있습니다.',
        'panels'	=> '이 지역은 배치되었을때 모듈 사용자들에게 어떠한 지면배치를 보일지 나타냅니다. <br />필드나 줄과 열은 끌어서 내리기를 이용해 요소들을 재배치할수 있습니다 ; 도구상자의 휴지통 지역에서 끌어서 내려 요소를 삭제 또는 도구상자에서 신규 요소들을 끌어 추가하고 원하는 위치의 지면배치에 내리기 할수 있습니다.'
    ),
    'dropdownEditor'=>array(
        'default'	=> '왼쪽에 2개의 열이 있습니다. 현 지면배치 또는 지면배치 미리보기 라벨의 오른쪽 열은 모듈의 지면배치를 변경할수 있는곳이며 도구상자 제목의 왼쪽 열은 지면배치 편집시 사용할수 있는 유용한 요소와 도구들을 포함하고 있습니다.',
        'dropdownaddbtn'=> '이 버튼을 눌러 내려보기에 새로운 아이템을 추가합니다.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'예시의 작업실에서 만들어진 주문제작은  패키지화 될수 있으며 다른 예에 전시할수 있습니다.',
        'exportCustomBtn'=>'보내고자 하는 주문제작을 포함하는 패키지를 위한 zip 파일을 만들려면 보내기 버튼을 클릭하십시오.',
        'name'=>'패키지명은 작업실 설치를 위한 패키지 하역후에 모듈 적재기에 나타납니다.',
        'author'=>'필자가 패키지를 만든 존재의 이름입니다. 필자는 개인이거나 회사일수 있습니다. <br />필자는 작업실 설치를 위한 패키지 하역후에 모듈 적재기에 나타납니다.',
        'description'=>'이 패키지에 관한 설명은 작업실 설치를 위한 패키지 하역후에 모듈 적재기에 나타납니다.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> '개발자 도구지역에 오신것을 환영합니다.<br />기본 또는 고객 모듈과 필드를 새로 만들거나 관리하려면 이 지역내의 도구를 사용하십시오.',
        'studioBtn'	=> '필드 배치를 바꾸거나 어떤 필드가 사용가능하며 고객 데이타 필드를 새로 만드는 설치된 모듈을 변경하려면 작업실을 사용하십시오.',
        'mbBtn'		=> '신규 모듈을 만들려면 모듈 제조기를 사용하십시오.',
        'appBtn' 	=> '홈페이지에 몇개의 TPS보고서를 전시할지 등의 프로그램의 다양한 소유권을 변경하려면 어플리케이션 모드를 사용하십시오.',
        'backBtn'	=> '이전 단계로 돌아갑니다.',
        'studioHelp'=> '설치된 모듈을 변경하려면 작업실을 사용하십시오.',
        'moduleBtn'	=> '이 모듈을 편집하려면 클릭하십시오.',
        'moduleHelp'=> '편집하고자 하는 모듈의 구성요소를 선택하십시오.',
        'fieldsBtn'	=> '모듈에서 필드 조종으로 저장되는 정보를 편집합니다. <br />여기에 고객 필드를 새로 만들거나 편집할수 있습니다.',
        'layoutsBtn'=> '편집, 세부사항, 목록 그리고 검색 보기의 지면배치를 주문제작합니다.',
        'subpanelBtn'=> '이 모듈 하위패널에 나타날 정보를 편집하십시오',
        'layoutsHelp'=> '편집할 지면배치를 선택하십시오.<br />데이타 입력을 위한 데이타 필드를 포함하는 지면배치를 변경하려면 편집보기를 클릭하십시오.<br />편집보기에서 필드로 입력되는 데이타를 전시하는 지면배치를 변경하려면 세부사항 보기를 클릭하십시오.<br />기본과 고급검색 형식 지면배치를 변경하려면 검색을 클릭하십시오.',
        'subpanelHelp'=> '편집할 하위패널을 선택하십시오.',
        'searchHelp' => '편집할 지면배치 검색을 선택하십시오.',
        'labelsBtn'	=> '이 모듈의 값을 표시할 <b>레이블</b>을 편집합니다.',
        'newPackage'=>'신규 패키지를 만들려면 신규 패키지 버튼을 클릭하십시오.',
        'mbHelp'    => '모듈 제조기에 오신것을 환영합니다. <br />기본 또는 고객 목적에 근거한 모듈을 포함한 신규 패키지를 만들때 사용합니다. <br />시작은 신규 패키지를 만들 신규 패키지 버튼을 클릭하거나 편집할 패키지를 선택합니다. <br />패키지는 하나의 프로젝트의 전체나 부분을 위한 고객 모듈의 컨테이너로서 작용합니다. 이 패키지는 상호간 또는 어플리케이션에 모듈에 연결될수 있는 하나 또는 그 이상의 고객 모듈을 포함할수 있습니다. <br />예 : 기본 계정 모듈에 관련된 하나의 고객 모듈을 포함하는 신규 패키지를 만들수 있습니다. 또는 프로젝트로서 함께 작동하는 상호간 연관되거나 어플리케이션의 모듈에 관련된 몇개의 모듈을 포함하는 신규 패키지를 만들수 있습니다.',
        'exportBtn' => '특정 모듈을 위한 작업실 주문제작을 포함하는 패키지를 만들기 위해서는 주문제작 보내기를 클릭하십시오.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'드롭다운 편집기',

//ASSISTANT
'LBL_AS_SHOW' => '다음에 보조 보이기',
'LBL_AS_IGNORE' => '다음에 보조 무시하기',
'LBL_AS_SAYS' => '보조 발언',

//STUDIO2
'LBL_MODULEBUILDER'=>'모듈 제조기',
'LBL_STUDIO' => '작업실',
'LBL_DROPDOWNEDITOR' => '내려보기 편집기',
'LBL_EDIT_DROPDOWN'=>'내려보기 편집하기',
'LBL_DEVELOPER_TOOLS' => '개발자 도구',
'LBL_SUGARPORTAL' => 'Sugar 포탈 편집기',
'LBL_SYNCPORTAL' => '포탈 일치화',
'LBL_PACKAGE_LIST' => '패키지 목록',
'LBL_HOME' => '홈',
'LBL_NONE'=>'없음',
'LBL_DEPLOYE_COMPLETE'=>'배포 완ㄹ료',
'LBL_DEPLOY_FAILED'   =>'배포진행중 오류가 발생했습니다. 귀하의 패키지가 올바르게 설치되지 않을수도 있습니다.',
'LBL_ADD_FIELDS'=>'고객 필드 추가',
'LBL_AVAILABLE_SUBPANELS'=>'사용가능한 하위 패널',
'LBL_ADVANCED'=>'고급',
'LBL_ADVANCED_SEARCH'=>'고급검색',
'LBL_BASIC'=>'기본',
'LBL_BASIC_SEARCH'=>'기본검색',
'LBL_CURRENT_LAYOUT'=>'지면 배치',
'LBL_CURRENCY' => '화폐:',
'LBL_CUSTOM' => '사용자 지정',
'LBL_DASHLET'=>'Sugar 대시렛',
'LBL_DASHLETLISTVIEW'=>'Sugar Dashlet 목록창',
'LBL_DASHLETSEARCH'=>'Sugar Dashlet검색',
'LBL_POPUP'=>'팝업 창',
'LBL_POPUPLIST'=>'팝업 목록창',
'LBL_POPUPLISTVIEW'=>'팝업 목록창',
'LBL_POPUPSEARCH'=>'팝업 검색',
'LBL_DASHLETSEARCHVIEW'=>'Sugar Dashlet 검색',
'LBL_DISPLAY_HTML'=>'HTML 코드전시',
'LBL_DETAILVIEW'=>'세부정보화면',
'LBL_DROP_HERE' => '여기에 내리기',
'LBL_EDIT'=>'편집하기',
'LBL_EDIT_LAYOUT'=>'지면 배치 편집하기',
'LBL_EDIT_ROWS'=>'줄 편집',
'LBL_EDIT_COLUMNS'=>'칸 편집',
'LBL_EDIT_LABELS'=>'라벨 편집',
'LBL_EDIT_PORTAL'=>'포탈 편집',
'LBL_EDIT_FIELDS'=>'필드 편집',
'LBL_EDITVIEW'=>'수정작성화면',
'LBL_FILTER_SEARCH' => "검색하기",
'LBL_FILLER'=>'필터',
'LBL_FIELDS'=>'필드',
'LBL_FAILED_TO_SAVE' => '저장 실패',
'LBL_FAILED_PUBLISHED' => '발표 실패',
'LBL_HOMEPAGE_PREFIX' => '나의',
'LBL_LAYOUT_PREVIEW'=>'지면배치 미리보기',
'LBL_LAYOUTS'=>'지면 배치',
'LBL_LISTVIEW'=>'리스트목록화면',
'LBL_RECORDVIEW'=>'기록 보기',
'LBL_RECORDDASHLETVIEW'=>'기록 보기 대시릿',
'LBL_PREVIEWVIEW'=>'Preview View',
'LBL_MODULE_TITLE' => '작업실',
'LBL_NEW_PACKAGE' => '새 패키지',
'LBL_NEW_PANEL'=>'새 패널',
'LBL_NEW_ROW'=>'새 줄',
'LBL_PACKAGE_DELETED'=>'패키지 삭제됨',
'LBL_PUBLISHING' => '발표중',
'LBL_PUBLISHED' => '발표 완료',
'LBL_SELECT_FILE'=> '파일 선택하기',
'LBL_SAVE_LAYOUT'=> '지면배치 저장',
'LBL_SELECT_A_SUBPANEL' => '하위 패널 선택',
'LBL_SELECT_SUBPANEL' => '하위 패널 선택',
'LBL_SUBPANELS' => '하위 패널',
'LBL_SUBPANEL' => '하위 패널',
'LBL_SUBPANEL_TITLE' => '제목',
'LBL_SEARCH_FORMS' => '검색',
'LBL_STAGING_AREA' => '집결지(이곳에 아이템 끌어와 내리기)',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugar 필드(집결지에 추가하기위한 아이템 클릭)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar bin(집결지에 추가하기위한 아이템 클릭)',
'LBL_TOOLBOX' => '도구 상자',
'LBL_VIEW_SUGAR_FIELDS' => 'Sugar필드 보기',
'LBL_VIEW_SUGAR_BIN' => 'Sugar Bin 보기',
'LBL_QUICKCREATE' => '빠른 만들기',
'LBL_EDIT_DROPDOWNS' => '글로벌 내려보기 편집',
'LBL_ADD_DROPDOWN' => '신규 글로벌 내려보기 추가하기',
'LBL_BLANK' => ' ',
'LBL_TAB_ORDER' => '탭 순서',
'LBL_TAB_PANELS' => '탭 실행',
'LBL_TAB_PANELS_HELP' => '탭이 작동할때 유형 내려보기 상자를 사용하십시오.',
'LBL_TABDEF_TYPE' => '전시 유형',
'LBL_TABDEF_TYPE_HELP' => '이 부분의 전시방법을 선택하십시오. 이 선택항목은 이 창에서 탭을 작동시켰을 경우에만 효력이 있습니다.',
'LBL_TABDEF_TYPE_OPTION_TAB' => '탭',
'LBL_TABDEF_TYPE_OPTION_PANEL' => '패널',
'LBL_TABDEF_TYPE_OPTION_HELP' => '지면배치 창 내에 전시될 패널을 선택하십시오. 지면배치의 분리된 탭안에 전시될 패널을 위한 탭을 선택하십시오. 탭이 명시되면 탭안에 전시될 패널의 다음 하위패널이 설정됩니다.',
'LBL_TABDEF_COLLAPSE' => '접어집니다.',
'LBL_TABDEF_COLLAPSE_HELP' => '이 접혀진 패널의 초기설정상태를 만들기 위해 설정',
'LBL_DROPDOWN_TITLE_NAME' => '이름',
'LBL_DROPDOWN_LANGUAGE' => '언어:',
'LBL_DROPDOWN_ITEMS' => '아이템 목록',
'LBL_DROPDOWN_ITEM_NAME' => '아이템명',
'LBL_DROPDOWN_ITEM_LABEL' => '라벨 전시',
'LBL_SYNC_TO_DETAILVIEW' => '세부상항창 일치화',
'LBL_SYNC_TO_DETAILVIEW_HELP' => '세부사항보기 지면배치와 상응하는 편집보기 지면배치 일치화를 위한 항목을 선택합니다. 편집보기의 필드와 필드 위치가 일치화 되며 편집보기의 저장 또는 저장후 배치 버튼을 클릭하면 자동으로 세부사항보기에 저장됩니다. 지면배치 변경은 세부사항보기에서 불가능합니다.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => '이 세부사항보기는 상응하는 편집보기와 일치화 됩니다. <br />세부사항보기의 편집보기의 필드와 필드 위치는 편집보기의 필드와 필드 위치를 반영합니다.<br />세부사항보기의 변경은 이페이지 내에서 저장되거나 배치될수 없습니다. 변경하거나 편집보기의 지면배치 일치화를 해제하십시오.',
'LBL_COPY_FROM' => '에서 복사',
'LBL_COPY_FROM_EDITVIEW' => '편집창에서 복사',
'LBL_DROPDOWN_BLANK_WARNING' => '아이템 이름과 전시 라벨의 가치는 필수입력 사항입니다. 비어있는 아이템을 추가하려면 아이템 이름과 전시 라벨을 위한 가치를 입력하지 않고 추가버튼을 클릭합니다.',
'LBL_DROPDOWN_KEY_EXISTS' => '목록에 존재하는 키',
'LBL_DROPDOWN_LIST_EMPTY' => '목록은 적어도 하나의 활성화 항목을 포함해야',
'LBL_NO_SAVE_ACTION' => '이 창을 위해 저장된 액션을 찾을 수 없습니다.',
'LBL_BADLY_FORMED_DOCUMENT' => '스튜디오 2:설정된 위치:알맞게 형성된 문서가 아닙니다.',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '통합된 필드를 가리킵니다. 통합필드는 각각의 필드의 모음입니다. 예를 들어 "주소"는 "거리명", "도시", "우편번호", "도" 와 "국가" 필드의 모음입니다. <br />포함내용을 보시려면 더블클릭하십시요.',
'LBL_COMBO_FIELD_CONTAINS' => '포함',

'LBL_WIRELESSLAYOUTS'=>'모바일 지면배치',
'LBL_WIRELESSEDITVIEW'=>'모바일 편집보기',
'LBL_WIRELESSDETAILVIEW'=>'모바일 세부정보화면',
'LBL_WIRELESSLISTVIEW'=>'모바일 목록보기',
'LBL_WIRELESSSEARCH'=>'모바일 검색',

'LBL_BTN_ADD_DEPENDENCY'=>'종속물 추가',
'LBL_BTN_EDIT_FORMULA'=>'공식 편집',
'LBL_DEPENDENCY' => '종속물',
'LBL_DEPENDANT' => '종속되는',
'LBL_CALCULATED' => '가치 계산',
'LBL_READ_ONLY' => '읽기만 가능',
'LBL_FORMULA_BUILDER' => '공식 제조기',
'LBL_FORMULA_INVALID' => '사용불가 공식',
'LBL_FORMULA_TYPE' => '유형 공식이여야 합니다.',
'LBL_NO_FIELDS' => '발견된 필드가 없습니다.',
'LBL_NO_FUNCS' => '발견된 기능이 없습니다.',
'LBL_SEARCH_FUNCS' => '기능 검색',
'LBL_SEARCH_FIELDS' => '필드 검색',
'LBL_FORMULA' => '공식',
'LBL_DYNAMIC_VALUES_CHECKBOX' => '의존',
'LBL_DEPENDENT_DROPDOWN_HELP' => '상위 항목이 선택되었을때 왼편의 내려보기의 사용가능한 항목을 오른편 내려보기 목록의 항목을 사용할수 있도록 항목을 끌어옵니다. 만약 상위 항목의 아이템이 없다면 상위 항목이 선택되었을때 종속물 내려보기가 나타나지 않습니다.',
'LBL_AVAILABLE_OPTIONS' => '사용가능한 선택항목',
'LBL_PARENT_DROPDOWN' => '상위 내려보기',
'LBL_VISIBILITY_EDITOR' => '가시성 편집',
'LBL_ROLLUP' => '올리기',
'LBL_RELATED_FIELD' => '관련 필드',
'LBL_PORTAL_ROLE_DESC' => '이 역할을 삭제하지 마십시오. 고객 셀프 서비스 포탈 역할은 Sugar 포탈 액션 진행 중 시스템에서 생성된 역할입니다. Sugar포탈 내에 결함, 사례 또는 지식기반 모듈의 작동/중지를 위해서는 역할 내 접속 조종을 사용하십시오. 알 수 없거나 예측할 수 없는 시스템 행위를 피하기 위해서 이 역할의 접속 조종을 수정하지 마십시오.',

//RELATIONSHIPS
'LBL_MODULE' => '모듈',
'LBL_LHS_MODULE'=>'기본 모듈',
'LBL_CUSTOM_RELATIONSHIPS' => '작업실에 생성된 관계',
'LBL_RELATIONSHIPS'=>'관계',
'LBL_RELATIONSHIP_EDIT' => '관계 편집하기',
'LBL_REL_NAME' => '이름',
'LBL_REL_LABEL' => '라벨',
'LBL_REL_TYPE' => '유형',
'LBL_RHS_MODULE'=>'관련 모듈',
'LBL_NO_RELS' => '관계 없음',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'선택적 조건' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'칸',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'가치',
'LBL_SUBPANEL_FROM'=>'다음의 하위패널',
'LBL_RELATIONSHIP_ONLY'=>'이 두 모듈사이에 이미 존재하는 가시 관계가 있으므로 이 관계를 위한 보이는 요소를 만들수 없습니다.',
'LBL_ONETOONE' => '하나에서 하나',
'LBL_ONETOMANY' => '하나에서 여러개',
'LBL_MANYTOONE' => '여러개에서 하나',
'LBL_MANYTOMANY' => '여러개에서 여러게',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => '기능이나 구성요소를 선택하십시오',
'LBL_QUESTION_MODULE1' => '모듈을 선택하십시오',
'LBL_QUESTION_EDIT' => '편집할 모듈을 선택하십시오',
'LBL_QUESTION_LAYOUT' => '편집할 지면배치를 선택하십시오.',
'LBL_QUESTION_SUBPANEL' => '편집할 하위패널을 선택하십시오',
'LBL_QUESTION_SEARCH' => '편집할 지면배치 검색을 선택하십시오',
'LBL_QUESTION_MODULE' => '편집할 모듈 구성내용을 선택하십시오',
'LBL_QUESTION_PACKAGE' => '편집할 패키지를 선택하거나 새로운 패키지를 만드십시오',
'LBL_QUESTION_EDITOR' => '도구를 선택하십시오',
'LBL_QUESTION_DROPDOWN' => '편집할 내려보기를 선택하거나 새 내려보기를 만드십시오',
'LBL_QUESTION_DASHLET' => '편집할 대쉬릿 지면 배치를 선택하십시오',
'LBL_QUESTION_POPUP' => '편집할 팝업지면배치를 선택하십시오',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'연관된',
'LBL_NAME'=>'이름',
'LBL_LABELS'=>'라벨',
'LBL_MASS_UPDATE'=>'대량 업데이트',
'LBL_AUDITED'=>'회계감사',
'LBL_CUSTOM_MODULE'=>'모듈',
'LBL_DEFAULT_VALUE'=>'초기설정값',
'LBL_REQUIRED'=>'필수항목',
'LBL_DATA_TYPE'=>'유형',
'LBL_HCUSTOM'=>'고객',
'LBL_HDEFAULT'=>'초기설정',
'LBL_LANGUAGE'=>'언어:',
'LBL_CUSTOM_FIELDS' => '작업실에 생성된 필드',

//SECTION
'LBL_SECTION_EDLABELS' => '라벨 편집',
'LBL_SECTION_PACKAGES' => '패키지 목록',
'LBL_SECTION_PACKAGE' => '패키지',
'LBL_SECTION_MODULES' => '모듈목록',
'LBL_SECTION_PORTAL' => '포탈',
'LBL_SECTION_DROPDOWNS' => '내려복;',
'LBL_SECTION_PROPERTIES' => '소유권',
'LBL_SECTION_DROPDOWNED' => '내려보기 편집',
'LBL_SECTION_HELP' => '도움말',
'LBL_SECTION_ACTION' => '액션',
'LBL_SECTION_MAIN' => '메인',
'LBL_SECTION_EDPANELLABEL' => '패널 라벨 편집하기',
'LBL_SECTION_FIELDEDITOR' => '필드 편집하기',
'LBL_SECTION_DEPLOY' => '배치',
'LBL_SECTION_MODULE' => '모듈',
'LBL_SECTION_VISIBILITY_EDITOR'=>'시야 편집하기',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'초기 설정',
'LBL_HIDDEN'=>'숨겨짐',
'LBL_AVAILABLE'=>'사용가능',
'LBL_LISTVIEW_DESCRIPTION'=>'아래 세가지 열이 있습니다. 초기설정 열은 초기설정에 의해 목록 보기에 나타나는 필드를 포함하고 있으며 추가열은 고객보기 새로 만들기를 위한 필드를 포함하며 사용가능한 열은 관리자가 초기설정을 추가하거나 현재 사용하지않는 사용자가 사용되기위한 추가열을 포함합니다.',
'LBL_LISTVIEW_EDIT'=>'목록보기 편집기',

//Manager Backups History
'LBL_MB_PREVIEW'=>'미리 보기',
'LBL_MB_RESTORE'=>'재저장',
'LBL_MB_DELETE'=>'삭제하기',
'LBL_MB_COMPARE'=>'비교',
'LBL_MB_DEFAULT_LAYOUT'=>'지면배치 초기설정',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'추가하기',
'LBL_BTN_SAVE'=>'저장하기',
'LBL_BTN_SAVE_CHANGES'=>'변경 저장하기',
'LBL_BTN_DONT_SAVE'=>'변경내용 포기하기',
'LBL_BTN_CANCEL'=>'취소',
'LBL_BTN_CLOSE'=>'닫기',
'LBL_BTN_SAVEPUBLISH'=>'저장 및 배치',
'LBL_BTN_NEXT'=>'다음',
'LBL_BTN_BACK'=>'뒤로',
'LBL_BTN_CLONE'=>'클론',
'LBL_BTN_COPY' => '중복',
'LBL_BTN_COPY_FROM' => '에서 복사 ...',
'LBL_BTN_ADDCOLS'=>'열 추가하기',
'LBL_BTN_ADDROWS'=>'줄 추가하기',
'LBL_BTN_ADDFIELD'=>'필드 추가',
'LBL_BTN_ADDDROPDOWN'=>'내려보기 추가하기',
'LBL_BTN_SORT_ASCENDING'=>'올림차순 방식',
'LBL_BTN_SORT_DESCENDING'=>'내림차순 방식',
'LBL_BTN_EDLABELS'=>'라벨 편집',
'LBL_BTN_UNDO'=>'원상태로',
'LBL_BTN_REDO'=>'다시하기',
'LBL_BTN_ADDCUSTOMFIELD'=>'고객 필드 추가하기',
'LBL_BTN_EXPORT'=>'주문제작 보내기',
'LBL_BTN_DUPLICATE'=>'복사하기',
'LBL_BTN_PUBLISH'=>'발표',
'LBL_BTN_DEPLOY'=>'배치',
'LBL_BTN_EXP'=>'자료 보내기',
'LBL_BTN_DELETE'=>'삭제하기',
'LBL_BTN_VIEW_LAYOUTS'=>'지면배치 보기',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'보기 모바일 레이아웃',
'LBL_BTN_VIEW_FIELDS'=>'필드 보기',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'관계보기',
'LBL_BTN_ADD_RELATIONSHIP'=>'관계 추가하기',
'LBL_BTN_RENAME_MODULE' => '모듈명 변경하기',
'LBL_BTN_INSERT'=>'삽입',
'LBL_BTN_RESTORE_BASE_LAYOUT' => '기본 레이아웃 복구',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> '오류:필드가 이미 존재합니다.',
'ERROR_INVALID_KEY_VALUE'=> "오류:유효하지 않은 키 가치",
'ERROR_NO_HISTORY' => '파일 연혁이 발견되지 않았습니다.',
'ERROR_MINIMUM_FIELDS' => '지면배치는 최소 하나의 필드를 포함해야합니다.',
'ERROR_GENERIC_TITLE' => '오류가 발생하였습니다.',
'ERROR_REQUIRED_FIELDS' => '계속하시겠습니까? 지면배치에서 다음 필수항목 필드가 없습니다.',
'ERROR_ARE_YOU_SURE' => '계속하시겠습니까?',
'ERROR_DATABASE_ROW_SIZE_LIMIT' => '필드를 만들 수 없습니다. 데이터베이스에서 이 테이블의 행 크기 제한에 도달했습니다. <a href="https://support.sugarcrm.com/SmartLinks/Custom/MySQL_Row_Size_Limit/" target="_blank">더 알아보세요</a>.',

'ERROR_CALCULATED_MOBILE_FIELDS' => '다음 필드는 SugarCRM 모바일 편집보기의 실제 시간에서는 다시 계산되지 않을 이미 계산되 가치를 가지고 있습니다.',
'ERROR_CALCULATED_PORTAL_FIELDS' => '다음 필드는 SugarCRM 포탈 편집보기의 실제 시간에서는 다시 계산되지 않을 이미 계산되 가치를 가지고 있습니다.',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => '다음 모듈은 사용불가합니다.',
    'LBL_PORTAL_ENABLE_MODULES' => '포탈에서 작동하려면 이곳에서 작동하십시오.',
    'LBL_PORTAL_CONFIGURE' => '포탈 구성',
    'LBL_PORTAL_ENABLE_PORTAL' => '사용 가능한 포탈',
    'LBL_PORTAL_SHOW_KB_NOTES' => '지식 기반 모듈에 대한 노트 활성화',
    'LBL_PORTAL_ALLOW_CLOSE_CASE' => '포털 사용자가 케이스를 종료하도록 허용합니다',
    'LBL_PORTAL_ENABLE_SELF_SIGN_UP' => '신규 사용자 가입 허용',
    'LBL_PORTAL_USER_PERMISSIONS' => '사용자 권한',
    'LBL_PORTAL_THEME' => '포탈 테마',
    'LBL_PORTAL_ENABLE' => '작동',
    'LBL_PORTAL_SITE_URL' => '포탈 주소는 다음과 같습니다:',
    'LBL_PORTAL_APP_NAME' => '어플리케이션 이름',
    'LBL_PORTAL_CONTACT_PHONE' => '전화번호',
    'LBL_PORTAL_CONTACT_EMAIL' => '이메일',
    'LBL_PORTAL_CONTACT_EMAIL_INVALID' => '반드시 유효한 이메일 주소를 입력하십시오.',
    'LBL_PORTAL_CONTACT_URL' => 'URL',
    'LBL_PORTAL_CONTACT_INFO_ERROR' => '최소 1가지 연락 방법을 기입해야 합니다',
    'LBL_PORTAL_LIST_NUMBER' => '목록에 나타나는 기록 개수',
    'LBL_PORTAL_DETAIL_NUMBER' => '세부사항 보기에 나타날 필드 개수',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => '글로벌 검색에 나타날 결과 개수',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => '새 포탈 등록에 지정된 초기설정',
    'LBL_PORTAL_MODULES' => '포탈 모듈',
    'LBL_CONFIG_PORTAL_CONTACT_INFO' => '포탈 연락 정보',
    'LBL_CONFIG_PORTAL_CONTACT_INFO_HELP' => '계정에 추가적인 지원이 필요한 포탈 사용자에게 표시되는 연락처 정보를 구성하십시오. 최소 1개의 옵션을 구성해야 합니다.',
    'LBL_CONFIG_PORTAL_MODULES_HELP' => '포탈 모듈의 이름을 드래그 앤 드랍하여 포탈의 상단 탐색 바에 이를 표시 또는 숨김으로 설정합니다. 포탈 사용자가 모듈에 대한 접속을 제어하려면 <a href="?module=ACLRoles&action=index">역할 관리</a>를 이용하십시오.',
    'LBL_CONFIG_PORTAL_MODULES_DISPLAYED' => '전시된 모듈',
    'LBL_CONFIG_PORTAL_MODULES_HIDDEN' => '숨겨진 모듈',
    'LBL_CONFIG_VISIBILITY' => '가시성',
    'LBL_CASE_VISIBILITY_HELP' => '사례를 볼 수있 는 포털 사용자를 정의하십시오.',
    'LBL_EMAIL_VISIBILITY_HELP' => '사례 관련 이메일을 볼 수 있는 포털 사용자를 정의합니다. 참여하는 연락처는 받는 사람, 보낸 사람, 참조, 숨은 참조 필드에 있는 연락처입니다.',
    'LBL_MESSAGE_VISIBILITY_HELP' => '사례 관련 메세지를 볼 수 있는 포털 사용자를 정의합니다. 참여하는 연락처는 게스트 필드에 있는 연락처입니다.',
    'CASE_VISIBILITY_OPTIONS' => [
        'all' => '계정과 관련된 모든 연락처',
        'related_contacts' => '사례와 관련된 주요 연락처만',
    ],
    'EMAIL_VISIBILITY_OPTIONS' => [
        'related_contacts' => '참여하는 연락처만',
        'all' => '사례를 볼 수 있는 모든 연락처',
    ],
    'MESSAGE_VISIBILITY_OPTIONS' => [
        'related_contacts' => '참여하는 연락처만',
        'all' => '사례를 볼 수 있는 모든 연락처',
    ],


'LBL_PORTAL'=>'포탈',
'LBL_PORTAL_LAYOUTS'=>'포탈 지면배치',
'LBL_SYNCP_WELCOME'=>'업데이트할 포탈 예의 URL을 입력하십시오.',
'LBL_SP_UPLOADSTYLE'=>'귀하의 컴퓨터에 전송할 style sheet 를 선택하십시오.<br />이는 다음 일치화 수행시 Sugar 포탈에서 실행됩니다.',
'LBL_SP_UPLOADED'=> '전송완료',
'ERROR_SP_UPLOADED'=>'css style sheet 전송을 확인해주십시오.',
'LBL_SP_PREVIEW'=>'style sheet를 사용한 Sugar포탈의 미리보기 입니다.',
'LBL_PORTALSITE'=>'Sugar 포탈 URL',
'LBL_PORTAL_GO'=>'이동하기',
'LBL_UP_STYLE_SHEET'=>'style sheet 전송',
'LBL_QUESTION_SUGAR_PORTAL' => '편집할 Sugar 포탈 지면배치 선택',
'LBL_QUESTION_PORTAL' => '편집할 포탈 지면배치 선택',
'LBL_SUGAR_PORTAL'=>'Sugar 포탈 편집기',
'LBL_USER_SELECT' => '사용자 선택',

//PORTAL PREVIEW
'LBL_CASES'=>'사례',
'LBL_NEWSLETTERS'=>'소식지',
'LBL_BUG_TRACKER'=>'오류 추적',
'LBL_MY_ACCOUNT'=>'내 계정',
'LBL_LOGOUT'=>'로그아웃',
'LBL_CREATE_NEW'=>'새로 만들기',
'LBL_LOW'=>'낮음',
'LBL_MEDIUM'=>'보통',
'LBL_HIGH'=>'높음',
'LBL_NUMBER'=>'번호:',
'LBL_PRIORITY'=>'중요도',
'LBL_SUBJECT'=>'제목',

//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'패키지 이름',
'LBL_MODULE_NAME'=>'모듈 이름',
'LBL_MODULE_NAME_SINGULAR' => '단인 모듈명',
'LBL_AUTHOR'=>'필자',
'LBL_DESCRIPTION'=>'설명:',
'LBL_KEY'=>'키',
'LBL_ADD_README'=>'읽기',
'LBL_MODULES'=>'모듈 목록',
'LBL_LAST_MODIFIED'=>'최종 수정',
'LBL_NEW_MODULE'=>'새 모듈',
'LBL_LABEL'=>'라벨',
'LBL_LABEL_TITLE'=>'라벨',
'LBL_SINGULAR_LABEL' => '단수 라벨',
'LBL_WIDTH'=>'너비',
'LBL_PACKAGE'=>'패키지',
'LBL_TYPE'=>'유형',
'LBL_TEAM_SECURITY'=>'팀 보안',
'LBL_ASSIGNABLE'=>'지정할수 있음',
'LBL_PERSON'=>'인물',
'LBL_COMPANY'=>'회사',
'LBL_ISSUE'=>'쟁점',
'LBL_SALE'=>'영업',
'LBL_FILE'=>'파일',
'LBL_NAV_TAB'=>'탐색 탭',
'LBL_CREATE'=>'새로 만들기',
'LBL_LIST'=>'목록',
'LBL_VIEW'=>'보기',
'LBL_LIST_VIEW'=>'목록보기',
'LBL_HISTORY'=>'연혁보기',
'LBL_RESTORE_DEFAULT_LAYOUT'=>'기본 레이아웃 복구',
'LBL_ACTIVITIES'=>'활동내역',
'LBL_SEARCH'=>'검색',
'LBL_NEW'=>'신규',
'LBL_TYPE_BASIC'=>'기본',
'LBL_TYPE_COMPANY'=>'회사',
'LBL_TYPE_PERSON'=>'인물',
'LBL_TYPE_ISSUE'=>'쟁점',
'LBL_TYPE_SALE'=>'여업',
'LBL_TYPE_FILE'=>'파일',
'LBL_RSUB'=>'귀하의 모듈에 나타날 하위패널입니다.',
'LBL_MSUB'=>'이것은 전시를 위한 관련모듈에 공급하는 모듈의 하위패널입니다.',
'LBL_MB_IMPORTABLE'=>'가져오기 허용',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'보이는',
'LBL_VE_HIDDEN'=>'숨겨짐',
'LBL_PACKAGE_WAS_DELETED'=>'패키지가 삭제되었습니다.',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'주문제작 보내기',
'LBL_EC_NAME'=>'패키지 이름',
'LBL_EC_AUTHOR'=>'필자',
'LBL_EC_DESCRIPTION'=>'설명',
'LBL_EC_KEY'=>'키',
'LBL_EC_CHECKERROR'=>'모듈을 선택하십시오.',
'LBL_EC_CUSTOMFIELD'=>'주문 변경된 필드',
'LBL_EC_CUSTOMLAYOUT'=>'주문 변경된 지면배치',
'LBL_EC_CUSTOMDROPDOWN' => '사용자 정의 드롭 다운 (들)',
'LBL_EC_NOCUSTOM'=>'주문 변경된 모듈이 없습니다.',
'LBL_EC_EXPORTBTN'=>'자료 보내기',
'LBL_MODULE_DEPLOYED' => '모듈이 배치되었습니다.',
'LBL_UNDEFINED' => '정의되지 않음',
'LBL_EC_CUSTOMLABEL'=>'사용자 정의 라벨 (들)',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => '데이타 복구가 실패하였습니다.',
'LBL_AJAX_TIME_DEPENDENT' => '시간에 의존하는 액션이 진행중입니다. 기다린후 잠시후에 다시 시도해주십시오.',
'LBL_AJAX_LOADING' => '로딩중입니다.',
'LBL_AJAX_DELETING' => '삭제중입니다.',
'LBL_AJAX_BUILDPROGRESS' => '제조 진행중입니다.',
'LBL_AJAX_DEPLOYPROGRESS' => '배치 진행중입니다.',
'LBL_AJAX_FIELD_EXISTS' =>'입력한 필드 이름은 이미 존재합니다. 새 필드 이름을 입력해 주십시오.',
//JS
'LBL_JS_REMOVE_PACKAGE' => '이 패키지를 삭제하시겠습니까? 이는 패키지와 관련 모든 파일이 영구 삭제합니다.',
'LBL_JS_REMOVE_MODULE' => '이 모듈을 삭제하시겠습니까? 이는 모듈과와 관련 모든 파일이 영구 삭제합니다.',
'LBL_JS_DEPLOY_PACKAGE' => '작업실에서 만들 모든 변경사항은 이 모듈이 재배치될때 덮어쓰여집니다. 계속 진행하시겠습니까?',

'LBL_DEPLOY_IN_PROGRESS' => '패키지 배치중입니다.',
'LBL_JS_VALIDATE_NAME'=>'이름-반드시 글자나 공간을 포함하지 않는 문자숫자식이여야 합니다.',
'LBL_JS_VALIDATE_PACKAGE_KEY'=>'패키지 키가 이미 존재합니다',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'패키지 이름이 이미 존재합니다.',
'LBL_JS_PACKAGE_NAME'=>'패키지 이름 - 글자로 시작해야하며 글자, 숫자, 밑줄만 사용할 수 있습니다. 스페이스 또는 특수문자는 사용할 수 없습니다.',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'키 - 알파벳이며 문자로 시작합니다.',
'LBL_JS_VALIDATE_KEY'=>'키-반드시 글자나 공간을 포함하지 않는 문자숫자식이여야 합니다.',
'LBL_JS_VALIDATE_LABEL'=>'이 모듈의 전시 이름으로 사용될 라벨을 입력하십시오.',
'LBL_JS_VALIDATE_TYPE'=>'이 목록위에 만들고자하는 모듈의 유형을 선택하십시오.',
'LBL_JS_VALIDATE_REL_NAME'=>'이름-공간이 없는 문자숫자식이여야 합니다.',
'LBL_JS_VALIDATE_REL_LABEL'=>'라벨-위의 하위패널에 전시될 라벨을 추가하십시오.',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => '요구되는 내림메뉴목록 아이템을 삭제하시겠습니까? 이는 어플리케이션에 영향을 줄수 있습니다.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => '요구되는 내림메뉴목록 아이템을 삭제하시겠습니까? 획득성공이나 획득실패 단계를 삭제하는것은 예상모듈이 제대로 작동하지 않는 원인이 될수도 있습니다.',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_NEW' => '당신은 당신이 새로운 판매 상태를 삭제 하시겠습니까? 이 상태를 삭제하면 기회 모듈 매출 품목의 흐름이 제대로 작동하지 않습니다.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_IN_PROGRESS' => '당신은 당신이 진행 중 판매 상태를 삭제 하시겠습니까? 이 상태를 삭제하면 기회 모듈 매출 품목의 흐름이 제대로 작동하지 않습니다.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => '획득성공 영업단계를 삭제하시겠습니까? 이 단계를 삭제하는것은 예상모듈이 제대로 작동하지 않는 원인이 될수도 있습니다.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => '획득성공 영업단계를 삭제하시겠습니까? 이 단계를 삭제하는것은 예상모듈이 제대로 작동하지 않는 원인이 될수도 있습니다.',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts.'
        . ' If the field is involved in a formula to calculate values for any fields, the formula will no longer work.'
        . '\n\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run.'
        . '\n\nDo you wish to continue?',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'이 관계를 삭제하시겠습니까?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'이는 이 관계를 영구보관합니다. 이 관계를 배치하시겠습니까?',
'LBL_CONFIRM_DONT_SAVE' => '마지막 저장후 다른 변경사항이 발생했습니다. 저장하시겠습니까?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => '변경사항을 저장하시겠습니까?',
'LBL_CONFIRM_LOWER_LENGTH' => '데이타의 일부가 생략되었을수도 있으며 이는 취소할수 없습니다. 계속하시겠습니까?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'필드에 입력할 데이타에 근거한 올바른 데이타유형을 선택하십시오',
'LBL_POPHELP_FTS_FIELD_CONFIG' => '필드를 검색 가능한 전문이 되도록 환경구성합니다.',
'LBL_POPHELP_FTS_FIELD_BOOST' => '부스팅은 record\\\'s 필드의 관련성을 향상하는 프로세스입니다.<br />검색이 수행되면 더 높은 부스트 수준이 포함된 필드들에 더 많은 가중치가 주어집니다. 검색이 수행되면, 더 많은 가중치의 필드가 포함된 레코드 일치가 검색 결과에서 더 높게 나타납니다.<br />기본값은 중립적 부스트를 나타내는 1.0을 나타냅니다. 양성 부스트를 적용하기 위해, 1보다 높은 모든 부동값이 수락됩니다. 음의 부스트에 대해서는 1보다 낮은 값을 사용합니다. 예를 들어, 1.35 값은 필드를 135%만큼 양의 부스트합니다. 0.60 값을 이용하면 음의 부스트를 적용하게 됩니다.<br />이전 버전에서는 전문 검색 재색인을 수해해야 했습니다. 이제 이러한 작업은 더 이상 필요 없습니다.',
'LBL_POPHELP_IMPORTABLE'=>'예:필드가 작업 가져오기에 포함됩니다.<br />아니오:필드가 가져오기에 포함되지 않습니다.<br />필수:가져오기에 반드시 필드가치가 입력되어야합니다.',
'LBL_POPHELP_PII'=>'이 필드는 감사를 위해 자동으로 표시되며 개인정보 보기에서 사용할 수 있습니다.<br>레코드가 데이터 프라이버시 삭제 요청과 관련이 있을 때 개인정보 필드를 영구적으로 지울 수도 있습니다.<br>지우기는 데이터 프라이버시 모듈을 통해 수행되며 관리자 또는 데이터 프라이버시 매니저 역할의 사용자가 실행할 수 있습니다.',
'LBL_POPHELP_IMAGE_WIDTH'=>'pixels로 측정된 너비를 위한 숫자를 입력하십시오.<br />전송된 이미지는 이 너비에 따라 축소됩니다.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'pixels.로 측정된 높이를 위한 숫자를 입력하십시오.<br />전송된 이미지는 이 높이에 맞춰 축소됩니다.',
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
'LBL_POPHELP_REQUIRED'=>"이 필드가 레이아웃에서 필수인지 결정하는 공식을 생성합니다.<br/>"
    . "브라우저 기반 모바일 보기에서 필수 필드는 이 공식을 따르지만,<br/>"
    . "iPhone용 Sugar Mobile 등 독자적인 어플리케이션에서는 공식을 따르지 않습니다. <br/>"
    . "Sugar Self-Service Portal에서도 공식을 따르지 않습니다.",
'LBL_POPHELP_READONLY'=>"이 필드가 레이아웃에서 읽기 전용인지 결정하는 공식을 생성합니다.<br/>"
        . "브라우저 기반 모바일 보기에서 읽기 전용 필드는 이 공식을 따르지만,<br/>"
        . "iPhone용 Sugar Mobile 등 독자적인 어플리케이션에서는 공식을 따르지 않습니다. <br/>"
        . "Sugar Self-Service Portal에서도 공식을 따르지 않습니다.",
'LBL_POPHELP_GLOBAL_SEARCH'=>'이 모듈에서 글로벌 검색을 사용한 기록을 검색할때 이 필드를 선택하십시오.',
//Revert Module labels
'LBL_RESET' => '재설정',
'LBL_RESET_MODULE' => '모듈을 재설정합니다.',
'LBL_REMOVE_CUSTOM' => '주문제잘물을 제거합니다.',
'LBL_CLEAR_RELATIONSHIPS' => '관계를 비우기합니다.',
'LBL_RESET_LABELS' => '라벨을 재설정합니다.',
'LBL_RESET_LAYOUTS' => '레이아웃 제설정',
'LBL_REMOVE_FIELDS' => '고객필드를 제거합니다.',
'LBL_CLEAR_EXTENSIONS' => '확장부분을 비우기합니다.',

'LBL_HISTORY_TIMESTAMP' => 'TimeStamp',
'LBL_HISTORY_TITLE' => '연혁',

'fieldTypes' => array(
                'varchar'=>'본문필드',
                'int'=>'정수',
                'float'=>'유동',
                'bool'=>'체크박스',
                'enum'=>'내려보기',
                'multienum' => '복합 선택',
                'date'=>'날짜',
                'phone' => '전화번호:',
                'currency' => '화폐',
                'html' => 'HTML',
                'radioenum' => '라디오광고',
                'relate' => '관련',
                'address' => '주소',
                'text' => '본문지역',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'image' => '이미지',
                'encrypt'=>'암호화',
                'datetimecombo' =>'날짜시간',
                'decimal'=>'소수',
                'autoincrement' => '자동 증가',
                'actionbutton' => '액션버튼',
),
'labelTypes' => array(
    "" => "자주 사용되는 라벨",
    "all" => "전체 라벨",
),

'parent' => 'Flex 관련',

'LBL_ILLEGAL_FIELD_VALUE' =>"내려보기키는 견적을 포함할수 없습니다.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"내려보기 목록에서 제거한 아이템을 선택중입니다. 이 아이템을 사용하는 내려보기목록은 더이상 가치를 전시하지 않으며 그 가치는 내려보기 필드에서 더이상 선택할수 없습니다. 계속하시겠습니까?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'전체 모듈',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
'LBL_HEADER_COPY_FROM_LAYOUT' => '레이아웃에 복사',
'LBL_RELATIONSHIP_TYPE' => '관계',

// Edit Labels
'LBL_COMPARISON_LANGUAGE' => '언어 비교',
'LBL_LABEL_NOT_TRANSLATED' => '이 라벨은 번역될 수 없습니다',
);
