window.onload = setInterval(function(){
      let hour = new Date().getHours();
      let minute = new Date().getMinutes();
      if(minute<10){
            minute = `0${minute}`;
      }
      if(hour>12){
            hour = hour-12;
      }
      if(hour===0){
            hour = 12;
      }
      let time = `${hour}:${minute}`;
      let name = localStorage.getItem("name");
      document.getElementById("header").innerHTML = `${name} - ${hour}:${minute}`;
},1);