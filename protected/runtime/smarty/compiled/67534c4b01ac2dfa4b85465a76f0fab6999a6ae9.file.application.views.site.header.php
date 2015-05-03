<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-03 16:04:49
         compiled from "/var/www/public_html/1/protected/views/site/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18478261275544c34dec3c85-39862881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67534c4b01ac2dfa4b85465a76f0fab6999a6ae9' => 
    array (
      0 => '/var/www/public_html/1/protected/views/site/header.tpl',
      1 => 1430657991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18478261275544c34dec3c85-39862881',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5544c34df29910_19118438',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544c34df29910_19118438')) {function content_5544c34df29910_19118438($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" ng-app="adsManagementApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Диплом № 1 | Доска объявлений</title>

    <!-- Bootstrap -->
   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> 
    <!--link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"-->

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/user.css">
    <!--link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"-->

    <!-- Angular Templates -->
    <?php echo '<script'; ?>
 type="text/ng-template" id="/informer">
        <div id="informer" class="alert alert-dismissible" ng-class ="informer.status" ng-show="informer.show" role="alert">
            <button type="button" class="close_alert" ><span aria-hidden="true">&times;</span></button>
                <div id="informer_text" ng-bind="informer.text"></div>
        </div>
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/ng-template" id="/table_row">
        <tr ng-repeat="(id, ad_show) in adsstore"  ng-class=" ad_show.type == 'corporate' ? 'bg-warning' : '' ">
                    <td ng-bind="ad_show.date | date:'dd-MM-yyyy HH:mm:ss'"></td>
                    <td ng-bind="ad_show.title"></td>
                    <td><a class="btn btn-info btn-xs " ng-click="showAd(id, adsstore)" title="Показать объявление" ><strong>?</strong></a></td>
                    <td ng-bind="ad_show.price | number:2"></td>
                    <td ng-bind="ad_show.seller_name"></td>
                    <td align="center"><a class="btn btn-danger btn-xs" ng-click="removeAd(id, adForm)" title="Удалить объявление" ><strong>X</strong></a></td>
        </tr>
    <?php echo '</script'; ?>
>
  
  </head>
  <body>
<?php }} ?>
