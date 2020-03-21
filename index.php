<?php

$title = "March 21, 2020";

?>
<?php include "header.php"?>

<p><a href="/2020/20200305.php">Last time</a> we talked about
  reading text files, today we're talking about writing text files.</p>

<p>Text files are the most simplest file to have. It's plain text.
  there's no fancy document things in it. No tables, no bolded
  elements, nothing. Just plain text.</p>

<p>So, how do we best write a text file? Like the following:</p>

<pre>
  import java.io.FileWriter;
  import java.io.IOException;

  public class WriteFile {

    public static void main(String[] args) {
      try {
        FileWriter myWriter = new FileWriter("myfile.txt");
        myWriter.write("Hello World!");
        myWriter.close();
      } catch (IOException e) {
        System.out.println("An error occurred.");
        e.printStackTrace();
      }
    }
  }
</pre>

<?php include "footer.php"?>
