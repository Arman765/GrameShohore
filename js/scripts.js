// $(document).ready(function(){
//   $('#register').click(function(){
//     Swal.fire({
//       'title' :'Hello World',
//       'text': 'This is from Sweett',
//       'type':'success'
//     })
//   });

// });

$(document).ready(function(){
  $('#mycarousel').carousel({interval:2000});
  $('#carouselButton').click(function(){
    if($('#carouselButton').children('span').hasClass('fa-pause'))
    {
      $('#mycarousel').carousel('pause');
      $('#carouselButton').children('span').removeClass('fa-pause');
      $('#carouselButton').children('span').addClass('fa-play');
    }
    else if ($('#carouselButton').children('span').hasClass('fa-play')) {
      $('#mycarousel').carousel('cycle');
      $('#carouselButton').children('span').removeClass('fa-play');
      $('#carouselButton').children('span').addClass('fa-pause');
    }
  })
});

$(document).ready(function(){
  $('#buttonlogin').click(function(){
    $('#loginModal2').modal('show');
  });
  $('#logincancel').click(function(){
    $('#loginModal2').modal('hide');
  });
  $('#cross').click(function(){
    $('#loginModal2').modal('hide');
  });

});
