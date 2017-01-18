instruApp.controller('InstrumentController',function($scope,instrumentFactory,categoryFactory,DTOptionsBuilder,DTColumnBuilder,DTInstanceFactory,ngDialog){

    $scope.instruments=null;
    $scope.selectedId = null;

    getInstruments= function(){

        instrumentFactory.get()
        .then(function(data){

            $scope.instruments=data;
            $scope.selectedId=$scope.instruments[0].category.id;
            console.log($scope.instruments[0]);

        })
        .catch(function(fallback) {
            $scope.name += fallback.toUpperCase() + '!!';
        });
    }
    
    getInstruments();


    $scope.categories=null;
    getCategories = function(){

        categoryFactory.get()
        .then(function(data){

            $scope.categories=data;
            console.log($scope.categories);

        })
        .catch(function(fallback) {
            $scope.name += fallback.toUpperCase() + '!!';
        });
    }
    getCategories();

    $scope.deleteInstrument = function(id){
        instrumentFactory.destroy(id)
        .success(function(data) {
            console.log("instrument deleted" + data);
            getInstruments();
        })};

        $scope.openDialog=function()
        {
            ngDialog.open({ template: 'AddInstrument' });
        }

        $scope.idUp=null;
        $scope.nameUp=null;
        $scope.descriptionUp=null;
        $scope.categoryUp=null;

        $scope.openUpdateInstrument=function(id,name,description,category_id)
        {
            $scope.idUp=id;
            $scope.nameUp=name;
            $scope.descriptionUp=description;
            $scope.categoryUp=category_id;
            console.log($scope.idUp);
            ngDialog.open({ 
                template: 'UpdateInstrument',
                scope:$scope
            });
        }


        $scope.storeInstrument = function(InstObject){
            instrumentFactory.save(InstObject)
            .success(function(data) {
                getInstruments();
                console.log(data);
                ngDialog.close();
            })};



            $scope.categories=null;
            $scope.selectedCat = null;

            categoryFactory.get()
            .then(function(data){

                $scope.categories=data;
                $scope.selectedCat = { value: $scope.categories[0] };
                console.log($scope.categories);

            })
            .catch(function(fallback) {
                $scope.name += fallback.toUpperCase() + '!!';
            });

        });
