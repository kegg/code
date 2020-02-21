<?php

$title = "February 20, 2020";

?>
<?php include "../header.php"?>

<p><a href="/2020/20200219.php">Yesterday</a> we talked about
  the basic Hello World example, today we're talking about dates.</p>

<p>Every day has a date. It can be formatted in seveal different ways.</p>

<p>Here are the ways Java can format dates:</p>

<table border=0 cellspacing=3 cellpadding=0 summary="Chart shows pattern letters, date/time component, presentation, and examples.">
    <caption>Found at: <a href="https://docs.oracle.com/javase/7/docs/api/java/text/SimpleDateFormat.html">Java DOCS</a></caption>
     <tr bgcolor="#ccccff">
         <th align=left>Letter
         <th align=left>Date or Time Component
         <th align=left>Presentation
         <th align=left>Examples
     <tr>
         <td><code>G</code></td>
         <td>Era designator</td>
         <td>Text</td>
         <td><code>AD</code></td>
     <tr bgcolor="#eeeeff">
         <td><code>y</code></td>
         <td>Year</td>
         <td>Year</td>
         <td><code>1996</code>; <code>96</code></td>
     <tr>
         <td><code>Y</code></td>
         <td>Week year</td>
         <td>Year</td>
         <td><code>2009</code>; <code>09</code></td>
     <tr bgcolor="#eeeeff">
         <td><code>M</code></td>
         <td>Month in year</td>
         <td>Month</td>
         <td><code>July</code>; <code>Jul</code>; <code>07</code></td>
     <tr>
         <td><code>w</code></td>
         <td>Week in year</td>
         <td>Number</td>
         <td><code>27</code></td>
     <tr bgcolor="#eeeeff">
         <td><code>W</code></td>
         <td>Week in month</td>
         <td>Number</td>
         <td><code>2</code></td>
     <tr>
         <td><code>D</code></td>
         <td>Day in year</td>
         <td>Number</td>
         <td><code>189</code></td>
     <tr bgcolor="#eeeeff">
         <td><code>d</code></td>
         <td>Day in month</td>
         <td>Number</td>
         <td><code>10</code></td>
     <tr>
         <td><code>F</code></td>
         <td>Day of week in month</td>
         <td>Number</td>
         <td><code>2</code></td>
     <tr bgcolor="#eeeeff">
         <td><code>E</code></td>
         <td>Day name in week</td>
         <td>Text</td>
         <td><code>Tuesday</code>; <code>Tue</code></td>
     <tr>
         <td><code>u</code></td>
         <td>Day number of week (1 = Monday, ..., 7 = Sunday)</td>
         <td>Number</td>
         <td><code>1</code></td>
     <tr bgcolor="#eeeeff">
         <td><code>a</code></td>
         <td>Am/pm marker</td>
         <td>Text</td>
         <td><code>PM</code></td>
     <tr>
         <td><code>H</code></td>
         <td>Hour in day (0-23)</td>
         <td>Number</td>
         <td><code>0</code></td>
     <tr bgcolor="#eeeeff">
         <td><code>k</code></td>
         <td>Hour in day (1-24)</td>
         <td>Number</td>
         <td><code>24</code></td>
     <tr>
         <td><code>K</code></td>
         <td>Hour in am/pm (0-11)</td>
         <td>Number</td>
         <td><code>0</code></td>
     <tr bgcolor="#eeeeff">
         <td><code>h</code></td>
         <td>Hour in am/pm (1-12)</td>
         <td>Number</td>
         <td><code>12</code></td>
     <tr>
         <td><code>m</code></td>
         <td>Minute in hour</td>
         <td>Number</td>
         <td><code>30</code></td>
     <tr bgcolor="#eeeeff">
         <td><code>s</code></td>
         <td>Second in minute</td>
         <td>Number</td>
         <td><code>55</code></td>
     <tr>
         <td><code>S</code></td>
         <td>Millisecond</td>
         <td>Number</td>
         <td><code>978</code></td>
     <tr bgcolor="#eeeeff">
         <td><code>z</code></td>
         <td>Time zone</td>
         <td>General time zone</td>
         <td><code>Pacific Standard Time</code>; <code>PST</code>; <code>GMT-08:00</code></td>
     <tr>
         <td><code>Z</code></td>
         <td>Time zone</td>
         <td>RFC 822 time zone</td>
         <td><code>-0800</code></td>
     <tr bgcolor="#eeeeff">
         <td><code>X</code></td>
         <td>Time zone</td>
         <td>ISO 8601 time zone</td>
         <td><code>-08</code>; <code>-0800</code>;  <code>-08:00</code></td>
 </table>

<p>To use the date format, we can do the following:</p>

<pre>
  import java.util.Date;
  import java.text.SimpleDateFormat;

  public class TestDate {

    public static void main(String[] args) {
      Date d = new Date();
      SimpleDateFormat sdf = new SimpleDateFormat("MM/dd/yyyy");
      String output = sdf.format(d);
      System.out.println(output);
    }
  }
</pre>

<p>This will output todays date in the <code>MM/dd/yyyy</code> format.</p>

<p>By putting any of the above characters in the <code>SimpleDateFormat</code>
  constructor, you can output the date in any of the allowed formats.</p>

<?php include "../footer.php"?>
