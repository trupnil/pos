<aside class="left-sidebar">
<ul id="slide-out" class="sidenav">
  <li>
    <div class="user-profile" style="background-image: url({{ asset('frontend/assets/images/user-bg.jpg')  }});">
      <div class="user-name dropdown-trigger" data-target='dropdownuser'>
        <h6 class="white-text name"><i class="material-icons m-r-10">account_circle</i> <span class="hidden">Admin</span> <i class="material-icons ml-auto hidden">expand_more</i></h6>
      </div>
      <ul id='dropdownuser' class='dropdown-content'>
        <li><a href="#"><i class="material-icons">account_circle</i> My Profile</a></li>
        <li><a href="#"><i class="material-icons">account_balance_wallet</i> My Balance</a></li>
        <li><a href="#"><i class="material-icons">inbox</i> Inbox</a></li>
        <li role="separator" class="divider m-t-0"></li>
        <li><a href="#"><i class="material-icons">settings</i> Account Setting</a></li>
        <li role="separator" class="divider m-t-0"></li>
        <li><a href="#"><i class="material-icons">power_settings_new</i> Logout</a></li>
      </ul>
    </div>
  </li>
  <li>
    <ul class="collapsible">
     <li class="small-cap"><span class="hide-menu">Accounts</span></li>
      <li>
       <li>
        <a href="{{ route('dashboard') }}" class=""><i class="material-icons">dashboard</i><span class="hide-menu"> Dashboard</span></a>
        
      </li>

      <li>
        <a href="{{ route('dashboard') }}" class=""><i class="material-icons">dashboard</i><span class="hide-menu"> Users</span></a>
        
      </li>
       <li>
        <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">dashboard</i><span class="hide-menu"> Master</span></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="{{ route('accountgroups.list_account_group') }}"><i class="material-icons">adjust</i><span class="hide-menu">Account Group</span></a></li>


            <li><a href="{{ route('account.list_account') }}"><i class="material-icons">adjust</i><span class="hide-menu">Account</span></a></li>

            <li><a href="{{ route('customergroup.list_account') }}"><i class="material-icons">adjust</i><span class="hide-menu">Customers Group</span></a></li>
            
            <li><a href="{{ route('customer.list_account') }}"><i class="material-icons">adjust</i><span class="hide-menu">Customers</span></a></li>
            <li><a href="{{ route('suppliergroup.list_supplier_group') }}"><i class="material-icons">adjust</i><span class="hide-menu">Supplier Group</span></a></li>
            
            <li><a href="{{ route('supplier.list_supplier') }}"><i class="material-icons">adjust</i><span class="hide-menu">Suppliers</span></a></li>
            
          </ul>
        </div>
      </li>
       <li>
        <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">dashboard</i><span class="hide-menu"> Purchase</span></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="list_account_group.php"><i class="material-icons">adjust</i><span class="hide-menu">Client Enquiries</span></a></li>
            <li><a href="index2.html"><i class="material-icons">adjust</i><span class="hide-menu">Material Requisition</span></a></li>
            <li><a href="index3.html"><i class="material-icons">adjust</i><span class="hide-menu">Purchase Order</span></a></li>
            <li><a href="index4.html"><i class="material-icons">adjust</i><span class="hide-menu">Goods Receipt Note</span></a></li>
            <li><a href="index5.html"><i class="material-icons">adjust</i><span class="hide-menu">Purchase Invoice</span></a></li>
          </ul>
        </div>
      </li>
       <li>
        <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">dashboard</i><span class="hide-menu"> Sales</span></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="list_account_group.php"><i class="material-icons">adjust</i><span class="hide-menu">Client Enquiries</span></a></li>
            <li><a href="index2.html"><i class="material-icons">adjust</i><span class="hide-menu">Quatation</span></a></li>
            <li><a href="index3.html"><i class="material-icons">adjust</i><span class="hide-menu">Sales Order</span></a></li>
            <li><a href="index4.html"><i class="material-icons">adjust</i><span class="hide-menu">Delivery Note</span></a></li>
            <li><a href="index5.html"><i class="material-icons">adjust</i><span class="hide-menu">Sales Invoice</span></a></li>

          </ul>
        </div>
      </li>
      
       <li>
        <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">dashboard</i><span class="hide-menu"> Cash/Bank</span></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="list_account_group.php"><i class="material-icons">adjust</i><span class="hide-menu">Bank Receipt</span></a></li>
            <li><a href="index2.html"><i class="material-icons">adjust</i><span class="hide-menu">Bank Payment</span></a></li>
            <li><a href="index3.html"><i class="material-icons">adjust</i><span class="hide-menu">Bank Reconcile</span></a></li>
            <li><a href="index4.html"><i class="material-icons">adjust</i><span class="hide-menu">Cash Receipt</span></a></li>
            <li><a href="index5.html"><i class="material-icons">adjust</i><span class="hide-menu">Cash Payment</span></a></li>
            <li><a href="index5.html"><i class="material-icons">adjust</i><span class="hide-menu">Journal</span></a></li>
          </ul>
        </div>
      </li>
       <li>
        <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">dashboard</i><span class="hide-menu"> Stock</span></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="list_account_group.php"><i class="material-icons">adjust</i><span class="hide-menu">Opening Stock</span></a></li>
            <li><a href="index2.html"><i class="material-icons">adjust</i><span class="hide-menu">Stock Transfer</span></a></li>
            <li><a href="index3.html"><i class="material-icons">adjust</i><span class="hide-menu">Stock Adjustment</span></a></li>
            <li><a href="index4.html"><i class="material-icons">adjust</i><span class="hide-menu">Physical Stock</span></a></li>
            
          </ul>
        </div>
      </li>
       <li>
        <a href="javascript: void(0);" class=""><i class="material-icons">dashboard</i><span class="hide-menu"> Point of Sale</span></a>
        
      </li>
       <li>
        <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">dashboard</i><span class="hide-menu"> Reports</span></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="list_account_group.php"><i class="material-icons">adjust</i><span class="hide-menu">Account ledger</span></a></li>
            <li><a href="index2.html"><i class="material-icons">adjust</i><span class="hide-menu">Day Book</span></a></li>
            <li><a href="index3.html"><i class="material-icons">adjust</i><span class="hide-menu">Cash Book</span></a></li>
           
          </ul>
        </div>
      </li>

     
     
</ul>
</aside>