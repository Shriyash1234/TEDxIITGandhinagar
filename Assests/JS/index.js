window.onload =()=>{
  const vw = window.innerWidth;
  if(vw<768){
    $('.a-speakers').attr('href','index.html#phone-speakers')
  }
}
window.onresize =()=>{
  const vw = window.innerWidth;
  if(vw<768){
    $('.a-speakers').attr('href','index.html#phone-speakers')
  }
  else{
    $('.a-speakers').attr('href','index.html#speakers')
  }
}

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

$('.close,.message-box').on('click',function(){
    $('.nav-bar').css('opacity','1');
    $('section').css('opacity','1');
     setTimeout(function() {
      $('.message-box.first-speaker').css('display','none');
    }, 1000);
    $('.message-box.first-speaker').css("transform","translate(0,-73vh)");
 
})
var list = ['.first','.second','.third','.fourth','.fifth','.sixth'];
for(let i=0;i<6;i++){

  $(list[i]+'-close,.message-box').on('click',function(){
    $('.nav-bar').css('opacity','1');
    $('section').css('opacity','1');
     setTimeout(function() {
      $('.message-box'+list[i]+'-speaker').css('display','none');
    }, 100);
    $('.message-box'+list[i]+'-speaker').css("transform","translate(0,-73vh)");
  })

  $(list[i]+'-speaker-profile').on('click',function(){
    $('.nav-bar').css('opacity','0.5');
    $('section').css('opacity','0.5');
    $('.message-box'+list[i]+'-speaker').css('display','flex');
    $('.message-box'+list[i]+'-speaker').css('opacity','1');
    
    setTimeout(function() {
      $(list[i]+'-speaker').css("transform","translate(0,73vh)");
    }, 100);
  })
}
// $(a).on('click',function(){
//   // $('#container').lockscroll(true);
//   $('.nav-bar').css('opacity','0.5');
//   $('section').css('opacity','0.5');
//   $('.message-box.first-speaker').css('display','flex');
//   $('.message-box.first-speaker').css('opacity','1');
  
//   setTimeout(function() {
//     $('.first-speaker').css("transform","translate(0,73vh)");
//   }, 100);
// })
$('.second-speaker-profile').on('click',function(){
  // $('#container').lockscroll(true);
  $('.nav-bar').css('opacity','0.5');
  $('section').css('opacity','0.5');
  $('.message-box.second-speaker').css('display','flex');
  $('.message-box.second-speaker').css('opacity','1');
  
  setTimeout(function() {
    $('.second-speaker').css("transform","translate(0,73vh)");
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


