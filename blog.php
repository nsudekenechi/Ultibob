<?php
if (!isset($_GET["title"])) {
    $title = "Blog";
} else {
    $title = str_replace("-", " ", $_GET['title']);
}
require_once("./includes/header.php");

$perPage = 5;
$page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
$query = "SELECT * FROM create_blog";
$result = mysqli_query($conn, $query);
$totalBlogs = mysqli_num_rows($result);
$pages = ceil($totalBlogs / $perPage);


?>
<style>
#blog-title::first-line {
    color: #0E35C8;
    text-shadow: 0px 0px 10px #0E35C8;

}

#pagination li a {
    border: solid #28416B .1px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: .8rem;
    color: #28416B;
    transition: 1s;

    width: 30px;
    height: 30px;
}

#pagination li a:hover {

    transform: rotate(-360deg);
}

#pagination .page-active {
    background-color: #0E35C8;
    color: white;
    border: solid #0E35C8 .1px;
    box-shadow: 0px 0px 10px 5px #011653;
}
</style>

<?php
if (!isset($_GET["title"])) {
?>
<section id="our-services">
    <div class="container py-5">
        <div class="text-center my-5">
            <h6 class="small-heading" data-aos="fade-right" data-aos-duration="4000">Explore Technology</h6>
            <h1 class="my-2 my-md-4 text-white text-capitalize" data-aos="fade-left" data-aos-duration="4000">Get the
                latest technology news</h1>
        </div>
        <?php
            $query = "SELECT * FROM create_blog LIMIT $start,$perPage";
            $result = mysqli_query($conn, $query);
            $i = 1;
            echo $i % 2;
            while ($row = mysqli_fetch_assoc($result)) {
                if ($i % 2 == 0) {
                    $orderText = "order-md-1";
                    $orderImage = "order-md-2 d-flex justify-content-end";
                } else {
                    $textAos = "fade-left";
                    $imgAos = "fade-right";
                    $orderText = "order-md-2";
                    $orderImage = "order-md-1";
                }
            ?>
        <div class="row gap-md-5 gap-lg-0 align-items-center py-5 px-3 px-md-2 px-lg-0">
            <div class="col-12 col-md-6 col-lg-6 my-5 <?= $orderImage; ?> ">
                <div class="img-con col-12 col-lg-7 " data-aos="fade-right" data-aos-duration="4000">
                    <div class="img-overlay p-0 ">
                        <img src="./admin/Img/<?= $row['blog_image']; ?>" alt="" class="img-fluid ">
                    </div>



                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-6 <?= $orderText; ?>">
                <div data-aos="fade-left" data-aos-duration="4000">
                    <h3 class="text-left  col-6 text-white" id="blog-title">

                        <?= $row["blog_title"]; ?>
                    </h3>

                    <p class="paragraph  my-3"><?= substr($row["blog_description"], 0, 800) ?></p>
                    <div class="paragraph col-10 col-md-6 text-white d-flex align-items-center justify-content-between">
                        <div>
                            <i class="entypo-icon-user"></i>
                            <span><?= $row["blog_admin"]; ?></span>
                        </div>

                        <div>
                            <i class="entypo-icon-calendar"></i>
                            <span><?= json_decode($row["blog_date"], true)[0]; ?></span>
                        </div>

                        <div>
                            <i class="entypo-icon-eye"></i>
                            <span><?= $row["blog_views"]; ?></span>
                        </div>
                    </div>
                    <a href="./blog.php?title=<?= str_replace(" ", "-", $row['blog_title']); ?>"
                        class="rounded-pill py-2 px-4  col-12 col-md-6 col-lg-3  text-white text-center d-block button my-4">Read
                        more</a></a>
                </div>
            </div>
        </div>
        <?php

                $i++;
            }
            ?>

        <ul class="py-5 m-0 col-12  d-flex align-items-center justify-content-center " data-aos="fade-right"
            data-aos-duration="4000" id="pagination">
            <?php
                $i = 1;

                while ($i <= $pages) {
                    if (isset($_GET["page"])) {
                        if ($i == $_GET["page"]) {
                            $active = "page-active";
                        } else {
                            $active = "";
                        }
                    } else {
                        if ($i == 1) {
                            $active = "page-active";
                        } else {
                            $active = "";
                        }
                    }

                ?>
            <li class="me-4"><a href="./blog.php?page=<?= $i; ?>"
                    class="icon <?= $active; ?> d-flex justify-content-center p-4"><?= $i; ?></a></li>
            <?php
                    $i++;
                }
                ?>



        </ul>


    </div>


</section>


<?php
} else {

    $query = "SELECT * FROM create_blog WHERE blog_title='$title'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $image = $row["blog_image"];
    $description = str_word_count($row["blog_description"]);
    $wordInSeconds = 0.5;
    $readingTime = $wordInSeconds * $description;
    // echo $readingTime;
    if ($readingTime <= 59) {
        $readingTime = "$readingTime seconds";
    } else if ($readingTime <= 3599) {
        $readingTime = intval($readingTime / 60) . " minutes";
    } else {
        $readingTime =  intval($readingTime / 3600) . " hours";
    }


?>
<style>
header {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(./admin/Img/<?= $image; ?>) no-repeat center;
    background-size: cover;
    background-attachment: fixed;
}

#our-services {
    background: transparent;
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
        <div class="text-center my-5">
            <h6 class="small-heading text-capitalize" data-aos="fade-right" data-aos-duration="4000"><i
                    class="entypo-icon-clock"></i> <span><?= $readingTime; ?> Read</span></h6>

        </div>


        <p class="description"><?= $row["blog_description"]; ?></p>
        <input type="text" value="<?= $title; ?>" hidden id="blog_title">
    </div>
</section>

<script>
// Incrementing Views
let title = document.querySelector("#blog_title");
let views = document.querySelector("#views");

if (!localStorage.getItem("ultiblob_blog")) {
    let arr = JSON.stringify([title.value]);

    incrementViews(arr);
} else {
    let viewedBlogs = JSON.parse(localStorage.getItem("ultiblob_blog"));
    let currentBlog = viewedBlogs.filter(blog => blog == title.value);
    if (currentBlog.length == 0) {
        viewedBlogs.push(title.value);
        incrementViews(JSON.stringify(viewedBlogs));
    }
}

async function incrementViews(arr) {
    let req = await fetch(`./views.php?increase_view=${title.value}`);
    let res = await req.text();
    if (res) {
        localStorage.setItem("ultiblob_blog", arr);
        views.innerHTML = res;
    }
}
</script>
<?php
}
?>

<?php
require_once("./includes/footer.php");
?>