<?php
  include 'includes/header.php';
?>
        <div class="zip-container">
          <p> “I support a pathway to citizenship because I don't believe we should have a second class of citizens.”  - Don Younge Texas Representative Wall Street Journal</p>
          <h1>Where does your representative stand on immigration reform?</h1>
          <form class="form-inline">
            <div class="form-group">
              <input type="text" class="input-lg form-control" placeholder="Enter your zip code"/>
            </div>
            <button type="button" class="btn btn-primary btn-lg">Submit</button>
          </form>
        </div>
        <div class="container reps-list" >
          <div class="row" id="reps-list">
          </div>
        </div>

        <script type="text/template" id="rep-template">
            <div class="col-md-4 representative-container">
              <div class="thumbnail">
                <div class="clip">
                  <img src="https://s3.amazonaws.com/push4reform/<%- bioguide_id  %>.jpg" />
                </div>
                <div class="caption">
                  <div class="img-circle a a-plus grade"><span>A</span></div>
                  <h1><%- firstname + ' ' + lastname %></h1>
                  <h2><%- title + ' ' + party %></h2>
                  <h3><%- state %></h3>
                  <a class="btn btn-primary btn-lg btn-block">Contact</a>
                </div>
              </div>
            </div>
        </script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/vendor/underscore-min.js"></script>
        <script src="js/vendor/backbone-min.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
