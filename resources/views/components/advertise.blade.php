<div class="advertise ">
    <div class="advertise_responsive row">
        <div class="ads col-5 p-5 ms-5">
            <div class="aditems"> <img src="{{ asset('img/apple logo.png') }}" class="img-fluid me-4">
                <span> Macbook pro 16 inch 2023 (M2 Max) </span>
            </div>
            <div class="aditems">
                <p class="ads New-arrival"> New arrival </p>
            </div>
            <div class="aditems pt-5 mt-5">
                <a href="#" style="color:white ;text-decoration: underline;">Shop now <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="col-6 mt-3">
            <div class="slideshow-container">
                <div class="mySlides animation">
                    <img src="{{ asset('img/macbook intro.png') }}" class="img-fluid">
                </div>
                <div class="mySlides animation ">
                    <img src="{{ asset('img/macbook intro(1).png') }}" class="img-fluid">
                </div>
                <div class="mySlides animation ">
                    <img src="{{ asset('img/macbook intro(2).png') }}" class="img-fluid">
                </div>
                <div class="mySlides animation ">
                    <img src="{{ asset('img/macbook intro(3).png') }}" class="img-fluid">
                </div>
            </div>
        </div>

    </div>
    <div class="mb-5" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>
    <script>
        let slideIndex = 1;
        setInterval(function() {
            slideIndex++;
            showSlides(slideIndex);
        }, 5000)
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
</div>