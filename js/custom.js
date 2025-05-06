
// nav menu style
var nav = $("#navbarSupportedContent");
var btn = $(".custom_menu-btn");
btn.click
btn.click(function (e) {

    e.preventDefault();
    nav.toggleClass("lg_nav-toggle");
    document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
});


function getCurrentYear() {
    var d = new Date();
    var currentYear = d.getFullYear()

    $("#displayDate").html(currentYear);
}
function clock(){
	var date= new Date();
	let seconds= date.getSeconds();
	let minutes=date.getMinutes();
	let hour=date.getHours();
	let year=date.getFullYear();
	let month=date.getMonth();
	let day=date.getDate();


document.getElementById("clock").innerHTML=year+"."+month+"."+day+" "+hour+":"+minutes+":"+seconds;

	setInterval(clock,1000);
}
clock();

getCurrentYear();
