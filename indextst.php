<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PROPP</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.localscroll-1.2.7-min.js"></script>

<script type="text/javascript">

//função que ativa o parallax

$(document).ready(function(){
	$('#nav').localScroll(800);
	
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	$('#intro').parallax("50%", 0.1);
	$('#second').parallax("50%", 0.1);
	$('.bg').parallax("50%", 0.4);
	$('#third').parallax("50%", 0.3);

})

//função para ativar botão e aparecer objeto

function toggle(obj) {
			var el = document.getElementById(obj);
			if ( el.style.display != 'none' ) {
			el.style.display = 'none';
			}
			else {
			el.style.display = '';
			}
}


//função para fixar o menu a partir da pagina 2

$(function(){
	if($(window).scrollTop > $('#Pag2').offset().top){
			$('#menu').addClass('fixed-nav');
		}else{
			$('#menu').removeClass('fixed-nav');
		}
		
	$(window).scroll(function(){
	if($(this).scrollTop() > $('#Pag2').offset().top){
			$('#menu').addClass('fixed-nav');
		}else{
			$('#menu').removeClass('fixed-nav');
		}
	});
});

</script>

</head>

<body>
	<!--icones usados no site-->
	
	<svg display="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
		<defs>
		<g id="icon-phone">
			<path class="path1" d="M22 20c-2 2-2 4-4 4s-4-2-6-4-4-4-4-6 2-2 4-4-4-8-6-8-6 6-6 6c0 4 4.109 12.109 8 16s12 8 16 8c0 0 6-4 6-6s-6-8-8-6z"></path>
		</g>
		</defs></svg>
		
	<svg display="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
		<defs>
		<g id="icon-mail">
			<path class="path1" d="M28 5h-24c-2.209 0-4 1.792-4 4v13c0 2.209 1.791 4 4 4h24c2.209 0 4-1.791 4-4v-13c0-2.208-1.791-4-4-4zM2 10.25l6.999 5.25-6.999 5.25v-10.5zM30 22c0 1.104-0.898 2-2 2h-24c-1.103 0-2-0.896-2-2l7.832-5.875 4.368 3.277c0.533 0.398 1.166 0.6 1.8 0.6 0.633 0 1.266-0.201 1.799-0.6l4.369-3.277 7.832 5.875zM30 20.75l-7-5.25 7-5.25v10.5zM17.199 18.602c-0.349 0.262-0.763 0.4-1.199 0.4s-0.851-0.139-1.2-0.4l-12.8-9.602c0-1.103 0.897-2 2-2h24c1.102 0 2 0.897 2 2l-12.801 9.602z"></path>
		</g>
		</defs></svg>
		
	<svg display="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
		<defs>
		<g id="icon-add">
			<path class="path1" d="M16 32c-8.836 0-16-7.163-16-16s7.164-16 16-16c8.837 0 16 7.163 16 16s-7.163 16-16 16zM16 4c-6.627 0-12 5.373-12 12s5.373 12 12 12c6.628 0 12-5.373 12-12s-5.372-12-12-12zM18 24h-4v-6h-6v-4h6v-6h4v6h6v4h-6v6z"></path>
		</g>
		</defs></svg>
		
	<svg display="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="32" viewBox="0 0 80 32">
		<defs>
		<g id="icon-location">
			<path class="path1" d="M16 0c-5.523 0-10 4.477-10 10 0 10 10 22 10 22s10-12 10-22c0-5.523-4.477-10-10-10zM16 16.125c-3.383 0-6.125-2.742-6.125-6.125s2.742-6.125 6.125-6.125 6.125 2.742 6.125 6.125-2.742 6.125-6.125 6.125zM12.125 10c0-2.14 1.735-3.875 3.875-3.875s3.875 1.735 3.875 3.875c0 2.14-1.735 3.875-3.875 3.875s-3.875-1.735-3.875-3.875z"></path>
		</g>
	</defs></svg>

		
	<!--termino dos icones usados no site-->
	
	
	
	<!--
	----------------------------------------------------------
	PAG1 Banner
	------------------------------------------------------------
	-->	
        <header class="content">
			<section id="BannerPropp">
				<div class="figure">
				<?php
				if ($_GET['msg'] == 'ok'){
				echo'<p>Email enviado com sucesso!</p>';
				}
				?>
				<img class="banner" src="img/banner.png" alt="PROPP - Pró-Reitoria de Pesquisa e Pós Graduação">
				</div>
			</section>
		</header>

        <nav id="menu" class="fixed-nav">
            <div id="Navigation">
			
				<ul class="menu unfixed">
					<li class="button" id="Home"><a href="#Pag2" class="link-menu">Home</a></li>
					<li class="button" id="Sobre"><a href="#Pag3" class="link-menu">Sobre</a></li>
					<li class="button" id="Gerencias"><a href="#Pag5" class="link-menu">Gerências</a></li>
					<li id="caixa_propp" class="link-menu"><a>PROPP</a></li>
					<li class="button" id="#"><a href="#Pag6" class="link-menu">Notícias</a></li>
					<li class="button" id="#"><a href="#Pag7" class="link-menu">Contato</a></li>
					<li class="button" id="navtop"><a href="#" class="link-menu">Topo</a></li>
					
				</ul>

             </div>
         
        </nav>
	
	<!--
	----------------------------------------------------------
	PAG2 Home
	------------------------------------------------------------
	-->	
		
	<section id="Pag2">
		<div class="figure">
		<img class="uesc" src="img/uesc.jpg" alt="UESC">
		</div>
		
		<section id="anuncios" class="container">
			<div class="caixa_anuncio1">
			<p>Venha fazer parte</br>de um projeto inovador<p>
			</div>
			
			<div class="caixa_anuncio2">
			<p>Nossos parceiros estão esperando </br> por você, conheça nosso trabalho.<p>
			</div>
		</section>	
		
	</section>
	
	<!--
	----------------------------------------------------------
	PAG3 Sobre
	------------------------------------------------------------
	-->	
	
	<div id="Pag3">
		<section id="sobre" class="content">
			
			<nav id="box_sobre">
				<div class="caixa_sobre">
				<p>Sobre a PROPP<p>
				</div>
			</nav>
			
			<nav id="conteudo_sobre">
			<p>A Pró-Reitoria de Pesquisa e Pós-Graduação – PROPP – pertence à administração
			superior e responde diretamente à reitoria sobre assuntos de pesquisa e pós-graduação da UESC.
			</br>É composta por uma pró-reitoria, uma gerência e subgerência 
			de pós-graduação, uma gerência e subgerência de pesquisa e uma gerência de projetos institucionais.
			</br>A PROPP direciona suas ações para a consolidação da política e do programa de pesquisa, dos cursos de pós-graduação stricto  e lato sensu, bem como da política de capacitação docente, buscando estimular a produção do conhecimento na UESC, tendo como meta a excelência na pesquisa e no ensino de pós-graduação.
			</p>
			</nav>
			
			<nav id="box_comite">
				<div class="caixa_comite">
				<p>Programas<p>
					
				</div>
			</nav>	
			
			<nav id="conteudo_comite">
			<p>O programa de capacitação de docentes e do corpo técnico-administrativo tem impacto relevante no desenvolvimento institucional e no aprimoramento do fazer universitário.<br> PAP/UESC – programa de apoio à pesquisa consolida a pesquisa como diferencial para a produção de conhecimento científico de qualidade, visando à excelência em pesquisa e pós-graduação. <br>O programa de Iniciação Científica da UESC oferece condições para que os estudantes de ensino médio e de graduação conheçam o mundo da pesquisa e de novas formas de produção do conhecimento.  
			</p>
			</nav>
	
		</section>
	</div>
	
	<!--
	----------------------------------------------------------
	PAG4 Equipe
	------------------------------------------------------------
	-->	
	
	<section id="Pag4">
		<section id="equipe" class="container">
		
		
		<a href="#" onclick="toggle('div_contatos');
		document.getElementById('div_parceiros').style.display='none'; 
		document.getElementById('div_contatos').style.display=''; return false;">
			<div class="barra_equipe">
				<nav id="Titulos">
					<p>Equipe</p>
				</nav>
			</div>
		</a>
		
        

		<section id="div_contatos">
		<ul id="animation">
			
			<li>
				<a href="#" onclick="toggle('cont_propp'); 
				document.getElementById('cont_pesq').style.display='none';
				document.getElementById('cont_pos').style.display='none'; 
				document.getElementById('cont_pro').style.display='none';
				document.getElementById('cont_info').style.display='none';
				document.getElementById('cont_propp').style.display=''; return false;">
				Pró-reitoria de Pesquisa e Pós-Graduação
				</a>
			</li>
			<li>
				<a href="#" onclick="toggle('cont_pesq'); document.getElementById('cont_propp').style.display='none';
				document.getElementById('cont_pos').style.display='none'; 
				document.getElementById('cont_pro').style.display='none';
				document.getElementById('cont_info').style.display='none';
				document.getElementById('cont_pesq').style.display=''; return false;">
				Gerência de Pesquisa
				</a>
			</li>
			<li>
				<a href="#" onclick="toggle('cont_pos');
				document.getElementById('cont_propp').style.display='none';
				document.getElementById('cont_pesq').style.display='none'; 
				document.getElementById('cont_pro').style.display='none';
				document.getElementById('cont_info').style.display='none';
				document.getElementById('cont_pos').style.display='';return false;">
				Gerência de Pós-Graduação
				</a>
			</li>
			<li>
				<a href="#" onclick="toggle('cont_pro');
				document.getElementById('cont_propp').style.display='none';
				document.getElementById('cont_pesq').style.display='none'; 
				document.getElementById('cont_pos').style.display='none';
				document.getElementById('cont_info').style.display='none';
				document.getElementById('cont_pro').style.display='';return false;">
				Gerência de Projetos
				</a>
			</li>
			<li>
				<a href="#" onclick="toggle('cont_info'); 
				document.getElementById('cont_propp').style.display='none';
				document.getElementById('cont_pesq').style.display='none'; 
				document.getElementById('cont_pos').style.display='none';
				document.getElementById('cont_pro').style.display='none';
				document.getElementById('cont_info').style.display='';return false;">
				Secretaria de Informática
				</a>
			</li>
		</ul>
		
		<section id="divs_contato">
			
			<!-- contato Pró-Reitoria-->
			<div id="cont_propp" class="contatos">
				<p class="titulo">Pró-Reitoria de Pesquisa e Pós-Graduação </p>	
				<nav class="tel_icon">
					<svg class="icon icon-phone" viewBox="0 0 32 32"><use xlink:href="#icon-phone"></use></svg>
				</nav>	
				<p class="tel1">(73) 3680 – 5010 / 5011</p>
				<nav class="mail_icon">
					<svg class="icon icon-mail" viewBox="0 0 32 32"><use xlink:href="#icon-mail"></use></svg>
				</nav>	
				<p class="email1">propp@uesc.br</p>
				<p class="nome1">Élida Paulina Ferreira</p>
				<p class="cargo1">Pró-Reitora de Pesquisa e Pós-Graduação</p>
				<p class="nome1">Alzira Quadros Lima</p>
				<p class="cargo1">Secretária</p>
				<!--<div class="arrow-right"></div>-->
			</div>
			
			<!-- contato Pesquisa-->
			<div id="cont_pesq" class="contatos" style="display:none;">
				<p class="titulo">Gerência de Pesquisa </p>	
				<nav class="tel_icon">
					<svg class="icon icon-phone" viewBox="0 0 32 32"><use xlink:href="#icon-phone"></use></svg>
				</nav>
				<p class="tel1">(73) 3680 – 5258 / 5129</p>	
				<nav class="mail_icon2">
					<svg class="icon icon-mail" viewBox="0 0 32 32"><use xlink:href="#icon-mail"></use></svg>
				</nav>	
				<p class="email1"> gpesquisa@uesc.br</p>
				<p class="nome1">Daniela Mariano Lopes da Silva</p>
				<p class="cargo1">Gerente de Pesquisa</p>
				<p class="nome1">Camila Meneghetti</p>
				<p class="cargo1">Subgerente de Pesquisa</p>
				<div class="cont_continua">
					<p class="nome1">Sandra Lima Borges</p>
					<p class="cargo1">Secretária</p>
					<p class="nome1">Bruna Cardoso</p>
					<p class="cargo1">Estagiária</p>
					<p class="nome1">Viviane Almeida</p>
					<p class="cargo1">Estagiária</p>
				</div>
				<!--<div class="arrow-right1"></div>-->
			</div>
			
			<!-- contato Pós-Graduação-->
			<div id="cont_pos" class="contatos" style="display:none;">
				<p class="titulo">Gerência de Pós-Graduação </p>	
				<nav class="tel_icon">
					<svg class="icon icon-phone" viewBox="0 0 32 32"><use xlink:href="#icon-phone"></use></svg>
				</nav>
				<p class="tel1">(73) 3680 – 5101 / 5143</p>	
				<nav class="mail_icon">
					<svg class="icon icon-mail" viewBox="0 0 32 32"><use xlink:href="#icon-mail"></use></svg>
				</nav>	
				<p class="email1"> gepos@uesc.br</p>
				<p class="nome1">Paulo Eduardo Ambrósio</p>
				<p class="cargo1">Gerente de Pós-Graduação</p>
				<p class="nome1">Carla Martins Kaneto</p>
				<p class="cargo1">Subgerente de Pós-Graduação</p>
				<div class="cont_continua">
					<p class="nome1">Zaíra Zaidan</p>
					<p class="cargo1">Secretária</p>
					<p class="nome1">Angeline Bittencourt</p>
					<p class="cargo1">Estagiária</p>
				</div>
				<!--<div class="arrow-right2"></div>-->
			</div>
			
			<!-- contato Projetos-->

			<div id="cont_pro" class="contatos" style="display:none;">
				<p class="titulo">Gerência de Projetos </p>	
				<nav class="tel_icon2">
					<svg class="icon icon-phone" viewBox="0 0 32 32"><use xlink:href="#icon-phone"></use></svg>
				</nav>
				<p class="tel1">(73) 3680 - 5294</p>	
				<nav class="mail_icon2">
					<svg class="icon icon-mail" viewBox="0 0 32 32"><use xlink:href="#icon-mail"></use></svg>
				</nav>	
				<p class="email1"> gprojetos@uesc.br</p>
				<p class="nome1">George Albuquerque Rego</p>
				<p class="cargo1">Gerente de Pesquisa</p>
				<p class="nome1">Antonio Carlos dos Reis Júnior</p>
				<p class="cargo1">Analista Universitário</p>
				<div class="cont_continua">
					<!--<p class="nome1">Luciana Nalim Silva Menuchi</p>
					<p class="cargo1">Analista Universitária</p>-->
					
				</div>
				<!--<div class="arrow-right2"></div>-->
			</div>
			
			<!-- contato Web PROPP-->
			
			<div id="cont_info" class="contatos" style="display:none;">
				<p class="titulo">Secretária de Informática </p>	
				<nav class="tel_icon2">
					<svg class="icon icon-phone" viewBox="0 0 32 32"><use xlink:href="#icon-phone"></use></svg>
				</nav>
				<p class="tel1">(73) 3680 - 5258</p>	
				<nav class="mail_icon2">
					<svg class="icon icon-mail" viewBox="0 0 32 32"><use xlink:href="#icon-mail"></use></svg>
				</nav>	
				<p class="email1"> webpropp@uesc.br</p>
				<p class="nome1">Israel Madruga</p>
				<p class="cargo1">Assessor de Informática</p>
				<p class="nome1">Neymar Santos</p>
				<p class="cargo1">Assessor de Informática</p>
				<div class="cont_continua">
					<p class="nome1">Gersiline Beatriz Silva Oliveira</p>
					<p class="cargo1">Estagiária</p>
					
				</div>
				<!--<div class="arrow-right2"></div>-->
			</div>
		</section>
		</section>
		
		</section>
		
	<!--
	----------------------------------------------------------
	PAG4 Parceiros
	------------------------------------------------------------
	-->	
		
		

			
			<a href="#" onclick="toggle('div_parceiros'); return false;">
				<div id="barra_parceiros" class="local_barra"> 
					<nav id="Titulos">
						<p>Parceiros</p>
					</nav>
				</div>
			</a>
	
			
			<div id="div_parceiros" class="tam_con" style="display:none;">
						
				<div id="par1" class="div_par">
					<a href="http://www.cnpq.br/" target="_blank">
						<img class="par_icon" src="img/parceiros/cnpq.png" alt="CNPq">
					</a>
				</div>
				
				<div id="par2" class="div_par">
					<a href="http://www.capes.gov.br/" target="_blank">
						<img class="par_icon" src="img/parceiros/capes.png" alt="Capes">
					</a>
				</div>
				
				<div id="par3" class="div_par">
					<a href="http://www.finep.gov.br/" target="_blank">
						<img class="par_icon" src="img/parceiros/finep.png" alt="FINEP">
					</a>
				</div>
				
				<div id="par4" class="div_par">
					<a href="http://www.uefs.br/" target="_blank">
						<img class="par_icon" src="img/parceiros/uefs.png" alt="UEFS">
					</a>
				</div>
				
				<div id="par5" class="div_par">
					<a href="http://www.uesb.br/" target="_blank">
						<img class="par_icon" src="img/parceiros/uesb.png" alt="UESB">
					</a>
				</div>
				
				<div id="par6" class="div_par">
					<a href="http://www.ufba.br/" target="_blank">
						<img class="par_icon" src="img/parceiros/ufba.png" alt="UFBA">
					</a>
				</div>
				
				<div id="par7" class="div_par" target="_blank">
					<a href="http://www.biofabricadecacau.com.br/" target="_blank">
						<img class="par_icon" src="img/parceiros/biofabrica.png" alt="FAPESB">
					</a>
				</div>
				
				<div id="par8" class="div_par">
					<a href="http://www.fapesb.ba.gov.br/" target="_blank">
						<img class="par_icon" src="img/parceiros/fapesb.png" alt="FAPESB">
					</a>
				</div>
			
				<div id="par9" class="div_par">
					<a href="http://www.ceplac.gov.br/" target="_blank">
						<img class="par_icon" src="img/parceiros/ceplac_logo.png" alt="FAPESB">
					</a>
				</div>
			<!--
				<div id="par10" class="div_par">
					<a href="http://www.fapesb.ba.gov.br/">
						<img class="par_icon" src="img/parceiros/fapesb.png" alt="FAPESB">
					</a>
				</div>
				
				<div id="par11" class="div_par">
					<a href="http://www.fapesb.ba.gov.br/">
						<img class="par_icon" src="img/parceiros/fapesb.png" alt="FAPESB">
					</a>
				</div>
				
				<div id="par12" class="div_par">
					<a href="http://www.fapesb.ba.gov.br/">
						<img class="par_icon" src="img/parceiros/fapesb.png" alt="FAPESB">
					</a>
				</div>
				
				<div id="par13" class="div_par">
					<a href="http://www.fapesb.ba.gov.br/">
						<img class="par_icon" src="img/parceiros/fapesb.png" alt="FAPESB">
					</a>
				</div>
				-->
			</div>
		
		
	</section>

	<!--
	----------------------------------------------------------
	Efeito parallax
	------------------------------------------------------------
	-->		
	<div id="intro">
		<div class="frase">
			<h2>"A educação é a arma mais poderosa que você pode usar para mudar o mundo."</h2>
	        <p>Nelson Mandela</p>
	    </div> 
	</div> 
	
	<!--
	----------------------------------------------------------
	PAG5 Gerencias
	------------------------------------------------------------
	-->	
	
	<div id="Pag5">
			
			<h1>Gerências</h1>
	        <p>A PROPP é constituida pelas gerências de auxilio administrativo em seus diversos 
			
			campos.</br>Conheça elas. </p>
			<nav id="box_gerencia">
			<!-- Gerencia sisproj desativada---->
				<div id="sisproj" class="div_ger">
					<div id="cabecalho">
						<h1 class="titulo">Gerência de Projetos</h1>
						<p class="sub_titulo"><p>
					</div>
					<img class="img_gerencias" src="img/sisproj.jpg" alt="Sisproj">
					<!-- Gerencia sisproj ativada-->
					<div id="sisproj_ativado" class="ativado">
						<a href="#" onclick="toggle('aviso'); return false;">
							<nav class="mail_iconadd">
								<svg class="icon icon-add" viewBox="0 0 32 32"><use xlink:href="#icon-add"></use></svg>
							</nav>	
							<h1 class="titulo">Gerência de Projetos</h1>
							<p><p>
						</a>
					</div>		
				</div>
				
			<!-- Gerencia pesquisa desativada---->
				<div id="gpesq" class="div_ger">
					<div id="cabecalho">
						<h1 class="titulo">Gerência de Pesquisa</h1>
						<p class="sub_titulo"><p>
					</div>
					<img class="img_gerencias" src="img/proic.png" alt="Proic">		
				
				<!-- Gerencia pesquisa ativada-->
					
					<div id="gpesq_ativado" class="ativado">
						<a href="#" onclick="toggle('aviso'); return false;">
							<nav class="mail_iconadd">
								<svg class="icon icon-add" viewBox="0 0 32 32"><use xlink:href="#icon-add"></use></svg>
							</nav>	
							<h1 class="titulo">Gerência de Pesquisa</h1>
							<p><p>
						</a>
					</div>	
				</div>
				
			<!-- Gerencia gpg desativada---->
				<div id="gpg" class="div_ger">
					<div id="cabecalho">
						<h1 class="titulo">Gerência de Pós-Graduação</h1>
						<p class="sub_titulo"><p>
					</div>
					<img class="img_gerencias" src="img/gpg.jpg" alt="GPG">
				<!-- Gerencia gpg ativada-->
					<div id="gpg_ativado" class="ativado">
						<a href="#" onclick="toggle('aviso'); return false;">
							<nav class="mail_iconadd">
								<svg class="icon icon-add" viewBox="0 0 32 32"><use xlink:href="#icon-add"></use></svg>
							</nav>	
							<h1 class="titulo">Gerência de</br> Pós-Graduação</h1>
							<p><p>
						</a>
					</div>	
				</div>
				
				<!-- sic desativada---->
				<div id="sic" class="div_ger">
					<div id="cabecalho">
						<h1 class="titulo">Seminário de Iniciação<br> Científica</h1>
						<p class="sub_titulo"><p>
					</div>
					<img class="img_gerencias" src="img/sic.png" alt="SIC">
				<!-- sic ativada-->
					<div id="sic_ativado" class="ativado">
						<a href="http://propp.uesc.br/sic">
							<nav class="mail_iconadd">
								<svg class="icon icon-add" viewBox="0 0 32 32"><use xlink:href="#icon-add"></use></svg>
							</nav>	
							<h1 class="titulo">Seminário de</br> Iniciação Científica</h1>
							<p><p>
						</a>
					</div>	
				</div>
				
				<!-- proic desativada---->
				<div id="proic" class="div_ger">
					<div id="cabecalho">
						<h1 class="titulo">Programa de Iniciação<br> Científica</h1>
						<p class="sub_titulo"><p>
					</div>
					<img class="img_gerencias" src="img/proic.png" alt="PROIC">
				<!-- proic ativada-->
					<div id="proic_ativado" class="ativado">
						<a href="http://propp.uesc.br/proic">
							<nav class="mail_iconadd">
								<svg class="icon icon-add" viewBox="0 0 32 32"><use xlink:href="#icon-add"></use></svg>
							</nav>	
							<h1 class="titulo">Programa de</br> Iniciação Científica</h1>
							<p><p>
						</a>
					</div>	
				</div>
				<!-- proic desativada---->
				<div id="sispropp" class="div_ger">
					<div id="cabecalho">
						<h1 class="titulo">Sistema PROPP</h1>
						<p class="sub_titulo"><p>
					</div>
					<img class="img_gerencias" src="img/sispropp.png" alt="PROIC">
				<!-- proic ativada-->
					<div id="sispropp_ativado" class="ativado">
						<a href="http://propp.uesc.br/pdb">
							<nav class="mail_iconadd">
								<svg class="icon icon-add" viewBox="0 0 32 32"><use xlink:href="#icon-add"></use></svg>
							</nav>	
							<h1 class="titulo">Sistema</br> PROPP</h1>
							<p><p>
						</a>
					</div>	
				</div>
				
				<!-- AVISO -->
				
				<div id="aviso" style="display:none;" class="box_aviso">
					
							<a href="#" onclick="document.getElementById('aviso').style.display='none'; return false;">
								<p>X</p>
							</a>
							<br />
								<h1>O site estará no ar em breve! Aguarde.</h1>

				
				</div>
				
			</nav>

	</div>
		
	<!--
	----------------------------------------------------------
	PAG6 Portal de Noticias
	------------------------------------------------------------
	-->	
	
	<div id="Pag6">
	
		<div class="triangulo_topo"></div>
		
			<nav id="inicio_portal" class="tam_portal">
				<h1>Portal de Notícias</h1>
				<p>Fique sempre atento as nossa notícias, divulgamos sempre novos editais.
				</br>Confira!</p> 
			</nav>
			
			<div id="conteudo_portal" class="con_tam">
				
				<!-- NOticia 1-->
				<div id="not1">
					<div class="data">
						<p>21/08/2014<p>
					</div>
					<div class="noticia">
						<p>Ampliação do Centro de Biotecnologia e Genética (CBG) – obra iniciada</p>
							<a href="#" onclick="toggle('div_not1'); return false;">
								<div class="caixa_mais">
									<p>+</p>
								</div>
							</a>
					</div>
				</div>
					<div id="div_not1" style="display:none;" class="not_off">
					
						<div class="titulo_not">
							<a href="#" onclick="document.getElementById('div_not1').style.display='none'; return false;">
								<p>X</p>
							</a>
							
								<h1>Ampliação do Centro de Biotecnologia e Genética (CBG)<br/>
									 obra iniciada
								</h1>
						</div>
						<div class="cont_not">
							<h2>É com satisfação que informamos à comunidade acadêmica sobre o início das obras de  ampliação do prédio do Centro de Biotecnologia e Genética (CBG). Trata-se de prédio multiusuário, financiado pela FINEP e UESC, cujos laboratórios darão suporte aos pesquisadores da área de genética, biologia molecular e biotecnologia.<br>
