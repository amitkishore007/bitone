<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


$config['protocol']  = 'smtp';
$config['smtp_host'] = 'ssl://smtp.googlemail.com';
// $config['smtp_host'] = 'mail.zedexcoin.com';
$config['smtp_user'] = 'bitspro.io@gmail.com';
$config['smtp_pass'] = 'Bitspro@bit';
$config['mailtype']  = 'html';

$config['smtp_port'] = 465;
$config['wordwrap']  = TRUE;
$config['starttls']  = TRUE;
$config['crlf']      = "\r\n";
$config['newline']   = "\r\n";

