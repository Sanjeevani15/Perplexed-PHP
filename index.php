<?php 
$name="Sanjeevani";
$forelse=null;
$firstname=$_GET["name"];
$newname="sanju";

$newTodo=$_POST["todo"];
$saveTodos=$_POST["todos"];

// var_dump($saveTodos);

if(isset($saveTodos)){
  $todos=$saveTodos;
}
else {
  $todos=array();
}

if(isset($newTodo)) {
 array_push($todos,$newTodo); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn PHP</title>
</head>
<body>
  <h1>Hello, <?php  echo $name . " bhandari"; ?></h1>
  <p><?php if($name!=null) echo "another function in next line " . $name ?></p>
  
  <?php if(isset($forelse)): ?>
    <?php  echo "this is first method for if , so confusing, isset means if it is null"?>
    <?php else :?>
      <h4>I don't know what's going on </h4>
    <?php endif; ?>

    <?php if(isset($name)) { ?>
      <h4>This is so confusing , this is second method for if method</h4>
    <?php } ?>
    <hr>

    <center><h3>LET'S MAKE A FORM BELOW</h3></center>
     <hr>

<?php if(isset($name)) { ?>
<h2>LOGIN</h2>
<form method="GET">
  <label for="name">What is your name ?</label>  
  <input type="text" name="name" id="name" />
  <input type="submit" value="Login">
  <br>
  <?php echo "You entered  " . $firstname?>

</form>
  <?php } ?>
  <hr><hr>
 
  <center><h3>LET'S MAKE A TO-DO LIST</h3></center>
     <hr>
<?php if(isset($newname)) : ?>
 <h1>Welcome , <?php echo $newname ?></h1>
 <form method="POST">
  
    <?php foreach($todos as $todo) : ?>
      <input type="hidden" name="todos[]" value="<?php echo $todo; ?>">
    <?php endforeach; ?>

    <label for="todo">What's on you to do list</label>
    <input type="text" name="todo" id="todo" />
    <input type="submit" value="Save" />
 </form>
 <ul>
 <?php foreach($todos as $todo) : ?>
        <li> <?php echo($todo);?></li>
   <?php endforeach; ?>
 </ul>
 


  <?php endif;?>

</body>
</html>