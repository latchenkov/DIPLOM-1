adsManagementApp.controller('mainController', function($scope, $http, $timeout, defaultValue){

// Функция установки начальных значений формы
    $scope.resetFormValue = function (){
        $scope.ad = angular.copy(defaultValue.default_ad);
        $scope.buttontext = defaultValue.button_value;
    };
    
// Функция сброса формы
    $scope.resetForm = function(form) {
            form.$rollbackViewValue();
            form.$setPristine(); //Set pristine state
            form.$setUntouched(); //Set state from touched to untouched
        $scope.resetFormValue();
    };
    
// Функция информера

    $scope.showInformer = function (status, message){
        $scope.informer = {};
        if (status === 'success'){
            $scope.informer.status = 'alert-success';
        }
        else if (status === 'error'){
            $scope.informer.status = 'alert-danger';
        }
        else if (status === 'warning'){
            $scope.informer.status = 'alert-warning';
        }
        $scope.informer.text = message;
        $scope.informer.show = true;
        $timeout(function(){
        $scope.informer.show = false;
        }, 2000);
    };
    
    
    
// Начальная загрузка списков формы
    $http.get('index.php/site/getlocationlist').success(function(data){
        $scope.location_list = data;
    });
    
    $http.get('index.php/site/getcategorylist').success(function(data){
        $scope.category_list = data;
    });
// Формируем таблицу
     $http.get('index.php/site/getallads').success(function(data){
        if (data.status === 'success'){
            $scope.adsstore = data.data;
        }
        else if (data.status === 'warning'){
            $scope.adsstore = {};
            $scope.showInformer(data.status, data.message);
        } 
    });
// Устанавливаем начальные значения формы
    $scope.resetFormValue();
    
    

// Сохранение объявления
    
    $scope.save = function (ad, form){
        if(form.$valid){
            $http.post('index.php/ads/save', ad).success(function (answer) {
                if (answer.status === 'success'){
                $scope.resetForm(form);
                $scope.adsstore[answer.data.id] = answer.data;
                $scope.showInformer (answer.status, answer.message);
            }
            else if (answer.status === 'error'){
                $scope.showInformer (answer.status, answer.message);
            } 
            });
        }
    };

    // Удаление объявления
    $scope.removeAd = function (id, form){
        $http({method:'GET', url:'index.php/ads/delete', params:{'id':id}}).success(function(answer){
            if (answer.status === 'success'){
                delete $scope.adsstore[id];
                    if($scope.ad.id === id){
                        $scope.resetForm(form);
                    }
                $scope.showInformer (answer.status, answer.message);
                    if (Object.getOwnPropertyNames($scope.adsstore).length === 0){
                        answer.status = 'warning';
                        answer.message = 'Внимание! В базе данных нет объявлений.';
                        $timeout(function(){
                            $scope.showInformer (answer.status, answer.message);
                        }, 3000);
                    }
                    else if (answer.status === 'error'){
                        $scope.showInformer (answer.status, answer.message);
                    } 
            }
        });
    };
    
    // Показ объявления в форме
    
    $scope.showAd = function (index, adsstore ){
        $scope.ad = angular.copy(adsstore[index]);
        $scope.buttontext = 'Сохранить объявление';
    };

});