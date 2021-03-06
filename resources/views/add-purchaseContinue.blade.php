@extends('layouts.layout')
@section('extension')
@parent
<link rel="stylesheet" href=@php echo url('css/bootstrap.min.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/bootstrap-responsive.min.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/colorpicker.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/datepicker.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/uniform.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/select2.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/matrix-style.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/matrix-media.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/bootstrap-wysihtml5.css'); @endphp />
<link href=@php echo url('font-awesome/css/font-awesome.css'); @endphp rel="stylesheet" />
<link href=@php echo url('http://fonts.googleapis.com/css?family=Open+Sans:400,700,800'); @endphp rel='stylesheet' type='text/css' />
@endsection

@section('puchase-new')
  class = "active"
@endsection

@section('data')
<div id="content-header">
  <div id="breadcrumb"> <a href=@php echo url('/dashboard'); @endphp title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href=@php echo url('/purchase'); @endphp class="tip-bottom">Purchase</a><a href=@php echo url('/purchase/add-purchaseContinue'); @endphp class="current">Process New Purchase</a></div>
  <h1>Process New Purchase Order</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Necessary Information</h5>
        </div>
        <div class="widget-content nopadding">
          <form action=@php echo url('/purchase/add-purchaseContinue') @endphp method="post" class="form-horizontal">
             <div class="control-group">
              <label class="control-label">User Name:</label>
              <div class="controls">
                <input name="sku" type="text" class="span11" placeholder="Stock Keeping Unit" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email:</label>
              <div class="controls">
                <input name="title" type="text" class="span11" placeholder="Product Title" />
              </div>
            </div>
           

           <div class="control-group">
              <label class="control-label">Phone:</label>
              <div class="controls">
                <input name="title" type="text" class="span11" placeholder="Product Title" />
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">Shipping Address:</label>
              <div class="controls">
                <textarea name="description" class="span11" ></textarea>
                <span class="help-block">Provide a brief description</span>
              </div>
            </div>
            <!-- <div class="form-actions">
              <button type="submit" class="btn btn-success">Continue</button>
            </div> -->
    <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href=@php echo url('/purchase/add-purchaseContinue'); @endphp> <i class=""></i><b><h3>Final</h3></b></a> 

        <button onclick="myFunction()">Confirm</button>

<p id="demo"></p>

