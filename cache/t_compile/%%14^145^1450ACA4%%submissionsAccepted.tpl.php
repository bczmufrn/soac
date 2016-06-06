<?php /* Smarty version 2.6.26, created on 2016-05-27 13:15:11
         compiled from trackDirector/submissionsAccepted.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sort_search', 'trackDirector/submissionsAccepted.tpl', 15, false),array('function', 'url', 'trackDirector/submissionsAccepted.tpl', 38, false),array('function', 'translate', 'trackDirector/submissionsAccepted.tpl', 42, false),array('function', 'page_info', 'trackDirector/submissionsAccepted.tpl', 63, false),array('function', 'page_links', 'trackDirector/submissionsAccepted.tpl', 64, false),array('block', 'iterate', 'trackDirector/submissionsAccepted.tpl', 24, false),array('modifier', 'escape', 'trackDirector/submissionsAccepted.tpl', 26, false),array('modifier', 'truncate', 'trackDirector/submissionsAccepted.tpl', 37, false),array('modifier', 'strip_tags', 'trackDirector/submissionsAccepted.tpl', 38, false),array('modifier', 'default', 'trackDirector/submissionsAccepted.tpl', 38, false),)), $this); ?>
<div id="submissions">
<table width="100%" class="listing">
	<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="3%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "common.id",'sort' => 'id'), $this);?>
</td>
		<td width="4%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "submissions.track",'sort' => 'track'), $this);?>
</td>
		<td width="4%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "paper.sessionType",'sort' => 'sessionType'), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "paper.authors",'sort' => 'authors'), $this);?>
</td>
		<td><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "paper.title",'sort' => 'title'), $this);?>
</td>
		<td width="10%" align="right"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "common.status",'sort' => 'status'), $this);?>
</td>
	</tr>
	<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'submissions','item' => 'submission')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('paperId', $this->_tpl_vars['submission']->getPaperId()); ?>
	<input type="hidden" name="paperIds[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['paperId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<tr valign="top">
		<td><?php echo $this->_tpl_vars['submission']->getPaperId(); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getTrackAbbrev())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td>
			<?php $this->assign('sessionTypeId', $this->_tpl_vars['submission']->getData('sessionType')); ?>
			<?php if ($this->_tpl_vars['sessionTypeId']): ?>
				<?php $this->assign('sessionType', $this->_tpl_vars['sessionTypes'][$this->_tpl_vars['sessionTypeId']]); ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['sessionType']->getLocalizedName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

			<?php endif; ?>
		</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getAuthorString(true))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 40, "...")))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionReview','path' => $this->_tpl_vars['paperId']), $this);?>
" class="action"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, "...") : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 60, "...")))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</a></td>
		<td align="right">
			<?php $this->assign('status', $this->_tpl_vars['submission']->getStatus()); ?>
			<?php if ($this->_tpl_vars['status'] == STATUS_ARCHIVED): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.archived"), $this);?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_PUBLISHED): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.published"), $this);?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_DECLINED): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.declined"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="6" class="<?php if ($this->_tpl_vars['submissions']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['submissions']->wasEmpty()): ?>
	<tr>
		<td colspan="6" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.noSubmissions"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="6" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="4" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['submissions']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'submissions','name' => 'submissions','iterator' => $this->_tpl_vars['submissions'],'searchField' => $this->_tpl_vars['searchField'],'searchMatch' => $this->_tpl_vars['searchMatch'],'search' => $this->_tpl_vars['search'],'track' => $this->_tpl_vars['track'],'sort' => $this->_tpl_vars['sort'],'sortDirection' => $this->_tpl_vars['sortDirection']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>
</div>