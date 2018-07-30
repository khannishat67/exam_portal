/*$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});*/


/*
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
    $http.get("customers.php")
    .then(function (response) {$scope.names = response.data.records;});
});*/

var app = angular.module('myApp',[]);
    app.controller('reportController',function($scope,$http){
        var request = {
            method: 'get',
            url: 'http://localhost/examTest/includes/report.inc.php',
            dataType: 'json',
            contentType: "application/json"
        };
        $scope.dept="all";
        $scope.sortby="";
        $scope.resultArr = new Array;
        $http(request).success(function(jsonData){
            $scope.resultArr = jsonData;
            $scope.results = $scope.resultArr;
        }).error(function(){});
        $scope.filterExpression = function(result){
            if($scope.dept === "all")
            return true;
            
            return (result.dept_id===$scope.dept);
            
        }
       
    });
    