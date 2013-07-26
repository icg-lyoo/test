<!DOCTYPE html>
<html lang="en"><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>New England Patriots Display Control Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="SHORTCUT ICON" href="favicon.ico"/>
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="css/stylesUDF.css" type="text/css" rel="stylesheet">

        <!-- Le styles -->

        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 0px 0;
            }
        </style>


        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->


		<?php echo HTML::script('js/patriots/jquery.js') ?>
		<?php echo HTML::style('css/patriots/bootstrap.css') ?>
		<?php echo HTML::script('js/patriots/jquery-ui.js') ?>
		<?php echo HTML::style('css/patriots/ui-lightness/jquery-ui.css') ?>
		<?php echo HTML::style('css/patriots/patriots-menu.css') ?>
		<?php echo HTML::style('css/patriots/patriots-ui.css') ?>
		
		<?php echo HTML::style('css/patriots/ly-styles.css') ?>
		<?php echo HTML::script('js/patriots/bootstrap-modal.js') ?>
		<?php echo HTML::script('js/patriots/bootstrap-transition.js') ?>
		<?php echo HTML::script('js/patriots/jquery.fileupload.js') ?>

		
		
		<script type="text/javascript">
			
			/**
			 * addsClick
			 */
			function addClick(p) {
				p.off('click');
        
            p.bind('item_saved', function(event, price){
                  p.siblings('.menu-item-price').html(price);
                  var inputValue = toTitleCase(p.children('input.editable').val());
              
                  if($.trim(inputValue) === '')
                  {
                        inputValue = p.attr('original-value');
                  }o
            
                  if(p.children('input.editable').css('text-transform') == 'uppercase')
                  {
                        //if css value is set to uppercase store as uppercase
                        inputValue = inputValue.toUpperCase();
                  }
            
                  p.children('.value').html(inputValue);
                  p.children('.editable').hide();
                  p.children('.value').show();
//                  icg.createTooltip(p);
            
            
            });
        
            p.on('focusout', function(){
                  setTimeout(function(){
                        p.trigger('start_item_saved');
                  }, 500);
              
            });
        
            p.on('start_item_saved', function(){
                  
                  if(p.attr('saving') == 'true'){
                        //doesnt let function to be triggered multiple times
                        return;
                  }
            
                  p.attr('saving', 'true');
                  p.removeClass('editing');
              
                  var inputValue = p.children('input.editable').val();
              
                  if(!p.hasClass('header')){
//                        if($.inArray(inputValue.toLowerCase(), menuItems) == -1)
//                        {
//                              alert('Menu Item doesn\'t exits, please select from the list');

                              p.trigger('click');
                              return;
//                        }
                  }
                
                
                  if(!p.hasClass('header'))
                  {
                        var mi_id = p.parents('.menu-item-container').attr('id').split('mi')[1];
                    
//                        $.ajax({
//                              url:"/pancake/patriots/v1/menu/change_menu_item",
//                              type:"POST",
//                              async:false,
//                              data:{
//                                    "title":inputValue,
//                                    "mi_id": mi_id
//                              },
//                              success:function(price){                            
//                                    p.trigger('item_saved', [price]);
//                              }
//                        });
                  }
                  else
                  {
//                        var menu_id = p.parents('.menu').attr('id').split('m')[1];
//                        $.ajax({
//                              url:"/pancake/patriots/v1/menu/change_menu_title",
//                              type:"POST",
//                              async:false,
//                              data:{
//                                    "title":inputValue.toLowerCase(),
//                                    "menu_id": menu_id
//                              }
//                        });
                  }
            });
        
            p.on('click', function(){
                  
                  p.removeAttr('saving');
            
                  if(!p.hasClass('editing'))
                  {
                        p.addClass('editing');
                  }
                
                  var tempVal = p.children('.value').html();
                  p.children('.value').hide();
                  p.children('.icg-tooltip').hide();
            
                  var input = p.children('input.editable');

                  if(input.length == 0){//only create input field if it doesnt exist
                        p.append('<input type="text" class="' + ' editable" />');
                  
                        input = p.children('input.editable');
                  
                        input.attr('original-value', tempVal);
                  }else{
                        input.val(input.attr('original-value'));;
                  }

                  p.children('input.editable').css('height', p.css('line-height'));
                  p.children('input.editable').show().focus();
                  p.children('input.editable').val(tempVal);

                  p.children('input.editable').select();
                  
                  if(!p.hasClass('header'))
                  {
//                        p.children('input.editable').autocomplete({
//                              source:menuItems,
//                              select:function(event, ui){
//                                    $(this).val(ui.item.value);
//                                    p.trigger('start_item_saved');
//                              }
//                        });

                  }
            
            });
			}
			
