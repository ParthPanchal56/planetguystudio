<?php
require_once __DIR__ . '/../../config/config.php'; // Adjust the path to your config.php if necessary
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean & modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Page Title</title>

    <link rel="apple-touch-icon" href="<?php echo getAssetPath('images/ico', true); ?>apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon"
        href="<?php echo getAssetPath('images/ico', true,true); ?>favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo getAssetPath('css', true,true); ?>vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo getAssetPath('css', true,true); ?>charts/apexcharts.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo getAssetPath('css', true,true); ?>extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo getAssetPath('css', true,true); ?>extensions/tether.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo getAssetPath('css', true); ?>extensions/shepherd-theme-default.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo getAssetPath('css', true,true); ?>bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo getAssetPath('css', true,true); ?>bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo getAssetPath('css', true,true); ?>colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo getAssetPath('css', true,true); ?>components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo getAssetPath('css', true,true); ?>themes/dark-layout.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo getAssetPath('css', true,true); ?>themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo getAssetPath('css', true,true); ?>menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo getAssetPath('css', true,true); ?>colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo getAssetPath('css', true,true); ?>pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="<?php echo getAssetPath('css', true,true); ?>pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="<?php echo getAssetPath('css', true,true); ?>plugins/tour/tour.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo getAssetPath('css', true); ?>style.css">
    <!-- END: Custom CSS-->

</head>