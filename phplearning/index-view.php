<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }    
    </style>
</head>
<body>

    <header>
        
		<ul>
			
			<?php foreach ($names as $name) : ?>
				
				<li><?= $name ?></li>
			
			<?php endforeach;?>
        
		</ul>

		<ul>
			
			<?php foreach ($person as $feature => $value) :?> 
				
				<li><strong><?= $feature . ': ' ?></strong><?= $value ?></li>
			
			<?php endforeach; ?>
		
		</ul>

		<ul>
			
			<?php foreach ($tasks as $feature => $status) : ?>
				
				<li><strong><?= ucwords($feature) . ': ' ?></strong><?= $status ?></li>
			
			<?php endforeach; ?>
		
		</ul>

		<ul>
			
			<li>
			
				<strong> Completed:</strong> <?= $tasks['completed'] ? 'Complete' : 'Incomplete; ' ?>
			
			</li>
			
			<li>
		
				<strong></strong>
			
			</li>
			
			<li>
				<strong></strong>
			</li>
		</ul>
		
		<?php
		if ($tasks['completed']) {
			echo $feature . ': ' . '&#9989';
		} else {
			echo '<strong>' . $feature . '</strong>' . ': ' . '&#10060';
		}
		?>

		<strong>Completed: </strong>
		<?php if ($tasks['completed']) : ?>
			<span>&#9989</span>
		<?php else : ?>
			<span>Incomplete</span>
		<?php endif; ?>
    
	</header>

</body>
</html>