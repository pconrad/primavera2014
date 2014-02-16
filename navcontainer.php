<!-- navcontainer.php -->

<?php  

function genActive($item)
{
  if ( ! isset($_GET['menuItem'] ))
  {
     if ($item == "1")
	      echo (" class='active' style='' ");
     return;
  }
      
 
  if ($item==$_GET['menuItem'])
    echo (" class='active' ");
}
?>


<div id="navcontainer">
		<ul> 
			<li <?php genActive("1"); ?> ><a href=".">Schedule (home)</a></li>
			<li <?php genActive("120");?> ><a href="press">Press</a></li> 
			<li <?php genActive("130");?> ><a href="artists">Featured Artists</a></li>
			<li <?php genActive("140");?> id="breakAfter1"><a href="credits-sponsors">Credits &amp; Sponsors</a></li>
			
		
        	<li><a href="http://www.ccs.ucsb.edu/primavera/2013/">Primavera 2013</a></li>
        	<li><a href="http://www.ccs.ucsb.edu/primavera/2012/">Primavera 2012</a></li>
        	<li><a href="http://www.ccs.ucsb.edu/primavera/2011/">Primavera 2011</a></li>
            <li><a href="http://www.ccs.ucsb.edu/primavera/2010/">Primavera 2010</a></li>
            <li><a href="http://www.ccs.ucsb.edu/primavera/2009/">Primavera 2009</a></li>
			<li><a href="http://www.ccs.ucsb.edu/primavera/2008/">Primavera 2008</a></li>
			<li><a href="http://www.ccs.ucsb.edu/primavera/2007/">Primavera 2007</a></li>
			<li class="break"><a href="http://www.ccs.ucsb.edu/primavera/2006/">Primavera 2006</a></li>
		</ul>
<span><img src="images/floral_loxodrome _nicholas_jackson_250w_255h.jpg" width="250"  alt="Floral Loxodrome, by Nicholas Jackson"/></span>
	</div>
