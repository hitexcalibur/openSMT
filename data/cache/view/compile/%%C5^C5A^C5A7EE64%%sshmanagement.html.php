<?php /* Smarty version 2.6.26, created on 2010-01-04 14:47:29
         compiled from element/sshmanagement.html */ ?>
<div class="admin-panel-wrap">
    <div class="icon32 icon-options-general">
        <br/>
    </div>
    <h2>Services|SSH</h2>
    <form action="" method="post">    
        <table class="form-table">
            <tbody>
                <tr valign="top">
                    <th scope="row">
                        <label>Secure Shell</label>
                    </th>
		    <td>
			    <input type = checkbox name = "enable" checked> Enable <p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label>TCP port</label>
                    </th>
		    <td>
			    <input class='small-text' type = "text" name="port" id = "port"  value="22">  	
			    Alternate TCP port. Default is 22
                    </td>
                </tr>
 		<tr valign = "top">
		    <th scope = "row">
			<label>Permit root login</label>
		    </th>
		    <td>
			    <input type = checkbox name = "permit_root_login" checked> Specifies whether it is allowed to login as superuser (root) directly. 
		    </td>
	    	</tr>

 		<tr valign = "top">
		    <th scope = "row">
			<label>Password authentication</label>
		    </th>
		    <td>
			    <input type = checkbox name = "password_authentication" checked>
			    Enable keyboard-interactive authentication.  
		    </td>
	    	</tr>

 		<tr valign = "top">
		    <th scope = "row">
			<label>TCP forwarding</label>
		    </th>
		    <td>
			    <input type = checkbox name = "tcp_forwarding">
			    Permit to do SSH Tunneling. 
		    </td>
	    	</tr>
	    
 		<tr valign = "top">
		    <th scope = "row">
		        <label>Compression</label>
		    </th>
		    <td>
			    <input type = checkbox name = "compression">Enable compression.<br>
			    Compression is worth using if your connection is slow. The efficiency of the compression depends on the type of the file, and varies widely. Useful for internet transfer only.
		    </td>
	    	</tr>
 		<tr valign = "top">
		    <th scope = "row">
			<label>Private Key</label>
		    </th>
		    <td>
			    <textarea name = "Banner"> </textarea><br></br>
			    Paste a DSA PRIVATE KEY in PEM format here.
		    </td>
	    	</tr>

 		<tr valign = "top">
		    <th scope = "row">
			<label>Extra options</label>
		    </th>
		    <td>
			    <textarea name = "Banner"> </textarea><br></br>
			    Extra options to /etc/ssh/sshd_config (usually empty). Note, incorrect entered options prevent SSH service to be started. Please check the documentation.
		    </td>
	    	</tr>
            </tbody>
        </table>
        <p class="submit">
            <input class="button-primary" type="submit" value="Save and Restart" name="Submit"/>
        </p>
    </form>
</div>