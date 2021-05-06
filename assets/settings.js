function changeName() {
      let name = window.prompt("What's your name?");
      localStorage.setItem("name", name);
}