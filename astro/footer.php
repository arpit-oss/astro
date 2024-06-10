<div class="d-flex align-item-center mt-4" style="background:#464038;">
  <div class="container footer">
    <div class="row mt-4 mx-auto">
      <div class="col-lg-3 col-6">
        <div>
          <img src="https://www.lovewithastrology.com/wp-content/uploads/2021/09/new-logo-13-09-2021.png">
        </div>
        <div class="mt-4">
          <h6 style="color:#ee8722;">18002702801 / +91 8081426940
+91-8881113377</h6>
          <p class="text-white" style="text-align: justify;">Donec id elit non mi porta gravida at eget metus. Donec id elit non Vestibulum id ligula porta felis euism od semper.</p>

          <p style="color:#ee8722;">Read More <span class="ms-2"><i class="fa fa-arrow-right" aria-hidden="true"></i> </span> </p>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div>
          
          <ul>
            <h4 class="mt-3" style="color:#ee8722;">Our Sectors</h4>
            <li style="color:white;list-style:none;">Astrology Consultancy</li>
            <li style="color:white;list-style:none;">Ayurveda</li>
            <li style="color:white;list-style:none;">Healthcare</li>
            <li style="color:white;list-style:none;">TV Channel </li>
            <li style="color:white;list-style:none;">Healthcare</li>
            <li style="color:white;list-style:none;">TV Channel </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div>
          
          <ul>
            <h4 class="mt-3" style="color:#ee8722;">Customer Care</h4>
            <li style="color:white;list-style:none;">About Us</li>
            <li style="color:white;list-style:none;">Ayurveda</li>
            <li style="color:white;list-style:none;">Healthcare</li>
            <li style="color:white;list-style:none;">TV Channel </li>
            <li style="color:white;list-style:none;">Healthcare</li>
            <li style="color:white;list-style:none;">TV Channel </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div>
          
          <ul>
            <h4 class="mt-3" style="color:#ee8722;">Adress</h4>
            <li style="color:white;list-style:none;">
              Flat No 308, 8/220,
            </li>
            <li style="color:white;list-style:none;">
              
                    Anand Keshav Apartment,
            </li>
            <li style="color:white;list-style:none;">
              
                    Arya Nagar, Kanpur-208002,
            </li>
            
            <div>
          <h4 class="mt-4" style="color:#ee8722;">Map</h4>
          <div class="w-75">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d237946.1086862659!2d80.16863320886343!3d26.501515650526652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1714366840876!5m2!1sen!2sin" width="230" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
          </div>
          <!-- follow start-->

          <div>
          <h2 class=" fw-bold" style="font-weight: bold;color:#e54b4b;">Follows us on</h2>
  
        </div>

        <div class="d-flex mt-2">
          <div class="rounded-circle1" style="color:#ee8722;font-size: 25px;">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </div>

          <div class="ms-3 rounded-circle1" style="color:#ee8722;font-size: 25px;">
            <i class="fa fa-whatsapp" aria-hidden="true"></i>
          </div>

          <div class="ms-3 rounded-circle1" style="color:#ee8722;font-size: 25px;">
            <i class="fa fa-youtube" aria-hidden="true"></i>
          </div>
        </div>

          <!-- follow end -->

        </div>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- footer End-->

