<nav>
            <ul>
                <li class="add-user" id="myBtn">Ajouter personne<i class="fa fa-user-plus" aria-hidden="true"></i></li>
                
                <!-- The Modal -->
                <div id="myModal" class="modal">
                  <!-- Modal content -->
                  <div class="modal-content" ng-controller="userFormController">
                    <span class="close"><i class="fa fa-close"></i></span>
                    <div class="flexbox">
                    <div>
                        <!-- NAME -->
                        <i class="fa fa-user"></i>
                        <input type="text" placeholder="nom" ng-model="user.username">
                        <!-- GROUP -->
                        <i class="fa fa-users"></i>
                        <input list="groups" type="text" placeholder="groupe" ng-model="user.usergroup">
                        <datalist id="groups">
                            <option value="{{ key }}" ng-repeat="(key, value) in users | groupBy: 'usergroup'">{{ key }}</option>
                        </datalist>
                        <!-- SA DETTE -->
                        <i class="fa fa-arrow-down"></i>
                        <input type="text" placeholder="argent qu'il doit" ng-model="user.debt">
                        <!-- TA DETTE -->
                        <i class="fa fa-arrow-up"></i>
                        <input type="text" placeholder="argent que tu lui doit" ng-model="user.pickup">
                        <!-- PRIORITE -->
                        <p>Importance</p>
                        <div class="radio">
                            
                            <!-- level 0 -->
                            <span><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                <input type="radio" name="priority" value="none" ng-model="user.usercolor"><i class="radio-label">Pas important</i></input>
                            </span>
                            
                            <!-- level 1 -->
                            <span><i class="fa fa-exclamation-triangle low" aria-hidden="true"></i>
                                <input type="radio" name="priority" value="low" model="user.usercolor"><i class="radio-label">Peu d'importance</i></input>
                            </span>
                            
                            <!-- level 2 -->
                            <span><i class="fa fa-exclamation-triangle moderate"  aria-hidden="true"></i>
                                <input type="radio" name="priority" value="moderate" model="user.usercolor"><i class="radio-label">Légèrement important</i></input>
                            </span>
                            
                            <!-- level 3 -->
                            <span><i class="fa fa-exclamation-triangle high" aria-hidden="true"></i>
                                <input type="radio" name="priority" value="high" model="user.usercolor"><i class="radio-label">Important</i></input>
                            </span>
                            
                            <!-- level 4 -->
                            <span><i class="fa fa-exclamation-triangle very-high" aria-hidden="true"></i>
                                <input type="radio" name="priority" value="very-high" model="user.usercolor"><i class="radio-label">Très important</i></input>
                            </span>
                            
                            <!-- level 5 -->
                            <span><i class="fa fa-exclamation-triangle extreme" aria-hidden="true"></i>
                                <input type="radio" name="priority" value="extreme" model="user.usercolor"><i class="radio-label">URGENT!</i></input>
                            </span>
                        </div>
                        <!-- VALIDER -->
                        <input type="submit" value="ajouter" ng-click="addUser(user)">
                    </div>
                   
                    
                    </div><!-- /flexbox -->
                </div>
                </div>
                <script src="js/modalbox.js"></script>
                
                <a href="users.php">
                    <li class="actif">Utilisateurs<i class="fa fa-user" aria-hidden="true"></i></li>
                </a>
                <a href="depenses.php">
                    <li class="actif">Dépenses<i class="fa fa-usd" aria-hidden="true"></i></li>
                </a>
                <a href="groups.php">
                    <li class="actif">Groupes<i class="fa fa-users" aria-hidden="true"></i></li>
                </a>
                <a href="#">
                    <li class="actif">Déconnexion<i class="fa fa-sign-out" aria-hidden="true"></i></li>
                </a>
                <a href="about.php">
                    <li>à propos<i class="fa fa-info-circle" aria-hidden="true"></i></li>
                </a>
            </ul>
        </nav>