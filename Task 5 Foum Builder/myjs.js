function getdropvalue(id){

var e = document.getElementById(id);
var a = e.options[e.selectedIndex].value;
return a;
}

function getvalue(id){

	var a = document.getElementById(id).value;
	return a;

}




function createForum(){

var value1 = getvalue('create');
var value2 = getdropvalue('drop');
var value3 = getvalue('txtname');


	if(value1 == "a"){


// create functions for same code and pass variables for checking the values.


		if(value2=="b"){

			var input = document.createElement("H3");
			input.innerHTML = value3+":";
			var parent = document.getElementById("showing");
			parent.appendChild(input);	


			var input = document.createElement("input");
			input.setAttribute('type', 'text');
			input.setAttribute('class', 'form-control col-md-12');
			var parent = document.getElementById("showing");
			parent.appendChild(input);

		}

		if(value2=="c"){
		
			var input = document.createElement("BUTTON");
			input.setAttribute('class', 'btn btn-primary col-md-12');

			input.innerHTML = value3; 

			var parent = document.getElementById("showing");
			parent.appendChild(input);
			
		}
		if(value2=="d"){


			var number = prompt("How Many Radio Buttons You Want");


			var input = document.createElement("H3");
			input.innerHTML = value3+": ";
			var parent = document.getElementById("showing");
			parent.appendChild(input);
			
			for (var i = 1; i <= number; i++) {
			
			var number1 = prompt("Type Name for " + i + " value");
	

			var input = document.createElement("H5");
			input.innerHTML = number1+":";
			var parent = document.getElementById("showing");
			parent.appendChild(input);

			var input = document.createElement("input");
			input.setAttribute('type', 'radio');
			input.setAttribute('name', value3);
			input.setAttribute('class', ' col-md-1 optradio');
			var parent = document.getElementById("showing");
			parent.appendChild(input);
			}


		}
		if(value2=="e"){


			var number = prompt("How Many Check Buttons You Want");


			var input = document.createElement("H3");
			input.innerHTML = value3+": ";
			var parent = document.getElementById("showing");
			parent.appendChild(input);
			
			for (var i = 1; i <= number; i++) {
			
			var number1 = prompt("Type Name for " + i + " value");
	

			var input = document.createElement("H5");
			input.innerHTML = number1+":";
			var parent = document.getElementById("showing");
			parent.appendChild(input);

			var input = document.createElement("input");
			input.setAttribute('type', 'checkbox');
			input.setAttribute('name', value3);
			input.setAttribute('class', ' col-md-1 checkbox');
			var parent = document.getElementById("showing");
			parent.appendChild(input);
			}



			
		}

		if(value2=="f"){

			var input = document.createElement("H3");
			input.innerHTML = value3+":";
			var parent = document.getElementById("showing");
			parent.appendChild(input);	


			var input = document.createElement("input");
			input.setAttribute('type', 'email');
			input.setAttribute('class', 'form-control col-md-12');
			var parent = document.getElementById("showing");
			parent.appendChild(input);	
		}
	}
}


	document.getElementById("savejson").onclick = function(){
		 var data = document.getElementById("showing").innerHTML;
		 var json = JSON.stringify(data);
		 localStorage.setItem('data', json);
	}

	document.getElementById("loadjson").onclick = function() {
		var json = localStorage.getItem('data');
		var data = JSON.parse(json);
		document.getElementById("showing").innerHTML = data;
	}
