<li class="nav-item">
	<a href="{{ route('dashboard') }}">
		<i class="fas fa-home"></i>
		<p> Dashboard </p>
	</a>
</li>

<li class="nav-section">
	<h4 class="text-section"> Menu </h4>
</li>

<li class="nav-item">
    <a href="{{ route('user') }}">
        <i class="fas fa-users"></i>
        <p> User </p>
    </a>
</li>

<li class="nav-section">
	<span class="sidebar-mini-icon">
	<i class="fa fa-ellipsis-h"></i>
	</span>
	<h4 class="text-section"> Configuration </h4>
</li>

<li class="nav-item">
	<a data-toggle="collapse" href="#menu-setting">
		<i class="fas fa-wrench"></i>
		<p> Pengaturan </p>
		<span class="caret"></span>
	</a>
	<div class="collapse" id="menu-setting">
		<ul class="nav nav-collapse">
			<li>
				<a href="{{ route('setting.change_password') }}">
					<i class="fas fa-key"></i>
					<p> Ganti Password </p>
				</a>
			</li>
			<li>
				<a href="{{ route('setting.profile') }}">
					<i class="fas fa-user-edit"></i>
					<p> Profil </p>
				</a>
			</li>
		</ul>
	</div>
</li>

<li class="nav-item">
	<a href="{{ route('logout') }}">
		<i class="fas fa-sign-out-alt"></i>
		<p> Log out </p>
	</a>
</li>
