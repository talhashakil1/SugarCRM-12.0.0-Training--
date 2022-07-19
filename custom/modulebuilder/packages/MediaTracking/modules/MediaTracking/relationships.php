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
$relationships = array (
  'talha_mediatracking_contacts' => 
  array (
    'rhs_label' => 'Contacts',
    'lhs_label' => 'Media Trackings and Contacts Relationship',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'Talha_MediaTracking',
    'rhs_module' => 'Contacts',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'talha_mediatracking_contacts',
  ),
  'talha_mediatracking_activities' => 
  array (
    'rhs_label' => 'Activities',
    'lhs_label' => 'Media Trackings',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'Default',
    'lhs_module' => 'Talha_MediaTracking',
    'rhs_module' => 'Activities',
    'relationship_type' => 'many-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'talha_mediatracking_activities',
  ),
);