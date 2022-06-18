<?php include("includes/header2.php"); ?>

<div class="row">
	<div class="leftcolumn">
    	<div class="card">
	      	<h2>Dashboard</h2>
	      	<p>Name: Man Man</p>
	      	<p>Staff ID: AM0011</p>
	      	<p>Status: Online</p>
	    </div>
	    <div class="card">
	      	<h3>Notifications</h3>
	      	<a href="#" class="inbox">
	        	<span>Inbox</span>
	        	<span class="badge">4</span>
	      	</a><hr>
	      	<a href="#" class="msg">
	        	<span>Booking Update</span>
	        	<span class="badge">4</span>
	      	</a><hr>
	      	<a href="#" class="msg">
	        	<span>New User</span>
	        	<span class="badge">2</span>
	      	</a>
    	</div>
  	</div>
  	<div class="rightcolumn">
  		<div class="card">
      		<h2>Midani Online Store</h2>
      		<p>ORDER LIST</p>
	      	<table>
		        <tr>
		          	<th style="width:50%">Order item</th>
		          	<th>Date</th>
		          	<th>Details</th>
		          	<th>Status</th>
		          	<th>Action</th>
		        </tr>
		        <tr>
		          	<td>Order 103</td>
		          	<td>16/05/2021	</td>
		          	<td><a href="">Click here</a></td>
		          	<td style="color: #1E90FF;"><i class="fa fa-circle"></i> New</td>
		          	<td><select>
		            		<option>Update</option>
		            		<option>Check</option>
		            		<option>Cancel</option>
		          		</select>
		          	</td>
		        </tr>
		        <tr>
		          	<td>Order 066</td>
		          	<td>14/03/2021</td>
		          	<td><a href="">Click here</a></td>
		          	<td style="color: #006400;"><i class="fa fa-truck"></i> Shipped</td>
		          	<td>
		          		<select>
		            		<option>Update</option>
		            		<option>Check</option>
		            		<option>Cancel</option>
		          		</select>
		          	</td>
		        </tr>
		        <tr>
		          	<td>Order 087</td>
		          	<td>23/03/2021</td>
		          	<td><a href="">Click here</a></td>
		          	<td style="color: #FF8C00;"><i class="fa fa-spinner"></i> Pending</td>
		          	<td><select>
		            	<option>Update</option>
		            	<option>Check</option>
		            	<option>Cancel</option>
		          		</select>
		          	</td>
		        </tr>
	        	<tr>
		          	<td>Order 105</td>
		          	<td>22/06/2021</td>
		          	<td><a href="">Click here</a></td>
		          	<td style="color: #B22222;"><i class="fa fa-minus-circle"></i> Cancel</td>
		          	<td><select>
		            	<option>Update</option>
		            	<option>Check</option>
		            	<option>Cancel</option>
		          		</select>
		          	</td>
		        </tr>
	      	</table>
    	</div>
  	</div>
</div>

<div id="popup" style="background: linear-gradient;">
    <div class="popup-content" >
        <h1>Thank you Admin!</h1>
        <p>You have successfully logged out from Midani Dashboard.</p>
        <a href="#" class="close-popup">&times;</a>
        <div class="card">
              <h4>Here is Your updates</h4>
              <p>Report for March until June had been generated recently. Please check your email.</p>
        </div>
    </div>
</div>
