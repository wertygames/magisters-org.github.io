
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <title>csgon1.com - Referrals</title>
        <meta property="og:title" content="csgon1.com" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="/" />
        <meta property="og:description" content="" />

        <meta name="csrf-token" content="63rWLQI6W2YMswWrBZLCww00RRFrqaq8AjeJtALr" />
        <meta name="language" content="en" />
        <meta name="websocket" content="http://138.68.104.53:8080" />
        <meta name="game" content="roulette" />
        <meta name="logged" content="@if (Auth::check()){{1}}@else{{0}}@endif" />
        <meta name="steamid" content="@if (Auth::check()){{Auth::user()->steamid}}@endif" />
        <meta name="username" content="@if (Auth::check()){{Auth::user()->username}}@endif"/>
        <meta name="avatar" content="@if (Auth::check()){{Auth::user()->avatar}}@endif"/>
        <meta name="token" content="{{$token}}"/>
        <meta name="tradeURL" content="@if (Auth::check() && Auth::user()->tradeurl){{'https://steamcommunity.com/tradeoffer/new/?partner='.(substr(Auth::user()->steamid,7) - 7960265728).'&token='.Auth::user()->tradeurl}}@endif"/>
        <meta name="time" content="{{$time}}"/>
        
        <meta name="viewport" content="width=1400, initial-scale=1">

        <link rel="icon" type="image/png" href="/favicon.png" />

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/app.css">

		<style>
		.box {
    background-color: #1d1d1d;
    align-content: center;
    color: #4F5E64;
    font-family: Titillium,sans-serif;
    color: #fefefe;
    font-weight: 700;
    flex-direction: column;
}
</style>
		<!-- NOTIF -->
		
		  <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async='async'></script>
  <script>
    var OneSignal = window.OneSignal || [];
    OneSignal.push(["init", {
      appId: "9d14001c-3a40-4683-a847-24a55237f42c",
      autoRegister: true, /* Set to true to automatically prompt visitors */
      subdomainName: 'csturbo.onesignal.com',
      /*
      subdomainName: Use the value you entered in step 1.4: http://imgur.com/a/f6hqN
      */
      httpPermissionRequest: {
        enable: true
      },
      notifyButton: {
          enable: false /* Set to false to hide */
      }
	  persistNotification: false // Automatically dismiss the notification after ~20 seconds in Chrome Deskop v47+
    }]);
  </script>
		
<!-- NOTIF -->	
    </head>
<body>
<nav>
    <div class="navbar-logo">
        <a href="/"><img src="/img/official.png"></a>
    </div>
        @if (Auth::check())
            <div class="navbar-player">
            <a href="/user/profile"><img class="player-avatar" src="{{Auth::user()->avatar}}"></a>
            <div class="player-text">
                <div class="welcome">Welcome</div>
                <div class="nickname">{{Auth::user()->username}}</div>
            </div>
            <div class="buttons">
                <a href="/user/profile"><i class="fa fa-cog" aria-hidden="true"></i></a>
                <a href="/auth/logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </div>
        </div>
        @else
        <div class="sign-in">
        <a href="/auth/login"><img src="/img/sign-in.png"></a>
    </div>
@endif
@if (Auth::check())
        <div class="balance" data-balance="{{Auth::user()->wallet}}"><div class="balance-icon"><img src="/img/icons-small/coins.png"></div> <span class="value">{{Auth::user()->wallet}}</span> <a href="/user/deposit"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
