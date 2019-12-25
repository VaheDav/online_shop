$(document).ready(function(){
	$(".add").click(function(){
		let id=$(this).parents('tr').attr("id");
		// alert(id);
		$.ajax({
			url:"add_to_card.php",
			type:"post",
			data:{id:id,action:'add'},
			success: function(answer){
				// location.reload()
				//alert(answer)
			}
		})
	})

	$(".quant").change(function(){
		let id=$(this).attr("id");
		let val =$(this).val();

		$.ajax({
			url:"add_to_card.php",
			type:"post",
			data:{id:id,val:val,action:'update'},
			success: function(answer){
				location.reload()
			}
		})
	})
})

