<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('sonique.admin');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container"  id="content">
		<div class="row">
			<div class="span12 header">
			</div>
		</div>
		<div class="row">
			<div class="span12 menu">
				<ul>
					<li>[<a href="<?php echo Router::Url('/')?>">Home</a>]</li>
					<li>[<a href="<?php echo Router::Url('/songs')?>">Songs</a>]</li>
					<li>[<a href="<?php echo Router::Url('/submissions')?>">Submissions</a>]</li>
					<li>[<a href="<?php echo Router::Url('/submissions')?>">Airplays</a>]</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="span10 content">
				<?php echo $this->fetch('content')?>
			</div>
		</div>
		<?php echo $this->element('sql_dump'); ?>
	</div>
</body>
</html>
