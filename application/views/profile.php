<!DOCTYPE html>
<html lang="en">

<head>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
	<style>
		.bg-blue-900,.bg-blue-700,.text-blue-900{
			background-color: #7FB0C5 !important;
		}
		.bg-gray-100{
			background-color: rgba(127, 176, 197, 0.4) !important;
		}
		.bg-card{
			background-color: rgba(168, 212, 215, 0.7) !important;
;
		}
	</style>
</head>

<body>
<body class="bg-gray-100">
	<nav class="bg-blue-900 border-gray-200 dark:bg-gray-900">
		<div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
			<a href="<?=base_url('admin/dashboard')?>" class="flex items-center space-x-3 rtl:space-x-reverse">
				<span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Sistem Verifikasi Internal </span>
			</a>
			<button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
			<span class="sr-only">Open main menu</span>
			<svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
			</svg>
			</button>
			<div class="hidden w-full md:block md:w-auto" id="navbar-default">
				<ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-blue-900 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
					<li>
						<a href="<?=base_url('admin/dashboard')?>" class="block py-2 px-3 text-black  bg-blue-900 rounded md:bg-transparent md:bg-black md:p-0" aria-current="page">Dashboard</a>
					</li>
					<li>
						<a href<?=base_url('profile')?>" class="block py-2 px-3 text-gray-900 underline rounded hover:bg-black hover:underline md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Profile</a>
					</li>
					<li>
						<a href="<?=site_url('auth/logout') ?>" class="block py-2 px-3 text-gray-900 rounded hover:bg-black hover:underline md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="p-10 h-screen">
		<form class="max-w-full mx-auto mt-4" method="POST" enctype="multipart/form-data">
		<div class="mb-5 pt-18">
			<div class="grid grid-cols-3 gap-5">
				<div class="bg-white p-5 col-span-1 rounded text-center">
					<h4 class="font-bold text-2xl">Hi,</h4>
					<span class="">Medical Record</span>
					<img src="<?= $current_user->foto != null ? $current_user->foto : base_url('public/assets/profile-1.png')?>" class="w-50 p-0 m-0 mx-auto mt-5" alt="">
					<div class="w-1/2 my-5 mx-auto">
						<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" name="gambar">
					</div>
					<div class="space-x-2 flex flex-col mt-5">
						<div class="mb-5">
							<span class="">
								Upload new avatar. Larger image will be resized automaticlly.
							</span>
						</div>
						<div>
							<span>
							Maximum upload size is <b>1 MB </b>
							</span>
						</div>
						
					</div>
				</div>
				<div class="bg-white p-5 col-span-2 rounded">
					<h4 class="font-bold text-2xl">Edit Profile</h4>
					
						<div class="mb-5">
							<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
							<input type="text" id="fullname" value="<?= form_error('fullname') ? set_value('fullname') : $current_user->fullname ?>" name="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Fullname" required />
						</div>
						<div class="mb-5">
							<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
							<input type="text" id="username" name="username" value="<?= form_error('username') ? set_value('username') : $current_user->username ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username" required />
						</div>
						<div class="mb-5">
							<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
							<input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password" />
						</div>
						<div class="mb-5">
							<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Study</label>
							<input type="text" id="study" name="study" value="<?= form_error('study') ? set_value('study') : $current_user->study ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Study" required />
						</div>
						
						<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Info</button>
				</div>
			</div>
		</div>
		</form>

	
	</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</html>
