<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-03 14:56:47
         compiled from "/var/www/public_html/1/protected/views/site/table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15897423085544c34e1c7be9-52596526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d606e5e07958b9add2e25e22d1e7f7d13370998' => 
    array (
      0 => '/var/www/public_html/1/protected/views/site/table.tpl',
      1 => 1430654170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15897423085544c34e1c7be9-52596526',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5544c34e1f1839_12126314',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544c34e1f1839_12126314')) {function content_5544c34e1f1839_12126314($_smarty_tpl) {?><h2 class="sub-header" >Все объявления</h2>
    <div class="table-responsive" style="height: 600px; overflow:auto; ">
        <table id="main" class="table">
           <thead>
                <tr>
                    <th>Дата публикации</th>
                    <th>Название</th>
                    <th></th>
                    <th>Цена</th>
                    <th>Имя автора</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tbody" ng-include="'/table_row'">
                
            </tbody>
        </table>
    </div><?php }} ?>
