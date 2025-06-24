<!-- <?php include('include/comman_use.php'); ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splunk Practical Approach Training</title>
    <meta name="description"
        content="Master data analysis with InfosecTrain&#039;s Splunk Practical Approach Training Course. Learn to monitor, analyze, and visualize data for effective cybersecurity. Enroll today!">
    <meta name="robots" content="noindex, nofollow" />
    <link rel="icon" href="assets/images/favicon.ico">
    <!--/ style link start /-->
    <link href="assets/css/bootstrap-grid.min.css" rel="stylesheet" defer>
    <link rel="stylesheet" href="assets/css/style.css" defer>
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" defer />
    <!--/ style link end /-->
    <!-- Google Tag Manager -->
    <script>
        setTimeout(function () {
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-5XZDRWG");
        }, 10000);
    </script>
    <!-- End Google Tag Manager -->
     <style>
        /* Styles for the form cards */
.form-card {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    margin: 20px;
    width: 300px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    position: relative;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

input[type="text"], input[type="email"], textarea {
    width: 100%;
    padding: 8px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="text"].error, input[type="email"].error, textarea.error {
    border: 1px solid red;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 4px;
}

button:hover {
    background-color: #45a049;
}

/* Loader styles */
.loader {
    display: none;
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
}

.loader img {
    width: 50px;
    height: 50px;
}

/* Error message styles */
.error-message {
    color: red;
    font-size: 12px;
    margin-top: 5px;
}

     </style>
</head>

<body>
    <!-- <?php
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $pag_url = "https://";
    } else {
        $pag_url = "http://";
    }
    // Append the host(domain name, ip) to the URL.
    $pag_url .= $_SERVER['HTTP_HOST'];
    // Append the requested resource location to the URL
    $pag_url .= $_SERVER['REQUEST_URI'];
    ?> -->


<!-- Form Card 1 -->
<div class="form-card">
    <h2>Form 1</h2>
    <form class="ajax-form">
        <label for="me_name_pop">Name:</label>
        <input type="text" name="me_name" class="me_name">
        <div class="error-message name_error"></div>

        <label for="me_email_pop">Email:</label>
        <input type="email" name="me_email" class="me_email">
        <div class="error-message email_error"></div>

        <label for="me_phone_pop">Phone:</label>
        <input type="text" name="me_phone" class="me_phone">
        <div class="error-message phone_error"></div>

        <label for="me_message_pop">Message:</label>
        <textarea name="me_message" class="me_message"></textarea>
        <div class="error-message message_error"></div>

        <input type="hidden" name="me_submited" value="1">
        <button type="submit">Submit</button>

        <div class="loader" style="display:none;">
            <img src="loader.gif" alt="Loading...">
        </div>
    </form>
</div>

<!-- Another Form Card 2 -->
<div class="form-card">
    <h2>Form 2</h2>
    <form class="ajax-form">
        <label for="me_name_pop">Name:</label>
        <input type="text" name="me_name" class="me_name" required>
        <div class="error-message name_error"></div>

        <label for="me_email_pop">Email:</label>
        <input type="email" name="me_email" class="me_email" required>
        <div class="error-message email_error"></div>

        <label for="me_phone_pop">Phone:</label>
        <input type="text" name="me_phone" class="me_phone">
        <div class="error-message phone_error"></div>

        <label for="me_message_pop">Message:</label>
        <textarea name="me_message" class="me_message"></textarea>
        <div class="error-message message_error"></div>

        <input type="hidden" name="me_submited" value="1">
        <button type="submit">Submit</button>

        <div class="loader" style="display:none;">
            <img src="loader.gif" alt="Loading...">
        </div>
    </form>
</div>

</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {

// Select all forms with the class "ajax-form"
const forms = document.querySelectorAll('.ajax-form');

// Function to validate a single form
function validateForm(form) {
    let isValid = true;
    let errorMessages = {};

    const name = form.querySelector('input[name="me_name"]');
    const email = form.querySelector('input[name="me_email"]');
    const phone = form.querySelector('input[name="me_phone"]');
    const message = form.querySelector('textarea[name="me_message"]');

    // Validate Name field
    if (!name.value.trim()) {
        isValid = false;
        name.classList.add('error');
        errorMessages.name = "Name is required.";
    } else {
        name.classList.remove('error');
    }

    // Validate Email field
    if (!email.value.trim()) {
        isValid = false;
        email.classList.add('error');
        errorMessages.email = "Email is required.";
    } else if (!/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9]{2,4}$/.test(email.value)) {
        isValid = false;
        email.classList.add('error');
        errorMessages.email = "Please enter a valid email.";
    } else {
        email.classList.remove('error');
    }

    // Validate Phone field (optional)
    if (phone && phone.value.trim() && !/^\d+$/.test(phone.value)) {
        isValid = false;
        phone.classList.add('error');
        errorMessages.phone = "Phone number must be numeric.";
    } else {
        phone.classList.remove('error');
    }

    // Validate Message field
    if (!message.value.trim()) {
        isValid = false;
        message.classList.add('error');
        errorMessages.message = "Message is required.";
    } else {
        message.classList.remove('error');
    }

    // Display error messages
    form.querySelectorAll('.error-message').forEach((el) => {
        el.textContent = ''; // Clear all previous error messages
    });

    for (const [key, msg] of Object.entries(errorMessages)) {
        const errorMessageDiv = form.querySelector(`.${key}_error`);
        errorMessageDiv.textContent = msg;
    }

    return isValid;
}

// Handle form submission
function handleFormSubmit(event) {
    event.preventDefault();  // Prevent the default form submission

    const form = event.target;
    const loader = form.querySelector('.loader');
    const isValid = validateForm(form);

    if (!isValid) {
        return;  // Stop the submission if the form is invalid
    }

    // Show the loader while submitting
    loader.style.display = 'block';

    // Create a FormData object with the form data
    const formData = new FormData(form);

    // Make the AJAX request
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'send-ajax.php', true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            // Redirect to the thank-you page or any other page
            window.location.href = "thank-you.php";
            loader.style.display = 'none'; // Hide the loader
            form.reset(); // Reset the form fields after successful submission
        } else {
            loader.style.display = 'none'; // Hide the loader in case of failure
            alert("An error occurred. Please try again.");
        }
    };

    xhr.onerror = function () {
        loader.style.display = 'none'; // Hide the loader in case of an error
        alert("An error occurred. Please try again.");
    };

    // Send the form data to the server
    xhr.send(formData);
}

// Attach the submit event listener to each form
forms.forEach(form => {
    form.addEventListener('submit', handleFormSubmit);
});
});

</script>
</html>