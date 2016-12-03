<!-- File: /app/View/Items/add.ctp -->

<h1>Add Item</h1>
<?php
echo $this->Form->create('Item');
echo $this->Form->input('name');
echo $this->Form->input('theme');
echo $this->Form->input('rank');
echo $this->Form->input('trivia', array('rows' => '3'));
echo $this->Form->end('Save Item');
?>