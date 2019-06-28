<?php


$view = new view();
$view->name = 'all_scholars_datatables_';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'islandora_solr';
$view->human_name = 'All Scholars (Datatables)';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'All Scholars';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['exposed_form']['options']['reset_button'] = TRUE;
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['style_plugin'] = 'datatables';
$handler->display->display_options['style_options']['columns'] = array(
  'MADS_u1_ms' => 'MADS_u1_ms',
  'PID' => 'PID',
  'MADS_family_s' => 'MADS_family_s',
  'MADS_fullname_s' => 'MADS_fullname_s',
  'MADS_organization_mt' => 'MADS_organization_mt',
  'MADS_email_mt' => 'MADS_email_mt',
  'MADS_status_mt' => 'MADS_status_mt',
  'MADS_given_s' => 'MADS_given_s',
  'MADS_status_s' => 'MADS_status_s',
);
$handler->display->display_options['style_options']['default'] = 'MADS_family_s';
$handler->display->display_options['style_options']['info'] = array(
  'MADS_u1_ms' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'PID' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'MADS_family_s' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'MADS_fullname_s' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'MADS_organization_mt' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'MADS_email_mt' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'MADS_status_mt' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'MADS_given_s' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'MADS_status_s' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
);
$handler->display->display_options['style_options']['elements'] = array(
  'search_box' => 1,
  'table_info' => 1,
  'save_state' => 0,
  'table_tools' => 0,
);
$handler->display->display_options['style_options']['layout'] = array(
  'autowidth' => 0,
  'themeroller' => 0,
  'sdom' => '',
);
$handler->display->display_options['style_options']['pages'] = array(
  'pagination_style' => 'full_numbers',
  'length_change' => 0,
  'display_length' => '25',
);
/* Field: Islandora Solr: MADS_u1_ms */
$handler->display->display_options['fields']['MADS_u1_ms']['id'] = 'MADS_u1_ms';
$handler->display->display_options['fields']['MADS_u1_ms']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_u1_ms']['field'] = 'MADS_u1_ms';
$handler->display->display_options['fields']['MADS_u1_ms']['exclude'] = TRUE;
$handler->display->display_options['fields']['MADS_u1_ms']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['MADS_u1_ms']['link_to_object'] = 0;
/* Field: Islandora Solr: PID */
$handler->display->display_options['fields']['PID']['id'] = 'PID';
$handler->display->display_options['fields']['PID']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['PID']['field'] = 'PID';
$handler->display->display_options['fields']['PID']['label'] = 'ID';
$handler->display->display_options['fields']['PID']['exclude'] = TRUE;
$handler->display->display_options['fields']['PID']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['PID']['alter']['path'] = 'islandora/search/mods_identifier_u1_s:[MADS_u1_ms]';
$handler->display->display_options['fields']['PID']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['PID']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_family_s */
$handler->display->display_options['fields']['MADS_family_s']['id'] = 'MADS_family_s';
$handler->display->display_options['fields']['MADS_family_s']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_family_s']['field'] = 'MADS_family_s';
$handler->display->display_options['fields']['MADS_family_s']['label'] = 'Family Name';
$handler->display->display_options['fields']['MADS_family_s']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_fullname_s */
$handler->display->display_options['fields']['MADS_fullname_s']['id'] = 'MADS_fullname_s';
$handler->display->display_options['fields']['MADS_fullname_s']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_fullname_s']['field'] = 'MADS_fullname_s';
$handler->display->display_options['fields']['MADS_fullname_s']['label'] = 'Fullname';
$handler->display->display_options['fields']['MADS_fullname_s']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['MADS_fullname_s']['alter']['path'] = 'islandora/object/[PID]';
$handler->display->display_options['fields']['MADS_fullname_s']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['MADS_fullname_s']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_organization_mt */
$handler->display->display_options['fields']['MADS_organization_mt']['id'] = 'MADS_organization_mt';
$handler->display->display_options['fields']['MADS_organization_mt']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_organization_mt']['field'] = 'MADS_organization_mt';
$handler->display->display_options['fields']['MADS_organization_mt']['label'] = 'Department(s)';
$handler->display->display_options['fields']['MADS_organization_mt']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['MADS_organization_mt']['alter']['path'] = 'islandora/search/MADS_organization_mt:("[MADS_organization_mt]")';
$handler->display->display_options['fields']['MADS_organization_mt']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['MADS_organization_mt']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_email_mt */
$handler->display->display_options['fields']['MADS_email_mt']['id'] = 'MADS_email_mt';
$handler->display->display_options['fields']['MADS_email_mt']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_email_mt']['field'] = 'MADS_email_mt';
$handler->display->display_options['fields']['MADS_email_mt']['label'] = 'Email';
$handler->display->display_options['fields']['MADS_email_mt']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['MADS_email_mt']['alter']['path'] = 'mailto:[MADS_email_mt]';
$handler->display->display_options['fields']['MADS_email_mt']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['MADS_email_mt']['link_to_object'] = 0;
/* Field: Islandora Solr: Score */
$handler->display->display_options['fields']['score']['id'] = 'score';
$handler->display->display_options['fields']['score']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['score']['field'] = 'score';
$handler->display->display_options['fields']['score']['exclude'] = TRUE;
$handler->display->display_options['fields']['score']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_status_mt */
$handler->display->display_options['fields']['MADS_status_mt']['id'] = 'MADS_status_mt';
$handler->display->display_options['fields']['MADS_status_mt']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_status_mt']['field'] = 'MADS_status_mt';
$handler->display->display_options['fields']['MADS_status_mt']['label'] = 'Status';
$handler->display->display_options['fields']['MADS_status_mt']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['MADS_status_mt']['alter']['path'] = 'islandora/search/MADS_status_mt:("[MADS_status_mt]")';
$handler->display->display_options['fields']['MADS_status_mt']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['MADS_status_mt']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_given_s */
$handler->display->display_options['fields']['MADS_given_s']['id'] = 'MADS_given_s';
$handler->display->display_options['fields']['MADS_given_s']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_given_s']['field'] = 'MADS_given_s';
$handler->display->display_options['fields']['MADS_given_s']['label'] = 'Publications';
$handler->display->display_options['fields']['MADS_given_s']['alter']['alter_text'] = TRUE;
$handler->display->display_options['fields']['MADS_given_s']['alter']['text'] = 'Publications';
$handler->display->display_options['fields']['MADS_given_s']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['MADS_given_s']['alter']['path'] = 'islandora/search/mods_identifier_u1_ms:([MADS_u1_ms])?sort=mods_canonical_date_issued_dt%20desc';
$handler->display->display_options['fields']['MADS_given_s']['link_to_object'] = 0;
/* Filter criterion: Islandora Solr: RELS_EXT_isMemberOfCollection_uri_t */
$handler->display->display_options['filters']['RELS_EXT_isMemberOfCollection_uri_t']['id'] = 'RELS_EXT_isMemberOfCollection_uri_t';
$handler->display->display_options['filters']['RELS_EXT_isMemberOfCollection_uri_t']['table'] = 'islandora_solr';
$handler->display->display_options['filters']['RELS_EXT_isMemberOfCollection_uri_t']['field'] = 'RELS_EXT_isMemberOfCollection_uri_t';
$handler->display->display_options['filters']['RELS_EXT_isMemberOfCollection_uri_t']['value'] = 'ir:people';
$handler->display->display_options['filters']['RELS_EXT_isMemberOfCollection_uri_t']['group'] = 1;
/* Filter criterion: Islandora Solr: MADS_organization_mt */
$handler->display->display_options['filters']['MADS_organization_mt']['id'] = 'MADS_organization_mt';
$handler->display->display_options['filters']['MADS_organization_mt']['table'] = 'islandora_solr';
$handler->display->display_options['filters']['MADS_organization_mt']['field'] = 'MADS_organization_mt';
$handler->display->display_options['filters']['MADS_organization_mt']['exposed'] = TRUE;
$handler->display->display_options['filters']['MADS_organization_mt']['expose']['identifier'] = 'mads_organization_mt';
$handler->display->display_options['filters']['MADS_organization_mt']['is_grouped'] = TRUE;
$handler->display->display_options['filters']['MADS_organization_mt']['group_info']['label'] = 'MADS_organization_mt';
$handler->display->display_options['filters']['MADS_organization_mt']['group_info']['identifier'] = 'MADS_organization_mt';
$handler->display->display_options['filters']['MADS_organization_mt']['group_info']['remember'] = FALSE;

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['path'] = 'browse_scholars_dt';
$handler->display->display_options['menu']['title'] = 'All Scholars new';
$handler->display->display_options['menu']['weight'] = '0';
$handler->display->display_options['menu']['name'] = 'menu-scholar';
$handler->display->display_options['menu']['context'] = 0;
$handler->display->display_options['menu']['context_only_inline'] = 0;

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page_1');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Departments';
$handler->display->display_options['defaults']['style_plugin'] = FALSE;
$handler->display->display_options['style_plugin'] = 'datatables';
$handler->display->display_options['style_options']['grouping'] = array(
  0 => array(
    'field' => 'MADS_organization_mt',
    'rendered' => 1,
    'rendered_strip' => 0,
  ),
);
$handler->display->display_options['style_options']['columns'] = array(
  'MADS_u1_ms' => 'MADS_u1_ms',
  'PID' => 'PID',
  'MADS_family_s' => 'MADS_family_s',
  'MADS_fullname_s' => 'MADS_fullname_s',
  'MADS_organization_mt' => 'MADS_organization_mt',
  'MADS_email_mt' => 'MADS_email_mt',
  'score' => 'score',
  'MADS_status_mt' => 'MADS_status_mt',
  'MADS_given_s' => 'MADS_given_s',
);
$handler->display->display_options['style_options']['default'] = '-1';
$handler->display->display_options['style_options']['info'] = array(
  'MADS_u1_ms' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'PID' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'MADS_family_s' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'MADS_fullname_s' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'MADS_organization_mt' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'MADS_email_mt' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'score' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'MADS_status_mt' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'MADS_given_s' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
);
$handler->display->display_options['style_options']['elements'] = array(
  'search_box' => 1,
  'table_info' => 1,
  'save_state' => 0,
  'table_tools' => 0,
);
$handler->display->display_options['style_options']['layout'] = array(
  'autowidth' => 1,
  'themeroller' => 0,
  'sdom' => '',
);
$handler->display->display_options['style_options']['pages'] = array(
  'pagination_style' => 'full_numbers',
  'length_change' => 0,
  'display_length' => '25',
);
$handler->display->display_options['defaults']['style_options'] = FALSE;
$handler->display->display_options['defaults']['row_plugin'] = FALSE;
$handler->display->display_options['defaults']['row_options'] = FALSE;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Islandora Solr: MADS_u1_ms */
$handler->display->display_options['fields']['MADS_u1_ms']['id'] = 'MADS_u1_ms';
$handler->display->display_options['fields']['MADS_u1_ms']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_u1_ms']['field'] = 'MADS_u1_ms';
$handler->display->display_options['fields']['MADS_u1_ms']['exclude'] = TRUE;
$handler->display->display_options['fields']['MADS_u1_ms']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['MADS_u1_ms']['link_to_object'] = 0;
/* Field: Islandora Solr: PID */
$handler->display->display_options['fields']['PID']['id'] = 'PID';
$handler->display->display_options['fields']['PID']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['PID']['field'] = 'PID';
$handler->display->display_options['fields']['PID']['label'] = 'ID';
$handler->display->display_options['fields']['PID']['exclude'] = TRUE;
$handler->display->display_options['fields']['PID']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['PID']['alter']['path'] = 'islandora/search/mods_identifier_u1_s:[MADS_u1_ms]';
$handler->display->display_options['fields']['PID']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['PID']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_family_s */
$handler->display->display_options['fields']['MADS_family_s']['id'] = 'MADS_family_s';
$handler->display->display_options['fields']['MADS_family_s']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_family_s']['field'] = 'MADS_family_s';
$handler->display->display_options['fields']['MADS_family_s']['label'] = 'Family Name';
$handler->display->display_options['fields']['MADS_family_s']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_fullname_s */
$handler->display->display_options['fields']['MADS_fullname_s']['id'] = 'MADS_fullname_s';
$handler->display->display_options['fields']['MADS_fullname_s']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_fullname_s']['field'] = 'MADS_fullname_s';
$handler->display->display_options['fields']['MADS_fullname_s']['label'] = 'Fullname';
$handler->display->display_options['fields']['MADS_fullname_s']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['MADS_fullname_s']['alter']['path'] = 'islandora/object/[PID]';
$handler->display->display_options['fields']['MADS_fullname_s']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['MADS_fullname_s']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_organization_mt */
$handler->display->display_options['fields']['MADS_organization_mt']['id'] = 'MADS_organization_mt';
$handler->display->display_options['fields']['MADS_organization_mt']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_organization_mt']['field'] = 'MADS_organization_mt';
$handler->display->display_options['fields']['MADS_organization_mt']['label'] = 'Department(s)';
$handler->display->display_options['fields']['MADS_organization_mt']['exclude'] = TRUE;
$handler->display->display_options['fields']['MADS_organization_mt']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['MADS_organization_mt']['alter']['path'] = 'islandora/search/MADS_organization_mt:[MADS_organization_mt]';
$handler->display->display_options['fields']['MADS_organization_mt']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['MADS_organization_mt']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_email_mt */
$handler->display->display_options['fields']['MADS_email_mt']['id'] = 'MADS_email_mt';
$handler->display->display_options['fields']['MADS_email_mt']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_email_mt']['field'] = 'MADS_email_mt';
$handler->display->display_options['fields']['MADS_email_mt']['label'] = 'Email';
$handler->display->display_options['fields']['MADS_email_mt']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['MADS_email_mt']['alter']['path'] = 'mailto:[MADS_email_mt]';
$handler->display->display_options['fields']['MADS_email_mt']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['MADS_email_mt']['link_to_object'] = 0;
/* Field: Islandora Solr: Score */
$handler->display->display_options['fields']['score']['id'] = 'score';
$handler->display->display_options['fields']['score']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['score']['field'] = 'score';
$handler->display->display_options['fields']['score']['exclude'] = TRUE;
$handler->display->display_options['fields']['score']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_status_mt */
$handler->display->display_options['fields']['MADS_status_mt']['id'] = 'MADS_status_mt';
$handler->display->display_options['fields']['MADS_status_mt']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_status_mt']['field'] = 'MADS_status_mt';
$handler->display->display_options['fields']['MADS_status_mt']['label'] = 'Status';
$handler->display->display_options['fields']['MADS_status_mt']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['MADS_status_mt']['alter']['path'] = 'islandora/search/MADS_status_mt:[MADS_status_mt]';
$handler->display->display_options['fields']['MADS_status_mt']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['MADS_status_mt']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_given_s */
$handler->display->display_options['fields']['MADS_given_s']['id'] = 'MADS_given_s';
$handler->display->display_options['fields']['MADS_given_s']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_given_s']['field'] = 'MADS_given_s';
$handler->display->display_options['fields']['MADS_given_s']['label'] = 'Citations';
$handler->display->display_options['fields']['MADS_given_s']['alter']['alter_text'] = TRUE;
$handler->display->display_options['fields']['MADS_given_s']['alter']['text'] = 'Citations';
$handler->display->display_options['fields']['MADS_given_s']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['MADS_given_s']['alter']['path'] = 'islandora/search/mods_identifier_u1_s:[MADS_u1_ms]';
$handler->display->display_options['fields']['MADS_given_s']['link_to_object'] = 0;
$handler->display->display_options['path'] = 'browse_dept_dt';

