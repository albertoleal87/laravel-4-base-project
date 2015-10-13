<script type="text/javascript">
	
	// variables de la aplicacion
	var app = {
		'lang' : '<?php echo Config::get("app.locale"); ?>',
	}

	// funcion para detectar si es un dispositivo mobil
	function isMobile(){
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
			return true;
		}else{
			return false;
		}
	}

	// DOCUMENT READY FUNCTION
	$(document).ready(function(){
		
		$(window).bind("load resize", function() {
			topOffset = 50;
			width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
			if (width < 768) {
				$('div.navbar-collapse').addClass('collapse');
				topOffset = 100; // 2-row-menu
			} else {
				$('div.navbar-collapse').removeClass('collapse');
			}

			height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
			height = height - topOffset;
			if (height < 1) height = 1;
			if (height > topOffset) {
				$("#page-wrapper").css("min-height", (height) + "px");
			}
		});
		
		// eventos para mobiles
		if(isMobile()){
			// menu izquierdo para dispositivos mobiles
			$(".toggle-left-menu").click(function(){
				$(this).next('.toggle-item').toggle(500);
			});

			// menu superior para dispositivos mobiles
			$(".toggle-top-menu").click(function(){
				$(".dropdown-menu").not($(this).find('.dropdown-menu')).hide();
				$(this).find('.dropdown-menu').toggle(500);
			});

		}else{

			// eventos para abrir menu izquierdo
			$(".toggle-left-menu").on({
				'mouseenter':function() { 
					$(this).next('.toggle-item').stop(true, true).slideDown(500);
				},
			});

			// evento para cerrar menu iquierdo 
			$('#side-menu').on({
				'mouseleave':function() {
					$('.toggle-item').stop(true, true).slideUp(200);
				}
			});

			// eventos para menu superior
			$('.toggle-top-menu').on({
				'mouseenter':function(){ 
					$(this).find('.dropdown-menu').stop().slideDown(500);
				},
				'mouseleave':function(){
					$(this).find('.dropdown-menu').stop().slideUp(200);
				}
			});

		}

		// convertir todos los title a tooltip
		$('[title]').tooltip();

		// convertir los que tengan la clase data-table a DataTable
		if(app.lang == 'es'){
			$('.data-table').DataTable({"language": {"url": "public/js/dataTables.Spanish.json"}});
		}else{
			$('.data-table').DataTable();
		}	

		// confirmación para eliminar registros
		$('.confirm-delete').on( "click", function() {
			var currentForm = $(this).closest('form');
			bootbox.confirm({
				title: '<?php echo trans("forms.confirm_delete_title") ?>',
				message: '<?php echo trans("forms.confirm_delete_message") ?>',
				buttons: {
					'cancel': {
						label: '<?php echo trans("forms.confirm_delete_btn_cancel") ?>',
						className: 'btn btn-default'
					},
					'confirm': {
						label: '<?php echo trans("forms.confirm_delete_btn_delete") ?>',
						className: 'btn btn-danger'
					}
				},
				callback: function(result) {
					if (result) {
						currentForm.submit();
					}
				}
			});
		});

	});

</script>
