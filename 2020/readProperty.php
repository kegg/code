
<?php

$title = "April 02, 2020";

?>
<?php include "../header.php"?>

<p>First the properties file we'll be loading.</p>

<pre>
  greeting=Hello World
</pre>

<p>Now we load the file and output a value to the screen.</p>

<pre>
  import java.io.FileInputStream;
  import java.io.IOException;
  import java.io.InputStream;
  import java.util.Properties;

  public class Property {

    public static void main(String[] args) {
      try (InputStream input = new FileInputStream("file.properties")) {

        Properties prop = new Properties();

        prop.load(input);

        System.out.println(prop.getProperty("greeting"));

      } catch (IOException ex) {
          ex.printStackTrace();
      }
    }
  }
</pre>

<?php include "../footer.php"?>
