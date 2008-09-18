<h2><?=$game->getData ('name')?></h2>

<?php $logo = $game->getData ('logo_url'); ?>

<p>
	<?php if (!empty ($logo)) { ?>
		<img class="logo" src="<?=$logo?>" />
	<?php } ?>
	<?=$game->getDescription ('en')?>
</p>

<p class="playnow"><a href="<?=$game->getData ('site_url')?>"><?=$game->getData ('site_url')?></a></p>

<div id="general-information">
	<h3>General Information</h3>
	<table>
		<tr>
			<td class="left">Genre</td>
			<td class="center"><?=$game->getData ('genre', '?')?></td>
		</tr>
		
		<tr>
			<td class="left">Setting</td>
			<td class="center"><?=$game->getData ('setting', '?')?></td>
		</tr>
		
		<tr>
			<td class="left">Effort</td>
			<td class="center"><?=$game->getData ('effort', '?')?></td>
		</tr>
		
		<tr>
			<td class="left">Players</td>
			<td class="center"><?=$game->getData ('players', '?')?></td>
		</tr>
		
		<tr>
			<td class="left">Age Recommendation</td>
			<td class="center"><?=$game->getData ('age_recom', '?')?></td>
		</tr>
		
		<tr>
			<td class="left">Status</td>
			<td class="center"><?=$game->getData ('status', '?')?></td>
		</tr>
		
		<tr>
			<td class="left">Payment</td>
			<td class="center"><?=$game->getData ('payment', '?')?></td>
		</tr>
		
		<tr>
			<td class="left">Timing</td>
			<td class="center"><?=$game->getData ('timing', '?')?></td>
		</tr>
	</table>
</div>

<div id="servers">
	<h3>Game Servers</h3>
	<table>
		<tr>
			<th class="left">Server</th>
			<th class="center">Players</th>
			<th class="center">Status</th>
			<th class="center">Version</th>
		</tr>
		
		<?php $servers = $game->getServers (); ?>
	
		<?php if (count ($servers) > 0) { ?>
			<?php foreach ($servers as $v) { ?>
				<tr>
					<td class="left"><a href="<?=$v['game_url']?>"><?=$v['name']?></a></td>
					<td class="center"><?=$v['players']?></td>
					<td class="center"><?=$v['status']?></td>
					<td class="center"><?=$v['version']?></td>
				</tr>
			<?php } ?>
		<?php } else { ?>
			<tr>
				<td class="center" colspan="4">No information provided.</td>
			</tr>
		<?php } ?>
	</table>
</div>

<?php $screenshots = $game->getScreenshots (); ?>

<?php if (count ($screenshots) > 0) { ?>
	<div id="screenshots">
		<h3>Screenshots</h3>
	
		<table>
			<?php $i = 0; $first = true; ?>
		
			<?php foreach ($screenshots as $v) { ?>
				<?php if ($i % 4 == 0) { if (!$first) { echo '</tr>'; $first = false; } ?><tr><?php }  $i ++; ?>
				<td style="width: 25%;">
					<a href="<?=$v['url']?>" rel="lightbox[screenshots]"><img src="<?=$v['url']?>" style="width: 96%;" title="<?=$v['description']?>" /></a>
				</td>
			<?php } ?>
		
			<?php for ($j = $i; $j < 4; $j ++) { ?>
				<td>&nbsp;</td>
			<?php } ?>
		</table>
	</div>
<?php } ?>
