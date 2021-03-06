app.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
});

app.controller('frontendCrtl', function ($scope, $http, $timeout, $location) {
    $scope.loading = true;
    $http.get('Home/Frontend/getlist').success(function(data){
        $scope.list = data.data;
        $scope.posts = $scope.list.data;
        $scope.currentPage = 1; //current page
        $scope.entryLimit = 5;
        $scope.loading = false;
        $scope.filteredItems = $scope.list.count;
        $scope.totalItems = $scope.list.count;
    });
    $scope.setPage = function(pageNo) {
        $scope.currentPage = pageNo;
    };
    $scope.filter = function() {
        $timeout(function() {
            $scope.filteredItems = $scope.filtered.length;
        }, 10);
    };
    $scope.sort_by = function(predicate) {
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
    };
});