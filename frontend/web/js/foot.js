/**
 * Created by ouhaohan on 17/4/23.
 */
$(document).ready(function(){
	var input = $('#input').val();
	var s_id = $('#s_id').val();
	input = parseInt(input);//强制转换int
	$('#foot1,#foot2').click(function(){
		//alert(111);
		$('#fade').slideDown();

	});

	if(input == 0){
		$('.less').attr('disabled',true);
	}

	$('.less').click(function(){
		//alert(input);
		if(input == 0){
			$('.less').attr('disabled',true);
		}else{
			input = input - 1;
			$('.input').val(input);
		}
	});

	$('.more').click(function(){
		if(input != 0){
			$('.less').removeAttr('disabled');
		}
		input = input + 1;
		$('.input').val(input);
	});

	$('#sub').click(function(){

		//self.location = "order?id="+s_id+"&input="+input;
		//self.location = "https://open.weixin.qq.com/connect/oauth2/authorize?appid="++"&redirect_uri=http%3A%2F%2Fnba.bluewebgame.com%2Foauth_response.php&response_type=
		//code&scope=snsapi_userinfo&state=STATE#wechat_redirect "
	});



});