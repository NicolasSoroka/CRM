<!--begin::Aside-->
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
	<div class="brand flex-column-auto" id="kt_brand">
			<img alt="Logo" class="brand-logo max-h-40px" src="../assets/media/logos/logo_load.png" />
	</div>
	<!--begin::Aside Menu-->
	<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
		<!--begin::Menu Container-->
		<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">

			<?php if ($userData[0]['access'] == 0) { ?>
				<!--begin::Menu Nav ADM-->
				<ul class="menu-nav">
					<li class="menu-section">
						<h4 class="menu-text">Vistas</h4>
						<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
					</li>
					<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
						<a href="javascript:;" class="menu-link menu-toggle">
							<span class="menu-text">Aca iria el tema de agregar/editar/eliminar un curso</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="menu-submenu">
							<i class="menu-arrow"></i>
							<ul class="menu-subnav">
								<li class="menu-item menu-item-parent" aria-haspopup="true">
									<span class="menu-link">
										<span class="menu-text"></span>
									</span>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="?page=leads/_new-lead" class="menu-link">
										<i class="menu-bullet menu-bullet-line">
											<span></span>
										</i>
										<span class="menu-text">Cargar nuevo</span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="?page=leads/_assigned" class="menu-link">
										<i class="menu-bullet menu-bullet-line">
											<span></span>
										</i>
										<span class="menu-text">Asignados</span> <span class="menu-label"></span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="?page=leads/_no-assigned" class="menu-link">
										<i class="menu-bullet menu-bullet-line">
											<span></span>
										</i>
										<span class="menu-text">No asignados</span> <span class="menu-label"></span>
									</a>
								</li>
							</ul>
						</div>
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