<?php /* Smarty version 2.6.26, created on 2010-01-05 20:43:17
         compiled from element/editsamba.html */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<div class="admin-panel-wrap">
    <div class="icon32 icon-options-general">
        <br/>
    </div>
    <h2>Edit/Add Samba Share Directory </h2>

    <form action="" method="post">
        <table class="form-table">
            <tbody>
                <tr valign="top">
                    <th scope="row">
                        <label>Name:</label>
                    </th>
                    <td>
                        <input class="regular-text" type="text" name="name" id="name" value="<?php echo $this->_tpl_vars['sharename']; ?>
"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>Comment:</label>
                    </th>
                    <td>
                        <input class="regular-text" type="text" name="comment" id="comment" value="<?php echo $this->_tpl_vars['smbshare'][$this->_tpl_vars['comment']]; ?>
"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>Path:</label>
                    </th>
                    <td>
                        <input class="regular-text" type="text" name="path" id="path" value="<?php echo $this->_tpl_vars['smbshare'][$this->_tpl_vars['path']]; ?>
"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>Read Only:</label>
                    </th>
		    <td>
                        <?php if ($this->_tpl_vars['smbshare'][$this->_tpl_vars['readonly']] == 'yes'): ?>
			    <input type = "checkbox" name = "readonly" checked> Set Read Only <p>
                        <?php else: ?>
                            <input type = "checkbox" name = "readonly" > Set Read Only <p>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>Browseable:</label>
                    </th>
		    <td>
                        <?php if ($this->_tpl_vars['smbshare'][$this->_tpl_vars['browseable']] == 'yes'): ?>
			    <input type = "checkbox" name = "browseable" checked> Set Browseable <p>
                        <?php else: ?>
                            <input type = "checkbox" name = "browseable" > Set Browseable <p>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>Public:</label>
                    </th>
		    <td>
                        <?php if ($this->_tpl_vars['smbshare'][$this->_tpl_vars['public']] == 'yes'): ?>
			    <input type = "checkbox" name = "public" checked> Set Public <p>
                        <?php else: ?>
                            <input type = "checkbox" name = "public" > Set Public <p>
                        <?php endif; ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="submit">
            <input class="button-primary" type="submit" value="Apply Changes" name="Submit"/>
        </p>
    </form>
</div>