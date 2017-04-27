# Before-Checkout-Fields
Display content before the conditional checkout fields in WooCommerce

This plugin was created as an example to show how to add content before the checkout fields or even before specific fields on your checkout page.

The cwcfp_before_checkout_fields hook allows you to add whatever content you want before all of the conditional checkout fields. In the example, we're putting a text heading that says "Childrens Information". This could be whatever you want - an image, other text, links, etc.

The cwcfp_before_checkout_fields_grouping hook allows you to add whatever content you want before a specific conditional field. In the example, the user created two fields - one for English speakers and another for Spanish speakers. 

They also set the fields to be repeatable. In the example, field 1 is for English speakers, and will output "Child 1" before the first instance of the field, "Child 2" before the second instance of the field, etc. Field 2 is for Spanish speakers, and will output "Niño 1" before the first instance of the field, "Niño 2" before the second instance of the field, etc.

Following that example, if you have several fields that are for English speakers, you would make sure that field 1's sort order is the lowest number (1), and all of the other English fields have a incrementing sort order from there (2, 3, 4, etc.). For the group of Spanish fields the first field (in this example field 2) would need a sort order that is higher than the last English field. The remaining Spanish fields would have an incrementing sort order from there (6, 7, 8, etc.).

The use cases can be for any sort of grouping you can think of. Maybe you sell season passes and single day passes but require different information for each type of pass. Maybe you are selling tickets to your workshop or classes, but require different information for each class.
