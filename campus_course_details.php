

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<title>CodePen - Tablesorter Bootstrap LESS theme</title>
<link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>
<link rel='stylesheet' href='/sandbox/css/style_for_campus_course_details.css'>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
<h2>Campus Course Details</h2>


<br>
<br>
<table class="tablesorter-bootstrap">
<thead>
<tr>
<th>Name</th>
<th>Major</th>
<th class="filter-select filter-exact" data-placeholder="Pick a gender">Sex</th>
<th>English</th>
<th>Japanese</th>
<th>Calculus</th>
<th>Geometry</th></tr>
</thead>
<tfoot>
<tr>
<th>Name</th>
<th>Major</th>
<th>Sex</th>
<th>English</th>
<th>Japanese</th>
<th>Calculus</th>
<th>Geometry</th>
</tr>
</tfoot>
<tbody>
<tr><td>Student01</td><td>Languages</td><td>male</td><td>80</td><td>70</td><td>75</td><td>80</td></tr>
<tr><td>Student02</td><td>Mathematics</td><td>male</td><td>90</td><td>88</td><td>100</td><td>90</td></tr>
<tr><td>Student03</td><td>Languages</td><td>female</td><td>85</td><td>95</td><td>80</td><td>85</td></tr>
<tr><td>Student04</td><td>Languages</td><td>male</td><td>60</td><td>55</td><td>100</td><td>100</td></tr>
<tr><td>Student05</td><td>Languages</td><td>female</td><td>68</td><td>80</td><td>95</td><td>80</td></tr>
<tr><td>Student06</td><td>Mathematics</td><td>male</td><td>100</td><td>99</td><td>100</td><td>90</td></tr>
<tr><td>Student07</td><td>Mathematics</td><td>male</td><td>85</td><td>68</td><td>90</td><td>90</td></tr>
<tr><td>Student08</td><td>Languages</td><td>male</td><td>100</td><td>90</td><td>90</td><td>85</td></tr>
<tr><td>Student09</td><td>Mathematics</td><td>male</td><td>80</td><td>50</td><td>65</td><td>75</td></tr>
<tr><td>Student10</td><td>Languages</td><td>male</td><td>85</td><td>100</td><td>100</td><td>90</td></tr>
<tr><td>Student11</td><td>Languages</td><td>male</td><td>86</td><td>85</td><td>100</td><td>100</td></tr>
<tr><td>Student12</td><td>Mathematics</td><td>female</td><td>100</td><td>75</td><td>70</td><td>85</td></tr>
<tr><td>Student13</td><td>Languages</td><td>female</td><td>100</td><td>80</td><td>100</td><td>90</td></tr>
<tr><td>Student14</td><td>Languages</td><td>female</td><td>50</td><td>45</td><td>55</td><td>90</td></tr>
<tr><td>Student15</td><td>Languages</td><td>male</td><td>95</td><td>35</td><td>100</td><td>90</td></tr>
</tbody>
</table>
<style>body { margin: 10px; }</style>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-db44b196776521ea816683afab021f757616c80860d31da6232dedb8d7cc4862.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://mottie.github.io/tablesorter/js/jquery.tablesorter.js'></script>
<script src='https://mottie.github.io/tablesorter/js/jquery.tablesorter.widgets.js'></script>
<script src='https://mottie.github.io/tablesorter/addons/pager/jquery.tablesorter.pager.js'></script>
<script id="rendered-js">
var $table = $('table'),
process = false;

$('.error').click(function () {
  $.tablesorter.showError($table, 'This is the error row');
});

$('.process').click(function () {
  process = !process;
  $.tablesorter.isProcessing($table, process);
});

$('.sortable').click(function () {
  $table.
  find('.tablesorter-header:last').toggleClass('sorter-false').
  trigger('update');
});

$table.tablesorter({
  theme: 'bootstrap',
  headerTemplate: '{content} {icon}',
  sortList: [[0, 0], [1, 0], [2, 0]],
  widgets: ['zebra', 'columns', 'filter', 'uitheme'] });
//# sourceURL=pen.js
    </script>
</body>
</html>
