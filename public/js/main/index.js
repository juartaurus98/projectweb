function Login() {
	var user = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  console.log(user, password);
  if (user =="") {
      document.getElementById("error-pass").innerHTML="bạn chưa nhập tài khoản ";
    } else if(password==""){
      document.getElementById("error-pass").innerHTML="bạn chưa nhập mật khẩu ";
    } 
    else if(user=="admin" && password=="admin") {
    location.href="/home";
  } else{
    document.getElementById("error-pass").innerHTML="Sai tài khoản hoặc mật khẩu";
  }
}

function Registrate(){
    var new
}
jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});
   
});