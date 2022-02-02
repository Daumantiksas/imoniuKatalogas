<?php require 'view/_partials/head.view.php'; ?>

    <form class="d-flex">            
    <table class="table">       
    <thead>
        <tr>
        <th scope="col">Kodas </th>
        <th scope="col">Pavadinimas</th>
        <th scope="col">PVM kodas</th>
        <th scope="col">Adresas</th>
        <th scope="col">telefono nr. </th>
        <th scope="col">el. pastas</th>
        <th scope="col">Veikla</th>
        <th scope="col">Vadovas</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <?php foreach($Imones->allTasks() as $task):?>
    <tbody>
        <tr>
        <td><?=$task['code'];?></td>
        <td><?=$task['name'];?></td>
        <td><?=$task['pvm_code'];?></td>
        <td><?=$task['adress'];?></td>
        <td><?=$task['phone'];?></td>
        <td><?=$task['email'];?></td>
        <td><?=$task['work'];?></td>
        <td><?=$task['boss'];?></td>
        <td><a  class="btn btn-outline-success"  href="/delete-task/id/<?=$task['id'];?>">Salinti</a></td>
        </tr>
        
    </tbody>
    <?php endforeach;?>
    </table>

    </form>

<?php require "view/_partials/htmlEnd.php";?>