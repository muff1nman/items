<!-- File: /app/View/Items/index.ctp -->

<h1>Items DB</h1>
<p><?php echo $this->Html->link('Add Item', array('action' => 'add')); ?></p>
<table>
    <tr>
	<th>Theme</th>
        <th>Id</th>
        <th>Name</th>
		<th>Caption</th>
		<th>Rank</th>
		<th>Trivia</th>
		<th>Filename</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $items array, printing out item info -->

    <?php foreach ($items as $item): ?>
    <tr>
	<td><?php echo $item['Item']['theme']; ?></td>
        <td><?php echo $item['Item']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $item['Item']['name'],
                    array('action' => 'view', $item['Item']['id'])
                );
            ?>
        </td>
		<td><?php echo $item['Item']['caption']; ?></td>
		<td><?php echo $item['Item']['rank']; ?></td>       
        <td><?php echo $item['Item']['trivia']; ?></td>       
        <td><?php echo $item['Item']['filename']; ?></td>        
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $item['Item']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $item['Item']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $item['Item']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
