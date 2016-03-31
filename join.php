<!DOCTYPE html>
<html>
 <head>
 		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Cricket Cricket</title>
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
		<link rel="stylesheet" type="text/css" media="print" href="css/print-style.css" />
		<link rel="shortcut icon" href="favicon.ico" />

		
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="script/jquery.validate.min.js"></script>
		


<script>
$(document).ready(function () {

    $("#join-form").validate({ // initialize the plugin
        
		rules: {
            email: {
                required: true,
                email: true
            },
            name: {
                required: true,
                minlength: 5
            },
			Lastname: {
                required: true,
                minlength: 5
            },
			phone: {
                required: true,
                minlength: 5
            },
			age: {
                required: true,
               
            },
			location: {
                required: true,
                
            },
			
                              
        },
        submitHandler: function (form) { 
            alert('valid form submitted'); 
            return false; 
        }
    });

});


</script>        
             
    </head>
    
 <body>
 <section id="page"> <!-- Defining the #page section with the section tag -->
    <p id="skipnav"><a href="#container">Skip navigation</a></p>
            <header> <!-- Defining the header section of the page with the appropriate tag -->

                <hgroup>
				
				
<div class="image-header"> <img src="img/logo-2.jpg"   alt="our logo" /> 
  <p class="title">Cricket Cricket</p>
  <img src="img/title.jpg"   alt="title" class="right-align" /> 
  <p class="slogan">World's most popular game</p>
</div>
                  
                </hgroup>
                                
               <nav class="clear" > <!-- The nav link semantically marks your main site navigation -->
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-cricket.php">About Cricket</a></li>
                        <li><a href="history.php">Cricket History</a></li>
						 <li><a href="equipements.php">Cricket Equipments</a></li>
                        <li><a href="cricket-rules.php">Cricket Rules</a></li>
                        <li><a href="famous-teams.php">Famous Cricket Teams</a></li>
						<li><a href="join.php">Join Us</a></li>
                    </ul>
                </nav>
            
            </header>
            <div class="line"></div>
          
		   <section id="container"> <!-- A new section with the articles -->
				
				<!-- Article 1 start -->

                
                <article id="1" class="article"> <!-- The new article tag. The id is supplied so it can be scrolled into view. -->
				 
                  
<div class="articleBody clear"> 
       <h2>Join Cricket Academy</h2>
							<figure class="callout-image" > <!-- The figure tag marks data (usually an image) that is part of the article -->
	                    	<img src="img/cricket-academy.jpg" width="400"  alt="crickety Academy"/>
							</figure>
							
							
							
           <div id="contactinfo">             
        
         <form id="join-form" method="get">
	
	
	  
	  <label>First Name 
      <input type="text" name="name"  placeholder="First name" />
      </label>
          
      <label>Last Name 
      <input type="text" name="Lastname"  placeholder="Last name" />
      </label>
	  <label>Email 
      <input type="text" name="email" placeholder="address@example.com" />
      </label>
	  <label> Phone 
      <input type="text" name="phone"  placeholder="Phone no" />
      </label>
	  <label>Age 
      <input type="text" name="age"  placeholder="Age"/>
      </label>
	  <label>Location 
      <input type="text" name="location"  placeholder="City name"/>
      </label>
	  
		
      <label>
      <textarea  name="additionalInfo" rows="10" cols="40" placeholder="Additional Information"></textarea>
      </label>
		
		
        
      <input type="submit" id="submit" value="Join" />
    
    </form>
	</div>
							<figure class="callout-image" > <!-- The figure tag marks data (usually an image) that is part of the article -->
	                    	<img src="img/cricket-academy-2.jpg" width="400"  alt="crickety Academy 2"/>
							</figure>
	</div>
      </article>
     
	 </section>
       <footer> <!-- Marking the footer section -->

           <div class="line"></div>
           
           
<p>Copyright &copy 2014 - Cricket Cricket</p>
<!-- copyright notice -->
<a href="#" class="up">Go on Top</a> </footer> </section> 
<!-- Closing the #page section -->
</body>
</html>