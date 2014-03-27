    <h1><?php echo $title; ?></h1>
    <?php foreach($posts as $post): ?>
    	<h3><?php echo $post['title']; ?></h3>
        <p><?php echo $post['content']; ?></p>
        <p><?php echo $post['categories']; ?></p>

        <?php echo form_open('blog/comment/id') ?>
	       <label>Comment:</label><br>
	       <textarea name="comment"></textarea><br>
	       <input type="submit" name="submit" value="Create">
	     </form>

    <?php endforeach; ?>

    <a href="http://phoenix.sheridanc.on.ca/~ccit1581/MVP-CD/index.php/Admin/">Head Back to The Admin Page | Click Here</a>

  