/**
* edit
*/
function edit(p, removable) {
p = $(p);
            //Creates pencil icon and puts the value of the header in a div tag
            var temp = p.html();
            if(p.children('.value').length == 0)
            {
                  p.html('<div class="value">' + temp + '</div>');
            }
            if(p.children('.icg-tooltip').length == 0)
            {
//                  icg.createTooltip(p);
            }
            p.attr('original_value', p.children('.value').text());
            addClick(p);
}
			
			
			
			
			
			/**
			 * gets width of text in an input
			 */
			function name(parameters) {
				
			}

			
			
			
			
			function resetInputWidth() {
					$('.value').each(function(){
						var width = $(this).children('.editable-input').val().textWidth();
						$(this).css('width', width);
					});
				}
			
			
			
			
			(function($){

$.fn.autoGrowInput = function(o) {

    o = $.extend({
        maxWidth: 1000,
        minWidth: 0,
        comfortZone: 70
    }, o);

    this.filter('input:text').each(function(){

        var minWidth = o.minWidth || $(this).width(),
            val = '',
            input = $(this),
            testSubject = $('<tester/>').css({
                position: 'absolute',
                top: -9999,
                left: -9999,
                width: 'auto',
                fontSize: input.css('fontSize'),
                fontFamily: input.css('fontFamily'),
                fontWeight: input.css('fontWeight'),
                letterSpacing: input.css('letterSpacing'),
                whiteSpace: 'nowrap'
            }),
            check = function() {

                if (val === (val = input.val())) {return;}

                // Enter new content into testSubject
                var escaped = val.replace(/&/g, '&amp;').replace(/\s/g,' ').replace(/</g, '&lt;').replace(/>/g, '&gt;');
                testSubject.html(escaped);

                // Calculate new width + whether to change
                var testerWidth = testSubject.width(),
                    newWidth = (testerWidth + o.comfortZone) >= minWidth ? testerWidth + o.comfortZone : minWidth,
                    currentWidth = input.width(),
                    isValidWidthChange = (newWidth < currentWidth && newWidth >= minWidth)
                                         || (newWidth > minWidth && newWidth < o.maxWidth);

                // Animate width
                if (isValidWidthChange) {
                    input.width(newWidth);
                }

            };

        testSubject.insertAfter(input);

        $(this).bind('keyup keydown blur update change', check);

    });

    return this;

};

})(jQuery);

			
			
			
			
			$(document).ready(function(){

				$('.editable-input').autoGrowInput({
					comfortZone: 40,
					minWidth: 250,
					maxWidth: 700
				});
				
				$('.editable-input').each(function(){
					$(this).focus();
					$(this).blur();
				});
				
				$('.editable-input').focus(function(){
					$(this).parent('.value').siblings('.icg-tooltip').hide();
				});
				
				$('.editable-input').blur(function(){
					$(this).parent('.value').siblings('.icg-tooltip').fadeIn(500);
				});
				
				$('.preview-edit').click(function(){
					if($(this).html() == 'Preview')
					{
						$('.delete-btn').fadeOut(500);
						$('.icg-tooltip').fadeOut(500);
						$('.remove-menu-btn').fadeOut(500);
						$('.sample-text').fadeOut(500);
						$('.add-menu-btn').fadeOut(500);
						$(this).html('Edit');
					}
					else{
						$('.delete-btn').fadeIn(500);
						$('.icg-tooltip').fadeIn(500);
						$('.remove-menu-btn').fadeIn(500);
						$('.sample-text').fadeIn(500);
						$('.add-menu-btn').fadeIn(500);
						$(this).html('Preview');
					}
				});
			});
		</script>
		<style type="text/css">
/*			.editable-input{
				font-size: inherit !important;
				font-family: inherit !important;
				background:none !important;
				width: auto;
				border:none !important;
				color: inherit !important;
				float:left;
			}
			.header .editable-input{
				height:60px !important;
			}
			.menu-item-container .editable-input{
				height:57px !important;
			}
			.menu-item-container{
				height:57px !important;
			}
			.menu-item-price{
				height:57px !important;
			}
			.value{
				width:auto;
				float:left;
			}
			.icg-tooltip{
			}
			.delete-btn{
				position:static !important;
				float:left !important;
			}*/
		</style>
    </head>

    <body>


