<?php require 'view/_partials/head.view.php'; ?>
<a class="btn btn-outline-success" href="/">Gristi</a>

<div class="container" style="margin-top: 30px">
   
    <!-- <?php foreach ($errors as $error): ?>
        <div class="alert alert-danger" role="alert">
            <?= $error; ?>
        </div>
    <?php endforeach; ?> -->

        <form method="post">
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Imones kodas" name="code">
                <input type="text" class="form-control" placeholder="Imones pavadinimas" name="name">
                <input type="text" class="form-control" placeholder="PVM kodas" name="pvm_code">
                <input type="text" class="form-control" placeholder="Adresas" name="adress">
                <input type="text" class="form-control" placeholder="Telefono numeris" name="phone">
                <input type="email" class="form-control" placeholder="El. pastas" name="email">
                <input type="text" class="form-control" placeholder="Veikla" name="work">
                <input type="text" class="form-control" placeholder="Vadovas" name="boss">
                </div>


                <button class="btn btn-outline-success" type="submit" name="save">Saugoti</button>
            </div>
        </form>
    
</div>
<?php require "view/_partials/htmlEnd.php";?>
