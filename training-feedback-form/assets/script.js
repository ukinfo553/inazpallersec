document.getElementById('file-input').addEventListener('change', function (event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('preview').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});

//==== gradient range cose start =========//

const sliders = document.querySelectorAll('.satisfaction-slider');
const rangeValues = document.querySelectorAll('.range-value');

const updateSlider = (slider, rangeValue) => {
    const value = parseInt(slider.value, 10);
    const max = parseInt(slider.max, 10);

    // Determine thumb image and range value text
    let thumbImage = '../assets/image/Final-Emoji.gif';
    let text = '';
    let backgroundColor = '#d9d9d9';
    let textColor = '#080808';

    if (value === 0) {
        thumbImage = '../assets/image/Final-Emoji.gif';
        text = 'Slide to choose';
    } else if (value <= 5) {
        thumbImage = '../assets/image/poor.gif';
        text = 'Poor';
        backgroundColor = '#E50914';
        textColor = '#ffffff';
    } else if (value <= 10) {
        thumbImage = '../assets/image/need-improvement.gif';
        text = 'Needs Improvement';
        backgroundColor = '#FF6400';
        textColor = '#ffffff';
    } else if (value <= 15) {
        thumbImage = '../assets/image/satisfactory.gif';
        text = 'Satisfactory';
        backgroundColor = '#FFCC00';
        textColor = '#ffffff';
    } else if (value <= 20) {
        thumbImage = '../assets/image/very-good.gif';
        text = 'Very Good';
        backgroundColor = '#92BB18';
        textColor = '#ffffff';
    } else if (value <= 25) {
        thumbImage = '../assets/image/excellent.gif';
        text = 'Excellent';
        backgroundColor = '#00A538';
        textColor = '#ffffff';
    }

    // Update the thumb image by setting the thumb image for the specific slider
    slider.style.setProperty('--thumb-image', `url('${thumbImage}')`);
    rangeValue.textContent = text;
    rangeValue.style.backgroundColor = backgroundColor;
    rangeValue.style.color = textColor;

    // Determine color based on value
    let color = '#d9d9d9';
    if (value >= 0 && value < 5) {
        color = '#E50914';
    } else if (value >= 5 && value < 10) {
        color = '#FF6400';
    } else if (value >= 10 && value < 15) {
        color = '#FFCC00';
    } else if (value >= 15 && value < 20) {
        color = '#92BB18';
    } else if (value >= 20 && value <= 25) {
        color = '#00A538';
    }

    const gradient = generateGradient(value, color);
    slider.style.background = gradient;
};

const generateGradient = (value, color) => {
    let gradient = `linear-gradient(to right,`;
    if (value < 5) {
        gradient += ` ${color} ${value * 20}%, #d9d9d9 ${value * 20}%`;
    } else if (value < 10) {
        gradient += ` #E50914 0%, #E50914 20%, ${color} ${(value - 5) * 20 + 20}%, #d9d9d9 ${(value - 5) * 20 + 20}%`;
    } else if (value < 15) {
        gradient += ` #E50914 0%, #E50914 20%, #FF6400 20%, #FF6400 40%, ${color} ${(value - 10) * 20 + 40}%, #d9d9d9 ${(value - 10) * 20 + 40}%`;
    } else if (value < 20) {
        gradient += ` #E50914 0%, #E50914 20%, #FF6400 20%, #FF6400 40%, #FFCC00 40%, #FFCC00 60%, ${color} ${(value - 15) * 20 + 60}%, #d9d9d9 ${(value - 15) * 20 + 60}%`;
    } else if (value < 25) {
        gradient += ` #E50914 0%, #E50914 20%, #FF6400 20%, #FF6400 40%, #FFCC00 40%, #FFCC00 60%, #92BB18 60%, #92BB18 80%, ${color} ${(value - 20) * 20 + 80}%, #d9d9d9 ${(value - 20) * 20 + 80}%`;
    } else if (value === 25) {
        gradient += ` #E50914 0%, #E50914 20%, #FF6400 20%, #FF6400 40%, #FFCC00 40%, #FFCC00 60%, #92BB18 60%, #92BB18 80%, ${color} 80%`;
    }
    gradient += `)`;
    return gradient;
};