A profa. Élida Ferreira, Pró-reitora de pesquisa e de pós-graduação, informa que se trata de “importante infraestrutura de pesquisa resultante de convênio CT-INFRA FINEP/UESC”. E acrescenta que “o envolvimento dos nossos pesquisadores e o apoio institucional, com aporte de contrapartida financeira substancial, tem sido decisivos para construirmos uma instituição comprometida com a excelência na pesquisa e no ensino de pós-graduação”.<br>
Quanto ao gerenciamento do convênio e acompanhamento da execução dos recursos, a gerência de apoio a projetos de pesquisa e pós-graduação (GEPROJ/PROPP) tem tido papel fundamental, seja no apoio aos coordenadores dos convênios, seja no trabalho conjunto com a prefeitura e a SUCAB, garantindo o cumprimento dos prazos previstos nos convênios.
Com esta obra, a comunidade acadêmica será beneficiada, a UESC atinge mais uma meta e avança na busca pela excelência no ensino e na pesquisa.
 
							</h2>
						</div>	
					</div>
					
				<!-- NOticia 2-->
				<div id="not2">
					<div class="data">
						<p>21/08/2014<p>
					</div>
					<div class="noticia">
						<p>I Simpósio de Ensino, Extensão, Inovação, Pesquisa e Pós Graduação</p>
							<a href="#" onclick="document.getElementById('div_not2').style.display='block'; return false;">
								<div class="caixa_mais">
									<p>+</p>
								</div>
							</a>
					</div>
				</div>						
					<div id="div_not2" style="display:none;" class="not_off">
					
						<div class="titulo_not">
							<a href="#" onclick="document.getElementById('div_not2').style.display='none'; return false;">
								<p>X</p>
							</a>
							<br />
								<h1>I Simpósio de Ensino, Extensão,<br/>
									Inovação, Pesquisa e Pós Graduação
								</h1>
						</div>
						<div class="cont_not">
							<h2><span style="margin-left:-14px;"><img src="img/banner_site_sic2014.png" ></span><br><br>
							Em conjunto com o seminário de Iniciação científica , realizaremos neste ano, no período de 29 a 31 de outubro, o I simpósio de Ensino, Extensão, Inovação , pesquisa e pós-graduação, com o objetivo de apresentar resultados das atividades realizadas na Universidade Estadual de Santa Cruz,<br> trazendo para a comunidade diferentes olhares sobre o conhecimento que está sendo produzindo em nossa instituição.
