app.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
});

app.controller('messageCrtl', function ($scope, $http, $timeout, $location,$window) {
    $http.get('Home/Message/getlist').success(function(data){
        $scope.list = data.data;
        $scope.messages = $scope.list.data;
        $scope.currentPage = 1; //current page
        $scope.entryLimit = 5;
        $scope.filteredItems = $scope.list.count;
        $scope.totalItems = $scope.list.count;
    });
    $scope.setPage = function(pageNo) {
        $scope.currentPage = pageNo;
    };

    $scope.message = function(messageData){
        $http.post('Home/Message/addone',{data : messageData}).success(function(data){
            if(data.code == 1){
                iosOverlay({
                        text: data.msg,
                        duration: 2e3,
                        icon: "../Public/images/check.png"
                });
                $window.location.href = "message";
            }else{
                iosOverlay({
                    text: data.msg,
                    duration: 2e3,
                    icon: "../Public/images/cross.png"
                });
                return false;
            }
        });
    };
});