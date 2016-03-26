app.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
});

app.controller('postCrtl', function ($scope, $http, $timeout, $location) {
    $http.get('getlist').success(function(data){
        $scope.list = data.data;
        $scope.posts = $scope.list.data;
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
    $scope.sort_by = function(predicate) {
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
    };
    $scope.create = function(postData){
        $http.post('addone',{data : postData}).success(function(data){
            if(data.code == 1){
                iosOverlay({
                        text: data.msg,
                        duration: 2e3,
                        icon: "../../Public/images/check.png"
                });
                return false;
            }else{
                iosOverlay({
                    text: data.msg,
                    duration: 2e3,
                    icon: "../../Public/images/cross.png"
                });
                return false;
            }
        });
    };
    /**
     * 删除
     * @param  {[type]} article [description]
     * @return {[type]}         [description]
     */
    $scope.delete = function(post){
        swal({
            title : '确定要删除吗?',
            text : '确定要删除这篇文章?',
            type : 'warning',
            showCancelButton : true,
            closeOnConfirm : false,
            confirmButtonText : '确定',
            confirmButtonColor : '#ec6c62'
        },function(){
            var aid = post.aid;
            $http.post('deleteone',{aid : aid}).success(function(data){
                if(data.code == 1){
                    swal("操作成功!", "已成功删除文章", "success");
                    $scope.posts.forEach(function(r,i){
                        if(post.title == r.title){
                            $scope.posts.splice(i,1);
                        }
                    });
                }else{
                    swal("OMG", "删除操作失败了!", "error");
                }
            });
        });
    };
});