<script type="text/javascript">
/* Demo purposes only */
  $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );

  (function($) {
  $.fn.cascadeSlider = function(opt) {
    var $this = this,
      itemClass = opt.itemClass || 'cascade-slider_item',
      arrowClass = opt.arrowClass || 'cascade-slider_arrow',
      $item = $this.find('.' + itemClass),
      $arrow = $this.find('.' + arrowClass),
      itemCount = $item.length;

    var defaultIndex = 0;

    changeIndex(defaultIndex);

    $arrow.on('click', function() {
      var action = $(this).data('action'),
        nowIndex = $item.index($this.find('.now'));

      if(action == 'next') {
        if(nowIndex == itemCount - 1) {
          changeIndex(0);
        } else {
          changeIndex(nowIndex + 1);
        }
      } else if (action == 'prev') {
        if(nowIndex == 0) {
          changeIndex(itemCount - 1);
        } else {
          changeIndex(nowIndex - 1);
        }
      }

      $('.cascade-slider_dot').removeClass('cur');
      //$('.cascade-slider_dot').next().addClass('cur');
    });
    
    // add data attributes
    for (var i = 0; i < itemCount; i++) {
      $('.cascade-slider_item').each(function(i) {
        $(this).attr('data-slide-number', [i]);
      });
    }
    
    // dots
    $('.cascade-slider_dot').bind('click', function(){
      // add class to current dot on click
      $('.cascade-slider_dot').removeClass('cur');
      $(this).addClass('cur');

      var index = $(this).index();

      $('.cascade-slider_item').removeClass('now prev next');
      var slide = $('.cascade-slider_slides').find('[data-slide-number=' + index + ']');
      slide.prev().addClass('prev');
      slide.addClass('now');
      slide.next().addClass('next');

      if(slide.next().length == 0) {
        $('.cascade-slider_item:first-child').addClass('next');
      }

      if(slide.prev().length == 0) {
        $('.cascade-slider_item:last-child').addClass('prev');
      }
    });

    function changeIndex(nowIndex) {
      // clern all class
      $this.find('.now').removeClass('now');
      $this.find('.next').removeClass('next');
      $this.find('.prev').removeClass('prev');
      if(nowIndex == itemCount -1){
        $item.eq(0).addClass('next');
      }
      if(nowIndex == 0) {
        $item.eq(itemCount -1).addClass('prev');
      }

      $item.each(function(index) {
        if(index == nowIndex) {
          $item.eq(index).addClass('now');
        }
        if(index == nowIndex + 1 ) {
          $item.eq(index).addClass('next');
        }
        if(index == nowIndex - 1 ) {
          $item.eq(index).addClass('prev');
        }
      });
    }
  };
})(jQuery);

$('#cascade-slider').cascadeSlider({
  itemClass: 'cascade-slider_item',
  arrowClass: 'cascade-slider_arrow'
});


/* type text */

const typingText = document.querySelector(".typingText");
const text = "Welcome to Love with Astrology!"

let index = 1;

setTimeout(typeText, 1000);

function typeText() {
  typingText.textContent = text.slice(0, index);
  if (index < text.length) {
    index++;
    const randomInterval = Math.floor(Math.random() * 350) + 50;
    setTimeout(typeText, randomInterval);
  } else {
    setTimeout(eraseText, 1500);
  }
}

function eraseText() {
  index--;
  typingText.textContent = text.slice(0, index);
  if (index > 0) {
    setTimeout(eraseText, 100);
  } else {
    setTimeout(typeText, 1500);
  }
}

let icon = document.querySelector('ion-icon');
icon.onclick = function(){
  icon.classList.toggle('active');
}

function inc(){
  counter.innerHTML = parseInt(counter.innerHTML)+1;
}
function dec(){
  if(parseInt(counter.innerHTML)>0)
    counter.innerHTML = parseInt(counter.innerHTML)-1;
}
var counter = document.getElementById("counter");

</script>

<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:40,
    nav:true,
    autoplay:true,
    autoplayTimeout:1000,
    dots:true,
    stagePadding:100,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:5
        }
    }
});
</script>

<script>
const counters = document.querySelectorAll(".counter");

counters.forEach((counter) => {
  counter.innerText = "0";
  const updateCounter = () => {
    const target = +counter.getAttribute("data-target");
    const count = +counter.innerText;
    const increment = target / 200;
    if (count < target) {
      counter.innerText = `${Math.ceil(count + increment)}`;
      setTimeout(updateCounter, 1);
    } else counter.innerText = target;
  };
  updateCounter();
});
</script>


<!-- Bootstrap 5 JavaScript Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>