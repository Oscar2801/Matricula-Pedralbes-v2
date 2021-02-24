<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matricula</title>
  <!-- CSS only -->
  <link href="./src/css/main.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

</head>

<body>
  <?php
  $cursos = ['eso', 'batx', 'pfi', 'smx', 'daw', 'dam', 'dam-vi', 'asx', 'asx-cib', 'a3d'];
  if (!in_array($_GET['matricula'], $cursos, true)) {
    header("Location: https://matricula-inspedralbes.tk/error.html");
  }
  ?>
  <form id="regForm" action="">

    <h1>Matriculació de <?php echo $_GET['matricula']; ?>:</h1>
     <!-- One "tab" for each step in the form: -->
    <?php
    if($_GET['matricula']!='pfi'){
      echo '
      <div class="tab">Dades academiques de la matrícula actual:
      <select name="matricula_actual">';
        
      if($_GET['matricula']=='eso'){
        echo '<option value="1eso">1r ESO</option>
        <option value="2eso">2n ESO</option>
        <option value="3eso">3r ESO</option>
        <option value="4eso">4t ESO</option>';
      }
      elseif ($_GET['matricula']=='batx') {
       echo '<option value="1batx">1r Batxillerat</option>
       <option value="2batx">2n Batxillerat</option>';
      }else{
        echo '<option value="1r">1r Curs</option>
       <option value="2n">2n Curs</option>';
      }
      echo '</select>
      </div>';

    }
    ?>
    <div class="tab">Dades de l'alumne:
      <p>Nom:<input placeholder="Nom" oninput="this.className = ''"></p>
      <p>Cognoms: <input placeholder="Cognoms" oninput="this.className = ''"></p>
      <p>DNI/NIE/Passaport: <input placeholder="DNI/NIE/Passaport" oninput="this.className = ''"></p>
      <p>Número TSI: <input placeholder="Número TSI" oninput="this.className = ''"></p>
      <p>Data de naixament: <input type="date" oninput="this.className = ''"></p>
      <p>Telèfon mòbil: <input type="number" oninput="this.className = ''"></p>
      <p>Telèfon fix: <input type="number" oninput="this.className = ''"></p>
      <p>Municipi: <input oninput="this.className = ''"></p>
      <p>Codi postal <input type="number" min="10000" max="99999" oninput="this.className = ''"></p>
      <p>Correu eletrònic <input type="email" oninput="this.className = ''" required></p>
    </div>
    <?php
    if (!in_array($_GET['matricula'], ['daw', 'dam', 'dam-vi', 'asx', 'asx-cib'])) {
      echo '<div class="tab">Dades de la persona/es responsable/es:
      
      <input type="radio" id="pare1" name="responsable1" value="Pare">
        <label for="Pare">Pare</label><br>
        <input type="radio" id="mare1" name="responsable1" value="Mare">
        <label for="Mare">Mare</label><br>
        <input type="radio" id="tutor1" name="responsable1" value="Tutor/a legal">
        <label for="Tutor/a legal">Tutor/a legal</label>
        <p>Nom i cognoms<input placeholder="Nom i cognoms"></p>
        <p>DNI/NIE/Passaport: <input placeholder="DNI/NIE/Passaport"></p>
        <p>Telèfon mòbil: <input type="number"></p>
        <p>Telèfon fix: <input type="number"></p>
        <p>Correu eletrònic <input type="email" required></p>
        
        <input type="radio" id="pare2" name="responsable2" value="Pare">
        <label for="Pare">Pare</label>
        <input type="radio" id="mare2" name="responsable2" value="Mare">
        <label for="Mare">Mare</label>
        <input type="radio" id="tutor2" name="responsable2" value="Tutor/a legal">
        <label for="Tutor/a legal">Tutor/a legal</label>
        <p>Nom i cognoms<input placeholder="Nom i cognoms"></p>
        <p>DNI/NIE/Passaport: <input placeholder="DNI/NIE/Passaport"></p>
        <p>Telèfon mòbil: <input type="number"></p>
        <p>Telèfon fix: <input type="number"></p>
        <p>Correu eletrònic <input type="email" required></p>
      </div>';
    }
    ?>


    <div class="tab">Dades dels últims estudis:
      <select name="ultims_estudis"  onchange='CheckColors(this.value);'>
        <?php
          if($_GET['matricula']=='eso'){
            echo '<option value="primaria">Primaria</option>
            <option value="1eso">1r ESO</option>
            <option value="2eso">2n ESO</option>
            <option value="3eso">3r ESO</option>';
          }
          elseif ($_GET['matricula']==['batx']){
            echo '<option value="4eso">4t ESO</option>
            <option value="1cfm">1r CF grup mitjà</option>
            <option value="2cfm">2n CF grup mitjà</option>';
          }
          elseif ($_GET['matricula']=='pfi') {
            echo '<option value="1eso">1r ESO</option>
            <option value="2eso">2n ESO</option>
            <option value="3eso">3r ESO</option>';
          }
          elseif ($_GET['matricula']=='smx') {
            echo '<option value="4eso">4t ESO</option>
            <option value="1batx">1r Batxillerat</option>
            <option value="2batx">2n Batxillerat</option>
            <option value="1cfm">1r CF grup mitjà</option>
            <option value="2cfm">2n CF grup mitjà</option>
            <option value="provaaccesgm">Prova de accés a Grau mitjà</option>
            <option value="pfi">Programa de formació inserció (PFI)</option>
            <option value="uni">Estudis Universitaris</option>
            <option>altres</option>';
          }
          else{

          }
        ?>
      </select>
      <input placeholder="Indiqui quin" name="ultims_estudis" id="altres_estudis" style='display:none;'/>
    </div>

    <div class="tab">Login Info:
      <p><input placeholder="Username..." oninput="this.className = ''"></p>
      <p><input placeholder="Password..." oninput="this.className = ''"></p>
    </div>

    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
    </div>

    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <?php
      if (in_array($_GET['matricula'], ['eso', 'batx', 'pfi', 'smx']))
        echo '<span class="step"></span>';
      ?>
    </div>

  </form>
  <script src="./src/js/main.js"></script>
  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
