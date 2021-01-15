var fetch = angular.module('myapp', []);

fetch.controller('add', ['$scope', '$http', function ($scope, $http) {
 
 // Check username 
 $scope.checkUsername = function(){
 
  $http({
   method: 'post',
   url: 'uname_check.php',
   data: {username:$scope.username}
  }).then(function successCallback(response) {
   $scope.unamestatus = response.data;
  });
 }

 // Set class
 $scope.addClass = function(unamestatus){
  if(unamestatus == 'Available'){
   return 'response exists';
  }else if(unamestatus == 'Not available'){
   return 'response not-exists';
  }else{
	  
   return 'hid';
  }
 }

}]);