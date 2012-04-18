<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pre-printed QR Code Labels, Made Simple</title>
<link rel="stylesheet" type="text/css" href="/css/style.css"/>
<link rel="stylesheet" type="text/css" href="/css/gds_css_framework.css"/>
<link rel="stylesheet" type="text/css" href="/css/colorbox.css"/>
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/cufon-yui.js"></script>
<script type="text/javascript" src="/js/Qlassik_Medium_500.font.js"></script>
<script type="text/javascript" src="/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="/js/jquery.cycle.js"></script>
<script type="text/javascript" src="/js/rotator.js"></script>
<script type="text/javascript" src="/js/custom.js"></script>
<meta name="description" content="Walkby.it offers pre-printed QR code labels, removing the hassle of printing your own, and managing the technology for you." />
</head>

<body>
<!--Begin of header-->
<div id="header">
	<div class="header_background">
    	<div class="header_top_background">
        	<div class="container_wrap">
            	<div class="two_third">
                	<!--Begin of logo-->
                	<h1><a href="index.html">walkby.it</a></h1>
                </div><!--End of two_third-->
                <div class="one_third">
                	<div id="phone-number" class="font">
                    	Call us: 877-331-8431
                    </div><!--End of phone-number-->
                </div><!--End of one_third-->	
                <div class="clear">&nbsp;</div>
            </div><!--End of container_wrap-->
        </div><!--header_top_background-->
        
<!--Begin of product container section-->
<div id="product">
	<div class="container_wrap">
    	<div class="half_width">
        	<div id="product_container">
            	<!--Shadow-->
            	<div class="product_highlight_shadow_half"></div>
                <div class="product_highlight_container">
                	<!--Video embed-->
                	<!--<iframe src="http://player.vimeo.com/video/25466480" width="440" height="231" frameborder="0"></iframe>-->
                	<img src="/images/label-preview.jpg"/>
                </div><!--End of product-highlight_container-->
            </div><!--End of product_container-->
        </div><!--End of half_width-->
        
        <!--Begin of header roatator-->
        <div class="half_width">
        	<div class="script">
        	<div id="rotator">
            <ul>
            	<li>
                	<div class="rotator-content">
                    	<h2 class="font">QR Codes Made<span> Simple.</span></h2>
                        <p>Walkby.it QR Labels take care of the high-tech, and let you focus on your campaign. Buy our labels, stick them on whatever you want, and let people interact as they <strong>"walk by it"</strong>. Our QR Labels will increase interest in your cause, and easily let you track how many people have scanned them.</p>
                        <span class="font mobile-site">Need a mobile website?</span> <a target="_blank" href="http://landr.co" class="button blue font">Get One Here</a>
                    </div><!--End of rotator-content-->
                </li>
                </ul>
            </div><!--End of rotator-->
            </div><!--End of script-->
            <noscript><div class="no-script"><p>Please Enable Your Javascript to view this content</p></div></noscript>
        </div><!--End of half_width-->
        <div class="clear">&nbsp;</div>
    	</div><!--End of container-wrap-->
	</div><!--End of prodcut-->
</div><!--End of header_background-->
</div><!--End of header-->

