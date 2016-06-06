<?php /* Smarty version 2.6.26, created on 2016-05-18 14:39:49
         compiled from registration/userRegistrationForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'registration/userRegistrationForm.tpl', 16, false),array('function', 'fieldLabel', 'registration/userRegistrationForm.tpl', 25, false),array('function', 'form_language_chooser', 'registration/userRegistrationForm.tpl', 28, false),array('function', 'translate', 'registration/userRegistrationForm.tpl', 29, false),array('function', 'html_options', 'registration/userRegistrationForm.tpl', 240, false),array('function', 'mailto', 'registration/userRegistrationForm.tpl', 275, false),array('modifier', 'escape', 'registration/userRegistrationForm.tpl', 17, false),array('modifier', 'assign', 'registration/userRegistrationForm.tpl', 27, false),array('modifier', 'nl2br', 'registration/userRegistrationForm.tpl', 41, false),array('modifier', 'string_format', 'registration/userRegistrationForm.tpl', 70, false),array('modifier', 'date_format', 'registration/userRegistrationForm.tpl', 71, false),array('modifier', 'strip_unsafe_html', 'registration/userRegistrationForm.tpl', 136, false),array('block', 'iterate', 'registration/userRegistrationForm.tpl', 60, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "schedConf.registration"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<form action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'register'), $this);?>
" name="registration" method="post">
<input type="hidden" name="registrationTypeId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['registrationTypeId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1 && ! $this->_tpl_vars['existingUser']): ?>
<div id="locales">
<table class="data" width="100%">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','key' => "form.formLanguage"), $this);?>
</td>
		<td width="80%" class="value">
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'registration','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'registerUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'registerUrl'));?>

			<?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'registration','url' => $this->_tpl_vars['registerUrl']), $this);?>

			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
		</td>
	</tr>
</table>
</div>
<?php endif; ?>

<?php $this->assign('registrationAdditionalInformation', $this->_tpl_vars['schedConf']->getLocalizedSetting('registrationAdditionalInformation')); ?>
<?php if ($this->_tpl_vars['registrationAdditionalInformation']): ?>
<div id="registrationAdditionalInformation">
	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.registrationPolicies.registrationAdditionalInformation"), $this);?>
</h3>

	<p><?php echo ((is_array($_tmp=$this->_tpl_vars['registrationAdditionalInformation'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
</div>
	<div class="separator"></div>
<?php endif; ?>
<div id="conferenceFees">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registration.conferenceFees"), $this);?>
</h3>

<?php if (! $this->_tpl_vars['registrationOptions']->wasEmpty()): ?>
<table class="listing" width="100%">
	<tr>
		<td colspan="2" class="headseparator">&nbsp;</td>
	</tr>
	<tr valign="top" class="heading">
		<td width="60%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registration.options"), $this);?>
</td>
		<td width="60%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registration.cost"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="headseparator">&nbsp;</td>
	</tr>
	<?php $this->_tag_stack[] = array('iterate', array('from' => 'registrationOptions','item' => 'registrationOption')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('optionId', $this->_tpl_vars['registrationOption']->getOptionId()); ?>
	<?php if ($this->_tpl_vars['registrationOption']->getPublic()): ?>
		<tr valign="top">
			<td class="label">
				<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['registrationOption']->getRegistrationOptionName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</strong>
			</td>
			<td class="data">
				<?php if (strtotime ( $this->_tpl_vars['registrationOption']->getOpeningDate() ) < time ( ) && strtotime ( $this->_tpl_vars['registrationOption']->getClosingDate() ) > time ( )): ?>
					<input id="registrationOption-<?php echo ((is_array($_tmp=$this->_tpl_vars['optionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" type="checkbox" name="registrationOptionId[]" <?php if (in_array ( $this->_tpl_vars['optionId'] , ( array ) $this->_tpl_vars['registrationOptionId'] )): ?>checked="checked" <?php endif; ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['optionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
					<label for="registrationOption-<?php echo ((is_array($_tmp=$this->_tpl_vars['optionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['registrationOptionCosts'][$this->_tpl_vars['optionId']])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['registrationType']->getCurrencyCodeAlpha())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</label>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registration.optionCloses",'closingDate' => ((is_array($_tmp=$this->_tpl_vars['registrationOption']->getClosingDate())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort']))), $this);?>

				<?php elseif (strtotime ( $this->_tpl_vars['registrationOption']->getOpeningDate() ) > time ( )): ?>
					<input type="checkbox" name="registrationOptionId[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['optionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" disabled="disabled" />
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['registrationOptionCosts'][$this->_tpl_vars['optionId']])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['registrationType']->getCurrencyCodeAlpha())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registration.optionFuture",'openingDate' => ((is_array($_tmp=$this->_tpl_vars['registrationOption']->getOpeningDate())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort']))), $this);?>

				<?php else: ?>
					<input type="checkbox" name="registrationOptionId[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['optionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" disabled="disabled" />
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['registrationOptionCosts'][$this->_tpl_vars['optionId']])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['registrationType']->getCurrencyCodeAlpha())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registration.optionClosed",'closingDate' => ((is_array($_tmp=$this->_tpl_vars['registrationOption']->getClosingDate())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort']))), $this);?>

				<?php endif; ?>
			</td>
		</tr>
		<?php if ($this->_tpl_vars['registrationOption']->getRegistrationOptionDescription()): ?>
			<tr valign="top">
				<td colspan="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['registrationOption']->getRegistrationOptionDescription())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
			</tr>
		<?php endif; ?>
		<tr valign="top">
			<td colspan="2">&nbsp;</td>
		</tr>
	<?php endif; ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php if ($this->_tpl_vars['registrationOptions']->wasEmpty()): ?>
		<tr>
			<td colspan="2" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registrationOptions.noneAvailable"), $this);?>
</td>
		</tr>
	<?php endif; ?>
	<tr>
		<td colspan="2" class="endseparator">&nbsp;</td>
	</tr>
</table>
<?php endif; ?>

<p>
	<label for="feeCode"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registration.feeCode"), $this);?>
</label>&nbsp;&nbsp;<input id="feeCode" name="feeCode" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['feeCode'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="textField" /><br />
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registration.feeCode.description"), $this);?>

</p>
</div>
<div class="separator"></div>
<div id="account">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registration.account"), $this);?>
</h3>
<?php if ($this->_tpl_vars['userLoggedIn']): ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'signOut','source' => $this->_tpl_vars['requestUri']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'logoutUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'logoutUrl'));?>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'profile'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'profileUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'profileUrl'));?>

	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registration.loggedInAs",'logoutUrl' => $this->_tpl_vars['logoutUrl'],'profileUrl' => $this->_tpl_vars['profileUrl']), $this);?>
</p>

	<table class="data" width="100%">
		<tr valign="top">
			<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.name"), $this);?>
</td>
			<td width="80%" class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		</tr>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.email"), $this);?>
</td>
			<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getEmail())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		</tr>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.phone"), $this);?>
</td>
			<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getPhone())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		</tr>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.fax"), $this);?>
</td>
			<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFax())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		</tr>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.mailingAddress"), $this);?>
</td>
			<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['user']->getMailingAddress())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
		</tr>
	</table>
<?php else: ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'index','source' => $this->_tpl_vars['requestUri']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'loginUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'loginUrl'));?>

	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registration.createAccount.description",'loginUrl' => $this->_tpl_vars['loginUrl']), $this);?>
</p>

	<table class="data" width="100%">
		<tr valign="top">	
			<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'username','required' => 'true','key' => "user.username"), $this);?>
</td>
			<td width="80%" class="value"><input type="text" name="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" id="username" size="20" maxlength="32" class="textField" /></td>
	</tr>

	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'password','required' => 'true','key' => "user.password"), $this);?>
</td>
		<td class="value"><input type="password" name="password" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" id="password" size="20" maxlength="32" class="textField" /></td>
	</tr>

	<tr valign="top">
		<td></td>
		<td class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.account.passwordLengthRestriction",'length' => $this->_tpl_vars['minPasswordLength']), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'password2','required' => 'true','key' => "user.account.repeatPassword"), $this);?>
</td>
		<td class="value"><input type="password" name="password2" id="password2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="32" class="textField" /></td>
	</tr>

<?php if ($this->_tpl_vars['captchaEnabled']): ?>
		<tr>
			<td class="label" valign="top"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'captcha','required' => 'true','key' => "common.captchaField"), $this);?>
</td>
			<td class="value">
			<img src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'viewCaptcha','path' => $this->_tpl_vars['captchaId']), $this);?>
" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.captchaField.altText"), $this);?>
" /><br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.captchaField.description"), $this);?>
</span><br />
			<input name="captcha" id="captcha" value="" size="20" maxlength="32" class="textField" />
			<input type="hidden" name="captchaId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['captchaId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quoted') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'quoted')); ?>
" />
		</td>
	</tr>
<?php endif; ?>

<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'salutation','key' => "user.salutation"), $this);?>
</td>
	<td class="value"><input type="text" name="salutation" id="salutation" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['salutation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="40" class="textField" /></td>
</tr>

<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'firstName','required' => 'true','key' => "user.firstName"), $this);?>
</td>
	<td class="value"><input type="text" id="firstName" name="firstName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="40" class="textField" /></td>
</tr>
	
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'middleName','key' => "user.middleName"), $this);?>
</td>
	<td class="value"><input type="text" id="middleName" name="middleName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['middleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="40" class="textField" /></td>
</tr>
	
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'lastName','required' => 'true','key' => "user.lastName"), $this);?>
</td>
	<td class="value"><input type="text" id="lastName" name="lastName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="90" class="textField" /></td>
</tr>

<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'initials','key' => "user.initials"), $this);?>
</td>
	<td class="value"><input type="text" id="initials" name="initials" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['initials'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="5" maxlength="5" class="textField" />&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.initialsExample"), $this);?>
</td>
</tr>
	
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'affiliation','key' => "user.affiliation",'required' => 'true'), $this);?>
</td>
	<td class="value"><textarea id="affiliation" name="affiliation" rows="5" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['affiliation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
</tr>

<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'signature','key' => "user.signature"), $this);?>
</td>
	<td class="value"><textarea name="signature[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="signature" rows="5" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['signature'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
</tr>

<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'email','required' => 'true','key' => "user.email"), $this);?>
</td>
	<td class="value"><input type="text" id="email" name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
</tr>

<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userUrl','key' => "user.url"), $this);?>
</td>
	<td class="value"><input type="text" id="userUrl" name="userUrl" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
</tr>
	
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'phone','key' => "user.phone"), $this);?>
</td>
	<td class="value"><input type="text" name="phone" id="phone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['phone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
</tr>
	
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'fax','key' => "user.fax"), $this);?>
</td>
	<td class="value"><input type="text" name="fax" id="fax" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['fax'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
</tr>
	
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'mailingAddress','required' => 'true','key' => "common.mailingAddress"), $this);?>
</td>
	<td class="value"><textarea name="mailingAddress" id="mailingAddress" rows="3" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['mailingAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
</tr>
	
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'country','required' => 'true','key' => "common.country"), $this);?>
</td>
	<td class="value">
		<select name="country" id="country" class="selectMenu">
			<option value=""></option>
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['countries'],'selected' => $this->_tpl_vars['country']), $this);?>

		</select>
	</td>
</tr>

<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'biography','key' => "user.biography"), $this);?>
<br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.biography.description"), $this);?>
</td>
	<td class="value"><textarea name="biography[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="biography" rows="5" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['biography'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
</tr>

</table>

<?php endif; ?></div>
<div class="separator"></div>
<div id="specialRequests">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registration.specialRequests"), $this);?>
</h3>

<p><label for="specialRequests"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registration.specialRequests.description"), $this);?>
</label></p>

<p><textarea name="specialRequests" id="specialRequests" cols="60" rows="10" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['specialRequests'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></p>
</div>
<div class="separator"></div>

<?php if ($this->_tpl_vars['currentSchedConf']->getSetting('registrationName')): ?>
<div id="registrationContact">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.registrationPolicies.registrationContact"), $this);?>
</h3>

<table class="data" width="100%">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.name"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['currentSchedConf']->getSetting('registrationName'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
	</tr>
	<?php if ($this->_tpl_vars['currentSchedConf']->getSetting('registrationEmail')): ?><tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.email"), $this);?>
</td>
		<td class="value"><?php echo smarty_function_mailto(array('address' => ((is_array($_tmp=$this->_tpl_vars['currentSchedConf']->getSetting('registrationEmail'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'encode' => 'hex'), $this);?>
</td>
	</tr><?php endif; ?>
	<?php if ($this->_tpl_vars['currentSchedConf']->getSetting('registrationPhone')): ?><tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.phone"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['currentSchedConf']->getSetting('registrationPhone'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
	</tr><?php endif; ?>
	<?php if ($this->_tpl_vars['currentSchedConf']->getSetting('registrationFax')): ?><tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.fax"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['currentSchedConf']->getSetting('registrationFax'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
	</tr><?php endif; ?>
	<?php if ($this->_tpl_vars['currentSchedConf']->getSetting('registrationMailingAddress')): ?><tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.mailingAddress"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['currentSchedConf']->getSetting('registrationMailingAddress'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
	</tr><?php endif; ?>
</table>
</div>
<div class="separator"></div>
<?php endif; ?>
<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registration.register"), $this);?>
" class="button defaultButton" /></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>