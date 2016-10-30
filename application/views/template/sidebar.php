<nav class="side-menu">
	    <div class="side-menu-avatar">
	        <div class="avatar-preview avatar-preview-100">
	            <img src="<?= base_url('assets/img/avatar-1-256.png') ?>" alt="">
	        </div>
	    </div>
	    <ul class="side-menu-list">
	        <li class="brown <?php if(site_url(uri_string())==base_url()."index.php") echo "opened" ?>">
	            <a href="<?php echo base_url() ?>">
	                <i class="font-icon font-icon-home"></i>
	                <span class="lbl">Halaman Awal </span>
	            </a>
	        </li>
	        
	        <li class="red with-sub">
	            <span>
	                <i class="font-icon font-icon-case-2"></i>
	                <span class="lbl">Data Master</span>
	            </span>
	            <ul>
	            	<li class="opened <?php if(site_url(uri_string())==base_url()."index.php/data_master_wilayah") echo "opened" ?>">
	            		<a href="<?php echo base_url()."index.php/data_master_wilayah" ?>"><span class="lbl">Data Wilayah</span></a>
	            	</li>
	            </ul>
	        </li>

	        <li class="purple with-sub">
	            <span>
	                <i class="font-icon font-icon-revers"></i>
	                <span class="lbl">Autentikasi</span>
	            </span>
	            <ul>
	            	<li class="opened <?php if(site_url(uri_string())==base_url()."index.php/data_master_wilayah") echo "opened" ?>">
	            		<a href="<?php echo base_url()."index.php/auth_manager" ?>"><span class="lbl">Auth Manager</span></a>
	            	</li>
	            </ul>
	        </li>

	        
	        <li class="green <?php if(site_url(uri_string())==base_url()."index.php/user_manager") echo "opened" ?>">
	            <a href="<?php echo base_url()."index.php/user_manager" ?>">
	                <i class="font-icon font-icon-user"></i>
	                <span class="lbl">User Manager</span>
	            </a>
	        </li>

	        
	    </ul>
	</nav><!--.side-menu-->