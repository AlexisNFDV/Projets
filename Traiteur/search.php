<?php 
require_once("includes/init.php");
$output = '';
if(isset($_POST["query"]) && !empty($_POST["query"])) :
	$search=htmlspecialchars($_POST['query']);
	$ref = $dbh->prepare("SELECT * FROM memo WHERE category LIKE '%".$search."%' OR content LIKE '%".$search."%'  OR title LIKE '%".$search."%'");
	$ref->execute();
	$res = $ref->fetchAll();
	
/*	echo "<pre>";
   var_dump($res);
    echo "</pre>";
*/
    ?>
    <div class="search-results">
    	<?php if(count($res) > 0) : ?>
    		<?php foreach ($res as $resultat) : ?>
    			<span class="cat-search"><?= $resultat['category'];?></span>
    			<a href="cours.php?id=<?= $resultat['id'];?>"><?= $resultat['title'];?></a>
    		<?php endforeach;
    	else :
    		echo "Aucune donnée trouvée";
    	endif; 
    	?>
    </div>
<?php endif; ?>