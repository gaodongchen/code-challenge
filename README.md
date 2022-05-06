# Code Challenge
see [Document](https://www.wolai.com/cUoqfoQSb9bnAMQfYaXuGr)

# Install

## Requires
 - PHP 7.4^
 - MySQL 5.7^

```bash
$ yii migrate
```

Open http://hostname/index.php

# Demo

Open [Code Challenge Demo](http://gaodongchen.cn:8083)

# TODO
 - [x] Implement a simple Supplier List Page (View/Update/Delete are NOT needed) by using Yii's super powerful GridView widget.
 - [x] Supplier structure looks like the below and please mock some random data by yourself.
 - [x] name and code - support partial matching
 - [x] t_status - a dropdown including all and each status
 - [x] A user can multi-select suppliers, and of course, will have a convenient way to select all suppliers on the current page.
 - [x] After having some rows selected, the user can click an "Export" button to download all selected rows as a CSV file. And of course, this should correctly handle the "select across all pages"
 - [ ] If a user selects all rows, he will be prompted and have a way to select all filtered rows across all pages and cancel. The following UX is for your reference. You can do it in your own way.
 - [ ] id - support
