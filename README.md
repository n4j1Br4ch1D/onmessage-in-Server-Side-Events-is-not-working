# onmessage-in-Server-Side-Events-is-not-working
onmessage in SSE(Server Side Events) is not working. This is a potential solution. check simplest demo.
<hr />
The Problem is With ServerSideCode:<br />
1-make sure you add correct headers such as : header("Content-Type: text/event-stream");.<br />
2-make sure you set your response to data like this: 'data: your response text'.<br />
3-make sure you add a line break to the end of response text twise like this: "\n\n";.<br />
 <i>https://github.com/n4j1Br4ch1D</i>