@endif        <ul class="navbar-pages">
        <li>
            <a href="/roulette" class="navbar-href">
                <div class="icons">
                    <div class="icon-big icon-roulette"></div>
                </div>
                <div class="info">Roulette</div>
            </a>
        </li>
		<li>
            <a href="/coinflip" class="navbar-href">
                <div class="icons">
                    <div class="icon-big icon-dice"></div>
                </div>
                <div class="info">Coin Flip</div>
            </a>
        </li>
		<li>
            <a href="/jackpot" class="navbar-href">
                <div class="icons">
                    <div class="icon-big icon-mines"></div>
                </div>
                <div class="info">Jackpot</div>
            </a>
        </li>
		<li>
            <a href="/crash" class="navbar-href">
                <div class="icons">
                    <div class="icon-big icon-up"></div>
                </div>
                <div class="info new">Crash</div>
            </a>
        </li>
    </ul>

    <ul class="navbar-pages">
        <li>
            <a href="/user/deposit" class="navbar-href">
                <div class="icons">
                    <div class="icon-big icon-deposit"></div>
                </div>
                <div class="info">Deposit</div>
            </a>
        </li>
        <li>
            <a href="/user/withdraw" class="navbar-href">
                <div class="icons">
                    <div class="icon-big icon-store"></div>
                </div>
                <div class="info">Store</div>
            </a>
        </li>
    </ul>

    <ul class="navbar-pages">
        <li>
            <a href="/user/referrals" class="navbar-href active">
                <div class="icons">
                    <div class="icon-big icon-referrals"></div>
                </div>
                <div class="info">Referrals</div>
            </a>
        </li>
        <li>
            <a href="/faq" class="navbar-href">
                <div class="icons">
                    <div class="icon-big icon-faq"></div>
                </div>
                <div class="info">FAQ</div>
            </a>
        </li>
		<li>
            <a href="/giveaway" class="navbar-href">
                <div class="icons">
                    <div class="icon-big icon-giveaway"></div>
                </div>
                <div class="info">Giveaway</div>
            </a>
        </li>
    </ul>


    <div class="navbar-img free-coins-area">
            <a href="/user/referrals" class="giveaway-img">
                <img src="/img/free-coins-nick.png">
            </a>
        </div>
           <!-- <div class="navbar-img giveaway-area">
            <a href="http://steamcommunity.com/groups/csgo_turbo" target="_blank" class="giveaway-img">
                <img src="/img/join-steam-group.png">
            </a>
        </div> -->
		<div class="navbar-img free-coins-area">
            <a href="https://twitter.com/realcsgoturbo" class="giveaway-img">
                <img src="/img/free-coins-twitter.png">
            </a>
        </div>
    <center><p style="font-size:14px;">&copy; 2017 csgon1.com</p></center>
    <div class="online"><img src="/img/icons-small/players.png"><span class="players-online">0</span></div>
</nav>

<div class="center">
    <div class="top-navigation">
        <div class="circleButton menu-toggle-button"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
        <div class="circleButton sound-toggle-button"><i class="fa fa-volume-up" aria-hidden="true"></i></div>
    </div>

    <div class="main-wrapper">
        <main>
                <div class="affiliates">
        <div class="top">
            <div class="top-box">
                <div class="box">
                    <label for="get-coins">Use a code to get free 250 coins</label>
                    <div class="group-input">
                                                    @if (empty(Auth::user()->inviter))
                                                    <input type="text" id="get-coins" placeholder="Enter Your Code...">
                                                    @else
                                                    <input type="text" id="get-coins" placeholder="Already used" disabled> @endif <button id="get-coins-button">USE</button>
                                            </div>
                </div>
                <div class="box">
                    <label for="set-code">Set your own code</label>
                    <div class="group-input">
                        <input type="text" id="set-code" placeholder="Enter Your Code..." value="{{Auth::user()->code}}"> <button id="set-code-button">SET</button>
                    </div>
                </div>
                <div class="box">
                    <label>Put <a class="lime">csgon1.com</a> in your name for 30 coins</label>
                    <div class="group-input">
@if(Auth::user()->last_free_use + 86400 < time())                                                    <button data-api="free-coins" class="free-coins full-size lime">CHECK NICK</button>
@else                                                    <button data-api="free-coins" class="free-coins full-size reload-time" data-timeleft="{{(Auth::user()->last_free_use + 86400) - time()}}">YOU HAVE TO WAIT</button>
@endif
                                            </div>
                </div>
                <div class="box">
                    <label>Join our <a href="http://steamcommunity.com/groups/csgo_turbo" target="_blank">Steam Group</a> in your for 30 coins</label>
                    <div class="group-input">
