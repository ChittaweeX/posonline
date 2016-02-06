@extends('default_admin_layout')
@section('title')
  DataEmployee | Backend
@endsection
@section('custom-css')


@endsection
@section('breadcrumb')
  <div class="breadcrumbs" id="breadcrumbs">
    <script type="text/javascript">
      try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
    </script>

    <ul class="breadcrumb">
      <li>
        <i class="ace-icon fa fa-dashboard"></i>
        <a href="{{ url('admin') }}">หน้าหลัก</a>
      </li>
      <li>
        <i class="ace-icon fa fa-male"></i>
        พนักงาน
      </li>
      <li class="active">
          <i class="ace-icon fa fa-table"></i>
        พนักงานทั้งหมด</li>
    </ul><!-- /.breadcrumb -->

    <div class="nav-search" id="nav-search">
      <form class="form-search">
        <span class="input-icon">
          <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
          <i class="ace-icon fa fa-search nav-search-icon"></i>
        </span>
      </form>
    </div><!-- /.nav-search -->
  </div>
@endsection
@section('content')
  <div class="page-header">
    <h1>
      พนักงานทั้งหมด
    </h1>
  </div><!-- /.page-header -->

  <div class="row">
    <div class="col-xs-12">


      <div class="clearfix">
        <div class="pull-right tableTools-container"></div>
      </div>


      <!-- div.table-responsive -->

      <!-- div.dataTables_borderWrap -->
      <div class="table-responsive">
        <table id="dynamic-table" class="table  table-bordered table-hover ">
          <thead>
            <tr>
              <th>ID</th>
              <th>ชื่อ-นามสกุล</th>
              <th class="hidden-480">ที่อยู่</th>
              <th class="hidden-480">เบอร์โทร</th>
              <th class="hidden-480">Email</th>
              <th class="hidden-480">LineID</th>
              <th>Username</th>
              <th class="hidden-480">ตำแหน่ง</th>
              <th class="hidden-480">เข้าเมื่อ</th>
              <th class="hidden-480">แก้ไขข้อมูลล่าสุด</th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            @foreach ($employee as $emp)
              <tr>
                <td>
                  {{ $emp->emp_ID }}
                </td>
                <td>
                    {{ $emp->emp_name }}
                </td>
                <td class="hidden-480" >
                    {{ $emp->emp_address }}
                </td>
                <td class="hidden-480">
                    {{ $emp->emp_tel }}
                </td >
                <td class="hidden-480">
                    {{ $emp->emp_email }}
                </td>
                <td class="hidden-480">
                    {{ $emp->emp_lineid }}
                </td>
                <td>
                    {{ $emp->emp_username }}
                </td>
                <td class="hidden-480">
                  <span class="label label-sm label-warning">Expiring</span>
                </td>
                <td class="hidden-480">
                    {{ $emp->created_at }}
                </td>
                <td class="hidden-480">
                    {{ $emp->updated_at }}
                </td>

                <td>
                  <div class="hidden-sm hidden-xs action-buttons">
                    <a class="blue" href="{{ url('admin/employee/showemployee/'.$emp->emp_ID) }}">
                      <i class="ace-icon fa fa-search-plus bigger-130"></i>
                    </a>

                    <a class="green" href="{{ url('admin/employee/updateemployee/'.$emp->emp_ID) }}">
                      <i class="ace-icon fa fa-pencil bigger-130"></i>
                    </a>

                    <a class="red" href="#">
                      <i class="ace-icon fa fa-trash-o bigger-130"></i>
                    </a>
                  </div>

                  <div class="hidden-md hidden-lg">
                    <div class="inline pos-rel">
                      <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                      </button>

                      <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                        <li>
                          <a href="{{ url('admin/employee/showemployee/'.$emp->emp_ID) }}" class="tooltip-info" data-rel="tooltip" title="View">
                            <span class="blue">
                              <i class="ace-icon fa fa-search-plus bigger-120"></i>
                            </span>
                          </a>
                        </li>

                        <li>
                          <a href="{{ url('admin/employee/updateemployee/'.$emp->emp_ID) }}" class="tooltip-success" data-rel="tooltip" title="Edit">
                            <span class="green">
                              <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                            </span>
                          </a>
                        </li>

                        <li>
                          <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                            <span class="red">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </td>
              </tr>
            @endforeach


          </tbody>
        </table>
      </div>
    </div>
  </div>


@endsection
@section('custom-js')
  <script src="{{ url('assets/admin/js/jquery.dataTables.min.js') }} "></script>
  <script src="{{ url('assets/admin/js/jquery.dataTables.bootstrap.min.js') }} "></script>
  <script src="{{ url('assets/admin/js/dataTables.tableTools.min.js') }} "></script>
  <script src="{{ url('assets/admin/js/dataTables.colVis.min.js')}} "></script>

