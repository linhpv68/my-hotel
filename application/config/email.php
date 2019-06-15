<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
	'useragent' => 'CodeIgniter',
	'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
	'smtp_host' => 'smtp.googlemail.com',
	'smtp_port' => 465,
	'smtp_user' => 'quanlykhachsan.myhotel@gmail.com',
	'smtp_pass' => 'lsls0pro',
	'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
	'mailtype' => 'text', //plaintext 'text' mails or 'html'
	'smtp_timeout' => '4', //in seconds
	'charset'   => 'utf-8',
	'wordwrap' => TRUE
);
