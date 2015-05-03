<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-01 16:02:35
         compiled from "/var/www/public_html/1/protected/views/index/table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:869678555537711f5a8654-05946468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f01d7b7b3e53cc5b52a1df205598bc282bc65980' => 
    array (
      0 => '/var/www/public_html/1/protected/views/index/table.tpl',
      1 => 1430417300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '869678555537711f5a8654-05946468',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5537711f5b3953_50974529',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5537711f5b3953_50974529')) {function content_5537711f5b3953_50974529($_smarty_tpl) {?><h2 class="sub-header" >Все объявления</h2>
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
            <tbody id="tbody">
                <tr ng-repeat="(id, ad_show) in adsstore"  ng-class=" ad_show.type == 'corporate' ? 'bg-warning' : '' ">
                    <td>{{ad_show.date | date:"dd-MM-yyyy HH:mm:ss"}}</td>
                    <td>{{ad_show.title}}</td>
                    <td><a class="btn btn-info btn-xs " ng-click="showAd(id, adsstore)" title="Показать объявление" ><strong>?</strong></a></td>
                    <td>{{ad_show.price | number:2}} руб.</td>
                    <td>{{ad_show.seller_name}}</td>
                    <td align="center"><a class="btn btn-danger btn-xs" ng-click="removeAd(id, adForm)" title="Удалить объявление" ><strong>X{{$index}}</strong></a></td>
                </tr>
            </tbody>
        </table>
    </div><?php }} ?>
