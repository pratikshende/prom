var Car_specs = Backbone.Model.extend({
	defaults : {
		carname	: "",
		accelerationskidccontrolasr	: "",
		activerolloverprotectionarp	: "",
		adaptivebrakelightsflashing	: "",
		adaptivedampingsystemads	: "",
		adaptivehighbeamassisthsa	: "",
		against	: "",
		air_qualitysensor	: "",
		airbags	: "",
		airconditioner	: "",
		alloywheels	: "",
		alternatormanagementsystemams	: "",
		am_fmradio	: "",
		anti_lockbrakingsystemabs	: "",
		anti_slipregulationasr	: "",
		anti_theftalarm	: "",
		appearancerating	: "",
		approachangledegrees	: "",
		ashtray	: "",
		attentionassist	: "",
		audibleheadlight_onreminder	: "",
		autodimminginsiderearviewmirror	: "",
		automaticemergencyunlock	: "",
		automaticstart_stopfunction	: "",
		auxcompatibility	: "",
		averagefuelconsumption	: "",
		averagespeed	: "",
		batteryrundownprotection	: "",
		bluetoothcompatibility	: "",
		body	: "",
		body_colouredbumpers	: "",
		bodycoloredradiatorgrille	: "",
		bodycoloredtailgatehandle	: "",
		bodycoloureddoorhandles	: "",
		bodycolouredoutsidemirrors	: "",
		bodytype	: "",
		bootspace	: "",
		bootspacefoldedrearseats	: "",
		borexstroke	: "",
		brakeassist	: "",
		brakeenergyregeneration	: "",
		brakes	: "",
		cabinfilter	: "",
		cdplayer	: "",
		centrallocking	: "",
		centreconsolewithcupholder	: "",
		child_protectiondoorlocks	: "",
		childseatmountingprovisions	: "",
		chromedoorhandles	: "",
		chromeexhaustpipe	: "",
		chromefrontgrille	: "",
		chromeinsidedoorhandles	: "",
		chromeinsiderearviewmirror	: "",
		chromerearlicensegarnish	: "",
		chromewindowsash	: "",
		cigarettelighter	: "",
		clutchfootrest	: "",
		clutchlocksystem	: "",
		co2emissionsing_km	: "",
		coathooks	: "",
		collapsiblesteeringcolumn	: "",
		comfor_trating	: "",
		compressionratio	: "",
		corneringbrakecontrolcbc	: "",
		corneringlightfunction	: "",
		cornertractioncontrolctc	: "",
		countryofassembly	: "",
		countryofmanufacture	: "",
		crawlcontrol	: "",
		crosswindassist	: "",
		cruisecontrol	: "",
		crumplezones	: "",
		darknesssensingheadlamps	: "",
		daynightinsiderearviewmirror	: "",
		departureangledegrees	: "",
		dewpointsensor	: "",
		digitalclock	: "",
		distancetoempty	: "",
		doorajarwarning	: "",
		doorblackouttapes	: "",
		doorscuffplates	: "",
		downhillspeedregulationdsr	: "",
		driverseatadjustment	: "",
		driversidestorageshelf	: "",
		drivetrain	: "",
		drivingmodes	: "",
		drlsdaytimerunninglights	: "",
		dualhorns	: "",
		dualtoneinteriors	: "",
		dvdplayback	: "",
		dynamicstabilitycontroldsc	: "",
		ecoassistsystem	: "",
		electricallyadjustablefrontseatsmemorypackage	: "",
		electronicbrakedistributionebd	: "",
		electronicstabilityprogramesp	: "",
		emissionstandard	: "",
		enginedescription	: "",
		enginedisplacement	: "",
		engineimmobilizer	: "",
		enginestart_stopbutton	: "",
		fabricupholstry	: "",
		featuresrating	: "",
		first_aidkit	: "",
		foldingrearseats	: "",
		followmehomeheadlamps	: "",
		footwelllighting	: "",
		for_	: "",
		fourkmphimpactprooffrontandrearbumpers	: "",
		frontbrakes	: "",
		frontbucketseats	: "",
		frontcentrearmrest	: "",
		frontdoormappockets	: "",
		frontfoglights	: "",
		frontheadrestadjustable	: "",
		frontseatbackpockets	: "",
		frontseatbeltpre_tensioner	: "",
		frontseatbelts	: "",
		frontsuspension	: "",
		fronttrack	: "",
		fueltankcapacity	: "",
		fueltype	: "",
		fullwheelcaps	: "",
		gearshiftindicator	: "",
		glassembeddedantenna	: "",
		glovebox	: "",
		gloveboxcooling	: "",
		gpsnavigationsystem	: "",
		grossvehicleweight	: "",
		hands_freebluetooth	: "",
		headlampcleaningsystem	: "",
		headlightleveller	: "",
		headlightwasher	: "",
		headrestraint	: "",
		headroom	: "",
		heads_updisplay	: "",
		heat_reflectingwindscreen	: "",
		heatedoutsiderearviewmirrors	: "",
		heatedsteeringwheel	: "",
		height	: "",
		heightadjustablefrontseatbelts	: "",
		hilldescentcontrol	: "",
		hillholdcontrol	: "",
		hillstartassistcontrol	: "",
		hvacairdistributionsettings	: "",
		hvacreartemperaturecontrolunit	: "",
		iiirdbrakelight	: "",
		illuminateddoorsillpanels	: "",
		illuminationcontrol	: "",
		illuminationlightadjuster	: "",
		instantaneousfuelconsumption	: "",
		integratedfrontheadrest	: "",
		intelligentlightsystem	: "",
		interiorroomlamp	: "",
		ipodcompatibility	: "",
		kerbweight	: "",
		keyinreminder	: "",
		keylessentry	: "",
		laminatedwindows	: "",
		lateralturningangledegrees	: "",
		leatherseats	: "",
		leathersteeringandgearknob	: "",
		ledtaillight	: "",
		length	: "",
		lluminatedglovebox	: "",
		loadsillguard	: "",
		lockingwheelnutfor_sparewheel	: "",
		lowfuelwarning	: "",
		luggagelamp	: "",
		luggagenethook	: "",
		lumbarsupport	: "",
		manufacturerwarranty	: "",
		maximumgradeabilitydegrees	: "",
		maximumpower	: "",
		maximumtorque	: "",
		microhybridtechnology	: "",
		midmultiinfor_mationdisplay	: "",
		mileagecertified	: "",
		mileagecity	: "",
		mileagehighway	: "",
		minimumgroundclearance	: "",
		mpiiiplayback	: "",
		mudflaps	: "",
		musicsystem	: "",
		musicsystemhandremote	: "",
		musicsystemharddrive	: "",
		nightviewassistplus	: "",
		no_ofcylinders	: "",
		numberofdoors	: "",
		numberofseatingrows	: "",
		numberofspeakers	: "",
		off_roadmode	: "",
		on_boardtripcomputer	: "",
		onetouchtripleturnsignal	: "",
		orvmturnindicators	: "",
		ottomanseat	: "",
		outsideairtemperaturedisplay	: "",
		outsiderear_viewmirrors	: "",
		paddleshift	: "",
		parkdistancecontrolpdc	: "",
		parkingbrakeindicator	: "",
		parkingsensors	: "",
		perfor_mancerating	: "",
		poweroutlet	: "",
		powersteering	: "",
		powertailgate	: "",
		powerwindows	: "",
		programmablesmartscreen	: "",
		programmedservicereminder	: "",
		projectorheadlamps	: "",
		puddlelights	: "",
		rainsensingwipers	: "",
		rampbreakoverangledegrees	: "",
		readinglamp	: "",
		rearacvents	: "",
		rearbrakes	: "",
		rearcentrearmrest	: "",
		reardefogger	: "",
		rearfoglights	: "",
		rearheadrestadjustable	: "",
		rearlegroom	: "",
		rearparcelshelf	: "",
		rearseatadjustmentmemorypackage	: "",
		rearseatbelts	: "",
		rearseatentertainment	: "",
		rearseatmassagesystem	: "",
		rearseatsplit	: "",
		rearseatwidth	: "",
		rearspoiler	: "",
		rearsunshade	: "",
		rearsuspension	: "",
		reartrack	: "",
		rearviewcamera	: "",
		rearwasherwiper	: "",
		remotebootrelease	: "",
		remotefuelfiller	: "",
		rolloversensor	: "",
		roofantenna	: "",
		roofrails	: "",
		runflattyreswithrunflatindicator	: "",
		safecage	: "",
		sdcardreader	: "",
		seatbackfoldabletables	: "",
		seatbeltreminder	: "",
		seatingcapacity	: "",
		seatoccupancysensor	: "",
		selflockingdoors	: "",
		sidecladding	: "",
		sideimpactbeams	: "",
		sideimpactprotectionsystemsips	: "",
		sidepillarairvents	: "",
		slidingandreclining2ndrowofseats	: "",
		smartkey	: "",
		solarglass	: "",
		sparewheel	: "",
		speed0_100kmph	: "",
		speed0_60kmph	: "",
		speedlimitwarning	: "",
		speedsensitiveauto_volume	: "",
		speedsensitivedoorautolock	: "",
		steeringadjustmentrake	: "",
		steeringadjustmentreach	: "",
		steeringmountedcallingcontrols	: "",
		steeringmountedcontrols	: "",
		sunglassholder	: "",
		sunroof	: "",
		sunvisorwithticketholder	: "",
		suspension	: "",
		tachometer	: "",
		tintedglass	: "",
		topspeedkmph	: "",
		tractioncontrol	: "",
		transmission	: "",
		tripdistance	: "",
		trunkroomlight	: "",
		tubelesstyres	: "",
		turbocharger	: "",
		turningradius	: "",
		tweeters	: "",
		twinexhausts	: "",
		tyre_inflationcompressor	: "",
		tyrepressuremonitoringsystem	: "",
		tyresize	: "",
		umbrellaholder	: "",
		under_floorstorage	: "",
		underbodycoating	: "",
		underguardunderengine	: "",
		underseattray	: "",
		usbcompatibility	: "",
		valuefor_moneyrating	: "",
		valves	: "",
		vanitymirror	: "",
		variableintermittentwipers	: "",
		vehiclestabilitymanagementvsm	: "",
		ventilatedfrontseats	: "",
		voicerecognition	: "",
		waistlinemoulding	: "",
		warningtriangle	: "",
		wheelbase	: "",
		wheels	: "",
		whiplashprotectionsystemwhips	: "",
		width	: "",
		xenonheadlamps	: "",
	},
});

