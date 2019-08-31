
LoginUser();

function LoginUser(){


$.get("http://localhost:3000/registered", function(data) {
  console.log(data[3].email);
});





}



function RegisterUser(){

    var form;

form.onsubmit = function (e) {
  // stop the regular form submission
  e.preventDefault();

  // collect the form data while iterating over the inputs
 
  var data = {};


  for (var i = 1; i < form.length; ++i) {
    var input = form[i];
    if (input.name) {
      data[input.name] = input.value;
    }
  }


post(form.action,data);


};

}
