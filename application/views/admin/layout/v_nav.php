<div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="<?=base_url('admin')?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
							<?php if (($this->session->userdata('level'))=="1") { ?>
								<li>
									<a href="<?=base_url('mapel')?>"><i class="fa fa-table fa-fw"></i> Mata Pelajaran</a>
								</li>
								<li>
									<a href="<?=base_url('guru')?>"><i class="fa fa-users fa-fw"></i> Guru</a>
								</li>
								<li>
									<a href="<?=base_url('siswa')?>"><i class="fa fa-mortar-board fa-fw"></i> Siswa</a>
								</li>								
							<?php } ?>
                            <li>
                                <a href="<?=base_url('login/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header"><?=$title2?></h2>
