
<body>
  	<div class="borrow-book">
        <div class="borrow-2">
                <div class="vector-parent">
                    <img class="group-child" alt="" src="Rectangle 2.svg">
                    
                    <div class="vector-group">
                            <img class="group-item" alt="" src="Rectangle 2.svg">
                            
                            <div class="image-4-wrapper">
                                <img class="image-4-icon" alt="" src="image 4.png">
                                
                            </div>
                            <div class="group-inner">
                            </div>
                            <img class="rectangle-icon" alt="" src="Rectangle 5.svg">
                            
                            <div class="miss-peregrines-home">Miss Peregrine’s Home for Peculiar Children</div>
                            <div class="by-ransom-riggs-container">By
                                <span class="ransom-riggs">Ransom Riggs</span>
                            </div>
                            <div class="currently-being-borrowed">Currently being borrowed</div>
                            <div class="fantasy-fiction-horror-container">
                                <span class="ransom-riggs">Fantasy</span>,
                                <span class="ransom-riggs">Fiction</span>,
                                <span class="ransom-riggs">Horror</span>
                            </div>
                            <div class="a-mysterious-island-container">
                                <p class="a-mysterious-island">A mysterious island. An abandoned orphanage. A strange collection of very curious photographs. It all waits to be discovered in Miss Peregrine's Home for Peculiar Children, an unforgettable novel that mixes fiction and photography in a thrilling reading experience. As our story opens, a horrific family tragedy sets sixteen-year-old Jacob journeying to a remote island off the coast of Wales, where he discovers the crumbling ruins of Miss Peregrine's Home for Peculiar Children. </p>
                            </div>
                            <div class="group-parent">
                                <img class="group-icon" alt="" src="Group 1.svg">
                                
                                <div class="div">3.9/5</div>
                            </div>
                    </div>
                    <div class="button" id="buttonContainer">
                            <div class="button1">Wishlist it</div>
                    </div>
                </div>
                <div class="search">
                    <div class="value">Miss Peregrine’s Home for Peculiar Children</div>
                    <img class="x-icon" alt="" src="X.svg">
                    
                </div>
                <div class="whaddya-wanna-borrow" id="whaddyaWannaBorrow">Whaddya wanna borrow?</div>
                <div class="book-open-parent">
                    <img class="book-open-icon" alt="" src="Book open.svg">
                    
                    <div class="rectangle-div" id="rectangle">
                    </div>
                    <div class="home" id="homeText">Home</div>
                    <div class="genres" id="genresText">Genres</div>
                    <div class="borrow">Borrow</div>
                    <div class="wishlist">Wishlist</div>
                    <img class="user-icon" alt="" src="User.svg">
                    
                    <div class="user">User</div>
                </div>
        </div>
        
        <div id="pickUpOrDeliveryOverlay" class="popup-overlay" style="display:none">
                
                <div class="pick-up-or-delivery-overlay">
                    <img class="pick-up-or-delivery-overlay-child" alt="" src="Rectangle 2.svg">
                    
                    <div class="vector-container">
                            <img class="group-child1" alt="" src="Rectangle 2.svg">
                            
                            <div class="delivery-or-pick-up">Delivery or Pick-up?</div>
                    </div>
                    <div class="rectangle-parent">
                            <div class="group-child2">
                            </div>
                            <div class="delivery">Delivery</div>
                            <img class="home-icon" alt="" src="Home.svg">
                            
                    </div>
                    <div class="rectangle-group">
                            <div class="group-child2">
                            </div>
                            <div class="pick-up">Pick-up</div>
                            <img class="book-icon" alt="" src="Book.svg">
                            
                    </div>
                </div>
                
                
        </div>
  	</div>
  	
  	
  	<script>
    		var buttonContainer = document.getElementById("buttonContainer");
    		if(buttonContainer) {
      			buttonContainer.addEventListener("click", function () {
        				var popup = document.getElementById("pickUpOrDeliveryOverlay");
        				if(!popup) return;
        				var popupStyle = popup.style;
        				if(popupStyle) {
          					popupStyle.display = "flex";
          					popupStyle.zIndex = 100;
          					popupStyle.backgroundColor = "rgba(113, 113, 113, 0.3)";
          					popupStyle.alignItems = "center";
          					popupStyle.justifyContent = "center";
        				}
        				popup.setAttribute("closable", "");
        				
        				var onClick = popup.onClick || function(e) {
          					if(e.target === popup && popup.hasAttribute("closable")) {
            						popupStyle.display = "none";
          					}
        				};
        				popup.addEventListener("click", onClick);
      			});
    		}
    		
    		var whaddyaWannaBorrow = document.getElementById("whaddyaWannaBorrow");
    		if(whaddyaWannaBorrow) {
      			whaddyaWannaBorrow.addEventListener("click", function (e) {
        				// Add your code here
      			});
    		}
    		
    		var rectangle = document.getElementById("rectangle");
    		if(rectangle) {
      			rectangle.addEventListener("click", function (e) {
        				// Add your code here
      			});
    		}
    		
    		var homeText = document.getElementById("homeText");
    		if(homeText) {
      			homeText.addEventListener("click", function (e) {
        				// Add your code here
      			});
    		}
    		
    		var genresText = document.getElementById("genresText");
    		if(genresText) {
      			genresText.addEventListener("click", function (e) {
        				// Add your code here
      			});
    		}
    </script>
</body>