// Initialize sliders
// sliders.forEach((slider, index) => {
//     slider.addEventListener('input', () => updateSlider(slider, rangeValues[index]));
//     updateSlider(slider, rangeValues[index]); // Initialize the slider's value and thumb image
// });

// Initialize sliders with value 25
sliders.forEach((slider, index) => {
    slider.value = 25;
    updateSlider(slider, rangeValues[index]); // Initialize the slider's value and thumb image
    slider.addEventListener('input', () => updateSlider(slider, rangeValues[index]));
});

// Set sliders to 0 step by step after a delay
setTimeout(() => {
    let currentValue = 25;
    const decrementInterval = setInterval(() => {
        if (currentValue <= 0) {
            clearInterval(decrementInterval);
        } else {
            currentValue--;
            sliders.forEach((slider, index) => {
                slider.value = currentValue;
                updateSlider(slider, rangeValues[index]);
            });
        }
    }, 50); // Adjust the interval delay as needed (100 ms = 0.1 seconds per step)
}, 1000); // Adjust the initial delay as needed (3000 ms = 3 seconds)

//==== gradient range code end =========//

const checkbox = document.getElementById('my-checkbox');
const checkboxImage = document.querySelector('.checkbox-image img');

checkbox.addEventListener('change', function () {
    if (this.checked) {
        checkboxImage.src = 'assets/image/disable-check.svg';
    } else {
        checkboxImage.src = 'assets/image/agree-check.svg';
    }
});

//======== validation code start ===========//
document.getElementById('feedbackForm').addEventListener('submit', function (event) {
    event.preventDefault();
    let valid = true;

    // Clear previous error messages
    document.querySelectorAll('.error').forEach(function (error) {
        error.remove();
    });

    // Validate email
    const emailInput = document.querySelector('input[type="email"]');
    if (!emailInput.value) {
        showError(emailInput, 'Email is required');
        valid = false;
    } else if (!validateEmail(emailInput.value)) {
        showError(emailInput, 'Invalid email format');
        valid = false;
    }

    // Validate participant name
    const nameInput = document.querySelector('input[type="text"]');
    if (!nameInput.value) {
        showError(nameInput, 'Participant name is required');
        valid = false;
    }

    // Validate range items
    document.querySelectorAll('.satisfaction-slider').forEach(function (slider) {
        if (slider.value == 0) {
            showError(slider, 'Input Missing');
            valid = false;
        }
    });

    // Validate radio buttons
    // const radioButtons = document.querySelectorAll('input[type="radio"]');
    // if (!Array.from(radioButtons).some(rb => rb.checked)) {
    //     showError(radioButtons[0], 'Please select an option');
    //     valid = false;
    // }

    // Validate checkbox
    const checkbox = document.getElementById('my-checkbox');
    if (!checkbox.checked) {
        showError(checkbox, 'You must agree to publish this feedback');
        valid = false;
    }

    // If valid, submit the form
    if (valid) {
        this.submit();
    }
});

function showError(element, message) {
    const error = document.createElement('div');
    error.className = 'error';
    error.textContent = message;
    element.parentNode.appendChild(error);
}

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}



document.getElementById('yes-btn').addEventListener('click', function() {
        document.querySelector('.input-field').style.display = 'block';
        document.getElementById('yes-btn').classList.add('checked-radio-green');
        document.getElementById('no-btn').classList.remove('checked-radio-red');

});

document.getElementById('no-btn').addEventListener('click', function() {

        document.querySelector('.input-field').style.display = 'none';
        document.getElementById('no-btn').classList.add('checked-radio-red');
        document.getElementById('yes-btn').classList.remove('checked-radio-green');

});