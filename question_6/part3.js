function myDigitalClock() {
    var d1 = new Date();
    var hours = d1.getHours(); // 0 - 23
    var minutes = d1.getMinutes(); // 0 - 59
    var seconds = d1.getSeconds(); // 0 - 59
    var zone = "AM";

    // Convert hours to 12-hour format and determine AM/PM
    if (hours >= 12) {
        zone = "PM";
        if (hours > 12) {
            hours -= 12;
        }
    }

    // Add leading zeros to minutes and seconds if they're single digits
    minutes = (minutes < 10) ? "0" + minutes : minutes;
    seconds = (seconds < 10) ? "0" + seconds : seconds;

    // Create the digital clock display
    var digitalClock = hours + ":" + minutes + ":" + seconds + " " + zone;

    console.log(digitalClock);

    // Update the clock every 1 second (1000 milliseconds)
    setTimeout(myDigitalClock, 1000);
}

myDigitalClock();
