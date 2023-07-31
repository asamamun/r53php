<?php //ini_set("display_errors",0);  //echo __DIR__; ?>
<?php require __DIR__ . '/vendor/autoload.php'; ?>
<?php
use SimplePie\SimplePie;
$s = new SimplePie();
$s->set_feed_url(["https://prod-qt-images.s3.amazonaws.com/production/prothomalo-bangla/feed.xml","https://samakal.com/rss","http://feeds.bbci.co.uk/news/science_and_environment/rss.xml"]);
$s->init();
// var_dump($s->get_items());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="conteiner">
        <a href="sidebar.php">sidebar example</a>
        <div class="row">
            <div class="col-8">
            <?php
	foreach ($s->get_items() as $item):
?> 
		<div class="item">
			<h2><a target="_blank"  href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
			<p><?php echo $item->get_description(); ?></p>
            <!-- <img width="60px" src="<?php //$item->get_images(); ?>" alt=""> -->
			<p><small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small></p>
		</div> 
	<?php endforeach; ?>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>
