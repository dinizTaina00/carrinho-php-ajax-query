
<?php
if (isset($_SESSION['carrinho'])) {
	$total_itens = 0;
?>
<table style="display: flex; justify-content: center;">
<tbody>
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Quantidade</th>
		<th>Preço</th>
		<th>Ação</th>
	</tr>
	<?php
	foreach ($_SESSION['carrinho'] as $item) {
	?>
		<tr>
			<td><?= $item['id']; ?></td>
			<td><?= $item['nome']; ?></td>
			<td><?= $item['qtd']; ?></td>
			<td><?= $item['preco']; ?></td>

		</tr>
	<?php
	$total_itens += ($item['preco']*$item['qtd']);
	}
	?>
	<tr>
		<td colspan="4">Total: R$ <?= $total_itens; ?></td>
	</tr>
</tbody>
</table>

<?php } ?>