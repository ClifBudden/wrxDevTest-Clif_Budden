var currentTime = new Date()
var hours = currentTime.getHours()
var minutes = currentTime.getMinutes()
var seconds = currentTime.getSeconds()
if (seconds < 10){
seconds = "0" + seconds
}
if (minutes < 10){
minutes = "0" + minutes
}
document.write(hours + ":" + minutes + ":" + seconds + " ")
if(hours > 11){
document.write("PM")
} else {
document.write("AM")
}
document.write("<br>")