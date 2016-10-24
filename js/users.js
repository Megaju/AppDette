/*app.controller('usersCtrl', function($scope) {*/
    
    /* les personnes enregistrées
    $scope.users = [
        {
            name:'Julien',
            debt:40,
            pickup:75,
            group:'Groupe 1'
        },
        {
            name:'Lise',
            debt:20,
            pickup:0,
            group:'Groupe 1'
        },
        {
            name:'Becca',
            debt:20,
            pickup:40,
            group:'Groupe 1'
        },
        {
            name:'Tyjow',
            debt:400,
            pickup:120,
            group:'Groupe 3'
        },
        {
            name:'Juliette',
            debt:4000,
            pickup:1,
            group:'Groupe 2'
        },
        {
            name:'Val',
            debt:2,
            pickup:4000,
            group:'Groupe 2'
        },
        {
            name:'Roro',
            debt:5,
            pickup:1,
            group:'Par defaut'
        },
        {
            name:'Toto',
            debt:65481,
            pickup:2561,
            group:'Par defaut'
        }
    ]
});
*/
    
app.controller('usersCtrl', function($scope, $http) {
 $http({
     method:'GET',
     url : 'database/users.json'
 }).then(function (response) {
     $scope.users = response.data.records;
     
 } , 
        function errorCallback(response){
     console.log("Failure");
     console.error(response);
 });
});

               
app.controller("userFormController", function ($scope) {
    $scope.addUser = function (user) {
        $scope.users.push(user);
        $scope.user = {};
    };

});