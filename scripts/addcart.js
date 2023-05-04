function cartAdd(product_id,price,numberOfproduct){
	
	// ;
    $.ajax({
       type: "POST",
       url: 'do_cart.php',
       data: "productid="+product_id+"&numberofprod="+numberOfproduct+"&price="+price,
       success:  function(data)
       {
          if (data.trim() === 'success') { 
			do_cartNo();
		    do_dotal();
          }
          else {
		  console.log(data);
			
          }
       }
   });
	}
function do_dotal(){
	
	$.ajax({
       type: "POST",
       url: 'getTotal.php',
       success:  function(data)
       {
          if (data.trim() === 'success') { 
			document.getElementById("total").innerHTML="ZMK"+data;
			document.getElementById("cartTotal").innerHTML="ZMK"+data;
          }
          else {
		 
		  document.getElementById("total").innerHTML="ZMK"+data;
		  document.getElementById("cartTotal").innerHTML="ZMK"+data;
          }
       }
   });

}
function do_cartNo(){
	
	$.ajax({
       type: "POST",
       url: 'getCart_no.php',
       success:  function(data1)
       {
          if (data1.trim() === 'success') { 
			document.getElementById("cart_number").innerHTML=data1;
			document.getElementById("cartQuanity").innerHTML=data1;
          }
          else {
		  
		  document.getElementById("cart_number").innerHTML=data1;
		  document.getElementById("cartQuanity").innerHTML=data1;
          }
       }
   });

}
function recalculateCart(product_id,cell){
	console.log("woring");
	var numberofproduct=cell.value;
	
	$.ajax({
       type: "POST",
       url: 'recalculate.php',
	   data:"product_id="+product_id+"&number="+numberofproduct,
       success:  function(data1)
       {
          if (data1.trim() === 'success') { 
			var table = document.getElementById ("summerytable");
          location.reload();
          }
          else {
		  
		  var table = document.getElementById ("summerytable");
		  //load("#summerytable");
           location.reload();
		   //table.load("product_summery.php");
		   //console.log(data1);
          }
       }
   });
	
	
}
function deliveryAdress(){
	var e = document.getElementById ("currentAddress");
	var address= e.options[e.selectedIndex].value;
	$.ajax({
       type: "POST",
       url: 'do_getAddress.php',
	   data:"currentAddress="+address,
       success:  function(data1)
       {	  
    document.getElementById("deliveryAddress").innerHTML=data1;
		  
          
       }
   });

}