var CarSpecsView = Backbone.View.extend({
	name : "car_specs",
	initialize : function() {
		this.$el = $("#car_specs_main");
		var context = this;

		this.car_specs_bulk_import = new CarSpecsBulkImport({el : this.$el});
		this.register_car_specs = new CarSpecsRegisterProfileView({el : this.$el});
		this.search_car_specs = new CarSpecsSearchView({el : this.$el});
	},
	routes : function() {
		var context = this;
		return {
			"car_specs/list_car_specs"   : function() {
				context.trigger("hide_everyone");
				context.open_list_car_specs();
			},
			"car_specs/register_car_specs" : function() {
				context.trigger("hide_everyone");
				context.open_register_car_specs();
			},
			"car_specs/register_car_specs/bulk" : function() {
				context.trigger("hide_everyone");
				context.open_register_car_specs_bulk();
			},
		}
	},
	open_list_car_specs : function() {
		this.search_car_specs.show();
	},
	open_register_car_specs : function() {
		this.register_car_specs.show();
	},
	open_register_car_specs_bulk : function() {
		this.car_specs_bulk_import.show();
	},
	hide_all : function() {
		this.$("#home").hide();
		this.search_car_specs.hide();
		this.register_car_specs.hide();
		this.car_specs_bulk_import.hide();
	}
});

