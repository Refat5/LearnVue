<template>
	<div class="sidebar-menu">
		<div class="sidebar-menu-inner">
			<header class="logo-env">
				<!-- logo -->
				<div class="logo">
					<a href="/"></a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a class="sidebar-collapse-icon" href="#">
						<i class="entypo-menu"></i>
					</a>
				</div>
				<div class="sidebar-mobile-menu visible-xs">
					<a class="with-animation" href="#">
						<i class="entypo-menu"></i>
					</a>
				</div>
			</header>

			<div class="sidebar-user-info">
				<div class="sui-normal">
					<a class="user-link" href="#">
						<span>Welcome,</span>
						<strong></strong>
					</a>
				</div>

				<div class="sui-hover inline-links animate-in">
					<router-link to="/profile_settings">
						<i class="entypo-cog"></i>
						Settings
					</router-link>

					<router-link to="/change_password">
						<i class="entypo-pencil"></i>
						Password
					</router-link>

					<span class="close-sui-popup">&times;</span>
					<!-- this is mandatory -->
				</div>
			</div>

			<ul class="main-menu" id="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->

				<li class="opened">
					<router-link to="/crud">
						<i class="fas fa-truck"></i>
						<span class="title">Crud</span>
					</router-link>
				</li>
			</ul>
		</div>
	</div>
</template>
