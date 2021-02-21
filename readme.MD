# WordPress EzPz Persian Numbers Sorting (TablePress Extension)

Sorts a column containing Farsi numbers. Farsi numbers can easily be mapped 1:1 to latin numbers - ۱ = 1, ۲ = 2, ۱۲ = 12 and so on.


## Installation

To use this, download, install, and activate the Extension like a regular WordPress plugin.

## Usage

Add the following code to the “Custom Commands” text field in the “Features of the DataTables JavaScript library” section on the “Edit” screen of the table:

```
"columnDefs": [ { "type": "ezpz-persian-numbers", "targets": [ 2, 3 ] } ]
```

The 2, 3 in that code is a zero-based list of all columns that shall be sorted as values with commas as the decimal separator. Here, 2, 3 means that the third and fourth column are sorted like this, as the counting starts with 0 for the first column.

## License
[GPL 3](https://www.gnu.org/licenses/gpl-3.0.html)