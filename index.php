<?php
    include 'logic.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- My Stylesheet -->
    <style>
      body {
  font-family: "Baloo Thambi 2", cursive;
}

#header{
  background-color: #2a6569;
  text-align: center;
  font-size: 19px;
  height: 40px;
}
#header p{
  color: white;
  padding: 5px;
}
*{transition:all 0.3s ease-in-out;}

.container{
  clear:both;
  overflow:auto;
}

nav{float:right;}

.logo img{float:left;}

ul li{
  display: inline-block; padding:10px;
  font-size:20px; font-family:raleway;
}

ul li:hover{
  color:orange;
  
}
#navbar{
  background-color:white;
  text-align: right;
  padding: 30px;
  overflow: hidden;
}

#navbar ul{
  padding:0;
  list-style: none;
}

#navbar li{
  display:inline;
}

#navbar a{
  color:black;
  text-decoration: none;
  font-size:18px;
  padding-right:15px;
  font-weight: 900;
}

#showcase{
  background-image:url('./coronavirus.jpg');
  background-position:center right;
  height: 400px;  
  min-height:300px;
  margin-bottom:30px;
  text-align: center;
}

#showcase h1{
  color:#fff;
  font-size:50px;
  line-height: 1.6em;
  padding-top:30px;
}

    </style>
    <link rel="stylesheet" href="style.php">

    <title>Covid-19 Tracker</title>
</head>
<body>
  <div id="header">
        <p>Dial <strong>1166</strong> health helpline</p>
</div>
<div class="container">
<nav id="navbar">
      <div class="container">
      <ul>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul>
    </div>
</nav>
</div>
  <section id="showcase">
    <div class="container">
      
    </div>
  </section>  
    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1 class="">Covid-19 Tracker</h1>
        <h5 class="text-muted">A project to keep track of all the COVID-19 cases around the world.</h5>
    </div>

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                <?php echo "$total_confirmed"; ?>
            </div>
            <div class="col-4 text-success">
                <h5>Recovered</h5>
                <?php echo "$total_recovered"; ?>
            </div>
            <div class="col-4 text-danger">
                <h5>Deceased</h5>
                <?php echo "$total_deceased"; ?>    
            </div>            
        </div>        
    </div>

    <div class="container bg-light p-3 my-3 text-center">
      <h5 class="text-info">Prevention is the Cure</h5>
      <p class="text-muted">Stay Indoor Stay Safe</p>
    </div>

    <div class="container-fluid">
      <div class="table-responsive">
                <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Countries</th>
                    <th scope="col">Confirmed</th>
                    <th scope="col">Recovered</th>
                    <th scope="col">Deceased</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  foreach ($data as $key => $value) {
                    $increase = $value[$days_count]['confirmed']-$value[$days_count_prev]['confirmed'];
                  ?>
                  <tr>
                      <th><?php echo "$key" ?></th>
                      <td><?php echo $value[$days_count]['confirmed']; ?>
                      <?php if ($increase !=0) {?>
                          <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo "$increase";?>
                          </small>
                      <?php }?>    
                      </td>

                      <td><?php echo $value[$days_count]['recovered']; ?>    
                      </td>

                      <td><?php echo $value[$days_count]['deaths']; ?>    
                      </td>

                  </tr>
                  <?php
              }
                    ?>
            </tbody>
      </div>
        </table>
        <footer class="footer mt-auto py-3 bg-light">
          <div class="container text-center">
            <span class="text-muted">Copyright &copy; Hassan Maken 2020</span>
          </div>
        </footer>
</body>
</html>