<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update Account</h2>
  <form action="<?php echo site_url('Welcome') ?>/UpdateAndRedirect/<?php echo $onlyoneRow['id'] ?>" method='POST'>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" value="<?php echo $onlyoneRow['name'] ?>" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" value="<?php echo $onlyoneRow['email'] ?>"  name="email">
    </div>
 
    <button type="submit" class="btn btn-success">update</button>
    <a href='<?php echo site_url('Welcome'); ?>/index' class='btn btn-danger'>Cancel</a>
  </form>
</div>

</body>
</html>
