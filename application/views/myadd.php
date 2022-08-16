<!DOCTYPE HTML>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Elements - Theory by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css" />
	</head>
	<body class="subpage">

		

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					
						<header class="align-center">
						
						<form action="<?php echo site_url().'users/listing';?>" method="get">
						<center><div class="6u 12u$(xsmall)">
						<input type="text" name="search" id="name" value="" placeholder="Search..." />
						<input type="submit" value="Search" name="submit"/>												
												
						</div>
						
					</header>
						
						
					

													<div class="table-wrapper">
									<table>
										<thead>
											<tr>
												<th>Name</th>
												<th>Edit</th>
												<th>Delete</th>
												
											</tr>
										</thead>
										
										<tbody>
										<?php 
										foreach($ele as $item){?>
											<tr>
												<td><?php echo anchor("users/see_my/".$item['id'],$item['book']);?></td>
												<td><?php echo anchor("users/edit/".$item['id'],"Edit")?></td>
												<td><?php echo anchor("users/del/".$item['id'],"Delete")?></td>
											</tr>
										<?php }?>
											
										</tbody>
										
									</table>
								</div>
								
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