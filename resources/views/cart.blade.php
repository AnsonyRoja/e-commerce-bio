@extends('partials.base')

@section('title','Cart')

@section('body')

<!--MAIN-->

<section class="jumbotron" style="background-image: url('');">
		<div class="container">
			<div class="text-center">
				<h1>Carrito de Compras</h1>
			</div>
		</div>
	</section>
	<section id="cart" class="cart">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mx-0">
					<div class="wizard">
						<form class="wizard-form">
							<ul class="progressbar">
								<li id="order-verification" class="progressbar-item active">
									<svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="100" height="100" viewBox="0 0 26.458333 26.458334" version="1.1" id="svg954" inkscape:version="0.92.3 (2405546, 2018-03-11)" sodipodi:docname="verificar-pedido-bio.svg"> <defs id="defs948"/> <sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="5.6" inkscape:cx="45.945476" inkscape:cy="44.557247" inkscape:document-units="mm" inkscape:current-layer="layer1" showgrid="false" units="px" inkscape:window-width="1920" inkscape:window-height="1017" inkscape:window-x="-8" inkscape:window-y="-8" inkscape:window-maximized="1"/> <metadata id="metadata951"> <rdf:RDF> <cc:Work rdf:about=""> <dc:format>image/svg+xml</dc:format> <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/> <dc:title/> </cc:Work> </rdf:RDF> </metadata> <g inkscape:label="Capa 1" inkscape:groupmode="layer" id="layer1" transform="translate(0,-270.54165)"> <path inkscape:connector-curvature="0" class="cls-1" d="m 152.66081,104.88754 h -1.29117 v -0.57943 a 1.5266458,1.5266458 0 0 0 -1.16152,-1.47373 v -4.071942 a 0.38629167,0.38629167 0 0 0 -0.38894,-0.38629 h -9.1731 a 0.38629167,0.38629167 0 0 0 -0.38629,0.38629 v 10.620382 a 0.38629167,0.38629167 0 0 0 0.38629,0.38893 h 5.969 v 0.31221 a 1.5213542,1.5213542 0 0 0 1.52135,1.51606 h 3.39461 a 1.5187083,1.5187083 0 0 0 1.51871,-1.51606 v -4.81012 a 0.38629167,0.38629167 0 0 0 -0.38894,-0.3863 z m -2.0664,-0.57943 v 0.57943 h -1.524 v -0.57943 a 0.762,0.762 0 0 1 1.524,0 z m -9.55939,4.68841 v -9.845142 h 8.39787 v 3.704162 a 1.524,1.524 0 0 0 -1.13771,1.4658 v 0.57943 h -1.29116 a 0.38629167,0.38629167 0 0 0 -0.38894,0.3863 v 3.70945 z m 11.2395,1.08744 a 0.74347917,0.74347917 0 0 1 -0.74348,0.74083 h -3.39461 a 0.74347917,0.74347917 0 0 1 -0.74612,-0.74083 v -4.42119 h 0.90487 v 1.0213 a 0.3889375,0.3889375 0 0 0 0.77523,0 v -1.0213 h 1.524 v 1.0213 a 0.3889375,0.3889375 0 0 0 0.77523,0 v -1.0213 h 0.90488 z" id="path18" style="stroke-width:0.26458332"/> <rect style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.36502817;stroke-opacity:1" id="rect871" width="17.322243" height="20.246883" x="1.8368255" y="271.68835"/> <rect style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.19695915;stroke-opacity:1" id="rect871-0" width="9.6682243" height="10.561244" x="14.513832" y="284.80243"/> <rect style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.06544681;stroke-opacity:1" id="rect871-0-0" width="3.2898765" height="3.4269435" x="17.691982" y="280.47778"/> <path inkscape:connector-curvature="0" class="cls-1" d="m 24.665539,283.60513 h -2.435885 v -1.13425 a 2.8801343,2.9884481 0 0 0 -2.191297,-2.88487 v -7.97092 a 0.72876884,0.75617583 0 0 0 -0.733761,-0.75618 H 1.9988326 a 0.72876884,0.75617583 0 0 0 -0.728769,0.75618 v 20.78967 a 0.72876884,0.75617583 0 0 0 0.728769,0.76134 H 13.259809 v 0.61115 a 2.8701513,2.9780897 0 0 0 2.870151,2.96773 h 6.40418 a 2.8651597,2.9729105 0 0 0 2.865159,-2.96773 v -9.41592 a 0.72876884,0.75617583 0 0 0 -0.73376,-0.7562 z m -3.898414,-1.13425 v 1.13425 h -2.875143 v -1.13425 a 1.4375716,1.4916347 0 0 1 2.875143,0 z m -18.0345304,9.17768 v -19.2721 H 18.575826 v 7.25098 a 2.8751427,2.9832689 0 0 0 -2.146373,2.86934 v 1.13425 h -2.435885 a 0.72876884,0.75617583 0 0 0 -0.733759,0.75619 v 7.26134 z m 21.2041754,2.12869 a 1.4026304,1.4553795 0 0 1 -1.40263,1.4502 h -6.40418 a 1.4026304,1.4553795 0 0 1 -1.407622,-1.4502 v -8.65459 h 1.707115 v 1.99922 a 0.73376039,0.7613551 0 0 0 1.462529,0 v -1.99922 h 2.875143 v 1.99922 a 0.73376039,0.7613551 0 0 0 1.462529,0 v -1.99922 h 1.707116 z" id="path18-9" style="fill-opacity:1;stroke-width:0.50845605"/> <path inkscape:connector-curvature="0" class="cls-1" d="m 6.3814296,274.1374 -0.8286009,0.92192 -0.0549,-0.0724 a 0.73376039,0.7613551 0 0 0 -1.1380771,0.95298 l 0.5790221,0.74582 a 0.72876884,0.75617583 0 0 0 0.5440809,0.2797 h 0.02994 a 0.73376039,0.7613551 0 0 0 0.534098,-0.24345 l 1.4076219,-1.55378 a 0.73286427,0.76042525 0 1 0 -1.0731867,-1.03584 z" id="path20" style="stroke-width:0.50845605"/> <path inkscape:connector-curvature="0" class="cls-1" d="m 9.8505686,276.19358 h 6.5289694 a 0.73376039,0.7613551 0 1 0 0,-1.51753 H 9.8505686 a 0.73376039,0.7613551 0 1 0 0,1.51753 z" id="path22" style="stroke-width:0.50845605"/> <path inkscape:connector-curvature="0" class="cls-1" d="m 6.3814296,278.75732 -0.8286009,0.9271 -0.0549,-0.0724 a 0.73376039,0.7613551 0 0 0 -1.1380771,0.93228 l 0.584014,0.75618 a 0.72876884,0.75617583 0 0 0 0.5440809,0.27967 h 0.02996 a 0.74873511,0.77689297 0 0 0 0.5291061,-0.23307 l 1.407622,-1.55378 a 0.73376039,0.7613551 0 0 0 -1.073187,-1.03587 z" id="path24" style="stroke-width:0.50845605"/> <path inkscape:connector-curvature="0" class="cls-1" d="m 9.8505686,280.79796 h 4.0930844 a 0.73376039,0.7613551 0 0 0 0,-1.51753 H 9.8505686 a 0.73376039,0.7613551 0 1 0 0,1.51753 z" id="path26" style="stroke-width:0.50845605"/> <path inkscape:connector-curvature="0" class="cls-1" d="m 6.3814296,283.34101 -0.8286009,0.92707 -0.0549,-0.0724 a 0.73376039,0.7613551 0 1 0 -1.1380771,0.94782 l 0.584014,0.75618 a 0.75372666,0.78207224 0 0 0 0.5440809,0.28485 h 0.02996 a 0.73376039,0.7613551 0 0 0 0.5340969,-0.24342 l 1.407623,-1.55378 a 0.73376039,0.7613551 0 1 0 -1.0731867,-1.03587 z" id="path28" style="stroke-width:0.50845605"/> <path inkscape:connector-curvature="0" class="cls-1" d="M 11.06851,283.88482 H 9.8505686 a 0.73376039,0.7613551 0 1 0 0,1.51753 H 11.06851 a 0.73376039,0.7613551 0 0 0 0,-1.51753 z" id="path30" style="stroke-width:0.50845605"/> </g></svg>
									Verificación del pedido
								</li>

								<li id="shipment-data" class="progressbar-item">
									<svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" viewBox="0 0 26.09 20" version="1.1" id="svg30" sodipodi:docname="datos-de-envio-bio.svg" inkscape:version="0.92.3 (2405546, 2018-03-11)"> <metadata id="metadata34"> <rdf:RDF> <cc:Work rdf:about=""> <dc:format>image/svg+xml</dc:format> <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/> </cc:Work> </rdf:RDF> </metadata> <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="1920" inkscape:window-height="1017" id="namedview32" showgrid="false" inkscape:zoom="16.68772" inkscape:cx="32.238103" inkscape:cy="-0.78023136" inkscape:window-x="-8" inkscape:window-y="-8" inkscape:window-maximized="1" inkscape:current-layer="svg30"/> <defs id="defs4"> <style id="style2">.cls-1{fill:#eba900;}</style> </defs> <title id="title6">en-camino-bio-mercados</title> <rect style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:none;stroke-opacity:1" id="rect841" width="20.982712" height="5.1301694" x="4.237288" y="11.48" ry="0.0645146"/> <rect style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.73681211;stroke-opacity:1" id="rect841-0" width="21.194576" height="2.757288" x="4.1611862" y="10.595932" ry="0.034674358"/> <rect style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:1.17707145;stroke-opacity:1" id="rect841-0-3" width="15.518463" height="9.6105976" x="-1.8213768" y="7.8415132" ry="0.12085835" transform="matrix(0.99992374,-0.01235001,0.70867613,0.70553395,0,0)"/> <rect style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.79678148;stroke-opacity:1" id="rect841-0-0" width="9.711525" height="7.0369492" x="3.7671187" y="5.4857626" ry="0.08849337"/> <circle style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:none;stroke-opacity:1" id="path879" cx="5.6029224" cy="5.6181674" r="5.0026026"/> <g id="Capa_2" data-name="Capa 2" transform="translate(0.0033536,-1.0790039e-4)"> <g id="Perfil_de_Usuario" data-name="Perfil de Usuario"> <path inkscape:connector-curvature="0" class="cls-1" d="M 26,11 20.6,5.6 A 1.26,1.26 0 0 0 19.68,5.22 h -7.51 v 0.87 h 2.18 v 6.52 h 0.87 V 6.09 h 4.42 a 0.45,0.45 0 0 1 0.31,0.12 l 0.74,0.75 h -2 a 0.87,0.87 0 0 0 -0.87,0.87 v 3.91 a 0.87,0.87 0 0 0 0.87,0.87 h 6.52 v 3.48 a 0.44,0.44 0 0 1 -0.44,0.43 h -0.9 a 3,3 0 0 0 -6,0 H 11.7 a 3,3 0 0 0 -6,0 H 4.78 A 0.43,0.43 0 0 1 4.35,16.09 V 12.17 H 3.48 v 3.92 a 1.3,1.3 0 0 0 1.3,1.3 h 0.91 a 3,3 0 0 0 0.88,1.74 H 0 V 20 h 20.87 a 3,3 0 0 0 3,-2.61 h 0.9 a 1.31,1.31 0 0 0 1.31,-1.3 V 11.3 A 0.43,0.43 0 0 0 26,11 Z M 6.52,17 A 2.18,2.18 0 1 1 8.7,19.13 2.19,2.19 0 0 1 6.52,17 Z m 4.3,2.17 a 3,3 0 0 0 0.88,-1.74 h 6.16 a 3.13,3.13 0 0 0 0.88,1.74 z m 10.05,0 A 2.18,2.18 0 1 1 23,17 2.17,2.17 0 0 1 20.83,19.17 Z M 18.7,11.74 V 7.83 h 2.86 l 3.66,3.65 v 0.26 z" id="path8"/> <path inkscape:connector-curvature="0" class="cls-1" d="M 5.65,11.3 A 5.65,5.65 0 1 0 0,5.65 5.65,5.65 0 0 0 5.65,11.3 Z m 0,-10.43 A 4.78,4.78 0 1 1 0.87,5.65 4.78,4.78 0 0 1 5.65,0.87 Z" id="path20"/> <path inkscape:connector-curvature="0" class="cls-1" d="M 5.65,9.57 A 0.44,0.44 0 0 0 6,9.44 C 6.24,9.16 8.7,6.65 8.7,4.78 a 3.045,3.045 0 0 0 -6.09,0 c 0,1.87 2.45,4.38 2.73,4.66 a 0.48,0.48 0 0 0 0.31,0.13 z m 0,-7 A 2.18,2.18 0 0 1 7.83,4.78 C 7.83,5.9 6.46,7.62 5.65,8.5 4.85,7.62 3.48,5.9 3.48,4.78 A 2.17,2.17 0 0 1 5.65,2.61 Z" id="path22"/> <path inkscape:connector-curvature="0" class="cls-1" d="M 7,4.78 A 1.31,1.31 0 1 0 5.65,6.09 1.31,1.31 0 0 0 7,4.78 Z m -1.74,0 A 0.43,0.43 0 0 1 5.69,4.35 0.44,0.44 0 0 1 6.13,4.78 0.44,0.44 0 0 1 5.69,5.22 0.44,0.44 0 0 1 5.26,4.78 Z" id="path24"/> </g> </g> <path style="stroke:none;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 1.3033536,11.739892 v 0.87 h 0.8700001 v -0.87 z" id="path829" inkscape:connector-curvature="0"/> <path style="stroke:none;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 8.2633536,16.519893 v 0.87 h 0.8700001 v -0.87 z" id="path829-0" inkscape:connector-curvature="0"/> <path style="stroke:none;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 20.433355,16.519893 v 0.87 h 0.87 v -0.87 z" id="path829-0-9" inkscape:connector-curvature="0"/> <path style="stroke:none;stroke-width:1.2279979px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 0.86141189,13.479892 v 0.87 H 2.1733537 v -0.87 z" id="path829-3" inkscape:connector-curvature="0"/> <path style="stroke:none;stroke-width:1.58054018px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 0,15.219892 v 0.87 h 2.1733537 v -0.87 z" id="path829-3-0" inkscape:connector-curvature="0"/> <path style="stroke:none;stroke-width:1.41245294px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 16.523354,13.479892 v 0.87 h 1.735671 v -0.87 z" id="path829-3-8" inkscape:connector-curvature="0"/></svg>
									Datos de envío
								</li>

								<li id="pay-invoice" class="progressbar-item">
									<svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="100" height="100" viewBox="0 0 26.458333 26.458334" version="1.1" id="svg954" sodipodi:docname="pagar-factura-bio.svg" inkscape:version="0.92.3 (2405546, 2018-03-11)"> <defs id="defs948"/> <sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="5.6" inkscape:cx="-34.488683" inkscape:cy="38.724245" inkscape:document-units="mm" inkscape:current-layer="layer1" showgrid="false" units="px" inkscape:window-width="1920" inkscape:window-height="1017" inkscape:window-x="-8" inkscape:window-y="-8" inkscape:window-maximized="1"/> <metadata id="metadata951"> <rdf:RDF> <cc:Work rdf:about=""> <dc:format>image/svg+xml</dc:format> <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/> <dc:title/> </cc:Work> </rdf:RDF> </metadata> <g inkscape:label="Capa 1" inkscape:groupmode="layer" id="layer1" transform="translate(0,-270.54165)"> <path inkscape:connector-curvature="0" class="cls-1" d="m 153.84198,107.43888 h -1.29117 v -0.57943 a 1.5266458,1.5266458 0 0 0 -1.16152,-1.47373 v -4.07194 a 0.38629167,0.38629167 0 0 0 -0.38894,-0.38629 h -9.1731 a 0.38629167,0.38629167 0 0 0 -0.38629,0.38629 v 10.62038 a 0.38629167,0.38629167 0 0 0 0.38629,0.38893 h 5.969 v 0.31221 a 1.5213542,1.5213542 0 0 0 1.52135,1.51606 h 3.39461 a 1.5187083,1.5187083 0 0 0 1.51871,-1.51606 v -4.81012 a 0.38629167,0.38629167 0 0 0 -0.38894,-0.3863 z m -2.0664,-0.57943 v 0.57943 h -1.524 v -0.57943 a 0.762,0.762 0 0 1 1.524,0 z m -9.55939,4.68841 v -9.84514 h 8.39787 v 3.70416 a 1.524,1.524 0 0 0 -1.13771,1.4658 v 0.57943 h -1.29116 a 0.38629167,0.38629167 0 0 0 -0.38894,0.3863 v 3.70945 z m 11.2395,1.08744 a 0.74347917,0.74347917 0 0 1 -0.74348,0.74083 h -3.39461 a 0.74347917,0.74347917 0 0 1 -0.74612,-0.74083 v -4.42119 h 0.90487 v 1.0213 a 0.3889375,0.3889375 0 0 0 0.77523,0 v -1.0213 h 1.524 v 1.0213 a 0.3889375,0.3889375 0 0 0 0.77523,0 v -1.0213 h 0.90488 z" id="path18" style="stroke-width:0.26458332"/> <rect style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.27696145;stroke-opacity:1" id="rect820" width="23.020847" height="17.173929" x="1.6973457" y="271.86725"/> <path inkscape:connector-curvature="0" class="cls-1" d="m 20.443293,290.98672 a 0.47909954,0.55825186 0 0 0 -0.663706,0.14344 5.305258,6.1817433 0 0 1 -0.483497,0.70676 5.1909776,6.0485822 0 0 1 -0.465913,0.51215 0.47470412,0.5531303 0 0 0 -0.06153,0.79386 0.46591328,0.54288714 0 0 0 0.360422,0.19975 0.49668118,0.57873818 0 0 0 0.312076,-0.13318 6.3689471,7.4211648 0 0 0 0.54503,-0.60433 6.8436511,7.9742951 0 0 0 0.580195,-0.82971 0.48349495,0.56337346 0 0 0 -0.123067,-0.78872 z" id="path68" style="stroke-width:0.474462"/> <path inkscape:connector-curvature="0" class="cls-1" d="m 17.726931,293.21974 v 0 a 0.47909954,0.55825186 0 0 0 0.193396,1.06528 0.48789034,0.56849502 0 0 0 0.189003,-0.0461 0.08790818,0.10243154 0 0 0 0.03517,0 0.48381714,0.56374887 0 1 0 -0.404379,-1.02432 z" id="path70" style="stroke-width:0.474462"/> <path inkscape:connector-curvature="0" class="cls-1" d="M 24.029947,270.99209 H 2.4265123 a 1.4285078,1.6645124 0 0 0 -1.428508,1.66452 v 15.60031 a 1.4285078,1.6645124 0 0 0 1.428508,1.66452 H 12.483206 a 8.0084343,9.3315131 0 0 0 2.237263,4.54283 c 1.230716,1.39307 2.637246,2.13571 3.186674,2.13571 0.549425,0 1.951561,-0.74264 3.182274,-2.13571 a 7.9732711,9.2905403 0 0 0 2.237263,-4.54283 h 0.703267 a 1.4329032,1.669634 0 0 0 1.419715,-1.66452 v -15.60031 a 1.4329032,1.669634 0 0 0 -1.419715,-1.66452 z M 1.9518083,275.44274 H 24.50465 v 2.22789 H 1.9518083 Z m 0.474704,-3.33926 H 24.029947 a 0.47470412,0.5531303 0 0 1 0.474703,0.55313 v 1.67474 H 1.9518083 v -1.67474 a 0.47470412,0.5531303 0 0 1 0.474704,-0.55313 z M 20.447688,293.6141 a 6.0568729,7.0575329 0 0 1 -2.549338,1.85401 6.0348961,7.0319252 0 0 1 -2.558128,-1.81305 7.0722122,8.240617 0 0 1 -2.136168,-5.99736 v -2.76052 a 21.537501,25.095725 0 0 0 4.6899,-2.30983 22.152859,25.812747 0 0 0 4.698693,2.30983 v 2.74004 a 7.0722122,8.240617 0 0 1 -2.136168,6.01784 z m 3.573467,-4.82966 h -0.540637 a 8.197437,9.5517409 0 0 0 0.05715,-1.16772 v -3.14465 a 0.4703087,0.54800873 0 0 0 -0.351632,-0.51215 21.379266,24.911349 0 0 1 -5.050324,-2.47372 0.4703087,0.54800873 0 0 0 -0.479101,0 20.768304,24.199449 0 0 1 -5.041534,2.43787 0.4703087,0.54800873 0 0 0 -0.351632,0.51215 v 3.16515 a 8.197437,9.5517409 0 0 0 0.05715,1.16772 H 2.4265123 a 0.4703087,0.54800873 0 0 1 -0.474704,-0.54802 V 278.8025 H 24.50465 v 9.45442 a 0.47470412,0.5531303 0 0 1 -0.474703,0.54802 z" id="path72" style="stroke-width:0.474462"/> <path inkscape:connector-curvature="0" class="cls-1" d="m 6.729618,282.68465 a 2.1977043,2.5607884 0 0 0 -0.835129,0.19462 2.1537501,2.5095725 0 0 0 -2.9844817,2.30983 2.1449594,2.4993295 0 0 0 2.9844817,2.30472 2.1054007,2.4532353 0 0 0 0.835129,0.19973 2.1493547,2.504451 0 0 0 0,-5.0089 z m -2.8658076,2.50445 a 1.1955511,1.3930689 0 1 1 1.1955506,1.38795 1.1955511,1.3930689 0 0 1 -1.1955506,-1.38795 z m 2.9844826,1.38284 a 2.1141914,2.4634784 0 0 0 0.360423,-1.38284 2.1361685,2.4890863 0 0 0 -0.360423,-1.38795 1.1955511,1.3930689 0 0 1 0,2.77079 z" id="path74" style="stroke-width:0.474462"/> <path inkscape:connector-curvature="0" class="cls-1" d="M 3.3847113,281.29158 H 5.841744 a 0.47909954,0.55825186 0 1 0 0,-1.1165 H 3.3847113 a 0.47909954,0.55825186 0 0 0 0,1.1165 z" id="path76" style="stroke-width:0.474462"/> <path inkscape:connector-curvature="0" class="cls-1" d="m 7.230693,281.29158 h 0.02637 a 0.47909954,0.55825186 0 0 0 0,-1.1165 h -0.02637 a 0.47909954,0.55825186 0 0 0 0,1.1165 z" id="path78" style="stroke-width:0.474462"/> <path inkscape:connector-curvature="0" class="cls-1" d="m 19.849913,286.35682 -2.553734,2.97564 -1.318622,-1.53648 a 0.47909954,0.55825186 0 0 0 -0.676893,0.78873 l 1.67465,1.95132 a 0.48789034,0.56849502 0 0 0 0.338447,0.16395 0.47909954,0.55825186 0 0 0 0.338448,-0.16395 l 2.892178,-3.37 a 0.47470412,0.5531303 0 0 0 0,-0.78873 0.48349495,0.56337346 0 0 0 -0.694474,-0.0205 z" id="path80" style="stroke-width:0.474462"/> </g></svg>
									Pagar Factura
								</li>

								<li id="purchase-completed" class="progressbar-item">
									<svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="100" height="100" viewBox="0 0 26.458333 26.458334" version="1.1" id="svg954" sodipodi:docname="compra-completada-bio.svg" inkscape:version="0.92.3 (2405546, 2018-03-11)"> <defs id="defs948"/> <sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="5.6" inkscape:cx="-1.5422546" inkscape:cy="38.724245" inkscape:document-units="mm" inkscape:current-layer="layer1" showgrid="false" units="px" inkscape:window-width="1920" inkscape:window-height="1017" inkscape:window-x="-8" inkscape:window-y="-8" inkscape:window-maximized="1"/> <metadata id="metadata951"> <rdf:RDF> <cc:Work rdf:about=""> <dc:format>image/svg+xml</dc:format> <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/> <dc:title/> </cc:Work> </rdf:RDF> </metadata> <g inkscape:label="Capa 1" inkscape:groupmode="layer" id="layer1" transform="translate(0,-270.54165)"> <path inkscape:connector-curvature="0" class="cls-1" d="m 152.47182,104.93479 h -1.29117 v -0.57943 a 1.5266458,1.5266458 0 0 0 -1.16152,-1.47373 v -4.071945 a 0.38629167,0.38629167 0 0 0 -0.38894,-0.38629 h -9.1731 a 0.38629167,0.38629167 0 0 0 -0.38629,0.38629 v 10.620385 a 0.38629167,0.38629167 0 0 0 0.38629,0.38893 h 5.969 v 0.31221 a 1.5213542,1.5213542 0 0 0 1.52135,1.51606 h 3.39461 a 1.5187083,1.5187083 0 0 0 1.51871,-1.51606 v -4.81012 a 0.38629167,0.38629167 0 0 0 -0.38894,-0.3863 z m -2.0664,-0.57943 v 0.57943 h -1.524 v -0.57943 a 0.762,0.762 0 0 1 1.524,0 z m -9.55939,4.68841 v -9.845145 h 8.39787 v 3.704165 a 1.524,1.524 0 0 0 -1.13771,1.4658 v 0.57943 h -1.29116 a 0.38629167,0.38629167 0 0 0 -0.38894,0.3863 v 3.70945 z m 11.2395,1.08744 a 0.74347917,0.74347917 0 0 1 -0.74348,0.74083 h -3.39461 a 0.74347917,0.74347917 0 0 1 -0.74612,-0.74083 v -4.42119 h 0.90487 v 1.0213 a 0.3889375,0.3889375 0 0 0 0.77523,0 v -1.0213 h 1.524 v 1.0213 a 0.3889375,0.3889375 0 0 0 0.77523,0 v -1.0213 h 0.90488 z" id="path18" style="stroke-width:0.26458332"/> <rect style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.26458332;stroke-opacity:1" id="rect815" width="7.50734" height="5.3258348" x="9.7840652" y="279.89655" ry="0.017069498"/> <rect style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.20391062;stroke-opacity:1" id="rect835" width="0.75056797" height="5.325839" x="17.102013" y="280.09656" ry="0.019711599"/> <rect style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.17213303;stroke-opacity:1" id="rect835-0" width="0.70332098" height="4.0501695" x="17.653" y="280.09656" ry="0.014990185"/> <rect style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.15452284;stroke-opacity:1" id="rect835-0-6" width="1.0180732" height="2.2547827" x="17.852581" y="280.09656" ry="0.0083452333"/> <path inkscape:connector-curvature="0" class="cls-1" d="m 19.328808,279.8071 -7.972015,-0.35232 a 0.41133633,0.41612291 0 1 0 -0.03482,0.8315 l 7.428705,0.32413 -1.459273,4.61197 h -6.502298 l -1.1736883,-6.46873 a 0.41793009,0.42279337 0 0 0 -0.25424,-0.31357 l -1.925963,-0.76455 a 0.41133334,0.41611989 0 0 0 -0.299515,0.77512 l 1.71003,0.67998 1.1945843,6.58502 a 0.41096457,0.41574683 0 0 0 0.407481,0.35232 h 0.195035 l -0.449276,1.27191 a 0.34827506,0.35232779 0 0 0 0.0383,0.31709 0.34827506,0.35232779 0 0 0 0.282103,0.14799 h 0.31693 a 1.2363765,1.2507637 0 1 0 2.159305,0.83501 1.2259282,1.2401939 0 0 0 -0.320412,-0.83501 h 2.709579 a 1.2328937,1.2472405 0 0 0 0.915964,2.08577 1.2398592,1.254287 0 0 0 1.239858,-1.25076 1.2259282,1.2401939 0 0 0 -0.320413,-0.83501 h 0.386585 a 0.34827726,0.35233004 0 1 0 0,-0.70466 h -6.58588 l 0.369171,-1.05699 h 6.216709 a 0.41096457,0.41574683 0 0 0 0.39355,-0.28891 l 1.716997,-5.42233 a 0.41793009,0.42279337 0 0 0 -0.05224,-0.35232 0.42489559,0.42983994 0 0 0 -0.320413,-0.17969 z m -3.043925,8.27267 a 0.5502746,0.55667796 0 1 1 -0.546792,0.55667 0.5502746,0.55667796 0 0 1 0.546792,-0.55667 z m -4.527575,0 a 0.5502746,0.55667796 0 1 1 -0.553757,0.55667 0.54679186,0.55315466 0 0 1 0.553757,-0.55667 z m 6.488363,-13.7866 0.599035,-1.05697 a 0.40174511,0.40642006 0 1 1 0.696549,0.40518 l -0.599033,1.05698 a 0.39703356,0.40165372 0 0 1 -0.348274,0.20083 0.41096457,0.41574683 0 0 1 -0.198517,-0.0529 0.40051633,0.40517699 0 0 1 -0.146276,-0.55316 z m 3.876303,4.32307 a 0.40051633,0.40517699 0 0 1 0.146275,-0.55315 l 1.044826,-0.60601 a 0.40174672,0.4064217 0 1 1 0.400516,0.70466 l -1.044825,0.60599 a 0.34827506,0.35232779 0 0 1 -0.198517,0.0564 0.40051633,0.40517699 0 0 1 -0.348275,-0.20435 z m 3.357371,5.15456 a 0.40051633,0.40517699 0 0 1 -0.400517,0.40518 H 23.87728 a 0.40051932,0.40518001 0 0 1 0,-0.81036 h 1.201548 a 0.39703356,0.40165372 0 0 1 0.400517,0.40518 z m -1.633411,6.16573 a 0.40051633,0.40517699 0 0 1 -0.348274,0.20435 0.42141283,0.42631664 0 0 1 -0.201999,-0.0564 l -1.044826,-0.606 a 0.40051633,0.40517699 0 0 1 -0.146275,-0.55316 0.39703356,0.40165372 0 0 1 0.543309,-0.14797 l 1.044826,0.606 a 0.39703356,0.40165372 0 0 1 0.146275,0.55315 z m -4.315127,3.96017 a 0.40051633,0.40517699 0 0 1 -0.146276,0.55316 0.36917156,0.37346747 0 0 1 -0.198517,0.0529 0.39703356,0.40165372 0 0 1 -0.348274,-0.20082 l -0.599033,-1.05698 a 0.40174503,0.40641998 0 0 1 0.696549,-0.40518 z m -5.840572,0.58486 v 1.21553 a 0.40051659,0.40517725 0 1 1 -0.801033,0 v -1.21553 a 0.40051659,0.40517725 0 0 1 0.801033,0 z m -5.3460223,-1.23314 -0.602516,1.05698 a 0.40399906,0.40870026 0 0 1 -0.546792,0.14797 0.40399906,0.40870026 0 0 1 -0.146276,-0.55315 l 0.602516,-1.05698 a 0.40174598,0.40642095 0 1 1 0.696551,0.40518 z m -3.8763021,-4.32659 a 0.39703356,0.40165372 0 0 1 -0.1462754,0.55315 l -1.0448246,0.60953 a 0.41793009,0.42279337 0 0 1 -0.1985168,0.0564 0.40051633,0.40517699 0 0 1 -0.2019996,-0.7575 l 1.0448254,-0.60958 a 0.40399906,0.40870026 0 0 1 0.546791,0.14798 z M 2.7021567,284.17598 H 1.5006078 a 0.40051932,0.40518001 0 1 1 0,-0.81036 h 1.2015489 a 0.40051932,0.40518001 0 0 1 0,0.81036 z m 1.7657539,-5.55974 a 0.40051633,0.40517699 0 0 1 -0.3482742,0.20435 0.38310256,0.38756061 0 0 1 -0.1985168,-0.0564 l -1.0448254,-0.60596 a 0.40174476,0.40641971 0 0 1 0.4005164,-0.70465 l 1.0448246,0.606 a 0.40051633,0.40517699 0 0 1 0.1462754,0.55316 z m 2.5807181,-4.97135 a 0.40174545,0.40642043 0 0 1 0.69655,-0.40518 l 0.602517,1.05699 a 0.40051633,0.40517699 0 0 1 -0.146275,0.55316 0.41444733,0.4192701 0 0 1 -0.202001,0.0529 0.39703356,0.40165372 0 0 1 -0.348275,-0.20083 z m 5.8405733,-0.58486 v -1.21554 a 0.40051659,0.40517725 0 0 1 0.801033,0 v 1.21554 a 0.40051659,0.40517725 0 0 1 -0.801033,0 z" id="path42" style="stroke-width:0.35029563"/> </g></svg>
									Compra Completada
								</li>
							</ul>
							<fieldset>
								<div class="product-list">
									<div class="row">
										<div class="col-12 col-lg-8">
											<div class="row">
												<div class="col-12">
													<div class="wizard-title">
														<h3>Mi carrito de compras <span class="quantity-span">31</span></h3>
													</div>
												</div>
												<div class="col-6 col-lg-12">
													<div class="product-block">
														<div class="product-img">
															<img src="assets/img/producto-bio-006.jpg">
														</div>
														<div class="product-content">
															<a href="#" class="product-title">Mantequilla</a>
															<span class="product-info">Descripción: 500 gramos</span>
															<div class="product-quantity">
																<label>Cantidad</label>
																<div class="product-quantity-group">
																	<input id="quantity2" class="form-control" type="text" name="quantity" value="5">
																	<div class="product-quantity-buttons">
																		<button type="button" class="btn" onclick="increaseValue2()">
																			<img src="assets/img/increase.png" alt="Increase">
																		</button>
																		<button type="button" class="btn" onclick="decreaseValue2()">
																			<img src="assets/img/decrease.png" alt="decrease">
																		</button>
																	</div>
																</div>										
															</div>
															<div class="product-prices">
																<span class="product-descount">$ 4 / Bs 180.000</span>
																<p>$ 3 / Bs 135.000</p>
															</div>
														</div>
														<div class="product-add">
															<span class="product-info">Total a pagar:</b></span>
															<div class="product-prices">
																<p>$ 15 / Bs 675.000</p>
															</div>
															<div class="remove-product">
																<button class="btn btn-delete-section" type="button">Eliminar del carrito <img src="assets/img/eliminar-bio-mercados.svg"></button>
															</div>
														</div>
													</div>
												</div>
												<div class="col-6 col-lg-12">
													<div class="product-block">
														<div class="product-img">
															<img src="assets/img/combo-bio-006.jpg">
														</div>
														<div class="product-content">
															<a href="#" class="product-title" data-toggle="modal" data-target="#ModalProdCombo">Pizza Bio</a>
															<span class="product-info">Descripción: 11 productos</span>
															<div class="product-quantity">
																<label>Cantidad</label>
																<div class="product-quantity-group">
																	<input id="quantity2" class="form-control" type="text" name="quantity" value="1">
																	<div class="product-quantity-buttons">
																		<button type="button" class="btn" onclick="increaseValue2()">
																			<img src="assets/img/increase.png" alt="Increase">
																		</button>
																		<button type="button" class="btn" onclick="decreaseValue2()">
																			<img src="assets/img/decrease.png" alt="decrease">
																		</button>
																	</div>
																</div>										
															</div>
															<div class="product-prices">
																<span></span>
																<p>$ 10 / Bs 450.000</p>
															</div>
														</div>
														<div class="product-add">
															<span class="product-info">Total a pagar:</b></span>
															<div class="product-prices">
																<p>$ 10 / Bs 450.000</p>
															</div>
															<div class="remove-product">
																<button class="btn btn-delete-section" type="button">Eliminar del carrito <img src="assets/img/eliminar-bio-mercados.svg"></button>
															</div>
														</div>
													</div>
												</div>
												<div class="col-6 col-lg-12">
													<div class="product-block">
														<div class="product-img">
															<img src="assets/img/producto-bio-001.jpg">
														</div>
														<div class="product-content">
															<a href="#" class="product-title">Aceite de maiz</a>
															<span class="product-info">Descripción: 500 gramos</span>
															<div class="product-quantity">
																<label>Cantidad</label>
																<div class="product-quantity-group">
																	<input id="quantity2" class="form-control" type="text" name="quantity" value="7">
																	<div class="product-quantity-buttons">
																		<button type="button" class="btn" onclick="increaseValue2()">
																			<img src="assets/img/increase.png" alt="Increase">
																		</button>
																		<button type="button" class="btn" onclick="decreaseValue2()">
																			<img src="assets/img/decrease.png" alt="decrease">
																		</button>
																	</div>
																</div>										
															</div>
															<div class="product-prices">
																<span></span>
																<p>$ 1 / Bs 45.000</p>
															</div>
														</div>
														<div class="product-add">
															<span class="product-info">Total a pagar:</b></span>
															<div class="product-prices">
																<p>$ 7 / Bs 315.000</p>
															</div>
															<div class="remove-product">
																<button class="btn btn-delete-section" type="button">Eliminar del carrito <img src="assets/img/eliminar-bio-mercados.svg"></button>
															</div>
														</div>
													</div>
												</div>
												<div class="col-6 col-lg-12">
													<div class="product-block">
														<div class="product-img">
															<img src="assets/img/producto-bio-005.jpg">
														</div>
														<div class="product-content">
															<a href="#" class="product-title">Jabón de baño</a>
															<span class="product-info">Descripción: 500 gramos</span>
															<div class="product-quantity">
																<label>Cantidad</label>
																<div class="product-quantity-group">
																	<input id="quantity2" class="form-control" type="text" name="quantity" value="8">
																	<div class="product-quantity-buttons">
																		<button type="button" class="btn" onclick="increaseValue2()">
																			<img src="assets/img/increase.png" alt="Increase">
																		</button>
																		<button type="button" class="btn" onclick="decreaseValue2()">
																			<img src="assets/img/decrease.png" alt="decrease">
																		</button>
																	</div>
																</div>										
															</div>
															<div class="product-prices">
																<span></span>
																<p>$ 1.5 / Bs 67.500</p>
															</div>
														</div>
														<div class="product-add">
															<span class="product-info">Total a pagar:</b></span>
															<div class="product-prices">
																<p>$ 12 / Bs 540.000</p>
															</div>
															<div class="remove-product">
																<button class="btn btn-delete-section" type="button">Eliminar del carrito <img src="assets/img/eliminar-bio-mercados.svg"></button>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-12">
													<div class="wizard-footer-buttons">
														<a href="/catalago.php" type="button" class="btn btn-link">Seguir comprando</a>
														<div class="action-buttons-group">
															<button type="button" name="next" class="btn btn-submit next action-button">CONFIRMAR PEDIDO</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-lg-4">
											<div class="card">
												<div class="order-block">
													<div class="row">
														<div class="col-lg-12">
															<h3 class="order-number order-text">Resumen de la compra</h3>
															<div class="order-content">
																<div class="order-description">
																	<div class="row">
																		<p>25 Artículos</p>
																		<h3 class="order-text">34$ / Bs 1.535.000</h3>
																	</div>
																	<div class="row">
																		<p>Pizza Bio (11 Articulos)</p>
																		<h3 class="order-text">10$ / Bs 450.000</h3>
																	</div>
																	<div class="row">
																		<p>25 Artículos</p>
																		<h3 class="order-text">2$ / Bs 90.000</h3>
																	</div>
																</div>
																<div class="order-description order-total">
																	<div class="row">
																		<p>Total</p>
																		<h3 class="order-text">Bs 5.000.000 / 100$</h3>
																	</div>
																</div>
															</div>
															<div class="order-footer-buttons">
																<button type="button" name="next" class="btn btn-submit next action-button">CONFIRMAR PEDIDO</button>
																<a href="/catalago.php" type="button" class="btn btn-link">Seguir comprando</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<div class="user-profile">
									<div class="row">
										<div class="col-12 col-lg-8">
											<div class="info-block">
												<div class="row">
													<div class="col-12">
														<h5>Datos personales</h5>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label for="user-name">Nombre (s):</label>
															<input type="text" class="form-control" id="user-name" name="user-name" disabled="disabled" value="Pablo">
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label for="user-lastname">Apellido (s):</label>
															<input type="text" class="form-control" id="user-lastname" name="user-lastname" disabled="disabled" value="Mendoza">
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label for="user-email">Correo Electrónico:</label>
															<input type="email" class="form-control" id="user-email" name="user-email" disabled="disabled" value="micorreo@gmail.com">
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label for="user-contact-phone">Teléfono de Contacto:</label>
															<input type="text" class="form-control" id="user-contact-phone" name="user-contact-phone" disabled="disabled" value="04XX XXX XXXX">
														</div>
													</div>
												</div>
											</div>
											<div id="info-block-address" class="info-block">
												<div class="row">
													<div class="col-12">
														<h5>Dirección de Envío</h5>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label for="address-name">Elegir Dirección:</label>
															<input type="text" class="form-control dropdown-toggle" data-toggle="dropdown" aria-expanded="false" id="address-name" name="address-name" value="Mi Casa">
															<span class="dropdown-arrow dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></span>
															<div class="dropdown-menu">
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="mi-casa" name="radio-address" value="1">
																		<label for="mi-casa" class="custom-check">Mi Casa</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="mi-oficina" name="radio-address" value="2">
																		<label for="mi-oficina" class="custom-check">Mi Oficina</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="customized" name="radio-address" value="0">
																		<label for="customized" class="custom-check">Personalizada</label>
																	</div>
															    </div>
															</div>
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
															<label for="address-state">Estado:</label>
															<button class="btn btn-edit-info" type="button"><img src="assets/img/editar-bio-mercados.svg"></button>
															<button class="btn btn-confirm-info" type="button"><img src="assets/img/confirmar-bio-mercados.svg"></button>
															<input type="text" class="form-control dropdown-toggle" data-toggle="dropdown" aria-expanded="false" id="address-state" name="address-state" disabled="disabled" value="">
															<div class="dropdown-menu dropdown-menu-state">
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="amazonas" name="radio-state" value="Amazonas" checked="checked">
																		<label for="amazonas" class="custom-check">Amazonas</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="anzoategui" name="radio-state" value="Anzoátegui">
																		<label for="anzoategui" class="custom-check">Anzoátegui</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="apure" name="radio-state" value="Apure">
																		<label for="apure" class="custom-check">Apure</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="aragua" name="radio-state" value="Aragua">
																		<label for="aragua" class="custom-check">Aragua</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="bolivar" name="radio-state" value="Barinas">
																		<label for="barinas" class="custom-check">Barinas</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="bolivar" name="radio-state" value="Bolívar">
																		<label for="bolivar" class="custom-check">Bolívar</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="carabobo" name="radio-state" value="Carabobo">
																		<label for="carabobo" class="custom-check">Carabobo</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="cojedes" name="radio-state" value="Cojedes">
																		<label for="cojedes" class="custom-check">Cojedes</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="delta-amacuro" name="radio-state" value="Delta Amacuro">
																		<label for="delta-amacuro" class="custom-check">Delta Amacuro</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="falcon" name="radio-state" value="Falcón">
																		<label for="falcon" class="custom-check">Falcón</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="distrito-capital" name="radio-state" value="Distrito Capital">
																		<label for="distrito-capital" class="custom-check">Distrito Capital</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="guarico" name="radio-state" value="Guárico">
																		<label for="guarico" class="custom-check">Guárico</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="lara" name="radio-state" value="Lara">
																		<label for="lara" class="custom-check">Lara</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="merida" name="radio-state" value="Mérida">
																		<label for="merida" class="custom-check">Mérida</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="miranda" name="radio-state" value="Miranda">
																		<label for="miranda" class="custom-check">Miranda</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="monagas" name="radio-state" value="Monagas">
																		<label for="monagas" class="custom-check">Monagas</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="nueva-esparta" name="radio-state" value="Nueva Esparta">
																		<label for="nueva-esparta" class="custom-check">Nueva Esparta</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="portuguesa" name="radio-state" value="Portuguesa">
																		<label for="portuguesa" class="custom-check">Portuguesa</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="tachira" name="radio-state" value="Táchira">
																		<label for="tachira" class="custom-check">Táchira</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="trujillo" name="radio-state" value="Trujillo">
																		<label for="trujillo" class="custom-check">Trujillo</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="vargas" name="radio-state" value="Vargas">
																		<label for="vargas" class="custom-check">Vargas</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="yaracuy" name="radio-state" value="Yaracuy">
																		<label for="yaracuy" class="custom-check">Yaracuy</label>
																	</div>
															    </div>
															    <div class="dropdown-item">
																	<div class="form-check form-check-radio">
																		<input type="radio" class="form-check-input" id="zulia" name="radio-state" value="Zulia">
																		<label for="zulia" class="custom-check">Zulia</label>
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
												</div>
											</div>
											<div class="row">
												<div class="col-12">
													<div class="wizard-footer-buttons">
														<a href="/catalago.php" type="button" class="btn btn-link">Seguir comprando</a>
														<div class="action-buttons-group">
															<button type="button" name="previous" class="btn btn-link previous action-button">Volver atras</button>
															<button type="button" name="next" class="btn btn-submit next action-button">CONFIRMAR DIRECCIÓN</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-lg-4">
											<div class="card">
												<div class="order-block">
													<div class="row">
														<div class="col-lg-12">
															<h3 class="order-number order-text">Resumen de la compra</h3>
															<div class="order-content">
																<div class="order-description">
																	<div class="row">
																		<p>25 Artículos</p>
																		<h3 class="order-text">34$ / Bs 1.535.000</h3>
																	</div>
																	<div class="row">
																		<p>Pizza Bio (11 Articulos)</p>
																		<h3 class="order-text">10$ / Bs 450.000</h3>
																	</div>
																	<div class="row">
																		<p>25 Artículos</p>
																		<h3 class="order-text">2$ / Bs 90.000</h3>
																	</div>
																</div>
																<div class="order-description order-total">
																	<div class="row">
																		<p>Total</p>
																		<h3 class="order-text">Bs 5.000.000 / 100$</h3>
																	</div>
																</div>
															</div>
															<div class="order-footer-buttons">
																<button type="button" name="next" class="btn btn-submit next action-button">CONFIRMAR DIRECCIÓN</button>
																<a href="/catalago.php" type="button" class="btn btn-link">Seguir comprando</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<div class="payment-methods">
									<div class="row">
										<div class="col-12 col-lg-8">
											<div class="row">
												<div class="col-12">
													<h5>Elige el Método de Pago</h5>
												</div>
												<div class="col-lg-12">
													<div class="payment-option">
														<div class="form-check form-check-radio">
															<input type="radio" class="form-check-input" id="credit-card" name="payment-method">
															<label for="credit-card" class="custom-check"><span></span>Tarjeta de credito
																<div class="payment-imgs-group">
																	<img src="assets/img/master-bio-mercados.svg" alt="Master Card">
																	<img src="assets/img/visa-bio-mercados.svg" alt="Visa">
																	<img src="assets/img/american-bio-mercados.svg" alt="American Express">
																</div>
															</label>
														</div>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="payment-option">
														<div class="form-check form-check-radio">
															<input type="radio" class="form-check-input" id="paypal" name="payment-method">
															<label for="paypal" class="custom-check"><span></span>PayPal
																<div class="payment-imgs-group">
																	<img src="assets/img/paypal-bio-mercados.svg" alt="PayPal">
																</div>
															</label>
														</div>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="payment-option">
														<div class="form-check form-check-radio">
															<input type="radio" class="form-check-input" id="petro" name="payment-method">
															<label for="petro" class="custom-check"><span></span>Petro
																<div class="payment-imgs-group">
																	<img src="assets/img/petro-bio-mercados.svg" alt="Petro">
																</div>
															</label>
														</div>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="payment-option">
														<div class="form-check form-check-radio">
															<input type="radio" class="form-check-input" id="cryptocurrency" name="payment-method">
															<label for="cryptocurrency" class="custom-check"><span></span>Criptomoneda
																<div class="payment-imgs-group">
																	<img src="assets/img/bitcoin-bio-mercados.svg" alt="Bitcoin">
																	<img src="assets/img/ethereum-bio-mercaods.svg" alt="Ethereum">
																	<img src="assets/img/dash-bio-mercados.svg" alt="Dash">
																</div>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-12">
													<div class="wizard-footer-buttons">
														<a href="/catalago.php" type="button" class="btn btn-link">Seguir comprando</a>
														<div class="action-buttons-group">
															<button type="button" name="previous" class="btn btn-link previous action-button">Volver atras</button>
															<button type="button" name="next" class="btn btn-submit next action-button">CONFIRMAR PAGO</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-lg-4">
											<div class="card">
												<div class="order-block">
													<div class="row">
														<div class="col-lg-12">
															<h3 class="order-number order-text">Resumen de la compra</h3>
															<div class="order-content">
																<div class="order-description">
																	<div class="row">
																		<p>25 Artículos</p>
																		<h3 class="order-text">34$ / Bs 1.535.000</h3>
																	</div>
																	<div class="row">
																		<p>Pizza Bio (11 Articulos)</p>
																		<h3 class="order-text">10$ / Bs 450.000</h3>
																	</div>
																	<div class="row">
																		<p>25 Artículos</p>
																		<h3 class="order-text">2$ / Bs 90.000</h3>
																	</div>
																</div>
																<div class="order-description order-total">
																	<div class="row">
																		<p>Total</p>
																		<h3 class="order-text">Bs 5.000.000 / 100$</h3>
																	</div>
																</div>
																<div class="order-description">
																	<div class="row">
																		<label class="order-text">Datos Personales</label>
																		<p><b>Nombre y Apellido: </b>Pablo Mendoza</p>
																		<p><b>Teléfono de Contacto: </b>0414 123 4567</p>
																		<p><b>Correo Electrónico: </b>micorreo@gmail.com</p>
																	</div>
																</div>
																<div class="order-description">
																	<div class="row">
																		<label class="order-text">Dirección de envío</label>
																		<p>Urb Zaragoza, Avenida 1 entre calles 10 y 11, casa 57, Araure, Estado Portugesa 3303 (al lado del bodegón Girasol).</p>
																	</div>
																</div>
															</div>
															<div class="order-footer-buttons">
																<button type="button" name="next" class="btn btn-submit next action-button">CONFIRMAR PAGO</button>
																<button type="button" name="previous" class="btn btn-link previous action-button">Volver atras</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<div class="thanks">
									<div class="row">
										<div class="col-12">
											<div class="thanks-content">
												<img src="assets/img/compra-bio-mercados.svg" alt="Gracias por su compra">
												<h2 class="thanks-title">¡Gracias Por Su Compra!</h2>
												<p>La compra fue completada con éxito, bajo la orden número #3362, puede ver el estado de su pedido presionando clic en el número de orden o puede ir a su perfil > Mis pedidos.</p>
											</div>
											<div class="thanks-footer">
												<h3 class="order-text" data-toggle="modal" data-target="#ModalOrder">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.43 19.97"><title>mis-pedidos-bio-mercados</title><g id="Capa_2" data-name="Capa 2"><g id="Perfil_de_Usuario" data-name="Perfil de Usuario"><path d="M14.53,13h.32a.31.31,0,0,0,0-.61h0v-.82h.84a.27.27,0,0,0,.28.2.3.3,0,0,0,.31-.3v-.21A.31.31,0,0,0,16,11H14.53a.27.27,0,0,0-.21.09.29.29,0,0,0-.09.21v1.43a.31.31,0,0,0,.09.22.27.27,0,0,0,.21.09Z"/><path d="M14.53,15.76H16a.3.3,0,0,0,.3-.3V14a.3.3,0,0,0-.3-.3H14.53a.3.3,0,0,0-.3.3v1.43a.3.3,0,0,0,.3.3Zm.31-1.43h.82v.83h-.82Z"/><path d="M14.85,17.93h0v-.82h.82a.31.31,0,0,0,.61,0v-.29A.33.33,0,0,0,16,16.5H14.53a.32.32,0,0,0-.3.32v1.43a.29.29,0,0,0,.09.21.32.32,0,0,0,.21.08h.32a.31.31,0,0,0,0-.61Z"/><path d="M16.66,11.32l-.89.89-.27-.27a.3.3,0,0,0-.43.43l.49.49a.32.32,0,0,0,.43,0l1.1-1.11a.3.3,0,0,0-.43-.43Z"/><path d="M16.66,16.93l-.89.89-.27-.27a.3.3,0,0,0-.43.43l.49.48a.3.3,0,0,0,.43,0l1.1-1.1a.3.3,0,0,0-.43-.43Z"/><path d="M19.78,11.69H17.87a.3.3,0,1,0,0,.6h1.91a.3.3,0,0,0,0-.6Z"/><path d="M19.78,14.46H17.87a.31.31,0,0,0,0,.61h1.91a.31.31,0,0,0,0-.61Z"/><path d="M19.78,17.24H17.87a.31.31,0,0,0,0,.61h1.91a.31.31,0,0,0,0-.61Z"/><path d="M20.13,8.61H19.05a1.07,1.07,0,0,0-1-.78H16.88V5a.32.32,0,0,0-.15-.26L8.59,0a.32.32,0,0,0-.3,0L.15,4.74A.32.32,0,0,0,0,5v9.4a.33.33,0,0,0,.15.27l8.14,4.7a.32.32,0,0,0,.31,0l4.29-2.47v1.78a1.25,1.25,0,0,0,.37.92,1.28,1.28,0,0,0,.92.37h5.95a1.28,1.28,0,0,0,.92-.37,1.3,1.3,0,0,0,.38-.92V9.92a1.3,1.3,0,0,0-1.3-1.31ZM18,8.43a.44.44,0,0,1,.44.44v0a.44.44,0,0,1-.44.44H16.28a.43.43,0,0,1-.44-.44v0a.44.44,0,0,1,.44-.44ZM8.44.65l3.39,2L4.29,7,.91,5ZM8.16,18.58.61,14.23V5.53L8.16,9.88Zm.28-9.23-3.54-2L12.44,3,16,5Zm4.45.57V16.2L8.76,18.58V9.88l7.51-4.35v2.3h0a1.06,1.06,0,0,0-1,.78H14.18a1.29,1.29,0,0,0-1.29,1.31Zm7.93,8.76a.68.68,0,0,1-.2.49.7.7,0,0,1-.49.2H14.18a.7.7,0,0,1-.49-.2.68.68,0,0,1-.2-.49V9.92a.7.7,0,0,1,.69-.71h1.09a1,1,0,0,0,1,.74H18a1,1,0,0,0,1-.74h1.1a.71.71,0,0,1,.69.71Z"/></g></g></svg>
													Orden #3362
												</h3>
												<a href="/catalago.php" type="button" class="btn btn-submit">SEGUIR COMPRANDO</a>
											</div>
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>



<!-- CIERRE DEL MAIN-->

@stop