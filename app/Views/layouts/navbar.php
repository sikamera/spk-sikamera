<!-- Navbar
    ================================================== -->
    <div class="navbar navbar-static-top">
        <div class="navbar-inner">
          <div class="container">
            <!-- logo -->
            <div class="logo">
              <a href="/"><h2><i class="icon-camera"></i> SIKAMERA</h2></a>
            </div>
            <!-- end logo -->

            <!-- top menu -->
            <div class="navigation">
              <nav>
                <ul class="nav topnav">
                  <li class="">
                    <a href="/home"><i class="icon-home"></i> Home </a>
                  </li>
                  <li>
                    <a href="<?= (session()->get('username')) ? "/home/moora" : "/auth"  ?>"><i class="icon-cog"></i>SPK</a>
                  </li>
                  <li>
                    <a href="/katalog"><i class="icon-camera"></i> Kamera</i></a>
                  </li>
                  <li>
                    <a href="/home/blog"><i class="icon-book"></i> Blog</a>
                  </li>
                  <?php 
                  $session = session();
                  if($session->get('username')): ?>
                  <li class="dropdown">
                    <a href="#"><i class="icon-user"></i><?= $session->get('username'); ?></a>
                    <ul class="dropdown-menu">
                      <li><a href="/auth/logout">Logout</a></li>
                    </ul>
                  </li>
                  <?php else: ?>
                  <li>
                    <a href="/login"><i class="icon-user"></i>Login</a>
                  </li>
                  <?php endif; ?>
                </ul>
              </nav>
            </div>
            <!-- end menu -->

          </div>
        </div>
      </div>