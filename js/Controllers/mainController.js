//var adsManagementApp = angular.module('adsManagementApp');

adsManagementApp.controller('mainController', function($scope, $http, resetFormService){
    
    // Начальная загрузка элементов формы
    $http.get('index/getlocationlist').success(function(data){
        $scope.location_list = data;
    });
    
    $http.get('index/getcategorylist').success(function(data){
        $scope.category_list = data;
    }); 
    
    $scope.ad = resetFormService.set;
    $scope.buttontext = 'Добавить объявление';
    
// Функция очистки формы
    $scope.resetForm = function(form) {
            form.$rollbackViewValue();
            form.$setPristine(); //Set pristine state
            form.$setUntouched(); //Set state from touched to untouched
        $scope.ad={type:'private',location_id:'Новосибирск', price:0.00, allow_mails:false}; ///// загнать в константу
        $scope.buttontext = 'Добавить объявление';
    };
    
    
    
    // Формируем таблицу
    $http.get('index/getallads').success(function(data){
        $scope.adsstore = data;
    });
    
                                                                            //// все что выше загнать в run
                                                                            
                                                                            
// Сохранение объявления
    
    $scope.response={};
        $scope.save = function (ad, form){
            if(form.$valid){
                $http.post('index.php/ads/save', ad).success(function (answer) {
                    $scope.resetForm(form);
                    $scope.adsstore[answer.data.id] = answer.data;
                    $scope.response = answer;
                     // ЗДЕСЬ ОБРАБОТКА ПОСЛЕ СОХРАНЕНИЯ
                });
            }
        };

    // Удаление объявления
    $scope.removeAd = function (id, form){
        $http({method:'GET', url:'index.php/ads/delete', params:{'id':id}}).success(function(data){
            delete $scope.adsstore[id];
            if($scope.ad.id == id){
                $scope.resetForm(form);
            }
            $scope.response = data; //ИНФОРМЕР
        });
    };
    
    // Показ объявления в форме
    
    $scope.showAd = function (index, adsstore ){
        $scope.ad = angular.copy(adsstore[index]);
        $scope.buttontext = 'Сохранить объявление';
    };

});

        // подумать над веткой ошибок в запросах