<?php /* Smarty version 2.6.26, created on 2010-01-05 21:15:59
         compiled from element/samba.html */ ?>
<div class="admin-panel-wrap">
    <div class="icon32 icon-options-general">
        <br/>
    </div>
    <?php if ($this->_tpl_vars['smbshare']): ?>
    <div class="admin-panel-wrap">
        <div class="icon-edit icon32">
            <br/>
        </div>
        <h2>Samba Share List</h2>
        <form class="posts-filter" action="" method="post">
            <table class="widefat post fixed" cellspacing="0">
                <thead>
                    <tr>
                        <th class="manage-column column-title" style="" scope="col" width="30%">Path</th>
			<th class="manage-column column-author" style="" scope="col">Name</th>
                        <th class="manage-column column-author" style="" scope="col">Comment</th>
                        <th class="manage-column column-author" style="" scope="col">Browseable</th>
                        <th class="manage-column column-author" style="" scope="col"></th>
                    </tr>
	    	</thead>
		<tbody>
        		<?php $_from = $this->_tpl_vars['smbshare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sharename'] => $this->_tpl_vars['shareinfo']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['shareinfo'][$this->_tpl_vars['pa']]; ?>
</td>
                                <td><?php echo $this->_tpl_vars['sharename']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['shareinfo'][$this->_tpl_vars['comm']]; ?>
</td>
                                <td><?php echo $this->_tpl_vars['shareinfo'][$this->_tpl_vars['browse']]; ?>
</td>
				<td>
					<input class="button-secondary action doaction" type="submit" name = "<?php echo $this->_tpl_vars['sharename']; ?>
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