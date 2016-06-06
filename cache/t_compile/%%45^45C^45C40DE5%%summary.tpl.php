<?php /* Smarty version 2.6.26, created on 2016-05-27 10:54:20
         compiled from author/submission/summary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/submission/summary.tpl', 12, false),array('function', 'url', 'author/submission/summary.tpl', 18, false),array('function', 'icon', 'author/submission/summary.tpl', 19, false),array('modifier', 'assign', 'author/submission/summary.tpl', 18, false),array('modifier', 'escape', 'author/submission/summary.tpl', 19, false),array('modifier', 'strip_unsafe_html', 'author/submission/summary.tpl', 24, false),array('modifier', 'concat', 'author/submission/summary.tpl', 35, false),array('modifier', 'to_array', 'author/submission/summary.tpl', 36, false),array('modifier', 'strip_tags', 'author/submission/summary.tpl', 36, false),)), $this); ?>
<div id="submission">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "paper.submission"), $this);?>
</h3>

<table width="100%" class="data">
	<tr>
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "paper.authors"), $this);?>
</td>
		<td width="80%">
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','redirectUrl' => $this->_tpl_vars['currentUrl'],'to' => $this->_tpl_vars['submission']->getAuthorEmails(),'subject' => $this->_tpl_vars['submission']->getLocalizedTitle(),'paperId' => $this->_tpl_vars['submission']->getPaperId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

			<?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getAuthorString())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

		</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "paper.title"), $this);?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "track.track"), $this);?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getTrackTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.director"), $this);?>
</td>
		<td>
			<?php $this->assign('editAssignments', $this->_tpl_vars['submission']->getEditAssignments()); ?>
			<?php $_from = $this->_tpl_vars['editAssignments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['editAssignment']):
?>
				<?php $this->assign('emailString', ((is_array($_tmp=$this->_tpl_vars['editAssignment']->getDirectorFullName())) ? $this->_run_mod_handler('concat', true, $_tmp, " <", $this->_tpl_vars['editAssignment']->getDirectorEmail(), ">") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, " <", $this->_tpl_vars['editAssignment']->getDirectorEmail(), ">"))); ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','redirectUrl' => $this->_tpl_vars['currentUrl'],'to' => ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('to_array', true, $_tmp) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp)),'subject' => ((is_array($_tmp=$this->_tpl_vars['submission']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)),'paperId' => $this->_tpl_vars['submission']->getPaperId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

				<?php echo ((is_array($_tmp=$this->_tpl_vars['editAssignment']->getDirectorFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

				<br/>
			<?php endforeach; else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.noneAssigned"), $this);?>

			<?php endif; unset($_from); ?>
		</td>
	</tr>
</table>
</div>