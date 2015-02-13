	<div id='footer' class='footer'>
		<div id='footer_left' style='float:left'>
			<input type="text" size="30" value="" id="footer_left_field">
		</div>
		<div id='footer_right' style='float:right;text-align:right;'>
			<input type="text" size="30" value="*" id="footer_right_field">
		</div>
		
	</div>

 <br><br>
 	<button onclick='create()' id='create_button'>Create</button>
 	<button onclick='edit()' id='edit_button' style='visibility:hidden;'>Edit</button>
 	<button onclick='print_preview()' id='print_button' style='visibility:hidden;'>Print</button>

 </div>
 <script type="text/javascript">
 	//preserves entered footer_right_field value in saved local documents
 	var footer_right_field = document.getElementById('footer_right_field')
 	if(footer_right_field.value==="*"){
 		footer_right_field.value = get_current_date()
 	}
 </script>
 	
</body>
</html>