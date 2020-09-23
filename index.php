<?php

$page = "<!DOCTYPE html><html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">   <title>University of Illinois Springfield - UIS Login Service</title>    <link rel=\"stylesheet\" type=\"text/css\" href=\"./University of Illinois Springfield - UIS Login Service_files/main.css\">        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"https://uisshibb1.uis.edu/idp/favicon.ico\">  </head>  <body>    <div class=\"wrapper\">      <div class=\"container\">        <header>          <img src=\"./University of Illinois Springfield - UIS Login Service_files/titlegradient.jpg\" alt=\"University of Illinois Springfield logo\">        </header>        <h2 align=\"center\">University of Illinois Springfield - UIS Login</h2>        <div class=\"content\">          <div class=\"column one\">            <form action=\"https://uisshibb1.uis.edu/idp/profile/SAML2/Redirect/SSO?execution=e1s1\" method=\"post\">                            <legend>Login to Canvas                </legend>              <p>The web site you requested <b> Canvas </b> requires you to log in using your UIS NetID and password.</p><br>                    <div class=\"form-element-wrapper\">                <label for=\"username\">NetID</label>                <input class=\"form-element form-field\" id=\"username\" name=\"j_username\" type=\"text\" value=\"\">              </div>              <div class=\"form-element-wrapper\">                <label for=\"password\">Password</label>                <input class=\"form-element form-field\" id=\"password\" name=\"j_password\" type=\"password\" value=\"\">              </div>              <div class=\"form-element-wrapper\">                <input type=\"checkbox\" name=\"donotcache\" value=\"1\"> Forget previously saved login credentials              </div>                       <div class=\"form-element-wrapper\">                <button class=\"form-element form-button\" type=\"submit\" name=\"_eventId_proceed\">Login</button>              </div>            </form>            <p align=\"center\">  IDP node: uisshibb01</p>            <p>To ensure log out, you <b>must</b> completely quit/close your web browser.</p><br>                      </div>          <div class=\"column three\">            <ul class=\"list list-help\">              <li class=\"list-help-item\"><a href=\"https://discovery.illinois.edu/discovery/DS\" target=\"_blank\"><span class=\"item-marker\">\u203A</span> Clear your remembered campus</a></li>              <li class=\"list-help-item\"><a href=\"http://go.uis.edu/password\" target=\"_blank\"><span class=\"item-marker\">\u203A</span> Forgot your password?</a></li>              <li class=\"list-help-item\"><a href=\"http://www.uis.edu/informationtechnologyservices/support/\" target=\"_blank\"><span class=\"item-marker\">\u203A</span> Need Help?</a></li>            </ul>          </div>        </div>      </div>      <footer>        <div class=\"container container-footer\">          <p class=\"footer-text\">Copyright \u00A9 University of Illinois at Springfield. One University Plaza. Springfield, Illinois 62703. 217-206-6600</p>        </div>      </footer>    </div>     </body></html>";

echo($page);