<script>
function myFunction() {
    var txt;
    var r = confirm("Are You Confirm About This Purchase Order!");
    if (r == true) {
        txt = "You pressed Yes!";
    } else {
        txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>



        </li>
        <!--
        <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-signal"></i> Delete Item</a> </li>
        <li class="bg_ly"> <a href=@php echo url('/inventory/update-item'); @endphp> <i class="icon-inbox"></i> Update Item </a> </li>
        -->
        <!-- <li class="bg_lo"> <a href=@php echo url('/purchase/add-new-supplier'); @endphp> <i class="icon-th"></i> Add Supplier</a> </li> -->
        <!--
        <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> Listing</a> </li>
        <li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> Forms</a> </li>
        <li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> Buttons</a> </li>
        <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>
        <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>
        <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li> -->
      </ul>
    </div>
  </div>
          </form>
        </div>
      </div>
      <!--
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Elements</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="get" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Select input</label>
              <div class="controls">
                <select >
                  <option>First option</option>
                  <option>Second option</option>
                  <option>Third option</option>
                  <option>Fourth option</option>
                  <option>Fifth option</option>
                  <option>Sixth option</option>
                  <option>Seventh option</option>
                  <option>Eighth option</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Multiple Select input</label>
              <div class="controls">
                <select multiple >
                  <option>First option</option>
                  <option selected>Second option</option>
                  <option>Third option</option>
                  <option>Fourth option</option>
                  <option>Fifth option</option>
                  <option>Sixth option</option>
                  <option>Seventh option</option>
                  <option>Eighth option</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Radio inputs</label>
              <div class="controls">
                <label>
                  <input type="radio" name="radios" />
                  First One</label>
                <label>
                  <input type="radio" name="radios" />
                  Second One</label>
                <label>
                  <input type="radio" name="radios" />
                  Third One</label>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Checkboxes</label>
              <div class="controls">
                <label>
                  <input type="checkbox" name="radios" />
                  First One</label>
                <label>
                  <input type="checkbox" name="radios" />
                  Second One</label>
                <label>
                  <input type="checkbox" name="radios" />
                  Third One</label>
              </div>
            </div>
            <div class="control-group">
              <label for="checkboxes" class="control-label">Data Toggle checkbox</label>
              <div class="controls">
                <div data-toggle="buttons-checkbox" class="btn-group">
                  <button class="btn btn-primary" type="button">Left</button>
                  <button class="btn btn-primary" type="button">Middle</button>
                  <button class="btn btn-primary" type="button">Right</button>
                </div>
              </div>
            </div>
            <div class="control-group">
              <label for="checkboxes" class="control-label">Data Radio button</label>
              <div class="controls">
                <div data-toggle="buttons-radio" class="btn-group">
                  <button class="btn btn-primary" type="button">Left</button>
                  <button class="btn btn-primary" type="button">Middle</button>
                  <button class="btn btn-primary" type="button">Right</button>
                </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">File upload input</label>
              <div class="controls">
                <input type="file" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Disabled Input</label>
              <div class="controls">
                <input type="text" placeholder="You can't type anything…" disabled="" class="span11">
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
      -->
      <!--
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Elements</h5>
        </div>
        <div class="widget-content nopadding">
          <form class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Color picker (hex)</label>
              <div class="controls">
                <input type="text" data-color="#ffffff" value="#ffffff" class="colorpicker input-big span11">
                <span class="help-block">Color picker with Formate of  (hex)</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">Color picker (rgba)</label>
              <div class="controls">
                <input type="text" data-color="rgba(344,232,53,0.5)" value="rgba(344,232,53,0.5)" data-color-format="rgba" class="colorpicker span11">
                <span class="help-block">Color picker with Formate of  (rgba)</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">Date picker (dd-mm)</label>
              <div class="controls">
                <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span11">
                <span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">Date Picker (mm-dd)</label>
              <div class="controls">
                <div  data-date="12-02-2012" class="input-append date datepicker">
                  <input type="text" value="12-02-2012"  data-date-format="mm-dd-yyyy" class="span11" >
                  <span class="add-on"><i class="icon-th"></i></span> </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Color Picker (rgb)</label>
              <div class="controls">
                <div data-color-format="rgb" data-color="rgb(155, 142, 180)" class="input-append color colorpicker colorpicker-rgb">
                  <input type="text" value="rgb(155, 142, 180)" class="span11">
                  <span class="add-on"><i style="background-color: rgb(155, 142, 180)"></i></span> </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Color Picker (hex)</label>
              <div class="controls">
                <div data-color-format="hex" data-color="#000000"  class="input-append color colorpicker">
                  <input type="text" value="#000000" class="span11">
                  <span class="add-on"><i style="background-color: #000000"></i></span> </div>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
              <button type="submit" class="btn btn-primary">Reset</button>
              <button type="submit" class="btn btn-info">Edit</button>
              <button type="submit" class="btn btn-danger">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    -->
    <!--
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Elements</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" class="form-horizontal">
            <div class="control-group">
              <label for="normal" class="control-label">Phone field</label>
              <div class="controls">
                <input type="text" id="mask-phone" class="span8 mask text">
                <span class="help-block blue span8">(999) 999-9999</span> </div>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Phone field + ext.</label>
              <div class="controls">
                <input type="text" id="mask-phoneExt" class="span8 mask text">
                <span class="help-block blue span8">(999) 999-9999? x99999</span> </div>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Phone field + ext.</label>
              <div class="controls">
                <input type="text" id="mask-phoneInt" class="span8 mask text">
                <span class="help-block blue span8">+40 999 999 999</span> </div>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Date field</label>
              <div class="controls">
                <input type="text" id="mask-date" class="span8 mask text">
                <span class="help-block blue span8">99/99/9999</span> </div>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">SSN field</label>
              <div class="controls">
                <input type="text" id="mask-ssn" class="span8 mask text">
                <span class="help-block blue span8">999-99-9999</span> </div>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Product Key</label>
              <div class="controls">
                <input type="text" id="mask-productKey" class="span8 mask text">
                <span class="help-block blue span8">a*-999-a999</span> </div>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Eye Script</label>
              <div class="controls">
                <input type="text" id="mask-eyeScript" class="span8 mask text">
                <span class="help-block blue span8">~9.99 ~9.99 999</span> </div>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Percent</label>
              <div class="controls">
                <input type="text" id="mask-percent" class="span8 mask text">
                <span class="help-block blue span8">99%</span> </div>
            </div>
          </form>
        </div>
      </div>
      -->
      <!--
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Elements</h5>
        </div>
        <div class="widget-content nopadding">
          <form class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Tooltip Input</label>
              <div class="controls">
                <input type="text" placeholder="Hover for tooltip…" data-title="A tooltip for the input" class="span11 tip" data-original-title="">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Type ahead Input</label>
              <div class="controls">
                <input type="text" placeholder="Type here for auto complete…" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Ahmedabad&quot;,&quot;India&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]" class="span11">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Prepended Input</label>
              <div class="controls">
                <div class="input-prepend"> <span class="add-on">#</span>
                  <input type="text" placeholder="prepend" class="span11">
                </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Appended Input</label>
              <div class="controls">
                <div class="input-append">
                  <input type="text" placeholder="5.000" class="span11">
                  <span class="add-on">$</span> </div>
              </div>
            </div>
            <div class="control-group warning">
              <label class="control-label" for="inputWarning">Input with warning</label>
              <div class="controls">
                <input type="text" id="inputWarning" class="span11">
                <span class="help-inline">Something may have gone wrong</span> </div>
            </div>
            <div class="control-group error">
              <label class="control-label" for="inputError">Input with error</label>
              <div class="controls">
                <input type="text" id="inputError" class="span11">
                <span class="help-inline">Please correct the error</span> </div>
            </div>
            <div class="control-group info">
              <label class="control-label" for="inputInfo">Input with info</label>
              <div class="controls">
                <input type="text" id="inputInfo" class="span11">
                <span class="help-inline">Username is already taken</span> </div>
            </div>
            <div class="control-group success">
              <label class="control-label" for="inputSuccess">Input with success</label>
              <div class="controls">
                <input type="text" id="inputSuccess" class="span11">
                <span class="help-inline">Woohoo!</span> </div>
            </div>
          </form>
        </div>
      </div>
      -->
      <!--
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Layout</h5>
        </div>
        <div class="widget-content">
          <div class="controls">
            <input type="text" placeholder=".span12" class="span12 m-wrap">
          </div>
          <div class="controls controls-row">
            <input type="text" placeholder=".span11" class="span11 m-wrap">
            <input type="text" placeholder=".span1" class="span1 m-wrap">
          </div>
          <div class="controls controls-row">
            <input type="text" placeholder=".span10" class="span10 m-wrap">
            <input type="text" placeholder=".span2" class="span2 m-wrap">
          </div>
          <div class="controls controls-row">
            <input type="text" placeholder=".span9" class="span9 m-wrap">
            <input type="text" placeholder=".span3" class="span3 m-wrap">
          </div>
          <div class="controls controls-row">
            <input type="text" placeholder=".span8" class="span8 m-wrap">
            <input type="text" placeholder=".span4" class="span4 m-wrap">
          </div>
          <div class="controls controls-row">
            <input type="text" placeholder=".span7" class="span7 m-wrap">
            <input type="text" placeholder=".span5" class="span5 m-wrap">
          </div>
          <div class="controls controls-row">
            <input type="text" placeholder=".span6" class="span6 m-wrap">
            <input type="text" placeholder=".span6" class="span6 m-wrap">
          </div>
          <div class="controls controls-row">
            <input type="text" placeholder=".span5" class="span5 m-wrap">
            <input type="text" placeholder=".span7" class="span7 m-wrap">
          </div>
         
          <div class="controls controls-row">
            <input type="text" placeholder=".span2" class="span2 m-wrap">
            <input type="text" placeholder=".span3" class="span3 m-wrap">
            <input type="text" placeholder=".span4" class="span4 m-wrap">
            <input type="text" placeholder=".span1" class="span2 m-wrap">
            <input type="text" placeholder=".span1" class="span1 m-wrap">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>wysihtml5</h5>
      </div>
      <div class="widget-content">
        <div class="control-group">
          <form>
            <div class="controls">
              <textarea class="textarea_editor span12" rows="6" placeholder="Enter text ..."></textarea>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div></div>


-->


@endsection