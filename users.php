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
                <bold>{{ name }}</bold>, retrouvez ici toutes les personnes enregistrées.</p>
        </div>
        
        <div id="group-board" ng-controller="depensesCtrl">
          
            <!-- GRP -->
            <div class="group">
               
                <select ng-model="query" class="label-grp">
                    <option value="">Tous</option>
                    <option value="{{ key }}" ng-repeat="(key, value) in depenses | groupBy: 'usergroup'">{{ key }}</option>
                </select>
                
                <div class="persons">
                    <!-- USER -->
                    <div class="person" ng-repeat="depense in depenses | filter:{usergroup:query}">
                        
                        <!-- affichage du nom -->
                        <!--<p class="name"><i class="fa fa-exclamation-triangle {{ user.usercolor }}"></i> {{aUsers[depense.Concernes]}}</p>-->
                        <p class="name"><i class="fa fa-exclamation-triangle {{ user.usercolor }}"></i> Nom payeur</p>
                        
                        <!-- affichage des montants à donner et à percevoir -->
                        <div class="flexbox">
                            <!--<p class="total-money-down">{{aUsers[depense.Montant]}} $<i class="fa fa-arrow-up"></i></p>-->
                            <p class="total-money-down">50 $<i class="fa fa-arrow-up"></i></p>
                            <p class="total-money-up">20 $<i class="fa fa-arrow-down"></i></p>
                            
                        </div>
                        
                        <!-- bouton pour supprimer et zoomer sur user - ne vont p'tet pas rester -->
                        <!--<a href="#" class="close"><i class="fa fa-times-circle" aria-hidden="true"></i></a>-->
                        
                        <!-- affichera un tableau permettant de modifier infos du user : nom, couleur -->
                        <a href="#" class="link-person"><i class="fa fa-external-link" aria-hidden="true"></i></a>
                        
                    </div> 
                </div>
                
                <!-- TOTAL DES DETTES DU GROUPE -->
                <!--<div class="total-grp-dette">
                    Total des dettes du groupe
                    <div class="flexbox">
                        <p class="total-money-down">1062 $ <i class="fa fa-arrow-up"></i></p>
                        <p class="total-money-up">402 $ <i class="fa fa-arrow-down"></i></p>
                    </div>
                </div>-->
                
            </div><!-- /group -->
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