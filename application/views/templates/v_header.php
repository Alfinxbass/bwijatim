<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Logo Title -->
    <link rel="icon" href="assets/front/img/logo-bwi.png" type="image/x-icon">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Rubik&display=swap" rel="stylesheet">
    <!-- Backend Template-->
    <link href="<?= base_url('assets/'); ?>back/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>back/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>back/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
    type="text/css">
    
    <!-- Frontend -->
    <link href="<?= base_url('assets/'); ?>front/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"
    type="text/css">
    <link href="<?= base_url('assets/'); ?>front/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css"
    href="<?= base_url('assets/'); ?>front/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css"
    href="<?= base_url('assets/'); ?>front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css"
    href="<?= base_url('assets/'); ?>front/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>front/styles/courses.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>front/styles/courses_responsive.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>front/styles/blog_single.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>front/styles/blog_single_responsive.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>front/styles/responsive.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>front/styles/ticker-style.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>front/styles/flaticon.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>front/styles/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>front/styles/slick.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>front/styles/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>front/styles/slicknav.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>front/styles/magnific-popup.css">
    
    <style>
        .courses {
            width: 100%;
            padding-top: 30px;
            padding-bottom: 100px;
        }

        .blog {
            width: 100%;
            padding-top: 30px;
            padding-bottom: 100px;
        }

        .garis1 {
            
            padding: 20px 40px;
        }

        .garis2  {
            list-style: none;
        }

        .garis3  {
            position: relative;
            display: inline-block;
            margin-right: 0px;
            padding: 0px;
        }

        .garis3 .garis4 {
            color: white;
            text-decoration: none;
            transition: color 0.5s;
        }

        .garis3::after {
            content: '';
            background-color: yellow;
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 2px;
            transition: width .5s;

        }

        .garis3 .garis4:hover  {
            color: white;
        }

        .garis3:hover::after {
            width: 100%;
            background-color: yellow;

        }

        .garis5  {
            position: relative;
            display: inline-block;
        }
        
        .garis5 .garis6 {
            color: yellow;
            text-decoration: none;
            transition: color 1s;
        }

        .garis5::after {
            content: '';
            background-color: yellow;
            position: absolute;
            left: 2px;
            bottom: 0;
            width: 100%;
            height: 2px;
            transition: width .5s;
        }

        .garis5:hover::after {
            width: 100%;
            background-color: yellow;

        }

        .ikon:hover{
            color: rgb(243, 81, 7);
        }
        </style>

<!-- CSS -->
<link rel="stylesheet" href="<?= base_url('assets/'); ?>front/css/style.css">
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>front/styles/bootstrap4/bootstrap.min.css"> -->
<!-- <link rel="stylesheet" href="<?= base_url('assets/') ;?>front/styles/bootstrap.min.css"> -->
<link rel="stylesheet" href="<?= base_url('assets/') ;?>front/styles/style.css">
<link rel="stylesheet" href="<?= base_url('assets/'); ?>front/styles/animate.min.css">

<title><?= $title; ?> | BWI JATIM</title>
</head>

<body>