app.controller('detailCrtl', function ($scope, $http, $timeout, $location) {
    $scope.aid = '';
    var urlparams = $location.search();
    if (urlparams) {
        $scope.aid = urlparams.aid;    
    }
    $http.get('Home/Index/detail?aid='+$scope.aid).success(function(data){
        $scope.list = data.data;
        $scope.posts = $scope.list.data;
    });
});