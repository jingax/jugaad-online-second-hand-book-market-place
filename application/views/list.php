<!DOCTYPE HTML>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Jugaad</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css" />
	</head>
	<body >
	<?php if(!isset($_GET['search'])){
		redirect('users/index');
	}?>
<section id="banner">
				<?php $url_info = $_GET['search'];
						$search = $url_info; ?>
				
				<header class="align-center">
						
						<form action="<?php echo site_url().'users/listing';?>" method="get">
						<center><div class="6u 12u$(xsmall)">
						<input type="text" name="search" id="name" value="<?php echo $search;?>" placeholder="Kya chaiye? Search here!" required /><br></div>
						
						<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Search" name="submit"/></li>
												
												</ul>
										</div>
						
					</header>
			</section>

		


		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
						
						<center><p><?php
							$list=$this->usermod->stock_info();
							$def=$this->usermod->def();
						$url_info = $_GET['search'];
						$search = $url_info;
						?>
									

					<div class="flex flex-2">
						<?php
						$pn = 0;
						$i=20;
						$arr= array(explode(" ",$search));
						
						while($i){
							
						foreach($list as $elem){
							$c = 0;
							
							//print_r($arr);
							for($j=0;$j<count($arr[0]);++$j)
							{ if($arr[0][$j]=="")
								continue;
								if(( strpos( strtolower($elem['book']), strtolower($arr[0][$j] )) !== false)||( strpos( strtolower($elem['author']), strtolower($arr[0][$j]) ) !== false))
								{$c++;
							 //echo ( strpos( $elem['book'], $arr[0][$j] ) !== false)||( strpos( $elem['author'], $arr[0][$j] ) !== false);
							 }
							}
							if($c==$i)
							{
								++$pn;
								
							
							?>
						<article><a style='text-decoration: none;' href='see/<?php echo $elem['id']?>'><div>
						
							<center><div ><center>
								<br><img height="200" src="<?php echo base_url();?>assets/images/<?php echo $elem['img'];?>" alt="Pic 01" >
							
							</div>
							
								<h3><?php echo $elem['book'];?></h3>
							
							<?php echo $elem['author'];?><br>
							<?php echo "INR ".$elem['price'];?>
							<footer>
								<?php if($elem['ss']) echo anchor("users/see/".$elem['id'],"<p class='button special'>Buy</p>");
								else echo "<p class='button special'>Out of Stock</p>";?>
								
							</footer>
						<center></div></a></article><?php }}
						--$i;
						} ?>
																							
					</div>
				
						<center><p>
						<?php 
						if(!$pn) echo "No seacrh results found for $search";?>
						</p></center>	<!-- Form -->
								

								
								<hr />

								
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
						</div>
						<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
							<li><a href="#" class="icon fa-pinterest-p"><span class="label">Pinterest</span></a></li>
							<li><a href="#" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li>
						</ul>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/skel.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/util.js"></script>
			<script src="<?php echo base_url();?>assets/js/main.js"></script>

	</body>
</html>