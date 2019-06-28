<?php

/**
 * Page callback: displays a list of years that have articles.
 *
 * Each year is a link to another page that displays a table of articles
 * published in that year.
 *
 * Solr range faceting is used to generate the list of years. They are sorted
 * from earliest to latest.
 *
 * @return string
 * @throws \Exception
 *
 * @see islandora_google_scholar_menu()
 */
function _islandora_google_scholar_page_years() {
  $solr_field = variable_get('islandora_scholar_google_scholar_publication_date_solr_field', "mods_originInfo_dateIssued_mdt");
  $query = new IslandoraSolrQueryProcessor();
  $query->tag = '_islandora_google_scholar_page_years';
  $query->buildQuery('');
  $query->solrQuery = '';
  $query->internalSolrQuery = variable_get('islandora_solr_base_query', '*:*');
  $query->solrStart = 0;
  $query->solrLimit = 0;
  $exclude_types = variable_get('islandora_scholar_google_scholar_exclude_content_types', 'islandora:collectionCModel');
  if($exclude_types) {
    $exclude_types = array_map('trim', explode(',', $exclude_types));
    foreach($exclude_types as $exclude_type) {
      $query->solrParams['fq'][] = '-RELS_EXT_hasModel_uri_s: "info:fedora/' . $exclude_type . '"';
    }
  }
  $query->solrParams['facet'] = 'true';
  $query->solrParams['facet.mincount'] = '1';
  $query->solrParams['facet.limit'] = '2000';
  $query->solrParams['facet.date'] = [$solr_field];
  $query->solrParams["f.$solr_field.facet.date.start"] = 'NOW/YEAR-20000YEARS';
  $query->solrParams["f.$solr_field.facet.date.end"] = 'NOW/YEAR+20000YEARS';
  $query->solrParams["f.$solr_field.facet.date.gap"] = '+1YEAR';
  $query->solrParams["f.$solr_field.facet.date.sort"] = 'index';

  $query->executeQuery(FALSE);
  if (!empty($query->islandoraSolrResult['facet_counts']['facet_dates'][$solr_field])) {


    $counts = array_diff_key($query->islandoraSolrResult['facet_counts']['facet_dates'][$solr_field], array_flip([
      'gap',
      'start',
      'end',
    ]));
    $buckets = [];
    foreach ($counts as $start => $count) {
      $st = strtotime($start);
      if ($st) {
        $bucket = idate('Y', strtotime($start));
        $link['link'] = '<a' . drupal_attributes([
            'rel' => 'nofollow',
            'href' => url('gs_year/' . $bucket),
          ]) . '>' . $bucket . '</a>';
        $link['count'] = $count;
        $link['link_plus'] = '';
        $link['link_minus'] = '';
        $buckets[] = $link;

      }
    }

    $content = theme('islandora_solr_facet', [
      'buckets' => $buckets,
      'hidden' => FALSE,
      'pid' => '',
    ]);

    $content .= '<div class="weeks">' . l('Articles added or updated in the past two weeks', '/gs_updated') . '</div>';
    return $content;

  }
}

/**
 * Page callback: displays a table of the articles published in a given year.
 *
 * Each row in the table provides two links:
 *   - To the standard islandora object page
 *   - To a page that displays just the title and the contents of the abstract.
 *
 * @param $year
 *
 * @return string
 * @throws \Exception
 *
 * @see islandora_google_scholar_menu()
 */
function _islandora_google_scholar_page_year($year) {

  if (is_int((int) $year) && abs($year) < 99999) {

    drupal_set_title(t('Google Scholar Year: ' . $year));
    $breadcrumb = drupal_get_breadcrumb();
    $breadcrumb[] = l('Google Scholar Years', 'gs_years');
    drupal_set_breadcrumb($breadcrumb);

    $solr_field = variable_get('islandora_scholar_google_scholar_publication_date_solr_field', "mods_originInfo_dateIssued_mdt");

    $start = $year . '-01-01T00:00:00Z';
    $end = gmdate('Y-m-d\TH:i:s\Z', strtotime('+1 year', strtotime($start)));
    $search_query = $solr_field . ':[' . $start . ' TO ' . $end . ']';
    $query = new IslandoraSolrQueryProcessor();
    $query->tag = '_islandora_google_scholar_page_year';

    $query->buildQuery($search_query);
    $query->solrStart = 0;
    $query->solrLimit = 10000;

    $exclude_types = variable_get('islandora_scholar_google_scholar_exclude_content_types', 'islandora:collectionCModel');
    if($exclude_types) {
      $exclude_types = array_map('trim', explode(',', $exclude_types));
      foreach($exclude_types as $exclude_type) {
        $query->solrParams['fq'][] = '-RELS_EXT_hasModel_uri_s: "info:fedora/' . $exclude_type . '"';
      }
    }
    $query->executeQuery();
    $header = [
      'View object',
      'View abstract',
    ];
    $rows = [];
    if (!empty($query->islandoraSolrResult['response']['objects'])) {
      foreach ($query->islandoraSolrResult['response']['objects'] as $result) {
        $rows[] = [
          'link' => l($result['object_label'], $result['object_url'], ['query' => drupal_get_destination()]),
          'abstract' => l('abstract', 'gs_abstract/' . $result['PID'], ['query' => drupal_get_destination()]),
        ];
      }
    }
    $content = theme('table', [
      'header' => $header,
      'rows' => $rows,
      'empty' => t("No objects found."),
    ]);
    $content .= '<div class="weeks">' . l('Articles added or updated in the past two weeks', '/gs_updated') . '</div>';
    return $content;
  }
}

