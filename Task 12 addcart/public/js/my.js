var counter=0;

function clickcart(id) {
counter++;

	$.ajax({
	        url: 'http://localhost:8888/managecart.php',
	        type: 'POST',
	        data: {
	            id: id,
	            count: counter
	        },
	        success:function(d)
	        {
	        	$("#addToCart").html("Cart Items "+d);	        
	        	/* $("#showcart").html("Items:"+d[0]);*/
	        	console.log(d);
	        }
	    })


}

function changeDisplay(){

	$("#carted").css("display", "block");


}
