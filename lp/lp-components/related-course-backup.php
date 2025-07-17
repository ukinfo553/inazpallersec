<style>
/*======== related course sec start ==========*/
.related-course-sec .item{
    border: 1px solid #D0D0D0;
    display: block;
    text-decoration: none;
    color: var(--dark-charcoal);
    border-radius: 5px;
}
.related-course-sec .item img{
    width: 100%;
    max-width: 100%;
    border-radius: 5px 5px 0 0;
}
.related-course-sec .item .item-body{
    padding: 16px 12px;
    font-weight: 600;
    font-size: 13px;
}
@media (min-width:768px) {
    .related-course-sec .item .item-body{
        font-size: 16px;
    }
}
/*======== related course sec end ==========*/

</style>

<?php
$relatedCourses = [
    "cissp-training" => [
        [
            "link" => "https://www.infosectrain.com/pages/lp/cism-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISM-1.png",
            "text" => "Certified Information Security Manager (CISM)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cisa-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/cisa-icon.jpg",
            "text" => "Certified Information Systems Auditor (CISA)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/crisc/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/crisc-icon.jpg",
            "text" => "Certified in Risk and Information Systems Control (CRISC)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/ccsp-training-online/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CCSP-1.png",
            "text" => "Certified Cloud Security Professional (CCSP)"
        ]
    ],
    "ccsp-training" => [
        // Add data for CCSP courses
    ],
    // Add data for other courses
];

// Extract the current landing page from the URL
$currentLandingPage = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));


print_r($currentLandingPage);

// If the landing page has a trailing slash, remove it
$currentLandingPage = rtrim($currentLandingPage, '/');


$courses = $relatedCourses[$currentLandingPage];
?>

<section class="related-course-sec py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Other Popular Courses</h2>
            </div>
        </div>
        <div class="row">
            <!-- col start -->
            <?php
            foreach ($courses as $course) {
            ?>
                <div class="col-md-3 col-6 mt-4">
                    <div class="item">
                        <img src="<?php echo $course['image']; ?>" alt="">
                        <div class="item-body">
                            <?php echo $course['text']; ?>
                        </div>
                        <a href="<?php echo $course['link']; ?>" target="_blank">Check Now</a>
                    </div>
                </div>
            <?php
            }
            ?>
            <!-- col end -->
        </div>
    </div>
</section>
