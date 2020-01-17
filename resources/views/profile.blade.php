@extends('partials.base')

@section('title','Registro')

@section('body')


	
	<section class="jumbotron" style="background-image: url('');">
		<div class="container">
			<div class="text-center">
				<h1>Mi Cuenta</h1>
			</div>
		</div>
	</section>
	<section id="user-profile" class="user-profile">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="profile-header">
						<div class="profile-img">
							<img src="assets/img/profile-default.png" alt="Pablo Mendoza">
							<form action="">
								<div class="change-profile-img">
									<button type="button" class="btn"><img src="assets/img/subir-archivo-bio-mercados.svg"></button>
								</div>
							</form>
						</div>
						<div class="profile-info">
							<h2 class="profile-title">Pablo Mendoza</h2>
							<p class="bio-points">Mis Puntos bio<span class="quantity-span">253<img src="assets/img/icono-puntos-bio.svg" alt="Bio Points"></span></p>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="row">
						<div class="col-lg-3 profile-sidebar">
							<ul class="nav sidebar-tabs" id="SectionsTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="personal-info-tab" data-toggle="tab" href="#personal-info" role="tab" aria-controls="personal-info" aria-selected="true">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.69 20"><title>datos-personales-bio-mercados</title><g id="Capa_2" data-name="Capa 2"><g id="Perfil_de_Usuario" data-name="Perfil de Usuario"><path d="M8.22,9.63a4.63,4.63,0,0,0,3.4-1.41A4.63,4.63,0,0,0,13,4.82a4.65,4.65,0,0,0-1.41-3.41A4.63,4.63,0,0,0,8.22,0,4.65,4.65,0,0,0,4.81,1.41,4.65,4.65,0,0,0,3.4,4.82a4.63,4.63,0,0,0,1.41,3.4A4.65,4.65,0,0,0,8.22,9.63ZM5.64,2.24A3.48,3.48,0,0,1,8.22,1.17a3.46,3.46,0,0,1,2.57,1.07,3.48,3.48,0,0,1,1.07,2.58,3.46,3.46,0,0,1-1.07,2.57A3.46,3.46,0,0,1,8.22,8.46,3.48,3.48,0,0,1,5.64,7.39,3.46,3.46,0,0,1,4.57,4.82,3.48,3.48,0,0,1,5.64,2.24Z"/><path d="M16.65,15.38a12.56,12.56,0,0,0-.17-1.26,9.22,9.22,0,0,0-.31-1.28,6.15,6.15,0,0,0-.52-1.18,4.61,4.61,0,0,0-.79-1,3.69,3.69,0,0,0-1.13-.71,4,4,0,0,0-1.44-.26,1.47,1.47,0,0,0-.79.33l-.81.53A4.46,4.46,0,0,1,9.63,11a4.1,4.1,0,0,1-1.29.21A4.15,4.15,0,0,1,7.05,11a4.37,4.37,0,0,1-1-.46L5.18,10a1.45,1.45,0,0,0-.78-.33A4,4,0,0,0,3,9.92a3.69,3.69,0,0,0-1.13.71,4.92,4.92,0,0,0-.79,1,6.83,6.83,0,0,0-.52,1.18A10.91,10.91,0,0,0,.2,14.12,12.41,12.41,0,0,0,0,15.38c0,.38,0,.78,0,1.18a3.3,3.3,0,0,0,1,2.51A3.52,3.52,0,0,0,3.53,20h9.63a3.53,3.53,0,0,0,2.54-.93,3.34,3.34,0,0,0,1-2.51c0-.4,0-.8,0-1.18Zm-1.76,2.84a2.37,2.37,0,0,1-1.73.61H3.53a2.4,2.4,0,0,1-1.74-.61,2.18,2.18,0,0,1-.62-1.66c0-.37,0-.74,0-1.1a8.52,8.52,0,0,1,.15-1.14,8.36,8.36,0,0,1,.27-1.12,5.09,5.09,0,0,1,.42-1,3.54,3.54,0,0,1,.58-.76A2.39,2.39,0,0,1,3.39,11a2.64,2.64,0,0,1,.92-.18l.23.14.83.54a5.64,5.64,0,0,0,1.32.59,5.37,5.37,0,0,0,3.3,0,5.74,5.74,0,0,0,1.33-.59l.82-.54.24-.14a2.74,2.74,0,0,1,.92.18,2.34,2.34,0,0,1,.75.47,3.24,3.24,0,0,1,.58.76,5.13,5.13,0,0,1,.43,1,8.36,8.36,0,0,1,.27,1.12q.11.62.15,1.14h0c0,.35,0,.72,0,1.1a2.14,2.14,0,0,1-.62,1.66Z"/></g></g></svg>
										Datos personales
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="my-address-tab" data-toggle="tab" href="#my-address" role="tab" aria-controls="my-address" aria-selected="false">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.16 19.2"><title>mis-direcciones-bio-mercados</title><g id="Capa_2" data-name="Capa 2"><g id="Perfil_de_Usuario" data-name="Perfil de Usuario"><path d="M7.59,12.07a4.48,4.48,0,1,1,4.48-4.48.38.38,0,1,1-.76,0,3.72,3.72,0,1,0-3.72,3.72.38.38,0,0,1,0,.76Z"/><path d="M7.36,19.16A.36.36,0,0,1,7,19a28.25,28.25,0,0,0-3-3.71,23,23,0,0,1-2.78-3.44A7.92,7.92,0,0,1,0,7.58,7.6,7.6,0,0,1,7.59,0a7.58,7.58,0,0,1,7.59,7.58.35.35,0,0,1-.11.27.36.36,0,0,1-.26.11.4.4,0,0,1-.39-.38,6.83,6.83,0,0,0-13.66,0c0,3,1.78,4.93,3.84,7.18a27.35,27.35,0,0,1,3.08,3.82.38.38,0,0,1-.12.52A.36.36,0,0,1,7.36,19.16Z"/><path d="M11.58,19.2a1.8,1.8,0,0,1-1.79-1.8V14l-.67.61a.46.46,0,0,1-.32.16.37.37,0,0,1-.28-.13.38.38,0,0,1-.1-.27.42.42,0,0,1,.12-.26l4-3.68a1.8,1.8,0,0,1,1.22-.48,1.79,1.79,0,0,1,1.22.48l4,3.68a.37.37,0,0,1,.12.26.34.34,0,0,1-.1.27.37.37,0,0,1-.28.13.44.44,0,0,1-.26-.1l-.76-.7V17.4A1.81,1.81,0,0,1,16,19.2Zm2.21-8.54a1.06,1.06,0,0,0-.71.28l-2.53,2.32V17.4a1,1,0,0,0,1,1H16a1,1,0,0,0,1-1V13.22l-2.5-2.28A1,1,0,0,0,13.79,10.66Z"/></g></g></svg>
										Mis direcciones
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="my-orders-tab" data-toggle="tab" href="#my-orders" role="tab" aria-controls="my-orders" aria-selected="false">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.43 19.97"><title>mis-pedidos-bio-mercados</title><g id="Capa_2" data-name="Capa 2"><g id="Perfil_de_Usuario" data-name="Perfil de Usuario"><path d="M14.53,13h.32a.31.31,0,0,0,0-.61h0v-.82h.84a.27.27,0,0,0,.28.2.3.3,0,0,0,.31-.3v-.21A.31.31,0,0,0,16,11H14.53a.27.27,0,0,0-.21.09.29.29,0,0,0-.09.21v1.43a.31.31,0,0,0,.09.22.27.27,0,0,0,.21.09Z"/><path d="M14.53,15.76H16a.3.3,0,0,0,.3-.3V14a.3.3,0,0,0-.3-.3H14.53a.3.3,0,0,0-.3.3v1.43a.3.3,0,0,0,.3.3Zm.31-1.43h.82v.83h-.82Z"/><path d="M14.85,17.93h0v-.82h.82a.31.31,0,0,0,.61,0v-.29A.33.33,0,0,0,16,16.5H14.53a.32.32,0,0,0-.3.32v1.43a.29.29,0,0,0,.09.21.32.32,0,0,0,.21.08h.32a.31.31,0,0,0,0-.61Z"/><path d="M16.66,11.32l-.89.89-.27-.27a.3.3,0,0,0-.43.43l.49.49a.32.32,0,0,0,.43,0l1.1-1.11a.3.3,0,0,0-.43-.43Z"/><path d="M16.66,16.93l-.89.89-.27-.27a.3.3,0,0,0-.43.43l.49.48a.3.3,0,0,0,.43,0l1.1-1.1a.3.3,0,0,0-.43-.43Z"/><path d="M19.78,11.69H17.87a.3.3,0,1,0,0,.6h1.91a.3.3,0,0,0,0-.6Z"/><path d="M19.78,14.46H17.87a.31.31,0,0,0,0,.61h1.91a.31.31,0,0,0,0-.61Z"/><path d="M19.78,17.24H17.87a.31.31,0,0,0,0,.61h1.91a.31.31,0,0,0,0-.61Z"/><path d="M20.13,8.61H19.05a1.07,1.07,0,0,0-1-.78H16.88V5a.32.32,0,0,0-.15-.26L8.59,0a.32.32,0,0,0-.3,0L.15,4.74A.32.32,0,0,0,0,5v9.4a.33.33,0,0,0,.15.27l8.14,4.7a.32.32,0,0,0,.31,0l4.29-2.47v1.78a1.25,1.25,0,0,0,.37.92,1.28,1.28,0,0,0,.92.37h5.95a1.28,1.28,0,0,0,.92-.37,1.3,1.3,0,0,0,.38-.92V9.92a1.3,1.3,0,0,0-1.3-1.31ZM18,8.43a.44.44,0,0,1,.44.44v0a.44.44,0,0,1-.44.44H16.28a.43.43,0,0,1-.44-.44v0a.44.44,0,0,1,.44-.44ZM8.44.65l3.39,2L4.29,7,.91,5ZM8.16,18.58.61,14.23V5.53L8.16,9.88Zm.28-9.23-3.54-2L12.44,3,16,5Zm4.45.57V16.2L8.76,18.58V9.88l7.51-4.35v2.3h0a1.06,1.06,0,0,0-1,.78H14.18a1.29,1.29,0,0,0-1.29,1.31Zm7.93,8.76a.68.68,0,0,1-.2.49.7.7,0,0,1-.49.2H14.18a.7.7,0,0,1-.49-.2.68.68,0,0,1-.2-.49V9.92a.7.7,0,0,1,.69-.71h1.09a1,1,0,0,0,1,.74H18a1,1,0,0,0,1-.74h1.1a.71.71,0,0,1,.69.71Z"/></g></g></svg>
										Mis pedidos
									</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-9 profile-content">
							<div class="tab-content" id="TabContent">
								<div class="tab-pane fade show active" id="personal-info" role="tabpanel" aria-labelledby="personal-info-tab">
									<ul class="nav nav-tabs" id="" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="edit-profile-tab" data-toggle="tab" href="#edit-profile" role="tab" aria-controls="edit-profile" aria-selected="true">Editar perfil</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security" aria-selected="false">Seguridad</a>
										</li>
									</ul>
									<div class="tab-content" id="personal-info-content">
										<div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
											<form action="">
												<div class="col-12">
													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label for="user-name">Nombre (s):</label>
																<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																<input type="text" class="form-control" id="user-name" name="user-name" disabled="disabled" value="Pablo">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label for="user-lastname">Apellido (s):</label>
																<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																<input type="text" class="form-control" id="user-lastname" name="user-lastname" disabled="disabled" value="Mendoza">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label for="user-email">Correo Electrónico:</label>
																<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																<input type="email" class="form-control" id="user-email" name="user-email" disabled="disabled" value="micorreo@gmail.com">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label for="user-birthday">Cumpleaños:</label>
																<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																<input type="text" class="form-control" id="user-birthday" name="user-birthday" disabled="disabled" value="DD/MM/YYYY">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label for="user-gender">Sexo:</label>
																<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																<input type="text" class="form-control dropdown-toggle" data-toggle="dropdown" aria-expanded="false" id="user-gender" name="user-gender" disabled="disabled" value="Masculino">
																<div class="dropdown-menu dropdown-menu-gender">
																    <div class="dropdown-item">
																		<div class="form-check form-check-radio">
																			<input type="radio" class="form-check-input" id="man" name="radio-gender" value="Masculino">
																			<label for="man" class="custom-check"><span></span>Masculino</label>
																		</div>
																    </div>
																    <div class="dropdown-item">
																		<div class="form-check form-check-radio">
																	    	<input type="radio" class="form-check-input" id="women" value="Femenino" name="radio-gender">
																	    	<label for="women" class="custom-check"><span></span>Femenino</label>
																		</div>
																    </div>
																</div>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label for="user-contact-phone">Teléfono de Contacto:</label>
																<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																<input type="text" class="form-control" id="user-contact-phone" name="user-contact-phone" disabled="disabled" value="04XX XXX XXXX">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label for="user-office-phone">Teléfono de Oficina:</label>
																<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																<input type="text" class="form-control" id="user-office-phone" name="user-office-phone" disabled="disabled" value="02XX XXX XXXX">
															</div>
														</div>
														<div class="col-lg-12">
															<div class="form-group">
																<button class="btn btn-submit" type="submit">GUARDAR CAMBIOS</button>
															</div>
														</div>
													</div>
												</div>
											</form>
										</div>
										<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
											<form action="">
												<div class="col-lg-6">
													<div class="form-group">
														<label for="currently-password">Confirma tu contraseña actual:</label>
														<input type="text" class="form-control" id="currently-password" name="currently-password" value="">
													</div>
													<div class="form-group">
														<label for="new-password">Escribe la nueva contraseña:</label>
														<input type="text" class="form-control" id="new-password" name="new-password" value="">
													</div>
													<div class="form-group">
														<label for="new-password-confirm">Repite la nueva contraseña:</label>
														<input type="text" class="form-control" id="new-password-confirm" name="new-password-confirm" value="">
													</div>
													<div class="mt-5"></div>
													<div class="form-group">
														<button class="btn btn-submit" type="submit">GUARDAR CAMBIOS</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="my-address" role="tabpanel" aria-labelledby="my-address-tab">
									<ul class="nav nav-tabs" id="" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="address-tab" data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true">Mis direcciones de Envio</a>
										</li>
									</ul>
									<div class="tab-content" id="address-content">
										<div class="tab-pane fade show active" id="address" role="tabpanel" aria-labelledby="address-tab">
											<form action="">
												<div class="col-12">
													<div id="address-1" class="address-section">
														<div class="row">
															<div class="col-lg-6">
																<div class="form-group">
																	<label for="address-name">Dirección Corta (ejm: Mi Casa, Mi Oficina):</label>
																	<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																	<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																	<input type="text" class="form-control" id="address-name" name="address-name" disabled="disabled" value="Mi casa">
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																	<label for="address-urb">Urbanización / Barrio / Empresa:</label>
																	<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																	<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																	<input type="text" class="form-control" id="address-urb" name="address-urb" disabled="disabled" value="Urb Zaragoza">
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																	<label for="address-av">Sector, Avenida, calles, veredas:</label>
																	<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																	<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																	<input type="text" class="form-control" id="address-av" name="address-av" disabled="disabled" value="Avenida 1, entre calles 10 y 11">
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																	<label for="address-num">Número de casa/local:</label>
																	<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																	<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																	<input type="text" class="form-control" id="address-num" name="address-num" disabled="disabled" value="Casa 57">
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																	<label for="address-prov">Municipio/Provincia:</label>
																	<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																	<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																	<input type="text" class="form-control" id="address-prov" name="address-prov" disabled="disabled" value="Araure">
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																	<label for="address-1-state">Estado:</label>
																	<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																	<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																	<input type="text" class="form-control dropdown-toggle" data-toggle="dropdown" aria-expanded="false" id="address-1-state" name="address-1-state" disabled="disabled" value="Portuguesa">
																	<div class="dropdown-menu dropdown-menu-state">
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="amazonas-address-1" name="radio-address-1" value="Amazonas">
																				<label for="amazonas-address-1" class="custom-check">Amazonas</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="anzoategui-address-1" name="radio-address-1" value="Anzoátegui">
																				<label for="anzoategui-address-1" class="custom-check">Anzoátegui</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="apure-address-1" name="radio-address-1" value="Apure">
																				<label for="apure-address-1" class="custom-check">Apure</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="aragua-address-1" name="radio-address-1" value="Aragua">
																				<label for="aragua-address-1" class="custom-check">Aragua</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="barinas-address-1" name="radio-address-1" value="Barinas">
																				<label for="barinas-address-1" class="custom-check">Barinas</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="bolivar-address-1" name="radio-address-1" value="Bolívar">
																				<label for="bolivar-address-1" class="custom-check">Bolívar</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="carabobo-address-1" name="radio-address-1" value="Carabobo">
																				<label for="carabobo-address-1" class="custom-check">Carabobo</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="cojedes-address-1" name="radio-address-1" value="Cojedes">
																				<label for="cojedes-address-1" class="custom-check">Cojedes</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="delta-amacuro-address-1" name="radio-address-1" value="Delta Amacuro">
																				<label for="delta-amacuro-address-1" class="custom-check">Delta Amacuro</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="falcon-address-1" name="radio-address-1" value="Falcón">
																				<label for="falcon-address-1" class="custom-check">Falcón</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="distrito-capital-address-1" name="radio-address-1" value="Distrito Capital">
																				<label for="distrito-capital-address-1" class="custom-check">Distrito Capital</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="guarico-address-1" name="radio-address-1" value="Guárico">
																				<label for="guarico-address-1" class="custom-check">Guárico</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="lara-address-1" name="radio-address-1" value="Lara">
																				<label for="lara-address-1" class="custom-check">Lara</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="merida-address-1" name="radio-address-1" value="Mérida">
																				<label for="merida-address-1" class="custom-check">Mérida</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="miranda-address-1" name="radio-address-1" value="Miranda">
																				<label for="miranda-address-1" class="custom-check">Miranda</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="monagas-address-1" name="radio-address-1" value="Monagas">
																				<label for="monagas-address-1" class="custom-check">Monagas</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="nueva-esparta-address-1" name="radio-address-1" value="Nueva Esparta">
																				<label for="nueva-esparta-address-1" class="custom-check">Nueva Esparta</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="portuguesa-address-1" name="radio-address-1" value="Portuguesa">
																				<label for="portuguesa-address-1" class="custom-check">Portuguesa</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="tachira-address-1" name="radio-address-1" value="Táchira">
																				<label for="tachira-address-1" class="custom-check">Táchira</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="trujillo-address-1" name="radio-address-1" value="Trujillo">
																				<label for="trujillo-address-1" class="custom-check">Trujillo</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="vargas-address-1" name="radio-address-1" value="Vargas">
																				<label for="vargas-address-1" class="custom-check">Vargas</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="yaracuy-address-1" name="radio-address-1" value="Yaracuy">
																				<label for="yaracuy-address-1" class="custom-check">Yaracuy</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="zulia-address-1" name="radio-address-1" value="Zulia">
																				<label for="zulia-address-1" class="custom-check">Zulia</label>
																			</div>
																	    </div>
																	</div>
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																	<label for="address-post">Código postal:</label>
																	<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																	<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																	<input type="text" class="form-control" id="address-post" name="address-post" disabled="disabled" value="3303">
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																	<label for="address-ref">Punto de Referencia (opcional):</label>
																	<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																	<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																	<input type="text" class="form-control" id="address-ref" name="address-ref" disabled="disabled" value="A lado de bodegon Girasol">
																</div>
															</div>
															<div class="col-lg-12">
																<div class="form-group">
																	<button class="btn btn-submit" type="submit">GUARDAR CAMBIOS</button>
																</div>
															</div>
															<div class="col-lg-12">
																<div class="form-group">
																	<button class="btn btn-delete-section" type="button">Eliminar Dirección <img src="assets/img/eliminar-bio-mercados.svg"></button>
																</div>
															</div>
														</div>
													</div>
													<div id="address-2" class="address-section">
														<div class="row">
															<div class="col-lg-6">
																<div class="form-group">
																	<label for="address-name">Dirección Corta (ejm: Mi Casa, Mi Oficina):</label>
																	<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																	<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																	<input type="text" class="form-control" id="address-name" name="address-name" disabled="disabled" value="Mi oficina">
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																	<label for="address-urb">Urbanización / Barrio / Empresa:</label>
																	<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																	<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																	<input type="text" class="form-control" id="address-urb" name="address-urb" disabled="disabled" value="Inversiones JM C.A">
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																	<label for="address-av">Sector, Avenida, calles, veredas:</label>
																	<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																	<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																	<input type="text" class="form-control" id="address-av" name="address-av" disabled="disabled" value="Sector Centro, Av 34 entre calles 8 y 9">
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																	<label for="address-num">Número de casa/local:</label>
																	<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																	<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																	<input type="text" class="form-control" id="address-num" name="address-num" disabled="disabled" value="Local H-21">
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																	<label for="address-prov">Municipio/Provincia:</label>
																	<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																	<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																	<input type="text" class="form-control" id="address-prov" name="address-prov" disabled="disabled" value="Acarigua">
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																	<label for="address-2-state">Estado:</label>
																	<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																	<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																	<input type="text" class="form-control dropdown-toggle" data-toggle="dropdown" aria-expanded="false" id="address-2-state" name="address-2-state" disabled="disabled" value="Portuguesa">
																	<div class="dropdown-menu dropdown-menu-state">
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="amazonas-address-2" name="radio-address-2" value="Amazonas">
																				<label for="amazonas-address-2" class="custom-check">Amazonas</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="anzoategui-address-2" name="radio-address-2" value="Anzoátegui">
																				<label for="anzoategui-address-2" class="custom-check">Anzoátegui</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="apure-address-2" name="radio-address-2" value="Apure">
																				<label for="apure-address-2" class="custom-check">Apure</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="aragua-address-2" name="radio-address-2" value="Aragua">
																				<label for="aragua-address-2" class="custom-check">Aragua</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="barinas-address-2" name="radio-address-2" value="Barinas">
																				<label for="barinas-address-2" class="custom-check">Barinas</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="bolivar-address-2" name="radio-address-2" value="Bolívar">
																				<label for="bolivar-address-2" class="custom-check">Bolívar</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="carabobo-address-2" name="radio-address-2" value="Carabobo">
																				<label for="carabobo-address-2" class="custom-check">Carabobo</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="cojedes-address-2" name="radio-address-2" value="Cojedes">
																				<label for="cojedes-address-2" class="custom-check">Cojedes</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="delta-amacuro-address-2" name="radio-address-2" value="Delta Amacuro">
																				<label for="delta-amacuro-address-2" class="custom-check">Delta Amacuro</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="falcon-address-2" name="radio-address-2" value="Falcón">
																				<label for="falcon-address-2" class="custom-check">Falcón</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="distrito-capital-address-2" name="radio-address-2" value="Distrito Capital">
																				<label for="distrito-capital-address-2" class="custom-check">Distrito Capital</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="guarico-address-2" name="radio-address-2" value="Guárico">
																				<label for="guarico-address-2" class="custom-check">Guárico</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="lara-address-2" name="radio-address-2" value="Lara">
																				<label for="lara-address-2" class="custom-check">Lara</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="merida-address-2" name="radio-address-2" value="Mérida">
																				<label for="merida-address-2" class="custom-check">Mérida</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="miranda-address-2" name="radio-address-2" value="Miranda">
																				<label for="miranda-address-2" class="custom-check">Miranda</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="monagas-address-2" name="radio-address-2" value="Monagas">
																				<label for="monagas-address-2" class="custom-check">Monagas</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="nueva-esparta-address-2" name="radio-address-2" value="Nueva Esparta">
																				<label for="nueva-esparta-address-2" class="custom-check">Nueva Esparta</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="portuguesa-address-2" name="radio-address-2" value="Portuguesa">
																				<label for="portuguesa-address-2" class="custom-check">Portuguesa</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="tachira-address-2" name="radio-address-2" value="Táchira">
																				<label for="tachira-address-2" class="custom-check">Táchira</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="trujillo-address-2" name="radio-address-2" value="Trujillo">
																				<label for="trujillo-address-2" class="custom-check">Trujillo</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="vargas-address-2" name="radio-address-2" value="Vargas">
																				<label for="vargas-address-2" class="custom-check">Vargas</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="yaracuy-address-2" name="radio-address-2" value="Yaracuy">
																				<label for="yaracuy-address-2" class="custom-check">Yaracuy</label>
																			</div>
																	    </div>
																	    <div class="dropdown-item">
																			<div class="form-check form-check-radio">
																				<input type="radio" class="form-check-input" id="zulia-address-2" name="radio-address-2" value="Zulia">
																				<label for="zulia-address-2" class="custom-check">Zulia</label>
																			</div>
																	    </div>
																	</div>
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																	<label for="address-post">Código postal:</label>
																	<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																	<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																	<input type="text" class="form-control" id="address-post" name="address-post" disabled="disabled" value="3301">
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																	<label for="address-ref">Punto de Referencia (opcional):</label>
																	<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
																	<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
																	<input type="text" class="form-control" id="address-ref" name="address-ref" disabled="disabled" value="Frente a Traki">
																</div>
															</div>
															<div class="col-lg-12">
																<div class="form-group">
																	<button class="btn btn-submit" type="submit">GUARDAR CAMBIOS</button>
																</div>
															</div>
															<div class="col-lg-12">
																<div class="form-group">
																	<button class="btn btn-delete-section" type="button">Eliminar Dirección <img src="assets/img/eliminar-bio-mercados.svg"></button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12">
													<button class="btn btn-add-section">Agregar nueva dirección <img src="assets/img/nueva-direccion-bio-mercados.svg"></button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="my-orders" role="tabpanel" aria-labelledby="my-orders-tab">
									<ul class="nav nav-tabs" id="" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="all-orders-tab" data-toggle="tab" href="#all-orders" role="tab" aria-controls="all-orders" aria-selected="true">Todos</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="order-in-process-tab" data-toggle="tab" href="#order-in-process" role="tab" aria-controls="order-in-process" aria-selected="false">En Proceso</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="complete-orders-tab" data-toggle="tab" href="#complete-orders" role="tab" aria-controls="complete-orders" aria-selected="false">Completados</a>
										</li>
									</ul>
									<div class="tab-content" id="orders-content">
										<div class="tab-pane fade show active" id="all-orders" role="tabpanel" aria-labelledby="all-orders-tab">
											<div class="order-table">
												<div class="thead-bio">
													<div class="row">
														<div class="col-6 col-lg-20">Número de Pedido</div>
														<div class="col-6 col-lg-20">Fecha</div>
														<div class="col-6 col-lg-20">Dirección de entrega</div>
														<div class="col-6 col-lg-20">Fecha de entrega</div>
														<div class="col-6 col-lg-20">Estado</div>
													</div>
												</div>
												<div class="row">
													<div class="col-12 col-lg-20">
														<button class="btn" type="button" data-toggle="modal" data-target="#ModalOrder">
															<span class="order-span">Número de Pedido</span> #2235
														</button>
													</div>
													<div class="col-6 col-lg-20"><span class="order-span">Fecha</span>01/01/2020</div>
													<div class="col-6 col-lg-20">
														<button class="btn" type="button" data-toggle="tooltip" data-placement="bottom" title="Urb Zaragoza, Avenida 1 entre calles 10 y 11, casa 57, Araure, Estado Portugesa 3303 (al lado del bodegón Girasol)">
															<span class="order-span">Dirección de entrega</span>Mi casa
														</button>
													</div>
													<div class="col-6 col-lg-20"><span class="order-span">Fecha de entrega</span>04/01/2020</div>
													<div class="col-6 col-lg-20">
														<span class="order-span">Estado</span>
														<div class="process-status in-process" data-toggle="tooltip" data-placement="bottom" title="Su pedido se está procesando para ser enviado">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.12 19.97"><defs><style>.cls-1{fill:#e1251b;}</style></defs><title>en-proceso-bio-mercados</title><g id="Capa_2" data-name="Capa 2"><g id="Perfil_de_Usuario" data-name="Perfil de Usuario"><path class="cls-1" d="M12.09,18.25l-.5.11A.81.81,0,1,0,11.88,20l.6-.13a.81.81,0,0,0-.39-1.57Z"/><path class="cls-1" d="M18.07,7.41a.9.9,0,0,0,.3.41.79.79,0,0,0,.72.1.8.8,0,0,0,.52-1c-.07-.19-.14-.39-.21-.57a.81.81,0,0,0-1.51.6,4.68,4.68,0,0,1,.18.48Z"/><path class="cls-1" d="M14.72,17.1l-.44.27a.8.8,0,0,0-.3,1.1.86.86,0,0,0,.24.26.83.83,0,0,0,.87,0c.17-.1.35-.21.52-.33a.8.8,0,1,0-.89-1.34Z"/><path class="cls-1" d="M20.11,9.67a.81.81,0,0,0-1.62.06c0,.17,0,.35,0,.52a.8.8,0,0,0,.34.68.77.77,0,0,0,.45.14.8.8,0,0,0,.82-.79c0-.2,0-.41,0-.61Z"/><path class="cls-1" d="M9.56,3.52a.66.66,0,0,0-.65.66V10.7l6,3.08a.66.66,0,0,0,.88-.28.65.65,0,0,0-.28-.88L10.22,9.9V4.18a.67.67,0,0,0-.66-.66Z"/><path class="cls-1" d="M19.13,12a.82.82,0,0,0-1,.53c-.05.17-.1.33-.16.49a.81.81,0,0,0,.28.95.76.76,0,0,0,.18.09.82.82,0,0,0,1.05-.46c.07-.19.14-.39.2-.58a.82.82,0,0,0-.53-1Z"/><path class="cls-1" d="M8.56,18.37a8.33,8.33,0,0,1-2.07-.66l0,0c-.16-.07-.31-.15-.46-.23H6c-.27-.15-.54-.32-.8-.5a8.46,8.46,0,0,1,0-13.83l0,0A8.48,8.48,0,0,1,14.74,3L14.1,4c-.17.26-.06.44.24.41l2.75-.24a.46.46,0,0,0,.41-.59L16.76.87c-.08-.3-.29-.33-.47-.08l-.63.92A10,10,0,0,0,8.34.15L7.57.31h0A9.94,9.94,0,0,0,2,4l0,0-.14.19-.21.32,0,0A10.08,10.08,0,0,0,0,10.49v0c0,.2,0,.4,0,.61v0c0,.2.05.4.09.61A10,10,0,0,0,3,17.19H3a9.71,9.71,0,0,0,1.29,1.08,10,10,0,0,0,4,1.68.81.81,0,1,0,.28-1.59Z"/><path class="cls-1" d="M17.94,15a.8.8,0,0,0-1.13.16l-.32.4a.81.81,0,0,0,.09,1.14l.06,0a.81.81,0,0,0,1.08-.14l.38-.48A.8.8,0,0,0,17.94,15Z"/></g></g></svg>
															En Proceso
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-12 col-lg-20">
														<button class="btn" type="button" data-toggle="modal" data-target="#ModalOrder">
															<span class="order-span">Número de Pedido</span> #4452
														</button>
													</div>
													<div class="col-6 col-lg-20"><span class="order-span">Fecha</span>23/12/2019</div>
													<div class="col-6 col-lg-20">
														<button class="btn" type="button" data-toggle="tooltip" data-placement="bottom" title="Inversiones JM C.A, Sector Centro, Av 34 entre calles 8 y 9, Local H-21, Acarigua, Estado Portugesa 3301 (Frente a Traki)">
															<span class="order-span">Dirección de entrega</span>Mi Oficina
														</button>
													</div>
													<div class="col-6 col-lg-20"><span class="order-span">Fecha de entrega</span>26/12/2019</div>
													<div class="col-6 col-lg-20">
														<span class="order-span">Estado</span>
														<div class="process-status en-route" data-toggle="tooltip" data-placement="bottom" title="Su pedido ya esta en camino hacia el destino">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.09 20"><defs><style>.cls-1{fill:#eba900;}</style></defs><title>en-camino-bio-mercados</title><g id="Capa_2" data-name="Capa 2"><g id="Perfil_de_Usuario" data-name="Perfil de Usuario"><path class="cls-1" d="M26,11l-5.4-5.4a1.26,1.26,0,0,0-.92-.38H12.17v.87h2.18v6.52h.87V6.09h4.42a.45.45,0,0,1,.31.12l.74.75h-2a.87.87,0,0,0-.87.87v3.91a.87.87,0,0,0,.87.87h6.52v3.48a.44.44,0,0,1-.44.43h-.9a3,3,0,0,0-6,0H11.7a3,3,0,0,0-6,0H4.78a.43.43,0,0,1-.43-.43V12.17H3.48v3.92a1.3,1.3,0,0,0,1.3,1.3h.91a3,3,0,0,0,.88,1.74H0V20H20.87a3,3,0,0,0,3-2.61h.9a1.31,1.31,0,0,0,1.31-1.3V11.3A.43.43,0,0,0,26,11ZM6.52,17A2.18,2.18,0,1,1,8.7,19.13,2.19,2.19,0,0,1,6.52,17Zm4.3,2.17a3,3,0,0,0,.88-1.74h6.16a3.13,3.13,0,0,0,.88,1.74Zm10.05,0A2.18,2.18,0,1,1,23,17a2.17,2.17,0,0,1-2.17,2.17ZM18.7,11.74V7.83h2.86l3.66,3.65v.26Z"/><rect class="cls-1" x="8.26" y="16.52" width="0.87" height="0.87"/><rect class="cls-1" x="20.43" y="16.52" width="0.87" height="0.87"/><rect class="cls-1" y="15.22" width="2.17" height="0.87"/><rect class="cls-1" x="0.87" y="13.48" width="1.3" height="0.87"/><rect class="cls-1" x="1.3" y="11.74" width="0.87" height="0.87"/><path class="cls-1" d="M5.65,11.3A5.65,5.65,0,1,0,0,5.65,5.65,5.65,0,0,0,5.65,11.3ZM5.65.87A4.78,4.78,0,1,1,.87,5.65,4.78,4.78,0,0,1,5.65.87Z"/><path class="cls-1" d="M5.65,9.57A.44.44,0,0,0,6,9.44C6.24,9.16,8.7,6.65,8.7,4.78a3,3,0,0,0-6.09,0c0,1.87,2.45,4.38,2.73,4.66a.48.48,0,0,0,.31.13Zm0-7A2.18,2.18,0,0,1,7.83,4.78c0,1.12-1.37,2.84-2.18,3.72-.8-.88-2.17-2.6-2.17-3.72A2.17,2.17,0,0,1,5.65,2.61Z"/><path class="cls-1" d="M7,4.78A1.31,1.31,0,1,0,5.65,6.09,1.31,1.31,0,0,0,7,4.78Zm-1.74,0a.43.43,0,0,1,.43-.43.44.44,0,0,1,.44.43.44.44,0,0,1-.44.44.44.44,0,0,1-.43-.44Z"/><rect class="cls-1" x="16.52" y="13.48" width="1.74" height="0.87"/></g></g></svg>
															En Camino
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-12 col-lg-20">
														<button class="btn" type="button" data-toggle="modal" data-target="#ModalOrder">
															<span class="order-span">Número de Pedido</span> #3602
														</button>
													</div>
													<div class="col-6 col-lg-20"><span class="order-span">Fecha</span>05/12/2019</div>
													<div class="col-6 col-lg-20">
														<button class="btn" type="button" data-toggle="tooltip" data-placement="bottom" title="Urb Zaragoza, Avenida 1 entre calles 10 y 11, casa 57, Araure, Estado Portugesa 3303 (al lado del bodegón Girasol)">
															<span class="order-span">Dirección de entrega</span>Mi casa
														</button>
													</div>
													<div class="col-6 col-lg-20"><span class="order-span">Fecha de entrega</span>08/12/2019</div>
													<div class="col-6 col-lg-20">
														<span class="order-span">Estado</span>
														<div class="process-status complete" data-toggle="tooltip" data-placement="bottom" title="El pedido ya ha sido entregado">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.75 19.44"><defs><style>.cls-1{fill:#80bc00;}</style></defs><title>confirmar-bio-mercados</title><g id="Capa_2" data-name="Capa 2"><g id="Perfil_de_Usuario" data-name="Perfil de Usuario"><path class="cls-1" d="M20.1.4,9,11.51,4.64,7.16a1.36,1.36,0,0,0-1.92,0L.4,9.48a1.36,1.36,0,0,0,0,1.92L8,19A1.35,1.35,0,0,0,10,19l14.4-14.4a1.36,1.36,0,0,0,0-1.92L22,.4A1.37,1.37,0,0,0,20.1.4Z"/></g></g></svg>
															Completado
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="order-in-process" role="tabpanel" aria-labelledby="order-in-process-tab">
											<div class="order-table">
												<div class="thead-bio">
													<div class="row">
														<div class="col-6 col-lg-20">Número de Pedido</div>
														<div class="col-6 col-lg-20">Fecha</div>
														<div class="col-6 col-lg-20">Dirección de entrega</div>
														<div class="col-6 col-lg-20">Fecha de entrega</div>
														<div class="col-6 col-lg-20">Estado</div>
													</div>
												</div>
												<div class="row">
													<div class="col-12 col-lg-20">
														<button class="btn" type="button" data-toggle="modal" data-target="#ModalOrder">
															<span class="order-span">Número de Pedido</span> #2235
														</button>
													</div>
													<div class="col-6 col-lg-20"><span class="order-span">Fecha</span>01/01/2020</div>
													<div class="col-6 col-lg-20">
														<button class="btn" type="button" data-toggle="tooltip" data-placement="bottom" title="Urb Zaragoza, Avenida 1 entre calles 10 y 11, casa 57, Araure, Estado Portugesa 3303 (al lado del bodegón Girasol)">
															<span class="order-span">Dirección de entrega</span>Mi casa
														</button>
													</div>
													<div class="col-6 col-lg-20"><span class="order-span">Fecha de entrega</span>04/01/2020</div>
													<div class="col-6 col-lg-20">
														<span class="order-span">Estado</span>
														<div class="process-status in-process" data-toggle="tooltip" data-placement="bottom" title="Su pedido se está procesando para ser enviado">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.12 19.97"><defs><style>.cls-1{fill:#e1251b;}</style></defs><title>en-proceso-bio-mercados</title><g id="Capa_2" data-name="Capa 2"><g id="Perfil_de_Usuario" data-name="Perfil de Usuario"><path class="cls-1" d="M12.09,18.25l-.5.11A.81.81,0,1,0,11.88,20l.6-.13a.81.81,0,0,0-.39-1.57Z"/><path class="cls-1" d="M18.07,7.41a.9.9,0,0,0,.3.41.79.79,0,0,0,.72.1.8.8,0,0,0,.52-1c-.07-.19-.14-.39-.21-.57a.81.81,0,0,0-1.51.6,4.68,4.68,0,0,1,.18.48Z"/><path class="cls-1" d="M14.72,17.1l-.44.27a.8.8,0,0,0-.3,1.1.86.86,0,0,0,.24.26.83.83,0,0,0,.87,0c.17-.1.35-.21.52-.33a.8.8,0,1,0-.89-1.34Z"/><path class="cls-1" d="M20.11,9.67a.81.81,0,0,0-1.62.06c0,.17,0,.35,0,.52a.8.8,0,0,0,.34.68.77.77,0,0,0,.45.14.8.8,0,0,0,.82-.79c0-.2,0-.41,0-.61Z"/><path class="cls-1" d="M9.56,3.52a.66.66,0,0,0-.65.66V10.7l6,3.08a.66.66,0,0,0,.88-.28.65.65,0,0,0-.28-.88L10.22,9.9V4.18a.67.67,0,0,0-.66-.66Z"/><path class="cls-1" d="M19.13,12a.82.82,0,0,0-1,.53c-.05.17-.1.33-.16.49a.81.81,0,0,0,.28.95.76.76,0,0,0,.18.09.82.82,0,0,0,1.05-.46c.07-.19.14-.39.2-.58a.82.82,0,0,0-.53-1Z"/><path class="cls-1" d="M8.56,18.37a8.33,8.33,0,0,1-2.07-.66l0,0c-.16-.07-.31-.15-.46-.23H6c-.27-.15-.54-.32-.8-.5a8.46,8.46,0,0,1,0-13.83l0,0A8.48,8.48,0,0,1,14.74,3L14.1,4c-.17.26-.06.44.24.41l2.75-.24a.46.46,0,0,0,.41-.59L16.76.87c-.08-.3-.29-.33-.47-.08l-.63.92A10,10,0,0,0,8.34.15L7.57.31h0A9.94,9.94,0,0,0,2,4l0,0-.14.19-.21.32,0,0A10.08,10.08,0,0,0,0,10.49v0c0,.2,0,.4,0,.61v0c0,.2.05.4.09.61A10,10,0,0,0,3,17.19H3a9.71,9.71,0,0,0,1.29,1.08,10,10,0,0,0,4,1.68.81.81,0,1,0,.28-1.59Z"/><path class="cls-1" d="M17.94,15a.8.8,0,0,0-1.13.16l-.32.4a.81.81,0,0,0,.09,1.14l.06,0a.81.81,0,0,0,1.08-.14l.38-.48A.8.8,0,0,0,17.94,15Z"/></g></g></svg>
															En Proceso
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-12 col-lg-20">
														<button class="btn" type="button" data-toggle="modal" data-target="#ModalOrder">
															<span class="order-span">Número de Pedido</span> #4452
														</button>
													</div>
													<div class="col-6 col-lg-20"><span class="order-span">Fecha</span>23/12/2019</div>
													<div class="col-6 col-lg-20">
														<button class="btn" type="button" data-toggle="tooltip" data-placement="bottom" title="Inversiones JM C.A, Sector Centro, Av 34 entre calles 8 y 9, Local H-21, Acarigua, Estado Portugesa 3301 (Frente a Traki)">
															<span class="order-span">Dirección de entrega</span>Mi Oficina
														</button>
													</div>
													<div class="col-6 col-lg-20"><span class="order-span">Fecha de entrega</span>26/12/2019</div>
													<div class="col-6 col-lg-20">
														<span class="order-span">Estado</span>
														<div class="process-status en-route" data-toggle="tooltip" data-placement="bottom" title="Su pedido ya esta en camino hacia el destino">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.09 20"><defs><style>.cls-1{fill:#eba900;}</style></defs><title>en-camino-bio-mercados</title><g id="Capa_2" data-name="Capa 2"><g id="Perfil_de_Usuario" data-name="Perfil de Usuario"><path class="cls-1" d="M26,11l-5.4-5.4a1.26,1.26,0,0,0-.92-.38H12.17v.87h2.18v6.52h.87V6.09h4.42a.45.45,0,0,1,.31.12l.74.75h-2a.87.87,0,0,0-.87.87v3.91a.87.87,0,0,0,.87.87h6.52v3.48a.44.44,0,0,1-.44.43h-.9a3,3,0,0,0-6,0H11.7a3,3,0,0,0-6,0H4.78a.43.43,0,0,1-.43-.43V12.17H3.48v3.92a1.3,1.3,0,0,0,1.3,1.3h.91a3,3,0,0,0,.88,1.74H0V20H20.87a3,3,0,0,0,3-2.61h.9a1.31,1.31,0,0,0,1.31-1.3V11.3A.43.43,0,0,0,26,11ZM6.52,17A2.18,2.18,0,1,1,8.7,19.13,2.19,2.19,0,0,1,6.52,17Zm4.3,2.17a3,3,0,0,0,.88-1.74h6.16a3.13,3.13,0,0,0,.88,1.74Zm10.05,0A2.18,2.18,0,1,1,23,17a2.17,2.17,0,0,1-2.17,2.17ZM18.7,11.74V7.83h2.86l3.66,3.65v.26Z"/><rect class="cls-1" x="8.26" y="16.52" width="0.87" height="0.87"/><rect class="cls-1" x="20.43" y="16.52" width="0.87" height="0.87"/><rect class="cls-1" y="15.22" width="2.17" height="0.87"/><rect class="cls-1" x="0.87" y="13.48" width="1.3" height="0.87"/><rect class="cls-1" x="1.3" y="11.74" width="0.87" height="0.87"/><path class="cls-1" d="M5.65,11.3A5.65,5.65,0,1,0,0,5.65,5.65,5.65,0,0,0,5.65,11.3ZM5.65.87A4.78,4.78,0,1,1,.87,5.65,4.78,4.78,0,0,1,5.65.87Z"/><path class="cls-1" d="M5.65,9.57A.44.44,0,0,0,6,9.44C6.24,9.16,8.7,6.65,8.7,4.78a3,3,0,0,0-6.09,0c0,1.87,2.45,4.38,2.73,4.66a.48.48,0,0,0,.31.13Zm0-7A2.18,2.18,0,0,1,7.83,4.78c0,1.12-1.37,2.84-2.18,3.72-.8-.88-2.17-2.6-2.17-3.72A2.17,2.17,0,0,1,5.65,2.61Z"/><path class="cls-1" d="M7,4.78A1.31,1.31,0,1,0,5.65,6.09,1.31,1.31,0,0,0,7,4.78Zm-1.74,0a.43.43,0,0,1,.43-.43.44.44,0,0,1,.44.43.44.44,0,0,1-.44.44.44.44,0,0,1-.43-.44Z"/><rect class="cls-1" x="16.52" y="13.48" width="1.74" height="0.87"/></g></g></svg>
															En Camino
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="complete-orders" role="tabpanel" aria-labelledby="complete-orders-tab">
											<div class="order-table">
												<div class="thead-bio">
													<div class="row">
														<div class="col-6 col-lg-20">Número de Pedido</div>
														<div class="col-6 col-lg-20">Fecha</div>
														<div class="col-6 col-lg-20">Dirección de entrega</div>
														<div class="col-6 col-lg-20">Fecha de entrega</div>
														<div class="col-6 col-lg-20">Estado</div>
													</div>
												</div>
												<div class="row">
													<div class="col-12 col-lg-20">
														<button class="btn" type="button" data-toggle="modal" data-target="#ModalOrder">
															<span class="order-span">Número de Pedido</span> #3602
														</button>
													</div>
													<div class="col-6 col-lg-20"><span class="order-span">Fecha</span>05/12/2019</div>
													<div class="col-6 col-lg-20">
														<button class="btn" type="button" data-toggle="tooltip" data-placement="bottom" title="Urb Zaragoza, Avenida 1 entre calles 10 y 11, casa 57, Araure, Estado Portugesa 3303 (al lado del bodegón Girasol)">
															<span class="order-span">Dirección de entrega</span>Mi casa
														</button>
													</div>
													<div class="col-6 col-lg-20"><span class="order-span">Fecha de entrega</span>08/12/2019</div>
													<div class="col-6 col-lg-20">
														<span class="order-span">Estado</span>
														<div class="process-status complete" data-toggle="tooltip" data-placement="bottom" title="El pedido ya ha sido entregado">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.75 19.44"><defs><style>.cls-1{fill:#80bc00;}</style></defs><title>confirmar-bio-mercados</title><g id="Capa_2" data-name="Capa 2"><g id="Perfil_de_Usuario" data-name="Perfil de Usuario"><path class="cls-1" d="M20.1.4,9,11.51,4.64,7.16a1.36,1.36,0,0,0-1.92,0L.4,9.48a1.36,1.36,0,0,0,0,1.92L8,19A1.35,1.35,0,0,0,10,19l14.4-14.4a1.36,1.36,0,0,0,0-1.92L22,.4A1.37,1.37,0,0,0,20.1.4Z"/></g></g></svg>
															Completado
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


@stop