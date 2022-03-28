# Voxie Developer Eval - Pedro Ortiz

Vue Frontend changes
-----------
1.	Fixed axios by installing the library VueAxios.
2.	Changed selectFile method from HomeComponent, all the columns were not being placed correctly, I had to iterate the columns variable correctly by subtracting 1 from the j variable.
3.	Changed importData method from HomeComponent by adding a variable for the loop that to iterate all the columns since the custom column wasn’t being incorporated.
Laravel Backend changes
-----------
1.	Changed the import route from GET to POST as well as its path since it was pointing to the REQUEST file and not the CONTROLLER.
2.	Changes to store method of ContactController 
    a.	$column['column-'.($keyColumn + 1)] changed to $column only since the foreach method already return the corresponding value and added the $keyColumn to $columnNames as an index.
3.	Disabled timestamps inside the CustomAttribute model.
4.	Added the ability to add custom attributes in the contact controller.
