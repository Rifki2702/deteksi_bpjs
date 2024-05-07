<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Duplicate Records</title>
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
						<a href=""<?=base_url('excel')?>" class="block py-2 px-3 text-black underline bg-blue-900 rounded md:bg-transparent md:bg-black md:p-0" aria-current="page">Administrasi</a>
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
	<div class="bg-white p-10 border m-10">
		<div class="flex justify-between">
			<h2 class="font-bold text-lg text-center mb-5">Daftar Terindikasi Double</h2>
			<form action="<?php echo base_url('excel/download')?>" method="post">
				<input type="hidden" name="data" value="<?=htmlspecialchars(json_encode($duplicates), ENT_QUOTES, 'UTF-8')?>">
				<button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Download Excel</button>
			</form>
		</div>
		<?php if (!empty($duplicates)): ?>
		<div class="relative overflow-x-auto">
			<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border">
				<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
					<tr class="">
						<th class="px-6 py-3">NO</th>
						<th class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">No.RM</th>
						<th class="px-6 py-3">Nama Pasien</th>
						<th colspan="2" class="px-6 py-3 text-center border-b">Tanggal Kunjungan</th>
						<th class="px-6 py-3">No. Klaim / SEP</th>
						<th class="px-6 py-3">INACBG</th>
						<th class="px-6 py-3">Top Up</th>
						<th class="px-6 py-3">Total Tarif</th>
						<th class="px-6 py-3">Tarif RS</th>
						<th class="px-6 py-3">Jenis</th>
					</tr>
					<tr >
						<th class="px-6 py-3"></th>
						<th class="px-6 py-3"></th>
						<th class="px-6 py-3"></th>
						<th class="px-6 py-3">Tanggal Masuk</th>
						<th class="px-6 py-3">Tanggal Pulang</th>
						<th class="px-6 py-3"></th>
						<th class="px-6 py-3"></th>
						<th class="px-6 py-3"></th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1?>
					<?php foreach ($duplicates as $group): ?>
						<?php foreach ($group as $key => $row): ?>
							<?php if (is_array($row)): ?>
								<?php 
									$backgroundColor = isset($group['color']) ? $group['color'] : '#FFFFFF'; // Default color if 'color' key is not set
								?>
								<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-gray-900" style="background-color: <?php echo $backgroundColor; ?>">

									<td class="px-6 py-4"><?php echo $i++; ?></td>
									<td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><?php echo $row['D']; ?></td>
									<td class="px-6 py-4"><?php echo $row['E']; ?></td>
									<td class="px-6 py-4"><?php echo $row['B']; ?></td>
									<td class="px-6 py-4"><?php echo $row['C']; ?></td>
									<td class="px-6 py-4"><?php echo $row['F']; ?></td>
									<td class="px-6 py-4"><?php echo $row['G']; ?></td>
									<td class="px-6 py-4"><?php echo $row['H']; ?></td>
									<td class="px-6 py-4"><?php echo $row['I']; ?></td>
									<td class="px-6 py-4"><?php echo $row['J']; ?></td>
									<td class="px-6 py-4"><?php echo $row['K']; ?></td>
								</tr>
							<?php endif; ?>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<?php else: ?>
			<p class="text-red-500">No duplicate records found.</p>
		<?php endif; ?>
	</div>
</body>
</html>
