<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0,viewport-fit=cover">
    <title>Food Website</title>,
    <link rel="stylesheet" href="/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <!-- desktop view -->
    <div class="container" id="container">
        <div id="menu">
            <div class="title">
                <img src="/images/foodielogo.png" alt="foodie">
            </div>
            <div class="menu-item">
                <a href="#">About</a> <!--TO LINK THE TOP OF THE PAGE-->
                <a href="#">Services</a>
                <a href="#">Your Orders</a>
                <a href="#">Wishlists</a>
                <a href="#">Cart</a>
                <a href="#">Contact</a>
                <a href="#">Checkout</a>
            </div>
        </div>

        <div id="food-container">
            <div id="header">
                <div class="add-box">
                    <i class="fa fa-map-marker your-address" id="add-address"> Your Address</i>
                </div>
                <div class="util">
                    <i class="fa fa-search"> Search</i>
                    <i class="fa fa-tags"> Offers</i>
                    <i class="fa fa-cart-plus" id="cart-plus"> 0 Items</i>
                </div>
            </div>
            <div id="food-items" class="d-food-items">
                <div id="biryani" class="d-biryani">
                    <p id="category-name">Biryani</p>    
                </div>

                <div id="chicken" class="d-chicken">
                    <p id="category-name">Chicken Delicious</p>    
                </div>

                <div id="paneer" class="d-paneer">
                    <p id="category-name">Paneer Mania</p>
                </div>

                <div id="vegetable" class="d-vegetable">
                    <p id="category-name">Pure Veg Dishes</p> 
                </div>

                <div id="chinese" class="d-chinese">
                    <p id="category-name">Chinese Corner</p> 
                </div>

                <div id="south-indian" class="d-south-indian">
                    <p id="category-name">South Indian</p>
                </div>
            </div>

            <div id="cart-page" class="cart-toggle">
                <p id="cart-title">Cart Items</p>
                <p id="m-total-amount">Total Amout : 100</p>
                <table>
                    <thead>
                        <td>Item</td>
                        <td>Name</td>
                        <td>Quantity</td>
                        <td>Price</td>
                    </thead>
                    <tbody id="table-body">
                        
                    </tbody>
                </table>
                <div class="btn-box">
                    <button class="cart-btn">Checkout</button>
                </div>
            </div>
        </div>

        <div id="cart">
            <div class="taste-header">
                <div class="user">
                    <i class="fa fa-user-circle" id="circle"> Account</i>
                    <input type="button"  onclick= " window.location.href = 'C:/Users/Rajvansh/OneDrive/Documents/IWP_PROJECT3/VALIDATE.html';"> ACCOUNT
                </div>
            </div>
            <div id="category-list">
                <p class="item-menu">Go For Hunt</p>
                <div class="border"></div>                
            </div>
            <div id="checkout" class="cart-toggle">
                <p id="total-item">Total Item : 5</p>
                <p id="total-price"></p>
                <p id="delievery">Free delievery on Rs 40</p>
                <button class="cart-btn">Checkout</button>
            </div>
        </div>
    </div>


    <!-- mobile view -->
    <div id="mobile-view" class="mobile-view">
        <div class="mobile-top">
            <div class="logo-box">
                <img src="/images/foodielogo.png" alt="" id="logo">
                <i class="fa fa-map-marker your-address" id="m-add-address"> Your Address</i>
            </div>
            <div class="top-menu">
                <i class="fa fa-search"></i>
                <i class="fa fa-tag"></i>
                <i class="fa fa-heart-o"></i>
                <i class="fa fa-cart-plus" id="m-cart-plus"> 0</i>
            </div>
        </div>
        
        <div class="item-container">
            <div class="category-header" id="category-header">  
            </div>

            <div id="food-items" class="food-items">
                <div id="biryani" class="m-biryani">
                    <p id="category-name">Biryani</p>    
                </div>
                <div id="chicken" class="m-chicken">
                    <p id="category-name">Chicken Delicious</p>    
                </div>
                <div id="paneer" class="m-paneer">
                    <p id="category-name">Paneer Mania</p>
                </div>
                <div id="vegetable" class="m-vegetable">
                    <p id="category-name">Pure Veg Dishes</p> 
                </div>
                <div id="chinese" class="m-chinese">
                    <p id="category-name">Chinese Corner</p> 
                </div>
                <div id="south-indian" class="m-south-indian">
                    <p id="category-name">South Indian</p>
                </div>
            </div>            
        </div>

        <div class="mobile-footer">
            <p>Home</p>
            <p>Cart</p>
            <p>offers</p>
            <p>orders</p>
        </div>
    </div>
    <script src="index.js" type="module"></script>
</body>
</html>
