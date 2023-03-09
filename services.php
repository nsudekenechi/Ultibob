<?php
$title  = "Services";
require_once("./includes/header.php");
$softwareDevelopment = [
    "titles" => ["SaaS Development", "Mobile App Development", "Desktop App Development", "Web App Development"],
    "subtitles" => ["Our team is made up of individuals with considerable experience in building web and mobile based software as a service (SaaS) product for startups in the payments, e-commerce, real estate, IoT and media sectors", "We develop hybrid cross platform mobile apps rapidly with modern frameworks like React Native and Flutter", "Desktop apps matter, and we develop desktop apps fast, and efficiently using modern technologies like Electron", "Desktop apps matter, and we develop desktop apps fast, and efficiently using modern technologies like Electron"],
    "images" => ["saas.png", "mobileapp.webp", "desktop-banner-img.webp", "19362653.jpg"]
];

$managedInfrastructure = [
    "titles" => ["Cloud Assesments & Migration", "Servers & Storage", "Network Management & Security", "Data Backup & Disaster Recovery"],
    "subtitles" => [
        "Want to migrate workloads to the cloud? Look no further. Not all workloads are suitable candidates for the public cloud and we are here to assist you perform a migration assessment and build a migration plan to move your workloads to the most suitable cloud infrastructure to meet all your regulatory and compliance requirements and standards",

        "We understand that some server workloads need to remain on-premises for reasons like compliance and support for legacy applications. We build and configure on-premises server and storage infrastructure to meet the required IOPS while maintaining security and service uptime. Won't you rather do I.T. with us.",

        "We help organization design simple to complex network architectures. Zone segmentation (LAN, WAN and DMZ) would further secure inbound and outbound network traffic.",

        "Off-site backups are very key when it comes to meeting business continuity requirements. Server replica is providing passive instances of your servers to a secondary location such that a planned failover would route traffic to the passive instances in case of a disaster in the primary location."
    ],
    "images" => [
        "cloud1-4-scaled.jpg",
        "server_room.jpg",
        "Network Security Header.png",
        "backup.jpeg"
    ]
    
];

$Training = [
    "titles" => ["Cloud Assesments & Migration", "Servers & Storage", "Network Management & Security"],
    "subtitles" => [
        "Want to migrate workloads to the cloud? Look no further. Not all workloads are suitable candidates for the public cloud and we are here to assist you perform a migration assessment and build a migration plan to move your workloads to the most suitable cloud infrastructure to meet all your regulatory and compliance requirements and standards",

        "We understand that some server workloads need to remain on-premises for reasons like compliance and support for legacy applications. We build and configure on-premises server and storage infrastructure to meet the required IOPS while maintaining security and service uptime. Won't you rather do I.T. with us.",

        "We help organization design simple to complex network architectures. Zone segmentation (LAN, WAN and DMZ) would further secure inbound and outbound network traffic."
    ],
    "images" => [
        "training1.jpg",
        "training2.jpg",
        "training3.jpg",
    ]
    ];
    $cloud = [
        "titles" => ["Cloud Assesments & Migration", "Servers & Storage", "Network Management & Security"],
        "subtitles" => [
            "Want to migrate workloads to the cloud? Look no further. Not all workloads are suitable candidates for the public cloud and we are here to assist you perform a migration assessment and build a migration plan to move your workloads to the most suitable cloud infrastructure to meet all your regulatory and compliance requirements and standards",
    
            "We understand that some server workloads need to remain on-premises for reasons like compliance and support for legacy applications. We build and configure on-premises server and storage infrastructure to meet the required IOPS while maintaining security and service uptime. Won't you rather do I.T. with us.",
    
            "We help organization design simple to complex network architectures. Zone segmentation (LAN, WAN and DMZ) would further secure inbound and outbound network traffic."
        ],
        "images" => [
            "training1.jpg",
            "training2.jpg",
            "training3.jpg",
            
        ]
        ];
    $sales= [
        "titles" => ["Cloud Assesments & Migration", "Servers & Storage", "Network Management & Security"],
        "subtitles" => [
            "Want to migrate workloads to the cloud? Look no further. Not all workloads are suitable candidates for the public cloud and we are here to assist you perform a migration assessment and build a migration plan to move your workloads to the most suitable cloud infrastructure to meet all your regulatory and compliance requirements and standards",
    
            "We understand that some server workloads need to remain on-premises for reasons like compliance and support for legacy applications. We build and configure on-premises server and storage infrastructure to meet the required IOPS while maintaining security and service uptime. Won't you rather do I.T. with us.",
    
            "We help organization design simple to complex network architectures. Zone segmentation (LAN, WAN and DMZ) would further secure inbound and outbound network traffic."
        ],
        "images" => [
            "training1.jpg",
            "training2.jpg",
            "training3.jpg",
            
        ]
        ];
