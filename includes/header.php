<?php
require_once("./admin/db/config.php");
if (!isset($title)) {
    $title = "Home";
}
if ($title == "Home") {
    $hide = "hideScroll";
} else {
    $hide = "";
}
// Information for services
$services = [
    "titles" => ["Software Development", "Managed Infrastructure", "Professional Training", "Cloud Services", "Sales"],
    "subtitles" => [
        "Simplify your organization’s application and website development process. We deploy secure apps that are globally accessible and supported across various platforms.",

        "At Ultiblob, our customers come first, we manage simple to complex infrastructure needs. Architecting and implementing solutions using the latest and greatest technologies, leaving companies to focus solely on their core services while we handle the management of IT assets (servers, applications, data security, user security). We have tools to remotely monitor, and support your infrastructure as required. We take 1st to top level support and help you escalate to application vendors when the scope falls outside of our in-house capabilities",
        "Get all your users up to speed with the ever-evolving information technology ecosystem. We provide interactive virtual training sessions from a remote location or in-person on site sessions.",

        "Leverage the most secure public clouds to develop and host your Infrastructure as a Service (IaaS), Platform as a Service (PaaS) and Software as a Service (SaaS) workloads and eliminate the need to build and manage any form of on-premises infrastructure thus switching your operation strategy from CAPEX to OPEX.",
        "Help us understand your hardware and software requirements and we would intelligently recommend, procure and get you up and running."
    ],
    "images" => ["pexels-cottonbro-6804581.jpg", "pexels-jopwell-2422293.jpg", "pexels-pixabay-267507.jpg", "pexels-josh-sorenson-1054397.jpg", "sales.jpg"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="cloud,cloud services,digital,cloud computing,cloud drive,cloud engineer,IT,services,software development,Azure experts, enterprise it, enterprise support, it help, it support, it support and services, make a call from computer, Microsoft 365, office 365, Azure, Microsoft Teams, Linux, Software development, website development, cloud services, monitoring, automation, professional training services, opex, capex, private cloud, public cloud, hybrid cloud, mobile applications, apps, saas, paas, iaas, expert, customer service, multi-session Windows 10, business applications, black owned, windows virtual desktop, hardware, microsoft partner, csp, relationship, IT Support as a Service to reduce IT cost, Colorado IT Company helping organizations succeed with a single recommended cheatsheet, IT Support , digital business , Tech Company , cloud migration, windows virtual desktop, microsoft teams, setup microsoft business voice, data migration, server migration, Colorado IT companies, Companies near me, Broomfield IT companies, Westminster IT companies, Information Protection, united states, Microsoft 365, Storage, Email, Office 365, Business Automation, Datacenter Virtualization, Backup, Disaster Recovery, Azure, Denver IT companies, best it companies, it outsourcing companies, Technical Support, Network Security, it Services, modern technology, Information Technology, Data Backup and Recovery, Cloud Computing, Red Hat , Storage, Network, Firewall, Data Work from home, how to, it Consultants, Reduced Cost, it Security, Hybrid Cloud, Technology Consulting, website design, mobile applications, Cloud Administration">
    <meta name="description"
        content="The world is fast evolving into a remote workforce. At ultiblob we create a work-from-anywhere experience. Remote apps and desktops make it easy for organizations to have a consistent work experience irrespective of the device or its location.">
    <meta name="author" content="Nsude Kenechi">
    <title>Ultiblob ||
        <?= $title; ?>
    </title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="./entypo/style.css">
    <link rel="stylesheet" href="./aos/aos.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="icon" href="./Img/favicon-removebg-preview.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Finlandica&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style1.css">
    <script src="./admin/plugins/sweetalerts/sweetalert2.min.js"></script>
    <style>
        
    </style>
</head>

<body class="<?= $hide; ?>">

    <?php
        if(isset($_GET["mail"])){
            if(isset($_GET["mail"])=="s"){
                ?>
    <script>
    Swal.fire(
        'Email Sent!',
        "We'll get back to you shortly",
        'success'
    )
    </script>
    <?php
            }else{
                ?>
    <script>
    Swal.fire(
        'Email Failed!',
        "Please Try Again",
        'error'
    )
    </script>
    <?php
            }
        }
    ?>

    <div id="" class="p-0" style="overflow-x: hidden;">
    <?php
        if($title!="Home"){
            ?>
            <style>
                header{
                      background: linear-gradient(to bottom right, #28416b, #0c133e, #02091e 80%);
}
            </style>
            <?php
        }
    ?>
        <?php
        if ($title == "Home") {
            ?>
        <!-- Loader Section -->
        <div id="loader">
            <span id="circle">
                <img src="./Img/favicon-removebg-preview.png" data-aos-duration="4000" alt="" class="w-25 h-25 mx-0">
            </span>
            <h1>U</h1>
        </div>
        <!-- /Loader Section -->
        <?php
        }
        ?>

        <!-- HEader Section -->
        <header class="position-relative">
            <?php
            if ($title == "Home") {
                ?>
                <div class="m-0 p-0  w-100 h-100 left-0 position-absolute top-0" style="background-color:rgba(0,0,0,.8);z-index: -1;"></div>
                <video src="./Img/bgVideo.mp4" class="m-0 p-0   left-0 position-absolute top-0" loop muted autoplay="" style="z-index: -2;background-color:black;" id="myVideo"></video>
                
                   <div >
                   
                   </div>
            <div class="sun orange d-none d-lg-block"></div>

            <?php
            }
            ?>
            <div class="">
                <nav class="nav d-md-flex align-items-center  p-0 pb-0">
                    <!-- Desktop Nav -->
                    <div class="container d-none d-md-flex">
                        <ul class=" d-md-flex justify-content-between align-items-center  col-12 px-0 pt-2 pb-0 ">
                            <li><a href="./index.php" class="icon d-flex col-3"><img
                                        src="./Img/favicon-removebg-preview.png" alt="" class="w-50 h-50 me-2">
                                    Ultiblob</a></li>
                            <ul class="d-flex justify-content-between col-6  p-0" id="nav-bar">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="aboutus.php">About</a></li>
                                <li><a href="./program.php">Programs</a></li>
                                <li><a href="./services.php">Services</a></li>
                                <li><a href="https://www.blog.ultiblob.com/blog">Blog</a></li>
                                <li><a href="contactus.php">Contact Us</a></li>
                            </ul>
                            <li><a href="" class="button"><i class="entypo-icon-briefcase me-1"></i>Career</a></a></li>
                        </ul>
                    </div>

                    <!-- Mobile Nav -->

                    <div class="container px-0  d-block d-md-none ">


                        <ul
                            class="nav-pills d-flex  justify-content-between align-items-center px-3 col-12 px-0 pt-2 pb-0 ">

                            <li class="nav-item py-4">
                                <a class=" m-0  text-white  rounded-3 " id="menu-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </li>
                            <li><a href="./index.php" class="icon d-flex col-3"><img
                                        src="./Img/favicon-removebg-preview.png" alt="" class="w-75 h-75 me-1"> <span
                                        class="fs-6">Ultiblob</span></a></li>

                        </ul>
                        <ul class=" menusLeft p-0 position-fixed left-0 top-0 h-100 col-12" style="z-index: 100;"
                            id="menus">
                            <div class="bg-white col-10 h-100 py-3">
                                <ul class="px-0 align-items-center d-flex justify-content-between">
                                    <li class="p-3"><a href="./index.php" class="icon d-flex col-6"><img
                                                src="./Img/favicon-removebg-preview.png" alt="" class="w-100 h-100 ">
                                        </a></li>
                                    <!-- <li class="p-3"><i class="entypo-icon-cross fs-1 px-3 text-dark" id="cancelMenu"></i></li> -->
                                    <li class="p-3" id="cancelMenu">
                                        <span></span>
                                        <span></span>
                                    </li>

                                </ul>
                                <ul class="d-block  p-0 " id="nav-bar">
                                    <li class="p-3"><a href="index.php"
                                            class="fs-4 p-2  text-dark d-block col-12 border-primary">Home</a></li>
                                    <li class="p-3"><a href="aboutus.php"
                                            class="fs-4 p-2 text-dark  d-block col-12">About</a></li>
                                    <li class="p-3"><a href="./program.php"
                                            class="fs-4 p-2 text-dark  d-block col-12">Programs</a></li>
                                    <li class="p-3"><a href="./services.php"
                                            class="fs-4 p-2 text-dark  d-block col-12">Services</a></li>
                                    <li class="p-3"><a href="https://www.blog.ultiblob.com/blog"
                                            class="fs-4 p-2 text-dark  d-block col-12">Blog</a></li>
                                    <li class="p-3"><a href="contactus.php"
                                            class="fs-4 p-2 text-dark  d-block col-12">Contact Us</a></li>
                                    <li class="p-3"><a href="" class="fs-4 p-2 text-dark  d-block col-12"><i
                                                class="entypo-icon-briefcase me-1"></i>Career</a></a></li>
                                </ul>
                            </div>


                        </ul>
                    </div>
                </nav>
                <?php
                if ($title == "Home") {
                    ?>
                <section class="py-5">
                    <div class="container ">
                 
                        <div class=" row align-items-center px-3 px-md-0">
                     
                            <div id="headerText" class="col-12 col-md-6 ">
                                <div>
                                    <p id="text-1" class=" m-0 p-0 ">Join the revolution</p>
                                    <h1 class="h1-textshadow my-2 my-md-3">Ultiblob</h1>
                                    <p id="text-2" class="">The first diasporian community of Microsoft technology
                                        experts</p>
                                    <p id="text-3" class="mb-4 ">We provide high availability for business critical
                                        applications!<br> Integrating, migrating and managing workloads across
                                        <b>COMPLEX</b> on premises and cloud platforms
                                    </p>
                                    <div class="row gap-4">
                                        <a href="./contactus.php"
                                            class="button d-block col-md-5 text-center me-0 me-md-4">Get
                                            Started</a>
                                        <a href="./aboutus.php" class="button-1 d-block col-md-5 text-center">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <div id="headerImg" class="col-12 col-md-6 d-none d-md-block">
                                <div id="img-con" class="">
                                    <!-- <img src="./Img/original-2614b1a5b17e13824c57fdef108bff95-removebg-preview.png"
                                        alt="" class="animateLogo"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
                } else {
                    if (!isset($_GET["title"]) && !isset($_GET["service"])) {

                        ?>
                <section class="py-5 text-center" data-aos="fade-up" data-aos-duration="4000">
                    <div class="container py-5 ">
                        <h1 class=" text-white">
                            <?= $title; ?>
                        </h1>
                        <div>
                            <span class="text-white ">
                                <a href="" class="">Home</a>
                                <span class="mx-2">:</span>
                                <span class="text-white">
                                    <?= $title; ?>
                                </span>
                            </span>

                        </div>
                    </div>
                </section>
                <?php
                    } else {
                        if (isset($_GET["title"])) {
                            $title = str_replace("-", " ", $_GET["title"]);
                            $query = "SELECT * FROM create_blog WHERE blog_title='$title'";
                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($result);
                            $type = "Blog";
                        } else {
                            $title = $_GET["service"];
                            $type = "Services";
                        }

                        ?>
                <section class="py-5 text-left">
                    <div class="container py-5 ">
                        <h1 class="fs-4 text-primary" data-aos="fade-up" data-aos-duration="4000">
                            <?= $type; ?>
                        </h1>
                        <a href="">
                            <h1 data-aos="fade-right" data-aos-duration="4000" class="my-4 text-white"
                                style="font-size: 3rem; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                                <?= $title; ?>
                            </h1>
                        </a>
                        <?php
                                if (isset($_GET["title"])) {
                                    ?>
                        <div class="">
                            <div data-aos="fade-left" data-aos-duration="4000"
                                class="paragraph col-4 text-white col-12 col-md-5 d-flex align-items-center justify-content-between">
                                <div>
                                    <i class="entypo-icon-user"></i>
                                    <span>
                                        <?= $row["blog_admin"]; ?>
                                    </span>
                                </div>

                                <div>
                                    <i class="entypo-icon-calendar"></i>
                                    <span>
                                        <?= json_decode($row["blog_date"], true)[0]; ?>
                                    </span>
                                </div>

                                <div>
                                    <i class="entypo-icon-clock"></i>
                                    <span>
                                        <?= json_decode($row["blog_date"], true)[1]; ?>
                                    </span>
                                </div>

                                <div class="d-flex align-items-center">
                                    <i class="entypo-icon-eye"></i>
                                    <span id="views">
                                        <?= $row["blog_views"]; ?>
                                    </span>
                                </div>
                            </div>

                        </div>
                        <?php
                                } else {
                                    ?>
                        <style>
                        a:hover {
                            color: white;
                        }
                        </style>
                        <div class="">
                            <div data-aos="fade-left" data-aos-duration="4000"
                                class="paragraph  text-white col-12 col-md-12 d-flex align-items-center ">
                                <a href="./index.php">Home <span class="mx-2">/</span></a>
                                <a href="./services.php" class="mx-2">Services<span class="mx-2">/</span></a>
                                <span class="text-primary">
                                    <?= $_GET["service"]; ?>
                                </span>
                            </div>
                        </div>
                        <?php
                                }
                                ?>
                    </div>
                </section>
                <?php
                    }
                }
                ?>
            </div>


        </header>