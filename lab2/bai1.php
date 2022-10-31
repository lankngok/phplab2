

</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<style>
img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 300px;
}

img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}



</style>
</head>
<body>

<h2 class="text-center text-danger">Bài 1 - Lab 2</h2>

<div class="bg">

<?php 
    for ($i = 1; $i < 7; $i++) { ?>
        <a target="_blank" href="image/<?php echo $i; ?>.jpg">
            <img src="image/<?php echo $i; ?>.jpg" alt="" width="300">
        </a>
        <?php } ?>

</div>
</body>
</html>