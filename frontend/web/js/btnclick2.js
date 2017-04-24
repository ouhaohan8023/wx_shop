/**
 * Created by ouhaohan on 17/4/23.
 */
$(document).ready(function(){
	$("input").click(function(){
		var id = $(this).attr("id");
		$.ajax
		({
			cache: false,
			async: false,
			type: 'post',
			url: "sdata?id="+id,
			success: function (data) {
				$(".qwe").html('');
				if(data == '000'){
					$(".qwe").html('此分类下暂无商品');
				}else{
					var myobj=eval(data);
					//alert(myobj);
					for(var i=0;i<myobj.length;i++){
						$(".qwe").append('<div class="col-xs-6 ppp" style="padding: 2px"><a href="sec?id='+myobj[i].s_id+'"><img src="'+myobj[i].s_f_pic+'" class="img-responsive" style="padding:1px;border:#FFFAF0 solid 1px"><div style="text-align: center">'+myobj[i].s_name+'</div></a></div>')
					}
				}
			}
		});
	});
});