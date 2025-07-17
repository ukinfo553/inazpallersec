

    <style>
        /* Initially hidden and small */
        #animated-box {
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 99;
            width: 300px;
            height: auto;
            overflow: hidden;
            background: transparent;
            border-radius: 10px;
            opacity: 0;
            transform: scale(0);
            transition: transform 0.5s ease-out, opacity 0.5s ease-out;
        }

        @media (max-width: 768px) {
            #animated-box {
                width: 200px;
            }

        }

        #animated-box img {
            max-width: 100%;
            object-fit: cover;
            cursor: pointer;
            display: block;
        }

        #animated-box.visible {
            opacity: 1;
            transform: scale(1);
        }

        #animated-box.hidden {
            opacity: 0;
            transform: scale(0);
            transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        }
    </style>

    <!-- <div id="animated-box" class="modal-btn" modal-title="Ramdan Offer" title="Ramdan Offer">
        <img src="https://www.infosectrain.com/pages/lp/lp-components/remdan-offer.gif" alt="Ramdan Offer">
    </div> -->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let animatedBox = document.getElementById("animated-box");

            setTimeout(() => {
                animatedBox.classList.add("visible");
            }, 1000);

            setTimeout(() => {
                animatedBox.classList.add("hidden");
            }, 20000);

            animatedBox.addEventListener("click", function () {
                animatedBox.classList.add("hidden");
            });
        });
    </script>
