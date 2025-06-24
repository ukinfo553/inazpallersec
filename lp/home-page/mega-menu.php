<style>

    .ppp{
        background: #ffffff;
        width: 100%;
        padding: 10px;
        display: block;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid #f0f0f0;
        border-right: 0;
        border-radius: 5px 0 0 5px;
        margin:10px 0 0 0;
    }
    .pppp{
        background: #ffffff;
        width: 100%;
        padding: 10px;
        display: block;
        display: flex;
        justify-content: center;
        align-items: center;
        margin:10px 0 0 0;
    }


    .vendor-tab-pills{
        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }
    .vendor-tab-pills a.active{
        text-decoration: none;
        color: #ff1046!important;
        background: #FFECF2;
        border-radius: 5px;
    }
    .vendor-tab-pills a{
        font-size: 14px;
        color: #010101;
        letter-spacing: 1px;
        line-height: normal;
        display: block;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        padding: 12px 8px;
    }
    .vendor-tab-pills a:hover{
        text-decoration: none;
        color: #ff1046!important;
        background: #FFECF2;
        border-radius: 5px;
    }

    .vendor-nav-col .col-6{
        height: 438px;
        min-height: 438px;
        overflow-y: hidden;
    }
    .vendor-nav-col .col-6:hover{
        overflow-y: scroll;
    }
    .vendor-nav-col .col-6::-webkit-scrollbar {
        width: 5px;
    }

    .vendor-nav-col .col-6::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px #ffffff;
        border-radius: 10px;
    }

    .vendor-nav-col .col-6::-webkit-scrollbar-thumb {
        background:rgb(240 199 207);
        border-radius: 10px;
    }
    .vendor-nav-col .col-6::-webkit-scrollbar-thumb:hover {
        background: rgb(240 199 207);
    }



    .top-trending-course-col .trending-course-list{
        height: 438px;
        min-height: 438px;
        overflow-y: hidden;
    }
    .top-trending-course-col .trending-course-list:hover{
        overflow-y: scroll;
    }
    .top-trending-course-col .trending-course-list::-webkit-scrollbar {
        width: 5px;
    }

    .top-trending-course-col .trending-course-list::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px #f0f0f0;
        border-radius: 10px;
    }

    .top-trending-course-col .trending-course-list::-webkit-scrollbar-thumb {
        background:rgb(240 199 207);
        border-radius: 10px;
    }
    .top-trending-course-col .trending-course-list::-webkit-scrollbar-thumb:hover {
        background: rgb(240 199 207);
    }


    /* .navbar .dropdown-menu{
        width: 90%;
        left: 50%;
        transform: translateX(-50%);
    } */
</style>

<?php
$aboutus_menu = [
    "https://www.infosectrain.com/about-us/" => "About InfosecTrain",
    "https://www.infosectrain.com/leadership/" => "Our Team",
    "https://www.infosectrain.com/instructors/" => "Our Instructors",
    "https://www.infosectrain.com/success-stories/" => "Success Stories",
    "https://www.infosectrain.com/customers-review/" => "Testimonials",
    "https://www.infosectrain.com/career/" => "Careers"
];

$services_menu = [
    "https://www.infosectrain.com/corporate-training/" => "Corporate Training",
    "https://www.infosectrain.com/hire-a-trainer/" => "Hire-a-Trainer",
    "https://www.infosectrain.com/one-on-one-training/" => "1-on-1 Training",
    "https://www.infosectrain.com/career-mentorship-program/" => "career mentorship program",
    "https://www.azpirantz.com/" => "Consulting Services",
];

$free_resources_menu = [
    "https://www.infosectrain.com/events/" => "free events",
    "https://www.infosectrain.com/free-practice-tests/" => "free practice tests",
    "https://www.infosectrain.com/free-cybersecurity-training/" => "free cybersecurity training",
    "https://www.infosectrain.com/category/interview-questions/" => "interview questions",
    "https://www.infosectrain.com/membership/" => "membership",
    "https://www.infosectrain.com/blog/" => "blog",
];


$domain_expertise_menu = [
    "https://www.infosectrain.com/events/" => "free events",
    "https://www.infosectrain.com/free-practice-tests/" => "free practice tests",
    "https://www.infosectrain.com/free-cybersecurity-training/" => "free cybersecurity training",
    "https://www.infosectrain.com/category/interview-questions/" => "interview questions",
    "https://www.infosectrain.com/membership/" => "membership",
    "https://www.infosectrain.com/blog/" => "blog",
];

// carrer oriented course start //
$carrerargs = array(
    'numberposts' => 12,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type' => 'courses',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'id',
            'terms' => 509,
        ),
    ),
);
$career_oriented_desktop = $carrerargs;
$career_oriented_mobile = $carrerargs;
// carrer oriented course end //

// combo course start //
$combo_category_id = 364;
$comboargs = array(
    'post_type'  => 'courses',
    'category__in' => $combo_category_id,
    'posts_per_page' => 12, // -1 to display all posts, or set a specific number
    'order'=> 'DESC',
    'orderby' => 'post__in',
    'post__in'       => array(32776, 37125,38914,34416,37132,32779,33588,33714,33747,33731,32773),
);
$top_combo_desktop = $comboargs;
$top_combo_mobile = $comboargs;
// combo course end //
?>

