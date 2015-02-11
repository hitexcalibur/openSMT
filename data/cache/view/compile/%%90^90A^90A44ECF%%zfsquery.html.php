<?php /* Smarty version 2.6.26, created on 2010-01-05 21:16:09
         compiled from element/zfsquery.html */ ?>
<div class="admin-panel-wrap">
    <div class="icon32 icon-options-general">
        <br/>
    </div>
    <h2>zfs query</h2>
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
        <pre>
            <strong><?php echo $this->_tpl_vars['execMessage'][$this->_sections['line']['index']]; ?>
</strong>
        </pre>
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
                                    <option value="">All</option>
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
                        <label>recursive</label>
                    </th>
                    <td>
                        <input type="checkbox" name="recursive" value="1" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>Type</label>
                    </th>
                    <td>
                        <fieldset>
                            <legend class="hidden">Type</legend>
                            <label title="All">
                                <input type="radio" checked="checked" value="all" name="type"/> All
                            </label>
                            <br/>
                            <label title="filesystem">
                                <input type="radio" value="filesystem" name="type"/> filesystem
                            </label>
                            <br/>
                            <label title="volume">
                                <input type="radio" value="volume" name="type"/> volume
                            </label>
                            <br/>
                            <label title="snapshot">
                                <input type="radio" value="snapshot" name="type"/> snapshot
                            </label>
                            <br/>
                        </fieldset>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>Options</label>
                    </th>
                    <td>
                        <fieldset>
                            <label title="all">
                                <input type="checkbox" name="all" value="1" />all
                            </label>
                            <label title="name">
                                <input type="checkbox" checked="checked" name="name" value="1" />name
                            </label>
                            <label title="aclinherit">
                                <input type="checkbox" name="aclinherit" value="1" />aclinherit
                            </label>
                            <label title="aclmode">
                                <input type="checkbox" name="aclmode" value="1" />aclmode
                            </label>
                            <label title="atime">
                                <input type="checkbox" name="atime" value="1" />atime
                            </label>
                            <label title="available">
                                <input type="checkbox" name="available" value="1" />available
                            </label>
                            <label title="checksum">
                                <input type="checkbox" name="checksum" value="1" />checksum
                            </label>
                            <label title="compression">
                                <input type="checkbox" name="compression" value="1" />compression
                            </label>
                            <label title="compressratio">
                                <input type="checkbox" name="compressratio" value="1" />compressratio
                            </label>
                            <label title="creation">
                                <input type="checkbox" name="creation" value="1" />creation
                            </label>
                            <label title="devices">
                                <input type="checkbox" name="devices" value="1" />devices
                            </label>
                            <label title="exec">
                                <input type="checkbox" name="exec" value="1" />exec
                            </label>
                            <label title="mounted">
                                <input type="checkbox" name="mounted" value="1" />mounted
                            </label>
                            <label title="mountpoint">
                                <input type="checkbox" name="mountpoint" value="1" />mountpoint
                            </label>
                            <label title="origin">
                                <input type="checkbox" name="origin" value="1" />origin
                            </label>
                            <label title="quota">
                                <input type="checkbox" name="quota" value="1" />quota
                            </label>
                            <label title="readonly">
                                <input type="checkbox" name="readonly" value="1" />readonly
                            </label>
                            <label title="recordsize">
                                <input type="checkbox" name="recordsize" value="1" />recordsize
                            </label>
                            <label title="referenced">
                                <input type="checkbox" name="referenced" value="1" />referenced
                            </label>
                            <label title="reservation">
                                <input type="checkbox" name="reservation" value="1" />reservation
                            </label>
                            <label title="sharenfs">
                                <input type="checkbox" name="sharenfs" value="1" />sharenfs
                            </label>
                            <label title="setuid">
                                <input type="checkbox" name="setuid" value="1" />setuid
                            </label>
                            <label title="snapdir">
                                <input type="checkbox" name="snapdir" value="1" />snapdir
                            </label>
                            <label title="type">
                                <input type="checkbox" name="type" value="1" />type
                            </label>
                            <label title="used">
                                <input type="checkbox" name="used" value="1" />used
                            </label>
                            <label title="volsize">
                                <input type="checkbox" name="volsize" value="1" />volsize
                            </label>
                            <label title="volblocksize">
                                <input type="checkbox" name="volblocksize" value="1" />volblocksize
                            </label>
                            <label title="zoned">
                                <input type="checkbox" name="zoned" value="1" />zoned
                            </label>
                        </fieldset>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="submit">
            <input class="button-primary" type="submit" value="Query!" name="Submit"/>
        </p>
    </form>
</div>