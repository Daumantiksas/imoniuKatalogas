<?php require 'view/_partials/head.view.php'; ?>


       <a  class="btn btn-outline-success"  href="/add-task">Nauja imone</a>
       <a  class="btn btn-outline-success"  href="/table">Visos imones</a>
    </div>

</nav>
                <form class="d-flex" method="post">
                  
                    <input class="form-control me-2" type="search" placeholder="Ieskoti" aria-label="Search" name="input_search">
                    <button class="btn btn-outline-success" type="submit" name="search">Search</button>
                </form>

                
<div class="container">
        <?php if(isset($_POST['search'])) :?>
            <?php if(!empty($fields)) :?>
                <table class="table" style="margin-top: 30px">
                    <tbody>
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
                        <?php foreach ($fields as $field):?>
                            <tr>
                            <td><?=$field['code'];?></td>
                            <td><?=$field['name'];?></td>
                            <td><?=$field['pvm_code'];?></td>
                            <td><?=$field['adress'];?></td>
                            <td><?=$field['phone'];?></td>
                            <td><?=$field['email'];?></td>
                            <td><?=$field['work'];?></td>
                            <td><?=$field['boss'];?></td>
                            <td><a  class="btn btn-outline-success"  href="/delete-task/id/<?=$task['id'];?>">Salinti</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="alert alert-danger" role="alert" style="margin-top: 30px">
                    <h1>Imones nera!</h1>
                </div>
            <?php endif; ?>
        <?php endif; ?>
</div>

<?php require "view/_partials/htmlEnd.php";?>