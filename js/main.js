$(document).ready(function() {
    $('.header').height($(window).height());

    $(".navbar a").click(function() {
        $("body,html").animate({
            scrollTop: $("#" + $(this).data('value')).offset().top
        }, 1000)

    })

})

// -------------news and events------------
// (function($) {
//     "use strict";
//      Auto-scroll
//     $('#myCarousel').carousel({
//         interval: 5000
//     });

//      Control buttons
//     $('.next').click(function() {
//         $('.carousel').carousel('next');
//         return false;
//     });
//     $('.prev').click(function() {
//         $('.carousel').carousel('prev');
//         return false;
//     });

//      On carousel scroll
//     $("#myCarousel").on("slide.bs.carousel", function(e) {
//         var $e = $(e.relatedTarget);
//         var idx = $e.index();
//         var itemsPerSlide = 3;
//         var totalItems = $(".carousel-item").length;
//         if (idx >= totalItems - (itemsPerSlide - 1)) {
//             var it = itemsPerSlide -
//                 (totalItems - idx);
//             for (var i = 0; i < it; i++) {
//                 append slides to end 
//                 if (e.direction == "left") {
//                     $(
//                         ".carousel-item").eq(i).appendTo(".carousel-inner");
//                 } else {
//                     $(".carousel-item").eq(0).appendTo(".carousel-inner");
//                 }
//             }
//         }
//     });
// })
// (jQuery);

// ============form==========
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

// -----------button to top------
var btn = $('#button');

$(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, '300');
});

// -------------shrink-----------
// if ($(window).outerWidth() > 768) {
//     $(window).scroll(function() {
//         if ($(window).scrollTop() > 100) {
//             $('a.navbar-brand img').css({
//                 'height': '50'
//             });
//         } else {
//             $('a.navbar-brand img').css({
//                 'height': '100'
//             });
//         }

//     });
// }

// -------------homepage admission form-------------
// $(document).ready(function() {
//     $('#enquire').click(function() {
//         var select_branch = $('#select_branch').val();
//         var select_grade = $('#select_grade').val();
//         var parent_name = $('#parent_name').val();
//         var parent_email = $('#parent_email').val();
//         var parent_phone = $('#parent_phone').val();
//         var parent_remarks = $('#parent_remarks').val();
//         if (select_branch == '' || select_grade == '' || parent_name == '' || parent_email == '' || parent_phone == '' || parent_remarks == '') {
//             $('#error_message').html("All Fields are required");
//         } else {
//             $('#error_message').html('');
//             $.ajax({
//                 url: "enquiryform.php",
//                 method: "POST",
//                 data: {
//                     select_branch: select_branch,
//                     select_grade: select_grade,
//                     parent_name: parent_name,
//                     parent_email: parent_email,
//                     parent_phone: parent_phone,
//                     parent_remarks: parent_remarks
//                 },
//                 success: function(data) {
//                     $("form").trigger("reset");
//                     $('#success_message').fadeIn().html(data);
//                     setTimeout(function() {
//                         $('#success_message').fadeOut("Slow");
//                     }, 2000);
//                 }
//             });
//         }
//     });
// });

// -------------sideform-----------------
// $(document).ready(function() {
//     $('#side-enquiry').click(function() {
//         var side_name = $('#side_name').val();
//         var side_email = $('#side_email').val();
//         var side_phone = $('#side_phone').val();
//         var side_branches = $('#side_branches').val();
//         var side_grade = $('#side_grade').val();
//         var side_dob = $('#side_dob').val();
//         var side_address = $('#side_address').val();
//         var side_message = $('#side_message').val();
//         if (side_name == '' || side_email == '' || side_phone == '' || side_branches == '' || side_grade == '' || side_dob == '' || side_address == '' || side_message == '') {
//             $('#error_message').html("All Fields are required");
//         } else {
//             $('#error_message').html('');
//             $.ajax({
//                 url: "sideform.php",
//                 method: "POST",
//                 data: {
//                     side_name: side_name,
//                     side_email: side_email,
//                     side_phone: side_phone,
//                     side_branches: side_branches,
//                     side_grade: side_grade,
//                     side_dob: side_dob,
//                     side_address: side_address,
//                     side_message: side_message
//                 },
//                 success: function(data) {
//                     $("#success_message").css("display", "block");
//                     $("form").trigger("reset");
//                     $('#success_message').fadeIn().html(data);
//                     setTimeout(function() {
//                         $('#success_message').fadeOut("Slow");
//                     }, 2000);
//                 }
//             });
//         }
//     });
// });

$(document).ready(function() {
    // $('#side-enquiry').click(function() {
    //     var side_name = $('#side_name').val();
    //     var side_email = $('#side_email').val();
    //     var side_phone = $('#side_phone').val();
    //     var side_branches = $('#side_branches').val();
    //     var side_grade = $('#side_grade').val();
    //     // var side_dob = $('#side_dob').val();
    //     // var side_address = $('#side_address').val();
    //     var side_message = $('#side_message').val();
    //     if (side_name == '' || side_email == '' || side_phone == '' || side_branches == '' || side_grade == '' || side_message == '') {
    //         $('#error_message').html("All Fields are required");
    //          $('#error_message').css('display', 'block');

    //     } else {
    //         $('#error_message').html('');
    //         $.ajax({
    //             url: "sideform.php",
    //             method: "POST",
    //             data: {
    //                 side_name: side_name,
    //                 side_email: side_email,
    //                 side_phone: side_phone,
    //                 side_branches: side_branches,
    //                 side_grade: side_grade,
    //                 side_message: side_message
    //             },
    //             success: function(data) {
    //                 $("#success_message").css("display", "block");
    //                 $("form").trigger("reset");
    //                 $('#success_message').fadeIn().html(data);
    //                 setTimeout(function() {
    //                     $('#success_message').fadeOut("Slow");
    //                 }, 2000);
    //             }
    //         });
    //     }
    // });

    // $('#side-enquiry').click(function() {

    // });
});


// --------------footer form-------------
// $(document).ready(function() {
//     $('#footer_form').click(function() {
//         var footer_name = $('#footer_name').val();
//         var footer_email = $('#footer_email').val();
//         var footer_mobile = $('#footer_mobile').val();
//         var footer_message = $('#footer_message').val();

//         if (footer_name === '' || footer_email === '' || footer_mobile === '' || footer_message === '') {
//             $('#error_message').html("All Fields are required");
//         } else {
//             $('#error_message').html('');
//             $.ajax({
//                 url: "footer_form.php",
//                 method: "POST",
//                 data: {
//                     footer_name: footer_name,
//                     footer_email: footer_email,
//                     footer_mobile: footer_mobile,
//                     footer_message: footer_message
//                 },
//                 success: function(data) {
//                     $("#success_message").css("display", "block");
//                     $("form").trigger("reset");
//                     $('#success_message').fadeIn().html(data);
//                     setTimeout(function() {
//                         $('#success_message').fadeOut("Slow");
//                     }, 2000);
//                 }
//             });
//         }
//     });
// });