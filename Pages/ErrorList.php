<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include("$root/Templates/NavigationBar.html");?>
<!--These below lines are independent elements. Do not really need to copy to others.-->
<div class="row">
	<div class="col-xs-10 col-xs-offset-1">
		<center>
			<h1 id="frequentcode">This. Is. HTTP. <font color="red" title="/ˈerər/ a mistake. Synnonyms: mistake, inaccuracy, miscalculation, blunder, oversight">Errors.</font></h1>
			<h5>We direct you to this page to protect you from outside of Apache Server, cause there are many so many bugs out there. Data powered by <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes">Wikipedia.</a></h5>

            <style type="text/css"> .gsc-inline-block,.reset-box-sizing,.reset-box-sizing *,.reset-box-sizing :after,.reset-box-sizing :before{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}.gsc-input-box,.gsc-input-box-focus,.gsc-input-box-hover,.gsc-search-button,input.gsc-input{box-sizing:content-box;line-height:normal} </style>
            <script>(function () { var cx = '001930882093453736952:anbyactfo_s';var gcse = document.createElement('script');gcse.type = 'text/javascript';gcse.async = true;gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(gcse, s);})(); </script>
            <gcse:search></gcse:search>

            <script type="text/javascript">
 var imlocation = "/images";
 var currentdate = 0;
 var image_number = 0;
 function ImageArray (n) {
   this.length = n;
   for (var i =1; i <= n; i++) {
     this[i] = ' '
   }
 }
 image = new ImageArray(7)
 image[0] = 'web_error1.jpg'
 image[1] = 'web_error2.jpg'
 image[2] = 'web_error3.jpg'
 image[3] = 'web_error4.jpg'
 image[4] = 'web_error5.jpg'
 image[5] = 'web_error6.png'
 image[6] = 'web_error7.gif'
 var rand = 60/image.length
 function randomimage() {
 	currentdate = new Date()
 	image_number = currentdate.getSeconds()
 	image_number = Math.floor(image_number/rand)
 	return(image[image_number])
 }
 document.write("<img alt="Memes from 9GAG" class="img-rounded img-responsive img-raised" title="Come on. Dont you get the jokes?" src='" + imlocation + randomimage()+ "'>");
</script>
            <br>
            <h2 align="center">Frequent Error Code</h2>
            <div class="col-md-2"></div>

            <div class="col-xs-6 col-sm-3 col-md-1"> <a href="http://web.sinchronize.com/Error/ErrorList.html#code403" class="btn btn-primary btn-round" title="Click me please" data-container="body"> Error 403 </a></div>
           <div class="col-xs-6 col-sm-3 col-md-1"> <a href="http://web.sinchronize.com/Error/ErrorList.html#code404" class="btn btn-primary btn-round" title="Click me please" data-container="body"> Error 404 </a></div>
           <div class="col-xs-6 col-sm-3 col-md-1"> <a href="http://web.sinchronize.com/Error/ErrorList.html#code408" class="btn btn-primary btn-round" title="Click me please" data-container="body"> Error 408 </a></div>
           <div class="col-xs-6 col-sm-3 col-md-1"> <a href="http://web.sinchronize.com/Error/ErrorList.html#code409" class="btn btn-primary btn-round" title="Click me please" data-container="body"> Error 409 </a></div>
           <div class="col-xs-6 col-sm-3 col-md-1"> <a href="http://web.sinchronize.com/Error/ErrorList.html#code500" class="btn btn-primary btn-round" title="Click me please" data-container="body"> Error 500 </a></div>
           <div class="col-xs-6 col-sm-3 col-md-1"> <a href="http://web.sinchronize.com/Error/ErrorList.html#code502" class="btn btn-primary btn-round" title="Click me please" data-container="body"> Error 502 </a></div>
           <div class="col-xs-6 col-sm-3 col-md-1"> <a href="http://web.sinchronize.com/Error/ErrorList.html#code503" class="btn btn-primary btn-round" title="Click me please" data-container="body"> Error 503 </a></div>
           <div class="col-xs-6 col-sm-3 col-md-1"> <a href="http://web.sinchronize.com/Error/ErrorList.html#code504" class="btn btn-primary btn-round" title="Click me please" data-container="body"> Error 504 </a></div>
           <div class="col-md-2"></div>

       </center>
   </div>
</div>

