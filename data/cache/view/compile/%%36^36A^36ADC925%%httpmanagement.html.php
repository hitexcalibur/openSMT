<?php /* Smarty version 2.6.26, created on 2010-01-05 21:59:06
         compiled from element/httpmanagement.html */ ?>
<div class="admin-panel-wrap">
    <div class="icon32 icon-options-general">
        <br/>
    </div>
    <h2>Services|Webserver</h2>
    <form action="" method="post">    
        <table class="form-table">
            <tbody>
                <tr valign="top">
                    <th scope="row">
                        <label>Webserver</label>
                    </th>
		    <td>
			    <input type = checkbox name = "enable"> Enable <p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>Protocol</label>
                    </th>
		    <td>
			<select name = "protocol">
			    <option value = 'HTTP'>HTTP</option>
			    <option value = 'HTTP5'>HTTP5</option>
			</select>
                    </td>
                </tr>
 		<tr valign = "top">
		    <th scope = "row">
			<label>Port</label>
		    </th>
		    <td>
			    <input class = 'small-text' type = 'text' name = "port" value = "">
			    <br></br>
			    TCP port to bind the server to.
		    </td>
	    	</tr>

 		<tr valign = "top">
		    <th scope = "row">
			<label>Document root</label>
		    </th>
		    <td>
			    <input class = 'regular-text' type = 'text' name = "document_root" value = ""><br></br>
		    </td>
	    	</tr>

 		<tr valign = "top">
		    <th scope = "row">
			<label>Authentication</label>
		    </th>a
		    <td>
			    <input type = checkbox name = "authentication"><br></br>
			    Enable authentication.<br></br>
			    Give only local users access to the web page.
		    </td>
	    	</tr>
	    
 		<tr valign = "top">
		    <th scope = "row">
			<label>Directory listing</label>
		    </th>a
		    <td>
			    <input type = checkbox name = "directory_listing"><br></br>
			    Enable directory listing.<br></br>
			    A directory listing is generated if a directory is requested and no index-file (index.php, index.html, index.htm or default.htm) was found in that directory.
		    </td>
	    	</tr>
            </tbody>
        </table>
        <p class="submit">
            <input class="button-primary" type="submit" value="Save and Restart" name="Submit"/>
        </p>
    </form>
</div>