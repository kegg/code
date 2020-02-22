<?php

$title = "February 21, 2020";

?>
<?php include "../header.php"?>

<p><a href="/2020/20200220.php">Yesterday</a> we talked about
  dates, today we're talking about xml.</p>

<p>So, what is XML? XML stands for eXtensible Markup Langugage.</p>

<p>It was the basic goto for transferring data in a format specified by onne
  party and used by others. There's no spcific way that an XML file should
  look, only that it needs to be well formatted.</p>

<p>What's a well formatted XML document look like? Well, here's an example.</p>

<pre>
  &lt;?xml version="1.0"?>
  &lt;data>
    &lt;firstName>John&lt;/firstName>
    &lt;lastName>Smith&lt;/lastName>
    &lt;phone>916-555-4418&lt;/phone>
  &lt;/data>
</pre>

<p>There ya go, that's a well formatted XML document. As you can see, each node
  has a starting and a matching end node. Simple enough right?</p>

<p>You can make <em>any</em> kind of data document using XML. For example, let's
  say you wanted files sent in a specific format, you could use XML as that goto.
  grabbing data in this way, you can ensure that you get what you need.</p>

<p>If we wanted to output the above xml, we could use Java and the
  <code>XMLStreamWriter</code> class.</p>

<pre>
  import java.io.FileNotFoundException;
  import java.io.FileOutputStream;
  import java.util.HashMap;
  import java.util.Map;

  import javax.xml.stream.XMLOutputFactory;
  import javax.xml.stream.XMLStreamException;
  import javax.xml.stream.XMLStreamWriter;

  public class WriteXml {

    public static void main(String[] args) {
      XMLOutputFactory xmlOutputFactory = XMLOutputFactory.newInstance();
      String filename = "data.xml";

      try {
        XMLStreamWriter xmlStreamWriter =
          xmlOutputFactory.createXMLStreamWriter(
          new FileOutputStream(filename), "UTF-8");

          xmlStreamWriter.writeStartDocument("UTF-8", "1.0");
          xmlStreamWriter.writeCharacters("\n");
          xmlStreamWriter.writeStartElement("data");
          xmlStreamWriter.writeCharacters("\n");

          xmlStreamWriter.writeStartElement("firstName");
          xmlStreamWriter.writeCharacters("John");
          xmlStreamWriter.writeEndElement();
          xmlStreamWriter.writeCharacters("\n");

          xmlStreamWriter.writeStartElement("lastName");
          xmlStreamWriter.writeCharacters("Smith");
          xmlStreamWriter.writeEndElement();
          xmlStreamWriter.writeCharacters("\n");

          xmlStreamWriter.writeStartElement("phone");
          xmlStreamWriter.writeCharacters("916-555-4418");
          xmlStreamWriter.writeEndElement();
          xmlStreamWriter.writeCharacters("\n");

          xmlStreamWriter.writeEndDocument();

          xmlStreamWriter.flush();
          xmlStreamWriter.close();
      } catch(XMLStreamException | FileNotFoundException e){
        e.printStackTrace();
      }
    }
  }
</pre>

<p>XML is slowly being replaced by JSON, but that's a story for another time.</p>

<?php include "../footer.php"?>
