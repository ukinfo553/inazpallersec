<!DOCTYPE html>
<?php include('include/comman_use.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYBER SECURITY FUNDAMENTALS</title>
    <!--/cs link start-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!--/css link end-->
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],

                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =

                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);

        })(window, document, 'script', 'dataLayer', 'GTM-5XZDRWG');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <?php
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $pag_url = "https://";
    else
        $pag_url = "http://";
    // Append the host(domain name, ip) to the URL.
    $pag_url .= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL
    $pag_url .= $_SERVER['REQUEST_URI'];
    ?>
    <main>
        <!--/ banner sec start -->
        <section class="banner">
            <img src="assets/img/lamp.png" alt="" class="lamp-one">
            <div class="container">
                <div class="row rowlogo">
                    <img src="assets/img/infosectrain-logo.png" alt="" class="logo">
                    <!-- <div class="rowlogo-link">
                        <a href="assets/Cybersecurity Orientation Program.pdf"
                            Download="Cybersecurity Orientation Program.pdf"> Download Syllabus </a>
                    </div> -->
                </div>
                <div class="row">
                    <div class="item">
                        <h1>
                        Diwali Delights to <br>
                        Light the Flame of Knowledge
                        </h1>
                        <p><span>FREE</span> Cyber Security Fundamentals <br> <span>for Beginners</span> </p>

                        <div class="date">
                            <p>20,21,22,23, 27,28,29 & 30 Nov</p>
                            <p>8:00 - 10:00 PM IST </p>
                        </div>
                    </div>
                    <div class="item item-two">
                        <div class="form-header">
                            Talk To Our Experts
                        </div>
                        <div class="hide rows  mt-2" id="demo_form_output"> </div>
                        <form method="post" action="" onSubmit="return val_demo_request(this.form);"
                            id="demo_me_phone_f">
                            <div class="floating-label-group">
                                <input type="text" id="me_name" name="me_name" placeholder="Name*" />
                            </div>
                            <div class="floating-label-group">
                                <input type="email" id="me_email" name="me_email" placeholder="Email*" />
                            </div>
                            <div class="floating-label-group">
                                <input type="tel" id="me_phone" name="me_phone" placeholder="Mobile Number" />
                            </div>
                            <span class="pati">
                                *FREE for the first 100 enrollments*
                            </span>
                            <!--/hideen input start-->
                            <input type="hidden" id="me_redirect" value="<?php echo BASE_URL; ?>thank-you.html">
                            <input type="hidden" id="me_others" name="me_others" value="Cyber Security Fundamentals">
                            <input type="hidden" id="me_pageurl" name="me_pageurl" value="<?php echo $pag_url; ?>">
                            <!--/hideen input start-->
                            <input type="submit" value="Submit Now" name="me_submited" id="me_submited">
                        </form>
                        <div class="loading_w hide" id="loading_w">
                            <center>
                                <img src="<?php echo BASE_URL; ?>assets/img/loader.gif" />
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/lamp.png" alt="" class="lamp-two">
        </section>
        <!--/ banner sec end -->

        <!--highlights sec start-->
        <section class="highlight-sec" style="background: #1a1818;">
            <div class="container">
                <div class="row">
                    <h2>Why Attend This Free Course?</h2>
                </div>
                <div class="row">
                    <div class="item">
                        <p>Get CPE Certificate</p>
                    </div>
                    <div class="item">
                        <p>Access to Recorded Sessions</p>
                    </div>
                    <div class="item">
                        <p>Learn from Industry Experts</p>
                    </div>
                    <div class="item">
                        <p>Post Training Support</p>
                    </div>
                    <div class="item">
                        <p>FREE Career Guidance & Mentorship</p>
                    </div>
                </div>
            </div>
        </section>
        <!--highlights sec start-->

        <!--/why choose sec-->
        <section class="why-choose">
            <div class="container">
                <div class="row">
                    <div class="item">
                        <img src="assets/img/Security-Fundamentals.png" alt="">
                    </div>
                    <div class="item-two">
                        <h2>Your Cybersecurity Journey Starts Here</h2>
                        <p>
                            Cyber Security Fundamentals for Beginners is a complementary course designed to empower
                            individuals with no prior cybersecurity knowledge to navigate the digital landscape
                            securely. Learn the skills needed to safeguard your digital life and contribute to a safer
                            online environment.
                        </p>
                        <p>
                            Join us on a journey to demystify the world of cybersecurity and enhance your digital resilience.
                        </p>
                        <a href="#demo_me_phone_f">Secure Your Place Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!--/why choose end-->

        <!--/ course content sec -->
        <section class="faq-sec">
            <div class="container">
                <h2>Course Content</h2>
                <div class="row">
                    <div class="faq">
                        <div class="faq-item">
                            <div class="question">
                            <strong> <span> Day 1 </span> : Introduction to Cybersecurity </strong> <span class="icon">+</span>
                            </div>
                            <div class="answer">
                                <strong>Session 1: What is Cybersecurity?</strong>
                                <ul>
                                    <li>Understanding the Basics of Cybersecurity</li>
                                    <li>Why Cybersecurity Matters</li>
                                    <li>Key Concepts and Definitions</li>
                                </ul>
                                <strong>Session 2: The Importance of Cybersecurity</strong>
                                <ul>
                                    <li>Real-World Cybersecurity Incidents</li>
                                    <li>Impacts of Cyberattacks</li>
                                    <li>Protecting Personal and Organizational Data</li>
                                </ul>
                                <strong>Session 3: Threats and Attack Vectors</strong>
                                <ul>
                                    <li>Exploring Common Cyber Threats</li>
                                    <li>Understanding Attack Vectors</li>
                                    <li>How Cybercriminals Exploit Vulnerabilities</li>
                                </ul>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="question">
                            <strong> <span> Day 2 </span> : Security Basics </strong> <span class="icon">+</span>
                            </div>
                            <div class="answer">
                                <strong>Session 4: Confidentiality, Integrity, and Availability (CIA Triad)</strong>
                                <ul>
                                    <li>Understanding the CIA Triad</li>
                                    <li>Confidentiality: Protecting Data Privacy</li>
                                    <li>Integrity: Ensuring Data Accuracy</li>
                                    <li>Availability: Data Accessibility</li>
                                </ul>
                                <strong>Session 5: Authentication and Authorization</strong>
                                <ul>
                                    <li>What is Authentication?</li>
                                    <li>Common Authentication Methods</li>
                                    <li>Authorization and Access Control</li>
                                    <li>Role-Based Access Control (RBAC)</li>
                                </ul>
                                <strong>Session 6: Encryption and Decryption</strong>
                                <ul>
                                    <li>The Role of Encryption in Security</li>
                                    <li>Types of Encryption Algorithms</li>
                                    <li>Key Management</li>
                                    <li>Practical Examples of Encryption</li>
                                </ul>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="question">
                            <strong> <span> Day 3 </span> : Network Security  </strong> <span class="icon">+</span>
                            </div>
                            <div class="answer">
                                <strong>Session 7: Basics of Networking</strong>
                                <ul>
                                    <li>Understanding Network Fundamentals</li>
                                    <li>Network Topologies and Protocols</li>
                                    <li>IP Addresses and Subnets</li>
                                </ul>
                                <strong>Session 8: Common Network Attacks</strong>
                                <ul>
                                    <li>Types of Network Attacks</li>
                                    <li>Examples of Cyber Threats</li>
                                    <li>How Attackers Exploit Network Vulnerabilities</li>
                                </ul>
                                <strong>Session 9: Firewalls and Intrusion Detection Systems</strong>
                                <ul>
                                    <li>Introduction to Firewalls</li>
                                    <li>Firewall Types and Configurations</li>
                                    <li>Intrusion Detection Systems (IDS) and Intrusion Prevention Systems (IPS)</li>
                                    <li>Real-World Network Security Scenarios</li>
                                </ul>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="question">
                            <strong> <span> Day 4 </span> : Operating System Security </strong> <span class="icon">+</span>
                            </div>
                            <div class="answer">
                                <strong>Session 10: Securing Operating Systems</strong>
                                <ul>
                                    <li>Overview of Operating System Security</li>
                                    <li>Common Security Measures</li>
                                    <li>Best Practices for Securing Windows, Linux, and macOS</li>
                                </ul>
                                <strong>Session 11: User Account Management</strong>
                                <ul>
                                    <li>Importance of User Account Management</li>
                                    <li>User Authentication and Authorization</li>
                                    <li>User Account Policies and Best Practices</li>
                                </ul>
                                <strong>Session 12: Patch Management</strong>
                                <ul>
                                    <li>Understanding the Significance of Patch Management</li>
                                    <li>Vulnerabilities and Exploits</li>
                                    <li>Patch Management Best Practices</li>
                                    <li>Demonstrations and Hands-On Patching</li>
                                </ul>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="question">
                            <strong> <span> Day 5 </span> : Malware and Antivirus </strong> <span class="icon">+</span>
                            </div>
                            <div class="answer">
                                <strong>Session 13: What is Malware?</strong>
                                <ul>
                                    <li>Defining Malware (Malicious Software)</li>
                                    <li>Understanding the Purpose of Malware</li>
                                    <li>Real-World Examples of Malware</li>
                                    <li>How Malware Spreads</li>
                                </ul>
                                <strong>Session 14: Types of Malware</strong>
                                <ul>
                                    <li>Categories of Malware (Viruses, Worms, Trojans, Ransomware, Spyware, etc.)</li>
                                    <li>Malware Characteristics and Behaviors</li>
                                    <li>Case Studies: Notable Malware Incidents</li>
                                </ul>
                                <strong>Session 15: Antivirus Software and Best Practices</strong>
                                <ul>
                                    <li>Role of Antivirus (AV) Software</li>
                                    <li>How Antivirus Works</li>
                                    <li>Choosing and Installing Antivirus Software</li>
                                    <li>Best Practices for Staying Protected</li>
                                </ul>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="question">
                            <strong> <span> Day 6 </span> : Web Security </strong> <span class="icon">+</span>
                            </div>
                            <div class="answer">
                                <strong>Session 16: Web Application Security</strong>
                                <ul>
                                    <li>Introduction to Web Application Security</li>
                                    <li>Common Web Application Vulnerabilities</li>
                                </ul>
                                <strong>Session 17: Cross-Site Scripting (XSS) and Cross-Site Request Forgery (CSRF)</strong>
                                <ul>
                                    <li>Understanding Cross-Site Scripting (XSS)</li>
                                    <li>Exploring Cross-Site Request Forgery (CSRF)</li>
                                    <li>Real-world examples and Impacts</li>
                                </ul>
                                <strong>Session 18: Secure Sockets Layer (SSL) and HTTPS</strong>
                                <ul>
                                    <li>The Role of SSL and HTTPS in Web Security</li>
                                    <li>How SSL/TLS Works</li>
                                    <li>Securing Web Communications</li>
                                </ul>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="question">
                                <strong> <span> Day 7 </span> : Social Engineering and Phishing </strong> <span class="icon">+</span>
                            </div>
                            <div class="answer">
                                <strong>Session 19: Understanding Social Engineering</strong>
                                <ul>
                                    <li>What is Social Engineering?</li>
                                    <li>Psychology of Social Engineering</li>
                                    <li>Real-world examples of Social Engineering Attacks</li>
                                    <li>Identifying Red Flags</li>
                                </ul>
                                <strong>Session 20: Common Social Engineering Techniques</strong>
                                <ul>
                                    <li>Various Social Engineering Tactics (Pretexting, Baiting, Tailgating, etc.)</li>
                                    <li>Phases of Social Engineering Attacks</li>
                                    <li>Countermeasures and Protection</li>
                                </ul>
                                <strong>Session 21: How to Recognize Phishing Attempts</strong>
                                <ul>
                                    <li>Identifying Phishing Emails and Websites</li>
                                    <li>Analyzing Phishing URLs and Content</li>
                                    <li>Reporting and Responding to Phishing Incidents</li>
                                    <li>Hands-On Phishing Recognition Exercises</li>
                                </ul>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="question">
                            <strong> <span> Day 8 </span> : Access Control and Passwords </strong> <span class="icon">+</span>
                            </div>
                            <div class="answer">
                                <strong>Session 22: Password Security Best Practices</strong>
                                <ul>
                                    <li>Importance of Strong Passwords</li>
                                    <li>Password Policies and Guidelines</li>
                                    <li>Password Managers</li>
                                    <li>Password Cracking and Defense</li>
                                </ul>
                                <strong>Session 23: Multi-Factor Authentication (MFA)</strong>
                                <ul>
                                    <li>Introduction to Multi-Factor Authentication</li>
                                    <li>Types of MFA (SMS, App-Based, Hardware Tokens)</li>
                                    <li>Setting Up MFA for Online Accounts</li>
                                    <li>Enhancing Account Security</li>
                                </ul>
                                <strong>Session 24: Role-Based Access Control (RBAC)</strong>
                                <ul>
                                    <li>Understanding Role-Based Access Control</li>
                                    <li>Implementing RBAC in Organizations</li>
                                    <li>Benefits of RBAC</li>
                                    <li>Case Studies and Practical Examples</li>
                                </ul>
                                <strong>Session 25: Cybersecurity Laws and Regulations</strong>
                                <ul>
                                    <li>Overview of Cybersecurity Laws and Regulations</li>
                                    <li>Examples of Key Legal Frameworks</li>
                                    <li>Compliance and Consequences</li>
                                </ul>
                                <strong>Session 26: Ethical Hacking and Responsible Disclosure</strong>
                                <ul>
                                    <li>Understanding Ethical Hacking</li>
                                    <li>Responsible Disclosure Practices</li>
                                    <li>Bug Bounty Programs</li>
                                    <li>Real-World Case Studies</li>
                                </ul>
                                <strong>Session 27: Privacy and Data Protection</strong>
                                <ul>
                                    <li>Importance of Privacy in Cybersecurity</li>
                                    <li>Data Protection Regulations (e.g., GDPR)</li>
                                    <li>Privacy Best Practices</li>
                                    <li>Balancing Security and Privacy</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="text-align:center;z-index:1;display:block;">
                    <a href="#">Enroll Now</a>
                </div>
            </div>
        </section>
        <!--/ course content end -->

        <!--/meet our instructor-->
        <section class="advisor">
            <div class="container">
                <div class="row">
                    <div class="item">
                        <img src="assets/img/yogendra.jpg" alt="">
                    </div>
                    <div class="item-two">
                        <h2>Meet Our Expert</h2>
                        <h4>YOGENDER</h4>
                        <span>5+ Years Of Experience</span>
                        <p>
                            Information Security Consultant and Trainer
                        <p>
                            An experienced Information Security Consultant and Trainer, Yogender possesses in-depth
                            knowledge and expertise in Cybersecurity, Cloud Security, Incident Handling & Response, &
                            Digital Forensics. He is proficient in designing and delivering tailored training programs
                            to learners and organizations across different countries and industries. His key strengths
                            include Information Security, Pentesting and Vulnerability Assessment, and Computer Forensic
                            Investigations.
                        </p>
                        <a href="#demo_me_phone_f">
                            Start Learning Now
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--/meet our instructor-->
    </main>
    <!-- <footer>
    <h2>
        Secure your seat for the <br>
        FREE Cyber Security Orientation Program
    </h2>
    <a href="#demo_me_phone_f" style="background: #ffffff;color: #070A52;">Enroll Now</a>
