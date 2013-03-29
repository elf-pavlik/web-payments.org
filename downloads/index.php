<?php
function dirContents($dir)
{
   $contents = scandir($dir);
   $found = false;
   rsort($contents);

   foreach($contents as $item)
   {
      if(preg_match("/payswarm-.*\\.zip/", $item))
      {
         $found = true;
         print("<li style='padding-left: 3em;'>");
         print("<a href=\"$dir/$item\">$item $type</a>");
         print("</li>");
      }
   }
   if(!$found) {
     print("<li style='padding-left: 3em;'>");
     print("<em>None Found</em>");
     print("</li>");
   }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"
      class="wf-adelle1adelle2-n6-active wf-active">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>PaySwarm Downloads</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="stylesheet" href="../css/1140.css" type="text/css" media="screen" />
  <!--[if lte IE 9]>
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
  <![endif]-->
  <link rel="stylesheet" href="../css/typeimg.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../css/smallerscreen.css" media="only screen and (max-width: 1023px)" />
  <link rel="stylesheet" href="../css/mobile.css" media="handheld, only screen and (max-width: 767px)" />
  <link rel="stylesheet" href="../css/layout.css" type="text/css" media="screen" />
  <link rel="shortcut icon" type="image/png" href="../images/payswarm-icon.png" />
  
</head>
<body>

<div class="titlebar">
   <h1>PaySwarm</h1>
</div>
<div class="container vspacing">
  <div class="row">
    <div class="twelvecol">
      <h1>Downloads</h1>
    </div>
  </div>
  <div class="row">
    <div class="twelvecol last">
<p class="largeprint">
Downloads related to the PaySwarm specifications are available under an open,
standards-based, patent and royalty-free license. This means that, just like
all other successful Web technologies, any person or organization is free to
implement the specifications and inter-operate with one another without the
express permission or consent of the group that created PaySwarm.
</p>

<h2>WordPress</h2>

<ul>
  <li>
A WordPress plugin powered by PaySwarm that enables content owners to get paid
for access to their content. Code available on
<a href="https://github.com/digitalbazaar/payswarm-wordpress">GitHub</a>.
    <ul>
      <?php dirContents("wordpress"); ?>
    </ul>
  </li>
</ul>

    </div>
  </div>
</div>
 
<div class="container vspacing"> 
  <div class="row"> 
    <div class="threecol"> 
      <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/"><img alt="Creative Commons License" src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" /></a> 
    </div> 
    <div class="ninecol last"> 
      <p>&copy; 2010 Digital Bazaar, Inc. 
Website CSS created by <a href="http://cssgrid.net/">@andytlr</a> 
and is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/au/">
Creative Commons Attribution-ShareAlike 3.0 Australia License</a>. All other
website content is licensed under a 
<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">
Creative Commons Attribution-ShareAlike 3.0 License</a>
</p> 
    </div> 
  </div> 
</div> 

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1539674-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
  })();

</script>

</body>
</html>
