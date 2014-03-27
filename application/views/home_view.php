    <h1><?php echo $title; ?></h1>

    <div class="about"> Hi this is KLarice</div>
    <div class="challenge">Challenge Now (this will be a link)</div>

    <div class="recent_challenges">
    <?php foreach($posts as $post): ?>
    	<h3><?php echo $post ['title']; ?></h3>
        <p><?php echo $post ['content']; ?></p>
        <p><?php echo $post ['categories']; ?></p>
    <?php endforeach; ?>
    </div>

    <a href="http://phoenix.sheridanc.on.ca/~ccit1581/MVP-CD/index.php/Admin/">Head Back to The Admin Page | Click Here</a>

  