function stick(){
    var d = new Date().toLocaleTimeString();
    document.getElementById('time_now').innerHTML = d;
}
setInterval(stick, 1000);
var d = new Date();
var getDay = d.getDate();
document.getElementById('getDay').innerHTML = getDay;
var getYear = d.getFullYear();
document.getElementById('getYear').innerHTML = getYear;
var getDateWeek = [
	"Chủ Nhật",
	"Thứ Hai",
	"Thứ Ba",
	"Thứ Tư",
	"Thứ Năm",
	"Thứ Sáu",
	"Thứ Bảy",
]
var getWeek = getDateWeek[d.getDay()];
document.getElementById('getWeek').innerHTML = getWeek;
var months = [
		"Tháng 1",
		"Tháng 2",
		"Tháng 3",
		"Tháng 4",
		"Tháng 5",
		"Tháng 6",
		"Tháng 7",
		"Tháng 8",
		"Tháng 9",
		"Tháng 10",
		"Tháng 11",
		"Tháng 12"
	]
var monthToday = months[d.getMonth()]
document.getElementById('getMonth').innerHTML = monthToday;