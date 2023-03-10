<?php
$title = "Home";

require_once("./includes/header.php");
?>

<!-- /Header Section -->

<!-- Section1 -->
<section id="section-1" class="position-relative">
    <div class="sun orange"></div>
    <div class="container text-white">

        <div id="div-2" class="mb-5 py-5">
            <div class="text-center text-white" id="writeup" data-aos="fade-up" data-aos-duration="4000">
                <p class="text-1">Why Ultiblob?</p>
                <h1 class="h1-textshadow my-3">We manage your IT <br>so you can focus on your business</h1>
                <p class="text-2">We are a technology driven company that provides managed IT services <br>in a
                    unique manner to guide organizations through their digital transformation journey</p>
            </div>
            <div class="my-5" data-aos="fade-up" data-aos-duration="4000">
                <div id="boxes" class="row text-white">

                    <div class="col-12  col-md-4 col-lg-4  mb-5 mb-md-0">
                        <div class="boxes p-4">
                            <div class="mb-3">
                                <i class="entypo-icon-users" id="icon-1"></i>
                                <span> Customer-centricity</span>
                            </div>
                            <p>At ultiblob, we regard all customers as high-priority. Your satisfaction remains
                                our focus.</p>
                        </div>
                    </div>

                    <div class="col-12  col-md-4 col-lg-4  mb-5 mb-md-0">
                        <div class="boxes p-4">
                            <div class="mb-3">
                                <i class="entypo-icon-bar-graph text-warning" id="icon-2"></i>
                                <span>Expert-level Competency</span>
                            </div>
                            <p>We provide you with the subject matter expert you require for your development,
                                deployment
                                and IT support.</p>
                        </div>
                    </div>
                    <div class="col-12  col-md-4 col-lg-4  mb-0 mb-md-0">
                        <div class="boxes p-4">
                            <div class="mb-3">
                                <i class="entypo-icon-rocket text-primary" id="icon-3"></i>
                                <span>Custom Deployments</span>
                            </div>
                            <p>We take the time to understand your business then we tailor solutions to fit your
                                unique
                                business needs</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="./contactus.php" class="button text-white" data-aos="fade-up" data-aos-duration="4000">Start a
                Project</a>
        </div>
        <iframe data-aos="fade-up" data-aos-duration="4000" class="col-12" height="475"
            src="https://www.youtube.com/embed/wQIwMDI5kOM" title="Learn how to reduce your IT spend" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

        <?php

        

        for ($i = 0; $i < 3; $i++) {

            $title = $services["titles"][$i];
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
            <div class="col-12 col-md-6 col-lg-6 my-5 <?= $orderImage; ?>">
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
                    <a href="./services.php?service=<?= $title; ?>"
                        class="rounded-pill py-2 px-4  col-12 col-md-6 col-lg-3  text-white text-center d-block button my-4">Learn
                        more</a></a>
                </div>
            </div>
        </div>
        <?php
        }

        ?>
        <div
            class="row gap-md-5 gap-lg-0 align-items-center position-relative py-5 px-3 px-md-2 px-lg-0 justify-content-center">
            <a href="./services.php"
                class="rounded-pills py-3 px-4  col-12 col-md-6 col-lg-3  text-white text-center fs-5 d-block button my-4 ">View
                More</a>
        </div>
    </div>


</section>
<!-- /Section1 -->

<!-- Section2/Testimony -->
<section id="section-2" class="position-relative py-md-5 px-3 px-md-0">
    <div class="sun orange d-none d-lg-block"></div>
    <div class="container text-white py-5">
        <div class="row align-items-center pb-5">
            <div id="div-1" class="col-12 col-md-6 mb-5 mb-md-0" data-aos="fade-right" data-aos-duration="4000">
                <p>WHY PEOPLE LOVE ULTIBLOB?</p>
                <h3 class="my-3">Our Testimonials</h3>
                <h1 class="text-primary">Listen to what our customers are saying:</h1>
            </div>

            <div id="div-2" class="col-12 col-md-6">
                <div class="boxes p-3 p-md-5 py-md-3 text-center overflow-hidden" id="boxes" data-aos="fade-left"
                    data-aos-duration="4000">
                    <div id="testimonialCon">
                        <div class="d-flex flex-column">
                            <span
                                class="icon-con rounded-circle align-self-center p-md-3 d-flex justify-content-center align-items-center">
                                <i class="entypo-icon-users"></i>
                            </span>
                            <h3 class="name mt-3 fs-1 fw-bold">John Palmer</h3>
                            <span class="occupation fst-italic fs-6">MD | Merge IT</span>
                        </div>

                        <p id="comment" class="mt-3" style="font-size: 1rem;">Ultiblob transformed the way our
                            employees work today. They have been our trusted advisors to recommend and purchase
                            all of our hardware and software, manage all of our infrastructure and till date
                            there has been no need for an internal IT staff
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- /Section2 -->

<?php
require_once("./includes/footer.php");
?>
<script>
const loader = document.querySelector("#loader");
let text = "ltiblob.com".split("");
window.onload = function() {

    let interval = setInterval(() => {

        if (text.length > 0) {

            if (loader.querySelector("h1") != null) {
                loader.querySelector("h1").innerHTML += text.shift();
            } else {
                clearInterval(interval)
            }
        } else {
            loader.classList.add("removeLoader")
            clearInterval(interval)
        }
    }, 100)

    setTimeout(() => {

        headerText.id = "fadeup";
        headerImg.id = "fadeleft";

    }, 1000)
    setTimeout(() => {
        document.body.classList.remove("hideScroll");
    }, 3000)
}

// For Sliders
const testimonalContents = {
    name: ["John Palmer", "Judge O.", "Valentine Ozala", "Elizabeth N."],
    occupation: ["Sales Managing Director | Merge IT", "C.E.O | Ruzoya LLC",
        "IT Director | Weststar Associates", "Director | Norbeth Hotels"
    ],
    comments: [
        `Ultiblob is a trusted implementation partner with multiple successful workload migration projects in the Azure and Microsoft 365 ecosystem. They are our one stop shop for Microsoft Certified Resources and Expertise.`,

        `For all of our technical concerns and request, Ultiblob is our go to partner. They have proven expertise within the Microsoft Azure cloud as well as other cutting edge technologies. Their Windows 365 and Azure Virtual Desktop Experts assisted us on our journey to simplify our work from home requirements.`,

        `Location was never an issue for this organization providing us services to support our Hyper-V infrastructure and Azure Cloud Environment. They have been the quickest to respond to technical support issues up to resolution. I recommend.`,

        `Ultiblob has been our trusted partner for years and counting providing technical advisory services, IT procurement, Implementation Services and Remote management of our IT infrastructure. We love to work with theh best.`
    ]
}

const testimonialName = document.querySelector("#boxes .name");
const testimonialOccupation = document.querySelector("#boxes .occupation");
const testimonialContent = document.querySelector("#boxes #comment");


let id = 0;
let testimonialCon = document.querySelector("#testimonialCon");
setInterval(() => {
    id++;
    if (id >= testimonalContents.comments.length) {
        id = 0;
    }
    testimonialCon.classList.add("slidetext");
    testimonialName.innerHTML = testimonalContents.name[id];
    testimonialOccupation.innerHTML = testimonalContents.occupation[id];
    testimonialContent.innerHTML = testimonalContents.comments[id];


}, 5000)

setInterval(() => {
    testimonialCon.classList.remove("slidetext");
}, 6000)
</script>


</body>

</html>