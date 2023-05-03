<!--Footer -->
<footer class="py-5 position-relative">
    <div class="sun orange " style="opacity:.6;"></div>

    <nav class="container">

        <ul class="row px-0  py-5" style="border-bottom:.3px solid rgba(204, 204, 204, 0.132); " data-aos="fade-left"
            data-aos-duration="4000">
            <ul class="col-12 col-md-6 col-lg-3 ">
                <li class="my-3 li-head"><a href="" class="text-white d-flex col-3"><img
                            src="./Img/favicon-removebg-preview.png" alt="" class="w-50 h-50 me-2"> ultiblob</a>
                </li>
                <li>We are a technology driven company that provides managed IT services in a unique manner to
                    guide organizations through their digital transformation journey</li>
            </ul>
            <ul class="col-12 col-md-6 col-lg-3">
                <li class="my-3 li-head">Services</li>
                <li><a href="./services.php?service=Cloud Services">Cloud Services</a></li>
                <li><a href="./services.php?service=Managed infrastructure">Managed IT & Support</a></li>
                <li><a href="./services.php?service=Software Development">Application Development</a></li>
                <li><a href="./services.php?service=Sales"> Hardware & Software Sales</a></li>
                <li><a href="./services.php?service=Professional Training">Professional Training</a></li>
            </ul>

            <ul class="col-12 col-md-6 col-lg-3">
                <li class="my-3 li-head">Quick Links</li>
                <li><a href="./aboutus.php">About Us</a></li>
                <li><a href="./program.php">Programs</a></li>
                <li><a href="./career.php">Careers</a></li>
                <li><a href="./services.php">Services</a></li>
                <li><a href="./privacypolicy.php">Privacy Policy</a></li>
            </ul>

            <ul class="col-12 col-md-6 col-lg-3">
                <li class="my-3 li-head">Contact</li>
                <li><a href="https://goo.gl/maps/e7tYZcBsbNHsQx4c7" target="_blank"><i
                            class="entypo-icon-location me-2"></i>
                        254 CHAPMAN RD, STE 208
                        NEWARK, DE 19702</a></li>
                <li><a href="mailto:info@ultiblob.com" target="_blank"><i
                            class="entypo-icon-paper-plane me-2"></i>info@ultiblob.com</a>
                </li>
                <li><a href="mailto:support@ultiblob.com"><i class="entypo-icon-help me-2"
                            target="_blank"></i>support@ultiblob.com</a>
                </li>
                <li><a href="tel:+17208260460" target="_blank"><i class="entypo-icon-phone me-2"></i> +17208260460</a>
                </li>

            </ul>

        </ul>

        <ul class="row text-lg-start text-sm-center text-center pb-0 align-items-md-center">
            <ul class="col-12 col-md-4 col-lg-6 ">
                <li><a>&copy; <?= date("Y"); ?>
                        ultiblob. All rights reserved</a></li>

            </ul>

            <ul class="col-12 col-md-4 col-lg-6 d-flex align-items-center justify-content-between ">

                <li><a href="https://twitter.com/ultiblob" class="icon p-lg-2 p-md-3 p-2" target="_blank"><i
                            class="entypo-icon-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/ultiblob" class="icon p-lg-2 p-md-3 p-2" target="_blank"><i
                            class="entypo-icon-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/ultiblob/" target="_blank" class="icon p-lg-2 p-md-3 p-2"><i
                            class="entypo-icon-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCDlxOTqxLGN3YsNp_edmtjg" class="icon p-lg-2 p-md-3 p-2"
                        target="_blank"><i class="entypo-icon-youtube"></i></a></li>
                <li><a href="https://www.linkedin.com/company/ultiblob-inc" class="icon p-lg-2 p-md-3 p-2"
                        target="_blank"><i class="entypo-icon-linkedin"></i></a></li>

            </ul>
        </ul>

    </nav>

</footer>
<!--/Footer -->
</div>


<script src="./main.js"></script>
<script src="./aos/aos.js"></script>
<script>
    AOS.init()
</script>

<?php
    if ($title == "Home" || $title == "About Us") {
        ?>
<!-- Sliders For Testimonial section on About us and home -->
<script>
    const testimonalContents = {
        name: ["Maikudi Shoaga", "Okezie Franklin", "Udeobi Jane", "Ebere Nsude"],
        occupation: ["MD | C.E.O - Peoples Day Services", "MD | C.E.O - ultiblob", "MD | C.E.O - Norbeth Hotels",
            "MD | C.E.O - Frantine"
        ],
        comments: [
            `Ultiblob transformed the way our employees work today. They have been our trusted advisors torecommend and purchase all of ourhardware and software, manage all of our infrastructure and till date there has been no need for an internal IT staff`,

            `Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis maxime iure animi aliquam accusamus dicta minima nisi libero eligendi, nihil similique unde nemo hic, incidunt rerum? Blanditiis beatae repudiandae maxime.`,

            `Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis maxime iure animi aliquam accusamus dicta minima nisi libero eligendi, nihil similique unde nemo hic, incidunt rerum? Blanditiis beatae repudiandae maxime.`,

            `Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis maxime iure animi aliquam accusamus dicta minima nisi libero eligendi, nihil similique unde nemo hic, incidunt rerum? Blanditiis beatae repudiandae maxime.`
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
    }
                ?>
</body>

</html>