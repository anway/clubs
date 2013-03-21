    <div class="row-fluid">
      <div class="span12">
        <div class="span3">
          <div class="sidebar">
            <img src="images/square.png" height="176px">
            <div style="text-align: center">
              <h4>John Harvard<h4>
            </div>
            <label class="checkbox">
              <input type="checkbox" value="">
              Joined Clubs
            </label>
            <label class="checkbox">
              <input type="checkbox" value="">
              Starred
            </label>
            <label class="checkbox">              
              <input type="checkbox" value="">
              Friend's Clubs
            </label>
            <label class="checkbox">              
              <input type="checkbox" value="">
              All 
            </label>
            <hr>
            <label class="checkbox">
              <input type="checkbox" value="1">
              Academic/Pre-Professional
            </label>
            <label class="checkbox">
              <input type="checkbox" value="2">
              Arts
            </label>
            <label class="checkbox">
              <input type="checkbox" value="15">
              Athletics
            </label>

            <label class="checkbox">
              <input type="checkbox" value="13">
              Campus Life
            </label>
            <label class="checkbox">              
              <input type="checkbox" value="3">
              Cultural/Racial
            </label>

            <label class="checkbox">
              <input type="checkbox" value="4">
              Gender/Sexuality
            </label>

            <label class="checkbox">
              <input type="checkbox" value="5">
              Government/Politics
            </label>

            <label class="checkbox">
              <input type="checkbox" value="666666">
              Health/Wellness
            </label>
            <label class="checkbox">              
              <input type="checkbox" value="">
              Media/Publications 
            </label>            
            <label class="checkbox">              
              <input type="checkbox" value="">
              Public Service
            </label>             
            <label class="checkbox">              
              <input type="checkbox" value="">
              Recreation 
            </label>             
            <label class="checkbox">              
              <input type="checkbox" value="">
              Religious
            </label>
            <label class="checkbox">              
              <input type="checkbox" value="">
              Social
            </label>
                          
            <label class="checkbox">
              <input type="checkbox" value="">
              Women's Initiative
            </label>
          </div>
        </div> <!-- span3 -->
        <div class="span9">
            <br>
            <form class="form-search">
              <input type="text" class="span9 input-medium search-query">
              <!--<button type="submit" class="btn">Search</button>-->
              <select class="span3">
                <option># of Members</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>            
            </form>
            <hr>
            <?php
              include 'includes/content/clubs_container.php';
            ?>
        </div> <!-- span9 -->
      </div> <!-- span12 -->
    </div>

<script>
/*handles filters. this script is called whenever any checkbox is checked or unchecked*/
$(document).ready(function(){
    $(":checkbox").change(function(){
    var rows=<?=json_encode($rows)?>;
		/*first assume that all of the events are excluded, then start adding in*/
    $('.cell').hide();
		/*iterate through checkboxes to add in events*/
    $(":checkbox").each(function(){
        if ($(this).attr("checked"))
        {
            var num=$(this).attr('id'); /*the variable num holds the name of the filter, like 'filter1' or 'filter2', which also happens to be the name of the filter in the database*/
            var end=rows.length;
            for (var i=0; i<end; i++)
            {
                if (rows[i]!=null)
                    if (rows[i][num]==1)/*ie if $rows[$i]['filter1']==1 for all the filters*/
                    {
                        $('#'+i).show();
                    }
             }
         }
        });
        resizecells();
    });
});
</script>
