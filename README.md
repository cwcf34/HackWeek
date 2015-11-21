# HackWeek
This is our week long project.

Created by Cody Cameron and Greg Halligan

This project takes the user submitted form to create a playlist using just a single word. PHP grabs the content from the textbox, stores it in a cookie, then puts the cookie on the end of a Spotify curl request. The curl request returns a very large XML document containing all of Spotify's info related to a certain word. (Searches can be done a lot of different ways, but this is how we went about it.) It then starts searching the  XML document and takes the href values from the track tags. Next, it breaks up the href strings and takes the unique identifier from the end of the string. It then puts that unique identifier at the end of a Spotify embbeded URL and puts it in an iFrame.
Note: To see your playlist, click on the "Your OneWord" button after submission.


WARNING!!!!!

Do not try to use more than one word. It is called OneWord for a reason!
