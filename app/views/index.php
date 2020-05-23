<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wishlist | Frontend</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Filepond stylesheet -->
  <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
</head>

<body>
  <section class="container">
    <section class="layout-centered">
      <h2>Upload Icons</h2>
    </section>
    <input class="filepond" name="filepond" multiple data-allow-reorder="true" data-max-file-size="1MB"
      data-max-files="3" type="file">
  </section>
  <!-- We'll transform this input into a pond -->

  <!-- Load FilePond library -->
  <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

  <!-- Turn all file input elements into ponds -->
  <script>
    // Select the file input and use 
    // create() to turn it into a pond
    FilePond.create(
      document.querySelector('input.filepond')
    );
  </script>


</body>

</html>