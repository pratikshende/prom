/* ToDo :: Okay, now this router is application-wide. Therefore, should be shifted to some other place*/
var AppRouter = Backbone.Router.extend({
	routes : {
		//we are binding all the routes, after we make an AppRouter object
	},
});

function checkConnection() {
	jQuery.ajax({url : getAdminUrl('check/c?_='+Math.random()),method:"GET"})
		.fail(function(){
				window.onceoffline = 1;
				window.app.appview.statusview.add_status("fail","Seems you are offline now! Please connect to the internet");
			})
		.success(function(){
			if(window.onceoffline == 1) {
				window.app.appview.statusview.add_status("success","Great! You are now connected to internet");
				window.onceoffline = 0;
			}
		});
}

//*****************************************************************************

/* ToDo :: somehow put this thing into a separate file. so that its more maintainable */
var AppView = Backbone.View.extend({
	initialize: function() {
		this.$el = $("#application");

		this.statusview = new StatusView({el : this.$el});

		var context = this;
		for (var i=0;i<AppModules.count();i++) {
			var module = AppModules.get(i);
			this["view"+i] = new module({el : this.$el});
			this["view"+i].statusview = this.statusview;

			this["view"+i].on("hide_everyone",function(){
				context.hide_all();
			});		

			var all_routes = this["view"+i].routes();

			for(var index in all_routes) {
				window.app.approuter.route(index,"some_name",all_routes[index]);
			}
		}
		setInterval(checkConnection,2000);

		//ToDo :: make the one with pushstate available
		Backbone.history.start();
	},
	hide_all : function() {
		$("#top").hide();

		for (var i=0;i<AppModules.count();i++) {
			var module = AppModules.get(i);
			this["view"+i].hide_all();
		}
	}
});


window.app = {};
window.app.approuter = new AppRouter;
window.app.appview = new AppView;

