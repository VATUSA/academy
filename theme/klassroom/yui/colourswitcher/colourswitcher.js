YUI.add('moodle-theme_klassroom-colourswitcher', function (Y) {

	// Available colours
	var COLOURS = ['blue', 'red', 'lightblue', 'green', 'yellow', 'purple'];

	/**
	 * klassroom theme colour switcher class.
	 * Initialise this class by calling M.theme_klassroom.init
	 */
	var ColourSwitcher = function () {
		ColourSwitcher.superclass.constructor.apply(this, arguments);
	};

	ColourSwitcher.prototype = {
		/**
		 * Constructor for this class
		 * @param {object} config
		 */
		initializer: function (config) {
			var i, c;
			// Attach events to the links to change colours so we can do it with
			// JavaScript without refreshing the page
			for (i in COLOURS) {
				c = COLOURS[i];
				// Check if this is the current colour
				if (Y.one(document.body).hasClass('klassroom-' + c)) {
					this.set('colour', c);
				}

				Y.all(config.div + ' .colour-' + c).on('click', this.setColour, this, c);
			}
		},
		/**
		 * Sets the colour being used for the klassroom theme
		 * @param {Y.Event} e The event that fired
		 * @param {string} colour The new colour
		 */
		setColour: function (e, colour) {
			// Prevent the event from refreshing the page
			e.preventDefault();
			// Switch over the CSS classes on the body
			Y.one(document.body).replaceClass('klassroom-' + this.get('colour'), 'klassroom-' + colour);
			// Update the current colour
			this.set('colour', colour);

			// Store the users selection (Uses AJAX to save to the database)
			M.util.set_user_preference('theme_klassroom_chosen_colour', colour);
			//document.cookie="klassroom="+colour; // cookie set for color
			//document.cookie="klassroom="+colour+"; expires="+now.toUTCString()+"; path=/";
			Y.Cookie.set("klassroom", colour, {
				expires: new Date("January 12, 2025"),
				path: "/"
			});
		}
	};
	// Make the colour switcher a fully fledged YUI module
	Y.extend(ColourSwitcher, Y.Base, ColourSwitcher.prototype, {
		NAME: 'klassroom theme colour switcher',
		ATTRS: {
			colour: {
				value: 'lightblue'
			}
		}
	});
	// Our klassroom theme namespace
	M.theme_klassroom = M.theme_klassroom || {};
	// Initialisation function for the colour switcher
	M.theme_klassroom.initColourSwitcher = function (cfg) {
		return new ColourSwitcher(cfg);
	}

}, '@VERSION@', {
	requires: ['base', 'node', 'cookie']
});