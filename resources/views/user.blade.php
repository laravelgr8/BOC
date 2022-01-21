
<style>
  .error {
    color: red;
    font-size: 14px;
  }

  input[type=radio] {
    width: 20px;
    height: 20px;
  }
</style>

<!doctype html>
 <html lang="en">
 <head>
  <meta charset="utf-8">
  <meta id="Viewport" name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
  <!-- CSRF Token -->
  <meta name="csrf-token1" content="{{ csrf_token() }}" />
  <title>Print Media</title>
  <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->

  <link href="{{asset('BOC/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('BOC/css/style.css')}}" >
  <link rel="stylesheet" href="{{asset('BOC/css/responsive.css')}}">
  <!-- <link href="{{asset('BOC/css/font-awesome.min.css')}}" rel="stylesheet" /> -->
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('BOC/css/OverlayScrollbars.min.css')}}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('BOC/css/daterangepicker.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('BOC/css/icheck-bootstrap.min.css')}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset('BOC/css/bootstrap-colorpicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('BOC/css/bootstrap-multiselect.css')}}" />
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('BOC/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('BOC/css/select2-bootstrap4.min.css')}}">
  <link href="{{asset('BOC/css/comman-css.css')}}" rel="stylesheet" />
</head>

<body>
  <div id="app" >
        <div class="wrapper d-flex align-items-stretch">
     <!-- Start Sidebar -->
     <nav id="sidebar">
  

  <div class="p-3"> 
    <i class="fa fa-fw fa-align-left"></i> My Menu</p>
        <a  href="#/dashboard"><i class="fa fa-fw fa-home"></i>Dashboard</a>
    <ul class="list-unstyled components mb-5">
            
  


 <li>
        <a href="#Empanelment" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-angle-right" aria-hidden="true"></i> Empanelment</a>
        <ul class="collapse list-unstyled" id="Empanelment">
          <li>
            <a href="#/fresh-empanelment">
              <i class="fa fa-print"></i>
              Add print fresh empanelment
            </a>
          </li>
          
          <li>
            <a href="#/rate-settlement-personal-media"><i class="fa fa-user-plus"></i> Add outdoor personal media</a>
          </li>
          <li>
            <a href="#/rate-settlement-private-media"><i class="fa fa-user-plus"></i> Add outdoor private media</a>
          </li>
          <li>
            <a href="#/sole-right-media"><i class="fa fa-user-plus"></i> Add outdoor soleRight media</a>
          </li>
        </ul>
      </li>

      <li>
          <a href="#aggrement" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-angle-right" aria-hidden="true"></i>Vendor print agreement</a>
          <ul class="collapse list-unstyled" id="aggrement">
            <li>
              <a href="#/file-upload"><i class="fa fa-upload"></i> Agreement of fresh empanelment</a>
            </li>
            <li>
              <a href="#/renewal-agreement-upload"><i class="fa fa-upload"></i> Agreement of renewal</a>
            </li>

          </ul>
      </li>

      <!-- for soleright agreement start-->
      <li>
        <a href="#aggrement1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-angle-right" aria-hidden="true"></i>Outdoor soleright agreement</a>
        <ul class="collapse list-unstyled" id="aggrement1">
          <li>
            <a href="#/soleright-fileupload"><i class="fa fa-upload"></i> Agreement of fresh empanelment</a>
          </li>
          <li>
            <a href="#/soleright-agreement-upload"><i class="fa fa-upload"></i> Agreement of renewal</a>
          </li>

        </ul>
    </li>
      <!-- for soleright agreement end-->

      <li>
        <a href="#renewal" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-angle-right" aria-hidden="true"></i> Renewal </a>
        <ul class="collapse list-unstyled" id="renewal">
          <li>
            <a href="#/print-renewal"> Print</a>
          </li>
          <li>
            <a href="#/vendor-renewal-outdoor-personal"> Personal </a>
          </li>
          <li>
            <a href="#/vendor-rate-offered" class="nav-link"> Rate offered </a>
          </li>
        </ul>
      </li>

      <li>
        <a href="#import" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Import ABC data </a>
        <ul class="collapse list-unstyled" id="import">
          <li>
            <a href="#/import-abc-view" class="nav-link">
              
              ABC data
            </a>
          </li>
        </ul>
      </li>

      <li>
        <a href="#notification" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Notification </a>
        <ul class="collapse list-unstyled" id="notification">
          <li class="nav-item">
            <a href="#/vendor-notifi-empanelment" class="nav-link">
              
              Empanelment
            </a>
          </li>
        </ul>
      </li>
        

        <li>
          <a href="#RO" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Release order</a>
          <ul class="collapse list-unstyled" id="RO">
            <li>
              <a href="#/release-order-list"> List</a>
            </li>
          </ul>
        </li>
         <li>
          <a href="#compliance" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Daily compliance</a>
          <ul class="collapse list-unstyled" id="compliance">
            <li>
              <li>
              <a href="#/dailycompliance/create"><i class="fa fa-angellist" aria-hidden="true"></i> Add</a>
            </li>
            <li>
              <a href="#/dailycompliance"><i class="fa fa-angellist" aria-hidden="true"></i> List</a>
            </li>
            <li>
              <a href="#/dailycompliance/submitted-bill"><i class="fa fa-angellist" aria-hidden="true"></i> Submitted Bill List</a>
            </li>

          </ul>
        </li>

                    </ul>
    <!--<div class="footer">
      Copyright &copy; 2021 All rights reserved  
    </p>
  </div>-->
</div>
</nav>     <!-- Page Content  -->
<div id="content" class="">
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
            
            <a href="#/uploads/op_instruction.pdf" target="_blank" style="margin-left:1%;color:blue;">Instruction for applying for outdoor empanelment </a>
            
            <button class="btn btn-link d-inline-block d-lg-none ml-auto menu_top_header_toggle_button collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-ellipsis-v"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#/dashboard"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li> 
                    <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="fa fa-fw fa-key"></i> Change Password</a>
                                            </li>
                                        <li class="nav-item">
                        <a style="color:#d01010" class="nav-link" href="#/logout"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                    </li>
                                    </ul>
            </div>
        </div>
    </nav>
    <div class="content-inside p-3">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-normal text-primary">Application Form for Rate Settlement of Private Media  </h6>
      @php

      @endphp
    </div>
    
    <div class="card-body">
            <div class="alert alert-success alert-dismissible text-center fade show" id="Final_submi" style="display: none;" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- /.end card-header -->
      <div class="card-body p-0">
        <div class="rrrrrrrr"></div>

        <form action="" method="POST" id="private_media"  enctype="multipart/form-data">
          @csrf
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active show" id="#tab1">Basic Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="#tab2">Outdoor Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="#tab3">Account Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="#tab4">Upload Document</a>
            </li>
          </ul>
          <div class="tab-content p-3">
            <div id="tab1" class="content pt-3 tab-pane active show" role="tabpanel" aria-labelledby="logins-part-trigger">
              <div class="row" id="details_of_owner">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="owner_name">Publication Name / प्रकाशन का नाम<font color="red">*</font></label>
                    <!-- <p> -->
                    <input type="text" name="owner_name" id="owner_name0" placeholder="Enter Publication Name" class="form-control form-control-sm owner_name" value="{{@$owner->Owner_Name ?? ''}}" >
                    <!-- </p> -->
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="email">E-mail ID(Owner) / ई मेल आईडी<font color="red">*</font></label>
                    <!-- <p> -->
                    <input type="email" class="form-control form-control-sm" id="email0" name="email_owner" maxlength="50" placeholder="Enter Email ID" value="{{@$owner->Email_ID ?? ''}}"   >
                    <span id="alert_email0" style="color:red;display: none;"></span>
                    <!-- </p> -->
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="mobile">Mobile No / मोबाइल नंबर<font color="red">*</font></label>
                    <input type="text" class="form-control form-control-sm" id="mobile0" name="mobile_owner" placeholder="Enter Mobile"  maxlength="10" value="{{@$owner->Mobile_No_ ?? ''}}">
                    <span id="alert_mobile0" style="color:red;display: none;"></span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="address">Address / पता<font color="red">*</font></label>
                    <p>
                      <textarea name="address_owner" id="address0" placeholder="Enter Address" rows="2" cols="50" maxlength="120" class="form-control form-control-sm" >{{@$owner->Address_1 ?? ''}}</textarea>
                    </p>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Name">State / राज्य<font color="red">*</font></label>
                    <p>
                      <select id="owner_state_id" name="state_owner" class="form-control form-control-sm call_district" data="district_id0">
                        <option value="">Select State</option>
                        @foreach($states as $state)
                        <option value="{{$state->id}}" {{@$owner->State==$state->id ? 'selected' : ''}} >{{$state->state_name}}</option>
                        @endforeach
                        </select>
                    </p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Name">District / ज़िला<font color="red">*</font></label>
                    <p>
                      <select id="district_id0" name="district_owner" class="form-control form-control-sm" >
                        @if(@$owner->District !='')
                        <option>{{$owner->District}}</option>
                        @else
                        <option value="">Select District</option>
                        @endif
                        
                      </select>
                    </p>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Name">City / नगर<font color="red">*</font></label>
                    <p>
                      <input type="text" name="city" value="{{@$owner->City ?? ''}}" class="form-control form-control-sm" id="city0">
                    </p>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="phone">Phone No / फोन नंबर</label>
                    <input type="text" name="phone" maxlength="14" id="phone0" class="form-control form-control-sm input-imperial" value="{{@$owner->Phone_No_ ?? ''}}" >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="fax">Fax / फैक्स</label>
                    <input type="text" name="fax_no" id="fax0" class="form-control form-control-sm" value="{{@$owner->Fax_No_ ?? ''}}" >
                    <!--  -->
                  </div>
                </div>
              </div>
              <input type="hidden" name="ownerid" id="ownerid" value="">
              

              <div class="row" id="add_row_davp" style="float:right;margin-top:6px;">
                <input type="hidden" name="emailarr[]" id="emailarr" value="">
                
                

                <input type="hidden" name="next_tab_1" id="next_tab_1" value="0">

                <input type="hidden" class="btn btn-primary " id="add_row">
                <input type="hidden" id="count_dist_i" value="0">
              </div>
              
              

            <a class="btn btn-primary pm-next-button" id="tab_1">Next</a> <!-- change sk -->
            </div><!--tab1 close  -->
            <div id="tab2" class="content pt-3 tab-pane" role="tabpanel" aria-labelledby="logins-part-trigger">
              <div class="row col-md-12">
                <h4 class="subheading">Head Office :-</h4>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="address">Address / पता<font color="red">*</font></label>
                    <textarea type="text" name="HO_Address" id="address1" maxlength="120" placeholder="Enter Address" rows="2" class="form-control form-control-sm" >{{@$vendor->HO_Address ?? ''}}</textarea>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="landline_no">Landline No. / लैंडलाइन नंबर<font color="red">*</font></label>
                    <input type="text" name="HO_Landline_No" id="landline_no" placeholder="Enter Landline No." class="form-control form-control-sm" id="landline_head_office" value="{{@$vendor->HO_Landline_No_ ?? ''}}" >
                  </div>
                </div>
              </div>



              
              <div class="row col-md-12">
                <h4 class="subheading">Media Addresss:-</h4>
              </div>
              <div id="media_address">
                @foreach($sole as $key => $media)
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="Name">State / राज्य<font color="red">*</font></label>
                      <p>
                        <select  id="state_id_{{$key}}" name="MA_State[]" class="form-control form-control-sm call_district" data="district_ID{{$key}}">
                          <option value="">Select State</option>
                          @foreach($states as $state)
                          <option value="{{$state->id}}" {{@$media->State==$state->id ? 'selected' : ''}}>{{$state->state_name}}</option>
                          @endforeach
                        </select>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="Name">District / ज़िला<font color="red">*</font></label>
                      <p>
                        <select  id="district_ID{{$key}}" name="MA_District[]" class="form-control form-control-sm">
                          @if($media->District!='')
                          <option>{{$media->District}}</option>
                          @else
                          <option value="">Select District</option>
                          @endif
                          </select>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="Name">City / नगर<font color="red">*</font></label>
                      <p>
                        <input type="text" name="MA_City[]" id="MA_City{{$key}}" class="form-control form-control-sm" placeholder="Enter City" value="{{@$media->City ?? ''}}">
                      </p>
                    </div>
                  </div>
                </div><!--  row close -->
                @endforeach
              </div>

              <div class="row" style="float:right;margin-top: 6px;">
                <input type="hidden" name="media_count" value="{{$key ?? 0}}">
                <a class="btn btn-primary"  id="add_row_media_add">Add</a>
                <input type="hidden" id="count_dist_latitude" value="0">
                <input type="hidden" name="lineno1[]" id="Lineno1" value="">
              </div>
              <div class="row col-md-12">
                <h4 class="subheading">Details Of Outdoor Media Formatted Offered :-</h4>
              </div>
                            
              
              <div id="details_of_work_done">
                @foreach($work as $key => $works)
                <div class="row">
                  <div class="col-md-4"><br>
                    <div class="form-group">
                      <label for="year">Year / वर्ष<font color="red">*</font></label>
                      <p>
                        @php
                        $year=array("1990","1991","1992","1993");
                        @endphp
                        <select name="ODMFO_Year[]" id="Years0" class="form-control form-control-sm ddlYears" >
                          <option value="">Select Year</option>
                          <!-- <option>1990</option>
                          <option>1991</option>
                          <option>1992</option>
                          <option>1993</option> -->
                          @foreach($year as $key => $value)
                          <option value="{{$value}}" {{@$works->Year==$value ? 'selected' : ''}}>{{$value}}</option>
                          @endforeach
                        </select>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="upload_doc_10">Upload Document / दस्तावेज़ अपलोड करें</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <p>
                            <input type="file" name="ODMFO_Upload_Document[]" class="custom-file-doc" data="0" id="upload_doc_0"  accept="application/pdf" style="opacity: 0;">
                          </p>
                          <label class="custom-file-label" for="upload_doc_0" id="choose_file0">Choose file</label>
                          <input type="hidden" name="ODMFO_Upload_Document_[]" value="{{$works->File_Name ?? ''}}">
                        </div>
                                                <div class="input-group-append">
                          <span class="input-group-text" id="upload_file0">Upload</span>
                        </div>
                                              </div>
                      <span id="upload_doc_error0" class="error invalid-feedback"></span>
                    </div>
                  </div>
                </div><!--  row close-->
                @endforeach
              </div>
              
              <div class="row" style="float:right;margin-top: 6px;">
                <input type="hidden" name="count_i" id="count_i" value="0">
                <a class="btn btn-primary " id="add_row_next">Add</a>
              </div>
              <div class="row col-md-12">
                <h4 class="subheading">Details of GST :-</h4>
              </div>
              <div class="row">
                <div class="col-md-4"><br>
                  <div class="form-group">
                    <label for="gst_no">GST No. / जीएसटी संख्या</label>
                    <input type="text" class="form-control form-control-sm" name="GST_No" id="gst_no" placeholder="Enter GST No." value="{{@$vendor->GST_No_ ?? ''}}">
                    <span class="gstvalidationMsg"></span>
                    <span class="validcheck"></span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="tin_tan_vat_no">TIN/TAN/VAT No.(if applicable) / टिन/टैन/वैट संख्या (यदि लागू हो)</label>
                    <input type="text" class="form-control form-control-sm" name="TIN_TAN_VAT_No" id="tin_tan_vat_no" placeholder="Enter TIN/TAN/VAT No.(if applicable)" value="{{@$vendor->TIN_TAN_VAT_No_ ?? ''}}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="tin_tan_vat_no">Any other relevant information / कोई अन्य प्रासंगिक जानकारी</label>
                    <input type="text" class="form-control form-control-sm" name="Other_Relevant_Information" id="tin_tan_vat_no" placeholder="Enter Any other relevant information" value="{{@$vendor->Other_Relevant_Information ?? ''}}">
                  </div>
                </div>
              </div>
                            
              
              <input type="hidden" name="next_tab_2" id="next_tab_2" value="0"> <!-- Change Sk -->
              <a class="btn btn-primary reg-previous-button">Previous</a>
              <!-- Old code comment by sk -->
              
              <a class="btn btn-primary pm-next-button" id="tab_2">Next</a> <!-- change sk -->
            </div> <!-- tab2 close -->
            <div id="tab3" class="content pt-3 tab-pane" role="tabpanel" aria-labelledby="logins-part-trigger">
              
              <div class="row" id="dd_div">
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="dd_no">DD No. / डीडी संख्या<font color="red">*</font></label>
                    <input type="text" class="form-control form-control-sm" name="DD_No" id="dd_no" placeholder="Enter DD No."  value="{{@$vendor->DD_No_ ?? ''}}" maxlength="10">
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="bank_name">Bank Name / बैंक का नाम<font color="red">*</font></label>
                    <input type="text" class="form-control form-control-sm" name="DD_Bank_Name" id="bank_name_1" placeholder="Enter Bank Name" value="{{@$vendor->DD_Bank_Name ?? ''}}">
                    <span id="alert_bank_name_1" style="color: red;"></span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="branch_name">Branch Name/ शाखा का नाम<font color="red">*</font></label>
                    <input type="text" class="form-control form-control-sm" name="DD_Bank_Branch_Name" placeholder="Enter Branch Name" maxlength="30" value="{{@$vendor->DD_Bank_Branch_Name ?? ''}}">
                  </div>
                </div>
                
              </div>
              

              <input type="hidden" name="vendorid_tab_3" id="vendorid_tab_3" value="">
              <!-- Old Code comment by sk -->
              
              <input type="hidden" name="next_tab_3" id="next_tab_3" value="0"> <!-- SK Change -->
              <a class="btn btn-primary reg-previous-button">Previous</a>
              <!-- Old Code comment by SK -->
              
              <a class="btn btn-primary pm-next-button" id="tab_3">Next</a> <!-- Change Sk -->
            </div>
            <div id="tab4" class="content pt-3 tab-pane" role="tabpanel" aria-labelledby="information-part-trigger">
              <div class="row">
                @if($vendor->Legal_Doc_File_Name=='')
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Upload document of legal status of company / कंपनी की कानूनी स्थिति का दस्तावेज अपलोड करें<font color="red">*</font></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="Legal_Doc_File_Name" class="custom-file-input" id="Legal_Doc_File_Name" >
                        <label class="custom-file-label" id="Legal_Doc_File_Name2" for="Legal_Doc_File_Name">Choose file</label>
                      </div>
                                            <div class="input-group-append">
                        <span class="input-group-text" id="Legal_Doc_File_Name3">Upload</span>
                      </div>
                                          </div>
                    <span id="Legal_Doc_File_Name1" class="error invalid-feedback"></span>
                  </div>
                </div>
                @else
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Upload document of legal status of company / कंपनी की कानूनी स्थिति का दस्तावेज अपलोड करें<font color="red">*</font></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="Legal_Doc_File_Name_modify" class="custom-file-input" id="Legal_Doc_File_Name" >
                        <label class="custom-file-label" id="Legal_Doc_File_Name2" for="Legal_Doc_File_Name">Choose file</label>
                      </div>
                                            <div class="input-group-append">
                        <span class="input-group-text" id="Legal_Doc_File_Name3">Upload</span>
                      </div>
                                          </div>
                    <span id="Legal_Doc_File_Name1" class="error invalid-feedback"></span>
                  </div>
                </div>
                @endif

                @if($vendor->Photo_File_Name=='')
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Photographs of displayed medium (Separate photo for each property) / प्रदर्शित माध्यम की तस्वीरें (प्रत्येक संपत्ति के लिए अलग फोटो)<font color="red">*</font></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="Photo_File_Name" class="custom-file-input" id="Photo_File_Name" >
                        <label class="custom-file-label" id="Photo_File_Name2" for="exampleInputFile">Choose file</label>
                      </div>
                                            <div class="input-group-append">
                        <span class="input-group-text" id="Photo_File_Name3">Upload</span>
                      </div>
                                          </div>
                    <span id="Photo_File_Name1" class="error invalid-feedback"></span>
                  </div>
                </div>
                @else
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Photographs of displayed medium (Separate photo for each property) / प्रदर्शित माध्यम की तस्वीरें (प्रत्येक संपत्ति के लिए अलग फोटो)<font color="red">*</font></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="Photo_File_Name_modify" class="custom-file-input" id="Photo_File_Name" >
                        <label class="custom-file-label" id="Photo_File_Name2" for="exampleInputFile">Choose file</label>
                      </div>
                                            <div class="input-group-append">
                        <span class="input-group-text" id="Photo_File_Name3">Upload</span>
                      </div>
                                          </div>
                    <span id="Photo_File_Name1" class="error invalid-feedback"></span>
                  </div>
                </div>
                @endif
              </div>
              
              
              <!-- checkbox -->
              <div class="col-md-12">
                <div class="form-group">
                  <div class="icheck-success d-inline">
                    <input type="checkbox" name="self_declaration" id="self_declaration" required  {{$vendor->Self_declaration==1 ? 'checked' : ''}}>
                    <label for="self_declaration">Self declaration / स्वयं घोषित <font color="red">*</font></label>
                  </div>
                </div>
              </div>
                            <input type="hidden" name="vendorid_tab_4" id="vendorid_tab_4" value="">
                            <input type="hidden" name="doc[]" id="doc_data">
              <input type="hidden" name="submit_btn" id="submit_btn" value="0">
              <a class="btn btn-primary reg-previous-button previousClass">Previous</a>               
              <!-- old code comment by sk -->
              
              <a class="btn btn-primary pm-next-button" id="tab_4">Submit</a> <!--  Sk Change -->
              <input type="hidden" name="read_only_form" id="read_only_form" value=""> </div>
            </div>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>
<!-- </div> -->
  
   </div>
      </div>
<script src="{{asset('BOC/js/jquery.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('BOC/js/popper.js')}}"></script>
<script src="{{asset('BOC/js/bootstrap.min.js')}}"></script>
<script src="{{asset('BOC/js/main.js')}}"></script>
<script src="{{asset('BOC/js/jquery.backstretch.min.js')}}"></script>

<script src="{{asset('BOC/js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<!-- InputMask -->
<script src="{{asset('BOC/js/moment.min.js')}}"></script>
<script src="{{asset('BOC/js/jquery.inputmask.min.js')}}"></script>

<!-- bootstrap color picker -->
<script src="{{asset('BOC/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- dropzonejs -->
<!-- InputMask -->
<script src="{{asset('BOC/js/2moment.min.js')}}"></script>
<script src="{{asset('BOC/js/2jquery.inputmask.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('BOC/js/daterangepicker.js')}}"></script>
<!-- Page specific script -->
<script src="{{asset('BOC/js/jquery.validate.min.js')}}"></script>
<!-- validation comman js  -->
<script src="{{asset('BOC/js/validation_comman.js')}}"></script>
<!-- <script src="{{asset('BOC/js/bootstrap3-typeahead.min.js')}}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>



<!--End For ROB -->
</body>
</html>

<script src="{{asset('BOC/js/fress-em-private-media-validation.js')}}"></script>

<script>
  
  

  $(document).ready(function() {
    
  
    $("#details_of_owner").on('click', '.remove_row', function() {
      $(this).parent().parent().remove();
    });
  });


  
  

  



  

  

  
  $(document).on('change', '.owner_name', function() {
    $("#owner_input_clean").val(1);
  });

  function nextSaveData(id) {
    console.log(id);
    ///console.log($("#" + id).val());
    if ($("#" + id).val() == 0) {
      $("#" + id).val(1);
    } else {
      $("#" + id).val(1);
    }
      var data = new FormData($("#private_media")[0]);
  }




//suman 20-Jan
$(document).ready(function(){
  var i=$("#media_count").val();

  // alert(st);
  $("#add_row_media_add").click(function(){
    i++;
    var html='<div class="row" id="row'+i+'"><div class="col-md-4"><div class="form-group"><label for="Name">State1 / राज्य<font color="red">*</font></label><p><select  id="state_id_0" name="MA_State[]" class="form-control form-control-sm call_district" data="district_ID'+i+'"><option value="">Select State1</option><?php foreach($states as $state) { ?> <option value="<?php echo $state->id ?>"><?php echo $state->state_name; ?></option> <?php } ?></select></p></div></div><div class="col-md-4"><div class="form-group"><label for="Name">District / ज़िला<font color="red">*</font></label><p><select  id="district_ID'+i+'" name="MA_District[]" class="form-control form-control-sm"><option value="">Select District</option></select></p></div></div><div class="col-md-4"><div class="form-group"><label for="Name">City / नगर<font color="red">*</font></label><p><input type="text" name="MA_City[]" id="MA_City0" class="form-control form-control-sm" placeholder="Enter City" value=""></p></div></div><div class="col-md-12"><div class="btn btn-danger remove float-right" id="'+i+'">X</div></div></div>';
    $("#media_address").append(html);
  });

  $(document).on("click",'.remove',function(e){
      e.preventDefault();
      var id=$(this).attr('id');
      $("#row"+id).remove();
      $("#media_count").val()-1;
    });


  //get district
  $(document).on("change",".call_district",function(){
    var id=$(this).attr('data'); //when you show data then this id is used
    $("#"+id).empty();
    $.ajax({
      url : '/getDistrict',
      type: 'GET',
      data:{id:$(this).val()},
      success:function(data)
      {
        console.log(data);
        $("#"+id).append(data);
      }
    });
    
  });
});




$(document).ready(function(){
  var i=0;
  $("#add_row_next").click(function(){
    i++;
    $("#details_of_work_done").append('<div class="row" id="row'+i+'"><div class="col-md-4"><br><div class="form-group"><label for="year">Year / वर्ष<font color="red">*</font></label><p><select name="ODMFO_Year[]" id="Years'+i+'" class="form-control form-control-sm ddlYears" ><option value="">Select Year</option><option>1990</option><option>1991</option><option>1992</option><option>1993</option></select></p></div></div><div class="col-md-4"><div class="form-group"><label for="upload_doc_10">Upload Document / दस्तावेज़ अपलोड करें</label><div class="input-group"><div class="custom-file"><p><input type="file" name="ODMFO_Upload_Document[]" class="custom-file-doc" data="0" id="upload_doc_'+i+'"  accept="application/pdf" style="opacity: 0;"></p><label class="custom-file-label" for="upload_doc_0" id="choose_file0">Choose file</label><input type="hidden" name="ODMFO_Upload_Document_[]" value=""></div><div class="input-group-append"><span class="input-group-text" id="upload_file0">Upload</span></div></div><span id="upload_doc_error0" class="error invalid-feedback"></span></div></div><div class="col-md-4"><div class="btn btn-danger delete float-right" id="'+i+'">X</div></div></div>');
  });
  $(document).on("click",'.delete',function(e){
      e.preventDefault();
      var id=$(this).attr('id');
      $("#row"+id).remove();
    });




  $("#owner_state_id").change(function(){
    var owner_state=$("#owner_state_id").val();
  });
});
</script>




