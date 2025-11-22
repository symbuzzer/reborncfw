# REBORN CFW'S ONLINE SERVICES REPO

## MANIFEST
- This repo was created to ensure that Reborn CFW's online services remain transparent and up-to-date.
- Collaborators of this repo can be edit all online services of Reborn CFW.
- All you need to do is find the folder for the relevant service and replace the URL on the ```index.htm``` page with the current URL. *(For example, ```y/index.htm``` for YouTube or ```store/index.htm``` for the Store.)*
- You can find examples of some technical web pages in the ```.examples/``` folder.
- Finally, please don't forget to check out the notes below.

## FOLDERS
- **changelog** : Changelog URL of Reborn updates
- **conntest** : Connection test server URL
- **dummy** : Dummy URL for EoL services
- **eol** : EoL alert message URL for EoL services *(for example Big Screen app)*
- **homepage** : Homepage of default browser
- **modules** : OTA update page for modules
- **store** : Store app's URL
- **tts** : URL of ```Settings > Phone > Speech > Download languages``` option
- **y** : 3rd party Youtube service URL in default bookmarks

## FILES
- **index.htm** : Reborn CFW URL in default bookmarks
- **uaprof/NN8-00r310-3G.xml** : UAProf file

## NOTES
- ConnTest URL should be: ```https://symbuzzer.github.io/reborncfw/conntest/``` not ```symbuzzer.github.io/reborncfw/conntest``` or ```http://symbuzzer.github.io/reborncfw/conntest```
- Dummy URL should be ```https://symbuzzer.github.io/reborncfw/dummy/``` not ```symbuzzer.github.io/reborncfw/dummy``` or ```http://symbuzzer.github.io/reborncfw/dummy```
- UAProf XML URL should be ```https://raw.githubusercontent.com/symbuzzer/reborncfw/refs/heads/main/uaprof/NN8-00r310-3G.xml``` in ROFS2\private\10202be9\101f8731.txt file
