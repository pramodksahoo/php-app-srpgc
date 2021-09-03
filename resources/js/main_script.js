(function($) {
'use strict';
var baseurl = 'http://srpgc.com/';

    /*-------------------------------------------------------------------------*
     *                  01. Preloader js                                       *
     *-------------------------------------------------------------------------*/
      $(window).on( 'load', function(){
        
          $('#preloader').delay(300).fadeOut('slow',function(){
            $(this).remove();
          });    

      }); // $(window).on end



  $(document).ready(function(){



    /*-------------------------------------------------------------------------*
     *             02. change Menu background on scroll js                     *
     *-------------------------------------------------------------------------*/
      $(window).on('scroll', function () {
          var menu_area = $('.menu-area');
          if ($(window).scrollTop() > 50) {
              menu_area.addClass('sticky-menu');
          } else {
              menu_area.removeClass('sticky-menu');
          }
      }); // $(window).on('scroll' end




    /*-------------------------------------------------------------------------*
     *                   03. Navigation js                                     *
     *-------------------------------------------------------------------------*/
      $(document).on('click', '.navbar-collapse.in', function (e) {
          if ($(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle') {
              $(this).collapse('hide');
          }
      });

      $('body').scrollspy({
          target: '.navbar-collapse',
          offset: 195
      });



    /*-------------------------------------------------------------------------*
     *                   04. Smooth scroll to anchor                           *
     *-------------------------------------------------------------------------*/
      $('a.smooth_scroll').on("click", function (e) {
          e.preventDefault();
          var anchor = $(this);
          $('html, body').stop().animate({
              scrollTop: $(anchor.attr('href')).offset().top - 50
          }, 1000);
      });



    /*-------------------------------------------------------------------------*
     *                  05. Portfolio js                                       *
     *-------------------------------------------------------------------------*/
      $('.portfolio').mixItUp();



    /*-------------------------------------------------------------------------*
     *                  06. Magnific Popup js                                  *
     *-------------------------------------------------------------------------*/
      $('.work-popup').magnificPopup({
          type: 'image',
          gallery: {
              enabled: true
          }
          
      });
      

      $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,
          fixedContentPos: false
      });


    /*-------------------------------------------------------------------------*
     *                  07. Testimonial js                                     *
     *-------------------------------------------------------------------------*/
      $(".testimonial-list").owlCarousel({
          items               : 2,
          autoPlay            : true,
          itemsDesktop        : [1199, 2],
          itemsDesktopSmall   : [980, 2],
          itemsTablet         : [768, 1],
          itemsMobile         : [479, 1],
          pagination          : false,
          autoHeight          : true,
          navigation          : false
      });



    /*-------------------------------------------------------------------------*
     *                       08. client js                                     *
     *-------------------------------------------------------------------------*/
     $(".owl-client").owlCarousel({
          items               : 6,
          autoPlay            : true,
          itemsDesktop        : [1199, 5],
          itemsDesktopSmall   : [980, 3],
          itemsTablet         : [768, 3],
          itemsMobile         : [479, 2],
          pagination          : false,
          autoHeight          : true,
          navigation          : false,
      });

      $(".news-carousel").owlCarousel({
          items               : 3,
          autoPlay            : false,
          itemsDesktop        : [1199, 3],
          itemsDesktopSmall   : [980, 2],
          itemsTablet         : [768, 2],
          itemsMobile         : [479, 1],
          pagination          : false,
          navigation          : true,
          navigationText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
      });

      $(".owl-slider").owlCarousel({
          items               : 1,
          itemsDesktop        : [1199, 1],
          itemsDesktopSmall   : [980, 1],
          itemsTablet         : [768, 1],
          itemsMobile         : [479, 1],
          pagination          : false,
          navigation          : true,
          navigationText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
      });
        // Home Page Slider Settings
        $('#carousel-example-generic').carousel({
          interval: 5000,
          cycle: true
        });
  }); // $(document).ready end
  $("#contactSubmit").click(function(){
      
        var name = $("#txtname").val();
        var email = $("#txtemail").val();
        var subject = $("#txtsubject").val();
        var mobileno = $("#txtmobileno").val();
        var message = $("#txtmessage").val();
        chkblankfield(subject.trim(), "#txtsubject");
        chkblankfield(name.trim(), "#txtname");
        chkblankfield(mobileno.trim(), "#txtmobileno");
        chkemail(email.trim(), "#txtemail");
        chkblankfield(message.trim(), "#txtmessage");
        
        if(chkblankfield(subject.trim(), "#txtsubject") && chkblankfield(name.trim(), "#txtname") && chkblankfield(mobileno.trim(), "#txtmobileno") && chkemail(email.trim(), "#txtemail") && chkblankfield(message.trim(), "#txtmessage")){
            $("#contactSubmit").attr('disabled', true);
            $("#form-messages").fadeIn(100);
            $("#form-messages").css("background-color", "#2196f3");
            $("#form-messages").html("Please Wait...");
            var formData = new FormData($("#contactusForm")[0]);
            $.ajax({
                type: "POST",
                url: baseurl + "contactus/hjsca",
                data: formData,
                processData: false,
                contentType: false,
                success: function (html)
                {
                    $("#form-messages").hide();
                    if(html== 'recaptchablank'){
                        setTimeout(function() {
                            $("#form-messages").fadeIn(100);
                            $("#form-messages").css("background-color", "#E84C3D");
                            $("#form-messages").html("Captcha validation is required!");
                            $("#contactSubmit").attr('disabled', false);
                        }, 3000); 
                    }else if(html == "Email sent")
                    {
                            $("#form-messages").fadeIn(1000);
                            $("#form-messages").css("background-color", "#669933");
                            $("#form-messages").html("Mail Sent...");
                        setTimeout(function() {
                            $('#contactusForm').trigger("reset");
                            $("#contactSubmit").attr('disabled', false);
                        }, 3000); 
                    } else
                    {
                        setTimeout(function() {
                            $("#form-messages").fadeIn(100);
                            $("#form-messages").css("background-color", "#E84C3D");
                            $("#form-messages").html(html);
                            $("#contactSubmit").attr('disabled', false);
                        }, 3000); 
                    }
                }
            });
        }
        return false;
  });
})(jQuery);

function chkblankfield(value, id)
{
    if (value.length == 0)
    {
        $(id).css("border-color", "red");
        return false;
    } else
    {
        $(id).css("border-color", "");
        return true;
    }
}
function chkemail(value, id)
{
    var emailExp = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (value.length == 0)
    {
        $(id).css("border", "1 px solid");
        $(id).css("border-color", "red");
        return false;
    } else if (!value.match(emailExp))
    {
        $(id).css("border-color", "red");
        return false;
    } else
    {
        $(id).css("border-color", "");
        return true;
    }
}
function isNumber(evt) {
    var iKeyCode = (evt.which) ? evt.which : evt.keyCode
    if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
        return false;
    return true;
}