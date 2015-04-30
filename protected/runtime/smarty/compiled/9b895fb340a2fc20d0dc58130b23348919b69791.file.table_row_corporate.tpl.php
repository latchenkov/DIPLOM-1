<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 12:59:59
         compiled from "/var/www/public_html/1/protected/views/index/table_row_corporate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20613551885537711f210345-14739414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b895fb340a2fc20d0dc58130b23348919b69791' => 
    array (
      0 => '/var/www/public_html/1/protected/views/index/table_row_corporate.tpl',
      1 => 1429696574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20613551885537711f210345-14739414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ad' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5537711f2c4d00_40310810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5537711f2c4d00_40310810')) {function content_5537711f2c4d00_40310810($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/public_html/1/protected/vendor/Smarty/plugins/modifier.date_format.php';
?><tr data-id="<?php echo $_smarty_tpl->tpl_vars['ad']->value->id;?>
" class="bg-warning">
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ad']->value->date,"%d:%m:%Y %T");?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['ad']->value->title;?>
</td>
    <td><a class="show btn btn-info btn-xs " title="Показать объявление" ><strong>?</strong></a></td>
    <td><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['ad']->value->price);?>
 руб.</td>
    <td><?php echo $_smarty_tpl->tpl_vars['ad']->value->seller_name;?>
</td>
    <td align="center"><a class="delete btn btn-danger btn-xs " title="Удалить объявление" ><strong>X</strong></a></td>
</tr>
               <?php }} ?>
