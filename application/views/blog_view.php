    <h1><?php echo $title; ?></h1>
    <?php foreach($posts as $post): ?>
    	<h2><?php echo $post ['title']; ?></h2>
        <p><?php echo $post ['content']; ?></p>
        <p><?php echo $post ['categories']; ?></p>
    <?php endforeach; ?>

    <a href="http://phoenix.sheridanc.on.ca/~ccit1581/CCT460/index.php/Admin/">Head Back to The Admin Page | Click Here</a>

  