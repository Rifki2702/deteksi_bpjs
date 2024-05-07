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
						<a href="<?=base_url('admin/dashboard')?>" class="block py-2 px-3 text-black underline bg-blue-900 rounded md:bg-transparent md:bg-black md:p-0" aria-current="page">Dashboard</a>
					</li>
					<li>
						<a href="<?=base_url('profile')?>" class="block py-2 px-3 text-gray-900 rounded hover:bg-black hover:underline md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Profile</a>
					</li>
					<li>
						<a href="<?= site_url('auth/logout') ?>" class="block py-2 px-3 text-gray-900 rounded hover:bg-black hover:underline md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="p-10 h-screen">
		<div class="mb-5 pt-18 text-center">
			<h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Selamat Datang Di Sistem Verifikasi Internal</h1>
		</div>
		<?php if($this->session->flashdata('message')): ?>
			<div class="text-green-500 text-sm bg-green-100 p-4 w-full mb-4 rounded">
					<?= $this->session->flashdata('message') ?>
			</div>
		<?php endif ?>
		<div class="grid grid-cols-2 gap-4">
			<a href="<?=base_url('koding')?>" class="block max-w-fit pb-6 bg-card rounded-t-full rounded shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
				<div>
					<img src="<?=base_url('public/assets/image-3.png')?>" class="h-auto w-full p-0 m-0" alt="">
					<div class="pt-4">
						<h4 class="text-2xl font-bold text-center">Aspek Koding</h4>
					</div>
				</div>
			</a>
			<a href="<?=base_url('excel')?>" class="block max-w-full pb-6 bg-card rounded-t-full shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
				<div>
					<img src="<?=base_url('public/assets/image-4.png')?>" class="h-auto max-w-full" alt="">
					<div class="pt-4">
						<h4 class="text-2xl font-bold text-center"> Aspek Administrasi</h4> 
					</div>
				</div>
			</a>
		</div>
	</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</html>
