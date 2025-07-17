<style>
/* Full-screen red background (overlay) */
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #080808ba;
      /* Red with opacity */
      display: none;
      /* Hidden by default */
      z-index: 999;
      /* Ensure it's below the modal */
    }

    /* Modal background and positioning */
    dialog {
      padding: 20px;
      border: none;
      width: 800px;
      background-color: #f5f5f5;
      border-radius: 8px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      opacity: 0;
      /* Initially invisible */
      transform: scale(0.8);
      /* Start scaled down */
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) scale(0.8);
      /* Center the modal */
      transition: opacity 0.3s ease, transform 0.3s ease;
      /* Add transition for smooth opening */
      z-index: 1000;
      /* Ensure it's above other content */
    }

    dialog[open] {
      opacity: 1;
      /* Fully visible when open */
      transform: translate(-50%, -50%) scale(1);
      /* Normal size, centered */
    }

    .modal-content {
      font-family: Arial, sans-serif;
      color: #333;
    }

    input[type="hidden"] {
      display: none;
    }

    #closeModalBtn {
      position: absolute;
      right: 0;
      top: 0;
      width: 35px;
      height: 35px;
      border-radius: 35px;
      text-align: center;
      vertical-align: middle;
      padding: 0;
      font-size: 16px;
      z-index: 9999;
      transform: translate(0);
      margin: 16px;
      background: var(--red);
      border: none;
      color: var(--white);
      cursor: pointer;
    }
  </style>
<script>
function check_pop(str)
{
event.preventDefault();
var  pop_fullname  = document.getElementById("pop_fullname").value;
var  pop_email     = document.getElementById("pop_email").value;
var  pop_phone     = document.getElementById("pop_phone").value;
var  pop_company   = document.getElementById("pop_company").value;
var  pop_country   = document.getElementById("pop_country").value;
var  pop_message   = document.getElementById("pop_message").value;
var  pagename      = document.getElementById("pagename").value;

let ispopValid = true;
if(pop_fullname == "")
   {
        //alert('Please Enter First Name');
        document.getElementById('pop_fullname').style.borderColor = "red";
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
                if(msg == 'ok')
				{
                    //$('#inputName').val('');
                    //$('#inputEmail').val('');
                    //$('#inputMessage').val('');
                    //$('.statusMsg').html('<span style="color:green;">Thanks for contacting us, we\'ll get back to you soon.</span>');
                }
				else
				{
                    //$('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
					$('.popMsg').html('<span style="color:var(--green);font-family:var(--nunito);font-szie:14px;text-align:center;">Thanks for contacting us, we\'ll get back to you soon.</span>');

					//window.location.href = "https://www.azpirantz.com/registration/reg2/calendar_list_advance.php";
                }
                $('.submitpopBtn').removeAttr("disabled");
                //$('.modal-body').css('opacity', '');
            }
        });
	}
}
</script>
  <!-- Red background overlay -->
  <div class="overlay" id="redOverlay"></div>

  <!-- Modal dialog -->
  <dialog id="myModal">

    <button id="closeModalBtn">x</button>
    <div class="modal-header f-nunito fs-28 fw-bold text-dark mb-4 text-capitalize">
      <!-- Dynamic Header Text Here -->
    </div>
    <div class="modal-content">
      <form action="" class="d-flex flex-column align-items-start gap-3">
        <input type="text" name="pop_fullname" id="pop_fullname" placeholder="Full Name*">
        <div class="w-100 d-flex flex-column flex-md-row gap-3">
          <input type="email" name="pop_email" id="pop_email" placeholder="Email*">
          <input type="number" name="pop_phone" id="pop_phone" placeholder="Mobile">
        </div>
        <input type="text" name="pop_company" id="pop_company" placeholder="Your Company">
        <div class="w-100 d-flex flex-column flex-md-row gap-3">
          <select name="pop_country" id="pop_country">
            <option value="">Country</option>
          </select>
        </div>
        <textarea name="pop_message" rows="4" id="pop_message" placeholder="Message"></textarea>

        <!-- Hidden Inputs to store button name and page URL -->
        <input type="hidden" id="buttonName" name="buttonName">
        <input type="hidden" id="pageURL" name="pageURL">
        <input type="hidden" name="pagename" id="pagename" value="<?php echo $currentpage;?>">
        <button type="submit" class="button submitpopBtn" onClick="check_pop(this.value)" >Send Message</button>
      </form>
      <div class="popMsg"></div>
    </div>
  </dialog>

  <script>
    // Get the modal and close button
    const modal = document.getElementById('myModal');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const body = document.body;  // Reference to the body element
    const overlay = document.getElementById('redOverlay'); // The overlay div

    // Get all buttons with class 'model-form'
    const buttons = document.querySelectorAll('.model-form');

    // Function to open modal and set dynamic content
    buttons.forEach(button => {
      button.addEventListener('click', () => {
        // Set the modal header text to the button's 'data-modal-header' value
        const headerText = button.getAttribute('data-modal-header');
        document.querySelector('.modal-header').innerText = headerText;

        // Set the hidden input fields with button name and current page URL
        document.getElementById('buttonName').value = button.innerText; // Button text as name
        document.getElementById('pageURL').value = window.location.href; // Current page URL

        // Show the red background overlay and modal
        overlay.style.display = 'block'; // Show the red overlay
        modal.showModal(); // Show the modal
      });
    });

    // Close the modal when the close button is clicked
    closeModalBtn.addEventListener('click', () => {
      modal.close(); // Close the dialog box

      // Hide the red background overlay when modal is closed
      overlay.style.display = 'none'; // Hide the red overlay
    });
  </script>