/**
 * Page callback: displays a list of articles created or modified in the past N weeks.
 *
 * @param string $weeks
 *   defaults to 2 weeks.
 *
 * @return string
 * @throws \Exception
 *
 * @see islandora_google_scholar_menu()
 */
function _islandora_google_scholar_updated($weeks = '') {
  $weeks = !empty($weeks) && is_int((int) $weeks) ? (int) $weeks : 2;

  drupal_set_title(format_plural($weeks, 'Added/updated objects in the past week' ,'Added/updated objects in the past @count weeks'));
  $date_filter = gmdate('Y-m-d\TH:i:s\Z', strtotime('-' . $weeks . ' weeks'));

  $breadcrumb = drupal_get_breadcrumb();
  $breadcrumb[] = l('Google Scholar Years', 'gs_years');

  $search_query = 'fgs_lastModifiedDate_dt:[' . $date_filter . ' TO *]';
  $query = new IslandoraSolrQueryProcessor();
  $query->tag = '_islandora_google_scholar_page_weeks';

  $query->buildQuery($search_query);
  $query->solrStart = 0;
  $query->solrLimit = 10000;

  $exclude_types = variable_get('islandora_scholar_google_scholar_exclude_content_types', 'islandora:collectionCModel');
  if($exclude_types) {
    $exclude_types = array_map('trim', explode(',', $exclude_types));
    foreach($exclude_types as $exclude_type) {
      $query->solrParams['fq'][] = '-RELS_EXT_hasModel_uri_s: "info:fedora/' . $exclude_type . '"';
    }
  }
  $query->executeQuery();
  $header = [
    'View object',
    'View abstract',
  ];
  $rows = [];
  if (!empty($query->islandoraSolrResult['response']['objects'])) {
    foreach ($query->islandoraSolrResult['response']['objects'] as $result) {
      $rows[] = [
        'link' => l($result['object_label'], $result['object_url'], ['query' => drupal_get_destination()]),
        'abstract' => l('abstract', 'gs_abstract/' . $result['PID'], ['query' => drupal_get_destination()]),
      ];
    }
  }

  drupal_set_breadcrumb($breadcrumb);

  return theme('table', [
    'header' => $header,
    'rows' => $rows,
    'empty' => t("No objects found."),
  ]);

}

/**
 * Page callback: provides an extremely basic view of a given object, showing
 * just the title and the abstract.
 *
 * @param $pid
 *
 * @return string
 *
 * @see islandora_google_scholar_menu()
 */
function _islandora_google_scholar_abstract($pid) {
  if (is_null($pid)) {
    drupal_not_found();
  }

  $breadcrumb = drupal_get_breadcrumb();
  $breadcrumb[] = l('Google Scholar Years', 'gs_years');

  $solr_abstract_field = variable_get('islandora_scholar_google_scholar_abstract_solr_field', "mods_abstract_ms");
  $pid = preg_replace('#:#', '\\:', $pid);

  $qp = new IslandoraSolrQueryProcessor();
  $query = 'PID:"' . $pid . '"';
  $qp->buildQuery($query);
  $qp->solrParams['fl'] = 'PID, fgs_label_s, ' . $solr_abstract_field;
  $qp->solrStart = 0;
  $qp->solrLimit = 1;
  $qp->executeQuery(FALSE);
  if (!empty($qp->islandoraSolrResult['response']['objects'])) {
    $result = reset($qp->islandoraSolrResult['response']['objects']);
    $label = !empty($result['object_label']) ? $result['object_label'] : $pid;
    drupal_set_title(t('Abstract: @label', ['@label' => $label]));
    $content = !empty($result['solr_doc'][$solr_abstract_field]) ? $result['solr_doc'][$solr_abstract_field] : '';
    if (is_array($content)) {
      $content = '<div class="abstract">' . implode('</div><div class="abstract">', $content) . '</div>';
    }
    else {
      $content = '<div class="no-abstract">' . t('No abstract available for this item.') . '</div>';
    }
    $params = drupal_get_query_parameters();
    if (!empty($params['destination'])) {
      $breadcrumb[] = l('Search', $params['destination']);
    }
    $breadcrumb[] = l($label, $result['object_url']);
    drupal_set_breadcrumb($breadcrumb);

    $content .= '<div class="weeks">' . l('Articles added or updated in the past two weeks', '/gs_updated') . '</div>';
    return $content;

  }
  drupal_not_found();

}