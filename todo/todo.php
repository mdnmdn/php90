<?php
require 'lib.todo.php';

// --- inizio logica pagina ---

$action = @$_GET['action'];

if($action == 'save'){

    $title = $_POST['title'];
    $description = $_POST['description'];

    action_save($title,$description);    
}


// --- fine logica pagina ---
// DA QUI IN POI DISEGNIAMO LA PAGINA
require '_header.php';
?>

<div class="box" >
    <h2 class="box-head">Nuovo TODO</h2>
    <form action="todo.php?action=save" method="post">
        
        <div class="form">
            
            <div class="fld">
                <label>Titolo</label>
                <input type="text" name="title" />
            </div>
            
            <div class="fld">
                <label>Descrizione</label>
                <input type="text" name="description" />
            </div>    
        
        </div>
        
        <div class="buttons">
            <button type="submit" >Salva</button>
            <a href="index.php" class="button" >Annulla</a>
		</div>
    </form>
    
    
</div>

<?php
require '_footer.php';
?>
