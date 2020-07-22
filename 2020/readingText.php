<?php

$title = "March 05, 2020";

?>
<?php include "../header.php"?>

<p>Text files are the most simplest file to have. It's plain text.
  there's no fancy document things in it. No tables, no bolded
  elements, nothing. Just plain text.</p>

<p>So, how do we best read a text file? There's several ways to
  do this. I don't know which way is quickest. I'm still learning</p>

<pre>
  import java.io.IOException;
  import java.nio.file.Files;
  import java.nio.file.Path;
  import java.nio.file.Paths;
  import java.util.List;

  public class ReadAll {

    public static void main(String[] args) {
      StringBuilder sb = new StringBuilder();

      Path path = Paths.get("file.txt");
      try{

        List<String> contents = Files.readAllLines(path);

        for(String content:contents){
          sb.append(content);
          sb.append("\n");
        }

        }catch(IOException ex){
        ex.printStackTrace();
      }

      System.out.println(sb.toString());
    }

  }
</pre>

<p>To run this, create a file with the name file.txt and
  add some text. Compile and run the program.</p>

<?php include "../footer.php"?>
