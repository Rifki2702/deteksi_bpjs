<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read Excel File</title>
</head>
<body>
    <h2>Excel file has been uploaded successfully!</h2>
    <form action="<?php echo base_url('excel/find_duplicate'); ?>" method="post">
        <input type="hidden" name="file_name" value="<?php echo $upload_data['file_name']; ?>">
        <button type="submit">Find Duplicates</button>
    </form>
</body>
</html>
