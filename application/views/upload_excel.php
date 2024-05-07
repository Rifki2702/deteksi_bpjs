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
		.bg-gray-200{
			background-color: rgba(168, 212, 215, 1);
		}
		.bg-gray-300{
			background-color: rgba(127, 176, 197, 0.4);
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
						<a href="<?=base_url('excel')?>" class="block py-2 px-3 text-black underline bg-blue-900 rounded md:bg-transparent md:bg-black md:p-0" aria-current="page">Administrasi</a>
					</li>
					<li>
						<a href="<?=base_url('koding')?>" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Koding</a>
					</li>
					<li>
						<a href="<?=base_url('admin/dashboard')?>" class="block py-2 px-3 text-gray-900 rounded hover:bg-black hover:underline md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Kembali</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="p-10 h-screen">
		<div class="mb-5 pt-18 text-center">
			<h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Deteksi Double Claim</h1>
		</div>
		<div class="bg-gray-300 w-1/2 mx-auto">
			<div class="p-10">
				<div class="border border-dashed border-black p-10 flex flex-col items-center bg-gray-200">
					<h4 class="text-center font-bold mb-5">Masukkan data yang telah di download dari halaman INA-CBG’s</h4>
					<div class="w-full">
						<form method="post" class="flex gap-3" action="<?php echo base_url('excel/upload')?>" enctype="multipart/form-data">
							<div class="w-full">
								<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" name="file">
								<div class="text-red-500 text-sm">
									<?= form_error('file') ?>
								</div>
							</div>
							<div>
								<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
								<svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 3v4c0 .6-.4 1-1 1H5m8 7.5 2.5 2.5M19 4v16c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V8c0-.4.1-.6.3-.8l4-4 .6-.2H18c.6 0 1 .4 1 1Zm-5 9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
								</svg>
									Upload
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
