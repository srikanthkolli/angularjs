angular.module('formValidationModule', []).controller('validationCon', ['$scope', function($scope){
	$scope.user_name='dfgdfg';
	$scope.user_email='dfgdfgg';
	$scope.formsubmit = function(){
		if($scope.user_name=='')
			$scope.user_name_validation ='User name should not be empty';
		if($scope.user_email=='')
			$scope.user_email_validation = 'User email should not be empty';
	}

}]);