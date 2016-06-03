	<footer id="footer" role="contentinfo">
		<div class="footer-content">
			<div class="container">
				<div class="row main">
					<div class="col-md-6 produtos clearfix">
						<strong>Produtos Mega Moto Peças</strong><br><br>
						<ul>
							<li><a href="<?php echo home_url( '/' )."categoria/acessorios"; ?>">Acessórios</a></li>
							<li><a href="<?php echo home_url( '/' )."categoria/motos-nacionais"; ?>">Motos Nacionais</a></li>
							<li><a href="<?php echo home_url( '/' )."categoria/motos-importadas"; ?>">Motos Importadas</a></li>
							<li><a href="<?php echo home_url( '/' )."categoria/motor-completo"; ?>">Motor Completo</a></li>
							<li><a href="<?php echo home_url( '/' )."categoria/koso"; ?>">Koso</a></li>
							<li><a href="<?php echo home_url( '/' )."categoria/juntas-para-motores"; ?>">Juntas para Motores</a></li>
						</ul>									
																
					</div>
					<div class="col-md-3">
						<strong>Sobre a Mega Moto Peças</strong><br><br>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' )."sobre" ); ?>">Institucional</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."politica-de-privacidade" ); ?>">Política de Privacidade</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."troca-e-devolucao" ); ?>">Troca e Devolução</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."contato" ); ?>">Fale Conosco</a></li>
						</ul>	
					</div>
					<div class="col-md-3">
						<strong>Nossas Redes Sociais</strong><br><br>
						<ul class="redes_sociais_bot">
							<li class="youtube"><a target="_blank" href="#"></a></li>
							<li class="instagram"><a target="_blank" href="#"></a></li>
							<li class="twitter"><a target="_blank" href="#"></a></li>
							<li class="facebook"><a target="_blank" href="#"></a></li>
						</ul>
					</div>
				</div><!-- .row -->
				<div class="row outros">
					<div class="col-md-9">
						<strong>Formas de Pagamento</strong><br><br>
						<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/footer-pgto.png"?>" />
					</div>
					<div class="col-md-3">
						<strong>Televendas</strong><br><br>
						<p class="tel-bot">
							11 1234-5678 <br>
							11 1234-5678
						</p>
					</div>
				</div>
			</div><!-- .container -->			
		</div>
		<div class="copyrino">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						&copy; Copyright <?php echo date('Y') ?> - Mega Moto Peças | <a target="_blank" href="http://agenciarino.com.br/">Site desenvolvido pela Agência Rino.</a>
					</div>
					<div class="col-md-2">
						<a target="_blank" href="http://agenciarino.com.br/"><img class="anima-rino" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/footer-rino.png"?>" /></a>	
					</div>
				</div>	
			</div>	
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