?>

<!-- Our services -->
<?php

if (!isset($_GET["service"])) {

?>
<section id="our-services">
    <div class="container py-5">
        <div class="text-center my-5">
            <h6 class="small-heading" data-aos="fade-right" data-aos-duration="4000">What we offer</h6>
            <h1 class="my-2 my-md-4 text-white" data-aos="fade-left" data-aos-duration="4000">Our Services</h1>
        </div>
        <?php


            for ($i = 0; $i < count($services["titles"]); $i++) {
                $title = trim($services["titles"][$i]);
                $subtitle = $services["subtitles"][$i];
                $image = $services["images"][$i];
                $string = explode(" ", $services["titles"][$i]);
                $firstWord = $string[0];
                $remainingWords = join(" ", array_slice($string, 1));
                if ($i % 2 == 0) {
                    $orderImage = "order-md-1 ";
                    $orderText = "order-md-2";
                } else {
                    $orderImage = "order-md-2 d-flex justify-content-end";
                    $orderText = "order-md-1";
                }
            ?>

        <div class="row gap-md-5 gap-lg-0 align-items-center py-5 px-3 px-md-2 px-lg-0">
            <div class="col-12 col-md-6 col-lg-6 my-5  <?= $orderImage; ?>">
                <div class="img-con col-12 col-lg-7 " data-aos="fade-right" data-aos-duration="4000">
                    <div class="img-overlay p-0 ">
                        <img src="./Img/<?= $image; ?>" alt="" class="img-fluid ">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-6 <?= $orderText; ?>">
                <div data-aos="fade-left" data-aos-duration="4000">
                    <h3 class="text-left  col-6 text-white">
                        <span class="color-span"><?= $firstWord; ?></span> <?= $remainingWords; ?>
                    </h3>
                    <p class="paragraph  my-3"><?= $subtitle; ?></p>
                    <a href="services.php?service=<?= $title; ?>"
                        class="rounded-pill py-2 px-4  col-12 col-md-6 col-lg-3  text-white text-center d-block button my-4">Learn
                        more</a></a>
                </div>
            </div>
        </div>
        <?php
            }
            ?>


    </div>
</section>
<?php
} else {
    $title = $_GET["service"];
    $index;
    // Check header to see services
    for ($i = 0; $i < count($services["titles"]); $i++) {
        $services["titles"][$i] == $title ? $index = $i : null;
    }


?>
<style>
header {
    background: linear-gradient(rgba(0, 0, 0, .8), rgba(0, 0, 0, 0.7)), url("./Img/<?= $services["images"][$index]; ?>") no-repeat center;
    background-size: cover;
    background-attachment: fixed;
}

#our-services {
    background: linear-gradient(to bottom right, #28416b, #0c133e, #02091e 80%);
}

.description::first-letter {
    font-size: 5rem;
    color: #0E35C8;
    line-height: 0px;
}

.description::first-line {
    font-size: 2rem;
}
</style>

<section id="our-services">
    <div class="container py-5">

        <?php
        $service="";
        if($title=="Software Development"){
            $service=$softwareDevelopment;
        }else if($title=="Managed Infrastructure"){
            $service=$managedInfrastructure;
        }else if($title=="Professional Training"){
            $service=$Training;
        }else if($title=="Cloud Services"){
            $service=$cloud;
        }else if($title=="Sales"){
            $service=$sales;
        }
        ?>

        <?php
        for ($i = 0; $i < count($service["titles"]); $i++) {

        ?>
        <div class="row container py-5">
            <div class="col-12 col-md-6 text-white">
                <h1 class="my-2 my-md-4 mb-md-5" data-aos="fade-up" data-aos-duration="4000">
                    <?= $service['titles'][$i]; ?>
                </h1>
                <p data-aos="fade-right" data-aos-duration="4000"><?= $service['subtitles'][$i]; ?>
                </p>
            </div>
            <div class="col-12 col-md-6 ">
                <div class="position-relative " data-aos="fade-left" data-aos-duration="4000"
                    style="object-fit:cover;height:300px;background:url('./Img/<?=$service['images'][$i];?>') center/cover;border-radius:10px;">

                    <div class="position-absolute col-7 overflow-hidden  text-white d-flex align-items-center"
                        id="overlay">
                        <img src="./Img/<?=$service['images'][$i];?>" class="img-fluid" alt=""
                            style=" border-radius: 10px;">
                    </div>
                </div>
            </div>
        </div>
        <?php
        }

        ?>
    </div>
</section>
<?php
}
?>
<!-- /Our services -->

<?php
require_once("./includes/footer.php");
?>