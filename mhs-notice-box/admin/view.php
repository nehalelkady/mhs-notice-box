<?php ?>

<style>

.mhs-view{
  background: #fff;
  border: 1px solid #c3c4c7;
  padding: 20px;
  width: 60%;
}

/* On screens that are 700px or less, adjust the width */
@media screen and (max-width: 992px) {
  .mhs-view{
    width: 90%;
  }
}

/* General notice box style */
.mhs-box {
  padding: 20px;
  color: white;
}

/* Danger box style */
.mhs-danger {
  background-color: #f1453d;
}

/* Success box style */
.mhs-success {
  background-color: #1ba96f;
}

/* Info box style */
.mhs-info {
  background-color: #2b98f0;
}

/* Warning box style */
.mhs-warning {
  background-color: #fd9727;
}

/* Close button style */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

</style>

<h2>Notice Box Types & Shortcodes</h2>

<p>Click on "X"  to close the notice boxes.</p>

<div class="mhs-view">
  <div class="mhs-box mhs-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>Danger!</strong> Indicates a dangerous or potentially negative action
  </div>
  <h4 style="text-align: center;">[mhsnotice type="danger"] OR [mhsnotice type="danger" text="This text will replace the default"]</h4>

  <br/>

  <div class="mhs-box mhs-success">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>Success!</strong> Indicates a successful or positive action
  </div>
  <h4 style="text-align: center;">[mhsnotice type="success"] OR [mhsnotice type="success" text="This text will replace the default"]</h4>

  <br/>

  <div class="mhs-box mhs-info">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>Info!</strong> Indicates a neutral informative change or action
  </div>
  <h4 style="text-align: center;">[mhsnotice type="info"] OR [mhsnotice type="info" text="This text will replace the default"]</h4>

  <br/>

  <div class="mhs-box mhs-warning">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>Warning!</strong> Indicates a warning that might need attention
  </div>
  <h4 style="text-align: center;">[mhsnotice type="warning"] OR [mhsnotice type="warning" text="This text will replace the default"]</h4>

</div>
