<?php
require("template.php");

# Now set the title of the page:
setPageTitle("How You Can Help");

# Make the header.
generateHeader($_SERVER['PHP_SELF']);
?>
<div class="img-right">
<img src="images/OGL.png" alt="OpenGL" /><br/>
This is OpenGL at its finest.
</div>

<div class="textheader">This is better than GLUT.</div>
<p>freeglut started out as a GLUT clone, but now it's something much
better than that. It's a GLUT replacement. Here are the features you
have wanted -- and if you have ideas for more, share them (see below),
or fork our <a href="https://github.com/freeglut/freeglut">github
repository</a> and implement them! freeglut is under continuous
development.

<div class="textheader">Everyone can help</div>
<p>
Free software projects depend on the community around them for their growth. 
It's by contributions that truly wonderful pieces of open and free software come to be.
Contributions can be nearly anything.  The point is involvement!</p>

<p>Examples:
<ul>
	<li>Use freeglut in your projects!</li>
	<li>Tell us what you like.</li>
	<li>Tell us what you'd change.</li>
	<li><a href="https://github.com/freeglut/freeglut/issues">Report bugs.</a></li>
	<li>Write documentation.</li>
	<li>Spread the word about the project.</li>
	<li><a href="http://lists.sourceforge.net/lists/listinfo/freeglut-developer">Join</a> our development mailing list.</li>
	<li>If you changed or added a feature, create
		<a href="https://github.com/freeglut/freeglut/pull">a pull request on github</a>,
		or send us a patch on the mailing list -- others might benefit from your work!</li>
</ul></p>

<p>
But simply, become involved!
The project is not just software, it's the people that contribute, too.
</p>

<div class="textheader"><a name="svn"></a>Getting the latest source code</div>
<p>To get the most up to date development copy of freeglut, use the following command:</p>

<pre>
git clone https://github.com/freeglut/freeglut
</pre>

<?php generateFooter(); ?>
