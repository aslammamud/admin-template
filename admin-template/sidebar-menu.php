<!--sidebar-menu-->
<div id="sidebar"><a href="index.php" class="visible-phone"><i class="icon icon-home"></i> Menu</a>
  <ul>
    <li class="<?php echo ($page == "homepage" ? "active" : "")?>"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="<?php echo ($page == "add-member" ? "active" : "")?>"><a href="add-member.php"><i class="icon icon-signal"></i> <span>Add Member</span></a> </li>
    <li class="<?php echo ($page == "member-list" ? "active" : "")?>"><a href="member-list.php"><i class="icon icon-inbox"></i> <span>Member List</span></a> </li>
    <li class="<?php echo ($page == "add-deposit" ? "active" : "")?>"><a href="add-deposit.php"><i class="icon icon-th"></i> <span>Add Deposit</span></a></li>
    <li class="<?php echo ($page == "due-payment-list" ? "active" : "")?>"><a href="due-payment-list.php"><i class="icon icon-fullscreen"></i> <span>Due Payment List</span></a></li>
    <li class="<?php echo ($page == "notification" ? "active" : "")?>"><a href="notification.php"><i class="icon-bell"></i> <span>Manage Notification</span></a></li>

    <!-- <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Notification</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li> -->

    <li class="<?php echo ($page == "investment" ? "active" : "")?>"><a href="investment.php"><i class="icon icon-tint"></i> <span>Investment</span></a></li>
    <li class="<?php echo ($page == "financial-state" ? "active" : "")?>"><a href="financial-state.php"><i class="icon icon-pencil"></i> <span>Financial Statement</span></a></li>
    <li class="<?php echo ($page == "accounts" ? "active" : "")?>"><a href="accounts.php"><i class="icon icon-user"></i> <span>Accounts</span></a></li>

    <!-- <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Accounts</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Add Expense</a></li>
        <li><a href="gallery.html">Expense List</a></li>
       
      </ul>
    </li> -->
    
   
   <li> <a href="#logout.php"><i class="fa fa-sign-in"></i> <span>Log Out</span></a> </li>
   <li> <a href="login.php"><i class="fa fa-sign-in"></i> <span>Log In</span></a> </li>
  </ul>
</div>
<!--sidebar-menu-->
