<?php 

$inc = include("Connection_db.php");

if ($inc) {
	$consult = "SELECT * FROM movie";
	$result = mysqli_query($conex,$consult);
	if ($result) {
		while ($row = $result->fetch_array()) {
	    $id = $row['id'];
	    $name = $row['name'];
	    $description = $row['description'];
	    ?>
        <div><br>
        	<h2><?php echo $name; ?></h2>
        	<div>
        		<p>
        			<b> ID: </b> <?php echo $id ?> <br>
        		    <b> Description: </b> <?php echo $description ?> <br>
					
        		</p>
        	</div>
        </div> 
	    <?php
		?>
		<a href="delete.php?id=<?php echo $row['id']?>">Eliminar</a> <br><br>
		<?php
	    }
	}
}
?>