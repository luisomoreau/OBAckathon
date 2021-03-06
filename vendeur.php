<!doctype html>
<html lang="en" ng-app="application">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OBAckathon</title>
    <link href="assets-utilisateur/css/app.css" rel="stylesheet" type="text/css">
    <script src="assets-utilisateur/js/app.js"></script>
    <script src="assets-utilisateur/js/routes2.js"></script>
    <script src="assets-utilisateur/js/angular.js"></script>
  </head>

  <style>
    #sub-nav {border-right: 1px solid #d0d0d0;}
    #feed {border-left: 1px solid #d0d0d0;}
    .player {border-top: 1px solid #d0d0d0;}
    .player .menu-bar {margin-bottom: 0;}
  </style>

  <body>
    <div class="grid-frame vertical">
      <div class="dark title-bar">
        <div class="center title"><a ui-sref="home">OBAckathon</a></div>
        <span class="left hide-for-medium"><a zf-toggle="sub-nav">Menu</a></span>
        <span class="right"><a ui-sref="settings">Réglages</a></span>
      </div>
      <div ng-class="['ui-animation' ]" ui-view class="grid-block">
      </div>

    </div>
  </body>
</html>
