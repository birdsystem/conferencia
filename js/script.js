/**
 * ownCloud - conferencia
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Guilherme Gomes <birdsystem115@gmail.com>
 * @copyright Guilherme Gomes 2015
 */
function video(){
};
(function ($, OC) {

	$(document).ready(function () {
		$('#hello').click(function () {
		
					
	});           


		$('#echo').click(function () {
			var url = OC.generateUrl('/apps/conferencia/echo');
			var data = {
				echo: $('#echo-content').val()
			};

			$.post(url, data).success(function (response) {
				$('#echo-result').text(response.echo);
			});

		});
	});

})(jQuery, OC);

