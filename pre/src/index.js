function init() {
      window.onload = setInterval(function() {
            localStorage.setItem("version", '0.0.1')
            let hour = new Date().getHours();
            let minute = new Date().getMinutes();
            if(minute<10) {
                  minute = `0${minute}`;
            }
            let status;
            let ampm;
            if(0<=hour&&hour<12) {
                  status = "Good morning";
                  ampm = "AM";
            } else if(12<=hour&&hour<17) {
                  status = "Good afternoon";
                  ampm = "PM";
            } else if(17<=hour&&hour<=23) {
                  status = "Good evening";
                  ampm = "PM";
            } else {
                  status = "Hello"
                  ampm = null;
            }
            let name = localStorage.getItem("name");
            if(name==null) {
                  name = window.prompt("What's your name?");
                  localStorage.setItem("name",name);
            }
            if(name=="null") {
                  name = "user";
                  document.getElementById("greeter").innerHTML = `${status}`;
            } else {
                  document.getElementById("greeter").innerHTML = `${status}, ${name}`;
            }
            if(hour>12) {
                  hour = hour-12;
            }
            if(hour===0) {
                  hour = 12;
            }
            let time = `It is currently ${hour}:${minute} ${ampm}.`;
            document.getElementById("time").innerHTML = time;
      }, 1);
}
init();