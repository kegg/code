<?php

$title = "March 28, 2020";

?>
<?php include "../header.php"?>

<p>A property file is a map of keys and values. It's stored in a file.</p>

<p>We can create a property file by doing the following:</p>

<pre>
  import java.io.FileNotFoundException;
  import java.io.FileOutputStream;
  import java.io.IOException;
  import java.util.Properties;

  public class Property {

    public static void main(String[] args)
      throws FileNotFoundException, IOException {
      Properties props = new Properties();
      props.put("one", "1");
      props.put("two", "2");
      props.store(new FileOutputStream("test.properties"),
        "any comment here");
    }

  }
</pre>

Running the above code, we get the following <code>test.properties</code> file:

<pre>
  #any comment here
  #Sat Mar 28 12:42:27 MDT 2020
  two=2
  one=1
</pre>

<?php include "../footer.php"?>