Trata-se de uma ação conjunta envolvendo a Propp, a Prograd, a Proex e o NIT, em busca da integração entre ensino, pesquisa, extensão e inovação.
							</h2>
						</div>
					</div>
					
				<!-- NOticia 3
				<div id="not3">
					<div class="data">
						<p>13/04/2014<p>
					</div>
					<div class="noticia">
						<p>Novo Edital 194 - Programa de Iniciação Científica Júnior(ICJ)</p>
							<a href="#" onclick="document.getElementById('div_not3').style.display='block'; return false;">
								<div class="caixa_mais">
									<p>+</p>
								</div>
							</a>
					</div>
				</div>						
					<div id="div_not3" style="display:none;" class="not_off">
					
						<div class="titulo_not">
							<a href="#" onclick="document.getElementById('div_not3').style.display='none'; return false;">
								<p>X</p>
							</a>
							<br />
								<h1>Novo edital 164<br/>
									Programa de Iniciação Cintífica(ICJ)
								</h1>
						</div>
						<div class="cont_not">
							<h2>Programa de Iniciação Científica Júnior (ICJ) – FAPESB/CNPQ
								Universidade Estadual de Santa Cruz – 2013-2014
								Modalidade: FAPESB / CNPQ Júnior (ICJ).
								<br/>
								Clique no link abaixo para fazer o download do edital
								<br/>
								<a target="_blank" href="http://propp.uesc.br/"><h3>Edital 164<h3></a>
							</h2>
						</div>
					</div>-->
					
				<!-- NOticia 4
				<div id="not4">
					<div class="data">
						<p>13/04/2014<p>
					</div>
					<div class="noticia">
						<p>Novo Edital 194 - Programa de Iniciação Científica Júnior(ICJ)</p>
							<a href="#" onclick="document.getElementById('div_not4').style.display='block'; return false;">
								<div class="caixa_mais">
									<p>+</p>
								</div>
							</a>
					</div>
				</div>						
					<div id="div_not4" style="display:none;" class="not_off">
					
						<div class="titulo_not">
							<a href="#" onclick="document.getElementById('div_not4').style.display='none'; return false;">
								<p>X</p>
							</a>
							<br />
								<h1>Novo edital 164<br/>
									Programa de Iniciação Cintífica(ICJ)
								</h1>
						</div>
						<div class="cont_not">
							<h2>Programa de Iniciação Científica Júnior (ICJ) – FAPESB/CNPQ
								Universidade Estadual de Santa Cruz – 2013-2014
								Modalidade: FAPESB / CNPQ Júnior (ICJ).
								<br/>
								Clique no link abaixo para fazer o download do edital
								<br/>
								<a target="_blank" href="http://propp.uesc.br/"><h3>Edital 164<h3></a>
							</h2>
						</div>
					</div>-->
					
					<!--<a href="propp_noticias.php">
						<div class="bot_vermais"><p>Ver Mais</p></div>
					</a>	-->
					
			</div>
			
			
		<div id="triangulo_baixo" class="tam_tri"></div>
			
	
	</div>
	<!--
	----------------------------------------------------------
	PAG7 Formulários
	------------------------------------------------------------
	-->	
	
	<div id="Pag8">
		<section id="sobre" class="content">
			