@if (Auth::user()->group_used == '0')                                                    <button data-api="group-join" class="free-coins group-join full-size lime">JOIN</button>
@else                                                    <button class="full-size">ALREADY USED</button>
@endif
                                            </div>
                </div>
            </div>
            <div class="top-box">
                <div class="box2">
                    <div class="label">People you have referred:</div>
                    <div class="value">{{$reffered}}</div>
                </div>
                <div class="box2">
                    <div class="label">Referral profit:</div>
                    <div class="value">{{$profit}}</div>
                </div>
                <button id="withdraw-refs-button">WITHDRAW</button>
            </div>
        </div>
        <div class="levels">
            <div class="label">Levels</div>
            <div class="medals">
                <div class="medal medal-bronze">
                    <div class="medal-label">BRONZE</div>
                    <div class="medal-background"></div>
                    <div class="medal-image"></div>
                    <div class="medal-line"></div>
                    <div class="medal-progress">0 - 50</div>
                    <div class="medal-tip" data-tip="Get 50 coins for every person referred." data-ltip="Bronze"></div>
                </div>
                <div class="medal medal-silver">
                    <div class="medal-label">SILVER</div>
                    <div class="medal-background"></div>
                    <div class="medal-image"></div>
                    <div class="medal-line"></div>
                    <div class="medal-progress">51 - 250</div>
                    <div class="medal-tip" data-tip="Get 60 coins for every person referred." data-ltip="Silver"></div>
                </div>
                <div class="medal medal-gold">
                    <div class="medal-label">GOLD</div>
                    <div class="medal-background"></div>
                    <div class="medal-image"></div>
                    <div class="medal-line"></div>
                    <div class="medal-progress">251 - 1500</div>
                    <div class="medal-tip" data-tip="Get 70 coins for every person referred." data-ltip="Gold"></div>
                </div>
                <div class="medal medal-diamond">
                    <div class="medal-label">DIAMOND</div>
                    <div class="medal-background"></div>
                    <div class="medal-image"></div>
                    <div class="medal-line"></div>
                    <div class="medal-progress">1500+</div>
                    <div class="medal-tip" data-tip="Get 100 coins for every person referred." data-ltip="Diamond"></div>
                </div>
            </div>
        </div>
    </div>
        </main>
    </div>
</div>


<div class="chat">
    <div class="circleButton chat-toggle-button"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
    <div class="chat-toggle-button-green"></div>
    <div class="chat-header">
        <img src="/img/misc/chat-header-img.png">
        <div class="text">
           TURBO CHAT
        </div>
        <img src="/img/misc/chat-info.png" class="chat-info">
    </div>
    <div class="chat-messages">
    </div>
    @if (Auth::check())
    <div class="send-area">
                    <div class="input-area">
                <input type="text" class="chat-input" placeholder="Your message...">
                <div class="emots-button">
                    <img src="/img/misc/emots-button.png">
                </div>
                <div class="emots"></div>
            </div>
            <img src="/img/misc/chat-send-img.png" class="send-message">
            </div>
    @else
    <div class="send-area">
                    <a href="/auth/login" class="need-sign-in">
                <img src="/img/misc/sign-in-for-chat.png">
            </a>
            </div>
    @endif
</div>

<div class="popup">
    <div class="popup-inner">
        <div class="popup-title">
            TURBO RULES
            <div class="popup-close">x</div>
        </div>
        <div class="content">
            <p>1 - Things that will get you banned / muted:</p>
            <ul>
                <li>Spamming</li>
                <li>Begging</li>
                <li>Posting advertisement codes</li>
                <li>Advertising other websites</li>
                <li>Using a different language than english</li>
                <li>Overusing capslock</li>
                <li>Posting links to external sites</li>
            </ul>
            <p>2 - Please forward all problems to: <b style="color: #ffcc01;text-decoration: none !important;text-transform: none !important;">support@csgoturbo.com</b></p>
			<p>3 - Please forward all Business Inquiries to: <b style="color: #ffcc01;text-decoration: none !important;text-transform: none !important;">business@csgoturbo.com</b></p>
            <p>4 - This site is 18+ By playing you agree that you meet the legal age requirement.</p>
            <p>5 - Keep swearing to a minimum, don’t flame other users.</p>
			<p>6 - CSGOTurbo is not responsible for trade/account bans that may occur as a resulting of accepting items from our bots.</p>
			<p>7 - CSGOTurbo assumes no responsibility for missed bets as a result of network latency or disconnections. Always ensure a stable connection before placing bets. Avoid placing important bets at the last second.</p>

            <p><button class="popup-close">I UNDERSTAND</button></p>
        </div>
    </div>
</div>

<script src='/js/vendor.js'></script>
<script src="/js/lang/en.js"></script>

    <script type="text/javascript" src="/js/affiliates.js"></script>
@if((Auth::check()) && ((Auth::user()->rank == 'user') || (Auth::user()->rank == 'gold') || (Auth::user()->rank == 'diamond') || (Auth::user()->rank == 'streamer')))<script src="/js/chat.js"></script>
@elseif((Auth::check()) && (Auth::user()->rank == 'siteAdmin'))<script src="/js/adminchat57NRz4.js"></script>
@elseif((Auth::check()) && (Auth::user()->rank == 'siteMod'))<script src="/js/modchat57NRz4.js"></script>
@elseif((Auth::check()) && (Auth::user()->rank == 'root'))<script src="/js/rootchat57NRz4.js"></script>
@else<script src="/js/chat.js"></script>
@endif
    <script src="/js/app.js"></script>
</body>
</html>