var CarSpecsBulkImport = Backbone.View.extend({
	initialize : function() {
		this.$el = this.$("#car_specs_bulk_import");
		this.to_process_file = "";
		this.process_status = 0;

		var context = this;
		this.$("#excel_upload").fileupload({
			dataType : 'json',
			url      : getAdminUrl('sis/uploadExcelFile'),
			type     : 'POST',
			done     : function(event, data) {
				var parsed = data._response.result;

				if (typeof(parsed.error)!=="undefined") {
					context.trigger("file_upload","failed");
				} else {
					context.toggle_upload_btn("off");
					context.toggle_process_btn("on");

					context.fill_file_name(parsed.original_file);
					context.to_process_file = parsed.new_file;

					context.trigger("file_upload","success");
				}
			},
			progressall : function(event, data) {
				var progress = parseInt(data.loaded / data.total * 100, 10);
				context.$("#upload_progress").css('width',progress + '%');
			}
		});

		this.$("#excel_upload").on("fileuploadsubmit",function(e,data) {
			data.formData = {_t: $("#_t").val()};
			context.trigger("file_upload","processing");
		});

		this.$("#upload_btn").click(function(){
			context.$("#excel_upload").trigger("click");
		});

		this.reset();
	},
	fill_file_name : function(file_name) {
		this.$("#excel_name").html("Uploaded File : " + file_name);
	},
	toggle_upload_btn : function(toggle) {
		if(toggle == "off") {
			this.$("#upload_btn").attr("disabled","disabled");
		} else if(toggle == "on"){
			this.$("#upload_btn").removeAttr("disabled");
		}
	},
	toggle_process_btn : function(toggle) {
		if(toggle == "off") {
			this.$("#process_btn").attr("disabled","disabled");
		} else if(toggle == "on") {
			this.$("#process_btn").removeAttr("disabled");
		}
	},
	events : {
		"click #process_btn" : "process_file"
	},
	clear_results : function() {
		this.$("#upload_results").html("");
	},
	reset : function() {
		this.clear_results();
		this.$("#upload_btn").removeAttr("disabled");
		this.$("#process_btn").attr("disabled","disabled");
	},
	show : function() {
		this.$el.show();
	},
	hide : function() {
		this.$el.hide();
	}
});

var CarSpecsRegisterProfileView = Backbone.View.extend({
	initialize : function() {
		this.$el = this.$("#register_car_specs");
	},
	show : function() {
		this.$el.show();
	},
	hide : function() {
		this.$el.hide();
	}
});

var CarSpecsSearchView = Backbone.View.extend({
	initialize : function() {
		this.$el = this.$("#list_car_specs");
	},
	show : function() {
		this.$el.show();
	},
	hide : function() {
		this.$el.hide();
	}
});

//Module Registration
AppModules.insert(CarSpecsView);