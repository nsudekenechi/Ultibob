<?php
$title = "Programs";
require_once("./includes/header.php");
?>
<style>
.desc-first span {
    font-size: 2rem;
    color: #0e35c8;
    font-family: "Poppins", "sans-serif";

}

.outgoing {
    animation: slideOut 10s 2s infinite;

}

.incoming {
    opacity: 0;
    animation: slideIn 10s 2s infinite;
}

@keyframes slideOut {
    0% {
        transform: translateX(0%);

        opacity: 1;

    }

    50% {
        transform: translateX(-100%);
        opacity: 0;

    }

    75% {
        transform: translateX(50%);
        opacity: 0;

    }

    100% {
        transform: translateX(0%);

        opacity: 1;

    }



}



@keyframes slideIn {
    0% {
        transform: translateX(0%);
        opacity: 0;
    }

    50% {
        transform: translateX(-95%);
        opacity: 1;
    }

    75% {
        transform: translateX(-150%);
        opacity: 0;
    }

    100% {
        transform: translateX(0%);
        opacity: 0;
    }
}

div {}
</style>

<section class="section prog-desc-container">
    <div class="container">
        <div class="prog-desc-flex-container">
            <div class="prog-desc-flex flex-one">
                <div data-aos="fade-up" data-aos-duration="4000">
                    <div class="prog-header-content" style=" font-family: Quicksand, sans-serif;">Workload migration to
                        Microsoft Azure Cloud
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="4000">
                    <div class="desc-first desc" style=" font-family: Quicksand, sans-serif;"><span>Why be the last of
                            companies to adopt cloud services when we are
                            here for you.</span><br><br>
                        A good number of companies have decided to move certain or ALL wokloads to the cloud in a bid to
                        reduce their current datacenter footprints. At Ultiblob, we help you analyze what workloads are
                        best suitable for the Cloud, give you business and technical reasons why and finally MIGRATE.

                        We create a highly available and scalable landing zone that meets best practice standards for
                        your workloads. Providing near zero downtime leveraging native cloud services.

                        We are experts in Re-hosting, Re-factoring, Re-architecting, Re-platforming and even Re-placing

                        Some of our success stories can be traced to companies like:
                    </div>
                </div>



            </div>
            <div data-aos="fade-left" data-aos-duration="4000">
                <div class="prog-desc-flex flex-two">
                    <img class="float-image" src="./Img/util.jpeg" alt="#">
                    <img class="static-image" src="./Img/util-m.jpeg" alt="#">
                </div>
            </div>
        </div>
        <div class="row my-5 overflow-hidden" id="">
            <div class="col-6 row align-items-center gap-5 outgoing" id="">
                <div class="col-3">
                    <img src="./img/calix_logo.png" alt="" class="img-fluid">
                </div>
                <div class="col-3 p-0 m-0">
                    <img src="./img/logo tiva (1).webp" alt="" class="img-fluid">
                </div>
                <div class="col-3 p-0 m-0">
                    <img src="./img/MergeIT.png" alt="" class="img-fluid">
                </div>
            </div>

            <div class="col-6 row align-items-center gap-5 incoming" id="">
                <div class="col-3">
                    <img src="./img/MST-Logo.svg" alt="" class="img-fluid">
                </div>
                <div class="col-3 p-0 m-0">
                    <img src="./img/RPTG.gif" alt="" class="img-fluid">
                </div>
                <div class="col-3 p-0 m-0">
                    <img src="./img/Dell_Technologies_logo.svg.png" alt="" class="img-fluid">
                </div>

            </div>


        </div>
    </div>
</section>
<section class="section pre-footer-container">
    <div class="container">
        <div class="row g-4">
            <div class="col-sm-12 col-md-6">
                <div data-aos="fade-right" data-aos-duration="4000">
                    <div class="pre-footer-title mb-5">Work from Home Readiness</div>
                    <div class="pre-footer-desc">When circumstances result to employees having to work outside of
                        the office building or even from their home offices, its best that organizations plan to
                        make applications available and services up and running to keep the business going. At
                        ultiblob, we bring you expertise in this space. We setup tools to keep employee engagement
                        and collaboration seamless.
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div data-aos="fade-left" data-aos-duration="4000">
                    <div class="pre-footer-right-title">#WFH</div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-5">
            <div class="col-12">
                <div data-aos="fade-up" data-aos-duration="4000">
                    <div class="pre-footer-title mb-5">WFH Features</div>
                </div>
            </div>

            <div class="pre-flex-content col-sm-12 col-md-6">
                <div data-aos="fade-up" data-aos-duration="4000">
                    <div class="w-100">
                        <div class="pre-semi-title">Azure Virtual Desktop & Windows 365</div>
                        <div class="pre-footer-desc">Access desktops and applications on the cloud all secured
                            behind a cooperate network. Enforce multifactor authentication and conditional access
                            policies to deny access to unauthorized users. Employees can use personal devices (BYOD)
                            to access cooperate resources yet still maintain consistent security.
                        </div>
                    </div>
                </div>
            </div>
            <div class="pre-flex-content col-sm-12 col-md-6">
                <div data-aos="fade-up" data-aos-duration="4000">
                    <div class="w-100">
                        <div class="pre-semi-title">Microsoft Teams QuickStart</div>
                        <div class="pre-footer-desc">Enable employees to meet, chat, call and collaborate from
                            anywhere on any device. Screen sharing is much more simplified on Microsoft teams. Take
                            advantage of unlimited cloud storage to store recorded meetings and playback on-demand
                            using Microsoft stream.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section semi-footer-container">
    <div class="container">
        <div class="row g-4">
            <div class="col-sm-12 col-md-6">
                <div data-aos="fade-right" data-aos-duration="4000">
                    <div class="semi-header-contents">
                        <div class="semi-footer-title text-primary">Ready to TRY?</div>
                        <div class="semi-footer-text">Try out some of the Microsoft Native Cloud Services today. We
                            would be honored to kickstart your cloud transformation journey.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div data-aos="fade-left" data-aos-duration="4000">
                    <div class="semi-btn-container">
                        <a class="semi-redirector" href="./contactus.php">
                            <button class="enroll-btn">
                                <i class="far fa-message"></i>
                                &ThinSpace;&ThinSpace;&ThinSpace;Enroll Here
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php
require_once("./includes/footer.php");
?>