<?php
$relatedCourses = [
    "cissp-training" => [
        [
            "link" => "Enz4VWWbTN4",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/08/richa.jpg"
        ],
        [
            "link" => "MOpJx_39cKQ",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/08/Anil-Gangwani.jpg"
        ],
        [
            "link" => "aRgbDM2iOIw",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/08/B-Santosh-Patnaik.jpg"
        ],
        [
            "link" => "4Bl7v-YONjE",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/08/Balakrishnan.jpg"
        ]
    ],
    "ccsp-training-online" => [
        [
            "link" => "DSjVtlhhvn8",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/10/MOHAMAD-ISMAIL1.webp"
        ],
        [
            "link" => "Enz4VWWbTN4",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/08/richa1.webp"
        ],
        [
            "link" => "2gtChY8Gw1o",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/10/Shubhrangshu_1_.webp"
        ]
    ],
    "cisa-training" => [
        [
            "link" => "TdrUlwDjLiQ",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/10/AKSHAY1.webp"
        ],
        [
            "link" => "rYMslfn-0w0",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/08/Prashanth1.webp"
        ],
        [
            "link" => "6UMy7NEzt5I",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/08/Rajat-Sharma1.webp"
        ]
    ],
    "cism-training" => [
        [
            "link" => "hV7faGNme6A",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/08/Anand1.webp"
        ],
        [
            "link" => "xYIMihmx4vc",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/08/Harshit-Mathur1.webp"
        ],
        [
            "link" => "Y7CURes_Xl0",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/10/SANJAY_1_.webp"
        ],
        [
            "link" => "Y7CURes_Xl0",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/10/SANJAY_1_.webp"
        ]
    ],
	"ceh-new24" => [
        [
            "link" => "Mw_Xq7Uv5Eo",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/08/Jyothi-Balachandra.jpg"
        ],
        [
            "link" => "U9vHLsbnyhM",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/08/Pranay-Paliwal-1.jpg"
        ]
    ],
    // Add data for other courses
];



// Extract the current landing page from the URL
$currentLandingPage = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
// Extract videoIds from the nested arrays
$videoIds = array_column($relatedCourses[$currentLandingPage], 'link');
// If the landing page has a trailing slash, remove it
$currentLandingPage = rtrim($currentLandingPage, '/');

$courses = $relatedCourses[$currentLandingPage];
?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Success Story</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- col start -->
            <?php
            foreach ($courses as $course) {
            ?>
                <div class="col-lg-3 col-6 mt-4 video-thumbnail" data-bs-toggle="modal" data-bs-target="#sucessstory-modal">
                    <div class="item">
                        <img src="<?php echo $course['image']; ?>" alt="" style="width:100%;margin:auto;display:block;border-radius:5px;">
                    </div>
                </div>
            <?php
            }
            ?>
            <!-- col end -->
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="sucessstory-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">
        <iframe width="100%" id="video-iframe" frameborder="0" allowfullscreen style="width:100%;aspect-ratio: 1;"></iframe>
      </div>
    </div>
  </div>
</div>

<script>
    // Array to store YouTube video IDs
    //const videoIds = ["hV7faGNme6A", "xYIMihmx4vc"];

    const videoIds = <?= json_encode($videoIds); ?>;

    console.log(videoIds)

    // Array to store YouTube video links
    const videoLinks = videoIds.map(videoId => `https://www.youtube.com/embed/${videoId}?autoplay=1&mute=1`);

    // Get all thumbnail elements
    const thumbnails = document.querySelectorAll('.video-thumbnail');

    // Add click event listeners to each thumbnail
    thumbnails.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', function() {
        const videoLink = videoLinks[index];
        this.setAttribute('data-video', videoLink);
        openVideoModal(videoLink);
        });
    });

    // Function to open the video modal
    function openVideoModal(videoLink) {
        const videoIframe = document.getElementById('video-iframe');
        videoIframe.src = videoLink;
    }

    // Function to close the video modal
    function closeVideoModal() {
        const videoIframe = document.getElementById('video-iframe');
        videoIframe.src = '';
    }
</script>