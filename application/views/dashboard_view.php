<?php $this->load->view('header') ?>
  <div class="content clearfix">
    <div role="main" id="main">
      <p class="is-warning">You have 101248 items to grade.  Oh dear. <a href="#">Get a move on.</a></p>
      <h2>Sample Table</h2>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Due</th>
            <th>Completed</th>
            <th>Late</th>
            <th>Grading</th>
          </tr>
        </thead>
        <tr>
          <td>Assignment 1</td>
          <td>March 12, 2012</td>
          <td>22/24</td>
          <td>2</td>
          <td><a href="#">View All</a> &#149; <a href="#">Start Grading</a></td>
        </tr>
        <tr>
          <td>Assignment 2</td>
          <td>March 12, 2012</td>
          <td>22/24</td>
          <td>2</td>
          <td><a href="#">View All</a> &#149; <a href="#">Start Grading</a></td>
        </tr>
        <tr>
          <td>Assignment 3</td>
          <td>March 12, 2012</td>
          <td>22/24</td>
          <td>2</td>
          <td><a href="#">View All</a> &#149; <a href="#">Start Grading</a></td>
        </tr>
        <tr>
          <td>Assignment 4</td>
          <td>March 12, 2012</td>
          <td>22/24</td>
          <td>2</td>
          <td><a href="#">View All</a> &#149; <a href="#">Start Grading</a></td>
        </tr>
      </table>

      <h2>Sample Form</h2>
      <form>
        <label>Assignment Name <input type="text" /></label>
        <label>Point Value <input type="number" /></label>
        <label>Due <input type="datetime" /><label>
        <label for="desc">Description</label>
        <textarea name="description"></textarea>
        <input type="submit" name="submit" value="submit" />
      </form>

      <hr />
      <h2>Messages</h2>

      <p class="is-success">It's working!  IT'S WORKING!</p>
      <p class="is-error">You broke everything.</p>
      <p class="is-message">This is a message.</p>
      <p class="is-warning">Warning: this is a warning.</p>

    </div>
    <div id="sidebar">
      <h2>Sample Sidebar</h2>
      <hr />
      <span>Content Management Systems</span>
      <hr />
      <p>Bacon ipsum dolor sit amet pork loin meatball eiusmod chuck pork speck. Fugiat short ribs drumstick rump, fatback elit cupidatat id. Beef ribs in consectetur kielbasa, salami sed reprehenderit pancetta. Officia dolore pariatur, irure short loin sed pancetta esse shankle frankfurter leberkas. Hamburger in short ribs drumstick t-bone, venison chicken ut dolore bresaola corned beef eiusmod commodo. Short loin ribeye in turkey sirloin.</p>
    </div>
    <footer id="footer">
        <p>&copy; 2012 Time Lemmings Inc. </p>
    </footer>
  </div>


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>