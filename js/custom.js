jQuery(document).ready(function ($) {
    new WOW({
        mobile: false,
    }).init();


    var options = {

      url: "/westcoast/www/wp-content/themes/westcoast/js/depo-distance.json",
    
      getValue: "Suburb",

      template: {
        type: "description",
        fields: {
            description: "Post Code"
        }
    },
    
      list: {
        match: {
          enabled: true
        }
      },
    
      theme: "plate-dark"
    };

    $('#single-product-autocomplete').easyAutocomplete(options);
});

// wow = new WOW(
//     {
//     boxClass:     'wow',      // default
//     animateClass: 'animated', // default
//     offset:       0,          // default
//     mobile:       false,       // default
//     live:         true        // default
//   }
// )
// wow.init();


// Sticky Navbar
// window.onscroll = function () { myFunction() };

// var navbar = document.getElementById("wrapper-navbar");
// var header = document.getElementById("wrapper-header-wrapper");

// var sticky = navbar.offsetTop;

// function myFunction() {
//   if (window.pageYOffset >= sticky) {
//     navbar.classList.add("sticky");
//     header.classList.add("sticky");
//   } else {
//     navbar.classList.remove("sticky");
//     header.classList.remove("sticky");
//   }
// }


