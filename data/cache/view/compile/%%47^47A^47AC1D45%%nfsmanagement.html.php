<?php /* Smarty version 2.6.26, created on 2010-01-05 20:21:27
         compiled from element/nfsmanagement.html */ ?>
<div class="admin-panel-wrap">
    <div class="icon32 icon-options-general">
        <br/>
    </div>
    <h2>Services | NFS</h2>
    <form action="" method="post">    
        <table class="form-table">
	    <tbody>
		<tr valign = "top">
		    <th scope = "row">
			<label>Network File System</label>
		    </th>
		    <td>
			<input type = checkbox name = "enalbe" checked>
		    </td>		    
		</tr>
 		<tr valign = "top">
		    <th scope = "row">
			<label>Number of servers</label>
		    </th>
		    <td>
			    <input class = 'small-text' type = 'text' name = "number_servers" value = 4><br>
			    Specifies how many servers to create. There should be enough to handle the maximum level of concurrency from its clients, typically four to six.
		    </td>
	    	</tr>
            </tbody>
        </table>
        <p class="submit">
            <input class="button-primary" type="submit" value="Save and Restart" name="Submit"/>
        </p>
    </form>
</div>