<p>Modelos e formulários de projetos de pesquisa, relatórios parcial e final de pesquisa e iniciação científica, estágio voluntário, iniciação científica voluntária.</p>
<p><span id="more-15"></span><strong> </strong></p>
<h3><strong>Projeto de Pesquisa</strong></h3>
<p><a href="wp-content/downloads/pp_projeto_de_pesquisa.rtf">Modelo de Projeto de Pesquisa</a><br>
<a href="wp-content/downloads/pp_latex.zip"> Modelo de Projeto de Pesquisa (LaTeX)</a></p>
<p><a href="wp-content/downloads/pp_relatorio_parcial_projeto_de_pesquisa.rtf">Modelo de Relatório Parcial de Projeto de Pesquisa</a><br>
<a href="wp-content/downloads/pp_relatorio_final_projeto_pesquisa.rtf">Modelo de Relatório Final de Projeto de Pesquisa</a></p>
<p><a href="wp-content/downloads/pp_parecer_projeto_pesquisa.rtf">Formulário de Parecer de Projeto de Pesquisa</a><br>
<a href="wp-content/downloads/pp_parecer_relatorio_pesquisa.rtf">Formulário de Parecer de Relatório de Projeto de Pesquisa</a></p>
<h3><strong>Iniciação Científica</strong></h3>
<p><a href="wp-content/downloads/ic_relatorio_parcial.rtf">Modelo de Relatório Parcial de Iniciação Científica – CNPq, CNPq-AF, ICB e ICV<br>
</a><a href="wp-content/downloads/ic_relatorio_final.rtf">Modelo de Relatório Final de Iniciação Científica – CNPq, CNPq-AF, ICB e ICV</a></p>
<p><a href="http://www.fapesb.ba.gov.br/?page_id=518">Modelos de Relatório Parcial e Final de Iniciação Científica – FAPESB e FAPESBJR</a><br>
(Modelo para <strong>IC – Cotas</strong>)</p>
<p><a href="http://propp.uesc.br/propp/wp-content/downloads/ic_relatorioparcial_pibit.rtf">Modelo de Relatório Parcial de Iniciação Tecnológica – PIBITI</a><br>
<a href="http://propp.uesc.br/propp/wp-content/downloads/pibiti_relatorio_final.rtf">Modelo de Relatório Final de Iniciação Tecnológica – PIBITI</a></p>
<h3><strong>Estágio Voluntário</strong></h3>
<p><a href="wp-content/downloads/estagio_voluntario.rtf">Formulário Estágio Voluntário</a></p>
<h3><strong>ICV/UESC Voluntário</strong></h3>
<p><a href="http://propp.uesc.br/propp/wp-content/downloads/FichaDeInscricaodiscente-ICV.doc">Ficha de Inscrição – ICV</a><br>
<a href="http://propp.uesc.br/propp/wp-content/downloads/Projeto ICV.doc">Modelo de Projeto – ICV</a><br>
<a href="wp-content/downloads/ic_relatorio_parcial.rtf">Modelo de Relatório Parcial de Iniciação Científica Voluntária</a><br>
<a href="wp-content/downloads/ic_relatorio_final.rtf">Modelo de Relatório Final de Iniciação Científica Voluntária</a></p>
<h3><strong>Formulários da Pós-graduação </strong></h3>
<p><a href="http://propp.uesc.br/propp/wp-content/downloads/forsolicauxteste.zip">Solicitação auxílio – Tese</a><br>
<a href="http://propp.uesc.br/propp/wp-content/downloads/auxilioretorno.zip">Solicitação auxílio – Retorno</a><br>
<a href="http://propp.uesc.br/propp/wp-content/downloads/resumodiserta.zip">Resumo – Tese/Dissertação</a><br>
<a href="http://propp.uesc.br/propp/wp-content/downloads/solic_afast.rtf">Solicitação de afastamento – Docentes (mestrado e doutorado)</a><br>
<a href="http://propp.uesc.br/propp/wp-content/downloads/solic-afast-post-doc.rtf">Solicitação  de afastamento&nbsp;- Docentes (pós-doutoramento)</a><br>
<a href="http://propp.uesc.br/propp/wp-content/downloads/ajuda_custo.pdf">Solicitação de Ajuda de Custo</a><br>
<a href="http://propp.uesc.br/propp/wp-content/downloads/relatatividades.rtf">Relatório de atividade</a></p>
<p>&nbsp;</p>
<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 114px; width: 1px; height: 1px; overflow: hidden;"><a href="wp-content/downloads/ic_relatorio_final.rtf">Modelo de Relatório Final de Iniciação Científica</a></div>			
	
		</section>
	</div>
	<!--
	----------------------------------------------------------
	PAG8 Contato
	------------------------------------------------------------
	-->	
	
	<div id="Pag7">
		
		<div id="contato">
			<img class="img_con" src="img/secretaria.png">
			
			<div id="cont_contato">
				<nav class="tel_icone">
					<svg class="icon icon-phone" viewBox="0 0 32 32"><use xlink:href="#icon-phone"></use></svg>
				</nav>
				<p class="tel_cont">(73) 3680 - 5010</p>	
				<nav class="mail_icone">
					<svg class="icon icon-mail" viewBox="0 0 32 32"><use xlink:href="#icon-mail"></use></svg>
				</nav>	
				<p class="email_cont"> propp@uesc.br</p>
				<nav class="loc_icone">
					<svg class="icon icon-location" viewBox="0 0 32 32"><use xlink:href="#icon-location"></use></svg>
				</nav>	
				<p class="endereco">Rodovia Ilhéus-Itabuna, km 16 </br>CEP 45662-900 Ihéus-Bahia</p>
			</div>
				
		</div>
		
			<div id="contato_mail">
				<h1>Entre em Contato</h1>
				
				<form id="contactform" class="rounded" method="post" action="mailto.php">
					<div class="field">
						<label for="name">Nome:</label>
						<input  type="name" class="input" required name="name" id="name"/>
						<p class="hint">Ex: João Pedro</p>
					</div>
					 
					<div class="field">
						<label for="email">E-mail:</label>
						<input class="input" name="email" type="email" required id="email" />
						<p class="hint">Ex: joaopedro@email.com</p>
					</div>
					 
					 <div class="field">
						<label>Telefone: </label> 
						<input required name="tel" type="text" class="input"  name="tel" id="tel"  pattern="[0-9]{2}[\s][0-9]{4}-[0-9]{4}"> 
						<p class="hint">Ex: 01 2345-6789</p>
					</div>
					
					<div id="mensagem">
					<div class="field">
						<label for="message">Mensagem:</label>
						<textarea required  class="input textarea" name="message"  id="message"></textarea>
						<p class="hint">Escreva sua Messagem.</p>
					</div>
					</div>
					 
					
					<input type="submit" name="Enviar"  class="button_s" value="ENVIAR" />
				</form>
					
					<!-- AVISO -->
				
				<div id="aviso2" style="display:none;" class="box_aviso2">
					
							<a href="#" onclick="document.getElementById('aviso2').style.display='none'; return false;">
								<p>X</p>
							</a>
							<br />
								<h1>Função indisponível no momento, entre em contato: webpropp@uesc.br</br> ou (73) 3680 - 5258.</h1>

				
				</div>
					
			</div>
	
		<div id="mapa">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.3804165206743!2d-39.173715999999665!3d-14.79649095888466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x739a818ecf672d9%3A0xa2fa69b5171b4521!2sUniversidade+Estadual+de+Santa+Cruz!5e1!3m2!1spt-BR!2sbr!4v1405432228051" width="100%" height="300" frameborder="0" style="border:0"></iframe>
		</div>
		
		<a href="#Pag2">
			<div id="bot_cima">
				<img class="seta" src="img/arrow-up.png">
			</div>
		</a>
	</div>
	
	<div id="rodape">
		<p class="rodape">2014 © Web-PROPP. Todos os direitos reservados.</p>
		<img class="logo_uesc" src="img/uesc.png">
		<img class="logo_gov" src="img/gov.png">
	</div>

</body>
</html>
