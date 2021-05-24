<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Belum punya akun? hubungi kami:</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>+6285643413814</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>admin@baskororaya.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<?php if ($this->session->userdata('nama_user')) { ?>
										<div class="login_button"><a href="<?=base_url('login')?>">Halo, <?= $this->session->userdata('nama_user') ?></a></div>
									<?php } else { ?>
										<div class="login_button"><a href="<?=base_url('login')?>">Login</a></div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>
