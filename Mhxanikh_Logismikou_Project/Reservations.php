<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Reservations</title>
         <script type="text/javascript" src="Jquery/jquery-1.9.1.js"></script>
          <script  type="text/javascript" src="Jquery/jquery.ui.core.js"></script>
		  <script  type="text/javascript" src="Jquery/jquery.ui.widget.js"></script>
		  <script  type="text/javascript" src="Jquery/jquery.ui.datepicker.js"></script>
		  
		  <script src="Jquery/bjqs-1.3.min.js"></script>
		  
		  <link rel="stylesheet" href="demo.css">
	      <link rel="stylesheet" href="bjqs.css"> 
	      <link rel="stylesheet" type="text/css" href="CSS/DatepickerCSS/jquery.ui.all.css" />
		  <link rel="stylesheet" type="text/css" href="CSS/MenuBarCss.css"/>       
      
      
         

     
		<!-- Datepicker script-->  
		  <script type="text/javascript">

	$(function() {
		
		$( "#from" ).datepicker({
			
			defaultDate: "+1w",
			changeMonth: true,
			numberOfMonths: 3,
			onClose: function( selectedDate ) {
				$( "#to" ).datepicker( "option", "minDate", selectedDate );
			}
		});
		$( "#to" ).datepicker({
			defaultDate: "+1w",
			changeMonth: true,
			numberOfMonths: 3,
			onClose: function( selectedDate ) {
				$( "#from" ).datepicker( "option", "maxDate", selectedDate );
			}
		});
	});
	</script type="text/javascript">

	<script type="text/javascript">
	function reloadPage()
	{
		window.location.replace("http://mhxanikhlogismikou.comxa.com/Reservations.php?search=1");
	}
	function Monoklina(){
		$('.containedImageClass').css({top:"900px"});
		document.getElementById("containedImage").src="Hotel Images/Queens_small.jpg";
		$('.containedImageClass').css({top:"0px"});
		}
		
		function MonoklinaOut(){
		$('.containedImageClass').css({top:"900px"});
		}
		
				function Diklina(){
		$('.containedImageClass').css({top:"900px" });
		document.getElementById("containedImage").src="Hotel Images/Kings_small.jpg";
		$('.containedImageClass').css({top:"0px"});
		}
		
		function DiklinaOut(){
		
		$('.containedImageClass').css({top:"900px"});
		}
			
		
		
			function Suites(){
		$('.containedImageClass').css({top:"900px"});
		document.getElementById("containedImage").src="Hotel Images/Suite_small.jpg";
		$('.containedImageClass').css({top:"0px"});
		}
		
		function SuitesOut(){
		$('.containedImageClass').css({top:"900px"});
		}
	</script>
 
    </head>
    
    
    
    
    
    
    <body>
    	<?php
    	$mysql_host = "mysql9.000webhost.com";
		$mysql_database = "a8643869_testing";
		$mysql_user = "a8643869_testUsr";
		$mysql_password = "testing1234";
		$dbase="a8643869_testing";
		class Room  
		{  
		    public $id ;
		    public $name;
		    public $price;  
			public $type;
		  
		    public function setProperties($newval,$newval2,$newval3,$newval4)  
		    {  
		        $this->id = $newval;  
		        $this->name = $newval2;
		        $this->price= $newval3;  
				$this->type=$newval4;
		    }  
			public function getType()
			{
				return $this->type;
			}
		    public function getId()  
		    {  
		        return $this->id;  
		    }  
		    
		    public function getName()  
		    {  
		        return $this->name;  
		    }  
		    
		    public function getPrice()  
		    {  
		        return $this->price;  
		    }  
		}  
	
    	?>
	<nav>
	<ul>
		<li><a href="index.html">Αρχική</a></li>
		<li><a href="#">Ξενοδοχείο</a>
			<ul>
				<li><a href="#">Δωματια</a>
						<ul>
						<li><a href="#">Δικλινα</a></li>
						<li><a href="#">Μονοκλινα</a></li>
						<li><a href="#">Suites</a></li>
						
					</ul>
				</li>
				<li><a href="#">Προσωπικο</a></li>
				<li><a href="#">Χωροι σταθμευσεις</a>				
				</li>
			</ul>
		</li>
		<li><a href="#">Κρατησεις</a></li>
		<li><a href="#">Εταιρεία</a>
			<ul>
				<li><a href="#">Πληροφοριες</a></li>
				<li><a href="#">Ευκαιριες Εργασιας</a></li>
			</ul>
		</li>
		<li><a href="#">Επικοινωνια</a></li>
	</ul>
