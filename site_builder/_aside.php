<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
	<div class="brand flex-column-auto" id="kt_brand">
			<img alt="Logo" class="brand-logo max-h-40px" src="../assets/media/logos/logo_load.png" />
	</div>
	<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
		<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
			<?php if ($userData[0]['access'] == 0) { ?>
				<ul class="menu-nav">
					<li class="menu-section">
						<h4 class="menu-text">Vistas</h4>
						<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
					</li>

					<li class="menu-item" aria-haspopup="true">
						<a href="?page=courses" class="menu-link">
							<span class="menu-text">Cursos</span>
						</a>
					</li>

					<li class="menu-item" aria-haspopup="true">
						<a href="?page=banner" class="menu-link">
							<span class="menu-text">Banner</span>
						</a>
					</li>

					<li class="menu-item" aria-haspopup="true">
						<a href="?page=reviews" class="menu-link">
							<span class="menu-text">Reviews</span>
						</a>
					</li>

					<li class="menu-item" aria-haspopup="true">
						<a href="?page=certificaciones" class="menu-link">
							<span class="menu-text">Certificaciones</span>
						</a>
					</li>

					<li class="menu-item" aria-haspopup="true">
						<a href="?page=componentes" class="menu-link">
							<span class="menu-text">Componentes</span>
						</a>
					</li>

					<li class="menu-item" aria-haspopup="true">
						<a href="?page=footer" class="menu-link">
							<span class="menu-text">Footer</span>
						</a>
					</li>

					<li class="menu-item" aria-haspopup="true">
						<a href="?page=institucional" class="menu-link">
							<span class="menu-text">Institucional</span>
						</a>
					</li>

					<li class="menu-item" aria-haspopup="true">
						<a href="?page=main" class="menu-link">
							<span class="menu-text">Principal</span>
						</a>
					</li>

					<li class="menu-item" aria-haspopup="true">
						<a href="?page=navbar" class="menu-link">
							<span class="menu-text">Navbar</span>
						</a>
					</li>

					<li class="menu-item" aria-haspopup="true">
						<a href="?page=escuelas" class="menu-link">
							<span class="menu-text">Escuelas</span>
						</a>
					</li>

				<?php } ?>
					<li class="menu-item" aria-haspopup="true">
						<a href="../index.php" class="menu-link">
							<span class="menu-text">Volver a CRM</span>
						</a>
					</li>
				</ul>
		</div>
	</div>
</div>