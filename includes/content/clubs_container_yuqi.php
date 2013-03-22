<div class = "span12 container" id="clubs_wrapper">
<?php
	$result = mysql_query("SELECT club_id, name, blurb, size, involvement, email, site, 
	                            address, election_month, update_date, pic FROM club_master") 
	or die(mysql_error());
	while ($row = mysql_fetch_array($result)) { 
	  $cid = $row["club_id"];

        // Grab Tags
          $query = "SELECT club_tag FROM club_tags WHERE club_id=$cid";
          $tags = mysql_query($query) or die(mysql_error());
          // Create Tag String

          $tag_string = "";
          while($tag=mysql_fetch_array($tags)) {
            $tag_string = $tag_string . " " . $tag["club_tag"];
          }

	  // This is for the clubs list
	  echo '<div class="item '.$tag_string.'"> <a href=#'.$row["club_id"].' data-toggle="modal">'
	    .$row["name"].'</a> </div>';
	  
	  // This if for the modal view.
	  echo '<div id='.$row["club_id"].' class="modal hide fade" tabindex="-1" role="dialog"
	              aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3>'.$row["name"].'</h3>
            </div>
            <div class="modal-body">
              <p>'.$row["blurb"].'</p>
              <hr>
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
              <button class="btn btn-primary">Save changes</button>
            </div>
          </div>';
	}
    ?>
</div>
<script type="text/javascript">
	$(document).ready(function(){

	var $container = $('#clubs_wrapper'),
	    $checkboxes = $('#filters input');

	$container.isotope({
		itemSelector: '.item'
	});

	$checkboxes.change(function(){
		var filters = [];
		$checkboxes.filter(':checked').each(function(){
			filters.push(this.value);
		});
		filters = filters.join(', ');
		$container.isotope({ filter: filters});
	});
	});
</script>
