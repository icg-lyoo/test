<!DOCTYPE html>
<html lang="<?php echo I18n::$lang ?>">
  <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <title><?php echo $title ?></title>
      <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL ?>
      <?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
      
    <script type="text/javascript">



    $(document).ready(function() {

        

        var oTable = $('.table').dataTable( {
            "bProcessing": true,
            "bServerSide": false,
            "sAjaxSource": "../ajax/get_schedule",
            "iDisplayLength" : 25,
            "sPaginationType": "full_numbers",
            //default sort on page load is the arrival time
            "aaSorting":[[2, 'asc']],
            "aoColumns": [
                { "mDataProp": "num" },
                { "mDataProp": "name" },
                { "mDataProp": "arrival_time"},
                { "mDataProp": "start_ts" },
                { "mDataProp": "end_ts" },
                { "mDataProp": "freq" },
                { "mDataProp": "gate" },
                { "mDataProp": "status" },
            ],
            "fnDrawCallback": function () {
                //jeditable callback for gate update
                $('td:eq(6)', this.fnGetNodes()).editable( '../ajax/set_schedule', {
                    
                    
                    
                    "callback": function( sValue, y ) 
                    {
                        
                        
                        row_id = $(this).parent().attr('id');
                        split_id = row_id.split('_');
                        this.id = split_id[1];
                        
                        $(this).html('<img src="/c/img/icg/ajax-loader.gif"/>');
                        
                        //oTable.fnClearTable(true);
                        /* Redraw the table from the new data on the server */
                        //give ample time for the server to write into db
                        setTimeout(function(id){
                            oTable.fnReloadAjax(null, function(id){
                                
                                highlight_row = this.id;
                                
                                $('tr[id$='+highlight_row+'] td:eq(6)').addClass('recently-changed-sucess').delay(10000).queue(function(next){
                                    $(this).removeClass('recently-changed-sucess');
                                    next();
                                    
                                });
                                
                                row = $('tr[id$='+highlight_row+'] td');
                                
                                //schedule id, destination city, variable changed, the value
                                schedule_id = row.eq(0).text();
                                destination = row.eq(1).text();
                                gate = row.eq(6).text();
                                variable = y.name;
                                
                                alert_box = '<div class="alert alert-success alert-block fade in">\n\
                        <button type="button" class="close" data-dismiss="alert">&times;</button><h4 class="alert-heading">\n\
                        Schedule '+schedule_id+' to '+destination+' has been changed.</h4><p> '+(variable.charAt(0).toUpperCase() + variable.slice(1))+' has been changed to '+gate+' succesfully</p></div>';
                                
                                $('.dataTable').before(alert_box);
                                
                                $(".alert").alert();
                                window.setTimeout(function() { $(".alert").alert('close'); }, 10000);
                                
                            }, null);
                            
                        }, 3000);
                        
                        
                        
                    },
                    tooltip: function() {
                        $(this).addClass("editable-td");
                        this.orig_value = $(this).text();
                        $(this).html(this.orig_value+ '<img src="../../images/greyhound/bullet_edit.png"/>');
                        return 'Click to edit...'
                    },
                    indicator: '<img src="/c/img/icg/ajax-loader.gif"/>',
                    cssclass : 'table-editable',
                    name: 'gate',
                    data   : function(value,settings){
						var gate_options = {}
						
						for (var i=1; i <=100;i++){
							gate_options[i] = i;
						}
						
						gate_options['selected'] = this.orig_value;
                        return gate_options;
                    },
                    type   : 'select',
                    submit : 'Save',
                    cancel    : 'Cancel',
                    submitdata : function(value, settings) {
                        //get num id
                        row_id = $(this).parent().attr('id');
                        split_id = row_id.split('_');
                        id = split_id[1];
                        
                        //get arrival_time
                        arrival_time_text = $(this).parent().children('td:nth-child(3)').text();
                        //colons needs to be removed from the string because mysql time data type doesn't like the colons
                        format_arrival_time_text = arrival_time_text.replace(/:/g, '');
                        
                        
                        //create end_ts, get from web server to avoid any confusion with client time, etc.
                        var end_time;
                        $.ajax({
                          type:'GET',
                          url:'/c/greyhound/ajax/offset_end_ts',
                          data:'offset=12',
                          async: false,
                          success: function(data){
                              end_time = data;
                          }
                       });
                        
                        //get status
                        status_text = $(this).parent().children('td:nth-child(8)').text();
                        
                       return {num:id, status:status_text, end_ts:end_time, arrival_time:format_arrival_time_text};
                   },
                    "height": "14px",
                } );
                
                //jeditable callback for status update
                $('td:eq(7)', this.fnGetNodes()).editable( '../ajax/set_schedule', {
                    "callback": function( sValue, y ) {
                        
                        row_id = $(this).parent().attr('id');
                        split_id = row_id.split('_');
                        this.id = split_id[1];
                        
                        $(this).html('<img src="/c/img/icg/ajax-loader.gif"/>');
                        
                        //oTable.fnClearTable(true);
                        /* Redraw the table from the new data on the server */
                        //give ample time for the server to write into db
                        setTimeout(function(id){
                            oTable.fnReloadAjax(null, function(id){
                                
                                highlight_row = this.id;
                                
                                $('tr[id$='+highlight_row+'] td:eq(7)').addClass('recently-changed-sucess').delay(10000).queue(function(next){
                                    $(this).removeClass('recently-changed-sucess');
                                    next();
                                    
                                });
                                
                                row = $('tr[id$='+highlight_row+'] td');
                                
                                //schedule id, destination city, variable changed, the value
                                schedule_id = row.eq(0).text();
                                destination = row.eq(1).text();
                                status_text = row.eq(7).text();
                                variable = y.name;
                                
                                alert_box = '<div class="alert alert-success alert-block fade in">\n\
                        <button type="button" class="close" data-dismiss="alert">&times;</button><h4 class="alert-heading">\n\
                        Schedule '+schedule_id+' to '+destination+' has been changed.</h4><p> '+(variable.charAt(0).toUpperCase() + variable.slice(1))+' has been changed to '+status_text+' succesfully</p></div>';
                                
                                $('.dataTable').before(alert_box);
                                
                                $(".alert").alert();
                                window.setTimeout(function() { $(".alert").alert('close'); }, 10000);
                                
                            }, null);
                            
                        }, 3000);
                        
                    },
                    name:'status',
                        
                    type   : 'select',
                    cssclass : 'table-editable',
                    submit : 'Save',
                    cancel    : 'Cancel',
                    tooltip: function() {
                        $(this).addClass("editable-td");
                        this.orig_value = $(this).text();
                        $(this).html(this.orig_value+ '<img src="../../images/greyhound/bullet_edit.png"/>');
                        return 'Click to edit...'
                    },
                    data   : function(value,settings){
                        
                        status_code = {'On time':'1', 'Arrived':'2', 'Early':'3', 'Delayed':'4'};
                        
                        return {'1':'On time','2':'Arrived','3':'Early', '4':'Delayed', 'selected':status_code[this.orig_value]};
                    },
                    indicator: '<img src="/c/img/icg/ajax-loader.gif"/>',
                    submitdata : function(value, settings) {
                        //get num id
                        row_id = $(this).parent().attr('id');
                        split_id = row_id.split('_');
                        id = split_id[1];
                        
                        //get arrival_time
                        arrival_time_text = $(this).parent().children('td:nth-child(3)').text();
                        //colons needs to be removed from the string because mysql time data type doesn't like the colons
                        format_arrival_time_text = arrival_time_text.replace(/:/g, '');
                        
                        
                        //create end_ts, get from web server to avoid any confusion with client time, etc.
                        var end_time;
                        $.ajax({
                          type:'GET',
                          url:'/c/greyhound/ajax/offset_end_ts',
                          data:'offset=12',
                          async: false,
                          success: function(data){
                              end_time = data;
                          }
                       });
                        
                        //get gate
                        gate_text = $(this).parent().children('td:nth-child(7)').text();
                        
                       return {num:id, gate:gate_text, end_ts:end_time, arrival_time:format_arrival_time_text};
                   },
                    
                    "height": "14px",
                } );
//                $('td:eq(2)', oTable.fnGetNodes()).editable( '/greyhound/ajax/get_schedule', {
//                    "callback": function( sValue, y ) {
//                    /* Redraw the table from the new data on the server */
//                        oTable.fnDraw();
//                    },
//                    type:   'checkbox',
//                    cancel: 'Cancel',
//                    submit: 'OK',
//                    checkbox: { trueValue: 'Yes', falseValue: 'No' },
//                    "height": "14px",
//                } );
            }
        } );
    } );
    </script>
      
  </head>
  <body>
      

<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Greyhound</a>
          <!--<div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
        <?php echo $content; ?>
      
    </div> <!-- /container -->
      
  </body>
</html>
