<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

$config = array();
$config['database'] = array();
$config['database']['user_acc'] = array();
$config['database']['user_acc']['table'] = 'user_accounts';
$config['database']['user_acc']['join'] = 'user_accounts.uacc_id';
$config['database']['user_acc']['columns'] = array();
$config['database']['user_acc']['columns']['id'] = 'uacc_id';
$config['database']['user_acc']['columns']['group_id'] = 'uacc_group_fk';
$config['database']['user_acc']['columns']['email'] = 'uacc_email';
$config['database']['user_acc']['columns']['username'] = 'uacc_username';
$config['database']['user_acc']['columns']['password'] = 'uacc_password';
$config['database']['user_acc']['columns']['ip_address'] = 'uacc_ip_address';
$config['database']['user_acc']['columns']['salt'] = 'uacc_salt';
$config['database']['user_acc']['columns']['activation_token'] = 'uacc_activation_token';
$config['database']['user_acc']['columns']['forgot_password_token'] = 'uacc_forgotten_password_token';
$config['database']['user_acc']['columns']['forgot_password_expire'] = 'uacc_forgotten_password_expire';
$config['database']['user_acc']['columns']['update_email_token'] = 'uacc_update_email_token';
$config['database']['user_acc']['columns']['update_email'] = 'uacc_update_email';
$config['database']['user_acc']['columns']['active'] = 'uacc_active';
$config['database']['user_acc']['columns']['suspend'] = 'uacc_suspend';
$config['database']['user_acc']['columns']['failed_logins'] = 'uacc_fail_login_attempts';
$config['database']['user_acc']['columns']['failed_login_ip'] = 'uacc_fail_login_ip_address';
$config['database']['user_acc']['columns']['failed_login_ban_date'] = 'uacc_date_fail_login_ban';
$config['database']['user_acc']['columns']['last_login_date'] = 'uacc_date_last_login';
$config['database']['user_acc']['columns']['date_added'] = 'uacc_date_added';
$config['database']['user_acc']['custom_columns'] = array();
$config['database']['user_acc']['custom_columns'][0] = 'uacc_chat_lines';
$config['database']['user_group'] = array();
$config['database']['user_group']['table'] = 'user_groups';
$config['database']['user_group']['join'] = 'user_groups.ugrp_id';
$config['database']['user_group']['columns'] = array();
$config['database']['user_group']['columns']['id'] = 'ugrp_id';
$config['database']['user_group']['columns']['name'] = 'ugrp_name';
$config['database']['user_group']['columns']['description'] = 'ugrp_desc';
$config['database']['user_group']['columns']['admin'] = 'ugrp_admin';
$config['database']['user_privileges'] = array();
$config['database']['user_privileges']['table'] = 'user_privileges';
$config['database']['user_privileges']['columns'] = array();
$config['database']['user_privileges']['columns']['id'] = 'upriv_id';
$config['database']['user_privileges']['columns']['name'] = 'upriv_name';
$config['database']['user_privileges']['columns']['description'] = 'upriv_desc';
$config['database']['user_privilege_users'] = array();
$config['database']['user_privilege_users']['table'] = 'user_privilege_users';
$config['database']['user_privilege_users']['columns'] = array();
$config['database']['user_privilege_users']['columns']['id'] = 'upriv_users_id';
$config['database']['user_privilege_users']['columns']['user_id'] = 'upriv_users_uacc_fk';
$config['database']['user_privilege_users']['columns']['privilege_id'] = 'upriv_users_upriv_fk';
$config['database']['user_privilege_groups'] = array();
$config['database']['user_privilege_groups']['table'] = 'user_privilege_groups';
$config['database']['user_privilege_groups']['columns'] = array();
$config['database']['user_privilege_groups']['columns']['id'] = 'upriv_groups_id';
$config['database']['user_privilege_groups']['columns']['group_id'] = 'upriv_groups_ugrp_fk';
$config['database']['user_privilege_groups']['columns']['privilege_id'] = 'upriv_groups_upriv_fk';
$config['database']['user_sess'] = array();
$config['database']['user_sess']['table'] = 'user_login_sessions';
$config['database']['user_sess']['join'] = 'user_login_sessions.usess_uacc_fk';
$config['database']['user_sess']['columns'] = array();
$config['database']['user_sess']['columns']['user_id'] = 'usess_uacc_fk';
$config['database']['user_sess']['columns']['series'] = 'usess_series';
$config['database']['user_sess']['columns']['token'] = 'usess_token';
$config['database']['user_sess']['columns']['date'] = 'usess_login_date';
$config['database']['custom'] = array();
$config['database']['custom']['user_profile'] = array();
$config['database']['custom']['user_profile']['table'] = 'demo_user_profiles';
$config['database']['custom']['user_profile']['primary_key'] = 'upro_id';
$config['database']['custom']['user_profile']['foreign_key'] = 'upro_uacc_fk';
$config['database']['custom']['user_profile']['join'] = 'demo_user_profiles.upro_uacc_fk';
$config['database']['custom']['user_profile']['custom_columns'] = array();
$config['database']['custom']['user_profile']['custom_columns'][0] = 'upro_first_name';
$config['database']['custom']['user_profile']['custom_columns'][1] = 'upro_last_name';
$config['database']['custom']['user_profile']['custom_columns'][2] = 'upro_phone';
$config['database']['custom']['user_profile']['custom_columns'][3] = 'upro_newsletter';
$config['database']['custom']['user_address'] = array();
$config['database']['custom']['user_address']['table'] = 'demo_user_address';
$config['database']['custom']['user_address']['primary_key'] = 'uadd_id';
$config['database']['custom']['user_address']['foreign_key'] = 'uadd_uacc_fk';
$config['database']['custom']['user_address']['join'] = 'demo_user_address.uadd_uacc_fk';
$config['database']['custom']['user_address']['custom_columns'] = array();
$config['database']['custom']['user_address']['custom_columns'][0] = 'uadd_alias';
$config['database']['custom']['user_address']['custom_columns'][1] = 'uadd_recipient';
$config['database']['custom']['user_address']['custom_columns'][2] = 'uadd_phone';
$config['database']['custom']['user_address']['custom_columns'][3] = 'uadd_company';
$config['database']['custom']['user_address']['custom_columns'][4] = 'uadd_address_01';
$config['database']['custom']['user_address']['custom_columns'][5] = 'uadd_address_02';
$config['database']['custom']['user_address']['custom_columns'][6] = 'uadd_city';
$config['database']['custom']['user_address']['custom_columns'][7] = 'uadd_county';
$config['database']['custom']['user_address']['custom_columns'][8] = 'uadd_post_code';
$config['database']['custom']['user_address']['custom_columns'][9] = 'uadd_country';
$config['database']['settings'] = array();
$config['database']['settings']['primary_identity_col'] = 'uacc_username';
$config['database']['settings']['identity_cols'] = array();
$config['database']['settings']['identity_cols'][0] = 'uacc_username';
$config['database']['settings']['search_user_cols'] = array();
$config['database']['settings']['search_user_cols'][0] = 'uacc_email';
$config['database']['settings']['search_user_cols'][1] = 'upro_first_name';
$config['database']['settings']['search_user_cols'][2] = 'upro_last_name';
$config['database']['settings']['date_time'] = '2013-11-30 23:01:51';
$config['sessions'] = array();
$config['sessions']['name'] = 'flexi_auth';
$config['sessions']['user_identifier'] = 'user_identifier';
$config['sessions']['user_id'] = 'user_id';
$config['sessions']['is_admin'] = 'admin';
$config['sessions']['group'] = 'group';
$config['sessions']['privileges'] = 'privileges';
$config['sessions']['logged_in_via_password'] = 'logged_in_via_password';
$config['sessions']['login_session_token'] = 'login_session_token';
$config['sessions']['math_captcha'] = 'math_captcha';
$config['cookies'] = array();
$config['cookies']['user_id'] = 'user_id';
$config['cookies']['remember_series'] = 'remember_series';
$config['cookies']['remember_token'] = 'remember_token';
$config['cookies']['login_session_token'] = 'login_session_token';
$config['cookies']['login_via_password_token'] = 'login_via_password_token';
$config['security'] = array();
$config['security']['validate_login_onload'] = TRUE;
$config['security']['login_session_expire'] = 86400;
$config['security']['extend_login_session'] = TRUE;
$config['security']['logout_user_onclose'] = FALSE;
$config['security']['unset_password_status_onclose'] = FALSE;
$config['security']['user_cookie_expire'] = 1209600;
$config['security']['extend_cookies_on_login'] = TRUE;
$config['security']['min_password_length'] = 8;
$config['security']['valid_password_chars'] = '\.\,\-_ a-z0-9\!\@\#\$';
$config['security']['static_salt'] = '0e087e71d9b6f8faee195f3ccb44621bb993e612';
$config['security']['store_database_salt'] = TRUE;
$config['security']['database_salt_length'] = 10;
$config['security']['expire_forgotten_password'] = 1440;
$config['security']['login_attempt_limit'] = 3;
$config['security']['login_attempt_time_ban'] = 10;
$config['security']['recaptcha_public_key'] = 'UNSET!';
$config['security']['recaptcha_private_key'] = 'UNSET!';
$config['security']['recaptcha_theme'] = 'clean';
$config['security']['recaptcha_language'] = 'en';
$config['settings'] = array();
$config['settings']['auto_increment_username'] = TRUE;
$config['settings']['suspend_new_accounts'] = FALSE;
$config['settings']['account_activation_time_limit'] = 0;
$config['settings']['default_group_id'] = 1;
$config['settings']['privilege_sources'] = array();
$config['settings']['privilege_sources'][0] = 'user';
$config['settings']['privilege_sources'][1] = 'group';
$config['email'] = array();
$config['email']['site_title'] = 'flexi auth';
$config['email']['reply_email'] = 'info@website.com';
$config['email']['email_type'] = 'html';
$config['email']['email_template_directory'] = 'includes/email/';
$config['email']['email_template_activate'] = 'activate_account.tpl.php';
$config['email']['email_template_forgot_password'] = 'forgot_password.tpl.php';
$config['email']['email_template_forgot_password_complete'] = 'new_password.tpl.php';
$config['email']['email_template_update_email'] = 'update_email_address.tpl.php';
$config['messages'] = array();
$config['messages']['delimiters'] = array();
$config['messages']['delimiters']['status_prefix'] = '<p class="status_msg">';
$config['messages']['delimiters']['status_suffix'] = '</p>';
$config['messages']['delimiters']['error_prefix'] = '<p class="error_msg">';
$config['messages']['delimiters']['error_suffix'] = '</p>';
$config['messages']['target_user'] = array();
$config['messages']['target_user']['account_creation_successful'] = 'public';
$config['messages']['target_user']['account_creation_unsuccessful'] = 'public';
$config['messages']['target_user']['account_creation_duplicate_email'] = 'public';
$config['messages']['target_user']['account_creation_duplicate_username'] = 'public';
$config['messages']['target_user']['account_creation_duplicate_identity'] = 'public';
$config['messages']['target_user']['account_creation_insufficient_data'] = 'public';
$config['messages']['target_user']['password_invalid'] = 'public';
$config['messages']['target_user']['password_change_successful'] = 'public';
$config['messages']['target_user']['password_change_unsuccessful'] = 'public';
$config['messages']['target_user']['password_token_invalid'] = 'public';
$config['messages']['target_user']['email_new_password_successful'] = 'public';
$config['messages']['target_user']['email_forgot_password_successful'] = 'public';
$config['messages']['target_user']['email_forgot_password_unsuccessful'] = 'public';
$config['messages']['target_user']['activate_successful'] = 'public';
$config['messages']['target_user']['activate_unsuccessful'] = 'public';
$config['messages']['target_user']['deactivate_successful'] = 'public';
$config['messages']['target_user']['deactivate_unsuccessful'] = 'public';
$config['messages']['target_user']['activation_email_successful'] = 'public';
$config['messages']['target_user']['activation_email_unsuccessful'] = 'public';
$config['messages']['target_user']['account_requires_activation'] = 'public';
$config['messages']['target_user']['account_already_activated'] = 'public';
$config['messages']['target_user']['email_activation_email_successful'] = 'public';
$config['messages']['target_user']['email_activation_email_unsuccessful'] = 'public';
$config['messages']['target_user']['login_successful'] = 'public';
$config['messages']['target_user']['login_unsuccessful'] = 'public';
$config['messages']['target_user']['logout_successful'] = 'public';
$config['messages']['target_user']['login_details_invalid'] = 'public';
$config['messages']['target_user']['captcha_answer_invalid'] = 'public';
$config['messages']['target_user']['login_attempts_exceeded'] = 'public';
$config['messages']['target_user']['login_session_expired'] = 'public';
$config['messages']['target_user']['account_suspended'] = 'public';
$config['messages']['target_user']['update_successful'] = 'public';
$config['messages']['target_user']['update_unsuccessful'] = 'public';
$config['messages']['target_user']['delete_successful'] = 'public';
$config['messages']['target_user']['delete_unsuccessful'] = 'public';
$config['messages']['target_user']['form_validation_duplicate_identity'] = 'public';
$config['messages']['target_user']['form_validation_duplicate_email'] = 'public';
$config['messages']['target_user']['form_validation_duplicate_username'] = 'public';
