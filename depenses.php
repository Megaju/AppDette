<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>App Dette</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- custom scrollbar -->
    <!--<script src="js/jquery.mCustomScrollbar.min.js"></script>-->
    <script src="js/angular.min.js"></script>
    <script src="js/angular-filter.min.js"></script>
    <script src="js/account.js"></script><!-- compte de l'utilisateur -->
    <script src="js/users.js"></script><!-- les gens enregistrés -->
    <!--<script src="js/add-user.js"></script>-->
</head>

<body ng-app="appDette">
    <header>
        <h1>App Dette</h1>
        <div class="logo"></div>
    </header>
    
    <div class="flexbox" ng-controller="usersCtrl">
       
        <!-- NAVIGATION -->
        <?php include('navbar.php'); ?>
        
        <!-- TABLEAU DE BORD -->
        <section>
        <div class="page-description" ng-controller="accountCtrl">
            <p>Bonjour
                <bold>{{ name }}</bold>, retrouvez ici le détail de toutes les dépenses en cours.</p>
        </div>
        
        <div id="group-board" ng-controller="depensesCtrl">
          
            <!-- GRP -->
            <div class="no-padding">
            <div class="group">
               
                <select ng-model="query" class="label-grp">
                    <option value="">Tous</option>
                    <option value="{{ key }}" ng-repeat="(key, value) in depenses | groupBy: 'usergroup'">{{ key }}</option>
                </select>
                
                <!-- UNE DEPENSE -->
                <div class="depense" ng-repeat="depense in depenses">   
                    <p class="payeur"><i class="fa fa-user" aria-hidden="true"></i> Payeur - <i>Nom</i></p>
                    
                    <p class="users"><i class="fa fa-address-book" aria-hidden="true"></i> Personnes concernées - <i>Concerné1, Concerné2, Concerné3</i></p>
                    
                    <p class="calendar"><i class="fa fa-calendar" aria-hidden="true"></i> Date - <i>01/02/1982</i></p>
                    
                    <div class="bloc-description">
                        <p class="label-description"><i class="fa fa-pencil" aria-hidden="true"></i> Description</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>    
                </div>
                
            </div><!-- /group -->
            </div><!-- /no-padding -->
        </div><!-- /group-board -->
    </div><!-- /flexbox -->
        
        </section>
    </div>
    
    <!-- PIED DE PAGE -->
    <footer>
        <p><i class="fa fa-copyright" aria-hidden="true"></i>Julien Malle, 2016.</p>
    </footer>
</body>

</html>