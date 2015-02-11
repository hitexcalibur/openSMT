<?php /* Smarty version 2.6.26, created on 2009-12-30 15:40:51
         compiled from element/editgroup.html */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<div class="admin-panel-wrap">
    <div class="icon32 icon-options-general">
        <br/>
    </div>
    <h2>Edit Group</h2>

    <form action="" method="post">
        <table class="form-table">
            <tbody>
                <tr valign="top">
                    <th scope="row">
                        <label>Name</label>
                    </th>
                    <td>
                        <input class="regular-text" type="text"  name="groupname" id="groupname" value="<?php echo $this->_tpl_vars['gname']; ?>
"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>Group ID:</label>
                    </th>
                    <td>
                        <input class="regular-text" type="text" name="groupid" id="groupid" value="<?php echo $this->_tpl_vars['gid']; ?>
"/>
                    </td>
                </tr>
             <tr valign="top">
                    <th scope="row">
                        <label>Allow Gid Duplicated:</label>
                    </th>
                    <td>
                        <fieldset>
                            <legend class="hidden">Allow Gid Duplicated</legend>
                            <label title="Yes">
                                <input type="radio" value="Yes" name="isdup"/> Yes
                            </label>
                            <br/>
                            <label title="No">
                                <input type="radio" checked="checked" value="No" name="isdup" /> No
                            </label>
                            <br/>
                        </fieldset>
                    </td>
                </tr>


            </tbody>
        </table>
        <input class="regular-text" type="hidden" readonly="" name="originname" id="originname" value="<?php echo $this->_tpl_vars['gname']; ?>
"/>
        <input class="regular-text" type="hidden" readonly="" name="originid" id="originid" value="<?php echo $this->_tpl_vars['gid']; ?>
"/>
        <p class="submit">
            <input class="button-primary" type="submit" value="Apply Changes" name="Submit"/>
        </p>
    </form>
</div>

