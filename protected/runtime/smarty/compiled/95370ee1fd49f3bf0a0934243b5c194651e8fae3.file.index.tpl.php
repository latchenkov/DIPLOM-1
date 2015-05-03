<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-03 11:40:03
         compiled from "/var/www/public_html/1/protected/views/install/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1185998935544fadd91a039-75628711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95370ee1fd49f3bf0a0934243b5c194651e8fae3' => 
    array (
      0 => '/var/www/public_html/1/protected/views/install/index.tpl',
      1 => 1430642357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1185998935544fadd91a039-75628711',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5544fadec0c838_34911949',
  'variables' => 
  array (
    'baseUrl' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544fadec0c838_34911949')) {function content_5544fadec0c838_34911949($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("application.views.install.header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container" style="width:600px; margin-top: 150px;" >
<form class="form-horizontal"  method="post" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/install.php/install/install" >
    
    <div class="form-group">
    <label class="col-sm-3 control-label">Server name:</label>
        <div class="col-sm-6">
            <input class="form-control" type="text" maxlength="40" value="" name="db_host" required  >
        </div>
    </div>
    <div class="form-group">
    <label class="col-sm-3 control-label">User name:</label>
        <div class="col-sm-6">
            <input class="form-control" type="text" maxlength="40" value="" name="db_user" required >
        </div>
    </div>
    <div class="form-group">
    <label class="col-sm-3 control-label">Password:</label>
        <div class="col-sm-6">
            <input class="form-control" type="text" maxlength="40" value="" name="db_password" >
        </div>
    </div>
    <div class="form-group">
    <label class="col-sm-3 control-label">Database:</label>
        <div class="col-sm-6">
            <input class="form-control" type="text" maxlength="40" value="" name="db_name" required >
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <input class="btn btn-primary" type="submit" value="Install" name="submit" >
        </div>
    </div>
    
</form>
   

<?php if (((($tmp = @$_smarty_tpl->tpl_vars['success']->value)===null||$tmp==='' ? false : $tmp))) {?>
    	<p class="alert alert-success text-center" role="alert">База данных успешно восстановлена из дампа.</br>
            <a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/index.php">Перейти на главную страницу сайта.</a></p>
<?php }?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("install/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
