@extends('master')
@section('content')

<div id="breadcrumbs" class="stuck_position"><div class="container">
        <div class="row"><div class="moduletable   col-sm-12"><div class="module_container"><span class="caption">Ceramic Tiles</span>
<ul class="breadcrumb">
	<li><a href="/index.php" class="pathway">Home</a><span class="divider">&nbsp;/&nbsp;</span></li><li><a href="/index.php/catalog" class="pathway">All Products</a><span class="divider">&nbsp;/&nbsp;</span></li><li class="active"><span>Ceramic Tiles</span></li>	</ul>
</div></div></div>
        </div></div>

                </div>

                
                <!-- Main Content row -->
                <div id="content">
                                        <div class="container">
                        <div class="row">
                                                <div class="content-inner">
                                                                <!-- Left sidebar -->
                                <!-- aside-left -->
    <div id="aside-left" class="col-sm-4">
					<div class="moduletable category">
						<div class="module_container">
							<header class='page_header'>
								<h6 class="moduleTitle ">
									<span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first item_title_part_last">Categories</span>
								</h6>
							</header>
							<ul class="VMmenu list list__categories list__accordion" id="accordion416">
								<li id="vm-category-76" class="list-item level0 VmClose">
									<a href="" >Ceramic Tiles</a>			
								</li>

								<li id="vm-category-40" class="list-item level0 parent has-children VmClose">
									<a href="" >Slabs</a>
								</li>			

								<li id="vm-category-42" class="list-item level0 parent has-children VmClose">
									<a href="" >Porcelain Tiles</a>
								</li>


								<li id="vm-category-43" class="list-item level0 parent has-children VmClose">
									<a href="" >Mosaic Tiles</a>
								</li>		


								<li id="vm-category-53" class="list-item level0 parent has-children VmClose">
									<a href="" >On Sale</a>
								</li>


	

</div></div></div>
                                
                                <div id="component" class="col-sm-8">
                                    <main role="main">
                                                                                <div id="system-message-container">
	</div>

                                        
			<div id="bd_results">
			<div id="cf_res_ajax_loader"></div><div id="com_virtuemart">
<div class="category-view-box"> <h3><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Ceramic</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">Tiles</span></h3>
<div class="category_description">
	</div>
<div class="browse-view comvirtuemartmod">

<div class="orderby-displaynumber">
	
	
	<div class="clearfix"></div>
	
</div> <!-- end of orderby-displaynumber -->

	
		<div class="virtuemart-category__container grid">
			<div id="products-view" class=" products-view " id="products">
				@foreach($ceramic as $cr)
			<div class="row prod">
				
		<div id="producthorizon458" class="product vm-product-horizon vm-col-3  vertical-separator vm-col span4">
				<div id="producthorizont" class="prod-box spacer product-container">
			
			<div class="vm-product-media-container">
								<a title="B&#38;W Deco Bella Random" href="/index.php/catalog/ceramictiles/deco-avenue-perle-b-450-452-454-456">
					<img src="file/images/{{($cr->images)}}" alt="bella1" class="browseProductImage" />				</a>
			</div>
			<div class="fleft-box">
								<div class="vm3pr vm3pr-0"> <div class="product-price " id="productPrice458">
			<a class="ask-a-question bold" href="/index.php/catalog/ceramictiles/deco-avenue-perle-b-450-452-454-456/askquestion?tmpl=component" rel="nofollow" >Call for price</a>
		</div>
			

					<div class="clear"></div>
				</div>
				<div class="vm-product-descr-container-0">
					
					<div class="product_s_desc">
						<p>{{$cr->name}}</p>											</div>
				</div>
				@endforeach
				
	<div class="clearfix"></div>
					</div>
	</div>

				</div>
			
</div>

	</div>

</div>


<!-- end browse-view -->
</div>
<script>
	function createCookie(a,b,c,d){if(c){var e=new Date();e.setTime(e.getTime()+(c*24*60*60*1000));var f="; expires="+e.toGMTString()}else var f="";if(d){var d="; path="+d}else var d="; path=/";document.cookie=a+"="+b+f+d}

	function readCookie(a){var b=a+"=";var d=document.cookie.split(';');for(var i=0;i<d.length;i++){var c=d[i];while(c.charAt(0)==' ')c=c.substring(1,c.length);if(c.indexOf(b)==0)return c.substring(b.length,c.length)}return null}

	jQuery(function($){
		if(readCookie('grid-list') == 'list'){
			$('.grid-list div').removeClass('active');
			$('.grid-list div[data-grid=list]').addClass('active');
			$('.virtuemart-category__container').removeClass('grid').addClass('list');
		}
		$('.grid-list div').click(function(){
			if(!$(this).hasClass('active')){
				$('.grid-list div').removeClass('active');
				$(this).addClass('active');
				data_grid = $(this).attr('data-grid');
				createCookie('grid-list',data_grid,365)
				$('.virtuemart-category__container').addClass('interim').delay(500)
				.queue(function (n) {
					$(this).removeClass('grid').removeClass('list').removeClass('interim').addClass(data_grid);
					n();
               	});
			}
		})
	})
</script>
<script>
	jQuery(document).ready(function(){
		jQuery('.box-btn .btn').tooltip();
	});
</script>







<script id="updateChosen_js" type="text/javascript">//<![CDATA[ 
if (typeof Virtuemart === "undefined")
	var Virtuemart = {};
	Virtuemart.updateChosenDropdownLayout = function() {
		var vm2string = {editImage: 'edit image',select_all_text: 'Select all',select_some_options_text: 'Available for all'};
		jQuery("select.vm-chzn-select").chosen({enable_select_all: true,select_all_text : vm2string.select_all_text,select_some_options_text:vm2string.select_some_options_text,disable_search_threshold: 5});
		//console.log("updateChosenDropdownLayout");
	}
	jQuery(document).ready( function() {
		Virtuemart.updateChosenDropdownLayout($);
	}); //]]>
</script>
<script id="ready.vmprices_js" type="text/javascript">//<![CDATA[ 
jQuery(document).ready(function($) {

		Virtuemart.product($("form.product"));
}); //]]>
</script>

<script id="updDynamicListeners_js" type="text/javascript">//<![CDATA[ 
jQuery(document).ready(function() { // GALT: Start listening for dynamic content update.
	// If template is aware of dynamic update and provided a variable let's
	// set-up the event listeners.
	//if (Virtuemart.container)
		Virtuemart.updateDynamicUpdateListeners();

}); //]]>
</script>
<script id="vm.hover_js" type="text/javascript">//<![CDATA[ 
jQuery(document).ready(function () {
	jQuery('.orderlistcontainer').hover(
		function() { jQuery(this).addClass('show')},
		function() { jQuery(this).removeClass('show')}
	)
}); //]]>
</script>
<script id="popups_js" type="text/javascript">//<![CDATA[ 
jQuery(document).ready(function($) {
		
		jQuery('a.ask-a-question, a.printModal, a.recommened-to-friend, a.manuModal').click(function(event){
		  event.preventDefault();
		  jQuery.fancybox({
			href: jQuery(this).attr('href'),
			type: 'iframe',
			wrapCSS : 'custom-class',
			height: 550,
			width: 500
			});
		  });
		
	}); //]]>
</script></div>
                                                                            </main>
                                </div>
                                                            </div>
                                                    </div>
                    </div>
                                            </div>
                            </div>
        </div>
 @endsection