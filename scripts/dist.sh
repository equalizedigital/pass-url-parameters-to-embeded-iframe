#Remove the contents of the dist folder
rm -frd ./dist
mkdir ./dist

#Run the wp script that produces the zip
npx wp-scripts plugin-zip

# unzip the zip into its own folder so we can zip that
unzip pass-url-parameters-to-embeded-iframe.zip -d ./dist/pass-url-parameters-to-embeded-iframe

# plugin-zip includes package.json which is not needed for the plugin, so remove.
rm ./dist/pass-url-parameters-to-embeded-iframe/package.json

#remove the original zip
rm pass-url-parameters-to-embeded-iframe.zip

#move into the dist folder and zip the plugin's folder
cd ./dist
zip -r pass-url-parameters-to-embeded-iframe.zip ./pass-url-parameters-to-embeded-iframe

#cleanup and drop back into the original dir
rm -r ./pass-url-parameters-to-embeded-iframe
cd ..
