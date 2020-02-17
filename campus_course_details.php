

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
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
<h2 align="center">Course Details</h2>


<br>
<br>
<table class="tablesorter-bootstrap">
<thead>
<tr>
<th>Student Name</th>
<th>Percentage</th>
<th class="filter-select filter-exact" data-placeholder="Pick course type">Gender</th>
<th>Address</th>
<th>Age</th>
<th>Contact</th>
<th>Application Date</th></tr>
</thead>
<tbody>
<tr><td>Student1</td><td>70</td><td>male</td><td>City1</td><td>70</td><td>75</td><td>80</td></tr>
<tr><td>Student2</td><td>60</td><td>female</td><td>City2</td><td>88</td><td>100</td><td>90</td></tr>
<tr><td>Student3</td><td>50</td><td>male</td><td>City3</td><td>95</td><td>80</td><td>85</td></tr>
<tr><td>Student4</td><td>88</td><td>female</td><td>City4</td><td>55</td><td>100</td><td>100</td></tr>
<tr><td>Student5</td><td>78</td><td>male</td><td>City5</td><td>80</td><td>95</td><td>80</td></tr>
<tr><td>Student6</td><td>44</td><td>female</td><td>City6</td><td>99</td><td>100</td><td>90</td></tr>
<tr><td>Student7</td><td>55</td><td>male</td><td>City7</td><td>68</td><td>90</td><td>90</td></tr>
<tr><td>Student8</td><td>74</td><td>female</td><td>City8</td><td>90</td><td>90</td><td>85</td></tr>
<tr><td>Student9</td><td>62</td><td>male</td><td>City9</td><td>50</td><td>65</td><td>75</td></tr>
<tr><td>Student10</td><td>74</td><td>female</td><td>City10</td><td>100</td><td>100</td><td>90</td></tr>
<tr><td>Student11</td><td>96</td><td>female</td><td>City11</td><td>85</td><td>100</td><td>100</td></tr>
<tr><td>Student12</td><td>74</td><td>female</td><td>City12</td><td>75</td><td>70</td><td>85</td></tr>
<tr><td>Student13</td><td>81</td><td>male</td><td>City13</td><td>80</td><td>100</td><td>90</td></tr>
<tr><td>Student14</td><td>80</td><td>male</td><td>City14</td><td>45</td><td>55</td><td>90</td></tr>
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
