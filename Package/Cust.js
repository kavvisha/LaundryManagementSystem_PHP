var mainApp = angular.module("mainApp", []);

         
         mainApp.controller('CustomerDController', function($scope) {
                    $scope.telp = /^\+?\d{2}[- ]?\d{3}[- ]?\d{5}$/;
                    $scope.noOnly=/^[0-9]*$/;    
                    $scope.cname="";
                    $scope.nc=/^[0-9]{9}[vVxX]$/;
                    $scope.email=""
         });