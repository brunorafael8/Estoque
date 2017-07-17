<template>
	<div> 
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Valor</th>
					<th>Descrição</th>
					<th>Quantidade</th>
				</tr>
			</thead>
			<tbody>
				<tr :key="produtos.id" v-for="produto of produtos" class="">
					<td>{{ produto.nome }}</td>
					<td>{{ produto.valor }}</td>
					<td>{{ produto.descricao }}</td>
					<td>{{ produto.quantidade }}</td>
					<td> 
						<a :href="`/produtos/mostra/${produto.id}`">
							<span class="glyphicon glyphicon-search"></span>
						</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
</template>

<script>
		export default {
			data () {
				return {
					produtos: []
				}
			},
			mounted () {
				axios.get('/produtos/json').then(produtos => {
						this.produtos = produtos.data;
				});
			}
		}
</script>
<style> 

</style>
