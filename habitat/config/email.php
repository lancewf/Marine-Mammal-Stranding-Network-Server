<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['should_send_email'] = {{cfg.email.should_send}};
$config['email_from_address'] = "{{cfg.email.from_address}}";
$config['email_from_password'] = "{{cfg.email.from_password}}";

$config['email_to_address'] = '{{cfg.email.to_address}}';
$config['email_bcc_address'] = '{{cfg.email.bcc_address}}';
