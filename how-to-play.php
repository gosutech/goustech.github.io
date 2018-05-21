<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <meta name="title" content="POMN | Proof of Masternodes">
<meta name="description" content="Earn 15% of your referral's deposit when they use your Masternode!">
    <meta name="author" content="POMN"><meta name="twitter:card" content="summary_large_image"><meta name="twitter:site" content="@POMN"><meta property="og:type" content="website"><meta property="og:site_name" content="POMN | POMN | Proof of Masternodes"><meta property="og:title" content="POMN | Proof of Masternodes"><meta property="og:description" content="Earn 15% of your referral's deposit when they use your Masternode!"><meta property="og:image" content="https://pomn.co/opengraph.jpg"><meta property="og:url" content="https://pomn.co/"><meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">
    <title>POMN | Proof of Masternodes</title>

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <!-- Semantic UI -->
    <link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css">
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>
    <script src="js/common.js"></script>
    <script type="text/javascript">
	function getCookie(name) {
    		var dc = document.cookie;
    		var prefix = name + "=";
    		var begin = dc.indexOf("; " + prefix);
    
		if (begin == -1) {
        		begin = dc.indexOf(prefix);
        		if (begin != 0) return null;
    		}
    		else
    		{
        		begin += 2;
        		var end = document.cookie.indexOf(";", begin);
        		if (end == -1) {
        		end = dc.length;
        	}
    		}
    	
		return decodeURI(dc.substring(begin + prefix.length, end));
	} 

	var url_string = window.location.href;
	var url = new URL(url_string);
	var theCookie = "masternode=" + url.searchParams.get("masternode");
	
	if (url.searchParams.get("masternode") !== null) {
		var toSet = "masternode=" + url.searchParams.get("masternode");
		document.cookie=theCookie;	
	} else {

		var refCookie = getCookie("masternode");

		if (refCookie === null) {
			console.log("Ref cookie was null. Setting to default.");
			document.cookie = "masternode=0x0x0000000000000000000000000000000000000000";
		} else {
			// do nothing if the cookie is already set and there is no new mnode link	
		}
	}
    </script>

    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/token_sale.css">

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W37GJPF');</script>
<!-- End Google Tag Manager -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-70457474-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-70457474-1');
</script>


</head>

<body class="lang_us home">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W37GJPF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
    <a class="item" href="https://pomn.co/">Home</a>
    <a class="item" href="https://pomn.co/dashboard">My Coins</a>
    <a class="item" href="https://etherscan.io/address/0x351544927a64a458a87a91c33718487098873b87">Contract</a>
    <a class="item" href="/">How To Play</a>
    <a class="item" href="https://etherscan.io/address/0x351544927a64a458a87a91c33718487098873b87">Smart Contract</a>
</div>

<!-- Following Menu -->
<div class="ui large top fixed hidden menu inverted">
    <div class="ui container">
        <a class="toc item">
            <i class="sidebar icon"></i>
        </a>
        <a href="/" class="logo header item">
            <img src="../images/minilogo.png">
        </a>
        <a class="item" href="https://pomn.co/dashboard">My Coins</a>
	<a class="item" href="#">Contract</a>
        <a class="item" href="/">How To Play</a>
        <div class="right menu">
            <div class="social-bits">
                <a href="https://discord.gg/wqVSmxd" target="_blank">
                    <i class="fab fa-discord"
                       style="color:white"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Page Contents -->
<div class="pusher">
    <div class="ui masthead vertical center aligned segment">
        <div class="ui container main-menu">
            <div class="ui large secondary top inverted menu">
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>
                <a class="item" href="https://pomn.co/dashboard">My Coins</a>
		<a class="item" href="https://etherscan.io/address/0x351544927a64a458a87a91c33718487098873b87">Contract</a>
                <a class="item" href="/">How To Play</a>

                <div class="right item">
                    <!-- Social Icons -->
                    <div class="social-bits">
                        <a href="https://discord.gg/wqVSmxd" target="_blank">
                            <i class="fab fa-discord"
                               style="color:white"></i></a>
                    </div>

                    <!-- Language Selector -->
                    <div class="ui inline dropdown lang-selector">
                        <a href="#" class="text">
                            <i class="us flag"></i>
                        </a>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <a href="/" class="item text"><i class="us flag"></i> English (US)</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jumbotron -->
        <div class="ui text container jumbotron">
            <img width="350" height="350" class="logo" src="../images/servermain.gif" alt="POMN">
            <h2>Earn <b><u>15%</u></b> of the total purchase when someone uses your Masternode!</h2>
            <a href="https://pomn.co/dashboard" class="ui huge primary button">Get Some Coins<i class="right arrow icon"></i></a>
            <a href="https://etherscan.io/address/0x351544927a64a458a87a91c33718487098873b87"
               class="ui huge default button">Smart Contract</a>
        </div>

    </div>

<div class="faq">
	    <div class="ui container">
	        <h1 class="ui header inverted center aligned">Installation of Meta Mask</h1>	
		<div class="ui segment">
		    <h4><center>Set Up MetaMask</center></h4>
		    <p>Using Chrome or Firefox, install <a href="https://metamask.io" target="_blank" style="margin-left:20px;" >
		    		<img src="https://pomn.co/images/metamask.png" style="vertical-align: bottom;"/>
		    	</a>. <br />


<br />
<strong><center>Follow the following steps using this <a href="https://www.youtube.com/watch?v=-uJjfn4wizE" target+"_blank">installation video</a>.</center></strong><br />
<center><iframe width="560" height="315" src="https://www.youtube.com/embed/-uJjfn4wizE?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center> <br />
 <br />
1.) Create your metamask account password and then store your 12 seed words. <br /> 