<nav class="navbar navbar-expand-lg main-mega-menu">
        <div class="nav-container navbar-container position-relative">
            <a class="navbar-brand" href="/">
                <img src="https://www.infosectrain.com/wp-content/uploads/2024/01/infosectrain-logo-dark.png" alt="InfosecTrain" />
            </a>

            <!--/ desktop view menu start -->
            <ul class="navbar-nav m-auto d-lg-flex d-none">
                    <li class="megamenu-nav-item dropdown mega-menu-dropdown">
                        <a class="megamenu-nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Courses
                        </a>
                        <div class="dropdown-menu mega-menu">
                            <div class="row m-0">
                                <!--<[col start]>-->
                                <div class="col-3 item">
                                    <div class="mega-menu-opt-tabs">
                                        <div class="mega-menu-col-heading">find your training</div>
                                        <div class="nav flex-column nav-pills w-100" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="mega-menu-tab-link active"     id="v-pills-course-vendor-tab" data-toggle="pill" href="#v-pills-course-vendor" role="tab" aria-controls="v-pills-course-vendor" aria-selected="true">Courses by Vendor</a>
                                            <a class="mega-menu-tab-link"            id="v-pills-domain-expertise-tab" data-toggle="pill" href="#v-pills-domain-expertise" role="tab" aria-controls="v-pills-domain-expertise" aria-selected="false">By Domain/Expertise</a>
                                            <a class="mega-menu-tab-link"            id="v-pills-career-oriented-tab" data-toggle="pill" href="#v-pills-career-oriented" role="tab" aria-controls="v-pills-career-oriented" aria-selected="false">
                                                Career-Oriented Courses
                                            </a>
                                            <a class="mega-menu-tab-link"            id="v-pills-combo-courses-tab" data-toggle="pill" href="#v-pills-combo-courses" role="tab" aria-controls="v-pills-combo-courses" aria-selected="false">
                                                <span class="course-marker">top</span>
                                                Combo Courses
                                            </a>
                                            <a class="mega-menu-tab-link" id="v-pills-new-course-tab" data-toggle="pill" href="#v-pills-new-course" role="tab" aria-controls="v-pills-new-course" aria-selected="false">
                                                <span class="course-marker">new</span>
                                                Courses
                                            </a>
                                            <a class="mega-menu-tab-link" href="https://www.infosectrain.com/free-cybersecurity-training/">
                                                <span class="course-marker">free</span>
                                                Cybersecurity Training
                                            </a>
                                            <a class="mega-menu-tab-link" href="https://www.infosectrain.com/self-paced-learning/">Self-Paced Learning</a>
                                        </div>
                                        <div class="image-sec">
                                            <img src="menu.png" alt="" class="w-50 d-block m-auto">
                                        </div>
                                    </div>
                                </div>
                                <!--<[col end]>-->

                                <!--<[col start]>-->
                                <div class="col-9 item-two">
                                    <div class="tab-content overflow-hidden" id="v-pills-tabContent">

                                        <!-- Course by Vendor /-->
                                        <div class="tab-pane fade show active" id="v-pills-course-vendor" role="tabpanel" aria-labelledby="v-pills-course-vendor-tab" style="padding-top:12px;">
                                            <div class="mega-menu-v-tabs">
                                                <!--/ row start /-->
                                                <div class="row m-0">
                                                    <div class="col-6 vendor-nav-col p-0">
                                                        <h5 class="mega-menu-vendor-heading w-100">vendors</h5>
                                                        <div class="row m-0">
                                                            <div class="col-6">
                                                                <div class="nav vendor-tab-pills d-block nav-pills w-100" data-mouse="hover" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                                    <a class="mega-menu-tab-link active"  onclick="window.location='https://www.infosectrain.com/vendor/ec-council-certification-training-courses/';"   id="v-pills-course-vendora-tab" data-toggle="pill" href="#v-pills-course-vendora" role="tab" aria-controls="v-pills-course-vendora" aria-selected="true">EC Council</a>
                                                                    <a class="mega-menu-tab-link"         onclick="window.location='https://www.infosectrain.com/vendor/isc2-training-courses/';"   id="v-pills-course-vendorb-tab" data-toggle="pill" href="#v-pills-course-vendorb" role="tab" aria-controls="v-pills-course-vendorb" aria-selected="false">(ISC)2</a>
                                                                    <a class="mega-menu-tab-link"         onclick="window.location='https://www.infosectrain.com/vendor/isaca-training-courses/';"   id="v-pills-course-vendorc-tab" data-toggle="pill" href="#v-pills-course-vendorc" role="tab" aria-controls="v-pills-course-vendorc" aria-selected="false">ISACA</a>
                                                                    <a class="mega-menu-tab-link"         onclick="window.location='https://www.infosectrain.com/vendor/iapp-certification-training/';"   id="v-pills-course-vendord-tab" data-toggle="pill" href="#v-pills-course-vendord" role="tab" aria-controls="v-pills-course-vendord" aria-selected="false">IAPP</a>
                                                                    <a class="mega-menu-tab-link"         onclick="window.location='https://www.infosectrain.com/vendor/pecb-training-courses/';"   id="v-pills-course-vendore-tab" data-toggle="pill" href="#v-pills-course-vendore" role="tab" aria-controls="v-pills-course-vendore" aria-selected="false">PECB/ISO</a>
                                                                    <a class="mega-menu-tab-link"         onclick="window.location='https://www.infosectrain.com/vendor/comptia-certification-training/';"   id="v-pills-course-vendorf-tab" data-toggle="pill" href="#v-pills-course-vendorf" role="tab" aria-controls="v-pills-course-vendorf" aria-selected="false">CompTIA</a>
                                                                    <a class="mega-menu-tab-link"         onclick="window.location='https://www.infosectrain.com/vendor/amazon-aws-training-courses/';"   id="v-pills-course-vendorg-tab" data-toggle="pill" href="#v-pills-course-vendorg" role="tab" aria-controls="v-pills-course-vendorg" aria-selected="false">AWS</a>
                                                                    <a class="mega-menu-tab-link"         onclick="window.location='https://www.infosectrain.com/vendor/cloud-security-alliance-training-courses/';"   id="v-pills-course-vendorh-tab" data-toggle="pill" href="#v-pills-course-vendorh" role="tab" aria-controls="v-pills-course-vendorh" aria-selected="false">Cloud Security Alliance</a>
                                                                    <a class="mega-menu-tab-link"         onclick="window.location='https://www.infosectrain.com/vendor/microsoft-training-certification-courses/';"   id="v-pills-course-vendori-tab" data-toggle="pill" href="#v-pills-course-vendori" role="tab" aria-controls="v-pills-course-vendori" aria-selected="false">Microsoft</a>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">

                                                                <div class="tab-content" id="v-pills-tabContent">
                                                                    <div class="tab-pane active" id="v-pills-course-vendora" role="tabpanel" aria-labelledby="v-pills-course-vendora-tab">
                                                                        <ul class="list-unstyled list-group w-100">
                                                                            <li><a href="https://www.infosectrain.com/courses/certified-ethical-hacker-ceh-training/">CEH v12</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/computer-hacking-forensics-investigator-chfi-training-certification/">CHFI v10</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/cnd-certification-training/">CND v2</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/cciso-certification-online-training/">CCISO</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/certified-devsecops-engineer-training/">E|CDE</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/eccouncil-cpent-training-and-certification-course/">EC-Council CPENT</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/certified-soc-analyst-csa-certification-training/">CSA</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/ec-council-certified-incident-handler-ecih/">ECIH</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/ec-council-certified-encryption-specialist-eces/">ECES</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/ec-council-disaster-recovery-professional-edrp/">Disaster Recovery Professional v3</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/eccouncil-certified-application-security-engineer-case-dot-net-training-course/">CASE</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/eccouncil-certified-application-security-engineer-case-java-training-course/">CASE</a></li>

                                                                        </ul>
                                                                    </div>

                                                                    <div class="tab-pane" id="v-pills-course-vendorb" role="tabpanel" aria-labelledby="v-pills-course-vendorb-tab">
                                                                        <ul class="list-unstyled list-group w-100">
                                                                            <li><a href="https://www.infosectrain.com/courses/cissp-certification-training/">CISSP</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/ccsp-certification-training/">CCSP</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/cissp-issap-certification-training/">CISSP-ISSAP</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/sscp-certification-training/">SSCP</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/cgrc-training/">CGRC</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/csslp-certification-training/">CSSLP</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tab-pane" id="v-pills-course-vendorc" role="tabpanel" aria-labelledby="v-pills-course-vendorc-tab">
                                                                        <ul class="list-unstyled list-group w-100">
                                                                            <li><a href="https://www.infosectrain.com/courses/cisa-certification-training/">CISA</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/cism-certification-training/">CISM</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/crisc-certification-training/">CRISC</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/cgeit-certification-training/">CGEIT</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/cdpse-certification-training/">CDPSE</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/ccak-certification-training/">CCAK</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tab-pane" id="v-pills-course-vendord" role="tabpanel" aria-labelledby="v-pills-course-vendord-tab">
                                                                        <ul class="list-unstyled list-group w-100">
                                                                            <li><a href="https://www.infosectrain.com/courses/european-privacy-training-cippe/">CIPP/E</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/certified-information-privacy-manager-cipm-training/">CIPM</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/certified-information-privacy-technologist-cipt-training/">CIPT</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tab-pane" id="v-pills-course-vendore" role="tabpanel" aria-labelledby="v-pills-course-vendore-tab">
                                                                        <ul class="list-unstyled list-group w-100">
                                                                            <li><a href="https://www.infosectrain.com/courses/iso27001f/">ISO/IEC 27001 Foundation</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/iso27001la/">ISO/IEC 27001:2022 LA</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/iso27001li/">ISO/IEC 27001:2022 LI</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/iso22301f/">ISO 22301 Foundation</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/iso22301li/">ISO 22301 LI</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/iso22301la/">ISO 22301 LA</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/iso20000f/">ISO/IEC 20000 Foundation</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/iso20001li/">ISO/IEC 20000  (ITSM) LI</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/iso20000la/">ISO/IEC 20000 (ITSM) LA</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/iso37001la/">ISO 37001 LA</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/iso2000itsm/">ISO 2000 (ITSM) LI</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/iso-31000-risk-manager-certification-training/">ISO 31000: Risk Manager</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/iso9001f/">ISO 9001 Foundation</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tab-pane" id="v-pills-course-vendorf" role="tabpanel" aria-labelledby="v-pills-course-vendorf-tab">
                                                                        <ul class="list-unstyled list-group w-100">
                                                                            <li><a href="https://www.infosectrain.com/courses/comptia-security/">CompTIA Security+</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/comptia-cysa-certification-training/">CompTIA CySA+</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/comptia-pentest-certification-training/">CompTIA PenTest+</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/comptia-network-certification/">CompTIA Network+</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/comptia-advanced/">CASP+</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/comptia-cloud-plus-certification/">CompTIA Cloud+</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/comptia-a-plus-training-course/">CompTIA A+</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/comptia-it-fundamentals-training/">CompTIA IT Fundamentals</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/comptia-data-plus-certification-training/">CompTIA Data+</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/comptia-security-syo-601-training/">CompTIA Security+ SYO-601</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tab-pane" id="v-pills-course-vendorg" role="tabpanel" aria-labelledby="v-pills-course-vendorg-tab">
                                                                        <ul class="list-unstyled list-group w-100">
                                                                            <li><a href="https://www.infosectrain.com/courses/aws-combo-course-training/">AWS Combo</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/cloud-security-expert-combo-training/">Cloud Security Expert</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/cloud-architect-expert-combo-training/">Cloud Architect Expert</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/aws-cloud-penetration-testing-training/">AWS Cloud Penetration Testing</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/aws-cloud-practitioner-training/">AWS Cloud Practitioner</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/aws-solutions-architect-training/">AWS Solution Architect – Associate (SAA – C03)</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/aws-solutions-architect-professional-certification-training/">AWS Certified Solutions Architect</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/aws-certified-sysops-administrator-associate-certification-training/">AWS Certified SysOps Administrator – Associate</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/aws-certified-security-specialty-training/">AWS Certified Security Specialty (SCS-C02)</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/aws-advanced-architect-combo-training/">AWS Advanced Architect Combo</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tab-pane" id="v-pills-course-vendorh" role="tabpanel" aria-labelledby="v-pills-course-vendorh-tab">
                                                                        <ul class="list-unstyled list-group w-100">
                                                                            <li><a href="https://www.infosectrain.com/courses/ccsk-certificate-cloud-security-knowledge-training/">CCSK</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/certificate-cloud-security-knowledge-ccsk/">CCSK Plus</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/ccak-certification-training/">CCAK</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tab-pane" id="v-pills-course-vendori" role="tabpanel" aria-labelledby="v-pills-course-vendori-tab">
                                                                        <ul class="list-unstyled list-group w-100">
                                                                            <li><a href="https://www.infosectrain.com/courses/az-500-microsoft-azure-security-technologies-training/">Microsoft AZ-500</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/azure-sentinel-training/">Microsoft Sentinel</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/microsoft-azure-fundamentals-online-training-certification-course/">AZ-900</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/az-104-microsoft-azure-administrator-training-certification/">AZ-104</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/microsoft-azure-architect-design-online-training-certification-course/">AZ-304/AZ-301</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/microsoft-azure-architect-technologies-online-training-certification-course/">AZ-303 / AZ-300</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/microsoft-azure-devops-solutions-az-400/">AZ- 400</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/microsoft-cybersecurity-architect-sc-100-training/">Exam SC-100:</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/sc-200-exam-training/">Exam SC 200</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/sc-300-exam-training/">Exam SC-300</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/sc-900-exam-training/">Exam SC-900</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/sc-400-exam-training/">Exam SC 400</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/microsoft-azure-infrastructure-az305-training/">AZ-305T00</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/microsoft-dp-090t00-a-implementing-a-machine-learning-solution-with-azure-databricks-training/">DP-090</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/microsoft-azure-dp-100-training/">Microsoft Azure Data Scientist Associate (DP-100)</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/ai-102-azure-certification-training/">AI-102 Microsoft Azure AI Solution</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/ms-900-microsoft-365-fundamentals-training/">Microsoft 365 Fundamentals (MS-900)</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/ms-102-microsoft-365-administrator-training-course/">MS-102: Microsoft 365 Administrator</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/microsoft-365-security-administration-ms-500/">Exam MS-500: Microsoft 365 Security</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/developing-solutions-microsoft-azure-training/">Exam AZ-204</a></li>
                                                                            <li><a href="https://www.infosectrain.com/courses/microsoft-azure-iot-developer-training-az-220/">AZ- 220</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mega-menu-vendor-heading ppp text-center">
                                                            <a href="https://www.infosectrain.com/vendor/" class="d-flex justify-content-between"
                                                                style="
                                                                    color: #EE224A;
                                                                    border: 1px solid #ee224a;
                                                                    padding: 4px 30px;
                                                                    border-radius: 5px;
                                                                    font-weight: 600;
                                                                    font-size: 13px;
                                                                ">
                                                                <span style="color:#EE224A;">VIEW ALL VENDORS &#8594;</span>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="col-6 top-trending-course-col" style="border-radius: 5px 5px 5px 0; background: #f0f0f0; padding: 10px 0 0;border:1px solid #f0f0f0;">
                                                        <div class="mega-menu-vendor-heading text-center">
                                                            <span style="border-radius: 3px; background: linear-gradient(267deg, #ee224a -15.61%, #ff8a00 123.55%); color: #ffffff; display: inline; margin: 0 5px 0 0; padding: 5px; text-align: center;font-size: 12px;text-align: center;">
                                                                TOP
                                                            </span>
                                                            Trending Courses
                                                        </div>
                                                        <!--<[col start]>-->
                                                        <div class="d-flex justify-content-between position-relative trending-course-list" style="border-radius: 5px; background: #f0f0f0; padding: 20px;">
                                                            <!--<[ul list start]>-->
                                                            <ul class="list-unstyled list-group">
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/cissp-certification-training/">CISSP</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/ccsp-certification-training/">CCSP</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/cisa-certification-training/">CISA</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/cism-certification-training/">CISM</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/crisc-certification-training/">CRISC</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/certified-ethical-hacker-ceh-training/"> CEH v12</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/comptia-security/"> Security+</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/european-privacy-training-cippe/">CIPP/E</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/certified-information-privacy-manager-cipm-training/">CIPM</a>
                                                                </li>

                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/certified-information-privacy-technologist-cipt-training/">CIPT</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/certificate-cloud-security-knowledge-ccsk/">CCSK</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/cyber-security-expert-training/">Cyber Security Expert</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/soc-analyst-training/">SOC Analyst</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/soc-specialist-training/">SOC Specialist</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/iso27001la/">ISO 27001:2022 LA</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/iso27001li/">ISO 27001:2022 LI</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/aws-combo-course-training/"> AWS Combo</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/advanced-penetration-testing-online-training-course/">Advanced Penetration Testing</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/information-systems-auditor-online-training/">Information Systems Auditor</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/cloud-governance-security-training/">Advance Cloud Security Governance</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/cyberark-training/">CyberArk Training</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/sailpoint-training/">Sailpoint IdentityIQ Implementation</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/threat-hunting-training/">Threat Hunting Professional</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.infosectrain.com/courses/az-500-microsoft-azure-security-technologies-training/">AZ-500 : Microsoft Azure Security</a>
                                                                </li>
                                                            </ul>
                                                            <!--<[ul list end]>-->
                                                        </div>
                                                        <!--<[col start]>-->
                                                        <div class="mega-menu-vendor-heading text-center pppp">
                                                            <a href="https://www.infosectrain.com/courses/" class="d-flex justify-content-between"
                                                                style="
                                                                    color: #EE224A;
                                                                    border: 1px solid #ee224a;
                                                                    padding: 4px 30px;
                                                                    border-radius: 5px;
                                                                    font-weight: 600;
                                                                    font-size: 13px;
                                                                ">
                                                                <span style="color:#EE224A;">VIEW ALL COURSES &#8594;</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/ row end /-->
                                            </div>
                                        </div>
                                        <!-- End Course by Vendor /-->

                                        <!--/ by domain expertise start /-->
                                        <div class="tab-pane fade" id="v-pills-domain-expertise" role="tabpanel" aria-labelledby="v-pills-domain-expertise-tab">
                                            <div class="mega-menu-v-tabs">
                                                <!--/ row start /-->
                                                <div class="row">
                                                    <div class="col-3 domain-expertise-col">
                                                        <a href="https://www.infosectrain.com/cybersecurity-certification-training/">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="30" viewBox="0 0 26 30" fill="none">
                                                                <g clip-path="url(#clip0_4191_3045)">
                                                                  <path d="M25.44 4.20125C25.08 3.84125 24.48 3.60125 24 3.60125H22.92C20.52 3.60125 18.24 3.00125 16.2 1.68125L13.56 0.12125C13.2 0.00125 12.84 0.00125 12.48 0.12125L9.84 1.80125C7.8 3.00125 5.52 3.60125 3.12 3.60125H2.04C0.96 3.60125 0 4.56125 0 5.64125V13.2013C0 19.8013 3.84 25.8013 9.84 28.5613L12.6 29.8813C12.84 30.0013 13.2 30.0013 13.44 29.8813L16.2 28.5613C22.08 25.6812 25.92 19.6813 25.92 13.2013V5.64125C26.04 5.04125 25.8 4.56125 25.44 4.20125ZM3.12 5.64125C5.88 5.64125 8.52 4.92125 10.8 3.48125L12.96 2.16125L15.12 3.48125C17.4 4.92125 20.16 5.64125 22.8 5.64125H24V8.64125H22.92C20.52 8.64125 18.24 8.04125 16.2 6.72125L13.56 5.16125C13.2 4.92125 12.84 4.92125 12.48 5.16125L9.84 6.72125C7.8 7.92125 5.52 8.64125 3.12 8.64125H2.04V5.64125H3.12ZM15.36 26.8813L13.08 27.9613L10.68 26.8813C5.4 24.3613 2.04 19.0813 2.04 13.2013V10.5613H3.12C5.88 10.5613 8.52 9.84125 10.8 8.40125L12.96 7.20125L15.12 8.40125C17.4 9.84125 20.16 10.5613 22.8 10.5613H24V13.2013C24 18.9613 20.64 24.3613 15.36 26.8813Z" fill="#ED224A"/>
                                                                  <path d="M12.1183 19.8019C11.8783 19.8019 11.6383 19.6819 11.3983 19.5619L8.75828 16.8019C8.39828 16.4419 8.39828 15.7219 8.75828 15.3619C9.11828 15.0019 9.83828 15.0019 10.1983 15.3619L11.9983 17.1619L15.2383 12.7219C15.5983 12.2419 16.1983 12.2419 16.6783 12.4819C17.1583 12.8419 17.1583 13.4419 16.9183 13.9219L12.9583 19.2019C12.7183 19.6819 12.4783 19.8019 12.1183 19.8019Z" fill="#ED224A"/>
                                                                </g>
                                                                <defs>
                                                                  <clipPath id="clip0_4191_3045">
                                                                    <rect width="26" height="30" fill="white"/>
                                                                  </clipPath>
                                                                </defs>
                                                            </svg>
                                                            <p>
                                                                Cyber Security
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="col-3 domain-expertise-col">
                                                        <a href="https://www.infosectrain.com/cloud-security-certification-training/">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="30" viewBox="0 0 35 30" fill="none">
                                                                <g clip-path="url(#clip0_4191_3052)">
                                                                  <path d="M26.8349 7.98165C26.2844 3.44037 22.156 0 17.2018 0C12.1101 0 7.98165 3.44037 7.56881 7.98165C3.16514 8.94495 0 12.5229 0 16.6514C0 19.6789 1.65138 22.5688 4.54128 24.2202C4.6789 24.3578 4.95413 24.3578 5.22936 24.3578C5.6422 24.3578 6.05505 24.2202 6.33028 23.8073C6.74312 23.2569 6.46789 22.5688 5.91743 22.2936C3.7156 21.055 2.47706 18.9908 2.47706 16.6514C2.47706 13.3486 5.22936 10.4587 8.80734 10.0459C9.3578 9.90826 9.90826 9.49541 9.90826 8.80734C9.90826 5.09174 13.211 2.20183 17.2018 2.20183C21.1927 2.20183 24.4954 5.22936 24.4954 8.94495C24.4954 9.49541 24.9083 10.0459 25.5963 10.0459C29.1743 10.4587 31.9266 13.3486 31.9266 16.6514C31.9266 18.8532 30.6881 21.055 28.6239 22.156C28.0734 22.4312 27.9358 23.2569 28.211 23.6697C28.6239 24.2202 29.3119 24.3578 29.8624 23.945C32.6147 22.2936 34.2661 19.5413 34.2661 16.5138C34.4037 12.5229 31.2385 8.94495 26.8349 7.98165Z" fill="#686868"/>
                                                                  <path d="M17.2052 29.9984C17.618 29.9984 18.0309 29.8608 18.3061 29.7232L18.8566 29.4479C22.7098 27.9342 25.1869 24.2186 25.1869 19.9525V17.2002C25.1869 15.8241 24.2236 14.5855 22.8474 14.3103C21.4713 14.0351 20.0951 13.4846 18.719 12.6589C17.7557 12.1085 16.5171 12.1085 15.5538 12.6589C14.1777 13.4846 12.8015 14.0351 11.4254 14.3103C10.0492 14.5855 9.08594 15.8241 9.08594 17.2002V19.5397C9.08594 23.9433 11.8382 27.9342 15.9667 29.5855C16.3795 29.8608 16.7924 29.9984 17.2052 29.9984ZM11.4254 17.3378C11.4254 17.0626 11.7006 16.7874 11.9758 16.6498C13.6272 16.3745 15.2786 15.6865 16.93 14.5855C17.0676 14.4479 17.2052 14.4479 17.3428 14.4479C17.4804 14.4479 17.618 14.4479 17.7557 14.5855C19.407 15.5488 21.0584 16.2369 22.7098 16.6498C22.985 16.6498 23.2602 16.925 23.2602 17.3378V20.0901C23.2602 23.3929 21.3336 26.2828 18.4437 27.3837L17.8933 27.6589C17.618 27.7966 17.3428 27.7966 17.2052 27.6589C13.9025 26.4204 11.7006 23.2553 11.7006 19.6773V17.3378H11.4254Z" fill="#686868"/>
                                                                  <path d="M16.3771 24.0807C16.6523 24.0807 16.9276 23.9431 17.2028 23.8055L20.9184 20.0899C21.3312 19.6771 21.3312 18.989 20.9184 18.4385C20.5056 18.0257 19.8175 18.0257 19.267 18.4385L16.2395 21.4661L14.8634 20.0899C14.4505 19.6771 13.7624 19.6771 13.212 20.0899C12.7991 20.5028 12.7991 21.1908 13.212 21.7413L15.4138 23.9431C15.8267 24.0807 16.1019 24.0807 16.3771 24.0807Z" fill="#686868"/>
                                                                </g>
                                                                <defs>
                                                                  <clipPath id="clip0_4191_3052">
                                                                    <rect width="34.4037" height="30" fill="white"/>
                                                                  </clipPath>
                                                                </defs>
                                                            </svg>
                                                            <p>
                                                                Cloud Security
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="col-3 domain-expertise-col">
                                                        <a href="https://www.infosectrain.com/grc-training-courses/">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                                <path d="M3.35547 10.7695H8.90226V12.0769C8.90226 12.3445 8.68438 12.5687 8.41046 12.5687H7.7568V22.218H8.41046C8.67815 22.218 8.90226 22.4359 8.90226 22.7098V24.0171H3.35547V22.7098C3.35547 22.4359 3.57336 22.218 3.84727 22.218H4.50093V12.5687H3.84727C3.57958 12.5687 3.35547 12.3508 3.35547 12.0769V10.7695Z" fill="#686868"/>
                                                                <path d="M12.0195 10.7695H17.5663V12.0769C17.5663 12.3445 17.3484 12.5687 17.0745 12.5687H16.4209V22.218H17.0745C17.3422 22.218 17.5663 22.4359 17.5663 22.7098V24.0171H12.0195V22.7098C12.0195 22.4359 12.2374 22.218 12.5113 22.218H13.165V12.5687H12.5113C12.2436 12.5687 12.0195 12.3508 12.0195 12.0769V10.7695Z" fill="#686868"/>
                                                                <path d="M25.0849 22.2102H25.7386C26.0063 22.2102 26.2304 22.428 26.2304 22.702V24.0093H20.6836V22.702C20.6836 22.428 20.9015 22.2102 21.1754 22.2102H21.8291V12.5608H21.1754C20.9077 12.5608 20.6836 12.343 20.6836 12.069V10.7617H26.2304V12.069C26.2304 12.3367 26.0125 12.5608 25.7386 12.5608H25.0849V22.2102Z" fill="#686868"/>
                                                                <path d="M27.8745 25.5563V26.8138H1.70312V25.5563C1.70312 25.2325 1.96459 24.9648 2.29453 24.9648H27.2893C27.6131 24.9648 27.8745 25.2325 27.8745 25.5563Z" fill="#686868"/>
                                                                <path d="M29.5829 29.4107V28.3648C29.5829 28.0411 29.3152 27.7734 28.9915 27.7734H0.591409C0.26769 27.7734 0 28.0411 0 28.3648V29.4107C0 29.7344 0.26769 30.0021 0.591409 30.0021H28.9915C29.3214 30.0021 29.5829 29.7344 29.5829 29.4107Z" fill="#686868"/>
                                                                <path d="M2.21875 8.81739V7.83805L14.6816 1.02844C14.6819 1.02829 14.6822 1.02814 14.6824 1.028C14.7519 0.990658 14.8344 0.990668 14.9039 1.02803C14.9042 1.02816 14.9044 1.0283 14.9047 1.02844L27.3738 7.83811V8.81739H2.21875ZM11.8726 5.2791C11.8726 6.88759 13.1773 8.20274 14.7963 8.20274C16.4111 8.20274 17.7137 6.88548 17.7137 5.2791C17.7137 3.67273 16.4111 2.35547 14.7963 2.35547C13.1878 2.35547 11.8726 3.66018 11.8726 5.2791Z" stroke="#686868" stroke-width="2" stroke-linejoin="round"/>
                                                            </svg>
                                                            <p>
                                                                Governance, Risk & Compliance
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="col-3 domain-expertise-col">
                                                        <a href="https://www.infosectrain.com/security-testing/">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="30" viewBox="0 0 23 30" fill="none">
                                                                <g clip-path="url(#clip0_4191_3070)">
                                                                  <path d="M20.3182 3.54545H17.4545C17.0455 2.45455 16.0909 1.77273 15 1.77273H13.9091C13.6364 0.681818 12.6818 0 11.4545 0C10.2273 0 9.27273 0.681818 9 1.77273H7.90909C6.81818 1.77273 5.86364 2.45455 5.45455 3.54545H2.59091C1.22727 3.54545 0 4.77273 0 6.13636V27.2727C0 28.7727 1.22727 30 2.59091 30H20.1818C21.6818 30 22.7727 28.7727 22.7727 27.4091V6.13636C22.9091 4.77273 21.8182 3.54545 20.3182 3.54545ZM7.09091 4.36364C7.09091 3.81818 7.5 3.54545 7.90909 3.54545H9.68182C10.2273 3.54545 10.5 3.13636 10.5 2.72727C10.5 2.18182 10.9091 1.90909 11.3182 1.90909C11.8636 1.90909 12.1364 2.31818 12.1364 2.72727C12.1364 3.27273 12.5455 3.54545 12.9545 3.54545H15C15.5455 3.54545 15.8182 3.95455 15.8182 4.36364V5.18182H7.09091V4.36364ZM21.1364 27.4091C21.1364 27.9545 20.7273 28.2273 20.3182 28.2273H2.59091C2.04545 28.2273 1.77273 27.8182 1.77273 27.4091V6.13636C1.77273 5.59091 2.18182 5.31818 2.59091 5.31818H5.18182V6.13636C5.18182 6.68182 5.59091 6.95455 6 6.95455H16.6364C17.1818 6.95455 17.4545 6.54545 17.4545 6.13636V5.31818H20.0455C20.5909 5.31818 20.8636 5.72727 20.8636 6.13636L21.1364 27.4091Z" fill="#686868"/>
                                                                  <path d="M8.86364 10.6367H5.31818C4.77273 10.6367 4.5 11.0458 4.5 11.4549C4.5 12.0004 4.90909 12.2731 5.31818 12.2731H8.86364C9.40909 12.2731 9.68182 11.864 9.68182 11.4549C9.68182 11.0458 9.27273 10.6367 8.86364 10.6367Z" fill="#686868"/>
                                                                  <path d="M8.86364 16.7734H5.31818C4.77273 16.7734 4.5 17.1825 4.5 17.5916C4.5 18.1371 4.90909 18.4098 5.31818 18.4098H8.86364C9.40909 18.4098 9.68182 18.0007 9.68182 17.5916C9.68182 17.1825 9.27273 16.7734 8.86364 16.7734Z" fill="#686868"/>
                                                                  <path d="M8.86364 22.9102H5.31818C4.77273 22.9102 4.5 23.3192 4.5 23.7283C4.5 24.1374 4.90909 24.5465 5.31818 24.5465H8.86364C9.40909 24.5465 9.68182 24.1374 9.68182 23.7283C9.68182 23.3192 9.27273 22.9102 8.86364 22.9102Z" fill="#686868"/>
                                                                  <path d="M18.2717 9.95526C17.8626 9.54616 17.3171 9.54616 17.0444 9.95526L14.9989 12.0007L13.908 10.9098C13.4989 10.5007 12.9535 10.5007 12.5444 10.9098C12.2717 11.1825 12.2717 11.728 12.5444 12.1371L14.3171 13.9098C14.4535 14.0462 14.7262 14.1825 14.9989 14.1825C15.2717 14.1825 15.408 14.0462 15.6808 13.9098L18.2717 11.3189C18.6808 10.9098 18.6808 10.3643 18.2717 9.95526Z" fill="#686868"/>
                                                                  <path d="M18.2727 15.2717C17.8636 14.8626 17.3182 14.8626 17.0455 15.2717L15 17.3171L13.9091 16.2262C13.5 15.8171 12.9545 15.8171 12.6818 16.2262C12.2727 16.6353 12.2727 17.1808 12.6818 17.4535L14.4545 19.2262C14.5909 19.3626 14.8636 19.4989 15.1364 19.4989C15.4091 19.4989 15.5455 19.3626 15.8182 19.2262L18.4091 16.6353C18.6818 16.2262 18.6818 15.5444 18.2727 15.2717Z" fill="#686868"/>
                                                                  <path d="M16.2262 23.8633L17.3171 22.7724C17.7262 22.3633 17.7262 21.8178 17.3171 21.5451C16.908 21.136 16.3626 21.136 16.0898 21.5451L14.9989 22.636L13.908 21.5451C13.4989 21.136 12.9535 21.136 12.6808 21.5451C12.2717 21.8178 12.2717 22.3633 12.5444 22.636L13.6353 23.7269L12.5444 24.8178C12.2717 25.3633 12.2717 25.9087 12.5444 26.1815C12.6808 26.3178 12.9535 26.4542 13.2262 26.4542C13.4989 26.4542 13.6353 26.3178 13.908 26.1815L14.9989 25.0906L16.0898 26.1815C16.2262 26.3178 16.4989 26.4542 16.7717 26.4542C17.0444 26.4542 17.1808 26.3178 17.4535 26.1815C17.8626 25.7724 17.8626 25.2269 17.4535 24.9542L16.2262 23.8633Z" fill="#686868"/>
                                                                </g>
                                                                <defs>
                                                                  <clipPath id="clip0_4191_3070">
                                                                    <rect width="22.9091" height="30" fill="white"/>
                                                                  </clipPath>
                                                                </defs>
                                                            </svg>
                                                            <p>
                                                                Security Testing
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="col-3 domain-expertise-col">
                                                        <a href="https://www.infosectrain.com/data-privacy/">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                                <path d="M3.22003 27.907H13.9535C14.5975 27.907 15.0268 27.4776 15.0268 26.8336C15.0268 26.1896 14.5975 25.7603 13.9535 25.7603H3.22003C2.57603 25.7603 2.14669 25.3309 2.14669 24.6869V19.3202H11.8068C12.4508 19.3202 12.8801 18.8909 12.8801 18.2469C12.8801 17.6029 12.4508 17.1735 11.8068 17.1735H2.14669V10.7334H25.7603V12.8801C25.7603 13.5241 26.1896 13.9535 26.8336 13.9535C27.4776 13.9535 27.907 13.5241 27.907 12.8801V3.22003C27.907 1.39535 26.5116 0 24.6869 0H3.22003C1.39535 0 0 1.39535 0 3.22003V24.6869C0 26.5116 1.39535 27.907 3.22003 27.907ZM3.22003 2.14669H24.6869C25.3309 2.14669 25.7603 2.57603 25.7603 3.22003V8.58676H2.14669V3.22003C2.14669 2.57603 2.57603 2.14669 3.22003 2.14669Z" fill="#686868"/>
                                                                <path d="M4.29209 7.51388C4.9361 7.51388 5.36544 7.08454 5.36544 6.44053C5.36544 6.11853 5.2581 5.90386 5.04344 5.68919C4.6141 5.25985 3.97009 5.25985 3.54075 5.68919C3.32608 5.90386 3.21875 6.11853 3.21875 6.44053C3.21875 6.76254 3.32608 6.9772 3.54075 7.19187C3.75542 7.40654 3.97009 7.51388 4.29209 7.51388Z" fill="#686868"/>
                                                                <path d="M7.51475 7.51388C8.15876 7.51388 8.5881 7.08454 8.5881 6.44053C8.5881 6.11853 8.48076 5.90386 8.26609 5.68919C7.83675 5.25985 7.19275 5.25985 6.76341 5.68919C6.54874 5.90386 6.44141 6.11853 6.44141 6.44053C6.44141 6.76254 6.54874 6.9772 6.76341 7.19187C6.97808 7.40654 7.19275 7.51388 7.51475 7.51388Z" fill="#686868"/>
                                                                <path d="M3.54075 14.2751C3.32608 14.4898 3.21875 14.7045 3.21875 15.0265C3.21875 15.3485 3.32608 15.5631 3.54075 15.7778C3.97009 16.2071 4.6141 16.2071 5.04344 15.7778C5.47277 15.3485 5.47277 14.7045 5.04344 14.2751C4.6141 13.8458 3.97009 13.8458 3.54075 14.2751Z" fill="#686868"/>
                                                                <path d="M6.76341 14.2751C6.54874 14.4898 6.44141 14.7045 6.44141 15.0265C6.44141 15.3485 6.54874 15.5631 6.76341 15.7778C7.19275 16.2071 7.83675 16.2071 8.26609 15.7778C8.69543 15.3485 8.69543 14.7045 8.26609 14.2751C7.83675 13.8458 7.19275 13.8458 6.76341 14.2751Z" fill="#686868"/>
                                                                <path d="M3.54075 22.8611C3.32608 23.0757 3.21875 23.2904 3.21875 23.6124C3.21875 23.9344 3.32608 24.1491 3.54075 24.3638C3.97009 24.7931 4.6141 24.7931 5.04344 24.3638C5.47277 23.9344 5.47277 23.2904 5.04344 22.8611C4.6141 22.4317 3.97009 22.4317 3.54075 22.8611Z" fill="#686868"/>
                                                                <path d="M6.76341 22.8611C6.54874 23.0757 6.44141 23.2904 6.44141 23.6124C6.44141 23.9344 6.54874 24.1491 6.76341 24.3638C7.19275 24.7931 7.83675 24.7931 8.26609 24.3638C8.69543 23.9344 8.69543 23.2904 8.26609 22.8611C7.83675 22.4317 7.19275 22.4317 6.76341 22.8611Z" fill="#686868"/>
                                                                <path d="M29.5164 15.0255C29.1944 14.8109 28.8724 14.8109 28.5504 14.9182C26.5111 15.7769 24.2571 15.4549 22.647 13.9522C22.2177 13.6302 21.5737 13.6302 21.1444 14.0595C19.5343 15.4549 17.2803 15.7769 15.241 14.9182C14.7043 14.7035 14.0603 14.9182 13.8456 15.4549C13.7383 15.5622 13.7383 15.7769 13.7383 15.8842V18.6749C13.7383 23.0756 16.0996 27.047 19.9637 29.0863L21.359 29.8377C21.681 30.0524 22.003 30.0524 22.325 29.8377L23.7204 29.0863C27.5844 27.047 29.9458 23.0756 29.9458 18.6749V15.8842C30.0531 15.5622 29.8385 15.2402 29.5164 15.0255ZM27.9064 18.7822C27.9064 22.3243 25.9744 25.6516 22.8617 27.2617L22.003 27.691L21.1444 27.2617C18.0317 25.5443 16.0996 22.3243 16.0996 18.7822V17.3869C18.139 17.8162 20.2857 17.3869 22.1104 16.2062C23.8277 17.3869 25.9744 17.8162 28.1211 17.3869V18.7822H27.9064Z" fill="#686868"/>
                                                                <path d="M25.0082 18.5681L21.4661 22.1101L20.0708 20.7148C19.6414 20.2854 18.9974 20.2854 18.5681 20.7148C18.1388 21.1441 18.1388 21.7881 18.5681 22.2175L20.7148 24.3642C21.1441 24.7935 21.7881 24.7935 22.2175 24.3642L26.5108 20.0708C26.9402 19.6414 26.9402 18.9974 26.5108 18.5681C26.0815 18.1388 25.4375 18.1388 25.0082 18.5681Z" fill="#686868"/>
                                                            </svg>
                                                            <p>
                                                                Data Privacy
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="col-3 domain-expertise-col">
                                                        <a href="https://www.infosectrain.com/audit-training-courses/">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="30" viewBox="0 0 36 30" fill="none">
                                                                <g clip-path="url(#clip0_4191_3109)">
                                                                  <path d="M34.8571 18.7143L30.8571 14.7143C31.4286 13.8571 31.5714 12.5714 31.5714 11.4286C31.5714 8.28571 29.7143 5.42857 27 4.14286V2.85714C27 1.28571 25.7143 0 24.1429 0H8.14286C6.57143 0 5.28571 1.28571 5.28571 2.85714V21.8571H2.85714C1.28571 21.8571 0 23.1429 0 24.7143V26.1429C0 28.2857 1.71429 30 3.71429 30H3.85714H4H23.5714C23.7143 30 23.8571 30 23.8571 30C25.7143 29.7143 27 28.1429 27 26.2857V26.1429V26V19.1429L30.7143 22.8571C31.2857 23.4286 32 23.7143 32.7143 23.7143C33.4286 23.7143 34.2857 23.4286 34.7143 22.8571C35.2857 22.2857 35.5714 21.5714 35.5714 20.8571C35.7143 20.1429 35.4286 19.2857 34.8571 18.7143ZM29.4286 11.4286C29.4286 14.5714 26.8571 17.1429 23.7143 17.1429C22.5714 17.1429 21.5714 16.8571 20.5714 16.2857L24.2857 12.5714C24.7143 12.1429 24.7143 11.4286 24.2857 11C23.8571 10.5714 23.1429 10.5714 22.7143 11L19 14.7143C18.4286 13.8571 18 12.5714 18 11.4286C18 8.28571 20.5714 5.71429 23.7143 5.71429C26.8571 5.71429 29.4286 8.28571 29.4286 11.4286ZM2.28571 26.2857V24.8571C2.28571 24.5714 2.57143 24.2857 2.85714 24.2857H19C19.2857 24.2857 19.5714 24.5714 19.5714 24.8571V26.2857C19.5714 26.8571 19.7143 27.2857 19.8571 27.7143H4H3.85714H3.71429C3 27.7143 2.28571 27 2.28571 26.2857ZM23.4286 27.7143C22.5714 27.7143 22 27.1429 22 26.2857V24.8571C22 23.2857 20.7143 22 19.1429 22H7.57143V2.85714C7.57143 2.57143 7.85714 2.28571 8.14286 2.28571H24.2857C24.5714 2.28571 24.8571 2.57143 24.8571 2.85714V3.42857C24.4286 3.42857 24 3.28571 23.7143 3.28571C19.2857 3.28571 15.5714 6.85714 15.5714 11.4286C15.5714 13.2857 16.1429 15 17.2857 16.2857L15.7143 18L12.4286 14.7143C12 14.2857 11.2857 14.2857 10.8571 14.7143L9.14286 16.4286C8.71429 16.8571 8.71429 17.5714 9.14286 18C9.57143 18.4286 10.2857 18.4286 10.7143 18L11.5714 17.1429L14.8571 20.4286C15.1429 20.7143 15.4286 20.7143 15.7143 20.7143C16 20.7143 16.2857 20.5714 16.5714 20.4286L19 18C20.2857 19 22 19.5714 23.7143 19.5714C24.1429 19.5714 24.5714 19.5714 24.8571 19.4286V26V26.1429V26.2857C24.8571 27 24.1429 27.7143 23.4286 27.7143ZM33.2857 21.1429C33.1429 21.2857 33 21.2857 32.8571 21.2857C32.7143 21.2857 32.5714 21.2857 32.4286 21.1429L28.8571 17.5714C29.1429 17.2857 29.4286 17 29.7143 16.7143L33.2857 20.2857C33.4286 20.4286 33.4286 20.5714 33.4286 20.7143C33.4286 20.8571 33.4286 21 33.2857 21.1429Z" fill="#686868"/>
                                                                  <path d="M10.428 6.28571H12.1423C12.7137 6.28571 13.2852 5.71429 13.2852 5.14286C13.2852 4.57143 12.7137 4 12.1423 4H10.428C9.85659 4 9.28516 4.57143 9.28516 5.14286C9.28516 5.71429 9.71373 6.28571 10.428 6.28571Z" fill="#686868"/>
                                                                  <path d="M10.428 10.4302H13.2852C13.8566 10.4302 14.428 9.85882 14.428 9.28739C14.428 8.71596 13.8566 8.14453 13.2852 8.14453H10.428C9.71373 8.14453 9.28516 8.5731 9.28516 9.28739C9.28516 9.85882 9.71373 10.4302 10.428 10.4302Z" fill="#686868"/>
                                                                </g>
                                                                <defs>
                                                                  <clipPath id="clip0_4191_3109">
                                                                    <rect width="35.7143" height="30" fill="white"/>
                                                                  </clipPath>
                                                                </defs>
                                                            </svg>
                                                            <p>
                                                            Auditing
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="col-3 domain-expertise-col">
                                                        <a href="https://www.infosectrain.com/security-product-training-courses/">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                                <path d="M26.8077 1H3.19228C1.43255 1 0 2.42752 0 4.18121V19.8849C0 21.6446 1.43255 23.0772 3.19228 23.0772H10.5111V26.8584H8.11309C7.61275 26.8584 7.20705 27.2641 7.20705 27.7644C7.20705 28.2648 7.61275 28.6705 8.11309 28.6705H21.8809C22.3812 28.6705 22.7869 28.2648 22.7869 27.7644C22.7869 27.2641 22.3812 26.8584 21.8809 26.8584H19.4849V23.0772H26.8077C28.5675 23.0772 30 21.6446 30 19.8849V4.19228C30 2.43255 28.5685 1 26.8077 1ZM17.6718 26.8574H12.3232V23.0762H17.6718V26.8574ZM28.1879 19.8849C28.1879 20.646 27.5698 21.2641 26.8087 21.2641H3.19228C2.43121 21.2641 1.81309 20.646 1.81309 19.8849V4.18121C1.81309 3.42617 2.43121 2.81309 3.19228 2.81309H26.8087C27.5698 2.81309 28.1879 3.43121 28.1879 4.19228V19.8849Z" fill="#686868"/>
                                                                <path d="M18.0658 14.6889C19.0997 13.8131 19.7702 12.5215 19.7702 11.0638C19.7702 8.43324 17.6289 6.29297 14.9984 6.29297C12.3678 6.29297 10.2265 8.43324 10.2265 11.0638C10.2265 12.5215 10.898 13.8121 11.9309 14.6889C11.0661 15.1007 10.3614 15.6836 9.92755 16.3913C9.6648 16.8181 9.79869 17.3759 10.2255 17.6366C10.6514 17.9014 11.2111 17.7644 11.4708 17.3386C11.9309 16.5906 13.1994 15.8356 14.9984 15.8356C16.7973 15.8356 18.0658 16.5906 18.5259 17.3386C18.696 17.6165 18.994 17.7715 19.299 17.7715C19.4601 17.7715 19.6242 17.7282 19.7722 17.6366C20.199 17.3748 20.3329 16.8181 20.0702 16.3913C19.6353 15.6836 18.9296 15.1007 18.0658 14.6889ZM12.0396 11.0648C12.0396 9.43391 13.3665 8.10706 14.9984 8.10706C16.6302 8.10706 17.9571 9.43391 17.9571 11.0648C17.9571 12.6967 16.6302 14.0235 14.9984 14.0235C13.3665 14.0235 12.0396 12.6967 12.0396 11.0648Z" fill="#686868"/>
                                                            </svg>
                                                            <p>
                                                                Product Trainings
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="col-3 domain-expertise-col">
                                                        <a href="https://www.infosectrain.com/security-operations-center-soc-training-courses/">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8094 5.67391L19.1474 2.58491C18.9503 1.66291 18.1354 1.00391 17.1914 1.00391C16.4974 1.00391 15.5024 1.00391 14.8084 1.00391C13.8654 1.00391 13.0504 1.66291 12.8534 2.58491L12.1904 5.67591C11.1884 6.04591 10.2544 6.55891 9.41235 7.18891L6.45535 6.06091C5.57435 5.72491 4.57735 6.04991 4.06435 6.84091C3.68635 7.42291 3.14535 8.25791 2.76735 8.83991C2.25435 9.63091 2.36335 10.6739 3.02935 11.3409L5.26435 13.5809C5.08935 14.3599 4.99735 15.1699 4.99735 16.0019C4.99735 16.8349 5.09035 17.6469 5.26535 18.4269L3.02935 20.6679C2.36335 21.3359 2.25435 22.3779 2.76735 23.1689L4.06435 25.1689C4.57735 25.9599 5.57335 26.2849 6.45535 25.9489L9.41835 24.8189C10.2574 25.4469 11.1894 25.9579 12.1904 26.3279L12.8534 29.4239C13.0504 30.3469 13.8654 31.0049 14.8084 31.0049H17.1924C18.1354 31.0049 18.9503 30.3469 19.1474 29.4249L19.8114 26.3289C20.8124 25.9589 21.7453 25.4479 22.5854 24.8199L25.5454 25.9489C26.4274 26.2849 27.4234 25.9599 27.9364 25.1689L29.2334 23.1689C29.7464 22.3779 29.6374 21.3359 28.9714 20.6679L26.7384 18.4299C26.9144 17.6489 27.0074 16.8359 27.0074 16.0019C27.0074 15.1689 26.9144 14.3569 26.7394 13.5769C26.7394 13.5779 28.9714 11.3409 28.9714 11.3409C29.6374 10.6739 29.7464 9.63091 29.2334 8.83991C28.8554 8.25791 28.3144 7.42291 27.9364 6.84091C27.4234 6.04991 26.4264 5.72491 25.5454 6.06091L22.5904 7.18791C21.7484 6.55691 20.8124 6.04491 19.8094 5.67391ZM17.1914 3.00391L17.9724 6.64791C18.0484 7.00191 18.3094 7.28791 18.6554 7.39391C19.8114 7.75091 20.8684 8.33391 21.7744 9.09191C22.0524 9.32391 22.4333 9.38791 22.7724 9.25891L26.2584 7.92891L27.5554 9.92791L24.9224 12.5669C24.6664 12.8229 24.5693 13.1979 24.6684 13.5459C24.8894 14.3269 25.0074 15.1509 25.0074 16.0019C25.0074 16.8539 24.8894 17.6789 24.6674 18.4609C24.5683 18.8099 24.6653 19.1839 24.9214 19.4399L27.5554 22.0809L26.2584 24.0799L22.7674 22.7489C22.4294 22.6199 22.0473 22.6839 21.7694 22.9159C20.8654 23.6709 19.8113 24.2529 18.6574 24.6089C18.3124 24.7159 18.0504 25.0009 17.9754 25.3549L17.1924 29.0049H14.8084C14.5354 27.7289 14.0264 25.3539 14.0264 25.3539C13.9504 24.9999 13.6894 24.7149 13.3434 24.6079C12.1914 24.2519 11.1374 23.6699 10.2334 22.9149C9.95635 22.6829 9.57435 22.6189 9.23635 22.7479L5.74235 24.0799L4.44535 22.0809L7.08235 19.4369C7.33835 19.1809 7.43535 18.8069 7.33635 18.4589C7.11535 17.6769 6.99735 16.8529 6.99735 16.0019C6.99735 15.1519 7.11535 14.3279 7.33535 13.5489C7.43435 13.1999 7.33735 12.8259 7.08135 12.5699L4.44535 9.92791L5.74235 7.92891L9.23135 9.25991C9.56935 9.38891 9.95135 9.32491 10.2294 9.09291C11.1344 8.33491 12.1904 7.75191 13.3444 7.39591C13.6904 7.28891 13.9514 7.00391 14.0274 6.64991L14.8084 3.00391H17.1914Z" fill="#686868"/>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.0039 8C11.5889 8 8.00391 11.585 8.00391 16C8.00391 20.415 11.5889 24 16.0039 24C20.4189 24 24.0039 20.415 24.0039 16C24.0039 11.585 20.4189 8 16.0039 8ZM15.0019 18.003C14.2059 18.003 13.4429 18.319 12.8809 18.882C12.4569 19.306 12.1729 19.844 12.0579 20.424C12.0529 20.451 12.0469 20.477 12.0399 20.502C13.0969 21.434 14.4849 22 16.0039 22C17.5199 22 18.9049 21.437 19.9609 20.508C19.9599 20.501 19.9579 20.493 19.9569 20.485C19.8509 19.882 19.5619 19.321 19.1229 18.882C18.5609 18.319 17.7979 18.003 17.0019 18.003V19C17.0019 19.552 16.5539 20 16.0019 20C15.4499 20 15.0019 19.552 15.0019 19V18.003ZM21.3999 18.625C21.7869 17.832 22.0039 16.941 22.0039 16C22.0039 12.689 19.3149 10 16.0039 10C12.6919 10 10.0039 12.689 10.0039 16C10.0039 16.939 10.2199 17.829 10.6059 18.621C10.8339 18.201 11.1219 17.812 11.4659 17.468C11.9299 17.005 12.4739 16.642 13.0669 16.393C12.7139 15.847 12.5099 15.196 12.5099 14.498C12.5099 12.567 14.0779 10.998 16.0099 10.998C17.9409 10.998 19.5099 12.567 19.5099 14.498C19.5099 15.198 19.3039 15.851 18.9489 16.398C19.5369 16.647 20.0769 17.008 20.5379 17.468C20.8829 17.813 21.1719 18.203 21.3999 18.625ZM16.0099 12.998C16.8369 12.998 17.5099 13.671 17.5099 14.498C17.5099 15.326 16.8369 15.998 16.0099 15.998C15.1819 15.998 14.5099 15.326 14.5099 14.498C14.5099 13.671 15.1819 12.998 16.0099 12.998Z" fill="#686868"/>
                                                            </svg>
                                                            <p>
                                                                Security Operations Center
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="col-3 domain-expertise-col">
                                                        <a href="https://www.infosectrain.com/network-security-training-courses/">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                                <g clip-path="url(#clip0_4191_3137)">
                                                                  <path d="M23.7891 15C23.7891 10.1543 19.8457 6.21094 15 6.21094C10.1543 6.21094 6.21094 10.1543 6.21094 15C6.21094 19.8457 10.1543 23.7891 15 23.7891C19.8457 23.7891 23.7891 19.8457 23.7891 15ZM13.3184 20.2383C12.7969 19.0605 12.4746 17.5371 12.3867 15.8789H17.6133C17.5312 17.5371 17.209 19.0605 16.6816 20.2383C16.1895 21.3457 15.5449 22.0312 15 22.0312C14.4551 22.0312 13.8105 21.3457 13.3184 20.2383ZM15 7.96875C15.5449 7.96875 16.1895 8.6543 16.6816 9.76172C17.2031 10.9395 17.5254 12.4629 17.6133 14.1211H12.3867C12.4687 12.4629 12.791 10.9395 13.3184 9.76172C13.8105 8.6543 14.4551 7.96875 15 7.96875ZM18.123 21.2988C18.1816 21.1875 18.2344 21.0703 18.2871 20.9531C18.9082 19.5586 19.2832 17.7832 19.3711 15.8789H21.9727C21.6797 18.2578 20.1914 20.2676 18.123 21.2988ZM21.9785 14.1211H19.377C19.2891 12.2168 18.9082 10.4414 18.293 9.04687C18.2402 8.92969 18.1875 8.8125 18.1289 8.70117C20.1914 9.73242 21.6797 11.7422 21.9785 14.1211ZM11.877 8.70117C11.8184 8.8125 11.7656 8.92969 11.7129 9.04687C11.0918 10.4414 10.7168 12.2168 10.6289 14.1211H8.02734C8.32031 11.7422 9.80859 9.73242 11.877 8.70117ZM8.02148 15.8789H10.623C10.7109 17.7832 11.0918 19.5586 11.707 20.9531C11.7598 21.0703 11.8125 21.1875 11.8711 21.2988C9.80859 20.2676 8.32031 18.2578 8.02148 15.8789Z" fill="#686868"/>
                                                                  <path d="M2.92969 5.85937C3.41602 5.85937 3.87891 5.73633 4.2832 5.52539L6.30469 7.54687C6.47461 7.7168 6.70312 7.80469 6.92578 7.80469C7.14844 7.80469 7.37695 7.7168 7.54688 7.54687C9.53906 5.54883 12.1875 4.45312 15 4.45312C15.4863 4.45312 15.8789 4.06055 15.8789 3.57422C15.8789 3.08789 15.4863 2.69531 15 2.69531C12.0117 2.69531 9.18164 3.75586 6.94336 5.70117L5.52539 4.2832C5.73633 3.87891 5.85938 3.41602 5.85938 2.92969C5.85938 1.3125 4.54688 0 2.92969 0C1.3125 0 0 1.3125 0 2.92969C0 4.54687 1.3125 5.85937 2.92969 5.85937ZM2.92969 1.75781C3.57422 1.75781 4.10156 2.28516 4.10156 2.92969C4.10156 3.57422 3.57422 4.10156 2.92969 4.10156C2.28516 4.10156 1.75781 3.57422 1.75781 2.92969C1.75781 2.28516 2.28516 1.75781 2.92969 1.75781Z" fill="#686868"/>
                                                                  <path d="M27.0703 24.1421C26.584 24.1421 26.1211 24.2651 25.7168 24.4761L23.6953 22.4546C23.3496 22.1089 22.793 22.1089 22.4531 22.4546C20.4609 24.4468 17.8125 25.5483 15 25.5483C14.5137 25.5483 14.1211 25.9409 14.1211 26.4272C14.1211 26.9136 14.5137 27.3062 15 27.3062C17.9883 27.3062 20.8184 26.2456 23.0566 24.3003L24.4746 25.7183C24.2637 26.1226 24.1406 26.5854 24.1406 27.0718C24.1406 28.689 25.4531 30.0015 27.0703 30.0015C28.6875 30.0015 30 28.689 30 27.0718C30 25.4546 28.6875 24.1421 27.0703 24.1421ZM27.0703 28.2437C26.4258 28.2437 25.8984 27.7163 25.8984 27.0718C25.8984 26.4272 26.4258 25.8999 27.0703 25.8999C27.7148 25.8999 28.2422 26.4272 28.2422 27.0718C28.2422 27.7163 27.7148 28.2437 27.0703 28.2437Z" fill="#686868"/>
                                                                  <path d="M4.45312 15C4.45312 14.5137 4.06055 14.1211 3.57422 14.1211C3.08789 14.1211 2.69531 14.5137 2.69531 15C2.69531 17.9883 3.75586 20.8184 5.70117 23.0566L4.2832 24.4746C3.87891 24.2637 3.41602 24.1406 2.92969 24.1406C1.3125 24.1406 0 25.4531 0 27.0703C0 28.6875 1.3125 30 2.92969 30C4.54687 30 5.85937 28.6875 5.85937 27.0703C5.85937 26.584 5.73633 26.1211 5.52539 25.7168L7.54687 23.6953C7.89258 23.3496 7.89258 22.793 7.54687 22.4531C5.54883 20.4609 4.45312 17.8125 4.45312 15ZM2.92969 28.2422C2.28516 28.2422 1.75781 27.7148 1.75781 27.0703C1.75781 26.4258 2.28516 25.8984 2.92969 25.8984C3.57422 25.8984 4.10156 26.4258 4.10156 27.0703C4.10156 27.7148 3.57422 28.2422 2.92969 28.2422Z" fill="#686868"/>
                                                                  <path d="M25.5483 15C25.5483 15.4863 25.9409 15.8789 26.4272 15.8789C26.9136 15.8789 27.3062 15.4863 27.3062 15C27.3062 12.0117 26.2456 9.18164 24.3003 6.94336L25.7183 5.52539C26.1226 5.73633 26.5854 5.85938 27.0718 5.85938C28.689 5.85938 30.0015 4.54688 30.0015 2.92969C30.0015 1.3125 28.689 0 27.0718 0C25.4546 0 24.1421 1.3125 24.1421 2.92969C24.1421 3.41602 24.2651 3.87891 24.4761 4.2832L22.4546 6.30469C22.1089 6.65039 22.1089 7.20703 22.4546 7.54688C24.4526 9.53906 25.5483 12.1875 25.5483 15ZM27.0718 1.75781C27.7163 1.75781 28.2437 2.28516 28.2437 2.92969C28.2437 3.57422 27.7163 4.10156 27.0718 4.10156C26.4272 4.10156 25.8999 3.57422 25.8999 2.92969C25.8999 2.28516 26.4272 1.75781 27.0718 1.75781Z" fill="#686868"/>
                                                                </g>
                                                                <defs>
                                                                  <clipPath id="clip0_4191_3137">
                                                                    <rect width="30" height="30" fill="white"/>
                                                                  </clipPath>
                                                                </defs>
                                                            </svg>
                                                            <p>
                                                                Network & Network Security
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="col-3 domain-expertise-col">
                                                        <a href="https://www.infosectrain.com/offensive-security-training-courses/">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                                <g clip-path="url(#clip0_4191_3129)">
                                                                  <path d="M29.1211 0H0.878906C0.392578 0 0 0.392578 0 0.878906V24.6562C0 25.1426 0.392578 25.5352 0.878906 25.5352H10.6055V28.2422H10.0898C9.60352 28.2422 9.21094 28.6348 9.21094 29.1211C9.21094 29.6074 9.60352 30 10.0898 30H19.9043C20.3906 30 20.7832 29.6074 20.7832 29.1211C20.7832 28.6348 20.3906 28.2422 19.9043 28.2422H19.3945V25.5352H29.1211C29.6074 25.5352 30 25.1426 30 24.6562V0.878906C30 0.392578 29.6074 0 29.1211 0ZM28.2422 18.8438H20.7305C23.4668 16.9922 25.2715 13.8516 25.2715 10.3008C25.2715 9.43359 25.166 8.5957 24.9609 7.79297C26.7188 6.29883 27.5625 4.00195 27.2402 1.75781H28.2363V18.8438H28.2422ZM7.64648 3.11719C6.81445 2.85938 6.07617 2.39062 5.49609 1.75781H9.26953C8.68359 2.15625 8.13867 2.60742 7.64648 3.11719ZM6.48047 4.55273C6.18164 4.99805 5.91211 5.47266 5.68359 5.96484C4.99805 5.19727 4.58203 4.23633 4.4707 3.22266C5.05078 3.78516 5.73047 4.23633 6.48047 4.55273ZM15 1.75781C19.6934 1.75781 23.5137 5.58984 23.5137 10.3008C23.5137 15.0117 19.6934 18.8438 15 18.8438C10.3066 18.8438 6.48633 15.0117 6.48633 10.3008C6.48633 5.58984 10.3066 1.75781 15 1.75781ZM23.5195 4.55273C24.2695 4.23047 24.9434 3.7793 25.5234 3.22266C25.418 4.23047 24.9961 5.19727 24.3164 5.96484C24.0879 5.47266 23.8242 5.00391 23.5195 4.55273ZM22.3535 3.11719C21.8613 2.61328 21.3164 2.15625 20.7363 1.75781H24.5039C23.9238 2.38477 23.1855 2.85938 22.3535 3.11719ZM1.75781 1.75781H2.75391C2.43164 4.00195 3.27539 6.29883 5.0332 7.79297C4.83398 8.5957 4.72266 9.43359 4.72266 10.3008C4.72266 13.8516 6.52734 16.9922 9.26367 18.8438H1.75781V1.75781ZM17.6367 28.2422H12.3633V25.5352H17.6367V28.2422ZM28.2422 23.7773H1.75781V20.6016H28.2422V23.7773Z" fill="#686868"/>
                                                                  <path d="M29.1211 0H0.878906C0.392578 0 0 0.392578 0 0.878906V24.6562C0 25.1426 0.392578 25.5352 0.878906 25.5352H10.6055V28.2422H10.0898C9.60352 28.2422 9.21094 28.6348 9.21094 29.1211C9.21094 29.6074 9.60352 30 10.0898 30H19.9043C20.3906 30 20.7832 29.6074 20.7832 29.1211C20.7832 28.6348 20.3906 28.2422 19.9043 28.2422H19.3945V25.5352H29.1211C29.6074 25.5352 30 25.1426 30 24.6562V0.878906C30 0.392578 29.6074 0 29.1211 0ZM28.2422 18.8438H20.7305C23.4668 16.9922 25.2715 13.8516 25.2715 10.3008C25.2715 9.43359 25.166 8.5957 24.9609 7.79297C26.7188 6.29883 27.5625 4.00195 27.2402 1.75781H28.2363V18.8438H28.2422ZM7.64648 3.11719C6.81445 2.85938 6.07617 2.39062 5.49609 1.75781H9.26953C8.68359 2.15625 8.13867 2.60742 7.64648 3.11719ZM6.48047 4.55273C6.18164 4.99805 5.91211 5.47266 5.68359 5.96484C4.99805 5.19727 4.58203 4.23633 4.4707 3.22266C5.05078 3.78516 5.73047 4.23633 6.48047 4.55273ZM15 1.75781C19.6934 1.75781 23.5137 5.58984 23.5137 10.3008C23.5137 15.0117 19.6934 18.8438 15 18.8438C10.3066 18.8438 6.48633 15.0117 6.48633 10.3008C6.48633 5.58984 10.3066 1.75781 15 1.75781ZM23.5195 4.55273C24.2695 4.23047 24.9434 3.7793 25.5234 3.22266C25.418 4.23047 24.9961 5.19727 24.3164 5.96484C24.0879 5.47266 23.8242 5.00391 23.5195 4.55273ZM22.3535 3.11719C21.8613 2.61328 21.3164 2.15625 20.7363 1.75781H24.5039C23.9238 2.38477 23.1855 2.85938 22.3535 3.11719ZM1.75781 1.75781H2.75391C2.43164 4.00195 3.27539 6.29883 5.0332 7.79297C4.83398 8.5957 4.72266 9.43359 4.72266 10.3008C4.72266 13.8516 6.52734 16.9922 9.26367 18.8438H1.75781V1.75781ZM17.6367 28.2422H12.3633V25.5352H17.6367V28.2422ZM28.2422 23.7773H1.75781V20.6016H28.2422V23.7773Z" fill="#686868"/>
                                                                  <path d="M17.1545 11.5471C17.2893 11.5471 17.4241 11.5178 17.553 11.4533L19.9963 10.2053C20.4299 9.98264 20.5998 9.4553 20.3772 9.02171C20.1545 8.58811 19.6272 8.41819 19.1936 8.64085L16.7561 9.88889C16.3225 10.1116 16.1526 10.6389 16.3752 11.0725C16.5276 11.3772 16.8381 11.5471 17.1545 11.5471Z" fill="#686868"/>
                                                                  <path d="M9.99436 10.2062L12.4377 11.4542C12.5666 11.5187 12.7014 11.548 12.8362 11.548C13.1584 11.548 13.4631 11.3722 13.6213 11.0675C13.844 10.6339 13.6682 10.1066 13.2405 9.8839L10.7971 8.63585C10.3635 8.4132 9.83616 8.58898 9.6135 9.01671C9.39085 9.45616 9.56077 9.98351 9.99436 10.2062Z" fill="#686868"/>
                                                                  <path d="M15.0018 16.8826C17.2107 16.8826 19.2674 15.6932 20.3748 13.7713C20.615 13.3494 20.4744 12.8162 20.0525 12.5701C19.6307 12.3299 19.0916 12.4705 18.8514 12.8924C18.0603 14.2693 16.5838 15.1248 15.0018 15.1248C13.4197 15.1248 11.9432 14.2693 11.1521 12.8924C10.9119 12.4705 10.3728 12.3299 9.95097 12.5701C9.52909 12.8103 9.38847 13.3494 9.6287 13.7713C10.7361 15.6932 12.7928 16.8826 15.0018 16.8826Z" fill="#686868"/>
                                                                </g>
                                                                <defs>
                                                                  <clipPath id="clip0_4191_3129">
                                                                    <rect width="30" height="30" fill="white"/>
                                                                  </clipPath>
                                                                </defs>
                                                            </svg>
                                                            <p>
                                                                offensive security
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="col-3 domain-expertise-col">
                                                        <a href="https://www.infosectrain.com/defensive-security-training-courses/">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                                <g clip-path="url(#clip0_4191_3148)">
                                                                  <path d="M27.84 26.2819H2.16C0.96 26.2819 0 25.3219 0 24.1219V7.20187C0 6.00188 0.96 5.04187 2.16 5.04187H4.08C4.56 5.04187 5.04 5.40188 5.04 6.00188C5.04 6.60188 4.56 6.84187 4.08 6.84187H2.16C2.04 6.84187 1.92 6.96187 1.92 7.20187V24.1219C1.92 24.2419 2.04 24.4819 2.28 24.4819H27.96C28.08 24.4819 28.32 24.3619 28.32 24.1219V7.20187C28.32 7.08188 28.2 6.84187 27.96 6.84187H26.04C25.56 6.84187 25.08 6.48188 25.08 5.88188C25.08 5.28188 25.56 4.92188 26.04 4.92188H27.96C29.04 5.04187 30 6.00188 30 7.20187V24.1219C30 25.3219 29.04 26.2819 27.84 26.2819Z" fill="#686868"/>
                                                                  <path d="M29.04 21.8419H0.96C0.48 21.8419 0 21.3619 0 20.8819C0 20.4019 0.36 19.9219 0.96 19.9219H29.04C29.52 19.9219 30 20.4019 30 20.8819C30 21.3619 29.52 21.8419 29.04 21.8419Z" fill="#686868"/>
                                                                  <path d="M19.0796 29.9989H10.9196C10.5596 29.9989 10.1996 29.7589 10.0796 29.3989C9.95958 29.0389 9.95958 28.6789 10.3196 28.3189C11.5196 27.1189 11.8796 25.1989 11.8796 25.1989C11.9996 24.7189 12.4796 24.3589 12.9596 24.3589C13.4396 24.4789 13.7996 24.8389 13.7996 25.4389C13.7996 25.5589 13.5596 26.7589 12.8396 28.0789H17.2796C16.5596 26.7589 16.3196 25.4389 16.3196 25.4389C16.1996 24.9589 16.5596 24.4789 17.1596 24.3589C17.6396 24.2389 18.1196 24.5989 18.2396 25.1989C18.2396 25.1989 18.4796 26.9989 19.6796 28.3189C19.9196 28.4389 20.0396 28.7989 20.0396 29.0389C20.0396 29.6389 19.5596 29.9989 19.0796 29.9989Z" fill="#686868"/>
                                                                  <path d="M14.9986 17.52C14.8786 17.52 14.7586 17.52 14.6386 17.4C14.3986 17.28 7.55859 14.28 7.55859 8.16V3.12C7.55859 2.76 7.79859 2.4 8.15859 2.28L14.6386 0C14.8786 0 15.1186 0 15.3586 0L21.9586 2.28C22.3186 2.4 22.5586 2.76 22.5586 3.12V8.16C22.5586 14.28 15.7186 17.28 15.4786 17.4C15.2386 17.52 15.1186 17.52 14.9986 17.52ZM9.35859 3.84V8.16C9.35859 12.36 13.6786 14.88 14.9986 15.48C16.3186 14.76 20.6386 12.36 20.6386 8.16V3.84L14.9986 1.92L9.35859 3.84Z" fill="#686868"/>
                                                                  <path d="M14.4006 11.88C14.1606 11.88 13.9206 11.76 13.6806 11.64L11.1606 9.12002C10.8006 8.76002 10.8006 8.16002 11.1606 7.80002C11.5206 7.44002 12.1206 7.44002 12.4806 7.80002L14.1606 9.48002L17.2806 5.40002C17.6406 5.04002 18.1206 4.92002 18.6006 5.16002C18.9606 5.52002 19.0806 6.00002 18.8406 6.48002L15.1206 11.52C15.0006 11.76 14.7606 11.88 14.4006 11.88Z" fill="#686868"/>
                                                                </g>
                                                                <defs>
                                                                  <clipPath id="clip0_4191_3148">
                                                                    <rect width="30" height="30" fill="white"/>
                                                                  </clipPath>
                                                                </defs>
                                                            </svg>
                                                            <p>
                                                                Defensive security
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="col-3 domain-expertise-col">
                                                        <a href="https://www.infosectrain.com/operational-technology-ot-training-courses/">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="30" viewBox="0 0 28 30" fill="none">
                                                                <g clip-path="url(#clip0_4191_3158)">
                                                                  <path d="M17.25 17.25C17.25 16.75 16.875 16.375 16.375 16.375H7.125C6.625 16.375 6.25 16.75 6.25 17.25C6.25 17.75 6.625 18.125 7.125 18.125H16.375C16.875 18.125 17.25 17.75 17.25 17.25Z" fill="#686868"/>
                                                                  <path d="M17.25 12.75C17.25 12.25 16.875 11.875 16.375 11.875H7.125C6.625 11.875 6.25 12.25 6.25 12.75C6.25 13.25 6.625 13.625 7.125 13.625H16.375C16.875 13.5 17.25 13.125 17.25 12.75Z" fill="#686868"/>
                                                                  <path d="M7.125 21C6.625 21 6.25 21.375 6.25 21.875C6.25 22.375 6.625 22.75 7.125 22.75H11.25C11.75 22.75 12.125 22.375 12.125 21.875C12.125 21.375 11.75 21 11.25 21H7.125Z" fill="#686868"/>
                                                                  <path d="M15.25 28.25H4.375C2.875 28.25 1.625 27 1.625 25.5V8.875H5.625C7.5 8.875 8.875 7.5 8.875 5.75V1.75H21.375C22.875 1.75 24.125 3 24.125 4.5V15.5C24.125 16 24.5 16.375 25 16.375C25.5 16.375 25.875 16 25.875 15.5V4.375C25.875 1.875 23.875 0 21.5 0H7.125C6 0 4.875 0.5 4 1.25L1.25 4C0.5 4.875 0 6 0 7.125V25.625C0 28.125 2 30 4.375 30H15.125C15.625 30 16 29.625 16 29.125C16 28.625 15.625 28.25 15.25 28.25ZM2.5 5.25L5.25 2.5C5.75 2 6.375 1.75 7.125 1.75V5.75C7.125 6.5 6.5 7.125 5.75 7.125H1.75C1.75 6.375 2 5.75 2.5 5.25Z" fill="#686868"/>
                                                                  <path d="M22.5 30C22.75 30 23 30 23.25 29.875L23.625 29.75C26.125 28.75 27.75 26.375 27.75 23.5V21.75C27.75 20.875 27.125 20 26.125 19.875C25.25 19.75 24.375 19.375 23.375 18.75C22.75 18.375 21.875 18.375 21.25 18.75C20.375 19.375 19.5 19.75 18.5 19.875C17.625 20 16.875 20.875 16.875 21.75V23.25C16.875 26.125 18.75 28.75 21.375 29.875C21.875 30 22.125 30 22.5 30ZM18.625 21.75C18.625 21.5 18.75 21.375 19 21.375C20.125 21.125 21.125 20.75 22.25 20.125C22.375 20.125 22.375 20 22.5 20C22.625 20 22.625 20 22.75 20.125C23.75 20.75 24.875 21.25 26 21.375C26.25 21.375 26.375 21.625 26.375 21.75V23.5C26.375 25.625 25.125 27.625 23.125 28.375L22.75 28.5C22.625 28.5 22.375 28.5 22.25 28.5C20.125 27.625 18.625 25.625 18.625 23.25V21.75Z" fill="#686868"/>
                                                                  <path d="M21.875 26.125C22.125 26.125 22.25 26 22.375 25.875L24.875 23.375C25.125 23.125 25.125 22.625 24.875 22.375C24.625 22.125 24.125 22.125 23.875 22.375L21.875 24.375L21 23.5C20.75 23.25 20.25 23.25 20 23.5C19.75 23.75 19.75 24.25 20 24.5L21.375 25.875C21.5 26.125 21.75 26.125 21.875 26.125Z" fill="#686868"/>
                                                                </g>
                                                                <defs>
                                                                  <clipPath id="clip0_4191_3158">
                                                                    <rect width="27.75" height="30" fill="white"/>
                                                                  </clipPath>
                                                                </defs>
                                                            </svg>
                                                            <p>
                                                                OT/ICS Security
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="col-3 domain-expertise-col">
                                                        <a href="https://www.infosectrain.com/physical-security-training-courses/">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                                                <g clip-path="url(#clip0_4191_3171)">
                                                                  <path d="M21.4849 29.9992C21.8903 29.9992 22.1606 29.9992 22.566 29.864L23.1065 29.7289C26.4849 28.3775 28.6471 25.2694 28.6471 21.4856V19.0532C28.6471 17.837 27.8363 16.7559 26.62 16.4856C25.4038 16.2154 24.1876 15.81 23.1065 14.9992C22.2957 14.4586 21.2146 14.4586 20.4038 14.9992C19.1876 15.81 17.9714 16.2154 16.8903 16.4856C15.6741 16.7559 14.8633 17.7019 14.8633 19.0532V21.0802C14.8633 24.9992 17.2957 28.5127 20.9444 29.864C20.8092 29.9992 21.2146 29.9992 21.4849 29.9992ZM16.4849 19.0532C16.4849 18.7829 16.7552 18.5127 17.0254 18.5127C18.5119 18.2424 19.8633 17.7019 21.3498 16.7559C21.4849 16.7559 21.62 16.6208 21.62 16.6208C21.62 16.6208 21.8903 16.6208 21.8903 16.7559C23.2417 17.7019 24.7281 18.2424 26.2146 18.5127C26.4849 18.5127 26.7552 18.7829 26.7552 19.0532V21.4856C26.7552 24.3235 25.1336 26.891 22.566 27.837L22.0254 27.9721C21.7552 28.1073 21.62 28.1073 21.3498 27.9721C18.5119 26.891 16.62 24.0532 16.62 21.0802V19.0532H16.4849Z" fill="#686868"/>
                                                                  <path d="M20.8091 25.001C21.0794 25.001 21.3497 24.8658 21.4848 24.7307L24.728 21.4874C25.1334 21.082 25.1334 20.5415 24.728 20.1361C24.3226 19.7307 23.7821 19.7307 23.3767 20.1361L20.8091 22.7037L19.5929 21.4874C19.1875 21.082 18.647 21.082 18.2416 21.4874C17.8361 21.8928 17.8361 22.4334 18.2416 22.8388L20.1334 24.7307C20.2686 24.8658 20.5389 25.001 20.8091 25.001Z" fill="#686868"/>
                                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5942 0C10.5401 0 7.29688 3.24324 7.29688 7.2973C7.29688 11.3514 10.5401 14.5946 14.5942 14.5946C18.6482 14.5946 21.8915 11.3514 21.8915 7.2973C21.8915 3.24324 18.6482 0 14.5942 0ZM14.5942 2.02703C17.432 2.02703 19.8644 4.32432 19.8644 7.2973C19.8644 10.2703 17.5671 12.5676 14.5942 12.5676C11.7563 12.5676 9.45904 10.2703 9.45904 7.2973C9.45904 4.32432 11.7563 2.02703 14.5942 2.02703Z" fill="#686868"/>
                                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M2.02703 27.1632H13.7838C14.3243 27.1632 14.8649 27.5686 14.8649 28.2443C14.8649 28.7848 14.4595 29.3254 13.7838 29.3254H1.08108C0.540541 29.3254 0 28.92 0 28.2443C0 28.2443 0 27.4335 0 26.2173C0 20.947 4.18919 16.7578 9.45946 16.7578H12.4324C12.973 16.7578 13.5135 17.1632 13.5135 17.8389C13.5135 18.5146 13.1081 18.92 12.4324 18.92H9.45946C5.40541 18.92 2.16216 22.1632 2.16216 26.2173V27.1632H2.02703Z" fill="#686868"/>
                                                                </g>
                                                                <defs>
                                                                  <clipPath id="clip0_4191_3171">
                                                                    <rect width="28.5135" height="30" fill="white"/>
                                                                  </clipPath>
                                                                </defs>
                                                            </svg>
                                                            <p>
                                                                Physical Security
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="col-3 domain-expertise-col">
                                                    <a href="https://www.infosectrain.com/category/" class="flex-row justify-content-between align-items-center">
                                                        <p class="m-0">
                                                            VIEW ALL
                                                        </p>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="8" viewBox="0 0 18 8" fill="none">
                                                            <path d="M1 3.21875C0.723858 3.21875 0.5 3.44261 0.5 3.71875C0.5 3.99489 0.723858 4.21875 1 4.21875L1 3.21875ZM17.3536 4.07231C17.5488 3.87704 17.5488 3.56046 17.3536 3.3652L14.1716 0.183219C13.9763 -0.0120432 13.6597 -0.0120433 13.4645 0.183219C13.2692 0.378481 13.2692 0.695063 13.4645 0.890326L16.2929 3.71875L13.4645 6.54718C13.2692 6.74244 13.2692 7.05902 13.4645 7.25429C13.6597 7.44955 13.9763 7.44955 14.1716 7.25429L17.3536 4.07231ZM1 4.21875L17 4.21875L17 3.21875L1 3.21875L1 4.21875Z" fill="#EE224A"/>
                                                            <path d="M1 3.21875C0.723858 3.21875 0.5 3.44261 0.5 3.71875C0.5 3.99489 0.723858 4.21875 1 4.21875L1 3.21875ZM17.3536 4.07231C17.5488 3.87704 17.5488 3.56046 17.3536 3.3652L14.1716 0.183219C13.9763 -0.0120432 13.6597 -0.0120433 13.4645 0.183219C13.2692 0.378481 13.2692 0.695063 13.4645 0.890326L16.2929 3.71875L13.4645 6.54718C13.2692 6.74244 13.2692 7.05902 13.4645 7.25429C13.6597 7.44955 13.9763 7.44955 14.1716 7.25429L17.3536 4.07231ZM1 4.21875L17 4.21875L17 3.21875L1 3.21875L1 4.21875Z" fill="#686868"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                                </div>
                                                <!--/ row end /-->
                                            </div>
                                        </div>
                                        <!--/ by domain expertise end /-->

                                        <!--/ career oriented course start /-->
                                        <div class="tab-pane fade" id="v-pills-career-oriented" role="tabpanel" aria-labelledby="v-pills-career-oriented-tab">

                                        </div>
                                        <!--/ career oriented course end /-->

                                        <!--/ combo course start /-->
                                        <div class="tab-pane fade" id="v-pills-combo-courses" role="tabpanel" aria-labelledby="v-pills-combo-courses-tab">

                                        </div>
                                        <!--/ combo course end /-->

                                        <!--/ new courses start /-->
                                        <div class="tab-pane fade" id="v-pills-new-course" role="tabpanel" aria-labelledby="v-pills-new-course-tab">

                                        </div>
                                        <!--/ new courses end /-->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Mega Menu end-->
                    <li class="megamenu-nav-item">
                        <a class="megamenu-nav-link" href="https://www.infosectrain.com/training-calendar/">
                            Training Calendar
                        </a>
                    </li>
                    <!-- dropdown start -->
                    <li class="megamenu-nav-item service-dropdwon">
                        <a class="megamenu-nav-link dropdown-toggle" href="#">
                            free resources
                        </a>
                        <ul class="drop-menu">
                            <?php foreach ($free_resources_menu as $free_resources_key => $free_resources_value) { ?>
                                <li class="drop-menu-item">
                                    <a href="<?php echo $free_resources_key; ?>"><?php echo $free_resources_value;?></a>
                                </li>
                            <?php }?>
                        </ul>
                    </li>
                    <!-- dropdown end -->

                    <!-- dropdown start -->
                    <li class="megamenu-nav-item service-dropdwon">
                        <a class="megamenu-nav-link dropdown-toggle" href="#">
                            services
                        </a>
                        <ul class="drop-menu">
                            <?php foreach ($services_menu as $services_key => $services_value) { ?>
                                <li class="drop-menu-item">
                                    <a href="<?php echo $services_key; ?>"><?php echo $services_value;?></a>
                                </li>
                            <?php }?>
                        </ul>
                    </li>
                    <!-- dropdown end -->

                    <!-- dropdown start -->
                    <li class="megamenu-nav-item service-dropdwon">
                        <a class="megamenu-nav-link dropdown-toggle" href="#">
                            about us
                        </a>
                        <ul class="drop-menu">
                            <?php foreach ($aboutus_menu as $about_key => $about_value) { ?>
                                <li class="drop-menu-item">
                                    <a href="<?php echo $about_key; ?>"><?php echo $about_value;?></a>
                                </li>
                            <?php }?>
                        </ul>
                    </li>
                    <!-- dropdown end -->
            </ul>
            <!--/ desktop view menu end -->




        <!--    <a href="#" class="d-none d-sm-inline-block btn popup_button nav_enquire" data-text="Get a Free Demo" data-target="#request_demo"> Get a Free Demo </a>-->

        <button data-text="Get a Free Demo" data-type="Get a Free Demo" class="call_popup_click d-lg-block d-none" style="padding: 12px 35px;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    background: #EE224A;
    font-weight: 500;
    cursor:pointer;
    ">
            Get a Free Demo
        </button>

            <!--<[search form end]>-->

            <!--<[humberger menu start]>-->
            <div class="humberger-menu d-lg-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="20" viewBox="0 0 29 20" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 3.33333V0H29V3.33333H0ZM0 11.6667H29V8.33333H0V11.6667ZM0 20H29V16.6667H0V20Z" fill="#EE224A"/>
                </svg>
            </div>
            <!--<[humberger menu end]>-->
        </div>
