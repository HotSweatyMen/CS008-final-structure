<nav>
    <ul>
        <?php
        
        print '<li class ="';
        if ($pathparts['filename'] == 'index') {
            print 'activePage ';
        }
        print '">';
        print '<a href="index.php">Home</a>';
        print '</li>';PHP_EOL;
        
        print '<li class ="';
        if ($pathparts['filename'] == 'AboutUS') {
            print 'activePage ';
        }
        print '">';
        print '<a href="AboutUs.php">About Us</a>';
        print '</li>';PHP_EOL;
        
        print '<li class="';
        if ($pathparts['filename'] == 'join') {
            print 'activePage';
        }
        print '">';
        print '<a href="join.php">Join Us</a>'; 
        print '</li>';PHP_EOL;
        
        print '<li class ="';
        if ($pathparts['filename'] == 'music') {
            print 'activePage ';
        }
        print '">';
        print '<a href="music.php">'
        . 'Music</a>';
        print '</li>';PHP_EOL;
        
        print '<li class ="';
        if ($pathparts['filename'] == 'reviews') {
            print 'activePage ';
        }
        print '">';
        print '<a href="reviews.php">Reviews</a>';
        print '</li>';PHP_EOL;

        print '<li class ="';
        if ($pathparts['filename'] == 'tour') {
            print 'activePage ';
        }
        print '">';
        print '<a href="tour.php">Tour</a>';
        print '</li>';PHP_EOL;
        ?>

    </ul>
</nav>