<!--Begin of Feature-->
<div id="features-about">
	<div class="container_wrap">
    	<div class="half_width">
        	<h3 class="font step-one">Buy the labels.</h3>
            <p>We know that you are <strong>busy and on a budget</strong>, that is why we get out all orders on the same day if they are made before 2pm est, with <span style="text-decoration:underline;">free shipping</span> to anywhere in the United States.</p>
            <img class="step-graphic" src="/images/step-1-graphic.png"/>
            <h3 class="font step-two">Point your labels.</h3>
            <p>Once you have your labels, you will need to point them to a destination. Once you do this, when your label is scanned, it will automatically redirect there.</p>
            <img class="step-graphic" src="/images/step-2-graphic.png"/>
            <h3 class="font step-three">Track your campaign.</h3>
            <p>Walkby.it offers a simple way to track how many visits each label is getting. Also, as long as you have your pin, you can update the destination at anytime.</p>
        </div><!--End of half_width-->
        <div class="half_width">
        	<h3 style="padding:10px;" class="font"><span>Got Labels?</span> Get them pointed.</h3>
        	<?php
        	  if(!empty($notification)) {
        	    echo '<div class="'.$notification['type'].'">'.$notification['message'].'</div>';
        	  }
        	?>
          
          <div class="clear">&nbsp;</div>
          <div class="point-labels">
          
            <?= form_open() ?>
              <span class="font point-label">Your Label</span>
              <div class="walkbyit-visual"></div><input maxlength="5" class="extension-input" type="text" name="extension"/>
              <div class="clear">&nbsp;</div>
              <br>
              <span class="font point-label">Your Pin</span>
              <input maxlength="7" class="pin-input" type="text" name="pin"/>
              <div class="clear">&nbsp;</div>
              <br>
              <span class="font point-label">Your Destination</span>
              <input type="text" name="destination"/>
              <div class="clear">&nbsp;</div>
              <br>
              <input type="submit" class="submit" value=""/>
              <div class="clear">&nbsp;</div>
            </form>
          
          </div>
          <br>
        <div class="cntdivider">&nbsp;</div>
        
        <!--Begin of About Lander Screenshot-->
        <h3 class="font no-padding">Examples</h3>
        <div style="margin-top:10px;" class="screenshot-thumbs">
        	<ul class="screenshot">
            	<li>
                <a class='screenshot' href="/images/gallery/walkbyit-ex1-large.jpg" title="">
						      <img src="/images/gallery/walkbyit-ex1.jpg" alt="Place Your Work Here!" width="195" height="90" />
						    </a>
              </li>
            	<li>
                <a class='screenshot' href="/images/gallery/walkbyit-ex2-large.jpg" title="">
						      <img src="/images/gallery/walkbyit-ex2.jpg" alt="Place Your Work Here!" width="195" height="90" />
						    </a>
              </li>
              <li>
                <a class='screenshot' href="/images/gallery/walkbyit-ex3-large.jpg" title="">
						      <img src="/images/gallery/walkbyit-ex3.jpg" alt="Place Your Work Here!" width="195" height="90" />
						    </a>
              </li>
              <li>
                <a class='screenshot' href="/images/gallery/walkbyit-ex4-large.jpg" title="">
						      <img src="/images/gallery/walkbyit-ex4.jpg" alt="Place Your Work Here!" width="195" height="90" />
						    </a>
              </li>
            </ul>
            </div><!--End of screenshot-thumbs-->
        </div><!--End of half_wdith-->
        <div class="clear">&nbsp;</div>
        <div class="cntdivider">&nbsp;</div>
    </div><!--End of container_wrap-->
</div><!--End of features and about-->

<!--Pricing table-->
<div id="pricing-table">
	<div class="container_wrap">
    	<div class="full_width">
        	<div id="pricing">
            	<div class="firstprice">
                	<div class="inner">
                    	<div class="price-title font">10 QR Labels</div>
                        <div class="price-price font">$6<span>99</span></div>
                        <div class="price-features">
                          
                        </div><!--End of price-features-->
                        <div class="price-buy"><a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=matt@builtbyprime.com&item_name=10%20Walkby.it%20Labels&item_number=Walkbyit-Labels-10&amount=6.99" class="button-buy font">Buy Now</a></div>
                    </div><!--End of inner-->
                </div><!--End of firstprice-->
                <div class="bestprice">
                	<div class="inner">
                    	<div class="price-title font">120 QR Labels</div>
                        <div class="price-price font">$49<span>99</span></div>
                        <div class="price-features">

                        </div><!--End of price-features-->
						<div class="price-buy"><a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=matt@builtbyprime.com&item_name=120%20Walkby.it%20Labels&item_number=Walkbyit-Labels-120&amount=49.99" class="button-buy font">Buy Now</a></div>
                    </div><!--End of inner-->
                </div><!--End of bestprice-->
                <div class="lastprice">
                	<div class="inner">
                    	<div class="price-title font">60 QR Labels</div>
                        <div class="price-price font">$29<span>99</span></div>
                        <div class="price-features">

                        </div><!--End of price-features-->
                        
						<div class="price-buy"><a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=matt@builtbyprime.com&item_name=60%20Walkby.it%20Labels&item_number=Walkbyit-Labels-60&amount=29.99" class="button-buy font">Buy Now</a></div>
            
						
                    </div><!--End of inner-->
                </div><!--End of lastprice-->
            </div><!--End of pricing-->
            <div class="clear">&nbsp;</div>
            <br>
            <div style="text-align:center;color:#999;">*Labels come in sheets of 10, each sheet has a separate pin.</div>
        </div><!--End of full_width-->
        <div class="clear">&nbsp;</div>
        <div class="cntdivider">&nbsp;</div>
    </div><!--End of container_wrap-->
