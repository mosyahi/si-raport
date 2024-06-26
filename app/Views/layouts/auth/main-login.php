<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
-->
<!-- beautify ignore:start -->
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url() ?>template/assets/" data-template="vertical-menu-template-free"
>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title><?= env('app.name') ?> <?= $title ?></title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?= base_url() ?>template/assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
  href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
  rel="stylesheet"
  />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="<?= base_url() ?>template/assets/vendors/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>template/assets/vendors/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?= base_url() ?>template/assets/vendors/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?= base_url() ?>template/assets/css/demo.css" />

  <!-- Vendorss CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>template/assets/vendors/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="<?= base_url() ?>template/assets/vendors/css/pages/page-auth.css" />
  <!-- Helpers -->
  <script src="<?= base_url() ?>template/assets/vendors/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url() ?>template/assets/js/config.js"></script>
  </head>

  <body>

    <!-- Content -->
    <?= $this->renderSection('content'); ?>
    <!-- End Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendors/js/core.js -->
    <script src="<?= base_url() ?>template/assets/vendors/libs/jquery/jquery.js"></script>
    <script src="<?= base_url() ?>template/assets/vendors/libs/popper/popper.js"></script>
    <script src="<?= base_url() ?>template/assets/vendors/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>template/assets/vendors/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= base_url() ?>template/assets/vendors/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendorss JS -->

    <!-- Main JS -->
    <script src="<?= base_url() ?>template/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
  </html>