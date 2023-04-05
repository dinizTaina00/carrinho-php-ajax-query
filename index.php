
<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/style.css">
</head>
<script src="jquery.js"></script>
<script src="carrinho.js"></script>
<body>
	<header>
		<h2 class="text-center">Carrinho com PHP JQUERY AJAX</h2>
	</header>

	<hr style="opacity: 0">

	<div class="produtos justify-center">
		<?php
			$produtos = Mysql::conectar()->prepare("SELECT * FROM items");
			$produtos->execute();
			foreach ($produtos as $key => $produto) {
			?>
				<div class="produto-card">
					<form>
						<img src="images/<?= $produto['image']; ?>">
						<p><?= $produto['name']; ?></p>
						<p>R$<?= $produto['price']; ?></p>
						
						<input type="number" name="qtd" id="qtd_<?= $produto['id']; ?>" value="1" style="width: 50px">
						<input type="button" id="add_<?= $produto['id']; ?>" value="Adiconar ao carrinho" onClick="cartAction('add','<?= $produto['id']; ?>', '<?= $produto['name']; ?>', '<?= $produto['price']; ?>')">
					</form>
				</div>
			<?php
			}
		?>
	</div>

	<div class="carrinho">
		<div id="carrinho-itens">
			<?php 
				include('carrinho.php');
			?>	

		</div>
		<div class="text-center"><button id="btn_LimparCarrinho" onclick="cartAction('empty','');">Limpar carrinho</button></div>
	</div>
</body>
</html>