<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>title</title>
  </head>
  <body background="images/vintage-leaves.png">

  <?php require './header.php';?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <form id="contact-form">
        <ul>
          <li>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="John Smith" required="required">
          </li>
          <li>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="example@gmail.com" required="required">
          </li>
          <li>
            <label for="message">Message</label>
            <textarea id="message" name="message" required="required"></textarea>
          </li>
        </ul>
        <input type="submit">
      </form>
    </div>

      <?php require './sidebar.php';?>
      </div>
    </div>


          <?php require './footer.php';?>

  </body>

</html>