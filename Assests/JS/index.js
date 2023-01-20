$('a.nav-link.first').on('click', function() {
    $('a.nav-link.second.active').removeClass('active');
    $('a.nav-link.second').addClass('inactive');
    $('a.nav-link.third.active').removeClass('active');
    $('a.nav-link.third').addClass('inactive');
    $('.tab-pane.fade.second.active.show').removeClass('active');
    $('.tab-pane.fade.second.show').removeClass('show');
    $('.tab-pane.fade.third.active.show').removeClass('active');
    $('.tab-pane.fade.third.show').removeClass('show');
    $('.tab-pane.fade.in.first').addClass('active');
    $('.tab-pane.fade.in.first.active').addClass('show');
    // $('tab-pane.fade.in').removeClass('show');
    $(this).addClass('active');
    $(this).removeClass('inactive');
  });
$('a.nav-link.second').on('click', function() {
  $('a.nav-link.first.active').removeClass('active');
  $('a.nav-link.first').addClass('inactive');
  $('a.nav-link.third.active').removeClass('active');
  $('a.nav-link.third').addClass('inactive');
  $('.tab-pane.fade.in.first.active.show').removeClass('active');
  $('.tab-pane.fade.in.first.show').removeClass('show');
  $('.tab-pane.fade.third.active.show').removeClass('active');
  $('.tab-pane.fade.third.show').removeClass('show');
  $('.tab-pane.fade.second').addClass('active');
  $('.tab-pane.fade.second.active').addClass('show');
  $(this).addClass('active');
  $(this).removeClass('inactive');
});  
$('a.nav-link.third').on('click', function() {
  $('a.nav-link.second.active').removeClass('active');
  $('a.nav-link.second').addClass('inactive');
  $('a.nav-link.first.active').removeClass('active');
  $('a.nav-link.first').addClass('inactive');
  $('.tab-pane.fade.in.first.active.show').removeClass('active');
  $('.tab-pane.fade.in.first.show').removeClass('show');
  $('.tab-pane.fade.second.active.show').removeClass('active');
  $('.tab-pane.fade.second.show').removeClass('show');
  $('.tab-pane.fade.third').addClass('active');
  $('.tab-pane.fade.third.active').addClass('show');
  $(this).addClass('active');
  $(this).removeClass('inactive');
});

$('a.nav-link.first,a.nav-link.second,a.nav-link.third').mouseover(function() {
  $(this).addClass('shadow-inset-center');
});
$('a.nav-link.first,a.nav-link.second,a.nav-link.third').mouseout(function() {
  $(this).removeClass('shadow-inset-center');
});

let flag = 0;
$('.close,.message-box').on('click',function(){
  // $('.thumb-wrapper').on('click'),function(){
  // }
  // $('#container').lockscroll(false);

    $('.nav-bar').css('opacity','1');
    $('section').css('opacity','1');
     setTimeout(function() {
      $('.message-box').css('display','none');
    }, 1000);
    $('.message-box').css("transform","translate(0,-73vh)");
 
})
$('.thumb-wrapper').on('click',function(){
  // $('#container').lockscroll(true);
  $('.nav-bar').css('opacity','0.5');
  $('section').css('opacity','0.5');
  $('.message-box').css('display','flex');
  $('.message-box').css('opacity','1');
  
  setTimeout(function() {
    $('.message-box').css("transform","translate(0,73vh)");
  }, 100);
})
  

//  $('.thumb-wrapper').on('click',function(){
//   swal("Hello world!");
//  });

//  var name = "John Doe";
// var bio = "Software developer with 5 years of experience";
// var imgUrl = "https://example.com/images/johndoe.jpg";

// document.getElementsByClassName("thumb-wrapper")[0].addEventListener("click", function(){
//   var message = "<img src='" + imgUrl + "' alt='" + name + "'>";
//   message += "<br>Name: " + name + "<br>Bio: " + bio;

//   document.getElementById("messageBox").innerHTML = message;
//   alert(document.getElementById("messageBox").innerHTML);
// });


