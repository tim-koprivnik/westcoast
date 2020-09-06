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

    // If search is focused, show X button, else don't
    if ( $('#header-product-autocomplete').focus() ) {
      $('#search-input-reset-btn').css('display', 'block');
    } else {
      $('#search-input-reset-btn').css('display', 'none');
      $('.overlay-image-arrow').hide();
    }


    // On click in easyAutocomplete dropdown, do ...
    $('.easy-autocomplete-container').on('click', function() {
      if ($('#quick-select-bins').css('display', 'none')) {
        $('#quick-select-bins').show(); // or: $('#quick-select-bins').css('display', 'block');
        // $('#quick-select-bins').addClass('active');
        $('.overlay-image-arrow').hide();
      } else {
        $('#quick-select-bins').hide(); // or: $('#quick-select-bins').css('display', 'none');
        // $('#quick-select-bins').removeClass('active');
      }
    });


    // On X click in search, do ...
    $('#search-input-reset-btn').on('click', function () {
      $('#quick-select-bins').hide();
      $('.overlay-image-arrow').show();
      $('#header-product-autocomplete').val('');
    })


    // Variation functions (in products)
    $( ".variations_form" ).on( "woocommerce_variation_select_change", function () {
      // Fires whenever variation selects are changed
      $('#single-product-placeholder').show(0);
    } );

    $( ".single_variation_wrap" ).on( "show_variation", function ( event, variation ) {
      // Fired when the user selects all the required dropdowns / attributes
      // and a final variation is selected / shown
      $('#single-product-placeholder').hide(0);
    } );

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
