  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('yonetim.home')}}" class="nav-link">Home</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
 

  
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>

        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
 
   
          <div class="dropdown-divider"></div>
          <a href="{{route('yonetim.profile')}}" class="dropdown-item">
            <i class="fas fa-user-circle"></i> Profil
          </a>
          <a href="{{route('yonetim.logout')}}" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
     
        </div>
      </li>


    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" target="_blank" class="brand-link">
      <img src="{{asset('back')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Cv Sayt</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Admin / Sayt
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('yonetim.home')}}" class="nav-link {{Route::is('yonetim.home')? 'active' : ''}}">
                  <i class="fas fa-solar-panel"></i>
                  <p>Admin Panel</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link {{Route::is('home')? 'active' : ''}}" target="_blank">
                  <i class="fas fa-globe-europe"></i>
                  <p>Cv Sayt</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users text-info"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('yonetim.user')}}" class="nav-link {{Route::is('yonetim.user')? 'active' : ''}}">
                  <i class="far fa-user"></i>
                  <p>User</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{route('user.create')}}" class="nav-link {{Route::is('user.create')? 'active' : ''}}">
                  <i class="fas fa-plus"></i>
                  <p>User Create</p>
                </a>
              </li>
            </ul>
          </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-poll text-info"></i>
              <p>
                Socials
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('yonetim.social')}}" class="nav-link {{Route::is('yonetim.social')? 'active' : ''}}">
                  <i class="fab fa-facebook"></i>
                  <p>Social</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{route('social.create')}}" class="nav-link {{Route::is('social.create')? 'active' : ''}}">
                  <i class="fas fa-plus"></i>
                  <p>Social Create</p>
                </a>
              </li>
            </ul>
          </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-language text-info"></i>
              <p>
                Language
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('yonetim.language')}}" class="nav-link {{Route::is('yonetim.language')? 'active' : ''}}">
                  <i class="fas fa-american-sign-language-interpreting"></i>
                  <p>Language</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{route('language.create')}}" class="nav-link {{Route::is('language.create')? 'active' : ''}}">
                  <i class="fas fa-plus"></i>
                  <p>Language Create</p>
                </a>
              </li>
            </ul>
          </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-map-marked-alt text-info"></i>
              <p>
                Interests
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('yonetim.interest')}}" class="nav-link {{Route::is('yonetim.interest')? 'active' : ''}}">
                  <i class="fas fa-transgender-alt"></i>
                  <p>Interest</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{route('interest.create')}}" class="nav-link {{Route::is('interest.create')? 'active' : ''}}">
                  <i class="fas fa-plus"></i>
                  <p>Interest Create</p>
                </a>
              </li>
            </ul>
          </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-university text-info"></i>
              <p>
                Educations
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('yonetim.education')}}" class="nav-link {{Route::is('yonetim.education')? 'active' : ''}}">
                  <i class="fas fa-graduation-cap"></i>
                  <p>Education</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{route('education.create')}}" class="nav-link {{Route::is('education.create')? 'active' : ''}}">
                  <i class="fas fa-plus"></i>
                  <p>Education Create</p>
                </a>
              </li>
            </ul>
          </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-briefcase text-info"></i>
              <p>
                Experiences
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('yonetim.experience')}}" class="nav-link {{Route::is('yonetim.experience')? 'active' : ''}}">
                  <i class="fas fa-network-wired"></i>
                  <p>Experience</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{route('experience.create')}}" class="nav-link {{Route::is('experience.create')? 'active' : ''}}">
                  <i class="fas fa-plus"></i>
                  <p>Experience Create</p>
                </a>
              </li>
            </ul>
          </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-photo-video text-info"></i>
              <p>
                Portfolies
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('yonetim.portfolio')}}" class="nav-link {{Route::is('yonetim.portfolio')? 'active' : ''}}">
                  <i class="fas fa-image"></i>
                  <p>Portfolio</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{route('portfolio.create')}}" class="nav-link {{Route::is('portfolio.create')? 'active' : ''}}">
                  <i class="fas fa-plus"></i>
                  <p>Portfolio Create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-poll-h text-info"></i>
              <p>
                Skills
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('yonetim.skill')}}" class="nav-link {{Route::is('yonetim.skill')? 'active' : ''}}">
                 <i class="fas fa-poll"></i>
                  <p>Skill</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{route('skill.create')}}" class="nav-link {{Route::is('skill.create')? 'active' : ''}}">
                  <i class="fas fa-plus"></i>
                  <p>Skill Create</p>
                </a>
              </li>
            </ul>
          </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fab fa-blogger text-info"></i>
              <p>
                Blogs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('yonetim.blog')}}" class="nav-link {{Route::is('yonetim.blog')? 'active' : ''}}">
                 <i class="fab fa-microblog"></i>
                  <p>Blog</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{route('blog.create')}}" class="nav-link {{Route::is('blog.create')? 'active' : ''}}">
                  <i class="fas fa-plus"></i>
                  <p>Blog Create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Admin Melumatlar</li>
          <li class="nav-item">
            <a href="{{route('yonetim.profile')}}" class="nav-link">
             
              <i class="fas fa-id-card text-success"></i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('yonetim.message')}}" class="nav-link">
             
              <i class="fas fa-envelope text-success"></i>
              <p>Messages</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('yonetim.logout')}}" class="nav-link">
             
              <i class="fas fa-sign-out-alt text-success"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>