<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<h1 align="center">4xx Client Error</h1>

		<p align="justify">The 4xx class of status code is intended for situations in which the client seems to have erred. Except when responding to a HEAD request, the server should include an entity containing an explanation of the error situation, and whether it is a temporary or permanent condition. These status codes are applicable to any request method. User agents should display any included entity to the user.</p>

    <div class="col-xs-12 col-sm-6">
			<h3 id="code400">400 Bad Request</h3>
			<p>The server cannot or will not process the request due to an apparent client error (e.g., malformed request syntax, too large size, invalid request message framing, or deceptive request routing).</p>

			<h3 id="code401">401 Unauthorized (RFC 7235)</h3>
			<p>Similar to 403 Forbidden, but specifically for use when authentication is required and has failed or has not yet been provided. The response must include a WWW-Authenticate header field containing a challenge applicable to the requested resource. 401 semantically means "unauthenticated", i.e. the user does not have the necessary credentials. Note: Some sites issue HTTP 401 when an IP address is banned from the website (usually the website domain) and that specific address is refused permission to access a website.</p>

			<h3 id="code402">402 Payment Required</h3>
			<p>Reserved for future use. The original intention was that this code might be used as part of some form of digital cash or micropayment scheme, but that has not happened, and this code is not usually used. Google Developers API uses this status if a particular developer has exceeded the daily limit on requests.</p>

			<h3 id="code403">403 Forbidden</h3>
			<p>The request was a valid request, but the server is refusing to respond to it. The user might be logged in but does not have the necessary permissions for the resource.</p>

			<h3 id="code404">404 Not Found</h3>
			<p>The requested resource could not be found but may be available in the future. Subsequent requests by the client are permissible.</p>

			<h3 id="code405">405 Method Not Allowed</h3>
			<p>A request method is not supported for the requested resource; for example, a GET request on a form which requires data to be presented via POST, or a PUT request on a read-only resource.</p>

			<h3 id="code406">406 Not Acceptable</h3>
			<p>The requested resource is capable of generating only content not acceptable according to the Accept headers sent in the request.</p>

			<h3 id="code407">407 Proxy Authentication Required (RFC 7235)</h3>
			<p>The client must first authenticate itself with the proxy.</p>

			<h3 id="code408">408 Request Timeout</h3>
			<p>The server timed out waiting for the request. According to HTTP specifications: "The client did not produce a request within the time that the server was prepared to wait. The client MAY repeat the request without modifications at any later time."</p>

			<h3 id="code409">409 Conflict</h3>
			<p>Indicates that the request could not be processed because of conflict in the request, such as an edit conflict between multiple simultaneous updates.</p>

			<h3 id="code410">410 Gone</h3>
			<p>Indicates that the resource requested is no longer available and will not be available again. This should be used when a resource has been intentionally removed and the resource should be purged. Upon receiving a 410 status code, the client should not request the resource in the future. Clients such as search engines should remove the resource from their indices. Most use cases do not require clients and search engines to purge the resource, and a "404 Not Found" may be used instead.</p>

			<h3 id="code411">411 Length Required</h3>
			<p>The request did not specify the length of its content, which is required by the requested resource.</p>

			<h3 id="code412">412 Precondition Failed (RFC 7232)</h3>
			<p>The server does not meet one of the preconditions that the requester put on the request.</p>

		</div>

		<div class="col-xs-12 col-sm-6" align="right">
			<h3 id="code413">413 Payload Too Large (RFC 7231)</h3>
			<p>The request is larger than the server is willing or able to process. Previously called "Request Entity Too Large".</p>

			<h3 id="code414">414 URI Too Long (RFC 7231)</h3>
			<p>The URI provided was too long for the server to process. Often the result of too much data being encoded as a query-string of a GET request, in which case it should be converted to a POST request.[44] Called "Request-URI Too Long" previously.</p>

			<h3 id="code415">415 Unsupported Media Type</h3>
			<p>The request entity has a media type which the server or resource does not support. For example, the client uploads an image as image/svg+xml, but the server requires that images use a different format.</p>

			<h3 id="code416">416 Range Not Satisfiable (RFC 7233)</h3>
			<p>The client has asked for a portion of the file (byte serving), but the server cannot supply that portion. For example, if the client asked for a part of the file that lies beyond the end of the file.[46] Called "Requested Range Not Satisfiable" previously.</p>

			<h3 id="code417">417 Expectation Failed</h3>
			<p>The server cannot meet the requirements of the Expect request-header field.</p>

			<h3 id="code418">418 I'm a teapot (RFC 2324)</h3>
			<p>This code was defined in 1998 as one of the traditional IETF April Fools' jokes, in RFC 2324, Hyper Text Coffee Pot Control Protocol, and is not expected to be implemented by actual HTTP servers. The RFC specifies this code should be returned by teapots requested to brew coffee.[49] This HTTP status is used as an easter egg in some websites, including Google.com.</p>

			<h3 id="code421">421 Misdirected Request (RFC 7540)</h3>
			<p>The request was directed at a server that is not able to produce a response (for example because a connection reuse).</p>

			<h3 id="code422">422 Unprocessable Entity (WebDAV; RFC 4918)</h3>
			<p>The request was well-formed but was unable to be followed due to semantic errors.</p>

			<h3 id="code423">423 Locked (WebDAV; RFC 4918)</h3>
			<p>The resource that is being accessed is locked.</p>

			<h3 id="code424">424 Failed Dependency (WebDAV; RFC 4918)</h3>
			<p>The request failed due to failure of a previous request (e.g., a PROPPATCH).</p>

			<h3 id="code426">426 Upgrade Required</h3>
			<p>The client should switch to a different protocol such as TLS/1.0, given in the Upgrade header field.</p>

			<h3 id="code428">428 Precondition Required (RFC 6585)</h3>
			<p>The origin server requires the request to be conditional. Intended to prevent "the 'lost update' problem, where a client GETs a resource's state, modifies it, and PUTs it back to the server, when meanwhile a third party has modified the state on the server, leading to a conflict."</p>

			<h3 id="code429">429 Too Many Requests (RFC 6585)</h3>
			<p>The user has sent too many requests in a given amount of time. Intended for use with rate-limiting schemes.</p>

			<h3 id="code431">431 Request Header Fields Too Large (RFC 6585)</h3>
			<p>The server is unwilling to process the request because either an individual header field, or all the header fields collectively, are too large.</p>

			<h3 id="code451">451 Unavailable For Legal Reasons</h3>
			<p>A server operator has received a legal demand to deny access to a resource or to a set of resources that includes the requested resource. The code 451 was chosen as a reference to the novel Fahrenheit 451.</p>
		</div>
	</div>
