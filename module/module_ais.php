<div class="content ext-ad-banner clearfix">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<h4>AIS Traveller's SIM users enjoy 10% off</h4>
		<p>Enjoy discounts on all tours when you verify your phone number.</p>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4 clearfix form-group ext-ad-ais required" id="ais-gen-code">
		<input class="form-control" size="4" type="tel" placeholder="Enter your 10 digit number">
		<div class="g-recaptcha" data-sitekey="6LeMPwsTAAAAAPuggO2YzK_EkZDv0s24TQ7fJsV-"></div>
		<button class="btn btn-default btn-primary btn-ext-ad-ais">Generate Code</button>
	</div>
	<div class="col-xs-12 col-lg-2">
	</div>
</div>
<script>
	$(document).ready(function()
	{
		$("#ais-gen-code input").keydown(function (e)
		{
			if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
				 // Allow: Ctrl+A
				(e.keyCode == 65 && e.ctrlKey === true) ||
				 // Allow: Ctrl+C
				(e.keyCode == 67 && e.ctrlKey === true) ||
				 // Allow: Ctrl+X
				(e.keyCode == 88 && e.ctrlKey === true) ||
				 // Allow: home, end, left, right
				(e.keyCode >= 35 && e.keyCode <= 39))
			{
					// let it happen, don't do anything
					return;
			}
			
			if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105))
			{
				e.preventDefault();
			}
		});

		$("#ais-gen-code button").click(function()
		{
			var data = new Object();
			data.phone = $("#ais-gen-code input").val();

			$("#ais-gen-code span").remove();

			if ( data.phone.length > 0 )
			{
				$.ajax(
				{
					type: "POST",
					url: "cmd_gift.php",
					dataType: "json",
					data: 
					{
						cmd : "ais-gen-code",
						data : data
					},
					success: function( msg )
					{
						if ( msg.state == "ok" )
						{
							$("#navbar .promo-code-notify").remove();
							$("#navbar").append( '<div class="promo-code-notify" data-toggle="popover" data-content="Yay! Deals! You can use this discount code at checkout to apply 10% off your entire transaction.">You have unlocked<code>' + msg.code + '</code>discount code!</div>' );
						}
						else
						{
							console.log( msg );
						}
					}
				});
			}
			else
			{
				$("#ais-gen-code").append( "<span>miss phone number.</span>" );
			}
		});
	});
</script>