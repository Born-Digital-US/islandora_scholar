<?php

$view = new view();
$view->name = 'islandora_profile__scholar_directory';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'islandora_solr';
$view->human_name = 'Islandora Profile Views: Scholar\'s directory';
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
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '10';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'PID' => 'PID',
  'MADS_fullname_ms' => 'MADS_fullname_ms',
  'MADS_u1_ms' => 'MADS_u1_ms',
  'MADS_organization_ms' => 'MADS_organization_ms',
  'MADS_email_ms' => 'MADS_email_ms',
  'MADS_status_ms' => 'MADS_status_ms',
);
$handler->display->display_options['style_options']['default'] = '-1';
$handler->display->display_options['style_options']['info'] = array(
  'PID' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'MADS_fullname_ms' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'MADS_u1_ms' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'MADS_organization_ms' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'MADS_email_ms' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'MADS_status_ms' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
);
/* Field: Islandora Solr: PID */
$handler->display->display_options['fields']['PID']['id'] = 'PID';
$handler->display->display_options['fields']['PID']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['PID']['field'] = 'PID';
$handler->display->display_options['fields']['PID']['label'] = '';
$handler->display->display_options['fields']['PID']['exclude'] = TRUE;
$handler->display->display_options['fields']['PID']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['PID']['link_to_object'] = 0;
/* Field: Global: Custom text */
$handler->display->display_options['fields']['nothing']['id'] = 'nothing';
$handler->display->display_options['fields']['nothing']['table'] = 'views';
$handler->display->display_options['fields']['nothing']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing']['label'] = '';
$handler->display->display_options['fields']['nothing']['alter']['text'] = '<img class=\'person__thumbnail\' src="/islandora/object/[PID]/datastream/TN/view" alt=\'[MADS_fullname_ms]\' title=\'[MADS_fullname_ms]\' />';
$handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
/* Field: Islandora Solr: MADS_fullname_ms */
$handler->display->display_options['fields']['MADS_fullname_ms']['id'] = 'MADS_fullname_ms';
$handler->display->display_options['fields']['MADS_fullname_ms']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_fullname_ms']['field'] = 'MADS_fullname_ms';
$handler->display->display_options['fields']['MADS_fullname_ms']['label'] = 'Full Name';
$handler->display->display_options['fields']['MADS_fullname_ms']['alter']['path'] = 'islandora/object/[PID]';
$handler->display->display_options['fields']['MADS_fullname_ms']['link_to_object'] = 1;
/* Field: Islandora Solr: MADS_u1_ms */
$handler->display->display_options['fields']['MADS_u1_ms']['id'] = 'MADS_u1_ms';
$handler->display->display_options['fields']['MADS_u1_ms']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_u1_ms']['field'] = 'MADS_u1_ms';
$handler->display->display_options['fields']['MADS_u1_ms']['label'] = 'Identifier';
$handler->display->display_options['fields']['MADS_u1_ms']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_organization_ms */
$handler->display->display_options['fields']['MADS_organization_ms']['id'] = 'MADS_organization_ms';
$handler->display->display_options['fields']['MADS_organization_ms']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_organization_ms']['field'] = 'MADS_organization_ms';
$handler->display->display_options['fields']['MADS_organization_ms']['label'] = 'Department(s)';
$handler->display->display_options['fields']['MADS_organization_ms']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['MADS_organization_ms']['alter']['path'] = 'islandora/search/MADS_organization_ms:("[MADS_organization_ms]")?sort=MADS_family_s asc';
$handler->display->display_options['fields']['MADS_organization_ms']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_email_ms */
$handler->display->display_options['fields']['MADS_email_ms']['id'] = 'MADS_email_ms';
$handler->display->display_options['fields']['MADS_email_ms']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_email_ms']['field'] = 'MADS_email_ms';
$handler->display->display_options['fields']['MADS_email_ms']['label'] = 'Email';
$handler->display->display_options['fields']['MADS_email_ms']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['MADS_email_ms']['alter']['path'] = 'mailto:[MADS_email_ms]';
$handler->display->display_options['fields']['MADS_email_ms']['link_to_object'] = 0;
/* Field: Islandora Solr: MADS_status_ms */
$handler->display->display_options['fields']['MADS_status_ms']['id'] = 'MADS_status_ms';
$handler->display->display_options['fields']['MADS_status_ms']['table'] = 'islandora_solr';
$handler->display->display_options['fields']['MADS_status_ms']['field'] = 'MADS_status_ms';
$handler->display->display_options['fields']['MADS_status_ms']['label'] = 'Status';
$handler->display->display_options['fields']['MADS_status_ms']['link_to_object'] = 0;
/* Filter criterion: Islandora Solr: RELS_EXT_isMemberOfCollection_uri_s */
$handler->display->display_options['filters']['RELS_EXT_isMemberOfCollection_uri_s']['id'] = 'RELS_EXT_isMemberOfCollection_uri_s';
$handler->display->display_options['filters']['RELS_EXT_isMemberOfCollection_uri_s']['table'] = 'islandora_solr';
$handler->display->display_options['filters']['RELS_EXT_isMemberOfCollection_uri_s']['field'] = 'RELS_EXT_isMemberOfCollection_uri_s';
$handler->display->display_options['filters']['RELS_EXT_isMemberOfCollection_uri_s']['value'] = 'info:fedora/islandora:person';

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['path'] = 'solr-scholars';
