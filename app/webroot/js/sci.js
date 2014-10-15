
$(function() {

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

	var AppRouter = Backbone.Router.extend({
		routes : {
			"home"   : "home",
			"list_service_center" : "list_service_center",
		},
		home: function() {
			window.app.appview.open_home();
		},
		list_service_center : function() {
			window.app.appview.open_list_service_center(),
		}
	});

	var AppView = Backbone.View.extend({
		initialize : function() {
			this.$el = $("sci_main");
			this.new_services = new Service_centers;
		},
		render : function() {
			alert("render what");
		},
		events: {
			"click #" : "hello_bol",
		},
		open_home : function() {
			this.$("#home").show();
			this.$("#list_service_center").hide();
		},
		open_list_service_center : function() {
			this.$("#list_service_center").show();
			this.$("#home").hide();
		}
	});
	window.app = {};
	var App = new AppView;
	window.app.approuter = new AppRouter;
		// ToDo :: Consider turning on History API
		//Backbone.history.start({pushState: true, root: "/de/sis/home/"});
		Backbone.history.start();
	});
});