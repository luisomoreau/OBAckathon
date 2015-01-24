<?php
/**
 * Created by PhpStorm.
 * User: Louis
 * Date: 24/01/15
 * Time: 01:02
 */ ?>
<?php @include("utilisateur_templates/header.php"); ?>
<script src="assets-utilisateur/js/routes1.js"></script>

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
