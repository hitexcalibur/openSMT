<?php /* Smarty version 2.6.26, created on 2010-01-05 21:16:07
         compiled from element/zfsinfo.html */ ?>
<div class="admin-panel-wrap">
    <div class="icon32 icon-options-general">
        <br/>
    </div>
    <?php if ($this->_tpl_vars['myArray']): ?>
    <div class="admin-panel-wrap">
        <div class="icon-edit icon32">
            <br/>
        </div>
        <h2>zfs info</h2>
        <form class="posts-filter" action="" method="get">
            <table class="widefat post fixed" cellspacing="0">
                <thead>
                    <tr>
                        <th class="manage-column column-title" style="" scope="col" width="25%">Name</th>
			<th class="manage-column column-author" style="" scope="col">Used</th>
			<th class="manage-column column-author" style="" scope="col">Avail</th>
			<th class="manage-column column-author" style="" scope="col">Refer</th>
			<th class="manage-column column-author" style="" scope="col">Mount Point</th>

                    </tr>
	    	</thead>
		<tbody>
        		<?php $_from = $this->_tpl_vars['myArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
			<tr>
				<?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['col']):
?>
				<td><?php echo $this->_tpl_vars['col']; ?>
</td>
				<?php endforeach; endif; unset($_from); ?>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
		</tbody>
            </table>
        
        </form>

    </div>
    <?php else: ?>
    <?php endif; ?>
</div>