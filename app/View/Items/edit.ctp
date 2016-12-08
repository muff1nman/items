<!-- File: /app/View/Items/edit.ctp -->

<h1>Edit Item</h1>
<?php
echo $this->Form->create('Item');
echo $this->Form->input('name');
echo $this->Form->input('theme');
echo $this->Form->input('caption');
echo $this->Form->input('rank');
echo $this->Form->input('trivia', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('filename');
echo $this->Form->end('Save Item');
?>