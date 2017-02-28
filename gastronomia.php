<?php require_once("include/cabecalho.php"); ?>
<main>
	<h1>Gastronomia</h1>
	<div class="container">
		<section class="categorias categoriasGastronomia">
			<h3>Categorias</h3>
			<form action="" method="GET">
				<input type="search" name="busca" placeholder="Realize a busca aqui!" class="campoPesquisa">
			</form>
			<ul>
				<li><a href="#">Cafeteria (2)</a></li>
				<li><a href="#">Contemporâneo (5)</a></li>
				<li><a href="#">Doces e Sobremesas (3)</a></li>
				<li><a href="#">Fast-Food (20)</a></li>
				<li><a href="#">Hamburgueria (2)</a></li>
				<li><a href="#">Italiana (3)</a></li>
				<li><a href="#">Pizzaria (5)</a></li>
				<li><a href="#">Oriental (1)</a></li>
				<li><a href="#">Saudável (3)</a></li>
				<li><a href="#">Self-service(1)</a></li>
				<li><a href="#">Sorveteria (8)</a></li>
			</ul>
		</section>
		<section class="painel_itens">
			<ul class="itemPainel">
				<li>
					<h4><a href="#">Amor aos Pedaços</a></h4>
					<ul>
						<li>Os melhores bolos e doces, cortado em vários pedaços</li>
						<li>
							<span class="categoriaItem">Doces e Sobremesas</span>
						</li>
						<li>L2, Loja 2109</li>
					</ul>
				</li>
			</ul>
			<ul class="itemPainel">
				<li>
					<h4><a href="#">Baked Potato</a></h4>
					<ul>
						<li>Batatas gourmet, com todas as combinações possíveis</li>
						<li>
							<span class="categoriaItem">Fast-food</span>
						</li>
						<li>L2, Loja 2106</li>
					</ul>
				</li>
			</ul>
			<ul class="itemPainel">
				<li>
					<h4><a href="#">Burger King</a></h4>
					<ul>
						<li>O concorrente mais forte do Mc Donald's</li>
						<li>
							<span class="categoriaItem">Fast-food</span>
						</li>
						<li>L2, Loja 2110</li>
					</ul>
				</li>
			</ul>
			<ul class="itemPainel">
				<li>
					<h4><a href="#">Café do Ponto</a></h4>
					<ul>
						<li>Cafés, doces, salgados e variedades</li>
						<li>
							<span class="categoriaItem">Cafeteria</span>
						</li>
						<li>L1, Loja 150</li>
					</ul>
				</li>
			</ul>
		</section>
	</div>
</main>
<?php require_once("include/rodape.php"); ?>