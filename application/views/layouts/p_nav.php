<div id="wrapper-main">
   <nav class="navbar navbar-default navbar-fixed-top visible-xs">
      <div class="container-fluid">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            </button>
            <ul class="nav navbar-xs">
               <li>
                  <a class="navbar-brand" href="http://localhost/medikaplus/dashboard" data-toggle="tooltip" title="Medika Pro"><span class="fa fa-home"></span></a>
               </li>
               <li>
                  <a class="selected text-limit" data-toggle="tooltip" title="Clinic Cianjur Clinic" href="/d/1">Clinic Cianjur</a>
               </li>
            </ul>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
               <li>
                  <a title="100100100" href="/users/100/edit">
                  <i class="fa fa-fw fa-user"></i> RMN 100100100
                  <span class="pull-right">Edit</span>
                  </a>
               </li>
               <li>
                  <a href="http://localhost/medikaplus/register">
                  <i class="fa fa-plus-circle"></i> New User
                  </a>
               </li>
               <li>
                  <a title="Logout" rel="nofollow" data-method="delete" href="/users/sign_out">
                  <i class="fa fa-fw fa-sign-out"></i> Logout
                  </a>
               </li>
               <li style="text-align: right;">
                  <span class="navbar-text" style="padding-right:20px;">Medika Pro 1.0</span>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <div class="menubar scroll">
   <?php
		$cmenu = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
		foreach(menu() as $m){
			$klik = '';
			if($m == part_now(2)){ $klik = 'selected';}
			echo "<a class='nav $klik' href='$m'>$m</a>";
		}
   ?>
   </div>
   <nav class="navbar navbar-default navbar-fixed-top hidden-xs">
      <div class="container-fluid">
         <ul class="nav navbar-nav">
            <li>
               <a class="navbar-brand" href="http://localhost/medikaplus/dashboard" data-toggle="tooltip" title="Medika Pro"><span class="fa fa-home"></span></a>
            </li>
            <li class="divider"><a class="selected text-limit" data-toggle="tooltip" title="" href="#">HUMAN RESOURCE</a></li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
               <i class="fa fa-chevron-down"></i>
               </a>
               <ul class="dropdown-menu scrollable-menu" role="menu">
			   <?php
				foreach(department() as $d){
					echo "<li><a class='' href='". base_url(). $d[0] ."/dashboard'>". strtoupper($d[1]) ."</a></li>";
				}
			   ?>
               </ul>
            </li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
            <li>
               <a data-toggle="tooltip" title="Registrasi Pasien Baru" href="http://localhost/medikaplus/register">
               <i class="fa fa-plus-circle"></i> New User
               </a>
            </li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">RMN 100100300 <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li>
                     <a title="100100100" href="http://localhost/medikaplus/profile/edit">Edit Profile</a>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li style="padding:5px 20px 5px 20px;">Jojon</li>
               </ul>
            </li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog"></i></a>
               <ul class="dropdown-menu">
                  <li>
                     <a title="Logout" rel="nofollow" data-method="delete" href="http://localhost/medikaplus/auth/logout">
                     <i class="fa fa-fw fa-sign-out"></i> Logout
                     </a>
                  </li>
                  <li style="padding:5px 20px 5px 20px;">Medika Pro 1.0</li>
               </ul>
            </li>
         </ul>
      </div>
   </nav>
   <script type="text/javascript">
      $(".nav a").on("click", function(){
        $(".nav").find(".active").removeClass("active");
        $(this).parent().addClass("active");
      });
   </script>
</div>