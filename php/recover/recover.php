<!DOCTYPE html>
<html >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/mdb.min.css">
  <link rel="stylesheet" href="./css/mdb.rtl.min.css">
  <style>
    .container {
      text-align: center;
    }
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgb(217, 235, 235);
    }
    .table-hover tbody tr:hover {
      background-color: rgba(122, 114, 81, 0.7);
      color: rgb(112, 24, 78);
    }
    .thead-green {
      background-color: rgb(0, 99, 71);
      color: white;
    }
  </style>
</head>
<body>
  <div class="container">
    <table class="table table-striped table-hover">
      <thead class="thead-green">
        <tr>
          <th>Usuarios</th>
          <th>Correos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
          <?php 
                 $us = $_POST["usuario"];
                 echo "".$us;
            ?>
          </td>
          <td>
          <?php 
                 $em = $_POST["email"];
                 echo "".$em;
            ?>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>

</html>