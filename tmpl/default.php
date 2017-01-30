<?php
/**
 * @copyright
 * @var \Joomla\Registry\Registry $params
 * @var array $module
 */

defined('_JEXEC') or die;
?>

<div id="zaposleni" class="grid-zaposleni uk-grid-width-1-2 uk-grid-width-small-1-4 uk-grid-width-medium-1-4 uk-grid-width-large-1-6 uk-grid-width-xlarge-1-6 uk-grid uk-grid-match uk-grid-collapse uk-text-center" data-uk-grid-match="{target:'> div > .uk-panel', row:true}" data-uk-grid-margin>
	<?php foreach ($zaposleni as $oseba) : ?>
		<div class="uk-panel">
			<div class="uk-text-center uk-panel-teaser uk-overlay uk-overlay-hover">
				<img src="<?php echo JUri::root().$oseba->slika;?>" alt="<?php echo $oseba->ime;?>" width="130" height="130">
				<div class="uk-overlay-panel uk-overlay-fade">
					<h3 class="uk-panel-title"><?php echo $oseba->ime; ?></h3>
					<div class="subtitle"><?php echo $oseba->delovnomesto; ?></div>
				</div>
			</div>
		</div>
    <?php endforeach; ?>
</div>