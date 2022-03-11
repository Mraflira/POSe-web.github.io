<div class="footer">
  <div class="logo-footer">
    <img src="asset/logo-pose.png" alt="">
    <p>POSe adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque orci est turpis massa. </p>
  </div>
  <div class="menu-footer">
    <h1>Tentang Kami</h1>
    <ul>
      <li>Tentang POSe</li>
      <li>Lorem ipsum</li>
      <li>Lorem ipsum</li>
    </ul>
  </div>
  <div class="menu-footer">
    <h1>Layanan</h1>
    <ul>
      <li>Lorem ipsum</li>
      <li>Lorem ipsum</li>
      <li>Lorem ipsum</li>
    </ul>
  </div>
  <div class="menu-footer">
    <h1>Hubungi Kami</h1>
    <ul>
      <li>Jl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
      <li>Email : 
Loremipsum@gmail.com</li>
      <li>Tel : (+62)21 1234-5678</li>
    </ul>
  </div>
</div>

<!-- <script src="js/highlight.js"></script>
<script src="js/app.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.js"></script> -->
<script src="js/swiper-bundle.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
$('.running-text').slick({
  dots: false,
  prevArrow: false,
  nextArrow: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  autoplay: true,
  autoplaySpeed: 1500,
  adaptiveHeight: true
});
  </script>
  <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        const togglePassword2 = document.querySelector("#togglePassword2");
        const password2 = document.querySelector("#password2");

        togglePassword2.addEventListener("click", function () {
            // toggle the type attribute
            const type2 = password2.getAttribute("type") === "password" ? "text" : "password";
            password2.setAttribute("type", type2);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });
        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('submit', function (e) {
            e.preventDefault();
        });
    </script>
<script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 20,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 20,
          },
        },
      });
    </script>
    
<script>
$(function(){
	var menu = $(".menu");
  var indicator = $('<span class="indicator"></span>');
  menu.append(indicator);
  position_indicator(menu.find("li.active"));  
  setTimeout(function(){indicator.css("opacity", 1);}, 500);
  menu.find("li").mouseenter(function(){
  	position_indicator($(this));
  });
  menu.find("li").mouseleave(function(){
  	position_indicator(menu.find("li.active"));
  });
  
  function position_indicator(ele){
  		var left = ele.offset().left - 10;
      var width = ele.width();
      indicator.stop().animate({
        left: left,
        width: width
      });
  }
});
</script>


<script src="js/script.js"></script>
</body>
</html>