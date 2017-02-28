<?php require_once("include/cabecalho.php"); ?>
<main>
	<h1>Lojas</h1>
	<div class="container">
		<section class="categorias categoriasGastronomia">
			<h3>Categorias</h3>
			<form action="" method="GET">
				<input type="search" name="busca" placeholder="Realize a busca aqui!" class="campoPesquisa">
			</form>
			<ul>
				<li><a href="#">Acessórios (2)</a></li>
				<li><a href="#">Artigos Esportivos (5)</a></li>
				<li><a href="#">Banco (3)</a></li>
				<li><a href="#">Calçados (2)</a></li>
				<li><a href="#">Farmácia (2)</a></li>
				<li><a href="#">Games e Acessórios (1)</a></li>
				<li><a href="#">Livraria (5)</a></li>
				<li><a href="#">Ótica (1)</a></li>
				<li><a href="#">Papelaria (3)</a></li>
				<li><a href="#">Supermercado (1)</a></li>
				<li><a href="#">Vesturário (8)</a></li>
			</ul>
		</section>
		<section class="painel_itens">
			<ul class="itemPainel">
				<li>
					<h4><a href="#">Le Postiche</a></h4>
					<ul>
						<li>As melhores mochilas, bolsas e acessórios</li>
						<li>
							<span class="categoriaItem">Acessórios</span>
						</li>
						<li>L2, Loja 2109</li>
					</ul>
				</li>
			</ul>
			<ul class="itemPainel">
				<li>
					<h4><a href="#">Adidas</a></h4>
					<ul>
						<li>Artigos esportivos em geral, para todas as modalidades</li>
						<li>
							<span class="categoriaItem">Artigos Esportivos</span>
						</li>
						<li>L2, Loja 2106</li>
					</ul>
				</li>
			</ul>
			<ul class="itemPainel">
				<li>
					<h4><a href="#">Bradesco</a></h4>
					<ul>
						<li>Realize operações bancárias em nossos caixas eletrônicos</li>
						<li>
							<span class="categoriaItem">Bancos</span>
						</li>
						<li>L2, Loja 2110</li>
					</ul>
				</li>
			</ul>
			<ul class="itemPainel">
				<li>
					<h4><a href="#">Saraiva</a></h4>
					<ul>
						<li>Os melhores livros, CDs, DVDs e novidades encontram-se aqui</li>
						<li>
							<span class="categoriaItem">Livraria</span>
						</li>
						<li>L1, Loja 150</li>
					</ul>
				</li>
			</ul>
		</section>
	</div>
</main>
<?php require_once("include/rodape.php"); ?>