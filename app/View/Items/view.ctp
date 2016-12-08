<!-- File: /app/View/Items/view.ctp -->

<h1><?php echo h($item['Item']['name']); ?></h1>

<p><small>Theme: <?php echo $item['Item']['theme']; ?></small></p>

<p><small>Caption: <?php echo $item['Item']['caption']; ?></small></p>

<p><small>Rank: <?php echo $item['Item']['rank']; ?></small></p>

<p><small><?php echo h($item['Item']['trivia']); ?></small></p>

<p><small><?php echo h($item['Item']['filename']); ?></small></p>