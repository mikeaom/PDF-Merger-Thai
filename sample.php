<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<style>
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		td,
		th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #dddddd;
		}
	</style>
	</head>

	<body>

		<h2>HTML Table</h2>

		<table>
			<tr>
				<th>ชื่อไฟล์</th>
				<th>Download</th>
			</tr>
			<tr>
				<td>ไฟล์ที่ 1</td>
				<th><a href="pdf/1.pdf">Download</a></th>
			</tr>
			<tr>
				<td>ไฟล์ที่ 2</td>
				<th><a href="pdf/2.pdf">Download</a></th>
			</tr>
			<tr>
				<td>รวมไฟล์</td>
				<td><a href="api.php" target="_black">Download</a></td>
			</tr>
		</table>
	</body>

</html>