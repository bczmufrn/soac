<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'site/topic/000001',
        'locale' => 'en_US',
        'title' => 'Installation',
        'toc' => 'site/toc/000000',
        'key' => 'site.installation',
      ),
      'value' => '',
    ),
  ),
  'section' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
      ),
      'value' => '<p>Open Conference Systems is an open source application that can be freely downloaded and installed on nearly any desktop or server computer.</p>',
    ),
    1 => 
    array (
      'attributes' => 
      array (
        'title' => 'License',
      ),
      'value' => '<p>OCS is distributed under the terms of the <a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU General Public License</a>. A copy of the license terms for redistributing OCS code in original or modified form is included with the OCS download.</p>',
    ),
    2 => 
    array (
      'attributes' => 
      array (
        'title' => 'System Requirements',
      ),
      'value' => '<p>A server environment meeting the following requirements is recommended:</p>
		<ul>
			<li><a href="http://www.php.net/" target="_blank">PHP</a> >= 4.2.x</li>
			<li><a href="http://www.mysql.com/" target="_blank">MySQL</a> >= 3.23.23 (including 4.x) or <a href="http://www.postgresql.org/" target="_blank">PostgreSQL</a> >= 7.1 (including PostgreSQL 8.x)</li>
			<li><a href="http://httpd.apache.org/" target="_blank">Apache</a> >= 1.3.2x or >= 2.0.4x or Microsoft IIS 6+</li>
			<li>Operating system: Any OS that supports the above software, including <a href="http://www.linux.org/" target="_blank">Linux</a>, <a href="http://www.bsd.org/" target="_blank">BSD</a>, <a href="http://www.sun.com/" target="_blank">Solaris</a>, <a href="http://www.apple.com/" target="_blank">Mac OS X</a>, and <a href="http://www.microsoft.com/">Windows</a></li>
		</ul>
		<p>OCS has currently only been tested on MySQL and PostgreSQL, although other database management systems supported by <a href="http://adodb.sourceforge.net/" target="_blank">ADOdb</a> may work (in full or partially). Compatibility reports and/or code patches for alternative DBMSs are welcome.</p>',
    ),
    3 => 
    array (
      'attributes' => 
      array (
        'title' => 'Download',
      ),
      'value' => '<p>OCS can be downloaded from the Public Knowledge Project web site <a href="http://pkp.sfu.ca/ocs_download/" target="_blank"> OCS Download</a> page.</p>',
    ),
    4 => 
    array (
      'attributes' => 
      array (
        'title' => 'Installation',
      ),
      'value' => '<p>OCS comes with a web-based installation script that guides the system administrator through the installation process. Alternately, a command-line installation tool is available.</p>
		<ol>
			<li>
				Download the OCS archive.
			</li>
			<li>
				Decompress the OCS archive on your web server and place it in the desired location in your web documents tree:<br />
				<tt>$ tar -zxf ocs-2.*.tar.gz<br />
				$ mv ocs-* /var/www/myconference</tt>
			</li>
			<li>
				Make the following files and directories writable (i.e., using chown or chmod):<br />
				- config.inc.php (optional)<br />
				- public<br />
				- cache<br />
				- cache/t_cache<br />
				- cache/t_config<br />
				- cache/t_compile<br />
				- cache/_db
			</li>
			<li>
				Open a web browser to the location of your OCS installation (e.g., http://www.mydomain.com/myconference/) and follow the on-screen instructions to complete the install. See docs/README for more information on the installation process.
			</li>
		</ol>',
    ),
  ),
); ?>