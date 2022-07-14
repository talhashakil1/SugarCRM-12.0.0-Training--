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
$mod_strings = array (
    // Dashboard Names
    'LBL_KBCONTENTS_LIST_DASHBOARD' => '知识库列表仪表板',
    'LBL_KBCONTENTS_RECORD_DASHBOARD' => '知识库记录仪表板',
    'LBL_KBCONTENTS_FOCUS_DRAWER_DASHBOARD' => '知识库焦点抽屉',

    'LBL_MODULE_NAME' => '知识库',
    'LBL_MODULE_NAME_SINGULAR' => '知识库文章',
    'LBL_MODULE_TITLE' => '知识库文章',
    'LNK_NEW_ARTICLE' => '创建文章',
    'LNK_LIST_ARTICLES' => '查看文章',
    'LNK_KNOWLEDGE_BASE_ADMIN_MENU' => '设置',
    'LBL_EDIT_LANGUAGES' => '编辑语言',
    'LBL_ADMIN_LABEL_LANGUAGES' => '可用语言',
    'LBL_CONFIG_LANGUAGES_TITLE' => '可用语言',
    'LBL_CONFIG_LANGUAGES_TEXT' => '配置将在知识库模块中使用的语言。',
    'LBL_CONFIG_LANGUAGES_LABEL_KEY' => '语言代码',
    'LBL_CONFIG_LANGUAGES_LABEL_NAME' => '语言标签',
    'ERR_CONFIG_LANGUAGES_DUPLICATE' => '不允许添加键值与现有键值重复的语言。',
    'ERR_CONFIG_LANGUAGES_EMPTY_KEY' => 'The Language Code field is empty, please enter values before saving.',
    'ERR_CONFIG_LANGUAGES_EMPTY_VALUE' => 'The Language Label field is empty, please enter values before saving.',
    'LBL_SET_ITEM_PRIMARY' => '将“值”设置为“主要”',
    'LBL_ITEM_REMOVE' => '移除项目',
    'LBL_ITEM_ADD' => '添加项目',
    'LBL_MODULE_ID'=> 'KBContents',
    'LBL_DOCUMENT_REVISION_ID' => '版本编号',
    'LBL_DOCUMENT_REVISION' => '修订版本',
    'LBL_NUMBER' => '编号',
    'LBL_TEXT_BODY' => '内容',
    'LBL_LANG' => '语言',
    'LBL_PUBLISH_DATE' => '发布日期',
    'LBL_EXP_DATE' => '失效日期',
    'LBL_DOC_ID' => '文档编号',
    'LBL_APPROVED' => '已批准的',
    'LBL_REVISION' => '修订版本',
    'LBL_ACTIVE_REV' => '有效修订',
    'LBL_IS_EXTERNAL' => '外部文章',
    'LBL_KBDOCUMENT_ID' => 'KBDocument ID',
    'LBL_KBDOCUMENTS' => 'KBDocuments',
    'LBL_KBDOCUMENT' => 'KBDocument',
    'LBL_KBARTICLE' => '文章',
    'LBL_KBARTICLES' => '文章',
    'LBL_KBARTICLE_ID' => '文章编号',
    'LBL_USEFUL' => '实用',
    'LBL_NOT_USEFUL' => '不实用',
    'LBL_RATING' => '评分',
    'LBL_VIEWED_COUNT' => '查看数目',
    'LBL_CATEGORIES' => '知识库类别',
    'LBL_CATEGORY_NAME' => '类别：',
    'LBL_USEFULNESS' => '实用性',
    'LBL_CATEGORY_ID' => '类别 ID',
    'LBL_KBSAPPROVERS' => '审核人',
    'LBL_KBSAPPROVER_ID' => '审核人',
    'LBL_KBSAPPROVER' => '审核人',
    'LBL_KBSCASES' => '客户反馈',
    'LBL_KBSCASE_ID' => '相关客户反馈',
    'LBL_KBSCASE' => '相关客户反馈',
    'LBL_MORE_MOST_USEFUL_ARTICLES' => '更多最实用的已发布知识库文章...',
    'LBL_KBSLOCALIZATIONS' => '本地化',
    'LBL_LOCALIZATIONS_SUBPANEL_TITLE' => '本地化',
    'LBL_KBSREVISIONS' => '修订版',
    'LBL_REVISIONS_SUBPANEL_TITLE' => '修订版',
    'LBL_LISTVIEW_FILTER_ALL' => '所有文章',
    'LBL_LISTVIEW_FILTER_MY' => '我的文章',
    'LBL_CREATE_LOCALIZATION_BUTTON_LABEL' => '创建本地化',
    'LBL_CREATE_REVISION_BUTTON_LABEL' => '创建修订版本',
    'LBL_CANNOT_CREATE_LOCALIZATION' =>
        '无法创建新本地化，因为所有可用语言都已存在本地化版本。',
    'LBL_SPECIFY_PUBLISH_DATE' => 'Schedule this article to be published by specifying the Publish Date. Do you wish to continue without updating a Publish Date?',
    'LBL_MODIFY_EXP_DATE_LOW' => '截止日期在发布日期之前。是否在不修改截止日期的情况下继续？',
    'LBL_PANEL_INMORELESS' => '实用性',
    'LBL_MORE_OTHER_LANGUAGES' => '更多其他语言...',
    'EXCEPTION_VOTE_USEFULNESS_NOT_AUTHORIZED' => '您未被授权对 {moduleName} 是否实用进行投票。如果您需要访问权限，请联系您的管理员。',
    'LNK_NEW_KBCONTENT_TEMPLATE' => '创建模板',
    'LNK_LIST_KBCONTENT_TEMPLATES' => '查看模板',
    'LNK_LIST_KBCATEGORIES' => '查看分类',
    'LBL_TEMPLATES' => '模板',
    'LBL_TEMPLATE' => '模板',
    'LBL_TEMPATE_LOAD_MESSAGE' => '模板将覆写覆盖所有内容。' .
        '确定要使用此模板吗？',
    'LNK_IMPORT_KBCONTENTS' => '导入文章',
    'LBL_DELETE_CONFIRMATION_LANGUAGE' => '所有使用此语言的文档都将被删除！您是否确定要删除此语言吗？',
    'LBL_CREATE_CATEGORY_PLACEHOLDER' => '按 Enter 键创建或按 Esc 键取消',
    'LBL_KB_NOTIFICATION' => '已发布文档。',
    'LBL_KB_PUBLISHED_REQUEST' => '已分配给您一个文档进行审核和发布。',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => '文档状态已更改为草稿。',
    'LBL_OPERATOR_CONTAINING_THESE_WORDS' => '包含这些词语',
    'LBL_OPERATOR_EXCLUDING_THESE_WORDS' => '不包含这些词语',
    'ERROR_EXP_DATE_LOW' => '到期日期不能早于公布的日期。',
    'ERROR_ACTIVE_DATE_APPROVE_REQUIRED' => '“已审核”状态需要有发布日期。',
    'ERROR_ACTIVE_DATE_LOW' => 'The Publish Date must occur on a later date than today&#39;s date.',
    'ERROR_ACTIVE_DATE_EMPTY' => '发布日期为空。',
    'LBL_RECORD_SAVED_SUCCESS' => '您成功创建了 {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a>。', // use when a model is available
    'ERROR_IS_BEFORE' => '错误。此字段的日期不能晚于 {{this}} 字段的日期。',
    'TPL_SHOW_MORE_MODULE' => '更多 {{module}} 文章...',
    'LBL_LIST_FORM_TITLE' => '知识库列表',
    'LBL_SEARCH_FORM_TITLE' => '知识库搜索',
);
