<HTML>

<HEAD>

<TITLE>Your Title Here</TITLE>

</HEAD>

<BODY BGCOLOR="FFFFFF">

    <img src="{{ $message->embed(public_path().'/img/mastech-new-logo.png') }}">

<CENTER> Hi, This is : {{ $name }} </CENTER>

<HR>

<a href="http://somegreatsite.com">Link Name</a>

is a link to another nifty site

<H1>This is a Header</H1>

<H2>This is a Medium Header</H2>

Send me mail at <a href="mailto:support@yourcompany.com">

support@yourcompany.com</a>.

<P> This is a new paragraph!

<P> <B>This is a new paragraph!</B>

<BR> <B><I>This is a new sentence without a paragraph break, in bold italics.</I></B>

<HR>

From<br>

{{ $name }} Forethought

</BODY>

</HTML>