<div class="brand clearfix">
	<a href="dashboard.php" style="font-size: 25px;">T3DK | Trang Chủ</a>  
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			
			<li class="ts-account">
			<?php 
                       if( isset($_SESSION['alogin'])){ 
						?>
							<h5><a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""><?php echo '<span>Hi, <b>'.$_SESSION['alogin'].' &nbsp &nbsp &nbsp</b></span> ' ?> <i class="fa fa-angle-down hidden-side"></i></a><span></h5>;
                           
						   <?php	
						}					
                    ?>				
				<ul>
					<li><a href="change-password.php">Đổi Mật Khẩu</a></li>
					<li><a href="logout.php">Đăng Xuất</a></li>
				</ul>
			</li>
		</ul>
	</div>
