if ( $('[name="number"]').length > 0 )
{
	var self = $('[name="number"]');

	self.keyup(function(e)
		{
			if (e.which !== 8)
			{
				number = self.val().replace(/\s+|[^\d]+/g, '');

				formatted = number.substr(0, 3) + ' ' + number.substr(3, 3) + ' ' + number.substr(6,4);

				self.val(formatted.trim());
			}
		});
}