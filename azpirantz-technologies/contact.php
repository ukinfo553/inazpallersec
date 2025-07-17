<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include("infile/matafile.php");?>
  <!-- link css, font, icon start -->
  <?php include("infile/comcss.php");?>

</head>

<body>
  <!--navbar start-->
  <header class="header-area">
    <!-- site-navbar start -->
    <?php include("infile/header.php");?>
    <!-- navbar-area end -->
  </header>
  <!--navbar end-->
<script>
function check_con(str)
{
event.preventDefault();
var  pop_fullname  = document.getElementById("pop_fullname").value;
var  pop_email     = document.getElementById("pop_email").value;
var  pop_phone     = document.getElementById("pop_phone").value;
var  pop_company   = document.getElementById("pop_company").value;
//var  pop_purpose   = document.getElementById("pop_purpose").value;
var  pop_country   = document.getElementById("pop_country").value;
var  pop_message   = document.getElementById("pop_message").value;
var  pagename      = document.getElementById("pagename").value;

let ispopValid = true;
if(pop_fullname == "")
   {

        document.getElementById('pop_fullname').style.border  = "1px solid #ff0000";
		ispopValid = false;
        return false;
    }
else{
        document.getElementById('pop_fullname').style.borderColor = "green";
    }

if(pop_email == "" || !pop_email.includes("@")){
        document.getElementById('pop_email').style.borderColor = "red";
		ispopValid = false;
        return false;
    }
else{
        document.getElementById('pop_email').style.borderColor = "green";
    }

 if(pop_phone == "" || pop_phone.length < 6){
        document.getElementById('pop_phone').style.borderColor = "red";
		ispopValid = false;
        return false;
    }
else{
        document.getElementById('pop_phone').style.borderColor = "green";
    }
if (ispopValid)
 	{
	//alert();
	//$('.popMsg').html('<span style="color:var(--green);font-family:var(--nunito);font-szie:14px;text-align:center;">Thanks for contacting us, we\'ll get back to you soon.</span>');
		$.ajax({
            type:'POST',
            url:'schedule_mail.php',
            data: {
                contactpopSubmit: 1,
                pop_email       : pop_email,
				pop_fullname    : pop_fullname,
				pop_phone       : pop_phone,
                pop_company     : pop_company,
				pop_country     : pop_country,
				pagename        : pagename,
				pop_message     : pop_message

            },
            beforeSend: function () {
                $('.submitpopBtn').attr("disabled","disabled");
				//document.getElementById("ShowButton").innerHTML = "Hide Filter";
                //alert(pop_email);
                //$('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
			//alert(msg);
                if(msg == 'ok')
				{
                    //$('#inputName').val('');
                    //$('#inputEmail').val('');
                    //$('#inputMessage').val('');
                    //$('.statusMsg').html('<span style="color:green;">Thanks for contacting us, we\'ll get back to you soon.</span>');

                }
				else
				{document.getElementById("conbutton").innerHTML="Send";
				$('.conMsg').html('<span style="color:var(--green);font-family:var(--nunito);font-szie:14px;text-align:center;">Thanks for contacting us, we\'ll get back to you soon.</span>');
                    //$('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');


					//window.location.href = "https://www.azpirantz.com/registration/reg2/calendar_list_advance.php";
                }
                $('.submitpopBtn').removeAttr("disabled");
                //$('.modal-body').css('opacity', '');
            }
        });
	}
}
</script>
  <!--service banner start-->
  <section class="bg-dark service-banner" style="background-image: url('assets/image/contact/contact-us.webp');">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="text-red">
            Contact Us
          </h1>
          <div class="fs-18 text-white f-nunito my-3">
            Schedule a Call to Discover Tailored Solutions for Your <br> Business Needs
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--service banner end-->

  <!--section start-->
  <section>
    <div class="container">
      <div class="row gap-4 gap-lg-0">
        <!--col start-->
        <div class="col-lg-4">
          <div class="h-100 p-md-4 p-3 bg-white border-grey border-radius-10 d-flex gap-3 flex-column">
            <h2>Get in Touch</h2>
            <p>
              We help you explore customized solutions and work together to strengthen your organization’s resilience
              and drive sustainable growth.
            </p>
            <div class="d-flex gap-3 align-items-center">
              <img src="assets/image/contact/phone-call.svg" alt="phone" width="40" height="40">
              <a href="tel:18008437890" target="_blank">1800-843-7890</a>
            </div>
            <div class="d-flex gap-3 align-items-center">
              <img src="assets/image/contact/envelope.svg" alt="email" width="40" height="40">
              <a href="mailto:sales@azpirantz.com" target="_blank">sales@azpirantz.com</a>
            </div>
            <div class="d-flex gap-3 align-items-center">
              <img src="assets/image/contact/pin.svg" alt="address" width="40" height="40">
              <p>
                <strong>Address</strong><br>
                B-7, Block B, Sector 2, Noida, Uttar Pradesh 201301
              </p>
            </div>
          </div>
        </div>
        <!--col end-->

        <!--form start-->
        <div class="col-lg-8">
          <div class="h-100 p-md-4 p-3 bg-white border-grey border-radius-10">
            <form action="" class="d-flex flex-column align-items-start gap-3">
              <input type="text" name="pop_fullname" id="pop_fullname" placeholder="Full Name*">
              <div class="w-100 d-flex gap-3">
                <input type="email" name="pop_email" id="pop_email" placeholder="Email*">
                <input type="number" name="pop_phone" id="pop_phone" placeholder="Mobile">
              </div>
              <input type="text" name="pop_company" id="pop_company" placeholder="Your Company">
              <div class="w-100 d-flex gap-3">
                <select name="pop_country" class="colorSelect" id="pop_country">
                  <option value="">Country</option>
                  <option value="india">India</option>
                  <option value="america">America</option>
                </select>
              </div>
              <input type="hidden" name="pagename" id="pagename" value="<?php echo $currentpage;?>">
              <textarea name="pop_message" rows="4" id="pop_message" placeholder="Message"></textarea>
              <button type="submit" class="button submitpopBtn" onClick="check_con(this.value)" value="Send Message" id="conbutton">Send Message</button>
            </form>
          </div>
          <div class="conMsg"></div>
        </div>
        <!--form end-->
      </div>
    </div>
  </section>
  <!--section end-->

  <!--section start-->
  <section class="bg-grey d-none d-md-block">
    <div class="container">
      <div class="row g-4">
        <div class="col-12">
          <h2>Our Presence</h2>
        </div>

        <!--col start-->
        <div class="col-lg-4 col-md-6">
          <div class="h-100 bg-white border-grey border-radius-10 p-3 hover">
            <div class="d-flex gap-3 align-items-center">
              <img src="assets/image/contact/pin.svg" alt="address" width="40" height="40">
              <p>
                TAHA Business Center, RNA Resource Building, Al Quoz 3, Dubai, United Arab Emirates
              </p>
            </div>
            <div class="d-flex gap-3 align-items-center mt-2">
              <img src="assets/image/contact/envelope.svg" alt="">
              <a href="tel:+971569908131" target="_blank">+971 569-908-131</a>
            </div>
          </div>
        </div>
        <!--col start-->
        <!--col start-->
        <div class="col-lg-4 col-md-6">
          <div class="h-100 bg-white border-grey border-radius-10 p-3 hover">
            <div class="d-flex gap-3 align-items-center">
              <img src="assets/image/contact/pin.svg" alt="address" width="40" height="40">
              <p>
                99 Wall Street #599, New York, NY 10005, United States
              </p>
            </div>
            <div class="d-flex gap-3 align-items-center mt-2">
              <img src="assets/image/contact/envelope.svg" alt="">
              <a href="tel:+16572211127" target="_blank">+1 657-221-1127</a>
            </div>
          </div>
        </div>
        <!--col start-->
        <div class="col-lg-4 col-md-6">
          <div class="h-100 bg-white border-grey border-radius-10 p-3 hover">
            <div class="d-flex gap-3 align-items-center">
              <img src="assets/image/contact/pin.svg" alt="">
              <p>
                170 The Donway West, Suite # 6A, Toronto, Ontario M3C2E8, Canada
              </p>
            </div>
            <div class="d-flex gap-3 align-items-center mt-2">
              <img src="assets/image/contact/envelope.svg" alt="">
              <a href="tel:+16572211127" target="_blank">+1 657-221-1127</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="h-100 bg-white border-grey border-radius-10 p-3 hover">
            <div class="d-flex gap-3 align-items-center">
              <img src="assets/image/contact/pin.svg" alt="address" width="40" height="40">
              <p>
                Unit No – 500, ITL Twin Tower, Netaji Subhash Place, Pitampura, Delhi – 110034 (India)
              </p>
            </div>
            <div class="d-flex gap-3 align-items-center mt-2">
              <img src="assets/image/contact/envelope.svg" alt="">
              <a href="tel:18008437890" target="_blank">1800-843-7890</a>
            </div>
          </div>
        </div>
        <!--col start-->
        <div class="col-lg-4 col-md-6">
          <div class="h-100 bg-white border-grey border-radius-10 p-3 hover">
            <div class="d-flex gap-3 align-items-center">
              <img src="assets/image/contact/pin.svg" alt="address" width="40" height="40">
              <p>
                B-7, Block B, Sector 2, Noida, Uttar Pradesh 201301 (India)
              </p>
            </div>
            <div class="d-flex gap-3 align-items-center mt-2">
              <img src="assets/image/contact/envelope.svg" alt="">
              <a href="tel:18008437890" target="_blank">1800-843-7890</a>
            </div>
          </div>
        </div>
        <!--col start-->
        <div class="col-lg-4 col-md-6">
          <div class="h-100 bg-white border-grey border-radius-10 p-3 hover">
            <div class="d-flex gap-3 align-items-center">
              <img src="assets/image/contact/pin.svg" alt="">
              <p>
                Manyata Embassy Business Park, E1 Block, Beech Building, Outer Ring Road, Bangalore - 560045
              </p>
            </div>
            <div class="d-flex gap-3 align-items-center mt-2">
              <img src="assets/image/contact/envelope.svg" alt="">
              <a href="tel:18008437890" target="_blank">1800-843-7890</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--section end-->

  <!-- footer sec start -->
  <?php include("infile/footer.php");?>
  <!-- footer sec end-->
<?php include("infile/model-form.php");?>
</body>
<!-- link js start -->
<script src="assets/js/swiper-bundle.min.js" defer></script>
<script src="assets/js/script.js" defer></script>
<!-- link js end -->

</html>