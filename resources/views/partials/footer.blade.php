  <!-- footer section-->
    <section class="footer-main-sec home-footer w-100 float-left padding-bottom ">
        <div class="wrapper2">
            <div class="footer-inner-section">
                <div class="footer-logo footer-box">
                    <a href="index.html">
                        <figure>
                            <img src="assets/images/ai-bo8-light.svg" alt="AiMentor-logo">
                        </figure>
                    </a>
                    <p class="mb-0">Copyright © 2024 AI Bo8 .</p>
                    <p>All Rights Reserved.</p>
                    <ul class="list-unstyled mb-0">
                        <li><span class="d-block">Social Media</span></li>
                        <li class="d-inline-block ml-0"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="d-inline-block"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                        <li class="d-inline-block"><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                        <li class="d-inline-block mr-0"><a href="https://pk.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <div class="footer-box">
                    <h4>About</h4>
                    <ul class="list-unstyled">
                        <li><a href="about">About Company</a></li>
                        <li><a href="#">Our Solutions</a></li>
                        <li><a href="service.html">Our Best Services</a></li>
                        <li class="mb-0"><a href="team.html">Professional Team</a></li>
                    </ul>
                </div>
                <div class="footer-box address-box">
                    <h4>Address</h4>
                    <ul class="list-unstyled">
                        <li class="position-relative"><i class="fas fa-map-marker-alt"></i> 551 Swanston Street, Melbourne <br> Victoria 3053 Australia</li>
                        <li class="position-relative"><i class="fas fa-phone-volume"></i> <a href="tel:+61383766284">+61 3 8376 6284</a></li>
                        <li class="mb-0 position-relative"><i class="fas fa-envelope"></i> <a href="mailto:info@designingmedia.com">info@designingmedia.com</a></li>
                    </ul>
                </div>
                <div class="footer-box footer-form-box">
                    <h4>Newsletter Signup</h4>
                    <ul class="list-unstyled">
                        <li class="position-relative mb-0"><input type="text" placeholder="Enter Your Email Address"> <button>Send</button></li>
                    </ul>
                    <form action="/action_page.php">
                        <input type="checkbox" id="policy" name="policy" value="Bike">
                        <label for="policy" class="check-box"></label>
                        <label for="policy"> I agree to the <a href="#">Privacy Policy</a>.</label><br>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <a id="button" class="show"></a>
    <!-- footer section-->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/cdn.jsdelivr.net_npm_swiper@10_swiper-bundle.min.js"></script>
<script>
     $(window).on('load', function(){ 
        // Preloader
        $('.loader').fadeOut();
        $('.loader-mask').delay(350).fadeOut('slow');
        });
    AOS.init();
    $('#owlsliderone').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    animateOut: 'slideInLeft',
    animateIn: 'slideOutRight',
    responsive:{
        0:{
            items:2,
            margin: 15
        },
        576:{
            items:3
        },
        992:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
var btn = $('#button');
         
  $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  }
   else {
    btn.removeClass('show');
  }
  });
  btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
window.addEventListener('load',function(){
  document.querySelector('body').classList.add("loaded")  
});
</script>
<script>
    $('#owlslider').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    animateOut: 'slideInLeft',
    animateIn: 'slideOutRight',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})
window.document.onkeydown = function (e) {
            if (!e) {
                e = event;
            }
            if (e.keyCode == 27) {
                lightbox_close();
            }
        }

        function lightbox_open() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            //   window.scrollTo(0, 0);
            document.getElementById('light').style.display = 'block';
            document.getElementById('fade1').style.display = 'block';
            lightBoxVideo.play();
        }

        function lightbox_close() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            document.getElementById('light').style.display = 'none';
            document.getElementById('fade1').style.display = 'none';
            lightBoxVideo.pause();
        }
</script>
<script>
    const lightbox = document.createElement('div')
        lightbox.id = 'lightbox'
        document.body.appendChild(lightbox)

        const images = document.querySelectorAll('.images img')
        images.forEach(image => {
        image.addEventListener('click', e => {
        lightbox.classList.add('active')
        const img = document.createElement('img')
        img.src = image.src
        while (lightbox.firstChild) {
            lightbox.removeChild(lightbox.firstChild)
        }
        lightbox.appendChild(img)
        })
    })

        lightbox.addEventListener('click', e => {
        if (e.target !== e.currentTarget) return
        lightbox.classList.remove('active')
    })

    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";

    $(window).on("load resize", function() {
    if (this.matchMedia("(min-width: 768px)").matches) {
        $dropdown.hover(
        function() {
            const $this = $(this);
            $this.addClass(showClass);
            $this.find($dropdownToggle).attr("aria-expanded", "true");
            $this.find($dropdownMenu).addClass(showClass);
        },
        function() {
            const $this = $(this);
            $this.removeClass(showClass);
            $this.find($dropdownToggle).attr("aria-expanded", "false");
            $this.find($dropdownMenu).removeClass(showClass);
        }
        );
    } else {
        $dropdown.off("mouseenter mouseleave");
    }
    });
    const swiper = new Swiper('.swiper', {
    loop: true,
    spaceBetween: 10,
    autoplay: {
        delay: 0,
        pauseOnMouseEnter: true,        // added
        disableOnInteraction: false,    // added
    },
    breakpoints: {
        360: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
        576: {
            slidesPerView: 3,
            spaceBetween: 10,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 20,
          },
          992: {
            slidesPerView: 4,
            spaceBetween: 20,
          },
          1200: {
            slidesPerView: 7,
            spaceBetween: 10,
          },
        },

    speed: 4000,
})
</script>
</body>
</html>