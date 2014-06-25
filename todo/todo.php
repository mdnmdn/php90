<?php
require 'lib.todo.php';

// --- inizio logica pagina ---

$action = @$_GET['action'];

if($action == 'save'){

    $title = $_POST['title'];
    $description = $_POST['description'];

    action_save($title,$description);
    
}

$id = $_GET['id'];
$todo = action_get_todo($id);


// --- fine logica pagina ---

$title_page = "APP Todo - Gestione TODO";

// DA QUI IN POI DISEGNIAMO LA PAGINA
require '_header.php';
?>

<div class="box" >
    <h2 class="box-head">Nuovo TODO</h2>
    <form action="todo.php?action=save" method="post">
        
        <div class="form">
            
            <div class="fld">
                <label>Titolo</label>
                <input type="text" name="title" value="<?php echo @$todo['title']?>"/>
            </div>
            
            <div class="fld">
                <label>Descrizione</label>
                <input type="text" name="description" value="<?php echo @$todo['description']?>" />
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
