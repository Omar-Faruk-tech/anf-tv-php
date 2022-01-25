
const userName = document.getElementById('username-input');
const password = document.getElementById('password-input');
const submit = document.getElementById('login-button')


function getDetails(e) {
  e.preventDefault();
  const login = {
    userName: userName.value,
    password: password.value
  };
  return login
};

function submitlogin(e){
  var data = getDetails(e)
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function(){
  if(this.readyState == 4 && this.status == 200){
          console.log("success");
  } else if (this.readyState == 4 && this.status == 401) {
          console.log("Failed");
  }
  };
  xhttp.open("POST","https://localhost:3000/users/sign-in", true);
  xhttp.setRequestHeader("Content-type", "application/json");
  xhttp.send(JSON.stringify(data));
  }

  // url: 'https://crossorigin.me/https://anf-tv.herokuapp.com/users/sign-in',

        // headers: {
              //   'Content-Type': 'application/json'
              // },