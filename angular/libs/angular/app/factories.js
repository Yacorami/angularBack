myApp.factory('userFactory',function($http,$q){

	var users=[];

	var factories = {


				getUsers:function()
				{
				
				var deferred = $q.defer();

				 $http.get('data.json')
				 .success(function(data, status) {


					deferred.resolve(data);

           		 })
           		 .error(function() {

                deferred.reject('impossible de récuperer toutes les fids');
            	
            	});

				return deferred.promise;


		}
	};

return factories;

});




myApp.factory('instrumentFactory',function($http,$q){

	var users=[];

	var factories = {


		getInstruments:function()
		{
				
			var deferred = $q.defer();

			$http.get('http://localhost:8383/yacine/public/instruments')
			.success(function(data, status) {


				deferred.resolve(data);

           	})
           	.error(function() {

            deferred.reject('impossible de récuperer toutes les instruments');
            	
        	});

			return deferred.promise;


		}
	};

return factories;

});



