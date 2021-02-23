<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" 
href="estilos.css">
	<title>Document</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>", method="post">
<div class="container">
  <div class="form-group">
    <label for="exampleInputEmail1">Valor 1</label>
    <input type="number" class="form-control" name="val1" required  aria-describedby="emailHelp" placeholder="Ingrese el numero 1 ">
    <small id="val1" name="val1" class="form-text text-muted">Ingre valores positivos.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">valor 2</label>
    <input type="number" class="form-control" name="val2" id="val2" required placeholder="Ingrese el numero 2">
  </div>
  
  <button type="submit" name="calcular" class="btn btn-primary">Submit</button>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    

	  
	<?php
	if(isset($_POST['calcular'])){
		$num1=$_POST['val1'];
		$num2=$_POST['val2'];
		$suma=$num1+$num2;
		echo "<p>la suma {$suma} </>";

		for ($i = 1; $i <= 10; $i++) {
			
			echo"<tr>";
			echo "<th scope=row>1</th>";
			echo "<td>Mark</td>";
			echo "<td>Otto</td>";
			echo "<td>@mdo</td>";

			echo "</tr>";
		};
};

?>
    
    
  </tbody>
</table>
</div>




</body>
</html>

