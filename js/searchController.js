    var myApp=angular.module("myModule",[]);
myApp.controller("myController",function($scope,$http){    
 
   $http.get("../../StaylicFrontend/searchresults.json")
    .then(function(response) {
        $scope.salons = response.data;
    });
	
	 $http.get("../../StaylicFrontend/categories.json")
    .then(function(response) {
        $scope.categories = response.data;
    });
	
	 $http.get("../../StaylicFrontend/areas.json")
    .then(function(response) {
      $scope.areas = response.data;
    });
	 	// $http.get('<?php echo site_url('Welcome/get_areas'); ?>').success(function($data){ $scope.areas=$data; };


	//$scope.areas = areas;
	
    });//end of controller
	