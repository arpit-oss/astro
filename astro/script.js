jQuery(document).ready(function($) {
                "use strict";
                //  TESTIMONIALS CAROUSEL HOOK
                $('#customers-testimonials').owlCarousel({
                    loop: true,
                    center: true,
                    items: 3,
                    margin: 0,
                    autoplay: true,
                    dots:true,
                    autoplayTimeout: 8500,
                    smartSpeed: 450,
                    responsive: {
                      0: {
                        items: 1
                      },
                      768: {
                        items: 2
                      },
                      1170: {
                        items: 3
                      }
                    }
                });
            });



    let counter = 0;

function increment() {
  counter++;
}

function decrement() {
  counter--;
}

function get() {
  return counter;
}

const inc = document.getElementById("increment");
const input = document.getElementById("input");
const dec = document.getElementById("decrement");

inc.addEventListener("click", () => {
  increment();
  input.value = get();
});

dec.addEventListener("click", () => {
  if (input.value > 0) {
    decrement();
  }
  input.value = get();
});




function showPage(pageId) {
  // Hide all pages
  var pages = document.querySelectorAll('.page-content');
  pages.forEach(function(page) {
    page.classList.remove('active');
  });

  // Show the selected page
  var selectedPage = document.getElementById(pageId);
  selectedPage.classList.add('active');
}




$(document).ready(function() {
            $("#btn1").click(function() {
                $("#btn1").addClass("activate");
                $("#btn2").removeClass("activate");
                $("#tab1").show();
                $("#tab2").hide();
            });
            $("#btn2").click(function() {
                $("#btn1").removeClass("activate");
                $("#btn2").addClass("activate");
                $("#tab2").show();
                $("#tab1").hide();
            });
        })



    $(document).ready(function() {
  var bigimage = $("#big");
  var thumbs = $("#thumbs");
  //var totalslides = 10;
  var syncedSecondary = true;

  bigimage
    .owlCarousel({
    items: 1,
    slideSpeed: 2000,
    nav: true,
    // autoplay: true,
    dots: false,
    loop: true,
    responsiveRefreshRate: 200,
    navText: [
      '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
      '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
    ]
  })
    .on("changed.owl.carousel", syncPosition);

  thumbs
    .on("initialized.owl.carousel", function() {
    thumbs
      .find(".owl-item")
      .eq(0)
      .addClass("current");
  })
    .owlCarousel({
    items: 4,
    dots: true,
    nav: true,
    navText: [
      '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
      '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
    ],
    smartSpeed: 200,
    slideSpeed: 500,
    slideBy: 4,
    responsiveRefreshRate: 100
  })
    .on("changed.owl.carousel", syncPosition2);

  function syncPosition(el) {
    //if loop is set to false, then you have to uncomment the next line
    //var current = el.item.index;

    //to disable loop, comment this block
    console.log(el);
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

    if (current < 0) {
      current = count;
    }
    if (current > count) {
      current = 0;
    }
    //to this
    thumbs
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = thumbs.find(".owl-item.active").length - 1;
    console.log(onscreen)
    var start = thumbs
    .find(".owl-item.active")
    .first()
    .index();
    var end = thumbs
    .find(".owl-item.active")
    .last()
    .index();
    console.log(end);
    if (current > end) {
      thumbs.data("owl.carousel").to(current, 100, true);
    }
    if (current < start) {
      thumbs.data("owl.carousel").to(current - onscreen, 100, true);
    }
  }

  function syncPosition2(el) {
    if (syncedSecondary) {
      var number = el.item.index;
      bigimage.data("owl.carousel").to(number, 100, true);
    }
  }

  thumbs.on("click", ".owl-item", function(e) {
    e.preventDefault();
    var number = $(this).index();
    bigimage.data("owl.carousel").to(number, 300, true);
  });
});


    document.addEventListener("DOMContentLoaded", function() {
    const readMoreBtn = document.getElementById("readMoreBtn");
    const moreText = document.getElementById("moreText");

    readMoreBtn.addEventListener("click", function() {
        if (moreText.style.display === "none") {
            moreText.style.display = "inline";
            readMoreBtn.textContent = "Read Less";
        } else {
            moreText.style.display = "none";
            readMoreBtn.textContent = "Read More";
        }
    });
});




  AOS.init();


    let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}




    var skillPers = document.querySelectorAll(".skill-per");

skillPers.forEach(function(skillPer) {
  var per = parseFloat(skillPer.getAttribute("per"));
  skillPer.style.width = per + "%";
  
  var animatedValue = 0; 
  var startTime = null;
  
  function animate(timestamp) {
    if (!startTime) startTime = timestamp;
    var progress = timestamp - startTime;
    var stepPercentage = progress / 1000; // Dividing by duration in milliseconds (1000ms = 1s)
    
    if (stepPercentage < 1) {
      animatedValue = per * stepPercentage;
      skillPer.setAttribute("per", Math.floor(animatedValue) + "%");
      requestAnimationFrame(animate);
    } else {
      animatedValue = per;
      skillPer.setAttribute("per", Math.floor(animatedValue) + "%");
    }
  }
  
  requestAnimationFrame(animate);
});



    // script.js
document.addEventListener("DOMContentLoaded", function() {
    const whatsappLink = document.getElementById("whatsapp-link");
    const phoneNumber = "8299161522"; // Replace with the actual phone number
    const message = "Hello, I would like to inquire about your services."; // Pre-filled message

    const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
    whatsappLink.href = whatsappUrl;
});


