<!DOCTYPE html>
<html lang="en">

<head>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
	<style>
		.bg-blue-900,.bg-blue-700{
			background-color: #7FB0C5 !important;
		}
	</style>
</head>
<body>
<body class="bg-gray-100">
<div class="flex h-screen">
        <!-- Logo dan Teks -->
        <div class="w-1/3 bg-blue-900 text-black p-10 mx-auto pb-10 flex items-center">
            <div class="text-center place-items-center w-full">
                <div class="h-16 w-16 bg-blue-700 rounded-full mx-auto flex items-center">
					<svg class="w-14 h-14 text-black dark:text-white mx-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
						<path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd"/>
					</svg>
				</div>
                <h2 class="text-2xl font-bold">Sistem Verifikasi Internal</h2>
                <p class="text-lg">Sistem verifikasi internal untuk mengurangi pending claim</p>
            </div>
        </div>
        <!-- Formulir Login -->
        <div class="w-2/3 pr-14 flex items-center">
			<div class="bg-white p-24 w-full">
				<h1 class="text-2xl font-bold mb-4">Login</h1>
				<form action="" method="post">
					<?php if($this->session->flashdata('message_login_error')): ?>
						<div class="text-red-500 text-sm">
								<?= $this->session->flashdata('message_login_error') ?>
						</div>
					<?php endif ?>

					<div class="mb-4">
						<label for="username" class="block text-sm font-medium text-gray-700">Username</label>
						<input type="text" id="username" name="username" value="<?= set_value('username') ?>" placeholder="Your username or email" class="mt-1 p-2 border rounded-md w-full <?= form_error('username') ? 'border-red-500' : '' ?>">
						<div class="text-red-500 text-sm">
							<?= form_error('username') ?>
						</div>
					</div>
					<div class="mb-4">
						<label for="password" class="block text-sm font-medium text-gray-700">Password</label>
						<input type="password" id="password" value="<?= set_value('password') ?>" name="password" placeholder="Masukkan kata sandi" class="mt-1 p-2 border rounded-md w-full <?= form_error('password') ? 'border-red-500' : '' ?>">
						<div class="text-red-500 text-sm">
							<?= form_error('password') ?>
						</div>
					</div>
					<div class="flex items-center justify-center">
						<input type="submit" value="Login" type="submit" class="bg-blue-700 text-white py-2 px-4 rounded-md hover:bg-blue-800 w-80"></input>
					</div>
				</form>
			</div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</html>
