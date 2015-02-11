<?php /* Smarty version 2.6.26, created on 2010-01-05 14:07:16
         compiled from element/edituser.html */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<div class="admin-panel-wrap">
    <div class="icon32 icon-options-general">
        <br/>
    </div>
    <h2>Edit User Profile</h2>

    <form action="" method="post">
        <table class="form-table">
            <tbody>
                <tr valign="top">
                    <th scope="row">
                        <label>Username:</label>
                    </th>
                    <td>
                        <input class="regular-text" type="text" readonly="readonly"  name="username" id="username" value="<?php echo $this->_tpl_vars['userEdited'][0]; ?>
"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>User ID:</label>
                    </th>
                    <td>
                        <input class="regular-text" type="text" name="userid" id="userid" value="<?php echo $this->_tpl_vars['userEdited'][1]; ?>
"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>Password:</label>
                    </th>
                    <td>
                        <input class="regular-text" type="password" name="password" id="password" value="apassword"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>Password Confirmation:</label>
                    </th>
                    <td>
                        <input class="regular-text" type="password" name="passwordConfirm" id="passwordConfirm" value="apassword"/>
                    </td>

                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>Primary Group:</label>
                    </th>
                    <td width='78%' class='vtable'>
                        <select class='formselect' name='pGroup' id='pGroup' >
                            <?php $_from = $this->_tpl_vars['groupInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gid'] => $this->_tpl_vars['gname']):
?>
                                <?php if ($this->_tpl_vars['gname'] == $this->_tpl_vars['primaryGroupName']): ?>
                                    <option value="<?php echo $this->_tpl_vars['gid']; ?>
" selected><?php echo $this->_tpl_vars['gname']; ?>
</option>
                                <?php else: ?>
                                    <option value="<?php echo $this->_tpl_vars['gid']; ?>
" ><?php echo $this->_tpl_vars['gname']; ?>
</option>
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>Comment:</label>
                    </th>
                    <td>
                        <input class="regular-text" type="text" name="comment" id="comment" value="<?php echo $this->_tpl_vars['userEdited'][3]; ?>
"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>Home Directory:</label>
                    </th>
                    <td>
                        <input class="regular-text" type="text" name="homedir" id="homedir" value="<?php echo $this->_tpl_vars['userEdited'][4]; ?>
"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>Default Shell:</label>
                    </th>
                    <td>
                        <input class="regular-text" type="text" name="defaultShell" id="defaultShell" value="<?php echo $this->_tpl_vars['userEdited'][5]; ?>
"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="additionalgroup">Select Additional Group:</label>
                    </th>
                    <td width='78%' class='vtable'>
                        <select multiple="multiple"  class='formselect' name='additionalgroup[]' id='additionalgroup' size='10' style="height: 150px">
                            <?php $_from = $this->_tpl_vars['groupInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gid'] => $this->_tpl_vars['gname']):
?>
                                <option value="<?php echo $this->_tpl_vars['gid']; ?>
" ><?php echo $this->_tpl_vars['gname']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
		<br/><span class='vexpl'>Set additional group memberships for this account.<br>Note: Ctrl-click (or command-click on the Mac) to select and deselect groups.</span>
	
                </tr>
                
            </tbody>
        </table>
        <p class="submit">
            <input class="button-primary" type="submit" value="Apply Changes" name="Submit"/>
        </p>
    </form>
</div>