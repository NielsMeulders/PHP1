<?php
	include_once("classes/Blog.class.php");
	$b = new Blog();

	$posts = $b->getAllBlogPosts();

    if(!empty($_GET))
    {
        $return = $b->getOne($_GET['id']);
    }
	
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog AJAX test v15</title>
	<link rel="stylesheet" href="css/blog.css">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/blog.js"></script>
</head>
<body>
	
	<ul class="blog--list">
		<h2 class="blog--list-title">Articles</h2>
		<?php foreach($posts as $p): ?>
			<a href="blog.php<?PHP echo "?id=" . $p['id']; ?>" data-id="<?php echo $p['id']; ?>">
			<li class="blog--list-title"><?php echo $p['title']; ?></li>
			</a>
		<?php endforeach; ?>
	</ul>

	<article class="blog--article">
		<img src="images/loading.svg" class="blog--loading">
		<h1 class="blog--title"><?PHP if (isset($return)): echo $return['title']; endif; ?></h1>
		<div class="blog--text"><?PHP if (isset($return)): echo $return['blogtext']; endif; ?></div>
	</article>

	<footer>Content used as an example from <a href="http://beta.thenextweb.com/">The Next Web</a></footer>

</body>
</html> 