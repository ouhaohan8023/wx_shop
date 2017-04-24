/**
 * Created by ouhaohan on 17/4/23.
 */
$(document).ready(function(){
	$("input").click(function(){
		var id = $(this).attr("id");
		//alert(id);
		$.ajax
		({
			cache: false,
			async: false,
			type: 'post',
			//data: { aaa: "1" },
			url: "data?id="+id,
			success: function (data) {
				//alert(data);
				var myobj=eval(data);
				$(".qwe").html('');

				for(var i=0;i<myobj.length;i++){
					//alert(myobj[i].l_2_id);
					//alert(myobj[i].l_2_src);
					$(".qwe").append('<div class="col-xs-6 ppp" style="padding: 2px"><a href="sec?id='+myobj[i].l_2_id+'"><img src="'+myobj[i].l_2_src+'" class="img-responsive" style="padding:1px;border:#FFFAF0 solid 1px"><div style="text-align: center">'+myobj[i].l_2_name+'</div></a></div>')

				}
			}
		});
	});
	//$("#1").trigger("click");
});