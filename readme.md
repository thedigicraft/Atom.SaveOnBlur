<p>THIS SCRIPT IS NOT FINISHED YET :-)</p>
<h1>Atom.SaveOn.Blur</h1>

<p>This is a script that will allow you to easily turn a basic form field (input, textarea) into an field that will save once the user has clicked away from the field.</p>

<h3>This script uses:</h3>

<blockquote>
	<ul>
		<li>HTML</li>
		<li>CSS</li>
		<li>Javascript/jQuery</li>
		<li>PHP</li>
		<li>MySQL</li>
		<li>AJAX</li>
	</ul>
</blockquote>

<h3>With Optional:</h3>

<blockquote>
	<ul>
		<li>Twitter Bootstrap 3</li>
		<li>Font Awesome 4</li>
	</ul>
</blockquote>


<h2>Examples:</h2>

<h3>Simple usage:</h3>
<p>We take advantage of the new data- attributes in HTML5.  We use them to pass the data that we need in order to quickly run UPDATE queries via AJAX.</p>

```html
<input data-id="id" data-label="Name of the field" data-db="table-field">
```

<h3>Breakdown:</h3>

<h4>data-id: ``` data-id="id" ```</h4>
<p>This attribute is used to store the id, primary key, or whatever you may be using to identify which record to run the UPDATE query on (or to save).</p>


<h4>data-label: ``` data-label="Name of the field" ```</h4>
<p>This attribute is used to give a label to what you are saving. This is primarily used for notification purposes.  The notification is good to assure the user that their data was in fact saved successfully.</p>

<h4>data-db: ``` data-db="table-field" ```</h4>


<p>More soon....</p>