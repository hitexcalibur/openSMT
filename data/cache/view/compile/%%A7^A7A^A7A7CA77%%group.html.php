<?php /* Smarty version 2.6.26, created on 2010-01-01 16:33:02
         compiled from element/group.html */ ?>
<div class="admin-panel-wrap">
    <div class="icon32 icon-options-general">
        <br/>
    </div>
    <?php if ($this->_tpl_vars['groups']): ?>
    <div class="admin-panel-wrap">
        <div class="icon-edit icon32">
            <br/>
        </div>
        <h2>Groups List</h2>
        <form class="posts-filter" action="" method="post">
            <table class="widefat post fixed" cellspacing="0">
                <thead>
                    <tr>
                        <th class="manage-column column-title" style="" scope="col" width="10%">GID</th>
			<th class="manage-column column-author" style="" scope="col">Group</th>
                        <th class="manage-column column-author" style="" scope="col"></th>
                    </tr>
	    	</thead>
		<tbody>
        		<?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gid'] => $this->_tpl_vars['gname']):
?>
			<tr>

				<td><?php echo $this->_tpl_vars['gid']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['gname']; ?>
</td>
				
				<td>
					<input class="button-secondary action doaction" type="submit" name = "<?php echo $this->_tpl_vars['gid']; ?>
" value="Edit" />
	    			</td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
		</tbody>
            </table>

        </form>

    </div>
    <?php else: ?>
    <?php endif; ?>
</div>