    <div class="row-fluid">
      <div class="span12">
        <div class="span3">
          <div class="sidebar">
            <img src="images/square.png" height="176px">
            <div style="text-align: center">
              <h4>John Harvard<h4>
            </div>
<div id="filters">
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
              <input type="checkbox" value="*">
              All 
            </label>
            <hr>
            <label class="checkbox">
              <input type="checkbox" value=".1">
              Academic/Pre-Professional
            </label>
            <label class="checkbox">
              <input type="checkbox" value=".2">
              Arts
            </label>
            <label class="checkbox">
              <input type="checkbox" value=".15">
              Athletics
            </label>

            <label class="checkbox">
              <input type="checkbox" value=".13">
              Campus Life
            </label>
            <label class="checkbox">              
              <input type="checkbox" value=".3">
              Cultural/Racial
            </label>

            <label class="checkbox">
              <input type="checkbox" value=".4">
              Gender/Sexuality
            </label>

            <label class="checkbox">
              <input type="checkbox" value=".5">
              Government/Politics
            </label>

            <label class="checkbox">
              <input type="checkbox" value=".6">
              Health/Wellness
            </label>
            <label class="checkbox">              
              <input type="checkbox" value=".7">
              Media/Publications 
            </label>            
            <label class="checkbox">              
              <input type="checkbox" value=".8">
              Public Service
            </label>             
            <label class="checkbox">              
              <input type="checkbox" value=".9">
              Recreation 
            </label>             
            <label class="checkbox">              
              <input type="checkbox" value=".10">
              Religious
            </label>
            <label class="checkbox">              
              <input type="checkbox" value=".11">
              Social
            </label>
                          
            <label class="checkbox">
              <input type="checkbox" value=".12">
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
              include 'includes/content/clubs_container_yuqi.php';
            ?>
        </div> <!-- span9 -->
      </div> <!-- span12 -->
    </div>

