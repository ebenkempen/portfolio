(function(){
 
var app = angular.module("myWork",[]);

app.controller("ProjectController", [ "$http", function($http){
        var storage = this;
        $http.get("https://whispering-gorge-6109.herokuapp.com/myWork.php/projects").success(function(data){ 
            storage.info = data;
            console.log(storage.info);
            console.log(storage.info.projects);
        });
    }]);
})();
