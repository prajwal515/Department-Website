
var app1 = angular.module('myapp',[]);
app1.controller('add', function ($scope, $http) {
	
 //$scope.add_student=true;
 $scope.add_stud = function(){
	$scope.add_student=true;
	$scope.add_faculty=false;
	$scope.update_notification=false;
	$scope.update_COE=false;
	$scope.update_gallery=false;
 };
 $scope.add_facu = function(){
	$scope.add_faculty=true;
	$scope.add_student=false;
	$scope.update_notification=false;
	$scope.update_COE=false;
	$scope.update_gallery=false;
 };
 $scope.update_noti = function(){
	$scope.add_faculty=false;
	$scope.add_student=false;
	$scope.update_notification=true;
	$scope.update_COE=false;
	$scope.update_gallery=false;
 };
 
 
});