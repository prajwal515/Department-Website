var app1 = angular.module('myapp', []);

app1.controller('add', ['$scope', '$http', function ($scope, $http) {
 
 // Check username 
 $scope.checkemail = function(){
  $http({
   method: 'post',
   url: 'check.php',
   data: {email:$scope.email}
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
	
 //$scope.add_student=true;       
//  $scope.home_noti=true;


 $scope.show_stud = function(){
	$scope.add_student=true;
	$scope.add_faculty=false;
	$scope.update_notification=false;
	$scope.update_COE=false;
	$scope.update_gallery=false;
        $scope.home_noti=false;
        $scope.update_placement=false;
 };
 $scope.show_facu = function(){
	$scope.add_faculty=true;
	$scope.add_student=false;
	$scope.update_notification=false;
	$scope.update_COE=false;
	$scope.update_gallery=false;
        $scope.home_noti=false;
        $scope.update_placement=false;
 };
 
 $scope.show_hn = function(){
	$scope.add_faculty=false;
	$scope.add_student=false;
	$scope.update_notification=false;
	$scope.update_COE=false;
	$scope.update_gallery=false;
        $scope.home_noti=true;   
        $scope.update_placement=false;
 };
 
 $scope.show_noti = function(){
	$scope.add_faculty=false;
	$scope.add_student=false;
	$scope.update_notification=true;
	$scope.update_COE=false;
	$scope.update_gallery=false;
        $scope.home_noti=false;
        $scope.update_placement=false;
 };
 $scope.show_coe = function(){
	$scope.add_faculty=false;
	$scope.add_student=false;
	$scope.update_notification=false;
	$scope.update_COE=true;
	$scope.update_gallery=false;
        $scope.home_noti=false;  
        $scope.update_placement=false;
 };
 $scope.show_gry = function(){
	$scope.add_faculty=false;
	$scope.add_student=false;
	$scope.update_notification=false;
	$scope.update_COE=false;
	$scope.update_gallery=true;
        $scope.home_noti=false;  
        $scope.update_placement=false;
 };
 $scope.show_placement=function(){
        $scope.add_faculty=false;
	$scope.add_student=false;
	$scope.update_notification=false;
	$scope.update_COE=false;
	$scope.update_gallery=false;
        $scope.home_noti=false;  
        $scope.update_placement=true;
 };
 
 
 
$("#submit").click(function(){
	alert('test');
 });
 
 
/*  $scope.name="";
 $scope.IsDisabled=true;
 $scope.enabledisable=function(){
	 $scope.IsDisabled=$scope.name.length == 0;
	 
 } */
 
 
/*  $scope.add_students = function() {
if ($scope.name == null) {
alert("Enter Your Name");
} else if ($scope.f_name == null) {
alert("Enter Your Father Name");
} else if ($scope.m_name == null) {
alert("Enter Your Mother Name");
} else if ($scope.dob == null) {
alert("Enter Your Date Of Birth");
} else if ($scope.gender == null) {
alert("Enter Your Gender");
} else if ($scope.aadher == null) {
alert("Enter Your Aadher Number");
} else if ($scope.phone_no == null) {
alert("Enter Your Phone Number");
} else if ($scope.quali == null) {
alert("Enter Your Previous Qualification");
} else if ($scope.marks == null) {
alert("Enter Your Previous Degree Marks");
} else if ($scope.branch == null) {
alert("Enter Your Branch");
} else if ($scope.fee == null) {
alert("Enter Fee");
}  else if ($scope.email == null) {
alert("Enter Your Email ID");
} else if ($scope.pass == null) {
alert("Enter Your password");
} else if ($scope.sem == null) {
alert("Enter semester");
} else if ($scope.addr == null) {
alert("Enter Your Address");
}
 */

 /*else {
$http.post(
"reg_student.php", {
'name': $scope.name,
'f_name':$scope.f_name,
'm_name':$scope.m_name,
'dob':$scope.dob,
'gender':$scope.gender,
'aadher':$scope.aadher,
'phone_no':$scope.phone_no,
'quali':$scope.quali,
'marks':$scope.marks,
'branch':$scope.branch,
'fee':$scope.fee,
'email': $scope.email,
'pass': $scope.pass,
'sem':$scope.sem,
'addr': $scope.addr
}
).success(function(data) {
alert(data);
$scope.name = null;
$scope.email = null;
$scope.age = null;
$scope.btnName = "Insert";
$scope.show_data();
});
}*/
/* } */
}]);
