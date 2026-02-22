# REBORN CFW'S ONLINE SERVICES BRIDGE

## MANIFEST
- This repo was created to ensure that Reborn CFW's online services remain transparent and up-to-date.
- Collaborators of this repo can be edit all online services of Reborn CFW.
- All you need to do is find the folder for the relevant service and replace the URL on the ```index.htm``` page with the current URL. *(For example, ```y/index.htm``` for YouTube or ```store/index.htm``` for the Store.)*
- You can find examples of some technical web pages in the ```.examples/``` folder.
- Finally, please don't forget to check out the notes below.

## COLLABORATORS
- Main dev is me ;)
- [Dante](https://github.com/AlirezaM1376) from [Symbian World Telegram Group](https://t.me/symbian_world)
- [JigokuMaster](https://github.com/JigokuMaster/) from [Symbian World Telegram Group](https://t.me/symbian_world)
- [Mert](https://github.com/okyanusmert61-source) from [Symbian World Telegram Group](https://t.me/symbian_world)

## FAQS
- Why am I hosting all of Reborn CFW's online services on a dedicated server instead of migrating them to Github?
  - 1st reason: Github Pages can't run PHP files and some services are entirely PHP-based. *(see the .examples folder)*
  - 2nd reason: Some files (e.g., apps and games from the store) have licensing issues.
 
- Do you need to make any changes to the CFW files?
  - You only need to update the ```version``` value in the ```CORE\data\update\index.htm``` file each time you create a new CFW update. You don't need to make any changes to the CFW for other online services. *(See the notes for detailed information about the version value.)*

## FOLDERS
- **conntest** : Connection test server URL
- **dummy** : Dummy URL for EoL services
- **eol** : EoL alert message URL for EoL services *(for example Big Screen app)*
- **homepage** : Homepage of default browser
- **review** : Review widget URL
- **store** : Store widget URL
- **tts** : URL of ```Settings > Phone > Speech > Download languages``` option
- **update** : Update checker widget URL
- **y** : 3rd party Youtube service URL in default bookmarks and Store option in Videos app when Store app not installed.

## FILES
- **index.htm** : Reborn CFW URL in default bookmarks
- **uaprof/NN8-00r310-3G.xml** : UAProf file

## NOTES
- ConnTest URL should be: ```https://symbuzzer.github.io/reborncfw/conntest/``` not ```symbuzzer.github.io/reborncfw/conntest``` or ```http://symbuzzer.github.io/reborncfw/conntest```
- Dummy URL should be ```https://symbuzzer.github.io/reborncfw/dummy/``` not ```symbuzzer.github.io/reborncfw/dummy``` or ```http://symbuzzer.github.io/reborncfw/dummy```
- For N8, UAProf XML URL should be ```https://raw.githubusercontent.com/symbuzzer/reborncfw/refs/heads/main/uaprof/NN8-00r310-3G.xml``` in ROFS2\private\10202be9\101f8731.txt file
- For E7, UAProf XML URL should be ```https://raw.githubusercontent.com/symbuzzer/reborncfw/refs/heads/main/uaprof/NE7-00r310.xml``` in ROFS2\private\10202be9\101f8731.txt file
- Version value in ```CORE\data\update\index.htm``` file should be the same length as the value in the redirected PHP file. Please browse to the ```.examples/cfwupdatecheck.php``` file.

## ACTIVE SERVER
avalibeyaz.com/s3/*
