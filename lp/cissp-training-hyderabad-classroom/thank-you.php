
<!--<[thankyou header start]-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thankyou</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://www.infosectrain.com/pages/lp/thankyou/style.css">

    
  
</head>

<body>
<?php
// Extract the current landing page from the URL
$currentLandingPage = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$lasTFolder = basename(getcwd()); // last Dir Name get

if($lasTFolder =="comptia-security-training")
{
 $preparation_guide ="<a href='https://www.infosectrain.com/pages/lp/thankyou/mastering_CompTIA_Security_plus_(SY0-701).pdf' download='InfosecTrain' style='background:#FFFFFF; color:#CC6633; margin-top: 10px;'>Download Security+ Preparation Guide</a>";
}
elseif($lasTFolder =="ceh-v12-certification-training-online")
{
$preparation_guide ="<a href='https://www.infosectrain.com/pages/lp/thankyou/mastering_ceh.pdf' download='InfosecTrain' style='background:#FFFFFF; color:#CC6633; margin-top: 10px;'>Download CEH Preparation Guide</a>";
}
elseif($lasTFolder =="cissp-training")
{
$preparation_guide ="<a href='https://www.infosectrain.com/pages/lp/thankyou/CISSP_Certification_Exam_Preparation_Guide_v2.pdf' download='InfosecTrain' style='background:#FFFFFF; color:#CC6633; margin-top: 10px;'>Download CISSP Preparation Guide</a>";
}
elseif($lasTFolder =="cissp-training-dubai")
{
$preparation_guide ="<a href='https://www.infosectrain.com/pages/lp/thankyou/CISSP_Certification_Exam_Preparation_Guide_v2.pdf' download='InfosecTrain' style='background:#FFFFFF; color:#CC6633; margin-top: 10px;'>Download CISSP Preparation Guide</a>";
}
elseif($lasTFolder =="cissp-training-hyderabad-classroom")
{
$preparation_guide ="<a href='https://www.infosectrain.com/pages/lp/thankyou/CISSP_Certification_Exam_Preparation_Guide_v2.pdf' download='InfosecTrain' style='background:#FFFFFF; color:#CC6633; margin-top: 10px;'>Download CISSP Preparation Guide</a>";
}
elseif($lasTFolder =="soc-analyst-expert-online-training")
{
$preparation_guide ="<a href='https://www.infosectrain.com/pages/lp/thankyou/SOC_Preparation_Guide.pdf' download='InfosecTrain' style='background:#FFFFFF; color:#CC6633; margin-top: 10px;'>Download SOC Preparation Guide</a>";
}
elseif($lasTFolder =="rsa-archer-grc-training-online")
{
$preparation_guide ="<a href='https://www.infosectrain.com/pages/lp/thankyou/achieving_GRC_excellence_white_paper.pdf' download='InfosecTrain' style='background:#FFFFFF; color:#CC6633; margin-top: 10px;'>Download GRC Preparation Guide</a>";
}
elseif($lasTFolder =="soc")
{
$preparation_guide ="<a href='https://www.infosectrain.com/pages/download/SOC_Preparation_Guide.pdf' download='InfosecTrain' style='background:#FFFFFF; color:#CC6633; margin-top: 10px;'>Download SOC Preparation Guide</a>";
}
elseif($lasTFolder =="iso-iec-27001-lead-auditor-online")
{
$preparation_guide ="<a href='https://www.infosectrain.com/pages/download/how_to_become_an_IT_Auditor.pdf' download='InfosecTrain' style='background:#FFFFFF; color:#CC6633; margin-top: 10px;'>Download ISO LA Preparation Guide</a>";
}
elseif($lasTFolder =="iso-iec-27001-lead-implementer-online")
{
$preparation_guide ="<a href='https://www.infosectrain.com/pages/download/how_to_become_an_IT_Auditor.pdf' download='InfosecTrain' style='background:#FFFFFF; color:#CC6633; margin-top: 10px;'>Download ISO LI Preparation Guide</a>";
}
elseif($lasTFolder =="cisa-training")
{
$preparation_guide ="<a href='https://www.infosectrain.com/pages/download/how_to_become_an_IT_Auditor.pdf' download='InfosecTrain' style='background:#FFFFFF; color:#CC6633; margin-top: 10px;'>Download CISA Preparation Guide</a>";
}
else
{
 $preparation_guide ="<a href='https://www.infosectrain.com/pages/lp/thankyou/company-profile.pdf' download='InfosecTrain' style=''>Download Brochure</a>";
}
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5XZDRWG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!--/ nvbar start /-->
    <nav class="navbar thankyou-navbar py-3 py-md-4 sticky-top">
        <div class="container d-flex">
            <a class="navbar-brand w-50" href="https://www.infosectrain.com/" target="_blank">
                <img src="https://www.infosectrain.com/pages/lp/thankyou/img/logo.png" class="img-fluid">
            </a>
            <ul class="navbar-nav ms-auto m-0 d-flex flex-row">
                <li class="nav-item">
                    <a class="nav-link" href="https://api.whatsapp.com/send?phone=918767256840&amp;text=Hi"  target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 24 24" fill="none">
                            <path d="M12.0047 0H12C8.69063 0 5.69063 1.34531 3.51562 3.52031C1.34531 5.69062 0 8.69063 0 12C0 14.625 0.84375 17.0578 2.28281 19.0312L0.7875 23.4891L5.4 22.0125C7.29844 23.2734 9.5625 24 12.0047 24C18.6188 24 24 18.6187 24 12C24 5.38125 18.6188 0 12.0047 0ZM18.9844 16.9453C18.6938 17.7609 17.5453 18.4406 16.6312 18.6375C16.0031 18.7688 15.1875 18.8766 12.4266 17.7328C8.90156 16.2703 6.62813 12.6891 6.45 12.4547C6.28125 12.2203 5.025 10.5563 5.025 8.83594C5.025 7.11562 5.90156 6.27656 6.25312 5.91562C6.54375 5.62031 7.02188 5.48438 7.48125 5.48438C7.63125 5.48438 7.7625 5.49375 7.88437 5.49844C8.23594 5.5125 8.41406 5.53594 8.64844 6.08906C8.93906 6.7875 9.64219 8.50781 9.72656 8.68594C9.81094 8.86406 9.89531 9.10312 9.77813 9.3375C9.66563 9.57656 9.56719 9.68437 9.38906 9.89062C9.21094 10.0922 9.04219 10.2516 8.86875 10.4672C8.70469 10.6594 8.52187 10.8609 8.72812 11.2125C8.93437 11.5594 9.6375 12.7078 10.6734 13.6312C12.0141 14.8219 13.0969 15.2062 13.4859 15.3656C13.7766 15.4875 14.1188 15.4594 14.3297 15.2344C14.5969 14.9438 14.9297 14.4656 15.2672 13.9922C15.5063 13.6547 15.8109 13.6125 16.1297 13.7297C16.4531 13.8422 18.1688 14.6906 18.5203 14.8641C18.8719 15.0422 19.1062 15.1266 19.1906 15.2719C19.275 15.4312 19.275 16.125 18.9844 16.9453Z" fill="#4CAF50"/>
                        </svg>
                        <span class="d-none d-lg-inline-block">+91-87672-56840</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mailto:sales@infosectrain.com" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                            <g clip-path="url(#clip0_2032_2076)">
                                <rect x="2.53458" y="3.58972" width="22.9744" height="19.3846" fill="white" />
                                <path
                                    d="M22.6385 0H6.12292C2.95668 0 0.380737 2.57595 0.380737 5.74219V22.2578C0.380737 25.4241 2.95668 28 6.12292 28H22.6385C25.8048 28 28.3807 25.4241 28.3807 22.2578V5.74219C28.3807 2.57595 25.8048 0 22.6385 0ZM20.8724 7.98438L14.3784 14.4782L7.88457 7.98438H20.8724ZM6.0001 18.4862C5.93907 18.3714 5.90417 18.2406 5.90417 18.1016V8.80469C5.90417 8.66567 5.93907 8.5348 6.0001 8.42007L11.0332 13.4531L6.0001 18.4862ZM7.88457 18.9219L12.1932 14.6132L14.3785 16.7985L16.566 14.611L20.8769 18.9219H7.88457ZM22.8573 18.1016C22.8573 18.2406 22.8224 18.3714 22.7614 18.4862L17.726 13.4509L22.7598 8.41701C22.822 8.53245 22.8573 8.66441 22.8573 8.80469V18.1016Z"
                                    fill="#40C351" />
                            </g>
                            <defs>
                                <clipPath id="clip0_2032_2076">
                                    <rect width="28" height="28" fill="white" transform="translate(0.380737)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="d-none d-lg-inline-block">sales@infosectrain.com</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!--/ nabare end /-->

    <!--/ thankyou banner /-->
    <section class="thankyou-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="item text-md-start text-center">
                        <h1>Thank You!</h1>
                        <span>We've received your request.</span>
                        <img src="https://www.infosectrain.com/pages/lp/thankyou/img/mobile-banner.png" class="d-block mx-auto w-25 d-md-none">
                        <p>
                            Our team will try contacting you shortly. <br>
                            Meanwhile, you can either go back or view our <br>
                            latest trending courses.
                        </p>
                        <!--<a href="https://www.infosectrain.com/pages/lp/thankyou/company-profile.pdf" download="InfosecTrain">Download Brochure</a>-->
                        <?php echo $preparation_guide;?>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="item">
                        <img src="https://www.infosectrain.com/pages/lp/thankyou/img/banner.png" class="d-block mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ thankyou end /-->
<!--<[thankyou header end]-->

<!--/ thankyou courses start /-->
    <?php
        $customHeading = 'Are you looking for more <strong>Courses & Certifications?</strong>';
        include('../lp-components/related-courses.php');
    ?>
    <!--/ thankyou courses end /-->

    <!--/ thankyou video start /-->
    <section class="thankyou-courses thankyou-sec" style="background: #ffffff;">
        <div class="container">
            <!--/ heading star /-->
            <div class="row">
                <div class="col-12 thankyou-h2">
                    Are you looking for more videos on <span>YouTube?</span>
                </div>
            </div>
            <!--/ heading end /-->
            <div class="row">
                <!--/card start /-->
                <div class="col-lg-3 col-6">
                    <div class="thankyou--card-item">
                        <img src="https://i.ytimg.com/vi/2BomC_mXr-E/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLATlNcfTqdYbH5QOI-IsKAqm4kJUA" alt="">
                        <h4>CISSP 2024 Insights: Bridging the Gap Between 2021 and 2024</h4>
                        <a href="https://www.youtube.com/watch?v=2BomC_mXr-E" title="CISSP 2024 Insights: Bridging the Gap Between 2021 and 2024" target="_blank">CHECK NOW</a>
                    </div>
                </div>
                <!--/card end /-->
                <!--/card start /-->
                <div class="col-lg-3 col-6">
                    <div class="thankyou--card-item">
                        <img src="https://i.ytimg.com/vi/US4PRNh1ko4/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDvjjDEfyHS122v5h99NQ6L5RlVPA" alt="">
                        <h4>CISSP Training Videos (ISC)2 </h4>
                        <a href="https://www.youtube.com/watch?v=US4PRNh1ko4&list=PLOWdy-NBQHJsW1US76J9R7KYugTKfCgfu" title="CISSP Training Videos (ISC)2" target="_blank">CHECK NOW</a>
                    </div>
                </div>
                <!--/card end /-->
                <!--/card start /-->
                <div class="col-lg-3 col-6">
                    <div class="thankyou--card-item">
                        <img src="https://i.ytimg.com/vi/vV9ARroxRsQ/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLC475Yg5nSVG3v1ipIcwmt7IzW3zw" alt="">
                        <h4>CISSP Full Domain Free Training Videos</h4>
                        <a href="https://www.youtube.com/watch?v=vV9ARroxRsQ&list=PLOWdy-NBQHJuF-DLGbvBkQ8eXjXzeuTXV" title="CISSP Full Domain Free Training Videos" target="_blank">CHECK NOW</a>
                    </div>
                </div>
                <!--/card end /-->
                <!--/card start /-->
                <!--<div class="col-lg-3 col-6">
                    <div class="thankyou--card-item">
                        <img src="img/card.png" alt="">
                        <h4>What is BloodHound? How to Install & Setup BloodHound?</h4>
                        <a href="#">CHECK NOW</a>
                    </div>
                </div>-->
                <!--/card end /-->
            </div>
        </div>
    </section>
    <!--/ thankyou video end /-->

    <!--/ thankyou blog start /-->
    <section class="thankyou-courses thankyou-sec">
        <div class="container">
            <!--/ heading star /-->
            <div class="row">
                <div class="col-12 thankyou-h2">
                    Are you looking for more <span>Blogs?</span>
                </div>
            </div>
            <!--/ heading end /-->
            <div class="row">

                <!--/card start /-->
                <div class="col-lg-3 col-6">
                    <div class="thankyou--card-item">
                        <img src="https://www.infosectrain.com/wp-content/uploads/2024/02/CISSP-2021-vs.-New-CISSP-2024.jpg">
                        <h4>CISSP 2021 vs. New CISSP 2024</h4>
                        <a href="https://www.infosectrain.com/blog/cissp-2021-vs-new-cissp-2024/" target="_blank" title="CISSP 2021 vs. New CISSP 2024">CHECK NOW</a>
                    </div>
                </div>
                <!--/card end /-->
                
                <!--/card start /-->
                <div class="col-lg-3 col-6">
                    <div class="thankyou--card-item">
                        <img src="https://www.infosectrain.com/wp-content/uploads/2024/04/CISSP-2024-Domains.jpg">
                        <h4>CISSP 2024 Domains: Navigating the Latest Updates</h4>
                        <a href="https://www.infosectrain.com/blog/cissp-2024-domains-navigating-the-latest-updates/" target="_blank" title="CISSP 2024 Domains: Navigating the Latest Updates">CHECK NOW</a>
                    </div>
                </div>
                <!--/card end /-->
                
                <!--/card start /-->
                <div class="col-lg-3 col-6">
                    <div class="thankyou--card-item">
                        <img src="https://www.infosectrain.com/wp-content/uploads/2022/11/CISSP-Exam.jpg">
                        <h4>How To Prepare For CISSP Exam in 2024</h4>
                        <a href="https://www.infosectrain.com/blog/how-to-prepare-for-cissp-exam/" target="_blank" title="How To Prepare For CISSP Exam in 2024">CHECK NOW</a>
                    </div>
                </div>
                <!--/card end /-->
                
                <!--/card start /-->
                <div class="col-lg-3 col-6">
                    <div class="thankyou--card-item">
                        <img src="https://www.infosectrain.com/wp-content/uploads/2023/11/CISM-vs-CISSP.jpg">
                        <h4>CISM vs CISSP: Where to Start?</h4>
                        <a href="https://www.infosectrain.com/blog/cism-vs-cissp-where-to-start/" target="_blank" title="CISM vs CISSP: Where to Start?">CHECK NOW</a>
                    </div>
                </div>
                <!--/card end /-->
                
                <!--/card start /-->
                <!--<div class="col-lg-3 col-6">
                    <div class="thankyou--card-item">
                        <img src="https://www.infosectrain.com/wp-content/uploads/2023/11/Whats-New-in-the-CISSP-Certification-Exam-in-2024.jpg">
                        <h4>What's New in the CISSP Certification Exam in 2024?</h4>
                        <a href="https://www.infosectrain.com/blog/whats-new-in-the-cissp-certification-exam/" target="_blank" title="Whats New in the CISSP Certification Exam in 2024?">CHECK NOW</a>
                    </div>
                </div>-->
                <!--/card end /-->
                
            </div>
        </div>
    </section>
    <!--/ thankyou blog end /-->
    
    


<!--<[thankyou header start]-->
<?php include '../thankyou/thankyou-footer.php'?>
<!--<[thankyou header end]-->