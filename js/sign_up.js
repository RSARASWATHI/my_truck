$(document).ready(function(){
  
  $(".input-field").css("opacity", "0.1");
  $("#first").css("opacity", "1");
  $(".input-field").click(function(){
    $(this).css("opacity", "1");
  
  });
    $(".input-field").keyup(function(){
    $(this).css("opacity", "1");
  });
   $(".input-field").focus(function(){
    $(this).css("opacity", "1");
  });
      $(".input-field").focusout(function(){
    $(this).css("opacity", "0.1");
  });
  });
$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});


$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});

function isNumber(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode(key);
    var regex = /^[0-9,]+$/;
    if (!regex.test(key)) {
      theEvent.returnValue = false;
    if (theEvent.preventDefault) theEvent.preventDefault();
    }
  }

// $(document).ready(function(){
  
//   $(".input-field").css("opacity", "0.1");
//   $(".input-field").click(function(){
//     $(this).css("opacity", "1");
  
//   });
//     $(".input-field").keyup(function(){
//     $(this).css("opacity", "1");
//   });
//    $(".input-field").focus(function(){
//     $(this).css("opacity", "1");
//   });
//       $(".input-field").focusout(function(){
//     $(this).css("opacity", "0.1");
//   });
//   });


$(function() {

            $('input:text:first').focus();
            var $inp = $('.cls');
            $inp.bind('keydown', function(e) {
                var key = e.which;
                if (key == 13) {
                    e.preventDefault();
                    var nxtIdx = $inp.index(this) + 1;
                    $(".cls:eq(" + nxtIdx + ")").focus();
                }
            });
        });
 
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });

    /*Scroll Spy*/
    $('body').scrollspy({ target: '#spy', offset:80});

    /*Smooth link animation*/
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });  
     