<div class="wrapper">
	<div class="zone-edit-container">
				<div class="menu-container zone-container ui-sortable" style="-pie-background:url('/patriots_ui/assets/bbq/menu-bg2.jpg'); background-image:url('/patriots_ui/assets/bbq/menu-bg2.jpg'); behavior:url('/patriots_ui/PIE/PIE.php');">
					<div class="preview-edit btn">Preview</div>
					<div class="btn add-menu-btn">Click to add a menu</div>
					<div class="single-menu-container">
						<div style="display: block;" class="menu menu-bbq" id="m80">
							<div class="remove-menu-btn btn">
								<i class=" icon-remove-sign"></i>
							</div>
							<div original_value="ENTREES" class="header" title="Click to edit the title of the menu...">
								<div class="value"><input type="text" value="ENTREES" class="editable-input" /></div>
								<div class="icg-tooltip" style="margin-top: 15px; float: left; margin-left: 10px;">
									<div class="arrow-left"></div>
									<i class="icon-pencil"></i>
									<div class="icon-text">Click to edit</div>
								</div>
								<div class="clear-float"></div>
							</div>
							<div style="" class="menu-items ui-sortable">
								<div style="" class="menu-item-container" id="mi153">
									<div class="btn delete-btn">
										<i class="icon-remove-sign"></i>
									</div>
									<div original_value="Full Rack Of Ribs" class="menu-item-title" title="Click to edit the title of the menu item...">
										<div class="value"><input type="text" value="Full Rack Of Ribs" class="editable-input" /></div>
										<div class="icg-tooltip" style="margin-top: 4px; float: left; margin-left: 10px;">
											<div class="arrow-left"></div>
											<i class="icon-pencil"></i>
											<div class="icon-text">Click to edit</div>
											<div class="clear-left"></div>
											
										</div>
										<div class="clear-float"></div>
										
									</div>
									<div class="menu-item-price" title="Click to edit the title of the menu item price...">18.50</div>
									<div class="clear-float"></div>
									
								</div>
								<div style="" class="menu-item-container" id="mi1697">
									<div class="btn delete-btn">
										<i class="icon-remove-sign"></i>
									</div>
									<div original_value="1/2 Rack Of Ribs" class="menu-item-title" title="Click to edit the title of the menu item...">
										<div class="value"><input type="text" value="1/2 Rack Of Ribs" class="editable-input" /></div>
										<div class="icg-tooltip" style="margin-top: 4px; float: left; margin-left: 10px;">
											<div class="arrow-left"></div>
											<i class="icon-pencil"></i>
											<div class="icon-text">Click to edit</div>
											<div class="clear-left"></div>
											
										</div>
										<div class="clear-float"></div>
										
									</div>
									<div class="menu-item-price" title="Click to edit the title of the menu item price...">12.50</div>
									<div class="clear-float"></div>
									
								</div>
								<div style="" class="menu-item-container" id="mi1699">
									<div class="btn delete-btn">
										<i class="icon-remove-sign"></i>
									</div>
									<div original_value="Pulled Pork Sandwich" class="menu-item-title" title="Click to edit the title of the menu item...">
										<div class="value"><input type="text" value="1/2 Rack Of Ribs" class="editable-input" /></div>
										<div class="icg-tooltip" style="margin-top: 4px; float: left; margin-left: 10px;">
											<div class="arrow-left"></div>
											<i class="icon-pencil"></i>
											<div class="icon-text">Click to edit</div>
											<div class="clear-left"></div>
											
										</div>
										<div class="clear-float"></div>
										
									</div>
									<div class="menu-item-price" title="Click to edit the title of the menu item price...">7.75</div>
									<div class="clear-float"></div>
									
								</div>
								<div style="" class="menu-item-container" id="mi1698">
									<div class="btn delete-btn">
										<i class="icon-remove-sign"></i>
									</div>
									<div original_value="Pulled Chicken Sandwich" class="menu-item-title" title="Click to edit the title of the menu item...">
										<div class="value"><input type="text" value="1/2 Rack Of Ribs" class="editable-input" /></div>
										<div class="icg-tooltip" style="margin-top: 4px; float: left; margin-left: 10px;">
											<div class="arrow-left"></div>
											<i class="icon-pencil"></i>
											<div class="icon-text">Click to edit</div>
											<div class="clear-left"></div>
											
										</div>
										<div class="clear-float"></div>
										
									</div>
									<div class="menu-item-price" title="Click to edit the title of the menu item price...">7.75</div>
									<div class="clear-float"></div>
									
								</div>
								<div style="" class="menu-item-container" id="mi157">
									<div class="btn delete-btn">
										<i class="icon-remove-sign"></i>
									</div>
									<div original_value="Beef Brisket Sandwich" class="menu-item-title" title="Click to edit the title of the menu item...">
										<div class="value"><input type="text" value="1/2 Rack Of Ribs" class="editable-input" /></div>
										<div class="icg-tooltip" style="margin-top: 4px; float: left; margin-left: 10px;">
											<div class="arrow-left"></div>
											<i class="icon-pencil"></i>
											<div class="icon-text">Click to edit</div>
											<div class="clear-left"></div></div>
										<div class="clear-float"></div></div>
									<div class="menu-item-price" title="Click to edit the title of the menu item price...">7.75</div>
									<div class="clear-float"></div></div>
								<div style="" class="menu-item-container sample-text">
										<div class="menu-item-title"><div class="btn">
												<i class="icon-plus-sign"></i>Click to add a menu item...</div>
										</div>
									</div>
							</div>
							<div class="footer"></div>
							
						</div>
						
					</div>
	</div>
</div>


    </body></html>