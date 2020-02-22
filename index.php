<?php

$title = "February 22, 2020";

?>
<?php include "header.php"?>

<p><a href="/2020/20200221.php">Yesterday</a> we talked about
  XML, today we're talking about <em>reading</em> XML.</p>

<p>Let's start with the following XML document, and read it via SAX.</p>

<pre>
  &lt;?xml version="1.0"?>
  &lt;data>
    &lt;firstName>John&lt;/firstName>
    &lt;lastName>Smith&lt;/lastName>
    &lt;phone>916-555-4418&lt;/phone>
  &lt;/data>
</pre>

<p>There are two ways to read in an XML document, SAX or through the DOM.
  I personally prefer SAX as it reads it line by line, element by element. The
  DOM is reading in the entire document and parsing it from there. I suppose
  if it is a small document, the DOM is fine. But what if you get several thousand
  elements in an xml document? What do you do then? Yep, that's why I prefer SAX.</p>

  <p>Here's a simple way to read it using SAX.</p>

  <pre>
    import javax.xml.parsers.SAXParser;
    import javax.xml.parsers.SAXParserFactory;
    import org.xml.sax.Attributes;
    import org.xml.sax.SAXException;
    import org.xml.sax.helpers.DefaultHandler;

    public class Test {

      public static void main(String[] args) {
        try {
          SAXParserFactory factory = SAXParserFactory.newInstance();
          SAXParser saxParser = factory.newSAXParser();

          DefaultHandler handler = new DefaultHandler() {

          boolean bFirstName = false;
          boolean bLastName = false;
          boolean bPhone = false;

          public void startElement(String uri, String localName, String qName,
            Attributes attributes) throws SAXException {

            if (qName.equalsIgnoreCase("firstname")) {
              bFirstName = true;
            }

            if (qName.equalsIgnoreCase("lastname")) {
              bLastName = true;
            }

            if (qName.equalsIgnoreCase("phone")) {
              bPhone = true;
            }
          }

          public void endElement(String uri, String localName, String qName)
            throws SAXException {

            System.out.println("End Element: " + qName);
          }

          public void characters(char ch[], int start, int length)
            throws SAXException {

            if (bFirstName) {
              System.out.println("First Name: " + new String(ch, start, length));
              bFirstName = false;
            }

            if (bLastName) {
              System.out.println("Last Name: " + new String(ch, start, length));
              bLastName = false;
            }

            if (bPhone) {
              System.out.println("Phone: " + new String(ch, start, length));
              bPhone = false;
            }
          }
        };

        saxParser.parse("file.xml", handler);

        } catch (Exception e) {
          e.printStackTrace();
        }
      }
    }
  </pre>

  <p>Here's the result that we get:</p>

  <pre>
  First Name: John
  End Element: firstName
  Last Name: Smith
  End Element: lastName
  Phone: 916-555-4418
  End Element: phone
  </pre>

<?php include "footer.php"?>
