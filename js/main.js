
 $(function()
        {
          var select_it = $('.open_wind');
          
          $.each(select_it, function()
          {
            $(this).bind('click', function(){
            	window['get_id'] = $(this).attr('data-id');
            	console.log(window['get_id']);
            	let peredacha = $('.for_id_on_product');
            	console.log(peredacha);
                peredacha.attr('data-id', get_id);
            	$.get( "/includes/php/takemeters.php", { id: get_id } )
			  	.done(function( data )
			  	{
			  		window['size'] = data;
			  	});
			  	$.get( "/includes/php/takemeters2.php", { id: get_id } )
			  	.done(function( data )
			  	{
			  		window['price'] = data;
			  	});
                let openthis = $('.how_many');
                
                let backgroundopen = $('.modal-wrapper');
                	openthis.css('display', 'block');
                	backgroundopen.css('display', 'flex');
               

           });
        });
    });
 window['vivod2'] = 0;
 
$(function ()
{
	let inp = $("input[name='onprc']");
	$.each(inp, function()
	{
	$(this).bind('keyup', function()
		{	
		var step = document.querySelector('input.to').value;
	    var modstep = parseInt(step);
	    var vivod = Math.ceil(modstep/size);
	    let elem = document.querySelector('div.vivod');
	    let summing = price * vivod;
	    elem.textContent = "Вам нужно приобрести " + vivod + "шт." + "на сумму " + summing + " руб."; 
	    vivod2=vivod;
	    console.log(elem);
		});
	});
});

$(function()
{

	const links_with_id = $('.for_id_on_product');
	const cart_value = $("#cart_value");

	$.each(links_with_id, function()
	{
		$(this).bind('click', function()
		{
			let current_id = $(this).attr('data-id');
			$.get( "includes/php/api.php", { id: current_id} )
			.done(function(data){

				cart_value.html(data);
			
			});

			let current_id2 = $(this).attr('data-id');
			$.get("includes/php/hell.php", {counts: vivod2, id2: current_id2})
			.done(function(data){
			});
			
		});
	});
});
$(function()
        {
          var select_it = $('.open_windorac');
          
          $.each(select_it, function()
          {
            $(this).bind('click', function(){
            	window['get_id'] = $(this).attr('data-id');
            	let peredachaorac = $('.for_id_on_productorac');
                peredachaorac.attr('data-id', get_id);
                let openthisorac = $('.how_manyorac');
                
                let backgroundopenorac = $('.modal-wrapper');
                	openthisorac.css('display', 'block');
                	backgroundopenorac.css('display', 'flex');
               

           });
        });
    });
 var steporac;
$(function ()
{
	let inp = $("input[name='onprc2']");
	$.each(inp, function()
	{
	$(this).bind('keyup', function()
		{	
		steporac = document.querySelector('input.to2').value;
		});
	});
});
$(function()
{

	const links_with_idorac = $('.for_id_on_productorac');
	const cart_value = $("#cart_value");

	$.each(links_with_idorac, function()
	{
		$(this).bind('click', function()
		{	
			let current_id = $(this).attr('data-id');
			$.get( "includes/php/api.php", { id: current_id} )
			.done(function(data){

				cart_value.html(data);
			
			});

			let current_id2 = $(this).attr('data-id');
			$.get("includes/php/hell.php", {counts: steporac, id2: current_id2})
			.done(function(data){
			});
			
		});
	});
});




