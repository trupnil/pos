@extends('layout.master')
@section('main-content')
<div class="page-wrapper">
<div class="page-titles">
  <div class="d-flex align-items-center">
    <h5 class="font-medium m-b-0">Dashboard</h5>
    <div class="custom-breadcrumb ml-auto">
      <a href="#!" class="breadcrumb">Home</a>
      <a href="#!" class="breadcrumb">Dashboard</a>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <!-- col -->
    <div class="col m6 s12 l3">
      <div class="card">
        <div class="p-15">
          <div class="d-flex no-block align-items-center">
            <div class="m-r-10 blue-text text-accent-4">
              <i class="material-icons display-5">account_balance_wallet</i>
            </div>
            <div>
              <span>Wallet Balance</span>
              <h4 class="font-medium m-b-0">$3,567.53</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- col -->
    <!-- col -->
    <div class="col m6 s12 l3">
      <div class="card">
        <div class="p-15">
          <div class="d-flex no-block align-items-center">
            <div class="m-r-10 light-blue-text">
              <i class="material-icons display-5">stars</i>
            </div>
            <div>
              <span>Referral Earnings</span>
              <h4 class="font-medium m-b-0">$769.08</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- col -->
    <!-- col -->
    <div class="col m6 s12 l3">
      <div class="card">
        <div class="p-15">
          <div class="d-flex no-block align-items-center">
            <div class="m-r-10 orange-text text-darken-2 text-darken-1">
              <i class="material-icons display-5">shopping_basket</i>
            </div>
            <div>
              <span>Estimate Sales</span>
              <h4 class="font-medium m-b-0">5489</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- col -->
    <!-- col -->
    <div class="col m6 s12 l3">
      <div class="card">
        <div class="p-15">
          <div class="d-flex no-block align-items-center">
            <div class="m-r-10 deep-purple-text text-accent-2">
              <i class="material-icons display-5">monetization_on</i>
            </div>
            <div>
              <span>Earnings</span>
              <h4 class="font-medium m-b-0">$23,568.90</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- col -->
  </div>
 
</div>
</div>
@endsection