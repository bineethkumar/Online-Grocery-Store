<html>
<head>
<link href="css.css" rel="stylesheet" type="text/css">
<script>
function stickyMenu(){
       var sticky =document.getElementById('sticky');
        if(window.pageYOffset>220){
           sticky.classList.add('sticky');
          }
        else{
            sticky.classList.remove('sticky');
          }
}
window.onscroll = function(){
   stickyMenu();
}
</script>

</head>
<body>
  
      
            
     <div class= "scrolling">
      <marquee>Welcome to the ONLINE GROCERIES. You can now get your groceries right at your door. ORDER NOW.</marquee>
      </div>

   <div class= "main">
     <div class ="page-title"> ONLINE GROCERIES</div>
         <style>
           h2{text-align: left;}
            </style>
      
       
    </div>
    <div class ="menu" id ="sticky">
       <ul class ="menu-ul">
           <a href= "#MENU" class ="a-menu" ><li>HOME</li></a>
         
             <a href= "Daily Essentials.html" class ="a-menu" ><li>DAILY ESSENTIALS</li></a>
              <a href= "Vegetables.html" class ="a-menu" ><li>FRUITS AND VEGETABLES</li></a>
                <a href= "DAIRY PRODUCTS.html" class ="a-menu" ><li>DAIRY PRODUCTS</li></a>
             <a href= "Meat.html" class ="a-menu" ><li>MEAT</li></a>
              <a href= " http://localhost/satwik_project/login.php" class ="a-menu" ><li>LOG OUT</li></a>
              </ul>
         <div class =" search-box">
                <form>
                        <input type ="text" placeholder="Search here"name="search" class ="search-input"/>
            <button type= "submit"><i class="fa fa-search"></i></button>
                   <form>
                </div>
           </div>
  <div class ="container">
        <a href "#DAILY ESSENTIALS">
              <div class ="categories">
                 <a href="Daily essentials.html"><img src="images/g2.jpg" class ="item-image </a>
				 img src= " images/g2.jpg "class ="item-image"/>
                <div class= "image-title">DAILY ESSENTIALS</div>
             </div>
          </a>
        <a href "#FRUITS AND VEGETABLES">
              <div class ="categories">
                   <a href="vegetables.html"><img src="images/fruits.jpg" class ="item-image </a>
                    img src= " images/fruits.jpg "class ="item-image"/>
                  <div class= "image-title">FRUITS AND VEGETABLES</div>
             </div>
          </a>
         <a href "#DAIRY PRODUCTS">
              <div class ="categories">
			   <a href="Dairy Products.html"><img src="images/diary.jpg" class ="item-image </a>
                  <img src= " images/diary.jpg "class ="item-image"/>
                <div class= "image-title">DAIRY PRODUCTS</div>
             </div>
          </a>
         <a href "MEAT">
               <div class ="categories">
                  
                  <a href="Meat.html"><img src="images/meat.jpg" class ="item-image </a>
				  img src= " images/meat.jpg "class ="item-image"/>
                   <div class= "image-title">Meat</div>
             </div>
          </a>

   </div>
 </body>
</html>