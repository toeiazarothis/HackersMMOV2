<div class="container">
				<!-- /.row -->
		<div class="row animated fadeIn">
			<div class="col-sm-12">
				<h2><b>t!</b>Commands</h2>
				<hr class="content-titlehr">
				<p class="centered">All normal commands start with <b>t!</b> | All moderator commands start with <b>t@</b> | Type <b>t!help</b> in Discord to view commands from Discord.</p>
        <p class="centered">Some commands require the user to have Discord guild permissions. The required permission is displayed at each command.</p>
        <br />
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#basic">Basic <span class="badge">12</span></a></li>
            <li><a data-toggle="tab" href="#social">Social <span class="badge cmdbadge">11</span></a></li>
            <li><a data-toggle="tab" href="#funstuff">Fun <span class="badge cmdbadge">13</span></a></li>
            <li><a data-toggle="tab" href="#utilities">Utilities <span class="badge cmdbadge">10</span></a></li>
            <li><a data-toggle="tab" href="#animu">Animu <span class="badge cmdbadge">4</span></a></li>
            <li><a data-toggle="tab" href="#memes">Memes <span class="badge cmdbadge">1</span></a></li>
            <li><a data-toggle="tab" href="#nsfw">NSFW <span class="badge cmdbadgensfw">4</span></a></li>
          </ul>
          <div class="tab-content">
            <div id="basic" class="tab-pane fade in active">
              <table class="table table-bordered">
      					<thead>
      						<tr>
      							<th>Command</th>
      							<th>Description</th>
      							<th>Example</th>
      							<th>Aliases</th>
      						</tr>
      					</thead>
      					<tbody>
      						<tr>
      							<td>@Tatsumaki</td>
      							<td>Chat with Tatsumaki</td>
      							<td><code>@Tatsumaki hello</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!help [<i>command</i> ]</td>
      							<td>Displays a list of commands. Provide a command to get usage information & examples.</td>
      							<td><code>t!help</code><br /><code>t!help profile</code></td>
      							<td><code>t!h</code><br /><code>t!commands</code></td>
      						</tr>
                            <tr>
                                <td>t!ping</td>
      							<td>Checks if Tatsumaki is online.</td>
      							<td><code>t!ping</code></td>
      							<td></td>
                            </tr>
      						<tr>
      							<td>t!support</td>
      							<td>Posts a link to the Tatsumaki support server.</td>
      							<td><code>t!support</code></td>
      							<td><code>t!guild</code></td>
      						</tr>
      						<tr>
      							<td>t!changelog</td>
      							<td>Fetches Tatsumaki's changelogs from her support server.</td>
      							<td><code>t!changelog</code></td>
      							<td><code>t!changes</code><br /><code>t!updates</code><br /><code>t!changelogs</code></td>
      						</tr>
      						<tr>
      							<td>t!avatar &lt;[<i>user 1</i> ] [<i>user 2</i> ] [<i>user 3</i> ] [<i>user 4</i> ]&gt; &lt;server&gt;</td>
      							<td>Gets a user's avatar. Up to 4 users can be selected. Use the "server" flag to get the server's icon.</td>
      							<td><code>t!avatar</code><br /><code>t!avatar Rei Nicho Geil</code><br /><code>t!avatar server</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!server</td>
      							<td>Shows info about the current server such as server ID, roles, members, region, etc.</td>
      							<td><code>t!server</code></td>
      							<td><code>t!sinfo</code><br /><code>t!serverinfo</code></td>
      						</tr>
      						<tr>
      							<td>t!channel [<i>#channel</i> ] [<i>topic</i> ]</td>
      							<td>Shows info about the current channel such as channel ID. The command also displays notifications enabled, plugins disabled & whether persistence is disabled. Mention channels to get their info, or use the "topic" flag to get the channels topic.</td>
      							<td><code>t!channel</code><br /><code>t!channel topic</code><br /><code>t!channel #general</code><br /><code>t!channel #general topic</code></td>
      							<td><code>t!cinfo</code><br /><code>t!channelinfo</code></td>
      						</tr>
      						<tr>
      							<td>t!info [<i>user</i> ]</td>
      							<td>Shows info, such as ID and join date, about yourself or a user. </td>
      							<td><code>t!info</code><br /><code>t!info Roado</code></td>
      							<td><code>t!userinfo</code><br /><code>t!user</code><br /><code>t!whois</code></td>
      						</tr>
                  <tr>
      							<td>t!role [<i>@role</i> ]</td>
      							<td>Shows info about a guild role. Accepts name, mention or role id.</td>
      							<td><code>t!role Potatos</code><br /></td>
      							<td><code>t!roleinfo</code><br /><code>t!rinfo</code></td>
      						</tr>
      						<tr>
      							<td>t!shared [<i>user</i> ]</td>
      							<td>Shows which servers Tatsumaki shares with you or another user. This is limited to servers on the same shard.</td>
      							<td><code>t!shared</code><br /><code>t!shared David</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!usage &lt;command/server&gt; [<i>command</i> ]</td>
      							<td>Shows how many people used a command, globally or server-wide.</td>
      							<td><code>t!usage server dice</code><br /><code>t!usage profile</code></td>
      							<td><code>t!uses</code></td>
      						</tr>
      					</tbody>
      				</table>
            </div>
            <div id="social" class="tab-pane fade">
              <table class="table table-bordered">
      					<thead>
      						<tr>
      							<th>Command</th>
      							<th>Description</th>
      							<th>Example</th>
      							<th>Aliases</th>
      						</tr>
      					</thead>
      					<tbody>
      						<tr>
      							<td>t!profile [<i>@user</i> ]</td>
      							<td>View yours or someone else's customizable personal global profile card.</td>
      							<td><code>t!profile</code><br /><code>t!profile @David</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!rank [<i>@user</i> ]</td>
      							<td>View yours or someone else's server rank card.</td>
      							<td><code>t!rank</code><br /><code>t!rank @Pyraxo</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!top [<i>global</i>  | <i>server</i> ] [<i>page</i> ]</td>
      							<td>Display members with the most server score or global XP.</td>
      							<td><code>t!top</code><br /><code>t!top server</code><br /><code>t!top global 2</code></td>
      							<td><code>t!top10</code></td>
      						</tr>
      						<tr>
      							<td>t!dailies [<i>@user</i> ]</td>
      							<td>Get or award your daily credits. More credits will be given at random if awarded to someone else.</td>
      							<td><code>t!dailies</code><br /><code>t!dailies @Phoenix</code></td>
      							<td><code>t!daily</code></td>
      						</tr>
      						<tr>
      							<td>t!reputation [<i>@user</i> ]</td>
      							<td>Award someone a reputation point. Can only be used once every 24 hours. Leave blank to check reputation cooldown.</td>
      							<td><code>t!reputation @Falzar</code></td>
      							<td><code>t!rep</code></td>
      						</tr>
      						<tr>
      							<td>t!phonebook [<i>call</i>  | <i>list</i>  | <i>pickup</i>  | <i>decline</i>  | <i>hangup</i> ]</td>
      							<td>Allows for inter-server phone calls (text chat). You can call a random server or link up two servers.</td>
      							<td><code>t!phonebook</code><br /><code>t!phonebook call</code></td>
      							<td><code>t!pb</code></td>
      						</tr>
      						<tr>
      							<td><a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="31457141595e5f54535e5e5a">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script><br /><span class="label label-info perms">Manage Server</span></td>
      							<td>Opens the channel's phonebook management menu. Disable / enable random calls, add server codes for direct calls & manage the phonebook from this menu.</td>
      							<td><code><a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="4d390d3d252223282f222226">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></code></td>
      							<td><code><a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="e296a29280">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></code></td>
      						</tr>
      						<tr>
      							<td>t!credits [<i>user</i> ] [<i>amount</i> ]</td>
      							<td>Check your credit balance or give someone else some credits.</td>
      							<td><code>t!credits</code><br /><code>t!credits @Pisang 9001</code></td>
      							<td><code>t!credit</code></td>
      						</tr>
      						<tr>
      							<td>t!setinfo [<i>text</i> ]</td>
      							<td>Set the text shown on your profile info box. Maximum of 125 characters. To reset info box, do not include any info text. Your info box can also be configured on the profile dashboard.</td>
      							<td><code>t!setinfo This is my info box text!</code><br /><code>t!setinfo</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!settitle [<i>text</i> ]</td>
      							<td>Set your profile title text (shown below your name). Maximum of 23 characters. To reset your title, do not include any title text. Your title can also be configured on the profile dashboard.</td>
      							<td><code>t!settitle The Chicken Man</code><br /><code>t!setinfo</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!background</td>
      							<td>Posts a link to your profile dashboard where you can purchase & change your profile background.</td>
      							<td><code>t!background</code></td>
      							<td><code>t!backgrounds</code><br /><code>t!bg</code></td>
      						</tr>
      					</tbody>
      				</table>
            </div>
            <div id="funstuff" class="tab-pane fade">
              <table class="table table-bordered">
      					<thead>
      						<tr>
      							<th>Command</th>
      							<th>Description</th>
      							<th>Example</th>
      							<th>Aliases</th>
      						</tr>
      					</thead>
      					<tbody>
      						<tr>
      							<td>t!image <<i>subreddit </i>> [--nsfw] [--day | --week | --month | --year | --all]</td>
      							<td>Get a random image from Imgur. </td>
      							<td><code>t!image awwnime --month</code></td>
      							<td><code>t!imgur</code></td>
      						</tr>
      						<tr>
      							<td>t!dice [<i>(rolls)</i> d<i>(sides)</i> ]</td>
      							<td>Roll a dice with 6 sides or as specified.</td>
      							<td><code>t!dice</code><br /><code>t!dice 2d12</code></td>
      							<td><code>t!diceroll</code><br /><code>t!rolldice</code><br /><code>t!roll</code></td>
      						</tr>
      						<tr>
      							<td>t!choose &lt;<i>option </i>&gt; | &lt;<i>option </i>&gt; | [<i>option </i> ] | [ ... ]</td>
      							<td>Makes a choice for you.</td>
      							<td><code>t!choose Sleep | Discord</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!8ball [<i>question</i> ]</td>
      							<td>Ask the magic 8 ball a question.</td>
      							<td><code>t!8ball Is the 8ball magical?</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!coin</td>
      							<td>Flip a coin (or some coins).</td>
      							<td><code>t!coin</code><br /><code>t!coin 12</code></td>
      							<td><code>t!coinflip</code><br /><code>t!cointoss</code></td>
      						</tr>
      						<tr>
      							<td>t!rps [<i>rock</i> | <i>paper</i> | <i>scissors</i> ]</td>
      							<td>Rock, paper, scissors.</td>
      							<td><code>t!rps rock</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!numberfacts [<i>number</i> ]</td>
      							<td>Obtain facts about numbers.</td>
      							<td><code>t!numberfacts 42</code></td>
      							<td><code>t!numbers</code></td>
      						</tr>
      						<tr>
      							<td>t!catfacts</td>
      							<td>Catfacts! Obtain facts about cats.</td>
      							<td><code>t!catfacts</code></td>
      							<td><code>t!neko</code></td>
      						</tr>
      						<tr>
      							<td>t!fortune [<i>category</i> ]</td>
      							<td>Get a fortune from the following categories: all, computers, cookie, definitions, miscellaneous, people, platitudes, politics, science, and wisdom. By default wisdom is selected.</td>
      							<td><code>t!fortune cookie</code></td>
      							<td></td>
      						</tr>
                            <tr>
      							<td>t!cat</td>
      							<td>Gives you a random cat.</td>
      							<td><code>t!cat</code></td>
      							<td></td>
      						</tr>
                            <tr>
      							<td>t!cookie &lt;<i>@user </i>&gt;</td>
      							<td>Give someone a cookie.</td>
      							<td><code>t!cookie @David</code></td>
      							<td></td>
      						</tr>
                            <tr>
      							<td>t!psychopass &lt;<i>@user </i>&gt;</td>
      							<td>Have the Sibyl System check someone's crime coefficient.</td>
      							<td><code>t!psychopass @Lion</code></td>
      							<td><code>t!psycho</code></td>
      						</tr>
                            <tr>
      							<td>t!reverse &lt;<i>text </i>&gt;</td>
      							<td>Returns the input backwards.</td>
      							<td><code>t!reverse racecar</code></td>
      							<td></td>
      						</tr>
      					</tbody>
      				</table>
            </div>
            <div id="utilities" class="tab-pane fade">
              <table class="table  table-bordered">
      					<thead>
      						<tr>
      							<th>Command</th>
      							<th>Description</th>
      							<th>Example</th>
      							<th>Aliases</th>
      						</tr>
      					</thead>
      					<tbody>
      						<tr>
      							<td><a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="2b5f6b595858">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script> &lt;add | list | remove&gt;<br /><span class="label label-info perms">Manage Channels</span></td>
      							<td>Displays the RSS feed management menus. Subscribe, list and remove RSS feeds on channels.</td>
      							<td><code><a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="cbbf8bb9b8b8">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script> add</code><br /><code><a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="82f6c2f0f1f1">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script> list</code><br /><code><a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="a6d2e6d4d5d5">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script> remove</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!youtube &lt;<i>Search Terms </i>&gt;</td>
      							<td>Search and return YouTube videos.</td>
      							<td><code>t!youtube aussie man reviews</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!vote &lt;start | check | end&gt; [t:&lt;<i>topic</i> &gt;] | &lt;<i>option 1</i> &gt; | &lt;<i>option 2</i> &gt; | [ ... ]</td>
      							<td>Start a new vote, vote for an option or check a vote.</td>
      							<td><code>t!vote start t:Doge is laif | Yes | No</code><br /><code>t!vote 1</code><br /><code>t!vote check</code><br /><code>t!vote end</code></td>
      							<td><code>t!votes</code></td>
      						</tr>
      						<tr>
      							<td>t!urban &lt;<i>Search Terms </i>&gt;</td>
      							<td>Search and return Urban Dictionary definitions.</td>
      							<td><code>t!urban obama</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!strawpoll &lt;<i>option 1</i> &gt; | &lt;<i>option 2</i> &gt; | [ ... ]</td>
      							<td>Create a Strawpoll with multiple options.</td>
      							<td><code>t!strawpoll</code><br /><code>t!strawpoll chicken | dog | cat</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!wiki &lt;<i>Search Terms </i>&gt;</td>
      							<td>Search and return Wikipedia articles.</td>
      							<td><code>t!wiki chickens</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!stocks &lt;<i>Stock Symbol </i>&gt;</td>
      							<td>Provide a stock symbol to return information about that particular stock.</td>
      							<td><code>t!stocks AAPL</code></td>
      							<td><code>t!stock</code></td>
      						</tr>
      						<tr>
      							<td>t!weather &lt;City/City,Code&gt; or &lt;ZIP/ZIP,Code&gt;</td>
      							<td>Obtains the weather using openweathermap.</td>
      							<td><code>t!weather London</code><br /><code>t!weather 10016,NY</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!shorten &lt;Link URL&gt; [<i>Vanity URL </i>]</td>
      							<td>Shorten links with www.frid.li link shortener.</td>
      							<td><code>t!shorten www.google.com</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!todo [ add | remove | clear | list ]</td>
      							<td>Personal to-do list.</td>
      							<td><code>t!todo add Go outside</code><br /><code>t!todo remove</code><br /><code>t!todo clear</code><br /><code>t!todo list</code></td>
      							<td></td>
      						</tr>
      					</tbody>
      				</table>
            </div>
            <div id="animu" class="tab-pane fade">
              <table class="table  table-bordered">
      					<thead>
      						<tr>
      							<th>Command</th>
      							<th>Description</th>
      							<th>Example</th>
      							<th>Aliases</th>
      						</tr>
      					</thead>
      					<tbody>
      						<tr>
      							<td>t!anime &lt;<i>Search Terms </i>&gt;</td>
      							<td>Gets details of an anime from MAL.</td>
      							<td><code>t!anime Nagi no Asukara</code></td>
      							<td></td>
      						</tr>
                            <tr>
      							<td>t!manga &lt;<i>Search Terms </i>&gt;</td>
      							<td>Gets details of a manga from MAL.</td>
      							<td><code>t!manga Nana</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!schoolidol [<i>Idol name </i>]</td>
      							<td>Fetches LLSIF cards.</td>
      							<td><code>t!schoolidol Maki</code></td>
      							<td><code>t!sic</code></td>
      						</tr>
                            <tr>
      							<td>t!osu [ sig | profile | best | recent ]</td>
      							<td>Searches osu! profiles, plays and signatures.</td>
      							<td><code>t!osu</code><br /><code>t!osu sig Obama</code><br /><code>t!osu best shaneoyo</code></td>
      							<td></td>
      						</tr>
      					</tbody>
      				</table>
            </div>
            <div id="memes" class="tab-pane fade">
              <table class="table  table-bordered">
      					<thead>
      						<tr>
      							<th>Command</th>
      							<th>Description</th>
      							<th>Example</th>
      							<th>Aliases</th>
      						</tr>
      					</thead>
      					<tbody>
      						<tr>
      							<td>t!beautiful [<i>someone </i>]</td>
      							<td>This is beautiful.</td>
      							<td><code>t!beautiful</code><br /><code>t!beautiful @pyraxo</code></td>
      							<td><code>t!beauty</code></td>
      						</tr>
      					</tbody>
      				</table>
            </div>
            <div id="nsfw" class="tab-pane fade">
              <table class="table  table-bordered">
      					<thead>
      						<tr>
      							<th>Command</th>
      							<th>Description</th>
      							<th>Example</th>
      							<th>Aliases</th>
      						</tr>
      					</thead>
      					<tbody>
      						<tr>
      							<td>t!image <<i>subreddit</i> > --nsfw</td>
      							<td>Searches the subreddit for random NSFW images hosted by Imgur.</td>
      							<td><code>t!image gonewild --nsfw</code></td>
      							<td><code>t!imgur</code></td>
      						</tr>
      						<tr>
      							<td>t!gelbooru [<i>tag 1</i> ] [<i>tag 2</i> ] [ <i>...</i> ]</td>
      							<td>Searches the Gelbooru image board for random images. You can supply tags to narrow down your searches.</td>
      							<td><code>t!gelbooru</code><br /><code>t!gelbooru mushoku_tensei roxy_migurdia</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!yandere [<i>tag 1</i> ] [<i>tag 2</i> ] [ <i>...</i> ]</td>
      							<td>Searches the Yandere image board for random images. You can supply tags to narrow down your searches.</td>
      							<td><code>t!yandere</code><br /><code>t!yandere mushoku eris_greyrat</code></td>
      							<td></td>
      						</tr>
      						<tr>
      							<td>t!danbooru [<i>tag</i> ]</td>
      							<td>Searches the Danbooru image board for random images. You can supply up to 1 tag to narrow down your searches.</td>
      							<td><code>t!danbooru</code><br /><code>t!danbooru sylphiette_(mushoku_tensei)</code></td>
      							<td></td>
      						</tr>
      					</tbody>
      				</table>
            </div>
          </div>

        <!-- /.row -->
		<a href="#top" class="btn btn-primary" role="button" title="Click to return to the top" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
    </div>
    <!-- /.container -->
