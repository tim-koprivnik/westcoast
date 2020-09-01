// jQuery(document).ready(function () {
//     new WOW({
//         mobile: false,
//     }).init();
// });

wow = new WOW(
    {
    boxClass:     'wow',      // default
    animateClass: 'animated', // default
    offset:       0,          // default
    mobile:       false,       // default
    live:         true        // default
  }
)
wow.init();