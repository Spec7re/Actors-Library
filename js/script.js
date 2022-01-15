	var Actors = {

		init: function( config ) {

			this.config = config;

			this.bindEvents();
		},

		bindEvents: function() {
			this.config.letterSelection.on('change', this.fetchActors);

			console.log('bindEvents');
		},

		fetchActors: function() {

			var self = Actors;
			console.log('In fetchActors');

			$.ajax({
				url: 'index.php',
				type: 'POST',
				data: self.config.form.serialize(),
				dataType: 'json',
				success: function ( results ){
					if ( results[0] ) {
						self.config.actorsList.append( self.config.actorListTemplate( results) );
					} else {
						self.config.actorsList.append('<li>Nothing returned.</li>');
					}
				})
			console.log('After Ajax')
		}
	};

	Actors.init({

		buttonSelection: $('#submit'),
		letterSelection: $('#letter'),
		form: $('#actor-selection'),
	});
