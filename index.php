<?php include("header.php"); ?>
	 
	 <div id="container">
		
		<div id="top3">
		<img src="images/banner_wave.jpg" class="bannershadow">
		</div>
	
	<div id="mainleftnav">
			
			<div class="sub_menu_heading"><h1>News and Events</h1></div>
			<div class="sidecolpad">
			<a href="newsandevents.php">New Headquarter Office!</a>
			</div>
			<div class="sidecolpad">
			<a href="newsandevents.php">Equiventure Capital launches Hospitality Leisure Group</a>
			</div>
			<div class="sidecolpad">
			<a href="newsandevents.php">Student Housing Financing: Yesterday, Today, and Tomorrow</a>
			</div>
			<div class="sidecolpad">
			<a href="newsandevents.php">Read more..</a>
			</div>
	</div>


	<div id="rightnav">
		<!--
		<h1>Want eNews?</h1><br />
		<div class="newsletter">
		<p>
		Enter your email address in the form below to sign up for our eNewsletter, and be kept up to date on all of our projects and offerings.
		</p>
		
		<form method="post" action="http://scripts.dreamhost.com/add_list.cgi">
		<input type="hidden" name="list" value="enewsletter" />
		<input type="hidden" name="domain" value="equiventurecapital.com" />
		<input type="hidden" name="url" value="success.php" />
		
		<input type="hidden" name="alreadyonurl" value="AlreadyOnURL" />
		<input type="hidden" name="notonurl" value="NotOnURL" />
		<input type="hidden" name="invalidurl" value="InvalidURL" />
		<input type="hidden" name="emailconfirmurl" value="EmailConfirmURL" />
		<input type="hidden" name="emailit" value="1" />
		Name: <input name="name" />
		<br /><br />E-mail: <input name="email" /><br />
		<p class="submit"><input type="submit" name="submit" value="Go!" /></p>
		
		</form>
		</div>
		<br />
		-->
		<!-- Begin MailChimp Signup Form -->
		<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
			/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
			   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
		</style>
		<h1>Get eNews!</h1>
		<p>
		Enter your email address in the form below to sign up for our eNewsletter, and be kept up to date on all of our projects and offerings.
		</p>
		<div id="mc_embed_signup">
		<form action="http://equiventurecapital.us3.list-manage.com/subscribe/post?u=6ef8b816bb5f4ca68fa0e434c&amp;id=6b901a4eab" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			
		<div class="mc-field-group">
			<label for="mce-EMAIL">Email Address </label>
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
		</div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		    <div style="position: absolute; left: -5000px;"><input type="text" name="b_6ef8b816bb5f4ca68fa0e434c_6b901a4eab" value=""></div>
			<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		</form>
		</div>
		<script type="text/javascript">
		var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';
		try {
		    var jqueryLoaded=jQuery;
		    jqueryLoaded=true;
		} catch(err) {
		    var jqueryLoaded=false;
		}
		var head= document.getElementsByTagName('head')[0];
		if (!jqueryLoaded) {
		    var script = document.createElement('script');
		    script.type = 'text/javascript';
		    script.src = '//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
		    head.appendChild(script);
		    if (script.readyState && script.onload!==null){
		        script.onreadystatechange= function () {
		              if (this.readyState == 'complete') mce_preload_check();
		        }    
		    }
		}

		var err_style = '';
		try{
		    err_style = mc_custom_error_style;
		} catch(e){
		    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
		}
		var head= document.getElementsByTagName('head')[0];
		var style= document.createElement('style');
		style.type= 'text/css';
		if (style.styleSheet) {
		  style.styleSheet.cssText = err_style;
		} else {
		  style.appendChild(document.createTextNode(err_style));
		}
		head.appendChild(style);
		setTimeout('mce_preload_check();', 250);

		var mce_preload_checks = 0;
		function mce_preload_check(){
		    if (mce_preload_checks>40) return;
		    mce_preload_checks++;
		    try {
		        var jqueryLoaded=jQuery;
		    } catch(err) {
		        setTimeout('mce_preload_check();', 250);
		        return;
		    }
		    var script = document.createElement('script');
		    script.type = 'text/javascript';
		    script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
		    head.appendChild(script);
		    try {
		        var validatorLoaded=jQuery("#fake-form").validate({});
		    } catch(err) {
		        setTimeout('mce_preload_check();', 250);
		        return;
		    }
		    mce_init_form();
		}
		function mce_init_form(){
		    jQuery(document).ready( function($) {
		      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
		      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
		      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
		      options = { url: 'http://equiventurecapital.us3.list-manage2.com/subscribe/post-json?u=6ef8b816bb5f4ca68fa0e434c&id=6b901a4eab&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
		                    beforeSubmit: function(){
		                        $('#mce_tmp_error_msg').remove();
		                        $('.datefield','#mc_embed_signup').each(
		                            function(){
		                                var txt = 'filled';
		                                var fields = new Array();
		                                var i = 0;
		                                $(':text', this).each(
		                                    function(){
		                                        fields[i] = this;
		                                        i++;
		                                    });
		                                $(':hidden', this).each(
		                                    function(){
		                                        var bday = false;
		                                        if (fields.length == 2){
		                                            bday = true;
		                                            fields[2] = {'value':1970};//trick birthdays into having years
		                                        }
		                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
		                                    		this.value = '';
											    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
		                                    		this.value = '';
											    } else {
											        if (/\[day\]/.test(fields[0].name)){
		    	                                        this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
											        } else {
		    	                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
			                                        }
			                                    }
		                                    });
		                            });
		                        $('.phonefield-us','#mc_embed_signup').each(
		                            function(){
		                                var fields = new Array();
		                                var i = 0;
		                                $(':text', this).each(
		                                    function(){
		                                        fields[i] = this;
		                                        i++;
		                                    });
		                                $(':hidden', this).each(
		                                    function(){
		                                        if ( fields[0].value.length != 3 || fields[1].value.length!=3 || fields[2].value.length!=4 ){
		                                    		this.value = '';
											    } else {
											        this.value = 'filled';
			                                    }
		                                    });
		                            });
		                        return mce_validator.form();
		                    }, 
		                    success: mce_success_cb
		                };
		      $('#mc-embedded-subscribe-form').ajaxForm(options);


		    });
		}
		function mce_success_cb(resp){
		    $('#mce-success-response').hide();
		    $('#mce-error-response').hide();
		    if (resp.result=="success"){
		        $('#mce-'+resp.result+'-response').show();
		        $('#mce-'+resp.result+'-response').html(resp.msg);
		        $('#mc-embedded-subscribe-form').each(function(){
		            this.reset();
		    	});
		    } else {
		        var index = -1;
		        var msg;
		        try {
		            var parts = resp.msg.split(' - ',2);
		            if (parts[1]==undefined){
		                msg = resp.msg;
		            } else {
		                i = parseInt(parts[0]);
		                if (i.toString() == parts[0]){
		                    index = parts[0];
		                    msg = parts[1];
		                } else {
		                    index = -1;
		                    msg = resp.msg;
		                }
		            }
		        } catch(e){
		            index = -1;
		            msg = resp.msg;
		        }
		        try{
		            if (index== -1){
		                $('#mce-'+resp.result+'-response').show();
		                $('#mce-'+resp.result+'-response').html(msg);            
		            } else {
		                err_id = 'mce_tmp_error_msg';
		                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';

		                var input_id = '#mc_embed_signup';
		                var f = $(input_id);
		                if (ftypes[index]=='address'){
		                    input_id = '#mce-'+fnames[index]+'-addr1';
		                    f = $(input_id).parent().parent().get(0);
		                } else if (ftypes[index]=='date'){
		                    input_id = '#mce-'+fnames[index]+'-month';
		                    f = $(input_id).parent().parent().get(0);
		                } else {
		                    input_id = '#mce-'+fnames[index];
		                    f = $().parent(input_id).get(0);
		                }
		                if (f){
		                    $(f).append(html);
		                    $(input_id).focus();
		                } else {
		                    $('#mce-'+resp.result+'-response').show();
		                    $('#mce-'+resp.result+'-response').html(msg);
		                }
		            }
		        } catch(e){
		            $('#mce-'+resp.result+'-response').show();
		            $('#mce-'+resp.result+'-response').html(msg);
		        }
		    }
		}

		</script>
		<!--End mc_embed_signup-->
		
		<h1>Get a Quick Quote</h1>
		<p>
		<a href="quickquote.php">Click Here</a> to fill out a short form to receive a quick quote on the product of your choice.
		</p>
	</div>


	<div id="content">
		
                <h1> Welcome to Equiventure Capital</h1>
		<p>
		Headquartered in New York, and with offices throughout the U.S. and Puerto Rico, Equiventure Capital's dedicated team of financial experts in commercial real estate, joint venture developments, and Venture Capital, can deliver creative financing solutions across the entire capital stack for a broad range of projects located nation-wide and internationally.
		</p>
		<p>
		Equiventure Capital’s Commercial Real Estate division offers many alternatives and advantages in financing all types of commercial projects.  Through our established partnership with an FHA/HUD Bank, our firm is well positioned to give our Clients direct access to capital financing for construction/acquisition and refinancing of Multi-family, Assisted Living, Healthcare, Student Housing and other HUD related projects.  Equiventure Capital’s underwriting team, coupled with our direct lending capacity consistently provide Clients with in-depth guidance throughout the entire HUD process.
		</p>
		<p>
		For projects that do not fit the HUD program, Equiventure Capital has access to a broad range of debt, equity and joint venture groups from small financial to extremely large commercial projects involving hundreds of acres of developed and undeveloped property. For Clients that are asset rich, cash limited, but have a strong Senior Housing, Assisted Living or Multifamily construction and/or rehab project, Equiventure Capital’s Development Group has perfected an alternative plan to fund these projects through a joint venture partnership program.
		</p>
		<p>
		Equiventure’s Venture Capital division provides a broad range of expertise in the areas of corporate development, mergers and acquisitions, corporate finance, public offerings, equity investments and capital placement transactions for projects involving new technologies, alternative energy, franchises, and other unique products and services.
		</p>
		<p>
		Equiventure Capital Hospitality Leisure Group is dedicated to providing financing  alternatives for every type of hospitality asset involving repositioning, new development, acquisition, sales, equity investments, bridge and mezzanine.  Our record of experience has provided creative financing solutions and in-depth analytical expertise to key corporate decision makers.  Since we have represented and consulted on widely known Hospitality properties, our Clients have trusted Equiventure Capital to operate under very strict privacy rules to effectively achieve the Clients objectives without disturbing their operation.  Coupled with our private funding sources and direct relationships with major operators and developers, Equiventure Capital provides the Hospitality Industry with efficient and effective financing solutions.
		</p>
		<p>
		In sum, Equiventure Capital and our global source of direct lending partners can navigate complex financial transactions involving the most challenging projects. We chart an individual course of structured financing that is tailored to your needs. Whether your project is $2 Million dollars or a complex project exceeding hundreds of millions of dollars, Equiventure Capital will guide you in achieving your financial goal.    Equiventure Capital provides expert on-going financial advisory services that extend throughout all phases of a project.  For every project, the goal is to establish and implement a schedule of multiple financing solutions and benchmarks designed to reduce the cost of financing over the term of a project.  Ultimately, this strategy assures our Clients achieve the most efficient financing structure to enable them to successfully ride the capital financing wave of their future!
		</p>
		<br />
		
		
		
	</div>

	
	<?php include("footer.php"); ?>
	
	</div>

	<div id="belowfooter"></div>