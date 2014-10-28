var AppModules = function() {
	var modules = new Array();

	return {
		insert : function(module) {
			modules.push(module);
		},
		count : function() {
			return modules.length;
		},
		get : function(index) {
			if (index < 0 || index >= this.count ) {
				return;
			}

			return modules[index];
		}
	};
}();

var CircularList = function(objs) {
	this.index = 0;
	this.length = objs.length;

	this.get = function() {
		if(this.index == this.length) {
			this.index = 0;
		}
		var obj = objs[this.index++];
		return obj;
	};
};

//ToDo :: do you know what we are trying to do here?
//basically, all of the interface of admin, is under a link,
//we instead of hard coding that link-name, we are encoding it
//inside a function, so that we can change it very easily later.
//now again, is this the best way to do it?
var AdminBase = "";
function getAdminUrl(path) {
	return AdminBase+path;
}


var SessionCache = function() {
	return {
		set : function(key,value,expire_at) {
			//ToDo :: do better data-validation for parameters
			sessionStorage.setItem(key,value);
		},
		get : function(key) {
			return sessionStorage.getItem(key);
		}
	};
}();