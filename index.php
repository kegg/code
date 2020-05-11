<?php

$title = "May 19, 2020";

?>
<?php include "header.php"?>

<p><a href="/2020/20200402.php">Last time</a> we talked about
  reading prooperty files. Today let's store the property information
  xml format.</p>

<p>We'll take the previous example and make one change to it. Instead of
  calling <code>store</code>, we'll call <code>storeToXML</code>.</p>

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
        props.storeToXML(new FileOutputStream("test.properties"),
          "any comment here");
      }

    }
  </pre>

<?php include "footer.php"?>
