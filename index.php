<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="iSPRO and PlatformQA">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Migration Utility</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="css-js/style.css">
<script src="css-js/myscript.js"></script>
<link href="css-js/form-validation.css" rel="stylesheet">

  </head>
  <body class="bg-light">
  <script>

  
  function passval()
                {
                    var selecttext = document.getElementById("source");
                    var selecttext2 = document.getElementById("target");
                   // var text = selecttext.options[selecttext.selectedIndex].text;
                    localStorage.setItem("ddvalue", selecttext.options[selecttext.selectedIndex].text);
                    localStorage.setItem("ddvalue2", selecttext2.options[selecttext2.selectedIndex].text);
                    //return text;
                   // console.log(localStorage.setItem("ddvalue", text));
                   
                    return true;
                   // alert(text);
                }
            </script>
</script>
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="logo/tools.svg" alt="" width="72" height="57">
      <h2>SoftwareAG One Stop Migration</h2>
      <p class="lead">Migration made easy!</p>
    </div>

    <div class="row g-2" >
      <div class="col-md-15">
        <h4 class="mb-3">Migration Details</h4>
        <form class="needs-validation" method="post" action="details.php" novalidate>
        <!--form class="needs-validation" method="post" novalidate-->
         
          <div class="row g-3">

            <div class="col-md-4">
              <label for="migration" class="form-label">Type of Migration</label>
              <select class="form-select" name="migration-type" id="migration"  required>
                <option value="">Choose...</option>
                <!--?Php
                  require "config.php";// connection to database 
                  $sql="SELECT * from type "; // Query to collect data 

                  foreach ($dbo->query($sql) as $row) {
                  echo "<option value=$row[type_id]>$row[type_value]</option>";
                  }
                ?-->
                <option value="utility">Utility</option>
                <option value="template">Template</option>
                <option value="oneclick">OneClick</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid migration type.
              </div>
            </div>

            <div class="col-md-4">
              <label for="source" class="form-label">Source Version</label>
              <select class="form-select" name="source" id="source" required>
                <option  value="">Choose...</option>
                <?Php
                
                  require "config.php";// connection to database 
                  $sql="SELECT * from source "; // Query to collect data 

                  foreach ($dbo->query($sql) as $row) {
                  echo "<option value=$row[source_id]>$row[source_value]</option>";
                  
               
                }
                ?>
             </select>
              <div class="invalid-feedback">
                Please select a valid source type.
              </div>
            </div>

            <div class="col-md-4">
              <label for="target" class="form-label">Target Verison</label>
              <select class="form-select" name="target" id="target" required>
              </select>
              <div class="invalid-feedback">
                Please select a valid target type.
              </div>
            </div>

          <hr class="my-4">
          <!--button class="w-100 btn btn-primary btn-lg" type="submit">Continue..</button-->
            <div class="utility box">
            <h4> Utility Based Migration</h4>
            <p> Under Construction..</p>
            
            </div>
          </div>
            <div class="template box">
            <h4> Template Based Migration</h4>
            <p> Under Construction..</p>
            </div>
            <div class="oneclick box">
            <h4 class="mb-3">Source Setup Details</h4>
            <div class="input-group">
            
            <div class="col-md-12">
              <label for="dir-name" class="form-label">Source Directory Path</label>
              <div class="row g-0">
              <input type="text" class="form-control" name="directory" id="dir-name" placeholder="" required>
              <small class="text-muted">Full path , eg; C:\SoftwareAG</small>
              <div class="invalid-feedback">
                Directory path is required !
              </div>
              
              
              <hr class="my-2">
              <button class="btn btn-primary" id="check" name="submit" type="submit" onclick="passval()">Continue..</button>
      
                </div>
            </div>
            </div>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2021 One Stop Migration</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>




      <script src="css-js/form-validation.js"></script>
  </body>
</html>

