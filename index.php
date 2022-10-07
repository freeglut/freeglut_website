<?php
require("template.php");

# Now set the title of the page:
setPageTitle("About");

# Make the header.
generateHeader($_SERVER['PHP_SELF']);
?>
<div class="img-right">
	<img src="images/chessdemo.png" alt="chess demo"/><br/>
	GLUT's "Chess" demo<br/>
	running with freeglut.
</div>

<p></p>

<div class="textheader">What?</div>

<p>freeglut is a free-software/open-source alternative to the OpenGL Utility
Toolkit (GLUT) library. GLUT was originally written by Mark Kilgard to support
the sample programs in the second edition OpenGL 'RedBook'. Since then, GLUT has
been used in a wide variety of practical applications because it is simple,
widely available and highly portable.</p>

<p>GLUT (and hence freeglut) takes care of all the system-specific chores
required for creating windows, initializing OpenGL contexts, and handling input
events, to allow for trully portable OpenGL programs.</p>

<p>freeglut is released under the X-Consortium license.</p>

<div class="textheader">Why?</div>

<p>The original GLUT library seems to have been abandoned with the most recent
version (3.7) dating back to August 1998. Its license does not allow anyone to
distribute modified library code. This is really unfortunate, since GLUT is
getting old and really needs improvement. Also, GLUT's license is incompatible
with some software distributions (e.g., XFree86).</p>

<div class="textheader">Who?</div>

<p>freeglut was originally written by Pawel W. Olszta with contributions from
Andreas Umbach and Steve Baker.</p>

<p>John F. Fay, John Tsiombikas, and Diederick C. Niehorster are the current
maintainers of the freeglut project.</p>

<div class="textheader">When?</div>

<p>Pawel started freeglut development on December 1st, 1999. The project is now
virtually a 100% replacement for the original GLUT with only a few departures
(such as the abandonment of SGI-specific features such as the Dials&amp;Buttons
box and Dynamic Video Resolution) and a shrinking set of bugs.</p>

<p>freeglut adds some additional features over the basic GLUT functionality,
such as a larger set of predefined objects to use, the ability to run single
iterations of the event loop, or exit from it gracefully, mousewheel input
callbacks, optional OpenGL core/compatibility profile context creation,
multitouch/multi-pointer input, and support for a larger and growing set of
platforms, being just some of them.</p>

<div class="textheader"><a name="download"></a>Help out!</div>

<p>We are looking for developers to help out with further work on the Android
and BlackBerry 10 ports. Furthermore, ports to Cocoa on OSX, and maybe even
Wayland are planned, along with some enhancements to the API and implementation.</p>

<p>See <a href="progress.php">here</a> for an overview of the major points
on our todo list. For more information about helping out, see the
<a href="help.php">Help Out page</a> and
<a href="http://lists.sourceforge.net/lists/listinfo/freeglut-developer">join</a>
the <a href="mailto:freeglut-developer@lists.sourceforge.net">freeglut-developer</a>
mailing list.</p>

<p>The <a href="https://github.com/FreeGLUTProject/freeglut">freeglut source code repository</a>
is now hosted on github. So you can also send us pull requests or report bugs
through the <em>github issues</em> system if you prefer. However lengthy discussion
on potential design issues for large contributions are best suited to the mailing list.</p>

<div class="textheader"><a name="download"></a>Downloads...</div>
<p>Below are file links for the freeglut project. README files are included. Have fun!</p>

