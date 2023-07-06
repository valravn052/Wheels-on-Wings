<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--
Book cars based availability
-->
<html>
    <head>
        <title>Rental </title>
        <link href="styles.css" rel="stylesheet" type="text/css" />
     
    </head>
    <body>
        <marquee><h3>This CSE Project Show | Spring '2022' |25% OFF on.  Free Rides on first booking. Hurry Now!</h3></marquee>
		<div class="logoBackground">
  	<div class="logo"><h6>RENTAL<h6></div>
    
  </div>
		<div class="menu">
  	<ul>
    	<li><a href="homepage.php">Homepage</a></li>
            <li><a href="">Bikes</a></li>
            <li><a href="accessories.php">Accessories</a></li>
            <li><a href="">Rental</a></li>
            <li><a href="">Servicing</a></li>
            <li><a href="build.php">Build</a></li>
            <li><a href="">Buy-Sell</a></li>
            <li><a href="">Logout</a></li>
            <li><br>
              <form method="post">
                <label>Search</label>
                <input type="text" name="search">
                <input type="submit" name="submit">
  
              </form>
            </li>
    </ul>
  </div>
	
<div class="leftContent">
    <b><form action="available.php" method="post" >
		<h1> BOOK A BICYCLE </h1><br><br>
Enter Customer ID: <input type="text" name="cbid"/><br><br>
Enter date yyyy-mm-dd: <input type="text" name="Sdate"/><br><br>
Select BiCycle type: <select name = "Ctype">
<option>Compact</option>
<option>Medium</option>
<option>Large</option>
<option>Small</option>
<option>Side Support</option>
<option>Stunt</option>
</select><br><br>
Rent type: <select name = "Rtype">
<option>Hourly</option>
<option>Daily</option>
<option>Weekly</option>

</select><br><br>
No of hours : <select name = "Hours">
<option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option>
</select><br><br>
No of days : <select name = "Days">
<option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option>
</select><br><br>
No of weeks : <select name = "Weeks">
<option>0</option><option>1</option><option>2</option><option>3</option>
</select><br><br>
<input type="submit" name="check" value="Check Availability"><br><br>

Enter BiCycle id: <input type="text" name="Vehicleid"/><br><br>
<input type="submit" name="book" value="Book">
</form></b>	

<br>
<b><form action="viewrental.php" method="post" >
		<h2> VIEW ACTIVE & SCHEDULED RENTALS </h2>
		<input type="submit" name="submit1" value="View">
</form></b>
    </div>	
	
	
	<div class="rightContent">
<SCRIPT LANGUAGE="JavaScript">

var num=1
img1 = new Image ()
img1.src = "https://inhabitat.com/wp-content/blogs.dir/1/files/2017/01/Kwiggle-folding-bike-889x299.jpg"
img2 = new Image ()
img2.src = "https://m.media-amazon.com/images/I/715hLIIgSXL.jpg"
img3 = new Image ()
img3.src = "https://5.imimg.com/data5/CA/SR/MY-26779310/green-3-500x500.jpg"
img4 = new Image ()
img4.src = "https://cdn.shopify.com/s/files/1/2397/8083/products/pinto-0000002_e95c0a33-1171-4f41-b6fb-64c981d9c3c3_2048x2048.JPG?3130" 
img5 = new Image ()
img5.src = "https://5.imimg.com/data5/QT/CK/MY-52961419/children-2-side-support-wheels-bicycles-500x500.jpg" 
img6 = new Image ()
img6.src = "https://realitypod.com/wp-content/uploads/2012/05/Audi_e-bike.jpg" 

text1 = "COMPACT"
text2 = "MEDIUM"
text3 = "LARGE"
text4 = "SMALL"
text5 = "SIDE SUPPORT"
text6 = "STUNT"

function slideshowUp()
{
num=num+1
if (num==7)
{num=1}
document.mypic.src=eval("img"+num+".src")
document.raj.iname.value=eval("text"+num)
}

function slideshowBack()
{
num=num-1
if (num==0)
{num=6}
document.mypic.src=eval("img"+num+".src")
document.raj.iname.value=eval("text"+num)
}

</SCRIPT>
<!-- The Image and Form Codes are Below --> 
<CENTER>
<IMG SRC="images/1.jpg" NAME="mypic" BORDER=0 HEIGHT="380" WIDTH="500">
<FORM NAME="raj">
<INPUT TYPE="text" WIDTH="100" NAME="iname" VALUE="Medium">
</FORM><A HREF="JavaScript:slideshowBack()"> Back</A>  <A HREF="JavaScript:slideshowUp()"> Next</A> 


	</div>
	
	</body>
	</html>