</nav>

<?php echo $search; ?>




 
<div class="dateSearch">
	
		<div class="demo-description">
			<p>Επιλεξτε ημερομηνια</p>
			<label for="from">Απο</label>
			<input type="text" id="from" name="from"/> 
			<label for="to">Εως</label>
			<input type="text" id="to" name="to"/>
		</div>
	<input class="datesearchButton" onclick="reloadPage()" type="button" id="searchButton" name="searchButton" value="Search" />

</div>


<h2 align="center">ΔΙΑΘΕΣΙΜΑ ΔΩΜΑΤΙΑ</h2>
<div >
	
	<Table class="freeRooms">
		<th>Kωδικος Δωματιου</th>
		<th>Τυπος Δωματιου</th>
		<th>Ονομα Δωματιου</th>
		<th>Τιμη/βραδυ</th>
		<th>Αριθμος δωματιων για κρατηση</th>
		
		<?php
		if($_GET['search']!=NULL)
		{
		$dwmatio=new Room;
		
		{
		$dblink=mysql_connect($mysql_host,$mysql_user ,$mysql_password) or die ("could not connect to database");
		mysql_select_db($dbase) or die ("couldnt select that database");
		$query="select * from Diklina";
		$result=mysql_query($query) or die ("couldnt query  correctly");
		
		while($row=mysql_fetch_array($result))
		{
			$dwmatio->setProperties($row['Id'],$row['Name'],$row['Price'],"Diklino");
			
		echo '<tr onmouseover="Diklina()" onmouseout="DiklinaOut()">';
		echo"<td>";echo $dwmatio->getId();echo"</td>";
		echo"<td>";echo $dwmatio->getType();echo"</td>";
		echo"<td>";echo $dwmatio->getName();echo"</td>";
		echo"<td>";echo $dwmatio->getPrice();echo"</td>";
		echo"<td>";echo '<input type="text"/>';echo "</td>";
		echo"</tr>";
		}
		
		$query="select * from Monoklina";
		$result=mysql_query($query) or die ("couldnt query  correctly");
		
		while($row=mysql_fetch_array($result))
		{
			$dwmatio->setProperties($row['Id'],$row['Name'],$row['Price'],"Monoklino");
			
		echo '<tr onmouseover="Monoklina()" onmouseout="MonoklinaOut()">';
		echo"<td>";echo $dwmatio->getId();echo"</td>";
		echo"<td>";echo $dwmatio->getType();echo"</td>";
		echo"<td>";echo $dwmatio->getName();echo"</td>";
		echo"<td>";echo $dwmatio->getPrice();echo"</td>";
		echo"<td>";echo '<input type="text"/>';echo "</td>";
		echo"</tr>";
		}
		
		$query="select * from Suite";
		$result=mysql_query($query) or die ("couldnt query  correctly");
		
		while($row=mysql_fetch_array($result))
		{
			$dwmatio->setProperties($row['Id'],$row['Name'],$row['Price'],"Suite");
			
		echo '<tr onmouseover="Suites()" onmouseout="SuitesOut()">';
		echo"<td>";echo $dwmatio->getId();echo"</td>";
		echo"<td>";echo $dwmatio->getType();echo"</td>";
		echo"<td>";echo $dwmatio->getName();echo"</td>";
		echo"<td>";echo $dwmatio->getPrice();echo"</td>";
		echo"<td>";echo '<input type="text"/>';echo "</td>";
		echo"</tr>";
		}
		
		 }
		 }
		  ?>
	</Table>
	
	
	
	
	
	
	
	
</div>
		<div class="imageContainer">
		<img id="containedImage" class="containedImageClass" src="Hotel Images/Kings.jpg"/>
	</div>
    </body>
</html>