<div class="indent">
	<div class="textheader">Stable Releases</div>
	<p>
		Stable releases are available on our
		<a href="https://github.com/FreeGLUTProject/freeglut/releases">releases page on github</a>,
		where you can find more information about each release. All releases are
		also mirrored on the
		<a href="https://sourceforge.net/projects/freeglut/files/">old downloads page on sourceforge</a>.
	</p>

	<ul>
		<li>
			<a href="https://github.com/FreeGLUTProject/freeglut/releases/download/v3.4.0/freeglut-3.4.0.tar.gz">freeglut 3.4.0</a>
			(<a href="http://prdownloads.sourceforge.net/freeglut/freeglut-3.4.0.tar.gz?download">sourceforge mirror</a>)
			[<i>Released: 7 October 2022</i>]
		</li>
		<li>
			<a href="https://github.com/FreeGLUTProject/freeglut/releases/download/v3.2.2/freeglut-3.2.2.tar.gz">freeglut 3.2.2</a>
			(<a href="http://prdownloads.sourceforge.net/freeglut/freeglut-3.2.2.tar.gz?download">sourceforge mirror</a>)
			[<i>Released: 6 February 2022</i>]
		</li>
		<li>
			<a href="https://github.com/FreeGLUTProject/freeglut/releases/download/v3.2.1/freeglut-3.2.1.tar.gz">freeglut 3.2.1</a>
			(<a href="http://prdownloads.sourceforge.net/freeglut/freeglut-3.2.1.tar.gz?download">sourceforge mirror</a>)
			[<i>Released: 29 September 2019</i>]
		</li>
		<li>
			<a href="https://github.com/FreeGLUTProject/freeglut/releases/download/v3.2.0/freeglut-3.2.0.tar.gz">freeglut 3.2.0</a>
			(<a href="http://prdownloads.sourceforge.net/freeglut/freeglut-3.2.0.tar.gz?download">sourceforge mirror</a>)
			[<i>Released: 16 September 2019</i>]
		</li>
		<li>
			<a href="https://github.com/FreeGLUTProject/freeglut/releases/download/v3.0.0/freeglut-3.0.0.tar.gz">freeglut 3.0.0</a>
			(<a href="http://prdownloads.sourceforge.net/freeglut/freeglut-3.0.0.tar.gz?download">sourceforge mirror</a>)
			[<i>Released: 7 March 2015</i>]
		</li>
		<li>
			<a href="https://github.com/FreeGLUTProject/freeglut/releases/download/v2.8.1/freeglut-2.8.1.tar.gz">freeglut 2.8.1</a>
			(<a href="http://prdownloads.sourceforge.net/freeglut/freeglut-2.8.1.tar.gz?download">sourceforge mirror</a>)
			[<i>Released: 5 April 2013</i>]
		</li>
		<li>
			<a href="https://github.com/FreeGLUTProject/freeglut/releases/download/v2.8.0/freeglut-2.8.0.tar.gz">freeglut 2.8.0</a>
			(<a href="http://prdownloads.sourceforge.net/freeglut/freeglut-2.8.0.tar.gz?download">sourceforge mirror</a>)
			[<i>Released: 2 January 2012</i>]
		</li>
		<li>
			<a href="https://github.com/FreeGLUTProject/freeglut/releases/download/v2.6.0/freeglut-2.6.0.tar.gz">freeglut 2.6.0</a>
			(<a href="http://prdownloads.sourceforge.net/freeglut/freeglut-2.6.0.tar.gz?download">sourceforge mirror</a>)
			[<i>Released: 27 November 2009</i>]
		</li>
		<li>
			<a href="https://github.com/FreeGLUTProject/freeglut/releases/download/v2.4.0/freeglut-2.4.0.tar.gz">freeglut 2.4.0</a>
			(<a href="http://prdownloads.sourceforge.net/freeglut/freeglut-2.4.0.tar.gz?download">sourceforge mirror</a>)
			[<i>Released: 9 June 2005</i>]
		</li>
		<li>
			<a href="https://github.com/FreeGLUTProject/freeglut/releases/download/v2.2.0/freeglut-2.2.0.tar.gz">freeglut 2.2.0</a>
			(<a href="http://prdownloads.sourceforge.net/freeglut/freeglut-2.2.0.tar.gz?download">sourceforge mirror</a>)
			[<i>Released: 12 December 2003</i>]
		</li>
		<li>
			<a href="https://github.com/FreeGLUTProject/freeglut/releases/download/v2.0.1/freeglut-2.0.1.tar.gz">freeglut 2.0.1</a>
			(<a href="http://prdownloads.sourceforge.net/freeglut/freeglut-2.0.1.tar.gz?download">sourceforge mirror</a>)
			[<i>Released: 23 October 2003</i>]
		</li>
	</ul>

	<div class="textheader">Pre-Compiled Packages</div>

	<p>The freeglut project does not distribute pre-compiled or otherwise system-specific packages for freeglut.
	We only release and support freeglut in source code form as listed above.
	However, most free software package distributions
	include some version of freeglut, which might provide a more convenient way to
	obtain and use freeglut. Here's a necessarily woefully incomplete list of such
	packaging efforts for your system:</p>

	<ul>
		<li>GNU/Linux distributions such as Debian, Arch, Ubuntu, RedHat and so on,
			all distribute some version of freeglut. See your system documentation
			on how to install it. On Debian and its derivatives it's: <tt>apt install freeglut3-dev</tt>.</li>

		<li>FreeBSD includes freeglut in its <a href="https://www.freshports.org/graphics/freeglut">ports system</a>.
			<a href="http://ftp.netbsd.org/pub/pkgsrc/current/pkgsrc/graphics/freeglut/index.html">as does NetBSD</a>.</li>

		<li>Windows users using the msys2/mingw system can install freeglut with
			the command: <tt>pacman -S mingw-w64-x86_64-freeglut</tt> for the 64bit version,
			or can use <tt>pacman -sS freeglut</tt> too see all available variants.</li>

		<li>MacOS&nbsp;X users can use the <a href="https://brew.sh/">homebrew</a>
			package manager to install freeglut with the command: <tt>brew install freeglut</tt>.</li>

		<li>Another option for windows users is
			<a href="http://www.transmissionzero.co.uk/software/freeglut-devel/">Martin Payne's Windows binaries (MSVC and MinGW)</a></li>
	</ul>

	<p>If you have problems with these packages, please contact their maintainers,
		we probably can't help.</p>

	<p>Also if you can't find a suitable package for your system, don't panic;
		building freeglut from source is very easy, just follow the instructions in
		<tt>README.cmake</tt> in the freeglut source.</p>
	
	<div class="textheader">Current Source Code</div>
	<p>You can always download the absolute latest available freeglut source code
	from our <a href="https://github.com/FreeGLUTProject/freeglut">github repository</a>.
	Freeglut is a mature project, and the github HEAD is usually quite stable.</p>

	<p>To grab a copy of the repository using git, use the command:
		<tt>git clone https://github.com/FreeGLUTProject/freeglut</tt>.</p>

	<p>Alternatively you can download a
		<a href="https://github.com/FreeGLUTProject/freeglut/archive/refs/heads/master.zip">snapshot of the latest revision</a>.</p>

</div>

<div class="textheader">Questions?</div>
<p>Don't be afraid to ask for help.</p>
<p>Send freeglut related questions to the appropriate freeglut mailing list:</p>

<ul>
	<li><a href="mailto:freeglut-developer@lists.sourceforge.net">freeglut-developer</a> [<a href="http://lists.sourceforge.net/lists/listinfo/freeglut-developer">Subscribe</a>],</li>
	<li><a href="mailto:freeglut-announce@lists.sourceforge.net">freeglut-announce</a> [<a href="http://lists.sourceforge.net/lists/listinfo/freeglut-announce">Subscribe</a>], and</li>
	<li><a href="mailto:freeglut-bugs@lists.sourceforge.net">freeglut-bugs</a> [<a href="http://lists.sourceforge.net/lists/listinfo/freeglut-bugs">Subscribe</a>]</li>
</ul>

<p>Please note that <a
href="http://sourceforge.net/p/freeglut/mailman/?source=navbar">you must
subscribe before you can post</a> to our mailing lists. Sorry for the
inconvenience.</p>


<?php generateFooter(); ?>
