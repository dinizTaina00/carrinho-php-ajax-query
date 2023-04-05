
	function cartAction(action, produto_id, nome, preco){
		var query = "";
		if(action != ""){
			switch(action){
			case "add":
				query = 'action='+action+'&id='+produto_id+'&nome='+nome+'&preco='+preco+'&qtd='+$("#qtd_"+produto_id).val();
				break;
			case "empty":
				query = 'action='+action;
				break
			}
		}
		$.ajax({
			url: "ajax_action.php",
			data:query,
			type: "POST",
			success:function(data){
				$('#carrinho-itens').html(data);
			},
			error:function(){}
		});
	}