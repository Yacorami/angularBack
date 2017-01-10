myApp.controller('UserController',function($scope,userFactory,DTOptionsBuilder,DTColumnBuilder,ngDialog){

		$scope.selected={
    "id": 0,
    "name": "Aeora",
    "type": "male",
    "price": 392
  };
		$scope.selected.value="none";
		var vm = this;
        vm.dtOptions = DTOptionsBuilder.fromFnPromise(userFactory.getUsers())
            .withPaginationType('full_numbers');

        vm.dtColumns = [
            DTColumnBuilder.newColumn('id').withTitle('ID').notVisible(),
            DTColumnBuilder.newColumn('firstname').withTitle('First name'),
            DTColumnBuilder.newColumn('lastname').withTitle('Last name')
			];
		$scope.showInstrument= function () {
        ngDialog.open({ template: 'instruments.htm', className: 'ngdialog-theme-default' });
    };
    	userFactory.getUsers().then(function(data){
    		$scope.selected.value="none";
    	})
    	
});

myApp.controller('InstrumentController',function($scope,instrumentFactory,$cacheFactory){


		$scope.instruments = instrumentFactory.getInstruments().then(function(data){

			$scope.instruments=data;
			console.log(data);
		});



		$scope.refreshData = function(){
			window.location.reload(true);
		}
		
            

});