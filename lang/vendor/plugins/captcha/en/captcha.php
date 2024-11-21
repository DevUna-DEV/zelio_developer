<?php

return [
    'settings' => [
        'title' => 'Captcha',
        'description' => 'reCAPTCHA is a free service from Google that helps protect websites from spam and abuse.'."\n"
            .'        <br/><br/> Math Captcha allows you to use simple math problems to test site users to prove their human identity.',
        'panel_description' => 'View and update reCAPTCHA and Math CAPTCHA.',
        'recaptcha_site_key' => 'reCAPTCHA Site Key',
        'recaptcha_secret' => 'reCAPTCHA Secret',
        'enable_recaptcha' => 'Enable reCAPTCHA',
        'recaptcha_score' => 'Score',
        'recaptcha_credential_helper' => 'Obtain your Google reCAPTCHA credentials :link.',
        'recaptcha_credential_helper_here' => 'here',
        'recaptcha_warning' => 'Must use reCAPTCHA in credentials setup. Be careful, wrong settings might interrupt the login system.',
        'hide_badge' => 'Hide reCAPTCHA badge',
        'show_disclaimer' => 'Display reCAPTCHA disclaimer',
        'type' => 'Type',
        'v2_description' => 'V2 (Verify requests with a challenge)',
        'v3_description' => 'V3 (Verify requests with a score)',
        'enable_math_captcha' => 'Enable Math CAPTCHA',
        'enable_for_form' => 'Enable for :form',
    ],
    'numbers' => [
        'Zero',
        'One',
        'Two',
        'Three',
        'Four',
        'Five',
        'Six',
        'Seven',
        'Eight',
        'Nine',
        'Ten',
        'Eleven',
        'Twelve',
    ],
    'operands' => [
        '+' => 'plus',
        '-' => 'minus',
        '*' => 'times',
        '/' => 'divided by',
    ],
    'recaptcha_disclaimer_message_with_link' => 'This site is protected by reCAPTCHA and the Google :privacyLink and :termsLink apply.',
    'privacy_policy' => 'Privacy Policy',
    'terms_of_service' => 'Terms of Service',
    'admin_login_form' => 'Admin login form',
    'admin_forgot_password_form' => 'Admin forgot password form',
    'admin_reset_password_form' => 'Admin reset password form',
];
