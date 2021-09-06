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
  
<div class="container">
  <main>
    <!--div class="my-4" style="border-style:dotted"-->
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="logo/tools.svg" alt="" width="72" height="57">
      <h2>SoftwareAG One Stop Migration</h2>
      <p class="lead">Migration made easy!</p>
    </div>
     <div class="row">
       <div class="col-md-6">
        <label for="migration-type" class="form-label">Migration Type</label>
        <input type="text" class="form-control" id="mt"  placeholder="<?php echo $_POST["migration-type"]; ?> " readonly>
      </div>
    
      <div class="col-md-6">
        <label for="source-version" class="form-label">Source Version</label>
        <input type="text" class="form-control" id="sv" readonly>
     
      </div>
     </div>
     <div class="row ">
      <div class="col-md-6">
        <label for="target-version" class="form-label">Target Version</label>
        <input type="text" class="form-control" id="tv" readonly>
      </div>
      <div class="col-md-6">
        <label for="source-install-dir" class="form-label">Source Install Directory</label>
        <input type="text" class="form-control" id="si"  placeholder="<?php echo $_POST["directory"]; ?> " readonly>
      </div>
    </div>
    <hr class="my-4">
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



<script>
       document.getElementById("sv").value= localStorage.getItem("ddvalue");
       document.getElementById("tv").value= localStorage.getItem("ddvalue2");

        //console.log(ddvalue);
       // let itemName = localStorage.getItem("ddvalue");
        //document.getElementById("result").text =  itemName;

       // window.onload = alert(localStorage.getItem("ddvalue"));
    </script>
      <script src="css-js/form-validation.js"></script>
  </body>
</html>