</div>

<center><a href="http://web.sinchronize.com/Error/ErrorList.html#frequentcode" class="btn btn-primary btn-round" title="Click to go back to the top" data-container="body"> Return to top </a></center>

<br></br>

<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<h1 align="center">5xx Server Error</h1>

		<p align="justify">
			The server failed to fulfill an apparently valid request.
			Response status codes beginning with the digit "5" indicate cases in which the server is aware that it has encountered an error or is otherwise incapable of performing the request. Except when responding to a HEAD request, the server should include an entity containing an explanation of the error situation, and indicate whether it is a temporary or permanent condition. Likewise, user agents should display any included entity to the user. These response codes are applicable to any request method.
		</p>

		<hr></hr>

		<div class="col-xs-12 col-sm-6">
			<h3 id="code500">500 Internal Server Error</h3>
			<p>A generic error message, given when an unexpected condition was encountered and no more specific message is suitable.</p>

			<h3 id="code501">501 Not Implemented</h3>
			<p>The server either does not recognize the request method, or it lacks the ability to fulfill the request. Usually this implies future availability (e.g., a new feature of a web-service API).</p>

			<h3 id="code502">502 Bad Gateway</h3>
			<p>The server was acting as a gateway or proxy and received an invalid response from the upstream server.</p>

			<h3 id="code503">503 Service Unavailable</h3>
			<p>The server is currently unavailable (because it is overloaded or down for maintenance). Generally, this is a temporary state.</p>

			<h3 id="code504">504 Gateway Timeout</h3>
			<p>The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.</p>

			<h3 id="code505">505 HTTP Version Not Supported</h3>
			<p>The server does not support the HTTP protocol version used in the request.</p>
		</div>

		<div class="col-xs-12 col-sm-6" align="right">
			<h3 id="code506">506 Variant Also Negotiates (RFC 2295)</h3>
			<p>Transparent content negotiation for the request results in a circular reference.</p>

			<h3 id="code507">507 Insufficient Storage (WebDAV; RFC 4918)</h3>
			<p>The server is unable to store the representation needed to complete the request.</p>

			<h3 id="code508">508 Loop Detected (WebDAV; RFC 5842)</h3>
			<p>The server detected an infinite loop while processing the request (sent in lieu of 208 Already Reported).</p>

			<h3 id="code510">510 Not Extended (RFC 2774)</h3>
			<p>Further extensions to the request are required for the server to fulfill it.</p>

			<h3 id="code511">511 Network Authentication Required (RFC 6585)</h3>
			<p>The client needs to authenticate to gain network access. Intended for use by intercepting proxies used to control access to the network (e.g., "captive portals" used to require agreement to Terms of Service before granting full Internet access via a Wi-Fi hotspot).</p>
		</div>
	</div>
</div>
<center><a href="http://web.sinchronize.com/Error/ErrorList.html#frequentcode" class="btn btn-primary btn-round" title="Click to go back to the top" data-container="body"> Return to top </a></center>

<!-- Footer -->
<br>
<hr>
<br>

<footer><?php include("Templates/FooterBar.html");?></footer>
