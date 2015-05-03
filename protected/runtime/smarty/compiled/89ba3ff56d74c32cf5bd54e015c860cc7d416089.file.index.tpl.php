<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-03 16:23:08
         compiled from "/var/www/public_html/1/protected/views/site/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3909649205543866b3b0904-61304508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89ba3ff56d74c32cf5bd54e015c860cc7d416089' => 
    array (
      0 => '/var/www/public_html/1/protected/views/site/index.tpl',
      1 => 1430659419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3909649205543866b3b0904-61304508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5543866b59a951_59699551',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5543866b59a951_59699551')) {function content_5543866b59a951_59699551($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("application.views.site.header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container-fluid" >
<div ng-controller="mainController">
    <div ng-include="'/informer'"></div>

<div class="col-sm-4 col-sm-offset-1 " style="padding: 30px;">


    
<form name="adForm" class="form-horizontal" novalidate>
    <input type="hidden"  name="id" value="" ng-model="ad.id">
    <input type="hidden"  name="date" value="" ng-model="ad.date">
	
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-7">
                <div class="radio">
                    <label>
                        <input type="radio" name="type" value="private" ng-model="ad.type" />Частное лицо</label></br>
                    <label>
                        <input type="radio" name="type" value="corporate" ng-model="ad.type" />Компания</label></br>
                </div>
            </div>
        </div>            
        <div class="form-group">
            <label for="inputSeller_name" class="col-sm-5 control-label">Ваше имя</label>
                <div class="col-sm-7">
                    <input type="text" name="seller_name" ng-model="ad.seller_name" class="form-control" id="inputSeller_name" placeholder="Ваше имя" maxlength="40" required >
                </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-5 control-label">Электронная почта</label>
                <div class="col-sm-7">
                    <input type="email" name="email" ng-model="ad.email" class="form-control" id="inputEmail" placeholder="Ваш e-mail"   required >
                </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-7">
                <div class="checkbox">
                    <label>
                        <input  type="checkbox"  ng-model="ad.allow_mails" name="allow_mails" ><small>&nbsp;&nbsp;Я не хочу получать вопросы по объявлению по e-mail</small>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPhone" class="col-sm-5 control-label">Номер телефона</label>
                <div class="col-sm-7">
                    <input type="tel" name="phone" ng-model="ad.phone" class="form-control" id="inputPhone" placeholder="Ваш телефон"   required >
                </div>
        </div>
        <div class="form-group">
            <label for="inputLocation" class="col-sm-5 control-label">Город</label>
                <div class="col-sm-7">
                   <select class="form-control" title="Выберите Ваш город" name="location_id" ng-model="ad.location_id" required  > 
                        <option value="">-- Выберите город --</option>
                        <option ng-repeat="location in location_list" >{{location.location}}</option>
                    </select> 
                </div>
        </div>
        <div class="form-group">
            <label for="inputCategory" class="col-sm-5 control-label">Категория</label>
                <div class="col-sm-7">
                   <select class="form-control" title="Выберите категорию объявления" name="category_id" ng-model="ad.category_id" required>
                        <option value="">-- Выберите категорию --</option>
                            <optgroup ng-repeat="label in category_list | filter:{parent_id:null}" label="{{label.category}}">
                                <option ng-repeat="category in category_list | filter:{parent_id:label.id}" >{{category.category}}</option>
                            </optgroup>
                    </select> 
                </div>
        </div>
        <div class="form-group">
            <label for="inputTitle" class="col-sm-5 control-label">Название объявления</label>
                <div class="col-sm-7">
                    <input type="text" name="title" ng-model="ad.title" class="form-control" id="inputTitle" placeholder="Название объявления"   required >
                </div>
        </div>
        <div class="form-group">
            <label for="inputDesc" class="col-sm-5 control-label">Описание объявления</label>
                <div class="col-sm-7">
                    <textarea name="description" ng-model="ad.description" class="form-control" rows="5" id="inputDesc" placeholder="Текст объявления" required></textarea>
                </div>
        </div>
        <div class="form-group">
            <label for="inputPrice" class="col-sm-5 control-label">Цена</label>
                <div class="col-sm-7">
                    <div class="input-group">
                    <input type="text" name="price" ng-model="ad.price" class="form-control" id="inputPrice" placeholder="Ведите цену"  >
                        <div class="input-group-addon">руб.</div>
                    </div>
                </div>
        </div>
                        
        <div class="form-group">
            <div class="col-sm-5">
                <button id="submit" type="submit" ng-click="save(ad, adForm)" ng-disabled="adForm.$invalid" class="btn btn-success" style="width: 180px"><strong ng-bind="buttontext"></strong></button>
            </div>
            <div class="col-sm-offset-2 col-sm-5">
                <button id="resetForm" type="button" ng-click="resetForm(adForm)" class="btn btn-warning" style="width: 150px"><strong>Очистить форму</strong></button>
            </div>
        </div>
</form>


</div>
     <div class="col-sm-6 " >
        <?php echo $_smarty_tpl->getSubTemplate ("site/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            
    </div>
        
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
