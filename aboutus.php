<?php
$title = "About Us";
require_once("./includes/header.php");
?>
<!-- About Company -->
<section class=" my-0 py-5" id="about-company">
    <div class="container ">
        <div class="row container py-5">
            <div class="col-12 col-md-6 text-white">
                <h6 class="" data-aos="fade-right" data-aos-duration="4000">About our company</h6>
                <h1 class="my-2 my-md-4 mb-md-5" data-aos="fade-up" data-aos-duration="4000">Our business boasts top of
                    the line services</h1>
                <p data-aos="fade-right" data-aos-duration="4000">Ultiblob is a leading technology solutions provider
                    focused on providing highly available and scalable application infrastructure for business,
                    education, healthcare and finance institutions inside and outside of the United states. Ultiblob was
                    founded in 2019 by a group of technology enthusiasts with single goal to solve business problems
                    using cloud and hybrid technologies. Our expertise range from on-premises to cloud, to hybrid
                    infrastructure deployments.</p>
            </div>
            <div class="col-12 col-md-6 ">
                <div class="position-relative " data-aos="fade-left" data-aos-duration="4000">
                    <img src="./Img/aboutus2.jpg" class="img-fluid" alt="" style=" border-radius: 10px;">
                    <div class="position-absolute col-7 overflow-hidden  text-white d-flex align-items-center"
                        id="overlay">
                        <img src="./Img/aboutus1.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /About Company -->
<!-- Explore Services -->
<section class=" py-5" id="explore-services">
    <div class="container px-5 px-md-0">
        <div class="text-center">
            <h6 class="small-heading" data-aos="fade-left" data-aos-duration="4000">Our Services</h6>
            <h1 class="my-2 my-md-4 text-white" data-aos="fade-right" data-aos-duration="4000">How can we<span
                    style=" color: #0E35C8;"> Help You?</span></h1>
        </div>

        <div class="row my-3 gap-3 justify-content-center py-5">
            <div class="col-12  rounded col-lg-3 col-md-5 text-center bg-white p-5 card-explore " data-aos="fade-left"
                data-aos-duration="4000">
                <h1><i class="entypo-icon-user"></i></h1>
                <p class="my-2 heading">Customer Centricity</p>
                <p class="my-4 text-capitalize">At ultiblob, we regard all customers as high-priority. Your satisfaction
                    remains
                    our focus.</p>
            </div>

            <div class="col-12 rounded col-lg-3 col-md-5 text-center bg-white p-5 card-explore " data-aos="fade-up"
                data-aos-duration="4000">
                <h1><i class="entypo-icon-clock"></i></h1>
                <p class="my-2 heading text-capitalize">24 / 7 SME Tech support</p>
                <p class="my-4 text-capitalize">Contact support specialists anytime, using email, phone, or any
                    convenient method</p>
            </div>

            <div class="col-12 rounded col-lg-3 col-md-5 text-center bg-white p-5 card-explore " data-aos="fade-right"
                data-aos-duration="4000">
                <h1><i class="entypo-icon-rocket"></i></h1>
                <p class="my-2 heading">Custom Deployments</p>
                <p class="my-4">We take the time to understand your business then we tailor solutions to fit
                    your unique business needs</p>
            </div>

            <div class="col-12 col-lg-5 col-md-12 text-center  p-5 card-explore ">
                <a href="./contactus.php" class="btn button col-12 d-block p-3 text-white" data-aos="fade-up"
                    data-aos-duration="4000">Start a Project</a>
            </div>
        </div>
    </div>

</section>

<!-- What our clients say -->
<section id="what-client-say" class="py-5">
    <div class="container px-5 px-md-0 py-5">
        <!-- Testimonials -->
        <div id="testimonials">
            <div class="text-center mb-5">
                <h6 class="small-heading" data-aos="fade-right" data-aos-duration="4000">What Our Clients say
                </h6>
                <h1 class="my-2 my-md-4 text-white" data-aos="fade-left" data-aos-duration="4000">Our <span
                        style=" color: #0E35C8;">Testimonials</span></h1>
            </div>

            <div class="row justify-content-center">
                <div class="container col-12 col-md-7">
                    <div class="boxes p-2 p-md-3 p-lg-5 overflow-hidden text-center" id="boxes" data-aos="fade-up"
                        data-aos-duration="2000">
                        <div id="testimonialCon">
                            <div class="d-flex flex-column">
                                <span
                                    class="icon-con rounded-circle align-self-center p-md-3 d-flex justify-content-center align-items-center">
                                    <i class="entypo-icon-users text-white"></i>
                                </span>
                                <h3 class="name mt-3 text-white fs-1 fw-bold">Maikudi Shoaga</h3>
                                <span class="occupation fst-italic fs-6">MD | C.E.O - Peoples Day Services</span>
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
    </div>
</section>

<script>
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
<?php
require_once("./includes/footer.php")
?>