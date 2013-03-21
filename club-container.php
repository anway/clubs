<div id="container">

<?php
	$result = mysql_query("SELECT name, club_id FROM club_master") or die(mysql_error());	
	while ($row = mysql_fetch_array($result)) {
	//  <a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
	//  echo '<a href='.$row["club_id"].' role="button" class="btn" data-toggle="modal">'.$row["name"].'</a>';
	    echo '<div class="item" id='.$row["club_id"].'>'.$row["name"].'</div>';
	}
?>

</div>