</nav>




    <!--/===============
         MOBILE MENU START
     ==============/-->

    <!--==============/ mobile menu /==============-->
    <section class="nav-wrap">
        <!-- start accordion nav block -->
        <nav class="acnav" role="navigation">
            <!--/ menu back option start /-->
            <div class="backBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <rect width="25.3833" height="2.90095" transform="matrix(-0.707107 0.707107 0.707107 0.707107 17.9531 0)" fill="#EE224A"/>
                    <rect x="2.05078" width="25.3833" height="2.90095" transform="rotate(45 2.05078 0)" fill="#EE224A"/>
                </svg>
            </div>
            <!--/ menu back option end/-->
            <ul class="acnav__list acnav__list--level1">
                <!--/ all courses mob  sec start /-->
                <li class="has-children">
                    <div class="acnav__label">
                        Top Trending Courses
                    </div>
                    <!-- start level 2 -->
                    <ul class="acnav__list acnav__list--level3">
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/cissp-certification-training/">CISSP</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="infosectrain.com/courses/ccsp-certification-training/">CCSP</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/cisa-certification-training/">CISA</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/cism-certification-training/">CISM</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/crisc-certification-training/">CRISC</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="infosectrain.com/courses/certified-ethical-hacker-ceh-training/">CEH v12</a>
                        </li>

                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/comptia-security/">Security+</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/european-privacy-training-cippe/">CIPP/E</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/certified-information-privacy-manager-cipm-training/">CIPM</a>
                        </li>

                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/certified-information-privacy-technologist-cipt-training/">CIPT</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/certificate-cloud-security-knowledge-ccsk/">CCSK</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/soc-analyst-training/">SOC Analyst</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/soc-specialist-training/">SOC Specialist</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/iso27001la/">ISO 27001:2022 LA</a>
                        </li>

                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/iso27001li/">ISO 27001:2022 LI</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/aws-combo-course-training/">AWS Combo</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/advanced-penetration-testing-online-training-course/">Advanced Penetration Testing</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/information-systems-auditor-online-training/">Information Systems Auditor</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/cyberark-training/">CyberArk Training</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/sailpoint-training/">Sailpoint IdentityIQ Implementation</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/threat-hunting-training/">Threat Hunting Professional</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/az-500-microsoft-azure-security-technologies-training/">AZ-500 : Microsoft Azure Security</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/cyber-security-expert-training/">Cyber Security Expert</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/cloud-governance-security-training/">Advance Cloud Security Governance</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/courses/">View All</a>
                        </li>
                    </ul>
                    <!-- end level 2 -->
                    <!-- end level 2 -->
                </li>
                <!--/ all courses mob  sec end/-->

                <!--/ by vendor mob  sec start /-->
                <li class="has-children">
                    <div class="acnav__label">
                        By Vendor
                    </div>
                    <!-- start level 2 -->
                    <ul class="acnav__list acnav__list--level3">
                        <li><a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/vendor/ec-council-certification-training-courses/">EC Council</a></li>
                        <li><a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/vendor/isc2-training-courses/">(ISC)2</a></li>
                        <li><a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/vendor/isaca-training-courses/">ISACA</a></li>
                        <li><a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/vendor/iapp-certification-training/">IAPP</a></li>
                        <li><a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/vendor/pecb-training-courses/">PECB/ISO</a></li>
                        <li><a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/vendor/comptia-certification-training/">CompTIA</a></li>
                        <li><a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/vendor/amazon-aws-training-courses/">AWS</a></li>
                        <li><a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/vendor/cloud-security-alliance-training-courses/">Cloud Security Alliance</a></li>
                        <li><a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/vendor/microsoft-training-certification-courses/">Microsoft</a></li>
                        <li><a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/vendor/">View All</a></li>
                    </ul>
                    <!-- end level 2 -->
                    <!-- end level 2 -->
                </li>
                <!--/ by vendor mob  sec end /-->

                <!--/ domain expertise mob sec start /-->
                <li class="has-children">
                    <div class="acnav__label">
                        By Domain/Expertise
                    </div>
                    <!-- start level 2 -->
                    <ul class="acnav__list acnav__list--level2">
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/cybersecurity-certification-training/">Cyber Security</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/cloud-security-certification-training/">Cloud Security</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/grc-training-courses/">GRC</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/security-testing/">Security Testing</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/data-privacy/">Data Privacy</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/audit-training-courses/">Auditing</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/security-product-training-courses/">Product Trainings</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/security-operations-center-soc-training-courses/">Security Operations Center</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/network-security-training-courses/">Network & Network Security</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/offensive-security-training-courses/">Offensive Security</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/defensive-security-training-courses/">Defensive security</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/operational-technology-ot-training-courses/">OT/ICS Security</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/physical-security-training-courses/">Physical Security</a>
                        </li>
                        <li>
                            <a class="acnav__link acnav__link--level2" href="https://www.infosectrain.com/category/">View All</a>
                        </li>
                    </ul>
                    <!-- end level 2 -->
                </li>
                <!--/ domain expertise mob  sec end /-->

                <!--/ career oriented mob sec start /-->
                <li class="has-children">
                    <div class="acnav__label">
                        Career-Oriented Courses
                    </div>
                    <!-- start level 2 -->
                    <ul class="acnav__list acnav__list--level2">

                    </ul>
                    <!-- end level 2 -->
                </li>
                <!--/ career oriented mob sec end /-->

                <!--/combo sec start /-->
                <li class="has-children">
                    <div class="acnav__label">
                        Top Combo Courses
                    </div>
                    <!-- start level 2 -->
                    <ul class="acnav__list acnav__list--level2">

                    </ul>
                    <!-- end level 2 -->
                </li>
                <!--/ combo sec end /-->

                <!--/ new courses mob sec start /-->
                <li class="has-children">
                    <div class="acnav__label">
                        New Courses
                    </div>
                    <!-- start level 2 -->
                    <ul class="acnav__list acnav__list--level3">

                    </ul>
                    <!-- end level 2 -->
                    <!-- end level 2 -->
                </li>
                <!--/ new courses mob sec end /-->

                <!--/ training calendar mob sec start /-->
                <li class="has-children">
                    <div class="acnav__labeltwo">
                        <a href="https://www.infosectrain.com/training-calendar/">Training Calendar</a>
                    </div>
                </li>
                <!--/ training calendar mob sec end /-->

                <!--/ resource mob sec start /-->
                <li class="has-children">
                    <div class="acnav__label">
                        Free Resources
                    </div>
                    <!-- start level 2 -->
                    <ul class="acnav__list acnav__list--level2">
                        <?php foreach ($free_resources_menu as $free_resources_key => $free_resources_value) { ?>
                            <li>
                                <a class="acnav__link acnav__link--level2" href="<?php echo $free_resources_key; ?>">
                                    <?php echo $free_resources_value;?>
                                </a>
                            </li>
                        <?php }?>
                    </ul>
                    <!-- end level 2 -->
                </li>
                <!--/ resource mob sec end /-->

                <!--/ service mob sec start/-->
                <li class="has-children">
                    <div class="acnav__label">
                        services
                    </div>
                    <!-- start level 2 -->
                    <ul class="acnav__list acnav__list--level2">
                        <?php foreach ($services_menu as $services_key => $services_value) { ?>
                            <li>
                                <a class="acnav__link acnav__link--level2" href="<?php echo $services_key; ?>"><?php echo $services_value;?></a>
                            </li>
                        <?php }?>
                    </ul>
                    <!-- end level 2 -->
                </li>
                <!--/ service mob sec end /-->

                <!--/ about-us mob sec start /-->
                <li class="has-children">
                    <div class="acnav__label">
                        about us
                    </div>
                    <!-- start level 2 -->
                    <ul class="acnav__list acnav__list--level2">
                        <?php foreach ($aboutus_menu as $about_key => $about_value) { ?>
                            <li>
                                <a class="acnav__link acnav__link--level2" href="<?php echo $about_key; ?>"><?php echo $about_value;?></a>
                            </li>
                        <?php }?>
                    </ul>
                    <!-- end level 2 -->
                </li>
                <!--/ about-us mob sec end /-->
            </ul>
        </nav>
        <!-- start accordion nav end -->
    </section>
    <!--==============/ mobile menu end /==============-->

    <script>
        $(document).ready(function ($) {
  $('#v-pills-tab[data-mouse="hover"] a').hover(function(){
    $(this).tab('show');
  });
  $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
    var target = $(e.relatedTarget).attr('href');
    $(target).removeClass('active');
  })
});
    </script>
