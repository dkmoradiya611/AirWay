<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
    <title>Airway Booking </title>
</head>
<body>
    <nav>
        <div class="nav_logo">Airway</div>
        <ul class="nav_links">
            <li class="link"><a href="#">Home</a></li>
            <li class="link"><a href="#">About</a></li>
            <li class="link"><a href="#">offers</a></li>
            <li class="link"><a href="#">Seats</a></li>  
            <li class="link"><a href="#">Destinations</a></li>
        </ul>
        <button class="btn">Contact</button>
    </nav>
    
    <header class="section_container header_container">
        <h1 class="section_header">Find And Book<br>A Great Exprience</h1>
        <img src="asstes1/header.jpg" alt="header"/>
    </header>
    
    <section class="section_container booking_container">
        <div class="booking_nav">
            <span class="book_category">Economy Class</span>
            <span class="book_category category">Business Class</span>
            <span class="book_category">First Class</span>
        </div>
        <form>
            <div class="form_group">
                <span> <i class="ri-map-pin-line"></i></span>
                <div class="input_content">
                    <div class="input_group">
                        <input type="text" name="location" name="from"/>
                        <label>From</label>
                    </div>
                    <!-- <p>Where are you going?</p> -->
                </div>
            </div>
            
            <div class="form_group">
                <span> <i class="ri-user-3-line"></i></span>
                <div class="input_content">
                    <div class="input_group">
                        <input type="text" name="to"/>
                        <label>To</label>
                    </div>
                    <!-- <p>Add guests</p>    -->
                </div>
            </div>
            
            <div class="form_group">
                <span><i class="ri-calendar-line"></i></span>
                <div class="input_content">
                    <div class="input_group">
                        <input type="date" value="departure" id="departure" name="dpdate"/>
                        <label>Depature</label>
                    </div>
                    <p></p>
                </div>
            </div>
            
            <div class="form_group">
                <span> <i class="ri-map-pin-line"></i></span>
                <div class="input_content">
                    <div class="input_group">
                        <input type="date" value="return" id="return" name="rtdate"/>
                        <label>Return</label>
                    </div>
                    <p>Add date</p>
                </div>
            </div>
            <button class="btn" id="search" data-target="show_flight.php"><i class="ri-search-line"></i></button>
        </form>
    </section>
    
    <section class="section_container plan_container">
        <p class="subheader">TRAVEL SUPPORT</p>
        <h2 class="section_header">Plan your travel with confidence</h2>
        <p class="description">
            Find help  with your bookings and travel plans,and see what to expect 
            along your journey.
        </p>
        <div class="plan_grid">
            <div class="plan_content">
                <span class="number">01</span>
                <h4>Travel Requirements for Dubai</h4>
                <p>
                    Stay informed and prepared for your trip to Dubai with essential
                    travel requirements , ensuring a smooth and hassle-free exprience in 
                    this vibrant and captivating city.
                </p>
                <span class="number">02</span>
                <h4>Multi-risk travel insurance</h4>
                <p>
                    Comprehensive protection for your peace of mind,covering a range of 
                    potential travel risks and unexpexted situations. 
                </p>
                <span class="number">03</span>
                <h4>Travel Requirements by  destinations</h4>
                <p>
                    Stay informed and plan your trip with ease,as we provide up-to-date 
                    information on travel requirements specific to your desired destinations.
                </p>
            </div>
            <div class="plan_image">
                <img src="asstes1/plan1.jpg" alt="plan"/>
                <img src="asstes1/plan2.jpg" alt="plan"/>
                <img src="asstes1/plan3.jpg" alt="plan"/>
            </div>
        </div>
    </section>
    <section   class="memories">
        <div class="section_container memories_container">
            <div class="memories_header">
                <h2 class="section_header">
                    Travel to make memories all around the world
                </h2>
                <button class="view_all">View All</button>
            </div>
            <div class="memories_grid">
                <div class="memories_card">
                    <span><i class="ri-calendar-2-line"></i></span>
                    <h4>Book & relex</h4>
                    <p>
                        With "Book and relex," you can sit back ,unwind,and enjoy the 
                        journey while we take care of everything else.
                    </p>
                </div>
                <div class="memories_card">
                    <span><i class="ri-shield-check-line"></i></span>
                    <h4>Smart checklist</h4>
                    <p>
                        Introducing Smart Checklist with us,the innovative solution
                        revolutionizing the way you travel with our airline
                    </p>
                </div>
                <div class="memories_card">
                    <span><i class="ri-bookmark-2-line"></i></span>
                    <h4>Save more</h4>
                    <p>
                        From discounted ticket prices to exclusive promotions and deals,
                        we prioritize affordility without compromising on quality.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section_container lounge_container">
        <div class="lounge_image">
            <img src="asstes1/lounge.jpg" alt="lounge">
            <img src="asstes1/lounge-3.jpg" alt="lounge">
        </div>
        <div class="lounge_content">
            <h2 class="section_header">Unaccompanined Minor Lounge</h2>
            <div class="lounge_grid">
                <div class="lounge_details">
                    <h4>
                        Experience Tranquility </h4>
                    <p>
                        Serenity Haven offers a tranquil escape,featuring comfortable
                        seating,calming ambiance and attentive serviecs.
                    </p>
                </div>
                <div class="lounge_details">
                    <h4>
                        Elevate Your Experience </h4>
                    <p>
                        Designed for discerning travelers,this exclusive lounge offers
                        premium amenities,assistance and private workspaces.
                    </p>
                </div><div class="lounge_details">
                    <h4>
                      A Welcoming Space</h4>
                    <p>
                        Craeting a family-friendly atmosphere,The Family Zone is the 
                        perfect haven for parents and children.
                    </p>
                </div><div class="lounge_details">
                    <h4>
                      A Culinary Delight </h4>
                    <p>
                        Immerse yourself in a world of flavors,offering international
                        cuisines,gourmet dishes,and carefully curated beverages.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section_container travellers_container">
        <h2 class="section_header">Best travellers of the Month</h2>
        <div class="travellers_grid">
            <div class="travellers_card">
                <img src="asstes1/travel-1.jpg" alt="traveller">
                <div class="travellers_card_content">
                    <img src="asstes1/client1.jpg" alt="client">
                    <h4>Emily johnson</h4>
                    <p>Dubai</p>
                </div>
            </div>
            <div class="travellers_card">
                <img src="asstes1/travel-2.jpg" alt="traveller">
                <div class="travellers_card_content">
                    <img src="asstes1/client2.jpg" alt="client">
                    <h4>David smith</h4>
                    <p>paris</p>
                </div>
            </div><div class="travellers_card">
                <img src="asstes1/travel-3.jpg" alt="traveller">
                <div class="travellers_card_content">
                    <img src="asstes1/client3.jpg" alt="client">
                    <h4>Olivia brown</h4>
                    <p>Singapore</p>
                </div>
                
            </div><div class="travellers_card">
                <img src="asstes1/travel-4.jpg" alt="traveller">
                <div class="travellers_card_content">
                    <img src="asstes1/client4.jpg" alt="client">
                    <h4>Danil Taylor</h4>
                    <p>Malasiya</p>
                </div>
        </div>
