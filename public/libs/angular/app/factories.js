instruApp.factory('instrumentFactory',function($http,$q){

	return {
        // get all the Instruments
        get : function() {
        	var deferred = $q.defer();
            $http.get(URL_BASE + '/api/instruments').success(function(data, status) {


				deferred.resolve(data);

           	})
           	.error(function() {

                deferred.reject('impossible de récuperer toutes les instruments');
            	
            });

           	return deferred.promise;
        },

        // save a Instrument (pass in Instrument data)
        save : function(InstrumentData) {
            return $http({
                method: 'POST',
                url: URL_BASE + '/api/instruments',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(InstrumentData)
            });
        },

        // destroy a Instrument
        destroy : function(id) {
            return $http.delete(URL_BASE + '/api/instruments/' + id);
        }
    }

});

instruApp.factory('categoryFactory',function($http,$q){

    return {
        // get all the Instruments
        get : function() {
            var deferred = $q.defer();
            $http.get(URL_BASE + '/api/categories').success(function(data, status) {


                deferred.resolve(data);

            })
            .error(function() {

                deferred.reject('impossible de récuperer toutes les instruments');
                
            });

            return deferred.promise;
        },

    }

});




