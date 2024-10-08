<?php
// Include database connection
include '../Backend/section/config.php';

// Get the ID from the URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Fetch the specific item from the database based on the ID
$sql = "SELECT * FROM content_form_table";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Check if the item exists
if (!$row) {
    echo "Item not found!";
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./style/navbar.css" />
    <link rel="stylesheet" href="./style/section.css" />
    <link rel="stylesheet" href="./style/content.css" />
    <link rel="stylesheet" href="./style/footer.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main class="main">
        <div class="background-img">
            <!-- header -->
            <header>
                <nav>
                    <div class="nav-main">
                        <div class="nav-background">
                            <img src="./images/logo1.png" alt="logo" />
                            <div class="nav-link">
                                <a href="">About</a>
                                <a href="">Blog</a>
                                <a href="">Team</a>
                                <a href="">Career</a>
                                <a href="">Contact</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- end header -->

            <!-- leadspace -->
            <article class="lead-article">
                <span class="lead-article-title">Title</span>
                <span class="lead-article-para">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.
                </span>
            </article>
            <!-- end of leadspace -->
        </div>

        <!-- section start -->
        <section class="card-section">
            <article class="section-article">
                <span class="section-article-title">Title</span>
                <span class="section-article-para">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.
                </span>
            </article>

            <!-- main card div -->
            <main class="main-card-div">
                <div class="card-container">
                    <!-- card1 -->
                    <div class="card-div">
                        <article class="article-card">
                            <span class="article-card-title">
                                <?php echo htmlspecialchars($row['title']); ?>
                            </span>
                            <span class="article-card-para">
                                <?php echo htmlspecialchars($row['description']); ?>
                            </span>
                        </article>
                        <button id="btn1" class="card-btn1">
                            <i class="fa-solid fa-arrow-right arrow1"></i>
                        </button>
                    </div>

                    <!-- card2 -->
                    <div class="card-div">
                        <article class="article-card">
                            <span class="article-card-title">
                                <?php echo htmlspecialchars($row['title']); ?>
                            </span>
                            <span class="article-card-para">
                                <?php echo htmlspecialchars($row['description']); ?>
                            </span>
                        </article>
                        <button id="btn2" class="card-btn1">
                            <i class="fa-solid fa-arrow-right arrow1"></i>
                        </button>
                    </div>

                    <!-- card3 -->
                    <div class="card-div">
                        <article class="article-card">
                            <span class="article-card-title">
                                <?php echo htmlspecialchars($row['title']); ?>
                            </span>
                            <span class="article-card-para">
                                <?php echo htmlspecialchars($row['description']); ?>
                            </span>
                        </article>
                        <button id="btn3" class="card-btn1">
                            <i class="fa-solid fa-arrow-right arrow1"></i>
                        </button>
                    </div>
                </div>
            </main>

            <figure class="figure-main">
                <img class="img1" src="./images/content_img1.png" alt='Image1 ' />

                <img class=" img1" src="./images/content_img2.png" alt="Image2" />

                <img class="img1" src="./images/content_img3.png" alt="Image3" />
            </figure>
        </section>

        <!-- section ending -->

        <!-- Next Section content starts -->
        <section class="section-last">
            <div class="div-last-container">
                <div class="div-last-column">
                    <article>
                        <span class="span-video-title"> Title </span>
                    </article>
                    <div class="cards-video-column">
                        <!-- video card1 -->
                        <div class="cards-video-row">
                            <!-- play and pause button -->
                            <div class="video-play-pause">
                                <img onmouseover="onHover(this)" onmouseout="onHoverOut(this)" class="video1"
                                    src="./images/content_img1.png" alt="" />
                                <span id="btn-out-1" class="span-icon">
                                    <i id="icon-play-btn1" class="fa-solid fa-play icon-play"></i>
                                    <i id="icon-pause-btn1" class="fa-solid fa-pause icon-pause"></i>
                                </span>
                            </div>
                            <div class="video-play-pause">
                                <img onmouseover="onHoverVideo2(this)" onmouseout="onHoverOutVideo2(this)"
                                    class="video2" src="./images/content_img2.png" alt="" />
                                <span id="btn-out-2" class="span-icon">
                                    <i id="icon-play-btn2" class="fa-solid fa-play icon-play"></i>
                                    <i id="icon-pause-btn2" class="fa-solid fa-pause icon-pause"></i>
                                </span>
                            </div>
                            <div class="video-play-pause">
                                <img onmouseover="onHoverVideo3()" onmouseout="onHoverOutVideo3(this)" class="video3"
                                    src="./images/content_img3.png" alt="" />
                                <span id="btn-out-3" class="span-icon">
                                    <i id="icon-play-btn3" class="fa-solid fa-play icon-play"></i>
                                    <i id="icon-pause-btn3" class="fa-solid fa-pause icon-pause"></i>
                                </span>
                            </div>
                        </div>
                        <div class="card-content-row">
                            <!-- card content1 -->
                            <div id="card1" class="content-column">
                                <div class="contents">
                                    <i class="fa-solid fa-handshake handshake"></i>
                                    <article class="article-video">
                                        <span class="content-title">TITLE </span>
                                        <span class="content-para">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore
                                        </span>
                                    </article>
                                </div>
                            </div>

                            <!-- card-content2 -->
                            <div id="card2" class="content-column">
                                <div class="contents">
                                    <i class="fa-solid fa-chart-line mixed-chart"></i>
                                    <article class="article-video">
                                        <span class="content-title">TITLE </span>
                                        <span class="content-para">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore
                                        </span>
                                    </article>
                                </div>
                            </div>

                            <!-- card-content3 -->
                            <div id="card3" class="content-column">
                                <div class="contents">
                                    <i class="fa-solid fa-chart-line mixed-chart"></i>
                                    <article class="article-video">
                                        <span class="content-title">TITLE </span>
                                        <span class="content-para">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore
                                        </span>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Next Section Ends -->

        <!-- footer starts -->
        <footer class="footer">
            <div class="footer-main">
                <div class="footer-content-row">
                    <!-- logo and icons -->
                    <div class="logo-icon-column">
                        <img class="logo" src="./images/logo1.png" alt="logo-footer" />
                        <div class="icons">
                            <i class="fa-brands fa-linkedin"></i>
                            <i class="fa-brands fa-square-facebook"></i>
                            <i class="fa-brands fa-square-youtube"></i>
                            <i class="fa-brands fa-square-x-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>

                    <!-- content-resources -->
                    <div class="resources">
                        <div class="left-resource">
                            <span class="left">About</span>
                            <span class="left">Impact</span>
                            <span class="left">Our Approach</span>
                            <span class="left">Programs</span>
                        </div>
                        <div class="right-resource">
                            <span class="right">Resources</span>
                            <span class="right">Get Involved</span>
                            <span class="right">Financials</span>
                            <span class="right">Careers</span>
                            <span class="right">Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer ends -->
    </main>
</body>
<script src="assign.js"></script>

</html>

<?php
// Close the database connection
$conn->close();
?>