app.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
});

app.controller('messageCrtl', function ($scope, $http, $timeout, $location) {
    $http.get('getlist').success(function(data){
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
    $scope.filter = function() {
        $timeout(function() {
            $scope.filteredItems = $scope.filtered.length;
        }, 10);
    };

    /**
     * 删除
     * @param  {[type]} article [description]
     * @return {[type]}         [description]
     */
    $scope.delete = function(message){
        swal({
            title : '确定要删除吗?',
            text : '确定要删除这条留言?',
            type : 'warning',
            showCancelButton : true,
            closeOnConfirm : false,
            confirmButtonText : '确定',
            confirmButtonColor : '#ec6c62'
        },function(){
            var mid = message.mid;
            $http.post('deleteone',{mid : mid}).success(function(data){
                if(data.code == 1){
                    swal("操作成功!", "已成功删除留言", "success");
                    $scope.messages.forEach(function(r,i){
                        if(message.mid == r.mid){
                            $scope.messages.splice(i,1);
                        }
                    });
                }else{
                    swal("OMG", "删除操作失败了!", "error");
                }
            });
        });
    };
});