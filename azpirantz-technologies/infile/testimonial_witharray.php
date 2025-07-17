<?php
$testimonialPagename = [
 "index.php" => [
        [
            "testimonial" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, nostrum error voluptatum voluptatem, deserunt amet accusamus exercitationem quos quas aperiam expedita voluptas libero harum? Id repudiandae animi ducimus cupiditate soluta.",
            "learnerimage" => "https://www.infosectrain.com/wp-content/uploads/2024/02/St-Pierre-150x150.jpg",
            "learnername" => "Eric St-Pierre",
			"learnerlocation" => "Canada"
        ],
        [
            "testimonial" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, nostrum error voluptatum voluptatem, deserunt amet accusamus exercitationem quos quas aperiam expedita voluptas libero harum? Id repudiandae animi ducimus cupiditate soluta. ",
            "learnerimage" => "https://www.infosectrain.com/wp-content/uploads/2024/02/St-Pierre-150x150.jpg",
            "learnername" => "Eric St-Pierre",
			"learnerlocation" => "Canada"
        ],
        [
            "testimonial" => "Lorem",
            "learnerimage" => "https://www.infosectrain.com/wp-content/uploads/2024/02/St-Pierre-150x150.jpg",
            "learnername" => "Eric St-Pierre",
			"learnerlocation" => "Canada"
        ],
        [
            "testimonial" => "Lorem",
            "learnerimage" => "https://www.infosectrain.com/wp-content/uploads/2024/02/St-Pierre-150x150.jpg",
            "learnername" => "Eric St-Pierre",
			"learnerlocation" => "Canada"
        ]
    ],
 "information-security-management-system-isms.php" => [
        [
            "testimonial" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, nostrum error voluptatum voluptatem, deserunt amet accusamus exercitationem quos quas aperiam expedita voluptas libero harum? Id repudiandae animi ducimus cupiditate soluta.",
            "learnerimage" => "https://www.infosectrain.com/wp-content/uploads/2024/02/St-Pierre-150x150.jpg",
            "learnername" => "Eric St-Pierre",
			"learnerlocation" => "Canada"
        ],
        [
            "testimonial" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, nostrum error voluptatum voluptatem, deserunt amet accusamus exercitationem quos quas aperiam expedita voluptas libero harum? Id repudiandae animi ducimus cupiditate soluta. ",
            "learnerimage" => "https://www.infosectrain.com/wp-content/uploads/2024/02/St-Pierre-150x150.jpg",
            "learnername" => "Eric St-Pierre",
			"learnerlocation" => "Canada"
        ],
        [
            "testimonial" => "Lorem",
            "learnerimage" => "https://www.infosectrain.com/wp-content/uploads/2024/02/St-Pierre-150x150.jpg",
            "learnername" => "Eric St-Pierre",
			"learnerlocation" => "Canada"
        ],
        [
            "testimonial" => "Lofffrem",
            "learnerimage" => "https://www.infosectrain.com/wp-content/uploads/2024/02/St-Pierre-150x150.jpg",
            "learnername" => "Eric St-Pierre",
			"learnerlocation" => "Canada"
        ]
    ],
];

// Function to find a matching course key
function matchTestipage($landingPage, $testimonialPagename) {
    foreach (array_keys($testimonialPagename) as $testiPageKey) {
        if (strpos($landingPage, $testiPageKey) !== false) {
            return $testiPageKey;
        }
    }
    return null;
}

// Find the matching course key
$matchingPageKey = matchTestipage($current_file_name, $testimonialPagename);
if ($matchingPageKey !== null) {
    $testimonialData = $testimonialPagename[$matchingPageKey];
?>
<section class="testimonial-sec">
         <div class="container">
          <div class="row gap-4">
            <div class="col-12">
              <div class="fs-28 text-center text-red f-raleway fw-bold">Words Have Power</h2>
              </div>
            </div>
    
            <div class="col-12">
              <div class="swiper myGladiators">
                <div class="swiper-wrapper">
                 <?php
            foreach ($testimonialData as $tesDat) {
            ?>
                  <!--/ col start /-->
                  <div class="swiper-slide border-grey border-radius-10 p-3 gladiators-item">
                    <div class="fs-16 f-nunito text-center text-dark-grey fw-normal">
                      <?php echo $tesDat['testimonial']; ?>
                    </div>
                    <div class="d-flex gap-3 mt-3 align-items-center">
                      <img src="<?php echo $tesDat['learnerimage']; ?>" alt=""
                        class="d-block">
                      <div>
                        <div class="fs-18 f-raleway fw-bold text-dark"><?php echo $tesDat['learnername']; ?></div>
                        <p class="mt-3"><?php echo $tesDat['learnerlocation']; ?></p>
                      </div>
                    </div>
                  </div>
                  <!--/ col start /-->
                      <?php
            }
            ?>      
                </div>
    
                <!-- swippper nav arrow start-->
                <div class="d-flex justify-content-center align-items-center gap-4 mt-md-4 mt-2 w-100 navigation">
                  <div class="swiper-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 18 16" fill="none">
                      <path
                        d="M17 7C17.5523 7 18 7.44772 18 8C18 8.55228 17.5523 9 17 9V7ZM0.292892 8.70711C-0.0976315 8.31658 -0.0976315 7.68342 0.292892 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292892 8.70711ZM17 9H1V7H17V9Z"
                        fill="#e50914" />
                    </svg>
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 18 16" fill="none">
                      <path
                        d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM17.7071 8.70711C18.0976 8.31658 18.0976 7.68342 17.7071 7.29289L11.3431 0.928932C10.9526 0.538408 10.3195 0.538408 9.92893 0.928932C9.53841 1.31946 9.53841 1.95262 9.92893 2.34315L15.5858 8L9.92893 13.6569C9.53841 14.0474 9.53841 14.6805 9.92893 15.0711C10.3195 15.4616 10.9526 15.4616 11.3431 15.0711L17.7071 8.70711ZM1 9H17V7H1V9Z"
                        fill="#e50914" />
                    </svg>
                  </div>
                </div>
                <!-- swippper nav arrow end-->
              </div>
            </div>
          </div>
        </div>    
</section>
<?php }?>