<!DOCTYPE HTML>
<html  lang="pt-br">
    <!--HEAD-->
	<head>
		<title>Kpax - Crie o seu site hoje mesmo</title>        
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
			<meta name='title' content='Kpax - Crie o seu site hoje mesmo'>
			<meta name='description' content='Kpax - Crie o seu site home mesmo na agência kpax. Conheça os nossos planos, temos planos a partir de 39,90, isso mesmo! está muito Barato, não perca essa oportunidade!'>
			<!--Google Serch Console -->
			<meta name="google-site-verification" content="4d0EvdmoC9sDtNdHnqq9wK4ZjGZpNcNoV3Z__KsoYaQ" /> 
            <!--Tags para permitir que os robos do google indexem-->
			<meta name='robots' content='index, follow'>
			<link rel='icon' href='images/favicon.png'/>	
		<!--RAFAEL-DIAS CSS -->		
		<link rel="stylesheet" href="assets/css/reset.css">
		<link rel="stylesheet" href="assets/css/estilo.css">	
		<link rel="stylesheet" href="assets/css/k-framework.css">	
		<link rel="stylesheet" href="assets/css/typography.css">     
        <link rel="stylesheet" href="assets/css/mobile.css">        
        <!--ITEMS -->	
        <link rel="stylesheet" href="assets/css/cards.css">        
        <link rel="stylesheet" href="assets/css/price-plans.css">
        <!--FONTS-->		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--Open Graph-->
         <meta property="fb:app_id" content="233328774011354" /> 
         <meta property="og:type"   content="website" /> 
        <meta property='og:title' content='Crie o seu site hoje mesmo'/>
        <meta property= 'og:image' content='images/opengraph/home.jpg'>
        <meta property='og:url' content='http://www.agenciakpax.com.br'/>
        <meta property='og:description' content='Crie o seu site home mesmo na agência kpax. Conheça os nossos planos, temos planos a partir de 39,90, isso mesmo! está muito Barato, não perca essa oportunidade!'/>
        
         <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91059521-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-91059521-1');
    </script>
    </head>
   
<!--HOME-->
	<body>        
       <!--header-->     
       <?php include('includes/header.php'); ?>      
       <!--HERO IMG-->
          <div id='Hero-Img' class=''>
            <div class='container'>
            <div class='content-slide'>		 				
		  <h1 class='white'>Crie o seu site hoje mesmo</h1>
		 						<h3>Layouts desenvolvidos pensando no seu negócio</h3>
		 						<button class='btn-slide dark'>Criar Site</button>
		 				</div>		 			
		 			<div class='slide-img'>
		 			<img class='predio-kpax' src='images/predio-slide.svg' alt='Crie-o-seu-site'>
		 			</div>
			 </div>
		</div>        
	    <!--Conteudo-->
        <?php include('includes/home-content.php');       
              include('includes/plans.php');       
              include('includes/projects.php');		
              include('includes/call-to-action.php');      
              include('includes/newsletter.php');      
              include('includes/footer.php'); 
        ?>
	<script src="assets/js/custom.js"></script>
	</body>
</html>