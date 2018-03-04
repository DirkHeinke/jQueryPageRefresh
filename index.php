<?php
echo "<html><body>";
echo "<h1>Part 1</h1>";
echo "<p>Time 1: <span id='t1'>" . date("H:i:s") . "</span></p>";

echo "<h1>Part 2</h1>";
echo "<p>Time 2: " . date("H:i:s") . "</p>";

?>

<script
  src='https://code.jquery.com/jquery-3.3.1.min.js'
  integrity='sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8='
  crossorigin='anonymous'></script>
<script>

 setInterval(update, 1000);
 
 function update() {
   $.get(window.location, function(data) {
     console.log(data);
     var data2 = $($.parseHTML(data));
     $('#t1').replaceWith(data2.find('#t1'));
 })
 }
</script>

<hr>
<!-- The following is not functional and only to output the scripts content to html -->

<p>PHP Content:</p>
<pre>
<?php
echo htmlspecialchars("
<?php
echo \"<html><body>\";
echo \"<h1>Part 1</h1>\";
echo \"<p>Time 1: <span id='t1'>\" . date(\"H:i:s\") . \"</span></p>\";

echo \"<h1>Part 2</h1>\";
echo \"<p>Time 2: \" . date(\"H:i:s\") . \"</p>\";

?>

<script
  src='https://code.jquery.com/jquery-3.3.1.min.js'
  integrity='sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8='
  crossorigin='anonymous'></script>
<script>

 setInterval(update, 1000);
 
 function update() {
   $.get(window.location, function(data) {
     console.log(data);
     var data2 = $($.parseHTML(data));
     $('#t1').replaceWith(data2.find('#t1'));
 })
 }
</script>

<hr>

<p>PHP Content:</p>
<pre>
<?php
echo htmlspecialchars(
[...]
)
?>
</pre>

</body></html>
")
?>
</pre>

</body></html>
