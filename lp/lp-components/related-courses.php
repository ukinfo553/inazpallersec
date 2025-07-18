<style>
/*======== related course sec start ==========*/
.related-course-sec .col-lg-3 {
    margin-top: 24px;
}
.related-course-sec .item{
    border: 1px solid #f0f0f0;
    display: block;
    text-decoration: none;
    color: var(--dark-charcoal);
    border-radius: 5px;
    height: 100%;
}
.related-course-sec .item img{
    width: 100%;
    max-width: 100%;
    height: auto;
    border-radius: 5px 5px 0 0;
}
.related-course-sec .item .item-body{
    padding: 10px 8px;
}
@media (min-width:768px) {
    .related-course-sec .item .item-body {
        padding: 16px 12px;
    }
}
.related-course-sec .item .item-body h4{
    color: #080808;
    font-family: "Nunito Sans";
    font-size: 13px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    overflow: hidden;
    /* text-overflow: ellipsis;
    white-space: nowrap; */
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -moz-box;
    -moz-box-orient: vertical;
    min-height: auto;
}
@media (min-width:768px) {
    .related-course-sec .item .item-body h4{
    font-size: 16px;
    min-height: 3em;
}
}
.related-course-sec .item .item-body a{
    border-radius: 5px;
    background: linear-gradient(0deg, #F0F0F0 0%, #F0F0F0 100%), linear-gradient(267deg, #EE224A -15.61%, #FF8A00 123.55%);
    width: 100%;
    display: block;
    padding: 12px 16px;
    text-align: center;
    text-decoration: none;
    color: #484848;
    text-align: center;
    font-family: "Nunito Sans";
    font-size: 14px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    text-transform:uppercase;
    margin-top: 16px;
}
.related-course-sec .item .item-body a:hover{
    background: linear-gradient(267deg, #E50914 -15.61%, #FF8A00 123.55%);
    color: #ffffff;
}
@media (min-width:992px) {
    .related-course-sec .item .item-body a{
        margin-top: 24px;
    }
}

picture[title="Buy 1 Course Get 1 Free"] img{
    max-width: 100%!important;
    width: auto!important;
}
/*======== related course sec end ==========*/

</style>

<?php
$relatedCourses = [
    "iso-42001-lead-auditor-training" => [
        [
            "link" => "https://www.infosectrain.com/courses/iso-iec-42001-lead-implementer-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/08/ISO-IEC-42001-LI.png",
            "text" => "ISO/IEC 42001 Lead Implementer Training and Certification"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/aigp-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/07/IAPP_AIGP_Certification_Training_Artificial_Intelligence_Governance.png",
            "text" => "IAPP AIGP Certification Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/iso27001la/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/ISO-27001-min.png",
            "text" => "ISO/IEC 27001:2022 Lead Auditor Online Training & Certification"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/artificial-intelligence-ai-for-cyber-security-professionals-training/",
             "image" => "https://www.infosectrain.com/wp-content/uploads/2025/01/AI-Powered-Cybersecurity-Training-Course-Online.webp",
             "text" => "AI-Powered Cybersecurity Training"
        ]
    ],
    "ai-powered-cybersecurity-training" => [
        [
            "link" => "https://www.infosectrain.com/courses/certified-ethical-hacker-ceh-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/09/CEH-v13-AI-Online-Training-Certification-Course.jpg",
            "text" => "Certified Ethical Hacker (CEH)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/comptia-security/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2020/11/CompTIA-Security-Plus.jpg",
            "text" => "CompTIA Security+ Online Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/advanced-threat-hunting-and-digital-forensics-and-incident-response-training/",
             "image" => "https://www.infosectrain.com/wp-content/uploads/2022/01/Threat-Hunting-1.jpg",
             "text" => "Advanced Cyber Threat Hunting and DFIR Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/splunk-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/11/Splunk-Practical-Approach-Training-Course.png",
            "text" => "Splunk Practical Approach Training"
        ]
    ],
    "issap-training" => [
        [
            "link" => "https://www.infosectrain.com/pages/lp/ccsp-training-online/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CCSP-min.png",
            "text" => "Certified Cloud Security Professional (CCSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cissp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISSP-min.png",
            "text" => "Certified Information Systems Security Professional (CISSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cism-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISM-min.png",
            "text" => "Certified Information Security Manager (CISM)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/security-architecture-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2025/04/Security-Architecture-Hands-on-Training.jpg",
            "text" => "Security Architecture Hands-on Training"
        ]
    ],
    "certified-grc-auditor-training" => [
        [
            "link" => "https://www.infosectrain.com/courses/iso27001la/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/ISO-27001-min.png",
            "text" => "ISO/IEC 27001:2022 Lead Auditor Online Training & Certification"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cisa-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISA-min.png",
            "text" => "Certified Information Systems Auditor (CISA)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/iso-iec-42001-lead-auditor-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/08/ISO-IEC-42001-LA.png",
            "text" => "ISO/IEC 42001 Lead Auditor Training Course"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/grc-online-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/grc-hands-on-min.png",
            "text" => "GRC Hands-on Training"
        ]
    ],
    "cissp-training" => [
        [
            "link" => "https://www.infosectrain.com/pages/lp/cism-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISM-min.png",
            "text" => "Certified Information Security Manager (CISM)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cisa-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISA-min.png",
            "text" => "Certified Information Systems Auditor (CISA)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/crisc/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/Certified-in-Risk-and-Information-Systems-Control.jpg",
            "text" => "Certified in Risk and Information Systems Control (CRISC)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/grc-online-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/grc-hands-on-min.png",
            "text" => "GRC Hands-on Training"
        ]
    ],
    "splunk-training" => [
        [
            "link" => "https://www.infosectrain.com/courses/soc-analyst-training/?utm_source=ppcSearchIN",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/soc-analyst-min.png",
            "text" => "SOC Analyst Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/advanced-penetration-testing-online-training-course/?utm_source=ppcSearchIN",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/apt-min.png",
            "text" => "Advanced Penetration Testing (APT) Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/advanced-threat-hunting-and-digital-forensics-and-incident-response-training/?utm_source=ppcSearchIN",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/01/Threat-Hunting-1.jpg",
            "text" => "Advanced Cyber Threat Hunting and DFIR Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/web-application-penetration-testing-wapt/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2025/04/AWAPT-Feature-Img.webp",
            "text" => "AWAPT - Advanced Web Application Penetration Testing"
        ]
    ],
    "cissp-certification-training" => [
        [
            "link" => "https://www.infosectrain.com/pages/lp/cism-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISM-min.png",
            "text" => "Certified Information Security Manager (CISM)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/security-architecture-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2025/04/Security-Architecture-Hands-on-Training.jpg",
            "text" => "Security Architecture Hands-on Training"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/crisc/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/Certified-in-Risk-and-Information-Systems-Control.jpg",
            "text" => "Certified in Risk and Information Systems Control (CRISC)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/grc-online-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/grc-hands-on-min.png",
            "text" => "GRC Hands-on Training"
        ]
    ],
    "cissp-online-training-hyderabad" => [
        [
            "link" => "https://www.infosectrain.com/pages/lp/cism-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISM-min.png",
            "text" => "Certified Information Security Manager (CISM)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cisa-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISA-min.png",
            "text" => "Certified Information Systems Auditor (CISA)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/crisc/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/Certified-in-Risk-and-Information-Systems-Control.jpg",
            "text" => "Certified in Risk and Information Systems Control (CRISC)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/grc-online-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/grc-hands-on-min.png",
            "text" => "GRC Hands-on Training"
        ]
    ],
    "cissp-issap-certification-training" => [
        [
            "link" => "https://www.infosectrain.com/pages/lp/cism-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISM-min.png",
            "text" => "Certified Information Security Manager (CISM)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cisa-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISA-min.png",
            "text" => "Certified Information Systems Auditor (CISA)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cissp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISSP-min.png",
            "text" => "Certified Information Systems Security Professional (CISSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/ccsp-training-online/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CCSP-min.png",
            "text" => "Certified Cloud Security Professional (CCSP)"
        ]
    ],
    "ccsp-training-online" => [
        [
            "link" => "https://www.infosectrain.com/pages/lp/cism-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISM-min.png",
            "text" => "Certified Information Security Manager (CISM)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/security-architecture-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2025/04/Security-Architecture-Hands-on-Training.jpg",
            "text" => "Security Architecture Hands-on Training"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cissp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISSP-min.png",
            "text" => "Certified Information Systems Security Professional (CISSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/cloud-governance-security-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/cloud-feature.jpg",
            "text" => "Advanced Cloud Security Governance Training"
        ]
    ],
    "ccsp-certification-training" => [
        [
            "link" => "https://www.infosectrain.com/pages/lp/cism-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISM-min.png",
            "text" => "Certified Information Security Manager (CISM)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/security-architecture-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2025/04/Security-Architecture-Hands-on-Training.jpg",
            "text" => "Security Architecture Hands-on Training"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cissp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISSP-min.png",
            "text" => "Certified Information Systems Security Professional (CISSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/cloud-governance-security-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/cloud-feature.jpg",
            "text" => "Advanced Cloud Security Governance Training"
        ]
    ],
    "ccsp-hyderabad-classroom-training" => [
        [
            "link" => "https://www.infosectrain.com/pages/lp/cism-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISM-min.png",
            "text" => "Certified Information Security Manager (CISM)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cisa-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISA-min.png",
            "text" => "Certified Information Systems Auditor (CISA)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cissp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISSP-min.png",
            "text" => "Certified Information Systems Security Professional (CISSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/cloud-governance-security-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/cloud-feature.jpg",
            "text" => "Advanced Cloud Security Governance Training"
        ]
    ],
    "cisa-training" => [
        [
            "link" => "https://www.infosectrain.com/pages/lp/cism-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISM-min.png",
            "text" => "Certified Information Security Manager (CISM)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/crisc-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/Certified-in-Risk-and-Information-Systems-Control.jpg",
            "text" => "Certified in Risk and Information Systems Control (CRISC)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cissp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISSP-min.png",
            "text" => "Certified Information Systems Security Professional (CISSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/security-architecture-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2025/04/Security-Architecture-Hands-on-Training.jpg",
            "text" => "Security Architecture Hands-on Training"
        ]
    ],
    "cism-training" => [
        [
            "link" => "https://www.infosectrain.com/pages/lp/ccsp-training-online/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CCSP-min.png",
            "text" => "Certified Cloud Security Professional (CCSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/crisc-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/Certified-in-Risk-and-Information-Systems-Control.jpg",
            "text" => "Certified in Risk and Information Systems Control (CRISC)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cissp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISSP-min.png",
            "text" => "Certified Information Systems Security Professional (CISSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cisa-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISA-min.png",
            "text" => "Certified Information Systems Auditor (CISA)"
        ]
    ],
    "cism-certification-training" => [
        [
            "link" => "https://www.infosectrain.com/pages/lp/ccsp-training-online/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CCSP-min.png",
            "text" => "Certified Cloud Security Professional (CCSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/security-architecture-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2025/04/Security-Architecture-Hands-on-Training.jpg",
            "text" => "Security Architecture Hands-on Training"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cissp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISSP-min.png",
            "text" => "Certified Information Systems Security Professional (CISSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cisa-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISA-min.png",
            "text" => "Certified Information Systems Auditor (CISA)"
        ]
    ],
    "iapp-cippe-training" => [
        [
            "link" => "https://www.infosectrain.com/courses/certified-information-privacy-manager-cipm-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CIPM-min.png",
            "text" => "Certified Information Privacy Manager (CIPM)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/certified-information-privacy-technologist-cipt-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/08/Certified-Information-Privacy-Technologist-CIPT.jpg",
            "text" => "Certified Information Privacy Technologist (CIPT)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/aigp-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/07/IAPP_AIGP_Certification_Training_Artificial_Intelligence_Governance.png",
            "text" => "IAPP AIGP Certification Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/data-protection-officer-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/04/Data-Protection-Officer-DPO.jpg",
            "text" => "DPO Hands-on Training"
        ]
    ],

	"iapp-cipm-training" => [
        [
            "link" => "https://www.infosectrain.com/courses/european-privacy-training-cippe/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CIPP-E-min.png",
            "text" => "European Privacy Training - CIPP/E Online Training & Certification Course"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/certified-information-privacy-technologist-cipt-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/08/Certified-Information-Privacy-Technologist-CIPT.jpg",
            "text" => "Certified Information Privacy Technologist (CIPT)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/aigp-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/07/IAPP_AIGP_Certification_Training_Artificial_Intelligence_Governance.png",
            "text" => "IAPP AIGP Certification Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/data-protection-officer-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/04/Data-Protection-Officer-DPO.jpg",
            "text" => "DPO Hands-on Training"
        ]
    ],


		"iapp-cipt-training" => [
        [
            "link" => "https://www.infosectrain.com/courses/european-privacy-training-cippe/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CIPP-E-min.png",
            "text" => "European Privacy Training - CIPP/E Online Training & Certification Course"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/certified-information-privacy-manager-cipm-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CIPM-min.png",
            "text" => "Certified Information Privacy Manager (CIPM)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/aigp-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/07/IAPP_AIGP_Certification_Training_Artificial_Intelligence_Governance.png",
            "text" => "IAPP AIGP Certification Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/data-protection-officer-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/04/Data-Protection-Officer-DPO.jpg",
            "text" => "DPO Hands-on Training"
        ]
    ],

    "aigp-certification" => [
        [
            "link" => "https://www.infosectrain.com/courses/european-privacy-training-cippe/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CIPP-E-min.png",
            "text" => "European Privacy Training - CIPP/E Online Training & Certification Course"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/certified-information-privacy-manager-cipm-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CIPM-min.png",
            "text" => "Certified Information Privacy Manager (CIPM)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/certified-information-privacy-technologist-cipt-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/08/Certified-Information-Privacy-Technologist-CIPT.jpg",
            "text" => "Certified Information Privacy Technologist (CIPT)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/data-protection-officer-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/04/Data-Protection-Officer-DPO.jpg",
            "text" => "DPO Hands-on Training"
        ]
    ],


	"ceh-v12-certification-training-online" => [
         [
            "link" => "https://www.infosectrain.com/courses/comptia-security/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2020/11/CompTIA-Security-Plus.jpg",
            "text" => "CompTIA Security+ Online Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/advanced-threat-hunting-and-digital-forensics-and-incident-response-training/",
             "image" => "https://www.infosectrain.com/wp-content/uploads/2022/01/Threat-Hunting-1.jpg",
             "text" => "Advanced Cyber Threat Hunting and DFIR Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/soc-analyst-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/soc-analyst-min.png",
            "text" => "SOC Analyst Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/advanced-penetration-testing-online-training-course/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/apt-min.png",
            "text" => "Advanced Penetration Testing (APT) Training"
        ]
    ],

    "ceh-certification-training" => [
        [
           "link" => "https://www.infosectrain.com/courses/comptia-security/",
           "image" => "https://www.infosectrain.com/wp-content/uploads/2020/11/CompTIA-Security-Plus.jpg",
           "text" => "CompTIA Security+ Online Training"
       ],
       [
           "link" => "https://www.infosectrain.com/courses/advanced-threat-hunting-and-digital-forensics-and-incident-response-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/01/Threat-Hunting-1.jpg",
            "text" => "Advanced Cyber Threat Hunting and DFIR Training"
       ],
       [
           "link" => "https://www.infosectrain.com/courses/soc-analyst-training/",
           "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/soc-analyst-min.png",
           "text" => "SOC Analyst Training"
       ],
       [
           "link" => "https://www.infosectrain.com/courses/advanced-penetration-testing-online-training-course/",
           "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/apt-min.png",
           "text" => "Advanced Penetration Testing (APT) Training"
       ]
   ],

	"comptia-security-training" => [
         [
            "link" => "https://www.infosectrain.com/courses/certified-ethical-hacker-ceh-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/09/CEH-v13-AI-Online-Training-Certification-Course.jpg",
            "text" => "Certified Ethical Hacker (CEH)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/soc-analyst-training/",
             "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/soc-analyst-min.png",
             "text" => "SOC Analyst Online Training Course"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/advanced-penetration-testing-online-training-course/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/apt-min.png",
            "text" => "Advanced Penetration Testing Online Training Course"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/advanced-threat-hunting-and-digital-forensics-and-incident-response-training/",
             "image" => "https://www.infosectrain.com/wp-content/uploads/2022/01/Threat-Hunting-1.jpg",
             "text" => "Advanced Cyber Threat Hunting and DFIR Training"
        ]
    ],



	"advanced-penetration-testing-course" => [
         [
            "link" => "https://www.infosectrain.com/courses/ccsp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CCSP-min.png",
            "text" => "Certified Cloud Security Professional (CCSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cism-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISM-min.png",
            "text" => "Certified Information Security Manager (CISM)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/comptia-security/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2020/11/CompTIA-Security-Plus.jpg",
            "text" => " CompTIA Security+ Online Training"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/ceh-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/09/CEH-v13-AI-Online-Training-Certification-Course.jpg",
            "text" => "Certified Ethical Hacker (CEH)"
        ]
    ],


	"rsa-archer-grc-training-online" => [
         [
            "link" => "https://www.infosectrain.com/courses/grc-online-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/grc-hands-on-min.png",
            "text" => "GRC : (Governance, Risk and Compliance) Hands-on Online Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/cgrc-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/02/cgrc-min.png",
            "text" => "CGRC - Governance, Risk and Compliance Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/cybersecurity-awareness-program/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/09/cybersecurity-awarenes.jpg",
            "text" => "Defend and Protect: Cybersecurity Awareness Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/cyber-security-expert-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2020/11/cyber-security-expert-min.png",
            "text" => "Cyber Security Expert Online Training"
        ]
    ],


	"cyberark-training-online" => [
         [
            "link" => "https://www.infosectrain.com/courses/sailpoint-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/06/SailPoint-IdentityIQ-Implementation-Developer-Exam-Training.jpg",
            "text" => "SailPoint IdentityIQ Implementation & Developer"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/cissp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISSP-min.png",
            "text" => "Certified Information Systems Security Professional(CISSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cism-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISM-min.png",
            "text" => "Certified Information Security Manager (CISM)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/grc-online-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/grc-hands-on-min.png",
            "text" => "GRC (Governance, Risk and Compliance) Hands-on"
        ]
    ],


	"cloud-security-governance-training" => [
        [
            "link" => "https://www.infosectrain.com/courses/ccsp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CCSP-min.png",
            "text" => "Certified Cloud Security Professional (CCSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/certificate-cloud-security-knowledge-ccsk/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/06/CCSK-Plus-Training.jpg",
            "text" => "Certificate of Cloud Knowledge (CCSK v5)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/az-500-microsoft-azure-security-technologies-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/06/Microsoft-AZ-500-Training.jpg",
            "text" => "Microsoft AZ-500 Certification"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/aws-combo-course-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2020/11/aws-combo-min.png",
            "text" => "AWS Combo (Architect Associate + Security Speciality)"
        ]
    ],



	"iso-iec-27001-lead-auditor-online" => [
        [
            "link" => "https://www.infosectrain.com/courses/iso27001li/",
            "image" =>"https://www.infosectrain.com/wp-content/uploads/2023/11/isi-hands-on-min.png",
            "text" => "ISO/IEC 27001:2022 Lead Implementer Online Training & Certification"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/iso27001f/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/06/ISO-IEC-27001-Foundation-Training.jpg",
            "text" => "ISO/IEC 27001 Foundation Online Training & Certification"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/information-systems-implementer-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/system-implementer-min.png",
            "text" => "Information Systems Implementer Hands-on Online Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/security-architecture-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2025/04/Security-Architecture-Hands-on-Training.jpg",
            "text" => "Security Architecture Hands-on Training"
        ]
    ],


		"iso-iec-27001-lead-implementer-online" => [
        [
            "link" => "https://www.infosectrain.com/courses/iso27001la/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/ISO-27001-min.png",
            "text" => "ISO/IEC 27001:2022 Lead Auditor Online Training & Certification"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/iso27001f/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/06/ISO-IEC-27001-Foundation-Training.jpg",
            "text" => "ISO/IEC 27001 Foundation Online Training & Certification"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/information-systems-implementer-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/system-implementer-min.png",
            "text" => "Information Systems Implementer Hands-on Online Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/security-architecture-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2025/04/Security-Architecture-Hands-on-Training.jpg",
            "text" => "Security Architecture Hands-on Training"
        ]
    ],


	"data-protection-officer-training" => [
        [
            "link" => "https://www.infosectrain.com/courses/certified-information-privacy-manager-cipm-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CIPM-min.png",
            "text" => "Certified Information Privacy Manager (CIPM) Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/certified-information-privacy-technologist-cipt-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/08/Certified-Information-Privacy-Technologist-CIPT.jpg",
            "text" => "Certified Information Privacy Technologist (CIPT) Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/european-privacy-training-cippe/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CIPP-E-min.png",
            "text" => "CIPP/E European Privacy Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/cdpo/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/07/IAPP_AIGP_Certification_Training_Artificial_Intelligence_Governance.png",
            "text" => "IAPP AIGP Certification Training"
        ]
    ],

    "sailpoint-training" => [
        [
            "link" => "https://www.infosectrain.com/courses/cyberark-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/04/CyberArk-Online-Training-Program-Course.jpg",
            "text" => "CyberArk Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/certified-ethical-hacker-ceh-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/09/CEH-v13-AI-Online-Training-Certification-Course.jpg",
            "text" => "Certified Ethical Hacker (CEH)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/comptia-security/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/SECURITY-min.png",
            "text" => "CompTIA Security+ (Plus)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cisa-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISA-min.png",
            "text" => "Certified Information Systems Auditor (CISA)"
        ]
    ],
    "threat-hunting-training" => [
        [
            "link" => "https://www.infosectrain.com/courses/certified-ethical-hacker-ceh-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/09/CEH-v13-AI-Online-Training-Certification-Course.jpg",
            "text" => "Certified Ethical Hacker (CEH)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/comptia-security/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/SECURITY-min.png",
            "text" => "CompTIA Security+ (Plus)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/soc-analyst-training/",
             "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/soc-analyst-min.png",
             "text" => "SOC Analyst Online Training Course"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/comptia-cysa-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/06/CompTIA-CySACS0-003-Certification-Training.jpg",
            "text" => "CompTIA CySA+ (Cybersecurity Analyst+) (CS0-003)"
        ]
    ],
    "crisc-training-online" => [
        [
            "link" => "https://www.infosectrain.com/pages/lp/cism-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISM-min.png",
            "text" => "Certified Information Security Manager (CISM)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cisa-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISA-min.png",
            "text" => "Certified Information Systems Auditor (CISA)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cissp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISSP-min.png",
            "text" => "Certified Information Systems Security Professional (CISSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/information-systems-implementer-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/system-implementer-min.png",
            "text" => "ISO 27001 Practical Implementation"
        ]
    ],
    "crisc-training" => [
        [
            "link" => "https://www.infosectrain.com/pages/lp/cism-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISM-min.png",
            "text" => "Certified Information Security Manager (CISM)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cisa-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISA-min.png",
            "text" => "Certified Information Systems Auditor (CISA)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cissp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISSP-min.png",
            "text" => "Certified Information Systems Security Professional (CISSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/ccsp-training-online/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CCSP-min.png",
            "text" => "Certified Cloud Security Professional (CCSP)"
        ]
    ],
    "advanced-penetration-testing-training-online" => [
        [
            "link" => "https://www.infosectrain.com/courses/certified-ethical-hacker-ceh-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/09/CEH-v13-AI-Online-Training-Certification-Course.jpg",
            "text" => "Certified Ethical Hacker (CEH)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/soc-analyst-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/soc-analyst-min.png",
            "text" => "SOC Analyst Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/advanced-threat-hunting-and-digital-forensics-and-incident-response-training/",
             "image" => "https://www.infosectrain.com/wp-content/uploads/2022/01/Threat-Hunting-1.jpg",
             "text" => "Advanced Cyber Threat Hunting and DFIR Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/artificial-intelligence-ai-for-cyber-security-professionals-training/",
             "image" => "https://www.infosectrain.com/wp-content/uploads/2025/01/AI-Powered-Cybersecurity-Training-Course-Online.webp",
             "text" => "AI-Powered Cybersecurity Training"
        ]
    ],
    "awapt-training" => [
        [
            "link" => "https://www.infosectrain.com/courses/advanced-penetration-testing-online-training-course/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/apt-min.png",
            "text" => "Advanced Penetration Testing"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/soc-analyst-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/soc-analyst-min.png",
            "text" => "SOC Analyst Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/advanced-threat-hunting-and-digital-forensics-and-incident-response-training/",
             "image" => "https://www.infosectrain.com/wp-content/uploads/2022/01/Threat-Hunting-1.jpg",
             "text" => "Advanced Cyber Threat Hunting and DFIR Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/artificial-intelligence-ai-for-cyber-security-professionals-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2025/01/AI-Powered-Cybersecurity-Training-Course-Online.webp",
            "text" => "AI-Powered Cybersecurity Training"
        ]
    ],
    "soc" => [
        [
            "link" => "https://www.infosectrain.com/courses/threat-hunting-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2022/01/Threat-Hunting-1.jpg",
            "text" => "Threat Hunting Professional"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/comptia-security/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2020/11/CompTIA-Security-Plus.jpg",
            "text" => " CompTIA Security+ Online Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/certified-ethical-hacker-ceh-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/09/CEH-v13-AI-Online-Training-Certification-Course.jpg",
            "text" => "Certified Ethical Hacker (CEH)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/advanced-penetration-testing-online-training-course/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/apt-min.png",
            "text" => "Advanced Penetration Testing"
        ],
    ],
    "cciso" => [
        [
            "link" => "https://www.infosectrain.com/pages/lp/cissp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISSP-min.png",
            "text" => "Certified Information Systems Security Professional (CISSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/comptia-security/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2020/11/CompTIA-Security-Plus.jpg",
            "text" => " CompTIA Security+ Online Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/certified-ethical-hacker-ceh-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/09/CEH-v13-AI-Online-Training-Certification-Course.jpg",
            "text" => "Certified Ethical Hacker (CEH)"
        ],
        [
            "link" => "https://www.infosectrain.com/pages/lp/cism-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISM-min.png",
            "text" => "Certified Information Security Manager (CISM)"
        ],
    ],
    "aws-training-course" => [
        [
            "link" => "https://www.infosectrain.com/pages/lp/ccsp-training-online/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CCSP-min.png",
            "text" => "Certified Cloud Security Professional (CCSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/az-500-microsoft-azure-security-technologies-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/06/Microsoft-AZ-500-Training.jpg",
            "text" => "Microsoft AZ-500"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/certificate-cloud-security-knowledge-ccsk/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/06/CCSK-Plus-Training.jpg",
            "text" => "Certificate of Cloud Knowledge (CCSK v5)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/cloud-governance-security-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/advanced-cloud-security-min.png",
            "text" => "Advanced Cloud Security Governance"
        ],
    ],
    "az-104-and-az-500-training" => [
        [
            "link" => "https://www.infosectrain.com/pages/lp/ccsp-training-online/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CCSP-min.png",
            "text" => "Certified Cloud Security Professional (CCSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/aws-combo-course-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2020/11/aws-combo-min.png",
            "text" => "AWS Combo (Architect Associate + Security Speciality)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/certificate-cloud-security-knowledge-ccsk/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/06/CCSK-Plus-Training.jpg",
            "text" => "Certificate of Cloud Knowledge (CCSK v5)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/cloud-governance-security-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/advanced-cloud-security-min.png",
            "text" => "Advanced Cloud Security Governance"
        ],
    ],
    "practical-devsecops-training" => [
        [
            "link" => "https://www.infosectrain.com/courses/aws-combo-course-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2020/11/aws-combo-min.png",
            "text" => "AWS Combo (Architect Associate + Security Speciality)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/azure-security-combo-training/",
             "image" => "https://www.infosectrain.com/wp-content/uploads/2020/11/AZ_104T00_and_AZ_500T00A.png",
             "text" => "Azure Administrator & Security (AZ-104 + AZ-500)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/ccsp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CCSP-min.png",
            "text" => "Certified Cloud Security Professional (CCSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/grc-online-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/grc-hands-on-min.png",
            "text" => "GRC Hands-on Training"
        ],
    ],

    "ccsk-online-training" => [
        [
            "link" => "https://www.infosectrain.com/pages/lp/ccsp-training-online/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CCSP-min.png",
            "text" => "Certified Cloud Security Professional (CCSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/azure-security-combo-training/",
             "image" => "https://www.infosectrain.com/wp-content/uploads/2020/11/AZ_104T00_and_AZ_500T00A.png",
             "text" => "Azure Administrator & Security (AZ-104 + AZ-500)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/aws-combo-course-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2020/11/aws-combo-min.png",
            "text" => "AWS Combo (Architect Associate + Security Speciality)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/cloud-governance-security-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/advanced-cloud-security-min.png",
            "text" => "Advanced Cloud Security Governance"
        ],
    ],
    "grc-hands-on-trainning" => [
        [
            "link" => "https://www.infosectrain.com/courses/cgrc-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/02/cgrc-min.png",
            "text" => "CGRC - Governance, Risk and Compliance Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/rsa-archer-training/",
             "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/grc-rsa-min.png",
             "text" => "GRC RSA Archer Online Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/security-architecture-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2025/04/Security-Architecture-Hands-on-Training.jpg",
            "text" => "Security Architecture Hands-on Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/pci-data-security-standard-training-course/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/pci-dss-min.png",
            "text" => "PCI-DSS (Payment Card Industry Data Security Standard) Implementation Online Training"
        ]
    ],
    "cgrc-certification-training" => [
        [
            "link" => "https://www.infosectrain.com/courses/grc-online-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/grc-hands-on-min.png",
            "text" => "GRC Hands-on Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/rsa-archer-training/",
             "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/grc-rsa-min.png",
             "text" => "GRC RSA Archer Online Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/security-architecture-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2025/04/Security-Architecture-Hands-on-Training.jpg",
            "text" => "Security Architecture Hands-on Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/pci-data-security-standard-training-course/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/pci-dss-min.png",
            "text" => "PCI-DSS (Payment Card Industry Data Security Standard) Implementation Online Training"
        ]
    ],
    "pci-dss-certification-training" => [
        [
            "link" => "https://www.infosectrain.com/courses/sailpoint-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/06/SailPoint-IdentityIQ-Implementation-Developer-Exam-Training.jpg",
            "text" => "SailPoint IdentityIQ Implementation & Developer"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/cissp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISSP-min.png",
            "text" => "Certified Information Systems Security Professional(CISSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/cism-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISM-min.png",
            "text" => "CISM Certification Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/ccsp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CCSP-min.png",
            "text" => "Certified Cloud Security Professional (CCSP)"
        ],
	],
	"sscp-certification-training" => [
        [
            "link" => "https://www.infosectrain.com/courses/comptia-security/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2020/11/CompTIA-Security-Plus.jpg",
            "text" => "CompTIA Security+ Online Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/cissp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISSP-min.png",
            "text" => "Certified Information Systems Security Professional(CISSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/cgrc-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/02/cgrc-min.png",
            "text" => "CGRC - Governance, Risk and Compliance Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/ccsp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CCSP-min.png",
            "text" => "Certified Cloud Security Professional (CCSP)"
        ],
    ],


	"csslp-certification-training" => [
        [
            "link" => "https://www.infosectrain.com/courses/sscp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/06/Systems-Security-Certified-Practitioner-Training.jpg",
            "text" => "SSCP Certification Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/cissp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CISSP-min.png",
            "text" => "Certified Information Systems Security Professional(CISSP)"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/cgrc-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2024/02/cgrc-min.png",
            "text" => "CGRC - Governance, Risk and Compliance Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/ccsp-certification-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2018/12/CCSP-min.png",
            "text" => "Certified Cloud Security Professional (CCSP)"
        ],
    ],

    "comptia-cysa-certification-training" => [
        [
            "link" => "https://www.infosectrain.com/courses/soc-analyst-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/soc-analyst-min.png",
            "text" => "SOC Analyst Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/advanced-penetration-testing-online-training-course/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/apt-min.png",
            "text" => "Advanced Penetration Testing (APT) Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/advanced-threat-hunting-and-digital-forensics-and-incident-response-training/",
             "image" => "https://www.infosectrain.com/wp-content/uploads/2022/01/Threat-Hunting-1.jpg",
             "text" => "Advanced Cyber Threat Hunting and DFIR Training"
        ],
        [
            "link" => "https://www.infosectrain.com/courses/information-systems-implementer-training/",
            "image" => "https://www.infosectrain.com/wp-content/uploads/2023/11/system-implementer-min.png",
            "text" => "ISO 27001 Practical Implementation Training"
        ],
    ],
    // Add data for other courses
];

// Extract the current landing page from the URL
$currentLandingPage = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Function to find a matching course key
function findMatchingCourseKey($landingPage, $relatedCourses) {
    foreach (array_keys($relatedCourses) as $courseKey) {
        if (strpos($landingPage, $courseKey) !== false) {
            return $courseKey;
        }
    }
    return null;
}

// Find the matching course key
$matchingCourseKey = findMatchingCourseKey($currentLandingPage, $relatedCourses);

// If a matching key is found, display related courses
if ($matchingCourseKey !== null) {
    $courses = $relatedCourses[$matchingCourseKey];
?>
<section class="<?php echo isset($customClass) ? $customClass : 'related-course-sec'; ?> py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- <h2 class="text-center">Other Popular Courses</h2> -->

                <h2 class="text-center"><?php echo isset($customHeading) ? $customHeading : 'Other Popular Courses'; ?></h2>
            </div>
        </div>
        <div class="row">
            <!-- col start -->
            <?php
            foreach ($courses as $course) {
            ?>
                <div class="col-6 col-lg-3">
                    <div class="item">
                        <!-- <img src="<?php //echo $course['image']; ?>" alt="Related Courses" width="400" height="226"> -->
                        <div class="item-body">
                            <h4 title="<?php echo $course['text']; ?>"><?php echo $course['text']; ?></h4>
                            <a href="<?php echo $course['link']; ?>" target="_blank" title="<?php echo $course['text']; ?>">Check Now</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <!-- col end -->
        </div>
    </div>
</section>
<?php
}
?>

<script>
    // let tdata = document.querySelector('.row-hover .row-2');
    // if(tdata == null){
    //     document.getElementById('training-calendar').style.display = "none";
    //     document.querySelector('.sidenav li:nth-child(2)').style.display = "none";
    //     //document.querySelector('footer .quick-links ul li:nth-child(2)').style.display = 'none';
    // }
</script>