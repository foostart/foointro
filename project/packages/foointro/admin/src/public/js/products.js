$(document).ready(function(){
	let searchParams = new URLSearchParams(window.location.search);
	// let param = searchParams.get('sent');
	if(!searchParams.has('id')){
		var default_value = $('#product_parent').prop("selectedIndex",0);
		rootProducts(default_value.val());
	}
	// console.log(searchParams.has('id'));
	// console.log(default_value.val());
	$("#product_parent").on("change",function(){
		var value = $("#product_parent").val();
		// debugger;
		rootProducts(value);
	});

	function rootProducts(value){
		// debugger;
		$.ajax({
			dataType: "json",
			url:"/admin/product/edit/get_data",
			data: {
				key: value
			},
			beforeSend: function() {
			},
			success: function(data){
				var child_product = $('#product_child');
				child_product.empty();
				s = "";
				$.each(data, function(index, element){
					// console.log(index);
					// console.log(element);
					s += '<option value="'+ index +'">'+ element +'</option>'
				});

				// console.log(data);
				if(s != ""){
					child_product.append(s);
				}
			}
		});
	}
});