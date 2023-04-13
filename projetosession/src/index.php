<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert task</title>
</head>
<body>
    <h1>Inserir Tarefa</h1>
<form method="post" action="main.php">
  <label for="noPme">Name:</label>
  <input type="text" name="nome" id="nome" required><br>

  <label for="details">Details:</label><br>
  <textarea name="details" id="details"></textarea><br>

  <input type="submit" value="Enviar" name="btnSubmitInsertTaskForm"><br><br>
</form> 
    
</body>
</html>