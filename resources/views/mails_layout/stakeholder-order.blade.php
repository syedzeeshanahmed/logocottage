<table style="width:100%; padding:40px; background-color:#6c6c6c; color:#fff; border-radius:10px;" >
	<tr> <td style="padding:1px; font-size:16px;  font-size:16px;">name: {{ $row['name'] }}</td> </tr>
	<tr> <td style="padding:1px; color:#fff; text-decoration:none;  font-size:16px;">email: {{ $row['email'] }}</td> </tr> 
	<tr> <td style="padding:1px;  font-size:16px;">number: {{ $row['phone'] }}</td> </tr>
	<tr> <td style="padding:1px;  font-size:16px;">description: {{ $row['description'] }}</td> </tr>
	<tr> <td style="padding:1px;  font-size:16px;">package: {{ $row['package'] }}</td> </tr>
	<tr> <td style="padding:1px;  font-size:16px;">price: {{ $row['amount'] }}</td> </tr>
	<tr> <td style="padding:1px;  font-size:16px;">country: {{ $row['country'] }}</td> </tr>
	<tr> <td style="padding:1px; color:#fff; text-decoration:none;  font-size:16px;">page: {{ $row['page'] }}</td> </tr>
</table>