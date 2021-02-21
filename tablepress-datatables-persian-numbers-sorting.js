jQuery.extend(jQuery.fn.dataTableExt.oSort, {

	"ezpz-persian-numbers-pre": function (a) {
		function toEnglishNumber(strNum) {
			var pn = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"];
			var en = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
			var cache = strNum;
			for (var i = 0; i < 10; i++) {
				var regex_fa = new RegExp(pn[i], 'g');
				cache = cache.replace(regex_fa, en[i]);
			}
			return cache;
		}

		return parseFloat(toEnglishNumber(a))
	},

	"ezpz-persian-numbers-asc": function (a, b) {
		return ((a < b) ? -1 : ((a > b) ? 1 : 0))
	},

	"ezpz-persian-numbers-desc": function (a, b) {
		return ((a < b) ? 1 : ((a > b) ? -1 : 0))
	}
});