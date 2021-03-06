<?php

return [
    'sidebar_settings' => '帐户设置',
    'sidebar_personalization' => '个性化',
    'sidebar_settings_export' => '导出数据',
    'sidebar_settings_users' => '用户',
    'sidebar_settings_subscriptions' => '订阅',
    'sidebar_settings_import' => '导入数据',
    'sidebar_settings_tags' => '标签管理',
    'sidebar_settings_api' => 'API',
    'sidebar_settings_security' => '安全',

    'export_title' => '导出帐户数据',
    'export_be_patient' => '单击按钮开始导出。处理导出可能需要几分钟时间，请耐心等待, 不要取消按钮。',
    'export_title_sql' => '导出到 SQL',
    'export_sql_explanation' => '以 SQL 格式导出数据使您可以将数据导入到自己的Monica实例中。这只在你有自己的服务器时有效。',
    'export_sql_cta' => '导出到 SQL',
    'export_sql_link_instructions' => '注意: <a href=":url">阅读说明</a>, 了解有关将此文件导入到您的实例的详细信息。',

    'name_order' => '名称顺序',
    'name_order_firstname_first' => '第一名 (John Doe)',
    'name_order_lastname_first' => '姓氏第一 (Doe John)',
    'currency' => '货币',
    'name' => '您的姓名: :name',
    'email' => '电子邮件地址',
    'email_placeholder' => '输入电子邮箱',
    'email_help' => '这是用于登录的电子邮件, 同时也用来接收您的提醒。',
    'timezone' => '时区',
    'layout' => '布局',
    'layout_small' => '最大1200像素宽',
    'layout_big' => '浏览器的全宽度',
    'save' => '更新偏好',
    'delete_title' => '删除您的帐户',
    'delete_desc' => '是否要删除您的帐户？警告: 删除是永久性的, 您的所有数据将永久的删除。',
    'reset_desc' => '您想重置您的帐户吗？这将删除所有联系人以及与之关联的数据。您的帐户将不会被删除。',
    'reset_title' => '删除您的帐户',
    'reset_cta' => '重置帐户',
    'reset_notice' => '您确定要重新设置帐户吗？此操作不能回退。',
    'reset_success' => '您的帐户已成功重置',
    'delete_notice' => '您确定要重新设置帐户吗？此操作不能回退。',
    'delete_cta' => '删除帐户',
    'settings_success' => '偏好设置已更新',
    'locale' => '应用程序中使用的语言',
    'locale_en' => '英文',
    'locale_fr' => '法文',
    'locale_pt' => '葡萄牙文',
    'locale_ru' => '俄文',
    'locale_cs' => '捷克文',
    'locale_it' => '意大利文',
    'locale_de' => '德文',

    'security_title' => '安全',
    'security_help' => '更改您的帐户的安全选项。',
    'password_change' => '更改密码',
    'password_current' => '当前密码',
    'password_current_placeholder' => 'Enter your current password',
    'password_new1' => 'New password',
    'password_new1_placeholder' => 'Enter a new password',
    'password_new2' => 'Confirmation',
    'password_new2_placeholder' => 'Retype the new password',
    'password_btn' => 'Change password',
    '2fa_title' => 'Two Factor Authentication',
    '2fa_enable_title' => 'Enable Two Factor Authentication',
    '2fa_enable_description' => 'Enable Two Factor Authentication to increase security with your account.',
    '2fa_enable_otp' => 'Open up your two factor authentication mobile app and scan the following QR barcode:',
    '2fa_enable_otp_help' => 'If your two factor authentication mobile app does not support QR barcodes, enter in the following code:',
    '2fa_enable_otp_validate' => 'Please validate the new device you\'ve just set:',
    '2fa_enable_success' => 'Two Factor Authentication activated',
    '2fa_enable_error' => 'Error when trying to activate Two Factor Authentication',
    '2fa_disable_title' => 'Disable Two Factor Authentication',
    '2fa_disable_description' => 'Disable Two Factor Authentication for your account. Be careful, your account will not be secured anymore !',
    '2fa_disable_success' => 'Two Factor Authentication disabled',
    '2fa_disable_error' => 'Error when trying to disable Two Factor Authentication',

    'users_list_title' => 'Users with access to your account',
    'users_list_add_user' => 'Invite a new user',
    'users_list_you' => 'That\'s you',
    'users_list_invitations_title' => 'Pending invitations',
    'users_list_invitations_explanation' => 'Below are the people you\'ve invited to join Monica as a collaborator.',
    'users_list_invitations_invited_by' => 'invited by :name',
    'users_list_invitations_sent_date' => 'sent on :date',
    'users_blank_title' => 'You are the only one who has access to this account.',
    'users_blank_add_title' => 'Would you like to invite someone else?',
    'users_blank_description' => 'This person will have the same access that you have, and will be able to add, edit or delete contact information.',
    'users_blank_cta' => 'Invite someone',
    'users_add_title' => 'Invite a new user by email to your account',
    'users_add_description' => 'This person will have the same rights as you do, including inviting other users and deleting them (including you). Therefore, make sure you trust this person.',
    'users_add_email_field' => 'Enter the email of the person you want to invite',
    'users_add_confirmation' => 'I confirm that I want to invite this user to my account. This person will access ALL my data and see exactly what I see.',
    'users_add_cta' => 'Invite user by email',
    'users_error_please_confirm' => 'Please confirm that you want to invite this user before proceeding with the invitation',
    'users_error_email_already_taken' => 'This email is already taken. Please choose another one',
    'users_error_already_invited' => 'You already have invited this user. Please choose another email address.',
    'users_error_email_not_similar' => 'This is not the email of the person who\'ve invited you.',
    'users_invitation_deleted_confirmation_message' => 'The invitation has been successfully deleted',
    'users_invitations_delete_confirmation' => 'Are you sure you want to delete this invitation?',
    'users_list_delete_confirmation' => 'Are you sure to delete this user from your account?',

    'subscriptions_account_current_plan' => 'Your current plan',
    'subscriptions_account_paid_plan' => 'You are on the :name plan. It costs $:price every month.',
    'subscriptions_account_next_billing' => 'Your subscription will auto-renew on <strong>:date</strong>. You can <a href=":url">cancel subscription</a> anytime.',
    'subscriptions_account_free_plan' => 'You are on the free plan.',
    'subscriptions_account_free_plan_upgrade' => 'You can upgrade your account to the :name plan, which costs $:price per month. Here are the advantages:',
    'subscriptions_account_free_plan_benefits_users' => 'Unlimited number of users',
    'subscriptions_account_free_plan_benefits_reminders' => 'Reminders by email',
    'subscriptions_account_free_plan_benefits_import_data_vcard' => 'Import your contacts with vCard',
    'subscriptions_account_free_plan_benefits_support' => 'Support the project on the long run, so we can introduce more great features.',
    'subscriptions_account_upgrade' => '更新您的账户',
    'subscriptions_account_invoices' => '发票',
    'subscriptions_account_invoices_download' => '下载',
    'subscriptions_downgrade_title' => '将您的帐户降级为免费计划',
    'subscriptions_downgrade_limitations' => '自由计划有限制。为了能够降级, 您需要通过以下清单:',
    'subscriptions_downgrade_rule_users' => '您的帐户中必须只有1个用户',
    'subscriptions_downgrade_rule_users_constraint' => '您当前有 <a href=":url">:count个用户</a> 在您的帐户。',
    'subscriptions_downgrade_rule_invitations' => '您不能有挂起的邀请',
    'subscriptions_downgrade_rule_invitations_constraint' => '您当前有 <a href="/settings/users/">:count个等待的邀请</a> 发送给他人。',
    'subscriptions_downgrade_cta' => '降级',
    'subscriptions_upgrade_title' => '升级您的帐户',
    'subscriptions_upgrade_description' => '请在下面输入您的卡详细信息。Monica使用 <a href="https://stripe.com">Stripe</a> 安全地处理您的付款。我们的服务器上没有存储信用卡信息。',
    'subscriptions_upgrade_credit' => '信用卡或借记卡',
    'subscriptions_upgrade_warning' => '您的帐户将立即更新。您可以随时升级、降级或取消。当你取消, 你将永远不会再次收取费用，但是, 您的当月费用将不会被退还。',
    'subscriptions_upgrade_cta' => ' 每月从我的卡里花去$:price',
    'subscriptions_pdf_title' => '您的:name每月订阅',

    'import_title' => '在您的帐户中导入联系人',
    'import_cta' => '上载联系人',
    'import_stat' => '您目前为止导入了:number个文件。',
    'import_result_stat' => 'Uploaded vCard with :total_contacts contacts (:total_imported imported, :total_skipped skipped)',
    'import_view_report' => 'View report',
    'import_in_progress' => 'The import is in progress. Reload the page in one minute.',
    'import_upload_title' => 'Import your contacts from a vCard file',
    'import_upload_rules_desc' => 'We do however have some rules:',
    'import_upload_rule_format' => 'We support <code>.vcard</code> and <code>.vcf</code> files.',
    'import_upload_rule_vcard' => 'We support the vCard 3.0 format, which is the default format for Contacts.app (macOS) and Google Contacts.',
    'import_upload_rule_instructions' => 'Export instructions for <a href="http://osxdaily.com/2015/07/14/export-contacts-mac-os-x/" target="_blank">Contacts.app (macOS)</a> and <a href="http://www.akruto.com/backup-phone-contacts-calendar/how-to-export-google-contacts-to-csv-or-vcard/" target="_blank">Google Contacts</a>.',
    'import_upload_rule_multiple' => 'For now, if your contacts have multiple email addresses or phone numbers, only the first entry will be picked up.',
    'import_upload_rule_limit' => 'Files are limited to 10MB.',
    'import_upload_rule_time' => 'It might take up to 1 minute to upload the contacts and process them. Be patient.',
    'import_upload_rule_cant_revert' => 'Make sure data is accurate before uploading, as you can\'t undo the upload.',
    'import_upload_form_file' => 'Your <code>.vcf</code> or <code>.vCard</code> file:',
    'import_report_title' => 'Importing report',
    'import_report_date' => 'Date of the import',
    'import_report_type' => 'Type of import',
    'import_report_number_contacts' => 'Number of contacts in the file',
    'import_report_number_contacts_imported' => 'Number of imported contacts',
    'import_report_number_contacts_skipped' => 'Number of skipped contacts',
    'import_report_status_imported' => 'Imported',
    'import_report_status_skipped' => 'Skipped',
    'import_vcard_contact_exist' => 'Contact already exists',
    'import_vcard_contact_no_firstname' => 'No firstname (mandatory)',
    'import_blank_title' => 'You haven\'t imported any contacts yet.',
    'import_blank_question' => 'Would you like to import contacts now?',
    'import_blank_description' => 'We can import vCard files that you can get from Google Contacts or your Contact manager.',
    'import_blank_cta' => 'Import vCard',

    'tags_list_title' => 'Tags',
    'tags_list_description' => 'You can organize your contacts by setting up tags. Tags work like folders, but you can add more than one tag to a contact. To add a new tag, add it on the contact itself.',
    'tags_list_contact_number' => ':count contacts',
    'tags_list_delete_success' => 'The tag has been successfully deleted',
    'tags_list_delete_confirmation' => 'Are you sure you want to delete the tag? No contacts will be deleted, only the tag.',
    'tags_blank_title' => 'Tags are a great way of categorizing your contacts.',
    'tags_blank_description' => 'Tags work like folders, but you can add more than one tag to a contact. Go to a contact and tag a friend, right below the name. Once a contact is tagged, go back here to manage all the tags in your account.',

    'api_title' => 'API access',
    'api_description' => 'The API can be used to manipulate Monica\'s data from an external application, like a mobile application for instance.',
    'api_personal_access_tokens' => 'Personal access tokens',
    'api_pao_description' => 'Make sure you give this token to a source you trust - as they allow you to access all your data.',
    'api_oauth_clients' => 'Your Oauth clients',
    'api_oauth_clients_desc' => 'This section lets you register your own OAuth clients.',
    'api_authorized_clients' => 'List of authorized clients',
    'api_authorized_clients_desc' => 'This section lists all the clients you\'ve authorized to access your application. You can revoke this authorization at anytime.',

    'personalization_tab_title' => 'Personalize your account',

    'personalization_title' => 'Here you can find different settings to configure your account. These features are more for "power users" who want maximum control over Monica.',
    'personalization_contact_field_type_title' => 'Contact field types',
    'personalization_contact_field_type_add' => 'Add new field type',
    'personalization_contact_field_type_description' => 'Here you can configure all the different types of contact fields that you can associate to all your contacts. If in the future, a new social network appears, you will be able to add this new type of ways of contacting your contacts right here.',
    'personalization_contact_field_type_table_name' => 'Name',
    'personalization_contact_field_type_table_protocol' => 'Protocol',
    'personalization_contact_field_type_table_actions' => 'Actions',
    'personalization_contact_field_type_modal_title' => 'Add a new contact field type',
    'personalization_contact_field_type_modal_edit_title' => 'Edit an existing contact field type',
    'personalization_contact_field_type_modal_delete_title' => 'Delete an existing contact field type',
    'personalization_contact_field_type_modal_delete_description' => 'Are you sure you want to delete this contact field type? Deleting this type of contact field will delete ALL the data with this type for all your contacts.',
    'personalization_contact_field_type_modal_name' => 'Name',
    'personalization_contact_field_type_modal_protocol' => 'Protocol (optional)',
    'personalization_contact_field_type_modal_protocol_help' => 'Each new contact field type can be clickable. If a protocol is set, we will use it to trigger the action that is set.',
    'personalization_contact_field_type_modal_icon' => 'Icon (optional)',
    'personalization_contact_field_type_modal_icon_help' => 'You can associate an icon with this contact field type. You need to add a reference to a Font Awesome icon.',
    'personalization_contact_field_type_delete_success' => 'The contact field type has been deleted with success.',
    'personalization_contact_field_type_add_success' => 'The contact field type has been successfully added.',
    'personalization_contact_field_type_edit_success' => 'The contact field type has been successfully updated.',

    'personalization_genders_title' => 'Gender types',
    'personalization_genders_add' => 'Add new gender type',
    'personalization_genders_desc' => 'You can define as many genders as you need to. You need at least one gender type in your account.',
    'personalization_genders_modal_add' => 'Add gender type',
    'personalization_genders_modal_question' => 'How should this new gender be called?',
    'personalization_genders_modal_edit' => 'Update gender type',
    'personalization_genders_modal_edit_question' => 'How should this new gender be renamed?',
    'personalization_genders_modal_delete' => 'Delete gender type',
    'personalization_genders_modal_delete_desc' => 'Are you sure you want to delete :name?',
    'personalization_genders_modal_delete_question' => 'You currently have :numberOfContacts contacts who have this gender. If you delete this gender, what gender should those contacts have?',
    'personalization_genders_modal_error' => 'Please choose a valid gender from the list.',

    'personalization_reminder_rule_save' => 'The change has been saved',
    'personalization_reminder_rule_title' => 'Reminder rules',
    'personalization_reminder_rule_line' => ':count days before',
    'personalization_reminder_rule_desc' => 'For every reminder that you set, we can send you an email some days before the event happens. You can toggle those notifications here. Note that those notifications only apply to monthly and yearly reminders.',

    'reminder_time_to_send' => 'Time of the day reminders should be sent',
    'test_for_crowdin' => 'Test for Crowdin',
];
