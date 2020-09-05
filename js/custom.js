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
    $('#header-product-autocomplete').easyAutocomplete(options);


    $( ".variations_form" ).on( "woocommerce_variation_select_change", function () {
      // Fires whenever variation selects are changed
      $('#single-product-placeholder').show(0);
    } );

    $( ".single_variation_wrap" ).on( "show_variation", function ( event, variation ) {
      // Fired when the user selects all the required dropdowns / attributes
      // and a final variation is selected / shown
      $('#single-product-placeholder').hide(0);
    } );
    

    // NOT WORKING
    // function removeBorderBottom() {
    //   var input = document.querySelector('input');

    //   if (input.value != empty) { 
    //     input.classList.add('active-input'); 
    //   }
    // }

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