/* Display: Scholar list (Current) */
$handler = $view->new_display('page', 'Scholar list (Current)', 'page_2');
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Islandora Solr: MADS_u1_ms */
$handler->display->display_options['fields']['MADS_u1_ms']['id'] = 'MADS_u1_ms';
$handler->display->display_options['fields']['MADS_u1_ms']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_u1_ms']['field'] = 'MADS_u1_ms';
$handler->display->display_options['fields']['MADS_u1_ms']['link_to_object'] = 0;
/* Field: Islandora Solr: PID */
$handler->display->display_options['fields']['PID']['id'] = 'PID';
$handler->display->display_options['fields']['PID']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['PID']['field'] = 'PID';
$handler->display->display_options['fields']['PID']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_family_s */
$handler->display->display_options['fields']['MADS_family_s']['id'] = 'MADS_family_s';
$handler->display->display_options['fields']['MADS_family_s']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_family_s']['field'] = 'MADS_family_s';
$handler->display->display_options['fields']['MADS_family_s']['label'] = 'Family Name';
$handler->display->display_options['fields']['MADS_family_s']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_fullname_s */
$handler->display->display_options['fields']['MADS_fullname_s']['id'] = 'MADS_fullname_s';
$handler->display->display_options['fields']['MADS_fullname_s']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_fullname_s']['field'] = 'MADS_fullname_s';
$handler->display->display_options['fields']['MADS_fullname_s']['label'] = 'Fullname';
$handler->display->display_options['fields']['MADS_fullname_s']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['MADS_fullname_s']['alter']['path'] = 'islandora/object/[PID]';
$handler->display->display_options['fields']['MADS_fullname_s']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['MADS_fullname_s']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_organization_mt */
$handler->display->display_options['fields']['MADS_organization_mt']['id'] = 'MADS_organization_mt';
$handler->display->display_options['fields']['MADS_organization_mt']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_organization_mt']['field'] = 'MADS_organization_mt';
$handler->display->display_options['fields']['MADS_organization_mt']['label'] = 'Department(s)';
$handler->display->display_options['fields']['MADS_organization_mt']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['MADS_organization_mt']['alter']['path'] = 'islandora/search/MADS_organization_mt:("[MADS_organization_mt]")?sort=MADS_family_s asc';
$handler->display->display_options['fields']['MADS_organization_mt']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['MADS_organization_mt']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_email_mt */
$handler->display->display_options['fields']['MADS_email_mt']['id'] = 'MADS_email_mt';
$handler->display->display_options['fields']['MADS_email_mt']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_email_mt']['field'] = 'MADS_email_mt';
$handler->display->display_options['fields']['MADS_email_mt']['label'] = 'Email';
$handler->display->display_options['fields']['MADS_email_mt']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['MADS_email_mt']['alter']['path'] = 'mailto:[MADS_email_mt]';
$handler->display->display_options['fields']['MADS_email_mt']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['MADS_email_mt']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_status_mt */
$handler->display->display_options['fields']['MADS_status_mt']['id'] = 'MADS_status_mt';
$handler->display->display_options['fields']['MADS_status_mt']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_status_mt']['field'] = 'MADS_status_mt';
$handler->display->display_options['fields']['MADS_status_mt']['label'] = 'Status';
$handler->display->display_options['fields']['MADS_status_mt']['alter']['path'] = 'islandora/search/MADS_status_mt:("[MADS_status_mt]")';
$handler->display->display_options['fields']['MADS_status_mt']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['MADS_status_mt']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_given_s */
$handler->display->display_options['fields']['MADS_given_s']['id'] = 'MADS_given_s';
$handler->display->display_options['fields']['MADS_given_s']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_given_s']['field'] = 'MADS_given_s';
$handler->display->display_options['fields']['MADS_given_s']['label'] = 'Publications';
$handler->display->display_options['fields']['MADS_given_s']['alter']['alter_text'] = TRUE;
$handler->display->display_options['fields']['MADS_given_s']['alter']['text'] = 'Publications';
$handler->display->display_options['fields']['MADS_given_s']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['MADS_given_s']['alter']['path'] = 'islandora/search/mods_identifier_u1_mt:([MADS_u1_ms])?sort=mods_canonical_date_issued_dt%20desc';
$handler->display->display_options['fields']['MADS_given_s']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_status_s */
$handler->display->display_options['fields']['MADS_status_s']['id'] = 'MADS_status_s';
$handler->display->display_options['fields']['MADS_status_s']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_status_s']['field'] = 'MADS_status_s';
$handler->display->display_options['fields']['MADS_status_s']['label'] = 'Status';
$handler->display->display_options['fields']['MADS_status_s']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['MADS_status_s']['link_to_object'] = 0;
$handler->display->display_options['defaults']['sorts'] = FALSE;
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Islandora Solr: RELS_EXT_isMemberOfCollection_uri_t */
$handler->display->display_options['filters']['RELS_EXT_isMemberOfCollection_uri_t']['id'] = 'RELS_EXT_isMemberOfCollection_uri_t';
$handler->display->display_options['filters']['RELS_EXT_isMemberOfCollection_uri_t']['table'] = 'islandora_solr';
$handler->display->display_options['filters']['RELS_EXT_isMemberOfCollection_uri_t']['field'] = 'RELS_EXT_isMemberOfCollection_uri_t';
$handler->display->display_options['filters']['RELS_EXT_isMemberOfCollection_uri_t']['value'] = 'ir:people';
$handler->display->display_options['filters']['RELS_EXT_isMemberOfCollection_uri_t']['group'] = 1;
$handler->display->display_options['path'] = 'scholars';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'Scholars';
$handler->display->display_options['menu']['weight'] = '0';
$handler->display->display_options['menu']['name'] = 'menu-scholar';
$handler->display->display_options['menu']['context'] = 0;
$handler->display->display_options['menu']['context_only_inline'] = 0;
