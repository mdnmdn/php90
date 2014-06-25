<?php
require 'lib.todo.php';

// --- inizio logica pagina ---


// array con i todo
$todos = action_list();


// --- fine logica pagina ---

$title_page = "APP Todo - Elenco";

// DA QUI IN POI DISEGNIAMO LA PAGINA
require '_header.php';
?>



<div class="box" >
    <h2 class="box-head">Elenco TODO</h2>
    
    <div class="buttons">
        <a href="todo.php" class="button">Nuovo TODO</a> 
    </div>
    
    <div class="table">
    <table>
        <tr>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Priorit&agrave;</th>
        </tr>
        
        <?php
            for($i = 0; $i < count($todos); $i++){
                $todo = $todos[$i];  
        ?>
            <tr>
                <td><?php echo $todo['title']; ?></td>
                <td><?php echo $todo['description']; ?></td>
                <td><?php echo $todo['priority']; ?></td>
            </tr>
        <?php } ?>
    </table>
    </div>
</div>

<?php
require '_footer.php';
?>
