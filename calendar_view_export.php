$view = new view();
$view->name = 'calendar_month';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = 'Calendar Month';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Calendar Monthly';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'date_views_pager';
$handler->display->display_options['style_plugin'] = 'calendar_style';
$handler->display->display_options['style_options']['name_size'] = '3';
$handler->display->display_options['style_options']['mini'] = '0';
$handler->display->display_options['style_options']['with_weekno'] = '0';
$handler->display->display_options['style_options']['multiday_theme'] = '1';
$handler->display->display_options['style_options']['theme_style'] = '1';
$handler->display->display_options['style_options']['max_items'] = '0';
$handler->display->display_options['row_plugin'] = 'calendar_node';
$handler->display->display_options['row_options']['calendar_date_link'] = 'calendar_event';
$handler->display->display_options['row_options']['colors']['calendar_colors_type'] = array(
  'article' => '#ffffff',
  'page' => '#ffffff',
  'calendar_event' => '#ffffff',
  'fellow' => '#ffffff',
  'seminar' => '#ffffff',
  'event' => '#ffffff',
  'slider' => '#ffffff',
);
$handler->display->display_options['row_options']['colors']['calendar_colors_vocabulary'] = array(
  3 => 0,
  2 => 0,
  1 => 0,
);
/* Field: Content: Thumbnail */
$handler->display->display_options['fields']['field_thumbnail']['id'] = 'field_thumbnail';
$handler->display->display_options['fields']['field_thumbnail']['table'] = 'field_data_field_thumbnail';
$handler->display->display_options['fields']['field_thumbnail']['field'] = 'field_thumbnail';
$handler->display->display_options['fields']['field_thumbnail']['hide_alter_empty'] = FALSE;
$handler->display->display_options['fields']['field_thumbnail']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_thumbnail']['settings'] = array(
  'image_style' => '',
  'image_link' => '',
);
/* Field: Content: Date (field_datestamp:delta) */
$handler->display->display_options['fields']['delta']['id'] = 'delta';
$handler->display->display_options['fields']['delta']['table'] = 'field_data_field_datestamp';
$handler->display->display_options['fields']['delta']['field'] = 'delta';
$handler->display->display_options['fields']['delta']['label'] = '';
$handler->display->display_options['fields']['delta']['exclude'] = TRUE;
$handler->display->display_options['fields']['delta']['element_label_colon'] = FALSE;
/* Field: Content: Date */
$handler->display->display_options['fields']['field_datestamp']['id'] = 'field_datestamp';
$handler->display->display_options['fields']['field_datestamp']['table'] = 'field_data_field_datestamp';
$handler->display->display_options['fields']['field_datestamp']['field'] = 'field_datestamp';
$handler->display->display_options['fields']['field_datestamp']['hide_alter_empty'] = FALSE;
$handler->display->display_options['fields']['field_datestamp']['settings'] = array(
  'format_type' => 'long',
  'fromto' => 'both',
  'multiple_number' => '',
  'multiple_from' => '',
  'multiple_to' => '',
);
$handler->display->display_options['fields']['field_datestamp']['group_rows'] = FALSE;
$handler->display->display_options['fields']['field_datestamp']['delta_offset'] = '0';
/* Field: Content: Associated With */
$handler->display->display_options['fields']['field_associatedevent']['id'] = 'field_associatedevent';
$handler->display->display_options['fields']['field_associatedevent']['table'] = 'field_data_field_associatedevent';
$handler->display->display_options['fields']['field_associatedevent']['field'] = 'field_associatedevent';
$handler->display->display_options['fields']['field_associatedevent']['label'] = '';
$handler->display->display_options['fields']['field_associatedevent']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_associatedevent']['element_default_classes'] = FALSE;
$handler->display->display_options['fields']['field_associatedevent']['hide_alter_empty'] = FALSE;
$handler->display->display_options['fields']['field_associatedevent']['type'] = 'taxonomy_term_reference_plain';
$handler->display->display_options['fields']['field_associatedevent']['field_api_classes'] = TRUE;
/* Field: Content: Speaker */
$handler->display->display_options['fields']['field_speaker']['id'] = 'field_speaker';
$handler->display->display_options['fields']['field_speaker']['table'] = 'field_data_field_speaker';
$handler->display->display_options['fields']['field_speaker']['field'] = 'field_speaker';
$handler->display->display_options['fields']['field_speaker']['label'] = '';
$handler->display->display_options['fields']['field_speaker']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_speaker']['element_default_classes'] = FALSE;
$handler->display->display_options['fields']['field_speaker']['hide_alter_empty'] = FALSE;
$handler->display->display_options['fields']['field_speaker']['delta_offset'] = '0';
$handler->display->display_options['fields']['field_speaker']['field_api_classes'] = TRUE;
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['title']['hide_alter_empty'] = FALSE;
/* Field: Content: Display Title */
$handler->display->display_options['fields']['field_display_title']['id'] = 'field_display_title';
$handler->display->display_options['fields']['field_display_title']['table'] = 'field_data_field_display_title';
$handler->display->display_options['fields']['field_display_title']['field'] = 'field_display_title';
$handler->display->display_options['fields']['field_display_title']['label'] = '';
$handler->display->display_options['fields']['field_display_title']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['field_display_title']['alter']['path'] = '/content/[title]';
$handler->display->display_options['fields']['field_display_title']['alter']['replace_spaces'] = TRUE;
$handler->display->display_options['fields']['field_display_title']['alter']['path_case'] = 'lower';
$handler->display->display_options['fields']['field_display_title']['alter']['link_class'] = 'display_title_link';
$handler->display->display_options['fields']['field_display_title']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_display_title']['hide_empty'] = TRUE;
/* Sort criterion: Content: Post date */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'node';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
/* Contextual filter: Content: Date (field_datestamp) */
$handler->display->display_options['arguments']['field_datestamp_value']['id'] = 'field_datestamp_value';
$handler->display->display_options['arguments']['field_datestamp_value']['table'] = 'field_data_field_datestamp';
$handler->display->display_options['arguments']['field_datestamp_value']['field'] = 'field_datestamp_value';
$handler->display->display_options['arguments']['field_datestamp_value']['default_action'] = 'default';
$handler->display->display_options['arguments']['field_datestamp_value']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['field_datestamp_value']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['field_datestamp_value']['summary_options']['items_per_page'] = '25';
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 0;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['path'] = 'calendar-month';
