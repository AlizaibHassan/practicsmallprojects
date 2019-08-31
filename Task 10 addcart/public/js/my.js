var counter=0;

function clickcart(id) {
alert("AZ");
counter++;

	$.ajax({
	        url: 'http://localhost/Nextbridge/Task1-cart/model/cart.php',
	        type: 'POST',
	        data: {
	            id: id,
	            count: counter
	        },
	        success:function(d)
	        {

	        	//$("#addToCart").html("Items:"+d[0]);	        
	        	/* $("#showcart").html("Items:"+d[0]);*/
	        	console.log(d);
	        }
	    })


}

