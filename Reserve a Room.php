<!DOCTYPE html>
<html>
<head>
	<title>Reserve a Room</title>
</head>
<body>
	<H1> Fill the form to Reserve a Room! </H1>
	<br>
	<br>


	<form action="GET_ROOM_RESERVATION.php" method="POST">

		<lable>Name with initials:</lable> <input type="Text" name="NameI" class="Fcon" required>
		<br>
		<br>
		<label>Telephone No:</label> <input type="Text" name="Tel" required="eg: 077-1231232">
		<br>
		<Br>
		<lable> Check-in date</lable> 
		<br>
		<br>
		<input type="date" name="in" required="*">
		
		<label>Check-out date</label>
		<input type="date" name="out" required="*">
		<br>
		<br>
		<label>Email:</label> <input type="email" name="email" required="*"><br><br>

		Adults: 
		<br>
		<select name="Adult" autofocus="2" required="*">
			<option value=""></option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>

		</select>
		<br>
		<br>
		Children:
		<br>
		<select name="chil">
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select>

		<br>
		<br>
		<input type="submit" name="submit">   <input type="button" value="Reset"name="reset" >
		
	</form>

</body>
</html>