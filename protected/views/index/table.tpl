<h2 class="sub-header" >Все объявления</h2>
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
    </div>