<?php include("includes/header2.php"); ?>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Dashboard</h2>
      <p>Name: Athirah</p>
      <p>Staff ID: D00012</p>
      <p>Status: Online</p>
    </div>
    <div class="card">
      <h3>Info</h3>
      <a href="#" class="inbox">
        <span>Inbox</span>
        <span class="badge">3</span>
      </a><hr>
      <a href="#" class="msg">
        <span>Approval</span>
        <span class="badge">12</span>
      </a>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>FORM</h2>
      <p>BOOKING 0102</p>
      <p>USER ID: 0921</p>
      <p>Status: <h4 style="color: #FF8C00;">PENDING</h4></p>
      <hr>
      <form action="#">
        <div class="row">
          <div class="col-25" style="padding-top:10px">
            <p>Name of Design Product</p>
          </div>
          <div class="col-75">
            <input type="text" placeholder="Product_design ID">
          </div>
        </div>
        <div class="row">
          <div class="col-25" style="padding-top:10px">
            <p>Comment</p>
          </div>
          <div class="col-75">
            <input type="text">
          </div>
        </div>
        <div class="row">
          <div class="col-25" style="padding-top:10px">
            <p>Colour Picked</p>
          </div>
          <div class="col-75">
            <input type="checkbox"> Blue
            <input type="checkbox"> Red
            <input type="checkbox"> Black
            <input type="checkbox"> Green
            <input type="checkbox"> Purple
            <input type="checkbox"> Pink
          </div>
        </div>
        <div class="row" style="padding-top:10px;">
          <input type="submit" value="Approved" style="color:green;">
          <input type="submit" value="Rejected" style="color:red;">
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
