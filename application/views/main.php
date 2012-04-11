<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Chalk CMS</title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="css/style.css">

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header id="header">
    <div class="wrapper">
      <h1 class="logo"><a href="#">Chalk</a></h1>
      <nav id="navigation">
        <ul>
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Students</a></li>
          <li><a href="#">Assignments</a></li>
          <li><a href="#">Grades</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="content clearfix">
    <div role="main" id="main">
      <p class="is-warning">You have 101248 items to grade.  Oh dear. <a href="#">Get a move on.</a></p>
      <h2>Sample Table</h2>
      <div class="table-wrapper">
      <table class="respond">
        <thead>
          <tr>
            <th class="essential">Name</th>
            <th class="optional">Due</th>
            <th class="optional">Completed</th>
            <th class="optional">Late</th>
            <th class="essential">Grading</th>
          </tr>
        </thead>
        <tr>
          <th>Assignment 1</td>
          <td>March 12, 2012</td>
          <td>22/24</td>
          <td>2</td>
          <td><a href="#">View All</a> &#149; <a href="#">Start Grading</a></td>
        </tr>
        <tr>
          <th>Assignment 2</td>
          <td>March 12, 2012</td>
          <td>22/24</td>
          <td>2</td>
          <td><a href="#">View All</a> &#149; <a href="#">Start Grading</a></td>
        </tr>
        <tr>
          <th>Assignment 3</td>
          <td>March 12, 2012</td>
          <td>22/24</td>
          <td>2</td>
          <td><a href="#">View All</a> &#149; <a href="#">Start Grading</a></td>
        </tr>
        <tr>
          <th>Assignment 4</td>
          <td>March 12, 2012</td>
          <td>22/24</td>
          <td>2</td>
          <td><a href="#">View All</a> &#149; <a href="#">Start Grading</a></td>
        </tr>
      </table>
    </div>

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
  <script src="js/libs/jquery-ui.widget.min.js"></script>
  <script src="js/rwd-table.js"></script>
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