</div>
    </section>
    
    <section class="subscribe">
        <div class="section_container subscribe_container">
        <h2 class="section_header">Subscribe newsletter & latest news</h2>
        <form class="subscribe_form">
            <input type="text" placeholder="Enter your Email here"/>
            <button class="btn">Subscribe</button>
        </form>
        </div>
    </section>
    
    <footer class="footer">
        <div class="section_container footer_container">
            <div class="footer_col">
                <h3>Airway</h3>
                <p>
                    Where Excellence Takes Flight. With a strong commitement to customer
                    satisfaction and a passion for air travel ,Airway Airline offers 
                    exceptional serviecs and seamless journeys.
                </p>
                <p>
                    From friendly smiles to state-of-the-art aircraft,we connect the 
                    world, ensuring safe, comfortable, and unforgetble expriences.
                </p>
            </div>
            <div class="footer_col">
                <h4>Information</h4>
                <p>Home</p>
                <p>About</p>
                <p>Offers</p>
                <p>Seats</p>
                <p>Destination</p>
            </div>
            
            <div class="footer_col">
                <h4>CONTACT</h4>
                <p>Support</p>
                <p>Media</p>
                <p>Socials</p>
        </div>
        <div class="section_container footer_bar">
            <p>Copyright @ 2023 Airway Airline. All rights reserved.</p>
            <div class="socials">
                <span><i class="ri-facebook-line"></i></span>
                <span><i class="ri-twitter-x-line"></i></span>
                <span><i class="ri-instagram-line"></i></span>
                <span><i class="ri-youtube-fill"></i></span>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
        $(document).on('click', '.book_category', function(){
            $('.book_category').removeClass('category');
            $(this).addClass('category');
        });
    </script>
    <!-- <script type="text/javascript">
        $(document).ready(function(){
            $('#search').keyup(function(){
                var input=$(this).val();
                alert(input);
            })
        });
    </script>-->
    <script type="text/javascript">
        $('.btn').on('click',function(event){
            event.preventDefault();
            var url=$(this).data('target');
            location.replace(url);
        });
    </script>
</body>
</html>

<!-- <?php
    if(isset($_POST["btn"])){
        $from=$_POST["from"];
        $from=$_POST["to"];
        $from=$_POST["dpdate"];
        $from=$_POST["rtdate"];

        $query="select * from booking";
        $result=mysqli_query($conn,$query);
        echo "<center>";
        echo "<table border='1'>";
        echo "<tr><td>User ID</td><td>UserName</td><td>Email</td><td>Mobile</td><td>Pass</td></tr>";
        while($r=mysqli_fetch_array($result)){
            echo "<tr><td>".$r["from"]."</td><td>".$r["to"]."</td><td>".$r["dpdate"]."</td><td>".$r["rtdate"]."</td><td>".$r["password"]."</td></tr>";
        }
        echo "</center>";
    }
?> -->