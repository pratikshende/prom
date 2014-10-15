var Status_model = Backbone.Model.extend({
	defaults : {
		level: "",
		message: ""
	}
});

var Status_coll = Backbone.Collection.extend({
});

var StatusView = Backbone.View.extend({
	initialize : function() {
		this.$el = this.$("#status_bar");
		this.collection = new Status_coll;
		this.timeouts = new Array();

		var context = this;
		this.collection.on("add",function(data){

			if (data.attributes.level == "success") {
				context.$("#container").append(context._success({"message" : data.attributes.message}));

				var timeout = window.setTimeout(function(){
					context.$("#container #success").animate({
						opacity:0
					},1000,function(){
						context.$("#container #success").remove();
					});
				},3000);

				context.timeouts.push(timeout);

			} else if(data.attributes.level == "fail") {

				/* so basically, here, we append the message of failure by taking the element from template
				   after the message is displayed, we set a timeout.
				   which will makie inivisible this message after 3 seconds, in 1 second.
				   and on completion of animation, will remove the elemnt itself
				*/
				context.$("#container").append(context._fail({"message" : data.attributes.message}));
				
				var timeout = window.setTimeout(function(){
					context.$("#container #fail").animate({
						opacity:0
					},1000,function(){
						context.$("#container #fail").remove();
					});
				},3000);

				context.timeouts.push(timeout);

			} else if (data.attributes.level == "processing") {
				context.$("#container").append(context._success({"message" : data.attributes.message}));
			}
		});

		this.collection.on("reset",function(data){
				for(var i in context.timeouts) {
					clearTimeout(context.timeouts[i]);
				}
				context.timeouts = new Array();
				context.$("#container").html("");
		});

		this.collection.on("reset",function(){
			context.$("#container").html("");
		});
	},
	_success: _.template($("#tmpl_status_bar_success").html()),
	_fail: _.template($("#tmpl_status_bar_fail").html()),
	_default: _.template($("#tmpl_status_bar_default").html()),
	add_status: function(level,message){
			this.collection.reset();
			this.collection.add([new Status_model({"level":level,"message":message})]);
	},
	/* ToDo :: Add some animation as well to the status showing. some fade in or fade out etc. */
});