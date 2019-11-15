	<table>

		<thead>
			<tr>
				<td>ID</td>
				<td>Username</td>
				<td>Password</td>
				<td>Options</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Hola</td>
				<td>123</td>
				<td>
					<a href="#!" onclick="return confirm('Are u sure?');">Delete</a>
				</td>
			</tr>
		</tbody>
	
	</table>


<?php

	$datos = new MvcController();
	$datos -> showUserController();

?>