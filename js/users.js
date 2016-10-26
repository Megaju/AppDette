app.controller('usersCtrl', function($scope, $http) {
 $http({
     method:'GET',
     url : 'database/users.json'
 }).then(function (response) {
     $scope.users = response.data.records;
     $scope.aUsers = [];
  
     
//Generating array aUsers with structure [id => username]
for($user in $scope.users){
    $scope.aUsers[$scope.users[$user].Id] = $scope.users[$user].username;
    }     
 }, 
    function errorCallback(response){
    console.log("Failure");
    console.error(response);
 });
});


//Fonction pour ajout            
app.controller("userFormController", function ($scope) {
    $scope.addUser = function (user) {
        $scope.users.push(user);
        $scope.user = {};
    };

});



function generateDisplayedExpenses(){
    [iduser => {credit, debit}]
}


/* === depense.json === */
app.controller('depensesCtrl', function($scope, $http) {
 $http({
     method:'GET',
     url : 'database/depenses.json'
 }).then(function (response) {
     $scope.depenses = response.data.records;
     generateDisplayedExpenses();
     
 }, 
    function errorCallback(response){
    console.log("Failure");
    console.error(response);
 });
});

               
app.controller("depenseFormController", function ($scope) {
    $scope.addDepense = function (user) {
        $scope.depenses.push(user);
        $scope.depense = {};
    };

});