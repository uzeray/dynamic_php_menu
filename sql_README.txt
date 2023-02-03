. Creating an menu_item db table on phpmyadmin, we are determining to
columns id, parent_id, item_label and item_link

*id => will auto increment and primary key we will not
  	assing something it, will automaticaly increased.

*parent_id => most important column is that one, because we will
	set our menu categories by that number and we will assign to
	which menu item will be dropdown and will take in sub items, as
	column Kunstler for normal label will be 0 and for Kunstler will be
	1 because we will draw it as dropdown menu.

*item_label => which is the display on menu item name like Home or Contact.

*item_link => we can determine it as item label or an other words because
	directory will assing in .htaccess file and which keyword you want to use
	for create directory you can assign as it.