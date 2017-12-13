<?php /* Smarty version Smarty-3.1.7, created on 2017-12-13 04:01:54
         compiled from "/var/www/public/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10370314015a30a632082b17-66218333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a11d489d041c26566315f8c140cbb9d6198267d' => 
    array (
      0 => '/var/www/public/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1513024155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10370314015a30a632082b17-66218333',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a30a632096bd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a30a632096bd')) {function content_5a30a632096bd($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>