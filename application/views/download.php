<?php if (!empty($duplicates)): ?>
	<div class="relative overflow-x-auto">
	<table border="1" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border">
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
<?php
	$name = 'Daftar-Terindikasi-Double.xls';
	header('Content-Type: application/xls');
	header("Content-Disposition: attachment; filename=$name");
?>
