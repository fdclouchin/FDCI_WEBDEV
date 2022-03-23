<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nickey's Hobbys</title>
</head>
<style>
	html{
		font-family: Courier;
	}
</style>
<body>
	<!-- table>tr*2>td*2 -->
	<a href="resume.php">Resume</a>
	<a href="chessboardmain.php">Chessboard</a>
	<table border = "1" width="800">
		<!-- this is a banner -->
		<tr>
			<td colspan="3">
				<table>
					<td><img width = "800" src="images/20220226_061132.jpg" alt="Nickey's image"></td>
					<td><img width = "800" src="images/20220226_061132.jpg" alt="Nickey's image"></td>
				</table>
			</td>
		</tr>

		<tr>
			<td>1</td>
			<td rowspan="2">2</td>
			<td>3</td>
		</tr>
		<tr>
			<td>1</td>
			<td>3</td>
		</tr>

		<!-- this is for the items -->
		<tr>
			<td bgcolor="blue">
				<div>
					<h4>Top Places</h4>
					<ol>
						<li>Cebu 1</li>
						<li>Cebu 2</li>
						<li>Cebu 3</li>
						<li>Cebu 4</li>
						<li>Cebu 5</li>
					</ol>
				</div>
			</td>
			<td>
				<div>
					<h4>Top Websites</h4>
					<ol>
						<li>
							<a href="https://www.google.com">Google</a>
						</li>
						<li>
							<a target="_blank" href="https://nativecamp.net">Nativecamp</a>
						</li>
						<li>Foods 3</li>
						<li>Foods 4</li>
						<li>Foods 5</li>
					</ol>
				</div>
			</td>
			<td>
				<div>
					<h4>Top Girls</h4>
					<ol>
						<li>Girls 1</li>
						<li>Girls 2</li>
						<li>Girls 3</li>
						<li>Girls 4</li>
						<li>Girls 5</li>
					</ol>
				</div>
			</td>
		</tr>

		<!-- this is for the blog 1 -->
		<tr>
			<td colspan = "3">
				<ul>
					<li>
						<h4>Touring</h4>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum excepturi quas autem, velit deserunt nihil voluptas eos deleniti, fugiat magni libero doloremque exercitationem odio, assumenda corrupti quasi nam ullam quidem.</p>
					</li>
					<li>
						<h4>Travels</h4>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum excepturi quas autem, velit deserunt nihil voluptas eos deleniti, fugiat magni libero doloremque exercitationem odio, assumenda corrupti quasi nam ullam quidem.</p>
					</li>
				</ul>
			</td>
		</tr>
	
		<!-- this is for the footer -->
		<tr>
			<td colspan="3">Copyright 2022</td>
		</tr>
	</table>
</body>
</html>