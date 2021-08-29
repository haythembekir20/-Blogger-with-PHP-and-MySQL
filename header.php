
<div class="site-wrap">
		<header class="site-header">
    <!-- header top -->
    <div class="header-top">
        <div class="container">
            <div class="row ">
            <?php
            $date=date("Y/m/d");
            ?>
                <div class="col-md-6">
                    <div class="date-wrap flex">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M18 2.4h1.2c1.985 0 3.6 1.615 3.6 3.6v14.4c0 1.985-1.615 3.6-3.6 3.6H4.8a3.604 3.604 0 01-3.6-3.6V6c0-1.985 1.615-3.6 3.6-3.6H6V1.2C6 .54 6.54 0 7.2 0c.66 0 1.2.54 1.2 1.2v1.2h7.2V1.2c0-.66.54-1.2 1.2-1.2.66 0 1.2.54 1.2 1.2v1.2zM4.8 4.8H6V6c0 .66.54 1.2 1.2 1.2.66 0 1.2-.54 1.2-1.2V4.8h7.2V6c0 .66.54 1.2 1.2 1.2.66 0 1.2-.54 1.2-1.2V4.8h1.2c.661 0 1.2.539 1.2 1.2v4.8H3.6V6c0-.661.539-1.2 1.2-1.2zm0 16.8h14.4c.661 0 1.2-.539 1.2-1.2v-7.2H3.6v7.2c0 .661.539 1.2 1.2 1.2zm2.4-6c-.66 0-1.2.54-1.2 1.2 0 .66.54 1.2 1.2 1.2.66 0 1.2-.54 1.2-1.2 0-.66-.54-1.2-1.2-1.2zm9.6 0H12c-.66 0-1.2.54-1.2 1.2 0 .66.54 1.2 1.2 1.2h4.8c.66 0 1.2-.54 1.2-1.2 0-.66-.54-1.2-1.2-1.2z"/></svg>                        <span id="today"><?php  echo $date ;  ?></span>
                    </div>
                </div>
                <div class="col-md-5">

</div>
                <div class="col-md-1">
          
                <a href="profil.php"> <?php echo  $email;?></a>
                 <!--
                    <ul class="no-style-list social-links">
    <li><a href="https://twitter.com/gbjsolution"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a></li>
    <li><a href="https://www.facebook.com/gbjsolution"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a></li>
    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg></a></li>
    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg></a></li>
</ul> 
-->               </div>
            </div>
        </div>
    </div>
    <!-- header middle -->
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo flex">
                        <a href="#" class="logo-image theme-light-logo"></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="ad-spot ad-wrap-header">
    <div class="ad-container">
        <a href="https://gbjsolution.com/" target="_blank">
            <img src="assets/images/ad-728x90cc76.png?v=63bbb907b5" alt="">
        </a>
    </div>
</div>                </div>
            </div>
        </div>
    </div>
    <!-- header bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="nav-bar flex">
                        <nav class="nav-left">
                            <ul class="nav-list nav-list-primary text-upper no-style-list">
                            <li><a href="home.php" class="nav-current">Home</a></li>
                            <?php echo $admin; ?>
                            <?php echo $jour; ?>
<li><a href="authors.php">Authors</a></li>
<li><a href="health.php">Health</a></li>
<li><a href="travel.php">Travel</a></li>
<li><a href="technology.php">Technology</a></li>
<li><a href="business.php">Business</a></li>
<li><a href="contact.php">Contact</a></li>
<li> <?php echo  $logout;?> </li>


                                <li class="more-link"><a href="javascript:">More<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 18c-.39 0-.78-.132-1.097-.398L.617 9.03a1.713 1.713 0 112.194-2.633l9.208 7.673 9.192-7.397a1.715 1.715 0 012.15 2.671l-10.286 8.277A1.714 1.714 0 0112 18"/></svg></a>
                                <ul class="dropdown"></ul>
                                </li>
                            </ul>
                            
                        </nav>
                        
<?php echo $login; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-nav-wrap" id="mobile-nav">
        <ul class="no-style-list mobile-nav">
            <li><a href="home.php" class="nav-current">Home</a></li>
<li><a href="authors.php">Authors</a></li>
<li><a href="health.php">Health</a></li>
<li><a href="travel.php">Travel</a></li>
<li><a href="technology.php">Technology</a></li>
<li><a href="business.php">Business</a></li>
<li><a href="contact.php">Contact</a></li>
<li> <?php echo  $logout;?> </li>
<?php echo $login; ?>


        </ul>
    </div>
    <div class="backdrop" id="backdrop"></div>
</header>