<!DOCTYPE html>
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
    <script type="text/ng-template" id="/informer">
        <div id="informer" class="alert alert-dismissible" ng-class ="informer.status" ng-show="informer.show" role="alert">
            <button type="button" class="close_alert" ><span aria-hidden="true">&times;</span></button>
                <div id="informer_text" ng-bind="informer.text"></div>
        </div>
    </script>
    <script type="text/ng-template" id="/table_row">
        <tr ng-repeat="(id, ad_show) in adsstore"  ng-class=" ad_show.type == 'corporate' ? 'bg-warning' : '' ">
                    <td ng-bind="ad_show.date | date:'dd-MM-yyyy HH:mm:ss'"></td>
                    <td ng-bind="ad_show.title"></td>
                    <td><a class="btn btn-info btn-xs " ng-click="showAd(id, adsstore)" title="Показать объявление" ><strong>?</strong></a></td>
                    <td ng-bind="ad_show.price | number:2"></td>
                    <td ng-bind="ad_show.seller_name"></td>
                    <td align="center"><a class="btn btn-danger btn-xs" ng-click="removeAd(id, adForm)" title="Удалить объявление" ><strong>X</strong></a></td>
        </tr>
    </script>
  
  </head>
  <body>
