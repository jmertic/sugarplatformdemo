<?php /* Smarty version 2.6.11, created on 2012-05-02 22:40:02
         compiled from modules/Connectors/tpls/mapping_properties.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'modules/Connectors/tpls/mapping_properties.tpl', 43, false),)), $this); ?>
<div id="<?php echo $this->_tpl_vars['source_id']; ?>
_add_tables" class="sources_table_div">
<?php $_from = $this->_tpl_vars['display_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module'] => $this->_tpl_vars['data']):
?>

<table border="0">
<tr>
<td colspan="2"><span><font size="3"><?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['module']), $this);?>
</font></span></td></tr>
<tr>
<td width="150px"><b><?php echo $this->_tpl_vars['mod']['LBL_CONNECTOR_FIELDS']; ?>
</b></td>
<td><b><?php echo $this->_tpl_vars['mod']['LBL_MODULE_FIELDS']; ?>
</b></td>
</tr>
</table>

<table border="0" name="<?php echo $this->_tpl_vars['module']; ?>
" id="<?php echo $this->_tpl_vars['module']; ?>
" class="mapping_table">
<tr>
<td colspan="2">
<?php $_from = $this->_tpl_vars['data']['field_keys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_id'] => $this->_tpl_vars['field']):
 if ($this->_tpl_vars['field_id'] != 'id'): ?>
<div id="<?php echo $this->_tpl_vars['source_id']; ?>
:<?php echo $this->_tpl_vars['module']; ?>
:<?php echo $this->_tpl_vars['field']; ?>
_div" style="width:500px; display:block; cursor:pointer">
<table border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="150px">
<?php echo $this->_tpl_vars['field']; ?>

</td>
<td>
<select id="<?php echo $this->_tpl_vars['source_id']; ?>
:<?php echo $this->_tpl_vars['module']; ?>
:<?php echo $this->_tpl_vars['field_id']; ?>
">
<option value="">---</option>
<?php $_from = $this->_tpl_vars['data']['available_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['available_field_id'] => $this->_tpl_vars['available_field']):
?>
<option value="<?php echo $this->_tpl_vars['available_field_id']; ?>
" <?php if ($this->_tpl_vars['data']['field_mapping'][$this->_tpl_vars['field_id']] == $this->_tpl_vars['available_field_id']): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['available_field']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>
</td>
</tr>
</table>
</div>
<?php endif;  endforeach; endif; unset($_from); ?>
</td>
</tr>
</table>

<hr/>
<?php endforeach; endif; unset($_from); ?>
</div>

<?php if ($this->_tpl_vars['empty_mapping']): ?>
<h3><?php echo $this->_tpl_vars['mod']['ERROR_NO_SEARCHDEFS_DEFINED']; ?>
</h3>
<?php endif; ?>
