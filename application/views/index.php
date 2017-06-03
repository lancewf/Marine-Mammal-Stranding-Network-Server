<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html> 

    <?= $this->load->view('header', NULL, TRUE);?>
    <body>
	    <iframe id="__printingFrame" style="width:0;height:0;border:0"></iframe>
        <!-- RECOMMENDED if your web app will not function without JavaScript enabled -->
	    <noscript>
	      <div style="width: 22em; position: absolute; left: 50%; margin-left: -11em; color: red; background-color: white; border: 1px solid red; padding: 4px; font-family: sans-serif">
	        Your web browser must have JavaScript enabled
	        in order for this application to display correctly.
	      </div>
	    </noscript>
	    
     	<table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%"> 
	    	<tr valign="top"> 
      			<td> 
			    	<center>
						<div id="title"> </div>
					</center>
				</td>
			</tr>
			<tr> 
      			<td> 
					    <div id='main' > </div>
				</td>
			</tr>
			<tr valign="bottom"> 
      			<td> 
					<!-- OPTIONAL: include this if you want history support -->
			    	<iframe src="javascript:''" id="__gwt_historyFrame" tabIndex='-1' style="position:absolute;width:0;height:0;border:0"></iframe>
			        <br /><br />
					
                                <?= $this->view('footer', NULL, TRUE);?>
	        	</td>
	        </tr>
        </table>
        <div id="printDiv" style="display: hidden;"> </div>
    </body>
</html>
