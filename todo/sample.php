<?php
require 'lib.todo.php';

// --- inizio logica pagina ---

$title = "wow";
// --- fine logica pagina ---
// DA QUI IN POI DISEGNIAMO LA PAGINA
require '_header.php';
?>

<div class="box" >
   <h2 class="box-head">Box</h2>
   <p>
      lorem ipsum
   </p>
</div>
<div class="box" >
   <h2 class="box-head">Form</h2>
   <form action="" method="get">
      <div class="form">
         <div class="fld">
            <label>Nome</label>
            <input type="text" name="nome" />
         </div>
         <div class="fld">
            <label>Cognome</label>
            <input type="text"  name="cognome" />
         </div>
         <div class="inline-field">
            <label>Data nascita</label>
            <select name="giorno">
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>...</option>
               <option>28</option>
               <option>29</option>
               <option>30</option>
               <option>31</option>
            </select>
            <select  name="mese" >
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
               <option>6</option>
               <option>7</option>
               <option>8</option>
               <option>9</option>
               <option>10</option>
               <option>11</option>
               <option>12</option>
            </select>
            <select  name="anno">
               <option>2000</option>
               <option>1999</option>
               <option>1998</option>
               <option>1997</option>
               <option>1996</option>
               <option>1995</option>
               <option>1994</option>
               <option>1993</option>
               <option>1992</option>
               <option>1991</option>
               <option>1990</option>
               <option>1989</option>
               <option>1988</option>
               <option>1987</option>
               <option>1986</option>
               <option>1985</option>
               <option>1984</option>
               <option>1983</option>
               <option>1982</option>
               <option>1981</option>
               <option>1980</option>
               <option>1979</option>
               <option>1978</option>
               <option>1977</option>
               <option>1976</option>
            </select>
         </div>
         <div class="fld">
            <label>Sesso</label>
            <select name="sesso">
               <option value="M">Uomo</option>
               <option value="D">Donna</option>
            </select>
         </div>
         <div class="fld">
            <label>Localit&agrave; di nascita</label>
            <select name="localita">
               <option value="L219" >Torino</option>
               <option value="E715">Lucca</option>
               <option value="G478">Perugia</option>
            </select>
         </div>
      </div>
      <div class="buttons">
         <button type="reset" >Azzera</button>
         <button type="submit" >Calcola</button>
      </div>
   </form>
</div>


<div class="box" >
<h2 class="box-head">table</h2>
<!--<div class="buttons">
   <button>value</button>

   </div>-->
<div class="table">
   <table >
      <tr>
         <th width="13"><input type="checkbox" class="checkbox" /></th>
         <th>Title</th>
         <th>Date</th>
         <th>Added by</th>
         <th width="110" class="ac">Content Control</th>
      </tr>
      <tr>
         <td><input type="checkbox" class="checkbox" /></td>
         <td>
            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
         </td>
         <td>12.05.09</td>
         <td><a href="#">Administrator</a></td>
         <td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
      </tr>
      <tr class="odd">
         <td><input type="checkbox" class="checkbox" /></td>
         <td>
            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
         </td>
         <td>12.05.09</td>
         <td><a href="#">Administrator</a></td>
         <td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
      </tr>
      <tr>
         <td><input type="checkbox" class="checkbox" /></td>
         <td>
            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
         </td>
         <td>12.05.09</td>
         <td><a href="#">Administrator</a></td>
         <td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
      </tr>
      <tr class="odd">
         <td><input type="checkbox" class="checkbox" /></td>
         <td>
            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
         </td>
         <td>12.05.09</td>
         <td><a href="#">Administrator</a></td>
         <td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
      </tr>
      <tr>
         <td><input type="checkbox" class="checkbox" /></td>
         <td>
            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
         </td>
         <td>12.05.09</td>
         <td><a href="#">Administrator</a></td>
         <td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
      </tr>
      <tr class="odd">
         <td><input type="checkbox" class="checkbox" /></td>
         <td>
            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
         </td>
         <td>12.05.09</td>
         <td><a href="#">Administrator</a></td>
         <td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
      </tr>
      <tr>
         <td><input type="checkbox" class="checkbox" /></td>
         <td>
            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
         </td>
         <td>12.05.09</td>
         <td><a href="#">Administrator</a></td>
         <td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
      </tr>
      <tr class="odd">
         <td><input type="checkbox" class="checkbox" /></td>
         <td>
            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
         </td>
         <td>12.05.09</td>
         <td><a href="#">Administrator</a></td>
         <td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
      </tr>
   </table>
   <div class="buttons">
      <button>value</button>
   </div>
</div>



<?php
require '_footer.php';
?>