@endsection
@section('custom-jscode')
  <script type="text/javascript">
    jQuery(function($) {
      //initiate dataTables plugin
      var oTable1 =
      $('#dynamic-table')
      //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
      .dataTable( {


        } );
      //oTable1.fnAdjustColumnSizing();


      //TableTools settings
      TableTools.classes.container = "btn-group btn-overlap";
      TableTools.classes.print = {
        "body": "DTTT_Print",
        "info": "tableTools-alert gritter-item-wrapper gritter-info gritter-center white",
        "message": "tableTools-print-navbar"
      }

      //initiate TableTools extension
      var tableTools_obj = new $.fn.dataTable.TableTools( oTable1, {
        "sSwfPath": " {{ url('assets/admin/swf/copy_csv_xls_pdf.swf') }}",

        "sRowSelector": "td:not(:last-child)",
        "sRowSelect": "multi",
        "fnRowSelected": function(row) {
          //check checkbox when row is selected
          try { $(row).find('input[type=checkbox]').get(0).checked = true }
          catch(e) {}
        },
        "fnRowDeselected": function(row) {
          //uncheck checkbox
          try { $(row).find('input[type=checkbox]').get(0).checked = false }
          catch(e) {}
        },

        "sSelectedClass": "success",
            "aButtons": [
          {
            "sExtends": "copy",
            "sToolTip": "Copy to clipboard",
            "sButtonClass": "btn btn-white btn-primary btn-bold",
            "sButtonText": "<i class='fa fa-copy bigger-110 pink'></i>",
            "fnComplete": function() {
              this.fnInfo( '<h3 class="no-margin-top smaller">Table copied</h3>\
                <p>Copied '+(oTable1.fnSettings().fnRecordsTotal())+' row(s) to the clipboard.</p>',
                1500
              );
            }
          },

          {
            "sExtends": "csv",
            "sToolTip": "Export to CSV",
            "sButtonClass": "btn btn-white btn-primary  btn-bold",
            "sButtonText": "<i class='fa fa-file-excel-o bigger-110 green'></i>"
          },

          {
            "sExtends": "pdf",
            "sToolTip": "Export to PDF",
            "sButtonClass": "btn btn-white btn-primary  btn-bold",
            "sButtonText": "<i class='fa fa-file-pdf-o bigger-110 red'></i>"
          },

          {
            "sExtends": "print",
            "sToolTip": "Print view",
            "sButtonClass": "btn btn-white btn-primary  btn-bold",
            "sButtonText": "<i class='fa fa-print bigger-110 grey'></i>",

            "sMessage": "<div class='navbar navbar-default'><div class='navbar-header pull-left'><a class='navbar-brand' href='#'><small>Optional Navbar &amp; Text</small></a></div></div>",

            "sInfo": "<h3 class='no-margin-top'>Print view</h3>\
                  <p>Please use your browser's print function to\
                  print this table.\
                  <br />Press <b>escape</b> when finished.</p>",
          }
            ]
        } );
      //we put a container before our table and append TableTools element to it
        $(tableTools_obj.fnContainer()).appendTo($('.tableTools-container'));

      //also add tooltips to table tools buttons
      //addding tooltips directly to "A" buttons results in buttons disappearing (weired! don't know why!)
      //so we add tooltips to the "DIV" child after it becomes inserted
      //flash objects inside table tools buttons are inserted with some delay (100ms) (for some reason)
      setTimeout(function() {
        $(tableTools_obj.fnContainer()).find('a.DTTT_button').each(function() {
          var div = $(this).find('> div');
          if(div.length > 0) div.tooltip({container: 'body'});
          else $(this).tooltip({container: 'body'});
        });
      }, 200);



      //ColVis extension
      var colvis = new $.fn.dataTable.ColVis( oTable1, {
        "buttonText": "<i class='fa fa-search'></i>",
        "aiExclude": [0, 6],
        "bShowAll": true,
        //"bRestore": true,
        "sAlign": "right",
        "fnLabel": function(i, title, th) {
          return $(th).text();//remove icons, etc
        }

      });

      //style it
      $(colvis.button()).addClass('btn-group').find('button').addClass('btn btn-white btn-info btn-bold')

      //and append it to our table tools btn-group, also add tooltip
      $(colvis.button())
      .prependTo('.tableTools-container .btn-group')
      .attr('title', 'Show/hide columns').tooltip({container: 'body'});

      //and make the list, buttons and checkboxed Ace-like
      $(colvis.dom.collection)
      .addClass('dropdown-menu dropdown-light dropdown-caret dropdown-caret-right')
      .find('li').wrapInner('<a href="javascript:void(0)" />') //'A' tag is required for better styling
      .find('input[type=checkbox]').addClass('ace').next().addClass('lbl padding-8');



      /////////////////////////////////

      /********************************/
      //add tooltip for small view action buttons in dropdown menu
      $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

      //tooltip placement on right or left
      function tooltip_placement(context, source) {
        var $source = $(source);
        var $parent = $source.closest('table')
        var off1 = $parent.offset();
        var w1 = $parent.width();

        var off2 = $source.offset();
        //var w2 = $source.width();

        if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
        return 'left';
      }

    })
  </script>
@endsection
