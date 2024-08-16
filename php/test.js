const form = document.getElementById('form');
const username = document.getElementById('username');

form.addEventListener('submit', (e) => {
  e.preventDefault();

  checkInputs();
})

function checkInputs(){
  //get input
  const usernameValue = username.value.trim();

  if(usernameValue === ''){
    //show error
    setErrorFor(username, "username cannot be blank");
  }
  else{
    //add success 
    setSuccessFor(username);
  }
}

function setErrorFor(input, message){
  const formControl = input.parentElement;
  const small = formControl.querySelector('small');

  small.innerText = message;
}

