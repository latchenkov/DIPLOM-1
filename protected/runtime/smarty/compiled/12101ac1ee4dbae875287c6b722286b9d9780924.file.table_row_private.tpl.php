<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 12:59:30
         compiled from "/var/www/public_html/1/protected/views/index/table_row_private.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161952573455376f3a66ca73-18240242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12101ac1ee4dbae875287c6b722286b9d9780924' => 
    array (
      0 => '/var/www/public_html/1/protected/views/index/table_row_private.tpl',
      1 => 1429696553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161952573455376f3a66ca73-18240242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55376f3a72e305_41121016',
  'variables' => 
  array (
    'ad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55376f3a72e305_41121016')) {function content_55376f3a72e305_41121016($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/public_html/1/protected/vendor/Smarty/plugins/modifier.date_format.php';
?><tr data-id="<?php echo $_smarty_tpl->tpl_vars['ad']->value->id;?>
">
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
