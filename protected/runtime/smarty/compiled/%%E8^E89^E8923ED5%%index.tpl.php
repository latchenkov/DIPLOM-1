<?php /* Smarty version 2.6.28, created on 2015-04-22 10:42:25
         compiled from /var/www/public_html/1/protected/views/index/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', '/var/www/public_html/1/protected/views/index/index.tpl', 39, false),array('function', 'html_options', '/var/www/public_html/1/protected/views/index/index.tpl', 77, false),array('modifier', 'default', '/var/www/public_html/1/protected/views/index/index.tpl', 39, false),array('modifier', 'replace', '/var/www/public_html/1/protected/views/index/index.tpl', 60, false),)), $this); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Задание № 17</title>

    <!-- Bootstrap -->
   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> 
    <!--link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"-->

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <!--link rel="stylesheet" href="css/user.css"-->
    <link rel="stylesheet" type="text/css" href="css/user.css">
    <!--link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"-->

    
  </head>
  <body>
<?php echo $this->_tpl_vars['this']->test(); ?>

<div class="container-fluid" >
<div id="informer" class="alert alert-warning alert-dismissible"  role="alert">
    <button type="button" class="close_alert" onclick="$('#informer').fadeOut();return false;"><span aria-hidden="true">&times;</span></button>
        <div id="informer_text" ></div>
</div>

<div class="col-sm-4 col-sm-offset-1 " style="padding: 30px;">
<form id="form" class="form-horizontal"  method="post" >
    <input type="hidden" class="clear_form" name="id" value="">
    <input type="hidden" class="clear_form" name="date" value="">
	<div class="form-group">
            <div class="col-sm-offset-5 col-sm-7">
                <div class="radio">
                    <label>
                        <?php echo smarty_function_html_radios(array('class' => 'set_form','name' => 'type','options' => $this->_tpl_vars['radio_id'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['type'])) ? $this->_run_mod_handler('default', true, $_tmp, 'private') : smarty_modifier_default($_tmp, 'private')),'separator' => "</br>"), $this);?>

                    </label>
                </div>
            </div>
        </div>            
        <div class="form-group">
            <label for="inputSeller_name" class="col-sm-5 control-label">Ваше имя</label>
                <div class="col-sm-7">
                    <input type="text" name="seller_name" class="form-control clear_form" id="inputSeller_name" placeholder="Ваше имя" maxlength="40" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['seller_name'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
"  required >
                </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-5 control-label">Электронная почта</label>
                <div class="col-sm-7">
                    <input type="email" name="email" class="form-control clear_form" id="inputEmail" placeholder="Ваш e-mail" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['email'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
"  required >
                </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-7">
                <div class="checkbox">
                    <label>
                        <input class="set_form" type="checkbox" <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['allow_mails'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')))) ? $this->_run_mod_handler('replace', true, $_tmp, 1, 'checked=""') : smarty_modifier_replace($_tmp, 1, 'checked=""')))) ? $this->_run_mod_handler('replace', true, $_tmp, 0, '') : smarty_modifier_replace($_tmp, 0, '')); ?>
 value="1" name="allow_mails" ><small>&nbsp;&nbsp;Я не хочу получать вопросы по объявлению по e-mail</small>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPhone" class="col-sm-5 control-label">Номер телефона</label>
                <div class="col-sm-7">
                    <input type="tel" name="phone" class="form-control clear_form" id="inputPhone" placeholder="Ваш телефон" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['phone'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
"  required >
                </div>
        </div>
        <div class="form-group">
            <label for="inputLocation" class="col-sm-5 control-label">Город</label>
                <div class="col-sm-7">
                   <select class="form-control set_form" title="Выберите Ваш город" name="location_id" required  > 
                        <option value="">-- Выберите город --</option>
                        <option disabled="disabled">-- Города --</option>
                            <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['location'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['location_id'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['location_sel']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['location_sel']))), $this);?>

                    </select> 
                </div>
        </div>
        <div class="form-group">
            <label for="inputCategory" class="col-sm-5 control-label">Категория</label>
                <div class="col-sm-7">
                   <select class="form-control set_form" title="Выберите категорию объявления" name="category_id"  required>
                        <option value="">-- Выберите категорию --</option>
                            <?php $_from = $this->_tpl_vars['label']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                                <optgroup label="<?php echo $this->_tpl_vars['item']; ?>
">
                                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['category'][$this->_tpl_vars['key']],'selected' => ((is_array($_tmp=@$this->_tpl_vars['category_id'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, ''))), $this);?>

                                </optgroup>
                            <?php endforeach; endif; unset($_from); ?>    
                    </select> 
                </div>
        </div>
        <div class="form-group">
            <label for="inputTitle" class="col-sm-5 control-label">Название объявления</label>
                <div class="col-sm-7">
                    <input type="text" name="title" class="form-control clear_form" id="inputTitle" placeholder="Название объявления" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['title'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
"  required >
                </div>
        </div>
        <div class="form-group">
            <label for="inputDesc" class="col-sm-5 control-label">Описание объявления</label>
                <div class="col-sm-7">
                    <textarea name="description" class="form-control clear_form" rows="5" id="inputDesc" placeholder="Текст объявления" required><?php echo ((is_array($_tmp=@$this->_tpl_vars['description'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
</textarea>
                </div>
        </div>
        <div class="form-group">
            <label for="inputPrice" class="col-sm-5 control-label">Цена</label>
                <div class="col-sm-7">
                    <div class="input-group">
                    <input type="text" name="price" class="form-control clear_form" id="inputPrice" placeholder="Ведите цену" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['price'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
" >
                        <div class="input-group-addon">руб.</div>
                    </div>
                </div>
        </div>
                        
        <div class="form-group">
            <div class="col-sm-5">
                <button id="submit" type="submit" class="btn btn-success" style="width: 180px"><strong>Добавить объявление</strong></button>
            </div>
            <div class="col-sm-offset-2 col-sm-5">
                <button id="resetForm" type="button" class="btn btn-warning" style="width: 150px"><strong>Очистить форму</strong></button>
            </div>
        </div>
</form>
</div>
     <div class="col-sm-6 " >
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "index/table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            
    </div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "index/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>