<?php 
	include('config.php');

	if (!empty($_POST['action'])) {
		switch ($_POST['action']) {
			case 'add':
				if (!empty($_POST['qtd'])) {
					$id = $_POST['id'];
					$nome = $_POST['nome'];
					$preco = $_POST['preco'];

					$carrinho = array('id'=>$id,'nome'=>$nome,'preco'=>$preco,'qtd'=>$_POST['qtd']);

					if(isset($_SESSION['carrinho'])){
						if (isset($_SESSION['carrinho'][$id])) {
							$_SESSION['carrinho'][$id]["qtd"] += $_POST['qtd'];
						} else{
							$_SESSION['carrinho'][$id] = $carrinho;
						}
					} else{
						$_SESSION['carrinho'][$id] = $carrinho;
					}
				}
				break;
			case 'empty':
				unset($_SESSION['carrinho']);
				break;
			
			default:
				// code...
				break;
		}
	}

include('carrinho.php');

?>	