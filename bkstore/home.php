<!DOCTYPE html>
<html>
<head>
    <title>Book Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
    <div class="logo-container">
            <a href="#" class="imglogo">
                <img src="book images/logo.jpg" alt="Logo" class="logo-img">
            </a>
            <span class="logo-text">Book Store</span>
        </div>
        <ul class="nav-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="#categories">Categories</a>
                <ul class="dropdown">
                    <li><a href="submenu (1).php">Histories</a></li>
                    <li><a href="submenu (2).php">Love Stories</a></li>
                    <li><a href="submenu (3).php">Poetries</a></li>
                </ul>
            </li>
            <li><a href="fetch_cart.php">Cart</a></li>
            <li><a href="about.html">About Us</a></li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>

    <div class="search-container">
        <input type="text" id="search-bar" placeholder="Search for books...">
    </div>

    <div class="book-list">
        <div class="book" data-title="Database System Concepts">
            <img src="book images/home (1).jpeg">
            <div class="book-info">
                <h3>Database System<br>Concepts</h3>
		<form action="add_to_cart.php" method="POST">
 		    <input type="hidden" name="book_id" value="5">
    		    <input type="hidden" name="book_title" value="Database System Concepts">
		    <input type="hidden" name="image_url" value="book images/home (1).jpeg">
		    <input type="hidden" name="book_name" value="Database System Concepts">
		    <input type="hidden" name="book_pdf_url" value="book pdf/book1.pdf">
		    <button type="submit" class="main_btn">Add to Cart</button><br><br>
 		    <a href="book review/review (1).html" class="but_btn">Learn More</a>
		</form>
            </div>
        </div>

        <div class="book" data-title="Computer Programming in C For Beginners">
            <img src="book images/home (2).jpeg">
            <div class="book-info">
                <h3>programming <br>in C</h3>
                <form action="add_to_cart.php" method="POST">
                    <input type="hidden" name="book_id" value="6">
                    <input type="hidden" name="book_title" value="Computer programming in C For Beginners">
                    <input type="hidden" name="image_url" value="book images/home (2).jpeg">
		    <input type="hidden" name="book_name" value="programming <br>in C">
		    <input type="hidden" name="book_pdf_url" value="book pdf/book1.pdf">
                    <button type="submit" class="main_btn">Add to Cart</button><br><br>
                    <a href="book review/review (2).html" class="but_btn">Learn More</a>
                </form>
            </div>
        </div>

        <div class="book" data-title="Python Programming For Beginners">
            <img src="book images/home (3).jpeg">
            <div class="book-info">
                <h3>Python<br>Programming</h3>
                <form action="add_to_cart.php" method="POST">
                    <input type="hidden" name="book_id" value="7">
                    <input type="hidden" name="book_title" value="Python Programming For Beginners">
                    <input type="hidden" name="image_url" value="book images/home (3).jpeg">
		    <input type="hidden" name="book_name" value="Python<br>Programming">
		    <input type="hidden" name="book_pdf_url" value="book pdf/book1.pdf">
                    <button type="submit" class="main_btn">Add to Cart</button><br><br>
                    <a href="book review/review (3).html" class="but_btn">Learn More</a>
                </form>
            </div>
        </div>

        <div class="book" data-title="Java Programming">
            <img src="book images/home (4).jpeg">
            <div class="book-info">
                <h3>Java<br>Programming</h3>
                <form action="add_to_cart.php" method="POST">
                    <input type="hidden" name="book_id" value="8">
                    <input type="hidden" name="book_title" value="Java Programming">
                    <input type="hidden" name="image_url" value="book images/home (4).jpeg">
		    <input type="hidden" name="book_name" value="Java<br>Programming">
		    <input type="hidden" name="book_pdf_url" value="book pdf/book1.pdf">
                    <button type="submit" class="main_btn">Add to Cart</button><br><br>
                    <a href="book review/review (4).html" class="but_btn">Learn More</a>
                </form>
            </div>
        </div>

        <div class="book" data-title="C++ Programming Language">
            <img src="book images/home (5).jpeg">
            <div class="book-info">
                <h3>C++ Programming<br>Language</h3>
                <form action="add_to_cart.php" method="POST">
                    <input type="hidden" name="book_id" value="9">
                    <input type="hidden" name="book_title" value="C++ Programming Language">
                    <input type="hidden" name="image_url" value="book images/home (5).jpeg">
		    <input type="hidden" name="book_name" value="C++ Programming<br>Language">
		    <input type="hidden" name="book_pdf_url" value="book pdf/book1.pdf">
                    <button type="submit" class="main_btn">Add to Cart</button><br><br>
                    <a href="book review/review (5).html" class="but_btn">Learn More</a>
                </form>
            </div>
        </div>

        <div class="book" data-title="HTML:Hypertext Markup Language">
            <img src="book images/home (6).jpeg">
            <div class="book-info">
                <h3>HTML:Hypertext<br>Markup Language</h3>
                <form action="add_to_cart.php" method="POST">
                    <input type="hidden" name="book_id" value="10">
                    <input type="hidden" name="book_title" value="HTML:Hypertext Markup Language">
                    <input type="hidden" name="image_url" value="book images/home (6).jpeg">
		    <input type="hidden" name="book_name" value="HTML:Hypertext<br>Markup Language">
		    <input type="hidden" name="book_pdf_url" value="book pdf/book1.pdf">
                    <button type="submit" class="main_btn">Add to Cart</button><br><br>
                    <a href="book review/review (6).html" class="but_btn">Learn More</a>
                </form>
            </div>
        </div>

        <div class="book" data-title="Beginning SQL Queries">
            <img src="book images/home (7).jpeg">
            <div class="book-info">
                <h3>Beginning SQL<br>Queries</h3>
                <form action="add_to_cart.php" method="POST">
                    <input type="hidden" name="book_id" value="11">
                    <input type="hidden" name="book_title" value="Beginning SQL Queries">
                    <input type="hidden" name="image_url" value="book images/home (7).jpeg">
		    <input type="hidden" name="book_name" value="Beginning SQL<br>Queries">
		    <input type="hidden" name="book_pdf_url" value="book pdf/book1.pdf">
                    <button type="submit" class="main_btn">Add to Cart</button><br><br>
                    <a href="book review/review (7).html" class="but_btn">Learn More</a>
                </form>
            </div>
        </div>

        <div class="book" data-title="The Complete Reference PHP">
            <img src="book images/home (8).jpeg">
            <div class="book-info">
                <h3>The Complete<br>Reference PHP</h3>
                <form action="add_to_cart.php" method="POST">
                    <input type="hidden" name="book_id" value="12">
                    <input type="hidden" name="book_title" value="The Complete Reference PHP">
                    <input type="hidden" name="image_url" value="book images/home (8).jpeg">
		    <input type="hidden" name="book_name" value="The Complete<br>Reference PHP">
		    <input type="hidden" name="book_pdf_url" value="book pdf/book1.pdf">
                    <button type="submit" class="main_btn">Add to Cart</button><br><br>
                    <a href="book review/review (8).html" class="but_btn">Learn More</a>
                </form>
            </div>
        </div>

        <div class="book" data-title="JavaScript:<br>Third Edition">
            <img src="book images/home (9).jpeg">
            <div class="book-info">
                <h3>JavaScript<br>Third Edition</h3>
                <form action="add_to_cart.php" method="POST">
                    <input type="hidden" name="book_id" value="13">
                    <input type="hidden" name="book_title" value="JavaScript Third Edition">
                    <input type="hidden" name="image_url" value="book images/home (9).jpeg">
		    <input type="hidden" name="book_name" value="JavaScript<br>Third Edition">
		    <input type="hidden" name="book_pdf_url" value="book pdf/book1.pdf">
                    <button type="submit" class="main_btn">Add to Cart</button><br><br>
                    <a href="book review/review (9).html" class="but_btn">Learn More</a>
                </form>
            </div>
        </div>

        <div class="book" data-title="Introduction To Computer Data Representation">
            <img src="book images/home (10).jpeg">
            <div class="book-info">
                <h3>Computer Data<br>Representation</h3>
                <form action="add_to_cart.php" method="POST">
                    <input type="hidden" name="book_id" value="14">
                    <input type="hidden" name="book_title" value="Computer Data Representation">
                    <input type="hidden" name="image_url" value="book images/home (10).jpeg">
		    <input type="hidden" name="book_name" value="Computer Data<br>Representation">
		    <input type="hidden" name="book_pdf_url" value="book pdf/book1.pdf">
                    <button type="submit" class="main_btn">Add to Cart</button><br><br>
                    <a href="book review/review (10).html" class="but_btn">Learn More</a>
                </form>
            </div>
        </div>     
    </div>   
    <div class="error-message" style="display: none;">
        <p>No such book found.</p>
    </div>
    <script>
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                const bookId = this.getAttribute('data-id');
                fetch('add_to_cart.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'book_id=' + bookId
                })
                .then(response => response.text())
                .then(data => {
                    alert(data);
                });
            });
        });
    </script>
    <script src="script.js"></script>

    <section class="footer">
        <div class="tag">
            <h2>Our Online Bookstore</h2>     
            <p>The more that you read, the more things you will know.<br>The more that you learn, the more places you’ll go.</p>
        </div>

        <div class="tag">
            <h1>Quick Link</h1>
            <a href="home.php">Home</a>
            <a href="submenu (1).php">Histories</a>
            <a href="submenu (2).php">Love stories</a>
            <a href="submenu (3).php">Poetries</a>
            <a href="fetch_cart.php">Cart</a>
            <a href="about.html">About</a>
        </div>

        <div class="tag">
        <ul>
            <h1>Contact Us</h1>
            <li>Email: info@yourbookstore.com</li>
            <li>Phone: +123-456-7890</li>
            <li>Address: 123 Bookstore Street, City, Country</li>
        </ul>
        </div>

        <div class="tag">
        <ul>
            <h1>Follow Us</h1>
            <li>Instagram</li>
            <li>whatsapp</li>
            <li>Facebook</li>
        </ul>
        </div>            
    </section>
</body>
</html>