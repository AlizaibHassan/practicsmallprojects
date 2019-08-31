
function getPost(){
	fetch('https://jsonplaceholder.typicode.com/photos')
	.then((res)=>{

return res.json();
	})

	.then((post)=>{
		for (let index =0; index < 8;index++) {
			document.getElementById("cardDiv").innerHTML+= `
				<div class="card col-md-3">
				 <img class="card-img-top" src="${post[index].thumbnailUrl}">
				<div class="card-body">
						<h5 class="card-title">${post[index].id}</h5>
						<p class="card-text">${post[index].title}</p>
					</div>
								<button id="delete">X</button>

				</div>

			`

		}

	})
	.catch((error)=>{
		console.log(error);
	})

}

var con = 0;

function getComments(){
	fetch('https://jsonplaceholder.typicode.com/comments')
	.then((res)=>{

return res.json();
	})

	.then((post)=>{
		for (let index =0; index < 4;index++) {

			document.getElementById("cardDiv").innerHTML+= `
				<div class="card col-md-3">
				<h2 class="card-title">${post[index].name}</h5>
				<div class="card-body">
						<h5 class="card-title">${post[index].email}</h5>
						<p class="card-text">${post[index].body}</p>
					</div>
				
				<button id="delete">X</button>

				</div>
				
			`


		}

	})
	.catch((error)=>{
		console.log(error);
	})


}


function deleteonline(){
//alert("Step 1");


$.ajax({
    url: 'https://jsonplaceholder.typicode.com/posts/1',
    method: 'DELETE',
    contentType: 'application/json',
    success: function(result) {
    

 		 $(this).parent().css("display", "none");

        // handle success
    },
    error: function(request,msg,error) {
        // handle failure
    }
});


}
	

function postingdata(){

    var form;

form.onsubmit = function (e) {
  // stop the regular form submission
  e.preventDefault();

  // collect the form data while iterating over the inputs
 
  var data = {};

  for (var i = 0, i < form.length; ++i) {
    var input = form[i];
    if (input.name) {
      data[input.name] = input.value;
    }
  }


post(form.action,data);

put(form.action,data)


};

}