</div><!--End of pricing-table-->

<!--More Feature-->
<div id="More-feature">
	<div class="container_wrap">
    	<div class="half_width">
        <h3 class="font marg no-padding">FAQ</h3>
        <p><strong>Do I have to point <em>each</em> individual label to the website I want?</strong></p>
        <p>Nope, each sheet of labels comes with a pin number. You will point each sheet of labels to a specific location, and of course can point all your sheets to the same location.</p>
        <p><strong>I have 3 different campaigns, how many labels do I need?</strong></p>
        <p>Since each sheet of 10 labels has it's own pin number, you would need a minimum of 3 sheets (30 labels) if you plan on using the labels for 3 different destinations.</p>
        <p><strong>I might need something custom, can you do that?</strong></p>
        <p>Absolutely. We are happy to make adjustments to the types of labels we provide, or the method with which we deliver them. Please contact us for details.</p>
        </div><!--End of half width-->
        <div class="half_width">
        	<h3 class="font support-icon">Still have <span>Questions?</span></h3>
            <p>We are dedicated to providing answers to all your questions. If you have any questions about the labels, the technology, or need some campaign tips, please give us a call or email.</p>
            <div class="support">
              <h3 class="font">877-331-8431</h3>
              <div class="clear">&nbsp;</div>
              <span class="font">or</span>
              <div class="clear">&nbsp;</div>
              <a href="mailto:contact@walkby.it"><h3 style="color:#29aae1;" class="font">contact@walkby.it</h3></a>
            </div>
            <div class="cntdivider">&nbsp;</div>
            <div class="testimonial">
            <blockquote>Increasingly, mobile smart phones and tablets are shifting our attention away from our desktop and laptop computers to our mobile devices. As consumers access the Internet from these devices, marketers need to be focused on finding shortcuts for quicker and easier entry points.<strong>Stephanie Moss, True Moss Communications</strong></blockquote>
            </div><!--End of testimonial-->
        </div><!--End of half_width-->
        <div class="clear">&nbsp;</div>
        <div class="cntdivider">&nbsp;</div>
    </div><!--End of container_wrap-->
</div><!--End of more-feature-->

<!--Begin of footer-->
<div id="footer">
	<div class="footer_background marg">
    	<div class="container_wrap">
        	<div class="two_third">
            	<div class="footer_copyright">
                	<span>&copy;Copyright Walkby.it 2011</span>
                </div><!--End of footer_copyright-->
            </div><!--End of two_third-->
            <div class="one_third">
            	<ul class="social">
                	<li><a href="http://builtbyprime.com"><img src="/images/prime-logo.png" height="31" width="79" alt="Prime Web and Mobile Development" /></a></li>
                </ul>
            </div><!--End of one_third-->
            <div class="clear">&nbsp;</div>
        </div><!--End of container_wrap-->
    </div><!--End of footer_background-->
</div><!--End of footer-->
<script type="text/javascript">
	Cufon.replace('.font', {hover: true,fontFamily:'Qlassik Medium'});<!--//['.font' class name]-->
</script>
</body>
</html>
