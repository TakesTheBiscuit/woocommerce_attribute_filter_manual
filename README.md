# woocommerce_attribute_filter_manual
Modified woocommerce attribute filter to allow users to manually apply the changes (rather than forcing a page reload)


## Discovery

In order for this 'Apply' method to work we need to understand the original woocommerce widget (legacy) work flow.

You can have many widgets on a sidebar / widget area.

Each widget has a `<form></form>` and the original implementation is/was that each individual widget is self contained - and whilst there is an option for 'or' (meaning 'multiple') this is within EACH attribute - i.e you can have many filter values per attribute - but only filtering on one attribute at a time.

The modern web user tends to apply multiple filters in one go - and reloading the page (without XHR) is painful as wordpress is *slow*.

## Plan

0. Disable `.trigger()` for submit when changing form values/attributes
1. jQuery function to inject a *new* form into the page on load - upsert
2. When someone sets an attribute on *any* widget instance insert the key & values `[]` into the injected form (from (1))
3. When (2) show an 'apply' or 'filter' button on screen
4. When apply or filter button is pushed we'll submit the form (from (1)) which should hit wp backend with all the relevant attributes and filter values (i.e many attributes. each attribute having 1 or more values `[]`)
