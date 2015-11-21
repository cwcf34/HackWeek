# HackWeek
This is our week long project.

Created by Cody Cameron and Greg Halligan

This project takes the request that the user makes to create a playlist using just a single word. The php grabs the content from the textbox, stores it in a cookie, then puts the cookie on the end of a Spotify curl request. That curl request returns a very large XML document. It then starts searching the document and takes the href values from the track tags. Then it breaks up the href strings and takes the unique identifier from the end of the string. It then puts that unique identifier at the end of a Spotify embbeded URL and puts it in an iFrame. To see your playlist, click on the "Your OneWord" button after submission.


WARNING!!!!!

Do not try to use more than one word. It is called OneWord for a reason!