<h4><center>Fund MetaMask with Coinbase account</center></h4>
2.) Click 'BUY' button<br />
3.) Make sure 'Coinbase' is selected and click 'Continue to Coinbase'<br />
4.) Enter USD amount of ETH you would like to purchase and have sent to your MetaMask.<br />
5.) Enter your email address you use with coinbase and click 'Continue'<br />
6.) Enter your Password and click 'Continue'<br />
7.) Enter authorization code, if applicable<br />
8.) Select Payment Method<br />
9.) Click the Green 'Buy' button to finalize your purchase.  Your ETH will be transferred automagically to your MetaMask. <br /> 

<h3><center>OR</center></h3>

<h4><center>Fund with another account</center></h4>
2.) Open MetaMask, click the '...' icon, and select 'Copy address to clipboard' .<br />
3.) Go to where you currently have ETH (Binance, Gemini, etc.) and find the 'Send' or 'Transfer' feature for your wallet.<br />
4.) Transfer Ethereum to MetaMmask address.<br />
</p>
		</div>
	    </div>
	</div>
	
	<div class="faq">
	    <div class="ui container">
	        <h1 class="ui header inverted center aligned">Installation of Trust Wallet</h1>	
		<div class="ui segment">
		    <h4><center>Set Up Trust Wallet</center></h4>
		    <p>1.) Using your mobile, download and install <a href="https://trustwalletapp.com/" target="_blank" style="margin-left:20px;">
		    		<img src="https://pomn.co/images/trust-wallet.png" style="vertical-align: bottom;"/>
		    	</a>. <br />


<br />
<strong><center>Follow the following steps using this <a href="https://www.youtube.com/watch?v=3QMxQ9P8nAY" target+"_blank">installation/setup video</a>. </center></strong><br /> 
<center><iframe width="560" height="313px" src="https://www.youtube.com/embed/3QMxQ9P8nAY?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>

<h4><center>Fund with another account</center></h4>
2.) Open Trust Wallet, click the wallet icon, click 'Recieve', and select 'Copy wallet address'.<br />
3.) Go to where you currently have ETH (Binance, Gemini, etc.) and find the 'Send' or 'Transfer' feature for your wallet.<br />
4.) Transfer Ethereum to Trust Wallet address.<br />
</p>
		</div>
		</div>
	</div>
	<div class="faq">
	    <div class="ui container">
	        <h1 class="ui header inverted center aligned">Buying POMN</h1>	
		<div class="ui segment">
		    <h4><center>Using the Dashboard</center></h4>
		    <p>1.) After logging into your MetaMask or Trust Wallet account, navigate to your <a href="https://pomn.co/dashboard" target="_blank">Dashboard</a>. <br />



2.) Scroll down to 'Buy POMN' and enter the amount of ETH you wish to spend above the "Buy POMN button".<br /> 
3.) Click 'Buy POMN' button.<br />
4.) MetaMask or Trust Wallet will then prompt you to authorize the transaction and assign GWEI (satoshi for ETH) for Gas (transaction speed fee).<br />
</p>
		</div>
		</div>
	</div>
	<div class="faq">
	    <div class="ui container">
	        <h1 class="ui header inverted center aligned">Selling POMN (not recommended)</h1>	
		<div class="ui segment">
		    <h4><center>Using the Dashboard</center></h4>
		    <p>1.) After logging into your MetaMask or Trust Wallet account, navigate to your <a href="https://pomn.co/dashboard" target="_blank">Dashboard</a>. <br />
			2.) Scroll down to 'Sell Your POMN' and enter the amount of POMN you wish to sell.<br /> 
			3.) Click 'Sell Your POMN' button.<br />
			4.) MetaMask or Trust Wallet will then prompt you to authorize the transaction and assign GWEI (satoshi for ETH) for Gas (transaction speed fee).<br />
			5.) Any ETH from selling POMN is placed into your Rewards.
			</p>
		</div>
		</div>
	</div>
	<div class="faq">
	    <div class="ui container">
	        <h1 class="ui header inverted center aligned">Withdrawing Rewards</h1>	
		<div class="ui segment">
		    <h4><center>Using the Dashboard</center></h4>
		    <p>1.) After logging into your MetaMask or Trust Wallet account, navigate to our <a href="https://pomn.co/dashboard" target="_blank">Dashboard</a>. <br />
			2.) Scroll down to 'Withdraw' and click the 'Withdraw' button.<br /> 
			3.) MetaMask or Trust Wallet will then prompt you to authorize the transaction and assign GWEI (satoshi for ETH) for Gas (transaction speed fee).<br />
			</p>
		</div>
		</div>
	</div>
</div>	
<div class="ui inverted vertical footer segment">
    <div class="ui container">
        <div class="ui stackable inverted divided equal height stackable grid">
            <div class="three wide column">
                <div class="ui inverted link list">
                    <a class="item" href="/">Home</a>
                    <a class="item" href="/dashboard">My Coins</a>
                    <a class="item" href="https://pomn.co/how-to-play">How To Play</a>
                    <a class="item" href="#">Smart Contract</a>
                </div>
            </div>

            <div class="three wide column">
                <h4 class="ui inverted header">Social</h4>
                <div class="ui inverted link list">
                    <a href="https://discord.gg/wqVSmxd" target="_blank" class="item">Discord</a>
                </div>
            </div>

            <div class="ten wide column">
                <h4 class="ui inverted header">Disclaimer</h4>
                <p>
                    This game is intended for entertainment purposes only. Do not send any ETH you do not want to or cannot afford to lose. There is zero guarantee that you will make ETH playing this game. And more importantly, zero guarantee that you won't lose any ETH you play with. Play at your own risk and do not attempt to pressure friends, family or strangers into playing too. In fact, you shouldn't even play yourself.                </p>
            </div>
        </div>
    </div>
</div>

</div>

</body>

</html>

