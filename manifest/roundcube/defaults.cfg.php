<?php
$config = array();
$config['db_dsnw'] = 'mysql://elsa_vmail:dc976b8caae4e9d4@localhost/elsa_vmail';
$config['db_dsnr'] = '';
$config['db_dsnw_noread'] = false;
$config['db_persistent'] = false;
$config['db_prefix'] = '';
$config['db_max_allowed_packet'] = null;
$config['debug_level'] = 1;
$config['log_driver'] = 'file';
$config['log_date_format'] = 'd-M-Y H:i:s O';
$config['log_session_id'] = 8;
$config['syslog_id'] = 'roundcube';
$config['syslog_facility'] = LOG_USER;
$config['per_user_logging'] = false;
$config['smtp_log'] = true;
$config['log_logins'] = false;
$config['log_session'] = false;
$config['sql_debug'] = false;
$config['imap_debug'] = false;
$config['ldap_debug'] = false;
$config['smtp_debug'] = false;
$config['memcache_debug'] = false;
$config['apc_debug'] = false;
$config['default_host'] = 'mail.semut.org';
$config['default_port'] = 143;
$config['imap_auth_type'] = null;
$config['imap_conn_options'] = null;
$config['imap_timeout'] = 0;
$config['imap_auth_cid'] = null;
$config['imap_auth_pw'] = null;
$config['imap_delimiter'] = null;
$config['imap_vendor'] = 'dovecot';
$config['imap_ns_personal'] = null;
$config['imap_ns_other']    = null;
$config['imap_ns_shared']   = null;
$config['imap_force_caps'] = false;
$config['imap_force_lsub'] = false;
$config['imap_force_ns'] = false;
$config['imap_skip_hidden_folders'] = false;
$config['imap_disabled_caps'] = array();
$config['imap_log_session'] = false;
$config['imap_cache'] = null;
$config['messages_cache'] = false;
$config['imap_cache_ttl'] = '10d';
$config['messages_cache_ttl'] = '10d';
$config['messages_cache_threshold'] = 50;
$config['smtp_server'] = 'mail.semut.org';
$config['smtp_port'] = 587;
$config['smtp_user'] = '%u';
$config['smtp_pass'] = '%p';
$config['smtp_auth_type'] = '';
$config['smtp_auth_cid'] = null;
$config['smtp_auth_pw'] = null;
$config['smtp_helo_host'] = '';
$config['smtp_timeout'] = 0;
$config['smtp_conn_options'] = null;
$config['ldap_cache'] = 'db';
$config['ldap_cache_ttl'] = '10m';
$config['memcache_hosts'] = null; 
$config['memcache_pconnect'] = true;
$config['memcache_timeout'] = 1;
$config['memcache_retry_interval'] = 15;
$config['redis_hosts'] = array('localhost:6379'); 
$config['memcache_max_allowed_packet'] = '2M';
$config['apc_max_allowed_packet'] = '2M';
$config['enable_installer'] = false;
$config['dont_override'] = array();
$config['disabled_actions'] = array();
$config['advanced_prefs'] = array();
$config['support_url'] = '';
$config['skin_logo'] = null;
$config['auto_create_user'] = true;
$config['user_aliases'] = true;
$config['log_dir'] = RCUBE_INSTALL_PATH . 'logs/';
$config['temp_dir'] = RCUBE_INSTALL_PATH . 'temp/';
$config['temp_dir_ttl'] = '48h';
$config['force_https'] = true;
$config['use_https'] = true;
$config['login_autocomplete'] = 0;
$config['login_lc'] = 2;
$config['login_username_maxlen'] = 1024;
$config['login_password_maxlen'] = 1024;
$config['login_username_filter'] = null;
$config['login_rate_limit'] = 3;
$config['skin_include_php'] = false;
$config['display_version'] = false;
$config['session_lifetime'] = 10;
$config['session_domain'] = '';
$config['session_name'] = null;
$config['session_auth_name'] = null;
$config['session_path'] = null;
$config['session_storage'] = 'db';
$config['ip_check'] = false;
$config['proxy_whitelist'] = array();
$config['referer_check'] = false;
$config['x_frame_options'] = 'sameorigin';
$config['des_key'] = 'rcmail-!24ByteDESkey*Str';
$config['cipher_method'] = 'DES-EDE3-CBC';
$config['username_domain'] = '';
$config['username_domain_forced'] = false;
$config['mail_domain'] = '';
$config['password_charset'] = 'ISO-8859-1';
$config['sendmail_delay'] = 0;
$config['max_message_size'] = '100M';
$config['max_recipients'] = 0;
$config['max_disclosed_recipients'] = 5;
$config['max_group_members'] = 0;
$config['product_name'] = 'Semut Mail';
$config['useragent'] = 'Semut Mail/'.RCMAIL_VERSION;
$config['include_host_config'] = false;
$config['generic_message_footer'] = '';
$config['generic_message_footer_html'] = '';
$config['http_received_header'] = false;
$config['http_received_header_encrypt'] = false;
$config['line_length'] = 72;
$config['send_format_flowed'] = true;
$config['mdn_use_from'] = false;
$config['identities_level'] = 0;
$config['identity_image_size'] = 64;
$config['client_mimetypes'] = null;  # null == default
$config['mime_magic'] = null;
$config['mime_types'] = null;
$config['im_identify_path'] = null;
$config['im_convert_path'] = null;
$config['image_thumbnail_size'] = 240;
$config['contact_photo_size'] = 160;
$config['email_dns_check'] = false;
$config['no_save_sent_messages'] = false;
$config['use_secure_urls'] = false;
$config['assets_path'] = '';
$config['assets_dir'] = '';
$config['plugins'] = array();
$config['message_sort_col'] = '';
$config['message_sort_order'] = 'DESC';
$config['list_cols'] = array('subject', 'status', 'fromto', 'date', 'size', 'flag', 'attachment');
$config['language'] = 'en_US';
$config['date_format'] = 'Y-m-d';
$config['date_formats'] = array('Y-m-d', 'Y/m/d', 'Y.m.d', 'd-m-Y', 'd/m/Y', 'd.m.Y', 'j.n.Y');
$config['time_format'] = 'H:i';
$config['time_formats'] = array('G:i', 'H:i', 'g:i a', 'h:i A');
$config['date_short'] = 'D H:i';
$config['date_long'] = 'Y-m-d H:i';
$config['drafts_mbox'] = 'Drafts';
$config['junk_mbox'] = 'Junk';
$config['sent_mbox'] = 'Sent';
$config['trash_mbox'] = 'Trash';
$config['create_default_folders'] = false;
$config['protect_default_folders'] = true;
$config['show_real_foldernames'] = false;
$config['quota_zero_as_unlimited'] = false;
$config['enable_spellcheck'] = false;
$config['spellcheck_dictionary'] = false;
$config['spellcheck_engine'] = 'googie';
$config['spellcheck_uri'] = '';
$config['spellcheck_languages'] = NULL;
$config['spellcheck_ignore_caps'] = false;
$config['spellcheck_ignore_nums'] = false;
$config['spellcheck_ignore_syms'] = false;
$config['recipients_separator'] = ',';
$config['sig_max_lines'] = 15;
$config['max_pagesize'] = 200;
$config['min_refresh_interval'] = 60;
$config['upload_progress'] = true;
$config['undo_timeout'] = 0;
$config['compose_responses_static'] = array();
$config['address_book_type'] = 'sql';
$config['autocomplete_addressbooks'] = array('sql');
$config['autocomplete_min_length'] = 1;
$config['autocomplete_threads'] = 0;
$config['autocomplete_max'] = 15;
$config['address_template'] = '{street}<br/>{locality} {zipcode}<br/>{country} {region}';
$config['addressbook_search_mode'] = 0;
$config['contactlist_fields'] = array('name', 'firstname', 'surname', 'email');
$config['contact_search_name'] = '{name} <{email}>';
$config['default_charset'] = 'ISO-8859-1';
$config['skin'] = 'larry';
$config['standard_windows'] = false;
$config['mail_pagesize'] = 50;
$config['addressbook_pagesize'] = 50;
$config['addressbook_sort_col'] = 'surname';
$config['addressbook_name_listing'] = 0;
$config['timezone'] = 'Asia/Jakarta';
$config['prefer_html'] = true;
$config['show_images'] = 2;
$config['message_extwin'] = false;
$config['compose_extwin'] = false;
$config['htmleditor'] = 1;
$config['compose_save_localstorage'] = true;
$config['prettydate'] = true;
$config['draft_autosave'] = 300;
$config['layout'] = 'widescreen';
$config['mail_read_time'] = 0;
$config['logout_purge'] = false;
$config['logout_expunge'] = false;
$config['inline_images'] = true;
$config['mime_param_folding'] = 1;
$config['skip_deleted'] = false;
$config['read_when_deleted'] = true;
$config['flag_for_deletion'] = false;
$config['refresh_interval'] = 60;
$config['check_all_folders'] = true;
$config['display_next'] = false;
$config['default_list_mode'] = 'list';
$config['autoexpand_threads'] = 0;
$config['reply_mode'] = 0;
$config['strip_existing_sig'] = true;
$config['show_sig'] = 1;
$config['sig_below'] = false;
$config['sig_separator'] = true;
$config['force_7bit'] = false;
$config['search_mods'] = null;
$config['addressbook_search_mods'] = null;
$config['delete_always'] = false;
$config['delete_junk'] = false;
$config['mdn_requests'] = 0;
$config['mdn_default'] = 0;
$config['dsn_default'] = 0;
$config['reply_same_folder'] = false;
$config['forward_attachment'] = false;
$config['default_addressbook'] = null;
$config['spellcheck_before_send'] = false;
$config['autocomplete_single'] = false;
$config['default_font'] = 'Helvetica';
$config['default_font_size'] = '10pt';
$config['message_show_email'] = false;
$config['reply_all_mode'] = 0;
