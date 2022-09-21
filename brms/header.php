<?php require('css/header.css');?>
	<script src="https://kit.fontawesome.com/bf31faa0ac.js" crossorigin="anonymous"></script>

			<div class="header">
				<img src="images/qcu.png" width="55" height="55" class="qcuLogo">
				<h2 class="qcu">QUEZON CITY UNIVERSITY | <c class="a">BOOK RECORD MANAGEMENT SYSTEM</c></h2>
				<input type="checkbox" id="chk">	
				<label for="chk" class="show-menu-btn">
					<i class="fas fa-bars"></i>
				</label>
					<ul class="menu">
						<img src="images/AdminIcon01.jpg" width="100" height="100" class="logo">
						<b class="acc"><?php require('acc.php');?></b>
						<a href="home.php" class="nav" >DASHBOARD</a>
						<a href="mngBook.php" class="nav">MANAGE BOOK</a>
						<a href="report.php" class="nav">REPORTS</a>
						<a href="catalog.php" class="nav">CATALOGUING</a>
						<br><br>
						<a href="logout.php" class="nav">LOG OUT</a>
						<label for="chk" class="hide-menu-btn">
							<i class="fas fa-times"></i>
						</label>
					</ul>
			</div>