</footer> -->

    <footer>
        <div class="container">
            <div class="row justify-content-between">
                <div class="footer_item">
                    <h4>About Infosec Train</h4>
                    <p>
                        Infosec Train offers complete training and consulting solutions to its customers globally.
                        Whether the requirements are technical services, certification or custom training, Infosec Train
                        has consistently delivered the highest quality and best success rates in the industry.
                    </p><br>
                    <p>© 2023 - Infosec Train. All Rights Reserved.</p>
                </div>
                <div class="footer_item">
                    <h4>Quick Contact</h4>
                    <a href="https://api.whatsapp.com/send?phone=918767256840" target="_blank">
                        <span><img src="assets/img/whtsapp.png" alt=""></span>+91 876-725-6840
                    </a>
                    <a href="tel:18008437890">
                        <span><img src="assets/img/call.png" alt=""></span>1800-843-7890 (India)
                    </a>
                    <a href="mailto:sales@infosectrain.com" style="text-transform:lowercase;">
                        <span><img src="assets/img/gmail.png" alt=""></span>sales@infosectrain.com
                    </a>
                </div>
                <div class="footer_item">
                    <h4>Corporate Office</h4>
                    <p>Delhi</p>
                    <p>
                        Unit No - 500, 5th Floor, ITL Twin Tower,
                        Netaji Subhash Place, Pitampura, Delhi - 110034 (India)
                    </p>
                </div>
            </div>
        </div>
    </footer>

</body>
<!--Start of Zendesk Chat Script-->

<!--End of Zendesk Chat Script-->

<script src="assets/js/common.min.js"></script>
<script>
    const questions = document.querySelectorAll('.question');

questions.forEach((question) => {
  question.addEventListener('click', () => {
    const answer = question.nextElementSibling;

    if (answer.style.display === 'block') {
      answer.style.display = 'none';
      question.querySelector('.icon').textContent = '+';
    } else {
      answer.style.cssText = 'display:block;padding:20px';
      question.querySelector('.icon').textContent = '−'; // Use a minus sign to indicate collapsing
    }
  });
});

</script>

</html>