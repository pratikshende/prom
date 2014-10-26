var Service_center = Backbone.Model.extend({
	defaults: {
		"name" : "",
		"address"  : "",
	}
});


var Service_centers = Backbone.Collection.extend({
	model : Service_center,
	url: '/sci/service_center',
	searchUrl : '/sci/search',
	search : function(call_context, collection, name) {
		jQuery.ajax({
			url : this.searchUrl+"/"+name,
		}).done(function(response) {
			var response_obj = JSON.parse(response);
			console.log(response_obj);
		}).fail(function(rseponse) {
			console.log("fail");
		});
	}
});

var ServiceCenterSearchView = Backbone.View.extend({
	initialize : function() {
		this.$el = this.$("#search_service_center");
	},
});

var SciView = Backbone.View.extend({
	name : "sci",
	initialize : function() {
		this.$el = $("#sci_main");
		var context = this;

		this.register_service_center = new ServiceCenterRegisterView({ el : this.$el });
		this.search_service_center = new Service_centers;
	},
	routes : function() {
		var context = this;
		return {
			"" : function() {
				 
			},
			"sci/home"  : function() {
				context.open_home();
			},
			"sci/list_service_center" : function() {
				context.open_list_service_center();
			},
			"sci/register_service_center" : function() {
				context.open_register_service_center();
			}
		}
	},
	open_home : function() {
		this.trigger("hide_everyone");
		this.$("#home").show();
	},
	open_register_service_center : function() {
		this.trigger("hide_everyone");
		this.register_service_center.show();
	},
	open_list_service_center : function() {
		this.trigger("hide_everyone");
		this.$("#list_service_center").show();
	},
	hide_all : function() {
		this.$("#home").hide();
		this.$("#list_service_center").hide();
		this.$("#register_service_center").hide();
	}
});

var ServiceCenterRegisterView = Backbone.View.extend({
	initialize : function() {
		this.$el = this.$("#register_service_center");

	},
});

//Module Registration
AppModules.insert(SciView);
