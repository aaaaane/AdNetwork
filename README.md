# AdNetwork

As demanded in the assignment I've connected the application to an AdNetwork considering that a real application would have hundreds of AdNetworks connected, so I optimized the given source code into a code that can be used for as many AdNetworks as you need, working always in the same standard.

First, I separated the php script coded into class Launcher that didn't belong there so, in the Launcher.php file we only have the Launcher class and its methods.
The script coded in Launcher.php is now located in a new file called "networkIntegrationCommand.php" which is the one executing all the app.

In Launcher->run() I’ve specified that more than one network name can be passed as a parameter, so it’s going to execute the request as many times as networks names are given.

I have created a factory for creating the new network classes. It instantiates the objects of the name classes given on the Launcher always based on the NetworkInterface methods.
For creating a standard that all classes may use, I’ve created two classes that are used as DTO: the first one is called SspRequest and I use it for parsing and sending the request to BaseClass which makes the petition, and the second DTO is called SspResponse, which stores the response from the CURL petition with the information we need to persist.

Finally, I use the class ResultRepository for persisting the information into Output folder.
