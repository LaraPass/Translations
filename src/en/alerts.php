<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Language Lines for all the Alerts.
    |--------------------------------------------------------------------------
    */

    'yay' => 'Yay!',
    'warning' => 'Warning!',
    'sorry' => 'Sorry!',
    'alert' => 'Alert!',
    'welp' => 'Welp!',
    'congrats' => 'Congrats!',
    'unauthorized_access' => 'Unauthorized Access',
    'registration_disabled' => 'Public registrations are disabled.',
    'password_reset' => 'Your master password has been reset. You can now login using your new password.',
    'dashboard' => [
        'validation' => [
            'level_required' => 'Passwor difficulty level is required',
            'size_required' => 'Password size is required',
            'size_numeric' => 'Password size must be a number',
            'dashes_required' => 'Dashes selection is required',
        ],
    ],
    'admin' => [
        'settings' => [
            'validation' => [
                'mysql_dump_path_required' => 'MySQL Dump Path is required.',
                'announcement_msg_required' => 'Announcement Message is required.',
                'announcement_msg_max' => 'The announcement can only be 245 characters long.',
                'default_membership_required' => 'Default Membership Title is required.',
                'max_vaults_required' => 'Number of max Vaults allowed is required.',
                'max_vaults_numeric' => 'No. of Vaults should be a number.',
                'max_folders_required' => 'Number of max Folders allowed is required.',
                'max_folders_numeric' => 'No. of Folders should be a number.',
                'max_sites_required' => 'Number of max Sites allowed is required.',
                'max_sites_numeric' => 'No. of Sites should be a number.',
                'max_notes_required' => 'Number of max Notes allowed is required.',
                'max_notes_numeric' => 'No. of Notes should be a number.',
                'app_email_alerts_required' => 'Email Alerts Selection is required.',
                'app_name_required' => 'Application Name is required.',
                'app_name_min' => 'Application Name should have minimum 3 characters.',
                'app_name_max' => 'Application Name can have maximum 35 characters.',
                'app_description_max' => 'Application Description should have minimum 3 characters.',
                'app_description_max' => 'Application Description can have maximum 191 characters.',
                'app_email_required' => 'Application Email is required.',
                'app_locale_required' => 'Default Language for the App is required.',
                'app_theme_required' => 'Default Theme for the App is required.'
            ],
            'general' => [
                'updated_success' => 'General Settings Updated Successfully.'
            ],
            'automation' => [
                'mysql_dump_update_success' => 'MySQL Dump Path set Successfully.'
            ],
            'email' => [
                'updated_success' => 'Email Settings Updated Successfully.',
                'test_mail_incomplete' => 'You need to add your app email in the General Settings first.',
                'test_mail_success' => 'Test mail sent successfully.'
            ],
            'system' => [
                'maintenance_activated' => 'Maintenance Mode is now Activated.',
                'app_live' => 'Your Application is Now Live.',
                'updated_success' => 'Application settings updated.',
                'private' => 'Your Application is now set to PRIVATE Mode.',
                'public' => 'Your Application is now set to PUBLIC Mode.',
            ],
            'larapass' => [
                'latest_version' => 'You are running the latest version of LaraPass v2.',
                'cannot_verify_license' => 'We are unable to verify your LaraPass v2 license. Please enter your license key to re-activate your app.'
            ],
            'announcement_added' => 'Announcement Added Successfully',
            'announcement_deleted' => 'Announcement Deleted Successfully.',
        ],
        'modules' => [
            'configuration_required' => 'Module cannot be enabled until configured.',
            'recaptcha' => [
                'validation' => [
                    'enabled_required' => 'Google reCaptcha option is required.',
                    'site_key_required' => 'Google reCaptcha site key is required.',
                    'secret_key_required' => 'Google reCaptcha secret key is required.'
                ],
                'enabled' => 'Google reCaptcha module enabled successfully.',
                'disabled' => 'Google reCaptcha Module has been disabled. We recommend enabling it to prevent unwanted spam from bots when in PUBLIC Mode.',
                'updated' => 'Google reCaptcha Settings Updated Successfully.',
            ],
            'tfa' => [
                'enabled' => '2-Step Authentication module enabled successfully.',
                'disabled' => '2-Step Authentication module disabled. We recommend enabling it for increased security.',
                'updated' => '2-Step Authentication configuration updated successfully.',
            ],
            'social' => [
                'validation' => [
                    'github_enabled_required' => 'Github Login selection is required',
                    'github_client_id_required_if' => 'Github Client ID is required when Github Login is Enabled.',
                    'github_client_secret_required_if' => 'Github Client Secret is required when Github Login is Enabled.',
                    'facebook_enabled_required' => 'Facebook Login selection is required',
                    'facebook_client_id_required_if' => 'Facebook Client ID is required when Facebook Login is Enabled.',
                    'facebook_client_secret_required_if' => 'Facebook Client Secret is required when Facebook Login is Enabled.',
                    'twitter_enabled_required' => 'Twitter Login selection is required',
                    'twitter_client_id_required_if' => 'Twitter Client ID is required when Twitter Login is Enabled.',
                    'twitter_client_secret_required_if' => 'Twitter Client Secret is required when Twitter Login is Enabled.',
                ],
                'enabled' => 'Social Logins module enabled successfully.',
                'disabled' => 'Social Logins module has been disabled.',
                'public_mode_required' => 'Social Logins can only be enabled in PUBLIC Mode. Your app is currently in PRIVATE Mode.',
                'updated' => 'Social Login Settings Updated Successfully.',
                'github_login_enabled' => 'Github Login using OAuth has been enabled.',
                'facebook_login_enabled' => 'Facebook Login using OAuth has been enabled.',
                'twitter_login_enabled' => 'Twitter Login using OAuth has been enabled.',
            ],
        ],
        'laravel' => [
            'cache_clear' => 'Core Cache File Cleared.',
            'view_clear' => 'View Cache File Cleared.',
            'route_clear' => 'Route Cache File Cleared.',
            'config_clear' => 'Config Cache File Cleared.',
            'clear_compiled' => 'Bootstrap Compiled Files Cleared.'
        ],
        'pages' => [
            'created_success' => 'New page created successfully.',
            'updated_success' => 'Page Updated Successfully.',
            'visibility' => 'This page will not be visible to users until you Publish it.',
            'invalid_request' => 'Invalid Request.',
            'deleted_success' => 'Page deleted successfully.'
        ],
        'users' => [
            'validation' => [
                'current_email_required' => 'Current Email Address of the User is required.',
                'email_required' => 'New Email Address for the User is required.',
                'email_unique' => 'The new email address already exists in our database.',
                'pin_required' => 'The 4-digit Support PIN of the User is required.',
                'pin_digits' => 'The Support PIN must contain only 4 digits.',
                'support_pin_required' => 'The 4-digit Support PIN of the User is required.',
                'support_pin_digits' => 'The Support PIN must contain only 4 digits.',
                'first_name_required' => 'First Name of the user is required'
            ],
            'current_email_fail' => 'Current Email Address entered is incorrect. Check and try again.',
            'new_email_same' => 'New Email Address cannot be same as the old email address',
            'email_updated' => 'User email address updated. Verification email sent to the email address.',
            'support_pin_incorrect' => 'Incorrect Support PIN. Please check and try again.',
            'support_pin_verified' => 'Support PIN verified succcessfully.',
            'already_banned' => 'User account has already been banned.',
            'banned' => 'User account has been banned.',
            'confirmation_required' => 'Confirmation is required.',
            'not_yet_banned' => 'User account has not been banned yet.',
            'unbanned' => 'User account unbanned.',
            'added_success' => 'User Added Successfully. Verification email sent to the email address used.'
        ]
    ],
    'profile' => [
        'validation' => [
            'first_name_required' => 'First Name is required',
            'first_name_min' => 'First Name must be of minimum 3 characters',
            'first_name_max' => 'First Name can be of maximum 75 characters',
            'last_name_required' => 'Last Name is required',
            'last_name_min' => 'Last Name must be of minimum 3 characters',
            'last_name_max' => 'Last Name can be of maximum 75 characters',
            'country_required' => 'Select a Country.',
            'phone_required' => 'Phone Number is required',
            'dob_required' => 'Date of Birth is required',
            'address_line1_required' => 'Address is required',
            'city_required' => 'City Name is required',
            'zipcode_required' => 'Zipcode/pincode is required',
            'state_required' => 'State Name is required',
            'support_pin_required'  => 'Support PIN is required',
            'support_pin_numeric'  => 'Support PIN can only be numeric',
            'support_pin_digits'  => 'Only 4 digit Support PIN is accepted',
            'rng_level_required'  => 'Random Generator Difficutly is required',
            'rng_level_numeric'  => 'Invalid Random Generator Setting',
            'rng_level_digits'  => 'Invalid Random Generator Setting',
            'password_password' => 'Master password is incorrect.',
            'password_required' => 'Master password is required',
            'password_confirmation_required' => 'Confirm the master password',
            'dob_future' => 'Date of Birth cannot be a future date',
            'master_password_required' => 'Current Master Password is required.',
            'master_password_password' => 'The Master Password does not match our records. Check and try again.',
            'new_password_required' => 'New Master Password is required',
            'new_password_min' => 'New Master Password must contain at least 12 characters.',
            'new_password_confirmed' => 'New Master Password Confirmation does not match.',
            'password_same' => 'New Master Password cannot be same as the Old Master Password.',
            'agree' => 'You need to agree to our Terms and Privacy Policy',
            'captcha_recaptcha' => 'Complete Google reCaptcha to verify you are not a bot.'
        ],
        'master_password_updated' => 'Master password changed successfully',
        'gdpr_limit' => 'You can only request your personal data export once per day.',
        'gdpr_success' => 'Your personal data will be emailed to you shortly.',
        'gdpr_expired' => 'Download link expired. Request a new download link to get the data.',
        'notifications_read' => 'All notifications marked as read.',
        'notifications_cleared' => 'Cleared all notifications.',
        'updated_success' => 'Your profile has been updated successfully.',
        'marked_for_deletion' => 'Marked for Deletion',
        'deleted_on' => 'Your profile has been marked for deletion and will be permanantly deleted on : ',
        'cancelled_deletion' => 'Cancelled Deletion',
        'no_longer_marked' => 'Your account is no longer marked for deletion.',
    ],
    'security' => [
        'validation' => [
            'otp_required' => 'One Time Password is required.',
            'otp_digits' => 'OTP must be exactly 6 digits.',
            'otp_invalid' => 'Invalid Authentication Code / OTP',
            'question_1_required' => 'Question No. 1 is required',
            'answer_1_required' => 'Answer No. 1 is required',
            'question_2_required' => 'Question No. 2 is required',
            'answer_2_required' => 'Answer No. 2 is required',
            'access_key_required' => 'The access key is required.',
            'access_key_size' => 'The access key must be 35 characters including dashes.',
            'access_key_invalid' => 'Invalid Access Key. Please check and try again.',
            'answer_1_invalid' => 'Asnwer for Question No. 1 does not match our records.',
            'answer_2_invalid' => 'Asnwer for Question No. 2 does not match our records.'
        ],
        'two_step_success' => '2-Step Authentication Activated Successfully.',
        'confirmation_required' => 'Deactivation Confirmation is required.',
        'two_step_disabled' => '2-Step Authentication has been disabled. Please re-enable for increased security',
        'two_step_reset' => 'Google Authentication Secret Code has been reset. New QR Code Generated. Scan using an Authenticator App to get started.',
        'setup_questions' => 'Setup Security Questions First',
        'questions_added' => 'Security Questions addedd successfully. 2-Step Authentication is now Available.',
    ],
    'vault' => [
        'validation' => [
            'name_required' => 'Vault Name is required',
            'name_min' => 'Vault Name should contain minimum 3 characters',
            'name_max' => 'Vault Name can contain maximum 14 characters',
            'name_string' => 'Vault Name must be a string of characters',
            'description_required' => 'Vault Description is required',
            'description_min' => 'Vault Description must contain at least 5 charecters',
            'description_max' => 'Vault Description can contain max 245 charecters',
            'icon_required' => 'Vault Icon is required',
            'color_required' => 'Vault Color is required',
            'password_min' => 'Vault Password must contain at least 4 charecters',
            'invalid' => 'Invalid Request. Folder ID is required',
        ],
        'unlocked' => 'Vault Unlocked for the duration of this session.',
        'locked' =>  'Vault has been Locked. Unlock it again to access its contents.',
        'incorrect_password' => 'Incorrect Vault Password. Please check and try again.',
        'general_updated' => 'Vault General Settings Updated Successfully.',
        'password_updated' => 'Vault Password Updated Successfully.',
        'password_invalid' => 'Invalid Vault Password. Please check and try again.',
        'password_removed' => 'Vault Password Removed.',
        'deleted' => 'Vault Deleted Successfully.',
        'created' => 'Vault Created Successfully.',
        'folder_created' => ':folder folder created successfully.',
        'folder_doesnt_exists' => 'Invalid Request. Folder does not exists in this Vault',
        'folder_added_site' => '<b>:site</b> added to <b>:folder</b> successfully.',
        'folder_removed_site' => '<b>:site</b> removed from <b>:folder</b> successfully.',
        'site_added' => ':site added to the :vault vault.',
        'site_updated' => ':site updated successfully.',
        'site_favorited' => ':site is now set as a favorite.',
        'site_unfavorited' => ':site is no longer set as a favorite.',
        'site_deleted' => 'Site has been deleted successfully.',
        'site_moved' => ':site moved to the :vault Vault successfully.',
    ],
    'folder' => [
        'validation' => [
            'folder_name_required' => 'Folder Name is required.',
            'folder_name_min' => 'Folder Name should contain minimum 3 characters.',
            'folder_name_max' => 'Folder Name can contain maximum 14 characters.',
            'folder_icon_required' => 'Folder Icon is required.',
        ],
    ],
    'site' => [
        'validation' => [
            'name_required' => 'Name for the Site is required',
            'name_min' => 'Site name should have minimum 3 characters',
            'name_max' => 'Site name can have maximum 35 characters',
            'link_max' => 'Website Link can have maximum 155 characters',
            'login_id_required' => 'Login ID is required to add a site to the vault',
            'login_id_min' => 'Login ID should contain minimum 3 characters',
            'login_id_max' => 'Login ID can have maximum 155 characters',
            'login_password_required' => 'Password for the site is required',
            'login_password_min' => 'Login Password needs to be of minimum 3 characters',
            'login_password_max' => 'Login Password cannot exceed 155 character limit',
            'additional_info_max' => 'Additional Info cannot exceed 255 character limit',
        ],
        'custom_field_added' => 'New Custom Field Added',
        'custom_field_deleted' => 'Field Deleted Successfully',
    ],
    'installation' => [
        'start_from_step1' => 'Start Installation Process from Step # 1.',
        'requirement_errors' => 'Requirements for installing LaraPass v2 not met. Please check again.',
        'validation' => [
            'license_key_required' => 'The license key / purchase code is required.',
            'license_key_min' => 'The license key must contain min. 15 characters.',
            'license_username_required' => 'Your Envato/Codecanyon Username is required.',
            'license_email_required' => 'Email Address to receive updates is required.',
            'license_invalid' => 'Invalid License Key.'
        ],
        'license' => [
            'verification_success' => 'License Key Verified Successfully. Thankyou for purchasing LaraPass v2',
            'verification_failed' => 'License Key Verification Failed.',
            'response_error' => 'Please check and try again.',
            'connection_error' => 'Sorry, we could not connect to our server to verify your license key. Please wait a while and try again. | Error Code : '
        ],
        'environment' => [
            'setup_completed' => 'Environment Setup Complete. Start DB Migration process.',
            'setup_failed' => 'Failed setting up the environment. Please check all enteries and try again.'
        ] 
    ]
];
