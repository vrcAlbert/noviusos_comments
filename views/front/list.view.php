<ul class="comments_list">
<?php
$class = get_class($from_item);
$api = new \Nos\Comments\Api($class);
$api_config = $api->getConfig();

foreach ($comments as $comment) {
    echo render('noviusos_comments::front/item', array('comment' => $comment, 'from_item' => $from_item, 'api_config' => $api_config), true);
}
?>
</ul>
