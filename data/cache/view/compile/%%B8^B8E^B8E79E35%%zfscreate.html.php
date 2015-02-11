<?php /* Smarty version 2.6.26, created on 2010-01-05 21:16:08
         compiled from element/zfscreate.html */ ?>
<div class="admin-panel-wrap">
    <div class="icon32 icon-options-general">
        <br/>
    </div>
    <h2>zfs create</h2>
    <?php if ($this->_tpl_vars['execMessage']): ?>
    <div id="execMessage" class="updated fade" style="background-color: rgb(255, 251, 204);">
        <?php unset($this->_sections['line']);
$this->_sections['line']['name'] = 'line';
$this->_sections['line']['loop'] = is_array($_loop=$this->_tpl_vars['execMessage']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['line']['show'] = true;
$this->_sections['line']['max'] = $this->_sections['line']['loop'];
$this->_sections['line']['step'] = 1;
$this->_sections['line']['start'] = $this->_sections['line']['step'] > 0 ? 0 : $this->_sections['line']['loop']-1;
if ($this->_sections['line']['show']) {
    $this->_sections['line']['total'] = $this->_sections['line']['loop'];
    if ($this->_sections['line']['total'] == 0)
        $this->_sections['line']['show'] = false;
} else
    $this->_sections['line']['total'] = 0;
if ($this->_sections['line']['show']):

            for ($this->_sections['line']['index'] = $this->_sections['line']['start'], $this->_sections['line']['iteration'] = 1;
                 $this->_sections['line']['iteration'] <= $this->_sections['line']['total'];
                 $this->_sections['line']['index'] += $this->_sections['line']['step'], $this->_sections['line']['iteration']++):
$this->_sections['line']['rownum'] = $this->_sections['line']['iteration'];
$this->_sections['line']['index_prev'] = $this->_sections['line']['index'] - $this->_sections['line']['step'];
$this->_sections['line']['index_next'] = $this->_sections['line']['index'] + $this->_sections['line']['step'];
$this->_sections['line']['first']      = ($this->_sections['line']['iteration'] == 1);
$this->_sections['line']['last']       = ($this->_sections['line']['iteration'] == $this->_sections['line']['total']);
?>
        <p>
            <strong><?php echo $this->_tpl_vars['execMessage'][$this->_sections['line']['index']]; ?>
</strong>
        </p>
        <?php endfor; endif; ?>
    </div>
    <?php else: ?>
    <?php endif; ?>
    <form action="" method="post">
        <table class="form-table">
            <tbody>
                <tr valign="top">
                    <th scope="row">
                        <label>pool name</label>
                    </th>
		    <td>
			    <select name="zpool_name">
				    <?php $_from = $this->_tpl_vars['zfsName']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['zpool']):
?>
				    <option value = "<?php echo $this->_tpl_vars['zpool']; ?>
"><?php echo $this->_tpl_vars['zpool']; ?>
</option>
				    <?php endforeach; endif; unset($_from); ?>
			    </select>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>zfs name</label>
                    </th>
                    <td>
                        <input class="regular-text" type="text" name="zfs_name" id="zfs_name" value=""/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>Create/Destroy</label>
                     </th>
                     <td>
			    <select name="op_type">
				    <option value="create">create</option>
                                    <option value="destroy">destroy</option>
                                    <option value="rename">rename</option>
			    </select>
                      </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>其它选项</label>
                    </th>
                    <td>
                        <fieldset>
                            <legend class="hidden">其它选项</legend>
                            <label title="其它选项1">
                                <input type="radio" checked="checked" value="其它选项1" name="date_format"/> 其它选项1
                            </label>
                            <br/>
                            <label title="其它选项2">
                                <input type="radio" checked="checked" value="其它选项2" name="date_format"/> 其它选项2
                            </label>
                            <br/>
                            <label title="其它选项3">
                                <input type="radio" checked="checked" value="其它选项3" name="date_format"/> 其它选项3
                            </label>
                            <br/>
                            <label title="其它选项4">
                                <input type="radio" checked="checked" value="其它选项4" name="date_format"/> 其它选项4
                            </label>
                            <br/>
                            <label>
                                <input type="radio" value="\c\u\s\t\o\m" name="date_format"/> 自定义参数：
                            </label>
                            <input type="text" class="text" value="" name="ping_custom"/>
                            <p>
                                <a href="http://codex.wordpress.org/Formatting_Date_and_Time">zfs的相关文档</a>
                                。点击访问相关网站
                            </p>
                        </fieldset>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="submit">
            <input class="button-primary" type="submit" value="Do!" name="Submit"/>
        </p>
    </form>
</div>