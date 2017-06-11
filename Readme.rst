Extension Manual
================
This extension is an example extension to extend the domain model operation in the TYPO3 extension `operations`_ with custom fields/properties.
`operations`_ is a TYPO3 extension to manage (firefighter,Feuerwehr) operations with detailed reports, images, used resources or vehicles, google map view for locations, slider and lightbox for images. Possibly to use it for other reportable events like THW and so on.

For using, simply fork the repository or download and modify it.

I only add a custom field "subtitle" in this example. You can add more fields to each other model if you want.
You can extend the other models in the same way. Add your custom properties to the model class, add getter and setter, extend the TCA for the new fields and adopt the templates.
If you extend another model (e.g. assistance or vehicles) you have to add a new files for the extending model classes in "Classes/Domain/Model" folder and then add the classNaming and table mapping in Configuration/TypoScript/setup.txt.

Now install the extension or clear the cache in install-Tool. This example extension ist build and tested with TYPO3 8.7.

If you have questions, use the issue tracker.

.. _operations: https://github.com/kanow/operations
.. _can be drop: http://forge.typo3.org/projects/typo3v4-official_extension_template/issues
.. _team: http://forge.typo3.org/projects/typo3v4-official_extension_template
.. _can write TypoScript: RestructuredtextHelp.html#typoscript-reference
