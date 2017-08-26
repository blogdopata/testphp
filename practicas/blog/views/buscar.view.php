

<?php require 'views/header.php'; ?>

<div class="contenedor">
<h2><?php echo $titulo; ?></h2>
<?php foreach ($resultados as $post): ?>
	<div class="post">
		<article>
			<h2 class="titulo"><a href="single.php?id=<?php echo $post['id'] ;?>"><?php echo $post['titulo']; ?></a></h2>
			<p class="fecha"><?php echo fecha($post['fecha'] );?></p>
			<div class="thumb">
				<a href="single.php?id=<?php echo $post['id']; ?>"><img src="<?php echo RUTA;?>/imagenes/<?php echo $post['thumb'] ?>" alt=""></a>
			<p class="extracto"><?php echo $post['extracto']; ?></p>
			<a href="#" class="continuar">Continuar leyendo</a>

			</div>

		</article>
	</div>
	
<?php endforeach ?>


 
	
	<?php require 'paginacion.php'; ?>
</div>

<?php require 'views/footer.php'; ?>
	
</body>
</html>